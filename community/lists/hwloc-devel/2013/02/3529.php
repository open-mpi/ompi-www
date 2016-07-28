<?
$subject_val = "Re: [hwloc-devel] libpci: GPL";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  9 10:08:33 2013" -->
<!-- isoreceived="20130209150833" -->
<!-- sent="Sat, 9 Feb 2013 15:08:29 +0000" -->
<!-- isosent="20130209150829" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] libpci: GPL" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CD00E0_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5116625D.5010708_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] libpci: GPL<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-09 10:08:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3530.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Previous message:</strong> <a href="3528.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>In reply to:</strong> <a href="3527.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3511.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 9, 2013, at 9:51 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You know their usual license, but you can't check at runtime that the
</span><br>
<span class="quotelev1">&gt; libnuma/libxml/libpci you're actually linking to is the usual one with
</span><br>
<span class="quotelev1">&gt; the license you expect and not another one with same ABI but different
</span><br>
<span class="quotelev1">&gt; license.
</span><br>
<p>Sure, I understand that, but my point is that the set of libraries hwloc will use is fairly small -- the space is finite and examinable (by developers at development time).  When we choose to link in a new library to hwloc, it's possible to do the due diligence and know if there's a possibility if we'll be including GPL taint.
<br>
<p>For example, if someone writes a GPL version of libnuma someday, we'll be lying in our configure.  But the chances of that happening are incredibly small.  Right now, we know that if we link in libpci, there's a possibility that we're introducing GPL taint -- and we should therefore avoid it unless specifically requested.
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
<li><strong>Next message:</strong> <a href="3530.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>Previous message:</strong> <a href="3528.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<li><strong>In reply to:</strong> <a href="3527.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3511.php">Brice Goglin: "Re: [hwloc-devel] libpci: GPL"</a>
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
