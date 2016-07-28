<?
$subject_val = "[hwloc-announce] Hardware locality (hwloc) v1.11.0rc2 released";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 15 03:43:34 2015" -->
<!-- isoreceived="20150615074334" -->
<!-- sent="Mon, 15 Jun 2015 09:43:32 +0200" -->
<!-- isosent="20150615074332" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware locality (hwloc) v1.11.0rc2 released" -->
<!-- id="557E8224.2010607_at_inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="556DC67E.2000009_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware locality (hwloc) v1.11.0rc2 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-15 03:43:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0078.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.11.0 release"</a>
<li><strong>Previous message:</strong> <a href="0076.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.11.0rc1 released"</a>
<li><strong>In reply to:</strong> <a href="0076.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.11.0rc1 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>A new release candidate (1.11rc2) is available with the following
<br>
noticeable additional changes:
<br>
<p>* Tools
<br>
&nbsp;&nbsp;+ lstopo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Add --restrict-flags to configure the behavior of --restrict.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Really export all verbose information to the given output file.
<br>
* Misc
<br>
&nbsp;&nbsp;+ Fix hwloc/cudart.h for machines with multiple PCI domains,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;thanks to Imre Kerr for reporting the problem.
<br>
&nbsp;&nbsp;+ Fix some corner case in the building of levels on large NUMA machines
<br>
&nbsp;&nbsp;&nbsp;&nbsp;with non-uniform NUMA groups and I/Os.
<br>
<p><pre>
--
Brice
Le 02/06/2015 17:06, Brice Goglin a &#195;&#169;crit :
&gt; The Hardware Locality (hwloc) team is pleased to announce the first
&gt; release candidate for v1.11.0:
&gt;
&gt;    <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
&gt;
&gt; v1.11.0rc1 is the first milestone of a major feature release.
&gt; It brings support for the upcoming &quot;Knights Landing&quot; Xeon Phi,
&gt; more information about memory and storage devices on Linux,
&gt; as well as many small improvements everywhere.
&gt;
&gt; By the way, there is now a best of lstopo at
&gt;    <a href="http://www.open-mpi.org/projects/hwloc/lstopo/">http://www.open-mpi.org/projects/hwloc/lstopo/</a>
&gt;
&gt; Version 1.11.0
&gt; --------------
&gt; * API
&gt;   + Socket objects are renamed into Package to align with the terminology
&gt;     used by processor vendors. The old HWLOC_OBJ_SOCKET type and &quot;Socket&quot;
&gt;     name are still supported for backward compatibility.
&gt;   + HWLOC_OBJ_NODE is replaced with HWLOC_OBJ_NUMANODE for clarification.
&gt;     HWLOC_OBJ_NODE is still supported for backward compatibility.
&gt;     &quot;Node&quot; and &quot;NUMANode&quot; strings are supported as in earlier releases.
&gt; * Detection improvements
&gt;   + Add support for Intel Knights Landing Xeon Phi.
&gt;     Thanks to Grzegorz Andrejczuk and Lukasz Anaczkowski.
&gt;   + Add Vendor, Model, Revision, SerialNumber, Type and LinuxDeviceID
&gt;     info attributes to Block OS devices on Linux. Thanks to Vineet Pedaballe
&gt;     for the help.
&gt;     - Add --disable-libudev to avoid dependency on the libudev library.
&gt;   + Add &quot;MemoryDevice&quot; Misc objects with information about DIMMs, on Linux
&gt;     when privileged and when I/O is enabled.
&gt;     Thanks to Vineet Pedaballe for the help.
&gt;   + Add a PCISlot attribute to PCI devices on Linux when supported to
&gt;     identify the physical PCI slot where the board is plugged.
&gt;   + Add CPUStepping info attribute on x86 processors,
&gt;     thanks to Thomas R&#195;&#182;hl for the suggestion.
&gt;   + Ignore the device-tree on non-Power architectures to avoid buggy
&gt;     detection on ARM. Thanks to Orion Poplawski for reporting the issue.
&gt;   + Work-around buggy Xeon E5v3 BIOS reporting invalid PCI-NUMA affinity
&gt;     for the PCI links on the second processor.
&gt;   + Add support for CUDA compute capability 5.x, thanks Benjamin Worpitz.
&gt;   + Many fixes to the x86 backend
&gt;     - Add L1i and fix L2/L3 type on old AMD processors without topoext support.
&gt;     - Fix Intel CPU family and model numbers when basic family isn't 6 or 15.
&gt;     - Fix package IDs on recent AMD processors.
&gt;     - Fix misc issues due to incomplete APIC IDs on x2APIC processors.
&gt;     - Avoid buggy discovery on old SGI Altix UVs with non-unique APIC IDs.
&gt;   + Gather total machine memory on NetBSD.
&gt; * Tools
&gt;   + lstopo
&gt;     - Collapse identical PCI devices unless --no-collapse is given.
&gt;       This avoids gigantic outputs when a PCI device contains dozens of
&gt;       identical virtual functions.
&gt;     - The ASCII art output is now called &quot;ascii&quot;, for instance in
&gt;       &quot;lstopo -.ascii&quot;.
&gt;       The former &quot;txt&quot; extension is retained for backward compatibility.
&gt;     - Automatically scales graphical box width to the inner text in Cairo,
&gt;       ASCII and Windows outputs.
&gt;     - Add --rect to lstopo to force rectangular layout even for NUMA nodes.
&gt;     - Objects may have a Type info attribute to specific a better type name
&gt;       and display it in lstopo.
&gt;   + hwloc-annotate
&gt;     - May now operate on all types of objects, including I/O.
&gt;     - May now insert Misc objects in the topology.
&gt;     - Do not drop instruction caches and I/O devices from the output anymore.
&gt;   + Fix lstopo path in hwloc-gather-topology after install.
&gt; * Misc
&gt;   + Fix PCI Bridge-specific depth attribute.
&gt;   + Fix hwloc_bitmap_intersect() for two infinite bitmaps.
&gt;   + Improve the performance of object insertion by cpuset for large
&gt;     topologies.
&gt;   + Prefix verbose XML import errors with the source name.
&gt;   + Improve pkg-config checks and error messages.
&gt;   + Fix excluding after a component with an argument in the HWLOC_COMPONENTS
&gt;     environment variable.
&gt;   + Fix the recommended way in documentation and examples to allocate memory
&gt;     on some node, it should use HWLOC_MEMBIND_BIND.
&gt;     Thanks to Nicolas Bouzat for reporting the issue.
&gt;   + Add a &quot;Miscellaneous objects&quot; section in the documentation.
&gt;   + Add a FAQ entry &quot;What happens to my topology if I disable symmetric
&gt;     multithreading, hyper-threading, etc. ?&quot; to the documentation.
&gt;
&gt; --
&gt; Brice
&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0078.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.11.0 release"</a>
<li><strong>Previous message:</strong> <a href="0076.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.11.0rc1 released"</a>
<li><strong>In reply to:</strong> <a href="0076.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.11.0rc1 released"</a>
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
