<?
$subject_val = "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 17:08:47 2015" -->
<!-- isoreceived="20151020210847" -->
<!-- sent="Tue, 20 Oct 2015 21:08:24 +0000" -->
<!-- isosent="20151020210824" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)" -->
<!-- id="B64CC334-875A-43AA-9041-1CCABDF952BA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0522DFA0-D9EB-4301-99C6-CF5120AB5144_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-20 17:08:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18214.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18212.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>In reply to:</strong> <a href="18212.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18214.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
<li><strong>Reply:</strong> <a href="18214.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 20, 2015, at 4:49 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your last point about the qualifiers is kinda what I was hinting at in my note. If you have usnic support via the OFi MTL, why do you also need it as a BTL? The BTL needs libfabric anyway, yes? So is there some value in having both methods?
</span><br>
<p>Maybe, maybe not.  I don't know yet.
<br>
<p>Likely, there will be benefits/tradeoffs to each path.
<br>
<p><span class="quotelev1">&gt; Same question for PSM and PSM2, and probably others I imagine. Do we really need all these multiple ways?
</span><br>
<p>MXM is the same category.
<br>
<p>UCX will add additional combinations to get the same underlying network, too.
<br>
<p>So if both libfabric and UCX get market penetration, we'll *have* to address the issue of having multiple API paths to get to the same underlying network.
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
<li><strong>Next message:</strong> <a href="18214.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
<li><strong>Previous message:</strong> <a href="18212.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<li><strong>In reply to:</strong> <a href="18212.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic for	agenda)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18214.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
<li><strong>Reply:</strong> <a href="18214.php">Ralph Castain: "Re: [OMPI devel] Specifying networks/APIs for OMPI (was: topic	for	agenda)"</a>
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
