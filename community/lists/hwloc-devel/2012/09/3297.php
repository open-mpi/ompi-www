<?
$subject_val = "Re: [hwloc-devel] merging plugins?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 04:34:10 2012" -->
<!-- isoreceived="20120925083410" -->
<!-- sent="Tue, 25 Sep 2012 10:34:04 +0200" -->
<!-- isosent="20120925083404" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] merging plugins?" -->
<!-- id="50616C7C.4090200_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 04:34:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3298.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3296.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>In reply to:</strong> <a href="3296.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3299.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3299.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 25/09/2012 10:17, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 25/09/2012 09:49, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; One thing which can be confusing for the user is that core_linux goes
</span><br>
<span class="quotelev2">&gt;&gt; to the core os list while core_libpci goes to the additional list.  It
</span><br>
<span class="quotelev2">&gt;&gt; would probably be better to use a different class name. I actually don't
</span><br>
<span class="quotelev2">&gt;&gt; currently understand what classes are used for.
</span><br>
<span class="quotelev1">&gt; The class name was initially used to distinguish between normal (core)
</span><br>
<span class="quotelev1">&gt; plugins and xml backends. It may be possible to completely remove it now
</span><br>
<span class="quotelev1">&gt; that component struct have a type, I'll check.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have the &quot;core_xml&quot; component (generic xml support) and &quot;xml_libxml&quot;
</span><br>
<span class="quotelev1">&gt; + &quot;xml_nolibxml&quot; backends behind that. I am fine with removing the
</span><br>
<span class="quotelev1">&gt; &quot;core_&quot; prefix,
</span><br>
<p>I am also going to add a hwloc_ prefix to plugin filenames because we
<br>
obviously can't create a libpci.so (libtool even warns about this).
<br>
XML backends could be hwlocxml_ (not hwloc_xml_) to make it clear that
<br>
they are not normal hwloc_ plugins.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3298.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3296.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>In reply to:</strong> <a href="3296.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3299.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3299.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
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
