<?
$subject_val = "Re: [hwloc-users] Using hwloc to map GPU layout on system";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  7 09:45:28 2014" -->
<!-- isoreceived="20140207144528" -->
<!-- sent="Fri, 07 Feb 2014 15:45:25 +0100" -->
<!-- isosent="20140207144525" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Using hwloc to map GPU layout on system" -->
<!-- id="52F4F185.5040002_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2CD4A816-A4EE-4020-9B95-AB7CEA739BC2_at_umich.edu" -->
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
<strong>Date:</strong> 2014-02-07 09:45:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0981.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.8.1 released"</a>
<li><strong>Previous message:</strong> <a href="0979.php">Brice Goglin: "Re: [hwloc-users] Using hwloc to map GPU layout on system"</a>
<li><strong>In reply to:</strong> <a href="0977.php">Brock Palen: "Re: [hwloc-users] Using hwloc to map GPU layout on system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0985.php">Brock Palen: "Re: [hwloc-users] Using hwloc to map GPU layout on system"</a>
<li><strong>Reply:</strong> <a href="0985.php">Brock Palen: "Re: [hwloc-users] Using hwloc to map GPU layout on system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 06/02/2014 21:31, Brock Palen a &#233;crit :
<br>
<span class="quotelev1">&gt; Actually that did turn out to help. The nvml# devices appear to be numbered in the way that CUDA_VISABLE_DEVICES sees them, while the cuda# devices are in the order that PBS and nvidia-smi see them.
</span><br>
<p>By the way, did you have CUDA_VISIBLE_DEVICES set during the lstopo
<br>
below? Was it set to 2,3,0,1 ? That would explain the reordering.
<br>
<p>I am not sure in which order you want to do things in the end. One way
<br>
that could help is:
<br>
* Get the locality of each GPU by doing CUDA_VISIBLE_DEVICES=x (for x in
<br>
0..number of gpus-1). Each iteration gives a single GPU in hwloc, and
<br>
you can retrieve the corresponding locality from the cuda0 object.
<br>
* Once you know which GPUs you want based on the locality info, take the
<br>
corresponding #x and put them in CUDA_VISIBLE_DEVICES=x,y before you run
<br>
your program. hwloc will create cuda0 for x and cuda1 for y.
<br>
<p>If you don't set CUDA_VISIBLE_DEVICES, cuda* objects are basically
<br>
out-of-order. nvml objects are (a bit less likely) ordered by PCI bus is
<br>
(lstopo -v would confirm that).
<br>
<p>Brice
<br>
<p><p><p><span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;               GPU L#3 &quot;nvml2&quot;
</span><br>
<span class="quotelev1">&gt;           PCIBridge
</span><br>
<span class="quotelev1">&gt;             PCI 10de:1021
</span><br>
<span class="quotelev1">&gt;               CoProc L#4 &quot;cuda1&quot;
</span><br>
<span class="quotelev1">&gt;               GPU L#5 &quot;nvml3&quot;
</span><br>
<span class="quotelev1">&gt;       PCIBridge
</span><br>
<span class="quotelev1">&gt;         PCIBridge
</span><br>
<span class="quotelev1">&gt;           PCIBridge
</span><br>
<span class="quotelev1">&gt;             PCI 10de:1021
</span><br>
<span class="quotelev1">&gt;               CoProc L#6 &quot;cuda2&quot;
</span><br>
<span class="quotelev1">&gt;               GPU L#7 &quot;nvml0&quot;
</span><br>
<span class="quotelev1">&gt;           PCIBridge
</span><br>
<span class="quotelev1">&gt;             PCI 10de:1021
</span><br>
<span class="quotelev1">&gt;               CoProc L#8 &quot;cuda3&quot;
</span><br>
<span class="quotelev1">&gt;               GPU L#9 &quot;nvml1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right now I am trying to create a python script that will take the XML output of lstopo and give me just the cuda and nvml devices in order. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I dont' know if some value are deterministic though.  Could I  ignore the CoProc line and just use the:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;               GPU L#3 &quot;nvml2&quot;
</span><br>
<span class="quotelev1">&gt;               GPU L#5 &quot;nvml3&quot;
</span><br>
<span class="quotelev1">&gt;               GPU L#7 &quot;nvml0&quot;
</span><br>
<span class="quotelev1">&gt;               GPU L#9 &quot;nvml1&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the L# always going to be in the oder I would expect?  Because then I already have my map then. 
</span><br>
<p><p><p>Brice
<br>
<p><p><span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; On Feb 5, 2014, at 1:19 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Brock,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Some people reported the same issue in the past and that's why we added the &quot;nvml&quot; objects. CUDA reorders devices by &quot;performance&quot;. Batch-schedulers are somehow supposed to use &quot;nvml&quot; for managing GPUs without actually using them with CUDA directly. And the &quot;nvml&quot; order is the &quot;normal&quot; order.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You need &quot;tdk&quot; (<a href="https://developer.nvidia.com/tesla-deployment-kit">https://developer.nvidia.com/tesla-deployment-kit</a>) to get nvml library and development headers installed. Then hwloc can build its &quot;nvml&quot; backend. Once ready, you'll see a hwloc &quot;cudaX&quot; and a hwloc &quot;nvmlY&quot; object in each NVIDIA PCI devices, and you can get their locality as usual.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does this help?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 05/02/2014 05:25, Brock Palen a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We are trying to build a system to mask users to the GPU's they were assigned by our batch system (torque).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The batch system sets the GPU's into thread exclusive mode when assigned to a job, so we want the GPU that the batch system assigns to be the one set in CUDA_VISIBLE_DEVICES,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Problem is on our nodes what the batch system sees as gpu 0  is not the same GPU that CUDA_VISIBLE_DEVICES sees as 0.   Actually 0  is 2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can see this behavior is you run 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nvidia-smi  and look at the PCI ID's of the devices.  You can then look at the PCI ID's outputed by deviceQuery from the SDK examples and see they are in a different order.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The ID's you would set in CUDA_VISIBLE_DEVICES matches the order that deviceQuery sees, not the order that nvida-smi sees.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Example (All values turned to decimal to match deviceQuery):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nvidia-smi order: 9, 10, 13, 14, 40, 43, 48, 51
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dviceQuery order: 13, 14, 9, 10, 40, 43, 48, 51
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can hwloc help me with this?  Right now I am hacking a script based on the output of the two commands, and making a map, between the two and then set CUDA_VISIBLE_DEVICES
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any ideas would be great. Later as we currently also use CPU sets, we want to pass GPU locality information to the scheduler to make decisions to match GPU-&gt; CPU Socket information, as performance of threads across QPI domains is very poor. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Machine (64GB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   NUMANode L#0 (P#0 32GB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Socket L#0 + L3 L#0 (20MB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB) + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB) + Core L#1 + PU L#1 (P#1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#2 (256KB) + L1d L#2 (32KB) + L1i L#2 (32KB) + Core L#2 + PU L#2 (P#2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#3 (256KB) + L1d L#3 (32KB) + L1i L#3 (32KB) + Core L#3 + PU L#3 (P#3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#4 (256KB) + L1d L#4 (32KB) + L1i L#4 (32KB) + Core L#4 + PU L#4 (P#4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#5 (256KB) + L1d L#5 (32KB) + L1i L#5 (32KB) + Core L#5 + PU L#5 (P#5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#6 (256KB) + L1d L#6 (32KB) + L1i L#6 (32KB) + Core L#6 + PU L#6 (P#6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#7 (256KB) + L1d L#7 (32KB) + L1i L#7 (32KB) + Core L#7 + PU L#7 (P#7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     HostBridge L#0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         PCI 1000:0087
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Block L#0 &quot;sda&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Block L#1 &quot;sdb&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             PCI 10de:1021
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               CoProc L#2 &quot;cuda0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             PCI 10de:1021
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               CoProc L#3 &quot;cuda1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             PCI 10de:1021
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               CoProc L#4 &quot;cuda2&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             PCI 10de:1021
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               CoProc L#5 &quot;cuda3&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         PCI 8086:1521
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Net L#6 &quot;eth0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         PCI 8086:1521
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Net L#7 &quot;eth1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         PCI 102b:0533
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       PCI 8086:1d02
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   NUMANode L#1 (P#1 32GB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Socket L#1 + L3 L#1 (20MB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#8 (256KB) + L1d L#8 (32KB) + L1i L#8 (32KB) + Core L#8 + PU L#8 (P#8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#9 (256KB) + L1d L#9 (32KB) + L1i L#9 (32KB) + Core L#9 + PU L#9 (P#9)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#10 (256KB) + L1d L#10 (32KB) + L1i L#10 (32KB) + Core L#10 + PU L#10 (P#10)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#11 (256KB) + L1d L#11 (32KB) + L1i L#11 (32KB) + Core L#11 + PU L#11 (P#11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#12 (256KB) + L1d L#12 (32KB) + L1i L#12 (32KB) + Core L#12 + PU L#12 (P#12)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#13 (256KB) + L1d L#13 (32KB) + L1i L#13 (32KB) + Core L#13 + PU L#13 (P#13)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#14 (256KB) + L1d L#14 (32KB) + L1i L#14 (32KB) + Core L#14 + PU L#14 (P#14)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#15 (256KB) + L1d L#15 (32KB) + L1i L#15 (32KB) + Core L#15 + PU L#15 (P#15)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     HostBridge L#12
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             PCI 15b3:1003
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Net L#8 &quot;eth2&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Net L#9 &quot;ib0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               Net L#10 &quot;eoib0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               OpenFabrics L#11 &quot;mlx4_0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             PCI 10de:1021
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               CoProc L#12 &quot;cuda4&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             PCI 10de:1021
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               CoProc L#13 &quot;cuda5&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             PCI 10de:1021
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               CoProc L#14 &quot;cuda6&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             PCI 10de:1021
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               CoProc L#15 &quot;cuda7&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0980/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0981.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.8.1 released"</a>
<li><strong>Previous message:</strong> <a href="0979.php">Brice Goglin: "Re: [hwloc-users] Using hwloc to map GPU layout on system"</a>
<li><strong>In reply to:</strong> <a href="0977.php">Brock Palen: "Re: [hwloc-users] Using hwloc to map GPU layout on system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0985.php">Brock Palen: "Re: [hwloc-users] Using hwloc to map GPU layout on system"</a>
<li><strong>Reply:</strong> <a href="0985.php">Brock Palen: "Re: [hwloc-users] Using hwloc to map GPU layout on system"</a>
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
