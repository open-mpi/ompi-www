<?
$subject_val = "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 17:21:41 2011" -->
<!-- isoreceived="20110413212141" -->
<!-- sent="Wed, 13 Apr 2011 17:21:36 -0400" -->
<!-- isosent="20110413212136" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly" -->
<!-- id="13FBB71B-BE58-45A4-AA2E-6BB8CDE81975_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F30188D4E466_at_HQMAIL02.nvidia.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-13 17:21:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9172.php">Ken Lloyd: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9170.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>In reply to:</strong> <a href="9170.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9172.php">Ken Lloyd: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Reply:</strong> <a href="9172.php">Ken Lloyd: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 13, 2011, at 14:48 , Rolf vandeVaart wrote:
<br>
<p><span class="quotelev1">&gt; This work does not depend on GPU Direct.  It is making use of the fact that one can malloc memory, register it with IB, and register it with CUDA via the new 4.0 API cuMemHostRegister API.  Then one can copy device memory into this memory.
</span><br>
<p>Wasn't that the point behind GPUDirect? To allow direct memory copy between the GPU and the network card without external intervention?
<br>
<p>&nbsp;&nbsp;george.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9172.php">Ken Lloyd: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9170.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>In reply to:</strong> <a href="9170.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9172.php">Ken Lloyd: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Reply:</strong> <a href="9172.php">Ken Lloyd: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
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
