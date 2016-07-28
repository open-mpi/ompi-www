<?
$subject_val = "[hwloc-announce] Hardware locality (hwloc) v1.4 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 26 12:04:47 2012" -->
<!-- isoreceived="20120126170447" -->
<!-- sent="Thu, 26 Jan 2012 18:04:39 +0100" -->
<!-- isosent="20120126170439" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware locality (hwloc) v1.4 released" -->
<!-- id="4F2187A7.7030402_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware locality (hwloc) v1.4 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-26 12:04:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2012/02/0034.php">Jeff Squyres: "[hwloc-announce] hwloc v1.3.2 released"</a>
<li><strong>Previous message:</strong> <a href="0032.php">Brice Goglin: "[hwloc-announce] hwloc v1.4rc2 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the release
<br>
of v1.4:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.4 is a major new release series.  It includes many new features and
<br>
changes over the v1.3.x series. The most noticeable improvement is the
<br>
ability to assemble the topologies of multiple nodes into a single
<br>
global one. See the Multi-node Topologies section in the documentation
<br>
for details.
<br>
<p>Also please note that 64bits windows builds are now available for
<br>
download.
<br>
<p>* Major features
<br>
&nbsp;&nbsp;+ Add &quot;custom&quot; interface and &quot;assembler&quot; tools to build multi-node
<br>
&nbsp;&nbsp;&nbsp;&nbsp;topology. See the Multi-node Topologies section in the documentation
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for details.
<br>
* Interface improvements
<br>
&nbsp;&nbsp;+ Add symmetric_subtree object attribute to ease assumptions when consulting
<br>
&nbsp;&nbsp;&nbsp;&nbsp;regular symmetric topologies.
<br>
&nbsp;&nbsp;+ Add a CPUModel and CPUType info attribute to Socket objects on Linux
<br>
&nbsp;&nbsp;&nbsp;&nbsp;and Solaris.
<br>
&nbsp;&nbsp;+ Add hwloc_get_obj_index_inside_cpuset() to retrieve the &quot;logical&quot; index
<br>
&nbsp;&nbsp;&nbsp;&nbsp;of an object within a subtree of the topology.
<br>
&nbsp;&nbsp;+ Add more NVIDIA CUDA helpers in cuda.h and cudart.h to find hwloc objects
<br>
&nbsp;&nbsp;&nbsp;&nbsp;corresponding to CUDA devices.
<br>
* Discovery improvements
<br>
&nbsp;&nbsp;+ Add a group object above partial distance matrices to make sure
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the matrices are available in the final topology, except when this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;new object would contradict the existing hierarchy.
<br>
&nbsp;&nbsp;+ Grouping by distances now also works when loading from XML.
<br>
&nbsp;&nbsp;+ Fix some corner cases in object insertion, for instance when dealing
<br>
&nbsp;&nbsp;&nbsp;&nbsp;with NUMA nodes without any CPU.
<br>
* Backends
<br>
&nbsp;&nbsp;+ Implement hwloc_get_area_membind() on Linux.
<br>
&nbsp;&nbsp;+ Honor I/O topology flags when importing from XML.
<br>
&nbsp;&nbsp;+ Further improve XML-related error checking and reporting.
<br>
&nbsp;&nbsp;+ Hide synthetic topology error messages unless HWLOC_SYNTHETIC_VERBOSE=1.
<br>
* Tools
<br>
&nbsp;&nbsp;+ Add synthetic exporting of symmetric topologies to lstopo.
<br>
&nbsp;&nbsp;+ lstopo --horiz and --vert can now be applied to some specific object types.
<br>
&nbsp;&nbsp;+ lstopo -v -p now displays distance matrices with physical indexes.
<br>
&nbsp;&nbsp;+ Add hwloc-distances utility to list distances.
<br>
* Documentation
<br>
&nbsp;&nbsp;+ Fix and/or document the behavior of most inline functions in hwloc/helper.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;when the topology contains some I/O or Misc objects.
<br>
&nbsp;&nbsp;+ Backend documentation enhancements.
<br>
* Bug fixes
<br>
&nbsp;&nbsp;+ Fix missing last bit in hwloc_linux_get_thread_cpubind().
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks to Carolina G&#243;mez-Tost&#243;n Guti&#233;rrez for reporting the issue.
<br>
&nbsp;&nbsp;+ Fix FreeBSD build without cpuid support.
<br>
&nbsp;&nbsp;+ Fix several Windows build issues.
<br>
&nbsp;&nbsp;+ Fix inline keyword definition in public headers.
<br>
&nbsp;&nbsp;+ Fix dependencies in the embedded library.
<br>
&nbsp;&nbsp;+ Improve visibility support detection. Thanks to Dave Love for providing
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the patch.
<br>
&nbsp;&nbsp;+ Remove references to internal symbols in the tools.
<br>
<p><pre>
--
Brice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2012/02/0034.php">Jeff Squyres: "[hwloc-announce] hwloc v1.3.2 released"</a>
<li><strong>Previous message:</strong> <a href="0032.php">Brice Goglin: "[hwloc-announce] hwloc v1.4rc2 released"</a>
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
