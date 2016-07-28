<?
$subject_val = "Re: [OMPI devel] Still problems with del_procs in trunkj";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 10:45:20 2014" -->
<!-- isoreceived="20140527144520" -->
<!-- sent="Tue, 27 May 2014 08:45:17 -0600" -->
<!-- isosent="20140527144517" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Still problems with del_procs in trunkj" -->
<!-- id="20140527144517.GC48634_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAAkFZ5vGCySsxvFm_1AWVL+rOU49+zz2JJumY3j5fr_-yx_a3A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Still problems with del_procs in trunkj<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-27 10:45:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14851.php">Thomas Naughton: "Re: [OMPI devel] RFC: remove PMI component in OMPI/RTE framework"</a>
<li><strong>Previous message:</strong> <a href="14849.php">Nathan Hjelm: "Re: [OMPI devel] Threshold for pinning down user-buffers"</a>
<li><strong>In reply to:</strong> <a href="14839.php">Gilles Gouaillardet: "Re: [OMPI devel] Still problems with del_procs in trunkj"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, May 26, 2014 at 12:09:38PM +0900, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt;    Rolf,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    the assert fails because the endpoint reference count is greater than one.
</span><br>
<span class="quotelev1">&gt;    the root cause is the endpoint has been added to the list of
</span><br>
<span class="quotelev1">&gt;    eager_rdma_buffers of the openib btl device (and hence OBJ_RETAIN'ed at
</span><br>
<span class="quotelev1">&gt;    ompi/mca/btl/openib/btl_openib_endpoint.c:1009)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    a simple workaround is not to use eager rdma with the openib btl
</span><br>
<span class="quotelev1">&gt;    (e.g. export OMPI_MCA_btl_openib_use_eager_rdma=0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    here is attached a patch that solves the issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    because of my poor understanding of the openib btl, i did not commit it.
</span><br>
<span class="quotelev1">&gt;    i am wondering wether it is safe to simply OBJ_RELEASE the endpoint
</span><br>
<span class="quotelev1">&gt;    (e.g. what happens if there are inflight messages ?)
</span><br>
<span class="quotelev1">&gt;    i also added some comments that indicates the patch might be suboptimal.
</span><br>
<p>It should be safe as there should be no flying messages at del_procs. If
<br>
there are an error would probably be raised on the sending process.
<br>
<p><span class="quotelev1">&gt;    Nathan, could you please review the attached patch ?
</span><br>
<p>Sure. I will take a look. It doesn't surprise me there are these sorts
<br>
of issues in del_procs. The functionality has been broken for some time.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14850/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14851.php">Thomas Naughton: "Re: [OMPI devel] RFC: remove PMI component in OMPI/RTE framework"</a>
<li><strong>Previous message:</strong> <a href="14849.php">Nathan Hjelm: "Re: [OMPI devel] Threshold for pinning down user-buffers"</a>
<li><strong>In reply to:</strong> <a href="14839.php">Gilles Gouaillardet: "Re: [OMPI devel] Still problems with del_procs in trunkj"</a>
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
