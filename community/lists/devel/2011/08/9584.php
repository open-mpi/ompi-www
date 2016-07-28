<?
$subject_val = "Re: [OMPI devel] RFC: CUDA register sm and openib host memory";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  2 10:50:30 2011" -->
<!-- isoreceived="20110802145030" -->
<!-- sent="Tue, 2 Aug 2011 16:50:24 +0200" -->
<!-- isosent="20110802145024" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: CUDA register sm and openib host memory" -->
<!-- id="A13D903A-5031-4855-875E-A82D498C09CA_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-02 10:50:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9585.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<li><strong>Previous message:</strong> <a href="9583.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24977"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9567.php">Rolf vandeVaart: "[OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9585.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<li><strong>Reply:</strong> <a href="9585.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf,
<br>
<p>Can we have some more details on how this will improve performance of sending GPU device memory? I fail to see how registering the backend shared memory file with CUDA is supposed to do anything at all, as this memory is internal to Open MPI and not supposed to be visible at any other level.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 28, 2011, at 23:52 , Rolf vandeVaart wrote:
<br>
<p><span class="quotelev1">&gt; DETAILS: In order to improve performance of sending GPU device memory,
</span><br>
<span class="quotelev1">&gt; we need to register the host memory with the CUDA framework.  These
</span><br>
<span class="quotelev1">&gt; changes allow that to happen.  These changes are somewhat different
</span><br>
<span class="quotelev1">&gt; from what I proposed a while ago and I think a lot cleaner.  There is
</span><br>
<span class="quotelev1">&gt; a new memory pool flag that indicates whether a piece of memory
</span><br>
<span class="quotelev1">&gt; should be registered.  This allows us to register the sm memory and
</span><br>
<span class="quotelev1">&gt; the pre-posted openib memory.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9585.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<li><strong>Previous message:</strong> <a href="9583.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24977"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/07/9567.php">Rolf vandeVaart: "[OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9585.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<li><strong>Reply:</strong> <a href="9585.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
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
