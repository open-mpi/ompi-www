<?
$subject_val = "[hwloc-devel] v1.11 coming soon";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 21 05:00:40 2015" -->
<!-- isoreceived="20150521090040" -->
<!-- sent="Thu, 21 May 2015 11:00:38 +0200" -->
<!-- isosent="20150521090038" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] v1.11 coming soon" -->
<!-- id="555D9EB6.7000009_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] v1.11 coming soon<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-21 05:00:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4455.php">Peyton, Jonathan L: "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
<li><strong>Previous message:</strong> <a href="4453.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-574-gc6fa7b7)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I will likely release v1.11rc1 next week. The list of changes is
<br>
appended below.
<br>
<p>For the record, the master branch is preparing hwloc v2.0 (which will
<br>
break the API), but it's still far from ready to release.
<br>
The v1.11 branch was added between v1.10 and v2.0 to release most
<br>
backward-compatible changes earlier.
<br>
<p>FYI, changes in master are listed at
<br>
<a href="https://github.com/open-mpi/hwloc/blob/master/NEWS">https://github.com/open-mpi/hwloc/blob/master/NEWS</a> (but more will be
<br>
coming in the next months).
<br>
<p>Brice
<br>
<p><p><p><p>Version 1.11.0
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
&nbsp;&nbsp;&nbsp;&nbsp;- Objects may have a Type info attribute to specific a better type name
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and display it in lstopo.
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
&nbsp;&nbsp;+ Fix PCI Bridge-specific depth attribute.
<br>
&nbsp;&nbsp;+ Fix hwloc_bitmap_intersect() for two infinite bitmaps.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4455.php">Peyton, Jonathan L: "Re: [hwloc-devel] Using Hwloc in LLVM OpenMP"</a>
<li><strong>Previous message:</strong> <a href="4453.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-574-gc6fa7b7)"</a>
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
