<?
$subject_val = "Re: [OMPI users] execuation time is not stable with 2 processes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  4 11:33:51 2010" -->
<!-- isoreceived="20100804153351" -->
<!-- sent="Wed, 04 Aug 2010 08:32:26 -0700" -->
<!-- isosent="20100804153226" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] execuation time is not stable with 2 processes" -->
<!-- id="4C59880A.8020403_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C59745A.1080307_at_hpcapplications.com" -->
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
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-04 11:32:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13910.php">Allen Barnett: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>Previous message:</strong> <a href="13908.php">Cristobal Navarro: "Re: [OMPI users] Open MPI C++ class datatype"</a>
<li><strong>In reply to:</strong> <a href="13907.php">Mark Potts: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13911.php">Eugene Loh: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mark Potts wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;     I'd opt for the fact that tv0 is given value only on rank 0 and 
</span><br>
<span class="quotelev1">&gt; tv1 is
</span><br>
<span class="quotelev1">&gt;     only given value on rank 1.  Kind of hard to get a diff betwn the two
</span><br>
<span class="quotelev1">&gt;     on either rank with that setup.  You need to determine the tv0 and 
</span><br>
<span class="quotelev1">&gt; tv1
</span><br>
<span class="quotelev1">&gt;     on both ranks.
</span><br>
<p>I don't understand this.  It appears to me that tv1-tv0 is computed and 
<br>
reported on each process.  This seems okay.
<br>
<p><span class="quotelev1">&gt;     In addition, there are a number of other errors in the code (such as
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize() as an errant function outside of main), etc.
</span><br>
<p>Yes, there seem to be many small errors, such as tag undeclared, extra 
<br>
bracket so that MPI_Finalize is outside main, MPI_Send on rank 1 sending 
<br>
to itself, etc.
<br>
<p>Regarding performance methodology, you should consider adding another 
<br>
loop so that your program reports multiple timings instead of just one.  
<br>
Also, use MPI_Wtime for your timer since it's more likely to pick up a 
<br>
portable, high-resolution timer.
<br>
<p><span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you bind the processes? If not you may be seeing the impact of 
</span><br>
<span class="quotelev2">&gt;&gt; having processes bouncing between cpus, and/or processes not being 
</span><br>
<span class="quotelev2">&gt;&gt; local to their memory. Try adding -bind-to-core or -bind-to-socket to 
</span><br>
<span class="quotelev2">&gt;&gt; your cmd line and see if things smooth out. I'm assuming, of course, 
</span><br>
<span class="quotelev2">&gt;&gt; that you are running on a system that supports binding...
</span><br>
<span class="quotelev1">&gt;
</span><br>
And know what result you are expecting.  You are reporting the total 
<br>
number of microseconds for 2000 round trips.  If we divide 3000 and 100 
<br>
by 2000, that's 1.5 usec and 0.05 usec for latency.  The first is 
<br>
reasonable for shared memory.  The second sounds much too short.  
<br>
Perhaps your timer has too high granularity?
<br>
<p><span class="quotelev2">&gt;&gt; The time can also be impacted by other things running on your cpu - 
</span><br>
<span class="quotelev2">&gt;&gt; could be context switching.
</span><br>
<span class="quotelev1">&gt;
</span><br>
It seems to me that your results are not too slow but too fast.  Again, 
<br>
high-granularity timings may be at fault.  Might need to time a larger 
<br>
number of iterations within the timer and report multiple measurements.
<br>
<p><span class="quotelev2">&gt;&gt; Final point: since both processes are running on the same node, IB 
</span><br>
<span class="quotelev2">&gt;&gt; will have no involvement - the messages are going to flow over shared 
</span><br>
<span class="quotelev2">&gt;&gt; memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
+1
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 4, 2010, at 6:51 AM, Tad Lake wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I have a little program for execution time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;math.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main (int argc, char *argv[]) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Status Stat;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; struct timeval tv0, tv1;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; long int totaltime = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int i, j;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int buf[10240];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  int numtasks, rank;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_size (MPI_COMM_WORLD, &amp;numtasks);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if (rank == 0) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   gettimeofday(&quot;&amp;tv0, NULL);   for(i=0;i&lt;1000;i++){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Send (buf, 10240, MPI_INT, 1, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   MPI_Recv (buf, 10240, MPI_INT, 1, tag,MPI_COMM_WORLD, &amp;Stat);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   gettimeofday (&amp;tv1, NULL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }else{
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  gettimeofday(&amp;tv0, NULL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  for(i=0;i&lt;1000;i++){
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Recv(buf, 10240,MPI_INT, 0, tag, MPI_COMM_WORLD, &amp;Stat);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    MPI_Send(buf, 10240, MPI_INT, 1, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  gettimeofday(&amp;tv1, NULL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; totaltime = (tv1.tv_sec - tv0.tv_sec) *  1000000 + (tv1.tv_usec - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tv0.tv_usec);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fprintf (stdout, &quot;rank %d with total time is %d&quot;,rank, totaltime);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Finalize ();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; } =======================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I run it :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mpirun -np 2 --host node2 ./a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But the result of time is not stable with difference of 100 times. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For example, the max value of time can be 3000, meanwhile the min is 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 100.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there anything wrong ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using 1.4.2 and openib.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13910.php">Allen Barnett: "Re: [OMPI users] OpenIB Error in ibv_create_srq"</a>
<li><strong>Previous message:</strong> <a href="13908.php">Cristobal Navarro: "Re: [OMPI users] Open MPI C++ class datatype"</a>
<li><strong>In reply to:</strong> <a href="13907.php">Mark Potts: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13911.php">Eugene Loh: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
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
