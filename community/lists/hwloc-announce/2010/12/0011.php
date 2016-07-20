<?
$subject_val = "[hwloc-announce] Hardware locality (hwloc) v1.1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 16 17:34:45 2010" -->
<!-- isoreceived="20101216223445" -->
<!-- sent="Thu, 16 Dec 2010 17:34:40 -0500" -->
<!-- isosent="20101216223440" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware locality (hwloc) v1.1 released" -->
<!-- id="4CBEDEA6-9916-4C4C-B670-4FCA5BFA9C03_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware locality (hwloc) v1.1 released<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-16 17:34:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2011/01/0012.php">Jeff Squyres: "[hwloc-announce] Hardware Locality (hwloc) v1.1.1 released"</a>
<li><strong>Previous message:</strong> <a href="0010.php">Jeff Squyres: "[hwloc-announce] Hardware locality (hwloc) v1.0.3 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bringing even more holiday joy, the Hardware Locality (hwloc) team is pleased to announce the release of v1.1:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a> 
<br>
<p>v1.1 is a major new release series for hwloc.  It includes many new features and changes over the v1.0.x series.  The just-released v1.0.3 is expected to be the last release of its series (see <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2010/12/0010.php">http://www.open-mpi.org/community/lists/hwloc-announce/2010/12/0010.php</a>).
<br>
<p>The following is a summary of the changes since the v1.0 series:
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
&nbsp;&nbsp;&nbsp;&nbsp;values. It enables generic storage of things like the old dmi board infos
<br>
&nbsp;&nbsp;&nbsp;&nbsp;that were previously stored in machine specific attributes.
<br>
&nbsp;&nbsp;+ Add linesize cache attribute.
<br>
* Features
<br>
&nbsp;&nbsp;+ Bitmaps (and thus CPU sets and node sets) are dynamically (re-)allocated,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the maximal number of CPUs (HWLOC_NBMAXCPUS) has been removed.
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
&nbsp;&nbsp;+ lstopo now displays physical/OS indexes by default in graphical mode
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(use -l to switch back to logical indexes). The textual output still uses
<br>
&nbsp;&nbsp;&nbsp;&nbsp;logical by default (use -p to switch to physical indexes).
<br>
&nbsp;&nbsp;+ lstopo prefixes logical indexes with `L#' and physical indexes with `P#'.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Physical indexes are also printed as `P#N' instead of `phys=N' within
<br>
&nbsp;&nbsp;&nbsp;&nbsp;object attributes (in parentheses).
<br>
&nbsp;&nbsp;+ Add a legend at the bottom of the lstopo graphical output, use --no-legend
<br>
&nbsp;&nbsp;&nbsp;&nbsp;to remove it.
<br>
&nbsp;&nbsp;+ Add hwloc-ps to list process' bindings.
<br>
&nbsp;&nbsp;+ Add --membind and --mempolicy options to hwloc-bind.
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
&nbsp;&nbsp;+ Add --from, --to and --at in hwloc-distrib.
<br>
&nbsp;&nbsp;+ Add taskset-specific functions and command-line tools options to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;manipulate CPU set strings in the format of the taskset program.
<br>
&nbsp;&nbsp;+ Install hwloc-gather-topology.sh on Linux.
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2011/01/0012.php">Jeff Squyres: "[hwloc-announce] Hardware Locality (hwloc) v1.1.1 released"</a>
<li><strong>Previous message:</strong> <a href="0010.php">Jeff Squyres: "[hwloc-announce] Hardware locality (hwloc) v1.0.3 released"</a>
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
