<?
$subject_val = "[OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 25 12:17:49 2009" -->
<!-- isoreceived="20091125171749" -->
<!-- sent="Wed, 25 Nov 2009 11:17:32 -0600" -->
<!-- isosent="20091125171732" -->
<!-- name="Qing Pang" -->
<!-- email="qing.pang_at_[hidden]" -->
<!-- subject="[OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time" -->
<!-- id="4B0D66AC.3030803_at_jsums.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time<br>
<strong>From:</strong> Qing Pang (<em>qing.pang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-25 12:17:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11284.php">Eugene Loh: "Re: [OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time"</a>
<li><strong>Previous message:</strong> <a href="11282.php">Atle Rudshaug: "Re: [OMPI users] Programming help required in Interleaving	computation+communication !"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11284.php">Eugene Loh: "Re: [OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time"</a>
<li><strong>Reply:</strong> <a href="11284.php">Eugene Loh: "Re: [OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear users,
<br>
<p>I'm running the popular Calculate PI program on a 2 node setting running 
<br>
ubuntu 8.10 and openmpi1.3.3(with default settings). Password-less ssh 
<br>
is set up but no cluster management program such as network file system, 
<br>
network time protocol, resource management, scheduler, etc. The two 
<br>
nodes are connected though TCP/IP only.
<br>
<p>When I tried to benchmark the program, it shows that the time spent on 
<br>
MPI_Reduce(), is proportional to the Number-of-Intervals (n) used in 
<br>
calculation. For example, when n = 1,000,000, MPI_Reduce costs 15.65 
<br>
milliseconds; while n= 1,000,000,000,  MPI_Reduce costs 15526 milliseconds.
<br>
<p>This confused me - in this Calc-PI program, MPI_Reduce is used only once 
<br>
- no matter what number of intervals is used, MPI_Reduce is called after 
<br>
both nodes got the result, to merge the result - just once.  So the time 
<br>
cost by MPI_Reduce (all though it might be slow through TCP/IP 
<br>
connection) should be somewhat consistent. But obviously it's not what I 
<br>
saw.
<br>
<p>Had anyone have the similar problem before? I'm not sure how 
<br>
MPI_Reduce() work internally. Does the fact that I don't have network 
<br>
file system, network time protocol, resource management, scheduler, etc 
<br>
installed matters?
<br>
<p>Below is the program - I did feed &quot;n&quot; to it more than once to warm it up.
<br>
<p>#include &quot;mpi.h&quot;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;math.h&gt;
<br>
<p>int main(int argc, char *argv[])   
<br>
{   
<br>
&nbsp;&nbsp;&nbsp;int numprocs, myid, rc;
<br>
&nbsp;&nbsp;&nbsp;double ACCUPI = 3.1415926535897932384626433832795;
<br>
&nbsp;&nbsp;&nbsp;double mypi, pi, h, sum, x;
<br>
&nbsp;&nbsp;&nbsp;int n, i;
<br>
&nbsp;&nbsp;&nbsp;double starttime, endtime;
<br>
&nbsp;&nbsp;&nbsp;double time,told,bcasttime,reducetime,comptime,totaltime;
<br>
<p>&nbsp;&nbsp;&nbsp;rc = MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;&nbsp;if (rc != MPI_SUCCESS) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Error starting MPI program. Terminating.\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Abort(MPI_COMM_WORLD, rc);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;numprocs);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;myid);
<br>
<p>&nbsp;&nbsp;&nbsp;while (1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (myid == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Enter the number of intervals: (0 quits) \n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;scanf(&quot;%d&quot;,&amp;n);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;starttime = MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;time = MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Bcast(&amp;n, 1, MPI_INT, 0, MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;told = time;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;time = MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bcasttime = time - told;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (n == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;h = 1.0/(double)n;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sum = 0.0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = myid + 1; i &lt;= n; i += numprocs) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x = h*((double)i - 0.5);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sum += (4.0/(1.0 + x*x));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mypi = sum*h;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;told = time;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;time = MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comptime = time - told;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Reduce(&amp;mypi, &amp;pi, 1, MPI_DOUBLE, MPI_SUM, 0, MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;told = time;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;time = MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reducetime = time - told;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (myid == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;totaltime = MPI_Wtime() - starttime;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\nElapsed time (total): %f 
<br>
milliseconds\n&quot;,totaltime*1000);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Elapsed time (Bcast):  %f milliseconds 
<br>
(%5.2f%%)\n&quot;,bcasttime*1000,bcasttime*100/totaltime);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Elapsed time (Reduce): %f milliseconds 
<br>
(%5.2f%%)\n&quot;,reducetime*1000,reducetime*100/totaltime);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Elapsed time (Comput): %f milliseconds 
<br>
(%5.2f%%)\n&quot;,comptime*1000,comptime*100/totaltime);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;\nApproximated pi is %.16f, Error is %.4e\n&quot;, pi, 
<br>
fabs(pi - ACCUPI));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize();   
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11284.php">Eugene Loh: "Re: [OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time"</a>
<li><strong>Previous message:</strong> <a href="11282.php">Atle Rudshaug: "Re: [OMPI users] Programming help required in Interleaving	computation+communication !"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11284.php">Eugene Loh: "Re: [OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time"</a>
<li><strong>Reply:</strong> <a href="11284.php">Eugene Loh: "Re: [OMPI users] benchmark - mpi_reduce() called only once but takes long time - proportional to calculation time"</a>
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
