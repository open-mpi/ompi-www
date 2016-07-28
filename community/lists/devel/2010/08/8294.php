<?
$subject_val = "Re: [OMPI devel] knem_dma_min";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 18 16:58:44 2010" -->
<!-- isoreceived="20100818205844" -->
<!-- sent="Wed, 18 Aug 2010 22:54:25 +0200" -->
<!-- isosent="20100818205425" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] knem_dma_min" -->
<!-- id="4C6C4881.7050105_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C6C16AB.8090808_at_oracle.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-18 16:54:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8295.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23628"</a>
<li><strong>Previous message:</strong> <a href="8293.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] Outage of the OSL NFS server"</a>
<li><strong>In reply to:</strong> <a href="8291.php">Eugene Loh: "Re: [OMPI devel] knem_dma_min"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 18/08/2010 19:21, Eugene Loh a &#233;crit :
<br>
<span class="quotelev1">&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In  mca_btl_sm_get_sync(), I see this:
</span><br>
<span class="quotelev2">&gt;&gt;       /* Use the DMA flag if knem supports it *and* the segment length
</span><br>
<span class="quotelev2">&gt;&gt;        is greater than the cutoff.  Note that if the knem_dma_min
</span><br>
<span class="quotelev2">&gt;&gt;        value is 0 (i.e., the MCA param was set to 0), the segment size
</span><br>
<span class="quotelev2">&gt;&gt;        will never be larger than it, so DMA will never be used. */
</span><br>
<span class="quotelev2">&gt;&gt;     icopy.flags = 0;
</span><br>
<span class="quotelev2">&gt;&gt;     if (mca_btl_sm_component.knem_dma_min &lt;= dst-&gt;seg_len) {
</span><br>
<span class="quotelev2">&gt;&gt;         icopy.flags = mca_btl_sm_component.knem_dma_flag;
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm going to poke around some more, but this doesn't on the surface
</span><br>
<span class="quotelev2">&gt;&gt; make sense to me.  If knem_dma_min==0, it would seem as though the
</span><br>
<span class="quotelev2">&gt;&gt; segment size will *always* be at least that large and DMA will
</span><br>
<span class="quotelev2">&gt;&gt; *always* be used (if supported). 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Answering my own question (or guessing, in any case), maybe the code
</span><br>
<span class="quotelev1">&gt; is okay but the comment is misleading.  If knem_dma_min==0, then
</span><br>
<span class="quotelev1">&gt; mca_btl_sm_component_init() sets knem_dma_flag to 0.  So, the seg_len
</span><br>
<span class="quotelev1">&gt; test passes, but it has no effect.
</span><br>
<p>Yes, your understanding is correct. It looks like the comment was not
<br>
properly updated last time we changed the meaning of knem_dma_min.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8295.php">Wesley Bland: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r23628"</a>
<li><strong>Previous message:</strong> <a href="8293.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] Outage of the OSL NFS server"</a>
<li><strong>In reply to:</strong> <a href="8291.php">Eugene Loh: "Re: [OMPI devel] knem_dma_min"</a>
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
