<?
$subject_val = "[OMPI users] execuation time is not stable with 2 processes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug  4 08:51:22 2010" -->
<!-- isoreceived="20100804125122" -->
<!-- sent="Wed, 4 Aug 2010 05:51:15 -0700 (PDT)" -->
<!-- isosent="20100804125115" -->
<!-- name="Tad Lake" -->
<!-- email="tad_lake_at_[hidden]" -->
<!-- subject="[OMPI users] execuation time is not stable with 2 processes" -->
<!-- id="885142.65030.qm_at_web56202.mail.re3.yahoo.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] execuation time is not stable with 2 processes<br>
<strong>From:</strong> Tad Lake (<em>tad_lake_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-04 08:51:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13906.php">Ralph Castain: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
<li><strong>Previous message:</strong> <a href="13904.php">Riccardo Murri: "Re: [OMPI users] Open MPI C++ class datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13906.php">Ralph Castain: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
<li><strong>Reply:</strong> <a href="13906.php">Ralph Castain: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
<li><strong>Reply:</strong> <a href="13911.php">Eugene Loh: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
<p>&nbsp;&nbsp;I have a little program for execution time.
<br>
=================================================
<br>
&nbsp;#include &quot;mpi.h&quot;
<br>
&nbsp;#include &lt;stdio.h&gt;
<br>
&nbsp;#include &lt;stdlib.h&gt;
<br>
&nbsp;#include &lt;string.h&gt;
<br>
&nbsp;#include &lt;math.h&gt;
<br>
&nbsp;int main (int argc, char *argv[]) {
<br>
&nbsp;MPI_Status Stat;
<br>
&nbsp;struct timeval tv0, tv1;
<br>
<p>&nbsp;long int totaltime = 0;
<br>
&nbsp;int i, j;
<br>
&nbsp;int buf[10240];
<br>
&nbsp;&nbsp;int numtasks, rank;
<br>
<p>&nbsp;MPI_Init (&amp;argc, &amp;argv);
<br>
&nbsp;MPI_Comm_size (MPI_COMM_WORLD, &amp;numtasks);
<br>
&nbsp;MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);
<br>
<p><p>&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;gettimeofday(&quot;&amp;tv0, NULL); 
<br>
&nbsp;&nbsp;&nbsp;for(i=0;i&lt;1000;i++){
<br>
&nbsp;&nbsp;&nbsp;MPI_Send (buf, 10240, MPI_INT, 1, tag, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;MPI_Recv (buf, 10240, MPI_INT, 1, tag,MPI_COMM_WORLD, &amp;Stat);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;gettimeofday (&amp;tv1, NULL);
<br>
}else{
<br>
&nbsp;&nbsp;gettimeofday(&amp;tv0, NULL);
<br>
&nbsp;&nbsp;for(i=0;i&lt;1000;i++){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(buf, 10240,MPI_INT, 0, tag, MPI_COMM_WORLD, &amp;Stat);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(buf, 10240, MPI_INT, 1, tag, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;gettimeofday(&amp;tv1, NULL);
<br>
}
<br>
<p>&nbsp;totaltime = (tv1.tv_sec - tv0.tv_sec) *  1000000 + (tv1.tv_usec - tv0.tv_usec);
<br>
&nbsp;fprintf (stdout, &quot;rank %d with total time is %d&quot;,rank, totaltime);
<br>
&nbsp;}
<br>
<p>&nbsp;MPI_Finalize ();
<br>
<p>&nbsp;return 0;
<br>
&nbsp;} 
<br>
=======================================================
<br>
<p>I run it :
<br>
&nbsp;&nbsp;mpirun -np 2 --host node2 ./a.out
<br>
<p>But the result of time is not stable with difference of 100 times. For example, the max value of time can be 3000, meanwhile the min is 100.
<br>
<p>Is there anything wrong ?
<br>
&nbsp;I am using 1.4.2 and openib.
<br>
<p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13906.php">Ralph Castain: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
<li><strong>Previous message:</strong> <a href="13904.php">Riccardo Murri: "Re: [OMPI users] Open MPI C++ class datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13906.php">Ralph Castain: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
<li><strong>Reply:</strong> <a href="13906.php">Ralph Castain: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
<li><strong>Reply:</strong> <a href="13911.php">Eugene Loh: "Re: [OMPI users] execuation time is not stable with 2 processes"</a>
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
