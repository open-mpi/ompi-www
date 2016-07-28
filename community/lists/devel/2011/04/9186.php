<?
$subject_val = "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 11:39:09 2011" -->
<!-- isoreceived="20110414153909" -->
<!-- sent="Thu, 14 Apr 2011 11:39:03 -0400" -->
<!-- isosent="20110414153903" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly" -->
<!-- id="75204EB1-BF57-4E17-851C-A64E54CB9E1A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F30188D4E40B_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 11:39:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9187.php">Ken Lloyd: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9185.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>In reply to:</strong> <a href="9167.php">Rolf vandeVaart: "[OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 13, 2011, at 12:47 PM, Rolf vandeVaart wrote:
<br>
<p><span class="quotelev1">&gt; An initial implementation can be viewed at:
</span><br>
<span class="quotelev1">&gt; <a href="https://bitbucket.org/rolfv/ompi-trunk-cuda-3">https://bitbucket.org/rolfv/ompi-trunk-cuda-3</a>
</span><br>
<p>Random comments on the code...
<br>
<p>1. I see changes like this:
<br>
<p>mca_btl_sm_la_LIBADD += \
<br>
&nbsp;&nbsp;&nbsp;$(top_ompi_builddir)/ompi/mca/common/cuda/libmca_common_cuda.la
<br>
<p>But I don't see any common/cuda function calls in the SM BTL.  Why the link? 
<br>
<p>2. I see a new &quot;opal_output(-1,..&quot; in btl_tcp.c.  If it's a developer-only opal_output, it should be compiled out by default.
<br>
<p>3. In ompi_free_list.c, you call posix_memalign(), protected by OMPI_CUDA_SUPPORT.  Does posix_memalign() exist in Windows, and/or does OMPI_CUDE_SUPPORT exclude Windows?
<br>
<p>4. Along with what Pasha said, it seems odd to put a CUDA-specific value in mpool.h (MCA_MPOOL_FLAGS_CUDA_MEM).
<br>
<p>--&gt; Some explanation is required for this comment.  My gut reaction is to have portable code in OMPI, such that we can support multiple registration-necessary memory pools.  That being said, NVIDIA is the first mover here; is there any other interest in ever wanting to be able to register other kinds of memory, too?  Or should we let NVIDIA do it this way on the assumption that it will be years before anyone *might* want to use some other multi-memory-registration scheme?  I can see both sides of the coin here...
<br>
<p>5. In pml_ob1_sendreq.h, you set size to 0 if OMPI_CUDA_SUPPORT.  That means that any OMPI compiled with CUDA support will have this value -- regardless if they're using accelerators or not.  Shouldn't there be a compile-time check AND a run-time check for this kind of thing?
<br>
<p>6. Instead of #if OMPI_CUDA_SUPPORT to select which memcpy to use, why not have a different opal memcopy MCA component for the cuda memcpy?  Would that make a bunch of convertor #if OMPI_CUDA_SUPPORT's go away?
<br>
<p>7. Using the name OMPI_* down in OPAL doesn't seem like a good idea (there's still some OMPI_* preprocessor names down in there that haven't yet been converted to OPAL_*, but adding new OMPI_* names down there doesn't seem to be a good idea).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9187.php">Ken Lloyd: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9185.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>In reply to:</strong> <a href="9167.php">Rolf vandeVaart: "[OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
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
