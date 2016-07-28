<?
$subject_val = "Re: [hwloc-devel] merging plugins?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 03:42:04 2012" -->
<!-- isoreceived="20120925074204" -->
<!-- sent="Tue, 25 Sep 2012 09:42:00 +0200" -->
<!-- isosent="20120925074200" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] merging plugins?" -->
<!-- id="50616048.1050903_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50615CC2.30508_at_inria.fr" -->
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
<strong>Date:</strong> 2012-09-25 03:42:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3295.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3293.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>In reply to:</strong> <a href="3293.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3303.php">Jeff Squyres: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3303.php">Jeff Squyres: "Re: [hwloc-devel] merging plugins?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 25/09/2012 09:26, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; On most OS, we already have multiple &quot;core os&quot; components, one native
</span><br>
<span class="quotelev1">&gt; (linux, ...) with priority 10 and the &quot;noos&quot; one with priority 0. If
</span><br>
<span class="quotelev1">&gt; nothing forces a specific component in the list (no env variable, no
</span><br>
<span class="quotelev1">&gt; set_xml, ...), we instantiate the first one (higher priority), which is
</span><br>
<span class="quotelev1">&gt; the native component when it exists.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Small fix: &quot;noos&quot; is actually currently named &quot;none&quot;.
<br>
I just checked that your code successfully uses it with HWLOC_PLUGINS=none
<br>
But I now see that &quot;none&quot; is bad name here so I will change it back to
<br>
&quot;noos&quot;
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3295.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3293.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>In reply to:</strong> <a href="3293.php">Brice Goglin: "Re: [hwloc-devel] merging plugins?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3303.php">Jeff Squyres: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3303.php">Jeff Squyres: "Re: [hwloc-devel] merging plugins?"</a>
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
