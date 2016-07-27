<?
$subject_val = "[hwloc-devel] v1.6.1 soon";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 31 04:04:25 2012" -->
<!-- isoreceived="20121231090425" -->
<!-- sent="Mon, 31 Dec 2012 10:04:20 +0100" -->
<!-- isosent="20121231090420" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] v1.6.1 soon" -->
<!-- id="50E15514.20909_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] v1.6.1 soon<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-31 04:04:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3444.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5199)"</a>
<li><strong>Previous message:</strong> <a href="3442.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5195)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/01/3456.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/01/3456.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/01/3457.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>We didn't see any public report about it, but I am confident that the
<br>
cgroup-related crash in v1.6 is a bad one. So I am going to make a
<br>
v1.6.1rc1 in early 2013. The current list of changes is basically this
<br>
fix + some doc + some very minor stuff:
<br>
<p>Version 1.6.1
<br>
-------------
<br>
* Fix some crash or buggy detection in the x86 backend when Linux
<br>
&nbsp;&nbsp;cgroups/cpusets restrict the available CPUs.
<br>
* Some documentation improvements.
<br>
<p>If anybody needs anything else in this stable release, please let me know.
<br>
<p>v1.7 isn't supposed to happen very soon but the list of changes is
<br>
already big, so it may end up happening not too far in the future.
<br>
There's pretty much no core change (which is good since v1.6 changed
<br>
everything there) but many plugin/header additions (those should not
<br>
cause much problems).
<br>
<p>Brice
<br>
<p><p>Version 1.7.0
<br>
-------------
<br>
* Backends
<br>
&nbsp;&nbsp;+ Add NetBSD support, thanks to Aleksej Saushev.
<br>
&nbsp;&nbsp;+ Add three GPU detection components: opencl (for the AMD OpenCL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;implemenation), cuda and nvml (for NVIDIA GPUs).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- They add OS devices such as opencl0p0, cuda0 and nvml0 inside the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;corresponding PCI devices with some string info attributes.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- The nvml component also improves the discovery of NVIDIA GPU
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCIe link speed.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- They may be built as plugins.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;- They may be disabled with --disable-opencl/cuda/nvml.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;See the I/O Devices, Components and Plugins, and FAQ documentation
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sections for details.
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
&nbsp;&nbsp;+ Add hwloc/opencl.h to retrieve the locality or OS device for
<br>
&nbsp;&nbsp;&nbsp;&nbsp;AMD GPU devices or indexes.
<br>
&nbsp;&nbsp;+ Add hwloc/nvml.h to retrieve the locality or OS device for NVML
<br>
&nbsp;&nbsp;&nbsp;&nbsp;devices or indexes.
<br>
&nbsp;&nbsp;+ Add new helpers in hwloc/cuda.h and hwloc/cudart.h to convert
<br>
&nbsp;&nbsp;&nbsp;&nbsp;between CUDA devices or indexes and hwloc OS devices.
<br>
&nbsp;&nbsp;+ Add hwloc_ibv_get_device_osdev() and clarify the requirements
<br>
&nbsp;&nbsp;&nbsp;&nbsp;of the OpenFabrics Verbs helpers in hwloc/openfabrics-verbs.h.
<br>
* Documentation
<br>
&nbsp;&nbsp;+ Add new document sections &quot;Existing components and plugins&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;and &quot;Common OS devices&quot;.
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
&nbsp;&nbsp;+ The HWLOC_COMPONENTS may now start with '^' to only define a list of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;components to exclude.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3444.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5199)"</a>
<li><strong>Previous message:</strong> <a href="3442.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5195)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/01/3456.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/01/3456.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2013/01/3457.php">Samuel Thibault: "Re: [hwloc-devel] v1.7"</a>
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
