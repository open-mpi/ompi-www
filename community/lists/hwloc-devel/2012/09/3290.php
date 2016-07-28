<?
$subject_val = "Re: [hwloc-devel] merging plugins?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 02:43:11 2012" -->
<!-- isoreceived="20120925064311" -->
<!-- sent="Tue, 25 Sep 2012 08:43:05 +0200" -->
<!-- isosent="20120925064305" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] merging plugins?" -->
<!-- id="20120925064305.GO13316_at_type.hotspot.internet-for-guests.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="506143D6.2010802_at_inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 02:43:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3291.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3289.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>In reply to:</strong> <a href="3289.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3291.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3291.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3293.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Tue 25 Sep 2012 07:41:48 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 25/09/2012 01:42, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 2) Plugin support
</span><br>
<span class="quotelev2">&gt; &gt; One thing that doesn't seem implemented yet is to choose another OS core
</span><br>
<span class="quotelev2">&gt; &gt; plugin, e.g. to use x86 detection on Linux instead of /proc or /sys
</span><br>
<span class="quotelev2">&gt; &gt; detection.  This will be the same kind of thing with likwid / servet
</span><br>
<span class="quotelev2">&gt; &gt; -based OS core plugins.  I have gotten the x86 detection code to get
</span><br>
<span class="quotelev2">&gt; &gt; enabled with the attached code, which should be reproducable with other
</span><br>
<span class="quotelev2">&gt; &gt; OSes which support CPU binding.  How does it look like?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed, I forget about this idea since Antoine didn't look at it at all.
</span><br>
<span class="quotelev1">&gt; Most of your code looks good. I just noted 2 points:
</span><br>
<span class="quotelev1">&gt; * Why not keeping the linux-x86 component always statically build? We
</span><br>
<span class="quotelev1">&gt; could even keep it inside topology-linux.c if they share a lot.
</span><br>
<p>How will it get detected by the component core? If we add it to the
<br>
static component list, won't it be loaded by default?
<br>
<p><span class="quotelev1">&gt; * Your HWLOC_PLUGINS variable is not about loading plugins, it's about
</span><br>
<span class="quotelev1">&gt; enabling core components. If it's only about changing the core OS
</span><br>
<span class="quotelev1">&gt; component, a single value is enough (a single core OS component is
</span><br>
<span class="quotelev1">&gt; used). If it's also about forcing additional core components (pci, cuda,
</span><br>
<span class="quotelev1">&gt; for instance to change their order?), we'll likely have to check that
</span><br>
<span class="quotelev1">&gt; we're not instantiating the the same one multiple times.
</span><br>
<p>I guess I misunderstood when exactly which plugins are loaded, some
<br>
documentation might be useful.  Does hwloc just load all plugins it
<br>
finds in its path?  What makes it load the pci plugins, and not the
<br>
linuxx86 plugin?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3291.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3289.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>In reply to:</strong> <a href="3289.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3291.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3291.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3293.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
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
