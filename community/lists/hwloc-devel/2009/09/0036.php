<?
$subject_val = "Re: [hwloc-devel] What's left for v0.9.1?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 14 09:43:43 2009" -->
<!-- isoreceived="20090914134343" -->
<!-- sent="Mon, 14 Sep 2009 15:43:07 +0200" -->
<!-- isosent="20090914134307" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] What's left for v0.9.1?" -->
<!-- id="4AAE486B.6060708_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="756AF039-CFF8-43EC-B705-6DE088AAB4C2_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-14 09:43:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0037.php">Jeff Squyres: "Re: [hwloc-devel] What's left for v0.9.1?"</a>
<li><strong>Previous message:</strong> <a href="0035.php">Samuel Thibault: "Re: [hwloc-devel] What's left for v0.9.1?"</a>
<li><strong>In reply to:</strong> <a href="0034.php">Jeff Squyres: "Re: [hwloc-devel] What's left for v0.9.1?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0037.php">Jeff Squyres: "Re: [hwloc-devel] What's left for v0.9.1?"</a>
<li><strong>Reply:</strong> <a href="0037.php">Jeff Squyres: "Re: [hwloc-devel] What's left for v0.9.1?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Do we want to setup some automated regression testing (maybe using
</span><br>
<span class="quotelev1">&gt; MTT?) with nightly tarballs and across multiple platforms?
</span><br>
<p>What kind of platforms do you have ?
<br>
<p>Right now, make check is the main way to check things:
<br>
* it runs many unit tests to check the API behavior
<br>
* it reads/outputs many Linux topologies (so that we can emulate a 16
<br>
sockets 4 core box on our laptop)
<br>
* it builds the lib core on non-Linux headers
<br>
Don't know if we need more so far.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0037.php">Jeff Squyres: "Re: [hwloc-devel] What's left for v0.9.1?"</a>
<li><strong>Previous message:</strong> <a href="0035.php">Samuel Thibault: "Re: [hwloc-devel] What's left for v0.9.1?"</a>
<li><strong>In reply to:</strong> <a href="0034.php">Jeff Squyres: "Re: [hwloc-devel] What's left for v0.9.1?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0037.php">Jeff Squyres: "Re: [hwloc-devel] What's left for v0.9.1?"</a>
<li><strong>Reply:</strong> <a href="0037.php">Jeff Squyres: "Re: [hwloc-devel] What's left for v0.9.1?"</a>
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
