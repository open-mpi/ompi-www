<?
$subject_val = "Re: [OMPI users] MPI_Finalize() maintains load at 100%.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 23 11:07:11 2014" -->
<!-- isoreceived="20140523150711" -->
<!-- sent="Fri, 23 May 2014 17:07:08 +0200 (CEST)" -->
<!-- isosent="20140523150708" -->
<!-- name="Iv&#195;&#161;n Cores Gonz&#195;&#161;lez" -->
<!-- email="ivan.coresg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Finalize() maintains load at 100%." -->
<!-- id="1899268029.17699006.1400857628980.JavaMail.zimbra_at_udc.es" -->
<!-- charset="utf-8" -->
<!-- inreplyto="61081636-75C6-4DFB-A532-F26C42250CB6_at_open-mpi.org" -->
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
<strong>From:</strong> Iv&#195;&#161;n Cores Gonz&#195;&#161;lez (<em>ivan.coresg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-23 11:07:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24470.php">Albert Solernou: "Re: [OMPI users] pinning processes by default"</a>
<li><strong>Previous message:</strong> <a href="24468.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>In reply to:</strong> <a href="24468.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24471.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Reply:</strong> <a href="24471.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; I assume you mean have them exit without calling MPI_Finalize ...
</span><br>
<p>Yes, thats my idea, exit some processes while the others continue. I am trying to 
<br>
use the &quot;orte_allowed_exit_without_sync&quot; flag in the next code (note that the code
<br>
is different):
<br>
<p>int main( int argc, char *argv[] )
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int myid;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (myid == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{	
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Exit P0 ...\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//With &quot;--mca orte_allowed_exit_without_sync 1&quot; this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//process should die, but not P1, P2 ... , is ok?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Imagine some important job here
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep(20);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Calling MPI_Finalize() ...\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// Process 0 maintain load at 100%.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>and the cmd:
<br>
mpirun --mca orte_allowed_exit_without_sync 1 -hostfile ./hostfile -np 2 --prefix /share/apps/openmpi/gcc/ib/1.7.2 ./a.out
<br>
<p>But it does not work, all job fails in the &quot;exit(0)&quot; call. Maybe I don't undertand your response...
<br>
<p><p>Sorry for not response in order, I have some problems with my 
<br>
e-mail receiving the Open-MPI mails. 
<br>
<p><span class="quotelev1">&gt; In my codes, I am using MPI_Send and MPI_Recv functions to notify P0 that
</span><br>
<span class="quotelev1">&gt; every other process have finished their own calculations. Maybe you cal
</span><br>
<span class="quotelev1">&gt; also use the same method and keep P0 in waiting until it receives some data
</span><br>
<span class="quotelev1">&gt; from other processes? 
</span><br>
<p>This solution was my first idea, but I can't do it. I use spawned processes and
<br>
different communicators for manage &quot;groups&quot; of processes, so the ideal behaviour
<br>
is that processes finished and died (or at least don't stay at 100% load) when
<br>
their finish their work. Its a bit hard to explain. 
<br>
<p><p><p><p>----- Mensaje original -----
<br>
De: &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;
<br>
Para: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Enviados: Viernes, 23 de Mayo 2014 16:39:34
<br>
Asunto: Re: [OMPI users] MPI_Finalize() maintains load at 100%.
<br>
<p><p>On May 23, 2014, at 7:21 AM, Iv&#195;&#161;n Cores Gonz&#195;&#161;lez &lt;ivan.coresg_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; Thanks for your response. 
</span><br>
<span class="quotelev1">&gt; I see your point, I try to change the algorithm but some processes finish while the others are still calling MPI functions. I can't avoid this behaviour. 
</span><br>
<span class="quotelev1">&gt; The ideal behavior is the processes go to sleep (or don't use the 100% of load) when the MPI_Finalize is called.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the time being maybe the fastest solution is instert a &quot;manual&quot; sleep before the MPI_Finalize.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another question, Could be possible kill some MPI processes and avoid that the mpirun fails? Or this behaviuor is impossible?
</span><br>
<p>I assume you mean have them exit without calling MPI_Finalize, so they don't block? Technically, yes, though we wouldn't recommend that behavior. You can add &quot;-mca orte_allowed_exit_without_sync 1&quot; to your cmd line (or set the mca param in your environment, etc.) and mpirun won't terminate you if a proc exits without calling MPI_Finalize. We will still, however, terminate the job if (a) a proc dies by signal (e.g., segfaults), or (b) a proc exits with a non-zero status, so you'll still have some protection from hangs.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ivan Cores
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24470.php">Albert Solernou: "Re: [OMPI users] pinning processes by default"</a>
<li><strong>Previous message:</strong> <a href="24468.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>In reply to:</strong> <a href="24468.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24471.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
<li><strong>Reply:</strong> <a href="24471.php">Ralph Castain: "Re: [OMPI users] MPI_Finalize() maintains load at 100%."</a>
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
