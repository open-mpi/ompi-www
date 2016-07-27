<?
$subject_val = "Re: [hwloc-devel] merging plugins?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 05:07:47 2012" -->
<!-- isoreceived="20120925090747" -->
<!-- sent="Tue, 25 Sep 2012 11:07:41 +0200" -->
<!-- isosent="20120925090741" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] merging plugins?" -->
<!-- id="5061745D.8070806_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120925084818.GH6096_at_type.oeaw.ads" -->
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
<strong>Date:</strong> 2012-09-25 05:07:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3301.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3299.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>In reply to:</strong> <a href="3298.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3301.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3301.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 25/09/2012 10:48, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 25/09/2012 09:49, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One thing which can be confusing for the user is that core_linux goes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the core os list while core_libpci goes to the additional list.  It
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would probably be better to use a different class name. I actually don't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; currently understand what classes are used for.
</span><br>
<span class="quotelev2">&gt;&gt; The class name was initially used to distinguish between normal (core)
</span><br>
<span class="quotelev2">&gt;&gt; plugins and xml backends. It may be possible to completely remove it now
</span><br>
<span class="quotelev2">&gt;&gt; that component struct have a type, I'll check.
</span><br>
<span class="quotelev1">&gt; Ok. I was also hit by the fact that core_linux_x86 is not valid, only
</span><br>
<span class="quotelev1">&gt; one '_' is allowed.
</span><br>
<p>Right, this check doesn't make much sense anymore. I am removing it.
<br>
<p><span class="quotelev2">&gt;&gt; We have the &quot;core_xml&quot; component (generic xml support) and &quot;xml_libxml&quot;
</span><br>
<span class="quotelev2">&gt;&gt; + &quot;xml_nolibxml&quot; backends behind that. I am fine with removing the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;core_&quot; prefix, but I wonder if we should keep the &quot;xml_&quot; prefix for the
</span><br>
<span class="quotelev2">&gt;&gt; latter.
</span><br>
<span class="quotelev1">&gt; I'd say we should keep it. Just like I wanted to use core_linux_x86 (as
</span><br>
<span class="quotelev1">&gt; opposed to core_linux)
</span><br>
<p>Keep which one? &quot;core&quot; or &quot;core&quot; and &quot;xml&quot; ?
<br>
<p><span class="quotelev1">&gt; Well, that still looks hardcoded to me. Actually, a simple way would
</span><br>
<span class="quotelev1">&gt; be to order all plugins in just one list by priorities. When loading a
</span><br>
<span class="quotelev1">&gt; plugin, one checks whether the exclusion point of the plugin was
</span><br>
<span class="quotelev1">&gt; already filled or not, and load the plugin accordingly
</span><br>
<p>The good thing about this is that XML and synthetic can set exclusion
<br>
flags on OS+PCI+ADDITIONAL.
<br>
But we obviously don't want cuda, ... to set the ADDITIONAL exclusion
<br>
flag. So setting a exclusion flag would mean &quot;I don't want any plugin of
<br>
this type to be enabled&quot; (different from &quot;I don't want any plugin with
<br>
this exclusion flag to be set).
<br>
<p><p><span class="quotelev2">&gt;&gt; We should hide xml backends/plugins as much as possible in the doc, we
</span><br>
<span class="quotelev2">&gt;&gt; have old env variables to deal with those, no need to tell people that
</span><br>
<span class="quotelev2">&gt;&gt; the way it works changed internally.
</span><br>
<span class="quotelev1">&gt; You are talking about xml only, not other plugins, right?  Well, I
</span><br>
<span class="quotelev1">&gt; believe it still makes sense to expose the xml ones as loadable just
</span><br>
<span class="quotelev1">&gt; like the linuxx86 plugin is, or even a user-provided plugin.
</span><br>
<p>Yes only talking about XML.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3301.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3299.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>In reply to:</strong> <a href="3298.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3301.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3301.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
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
