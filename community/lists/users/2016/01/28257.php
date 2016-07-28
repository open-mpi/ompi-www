<?
$subject_val = "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 12 21:55:31 2016" -->
<!-- isoreceived="20160113025531" -->
<!-- sent="Tue, 12 Jan 2016 19:55:10 -0700" -->
<!-- isosent="20160113025510" -->
<!-- name="Jim Edwards" -->
<!-- email="jedwards_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW" -->
<!-- id="CAPuR+Zgp212D4m0ADuNhsFBg8esBMjjmaLA3P5AjDoUjJVUoNA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5udWr-sx2TQGAYXEVjoyiWgeaddVrfdm9kgmJQUy_9DeQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW<br>
<strong>From:</strong> Jim Edwards (<em>jedwards_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-12 21:55:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28258.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28256.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>In reply to:</strong> <a href="28256.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28258.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28258.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Maybe the example is too simple.  Here is another one which
<br>
when run on two tasks sends two integers from each task to
<br>
task 0.   Task 1 receives nothing.  This works with mpich and impi
<br>
but fails with openmpi.
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>&nbsp;my_mpi_test(int rank, int ntasks)
<br>
{
<br>
&nbsp;&nbsp;MPI_Datatype stype, rtype;
<br>
&nbsp;&nbsp;int sbuf[2];
<br>
&nbsp;&nbsp;int rbuf[4];
<br>
<p>&nbsp;&nbsp;int slen[ntasks], sdisp[ntasks], stypes[ntasks], rlen[ntasks],
<br>
rdisp[ntasks], rtypes[ntasks];
<br>
&nbsp;&nbsp;sbuf[0]=rank;
<br>
&nbsp;&nbsp;sbuf[1]=ntasks+rank;
<br>
&nbsp;&nbsp;slen[0]=2;
<br>
&nbsp;&nbsp;slen[1]=0;
<br>
&nbsp;&nbsp;stypes[0]=MPI_INT;
<br>
&nbsp;&nbsp;stypes[1]=MPI_DATATYPE_NULL;
<br>
&nbsp;&nbsp;sdisp[0]=0;
<br>
&nbsp;&nbsp;sdisp[1]=4;
<br>
&nbsp;&nbsp;if(rank==0){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rlen[0]=2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rlen[1]=2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rtypes[0]=MPI_INT;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rtypes[1]=MPI_INT;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rdisp[0]=0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rdisp[1]=8;
<br>
<p>&nbsp;&nbsp;}else{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rlen[0]=0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rlen[1]=0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rtypes[0]=MPI_DATATYPE_NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rtypes[1]=MPI_DATATYPE_NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rdisp[0]=0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rdisp[1]=0;
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;MPI_Alltoallw(sbuf, slen, sdisp, stypes, rbuf, rlen, rdisp, rtypes,
<br>
MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;if(rank==0){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%d %d %d %d\n&quot;,rbuf[0],rbuf[1],rbuf[2],rbuf[3]);
<br>
&nbsp;&nbsp;}
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;int rank, ntasks;
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;ntasks);
<br>
<p>&nbsp;&nbsp;printf(&quot;rank %d ntasks %d\n&quot;,rank, ntasks);
<br>
<p>&nbsp;&nbsp;my_mpi_test(rank,ntasks);
<br>
<p><p>&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28257/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28258.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28256.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>In reply to:</strong> <a href="28256.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28258.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28258.php">Jim Edwards: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
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
