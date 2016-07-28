<?
$subject_val = "[OMPI users] Problem with MPI_Scatter() on inter-communicator...";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  4 12:19:48 2008" -->
<!-- isoreceived="20080404161948" -->
<!-- sent="Fri, 4 Apr 2008 12:18:58 -0400" -->
<!-- isosent="20080404161858" -->
<!-- name="Audet, Martin" -->
<!-- email="Martin.Audet_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with MPI_Scatter() on inter-communicator..." -->
<!-- id="9D96C3B9C12B4C4A9BD31761B4F8241029CF0B1EBA_at_imibou-nt-1-ex.IMI.LOCAL" -->
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
<strong>Subject:</strong> [OMPI users] Problem with MPI_Scatter() on inter-communicator...<br>
<strong>From:</strong> Audet, Martin (<em>Martin.Audet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-04 12:18:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5318.php">Elvedin Trnjanin: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<li><strong>Previous message:</strong> <a href="5316.php">Tim Prins: "Re: [OMPI users] Spawn problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5342.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Scatter() on inter-communicator..."</a>
<li><strong>Reply:</strong> <a href="5342.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Scatter() on inter-communicator..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I don't know if it is my sample code or if it is a problem whit MPI_Scatter() on inter-communicator (maybe similar to the problem we found with MPI_Allgather() on inter-communicator a few weeks ago) but a simple program I wrote freeze during its second iteration of a loop doing an MPI_Scatter() over an inter-communicator.
<br>
<p>For example if I compile as follows:
<br>
<p>&nbsp;&nbsp;mpicc -Wall scatter_bug.c -o scatter_bug
<br>
<p>I get no error or warning. Then if a start it with np=2 as follows:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpiexec -n 2 ./scatter_bug
<br>
<p>it prints:
<br>
<p>&nbsp;&nbsp;&nbsp;beginning Scatter i_root_group=0
<br>
&nbsp;&nbsp;&nbsp;ending Scatter i_root_group=0
<br>
&nbsp;&nbsp;&nbsp;beginning Scatter i_root_group=1
<br>
<p>and then hang...
<br>
<p>Note also that if I change the for loop to execute only the MPI_Scatter() of the second iteration (e.g. replacing &quot;i_root_group=0;&quot; by &quot;i_root_group=1;&quot;), it prints:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;beginning Scatter i_root_group=1
<br>
<p>and then hang...
<br>
<p>The problem therefore seems to be related with the second iteration itself.
<br>
<p>Please note that this program run fine with mpich2 1.0.7rc2 (ch3:sock device) for many different number of process (np) when the executable is ran with or without valgrind.
<br>
<p>The OpenMPI version I use is 1.2.6rc3 and was configured as follows:
<br>
<p>&nbsp;&nbsp;&nbsp;./configure --prefix=/usr/local/openmpi-1.2.6rc3 --disable-mpi-f77 --disable-mpi-f90 --disable-mpi-cxx --disable-cxx-exceptions --with-io-romio-flags=--with-file-system=ufs+nfs
<br>
<p>Note also that all process (when using OpenMPI or mpich2) were started on the same machine.
<br>
<p>Also if you look at source code, you will notice that some arguments to MPI_Scatter() are NULL or 0. This may look strange and problematic when using a normal intra-communicator. However according to the book &quot;MPI - The complete reference&quot; vol 2 about MPI-2, for MPI_Scatter() with an inter-communicator:
<br>
<p>&nbsp;&nbsp;&quot;The sendbuf, sendcount and sendtype arguments are significant only at the root process. The recvbuf, recvcount, and recvtype arguments are significant only at the processes of the leaf group.&quot;
<br>
<p>If anyone else can have a look at this program and try it it would be helpful.
<br>
<p>Thanks,
<br>
<p>Martin
<br>
<p><p>#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int ret_code = 0;
<br>
&nbsp;&nbsp;&nbsp;int comm_size, comm_rank;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;comm_size);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;comm_rank);
<br>
<p>&nbsp;&nbsp;&nbsp;if (comm_size &gt; 1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm subcomm, intercomm;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int group_id = comm_rank % 2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int i_root_group;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* split process in two groups:  even and odd comm_ranks. */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_split(MPI_COMM_WORLD, group_id, 0, &amp;subcomm);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* The remote leader comm_rank for even and odd groups are respectively: 1 and 0 */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Intercomm_create(subcomm, 0, MPI_COMM_WORLD, 1-group_id, 0, &amp;intercomm);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* for i_root_group==0 process with comm_rank==0 scatter data to all process with odd  comm_rank */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* for i_root_group==1 process with comm_rank==1 scatter data to all process with even comm_rank */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (i_root_group=0; i_root_group &lt; 2; i_root_group++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (comm_rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;beginning Scatter i_root_group=%d\n&quot;,i_root_group);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (group_id == i_root_group) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int  is_root  = (comm_rank == i_root_group);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int       *send_buf = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (is_root) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const int nbr_other = (comm_size+i_root_group)/2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int       ii;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;send_buf = malloc(nbr_other*sizeof(*send_buf));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (ii=0; ii &lt; nbr_other; ii++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;send_buf[ii] = ii;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Scatter(send_buf, 1, MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NULL,     0, MPI_INT, (is_root ? MPI_ROOT : MPI_PROC_NULL), intercomm);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (is_root) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(send_buf);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int an_int;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Scatter(NULL,    0, MPI_INT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;an_int, 1, MPI_INT, 0, intercomm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (comm_rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;ending Scatter i_root_group=%d\n&quot;,i_root_group);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_free(&amp;intercomm);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_free(&amp;subcomm);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;%s: error this program must be started np &gt; 1\n&quot;, argv[0]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ret_code = 1;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;return ret_code;
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5318.php">Elvedin Trnjanin: "Re: [OMPI users] setup of a basic system on RHEL or Fedora"</a>
<li><strong>Previous message:</strong> <a href="5316.php">Tim Prins: "Re: [OMPI users] Spawn problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5342.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Scatter() on inter-communicator..."</a>
<li><strong>Reply:</strong> <a href="5342.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Scatter() on inter-communicator..."</a>
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
