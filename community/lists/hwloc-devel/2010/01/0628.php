<?
$subject_val = "Re: [hwloc-devel] memory size attributes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 14:54:22 2010" -->
<!-- isoreceived="20100126195422" -->
<!-- sent="Tue, 26 Jan 2010 14:54:10 -0500" -->
<!-- isosent="20100126195410" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] memory size attributes" -->
<!-- id="D3D89099-F29F-4EF8-BA43-826B5353776B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B5612D7.4030709_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] memory size attributes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-26 14:54:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0629.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Previous message:</strong> <a href="0627.php">Samuel Thibault: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>In reply to:</strong> <a href="0619.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0629.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 19, 2010, at 3:15 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; IIRC, it was changed into a pointer before the first release to reduce
</span><br>
<span class="quotelev1">&gt; ABI changes inside the the main hwloc_obj struct when attributes are
</span><br>
<span class="quotelev1">&gt; changed. I don't think hwloc_obj and attributes will be stable before
</span><br>
<span class="quotelev1">&gt; hwloc 2.0 so I don't really care whether it's a pointer or not :)
</span><br>
<p>Ah -- preserving ABI goodness is a Good Thing.  Keeping it a pointer won't guarantee us ABI compatibility, of course, but it helps.  So disregard my prior comments -- keep it a pointer.  Might as well give it a good college try to be ABI friendly.
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
<li><strong>Next message:</strong> <a href="0629.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>Previous message:</strong> <a href="0627.php">Samuel Thibault: "Re: [hwloc-devel] memory size attributes"</a>
<li><strong>In reply to:</strong> <a href="0619.php">Brice Goglin: "Re: [hwloc-devel] memory size attributes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0629.php">Jeff Squyres: "Re: [hwloc-devel] memory size attributes"</a>
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
