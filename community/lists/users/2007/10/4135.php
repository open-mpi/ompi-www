<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  2 14:38:10 2007" -->
<!-- isoreceived="20071002183810" -->
<!-- sent="Tue, 2 Oct 2007 13:38:05 -0500" -->
<!-- isosent="20071002183805" -->
<!-- name="Chris Johnson" -->
<!-- email="crjjrc_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Gatherv on One Process" -->
<!-- id="41f7be510710021138l2ff95f6cv19339263b1f9162e_at_mail.gmail.com" -->
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
<strong>From:</strong> Chris Johnson (<em>crjjrc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-02 14:38:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4136.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI users] how this is possible?"</a>
<li><strong>Previous message:</strong> <a href="4134.php">Marcin Skoczylas: "Re: [OMPI users] how this is possible?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4148.php">Tim Prins: "Re: [OMPI users] MPI_Gatherv on One Process"</a>
<li><strong>Reply:</strong> <a href="4148.php">Tim Prins: "Re: [OMPI users] MPI_Gatherv on One Process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I'm trying to run an MPI program of mine under OpenMPI 1.2 using
<br>
just one process (mpirun -np 1 ./a.out) and I'm getting some
<br>
unexpected results.  The problem is that I'm getting unexpected
<br>
results from an MPI_Gatherv call when the offset for rank is nonzero.
<br>
<p>I've worked up a small sample that can reproduce the problem on the
<br>
several machines I've tried.  Here, each process creates a tmp array
<br>
of five ints.  These tmp arrays are then gathered by rank into a
<br>
buffer, but offset by 10 places.  (These 10 places are initialized
<br>
with -1.)  When I run with multiple processes, I see the 10 -1s and
<br>
each process's tmp array in the buffer.  But when I run with one
<br>
process, the buffer contains funny values.  When I run with one
<br>
process under MPICH, the buffer contains the 10 -1s and the rank's
<br>
array, as expected.  When the offset is 0, OpenMPI behaves just fine
<br>
with one process.
<br>
<p>Here's the sample:
<br>
<p>----------------------------------------------
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>#define COUNT 5
<br>
#define OFFSET 10
<br>
<p>int main(int argc, char **argv) {
<br>
<p>&nbsp;&nbsp;&nbsp;int i;
<br>
&nbsp;&nbsp;&nbsp;int *nitems;
<br>
&nbsp;&nbsp;&nbsp;int *offsets;
<br>
&nbsp;&nbsp;&nbsp;int *buffer;
<br>
&nbsp;&nbsp;&nbsp;int tmp[COUNT];
<br>
&nbsp;&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;&nbsp;int nprocs;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;nprocs);
<br>
<p>&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; COUNT; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tmp[i] = i + rank * 100;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buffer = malloc(sizeof(int) * (nprocs * COUNT + OFFSET));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nitems = malloc(sizeof(int) * nprocs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;offsets = malloc(sizeof(int) * nprocs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nitems[0] = COUNT;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;offsets[0] = OFFSET;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 1; i &lt; nprocs; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nitems[i] = COUNT;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;offsets[i] = offsets[i - 1] + nitems[i - 1];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; OFFSET; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buffer[i] = -1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;MPI_Gatherv(tmp, COUNT, MPI_INT, buffer, nitems, offsets, MPI_INT, 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; nprocs * COUNT + OFFSET; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;buffer[%d]: %d\n&quot;, i, buffer[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(buffer);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(nitems);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(offsets);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;return 0;
<br>
<p>}
<br>
----------------------------------------------
<br>
<p>For what it's worth, I've started using MPI_IN_PLACE instead of the
<br>
above method.  This works around the problem for now, but I'd
<br>
appreciate any insight on how to fix this or confirmation of bug.
<br>
Thanks for your help!
<br>
<p>- Chris
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4136.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI users] how this is possible?"</a>
<li><strong>Previous message:</strong> <a href="4134.php">Marcin Skoczylas: "Re: [OMPI users] how this is possible?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4148.php">Tim Prins: "Re: [OMPI users] MPI_Gatherv on One Process"</a>
<li><strong>Reply:</strong> <a href="4148.php">Tim Prins: "Re: [OMPI users] MPI_Gatherv on One Process"</a>
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
