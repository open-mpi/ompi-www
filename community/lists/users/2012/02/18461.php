<?
$subject_val = "[OMPI users] MPI_Waitall strange behaviour on remote nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 14 10:56:22 2012" -->
<!-- isoreceived="20120214155622" -->
<!-- sent="Tue, 14 Feb 2012 15:56:23 -0000" -->
<!-- isosent="20120214155623" -->
<!-- name="Richard Bardwell" -->
<!-- email="richard_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Waitall strange behaviour on remote nodes" -->
<!-- id="CC079EC2969745A08F16C06EFF23F7EE_at_starfish" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Waitall strange behaviour on remote nodes<br>
<strong>From:</strong> Richard Bardwell (<em>richard_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-14 10:56:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18462.php">George Bosilca: "[OMPI users] EuroMPI 2012 CALL FOR PAPERS"</a>
<li><strong>Previous message:</strong> <a href="18460.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18478.php">Jeff Squyres: "Re: [OMPI users] MPI_Waitall strange behaviour on remote nodes"</a>
<li><strong>Reply:</strong> <a href="18478.php">Jeff Squyres: "Re: [OMPI users] MPI_Waitall strange behaviour on remote nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In trying to debug an MPI_Waitall hang on a remote
<br>
node, I created a simple code to test.
<br>
<p>If we run the simple code below on 2 nodes on a local
<br>
machine, we send the number 1 and receive number 1 back.
<br>
<p>If we run the same code on a local node and a remote node,
<br>
we send number 1 but get 32767 back. Any ideas ???
<br>
<p><p>#include &lt;string.h&gt;
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>#define PCPU 8
<br>
int rank,nproc;
<br>
<p>main(argc, argv)
<br>
int argc;
<br>
char *argv[];
<br>
{
<br>
&nbsp;&nbsp;&nbsp;int i,j,k,i1;
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;nproc);
<br>
<p>&nbsp;&nbsp;&nbsp;if (rank==0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;i1 = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpisend(i1);
<br>
&nbsp;&nbsp;&nbsp;}else{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;k=mpirecv();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;R%d: recvd %d\n&quot;,rank,k);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p>mpisend(ok)
<br>
<p>int ok;
<br>
<p>{
<br>
&nbsp;&nbsp;&nbsp;int i,j,k,m;
<br>
&nbsp;&nbsp;&nbsp;int tag=201;
<br>
&nbsp;&nbsp;&nbsp;MPI_Request request[PCPU];
<br>
&nbsp;&nbsp;&nbsp;MPI_Status status[PCPU];
<br>
<p>&nbsp;&nbsp;&nbsp;for (m=1;m&lt;nproc;m++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;R%d-&gt;%d\n&quot;,rank,m);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Isend(&amp;ok, 1, MPI_INT, m, tag+m, MPI_COMM_WORLD,&amp;request[m-1]);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>}
<br>
<p>mpirecv()
<br>
<p>{
<br>
&nbsp;&nbsp;&nbsp;int i,j,k,m;
<br>
&nbsp;&nbsp;&nbsp;int hrecv;
<br>
&nbsp;&nbsp;&nbsp;int tag=201;
<br>
&nbsp;&nbsp;&nbsp;MPI_Request request[PCPU];
<br>
&nbsp;&nbsp;&nbsp;MPI_Status status[PCPU];
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Irecv(&amp;hrecv, 1, MPI_INT, 0, tag+rank, MPI_COMM_WORLD, &amp;request[rank-1]);
<br>
&nbsp;&nbsp;&nbsp;MPI_Waitall(1,&amp;request[rank-1],&amp;status[rank-1]);
<br>
&nbsp;&nbsp;&nbsp;return(hrecv);
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18462.php">George Bosilca: "[OMPI users] EuroMPI 2012 CALL FOR PAPERS"</a>
<li><strong>Previous message:</strong> <a href="18460.php">yanyg_at_[hidden]: "Re: [OMPI users] help: sm btl does not work when I specify the same host twice or more in the node list"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18478.php">Jeff Squyres: "Re: [OMPI users] MPI_Waitall strange behaviour on remote nodes"</a>
<li><strong>Reply:</strong> <a href="18478.php">Jeff Squyres: "Re: [OMPI users] MPI_Waitall strange behaviour on remote nodes"</a>
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
