<?
$subject_val = "Re: [OMPI devel] knem_dma_min";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 18 13:22:16 2010" -->
<!-- isoreceived="20100818172216" -->
<!-- sent="Wed, 18 Aug 2010 10:21:47 -0700" -->
<!-- isosent="20100818172147" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] knem_dma_min" -->
<!-- id="4C6C16AB.8090808_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C6C153B.1020709_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] knem_dma_min<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-18 13:21:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8292.php">Ralf Wildenhues: "Re: [OMPI devel] [PATCH] openmpi: get it built with newer autoconf"</a>
<li><strong>Previous message:</strong> <a href="8290.php">Eugene Loh: "[OMPI devel] knem_dma_min"</a>
<li><strong>In reply to:</strong> <a href="8290.php">Eugene Loh: "[OMPI devel] knem_dma_min"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8294.php">Brice Goglin: "Re: [OMPI devel] knem_dma_min"</a>
<li><strong>Reply:</strong> <a href="8294.php">Brice Goglin: "Re: [OMPI devel] knem_dma_min"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; In  mca_btl_sm_get_sync(), I see this:
</span><br>
<span class="quotelev1">&gt;       /* Use the DMA flag if knem supports it *and* the segment length
</span><br>
<span class="quotelev1">&gt;        is greater than the cutoff.  Note that if the knem_dma_min
</span><br>
<span class="quotelev1">&gt;        value is 0 (i.e., the MCA param was set to 0), the segment size
</span><br>
<span class="quotelev1">&gt;        will never be larger than it, so DMA will never be used. */
</span><br>
<span class="quotelev1">&gt;     icopy.flags = 0;
</span><br>
<span class="quotelev1">&gt;     if (mca_btl_sm_component.knem_dma_min &lt;= dst-&gt;seg_len) {
</span><br>
<span class="quotelev1">&gt;         icopy.flags = mca_btl_sm_component.knem_dma_flag;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm going to poke around some more, but this doesn't on the surface 
</span><br>
<span class="quotelev1">&gt; make sense to me.  If knem_dma_min==0, it would seem as though the 
</span><br>
<span class="quotelev1">&gt; segment size will *always* be at least that large and DMA will 
</span><br>
<span class="quotelev1">&gt; *always* be used (if supported). 
</span><br>
<p>Answering my own question (or guessing, in any case), maybe the code is 
<br>
okay but the comment is misleading.  If knem_dma_min==0, then 
<br>
mca_btl_sm_component_init() sets knem_dma_flag to 0.  So, the seg_len 
<br>
test passes, but it has no effect.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8292.php">Ralf Wildenhues: "Re: [OMPI devel] [PATCH] openmpi: get it built with newer autoconf"</a>
<li><strong>Previous message:</strong> <a href="8290.php">Eugene Loh: "[OMPI devel] knem_dma_min"</a>
<li><strong>In reply to:</strong> <a href="8290.php">Eugene Loh: "[OMPI devel] knem_dma_min"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8294.php">Brice Goglin: "Re: [OMPI devel] knem_dma_min"</a>
<li><strong>Reply:</strong> <a href="8294.php">Brice Goglin: "Re: [OMPI devel] knem_dma_min"</a>
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
