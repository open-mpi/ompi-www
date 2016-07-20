<?
$subject_val = "[hwloc-announce] Hardware locality (hwloc) v1.11.0 release";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 18 03:48:41 2015" -->
<!-- isoreceived="20150618074841" -->
<!-- sent="Thu, 18 Jun 2015 09:48:39 +0200" -->
<!-- isosent="20150618074839" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware locality (hwloc) v1.11.0 release" -->
<!-- id="558277D7.9000009_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware locality (hwloc) v1.11.0 release<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-18 03:48:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2015/10/0079.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.11.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="0077.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.11.0rc2 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the release
<br>
of v1.11.0:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.11.0 is the new feature release. It brings support for the upcoming
<br>
&quot;Knights Landing&quot; Xeon Phi, more information about memory and storage
<br>
devices on Linux, as well as many small improvements everywhere.
<br>
<p>By the way, there is now a best of lstopo at
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/lstopo/">http://www.open-mpi.org/projects/hwloc/lstopo/</a>
<br>
<p>Version 1.11.0
<br>
--------------
<br>
* API
<br>
&nbsp;&nbsp;+ Socket objects are renamed into Package to align with the terminology
<br>
&nbsp;&nbsp;&nbsp;&nbsp;used by processor vendors. The old HWLOC_OBJ_SOCKET type and &quot;Socket&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;name are still supported for backward compatibility.
<br>
&nbsp;&nbsp;+ HWLOC_OBJ_NODE is replaced with HWLOC_OBJ_NUMANODE for clarification.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_OBJ_NODE is still supported for backward compatibility.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&quot;Node&quot; and &quot;NUMANode&quot; strings are supported as in earlier releases.
<br>
* Detection improvements
<br>
&nbsp;&nbsp;+ Add support for Intel Knights Landing Xeon Phi.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks to Grzegorz Andrejczuk and Lukasz Anaczkowski.
<br>
&nbsp;&nbsp;+ Add Vendor, Model, Revision, SerialNumber, Type and LinuxDeviceID
<br>
&nbsp;&nbsp;&nbsp;&nbsp;info attributes to Block OS devices on Linux. Thanks to Vineet Pedaballe
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for the help.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Add --disable-libudev to avoid dependency on the libudev library.
<br>
&nbsp;&nbsp;+ Add &quot;MemoryDevice&quot; Misc objects with information about DIMMs, on Linux
<br>
&nbsp;&nbsp;&nbsp;&nbsp;when privileged and when I/O is enabled.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks to Vineet Pedaballe for the help.
<br>
&nbsp;&nbsp;+ Add a PCISlot attribute to PCI devices on Linux when supported to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;identify the physical PCI slot where the board is plugged.
<br>
&nbsp;&nbsp;+ Add CPUStepping info attribute on x86 processors,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;thanks to Thomas R&#195;&#182;hl for the suggestion.
<br>
&nbsp;&nbsp;+ Ignore the device-tree on non-Power architectures to avoid buggy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;detection on ARM. Thanks to Orion Poplawski for reporting the issue.
<br>
&nbsp;&nbsp;+ Work-around buggy Xeon E5v3 BIOS reporting invalid PCI-NUMA affinity
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for the PCI links on the second processor.
<br>
&nbsp;&nbsp;+ Add support for CUDA compute capability 5.x, thanks Benjamin Worpitz.
<br>
&nbsp;&nbsp;+ Many fixes to the x86 backend
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Add L1i and fix L2/L3 type on old AMD processors without topoext support.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Fix Intel CPU family and model numbers when basic family isn't 6 or 15.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Fix package IDs on recent AMD processors.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Fix misc issues due to incomplete APIC IDs on x2APIC processors.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Avoid buggy discovery on old SGI Altix UVs with non-unique APIC IDs.
<br>
&nbsp;&nbsp;+ Gather total machine memory on NetBSD.
<br>
* Tools
<br>
&nbsp;&nbsp;+ lstopo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Collapse identical PCI devices unless --no-collapse is given.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This avoids gigantic outputs when a PCI device contains dozens of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;identical virtual functions.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- The ASCII art output is now called &quot;ascii&quot;, for instance in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;lstopo -.ascii&quot;.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The former &quot;txt&quot; extension is retained for backward compatibility.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Automatically scales graphical box width to the inner text in Cairo,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ASCII and Windows outputs.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Add --rect to lstopo to force rectangular layout even for NUMA nodes.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Add --restrict-flags to configure the behavior of --restrict.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Objects may have a &quot;Type&quot; info attribute to specify a better type name
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and display it in lstopo.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Really export all verbose information to the given output file.
<br>
&nbsp;&nbsp;+ hwloc-annotate
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- May now operate on all types of objects, including I/O.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- May now insert Misc objects in the topology.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- Do not drop instruction caches and I/O devices from the output anymore.
<br>
&nbsp;&nbsp;+ Fix lstopo path in hwloc-gather-topology after install.
<br>
* Misc
<br>
&nbsp;&nbsp;+ Fix hwloc/cudart.h for machines with multiple PCI domains,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;thanks to Imre Kerr for reporting the problem.
<br>
&nbsp;&nbsp;+ Fix PCI Bridge-specific depth attribute.
<br>
&nbsp;&nbsp;+ Fix hwloc_bitmap_intersect() for two infinite bitmaps.
<br>
&nbsp;&nbsp;+ Fix some corner cases in the building of levels on large NUMA machines
<br>
&nbsp;&nbsp;&nbsp;&nbsp;with non-uniform NUMA groups and I/Os.
<br>
&nbsp;&nbsp;+ Improve the performance of object insertion by cpuset for large
<br>
&nbsp;&nbsp;&nbsp;&nbsp;topologies.
<br>
&nbsp;&nbsp;+ Prefix verbose XML import errors with the source name.
<br>
&nbsp;&nbsp;+ Improve pkg-config checks and error messages.
<br>
&nbsp;&nbsp;+ Fix excluding after a component with an argument in the HWLOC_COMPONENTS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;environment variable.
<br>
* Documentation
<br>
&nbsp;&nbsp;+ Fix the recommended way in documentation and examples to allocate memory
<br>
&nbsp;&nbsp;&nbsp;&nbsp;on some node, it should use HWLOC_MEMBIND_BIND.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks to Nicolas Bouzat for reporting the issue.
<br>
&nbsp;&nbsp;+ Add a &quot;Miscellaneous objects&quot; section in the documentation.
<br>
&nbsp;&nbsp;+ Add a FAQ entry &quot;What happens to my topology if I disable symmetric
<br>
&nbsp;&nbsp;&nbsp;&nbsp;multithreading, hyper-threading, etc. ?&quot; to the documentation.
<br>
<p><p>Changes since 1.11.0rc2 are minor.
<br>
<p><pre>
--
Brice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2015/10/0079.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.11.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="0077.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.11.0rc2 released"</a>
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
