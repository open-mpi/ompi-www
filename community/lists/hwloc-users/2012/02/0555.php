<?
$subject_val = "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 16 09:26:48 2012" -->
<!-- isoreceived="20120216142648" -->
<!-- sent="Thu, 16 Feb 2012 14:26:42 +0000" -->
<!-- isosent="20120216142642" -->
<!-- name="Albert Solernou" -->
<!-- email="albert.solernou_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset" -->
<!-- id="4F3D1222.9000400_at_oerc.ox.ac.uk" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4F3D101F.9090301_at_inria.fr" -->
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
<strong>Date:</strong> 2012-02-16 09:26:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0556.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>Previous message:</strong> <a href="0554.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>In reply to:</strong> <a href="0554.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0556.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>Reply:</strong> <a href="0556.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
bffffff... painful answer.
<br>
<p>Is there anything easy that the administrators of the cluster could do? 
<br>
How could I persuade them that this is an easy task to do?
<br>
:)
<br>
<p>Thanks,
<br>
Albert
<br>
<p>On Thu 16 Feb 2012 14:18:07 GMT, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Your machine has a buggy BIOS. It reports an empty locality info for 
</span><br>
<span class="quotelev1">&gt; PCI device. That's why hwloc cpuset is empty as well. I guess we 
</span><br>
<span class="quotelev1">&gt; should detect this case and return the entire machine cpuset instead.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Something like this should help:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: include/hwloc/cuda.h
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- include/hwloc/cuda.h (r&#195;&#169;vision 4302)
</span><br>
<span class="quotelev1">&gt; +++ include/hwloc/cuda.h (copie de travail)
</span><br>
<span class="quotelev1">&gt; @@ -92,6 +92,8 @@
</span><br>
<span class="quotelev1">&gt; return -1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc_linux_parse_cpumap_file(sysfile, set);
</span><br>
<span class="quotelev1">&gt; + if (hwloc_bitmap_iszero(set))
</span><br>
<span class="quotelev1">&gt; + hwloc_bitmap_copy(set, hwloc_topology_get_complete_cpuset(topology));
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fclose(sysfile);
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 16/02/2012 15:09, Albert Solernou a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi Brice,
</span><br>
<span class="quotelev2">&gt;&gt; I attach a tar ball with the outputs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It may be also relevant to specify that I am running hwloc on a 
</span><br>
<span class="quotelev2">&gt;&gt; cluster, so this is the output on a node with two GPU cards.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Albert
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 16/02/12 13:56, Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Albert,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does lstopo show PCI devices properly?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you send these outputs?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lstopo -.xml
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for i in /sys/bus/pci/devices/* ; do echo -n &quot;$i &quot; ; cat
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $i/local_cpus ; done
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 16/02/2012 14:28, Albert Solernou a &#195;&#169;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am receiving cpuset 0x0 when I call hwloc_cuda_get_device_cpuset.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The exact output of tests/cuda.c is:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; got cpuset 0x0 for device 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; got cpuset 0x0 for device 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have tried hwloc 1.3 and 1.4, using gnu and intel compilers. I am on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a ROCKS cluster, with two NVidia C2050 GPU cards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Everything else seems to be working fine... What could I check for?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What information do you need to help me?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Albert
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0556.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>Previous message:</strong> <a href="0554.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>In reply to:</strong> <a href="0554.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0556.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
<li><strong>Reply:</strong> <a href="0556.php">Brice Goglin: "Re: [hwloc-users] receive 0x0 from hwloc_cuda_get_device_cpuset"</a>
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
