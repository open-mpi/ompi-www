<?
$subject_val = "[OMPI devel] RFC: CUDA register sm and openib host memory";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 28 17:52:21 2011" -->
<!-- isoreceived="20110728215221" -->
<!-- sent="Thu, 28 Jul 2011 14:52:14 -0700" -->
<!-- isosent="20110728215214" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: CUDA register sm and openib host memory" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F30193639C35_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: CUDA register sm and openib host memory<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-28 17:52:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9568.php">Maurice Feskanich: "[OMPI devel] question about vpid"</a>
<li><strong>Previous message:</strong> <a href="9566.php">Josh Hursey: "[OMPI devel] Fwd: [all-osl-users] Upgrade trac on sourcehaven"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9581.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9581.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9584.php">George Bosilca: "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Add CUDA registration of host memory in sm and openib BTLs.
<br>
<p>TIMEOUT: 8/4/2011
<br>
<p>DETAILS: In order to improve performance of sending GPU device memory,
<br>
we need to register the host memory with the CUDA framework.  These
<br>
changes allow that to happen.  These changes are somewhat different
<br>
from what I proposed a while ago and I think a lot cleaner.  There is
<br>
a new memory pool flag that indicates whether a piece of memory
<br>
should be registered.  This allows us to register the sm memory and
<br>
the pre-posted openib memory.
<br>
<p>The CUDA specific code is in the ompi/mca/common/cuda directory.
<br>
<p>Do not look at the configure.m4 code, as that is still not done.
<br>
<p>Here a link to the proposed changes:
<br>
<a href="https://bitbucket.org/rolfv/ompi-cuda-register">https://bitbucket.org/rolfv/ompi-cuda-register</a>
<br>
<p>Here is a list of files that would change.
<br>
M       VERSION
<br>
M       configure.ac
<br>
M       ompi/mca/btl/openib/btl_openib_component.c
<br>
M       ompi/mca/btl/openib/Makefile.am
<br>
M       ompi/mca/mpool/sm/Makefile.am
<br>
M       ompi/mca/mpool/sm/mpool_sm_module.c
<br>
M       ompi/mca/mpool/mpool.h
<br>
M       ompi/mca/pml/ob1/pml_ob1_sendreq.h
<br>
A       ompi/mca/common/cuda
<br>
A       ompi/mca/common/cuda/configure.m4
<br>
A       ompi/mca/common/cuda/common_cuda.c
<br>
A       ompi/mca/common/cuda/help-mpi-common-cuda.txt
<br>
A       ompi/mca/common/cuda/Makefile.am
<br>
A       ompi/mca/common/cuda/common_cuda.h
<br>
M       ompi/class/ompi_free_list.c
<br>
<p><p><p><p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9567/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9568.php">Maurice Feskanich: "[OMPI devel] question about vpid"</a>
<li><strong>Previous message:</strong> <a href="9566.php">Josh Hursey: "[OMPI devel] Fwd: [all-osl-users] Upgrade trac on sourcehaven"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9581.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9581.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2011/08/9584.php">George Bosilca: "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
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
