<?
$subject_val = "Re: [hwloc-devel] roadmap";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 28 18:41:16 2010" -->
<!-- isoreceived="20100928224116" -->
<!-- sent="Wed, 29 Sep 2010 00:41:10 +0200" -->
<!-- isosent="20100928224110" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] roadmap" -->
<!-- id="4CA26F06.9070308_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100928092921.GE5630_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] roadmap<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-28 18:41:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1354.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Previous message:</strong> <a href="1352.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] tarball growing"</a>
<li><strong>In reply to:</strong> <a href="1351.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1354.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Reply:</strong> <a href="1354.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/09/2010 11:29, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice Goglin, le Fri 24 Sep 2010 13:31:06 +0200, a &#233;crit :
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; By the way, what's the proper way to do the latter?
</span><br>
<span class="quotelev2">&gt;&gt; #pragma weak hwloc_cpuset_foo = hwloc_bitmap_foo ?
</span><br>
<span class="quotelev2">&gt;&gt; use __hwloc_attribute_alias instead ?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; There is no proper way unfortunately: the Mach-O format used by MacOS
</span><br>
<span class="quotelev1">&gt; does not support such aliases.  Explicit functions need to be
</span><br>
<span class="quotelev1">&gt; provided.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Should be done now.
<br>
<p>Jeff, can you check on your Mac that lstopo from 1.0 works with libhwloc
<br>
from the latest bitmap branch?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1354.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Previous message:</strong> <a href="1352.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] tarball growing"</a>
<li><strong>In reply to:</strong> <a href="1351.php">Samuel Thibault: "Re: [hwloc-devel] roadmap"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1354.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
<li><strong>Reply:</strong> <a href="1354.php">Jeff Squyres: "Re: [hwloc-devel] roadmap"</a>
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
