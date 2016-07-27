<?
$subject_val = "[hwloc-devel] GPU vs Co-processor OS device types";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 11:12:17 2013" -->
<!-- isoreceived="20130220161217" -->
<!-- sent="Wed, 20 Feb 2013 17:12:12 +0100" -->
<!-- isosent="20130220161212" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] GPU vs Co-processor OS device types" -->
<!-- id="5124F5DC.3030606_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] GPU vs Co-processor OS device types<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-20 11:12:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3558.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5363)"</a>
<li><strong>Previous message:</strong> <a href="3556.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5360)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>The current trunk creates some OS devices for Cuda, NVML, AMD OpenCL,
<br>
and GL objects. All of these use the subtype GPU. For the record, the
<br>
other types are Block, Net, OpenFabrics and DMA.
<br>
<p>The &quot;mic&quot; branch creates similar objects for each Xeon Phi, but Intel
<br>
would kill me if I use the GPU type for them :) So I added a new
<br>
Co-Processor type instead (could be Accelerator). But that raises the
<br>
question of using that type instead of &quot;GPU&quot; for CUDA devices.
<br>
<p>For OpenCL, it's even harder. We currently only support AMD GPUs in our
<br>
OpenCL code. But OpenCL also supports some CPUs and Accelerators.
<br>
Whenever OpenCL supports the MIC from the host, it will likely be an
<br>
accelerator device from the OpenCL point of view. And hwloc would also
<br>
call it an coprocessor/accelerator.
<br>
(we could have hwloc devices for CPU OpenCL devices too. Having an
<br>
accelerator/co-proc inside a socket may look strange...)
<br>
<p>hwloc view of all these devices with the current scheme:
<br>
* GPU: cuda0, nvml0, opencl0d0 (amd), :0.0
<br>
* Co-Proc: mic0, opencl1d0 (mic)
<br>
Cons: Tesla is not really a GPU anymore. NVIDIA might release non-GPU
<br>
CUDA-capable devices in the future.
<br>
Cons: opencl devices have different types, not sure how much it matters
<br>
<p>if we change CUDA and OpenCL into Co-Proc:
<br>
* GPU: nvml0?, :0.0
<br>
* Co-Proc: cuda0, opencl0d0 (amd), opencl1d0 (mic), mic0
<br>
<p>Not sure about nvml0 because it may at some point be generalized to
<br>
non-GPU NIVIDIA devices. It may deserve a special &quot;Misc&quot; type.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3558.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5363)"</a>
<li><strong>Previous message:</strong> <a href="3556.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5360)"</a>
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
