<?
$subject_val = "[hwloc-announce] Hardware locality (hwloc) v1.7rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 27 04:38:22 2013" -->
<!-- isoreceived="20130327083822" -->
<!-- sent="Wed, 27 Mar 2013 09:38:16 +0100" -->
<!-- isosent="20130327083816" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-announce] Hardware locality (hwloc) v1.7rc1 released" -->
<!-- id="5152AFF8.5050208_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-announce] Hardware locality (hwloc) v1.7rc1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-27 04:38:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/04/0057.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.7 released"</a>
<li><strong>Previous message:</strong> <a href="0055.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.5.2, v1.4.3, v1.3.3 released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Hardware Locality (hwloc) team is pleased to announce the first
<br>
release candidate for v1.7:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
<p>v1.7rc1 is the first milestone of a major feature release. The v1.6
<br>
series focused on the core rework to ease the addition of new discovery
<br>
components. As expected, v1.7 now adds many new discovery components
<br>
for GPUs, Xeon Phi, BlueGene/Q, and NetBSD.
<br>
<p>There are also a couple changes in the API and in command-line tools,
<br>
many documentation improvements, the ability to build external plugins,
<br>
and more.
<br>
<p>* New operating system backends
<br>
&nbsp;&nbsp;+ Add BlueGene/Q compute node kernel (CNK) support. See the FAQ in the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;documentation for details. Thanks to Jeff Hammond, Christopher Samuel
<br>
&nbsp;&nbsp;&nbsp;&nbsp;and Erik Schnetter for their help.
<br>
&nbsp;&nbsp;+ Add NetBSD support, thanks to Aleksej Saushev.
<br>
* New I/O device discovery
<br>
&nbsp;&nbsp;+ Add co-processor OS devices such as &quot;mic0&quot; for Intel Xeon Phi (MIC)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;on Linux. Thanks to Jerome Vienne for helping.
<br>
&nbsp;&nbsp;+ Add co-processor OS devices such as &quot;cuda0&quot; for NVIDIA CUDA-capable GPUs.
<br>
&nbsp;&nbsp;+ Add co-processor OS devices such as &quot;opencl0d0&quot; for OpenCL GPU devices
<br>
&nbsp;&nbsp;&nbsp;&nbsp;on the AMD OpenCL implementation.
<br>
&nbsp;&nbsp;+ Add GPU OS devices such as &quot;:0.0&quot; for NVIDIA X11 displays.
<br>
&nbsp;&nbsp;+ Add GPU OS devices such as &quot;nvml0&quot; for NVIDIA GPUs.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Thanks to Marwan Abdellah and Stefan Eilemann for helping.
<br>
&nbsp;&nbsp;These new OS devices have some string info attributes such as CoProcType,
<br>
&nbsp;&nbsp;GPUModel, etc. to better identify them.
<br>
&nbsp;&nbsp;See the I/O Devices and Attributes documentation sections for details.
<br>
* New components
<br>
&nbsp;&nbsp;+ Add the &quot;opencl&quot;, &quot;cuda&quot;, &quot;nvml&quot; and &quot;gl&quot; components for I/O device
<br>
&nbsp;&nbsp;&nbsp;&nbsp;discovery.
<br>
&nbsp;&nbsp;+ &quot;nvml&quot; also improves the discovery of NVIDIA GPU PCIe link speed.
<br>
&nbsp;&nbsp;All of these new components may be built as plugins. They may also be
<br>
&nbsp;&nbsp;disabled entirely by passing --disable-opencl/cuda/nvml/gl to configure.
<br>
&nbsp;&nbsp;See the I/O Devices, Components and Plugins, and FAQ documentation
<br>
&nbsp;&nbsp;sections for details.
<br>
* API
<br>
&nbsp;&nbsp;+ Add hwloc_topology_get_flags().
<br>
&nbsp;&nbsp;+ Add hwloc/plugins.h for building external plugins.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;See the Adding new discovery components and plugins section.
<br>
* Interoperability
<br>
&nbsp;&nbsp;+ Add hwloc/opencl.h, hwloc/nvml.h, hwloc/gl.h and hwloc/intel-mic.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;to retrieve the locality of OS devices that correspond to AMD OpenCL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;GPU devices or indexes, to NVML devices or indexes, to NVIDIA X11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;displays, or to Intel Xeon Phi (MIC) device indexes.
<br>
&nbsp;&nbsp;+ Add new helpers in hwloc/cuda.h and hwloc/cudart.h to convert
<br>
&nbsp;&nbsp;&nbsp;&nbsp;between CUDA devices or indexes and hwloc OS devices.
<br>
&nbsp;&nbsp;+ Add hwloc_ibv_get_device_osdev() and clarify the requirements
<br>
&nbsp;&nbsp;&nbsp;&nbsp;of the OpenFabrics Verbs helpers in hwloc/openfabrics-verbs.h.
<br>
* Tools
<br>
&nbsp;&nbsp;+ hwloc-info is not only a synonym of lstopo -s anymore, it also
<br>
&nbsp;&nbsp;&nbsp;&nbsp;dumps information about objects given on the command-line.
<br>
* Documentation
<br>
&nbsp;&nbsp;+ Add a section &quot;Existing components and plugins&quot;.
<br>
&nbsp;&nbsp;+ Add a list of common OS devices in section &quot;Software devices&quot;.
<br>
&nbsp;&nbsp;+ Add a new FAQ entry &quot;Why is lstopo slow?&quot; about lstopo slowness
<br>
&nbsp;&nbsp;&nbsp;&nbsp;issues because of GPUs.
<br>
&nbsp;&nbsp;+ Clarify the documentation of inline helpers in hwloc/myriexpress.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;and hwloc/openfabrics-verbs.h.
<br>
* Misc
<br>
&nbsp;&nbsp;+ Improve cache detection on AIX.
<br>
&nbsp;&nbsp;+ The HWLOC_COMPONENTS variable now excludes the components whose
<br>
&nbsp;&nbsp;&nbsp;&nbsp;names are prefixed with '-'.
<br>
&nbsp;&nbsp;+ lstopo --ignore PU now works when displaying the topology in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;graphical and textual mode (not when exporting to XML).
<br>
&nbsp;&nbsp;+ The `libpci' component is now called `pci' but the old name is still
<br>
&nbsp;&nbsp;&nbsp;&nbsp;accepted in the HWLOC_COMPONENTS variable for backward compatibility.
<br>
<p>This also contains a couple bug fixes that are waiting for a v1.6.3
<br>
release, that may or may not ever exist.
<br>
<p><pre>
--
Brice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-announce/2013/04/0057.php">Brice Goglin: "[hwloc-announce] Hardware locality (hwloc) v1.7 released"</a>
<li><strong>Previous message:</strong> <a href="0055.php">Brice Goglin: "[hwloc-announce] Hardware Locality (hwloc) v1.5.2, v1.4.3, v1.3.3 released"</a>
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
