<?
$subject_val = "[hwloc-announce] Hardware locality (hwloc) v1.5rc2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 23 04:33:34 2012" -->
<!-- isoreceived="20120723083334" -->
<!-- sent="Mon, 23 Jul 2012 10:33:28 +0200" -->
<!-- isosent="20120723083328" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware locality (hwloc) v1.5rc2 released" -->
<!-- id="500D0C58.70807_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="500413F3.1060500_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware locality (hwloc) v1.5rc2 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-23 04:33:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0043.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.5 released"</a>
<li><strong>Previous message:</strong> <a href="0041.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.5rc1 released"</a>
<li><strong>In reply to:</strong> <a href="0041.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.5rc1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I released hwloc v1.5rc2. The changelog against rc1 is very small:
<br>
* Some documentation fixes
<br>
* The library soname version is properly set
<br>
* Some changes to make native Windows build easier
<br>
Unless something bad happens, the final v1.5 will be released within one
<br>
week.
<br>
<p>By the way, v1.5 also includes the following fixes that were pending in
<br>
the v1.4 stable branch:
<br>
* Fix PCIe 3.0 link speed computation.
<br>
* Fix importing of escaped characters with the minimalistic XML backend.
<br>
* Fix some memory leaks in the x86 backend.
<br>
<p>Brice
<br>
<p><p><p><p>Le 16/07/2012 15:15, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; The Hardware Locality (hwloc) team is pleased to announce the first
</span><br>
<span class="quotelev1">&gt; release candidate for v1.5:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; v1.5rc1 is the first milestone of a major feature release. The most
</span><br>
<span class="quotelev1">&gt; noticeable changes are the addition of the lstopo-no-graphics program
</span><br>
<span class="quotelev1">&gt; (which does require any heavy external library such as Cairo) and the
</span><br>
<span class="quotelev1">&gt; discovery of instruction caches. There are also many small improvements
</span><br>
<span class="quotelev1">&gt; to all backends, and some deprecated features have been removed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Backends
</span><br>
<span class="quotelev1">&gt;   + Do not limit the number of processors to 1024 on Solaris anymore.
</span><br>
<span class="quotelev1">&gt;   + Gather total machine memory on FreeBSD.
</span><br>
<span class="quotelev1">&gt;   + XML topology files do not depend on the locale anymore. Float numbers
</span><br>
<span class="quotelev1">&gt;     such as NUMA distances or PCI link speeds now always use a dot as a
</span><br>
<span class="quotelev1">&gt;     decimal separator.
</span><br>
<span class="quotelev1">&gt;   + Add instruction caches detection on Linux, AIX, Windows and Darwin.
</span><br>
<span class="quotelev1">&gt;   + Add get_last_cpu_location() support for the current thread on AIX.
</span><br>
<span class="quotelev1">&gt;   + Support binding on AIX when threads or processes were bound with
</span><br>
<span class="quotelev1">&gt;     bindprocessor(). Thanks to Hendryk Bockelmann for reporting the issue
</span><br>
<span class="quotelev1">&gt;     and testing patches, and to Farid Parpia for explaining the binding
</span><br>
<span class="quotelev1">&gt;     interfaces.
</span><br>
<span class="quotelev1">&gt;   + Improve AMD topology detection in the x86 backend (for FreeBSD) using
</span><br>
<span class="quotelev1">&gt;     the topoext feature.
</span><br>
<span class="quotelev1">&gt; * API
</span><br>
<span class="quotelev1">&gt;   + Increase HWLOC_API_VERSION to 0x00010500 so that API changes may be
</span><br>
<span class="quotelev1">&gt;     detected at build-time.
</span><br>
<span class="quotelev1">&gt;   + Add a cache type attribute describind Data, Instruction and Unified
</span><br>
<span class="quotelev1">&gt;     caches. Caches with different types but same depth (for instance L1d
</span><br>
<span class="quotelev1">&gt;     and L1i) are placed on different levels.
</span><br>
<span class="quotelev1">&gt;   + Add hwloc_get_cache_type_depth() to retrieve the hwloc level depth of
</span><br>
<span class="quotelev1">&gt;     of the given cache depth and type, for instance L1i or L2.
</span><br>
<span class="quotelev1">&gt;     It helps  disambiguating the case where hwloc_get_type_depth() returns
</span><br>
<span class="quotelev1">&gt;     HWLOC_TYPE_DEPTH_MULTIPLE.
</span><br>
<span class="quotelev1">&gt;   + Instruction caches are ignored unless HWLOC_TOPOLOGY_FLAG_ICACHES is
</span><br>
<span class="quotelev1">&gt;     passed to hwloc_topology_set_flags() before load.
</span><br>
<span class="quotelev1">&gt;   + Add hwloc_ibv_get_device_osdev_by_name() OpenFabrics helper in
</span><br>
<span class="quotelev1">&gt;     openfabrics-verbs.h to find the hwloc OS device object corresponding to
</span><br>
<span class="quotelev1">&gt;     an OpenFabrics device.
</span><br>
<span class="quotelev1">&gt; * Tools
</span><br>
<span class="quotelev1">&gt;   + Add lstopo-no-graphics, a lstopo built without graphical support to
</span><br>
<span class="quotelev1">&gt;     avoid dependencies on external libraries such as Cairo and X11. When
</span><br>
<span class="quotelev1">&gt;     supported, graphical outputs are only available in the original lstopo
</span><br>
<span class="quotelev1">&gt;     program.
</span><br>
<span class="quotelev1">&gt;     - Packagers splitting lstopo and lstopo-no-graphics into different
</span><br>
<span class="quotelev1">&gt;       packages are advised to use the alternatives system so that lstopo
</span><br>
<span class="quotelev1">&gt;       points to the best available binary.
</span><br>
<span class="quotelev1">&gt;   + Instruction caches are enabled in lstopo by default. User --no-icaches
</span><br>
<span class="quotelev1">&gt;     to disable them.
</span><br>
<span class="quotelev1">&gt;   + Add -t/--threads to show threads in hwloc-ps.
</span><br>
<span class="quotelev1">&gt; * Removal of obsolete components
</span><br>
<span class="quotelev1">&gt;   + Remove the old cpuset interface (hwloc/cpuset.h) which is deprecated and
</span><br>
<span class="quotelev1">&gt;     superseded by the bitmap API (hwloc/bitmap.h) since v1.1.
</span><br>
<span class="quotelev1">&gt;     hwloc_cpuset and nodeset types are still defined, but all hwloc_cpuset_*
</span><br>
<span class="quotelev1">&gt;     compatibility wrappers are now gone.
</span><br>
<span class="quotelev1">&gt;   + Remove Linux libnuma conversion helpers for the deprecated and
</span><br>
<span class="quotelev1">&gt;     broken nodemask_t interface.
</span><br>
<span class="quotelev1">&gt;   + Remove support for &quot;Proc&quot; type name, it was superseded by &quot;PU&quot; in v1.0.
</span><br>
<span class="quotelev1">&gt;   + Remove hwloc-mask symlinks, it was replaced by hwloc-calc in v1.0.
</span><br>
<span class="quotelev1">&gt; * Misc
</span><br>
<span class="quotelev1">&gt;   + Non-printable characters are dropped from strings during XML export.
</span><br>
<span class="quotelev1">&gt;   + Assert hwloc_is_thissystem() in several I/O related helpers.
</span><br>
<span class="quotelev1">&gt;   + Limit the number of retries when operating on all threads within a
</span><br>
<span class="quotelev1">&gt;     process on Linux if the list of threads is heavily getting modified.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0043.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.5 released"</a>
<li><strong>Previous message:</strong> <a href="0041.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.5rc1 released"</a>
<li><strong>In reply to:</strong> <a href="0041.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.5rc1 released"</a>
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
