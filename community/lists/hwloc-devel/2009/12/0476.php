<?
$subject_val = "[hwloc-devel] embedding m4 code";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 12:53:46 2009" -->
<!-- isoreceived="20091204175346" -->
<!-- sent="Fri, 4 Dec 2009 12:53:35 -0500" -->
<!-- isosent="20091204175335" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] embedding m4 code" -->
<!-- id="BAA3D899-EDFD-4465-A085-22D7F9184A94_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] embedding m4 code<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-04 12:53:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0477.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1439)"</a>
<li><strong>Previous message:</strong> <a href="0475.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0478.php">Brice Goglin: "Re: [hwloc-devel] embedding m4 code"</a>
<li><strong>Reply:</strong> <a href="0478.php">Brice Goglin: "Re: [hwloc-devel] embedding m4 code"</a>
<li><strong>Reply:</strong> <a href="0496.php">Samuel Thibault: "Re: [hwloc-devel] embedding m4 code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I have the first part of the embedding code done -- it builds and compiles hwloc just like today's build system does (but a bunch of the m4 behind the scenes has moved around quite a bit to enable the embedding stuff).  :-)
<br>
<p>Could you guys try builds on the supported platforms to see if I broke anything?  I only have access to rhel4, rhel5, and osx.  The code is in a mercurial branch here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://bitbucket.org/jsquyres/hwloc-embedded/">http://bitbucket.org/jsquyres/hwloc-embedded/</a>
<br>
<p>I'm working on the actual embedding stuff now, but wanted to ensure that I at least got the first parts right.
<br>
<p>Thanks!
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
<li><strong>Next message:</strong> <a href="0477.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1439)"</a>
<li><strong>Previous message:</strong> <a href="0475.php">Brice Goglin: "Re: [hwloc-devel] hwloc-bind syntax"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0478.php">Brice Goglin: "Re: [hwloc-devel] embedding m4 code"</a>
<li><strong>Reply:</strong> <a href="0478.php">Brice Goglin: "Re: [hwloc-devel] embedding m4 code"</a>
<li><strong>Reply:</strong> <a href="0496.php">Samuel Thibault: "Re: [hwloc-devel] embedding m4 code"</a>
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
