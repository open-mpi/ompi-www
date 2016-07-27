<?
$subject_val = "Re: [hwloc-devel] plugins inside plugin broken, as expected";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  3 13:49:32 2013" -->
<!-- isoreceived="20130603174932" -->
<!-- sent="Mon, 03 Jun 2013 19:49:27 +0200" -->
<!-- isosent="20130603174927" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] plugins inside plugin broken, as expected" -->
<!-- id="51ACD727.6090507_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20130603085209.GZ5926_at_type.bordeaux.inria.fr" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-03 13:49:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3771.php">Samuel Thibault: "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
<li><strong>Previous message:</strong> <a href="3769.php">Samuel Thibault: "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
<li><strong>In reply to:</strong> <a href="3769.php">Samuel Thibault: "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3771.php">Samuel Thibault: "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
<li><strong>Reply:</strong> <a href="3771.php">Samuel Thibault: "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 03/06/2013 10:52, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice Goglin, le Mon 03 Jun 2013 10:46:49 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; hwloc/bitmap.h is the biggest problem, plugins should be allowed to use
</span><br>
<span class="quotelev2">&gt;&gt; all of them but there are maaaaany of them. Splitting hwloc-bitmap.so
</span><br>
<span class="quotelev2">&gt;&gt; out of hwloc.so would be an easy way to solve this. The bitmap API is
</span><br>
<span class="quotelev2">&gt;&gt; totally independent from the hwloc core anyway.
</span><br>
<span class="quotelev1">&gt; Having a libhwloc-plugin-helper.so for most functions is probably the
</span><br>
<span class="quotelev1">&gt; sanest way indeed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>If both plugins and the core libhwloc use these functions, is there a
<br>
way to avoid having to pass both -lhwloc and -lhwloc-helper when linking
<br>
normal hwloc applications? That doesn't matter for people using
<br>
pkg-config, but I guess some people hardwire -lhwloc on there link
<br>
command-line.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3771.php">Samuel Thibault: "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
<li><strong>Previous message:</strong> <a href="3769.php">Samuel Thibault: "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
<li><strong>In reply to:</strong> <a href="3769.php">Samuel Thibault: "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3771.php">Samuel Thibault: "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
<li><strong>Reply:</strong> <a href="3771.php">Samuel Thibault: "Re: [hwloc-devel] plugins inside plugin broken, as expected"</a>
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
