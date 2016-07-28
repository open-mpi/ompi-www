<?
$subject_val = "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 19 00:17:48 2015" -->
<!-- isoreceived="20150119051748" -->
<!-- sent="Mon, 19 Jan 2015 14:17:56 +0900" -->
<!-- isosent="20150119051756" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed" -->
<!-- id="54BC9384.7070807_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed" -->
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
<strong>Date:</strong> 2015-01-19 00:17:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16799.php">Gilles Gouaillardet: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Previous message:</strong> <a href="16797.php">Adrian Reber: "[OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Maybe in reply to:</strong> <a href="16797.php">Adrian Reber: "[OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16799.php">Gilles Gouaillardet: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Reply:</strong> <a href="16799.php">Gilles Gouaillardet: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Reply:</strong> <a href="16800.php">George Bosilca: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Reply:</strong> <a href="16801.php">George Bosilca: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Adrian,
<br>
<p>i just fixed this in the master
<br>
(<a href="https://github.com/open-mpi/ompi/commit/d14daf40d041f7a0a8e9d85b3bfd5eb570495fd2">https://github.com/open-mpi/ompi/commit/d14daf40d041f7a0a8e9d85b3bfd5eb570495fd2</a>)
<br>
<p>the root cause is a corner case was not handled correctly :
<br>
<p>MPI_Type_hvector(20000, 1, 0, MPI_INT, &amp;type);
<br>
<p>type has extent = 4 *but* size = 80000
<br>
ob1 used to test only the extent to determine whether the message should
<br>
be sent inlined or not
<br>
extent &lt;= 256 means try to send the message inline
<br>
that meant a fragment of size 80000 (which is greater than 65536 e.g.
<br>
max default size for IB) was allocated,
<br>
and that failed.
<br>
<p>now both extent and size are tested, so the message is not sent inline,
<br>
and it just works.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16799.php">Gilles Gouaillardet: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Previous message:</strong> <a href="16797.php">Adrian Reber: "[OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Maybe in reply to:</strong> <a href="16797.php">Adrian Reber: "[OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16799.php">Gilles Gouaillardet: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Reply:</strong> <a href="16799.php">Gilles Gouaillardet: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Reply:</strong> <a href="16800.php">George Bosilca: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Reply:</strong> <a href="16801.php">George Bosilca: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
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
