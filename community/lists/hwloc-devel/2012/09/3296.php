<?
$subject_val = "Re: [hwloc-devel] merging plugins?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 04:17:40 2012" -->
<!-- isoreceived="20120925081740" -->
<!-- sent="Tue, 25 Sep 2012 10:17:35 +0200" -->
<!-- isosent="20120925081735" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] merging plugins?" -->
<!-- id="5061689F.6090009_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120925074944.GE6096_at_type.oeaw.ads" -->
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
<strong>Date:</strong> 2012-09-25 04:17:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3297.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3295.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>In reply to:</strong> <a href="3295.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3297.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3297.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3298.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3302.php">Jeff Squyres: "Re: [hwloc-devel] merging plugins?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 25/09/2012 09:49, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; One thing which can be confusing for the user is that core_linux goes
</span><br>
<span class="quotelev1">&gt; to the core os list while core_libpci goes to the additional list.  It
</span><br>
<span class="quotelev1">&gt; would probably be better to use a different class name. I actually don't
</span><br>
<span class="quotelev1">&gt; currently understand what classes are used for.
</span><br>
<p>The class name was initially used to distinguish between normal (core)
<br>
plugins and xml backends. It may be possible to completely remove it now
<br>
that component struct have a type, I'll check.
<br>
<p>We have the &quot;core_xml&quot; component (generic xml support) and &quot;xml_libxml&quot;
<br>
+ &quot;xml_nolibxml&quot; backends behind that. I am fine with removing the
<br>
&quot;core_&quot; prefix, but I wonder if we should keep the &quot;xml_&quot; prefix for the
<br>
latter.
<br>
<p>We should hide xml backends/plugins as much as possible in the doc, we
<br>
have old env variables to deal with those, no need to tell people that
<br>
the way it works changed internally.
<br>
<p><span class="quotelev1">&gt; &quot;expensive&quot; was just an example of what makes loading it by default a
</span><br>
<span class="quotelev1">&gt; bad idea. We can't invent a thorough list of such things, so I'd say
</span><br>
<span class="quotelev1">&gt; plugins could rather just enable a &quot;default_load&quot; flag or not
</span><br>
<p>Works for me.
<br>
<p><span class="quotelev2">&gt;&gt; And a syntax such as pci,^servet to select manually.
</span><br>
<span class="quotelev1">&gt; Why a ^?
</span><br>
<p>This was for Jeff :)
<br>
When you specify which components to use in OMPI, you pass a
<br>
comma-separated list, and ^ is a negation.
<br>
<p><span class="quotelev2">&gt;&gt; There's currently no way to prevent two PCI backends to be used
</span><br>
<span class="quotelev2">&gt;&gt; simultaneously. Might use another flag so that only the first one
</span><br>
<span class="quotelev2">&gt;&gt; (libpci) or a specific one (env var) is enabled.
</span><br>
<span class="quotelev1">&gt; Well, perhaps we should rather define well-known names which act as
</span><br>
<span class="quotelev1">&gt; exclusion points and document them. I.e. what is currently called
</span><br>
<span class="quotelev1">&gt; &quot;core os&quot; should perhaps actually be an &quot;os&quot; exclusion point, while
</span><br>
<span class="quotelev1">&gt; core_libpci would use the &quot;pci&quot; exclusion point, and another pci
</span><br>
<span class="quotelev1">&gt; detection plugin would use the same exclusion point. Priorities can then
</span><br>
<span class="quotelev1">&gt; be used among plugins of the same exclusion point to sort out which one
</span><br>
<span class="quotelev1">&gt; should be used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, the current core os plugins should perhaps be split into a
</span><br>
<span class="quotelev1">&gt; &quot;bind&quot; exclusion point and a &quot;cpu&quot; exclusion point. One issue I had with
</span><br>
<span class="quotelev1">&gt; linuxx86 is that I need the part that provides binding functions, but
</span><br>
<span class="quotelev1">&gt; not the part which provides the cpu detection. And it will be the same
</span><br>
<span class="quotelev1">&gt; in other OSes. Also, loading another plugin for &quot;bind&quot; operations can
</span><br>
<span class="quotelev1">&gt; make sense.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I can easily extend the current code to move pci components out of the
<br>
additional list, make a dedicated list and pick one based on
<br>
priority/envvar.
<br>
<p>I need to look deeper to see if the bind stuff can be made similar.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3297.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3295.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>In reply to:</strong> <a href="3295.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3297.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3297.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3298.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3302.php">Jeff Squyres: "Re: [hwloc-devel] merging plugins?"</a>
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
