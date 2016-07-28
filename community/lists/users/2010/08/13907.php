<?
$subject_val = "Re: [OMPI users] execuation time is not stable with 2 processes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  4 10:11:15 2010" -->
<!-- isoreceived="20100804141115" -->
<!-- sent="Wed, 04 Aug 2010 09:08:26 -0500" -->
<!-- isosent="20100804140826" -->
<!-- name="Mark Potts" -->
<!-- email="potts_at_[hidden]" -->
<!-- subject="Re: [OMPI users] execuation time is not stable with 2 processes" -->
<!-- id="4C59745A.1080307_at_hpcapplications.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="B31A555A-145B-411C-BC10-1AE9E087F7BA_at_open-mpi.org" -->
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
<strong>From:</strong> Mark Potts (<em>potts_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-04 10:08:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13908.php">Cristobal Navarro: "Re: [OMPI users] Open MPI C++ class datatype"</a>
<li><strong>Previous message:</strong> <a href="13906.php">Ralph Castain: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
<li><strong>In reply to:</strong> <a href="13906.php">Ralph Castain: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13909.php">Eugene Loh: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
<li><strong>Reply:</strong> <a href="13909.php">Eugene Loh: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;I'd opt for the fact that tv0 is given value only on rank 0 and tv1 is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;only given value on rank 1.  Kind of hard to get a diff betwn the two
<br>
&nbsp;&nbsp;&nbsp;&nbsp;on either rank with that setup.  You need to determine the tv0 and tv1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;on both ranks.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;In addition, there are a number of other errors in the code (such as
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize() as an errant function outside of main), etc.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;regards,
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Did you bind the processes? If not you may be seeing the impact of having processes bouncing between cpus, and/or processes not being local to their memory. Try adding -bind-to-core or -bind-to-socket to your cmd line and see if things smooth out. I'm assuming, of course, that you are running on a system that supports binding...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The time can also be impacted by other things running on your cpu - could be context switching.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Final point: since both processes are running on the same node, IB will have no involvement - the messages are going to flow over shared memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 4, 2010, at 6:51 AM, Tad Lake wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi, 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I have a little program for execution time.
</span><br>
<span class="quotelev2">&gt;&gt; =================================================
</span><br>
<span class="quotelev2">&gt;&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;math.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main (int argc, char *argv[]) {
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Status Stat;
</span><br>
<span class="quotelev2">&gt;&gt; struct timeval tv0, tv1;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; long int totaltime = 0;
</span><br>
<span class="quotelev2">&gt;&gt; int i, j;
</span><br>
<span class="quotelev2">&gt;&gt; int buf[10240];
</span><br>
<span class="quotelev2">&gt;&gt;  int numtasks, rank;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init (&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_size (MPI_COMM_WORLD, &amp;numtasks);
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if (rank == 0) {
</span><br>
<span class="quotelev2">&gt;&gt;   gettimeofday(&quot;&amp;tv0, NULL); 
</span><br>
<span class="quotelev2">&gt;&gt;   for(i=0;i&lt;1000;i++){
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Send (buf, 10240, MPI_INT, 1, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Recv (buf, 10240, MPI_INT, 1, tag,MPI_COMM_WORLD, &amp;Stat);
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt;   gettimeofday (&amp;tv1, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; }else{
</span><br>
<span class="quotelev2">&gt;&gt;  gettimeofday(&amp;tv0, NULL);
</span><br>
<span class="quotelev2">&gt;&gt;  for(i=0;i&lt;1000;i++){
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Recv(buf, 10240,MPI_INT, 0, tag, MPI_COMM_WORLD, &amp;Stat);
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_Send(buf, 10240, MPI_INT, 1, tag, MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;  }
</span><br>
<span class="quotelev2">&gt;&gt;  gettimeofday(&amp;tv1, NULL);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; totaltime = (tv1.tv_sec - tv0.tv_sec) *  1000000 + (tv1.tv_usec - tv0.tv_usec);
</span><br>
<span class="quotelev2">&gt;&gt; fprintf (stdout, &quot;rank %d with total time is %d&quot;,rank, totaltime);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Finalize ();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; return 0;
</span><br>
<span class="quotelev2">&gt;&gt; } 
</span><br>
<span class="quotelev2">&gt;&gt; =======================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I run it :
</span><br>
<span class="quotelev2">&gt;&gt;  mpirun -np 2 --host node2 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But the result of time is not stable with difference of 100 times. For example, the max value of time can be 3000, meanwhile the min is 100.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there anything wrong ?
</span><br>
<span class="quotelev2">&gt;&gt; I am using 1.4.2 and openib.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><pre>
-- 
***********************************
 &gt;&gt; Mark J. Potts, PhD
 &gt;&gt;
 &gt;&gt; HPC Applications Inc.
 &gt;&gt; phone: 512-228-1721 Bus
 &gt;&gt;        512-828-6153 Fax
 &gt;&gt; email: potts_at_[hidden]
 &gt;&gt;        potts_at_[hidden]
***********************************
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13908.php">Cristobal Navarro: "Re: [OMPI users] Open MPI C++ class datatype"</a>
<li><strong>Previous message:</strong> <a href="13906.php">Ralph Castain: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
<li><strong>In reply to:</strong> <a href="13906.php">Ralph Castain: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13909.php">Eugene Loh: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
<li><strong>Reply:</strong> <a href="13909.php">Eugene Loh: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
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
