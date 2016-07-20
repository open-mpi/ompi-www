<?
$subject_val = "[hwloc-announce] Hardware locality (hwloc) v1.9rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 20 18:18:54 2014" -->
<!-- isoreceived="20140320221854" -->
<!-- sent="Thu, 20 Mar 2014 23:18:51 +0100" -->
<!-- isosent="20140320221851" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware locality (hwloc) v1.9rc1 released" -->
<!-- id="532B694B.5000502_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware locality (hwloc) v1.9rc1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-20 18:18:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0068.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2014/02/0066.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.8.1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the first
<br>
release candidate for v1.9:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.9rc1 is the first milestone of a major feature release.
<br>
It adds a couple enhanced API functions, many object attributes for
<br>
better representing CPU and I/O device characteristics, and more.
<br>
<p>* API
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
&nbsp;&nbsp;+ Add experimental Visual Studio support under contrib/windows.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks to Eloi Gaudry for his help and for providing the first draft.
<br>
&nbsp;&nbsp;+ Fix some overzealous assertions and warnings about the ordering of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;objects on a level with respect to cpusets. The ordering is only
<br>
&nbsp;&nbsp;&nbsp;&nbsp;guaranteed for complete cpusets (based on the first bit in sets).
<br>
<p><p>v1.9rc1 also contains some bug fixes that are waiting for a v1.8.2 stable
<br>
release that may or may not ever happen:
<br>
<p>* Don't mix total and local memory when displaying verbose object attributes
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
* Fix hwloc-bind failure on Windows when not using --pid.
<br>
<p><pre>
--
Brice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0068.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.9 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2014/02/0066.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.8.1 released"</a>
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
