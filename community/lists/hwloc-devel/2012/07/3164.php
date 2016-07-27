<?
$subject_val = "[hwloc-devel] hwloc v1.5rc1 coming soon";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 10 15:16:29 2012" -->
<!-- isoreceived="20120710191629" -->
<!-- sent="Tue, 10 Jul 2012 21:16:23 +0200" -->
<!-- isosent="20120710191623" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc v1.5rc1 coming soon" -->
<!-- id="4FFC7F87.6050803_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc v1.5rc1 coming soon<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-10 15:16:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3165.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4609)"</a>
<li><strong>Previous message:</strong> <a href="3163.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.3a1r4608)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3166.php">TERRY DONTJE: "Re: [hwloc-devel] hwloc v1.5rc1 coming soon"</a>
<li><strong>Reply:</strong> <a href="3166.php">TERRY DONTJE: "Re: [hwloc-devel] hwloc v1.5rc1 coming soon"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am preparing a v1.5rc1 release, so here's the current status in case
<br>
somebody wants to comment.
<br>
<p><p>Major changes for is v1.5:
<br>
<p>* instruction caches
<br>
* lstopo becomes lstopo + lstopo-no-graphics
<br>
* improvements to misc backends (AIX, FreeBSD)
<br>
<p><p>Full v1.5 NEWS list:
<br>
<p>* Backends
<br>
&nbsp;&nbsp;+ Do not limit the number of processors to 1024 on Solaris anymore.
<br>
&nbsp;&nbsp;+ Gather total machine memory on FreeBSD.
<br>
&nbsp;&nbsp;+ XML topology files do not depend on the locale anymore. Float numbers
<br>
&nbsp;&nbsp;&nbsp;&nbsp;such as NUMA distances or PCI link speeds now always use a dot as a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;decimal separator.
<br>
&nbsp;&nbsp;+ Add instruction caches detection on Linux, AIX, Windows and Darwin.
<br>
&nbsp;&nbsp;+ Add get_last_cpu_location() support for the current thread on AIX.
<br>
&nbsp;&nbsp;+ Support binding on AIX when threads or processes were bound with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;bindprocessor(). Thanks to Hendryk Bockelmann for reporting the issue
<br>
&nbsp;&nbsp;&nbsp;&nbsp;and testing patches, and to Farid Parpia for explaining the binding
<br>
&nbsp;&nbsp;&nbsp;&nbsp;interfaces.
<br>
&nbsp;&nbsp;+ Improve AMD topology detection in the x86 backend (for FreeBSD) using
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the topoext feature.
<br>
* API
<br>
&nbsp;&nbsp;+ Increase HWLOC_API_VERSION to 0x00010500 so that API changes may be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;detected at build-time.
<br>
&nbsp;&nbsp;+ Add a cache type attribute describind Data, Instruction and Unified
<br>
&nbsp;&nbsp;&nbsp;&nbsp;caches. Caches with different types but same depth (for instance L1d
<br>
&nbsp;&nbsp;&nbsp;&nbsp;and L1i) are placed on different levels.
<br>
&nbsp;&nbsp;+ Add hwloc_get_cache_type_depth() to retrieve the hwloc level depth of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;of the given cache depth and type, for instance L1i or L2.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;It helps  disambiguating the case where hwloc_get_type_depth() returns
<br>
&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_TYPE_DEPTH_MULTIPLE.
<br>
&nbsp;&nbsp;+ Instruction caches are ignored unless HWLOC_TOPOLOGY_FLAG_ICACHES is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;passed to hwloc_topology_set_flags() before load.
<br>
&nbsp;&nbsp;+ Add hwloc_ibv_get_device_osdev_by_name() OpenFabrics helper in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;openfabrics-verbs.h to find the hwloc OS device object corresponding to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;an OpenFabrics device.
<br>
* Tools
<br>
&nbsp;&nbsp;+ Add lstopo-no-graphics, a lstopo built without graphical support to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;avoid dependencies on external libraries such as Cairo and X11. When
<br>
&nbsp;&nbsp;&nbsp;&nbsp;supported, graphical outputs are only available in the original lstopo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;program.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Packagers splitting lstopo and lstopo-no-graphics into different
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;packages are advised to use the alternatives system so that lstopo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;points to the best available binary.
<br>
&nbsp;&nbsp;+ Instruction caches are enabled in lstopo by default. User --no-icaches
<br>
&nbsp;&nbsp;&nbsp;&nbsp;to disable them.
<br>
&nbsp;&nbsp;+ Add -t/--threads to show threads in hwloc-ps.
<br>
* Removal of obsolete components
<br>
&nbsp;&nbsp;+ Remove the old cpuset interface (hwloc/cpuset.h) which is deprecated and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;superseded by the bitmap API (hwloc/bitmap.h) since v1.1.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_cpuset and nodeset types are still defined, but all hwloc_cpuset_*
<br>
&nbsp;&nbsp;&nbsp;&nbsp;compatibility wrappers are now gone.
<br>
&nbsp;&nbsp;+ Remove Linux libnuma conversion helpers for the deprecated and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;broken nodemask_t interface.
<br>
&nbsp;&nbsp;+ Remove support for &quot;Proc&quot; type name, it was superseded by &quot;PU&quot; in v1.0.
<br>
&nbsp;&nbsp;+ Remove hwloc-mask symlinks, it was replaced by hwloc-calc in v1.0.
<br>
* Misc
<br>
&nbsp;&nbsp;+ Non-printable characters are dropped from strings during XML export.
<br>
&nbsp;&nbsp;+ Assert hwloc_is_thissystem() in several I/O related helpers.
<br>
&nbsp;&nbsp;+ Limit the number of retries when operating on all threads within a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;process on Linux if the list of threads is heavily getting modified.
<br>
<p><p>Plus some item currently only listed in the v1.4 branch NEWS:
<br>
<p>* Fix PCIe 3.0 link speed computation.
<br>
* Fix importing of escaped characters with the minimalistic XML backend.
<br>
* Fix a memory leak in the x86 backend.
<br>
<p><p>Open tickets against v1.5:
<br>
<p>* #77: improve windows get_cpubind. I don't think I'll have time to work
<br>
&nbsp;&nbsp;on this soon since only Hartmut can test such patches on large windows
<br>
&nbsp;&nbsp;machines.
<br>
* #79: annotate the lstopo textual output for offline/unavailable/bound
<br>
&nbsp;&nbsp;CPUs (red/green/black in the graphical output). Easy to implement but
<br>
&nbsp;&nbsp;I don't have any obviously good solution yet.
<br>
* There's an OMPI ticket about hwloc fixes for a native windows build.
<br>
&nbsp;&nbsp;We're supposed to get a patch one day.
<br>
<p><p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3165.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4609)"</a>
<li><strong>Previous message:</strong> <a href="3163.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4.3a1r4608)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3166.php">TERRY DONTJE: "Re: [hwloc-devel] hwloc v1.5rc1 coming soon"</a>
<li><strong>Reply:</strong> <a href="3166.php">TERRY DONTJE: "Re: [hwloc-devel] hwloc v1.5rc1 coming soon"</a>
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
