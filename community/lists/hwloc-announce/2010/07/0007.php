<?
$subject_val = "[hwloc-announce] Hardware Locality (hwloc) v1.0.2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 21 10:08:43 2010" -->
<!-- isoreceived="20100721140843" -->
<!-- sent="Wed, 21 Jul 2010 10:09:20 -0400" -->
<!-- isosent="20100721140920" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware Locality (hwloc) v1.0.2 released" -->
<!-- id="6D5916CF-740A-4CE9-ABBA-1A36C7089842_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware Locality (hwloc) v1.0.2 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-21 10:09:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2010/11/0008.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2010/06/0006.php">Jeff Squyres: "[hwloc-announce] Hardware Locality (hwloc) v1.0.1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the release of version 1.0.2: 
<br>
<p>&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a> 
<br>
&nbsp;&nbsp;(mirrors will update shortly) 
<br>
<p>v1.0.2 is a minor bug fix release.  
<br>
<p>hwloc provides command line tools and a C API to obtain the hierarchical map of key computing elements, such as: NUMA memory nodes, shared caches, processor sockets, processor cores, and processor &quot;threads&quot;.  hwloc also gathers various attributes such as cache and memory information, and is portable across a variety of different operating systems and platforms. 
<br>
<p>The following is a summary of the changes since v1.0.1:
<br>
<p>* Public headers can now be included directly from C++ programs.
<br>
* Solaris fix for non-contiguous cpu numbers.  Thanks to Rolf vandeVaart for
<br>
&nbsp;&nbsp;reporting the issue.
<br>
* Darwin 10.4 fix.  Thanks to Olivier Cessenat for reporting the issue.
<br>
* Revert 1.0.1 patch that ignored sockets with unknown ID values since it
<br>
&nbsp;&nbsp;only slightly helped POWER7 machines with old Linux kernels while it
<br>
&nbsp;&nbsp;prevents recent kernels from getting the complete POWER7 topology.
<br>
* Fix hwloc_get_common_ancestor_obj().
<br>
* Remove arch-specific bits in public headers.
<br>
* Some fixes in the lstopo graphical output.
<br>
* Various man page clarifications and minor updates.
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2010/11/0008.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2010/06/0006.php">Jeff Squyres: "[hwloc-announce] Hardware Locality (hwloc) v1.0.1 released"</a>
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
