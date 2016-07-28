<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun  6 18:55:52 2006" -->
<!-- isoreceived="20060606225552" -->
<!-- sent="Tue, 6 Jun 2006 18:55:44 -0400" -->
<!-- isosent="20060606225544" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CPU use in MPI_recv" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF9AE35A_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] CPU use in MPI_recv" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-06 18:55:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1381.php">Weihua Li: "[OMPI users] error for open-mpi application"</a>
<li><strong>Previous message:</strong> <a href="1379.php">Laurent.POREZ_at_[hidden]: "[OMPI users] CPU use in MPI_recv"</a>
<li><strong>Maybe in reply to:</strong> <a href="1379.php">Laurent.POREZ_at_[hidden]: "[OMPI users] CPU use in MPI_recv"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, this can certainly be normal.
<br>
<p>Open MPI has a bias for delivering messages as fast as possible, so it
<br>
tends to be aggressive about polling for completion for messages.  High
<br>
CPU usage can happen especially when you're running multiple processes
<br>
on the same machine (i.e., when shared memory is used for communication)
<br>
because Open MPI will be polling memory for completion.
<br>
<p>We took this bias because of the assumption that in HPC environments,
<br>
nodes will not be oversubscribed and therefore this aggressive approach
<br>
is ok.  So 100% CPU is acceptable.
<br>
<p>If you do oversubscribe your node, however, this can lead to performance
<br>
degradation -- the aggressive behavior tends to make the OS leave the
<br>
process scheduled on the CPU for long periods of time because the
<br>
process is fully busy.  Hence, when Open MPI detects that it is running
<br>
in an oversubscribed scenario, it calls sched_yield() in the middle of
<br>
its progression loops.  This pretty much forces the OS to allow other
<br>
processes to run, so even with this aggressive mode, multiple processes
<br>
can make reasonable progress.  See the FAQ for more discussion of this
<br>
topic:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=running#oversubscribing">http://www.open-mpi.org/faq/?category=running#oversubscribing</a>
<br>
<p>Hope this helps. 
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of 
</span><br>
<span class="quotelev1">&gt; Laurent.POREZ_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, June 06, 2006 5:49 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] CPU use in MPI_recv
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using Open-MPI 1.0.2 on a debian system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm testing the MPI_recv function with a small C program 
</span><br>
<span class="quotelev1">&gt; (source code at the end of the message). And I see that when 
</span><br>
<span class="quotelev1">&gt; I'm waiting a message, calling MPI_recv, the CPU is used at 100 %.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is that normal ?
</span><br>
<span class="quotelev1">&gt; Is there other ways to use a recv function (irecv, etc) that 
</span><br>
<span class="quotelev1">&gt; is not using the CPU ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	Laurent.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Source code :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 	int rc;
</span><br>
<span class="quotelev1">&gt; 	int numtasks, rank;
</span><br>
<span class="quotelev1">&gt; 	int myint = 0;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	rc = MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; 	if(rc != 0) {
</span><br>
<span class="quotelev1">&gt; 		printf(&quot;open error\n&quot;);
</span><br>
<span class="quotelev1">&gt; 		MPI_Abort(MPI_COMM_WORLD, rc);
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	MPI_Comm_size(MPI_COMM_WORLD, &amp;numtasks);
</span><br>
<span class="quotelev1">&gt; 	MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	printf(&quot;from cpu_test : number of tasks : %d. My rank 
</span><br>
<span class="quotelev1">&gt; :%d\n&quot;, numtasks, rank);
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 		
</span><br>
<span class="quotelev1">&gt; 	MPI_Recv(&amp;myint, 1, MPI_INT, MPI_ANY_SOURCE, 
</span><br>
<span class="quotelev1">&gt; MPI_ANY_TAG, MPI_COMM_WORLD, NULL);
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	printf(&quot;message received\n&quot;);
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	exit(0);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1381.php">Weihua Li: "[OMPI users] error for open-mpi application"</a>
<li><strong>Previous message:</strong> <a href="1379.php">Laurent.POREZ_at_[hidden]: "[OMPI users] CPU use in MPI_recv"</a>
<li><strong>Maybe in reply to:</strong> <a href="1379.php">Laurent.POREZ_at_[hidden]: "[OMPI users] CPU use in MPI_recv"</a>
<!-- nextthread="start" -->
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
