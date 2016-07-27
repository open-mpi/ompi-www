<?
$subject_val = "Re: [hwloc-devel] Merging the PCI branch?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 31 16:22:23 2011" -->
<!-- isoreceived="20110331202223" -->
<!-- sent="Thu, 31 Mar 2011 22:22:16 +0200" -->
<!-- isosent="20110331202216" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Merging the PCI branch?" -->
<!-- id="4D94E278.4090709_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D82FB4A-FC02-4406-8199-6D325F06C83C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Merging the PCI branch?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-31 16:22:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2083.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3350)"</a>
<li><strong>Previous message:</strong> <a href="2081.php">Brice Goglin: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>In reply to:</strong> <a href="2078.php">Jeff Squyres: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/04/2099.php">Brice Goglin: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 31/03/2011 18:06, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good.  Although I think we should plan to make this the default in some future version (i.e., say that in the docs).
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I agree with Samuel on this. Keep things people for basic users. Without
<br>
I/O devices, the topology is usually very simple, making users' code
<br>
very simple too (all objects have a cpuset, all children have the same
<br>
type, topology is symmetric, ...). If you enable I/O, you need to make
<br>
your code much more complex, which is good, but may prevent some users
<br>
from using the C API.
<br>
<p>Note that I/O is enabled by default in lstopo :)
<br>
<p><span class="quotelev2">&gt;&gt; I also added some GPU-related OS devices by looking at DRM objects
</span><br>
<span class="quotelev2">&gt;&gt; (card0 and controlD64 in the attached picture). This only works with
</span><br>
<span class="quotelev2">&gt;&gt; free graphics drivers. Ideally we would have some Cuda or OpenCL device
</span><br>
<span class="quotelev2">&gt;&gt; ID there, but we'll likely need some specific plugins to do so. I don't
</span><br>
<span class="quotelev2">&gt;&gt; know if the current DRM objects are useful, we'll be able to remove them
</span><br>
<span class="quotelev2">&gt;&gt; later if needed.
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; We should ping Intel, NVIDIA, ... others for assistance with this.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>The solution will likely not be in sysfs because only GPL drivers can
<br>
put stuff in sysfs. That's why only the free graphics drivers are
<br>
already visible with the current code.
<br>
<p>For CUDA, we already have something similar to what we need in
<br>
hwloc/cuda.h. However, this requires the cuda library.
<br>
<p>For OpenCL, there's nothing to help you translate from PCI devices into
<br>
software handles in the 1.1 API iirc.
<br>
<p><span class="quotelev1">&gt; Do iWARP and RoCE devices show up, too? I.e., should it be
</span><br>
<span class="quotelev1">&gt; &quot;INFINIBAND&quot; or &quot;OPENFABRICS&quot;?
</span><br>
<p><span class="quotelev1">&gt;From I understand to the kernel code, the sysfs file we are reading come
</span><br>
from ib_register_device, which is called by IB, IBoE/RoCE and iWARP
<br>
drivers. The only difference is the node_type attribute. So indeed,
<br>
openfabrics might be a better name.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2083.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3350)"</a>
<li><strong>Previous message:</strong> <a href="2081.php">Brice Goglin: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<li><strong>In reply to:</strong> <a href="2078.php">Jeff Squyres: "Re: [hwloc-devel] Merging the PCI branch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2011/04/2099.php">Brice Goglin: "Re: [hwloc-devel] Merging the PCI branch?"</a>
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
