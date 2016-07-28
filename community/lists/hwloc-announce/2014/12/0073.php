<?
$subject_val = "[hwloc-announce] Hardware Locality (hwloc) v1.10.1rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  8 05:16:42 2014" -->
<!-- isoreceived="20141208101642" -->
<!-- sent="Mon, 08 Dec 2014 11:16:40 +0100" -->
<!-- isosent="20141208101640" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware Locality (hwloc) v1.10.1rc1 released" -->
<!-- id="54857A88.8010207_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware Locality (hwloc) v1.10.1rc1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-08 05:16:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2015/01/0074.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.10.1rc2 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2014/10/0072.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the first
<br>
release candidate of v1.10.1.
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.10.1 will be a bug fix release which addresses all known bugs in the
<br>
v1.10 series.
<br>
<p>The following is a summary of the changes since v1.10:
<br>
<p>* Fix the gathering of PCI domains. Thanks to James Custer for reporting
<br>
&nbsp;&nbsp;the issue and providing a patch.
<br>
* Fix the merging of identical parent and child in presence of Misc objects.
<br>
&nbsp;&nbsp;Thanks to Dave Love for reporting the issue.
<br>
* Fix some misordering of children when merging with ignore_keep_structure()
<br>
&nbsp;&nbsp;in partially allowed topologies.
<br>
* Fix an overzealous assertion in the debug code when running on a single-PU
<br>
&nbsp;&nbsp;host with I/O. Thanks to Thomas Van Doren for reporting the issue.
<br>
* Don't forget to setup NUMA node object nodesets in x86 backend (for BSDs)
<br>
&nbsp;&nbsp;and OSF/Tru64 backend.
<br>
* Fix cpuid-x86 build error with gcc -O3 on x86-32. Thanks to Thomas Van Doren
<br>
&nbsp;&nbsp;for reporting the issue.
<br>
* Fix support for future very large caches in the x86 backend.
<br>
* Change hwloc-ls.desktop into a lstopo.desktop and only install it if
<br>
&nbsp;&nbsp;lstopo is built with Cairo/X11 support. It cannot work with a non-graphical
<br>
&nbsp;&nbsp;lstopo or hwloc-ls.
<br>
* Add support for the renaming of Socket into Package in future releases.
<br>
* Add support for the replacement of HWLOC_OBJ_NODE with HWLOC_OBJ_NUMANODE
<br>
&nbsp;&nbsp;in future releases.
<br>
* Clarify the documentation of distance matrices in hwloc.h and in the manpage
<br>
&nbsp;&nbsp;of the hwloc-distances. Thanks to Dave Love for the suggestion.
<br>
<p><pre>
--
Brice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2015/01/0074.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.10.1rc2 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2014/10/0072.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.10.0 release"</a>
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
