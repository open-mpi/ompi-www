<?
$subject_val = "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 19 00:38:33 2015" -->
<!-- isoreceived="20150119053833" -->
<!-- sent="Mon, 19 Jan 2015 14:38:42 +0900" -->
<!-- isosent="20150119053842" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed" -->
<!-- id="54BC9862.10203_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="54BC9384.7070807_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-19 00:38:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16800.php">George Bosilca: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Previous message:</strong> <a href="16798.php">Gilles Gouaillardet: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>In reply to:</strong> <a href="16798.php">Gilles Gouaillardet: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16806.php">Adrian Reber: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Reply:</strong> <a href="16806.php">Adrian Reber: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Adrian,
<br>
<p>about the
<br>
&quot;[n050409][[36216,1],1][btl_openib_xrc.c:58:mca_btl_openib_xrc_check_api] XRC
<br>
error: bad XRC API (require XRC from OFED pre 3.12). &quot; message.
<br>
<p>this means ompi was built on a system with OFED 3.12 or greater, and you
<br>
are running on a system with an earlier OFED release.
<br>
<p>please not Jeff recently pushed a patch related to that and this message
<br>
might be a false positive.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2015/01/19 14:17, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Adrian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i just fixed this in the master
</span><br>
<span class="quotelev1">&gt; (<a href="https://github.com/open-mpi/ompi/commit/d14daf40d041f7a0a8e9d85b3bfd5eb570495fd2">https://github.com/open-mpi/ompi/commit/d14daf40d041f7a0a8e9d85b3bfd5eb570495fd2</a>)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the root cause is a corner case was not handled correctly :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Type_hvector(20000, 1, 0, MPI_INT, &amp;type);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; type has extent = 4 *but* size = 80000
</span><br>
<span class="quotelev1">&gt; ob1 used to test only the extent to determine whether the message should
</span><br>
<span class="quotelev1">&gt; be sent inlined or not
</span><br>
<span class="quotelev1">&gt; extent &lt;= 256 means try to send the message inline
</span><br>
<span class="quotelev1">&gt; that meant a fragment of size 80000 (which is greater than 65536 e.g.
</span><br>
<span class="quotelev1">&gt; max default size for IB) was allocated,
</span><br>
<span class="quotelev1">&gt; and that failed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; now both extent and size are tested, so the message is not sent inline,
</span><br>
<span class="quotelev1">&gt; and it just works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16798.php">http://www.open-mpi.org/community/lists/devel/2015/01/16798.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16800.php">George Bosilca: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Previous message:</strong> <a href="16798.php">Gilles Gouaillardet: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>In reply to:</strong> <a href="16798.php">Gilles Gouaillardet: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16806.php">Adrian Reber: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Reply:</strong> <a href="16806.php">Adrian Reber: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
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
