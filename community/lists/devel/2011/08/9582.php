<?
$subject_val = "Re: [OMPI devel] RFC: CUDA register sm and openib host memory";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  2 10:39:50 2011" -->
<!-- isoreceived="20110802143950" -->
<!-- sent="Tue, 2 Aug 2011 07:39:42 -0700" -->
<!-- isosent="20110802143942" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: CUDA register sm and openib host memory" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3019363A08A_at_HQMAIL02.nvidia.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="49D0A3C1-FA65-4BE4-940B-26AA79818B57_at_cisco.com" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-02 10:39:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9583.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24977"</a>
<li><strong>Previous message:</strong> <a href="9581.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<li><strong>In reply to:</strong> <a href="9581.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9584.php">George Bosilca: "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, here it is attached.
<br>

<br>
Rolf
<br>

<br>
rvandevaart_at_[hidden]&lt;mailto:rvandevaart_at_[hidden]&gt;
<br>
781-275-5358
<br>

<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
<br>
Sent: Tuesday, August 02, 2011 10:33 AM
<br>
To: Open MPI Developers
<br>
Cc: Open MPI Developers
<br>
Subject: Re: [OMPI devel] RFC: CUDA register sm and openib host memory
<br>

<br>
Rolf -
<br>

<br>
Can you send a cumulative SVN diff against the SVN HEAD?
<br>

<br>
Sent from my phone. No type good.
<br>

<br>
On Jul 28, 2011, at 5:52 PM, &quot;Rolf vandeVaart&quot; &lt;rvandevaart_at_[hidden]&lt;mailto:rvandevaart_at_[hidden]&gt;&gt; wrote:
<br>
WHAT: Add CUDA registration of host memory in sm and openib BTLs.
<br>

<br>
TIMEOUT: 8/4/2011
<br>

<br>
DETAILS: In order to improve performance of sending GPU device memory,
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

<br>
The CUDA specific code is in the ompi/mca/common/cuda directory.
<br>

<br>
Do not look at the configure.m4 code, as that is still not done.
<br>

<br>
Here a link to the proposed changes:
<br>
<a href="https://bitbucket.org/rolfv/ompi-cuda-register">https://bitbucket.org/rolfv/ompi-cuda-register</a>
<br>

<br>
Here is a list of files that would change.
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

<br>

<br>

<br>
________________________________
<br>
This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
<br>
________________________________
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9582/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9582/cuda-patch">cuda-patch</a>
</ul>
<!-- attachment="cuda-patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9583.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24977"</a>
<li><strong>Previous message:</strong> <a href="9581.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<li><strong>In reply to:</strong> <a href="9581.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9584.php">George Bosilca: "Re: [OMPI devel] RFC: CUDA register sm and openib host memory"</a>
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
