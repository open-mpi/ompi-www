<?
$subject_val = "[hwloc-announce] Hardware locality (hwloc) v1.1rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  4 17:52:46 2010" -->
<!-- isoreceived="20101104215246" -->
<!-- sent="Thu, 04 Nov 2010 22:52:39 +0100" -->
<!-- isosent="20101104215239" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware locality (hwloc) v1.1rc1 released" -->
<!-- id="4CD32B27.7090808_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-04 17:52:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0009.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.0.3rc1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2010/07/0007.php">Jeff Squyres: "[hwloc-announce] Hardware Locality (hwloc) v1.0.2 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the first
<br>
release candidate for v1.1:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
&nbsp;&nbsp;&nbsp;(mirrors will update shortly)
<br>
<p>hwloc provides command line tools and a C API to obtain the hierarchical
<br>
map of key computing elements, such as: NUMA memory nodes, shared
<br>
caches, processor sockets, processor cores, and processor &quot;threads&quot;.
<br>
hwloc also gathers various attributes such as cache and memory
<br>
information, and is portable across a variety of different operating
<br>
systems and platforms.
<br>
<p>v1.1rc1 is the first milestone of a major feature release. Many features
<br>
and changes have been added since the v1.0 series. Although
<br>
v1.1rc1 is only a prerelease, we felt it important to announce the first
<br>
in the series in order to gain feedback and widespread testing
<br>
before v1.1 goes final. Please try hwloc out on your system, read its
<br>
improved documentation, and send us your feedback.
<br>
<p>The following is a summary of the changes since the v1.0 series (this
<br>
list may change before v1.1 goes final):
<br>
<p>* API
<br>
&nbsp;&nbsp;+ Increase HWLOC_API_VERSION to 0x00010100 so that API changes may be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;detected at build-time.
<br>
&nbsp;&nbsp;+ Add a memory binding interface.
<br>
&nbsp;&nbsp;+ The cpuset API (hwloc/cpuset.h) is now deprecated. It is replaced by
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the bitmap API (hwloc/bitmap.h) which offers the same features with more
<br>
&nbsp;&nbsp;&nbsp;&nbsp;generic names since it applies to CPU sets, node sets and more.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Backward compatibility with the cpuset API and ABI is still provided but
<br>
&nbsp;&nbsp;&nbsp;&nbsp;it will be removed in a future release.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Old types (hwloc_cpuset_t, ...) are still available as a way to clarify
<br>
&nbsp;&nbsp;&nbsp;&nbsp;what kind of hwloc_bitmap_t each API function manipulates.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Upgrading to the new API only requires to replace hwloc_cpuset_ function
<br>
&nbsp;&nbsp;&nbsp;&nbsp;calls with the corresponding hwloc_bitmap_ calls, with the following
<br>
&nbsp;&nbsp;&nbsp;&nbsp;renaming exceptions:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- hwloc_cpuset_cpu -&gt; hwloc_bitmap_only
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- hwloc_cpuset_all_but_cpu -&gt; hwloc_bitmap_allbut
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- hwloc_cpuset_from_string -&gt; hwloc_bitmap_sscanf
<br>
&nbsp;&nbsp;+ Add an `infos' array in each object to store couples of info names and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;values. It enables generic storage of things like the old dmi board
<br>
&nbsp;&nbsp;&nbsp;&nbsp;infos that were previously stored in machine specific attributes.
<br>
&nbsp;&nbsp;+ Add linesize cache attribute.
<br>
* Features
<br>
&nbsp;&nbsp;+ Bitmaps (and thus CPU sets and node sets) are dynamically
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(re-)allocated, the maximal number of CPUs (HWLOC_NBMAXCPUS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;has been removed.
<br>
&nbsp;&nbsp;+ Improve the distance-based grouping code to better support irregular
<br>
&nbsp;&nbsp;&nbsp;&nbsp;distance matrices.
<br>
&nbsp;&nbsp;+ Add support for device-tree to get cache information (useful on Power
<br>
&nbsp;&nbsp;&nbsp;&nbsp;architectures).
<br>
* Helpers
<br>
&nbsp;&nbsp;+ Add NVIDIA CUDA helpers in cuda.h and cudart.h to ease interoperability
<br>
&nbsp;&nbsp;&nbsp;&nbsp;with CUDA Runtime and Driver APIs.
<br>
&nbsp;&nbsp;+ Add Myrinet Express helper in myriexpress.h to ease interoperability.
<br>
* Tools
<br>
&nbsp;&nbsp;+ Add hwloc-ps to list process' bindings.
<br>
&nbsp;&nbsp;+ Improve tools command-line options by adding a generic --input option
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(and more) which replaces the old --xml, --synthetic and --fsys-root.
<br>
&nbsp;&nbsp;+ Cleanup lstopo output configuration by adding --output-format.
<br>
&nbsp;&nbsp;+ Add --intersect in hwloc-calc, and replace --objects with --largest.
<br>
&nbsp;&nbsp;+ Add the ability to work on standard input in hwloc-calc.
<br>
&nbsp;&nbsp;+ Add --among in hwloc-distrib.
<br>
&nbsp;&nbsp;+ Add taskset-specific functions and command-line tools options to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;manipulate CPU set strings in the format of the taskset program.
<br>
&nbsp;&nbsp;+ Install hwloc-gather-topology.sh on Linux.
<br>
<p><p><pre>
--
Brice Goglin
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0009.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.0.3rc1 released"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2010/07/0007.php">Jeff Squyres: "[hwloc-announce] Hardware Locality (hwloc) v1.0.2 released"</a>
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
