<?
$subject_val = "[hwloc-announce] Hardware Locality (hwloc) v1.0.3rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  9 03:12:51 2010" -->
<!-- isoreceived="20101109081251" -->
<!-- sent="Tue, 09 Nov 2010 09:12:44 +0100" -->
<!-- isosent="20101109081244" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware Locality (hwloc) v1.0.3rc1 released" -->
<!-- id="4CD9027C.3010809_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware Locality (hwloc) v1.0.3rc1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-09 03:12:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2010/12/0010.php">Jeff Squyres: "[hwloc-announce] Hardware locality (hwloc) v1.0.3 released"</a>
<li><strong>Previous message:</strong> <a href="0008.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the first
<br>
release candidate of version 1.0.3
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.0.3 is a minor bug fix release which addresses all remaining known
<br>
bugs in the v1.0 serie. In the meantime, we are preparing the release of
<br>
v1.1 which brings new features but also changes the API a bit.
<br>
<p><p>hwloc provides command line tools and a C API to obtain the hierarchical
<br>
map of key computing elements, such as: NUMA memory nodes, shared
<br>
caches, processor sockets, processor cores, and processor &quot;threads&quot;.
<br>
hwloc also gathers various attributes such as cache and memory
<br>
information, and is portable across a variety of different operating
<br>
systems and platforms.
<br>
<p>The following is a summary of the changes since v1.0.2:
<br>
<p>* Fix support for Linux cpuset when emulated by a cgroup mount point.
<br>
* Remove unneeded runtime dependency on libibverbs.so in the library and
<br>
all utils programs.
<br>
* Fix hwloc_cpuset_to_linux_libnuma_ulongs in case of non-linear
<br>
OS-indexes for NUMA nodes.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2010/12/0010.php">Jeff Squyres: "[hwloc-announce] Hardware locality (hwloc) v1.0.3 released"</a>
<li><strong>Previous message:</strong> <a href="0008.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
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
