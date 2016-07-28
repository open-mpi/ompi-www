<?
$subject_val = "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 16 09:18:12 2012" -->
<!-- isoreceived="20120216141812" -->
<!-- sent="Thu, 16 Feb 2012 15:18:07 +0100" -->
<!-- isosent="20120216141807" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset" -->
<!-- id="4F3D101F.9090301_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F3D0E04.1010107_at_oerc.ox.ac.uk" -->
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
<strong>Date:</strong> 2012-02-16 09:18:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0555.php">Albert Solernou: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>Previous message:</strong> <a href="0553.php">Albert Solernou: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>In reply to:</strong> <a href="0553.php">Albert Solernou: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0555.php">Albert Solernou: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>Reply:</strong> <a href="0555.php">Albert Solernou: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your machine has a buggy BIOS. It reports an empty locality info for PCI
<br>
device. That's why hwloc cpuset is empty as well. I guess we should
<br>
detect this case and return the entire machine cpuset instead.
<br>
<p>Something like this should help:
<br>
<p>Index: include/hwloc/cuda.h
<br>
===================================================================
<br>
--- include/hwloc/cuda.h    (r&#233;vision 4302)
<br>
+++ include/hwloc/cuda.h    (copie de travail)
<br>
@@ -92,6 +92,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return -1;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;hwloc_linux_parse_cpumap_file(sysfile, set);
<br>
+  if (hwloc_bitmap_iszero(set))
<br>
+    hwloc_bitmap_copy(set, hwloc_topology_get_complete_cpuset(topology));
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;fclose(sysfile);
<br>
&nbsp;#else
<br>
<p><p>Brice
<br>
<p><p><p>Le 16/02/2012 15:09, Albert Solernou a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt; I attach a tar ball with the outputs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It may be also relevant to specify that I am running hwloc on a
</span><br>
<span class="quotelev1">&gt; cluster, so this is the output on a node with two GPU cards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Albert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 16/02/12 13:56, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello Albert,
</span><br>
<span class="quotelev2">&gt;&gt; Does lstopo show PCI devices properly?
</span><br>
<span class="quotelev2">&gt;&gt; Can you send these outputs?
</span><br>
<span class="quotelev2">&gt;&gt;      lstopo -.xml
</span><br>
<span class="quotelev2">&gt;&gt; and
</span><br>
<span class="quotelev2">&gt;&gt;      for i in /sys/bus/pci/devices/* ; do echo -n &quot;$i &quot; ; cat
</span><br>
<span class="quotelev2">&gt;&gt; $i/local_cpus ; done
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 16/02/2012 14:28, Albert Solernou a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am receiving cpuset 0x0 when I call hwloc_cuda_get_device_cpuset.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The exact output of tests/cuda.c is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; got cpuset 0x0 for device 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; got cpuset 0x0 for device 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have tried hwloc 1.3 and 1.4, using gnu and intel compilers. I am on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a ROCKS cluster, with two NVidia C2050 GPU cards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Everything else seems to be working fine... What could I check for?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What information do you need to help me?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Albert
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0554/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0555.php">Albert Solernou: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>Previous message:</strong> <a href="0553.php">Albert Solernou: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>In reply to:</strong> <a href="0553.php">Albert Solernou: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0555.php">Albert Solernou: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>Reply:</strong> <a href="0555.php">Albert Solernou: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
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
