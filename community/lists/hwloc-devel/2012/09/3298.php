<?
$subject_val = "Re: [hwloc-devel] merging plugins?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 04:48:31 2012" -->
<!-- isoreceived="20120925084831" -->
<!-- sent="Tue, 25 Sep 2012 10:48:18 +0200" -->
<!-- isosent="20120925084818" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] merging plugins?" -->
<!-- id="20120925084818.GH6096_at_type.oeaw.ads" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5061689F.6090009_at_inria.fr" -->
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
<strong>Date:</strong> 2012-09-25 04:48:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3299.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3297.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>In reply to:</strong> <a href="3296.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3300.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3300.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev3">&gt; &gt;&gt; And a syntax such as pci,^servet to select manually.
</span><br>
<span class="quotelev2">&gt; &gt; Why a ^?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This was for Jeff :)
</span><br>
<span class="quotelev1">&gt; When you specify which components to use in OMPI, you pass a
</span><br>
<span class="quotelev1">&gt; comma-separated list, and ^ is a negation.
</span><br>
<p>Ok, that's indeed what I understood, it was just conflicting with
<br>
what was mentioned above: we wanted to see servet already disabled by
<br>
default, and only enabled manually.
<br>
<p>Brice Goglin, le Tue 25 Sep 2012 10:17:57 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 25/09/2012 09:49, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; One thing which can be confusing for the user is that core_linux goes
</span><br>
<span class="quotelev2">&gt; &gt; to the core os list while core_libpci goes to the additional list.  It
</span><br>
<span class="quotelev2">&gt; &gt; would probably be better to use a different class name. I actually don't
</span><br>
<span class="quotelev2">&gt; &gt; currently understand what classes are used for.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The class name was initially used to distinguish between normal (core)
</span><br>
<span class="quotelev1">&gt; plugins and xml backends. It may be possible to completely remove it now
</span><br>
<span class="quotelev1">&gt; that component struct have a type, I'll check.
</span><br>
<p>Ok. I was also hit by the fact that core_linux_x86 is not valid, only
<br>
one '_' is allowed.
<br>
<p><span class="quotelev1">&gt; We have the &quot;core_xml&quot; component (generic xml support) and &quot;xml_libxml&quot;
</span><br>
<span class="quotelev1">&gt; + &quot;xml_nolibxml&quot; backends behind that. I am fine with removing the
</span><br>
<span class="quotelev1">&gt; &quot;core_&quot; prefix, but I wonder if we should keep the &quot;xml_&quot; prefix for the
</span><br>
<span class="quotelev1">&gt; latter.
</span><br>
<p>I'd say we should keep it. Just like I wanted to use core_linux_x86 (as
<br>
opposed to core_linux)
<br>
<p><span class="quotelev1">&gt; I can easily extend the current code to move pci components out of the
</span><br>
<span class="quotelev1">&gt; additional list, make a dedicated list and pick one based on
</span><br>
<span class="quotelev1">&gt; priority/envvar.
</span><br>
<p>Well, that still looks hardcoded to me. Actually, a simple way would be
<br>
to order all plugins in just one list by priorities.  When loading a
<br>
plugin, one checks whether the exclusion point of the plugin was already
<br>
filled or not, and load the plugin accordingly.
<br>
<p><span class="quotelev1">&gt; We should hide xml backends/plugins as much as possible in the doc, we
</span><br>
<span class="quotelev1">&gt; have old env variables to deal with those, no need to tell people that
</span><br>
<span class="quotelev1">&gt; the way it works changed internally.
</span><br>
<p>You are talking about xml only, not other plugins, right?  Well, I
<br>
believe it still makes sense to expose the xml ones as loadable just
<br>
like the linuxx86 plugin is, or even a user-provided plugin.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3299.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3297.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>In reply to:</strong> <a href="3296.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3300.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3300.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
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
