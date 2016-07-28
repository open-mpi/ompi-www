<?
$subject_val = "[hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 16 08:28:54 2012" -->
<!-- isoreceived="20120216132854" -->
<!-- sent="Thu, 16 Feb 2012 13:28:48 +0000" -->
<!-- isosent="20120216132848" -->
<!-- name="Albert Solernou" -->
<!-- email="albert.solernou_at_[hidden]" -->
<!-- subject="[hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset" -->
<!-- id="4F3D0490.1060409_at_oerc.ox.ac.uk" -->
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
<strong>Subject:</strong> [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset<br>
<strong>From:</strong> Albert Solernou (<em>albert.solernou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-16 08:28:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0552.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>Previous message:</strong> <a href="0550.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.4 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0552.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>Reply:</strong> <a href="0552.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I am receiving cpuset 0x0 when I call hwloc_cuda_get_device_cpuset. The 
<br>
exact output of tests/cuda.c is:
<br>
got cpuset 0x0 for device 0
<br>
got cpuset 0x0 for device 1
<br>
<p><p>I have tried hwloc 1.3 and 1.4, using gnu and intel compilers. I am on a 
<br>
ROCKS cluster, with two NVidia C2050 GPU cards,
<br>
Everything else seems to be working fine... What could I check for? What 
<br>
information do you need to help me?
<br>
<p>Thank you,
<br>
Albert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0552.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>Previous message:</strong> <a href="0550.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.4 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0552.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>Reply:</strong> <a href="0552.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
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
