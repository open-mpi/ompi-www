<?
$subject_val = "Re: [hwloc-devel] Hardware locality (hwloc) v1.7rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  4 12:01:27 2013" -->
<!-- isoreceived="20130404160127" -->
<!-- sent="Thu, 04 Apr 2013 13:01:15 -0300" -->
<!-- isosent="20130404160115" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Hardware locality (hwloc) v1.7rc1 released" -->
<!-- id="515DA3CB.90504_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5152AFF8.5050208_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Hardware locality (hwloc) v1.7rc1 released<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-04 12:01:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3612.php">Samuel Thibault: "Re: [hwloc-devel] Hardware locality (hwloc) v1.7rc1 released"</a>
<li><strong>Previous message:</strong> <a href="3610.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7rc2r5523)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3612.php">Samuel Thibault: "Re: [hwloc-devel] Hardware locality (hwloc) v1.7rc1 released"</a>
<li><strong>Reply:</strong> <a href="3612.php">Samuel Thibault: "Re: [hwloc-devel] Hardware locality (hwloc) v1.7rc1 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I haven't seen any problem on various Linux distribs, several BSDs, some
<br>
Solaris, and AIX 6.1. I'll likely release the final v1.7 by Monday
<br>
unless somebody reports a problem.
<br>
<p>Brice
<br>
<p><p><p>Le 27/03/2013 05:38, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; The Hardware Locality (hwloc) team is pleased to announce the first
</span><br>
<span class="quotelev1">&gt; release candidate for v1.7:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; v1.7rc1 is the first milestone of a major feature release. The v1.6
</span><br>
<span class="quotelev1">&gt; series focused on the core rework to ease the addition of new discovery
</span><br>
<span class="quotelev1">&gt; components. As expected, v1.7 now adds many new discovery components
</span><br>
<span class="quotelev1">&gt; for GPUs, Xeon Phi, BlueGene/Q, and NetBSD.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are also a couple changes in the API and in command-line tools,
</span><br>
<span class="quotelev1">&gt; many documentation improvements, the ability to build external plugins,
</span><br>
<span class="quotelev1">&gt; and more.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * New operating system backends
</span><br>
<span class="quotelev1">&gt;   + Add BlueGene/Q compute node kernel (CNK) support. See the FAQ in the
</span><br>
<span class="quotelev1">&gt;     documentation for details. Thanks to Jeff Hammond, Christopher Samuel
</span><br>
<span class="quotelev1">&gt;     and Erik Schnetter for their help.
</span><br>
<span class="quotelev1">&gt;   + Add NetBSD support, thanks to Aleksej Saushev.
</span><br>
<span class="quotelev1">&gt; * New I/O device discovery
</span><br>
<span class="quotelev1">&gt;   + Add co-processor OS devices such as &quot;mic0&quot; for Intel Xeon Phi (MIC)
</span><br>
<span class="quotelev1">&gt;     on Linux. Thanks to Jerome Vienne for helping.
</span><br>
<span class="quotelev1">&gt;   + Add co-processor OS devices such as &quot;cuda0&quot; for NVIDIA CUDA-capable GPUs.
</span><br>
<span class="quotelev1">&gt;   + Add co-processor OS devices such as &quot;opencl0d0&quot; for OpenCL GPU devices
</span><br>
<span class="quotelev1">&gt;     on the AMD OpenCL implementation.
</span><br>
<span class="quotelev1">&gt;   + Add GPU OS devices such as &quot;:0.0&quot; for NVIDIA X11 displays.
</span><br>
<span class="quotelev1">&gt;   + Add GPU OS devices such as &quot;nvml0&quot; for NVIDIA GPUs.
</span><br>
<span class="quotelev1">&gt;     Thanks to Marwan Abdellah and Stefan Eilemann for helping.
</span><br>
<span class="quotelev1">&gt;   These new OS devices have some string info attributes such as CoProcType,
</span><br>
<span class="quotelev1">&gt;   GPUModel, etc. to better identify them.
</span><br>
<span class="quotelev1">&gt;   See the I/O Devices and Attributes documentation sections for details.
</span><br>
<span class="quotelev1">&gt; * New components
</span><br>
<span class="quotelev1">&gt;   + Add the &quot;opencl&quot;, &quot;cuda&quot;, &quot;nvml&quot; and &quot;gl&quot; components for I/O device
</span><br>
<span class="quotelev1">&gt;     discovery.
</span><br>
<span class="quotelev1">&gt;   + &quot;nvml&quot; also improves the discovery of NVIDIA GPU PCIe link speed.
</span><br>
<span class="quotelev1">&gt;   All of these new components may be built as plugins. They may also be
</span><br>
<span class="quotelev1">&gt;   disabled entirely by passing --disable-opencl/cuda/nvml/gl to configure.
</span><br>
<span class="quotelev1">&gt;   See the I/O Devices, Components and Plugins, and FAQ documentation
</span><br>
<span class="quotelev1">&gt;   sections for details.
</span><br>
<span class="quotelev1">&gt; * API
</span><br>
<span class="quotelev1">&gt;   + Add hwloc_topology_get_flags().
</span><br>
<span class="quotelev1">&gt;   + Add hwloc/plugins.h for building external plugins.
</span><br>
<span class="quotelev1">&gt;     See the Adding new discovery components and plugins section.
</span><br>
<span class="quotelev1">&gt; * Interoperability
</span><br>
<span class="quotelev1">&gt;   + Add hwloc/opencl.h, hwloc/nvml.h, hwloc/gl.h and hwloc/intel-mic.h
</span><br>
<span class="quotelev1">&gt;     to retrieve the locality of OS devices that correspond to AMD OpenCL
</span><br>
<span class="quotelev1">&gt;     GPU devices or indexes, to NVML devices or indexes, to NVIDIA X11
</span><br>
<span class="quotelev1">&gt;     displays, or to Intel Xeon Phi (MIC) device indexes.
</span><br>
<span class="quotelev1">&gt;   + Add new helpers in hwloc/cuda.h and hwloc/cudart.h to convert
</span><br>
<span class="quotelev1">&gt;     between CUDA devices or indexes and hwloc OS devices.
</span><br>
<span class="quotelev1">&gt;   + Add hwloc_ibv_get_device_osdev() and clarify the requirements
</span><br>
<span class="quotelev1">&gt;     of the OpenFabrics Verbs helpers in hwloc/openfabrics-verbs.h.
</span><br>
<span class="quotelev1">&gt; * Tools
</span><br>
<span class="quotelev1">&gt;   + hwloc-info is not only a synonym of lstopo -s anymore, it also
</span><br>
<span class="quotelev1">&gt;     dumps information about objects given on the command-line.
</span><br>
<span class="quotelev1">&gt; * Documentation
</span><br>
<span class="quotelev1">&gt;   + Add a section &quot;Existing components and plugins&quot;.
</span><br>
<span class="quotelev1">&gt;   + Add a list of common OS devices in section &quot;Software devices&quot;.
</span><br>
<span class="quotelev1">&gt;   + Add a new FAQ entry &quot;Why is lstopo slow?&quot; about lstopo slowness
</span><br>
<span class="quotelev1">&gt;     issues because of GPUs.
</span><br>
<span class="quotelev1">&gt;   + Clarify the documentation of inline helpers in hwloc/myriexpress.h
</span><br>
<span class="quotelev1">&gt;     and hwloc/openfabrics-verbs.h.
</span><br>
<span class="quotelev1">&gt; * Misc
</span><br>
<span class="quotelev1">&gt;   + Improve cache detection on AIX.
</span><br>
<span class="quotelev1">&gt;   + The HWLOC_COMPONENTS variable now excludes the components whose
</span><br>
<span class="quotelev1">&gt;     names are prefixed with '-'.
</span><br>
<span class="quotelev1">&gt;   + lstopo --ignore PU now works when displaying the topology in
</span><br>
<span class="quotelev1">&gt;     graphical and textual mode (not when exporting to XML).
</span><br>
<span class="quotelev1">&gt;   + The `libpci' component is now called `pci' but the old name is still
</span><br>
<span class="quotelev1">&gt;     accepted in the HWLOC_COMPONENTS variable for backward compatibility.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This also contains a couple bug fixes that are waiting for a v1.6.3
</span><br>
<span class="quotelev1">&gt; release, that may or may not ever exist.
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
<li><strong>Next message:</strong> <a href="3612.php">Samuel Thibault: "Re: [hwloc-devel] Hardware locality (hwloc) v1.7rc1 released"</a>
<li><strong>Previous message:</strong> <a href="3610.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7rc2r5523)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3612.php">Samuel Thibault: "Re: [hwloc-devel] Hardware locality (hwloc) v1.7rc1 released"</a>
<li><strong>Reply:</strong> <a href="3612.php">Samuel Thibault: "Re: [hwloc-devel] Hardware locality (hwloc) v1.7rc1 released"</a>
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
