<?
$subject_val = "Re: [hwloc-users] Using hwloc to map GPU layout on system";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  5 01:19:16 2014" -->
<!-- isoreceived="20140205061916" -->
<!-- sent="Wed, 05 Feb 2014 07:19:12 +0100" -->
<!-- isosent="20140205061912" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Using hwloc to map GPU layout on system" -->
<!-- id="52F1D7E0.2020000_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2BE2E602-EFD8-4730-A3E0-2E1CBEE0A7B6_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Using hwloc to map GPU layout on system<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-05 01:19:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0977.php">Brock Palen: "Re: [hwloc-users] Using hwloc to map GPU layout on system"</a>
<li><strong>Previous message:</strong> <a href="0975.php">Brock Palen: "[hwloc-users] Using hwloc to map GPU layout on system"</a>
<li><strong>In reply to:</strong> <a href="0975.php">Brock Palen: "[hwloc-users] Using hwloc to map GPU layout on system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0977.php">Brock Palen: "Re: [hwloc-users] Using hwloc to map GPU layout on system"</a>
<li><strong>Reply:</strong> <a href="0977.php">Brock Palen: "Re: [hwloc-users] Using hwloc to map GPU layout on system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Brock,
<br>
<p>Some people reported the same issue in the past and that's why we added
<br>
the &quot;nvml&quot; objects. CUDA reorders devices by &quot;performance&quot;.
<br>
Batch-schedulers are somehow supposed to use &quot;nvml&quot; for managing GPUs
<br>
without actually using them with CUDA directly. And the &quot;nvml&quot; order is
<br>
the &quot;normal&quot; order.
<br>
<p>You need &quot;tdk&quot; (<a href="https://developer.nvidia.com/tesla-deployment-kit">https://developer.nvidia.com/tesla-deployment-kit</a>) to
<br>
get nvml library and development headers installed. Then hwloc can build
<br>
its &quot;nvml&quot; backend. Once ready, you'll see a hwloc &quot;cudaX&quot; and a hwloc
<br>
&quot;nvmlY&quot; object in each NVIDIA PCI devices, and you can get their
<br>
locality as usual.
<br>
<p>Does this help?
<br>
<p>Brice
<br>
<p><p><p>Le 05/02/2014 05:25, Brock Palen a &#233;crit :
<br>
<span class="quotelev1">&gt; We are trying to build a system to mask users to the GPU's they were assigned by our batch system (torque).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The batch system sets the GPU's into thread exclusive mode when assigned to a job, so we want the GPU that the batch system assigns to be the one set in CUDA_VISIBLE_DEVICES,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Problem is on our nodes what the batch system sees as gpu 0  is not the same GPU that CUDA_VISIBLE_DEVICES sees as 0.   Actually 0  is 2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can see this behavior is you run 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; nvidia-smi  and look at the PCI ID's of the devices.  You can then look at the PCI ID's outputed by deviceQuery from the SDK examples and see they are in a different order.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ID's you would set in CUDA_VISIBLE_DEVICES matches the order that deviceQuery sees, not the order that nvida-smi sees.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Example (All values turned to decimal to match deviceQuery):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; nvidia-smi order: 9, 10, 13, 14, 40, 43, 48, 51
</span><br>
<span class="quotelev1">&gt; dviceQuery order: 13, 14, 9, 10, 40, 43, 48, 51
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can hwloc help me with this?  Right now I am hacking a script based on the output of the two commands, and making a map, between the two and then set CUDA_VISIBLE_DEVICES
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas would be great. Later as we currently also use CPU sets, we want to pass GPU locality information to the scheduler to make decisions to match GPU-&gt; CPU Socket information, as performance of threads across QPI domains is very poor. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Machine (64GB)
</span><br>
<span class="quotelev1">&gt;   NUMANode L#0 (P#0 32GB)
</span><br>
<span class="quotelev1">&gt;     Socket L#0 + L3 L#0 (20MB)
</span><br>
<span class="quotelev1">&gt;       L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB) + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;       L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB) + Core L#1 + PU L#1 (P#1)
</span><br>
<span class="quotelev1">&gt;       L2 L#2 (256KB) + L1d L#2 (32KB) + L1i L#2 (32KB) + Core L#2 + PU L#2 (P#2)
</span><br>
<span class="quotelev1">&gt;       L2 L#3 (256KB) + L1d L#3 (32KB) + L1i L#3 (32KB) + Core L#3 + PU L#3 (P#3)
</span><br>
<span class="quotelev1">&gt;       L2 L#4 (256KB) + L1d L#4 (32KB) + L1i L#4 (32KB) + Core L#4 + PU L#4 (P#4)
</span><br>
<span class="quotelev1">&gt;       L2 L#5 (256KB) + L1d L#5 (32KB) + L1i L#5 (32KB) + Core L#5 + PU L#5 (P#5)
</span><br>
<span class="quotelev1">&gt;       L2 L#6 (256KB) + L1d L#6 (32KB) + L1i L#6 (32KB) + Core L#6 + PU L#6 (P#6)
</span><br>
<span class="quotelev1">&gt;       L2 L#7 (256KB) + L1d L#7 (32KB) + L1i L#7 (32KB) + Core L#7 + PU L#7 (P#7)
</span><br>
<span class="quotelev1">&gt;     HostBridge L#0
</span><br>
<span class="quotelev1">&gt;       PCIBridge
</span><br>
<span class="quotelev1">&gt;         PCI 1000:0087
</span><br>
<span class="quotelev1">&gt;           Block L#0 &quot;sda&quot;
</span><br>
<span class="quotelev1">&gt;           Block L#1 &quot;sdb&quot;
</span><br>
<span class="quotelev1">&gt;       PCIBridge
</span><br>
<span class="quotelev1">&gt;         PCIBridge
</span><br>
<span class="quotelev1">&gt;           PCIBridge
</span><br>
<span class="quotelev1">&gt;             PCI 10de:1021
</span><br>
<span class="quotelev1">&gt;               CoProc L#2 &quot;cuda0&quot;
</span><br>
<span class="quotelev1">&gt;           PCIBridge
</span><br>
<span class="quotelev1">&gt;             PCI 10de:1021
</span><br>
<span class="quotelev1">&gt;               CoProc L#3 &quot;cuda1&quot;
</span><br>
<span class="quotelev1">&gt;       PCIBridge
</span><br>
<span class="quotelev1">&gt;         PCIBridge
</span><br>
<span class="quotelev1">&gt;           PCIBridge
</span><br>
<span class="quotelev1">&gt;             PCI 10de:1021
</span><br>
<span class="quotelev1">&gt;               CoProc L#4 &quot;cuda2&quot;
</span><br>
<span class="quotelev1">&gt;           PCIBridge
</span><br>
<span class="quotelev1">&gt;             PCI 10de:1021
</span><br>
<span class="quotelev1">&gt;               CoProc L#5 &quot;cuda3&quot;
</span><br>
<span class="quotelev1">&gt;       PCIBridge
</span><br>
<span class="quotelev1">&gt;         PCI 8086:1521
</span><br>
<span class="quotelev1">&gt;           Net L#6 &quot;eth0&quot;
</span><br>
<span class="quotelev1">&gt;         PCI 8086:1521
</span><br>
<span class="quotelev1">&gt;           Net L#7 &quot;eth1&quot;
</span><br>
<span class="quotelev1">&gt;       PCIBridge
</span><br>
<span class="quotelev1">&gt;         PCI 102b:0533
</span><br>
<span class="quotelev1">&gt;       PCI 8086:1d02
</span><br>
<span class="quotelev1">&gt;   NUMANode L#1 (P#1 32GB)
</span><br>
<span class="quotelev1">&gt;     Socket L#1 + L3 L#1 (20MB)
</span><br>
<span class="quotelev1">&gt;       L2 L#8 (256KB) + L1d L#8 (32KB) + L1i L#8 (32KB) + Core L#8 + PU L#8 (P#8)
</span><br>
<span class="quotelev1">&gt;       L2 L#9 (256KB) + L1d L#9 (32KB) + L1i L#9 (32KB) + Core L#9 + PU L#9 (P#9)
</span><br>
<span class="quotelev1">&gt;       L2 L#10 (256KB) + L1d L#10 (32KB) + L1i L#10 (32KB) + Core L#10 + PU L#10 (P#10)
</span><br>
<span class="quotelev1">&gt;       L2 L#11 (256KB) + L1d L#11 (32KB) + L1i L#11 (32KB) + Core L#11 + PU L#11 (P#11)
</span><br>
<span class="quotelev1">&gt;       L2 L#12 (256KB) + L1d L#12 (32KB) + L1i L#12 (32KB) + Core L#12 + PU L#12 (P#12)
</span><br>
<span class="quotelev1">&gt;       L2 L#13 (256KB) + L1d L#13 (32KB) + L1i L#13 (32KB) + Core L#13 + PU L#13 (P#13)
</span><br>
<span class="quotelev1">&gt;       L2 L#14 (256KB) + L1d L#14 (32KB) + L1i L#14 (32KB) + Core L#14 + PU L#14 (P#14)
</span><br>
<span class="quotelev1">&gt;       L2 L#15 (256KB) + L1d L#15 (32KB) + L1i L#15 (32KB) + Core L#15 + PU L#15 (P#15)
</span><br>
<span class="quotelev1">&gt;     HostBridge L#12
</span><br>
<span class="quotelev1">&gt;       PCIBridge
</span><br>
<span class="quotelev1">&gt;         PCIBridge
</span><br>
<span class="quotelev1">&gt;           PCIBridge
</span><br>
<span class="quotelev1">&gt;             PCI 15b3:1003
</span><br>
<span class="quotelev1">&gt;               Net L#8 &quot;eth2&quot;
</span><br>
<span class="quotelev1">&gt;               Net L#9 &quot;ib0&quot;
</span><br>
<span class="quotelev1">&gt;               Net L#10 &quot;eoib0&quot;
</span><br>
<span class="quotelev1">&gt;               OpenFabrics L#11 &quot;mlx4_0&quot;
</span><br>
<span class="quotelev1">&gt;       PCIBridge
</span><br>
<span class="quotelev1">&gt;         PCIBridge
</span><br>
<span class="quotelev1">&gt;           PCIBridge
</span><br>
<span class="quotelev1">&gt;             PCI 10de:1021
</span><br>
<span class="quotelev1">&gt;               CoProc L#12 &quot;cuda4&quot;
</span><br>
<span class="quotelev1">&gt;           PCIBridge
</span><br>
<span class="quotelev1">&gt;             PCI 10de:1021
</span><br>
<span class="quotelev1">&gt;               CoProc L#13 &quot;cuda5&quot;
</span><br>
<span class="quotelev1">&gt;       PCIBridge
</span><br>
<span class="quotelev1">&gt;         PCIBridge
</span><br>
<span class="quotelev1">&gt;           PCIBridge
</span><br>
<span class="quotelev1">&gt;             PCI 10de:1021
</span><br>
<span class="quotelev1">&gt;               CoProc L#14 &quot;cuda6&quot;
</span><br>
<span class="quotelev1">&gt;           PCIBridge
</span><br>
<span class="quotelev1">&gt;             PCI 10de:1021
</span><br>
<span class="quotelev1">&gt;               CoProc L#15 &quot;cuda7&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev1">&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0976/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0977.php">Brock Palen: "Re: [hwloc-users] Using hwloc to map GPU layout on system"</a>
<li><strong>Previous message:</strong> <a href="0975.php">Brock Palen: "[hwloc-users] Using hwloc to map GPU layout on system"</a>
<li><strong>In reply to:</strong> <a href="0975.php">Brock Palen: "[hwloc-users] Using hwloc to map GPU layout on system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0977.php">Brock Palen: "Re: [hwloc-users] Using hwloc to map GPU layout on system"</a>
<li><strong>Reply:</strong> <a href="0977.php">Brock Palen: "Re: [hwloc-users] Using hwloc to map GPU layout on system"</a>
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
