<?
$subject_val = "[hwloc-announce] Hardware locality (hwloc) v1.8.1rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 30 10:31:23 2014" -->
<!-- isoreceived="20140130153123" -->
<!-- sent="Thu, 30 Jan 2014 16:31:21 +0100" -->
<!-- isosent="20140130153121" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware locality (hwloc) v1.8.1rc1 released" -->
<!-- id="52EA7049.50307_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware locality (hwloc) v1.8.1rc1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-30 10:31:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2014/02/0066.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.8.1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/11/0064.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.8 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the first
<br>
release candidate of v1.8.1:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.8.1 is (mostly) a bug fix release which addresses all known bugs in
<br>
the v1.8 series.
<br>
<p>The following is a summary of the changes since v1.8:
<br>
<p>* Fix the cpuid code on Windows 64bits so that the x86 backend gets
<br>
&nbsp;&nbsp;enabled as expected and can populate CPU information.
<br>
&nbsp;&nbsp;Thanks to Robin Scher for reporting the problem.
<br>
* Add CPUVendor/CPUModelNumber/CPUFamilyNumber attributes when running
<br>
&nbsp;&nbsp;on x86 architecture. Thanks to Ralph Castain for the suggestion.
<br>
* Work around buggy BIOS reporting duplicate NUMA nodes on Linux.
<br>
&nbsp;&nbsp;Thanks to Jeff Becker for reporting the problem and testing the patch.
<br>
<p><pre>
--
Brice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2014/02/0066.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.8.1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/11/0064.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.8 released"</a>
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
