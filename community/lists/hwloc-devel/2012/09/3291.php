<?
$subject_val = "Re: [hwloc-devel] merging plugins?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 02:47:19 2012" -->
<!-- isoreceived="20120925064719" -->
<!-- sent="Tue, 25 Sep 2012 08:47:13 +0200" -->
<!-- isosent="20120925064713" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] merging plugins?" -->
<!-- id="20120925064713.GP13316_at_type.hotspot.internet-for-guests.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20120925064305.GO13316_at_type.hotspot.internet-for-guests.com" -->
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
<strong>Date:</strong> 2012-09-25 02:47:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3292.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3290.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>In reply to:</strong> <a href="3290.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3293.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault, le Tue 25 Sep 2012 08:43:05 +0200, a &#233;crit :
<br>
<span class="quotelev2">&gt; &gt; * Your HWLOC_PLUGINS variable is not about loading plugins, it's about
</span><br>
<span class="quotelev2">&gt; &gt; enabling core components. If it's only about changing the core OS
</span><br>
<span class="quotelev2">&gt; &gt; component, a single value is enough (a single core OS component is
</span><br>
<span class="quotelev2">&gt; &gt; used). If it's also about forcing additional core components (pci, cuda,
</span><br>
<span class="quotelev2">&gt; &gt; for instance to change their order?), we'll likely have to check that
</span><br>
<span class="quotelev2">&gt; &gt; we're not instantiating the the same one multiple times.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess I misunderstood when exactly which plugins are loaded, some
</span><br>
<span class="quotelev1">&gt; documentation might be useful.  Does hwloc just load all plugins it
</span><br>
<span class="quotelev1">&gt; finds in its path?  What makes it load the pci plugins, and not the
</span><br>
<span class="quotelev1">&gt; linuxx86 plugin?
</span><br>
<p>Also, I guess that we probably want that some plugins be enabled by
<br>
default if they are found (because they add useful information but
<br>
depend on an external dep), and that some others are not enabled by
<br>
default (because they add information, but e.g. to the expense of
<br>
computation time, due to e.g. measurements etc.).
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3292.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3290.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>In reply to:</strong> <a href="3290.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3293.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
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
