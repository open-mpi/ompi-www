<?
$subject_val = "[hwloc-devel] v1.9 soon?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 26 04:42:04 2014" -->
<!-- isoreceived="20140226094204" -->
<!-- sent="Wed, 26 Feb 2014 10:42:01 +0100" -->
<!-- isosent="20140226094201" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] v1.9 soon?" -->
<!-- id="530DB6E9.7040000_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] v1.9 soon?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-26 04:42:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4073.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-123-g0de0741)"</a>
<li><strong>Previous message:</strong> <a href="4071.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-120-ga1994d6)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am thinking of releasing hwloc v1.9 in the next week. The current NEWS
<br>
is appended below, as well as what's also queued for a v1.8.2 (that may
<br>
or may not ever exist). We don't have anything wonderful, just tiny bits
<br>
everywhere.
<br>
Does anybody need anything else?
<br>
The only remaining thing in my TODO list is to look at the MSVC project
<br>
file that Eloi Gaudry wrote for native Windows builds.
<br>
<p>Brice
<br>
<p><p><p><p>Version 1.9.0
<br>
-------------
<br>
* API
<br>
&nbsp;&nbsp;+ Add hwloc_obj_type_sscanf() to extend hwloc_obj_type_of_string() with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;type-specific attributes such as Cache/Group depth and Cache type.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_obj_type_of_string() is moved to hwloc/deprecated.h.
<br>
&nbsp;&nbsp;+ Add hwloc_linux_get_tid_last_cpu_location() for retrieving the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;last CPU where a Linux thread given by TID ran.
<br>
&nbsp;&nbsp;+ Add hwloc_distrib() to extend the old hwloc_distribute[v]() functions.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_distribute[v]() is moved to hwloc/deprecated.h.
<br>
* Backends
<br>
&nbsp;&nbsp;+ Add CPUVendor, CPUModelNumber and CPUFamilyNumber info attributes for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;x86, ia64 and Xeon Phi sockets on Linux, to extend the x86-specific
<br>
&nbsp;&nbsp;&nbsp;&nbsp;support added in v1.8.1. Requested by Ralph Castain.
<br>
&nbsp;&nbsp;+ Add many CPU- and Platform-related info attributes on ARM and POWER
<br>
&nbsp;&nbsp;&nbsp;&nbsp;platforms, in the Machine and Socket objects.
<br>
&nbsp;&nbsp;+ Add CUDA info attributes describing the number of multiprocessors and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cores and the size of the global, shared and L2 cache memories in CUDA
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OS devices.
<br>
&nbsp;&nbsp;+ Add OpenCL info attributes describing the number of compute units and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the global memory size in OpenCL OS devices.
<br>
&nbsp;&nbsp;+ The synthetic backend now accepts extended types such as L2Cache, L1i or
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Group3. lstopo also exports synthetic strings using these extended types.
<br>
* Tools
<br>
&nbsp;&nbsp;+ lstopo does not overwrite output files by default anymore.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Pass -f or --force to enforce it.
<br>
&nbsp;&nbsp;+ lstopo now displays OpenCL, CUDA and Xeon Phi numbers of cores and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;memory sizes in the graphical output.
<br>
&nbsp;&nbsp;+ Add -e or --get-last-cpu-location to hwloc-ps to report where
<br>
&nbsp;&nbsp;&nbsp;&nbsp;processes/threads run instead of where they are bound.
<br>
&nbsp;&nbsp;+ hwloc-ps reports locations as likely-more-useful objects such as Cores
<br>
&nbsp;&nbsp;&nbsp;&nbsp;or Sockets instead of Caches when possible.
<br>
&nbsp;&nbsp;+ Add -e as a synonym to --get-last-cpu-location in hwloc-bind.
<br>
&nbsp;&nbsp;+ Add --reverse to hwloc-distrib to distribute using last objects first
<br>
&nbsp;&nbsp;&nbsp;&nbsp;and singlify into last bits first. Thanks to Jirka Hladky for the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;suggestion.
<br>
&nbsp;&nbsp;+ hwloc-info now reports unified caches when looking for data or instruction
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cache ancestor objects.
<br>
* Misc
<br>
&nbsp;&nbsp;+ Fix some overzealous assertions and warnings about the ordering of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;objects on a level with respect to cpusets. The ordering is only
<br>
&nbsp;&nbsp;&nbsp;&nbsp;guaranteed for complete cpusets (based on the first bit in sets).
<br>
<p><p>v1.8.2
<br>
------
<br>
* Don't mix total and local memory when displaying verbose object attributes
<br>
&nbsp;&nbsp;with hwloc_obj_attr_snprintf() or in lstopo.
<br>
* Fix a memory leak in the diff interface when adding a &quot;too complex&quot; entry.
<br>
* Fix lstopo export to stdout when specifying a Cairo-based output type
<br>
&nbsp;&nbsp;with --of.
<br>
* Fix some memory leaks when importing xml diffs.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4073.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-123-g0de0741)"</a>
<li><strong>Previous message:</strong> <a href="4071.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-120-ga1994d6)"</a>
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
