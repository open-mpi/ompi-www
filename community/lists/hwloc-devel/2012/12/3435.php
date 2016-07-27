<?
$subject_val = "[hwloc-devel] GPU support merge plans";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 19 12:58:51 2012" -->
<!-- isoreceived="20121219175851" -->
<!-- sent="Wed, 19 Dec 2012 18:58:45 +0100" -->
<!-- isosent="20121219175845" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] GPU support merge plans" -->
<!-- id="50D20055.2030109_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] GPU support merge plans<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-19 12:58:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3436.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5162)"</a>
<li><strong>Previous message:</strong> <a href="3434.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6.1rc1r5158)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3437.php">Jeff Squyres: "Re: [hwloc-devel] GPU support merge plans"</a>
<li><strong>Reply:</strong> <a href="3437.php">Jeff Squyres: "Re: [hwloc-devel] GPU support merge plans"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>We currently have three GPU-related branches:
<br>
(1) a (old) CUDA branch that adds &quot;cuda0&quot;, &quot;cuda1&quot;, ... devices inside
<br>
PCI devices and then puts Core and Memory in there to describe the GPU
<br>
internals.
<br>
(2) a (new) NVML branch that adds &quot;nvml0&quot;, &quot;nvml1&quot;, ... devices inside
<br>
NVIDIA GPU PCI devices (the order can be different in NVML and CUDA).
<br>
This is used by batch schedulers to retrieve NVIDIA GPU locality.
<br>
(3) a (new) OpenCL branch that adds &quot;opencl0p0&quot;, ... devices inside AMD
<br>
GPU PCI devices.
<br>
<p>I am going to merge the basic of (1), (2) and (3) by the end of the year
<br>
so that users can easily retrieve the locality of CUDA/NVML/OpenCL
<br>
device. They'll have functions to convert the device pointer into hwloc
<br>
object, a device index into object, or a device pointer into a cpuset.
<br>
<p>The main drawback of this is that the initialization of these libs can
<br>
be slow (about 1-2s added to lstopo since it enables I/O by default) if
<br>
poorly configured (NVIDIA puts GPGPU device in non-persistent mode by
<br>
default, and AMD GPGPU are slower if DISPLAY isn't set to :0). I will
<br>
document how to avoid such issues, not sure it's worth disabling all
<br>
this plugins by default.
<br>
<p><p>Then we'll talk about the remaining part of (1) (GPU internals), I still
<br>
need to see if we can do something similar with OpenCL, find out which
<br>
numbers of compute units, SIMD units, SIMD width actually matter to
<br>
users, and if we can report all this in a somehow portable way.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3436.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5162)"</a>
<li><strong>Previous message:</strong> <a href="3434.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6.1rc1r5158)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3437.php">Jeff Squyres: "Re: [hwloc-devel] GPU support merge plans"</a>
<li><strong>Reply:</strong> <a href="3437.php">Jeff Squyres: "Re: [hwloc-devel] GPU support merge plans"</a>
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
