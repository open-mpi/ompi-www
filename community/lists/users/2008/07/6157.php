<?
$subject_val = "[OMPI users] MPI_Reduce hangs when running on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 14:51:50 2008" -->
<!-- isoreceived="20080728185150" -->
<!-- sent="Mon, 28 Jul 2008 14:51:45 -0400" -->
<!-- isosent="20080728185145" -->
<!-- name="Eric Shamay" -->
<!-- email="eric.shamay_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Reduce hangs when running on multiple nodes" -->
<!-- id="f85894710807281151k65ec7611g8d7f258997062d2d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Reduce hangs when running on multiple nodes<br>
<strong>From:</strong> Eric Shamay (<em>eric.shamay_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 14:51:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6158.php">Andy Georgi: "[OMPI users] TCP Latency"</a>
<li><strong>Previous message:</strong> <a href="6156.php">vega lew: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In trying to run a simple &quot;hello world&quot; type program to test my MPI setup,
<br>
I've come across an interesting problem I can't seem to work out. But first,
<br>
a bit about my setup:
<br>
<p>I have 3 dual-core Athlon machine all running ubuntu 8.04 and they've been
<br>
readied with openmpi 1.2.6. The program I'm trying to run is the following
<br>
simple test:
<br>
<p>#include &lt;mpi.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
<p>#define RING_TAG  0xdead
<br>
#define RING_ROOT 0
<br>
<p>int main (int argc, char *argv[]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int size   = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int rank   = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int next   = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int prev   = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int value  = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int result = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int gresult = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request request;
<br>
<p>char * host;
<br>
host = getenv (&quot;HOSTNAME&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;//sleep(20);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if ( 1 &lt; size ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* compute the neighbours */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;next = (rank+1) % size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prev = (size + (rank-1)) % size;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* post recv */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Irecv(&amp;value, 1, MPI_INT, prev, RING_TAG, MPI_COMM_WORLD,
<br>
&amp;request);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* send data */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(&amp;rank, 1, MPI_INT, next, RING_TAG, MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* wait for data */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Wait(&amp;request, &amp;status);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* validate data */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( value != prev ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;result = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;result = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* gather results */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;%s - %d) Before\n&quot;, host, rank); fflush(stdout);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Reduce(&amp;result, &amp;gresult, 1, MPI_INT, MPI_SUM, RING_ROOT,
<br>
MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//MPI_Allreduce(&amp;result, &amp;gresult, 1, MPI_INT, MPI_SUM,
<br>
MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;%s - %d) After\n&quot;, host, rank); fflush(stdout);
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( rank == RING_ROOT ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( 0 == gresult ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;PASSED : %i errors.\n&quot;, gresult);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;FAILED : %i errors.\n&quot;, gresult);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf (&quot;You have to use more than 1 process.\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p><p><p><p><p>This program runs just fine under the following conditions:
<br>
<p>1) If I run on a single node
<br>
2) If I run on multiple nodes but change the MPI_Reduce operation to
<br>
anything else (MPI_Bcast, MPI_Allreduce, etc)
<br>
<p>But it hangs if I run on multiple nodes and keep the MPI_Reduce as it is.
<br>
<p>The problem is especially frustrating because there is no reason that all
<br>
the other functions should work without a problem, and the Reduce operations
<br>
causes the entire process to hang. The symptoms are as follows during a
<br>
hang:
<br>
<p>1) Output ends (I get some of the printf() statements through, but some of
<br>
the cores on any of the nodes will never get to the &quot;After&quot; printed
<br>
statement) and hangs.
<br>
2) Checking the other nodes with a 'top' command shows that the correct
<br>
number of processes are being executed and run at 100% of the cpu.
<br>
<p>I'm confident that this isn't an issue with path settings or environment
<br>
variables, as I mentioned before that the program executes and finishes just
<br>
fine when anything other than an MPI_Reduce is used.
<br>
<p>Has anyone encountered a problem like this?
<br>
<p>Thank you,
<br>
~Eric
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6157/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6158.php">Andy Georgi: "[OMPI users] TCP Latency"</a>
<li><strong>Previous message:</strong> <a href="6156.php">vega lew: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
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
