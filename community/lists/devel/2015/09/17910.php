<?
$subject_val = "Re: [OMPI devel] Dual rail IB card problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  1 04:28:54 2015" -->
<!-- isoreceived="20150901082854" -->
<!-- sent="Tue, 01 Sep 2015 10:28:51 +0200" -->
<!-- isosent="20150901082851" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Dual rail IB card problem" -->
<!-- id="55E561C3.4040506_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="55E4E848.5000805_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Dual rail IB card problem<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-01 04:28:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17911.php">Brice Goglin: "Re: [OMPI devel] Dual rail IB card problem"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17909.php">Gilles Gouaillardet: "Re: [OMPI devel] Problem running from ompi master"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17907.php">Gilles Gouaillardet: "Re: [OMPI devel] Dual rail IB card problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17911.php">Brice Goglin: "Re: [OMPI devel] Dual rail IB card problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>It's a float because we normalize to 1 on the diagonal (some AMD
<br>
machines have values like 10 on the diagonal and 16 or 22 otherwise, so
<br>
you ge 1.0, 1.6 or 2.2 after normalization), and also because some users
<br>
wanted to specify their own distance matrix.
<br>
<p>I'd like to cleanup the distance API in hwloc 2.0. Current ideas are:
<br>
1) Removing normalization+float ? Should be possible.
<br>
2) Only supporting distance matrices that cover the entire machine ?
<br>
Likely fine too.
<br>
3) Remove the ability for the users to specify distances manually ? It's
<br>
useful for adding locality based on benchmarks when the BIOS/kernel
<br>
doesn't report enough. Need to talk with users.
<br>
4) Only support NUMA distances. Depends on (3).
<br>
Comments are welcome.
<br>
<p>Brice
<br>
<p><p><p>Le 01/09/2015 01:50, Gilles Gouaillardet a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as a side note, what is the rationale for defining the distance as a
</span><br>
<span class="quotelev1">&gt; floating point number ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i remember i had to fix a bug in ompi a while ago
</span><br>
<span class="quotelev1">&gt; /* e.g. replace if (d1 == d2) with if((d1-d2) &lt; epsilon) */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/1/2015 5:28 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The locality is mlx4_0 as reported by lstopo is &quot;near the entire
</span><br>
<span class="quotelev2">&gt;&gt; machine&quot; (while mlx4_1 is reported near NUMA node #3). I would vote
</span><br>
<span class="quotelev2">&gt;&gt; for buggy PCI-NUMA affinity being reported by the BIOS. But I am not
</span><br>
<span class="quotelev2">&gt;&gt; very familiar with 4x E5-4600 machines so please make sure this PCI
</span><br>
<span class="quotelev2">&gt;&gt; slot is really attached to a single NUMA node (some older 4-socket
</span><br>
<span class="quotelev2">&gt;&gt; machines have some I/O hub attached to 2 sockets).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Given the lspci output, mlx4_0 is likely on the PCI bus attached to
</span><br>
<span class="quotelev2">&gt;&gt; NUMA node #0, so you should be able to work-around the issue by
</span><br>
<span class="quotelev2">&gt;&gt; setting HWLOC_PCI_0000_00_LOCALCPUS=0xfff in the environment.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are 8 hostbridges in this machine, 2 attached to each
</span><br>
<span class="quotelev2">&gt;&gt; processor, there are likely similar issues for others.
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
<span class="quotelev2">&gt;&gt; Le 31/08/2015 22:06, Rolf vandeVaart a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There was a problem reported on the User's list about Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; always picking one Mellanox card when they were two in the machine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27507.php">http://www.open-mpi.org/community/lists/users/2015/08/27507.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We dug a little deeper and I think this has to do with how hwloc is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; figuring out where one of the cards is located.  This verbose output
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (with some extra printfs) shows that it cannot figure out which NUMA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node mlx4_0 is closest too. It can only determine it is located on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HWLOC_OBJ_SYSTEM and therefore Open MPI assumes a distance of 0.0. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Because of this (smaller is better) Open MPI library always picks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mlx4_0 for all sockets.  I am trying to figure out if this is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc or Open MPI bug. Any thoughts on this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] Checking distance for device=mlx4_1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] hwloc_distances-&gt;nbobjs=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] hwloc_distances-&gt;latency[0]=1.000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] hwloc_distances-&gt;latency[1]=2.100000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] hwloc_distances-&gt;latency[2]=2.100000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] hwloc_distances-&gt;latency[3]=2.100000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] hwloc_distances-&gt;latency[4]=2.100000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] hwloc_distances-&gt;latency[5]=1.000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] hwloc_distances-&gt;latency[6]=2.100000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] hwloc_distances-&gt;latency[7]=2.100000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] ibv_obj-&gt;type = 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] ibv_obj-&gt;logical_index=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] my_obj-&gt;logical_index=0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] Proc is bound: distance=2.100000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] Checking distance for device=mlx4_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] hwloc_distances-&gt;nbobjs=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] hwloc_distances-&gt;latency[0]=1.000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] hwloc_distances-&gt;latency[1]=2.100000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] hwloc_distances-&gt;latency[2]=2.100000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] hwloc_distances-&gt;latency[3]=2.100000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] hwloc_distances-&gt;latency[4]=2.100000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] hwloc_distances-&gt;latency[5]=1.000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] hwloc_distances-&gt;latency[6]=2.100000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] hwloc_distances-&gt;latency[7]=2.100000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] ibv_obj-&gt;type = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;---------------------HWLOC_OBJ_MACHINE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] ibv_obj-&gt;type set to NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] Proc is bound: distance=0.000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] [rank=0] openib: skipping device mlx4_1; it is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; too far away
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] [rank=0] openib: using port mlx4_0:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node1.local:05821] [rank=0] openib: using port mlx4_0:2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Machine (1024GB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   NUMANode L#0 (P#0 256GB) + Socket L#0 + L3 L#0 (30MB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB) + Core L#0 + PU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#0 (P#0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB) + Core L#1 + PU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#1 (P#1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#2 (256KB) + L1d L#2 (32KB) + L1i L#2 (32KB) + Core L#2 + PU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#2 (P#2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#3 (256KB) + L1d L#3 (32KB) + L1i L#3 (32KB) + Core L#3 + PU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#3 (P#3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#4 (256KB) + L1d L#4 (32KB) + L1i L#4 (32KB) + Core L#4 + PU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#4 (P#4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#5 (256KB) + L1d L#5 (32KB) + L1i L#5 (32KB) + Core L#5 + PU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#5 (P#5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#6 (256KB) + L1d L#6 (32KB) + L1i L#6 (32KB) + Core L#6 + PU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#6 (P#6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#7 (256KB) + L1d L#7 (32KB) + L1i L#7 (32KB) + Core L#7 + PU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#7 (P#7)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#8 (256KB) + L1d L#8 (32KB) + L1i L#8 (32KB) + Core L#8 + PU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#8 (P#8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#9 (256KB) + L1d L#9 (32KB) + L1i L#9 (32KB) + Core L#9 + PU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#9 (P#9)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#10 (256KB) + L1d L#10 (32KB) + L1i L#10 (32KB) + Core L#10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + PU L#10 (P#10)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#11 (256KB) + L1d L#11 (32KB) + L1i L#11 (32KB) + Core L#11
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + PU L#11 (P#11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   NUMANode L#1 (P#1 256GB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Socket L#1 + L3 L#1 (30MB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#12 (256KB) + L1d L#12 (32KB) + L1i L#12 (32KB) + Core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#12 + PU L#12 (P#12)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#13 (256KB) + L1d L#13 (32KB) + L1i L#13 (32KB) + Core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#13 + PU L#13 (P#13)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#14 (256KB) + L1d L#14 (32KB) + L1i L#14 (32KB) + Core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#14 + PU L#14 (P#14)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#15 (256KB) + L1d L#15 (32KB) + L1i L#15 (32KB) + Core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#15 + PU L#15 (P#15)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#16 (256KB) + L1d L#16 (32KB) + L1i L#16 (32KB) + Core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#16 + PU L#16 (P#16)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#17 (256KB) + L1d L#17 (32KB) + L1i L#17 (32KB) + Core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#17 + PU L#17 (P#17)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#18 (256KB) + L1d L#18 (32KB) + L1i L#18 (32KB) + Core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#18 + PU L#18 (P#18)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#19 (256KB) + L1d L#19 (32KB) + L1i L#19 (32KB) + Core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#19 + PU L#19 (P#19)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#20 (256KB) + L1d L#20 (32KB) + L1i L#20 (32KB) + Core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#20 + PU L#20 (P#20)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#21 (256KB) + L1d L#21 (32KB) + L1i L#21 (32KB) + Core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#21 + PU L#21 (P#21)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#22 (256KB) + L1d L#22 (32KB) + L1i L#22 (32KB) + Core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#22 + PU L#22 (P#22)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2 L#23 (256KB) + L1d L#23 (32KB) + L1i L#23 (32KB) + Core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#23 + PU L#23 (P#23)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     HostBridge L#5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         PCI 15b3:1003
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Net L#7 &quot;ib2&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           Net L#8 &quot;ib3&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           OpenFabrics L#9 &quot;mlx4_1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   NUMANode L#2 (P#2 256GB) + Socket L#2 + L3 L#2 (30MB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#24 (256KB) + L1d L#24 (32KB) + L1i L#24 (32KB) + Core L#24
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + PU L#24 (P#24)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#25 (256KB) + L1d L#25 (32KB) + L1i L#25 (32KB) + Core L#25
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + PU L#25 (P#25)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#26 (256KB) + L1d L#26 (32KB) + L1i L#26 (32KB) + Core L#26
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + PU L#26 (P#26)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#27 (256KB) + L1d L#27 (32KB) + L1i L#27 (32KB) + Core L#27
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + PU L#27 (P#27)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#28 (256KB) + L1d L#28 (32KB) + L1i L#28 (32KB) + Core L#28
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + PU L#28 (P#28)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#29 (256KB) + L1d L#29 (32KB) + L1i L#29 (32KB) + Core L#29
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + PU L#29 (P#29)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#30 (256KB) + L1d L#30 (32KB) + L1i L#30 (32KB) + Core L#30
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + PU L#30 (P#30)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#31 (256KB) + L1d L#31 (32KB) + L1i L#31 (32KB) + Core L#31
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + PU L#31 (P#31)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#32 (256KB) + L1d L#32 (32KB) + L1i L#32 (32KB) + Core L#32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + PU L#32 (P#32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#33 (256KB) + L1d L#33 (32KB) + L1i L#33 (32KB) + Core L#33
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + PU L#33 (P#33)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#34 (256KB) + L1d L#34 (32KB) + L1i L#34 (32KB) + Core L#34
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + PU L#34 (P#34)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#35 (256KB) + L1d L#35 (32KB) + L1i L#35 (32KB) + Core L#35
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + PU L#35 (P#35)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   NUMANode L#3 (P#3 256GB) + Socket L#3 + L3 L#3 (30MB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#36 (256KB) + L1d L#36 (32KB) + L1i L#36 (32KB) + Core L#36
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + PU L#36 (P#36)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#37 (256KB) + L1d L#37 (32KB) + L1i L#37 (32KB) + Core L#37
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + PU L#37 (P#37)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#38 (256KB) + L1d L#38 (32KB) + L1i L#38 (32KB) + Core L#38
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + PU L#38 (P#38)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#39 (256KB) + L1d L#39 (32KB) + L1i L#39 (32KB) + Core L#39
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + PU L#39 (P#39)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#40 (256KB) + L1d L#40 (32KB) + L1i L#40 (32KB) + Core L#40
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + PU L#40 (P#40)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#41 (256KB) + L1d L#41 (32KB) + L1i L#41 (32KB) + Core L#41
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + PU L#41 (P#41)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#42 (256KB) + L1d L#42 (32KB) + L1i L#42 (32KB) + Core L#42
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + PU L#42 (P#42)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#43 (256KB) + L1d L#43 (32KB) + L1i L#43 (32KB) + Core L#43
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + PU L#43 (P#43)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#44 (256KB) + L1d L#44 (32KB) + L1i L#44 (32KB) + Core L#44
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + PU L#44 (P#44)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#45 (256KB) + L1d L#45 (32KB) + L1i L#45 (32KB) + Core L#45
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + PU L#45 (P#45)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#46 (256KB) + L1d L#46 (32KB) + L1i L#46 (32KB) + Core L#46
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + PU L#46 (P#46)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L2 L#47 (256KB) + L1d L#47 (32KB) + L1i L#47 (32KB) + Core L#47
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + PU L#47 (P#47)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   HostBridge L#0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       PCI 8086:1528
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Net L#0 &quot;eth0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       PCI 8086:1528
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Net L#1 &quot;eth1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       PCI 1000:005d
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Block L#2 &quot;sda&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       PCI 15b3:1003
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Net L#3 &quot;ib0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Net L#4 &quot;ib1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         OpenFabrics L#5 &quot;mlx4_0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     PCIBridge
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       PCI 102b:0522
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       PCI 19a2:0800
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     PCI 8086:1d02
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Block L#6 &quot;sr0&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17906.php">http://www.open-mpi.org/community/lists/devel/2015/08/17906.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17907.php">http://www.open-mpi.org/community/lists/devel/2015/08/17907.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17910/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17911.php">Brice Goglin: "Re: [OMPI devel] Dual rail IB card problem"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17909.php">Gilles Gouaillardet: "Re: [OMPI devel] Problem running from ompi master"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/08/17907.php">Gilles Gouaillardet: "Re: [OMPI devel] Dual rail IB card problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17911.php">Brice Goglin: "Re: [OMPI devel] Dual rail IB card problem"</a>
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
