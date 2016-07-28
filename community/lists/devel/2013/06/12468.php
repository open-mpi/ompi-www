<?
$subject_val = "Re: [OMPI devel] BTL sendi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 18 16:52:19 2013" -->
<!-- isoreceived="20130618205219" -->
<!-- sent="Tue, 18 Jun 2013 20:52:10 +0000" -->
<!-- isosent="20130618205210" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] BTL sendi" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F68E818_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F6877A9_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] BTL sendi<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-18 16:52:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12469.php">Aurélien Bouteiller: "Re: [OMPI devel] [EXTERNAL] Re: RFC: support for Mellanox's &quot;libhcoll&quot; library"</a>
<li><strong>Previous message:</strong> <a href="12467.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update IMB in ompi-tests"</a>
<li><strong>In reply to:</strong> <a href="12461.php">Jeff Squyres (jsquyres): "[OMPI devel] BTL sendi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12474.php">George Bosilca: "Re: [OMPI devel] BTL sendi"</a>
<li><strong>Reply:</strong> <a href="12474.php">George Bosilca: "Re: [OMPI devel] BTL sendi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George replied to me in IM -- posting here for completeness:
<br>
<p><span class="quotelev1">&gt; Yes, there is a reason. if sendi succeeds, it sends a very small data (at least on the devices that supports it), otherwise it returns a descriptor similar to btl_alloc()
</span><br>
<span class="quotelev1">&gt; thus you will have to pack the data yourself, and the PML doesn't know if IN_PLACE should be used or not
</span><br>
<span class="quotelev1">&gt; thus the resulting solution is slower than the default in the spart_prepare case (which is prepare_src + send)
</span><br>
<p><p>On Jun 14, 2013, at 3:46 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In working on the upcoming Cisco USNIC BTL, we noticed that btl.sendi is invoked by OB1 in the non-MCA_BTL_FLAGS_SEND_INPLACE case.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a reason for this?  Or is it only because no one who uses INPLACE has cared about sendi?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12469.php">Aurélien Bouteiller: "Re: [OMPI devel] [EXTERNAL] Re: RFC: support for Mellanox's &quot;libhcoll&quot; library"</a>
<li><strong>Previous message:</strong> <a href="12467.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Update IMB in ompi-tests"</a>
<li><strong>In reply to:</strong> <a href="12461.php">Jeff Squyres (jsquyres): "[OMPI devel] BTL sendi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12474.php">George Bosilca: "Re: [OMPI devel] BTL sendi"</a>
<li><strong>Reply:</strong> <a href="12474.php">George Bosilca: "Re: [OMPI devel] BTL sendi"</a>
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
