<?
$subject_val = "[OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 17 01:37:03 2013" -->
<!-- isoreceived="20130917053703" -->
<!-- sent="Tue, 17 Sep 2013 05:36:57 +0000" -->
<!-- isosent="20130917053657" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="[OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)" -->
<!-- id="20130917143658.8ff41dda39788d4f1130fa46_at_jp.fujitsu.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-17 01:36:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12906.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<li><strong>Previous message:</strong> <a href="12904.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] orte: Do not call tcgetattr on pipe descriptor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12906.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<li><strong>Reply:</strong> <a href="12906.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>

<br>
My colleague tested MPI_IN_PLACE for MPI_ALLTOALL, MPI_ALLTOALLV,
<br>
and MPI_ALLTOALLW, which was implemented two months ago in Open MPI
<br>
trunk. And he found three bugs and created a patch.
<br>

<br>
Found bugs are:
<br>

<br>
(A) Missing MPI_IN_PLACE support in self COLL component
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;The attached alltoall-self-inplace.c fails with MPI_ERR_ARG.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;self COLL component also must support MPI_IN_PLACE.
<br>

<br>
(B) Incorrect rcount[] index
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;A trivial bug in the following code.
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0, max_size = 0 ; i &lt; size ; ++i) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t size = ext * rcounts[rank]; // should be rcounts[i]
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_size = size &gt; max_size ? size : max_size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;This causes SEGV or something.
<br>

<br>
(C) For MPI_ALLTOALLV, the unit of displacements is extent, not byte
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;Though the unit of displacements is byte for MPI_ALLTOALLW,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the unit of displacements is extent for MPI_ALLTOALLV.
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI-2.2 (page 171) says:
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The outcome is as if each process sent a message to every
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;other process with,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(sendbuf + sdispls[i] &#194;&#183; extent(sendtype),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sendcounts[i], sendtype, i, ...),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and received a message from every other process with a call to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(recvbuf + rdispls[i] &#194;&#183; extent(recvtype),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;recvcounts[i], recvtype, i, ...).
<br>

<br>
I attached his patch (alltoall-inplace.patch) to fix these three bugs.
<br>

<br>
Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>


<br><hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12905/alltoall-inplace.patch">alltoall-inplace.patch</a>
</ul>
<!-- attachment="alltoall-inplace.patch" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12905/alltoall-self-inplace.c">alltoall-self-inplace.c</a>
</ul>
<!-- attachment="alltoall-self-inplace.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12906.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<li><strong>Previous message:</strong> <a href="12904.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [PATCH] orte: Do not call tcgetattr on pipe descriptor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12906.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<li><strong>Reply:</strong> <a href="12906.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
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
