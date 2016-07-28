<?
$subject_val = "Re: [OMPI users] MPI_Finalize() maintains load at 100%.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 15:03:28 2014" -->
<!-- isoreceived="20140523190328" -->
<!-- sent="Fri, 23 May 2014 12:03:24 -0700" -->
<!-- isosent="20140523190324" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Finalize() maintains load at 100%." -->
<!-- id="01B8E103-DB2D-4AE4-9BCF-B8540C5B3B9E_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1899268029.17699006.1400857628980.JavaMail.zimbra_at_udc.es" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-23 15:03:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24472.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Previous message:</strong> <a href="24470.php">Albert Solernou: "Re: [OMPI users] pinning processes by default"</a>
<li><strong>In reply to:</strong> <a href="24469.php">Iv&#195;&#161;n Cores Gonz&#195;&#161;lez: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24472.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Reply:</strong> <a href="24472.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll check to see - should be working
<br>
<p>On May 23, 2014, at 8:07 AM, Iv&#225;n Cores Gonz&#225;lez &lt;ivan.coresg_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I assume you mean have them exit without calling MPI_Finalize ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, thats my idea, exit some processes while the others continue. I am trying to 
</span><br>
<span class="quotelev1">&gt; use the &quot;orte_allowed_exit_without_sync&quot; flag in the next code (note that the code
</span><br>
<span class="quotelev1">&gt; is different):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main( int argc, char *argv[] )
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;    	MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    	int myid;
</span><br>
<span class="quotelev1">&gt;    	MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    	if (myid == 0)
</span><br>
<span class="quotelev1">&gt;   	{	
</span><br>
<span class="quotelev1">&gt;   		printf(&quot;Exit P0 ...\n&quot;);
</span><br>
<span class="quotelev1">&gt;    		//With &quot;--mca orte_allowed_exit_without_sync 1&quot; this
</span><br>
<span class="quotelev1">&gt;    		//process should die, but not P1, P2 ... , is ok?
</span><br>
<span class="quotelev1">&gt;     		exit(0);
</span><br>
<span class="quotelev1">&gt;   	 }
</span><br>
<span class="quotelev1">&gt;        	
</span><br>
<span class="quotelev1">&gt;        //Imagine some important job here
</span><br>
<span class="quotelev1">&gt;   	sleep(20);
</span><br>
<span class="quotelev1">&gt;   			
</span><br>
<span class="quotelev1">&gt;    	printf(&quot;Calling MPI_Finalize() ...\n&quot;);
</span><br>
<span class="quotelev1">&gt;    	// Process 0 maintain load at 100%.
</span><br>
<span class="quotelev1">&gt;    	MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;    	return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and the cmd:
</span><br>
<span class="quotelev1">&gt; mpirun --mca orte_allowed_exit_without_sync 1 -hostfile ./hostfile -np 2 --prefix /share/apps/openmpi/gcc/ib/1.7.2 ./a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But it does not work, all job fails in the &quot;exit(0)&quot; call. Maybe I don't undertand your response...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for not response in order, I have some problems with my 
</span><br>
<span class="quotelev1">&gt; e-mail receiving the Open-MPI mails. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In my codes, I am using MPI_Send and MPI_Recv functions to notify P0 that
</span><br>
<span class="quotelev2">&gt;&gt; every other process have finished their own calculations. Maybe you cal
</span><br>
<span class="quotelev2">&gt;&gt; also use the same method and keep P0 in waiting until it receives some data
</span><br>
<span class="quotelev2">&gt;&gt; from other processes? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This solution was my first idea, but I can't do it. I use spawned processes and
</span><br>
<span class="quotelev1">&gt; different communicators for manage &quot;groups&quot; of processes, so the ideal behaviour
</span><br>
<span class="quotelev1">&gt; is that processes finished and died (or at least don't stay at 100% load) when
</span><br>
<span class="quotelev1">&gt; their finish their work. Its a bit hard to explain. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----- Mensaje original -----
</span><br>
<span class="quotelev1">&gt; De: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Para: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Enviados: Viernes, 23 de Mayo 2014 16:39:34
</span><br>
<span class="quotelev1">&gt; Asunto: Re: [OMPI users] MPI_Finalize() maintains load at 100%.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 23, 2014, at 7:21 AM, Iv&#225;n Cores Gonz&#225;lez &lt;ivan.coresg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your response. 
</span><br>
<span class="quotelev2">&gt;&gt; I see your point, I try to change the algorithm but some processes finish while the others are still calling MPI functions. I can't avoid this behaviour. 
</span><br>
<span class="quotelev2">&gt;&gt; The ideal behavior is the processes go to sleep (or don't use the 100% of load) when the MPI_Finalize is called.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For the time being maybe the fastest solution is instert a &quot;manual&quot; sleep before the MPI_Finalize.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Another question, Could be possible kill some MPI processes and avoid that the mpirun fails? Or this behaviuor is impossible?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I assume you mean have them exit without calling MPI_Finalize, so they don't block? Technically, yes, though we wouldn't recommend that behavior. You can add &quot;-mca orte_allowed_exit_without_sync 1&quot; to your cmd line (or set the mca param in your environment, etc.) and mpirun won't terminate you if a proc exits without calling MPI_Finalize. We will still, however, terminate the job if (a) a proc dies by signal (e.g., segfaults), or (b) a proc exits with a non-zero status, so you'll still have some protection from hangs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Ivan Cores
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24472.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Previous message:</strong> <a href="24470.php">Albert Solernou: "Re: [OMPI users] pinning processes by default"</a>
<li><strong>In reply to:</strong> <a href="24469.php">Iv&#195;&#161;n Cores Gonz&#195;&#161;lez: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24472.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Reply:</strong> <a href="24472.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
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
