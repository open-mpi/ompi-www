<?
$subject_val = "[hwloc-devel] last API change";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 20 01:43:00 2009" -->
<!-- isoreceived="20091020054300" -->
<!-- sent="Tue, 20 Oct 2009 07:41:29 +0200" -->
<!-- isosent="20091020054129" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] last API change" -->
<!-- id="4ADD4D89.6070007_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] last API change<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-20 01:41:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0179.php">Jeff Squyres: "[hwloc-devel] MPICH2 question"</a>
<li><strong>Previous message:</strong> <a href="0177.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1177)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>As a last API change before 0.9.1, I think we need to rename
<br>
get_cache_covering_obj(). We currently have get_cache_covering_cpuset()
<br>
which does what it says. However we also have get_cache_covering_obj()
<br>
which does not return a cache above obj but returns a cache above obj
<br>
*and* shared with somebody else (the cpuset of the returned cache is
<br>
strictly different than obj). If anybody has a good name, please let me
<br>
know. Maybe get_shared_cache_covering_obj() or
<br>
get_cache_covering_obj_and_shared() ? I'll fix this later today.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0179.php">Jeff Squyres: "[hwloc-devel] MPICH2 question"</a>
<li><strong>Previous message:</strong> <a href="0177.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1177)"</a>
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
