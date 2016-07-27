<?
$subject_val = "Re: [hwloc-devel] What's left for v0.9.1?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 14 12:02:44 2009" -->
<!-- isoreceived="20090914160244" -->
<!-- sent="Mon, 14 Sep 2009 12:02:38 -0400" -->
<!-- isosent="20090914160238" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] What's left for v0.9.1?" -->
<!-- id="D297C15D-A641-4F91-98B5-839375CD95C3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AAE5950.2090000_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] What's left for v0.9.1?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-14 12:02:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0043.php">Brice Goglin: "[hwloc-devel] API, and make distcheck failure"</a>
<li><strong>Previous message:</strong> <a href="0041.php">Brice Goglin: "Re: [hwloc-devel] What's left for v0.9.1?"</a>
<li><strong>In reply to:</strong> <a href="0041.php">Brice Goglin: "Re: [hwloc-devel] What's left for v0.9.1?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0035.php">Samuel Thibault: "Re: [hwloc-devel] What's left for v0.9.1?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 14, 2009, at 10:55 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt; &gt; Ok -- so if we can build a tarball and &quot;make check&quot; it  
</span><br>
<span class="quotelev1">&gt; successfully on
</span><br>
<span class="quotelev2">&gt; &gt; all platforms, we're a go?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, tests/linux/ is already 500kB large after compression (it brings
</span><br>
<span class="quotelev1">&gt; many tarballs of /proc and /sys and the corresponding expected lstopo
</span><br>
<span class="quotelev1">&gt; outputs). So I wondered if one day we'll have to drop it from the
</span><br>
<span class="quotelev1">&gt; tarball. Is there an easy way to exclude things at make dist depending
</span><br>
<span class="quotelev1">&gt; on some options or env variables?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Eh.  Bandwidth is cheap.  I don't mind large tarballs.
<br>
<p>There's not an easy/portable way (that I'm aware of) to exclude based  
<br>
on env vars; but we certainly can add a configure --without-extra- 
<br>
tests flag (or something like that).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0043.php">Brice Goglin: "[hwloc-devel] API, and make distcheck failure"</a>
<li><strong>Previous message:</strong> <a href="0041.php">Brice Goglin: "Re: [hwloc-devel] What's left for v0.9.1?"</a>
<li><strong>In reply to:</strong> <a href="0041.php">Brice Goglin: "Re: [hwloc-devel] What's left for v0.9.1?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0035.php">Samuel Thibault: "Re: [hwloc-devel] What's left for v0.9.1?"</a>
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
