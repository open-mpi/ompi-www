<?
$subject_val = "Re: [hwloc-devel] merging plugins?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 03:27:03 2012" -->
<!-- isoreceived="20120925072703" -->
<!-- sent="Tue, 25 Sep 2012 09:26:58 +0200" -->
<!-- isosent="20120925072658" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] merging plugins?" -->
<!-- id="50615CC2.30508_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 03:26:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3294.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3292.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>In reply to:</strong> <a href="3290.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3294.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3294.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3295.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 25/09/2012 08:43, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice Goglin, le Tue 25 Sep 2012 07:41:48 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Le 25/09/2012 01:42, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2) Plugin support
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One thing that doesn't seem implemented yet is to choose another OS core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; plugin, e.g. to use x86 detection on Linux instead of /proc or /sys
</span><br>
<span class="quotelev3">&gt;&gt;&gt; detection.  This will be the same kind of thing with likwid / servet
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -based OS core plugins.  I have gotten the x86 detection code to get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; enabled with the attached code, which should be reproducable with other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OSes which support CPU binding.  How does it look like?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Indeed, I forget about this idea since Antoine didn't look at it at all.
</span><br>
<span class="quotelev2">&gt;&gt; Most of your code looks good. I just noted 2 points:
</span><br>
<span class="quotelev2">&gt;&gt; * Why not keeping the linux-x86 component always statically build? We
</span><br>
<span class="quotelev2">&gt;&gt; could even keep it inside topology-linux.c if they share a lot.
</span><br>
<span class="quotelev1">&gt; How will it get detected by the component core? If we add it to the
</span><br>
<span class="quotelev1">&gt; static component list, won't it be loaded by default?
</span><br>
<p>Let me try to answer all your emails at once :)
<br>
<p>On most OS, we already have multiple &quot;core os&quot; components, one native
<br>
(linux, ...) with priority 10 and the &quot;noos&quot; one with priority 0. If
<br>
nothing forces a specific component in the list (no env variable, no
<br>
set_xml, ...), we instantiate the first one (higher priority), which is
<br>
the native component when it exists.
<br>
<p>So I assume that you're x86 support would have priority somewhere
<br>
between 0 and 10, and the env variable would let us force use it first.
<br>
<p><span class="quotelev2">&gt;&gt; * Your HWLOC_PLUGINS variable is not about loading plugins, it's about
</span><br>
<span class="quotelev2">&gt;&gt; enabling core components. If it's only about changing the core OS
</span><br>
<span class="quotelev2">&gt;&gt; component, a single value is enough (a single core OS component is
</span><br>
<span class="quotelev2">&gt;&gt; used). If it's also about forcing additional core components (pci, cuda,
</span><br>
<span class="quotelev2">&gt;&gt; for instance to change their order?), we'll likely have to check that
</span><br>
<span class="quotelev2">&gt;&gt; we're not instantiating the the same one multiple times.
</span><br>
<span class="quotelev1">&gt; I guess I misunderstood when exactly which plugins are loaded, some
</span><br>
<span class="quotelev1">&gt; documentation might be useful.  Does hwloc just load all plugins it
</span><br>
<span class="quotelev1">&gt; finds in its path?  What makes it load the pci plugins, and not the
</span><br>
<span class="quotelev1">&gt; linuxx86 plugin?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Everything is &quot;loaded&quot; and added to some list. Only one is enabled in
<br>
the core os list. All are enabled in the additional list (except if some
<br>
flag in the core os component disables things, that's what XML/synthetic
<br>
do to disable PCI).
<br>
<p>pci (additional list) is always loaded, and it gets enabled except if
<br>
XML/synthetic set a flag.
<br>
<p>linuxx86 (os list) only gets enabled if first in the list (priority) or
<br>
an env var forces it.
<br>
<p><p><span class="quotelev1">&gt; Also, I guess that we probably want that some plugins be enabled by
</span><br>
<span class="quotelev1">&gt; default if they are found (because they add useful information but
</span><br>
<span class="quotelev1">&gt; depend on an external dep), and that some others are not enabled by
</span><br>
<span class="quotelev1">&gt; default (because they add information, but e.g. to the expense of
</span><br>
<span class="quotelev1">&gt; computation time, due to e.g. measurements etc.).
</span><br>
<p>We have no way to force disable one specific additional component.
<br>
Could be a &quot;expensive&quot; flag or &quot;cost&quot; in the component struct with a env
<br>
var.
<br>
And a syntax such as pci,^servet to select manually.
<br>
<p><span class="quotelev1">&gt; It could also be to use another PCI detection plugin that libpci.
</span><br>
<p>Ok, two good reason to let us change the list the additional components.
<br>
Do we want to specifiy the &quot;core OS&quot; component and the &quot;core additional&quot;
<br>
list in the same env var?
<br>
<p>There's currently no way to prevent two PCI backends to be used
<br>
simultaneously. Might use another flag so that only the first one
<br>
(libpci) or a specific one (env var) is enabled.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3294.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3292.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>In reply to:</strong> <a href="3290.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3294.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3294.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3295.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
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
