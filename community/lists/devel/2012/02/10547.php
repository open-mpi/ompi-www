<?
$subject_val = "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 21 17:10:03 2012" -->
<!-- isoreceived="20120221221003" -->
<!-- sent="Tue, 21 Feb 2012 15:09:59 -0700 (MST)" -->
<!-- isosent="20120221220959" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified" -->
<!-- id="alpine.OSX.2.00.1202211442390.11396_at_panthera.lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F35E8230A8CA_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-21 17:09:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10548.php">Eugene Loh: "[OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10546.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<li><strong>In reply to:</strong> <a href="10546.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 21 Feb 2012, Rolf vandeVaart wrote:
<br>
<p><span class="quotelev1">&gt; I think I am OK with this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alternatively, you could have done something like is done in the TCP BTL where the payload and header are added together for the frag size?
</span><br>
<span class="quotelev1">&gt; To state more clearly, I was trying to say you could do something similar to what is done at line 1015 in btl_tcp_component.c and ended up with the same results?
</span><br>
<p>That will more or less work for my current use case (I found those examples this morning). I would have to pad my fragments to ensure cache line alignment (if that ends up being faster for SMSG).
<br>
<p><span class="quotelev1">&gt; This is just making the payload buffer a different chunk of memory than the headers?
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; I am just trying to understand the motivation for the change.
</span><br>
<p>The motivation is to allow the payload to be aligned separately from the header. Currently, if I want payload alignment I have to pad the header to get the correct alignment on the data.
<br>
<p><span class="quotelev1">&gt; I think the way you have it is more correct so we can support the case where someone specifies the header size and the payload size differently and expects the free list code to do the right thing.
</span><br>
<p>This is one of my motivations. When writing the uGNI BTL I expected the free list to do the &quot;right thing&quot; and allocate a payload buffer even if I didn't specify an mpool.
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10548.php">Eugene Loh: "[OMPI devel] v1.5 r25914 DOA"</a>
<li><strong>Previous message:</strong> <a href="10546.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
<li><strong>In reply to:</strong> <a href="10546.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Allocate free list payload if free list isn't specified"</a>
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
