<?
$subject_val = "Re: [OMPI users] MPI_Finalize() maintains load at 100%.";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 24 07:56:56 2014" -->
<!-- isoreceived="20140524115656" -->
<!-- sent="Sat, 24 May 2014 11:56:52 +0000" -->
<!-- isosent="20140524115652" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Finalize() maintains load at 100%." -->
<!-- id="97C0DE73-9755-42DA-BAC5-9F74A2D2DBC9_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="D138850F-0A3E-40D1-A083-ABE0C5BD1C1E_at_open-mpi.org" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] MPI_Finalize() maintains load at 100%.<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-24 07:56:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24475.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<li><strong>Previous message:</strong> <a href="24473.php">Maxime Boissonneault: "[OMPI users] Advices for parameter tuning for CUDA-aware MPI"</a>
<li><strong>In reply to:</strong> <a href="24472.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24480.php">Iván Cores González: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry to jump in late on this thread, but here's my thoughts:
<br>
<p>1. Your initial email said &quot;threads&quot;, not &quot;processes&quot;.  I assume you actually meant &quot;processes&quot; (having multiple threads calls MPI_FINALIZE is erroneous).
<br>
<p>2. Periodically over the years, we have gotten the infrequent request to support some form of MPI progress that does not consume 100% of the CPU.  Frankly, there's never been enough demand to justify the work that it will require (remember: the common case is highest possible performance, which demands 100% of the CPU -- having a &quot;slow path&quot; and a &quot;fast path&quot; can be somewhat intrusive here, and can hurt the &quot;fast path&quot;).  FWIW: MPI_FINALIZE is just another MPI call, and it still potentially needs to make progress on MPI message passing, so it follows the same progression behavior as all other MPI calls.
<br>
<p>3. Also remember that in Open MPI, MPI_FINALIZE is likely to block, anyway, until everyone calls it.
<br>
<p>4. If have an imbalance like this (processes call MPI_FINALIZE at different times) and really can't abide 100% CPU usage, then there are a few schemes you might try to mitigate it:
<br>
<p>- use a non-blocking barrier (MPI_IBARRIER) and periodically MPI_TEST to see if everyone has reached that point -- interlacing that MPI_TEST in the middle of real work.  Once the MPI_IBARRIER request completes, everyone call MPI_FINALIZE.
<br>
<p>- use some kind of algorithm to calculate when everyone can call MPI_FINALIZE (i.e., an absolute time -- assuming all your compute nodes are NTP-synchronized).  Then do real work, but call MPI_FINALIZE at the prescribed time.
<br>
<p><p><p>On May 23, 2014, at 3:08 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...okay, good news and bad news :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good news: this works fine on 1.8, so I'd suggest updating to that release series (either 1.8.1 or the nightly 1.8.2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bad news: if one proc is going to exit without calling Finalize, they all need to do so else you will hang in Finalize. The problem is that Finalize invokes a barrier, and some of the procs aren't there any more to participate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 23, 2014, at 12:03 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll check to see - should be working
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 23, 2014, at 8:07 AM, Iv&#225;n Cores Gonz&#225;lez &lt;ivan.coresg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I assume you mean have them exit without calling MPI_Finalize ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, thats my idea, exit some processes while the others continue. I am trying to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use the &quot;orte_allowed_exit_without_sync&quot; flag in the next code (note that the code
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is different):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main( int argc, char *argv[] )
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  	MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  	int myid;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  	MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  	if (myid == 0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	{	
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 		printf(&quot;Exit P0 ...\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  		//With &quot;--mca orte_allowed_exit_without_sync 1&quot; this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  		//process should die, but not P1, P2 ... , is ok?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   		exit(0);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	 }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      	
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      //Imagine some important job here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	sleep(20);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 			
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  	printf(&quot;Calling MPI_Finalize() ...\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  	// Process 0 maintain load at 100%.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  	MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  	return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and the cmd:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --mca orte_allowed_exit_without_sync 1 -hostfile ./hostfile -np 2 --prefix /share/apps/openmpi/gcc/ib/1.7.2 ./a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But it does not work, all job fails in the &quot;exit(0)&quot; call. Maybe I don't undertand your response...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry for not response in order, I have some problems with my 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e-mail receiving the Open-MPI mails. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In my codes, I am using MPI_Send and MPI_Recv functions to notify P0 that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; every other process have finished their own calculations. Maybe you cal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; also use the same method and keep P0 in waiting until it receives some data
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from other processes? 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This solution was my first idea, but I can't do it. I use spawned processes and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different communicators for manage &quot;groups&quot; of processes, so the ideal behaviour
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is that processes finished and died (or at least don't stay at 100% load) when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; their finish their work. Its a bit hard to explain. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----- Mensaje original -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; De: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Para: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Enviados: Viernes, 23 de Mayo 2014 16:39:34
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Asunto: Re: [OMPI users] MPI_Finalize() maintains load at 100%.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 23, 2014, at 7:21 AM, Iv&#225;n Cores Gonz&#225;lez &lt;ivan.coresg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for your response. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I see your point, I try to change the algorithm but some processes finish while the others are still calling MPI functions. I can't avoid this behaviour. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The ideal behavior is the processes go to sleep (or don't use the 100% of load) when the MPI_Finalize is called.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For the time being maybe the fastest solution is instert a &quot;manual&quot; sleep before the MPI_Finalize.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Another question, Could be possible kill some MPI processes and avoid that the mpirun fails? Or this behaviuor is impossible?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I assume you mean have them exit without calling MPI_Finalize, so they don't block? Technically, yes, though we wouldn't recommend that behavior. You can add &quot;-mca orte_allowed_exit_without_sync 1&quot; to your cmd line (or set the mca param in your environment, etc.) and mpirun won't terminate you if a proc exits without calling MPI_Finalize. We will still, however, terminate the job if (a) a proc dies by signal (e.g., segfaults), or (b) a proc exits with a non-zero status, so you'll still have some protection from hangs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ivan Cores
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24475.php">Jeff Squyres (jsquyres): "Re: [OMPI users] How to run Open MPI over TCP (Ethernet)"</a>
<li><strong>Previous message:</strong> <a href="24473.php">Maxime Boissonneault: "[OMPI users] Advices for parameter tuning for CUDA-aware MPI"</a>
<li><strong>In reply to:</strong> <a href="24472.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24480.php">Iván Cores González: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
