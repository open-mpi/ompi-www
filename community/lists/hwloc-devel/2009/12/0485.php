<?
$subject_val = "[hwloc-devel] update libtool/autoconf";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 13:17:19 2009" -->
<!-- isoreceived="20091208181719" -->
<!-- sent="Tue, 8 Dec 2009 13:17:14 -0500" -->
<!-- isosent="20091208181714" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] update libtool/autoconf" -->
<!-- id="021369EA-842C-499C-9DF4-D77453272C4A_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] update libtool/autoconf<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-08 13:17:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0486.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>Previous message:</strong> <a href="0484.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I updated the v0.9 branch to require LT 2.2.6b to build tarballs, and the trunk to require AC 2.65 (the latest) and LT 2.2.6b.
<br>
<p>Libltdl (shipped in libtool) had a security issue that was patched in 2.2.6b.  The issue doesn't affect hwloc (hwloc doesn't even use libltdl -- yet), but I didn't want any red flags to be raised because we were using an &quot;insecure&quot; LT version.  I took the liberty of updating our AC version on the trunk just for the heckuvit.
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
<li><strong>Next message:</strong> <a href="0486.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>Previous message:</strong> <a href="0484.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<!-- nextthread="start" -->
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
