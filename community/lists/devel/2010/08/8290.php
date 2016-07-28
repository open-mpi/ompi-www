<?
$subject_val = "[OMPI devel] knem_dma_min";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 18 13:15:54 2010" -->
<!-- isoreceived="20100818171554" -->
<!-- sent="Wed, 18 Aug 2010 10:15:39 -0700" -->
<!-- isosent="20100818171539" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] knem_dma_min" -->
<!-- id="4C6C153B.1020709_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] knem_dma_min<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-18 13:15:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8291.php">Eugene Loh: "Re: [OMPI devel] knem_dma_min"</a>
<li><strong>Previous message:</strong> <a href="8289.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openmpi: get it built with newer autoconf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8291.php">Eugene Loh: "Re: [OMPI devel] knem_dma_min"</a>
<li><strong>Reply:</strong> <a href="8291.php">Eugene Loh: "Re: [OMPI devel] knem_dma_min"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In  mca_btl_sm_get_sync(), I see this:
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* Use the DMA flag if knem supports it *and* the segment length
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;is greater than the cutoff.  Note that if the knem_dma_min
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;value is 0 (i.e., the MCA param was set to 0), the segment size
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;will never be larger than it, so DMA will never be used. */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;icopy.flags = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (mca_btl_sm_component.knem_dma_min &lt;= dst-&gt;seg_len) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;icopy.flags = mca_btl_sm_component.knem_dma_flag;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>I'm going to poke around some more, but this doesn't on the surface make 
<br>
sense to me.  If knem_dma_min==0, it would seem as though the segment 
<br>
size will *always* be at least that large and DMA will *always* be used 
<br>
(if supported).
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8291.php">Eugene Loh: "Re: [OMPI devel] knem_dma_min"</a>
<li><strong>Previous message:</strong> <a href="8289.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openmpi: get it built with newer autoconf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8291.php">Eugene Loh: "Re: [OMPI devel] knem_dma_min"</a>
<li><strong>Reply:</strong> <a href="8291.php">Eugene Loh: "Re: [OMPI devel] knem_dma_min"</a>
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
