<?
$subject_val = "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 19 02:31:47 2015" -->
<!-- isoreceived="20150119073147" -->
<!-- sent="Mon, 19 Jan 2015 02:31:44 -0500" -->
<!-- isosent="20150119073144" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed" -->
<!-- id="CAMJJpkXrinbJuXiGpg=vHfqfBJep-jkT7oQbn2r0NxBN7VyzJQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-19 02:31:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16801.php">George Bosilca: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Previous message:</strong> <a href="16799.php">Gilles Gouaillardet: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>In reply to:</strong> <a href="16798.php">Gilles Gouaillardet: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16801.php">George Bosilca: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The extent should not be part of the decision, what matters is the amount
<br>
of data to be pushed on the wire, and not it's span in memory.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Mon, Jan 19, 2015 at 12:17 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Adrian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i just fixed this in the master
</span><br>
<span class="quotelev1">&gt; (
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/d14daf40d041f7a0a8e9d85b3bfd5eb570495fd2">https://github.com/open-mpi/ompi/commit/d14daf40d041f7a0a8e9d85b3bfd5eb570495fd2</a>
</span><br>
<span class="quotelev1">&gt; )
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16798.php">http://www.open-mpi.org/community/lists/devel/2015/01/16798.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16800/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16801.php">George Bosilca: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Previous message:</strong> <a href="16799.php">Gilles Gouaillardet: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>In reply to:</strong> <a href="16798.php">Gilles Gouaillardet: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16801.php">George Bosilca: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
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
