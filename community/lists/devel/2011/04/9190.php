<?
$subject_val = "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 12:38:02 2011" -->
<!-- isoreceived="20110414163802" -->
<!-- sent="Thu, 14 Apr 2011 18:37:57 +0200" -->
<!-- isosent="20110414163757" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly" -->
<!-- id="4DA722E5.2070209_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C0F9051A-A14E-4D4E-98D1-3F23B8C055F4_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 12:37:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9191.php">Brice Goglin: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9189.php">George Bosilca: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>In reply to:</strong> <a href="9189.php">George Bosilca: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9193.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<li><strong>Reply:</strong> <a href="9193.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 14/04/2011 17:58, George Bosilca a &#233;crit :
<br>
<span class="quotelev1">&gt; On Apr 13, 2011, at 20:07 , Ken Lloyd wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; George, Yes. GPUDirect eliminated an additional (host) memory buffering step between the HCA and the GPU that took CPU cycles.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; If this is the case then why do we need to use special memcpy functions to copy the data back into the host memory prior to using the send/recv protocol? If GPUDirect remove the need for host buffering then as soon as the memory is identified as being on the device (using the Unified Virtual Addressing), the device can deliver it directly to the network card.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>GPUDirect is only about using the same host buffer for DMA from/to both
<br>
the NIC and the GPU. Without GPUDirect, you have a host buffer for the
<br>
GPU and another one for IB (looks like some strange memory registration
<br>
problem to me...), and you have to memcpy between them in the middle .
<br>
<p>We're all confused with the name &quot;GPUDirect&quot; because we remember people
<br>
doing DMA directly between the NIC and a GPU or SCSI disk ten years ago.
<br>
GPUDirect doesn't go that far unfortunately :/
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9191.php">Brice Goglin: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9189.php">George Bosilca: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>In reply to:</strong> <a href="9189.php">George Bosilca: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9193.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<li><strong>Reply:</strong> <a href="9193.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
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
