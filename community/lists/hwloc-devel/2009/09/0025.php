<?
$subject_val = "[hwloc-devel] doxygen";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 10 21:58:40 2009" -->
<!-- isoreceived="20090911015840" -->
<!-- sent="Thu, 10 Sep 2009 21:58:35 -0400" -->
<!-- isosent="20090911015835" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] doxygen" -->
<!-- id="94C11E2E-227D-46E8-9CD7-3C869AA2E7EB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [hwloc-devel] doxygen<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-10 21:58:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0026.php">Samuel Thibault: "Re: [hwloc-devel] Build system issues"</a>
<li><strong>Previous message:</strong> <a href="0024.php">Samuel Thibault: "Re: [hwloc-devel] Fwd: [hwloc-svn] svn:hwloc r942"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Woof.  That was much harder than I expected.  Give the new system a  
<br>
whirl and see if it works for you:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/hwloc/changeset/945">https://svn.open-mpi.org/trac/hwloc/changeset/945</a>
<br>
<p>Note that when you &quot;svn up&quot;, you're going to get an error (sorry):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;svn: Failed to add file 'doc/doxygen.cfg': an unversioned file of  
<br>
the same name already exists
<br>
<p>Just rm doc/doxygen.cfg and &quot;svn up&quot; again.
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
<li><strong>Next message:</strong> <a href="0026.php">Samuel Thibault: "Re: [hwloc-devel] Build system issues"</a>
<li><strong>Previous message:</strong> <a href="0024.php">Samuel Thibault: "Re: [hwloc-devel] Fwd: [hwloc-svn] svn:hwloc r942"</a>
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
