<?
$subject_val = "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 19 19:12:05 2013" -->
<!-- isoreceived="20130419231205" -->
<!-- sent="Sat, 20 Apr 2013 01:11:50 +0200" -->
<!-- isosent="20130419231150" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Compiling hwloc 1.7 with NV support" -->
<!-- id="5171CF36.8010408_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CALT_uBQa=7Z07PzL9Q4ekRwZhjJ00h8ZJdbnQrUw8v=Y8XTv2g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Compiling hwloc 1.7 with NV support<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-19 19:11:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3630.php">Brice Goglin: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<li><strong>Previous message:</strong> <a href="3628.php">Samuel Thibault: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<li><strong>In reply to:</strong> <a href="3627.php">Jiri Hladky: "[hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3630.php">Brice Goglin: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<li><strong>Reply:</strong> <a href="3630.php">Brice Goglin: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 20/04/2013 00:56, Jiri Hladky a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; topology-gl.c: In function 'hwloc_gl_query_devices':
</span><br>
<span class="quotelev1">&gt; topology-gl.c:91:41: error: 'NV_CTRL_PCI_DOMAIN' undeclared (first use
</span><br>
<span class="quotelev1">&gt; in this function)
</span><br>
<span class="quotelev1">&gt; topology-gl.c:91:41: note: each undeclared identifier is reported only
</span><br>
<span class="quotelev1">&gt; once for each function it appears in
</span><br>
<span class="quotelev1">&gt; make[2]: *** [topology-gl.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/tmp/hwloc-1.7/src'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/tmp/hwloc-1.7/src'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed, there is no NV_CTRL_PCI_DOMAIN MACRO defined in NVCtrl header
</span><br>
<span class="quotelev1">&gt; files:
</span><br>
<p>Old CUDA versions didn't have a similar domain macro either, maybe
<br>
NVIDIA did the same mistake with old nvml.
<br>
<p><span class="quotelev1">&gt; CL/cl_ext.h
</span><br>
<p>This one should be available is OpenCL headers, do you have any OpenCL
<br>
package in Fedora?
<br>
<p><span class="quotelev1">&gt; nvml.h
</span><br>
<p>nvml.h is available as an installer from the nvidia website (tesla
<br>
development kit) but I don't think many distribs package it.
<br>
<p><p>If Fedora isn't widely used for hpc, I wouldn't be surprised if it
<br>
doesn't have nvml/opencl/cuda packages.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3630.php">Brice Goglin: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<li><strong>Previous message:</strong> <a href="3628.php">Samuel Thibault: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<li><strong>In reply to:</strong> <a href="3627.php">Jiri Hladky: "[hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3630.php">Brice Goglin: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<li><strong>Reply:</strong> <a href="3630.php">Brice Goglin: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
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
