<?
$subject_val = "[hwloc-announce] Hardware Locality (hwloc) v1.11.3 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 26 09:45:51 2016" -->
<!-- isoreceived="20160426134551" -->
<!-- sent="Tue, 26 Apr 2016 15:45:49 +0200" -->
<!-- isosent="20160426134549" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware Locality (hwloc) v1.11.3 released" -->
<!-- id="571F710D.4090908_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware Locality (hwloc) v1.11.3 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-26 09:45:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2016/07/0086.php">Jeff Squyres (jsquyres): "[hwloc-announce] This list is migrating!"</a>
<li><strong>Previous message:</strong> <a href="0084.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.11.3rc1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the release
<br>
of v1.11.3:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.11.3 addresses all known bugs in the v1.11 series. It also brings
<br>
many small improvements (those that shouldn't wait until the future 2.0
<br>
release is ready).
<br>
<p>The following is a summary of the changes since v1.11.2:
<br>
<p>* Bug fixes
<br>
&nbsp;&nbsp;+ Fix a memory leak on Linux S/390 hosts with books.
<br>
&nbsp;&nbsp;+ Fix /proc/mounts parsing on Linux by using mntent.h.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks to Nathan Hjelm for reporting the issue.
<br>
&nbsp;&nbsp;+ Fix a x86 infinite loop on VMware due to the x2APIC feature being
<br>
&nbsp;&nbsp;&nbsp;&nbsp;advertised without actually being fully supported.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks to Jianjun Wen for reporting the problem and testing the patch.
<br>
&nbsp;&nbsp;+ Fix the return value of hwloc_alloc() on mmap() failure.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks to Hugo Brunie for reporting the issue.
<br>
&nbsp;&nbsp;+ Fix the return value of command-line tools in some error cases.
<br>
&nbsp;&nbsp;+ Do not break individual thread bindings during x86 backend discovery in a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;multithreaded process. Thanks to Farouk Mansouri for the report.
<br>
&nbsp;&nbsp;+ Fix hwloc-bind --membind for CPU-less NUMA nodes.
<br>
&nbsp;&nbsp;+ Fix some corner cases in the XML export/import of application userdata.
<br>
* API Improvements
<br>
&nbsp;&nbsp;+ Add HWLOC_MEMBIND_BYNODESET flag so that membind() functions accept
<br>
&nbsp;&nbsp;&nbsp;&nbsp;either cpusets or nodesets.
<br>
&nbsp;&nbsp;+ Add hwloc_get_area_memlocation() to check where pages are actually
<br>
&nbsp;&nbsp;&nbsp;&nbsp;allocated. Only implemented on Linux for now.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- There's no _nodeset() variant, but the new flag HWLOC_MEMBIND_BYNODESET
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;is supported.
<br>
&nbsp;&nbsp;+ Make hwloc_obj_type_sscanf() parse back everything that may be outputted
<br>
&nbsp;&nbsp;&nbsp;&nbsp;by hwloc_obj_type_snprintf().
<br>
* Detection Improvements
<br>
&nbsp;&nbsp;+ Allow the x86 backend to add missing cache levels, so that it completes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;what the Solaris backend lacks.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks to Ryan Zezeski for reporting the issue.
<br>
&nbsp;&nbsp;+ Do not filter-out FibreChannel PCI adapters by default anymore.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks to Matt Muggeridge for the report.
<br>
&nbsp;&nbsp;+ Add support for CUDA compute capability 6.x.
<br>
* Tools
<br>
&nbsp;&nbsp;+ Add --support to hwloc-info to list supported features, just like with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_topology_get_support().
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Also add --objects and --topology to explicitly switch between the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;default modes.
<br>
&nbsp;&nbsp;+ Add --tid to let hwloc-bind operate on individual threads on Linux.
<br>
&nbsp;&nbsp;+ Add --nodeset to let hwloc-bind report memory binding as NUMA node sets.
<br>
&nbsp;&nbsp;+ hwloc-annotate and lstopo don't drop application userdata from XMLs anymore.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Add --cu to hwloc-annotate to drop these application userdata.
<br>
&nbsp;&nbsp;+ Make the hwloc-dump-hwdata dump directory configurable through configure
<br>
&nbsp;&nbsp;&nbsp;&nbsp;options such as --runstatedir or --localstatedir.
<br>
* Misc Improvements
<br>
&nbsp;&nbsp;+ Add systemd service template contrib/systemd/hwloc-dump-hwdata.service
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for launching hwloc-dump-hwdata at boot on Linux.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks to Grzegorz Andrejczuk.
<br>
&nbsp;&nbsp;+ Add HWLOC_PLUGINS_BLACKLIST environment variable to prevent some plugins
<br>
&nbsp;&nbsp;&nbsp;&nbsp;from being loaded. Thanks to Alexandre Denis for the suggestion.
<br>
&nbsp;&nbsp;+ Small improvements for various Windows build systems,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;thanks to Jonathan L Peyton and Marco Atzeri.
<br>
<p>Changes since rc1 are minor.
<br>
<p><pre>
--
Brice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2016/07/0086.php">Jeff Squyres (jsquyres): "[hwloc-announce] This list is migrating!"</a>
<li><strong>Previous message:</strong> <a href="0084.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.11.3rc1 released"</a>
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
