<?
$subject_val = "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 10 08:09:59 2010" -->
<!-- isoreceived="20101110130959" -->
<!-- sent="Wed, 10 Nov 2010 14:09:48 +0100" -->
<!-- isosent="20101110130948" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released" -->
<!-- id="201011101409.49114.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4CD32B27.7090808_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-10 08:09:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1458.php">Jirka Hladky: "[hwloc-devel] hwloc-1.1rc2"</a>
<li><strong>Previous message:</strong> <a href="1456.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1rc2r2759)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1459.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Reply:</strong> <a href="1459.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Maybe reply:</strong> <a href="1464.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Maybe reply:</strong> <a href="1470.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Maybe reply:</strong> <a href="1472.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Maybe reply:</strong> <a href="1476.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Maybe reply:</strong> <a href="1478.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>I have found couple of issues with 1.1rc2
<br>
<p>1) man hwloc-bind
<br>
Following example does not work:
<br>
$ hwloc-bind --cpubind node:1 --membind:0 echo hello
<br>
Unrecognized option: --membind:0
<br>
<p>2) hwloc-bind --get --membind is not working for me (RHEL 6.0)
<br>
$ hwloc-bind --membind node:1 --mempolicy interleave -- hwloc-bind --get --
<br>
membind
<br>
hwloc_get_membind failed (errno 22 Invalid argument)
<br>
<p><p>3)
<br>
$ hwloc-calc --single socket:0
<br>
Unrecognized option: --single
<br>
<p>It seems like the old option --proclist still works.
<br>
$ hwloc-calc --proclist socket:0
<br>
0,1,2,3,4,5,6,7
<br>
<p>hwloc --help is mentioning only --single option.
<br>
<p>Thanks
<br>
Jirka
<br>
<p><p><p>On Thursday, November 04, 2010 10:52:39 pm Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; The Hardware Locality (hwloc) team is pleased to announce the first
</span><br>
<span class="quotelev1">&gt; release candidate for v1.1:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
</span><br>
<span class="quotelev1">&gt;    (mirrors will update shortly)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc provides command line tools and a C API to obtain the hierarchical
</span><br>
<span class="quotelev1">&gt; map of key computing elements, such as: NUMA memory nodes, shared
</span><br>
<span class="quotelev1">&gt; caches, processor sockets, processor cores, and processor &quot;threads&quot;.
</span><br>
<span class="quotelev1">&gt; hwloc also gathers various attributes such as cache and memory
</span><br>
<span class="quotelev1">&gt; information, and is portable across a variety of different operating
</span><br>
<span class="quotelev1">&gt; systems and platforms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; v1.1rc1 is the first milestone of a major feature release. Many features
</span><br>
<span class="quotelev1">&gt; and changes have been added since the v1.0 series. Although
</span><br>
<span class="quotelev1">&gt; v1.1rc1 is only a prerelease, we felt it important to announce the first
</span><br>
<span class="quotelev1">&gt; in the series in order to gain feedback and widespread testing
</span><br>
<span class="quotelev1">&gt; before v1.1 goes final. Please try hwloc out on your system, read its
</span><br>
<span class="quotelev1">&gt; improved documentation, and send us your feedback.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following is a summary of the changes since the v1.0 series (this
</span><br>
<span class="quotelev1">&gt; list may change before v1.1 goes final):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * API
</span><br>
<span class="quotelev1">&gt;   + Increase HWLOC_API_VERSION to 0x00010100 so that API changes may be
</span><br>
<span class="quotelev1">&gt;     detected at build-time.
</span><br>
<span class="quotelev1">&gt;   + Add a memory binding interface.
</span><br>
<span class="quotelev1">&gt;   + The cpuset API (hwloc/cpuset.h) is now deprecated. It is replaced by
</span><br>
<span class="quotelev1">&gt;     the bitmap API (hwloc/bitmap.h) which offers the same features with
</span><br>
<span class="quotelev1">&gt; more generic names since it applies to CPU sets, node sets and more.
</span><br>
<span class="quotelev1">&gt; Backward compatibility with the cpuset API and ABI is still provided but
</span><br>
<span class="quotelev1">&gt; it will be removed in a future release.
</span><br>
<span class="quotelev1">&gt;     Old types (hwloc_cpuset_t, ...) are still available as a way to clarify
</span><br>
<span class="quotelev1">&gt;     what kind of hwloc_bitmap_t each API function manipulates.
</span><br>
<span class="quotelev1">&gt;     Upgrading to the new API only requires to replace hwloc_cpuset_
</span><br>
<span class="quotelev1">&gt; function calls with the corresponding hwloc_bitmap_ calls, with the
</span><br>
<span class="quotelev1">&gt; following renaming exceptions:
</span><br>
<span class="quotelev1">&gt;     - hwloc_cpuset_cpu -&gt; hwloc_bitmap_only
</span><br>
<span class="quotelev1">&gt;     - hwloc_cpuset_all_but_cpu -&gt; hwloc_bitmap_allbut
</span><br>
<span class="quotelev1">&gt;     - hwloc_cpuset_from_string -&gt; hwloc_bitmap_sscanf
</span><br>
<span class="quotelev1">&gt;   + Add an `infos' array in each object to store couples of info names and
</span><br>
<span class="quotelev1">&gt;     values. It enables generic storage of things like the old dmi board
</span><br>
<span class="quotelev1">&gt;     infos that were previously stored in machine specific attributes.
</span><br>
<span class="quotelev1">&gt;   + Add linesize cache attribute.
</span><br>
<span class="quotelev1">&gt; * Features
</span><br>
<span class="quotelev1">&gt;   + Bitmaps (and thus CPU sets and node sets) are dynamically
</span><br>
<span class="quotelev1">&gt;     (re-)allocated, the maximal number of CPUs (HWLOC_NBMAXCPUS)
</span><br>
<span class="quotelev1">&gt;     has been removed.
</span><br>
<span class="quotelev1">&gt;   + Improve the distance-based grouping code to better support irregular
</span><br>
<span class="quotelev1">&gt;     distance matrices.
</span><br>
<span class="quotelev1">&gt;   + Add support for device-tree to get cache information (useful on Power
</span><br>
<span class="quotelev1">&gt;     architectures).
</span><br>
<span class="quotelev1">&gt; * Helpers
</span><br>
<span class="quotelev1">&gt;   + Add NVIDIA CUDA helpers in cuda.h and cudart.h to ease interoperability
</span><br>
<span class="quotelev1">&gt;     with CUDA Runtime and Driver APIs.
</span><br>
<span class="quotelev1">&gt;   + Add Myrinet Express helper in myriexpress.h to ease interoperability.
</span><br>
<span class="quotelev1">&gt; * Tools
</span><br>
<span class="quotelev1">&gt;   + Add hwloc-ps to list process' bindings.
</span><br>
<span class="quotelev1">&gt;   + Improve tools command-line options by adding a generic --input option
</span><br>
<span class="quotelev1">&gt;     (and more) which replaces the old --xml, --synthetic and --fsys-root.
</span><br>
<span class="quotelev1">&gt;   + Cleanup lstopo output configuration by adding --output-format.
</span><br>
<span class="quotelev1">&gt;   + Add --intersect in hwloc-calc, and replace --objects with --largest.
</span><br>
<span class="quotelev1">&gt;   + Add the ability to work on standard input in hwloc-calc.
</span><br>
<span class="quotelev1">&gt;   + Add --among in hwloc-distrib.
</span><br>
<span class="quotelev1">&gt;   + Add taskset-specific functions and command-line tools options to
</span><br>
<span class="quotelev1">&gt;     manipulate CPU set strings in the format of the taskset program.
</span><br>
<span class="quotelev1">&gt;   + Install hwloc-gather-topology.sh on Linux.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Brice Goglin
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-announce mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-announce_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-announce">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-announce</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1458.php">Jirka Hladky: "[hwloc-devel] hwloc-1.1rc2"</a>
<li><strong>Previous message:</strong> <a href="1456.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1rc2r2759)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1459.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Reply:</strong> <a href="1459.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Maybe reply:</strong> <a href="1464.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Maybe reply:</strong> <a href="1470.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Maybe reply:</strong> <a href="1472.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Maybe reply:</strong> <a href="1476.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Maybe reply:</strong> <a href="1478.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
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
