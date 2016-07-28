<?
$subject_val = "Re: [OMPI devel] OpenMPI CUDA 5 readiness?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  4 10:16:42 2012" -->
<!-- isoreceived="20120904141642" -->
<!-- sent="Tue, 4 Sep 2012 07:16:35 -0700" -->
<!-- isosent="20120904141635" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI CUDA 5 readiness?" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E8C0CC447_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAGR4S9E5=CL94-zn7-oAPS7aSuSbfkM1aC7t_qX+6A5_QWvU4Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI CUDA 5 readiness?<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-04 10:16:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11472.php">Dmitry N. Mikushin: "[OMPI devel] Errors during VampirTrace wrappers compilation, when used with CUDA 5"</a>
<li><strong>Previous message:</strong> <a href="11470.php">Dmitry N. Mikushin: "Re: [OMPI devel] OpenMPI CUDA 5 readiness?"</a>
<li><strong>In reply to:</strong> <a href="11470.php">Dmitry N. Mikushin: "Re: [OMPI devel] OpenMPI CUDA 5 readiness?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11474.php">Andreas Knüpfer: "Re: [OMPI devel] OpenMPI CUDA 5 readiness?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Dimitry:
<br>
<p>Thanks for the information.  I am hoping the VampirTrace folks can comment on this since the issue seems to be in areas of the code they work in.
<br>
<p><p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: Dmitry N. Mikushin [mailto:maemarcus_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;Sent: Monday, September 03, 2012 1:37 PM
</span><br>
<span class="quotelev1">&gt;To: Rolf vandeVaart
</span><br>
<span class="quotelev1">&gt;Cc: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: Re: OpenMPI CUDA 5 readiness?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;CUDA 5 basically changes char* to void* in some functions. Attached is a small
</span><br>
<span class="quotelev1">&gt;patch which changes prototypes, depending on used CUDA version. Tested
</span><br>
<span class="quotelev1">&gt;with CUDA 5 preview and 4.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;- D.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;2012/9/2 Dmitry N. Mikushin &lt;maemarcus_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Dear Rolf,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FYI, looks like with CUDA 5 preview OpenMPI trunk fails to build due
</span><br>
<span class="quotelev2">&gt;&gt; to the following errors:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ svn info
</span><br>
<span class="quotelev2">&gt;&gt; Path: .
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a>
</span><br>
<span class="quotelev2">&gt;&gt; Repository Root: <a href="http://svn.open-mpi.org/svn/ompi">http://svn.open-mpi.org/svn/ompi</a> Repository UUID:
</span><br>
<span class="quotelev2">&gt;&gt; 63e3feb5-37d5-0310-a306-e8a459e722fe
</span><br>
<span class="quotelev2">&gt;&gt; Revision: 27216
</span><br>
<span class="quotelev2">&gt;&gt; Node Kind: directory
</span><br>
<span class="quotelev2">&gt;&gt; Schedule: normal
</span><br>
<span class="quotelev2">&gt;&gt; Last Changed Author: alekseys
</span><br>
<span class="quotelev2">&gt;&gt; Last Changed Rev: 27216
</span><br>
<span class="quotelev2">&gt;&gt; Last Changed Date: 2012-09-02 15:17:49 +0200 (Sun, 02 Sep 2012)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ../configure --prefix=$RPM_BUILD_ROOT/opt/kernelgen
</span><br>
<span class="quotelev2">&gt;&gt; --disable-mpi-interface-warning --with-cuda=/opt/cuda
</span><br>
<span class="quotelev2">&gt;&gt; --with-cuda-libdir=/usr/lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ make -j8
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:145:14:
</span><br>
<span class="quotelev2">&gt;&gt; error: conflicting types for 'cudaGetSymbolAddress'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/cuda/include/cuda_runtime_api.h:4261:39: note: previous
</span><br>
<span class="quotelev2">&gt;&gt; declaration of 'cudaGetSymbolAddress' was here
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:164:14:
</span><br>
<span class="quotelev2">&gt;&gt; error: conflicting types for 'cudaGetSymbolSize'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/cuda/include/cuda_runtime_api.h:4283:39: note: previous
</span><br>
<span class="quotelev2">&gt;&gt; declaration of 'cudaGetSymbolSize' was here
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:392:14:
</span><br>
<span class="quotelev2">&gt;&gt; error: conflicting types for 'cudaGetTextureReference'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/cuda/include/cuda_runtime_api.h:5060:39: note: previous
</span><br>
<span class="quotelev2">&gt;&gt; declaration of 'cudaGetTextureReference' was here
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:501:14:
</span><br>
<span class="quotelev2">&gt;&gt; error: conflicting types for 'cudaFuncGetAttributes'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/cuda/include/cuda_runtime_api.h:2242:58: note: previous
</span><br>
<span class="quotelev2">&gt;&gt; declaration of 'cudaFuncGetAttributes' was here
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:969:14:
</span><br>
<span class="quotelev2">&gt;&gt; error: conflicting types for 'cudaGetSurfaceReference'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/cuda/include/cuda_runtime_api.h:5112:39: note: previous
</span><br>
<span class="quotelev2">&gt;&gt; declaration of 'cudaGetSurfaceReference' was here
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:1565:14:
</span><br>
<span class="quotelev2">&gt;&gt; error: conflicting types for 'cudaFuncSetSharedMemConfig'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/cuda/include/cuda_runtime_api.h:2173:39: note: previous
</span><br>
<span class="quotelev2">&gt;&gt; declaration of 'cudaFuncSetSharedMemConfig' was here
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudart.c:2294:14: error:
</span><br>
<span class="quotelev2">&gt;&gt; conflicting types for 'cudaMemcpyToSymbol'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/cuda/include/cuda_runtime_api.h:3608:39: note: previous
</span><br>
<span class="quotelev2">&gt;&gt; declaration of 'cudaMemcpyToSymbol' was here
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudart.c:2310:14: error:
</span><br>
<span class="quotelev2">&gt;&gt; conflicting types for 'cudaMemcpyFromSymbol'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/cuda/include/cuda_runtime_api.h:3643:39: note: previous
</span><br>
<span class="quotelev2">&gt;&gt; declaration of 'cudaMemcpyFromSymbol' was here
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudart.c:2423:14: error:
</span><br>
<span class="quotelev2">&gt;&gt; conflicting types for 'cudaMemcpyToSymbolAsync'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/cuda/include/cuda_runtime_api.h:3990:39: note: previous
</span><br>
<span class="quotelev2">&gt;&gt; declaration of 'cudaMemcpyToSymbolAsync' was here
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudart.c:2439:14: error:
</span><br>
<span class="quotelev2">&gt;&gt; conflicting types for 'cudaMemcpyFromSymbolAsync'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/cuda/include/cuda_runtime_api.h:4032:39: note: previous
</span><br>
<span class="quotelev2">&gt;&gt; declaration of 'cudaMemcpyFromSymbolAsync' was here
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudart.c:2534:14: error:
</span><br>
<span class="quotelev2">&gt;&gt; conflicting types for 'cudaLaunch'
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/cuda/include/cuda_runtime_api.h:2209:39: note: previous
</span><br>
<span class="quotelev2">&gt;&gt; declaration of 'cudaLaunch' was here
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt; - Dima.
</span><br>
-----------------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11472.php">Dmitry N. Mikushin: "[OMPI devel] Errors during VampirTrace wrappers compilation, when used with CUDA 5"</a>
<li><strong>Previous message:</strong> <a href="11470.php">Dmitry N. Mikushin: "Re: [OMPI devel] OpenMPI CUDA 5 readiness?"</a>
<li><strong>In reply to:</strong> <a href="11470.php">Dmitry N. Mikushin: "Re: [OMPI devel] OpenMPI CUDA 5 readiness?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11474.php">Andreas Knüpfer: "Re: [OMPI devel] OpenMPI CUDA 5 readiness?"</a>
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
