<?
$subject_val = "Re: [OMPI devel] RFC: CUDA register sm and openib host memory";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  2 10:33:06 2011" -->
<!-- isoreceived="20110802143306" -->
<!-- sent="Tue, 2 Aug 2011 10:32:55 -0400" -->
<!-- isosent="20110802143255" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: CUDA register sm and openib host memory" -->
<!-- id="49D0A3C1-FA65-4BE4-940B-26AA79818B57_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F30193639C35_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: CUDA register sm and openib host memory<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-02 10:32:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9582.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<li><strong>Previous message:</strong> <a href="9580.php">Josh Hursey: "Re: [OMPI devel] Using BLCR tools to checkpoint Open MPI applications"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9567.php">Rolf vandeVaart: "[OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9582.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<li><strong>Reply:</strong> <a href="9582.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf -
<br>
<p>Can you send a cumulative SVN diff against the SVN HEAD?
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Jul 28, 2011, at 5:52 PM, &quot;Rolf vandeVaart&quot; &lt;rvandevaart_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Add CUDA registration of host memory in sm and openib BTLs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: 8/4/2011
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; DETAILS: In order to improve performance of sending GPU device memory,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; we need to register the host memory with the CUDA framework.  These
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; changes allow that to happen.  These changes are somewhat different
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from what I proposed a while ago and I think a lot cleaner.  There is
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a new memory pool flag that indicates whether a piece of memory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; should be registered.  This allows us to register the sm memory and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the pre-posted openib memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The CUDA specific code is in the ompi/mca/common/cuda directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do not look at the configure.m4 code, as that is still not done.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here a link to the proposed changes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://bitbucket.org/rolfv/ompi-cuda-register">https://bitbucket.org/rolfv/ompi-cuda-register</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is a list of files that would change.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       VERSION
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       configure.ac
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/btl/openib/Makefile.am
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/mpool/sm/Makefile.am
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/mpool/sm/mpool_sm_module.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/mpool/mpool.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/pml/ob1/pml_ob1_sendreq.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/common/cuda
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/common/cuda/configure.m4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/common/cuda/common_cuda.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/common/cuda/help-mpi-common-cuda.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/common/cuda/Makefile.am
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/common/cuda/common_cuda.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       ompi/class/ompi_free_list.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9581/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9582.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<li><strong>Previous message:</strong> <a href="9580.php">Josh Hursey: "Re: [OMPI devel] Using BLCR tools to checkpoint Open MPI applications"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9567.php">Rolf vandeVaart: "[OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9582.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<li><strong>Reply:</strong> <a href="9582.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
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
