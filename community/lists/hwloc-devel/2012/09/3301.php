<?
$subject_val = "Re: [hwloc-devel] merging plugins?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 05:13:39 2012" -->
<!-- isoreceived="20120925091339" -->
<!-- sent="Tue, 25 Sep 2012 11:13:34 +0200" -->
<!-- isosent="20120925091334" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] merging plugins?" -->
<!-- id="20120925091334.GS6096_at_type.oeaw.ads" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5061745D.8070806_at_inria.fr" -->
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
<strong>Date:</strong> 2012-09-25 05:13:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3302.php">Jeff Squyres: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3300.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>In reply to:</strong> <a href="3300.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3302.php">Jeff Squyres: "Re: [hwloc-devel] merging plugins?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Tue 25 Sep 2012 11:08:04 +0200, a &#233;crit :
<br>
<span class="quotelev3">&gt; &gt;&gt; We have the &quot;core_xml&quot; component (generic xml support) and &quot;xml_libxml&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; + &quot;xml_nolibxml&quot; backends behind that. I am fine with removing the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;core_&quot; prefix, but I wonder if we should keep the &quot;xml_&quot; prefix for the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; latter.
</span><br>
<span class="quotelev2">&gt; &gt; I'd say we should keep it. Just like I wanted to use core_linux_x86 (as
</span><br>
<span class="quotelev2">&gt; &gt; opposed to core_linux)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Keep which one? &quot;core&quot; or &quot;core&quot; and &quot;xml&quot; ?
</span><br>
<p>xml.
<br>
<p><span class="quotelev2">&gt; &gt; Well, that still looks hardcoded to me. Actually, a simple way would
</span><br>
<span class="quotelev2">&gt; &gt; be to order all plugins in just one list by priorities. When loading a
</span><br>
<span class="quotelev2">&gt; &gt; plugin, one checks whether the exclusion point of the plugin was
</span><br>
<span class="quotelev2">&gt; &gt; already filled or not, and load the plugin accordingly
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The good thing about this is that XML and synthetic can set exclusion
</span><br>
<span class="quotelev1">&gt; flags on OS+PCI+ADDITIONAL.
</span><br>
<span class="quotelev1">&gt; But we obviously don't want cuda, ... to set the ADDITIONAL exclusion
</span><br>
<span class="quotelev1">&gt; flag. So setting a exclusion flag would mean &quot;I don't want any plugin of
</span><br>
<span class="quotelev1">&gt; this type to be enabled&quot; (different from &quot;I don't want any plugin with
</span><br>
<span class="quotelev1">&gt; this exclusion flag to be set).
</span><br>
<p>Right, like in Debian packages, there are separate &quot;provides&quot; and
<br>
&quot;conflicts&quot;. Usually one both provide and conflict, but one can do
<br>
either separately.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3302.php">Jeff Squyres: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3300.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>In reply to:</strong> <a href="3300.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3302.php">Jeff Squyres: "Re: [hwloc-devel] merging plugins?"</a>
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
