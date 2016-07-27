<?
$subject_val = "Re: [hwloc-devel] merging plugins?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 01:40:44 2012" -->
<!-- isoreceived="20120925054044" -->
<!-- sent="Tue, 25 Sep 2012 07:40:38 +0200" -->
<!-- isosent="20120925054038" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] merging plugins?" -->
<!-- id="506143D6.2010802_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120924234209.GR10728_at_type.hotspot.internet-for-guests.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] merging plugins?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 01:40:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3290.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3288.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>In reply to:</strong> <a href="3288.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3290.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3290.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3292.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 25/09/2012 01:42, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev2">&gt;&gt; 2) Plugin support
</span><br>
<span class="quotelev1">&gt; One thing that doesn't seem implemented yet is to choose another OS core
</span><br>
<span class="quotelev1">&gt; plugin, e.g. to use x86 detection on Linux instead of /proc or /sys
</span><br>
<span class="quotelev1">&gt; detection.  This will be the same kind of thing with likwid / servet
</span><br>
<span class="quotelev1">&gt; -based OS core plugins.  I have gotten the x86 detection code to get
</span><br>
<span class="quotelev1">&gt; enabled with the attached code, which should be reproducable with other
</span><br>
<span class="quotelev1">&gt; OSes which support CPU binding.  How does it look like?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Indeed, I forget about this idea since Antoine didn't look at it at all.
<br>
Most of your code looks good. I just noted 2 points:
<br>
* Why not keeping the linux-x86 component always statically build? We
<br>
could even keep it inside topology-linux.c if they share a lot.
<br>
* Your HWLOC_PLUGINS variable is not about loading plugins, it's about
<br>
enabling core components. If it's only about changing the core OS
<br>
component, a single value is enough (a single core OS component is
<br>
used). If it's also about forcing additional core components (pci, cuda,
<br>
for instance to change their order?), we'll likely have to check that
<br>
we're not instantiating the the same one multiple times.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3290.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3288.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>In reply to:</strong> <a href="3288.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3290.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3290.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3292.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
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
