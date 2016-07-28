<?
$subject_val = "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 11:00:52 2015" -->
<!-- isoreceived="20150121160052" -->
<!-- sent="Wed, 21 Jan 2015 11:00:51 -0500" -->
<!-- isosent="20150121160051" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed" -->
<!-- id="CAMJJpkX-c7Kw2N90woJK5hfvMaO88trD3w_6__1voQvcBU_y5A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="94E47D87-F4B3-465C-910F-2DF1C17A5D12_at_cisco.com" -->
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
<strong>Date:</strong> 2015-01-21 11:00:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16812.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Previous message:</strong> <a href="16810.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>In reply to:</strong> <a href="16810.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16812.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Reply:</strong> <a href="16812.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As I said in my previous email it is legal to use such an overlapping
<br>
datatype for send operations. Thus, the datatype engine cannot prevent one
<br>
from creating them.
<br>
<p>We had some degree of overlap detection at some point in the past, but the
<br>
algorithm is quadratic in time and memory with the number of datatype
<br>
entries, so the cost was prohibitive.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Wed, Jan 21, 2015 at 9:43 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Jan 20, 2015, at 10:10 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Receiving with such a datatype is illegal in MPI (sending is allowed as
</span><br>
<span class="quotelev1">&gt; the buffer is supposed read only during the operation). In fact having any
</span><br>
<span class="quotelev1">&gt; datatype that span over the same memory region twice is illegal to be used
</span><br>
<span class="quotelev1">&gt; for any receive operations. The reason is simple, an MPI implementation can
</span><br>
<span class="quotelev1">&gt; move the data in any order it wants, and as MPI guaranteed only the FIFO
</span><br>
<span class="quotelev1">&gt; ordering of the matching such a datatype will break the determinism of the
</span><br>
<span class="quotelev1">&gt; application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George: does the DDT engine check for this kind of condition?  Shouldn't
</span><br>
<span class="quotelev1">&gt; it refuse the generate a datatype like this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16810.php">http://www.open-mpi.org/community/lists/devel/2015/01/16810.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16811/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16812.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Previous message:</strong> <a href="16810.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>In reply to:</strong> <a href="16810.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16812.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Reply:</strong> <a href="16812.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
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
