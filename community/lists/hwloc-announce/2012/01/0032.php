<?
$subject_val = "[hwloc-announce] hwloc v1.4rc2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 23 04:34:50 2012" -->
<!-- isoreceived="20120123093450" -->
<!-- sent="Mon, 23 Jan 2012 10:34:44 +0100" -->
<!-- isosent="20120123093444" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] hwloc v1.4rc2 released" -->
<!-- id="4F1D29B4.3060703_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F16DF40.9050609_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] hwloc v1.4rc2 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-23 04:34:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0033.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.4 released"</a>
<li><strong>Previous message:</strong> <a href="0031.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.4rc1 released"</a>
<li><strong>In reply to:</strong> <a href="0031.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.4rc1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We just posted v1.4rc2 on the web. It brings many additional fixes:
<br>
<p>+ Fix missing last bit in hwloc_linux_get_thread_cpubind().
<br>
&nbsp;&nbsp;Thanks to Carolina G&#243;mez-Tost&#243;n Guti&#233;rrez for reporting the issue.
<br>
+ Fix FreeBSD build without cpuid support.
<br>
+ Fix several Windows build issues.
<br>
+ Fix inline keyword definition in public headers.
<br>
+ Fix dependencies in the embedded library.
<br>
+ Improve visibility support detection. Thanks to Dave Love for providing
<br>
&nbsp;&nbsp;the patch.
<br>
+ Remove references to internal symbols in the tools.
<br>
<p><p>Please test and let us know if you find any issue.
<br>
<p>Brice
<br>
<p><p><p><p>Le 18/01/2012 16:03, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; The Hardware Locality (hwloc) team is pleased to announce the first
</span><br>
<span class="quotelev1">&gt; release candidate for v1.4:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; v1.4rc1 is the first milestone of a major feature release. The most
</span><br>
<span class="quotelev1">&gt; noticeable improvement is the ability to assemble the topologies of
</span><br>
<span class="quotelev1">&gt; multiple nodes into a single global one. See the Multi-node Topologies
</span><br>
<span class="quotelev1">&gt; section in the documentation for details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also please note that 64bits windows builds are now available for
</span><br>
<span class="quotelev1">&gt; download.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Major features
</span><br>
<span class="quotelev1">&gt;  + Add &quot;custom&quot; interface and &quot;assembler&quot; tools to build multi-node
</span><br>
<span class="quotelev1">&gt;     topology. See the Multi-node Topologies section in the documentation
</span><br>
<span class="quotelev1">&gt;     for details.
</span><br>
<span class="quotelev1">&gt; * Interface improvements
</span><br>
<span class="quotelev1">&gt;   + Add symmetric_subtree object attribute to ease assumptions when consulting
</span><br>
<span class="quotelev1">&gt;     regular symmetric topologies.
</span><br>
<span class="quotelev1">&gt;   + Add a CPUModel and CPUType info attribute to Socket objects on Linux
</span><br>
<span class="quotelev1">&gt;     and Solaris.
</span><br>
<span class="quotelev1">&gt;   + Add hwloc_get_obj_index_inside_cpuset() to retrieve the &quot;logical&quot; index
</span><br>
<span class="quotelev1">&gt;     of an object within a subtree of the topology.
</span><br>
<span class="quotelev1">&gt;   + Add more NVIDIA CUDA helpers in cuda.h and cudart.h to find hwloc objects
</span><br>
<span class="quotelev1">&gt;     corresponding to CUDA devices.
</span><br>
<span class="quotelev1">&gt; * Discovery improvements
</span><br>
<span class="quotelev1">&gt;   + Add a group object above partial distance matrices to make sure
</span><br>
<span class="quotelev1">&gt;     the matrices are available in the final topology, except when this
</span><br>
<span class="quotelev1">&gt;     new object would contradict the existing hierarchy.
</span><br>
<span class="quotelev1">&gt;   + Grouping by distances now also works when loading from XML.
</span><br>
<span class="quotelev1">&gt;   + Fix some corner cases in object insertion, for instance when dealing
</span><br>
<span class="quotelev1">&gt;     with NUMA nodes without any CPU.
</span><br>
<span class="quotelev1">&gt; * Backends
</span><br>
<span class="quotelev1">&gt;   + Implement hwloc_get_area_membind() on Linux.
</span><br>
<span class="quotelev1">&gt;   + Honor I/O topology flags when importing from XML.
</span><br>
<span class="quotelev1">&gt;   + Further improve XML-related error reporting.
</span><br>
<span class="quotelev1">&gt;   + Hide synthetic topology error messages unless HWLOC_SYNTHETIC_VERBOSE=1.
</span><br>
<span class="quotelev1">&gt; * Tools
</span><br>
<span class="quotelev1">&gt;   + Add synthetic exporting of symmetric topologies to lstopo.
</span><br>
<span class="quotelev1">&gt;   + lstopo --horiz and --vert can now be applied to some specific object types.
</span><br>
<span class="quotelev1">&gt;   + lstopo -v -p now displays distance matrices with physical indexes.
</span><br>
<span class="quotelev1">&gt;   + Add hwloc-distances utility to list distances.
</span><br>
<span class="quotelev1">&gt; * Documentation
</span><br>
<span class="quotelev1">&gt;   + Fix and/or document the behavior of most inline functions in hwloc/helper.h
</span><br>
<span class="quotelev1">&gt;     when the topology contains some I/O or Misc objects.
</span><br>
<span class="quotelev1">&gt;   + Backend documentation enhancements.
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
<li><strong>Next message:</strong> <a href="0033.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.4 released"</a>
<li><strong>Previous message:</strong> <a href="0031.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.4rc1 released"</a>
<li><strong>In reply to:</strong> <a href="0031.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.4rc1 released"</a>
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
