<?
$subject_val = "[OMPI users] Did you break MPI_Abort recently?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 16:30:06 2009" -->
<!-- isoreceived="20090625203006" -->
<!-- sent="Thu, 25 Jun 2009 13:29:56 -0700 (PDT)" -->
<!-- isosent="20090625202956" -->
<!-- name="Mostyn Lewis" -->
<!-- email="Mostyn.Lewis_at_[hidden]" -->
<!-- subject="[OMPI users] Did you break MPI_Abort recently?" -->
<!-- id="Pine.GSO.4.64.0906251324210.49_at_aragorn.brc.West.Sun.COM" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Did you break MPI_Abort recently?<br>
<strong>From:</strong> Mostyn Lewis (<em>Mostyn.Lewis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-25 16:29:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9720.php">Ralph Castain: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<li><strong>Previous message:</strong> <a href="9718.php">D'Auria, Raffaella: "[OMPI users] Problem with qlogic cards InfiniPath_QLE7240 and AlltoAll call"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9720.php">Ralph Castain: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<li><strong>Reply:</strong> <a href="9720.php">Ralph Castain: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While using the BLACS test programs, I've seen that with recent SVN checkouts
<br>
(including todays) the MPI_Abort test left procs running. The last SVN I
<br>
have where it worked was 1.4a1r20936. By 1.4a1r21246 it fails.
<br>
<p>Works O.K. in the standard 1.3.2 release.
<br>
<p>A test program is below. GCC was used.
<br>
<p>DM
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;sys/types.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &lt;math.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>#define NUM_ITERS 100000
<br>
<p>/* Prototype the function that we'll use below. */
<br>
<p>static double f(double);
<br>
<p>int
<br>
main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int iter, rank, size, i;
<br>
&nbsp;&nbsp;&nbsp;int foo;
<br>
&nbsp;&nbsp;&nbsp;double PI25DT = 3.141592653589793238462643;
<br>
&nbsp;&nbsp;&nbsp;double mypi, pi, h, sum, x;
<br>
&nbsp;&nbsp;&nbsp;double startwtime = 0.0, endwtime;
<br>
&nbsp;&nbsp;&nbsp;int namelen;
<br>
&nbsp;&nbsp;&nbsp;char processor_name[MPI_MAX_PROCESSOR_NAME];
<br>
<p>&nbsp;&nbsp;&nbsp;/* Normal MPI startup */
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;MPI_Get_processor_name(processor_name, &amp;namelen);
<br>
<p>&nbsp;&nbsp;&nbsp;printf(&quot;Process %d of %d on %s\n&quot;, rank, size, processor_name);
<br>
<p>&nbsp;&nbsp;&nbsp;/* Do approximations for 1 to 100 points */
<br>
<p>&nbsp;&nbsp;&nbsp;/* sleep(5); */
<br>
&nbsp;&nbsp;&nbsp;for (iter = 2; iter &lt; NUM_ITERS; ++iter) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;h = 1.0 / (double) iter;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sum = 0.0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* A slightly better approach starts from large i and works back */
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;startwtime = MPI_Wtime();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = rank + 1; i &lt;= iter; i += size) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x = h * ((double) i - 0.5);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sum += f(x);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mypi = h * sum;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(iter == (NUM_ITERS - 1000)){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Barrier(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(rank == 2){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Abort(MPI_COMM_WORLD, -1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Just loop */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foo = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while(foo == 1){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foo = foo + 3;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foo = foo - 2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foo = foo - 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Reduce(&amp;mypi, &amp;pi, 1, MPI_DOUBLE, MPI_SUM, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;/* All done */
<br>
<p>&nbsp;&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%d points: pi is approximately %.16f, error = %.16f\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iter, pi, fabs(pi - PI25DT));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;endwtime = MPI_Wtime();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;wall clock time = %f\n&quot;, endwtime - startwtime);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;fflush(stdout);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>static double
<br>
f(double a)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;return (4.0 / (1.0 + a * a));
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9720.php">Ralph Castain: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<li><strong>Previous message:</strong> <a href="9718.php">D'Auria, Raffaella: "[OMPI users] Problem with qlogic cards InfiniPath_QLE7240 and AlltoAll call"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9720.php">Ralph Castain: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
<li><strong>Reply:</strong> <a href="9720.php">Ralph Castain: "Re: [OMPI users] Did you break MPI_Abort recently?"</a>
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
