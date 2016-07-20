<?
$subject_val = "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 16 09:09:14 2012" -->
<!-- isoreceived="20120216140914" -->
<!-- sent="Thu, 16 Feb 2012 14:09:08 +0000" -->
<!-- isosent="20120216140908" -->
<!-- name="Albert Solernou" -->
<!-- email="albert.solernou_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset" -->
<!-- id="4F3D0E04.1010107_at_oerc.ox.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F3D0B01.4070307_at_inria.fr" -->
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
<strong>From:</strong> Albert Solernou (<em>albert.solernou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-16 09:09:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0554.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>Previous message:</strong> <a href="0552.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>In reply to:</strong> <a href="0552.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0554.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>Reply:</strong> <a href="0554.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
I attach a tar ball with the outputs.
<br>
<p>It may be also relevant to specify that I am running hwloc on a cluster, 
<br>
so this is the output on a node with two GPU cards.
<br>
<p>Thank you,
<br>
Albert
<br>
<p>On 16/02/12 13:56, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Hello Albert,
</span><br>
<span class="quotelev1">&gt; Does lstopo show PCI devices properly?
</span><br>
<span class="quotelev1">&gt; Can you send these outputs?
</span><br>
<span class="quotelev1">&gt;      lstopo -.xml
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;      for i in /sys/bus/pci/devices/* ; do echo -n &quot;$i &quot; ; cat
</span><br>
<span class="quotelev1">&gt; $i/local_cpus ; done
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 16/02/2012 14:28, Albert Solernou a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I am receiving cpuset 0x0 when I call hwloc_cuda_get_device_cpuset.
</span><br>
<span class="quotelev2">&gt;&gt; The exact output of tests/cuda.c is:
</span><br>
<span class="quotelev2">&gt;&gt; got cpuset 0x0 for device 0
</span><br>
<span class="quotelev2">&gt;&gt; got cpuset 0x0 for device 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have tried hwloc 1.3 and 1.4, using gnu and intel compilers. I am on
</span><br>
<span class="quotelev2">&gt;&gt; a ROCKS cluster, with two NVidia C2050 GPU cards,
</span><br>
<span class="quotelev2">&gt;&gt; Everything else seems to be working fine... What could I check for?
</span><br>
<span class="quotelev2">&gt;&gt; What information do you need to help me?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Albert
</span><br>
<p>
<br><hr>
<ul>
<li>application/gzip attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0553/answer.tar.gz">answer.tar.gz</a>
</ul>
<!-- attachment="answer.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0554.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>Previous message:</strong> <a href="0552.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>In reply to:</strong> <a href="0552.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0554.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>Reply:</strong> <a href="0554.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
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
