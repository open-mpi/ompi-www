<?
$subject_val = "[OMPI devel] Errors during VampirTrace wrappers compilation, when used with CUDA 5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  4 10:28:26 2012" -->
<!-- isoreceived="20120904142826" -->
<!-- sent="Tue, 4 Sep 2012 16:28:11 +0200" -->
<!-- isosent="20120904142811" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="[OMPI devel] Errors during VampirTrace wrappers compilation, when used with CUDA 5" -->
<!-- id="CAGR4S9Gr15Nft-9Fwo1sedX4VeeqK5JDwQBke-4sUFEL6361sQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Errors during VampirTrace wrappers compilation, when used with CUDA 5<br>
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-04 10:28:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11473.php">Jeff Squyres: "Re: [OMPI devel] RFC: hostfile setting of #slots"</a>
<li><strong>Previous message:</strong> <a href="11471.php">Rolf vandeVaart: "Re: [OMPI devel] OpenMPI CUDA 5 readiness?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh, sorry, I did not realize this is actually a problem on VampirTrace
<br>
site! Then, I'm changing topic and forwarding this back to OpenMPI.
<br>
<p>Thanks,
<br>
- D.
<br>
<p>2012/9/4 Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hello Dimitry:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the information.  I am hoping the VampirTrace folks can comment on this since the issue seems to be in areas of the code they work in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt;From: Dmitry N. Mikushin [mailto:maemarcus_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt;Sent: Monday, September 03, 2012 1:37 PM
</span><br>
<span class="quotelev2">&gt;&gt;To: Rolf vandeVaart
</span><br>
<span class="quotelev2">&gt;&gt;Cc: devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;Subject: Re: OpenMPI CUDA 5 readiness?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;CUDA 5 basically changes char* to void* in some functions. Attached is a small
</span><br>
<span class="quotelev2">&gt;&gt;patch which changes prototypes, depending on used CUDA version. Tested
</span><br>
<span class="quotelev2">&gt;&gt;with CUDA 5 preview and 4.2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;- D.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;2012/9/2 Dmitry N. Mikushin &lt;maemarcus_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Rolf,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FYI, looks like with CUDA 5 preview OpenMPI trunk fails to build due
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the following errors:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ svn info
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Path: .
</span><br>
<span class="quotelev3">&gt;&gt;&gt; URL: <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Repository Root: <a href="http://svn.open-mpi.org/svn/ompi">http://svn.open-mpi.org/svn/ompi</a> Repository UUID:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 63e3feb5-37d5-0310-a306-e8a459e722fe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Revision: 27216
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Node Kind: directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Schedule: normal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Last Changed Author: alekseys
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Last Changed Rev: 27216
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Last Changed Date: 2012-09-02 15:17:49 +0200 (Sun, 02 Sep 2012)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ../configure --prefix=$RPM_BUILD_ROOT/opt/kernelgen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --disable-mpi-interface-warning --with-cuda=/opt/cuda
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-cuda-libdir=/usr/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ make -j8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:145:14:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error: conflicting types for 'cudaGetSymbolAddress'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/cuda/include/cuda_runtime_api.h:4261:39: note: previous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declaration of 'cudaGetSymbolAddress' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:164:14:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error: conflicting types for 'cudaGetSymbolSize'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/cuda/include/cuda_runtime_api.h:4283:39: note: previous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declaration of 'cudaGetSymbolSize' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:392:14:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error: conflicting types for 'cudaGetTextureReference'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/cuda/include/cuda_runtime_api.h:5060:39: note: previous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declaration of 'cudaGetTextureReference' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:501:14:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error: conflicting types for 'cudaFuncGetAttributes'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/cuda/include/cuda_runtime_api.h:2242:58: note: previous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declaration of 'cudaFuncGetAttributes' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:969:14:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error: conflicting types for 'cudaGetSurfaceReference'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/cuda/include/cuda_runtime_api.h:5112:39: note: previous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declaration of 'cudaGetSurfaceReference' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:1565:14:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error: conflicting types for 'cudaFuncSetSharedMemConfig'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/cuda/include/cuda_runtime_api.h:2173:39: note: previous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declaration of 'cudaFuncSetSharedMemConfig' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudart.c:2294:14: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conflicting types for 'cudaMemcpyToSymbol'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/cuda/include/cuda_runtime_api.h:3608:39: note: previous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declaration of 'cudaMemcpyToSymbol' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudart.c:2310:14: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conflicting types for 'cudaMemcpyFromSymbol'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/cuda/include/cuda_runtime_api.h:3643:39: note: previous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declaration of 'cudaMemcpyFromSymbol' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudart.c:2423:14: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conflicting types for 'cudaMemcpyToSymbolAsync'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/cuda/include/cuda_runtime_api.h:3990:39: note: previous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declaration of 'cudaMemcpyToSymbolAsync' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudart.c:2439:14: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conflicting types for 'cudaMemcpyFromSymbolAsync'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/cuda/include/cuda_runtime_api.h:4032:39: note: previous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declaration of 'cudaMemcpyFromSymbolAsync' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudart.c:2534:14: error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conflicting types for 'cudaLaunch'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/local/cuda/include/cuda_runtime_api.h:2209:39: note: previous
</span><br>
<span class="quotelev3">&gt;&gt;&gt; declaration of 'cudaLaunch' was here
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Dima.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11472/openmpi.cuda.patch">openmpi.cuda.patch</a>
</ul>
<!-- attachment="openmpi.cuda.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11473.php">Jeff Squyres: "Re: [OMPI devel] RFC: hostfile setting of #slots"</a>
<li><strong>Previous message:</strong> <a href="11471.php">Rolf vandeVaart: "Re: [OMPI devel] OpenMPI CUDA 5 readiness?"</a>
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
