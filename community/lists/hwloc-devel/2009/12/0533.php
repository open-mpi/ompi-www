<?
$subject_val = "[hwloc-devel] embedding committed";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 15:35:36 2009" -->
<!-- isoreceived="20091216203536" -->
<!-- sent="Wed, 16 Dec 2009 15:35:31 -0500" -->
<!-- isosent="20091216203531" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] embedding committed" -->
<!-- id="8104644F-7B8F-4A21-85AE-C7D930515167_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] embedding committed<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-16 15:35:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0534.php">Jeff Squyres: "[hwloc-devel] signed / unsigned"</a>
<li><strong>Previous message:</strong> <a href="0532.php">Jeff Squyres: "Re: [hwloc-devel] more embedded"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0534.php">Jeff Squyres: "[hwloc-devel] signed / unsigned"</a>
<li><strong>Reply:</strong> <a href="0534.php">Jeff Squyres: "[hwloc-devel] signed / unsigned"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've committed the embedding code to SVN.  The commit message gives an overview:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/hwloc/changeset/1474">https://svn.open-mpi.org/trac/hwloc/changeset/1474</a>
<br>
<p>I'll add doxy docs on how to do the embedding shortly (I'll probably copy/adapt the PLPA embedding docs).
<br>
<p>While preparing to SVN commit, I made the default for HG checkouts to compile with debug and picky modes.  I now see a TRUCKLOAD of signed/unsigned comparison warnings.  I'll look into these right now...
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
<li><strong>Next message:</strong> <a href="0534.php">Jeff Squyres: "[hwloc-devel] signed / unsigned"</a>
<li><strong>Previous message:</strong> <a href="0532.php">Jeff Squyres: "Re: [hwloc-devel] more embedded"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0534.php">Jeff Squyres: "[hwloc-devel] signed / unsigned"</a>
<li><strong>Reply:</strong> <a href="0534.php">Jeff Squyres: "[hwloc-devel] signed / unsigned"</a>
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
