<?
$subject_val = "Re: [hwloc-devel] GPU support merge plans";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 20 07:51:49 2012" -->
<!-- isoreceived="20121220125149" -->
<!-- sent="Thu, 20 Dec 2012 07:51:41 -0500" -->
<!-- isosent="20121220125141" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] GPU support merge plans" -->
<!-- id="765FF8B5-FCFC-4DFF-8074-A64260D2E75F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50D20055.2030109_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] GPU support merge plans<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-20 07:51:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3438.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5163)"</a>
<li><strong>Previous message:</strong> <a href="3436.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5162)"</a>
<li><strong>In reply to:</strong> <a href="3435.php">Brice Goglin: "[hwloc-devel] GPU support merge plans"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't have much to add, but +1.  :)
<br>
<p>On Dec 19, 2012, at 12:58 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We currently have three GPU-related branches:
</span><br>
<span class="quotelev1">&gt; (1) a (old) CUDA branch that adds &quot;cuda0&quot;, &quot;cuda1&quot;, ... devices inside
</span><br>
<span class="quotelev1">&gt; PCI devices and then puts Core and Memory in there to describe the GPU
</span><br>
<span class="quotelev1">&gt; internals.
</span><br>
<span class="quotelev1">&gt; (2) a (new) NVML branch that adds &quot;nvml0&quot;, &quot;nvml1&quot;, ... devices inside
</span><br>
<span class="quotelev1">&gt; NVIDIA GPU PCI devices (the order can be different in NVML and CUDA).
</span><br>
<span class="quotelev1">&gt; This is used by batch schedulers to retrieve NVIDIA GPU locality.
</span><br>
<span class="quotelev1">&gt; (3) a (new) OpenCL branch that adds &quot;opencl0p0&quot;, ... devices inside AMD
</span><br>
<span class="quotelev1">&gt; GPU PCI devices.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am going to merge the basic of (1), (2) and (3) by the end of the year
</span><br>
<span class="quotelev1">&gt; so that users can easily retrieve the locality of CUDA/NVML/OpenCL
</span><br>
<span class="quotelev1">&gt; device. They'll have functions to convert the device pointer into hwloc
</span><br>
<span class="quotelev1">&gt; object, a device index into object, or a device pointer into a cpuset.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The main drawback of this is that the initialization of these libs can
</span><br>
<span class="quotelev1">&gt; be slow (about 1-2s added to lstopo since it enables I/O by default) if
</span><br>
<span class="quotelev1">&gt; poorly configured (NVIDIA puts GPGPU device in non-persistent mode by
</span><br>
<span class="quotelev1">&gt; default, and AMD GPGPU are slower if DISPLAY isn't set to :0). I will
</span><br>
<span class="quotelev1">&gt; document how to avoid such issues, not sure it's worth disabling all
</span><br>
<span class="quotelev1">&gt; this plugins by default.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then we'll talk about the remaining part of (1) (GPU internals), I still
</span><br>
<span class="quotelev1">&gt; need to see if we can do something similar with OpenCL, find out which
</span><br>
<span class="quotelev1">&gt; numbers of compute units, SIMD units, SIMD width actually matter to
</span><br>
<span class="quotelev1">&gt; users, and if we can report all this in a somehow portable way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3438.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5163)"</a>
<li><strong>Previous message:</strong> <a href="3436.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7a1r5162)"</a>
<li><strong>In reply to:</strong> <a href="3435.php">Brice Goglin: "[hwloc-devel] GPU support merge plans"</a>
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
