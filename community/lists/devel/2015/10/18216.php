<?
$subject_val = "Re: [OMPI devel] Specifying networks/APIs for OMPI (was:	topic	for	agenda)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 17:48:17 2015" -->
<!-- isoreceived="20151020214817" -->
<!-- sent="Tue, 20 Oct 2015 21:47:55 +0000" -->
<!-- isosent="20151020214755" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Specifying networks/APIs for OMPI (was:	topic	for	agenda)" -->
<!-- id="6AF0F2AC-DE53-49AE-8371-3945D7667C04_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="70DA3A16-7F92-4906-A926-E57ACAE9D614_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Specifying networks/APIs for OMPI (was:	topic	for	agenda)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-20 17:47:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18217.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18215.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>In reply to:</strong> <a href="18214.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18227.php">Atchley, Scott: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 20, 2015, at 5:26 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Understood - but can we narrow it down a bit? Specifically, do we need both BTL and MTL access to the same network?
</span><br>
<p>That's what I'm saying: for usnic, I don't know yet (we haven't finished our tag matching implementation yet).  I suspect there will be benefits/tradeoffs for each.
<br>
<p><span class="quotelev1">&gt; This would cut the combinations by 2x right away. Then we could potentially remove the network-specific MTLs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then we just have to deal with UCX vs libfabric - so only the two decision levels (UCX vs libfabric, network)
</span><br>
<p>It's not just UCX and libfabric: there's the openib BTL, for example.  uGNI is similar -- it has it's own BTL, but it will also be available via libfabric.  Portals has a BTL and an MTL, too.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18217.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18215.php">Paul Hargrove: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<li><strong>In reply to:</strong> <a href="18214.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18227.php">Atchley, Scott: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
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
