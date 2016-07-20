<?
$subject_val = "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 16 08:56:22 2012" -->
<!-- isoreceived="20120216135622" -->
<!-- sent="Thu, 16 Feb 2012 14:56:17 +0100" -->
<!-- isosent="20120216135617" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset" -->
<!-- id="4F3D0B01.4070307_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F3D0490.1060409_at_oerc.ox.ac.uk" -->
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
<strong>Subject:</strong> Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-16 08:56:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0553.php">Albert Solernou: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>Previous message:</strong> <a href="0551.php">Albert Solernou: "[hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>In reply to:</strong> <a href="0551.php">Albert Solernou: "[hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0553.php">Albert Solernou: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>Reply:</strong> <a href="0553.php">Albert Solernou: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Albert,
<br>
Does lstopo show PCI devices properly?
<br>
Can you send these outputs?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lstopo -.xml
<br>
and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for i in /sys/bus/pci/devices/* ; do echo -n &quot;$i &quot; ; cat
<br>
$i/local_cpus ; done
<br>
Brice
<br>
<p><p><p>Le 16/02/2012 14:28, Albert Solernou a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am receiving cpuset 0x0 when I call hwloc_cuda_get_device_cpuset.
</span><br>
<span class="quotelev1">&gt; The exact output of tests/cuda.c is:
</span><br>
<span class="quotelev1">&gt; got cpuset 0x0 for device 0
</span><br>
<span class="quotelev1">&gt; got cpuset 0x0 for device 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried hwloc 1.3 and 1.4, using gnu and intel compilers. I am on
</span><br>
<span class="quotelev1">&gt; a ROCKS cluster, with two NVidia C2050 GPU cards,
</span><br>
<span class="quotelev1">&gt; Everything else seems to be working fine... What could I check for?
</span><br>
<span class="quotelev1">&gt; What information do you need to help me?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Albert
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0553.php">Albert Solernou: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>Previous message:</strong> <a href="0551.php">Albert Solernou: "[hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>In reply to:</strong> <a href="0551.php">Albert Solernou: "[hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0553.php">Albert Solernou: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>Reply:</strong> <a href="0553.php">Albert Solernou: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
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
