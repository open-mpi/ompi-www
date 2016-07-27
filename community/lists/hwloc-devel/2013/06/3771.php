<?
$subject_val = "Re: [hwloc-devel] plugins inside plugin broken, as expected";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  3 14:11:14 2013" -->
<!-- isoreceived="20130603181114" -->
<!-- sent="Mon, 3 Jun 2013 20:11:06 +0200" -->
<!-- isosent="20130603181106" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] plugins inside plugin broken, as expected" -->
<!-- id="20130603181106.GF6912_at_type.youpi.perso.aquilenet.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51ACD727.6090507_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] plugins inside plugin broken, as expected<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-03 14:11:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3772.php">Guy Streeter: "[hwloc-devel] python bindings testing help needed"</a>
<li><strong>Previous message:</strong> <a href="3770.php">Brice Goglin: "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
<li><strong>In reply to:</strong> <a href="3770.php">Brice Goglin: "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3779.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
<li><strong>Reply:</strong> <a href="3779.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Mon 03 Jun 2013 19:50:26 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 03/06/2013 10:52, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Brice Goglin, le Mon 03 Jun 2013 10:46:49 +0200, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hwloc/bitmap.h is the biggest problem, plugins should be allowed to use
</span><br>
<span class="quotelev3">&gt; &gt;&gt; all of them but there are maaaaany of them. Splitting hwloc-bitmap.so
</span><br>
<span class="quotelev3">&gt; &gt;&gt; out of hwloc.so would be an easy way to solve this. The bitmap API is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; totally independent from the hwloc core anyway.
</span><br>
<span class="quotelev2">&gt; &gt; Having a libhwloc-plugin-helper.so for most functions is probably the
</span><br>
<span class="quotelev2">&gt; &gt; sanest way indeed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If both plugins and the core libhwloc use these functions, is there a
</span><br>
<span class="quotelev1">&gt; way to avoid having to pass both -lhwloc and -lhwloc-helper when linking
</span><br>
<span class="quotelev1">&gt; normal hwloc applications?
</span><br>
<p>If only plugins and the core use these functions, the application does
<br>
not have to use -lhwloc-helper at all. If the application uses them
<br>
(e.g. bitmap functions), then it would have to use -lhwloc-helper,
<br>
but we can probably as well simply provide the symbols in both
<br>
libhwloc-helper and libhwloc, so the application only needs -lhwloc. We
<br>
can probably do that for the helpers we know for sure they have no
<br>
state, such as bitmap functions.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3772.php">Guy Streeter: "[hwloc-devel] python bindings testing help needed"</a>
<li><strong>Previous message:</strong> <a href="3770.php">Brice Goglin: "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
<li><strong>In reply to:</strong> <a href="3770.php">Brice Goglin: "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3779.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
<li><strong>Reply:</strong> <a href="3779.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
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
