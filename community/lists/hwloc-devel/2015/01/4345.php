<?
$subject_val = "[hwloc-devel] removing disallowed NUMA nodes from nodesets";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 16 05:09:00 2015" -->
<!-- isoreceived="20150116100900" -->
<!-- sent="Fri, 16 Jan 2015 11:08:58 +0100" -->
<!-- isosent="20150116100858" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] removing disallowed NUMA nodes from nodesets" -->
<!-- id="54B8E33A.8020707_at_inria.fr" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [hwloc-devel] removing disallowed NUMA nodes from nodesets<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-16 05:08:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4346.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-335-g60006c7)"</a>
<li><strong>Previous message:</strong> <a href="4344.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.10.0-39-g70c896d)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>When part of the machine is restricted (e.g. cgroups), we remove the
<br>
corresponding PUs from cpusets (unless the WHOLE_SYSTEM flag is given).
<br>
However, it looks like we never removed NUMA nodes from nodesets as
<br>
well, which looks strange.
<br>
<p>That's a non-trivial change so I want to make sure nobody relies on this
<br>
strange behavior before I push the fix. If you're membind'ing using
<br>
cpusets, no problem. If you're membind'ing using nodesets, you won't be
<br>
able to bind to disallowed nodes anymore, but that should have failed
<br>
anyway :)
<br>
<p>thanks
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4346.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-335-g60006c7)"</a>
<li><strong>Previous message:</strong> <a href="4344.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.10.0-39-g70c896d)"</a>
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
