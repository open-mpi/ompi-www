<?
$subject_val = "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 11:58:47 2011" -->
<!-- isoreceived="20110414155847" -->
<!-- sent="Thu, 14 Apr 2011 11:58:42 -0400" -->
<!-- isosent="20110414155842" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly" -->
<!-- id="C0F9051A-A14E-4D4E-98D1-3F23B8C055F4_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1302739644.30331.10.camel_at_localhost.localdomain" -->
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
<strong>Date:</strong> 2011-04-14 11:58:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9190.php">Brice Goglin: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<li><strong>Previous message:</strong> <a href="9188.php">Shamis, Pavel: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<li><strong>In reply to:</strong> <a href="9172.php">Ken Lloyd: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9190.php">Brice Goglin: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<li><strong>Reply:</strong> <a href="9190.php">Brice Goglin: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 13, 2011, at 20:07 , Ken Lloyd wrote:
<br>
<p><span class="quotelev1">&gt; George, Yes. GPUDirect eliminated an additional (host) memory buffering step between the HCA and the GPU that took CPU cycles.
</span><br>
<p>If this is the case then why do we need to use special memcpy functions to copy the data back into the host memory prior to using the send/recv protocol? If GPUDirect remove the need for host buffering then as soon as the memory is identified as being on the device (using the Unified Virtual Addressing), the device can deliver it directly to the network card.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p><span class="quotelev1">&gt; I was never very comfortable with the kernel patch necessary, nor the patched OFED required to make it all work.  Having said that, it did provide a ~14% improvement in throughput on some of my code. Not bad.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now comes GPUDirect 2.0 (mostly helping GPU-GPU across PCIe) and Unified Virtual Addressing. Holds great promise, but the real understanding comes from whitebox analysis, and instrumenting my app code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, 2011-04-13 at 17:21 -0400, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 13, 2011, at 14:48 , Rolf vandeVaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This work does not depend on GPU Direct.  It is making use of the fact that one can malloc memory, register it with IB, and register it with CUDA via the new 4.0 API cuMemHostRegister API.  Then one can copy device memory into this memory.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Wasn't that the point behind GPUDirect? To allow direct memory copy between the GPU and the network card without external intervention?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =====================
</span><br>
<span class="quotelev1">&gt; Kenneth A. Lloyd
</span><br>
<span class="quotelev1">&gt; CEO - Director of Systems Science
</span><br>
<span class="quotelev1">&gt; Watt Systems Technologies Inc.
</span><br>
<span class="quotelev1">&gt; www.wattsys.com
</span><br>
<span class="quotelev1">&gt; kenneth.lloyd_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This e-mail is covered by the Electronic Communications Privacy Act, 18 U.S.C. 2510-2521 and is intended only for the addressee named above. It may contain privileged or confidential information. If you are not the addressee you must not copy, distribute, disclose or use any of the information in it. If you have received it in error please delete it and immediately notify the sender.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>&quot;I disapprove of what you say, but I will defend to the death your right to say it&quot;
<br>
&nbsp;&nbsp;-- Evelyn Beatrice Hall
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9190.php">Brice Goglin: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<li><strong>Previous message:</strong> <a href="9188.php">Shamis, Pavel: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<li><strong>In reply to:</strong> <a href="9172.php">Ken Lloyd: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9190.php">Brice Goglin: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<li><strong>Reply:</strong> <a href="9190.php">Brice Goglin: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
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
