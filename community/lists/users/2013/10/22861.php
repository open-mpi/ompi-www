<?
$subject_val = "[OMPI users] OpenMPI-1.7.3 - cuda support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 30 11:34:17 2013" -->
<!-- isoreceived="20131030153417" -->
<!-- sent="Wed, 30 Oct 2013 15:34:14 +0000" -->
<!-- isosent="20131030153414" -->
<!-- name="KESTENER Pierre" -->
<!-- email="pierre.kestener_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI-1.7.3 - cuda support" -->
<!-- id="123B4248067C9C49ABB98E5EA3F72B2416327BE2_at_E-EXDAGE-B1.extra.cea.fr" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI-1.7.3 - cuda support<br>
<strong>From:</strong> KESTENER Pierre (<em>pierre.kestener_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-30 11:34:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22862.php">Rolf vandeVaart: "Re: [OMPI users] OpenMPI-1.7.3 - cuda support"</a>
<li><strong>Previous message:</strong> <a href="22860.php">Ralph Castain: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22862.php">Rolf vandeVaart: "Re: [OMPI users] OpenMPI-1.7.3 - cuda support"</a>
<li><strong>Reply:</strong> <a href="22862.php">Rolf vandeVaart: "Re: [OMPI users] OpenMPI-1.7.3 - cuda support"</a>
<li><strong>Reply:</strong> <a href="22863.php">KESTENER Pierre: "Re: [OMPI users] OpenMPI-1.7.3 - cuda support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm having problems running a simple cuda-aware mpi application; the one found at
<br>
<a href="https://github.com/parallel-forall/code-samples/tree/master/posts/cuda-aware-mpi-example">https://github.com/parallel-forall/code-samples/tree/master/posts/cuda-aware-mpi-example</a>
<br>
<p>I have modified symbol ENV_LOCAL_RANK into OMPI_COMM_WORLD_LOCAL_RANK
<br>
My cluster has 2 K20m GPUs per node, with QLogic IB stack.
<br>
<p>The normal CUDA/MPI application works fine;
<br>
&nbsp;but the cuda-ware mpi app is crashing when using 2 MPI proc over the 2 GPUs of the same node:
<br>
the error message is:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Assertion failure at ptl.c:200: nbytes == msglen
<br>
I can send the complete backtrace from cuda-gdb if needed.
<br>
<p>The same app when running on 2 GPUs on 2 different nodes give another error:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;jacobi_cuda_aware_mpi:28280 terminated with signal 11 at PC=2aae9d7c9f78 SP=7fffc06c21f8.      Backtrace:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/gpfslocal/pub/local/lib64/libinfinipath.so.4(+0x8f78)[0x2aae9d7c9f78]
<br>
<p><p>Can someone give me hints where to look to track this problem ?
<br>
Thank you.
<br>
<p>Pierre Kestener.
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22861/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22862.php">Rolf vandeVaart: "Re: [OMPI users] OpenMPI-1.7.3 - cuda support"</a>
<li><strong>Previous message:</strong> <a href="22860.php">Ralph Castain: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22862.php">Rolf vandeVaart: "Re: [OMPI users] OpenMPI-1.7.3 - cuda support"</a>
<li><strong>Reply:</strong> <a href="22862.php">Rolf vandeVaart: "Re: [OMPI users] OpenMPI-1.7.3 - cuda support"</a>
<li><strong>Reply:</strong> <a href="22863.php">KESTENER Pierre: "Re: [OMPI users] OpenMPI-1.7.3 - cuda support"</a>
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
