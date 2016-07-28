<?
$subject_val = "Re: [OMPI users] execuation time is not stable with 2 processes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  4 09:25:17 2010" -->
<!-- isoreceived="20100804132517" -->
<!-- sent="Wed, 4 Aug 2010 07:25:06 -0600" -->
<!-- isosent="20100804132506" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] execuation time is not stable with 2 processes" -->
<!-- id="B31A555A-145B-411C-BC10-1AE9E087F7BA_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="885142.65030.qm_at_web56202.mail.re3.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] execuation time is not stable with 2 processes<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-04 09:25:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13907.php">Mark Potts: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
<li><strong>Previous message:</strong> <a href="13905.php">Tad Lake: "[OMPI users] execuation time is not stable with 2 processes"</a>
<li><strong>In reply to:</strong> <a href="13905.php">Tad Lake: "[OMPI users] execuation time is not stable with 2 processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13907.php">Mark Potts: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
<li><strong>Reply:</strong> <a href="13907.php">Mark Potts: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Did you bind the processes? If not you may be seeing the impact of having processes bouncing between cpus, and/or processes not being local to their memory. Try adding -bind-to-core or -bind-to-socket to your cmd line and see if things smooth out. I'm assuming, of course, that you are running on a system that supports binding...
<br>
<p>The time can also be impacted by other things running on your cpu - could be context switching.
<br>
<p>Final point: since both processes are running on the same node, IB will have no involvement - the messages are going to flow over shared memory.
<br>
<p><p>On Aug 4, 2010, at 6:51 AM, Tad Lake wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  I have a little program for execution time.
</span><br>
<span class="quotelev1">&gt; =================================================
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;math.h&gt;
</span><br>
<span class="quotelev1">&gt; int main (int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt; MPI_Status Stat;
</span><br>
<span class="quotelev1">&gt; struct timeval tv0, tv1;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; long int totaltime = 0;
</span><br>
<span class="quotelev1">&gt; int i, j;
</span><br>
<span class="quotelev1">&gt; int buf[10240];
</span><br>
<span class="quotelev1">&gt;  int numtasks, rank;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_size (MPI_COMM_WORLD, &amp;numtasks);
</span><br>
<span class="quotelev1">&gt; MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if (rank == 0) {
</span><br>
<span class="quotelev1">&gt;   gettimeofday(&quot;&amp;tv0, NULL); 
</span><br>
<span class="quotelev1">&gt;   for(i=0;i&lt;1000;i++){
</span><br>
<span class="quotelev1">&gt;   MPI_Send (buf, 10240, MPI_INT, 1, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;   MPI_Recv (buf, 10240, MPI_INT, 1, tag,MPI_COMM_WORLD, &amp;Stat);
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt;   gettimeofday (&amp;tv1, NULL);
</span><br>
<span class="quotelev1">&gt; }else{
</span><br>
<span class="quotelev1">&gt;  gettimeofday(&amp;tv0, NULL);
</span><br>
<span class="quotelev1">&gt;  for(i=0;i&lt;1000;i++){
</span><br>
<span class="quotelev1">&gt;    MPI_Recv(buf, 10240,MPI_INT, 0, tag, MPI_COMM_WORLD, &amp;Stat);
</span><br>
<span class="quotelev1">&gt;    MPI_Send(buf, 10240, MPI_INT, 1, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  gettimeofday(&amp;tv1, NULL);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; totaltime = (tv1.tv_sec - tv0.tv_sec) *  1000000 + (tv1.tv_usec - tv0.tv_usec);
</span><br>
<span class="quotelev1">&gt; fprintf (stdout, &quot;rank %d with total time is %d&quot;,rank, totaltime);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_Finalize ();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; return 0;
</span><br>
<span class="quotelev1">&gt; } 
</span><br>
<span class="quotelev1">&gt; =======================================================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I run it :
</span><br>
<span class="quotelev1">&gt;  mpirun -np 2 --host node2 ./a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But the result of time is not stable with difference of 100 times. For example, the max value of time can be 3000, meanwhile the min is 100.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there anything wrong ?
</span><br>
<span class="quotelev1">&gt; I am using 1.4.2 and openib.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13907.php">Mark Potts: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
<li><strong>Previous message:</strong> <a href="13905.php">Tad Lake: "[OMPI users] execuation time is not stable with 2 processes"</a>
<li><strong>In reply to:</strong> <a href="13905.php">Tad Lake: "[OMPI users] execuation time is not stable with 2 processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13907.php">Mark Potts: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
<li><strong>Reply:</strong> <a href="13907.php">Mark Potts: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
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
