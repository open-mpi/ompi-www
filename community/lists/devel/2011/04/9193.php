<?
$subject_val = "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 14 14:33:42 2011" -->
<!-- isoreceived="20110414183342" -->
<!-- sent="Thu, 14 Apr 2011 14:33:36 -0400" -->
<!-- isosent="20110414183336" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly" -->
<!-- id="89BED29C-5A2F-4896-8BD3-E5284109C4CA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DA722E5.2070209_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-14 14:33:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9194.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9192.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<li><strong>In reply to:</strong> <a href="9190.php">Brice Goglin: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9169.php">Ken Lloyd: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 14, 2011, at 12:37 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; GPUDirect is only about using the same host buffer for DMA from/to both
</span><br>
<span class="quotelev1">&gt; the NIC and the GPU. Without GPUDirect, you have a host buffer for the
</span><br>
<span class="quotelev1">&gt; GPU and another one for IB (looks like some strange memory registration
</span><br>
<span class="quotelev1">&gt; problem to me...), and you have to memcpy between them in the middle .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We're all confused with the name &quot;GPUDirect&quot; because we remember people
</span><br>
<span class="quotelev1">&gt; doing DMA directly between the NIC and a GPU or SCSI disk ten years ago.
</span><br>
<span class="quotelev1">&gt; GPUDirect doesn't go that far unfortunately :/
</span><br>
<p>Correct.  GPUDirect is a brilliant marketing name.  Its name has nothing to do with what it really is: the ability to register the same buffer to both CUDA and OpenFabrics.  
<br>
<p>As Brice says: GPUDirect does NOT send/receive data directly from the accelerator's memory.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9194.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9192.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<li><strong>In reply to:</strong> <a href="9190.php">Brice Goglin: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device	memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9169.php">Ken Lloyd: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
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
