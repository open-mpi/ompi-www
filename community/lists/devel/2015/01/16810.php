<?
$subject_val = "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 21 09:43:23 2015" -->
<!-- isoreceived="20150121144323" -->
<!-- sent="Wed, 21 Jan 2015 14:43:20 +0000" -->
<!-- isosent="20150121144320" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed" -->
<!-- id="94E47D87-F4B3-465C-910F-2DF1C17A5D12_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkV7vrMNqUjL7ZxAbxaPr3wYZivmj8E6GCxvGdfStg+ubA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-21 09:43:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16811.php">George Bosilca: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Previous message:</strong> <a href="16809.php">George Bosilca: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>In reply to:</strong> <a href="16809.php">George Bosilca: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16811.php">George Bosilca: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Reply:</strong> <a href="16811.php">George Bosilca: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 20, 2015, at 10:10 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Receiving with such a datatype is illegal in MPI (sending is allowed as the buffer is supposed read only during the operation). In fact having any datatype that span over the same memory region twice is illegal to be used for any receive operations. The reason is simple, an MPI implementation can move the data in any order it wants, and as MPI guaranteed only the FIFO ordering of the matching such a datatype will break the determinism of the application.
</span><br>
<p>George: does the DDT engine check for this kind of condition?  Shouldn't it refuse the generate a datatype like this?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16811.php">George Bosilca: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Previous message:</strong> <a href="16809.php">George Bosilca: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>In reply to:</strong> <a href="16809.php">George Bosilca: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16811.php">George Bosilca: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
<li><strong>Reply:</strong> <a href="16811.php">George Bosilca: "Re: [OMPI devel] btl_openib.c:1200: mca_btl_openib_alloc: Assertion `qp != 255' failed"</a>
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
