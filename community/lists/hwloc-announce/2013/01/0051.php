<?
$subject_val = "[hwloc-announce] Hardware Locality (hwloc) v1.6.1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 17 17:36:06 2013" -->
<!-- isoreceived="20130117223606" -->
<!-- sent="Thu, 17 Jan 2013 23:36:00 +0100" -->
<!-- isosent="20130117223600" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware Locality (hwloc) v1.6.1 released" -->
<!-- id="50F87CD0.4000909_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware Locality (hwloc) v1.6.1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-17 17:36:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/02/0052.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.6.1rc2 released"</a>
<li><strong>Previous message:</strong> <a href="0050.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.6.1rc2 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the release
<br>
of v1.6.1:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.6.1 is a bug fix release which addresses all known bugs in the
<br>
v1.6 serie.
<br>
<p>* Fix some crash or buggy detection in the x86 backend when Linux
<br>
&nbsp;&nbsp;cgroups/cpusets restrict the available CPUs.
<br>
* Fix the pkg-config output with --libs --static.
<br>
&nbsp;&nbsp;Thanks to Erik Schnetter for reporting one of the problems.
<br>
* Fix the output of hwloc-calc -H --hierarchical when using logical
<br>
&nbsp;&nbsp;indexes in the output.
<br>
* Calling hwloc_topology_load() multiple times on the same topology
<br>
&nbsp;&nbsp;is officially deprecated. hwloc will warn in such cases.
<br>
* Add some documentation about existing plugins/components, package
<br>
&nbsp;&nbsp;dependencies, and I/O devices specification on the command-line.
<br>
<p><pre>
--
Brice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/02/0052.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.6.1rc2 released"</a>
<li><strong>Previous message:</strong> <a href="0050.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.6.1rc2 released"</a>
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
