<?
$subject_val = "[hwloc-devel] 1.1.1rc1 is posted";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 19 08:46:19 2011" -->
<!-- isoreceived="20110119134619" -->
<!-- sent="Wed, 19 Jan 2011 08:46:14 -0500" -->
<!-- isosent="20110119134614" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] 1.1.1rc1 is posted" -->
<!-- id="A595AF42-51A7-4AD4-9577-68FD0945955E_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] 1.1.1rc1 is posted<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-19 08:46:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1841.php">Jeff Squyres: "[hwloc-devel] Perl bindings question"</a>
<li><strong>Previous message:</strong> <a href="1839.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.1a1r3093)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See <a href="http://www.open-mpi.org/software/hwloc/v1.1/">http://www.open-mpi.org/software/hwloc/v1.1/</a>.  Here's the changelist:
<br>
<p>Version 1.1.1
<br>
-------------
<br>
* Add hwloc_get_api_version() which returns the version of hwloc used
<br>
&nbsp;&nbsp;at runtime.
<br>
* Fix hwloc_bitmap_to_ulong() right after allocating the bitmap.
<br>
* Fix hwloc_bitmap_from_ith_ulong() to properly zero the first ulong.
<br>
* Fix hwloc_get_membind_nodeset() on Linux.
<br>
* Fix some file descriptor leaks in the Linux discovery.
<br>
* Fix the minimum width of NUMA nodes, caches and the legend in the graphical
<br>
&nbsp;&nbsp;lstopo output.
<br>
* Various fixes to bitmap conversion from/to taskset-strings.
<br>
* Fix and document snprintf functions behavior when the buffer size is too
<br>
&nbsp;&nbsp;small or zero.
<br>
* Fix configure to avoid spurious enabling of the cpuid backend.
<br>
* Cleanup error management in hwloc-gather-topology.sh.
<br>
* Add a manpage and usage for hwloc-gather-topology.sh on Linux.
<br>
* Memory binding documentation enhancements.
<br>
<p>And ya know, having a checklist for the release is pretty darn helpful.  :-)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/hwloc/wiki/MakingANewRelease">https://svn.open-mpi.org/trac/hwloc/wiki/MakingANewRelease</a>
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
<li><strong>Next message:</strong> <a href="1841.php">Jeff Squyres: "[hwloc-devel] Perl bindings question"</a>
<li><strong>Previous message:</strong> <a href="1839.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.1a1r3093)"</a>
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
