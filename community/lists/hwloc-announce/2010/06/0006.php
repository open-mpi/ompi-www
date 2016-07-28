<?
$subject_val = "[hwloc-announce] Hardware Locality (hwloc) v1.0.1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  4 09:25:05 2010" -->
<!-- isoreceived="20100604132505" -->
<!-- sent="Fri, 4 Jun 2010 09:25:00 -0400" -->
<!-- isosent="20100604132500" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware Locality (hwloc) v1.0.1 released" -->
<!-- id="B6216011-CC4E-471D-9221-52CF32E3D496_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware Locality (hwloc) v1.0.1 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-04 09:25:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2010/07/0007.php">Jeff Squyres: "[hwloc-announce] Hardware Locality (hwloc) v1.0.2 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2010/05/0005.php">Jeff Squyres: "[hwloc-announce] Hardware Locality (hwloc) v1.0 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the release of version 1.0.1: 
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a> 
<br>
&nbsp;&nbsp;&nbsp;(mirrors will update shortly) 
<br>
<p>v1.0.1 is a minor bug fix release.  
<br>
<p>hwloc provides command line tools and a C API to obtain the hierarchical map of key computing elements, such as: NUMA memory nodes, shared caches, processor sockets, processor cores, and processor &quot;threads&quot;.  hwloc also gathers various attributes such as cache and memory information, and is portable across a variety of different operating systems and platforms. 
<br>
<p>The following is a summary of the changes since v1.0:
<br>
<p>* Various Solaris fixes.
<br>
* Fix &quot;non-native&quot; builds on x86 platforms (e.g., when building 32
<br>
&nbsp;&nbsp;bit executables with compilers that natively build 64 bit).
<br>
* Ignore sockets with unknown ID values (which fixes issues on POWER7
<br>
&nbsp;&nbsp;machines).  Thanks to Greg Bauer for reporting the issue.
<br>
* Various man page clarifications and minor updates.
<br>
* Fixed memory leaks in hwloc_setup_group_from_min_distance_clique().
<br>
* Fix cache type filtering on MS Windows 7.  Thanks to &#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130;
<br>
&nbsp;&nbsp;&#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186; for reporting the issue.
<br>
* Fixed warnings when compiling with -DNDEBUG.
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2010/07/0007.php">Jeff Squyres: "[hwloc-announce] Hardware Locality (hwloc) v1.0.2 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2010/05/0005.php">Jeff Squyres: "[hwloc-announce] Hardware Locality (hwloc) v1.0 released"</a>
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
