<?
$subject_val = "Re: [OMPI devel] OpenMPI CUDA 5 readiness?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  3 13:37:21 2012" -->
<!-- isoreceived="20120903173721" -->
<!-- sent="Mon, 3 Sep 2012 19:37:16 +0200" -->
<!-- isosent="20120903173716" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI CUDA 5 readiness?" -->
<!-- id="CAGR4S9E5=CL94-zn7-oAPS7aSuSbfkM1aC7t_qX+6A5_QWvU4Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAGR4S9Gw+Hwn=kjae1FtsN8-HO72vBipuOX69BjbC2qAzGOVgQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-03 13:37:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11471.php">Rolf vandeVaart: "Re: [OMPI devel] OpenMPI CUDA 5 readiness?"</a>
<li><strong>Previous message:</strong> <a href="11469.php">Dmitry N. Mikushin: "[OMPI devel] OpenMPI CUDA 5 readiness?"</a>
<li><strong>In reply to:</strong> <a href="11469.php">Dmitry N. Mikushin: "[OMPI devel] OpenMPI CUDA 5 readiness?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11471.php">Rolf vandeVaart: "Re: [OMPI devel] OpenMPI CUDA 5 readiness?"</a>
<li><strong>Reply:</strong> <a href="11471.php">Rolf vandeVaart: "Re: [OMPI devel] OpenMPI CUDA 5 readiness?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
CUDA 5 basically changes char* to void* in some functions. Attached is
<br>
a small patch which changes prototypes, depending on used CUDA
<br>
version. Tested with CUDA 5 preview and 4.2.
<br>
<p>- D.
<br>
<p>2012/9/2 Dmitry N. Mikushin &lt;maemarcus_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Dear Rolf,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FYI, looks like with CUDA 5 preview OpenMPI trunk fails to build due
</span><br>
<span class="quotelev1">&gt; to the following errors:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ svn info
</span><br>
<span class="quotelev1">&gt; Path: .
</span><br>
<span class="quotelev1">&gt; URL: <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a>
</span><br>
<span class="quotelev1">&gt; Repository Root: <a href="http://svn.open-mpi.org/svn/ompi">http://svn.open-mpi.org/svn/ompi</a>
</span><br>
<span class="quotelev1">&gt; Repository UUID: 63e3feb5-37d5-0310-a306-e8a459e722fe
</span><br>
<span class="quotelev1">&gt; Revision: 27216
</span><br>
<span class="quotelev1">&gt; Node Kind: directory
</span><br>
<span class="quotelev1">&gt; Schedule: normal
</span><br>
<span class="quotelev1">&gt; Last Changed Author: alekseys
</span><br>
<span class="quotelev1">&gt; Last Changed Rev: 27216
</span><br>
<span class="quotelev1">&gt; Last Changed Date: 2012-09-02 15:17:49 +0200 (Sun, 02 Sep 2012)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ../configure --prefix=$RPM_BUILD_ROOT/opt/kernelgen
</span><br>
<span class="quotelev1">&gt; --disable-mpi-interface-warning --with-cuda=/opt/cuda
</span><br>
<span class="quotelev1">&gt; --with-cuda-libdir=/usr/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ make -j8
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:145:14:
</span><br>
<span class="quotelev1">&gt; error: conflicting types for 'cudaGetSymbolAddress'
</span><br>
<span class="quotelev1">&gt; /usr/local/cuda/include/cuda_runtime_api.h:4261:39: note: previous
</span><br>
<span class="quotelev1">&gt; declaration of 'cudaGetSymbolAddress' was here
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:164:14:
</span><br>
<span class="quotelev1">&gt; error: conflicting types for 'cudaGetSymbolSize'
</span><br>
<span class="quotelev1">&gt; /usr/local/cuda/include/cuda_runtime_api.h:4283:39: note: previous
</span><br>
<span class="quotelev1">&gt; declaration of 'cudaGetSymbolSize' was here
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:392:14:
</span><br>
<span class="quotelev1">&gt; error: conflicting types for 'cudaGetTextureReference'
</span><br>
<span class="quotelev1">&gt; /usr/local/cuda/include/cuda_runtime_api.h:5060:39: note: previous
</span><br>
<span class="quotelev1">&gt; declaration of 'cudaGetTextureReference' was here
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:501:14:
</span><br>
<span class="quotelev1">&gt; error: conflicting types for 'cudaFuncGetAttributes'
</span><br>
<span class="quotelev1">&gt; /usr/local/cuda/include/cuda_runtime_api.h:2242:58: note: previous
</span><br>
<span class="quotelev1">&gt; declaration of 'cudaFuncGetAttributes' was here
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:969:14:
</span><br>
<span class="quotelev1">&gt; error: conflicting types for 'cudaGetSurfaceReference'
</span><br>
<span class="quotelev1">&gt; /usr/local/cuda/include/cuda_runtime_api.h:5112:39: note: previous
</span><br>
<span class="quotelev1">&gt; declaration of 'cudaGetSurfaceReference' was here
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:1565:14:
</span><br>
<span class="quotelev1">&gt; error: conflicting types for 'cudaFuncSetSharedMemConfig'
</span><br>
<span class="quotelev1">&gt; /usr/local/cuda/include/cuda_runtime_api.h:2173:39: note: previous
</span><br>
<span class="quotelev1">&gt; declaration of 'cudaFuncSetSharedMemConfig' was here
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudart.c:2294:14: error:
</span><br>
<span class="quotelev1">&gt; conflicting types for 'cudaMemcpyToSymbol'
</span><br>
<span class="quotelev1">&gt; /usr/local/cuda/include/cuda_runtime_api.h:3608:39: note: previous
</span><br>
<span class="quotelev1">&gt; declaration of 'cudaMemcpyToSymbol' was here
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudart.c:2310:14: error:
</span><br>
<span class="quotelev1">&gt; conflicting types for 'cudaMemcpyFromSymbol'
</span><br>
<span class="quotelev1">&gt; /usr/local/cuda/include/cuda_runtime_api.h:3643:39: note: previous
</span><br>
<span class="quotelev1">&gt; declaration of 'cudaMemcpyFromSymbol' was here
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudart.c:2423:14: error:
</span><br>
<span class="quotelev1">&gt; conflicting types for 'cudaMemcpyToSymbolAsync'
</span><br>
<span class="quotelev1">&gt; /usr/local/cuda/include/cuda_runtime_api.h:3990:39: note: previous
</span><br>
<span class="quotelev1">&gt; declaration of 'cudaMemcpyToSymbolAsync' was here
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudart.c:2439:14: error:
</span><br>
<span class="quotelev1">&gt; conflicting types for 'cudaMemcpyFromSymbolAsync'
</span><br>
<span class="quotelev1">&gt; /usr/local/cuda/include/cuda_runtime_api.h:4032:39: note: previous
</span><br>
<span class="quotelev1">&gt; declaration of 'cudaMemcpyFromSymbolAsync' was here
</span><br>
<span class="quotelev1">&gt; ../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudart.c:2534:14: error:
</span><br>
<span class="quotelev1">&gt; conflicting types for 'cudaLaunch'
</span><br>
<span class="quotelev1">&gt; /usr/local/cuda/include/cuda_runtime_api.h:2209:39: note: previous
</span><br>
<span class="quotelev1">&gt; declaration of 'cudaLaunch' was here
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; - Dima.
</span><br>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11470/openmpi.cuda.patch">openmpi.cuda.patch</a>
</ul>
<!-- attachment="openmpi.cuda.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11471.php">Rolf vandeVaart: "Re: [OMPI devel] OpenMPI CUDA 5 readiness?"</a>
<li><strong>Previous message:</strong> <a href="11469.php">Dmitry N. Mikushin: "[OMPI devel] OpenMPI CUDA 5 readiness?"</a>
<li><strong>In reply to:</strong> <a href="11469.php">Dmitry N. Mikushin: "[OMPI devel] OpenMPI CUDA 5 readiness?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11471.php">Rolf vandeVaart: "Re: [OMPI devel] OpenMPI CUDA 5 readiness?"</a>
<li><strong>Reply:</strong> <a href="11471.php">Rolf vandeVaart: "Re: [OMPI devel] OpenMPI CUDA 5 readiness?"</a>
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
