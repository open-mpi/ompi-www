<?
$subject_val = "[hwloc-announce] Hardware Locality (hwloc) v1.1.1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 26 10:04:18 2011" -->
<!-- isoreceived="20110126150418" -->
<!-- sent="Wed, 26 Jan 2011 10:04:12 -0500" -->
<!-- isosent="20110126150412" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware Locality (hwloc) v1.1.1 released" -->
<!-- id="917607DB-1737-4BAB-9B50-4EDB15ADAFB6_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware Locality (hwloc) v1.1.1 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-26 10:04:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2011/03/0013.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.1.2rc1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2010/12/0011.php">Jeff Squyres: "[hwloc-announce] Hardware locality (hwloc) v1.1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the release of v1.1.1:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a> 
<br>
<p>v1.1.1 is a minor bug fix release.  All hwloc users are encouraged to upgrade when possible.
<br>
<p>hwloc provides command line tools and a C API to obtain the hierarchical map of key computing elements, such as: NUMA memory nodes, shared caches, processor sockets, processor cores, and processor &quot;threads&quot;. hwloc also gathers various attributes such as cache and memory information, and is portable across a variety of different operating systems and platforms. 
<br>
<p>The following is a summary of the changes since v1.1:
<br>
<p>* Add hwloc_get_api_version() which returns the version of hwloc used
<br>
&nbsp;&nbsp;at runtime. Thanks to Guy Streeter for the suggestion.
<br>
* Fix the number of hugepages reported for NUMA nodes on Linux.
<br>
* Fix hwloc_bitmap_to_ulong() right after allocating the bitmap.
<br>
&nbsp;&nbsp;Thanks to Bernd Kallies for reporting the problem.
<br>
* Fix hwloc_bitmap_from_ith_ulong() to properly zero the first ulong.
<br>
&nbsp;&nbsp;Thanks to Guy Streeter for reporting the problem.
<br>
* Fix hwloc_get_membind_nodeset() on Linux.
<br>
&nbsp;&nbsp;Thanks to Bernd Kallies for reporting the problem and providing a patch.
<br>
* Fix some file descriptor leaks in the Linux discovery.
<br>
* Fix the minimum width of NUMA nodes, caches and the legend in the graphical
<br>
&nbsp;&nbsp;lstopo output. Thanks to Jirka Hladky for reporting the problem.
<br>
* Various fixes to bitmap conversion from/to taskset-strings.
<br>
* Fix and document snprintf functions behavior when the buffer size is too
<br>
&nbsp;&nbsp;small or zero. Thanks to Guy Streeter for reporting the problem.
<br>
* Fix configure to avoid spurious enabling of the cpuid backend.
<br>
&nbsp;&nbsp;Thanks to Tim Anderson for reporting the problem.
<br>
* Cleanup error management in hwloc-gather-topology.sh.
<br>
&nbsp;&nbsp;Thanks to Jirka Hladky for reporting the problem and providing a patch.
<br>
* Add a manpage and usage for hwloc-gather-topology.sh on Linux.
<br>
&nbsp;&nbsp;Thanks to Jirka Hladky for providing a patch.
<br>
* Memory binding documentation enhancements.
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2011/03/0013.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.1.2rc1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2010/12/0011.php">Jeff Squyres: "[hwloc-announce] Hardware locality (hwloc) v1.1 released"</a>
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
