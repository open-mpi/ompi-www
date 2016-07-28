<?
$subject_val = "[hwloc-announce] Hardware locality (hwloc) v1.0.3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 16 17:25:30 2010" -->
<!-- isoreceived="20101216222530" -->
<!-- sent="Thu, 16 Dec 2010 17:25:25 -0500" -->
<!-- isosent="20101216222525" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware locality (hwloc) v1.0.3 released" -->
<!-- id="7D4C2F5D-B99C-441F-82E9-71DFCFFC8EA9_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware locality (hwloc) v1.0.3 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-16 17:25:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0011.php">Jeff Squyres: "[hwloc-announce] Hardware locality (hwloc) v1.1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2010/11/0009.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.0.3rc1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just in time for the holidays, the Hardware Locality (hwloc) team is pleased to announce the release of v1.0.3:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a> 
<br>
<p>v1.0.3 is a minor bug fix release which addresses all remaining known bugs in the v1.0 series.  
<br>
<p>We expect that v1.0.3 will be the last release of this series.
<br>
<p>hwloc provides command line tools and a C API to obtain the hierarchical map of key computing elements, such as: NUMA memory nodes, shared caches, processor sockets, processor cores, and processor &quot;threads&quot;. hwloc also gathers various attributes such as cache and memory information, and is portable across a variety of different operating systems and platforms. 
<br>
<p>The following is a summary of the changes since v1.0.2: 
<br>
<p>* Fix support for Linux cpuset when emulated by a cgroup mount point.
<br>
* Remove unneeded runtime dependency on libibverbs.so in the library and
<br>
&nbsp;&nbsp;all utils programs.
<br>
* Fix hwloc_cpuset_to_linux_libnuma_ulongs in case of non-linear OS-indexes
<br>
&nbsp;&nbsp;for NUMA nodes.
<br>
* lstopo now displays physical/OS indexes by default in graphical mode
<br>
&nbsp;&nbsp;(use -l to switch back to logical indexes). The textual output still uses
<br>
&nbsp;&nbsp;logical by default (use -p to switch to physical indexes).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0011.php">Jeff Squyres: "[hwloc-announce] Hardware locality (hwloc) v1.1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2010/11/0009.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.0.3rc1 released"</a>
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
