<?
$subject_val = "Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 17 03:39:04 2013" -->
<!-- isoreceived="20130917073904" -->
<!-- sent="Tue, 17 Sep 2013 09:39:02 +0200" -->
<!-- isosent="20130917073902" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)" -->
<!-- id="592DA9AD-F482-4765-82F5-5179C5EF25E3_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20130917143658.8ff41dda39788d4f1130fa46_at_jp.fujitsu.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-17 03:39:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12907.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<li><strong>Previous message:</strong> <a href="12905.php">Kawashima, Takahiro: "[OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<li><strong>In reply to:</strong> <a href="12905.php">Kawashima, Takahiro: "[OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12907.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<li><strong>Reply:</strong> <a href="12907.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Takahiro,
<br>
<p>Good catches. It's absolutely amazing that some of these errors lasted for so long before being discovered (especially the extent issue in the MPI_ALLTOALL). Please feel free to apply your patch and add the correct copyright at the beginning of all altered files.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;George.
<br>
<p><p><p>On Sep 17, 2013, at 07:36 , &quot;Kawashima, Takahiro&quot; &lt;t-kawashima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My colleague tested MPI_IN_PLACE for MPI_ALLTOALL, MPI_ALLTOALLV,
</span><br>
<span class="quotelev1">&gt; and MPI_ALLTOALLW, which was implemented two months ago in Open MPI
</span><br>
<span class="quotelev1">&gt; trunk. And he found three bugs and created a patch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Found bugs are:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (A) Missing MPI_IN_PLACE support in self COLL component
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    The attached alltoall-self-inplace.c fails with MPI_ERR_ARG.
</span><br>
<span class="quotelev1">&gt;    self COLL component also must support MPI_IN_PLACE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (B) Incorrect rcount[] index
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    A trivial bug in the following code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    for (i = 0, max_size = 0 ; i &lt; size ; ++i) {
</span><br>
<span class="quotelev1">&gt;        size_t size = ext * rcounts[rank]; // should be rcounts[i]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        max_size = size &gt; max_size ? size : max_size;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    This causes SEGV or something.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (C) For MPI_ALLTOALLV, the unit of displacements is extent, not byte
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Though the unit of displacements is byte for MPI_ALLTOALLW,
</span><br>
<span class="quotelev1">&gt;    the unit of displacements is extent for MPI_ALLTOALLV.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI-2.2 (page 171) says:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      The outcome is as if each process sent a message to every
</span><br>
<span class="quotelev1">&gt;      other process with,
</span><br>
<span class="quotelev1">&gt;        MPI_Send(sendbuf + sdispls[i] &#183; extent(sendtype),
</span><br>
<span class="quotelev1">&gt;                 sendcounts[i], sendtype, i, ...),
</span><br>
<span class="quotelev1">&gt;      and received a message from every other process with a call to
</span><br>
<span class="quotelev1">&gt;        MPI_Recv(recvbuf + rdispls[i] &#183; extent(recvtype),
</span><br>
<span class="quotelev1">&gt;                 recvcounts[i], recvtype, i, ...).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I attached his patch (alltoall-inplace.patch) to fix these three bugs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Takahiro Kawashima,
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt; &lt;alltoall-inplace.patch&gt;&lt;alltoall-self-inplace.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12907.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<li><strong>Previous message:</strong> <a href="12905.php">Kawashima, Takahiro: "[OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<li><strong>In reply to:</strong> <a href="12905.php">Kawashima, Takahiro: "[OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12907.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
<li><strong>Reply:</strong> <a href="12907.php">Kawashima, Takahiro: "Re: [OMPI devel] [patch] MPI_IN_PLACE for MPI_ALLTOALL(V|W)"</a>
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
