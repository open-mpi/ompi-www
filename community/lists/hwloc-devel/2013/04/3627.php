<?
$subject_val = "[hwloc-devel] Compiling hwloc 1.7 with NV support";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 19 18:56:25 2013" -->
<!-- isoreceived="20130419225625" -->
<!-- sent="Sat, 20 Apr 2013 00:56:20 +0200" -->
<!-- isosent="20130419225620" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="[hwloc-devel] Compiling hwloc 1.7 with NV support" -->
<!-- id="CALT_uBQa=7Z07PzL9Q4ekRwZhjJ00h8ZJdbnQrUw8v=Y8XTv2g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [hwloc-devel] Compiling hwloc 1.7 with NV support<br>
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-19 18:56:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3628.php">Samuel Thibault: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<li><strong>Previous message:</strong> <a href="3626.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7.1rc1r5551)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3628.php">Samuel Thibault: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<li><strong>Reply:</strong> <a href="3628.php">Samuel Thibault: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<li><strong>Reply:</strong> <a href="3629.php">Brice Goglin: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>how are you doing? I'm back at Red Hat:-) and I should have again more time
<br>
to test the hwloc and create rpms.
<br>
<p>I have tried to build hwloc 1.7 on Fedora18 with NV support. I'm getting
<br>
this ERROR:
<br>
<p>-----------------------------------------------------------------------------
<br>
Hwloc optional build support status (more details can be found above):
<br>
<p>Probe / display I/O devices: PCI GL
<br>
Graphical output (Cairo):    yes
<br>
XML input / output:          full
<br>
libnuma memory support:      yes
<br>
Plugin support:              no
<br>
-----------------------------------------------------------------------------
<br>
topology-gl.c: In function 'hwloc_gl_query_devices':
<br>
topology-gl.c:91:41: error: 'NV_CTRL_PCI_DOMAIN' undeclared (first use in
<br>
this function)
<br>
topology-gl.c:91:41: note: each undeclared identifier is reported only once
<br>
for each function it appears in
<br>
make[2]: *** [topology-gl.lo] Error 1
<br>
make[2]: Leaving directory `/tmp/hwloc-1.7/src'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/tmp/hwloc-1.7/src'
<br>
make: *** [all-recursive] Error 1
<br>
<p>Indeed, there is no NV_CTRL_PCI_DOMAIN MACRO defined in NVCtrl header files:
<br>
<p>grep NV_CTRL_PCI_DOMAIN /usr/include/NVCtrl/NVCtrl*
<br>
=&gt; empty
<br>
<p>Could you please check it?
<br>
<p>I'm also struggling with the following features when creating RPM for
<br>
Fedora19
<br>
<p>&nbsp;&nbsp;--disable-opencl        Disable the OpenCL device discovery
<br>
&nbsp;&nbsp;--disable-cuda          Disable the CUDA device discovery using libcudart
<br>
&nbsp;&nbsp;--disable-nvml          Disable the NVML device discovery
<br>
<p>I have tried to search for
<br>
CL/cl_ext.h
<br>
cuda_runtime_api.h
<br>
nvml.h
<br>
<p>yum whatprovides &quot;*/cuda_runtime_api.h&quot;
<br>
<p>but without any luck. So it seems I can get rpm only with PCI and GL
<br>
support.
<br>
<p>What's your opinion on it? Do you know what other Linux  distros are doing?
<br>
<p>Thanks!
<br>
Jirka
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3627/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3628.php">Samuel Thibault: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<li><strong>Previous message:</strong> <a href="3626.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.7.1rc1r5551)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3628.php">Samuel Thibault: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<li><strong>Reply:</strong> <a href="3628.php">Samuel Thibault: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
<li><strong>Reply:</strong> <a href="3629.php">Brice Goglin: "Re: [hwloc-devel] Compiling hwloc 1.7 with NV support"</a>
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
