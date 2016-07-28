<?
$subject_val = "Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 17 06:03:21 2013" -->
<!-- isoreceived="20130917100321" -->
<!-- sent="Tue, 17 Sep 2013 10:03:14 +0000" -->
<!-- isosent="20130917100314" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)" -->
<!-- id="20130917190314.8d694a393ef381a31d2731ec_at_jp.fujitsu.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="592DA9AD-F482-4765-82F5-5179C5EF25E3_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-17 06:03:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12908.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<li><strong>Previous message:</strong> <a href="12906.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<li><strong>In reply to:</strong> <a href="12906.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12910.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<li><strong>Reply:</strong> <a href="12910.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>

<br>
Copyright-added patch is attached.
<br>
I don't have my svn account so want someone to commit it.
<br>

<br>
All my reported issues are in the ALLTOALL(V|W) MPI_IN_PLACE code,
<br>
which was implemented two months ago for MPI-2.2 conformance.
<br>
Not so surprising.
<br>

<br>
P.S. Fujitsu does not yet signed the contribution agreement.
<br>
I must talk with the legal department again to sign it, sigh....
<br>
This patch is very trivial and so no issues will arise.
<br>

<br>
Thanks,
<br>
Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>

<br>
<span class="quotelev1">&gt; Takahiro,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good catches. It's absolutely amazing that some of these errors lasted for so long before being discovered (especially the extent issue in the MPI_ALLTOALL). Please feel free to apply your patch and add the correct copyright at the beginning of all altered files.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 17, 2013, at 07:36 , &quot;Kawashima, Takahiro&quot; &lt;t-kawashima_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; My colleague tested MPI_IN_PLACE for MPI_ALLTOALL, MPI_ALLTOALLV,
</span><br>
<span class="quotelev2">&gt; &gt; and MPI_ALLTOALLW, which was implemented two months ago in Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; trunk. And he found three bugs and created a patch.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Found bugs are:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (A) Missing MPI_IN_PLACE support in self COLL component
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    The attached alltoall-self-inplace.c fails with MPI_ERR_ARG.
</span><br>
<span class="quotelev2">&gt; &gt;    self COLL component also must support MPI_IN_PLACE.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (B) Incorrect rcount[] index
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    A trivial bug in the following code.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    for (i = 0, max_size = 0 ; i &lt; size ; ++i) {
</span><br>
<span class="quotelev2">&gt; &gt;        size_t size = ext * rcounts[rank]; // should be rcounts[i]
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;        max_size = size &gt; max_size ? size : max_size;
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    This causes SEGV or something.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (C) For MPI_ALLTOALLV, the unit of displacements is extent, not byte
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    Though the unit of displacements is byte for MPI_ALLTOALLW,
</span><br>
<span class="quotelev2">&gt; &gt;    the unit of displacements is extent for MPI_ALLTOALLV.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    MPI-2.2 (page 171) says:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;      The outcome is as if each process sent a message to every
</span><br>
<span class="quotelev2">&gt; &gt;      other process with,
</span><br>
<span class="quotelev2">&gt; &gt;        MPI_Send(sendbuf + sdispls[i] &#194;&#183; extent(sendtype),
</span><br>
<span class="quotelev2">&gt; &gt;                 sendcounts[i], sendtype, i, ...),
</span><br>
<span class="quotelev2">&gt; &gt;      and received a message from every other process with a call to
</span><br>
<span class="quotelev2">&gt; &gt;        MPI_Recv(recvbuf + rdispls[i] &#194;&#183; extent(recvtype),
</span><br>
<span class="quotelev2">&gt; &gt;                 recvcounts[i], recvtype, i, ...).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I attached his patch (alltoall-inplace.patch) to fix these three bugs.
</span><br>

<br><hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12907/alltoall-inplace.patch">alltoall-inplace.patch</a>
</ul>
<!-- attachment="alltoall-inplace.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12908.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI users] Error in openmpi-1.9a1r29179"</a>
<li><strong>Previous message:</strong> <a href="12906.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<li><strong>In reply to:</strong> <a href="12906.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12910.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<li><strong>Reply:</strong> <a href="12910.php">George Bosilca: "Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
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
