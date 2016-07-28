<?
$subject_val = "[OMPI devel] OpenMPI CUDA 5 readiness?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep  2 14:41:56 2012" -->
<!-- isoreceived="20120902184156" -->
<!-- sent="Sun, 2 Sep 2012 20:41:51 +0200" -->
<!-- isosent="20120902184151" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="[OMPI devel] OpenMPI CUDA 5 readiness?" -->
<!-- id="CAGR4S9Gw+Hwn=kjae1FtsN8-HO72vBipuOX69BjbC2qAzGOVgQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] OpenMPI CUDA 5 readiness?<br>
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-02 14:41:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11470.php">Dmitry N. Mikushin: "Re: [OMPI devel] OpenMPI CUDA 5 readiness?"</a>
<li><strong>Previous message:</strong> <a href="11468.php">Ralph Castain: "Re: [OMPI devel] RFC: hostfile setting of #slots"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11470.php">Dmitry N. Mikushin: "Re: [OMPI devel] OpenMPI CUDA 5 readiness?"</a>
<li><strong>Reply:</strong> <a href="11470.php">Dmitry N. Mikushin: "Re: [OMPI devel] OpenMPI CUDA 5 readiness?"</a>
<li><strong>Reply:</strong> <a href="11474.php">Andreas Knüpfer: "Re: [OMPI devel] OpenMPI CUDA 5 readiness?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Rolf,
<br>
<p>FYI, looks like with CUDA 5 preview OpenMPI trunk fails to build due
<br>
to the following errors:
<br>
<p>$ svn info
<br>
Path: .
<br>
URL: <a href="http://svn.open-mpi.org/svn/ompi/trunk">http://svn.open-mpi.org/svn/ompi/trunk</a>
<br>
Repository Root: <a href="http://svn.open-mpi.org/svn/ompi">http://svn.open-mpi.org/svn/ompi</a>
<br>
Repository UUID: 63e3feb5-37d5-0310-a306-e8a459e722fe
<br>
Revision: 27216
<br>
Node Kind: directory
<br>
Schedule: normal
<br>
Last Changed Author: alekseys
<br>
Last Changed Rev: 27216
<br>
Last Changed Date: 2012-09-02 15:17:49 +0200 (Sun, 02 Sep 2012)
<br>
<p>$ ../configure --prefix=$RPM_BUILD_ROOT/opt/kernelgen
<br>
--disable-mpi-interface-warning --with-cuda=/opt/cuda
<br>
--with-cuda-libdir=/usr/lib
<br>
<p>$ make -j8
<br>
...
<br>
../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:145:14:
<br>
error: conflicting types for 'cudaGetSymbolAddress'
<br>
/usr/local/cuda/include/cuda_runtime_api.h:4261:39: note: previous
<br>
declaration of 'cudaGetSymbolAddress' was here
<br>
../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:164:14:
<br>
error: conflicting types for 'cudaGetSymbolSize'
<br>
/usr/local/cuda/include/cuda_runtime_api.h:4283:39: note: previous
<br>
declaration of 'cudaGetSymbolSize' was here
<br>
../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:392:14:
<br>
error: conflicting types for 'cudaGetTextureReference'
<br>
/usr/local/cuda/include/cuda_runtime_api.h:5060:39: note: previous
<br>
declaration of 'cudaGetTextureReference' was here
<br>
../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:501:14:
<br>
error: conflicting types for 'cudaFuncGetAttributes'
<br>
/usr/local/cuda/include/cuda_runtime_api.h:2242:58: note: previous
<br>
declaration of 'cudaFuncGetAttributes' was here
<br>
../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:969:14:
<br>
error: conflicting types for 'cudaGetSurfaceReference'
<br>
/usr/local/cuda/include/cuda_runtime_api.h:5112:39: note: previous
<br>
declaration of 'cudaGetSurfaceReference' was here
<br>
../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudartwrap.c:1565:14:
<br>
error: conflicting types for 'cudaFuncSetSharedMemConfig'
<br>
/usr/local/cuda/include/cuda_runtime_api.h:2173:39: note: previous
<br>
declaration of 'cudaFuncSetSharedMemConfig' was here
<br>
../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudart.c:2294:14: error:
<br>
conflicting types for 'cudaMemcpyToSymbol'
<br>
/usr/local/cuda/include/cuda_runtime_api.h:3608:39: note: previous
<br>
declaration of 'cudaMemcpyToSymbol' was here
<br>
../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudart.c:2310:14: error:
<br>
conflicting types for 'cudaMemcpyFromSymbol'
<br>
/usr/local/cuda/include/cuda_runtime_api.h:3643:39: note: previous
<br>
declaration of 'cudaMemcpyFromSymbol' was here
<br>
../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudart.c:2423:14: error:
<br>
conflicting types for 'cudaMemcpyToSymbolAsync'
<br>
/usr/local/cuda/include/cuda_runtime_api.h:3990:39: note: previous
<br>
declaration of 'cudaMemcpyToSymbolAsync' was here
<br>
../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudart.c:2439:14: error:
<br>
conflicting types for 'cudaMemcpyFromSymbolAsync'
<br>
/usr/local/cuda/include/cuda_runtime_api.h:4032:39: note: previous
<br>
declaration of 'cudaMemcpyFromSymbolAsync' was here
<br>
../../../../../../ompi/contrib/vt/vt/vtlib/vt_cudart.c:2534:14: error:
<br>
conflicting types for 'cudaLaunch'
<br>
/usr/local/cuda/include/cuda_runtime_api.h:2209:39: note: previous
<br>
declaration of 'cudaLaunch' was here
<br>
<p>Best regards,
<br>
- Dima.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11470.php">Dmitry N. Mikushin: "Re: [OMPI devel] OpenMPI CUDA 5 readiness?"</a>
<li><strong>Previous message:</strong> <a href="11468.php">Ralph Castain: "Re: [OMPI devel] RFC: hostfile setting of #slots"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11470.php">Dmitry N. Mikushin: "Re: [OMPI devel] OpenMPI CUDA 5 readiness?"</a>
<li><strong>Reply:</strong> <a href="11470.php">Dmitry N. Mikushin: "Re: [OMPI devel] OpenMPI CUDA 5 readiness?"</a>
<li><strong>Reply:</strong> <a href="11474.php">Andreas Knüpfer: "Re: [OMPI devel] OpenMPI CUDA 5 readiness?"</a>
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
