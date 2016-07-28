<?
$subject_val = "[OMPI devel] Dual rail IB card problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 31 16:06:50 2015" -->
<!-- isoreceived="20150831200650" -->
<!-- sent="Mon, 31 Aug 2015 20:06:47 +0000" -->
<!-- isosent="20150831200647" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Dual rail IB card problem" -->
<!-- id="1441050899667.52679_at_nvidia.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Dual rail IB card problem<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-31 16:06:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17905.php">Atchley, Scott: "Re: [OMPI devel] Dual rail IB card problem"</a>
<li><strong>Previous message:</strong> <a href="17903.php">Howard Pritchard: "Re: [OMPI devel] Status update: PMIx on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17905.php">Atchley, Scott: "Re: [OMPI devel] Dual rail IB card problem"</a>
<li><strong>Reply:</strong> <a href="17905.php">Atchley, Scott: "Re: [OMPI devel] Dual rail IB card problem"</a>
<li><strong>Reply:</strong> <a href="17906.php">Brice Goglin: "Re: [OMPI devel] Dual rail IB card problem"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17911.php">Brice Goglin: "Re: [OMPI devel] Dual rail IB card problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There was a problem reported on the User's list about Open MPI always picking one Mellanox card when they were two in the machine.
<br>
<p><p><a href="http://www.open-mpi.org/community/lists/users/2015/08/27507.php">http://www.open-mpi.org/community/lists/users/2015/08/27507.php</a>
<br>
<p><p>We dug a little deeper and I think this has to do with how hwloc is figuring out where one of the cards is located.  This verbose output (with some extra printfs) shows that it cannot figure out which NUMA node mlx4_0 is closest too. It can only determine it is located on HWLOC_OBJ_SYSTEM and therefore Open MPI assumes a distance of 0.0.  Because of this (smaller is better) Open MPI library always picks mlx4_0 for all sockets.  I am trying to figure out if this is a hwloc or Open MPI bug. Any thoughts on this?
<br>
<p><p>[node1.local:05821] Checking distance for device=mlx4_1
<br>
[node1.local:05821] hwloc_distances-&gt;nbobjs=4
<br>
[node1.local:05821] hwloc_distances-&gt;latency[0]=1.000000
<br>
[node1.local:05821] hwloc_distances-&gt;latency[1]=2.100000
<br>
[node1.local:05821] hwloc_distances-&gt;latency[2]=2.100000
<br>
[node1.local:05821] hwloc_distances-&gt;latency[3]=2.100000
<br>
[node1.local:05821] hwloc_distances-&gt;latency[4]=2.100000
<br>
[node1.local:05821] hwloc_distances-&gt;latency[5]=1.000000
<br>
[node1.local:05821] hwloc_distances-&gt;latency[6]=2.100000
<br>
[node1.local:05821] hwloc_distances-&gt;latency[7]=2.100000
<br>
[node1.local:05821] ibv_obj-&gt;type = 4
<br>
[node1.local:05821] ibv_obj-&gt;logical_index=1
<br>
[node1.local:05821] my_obj-&gt;logical_index=0
<br>
[node1.local:05821] Proc is bound: distance=2.100000
<br>
<p>[node1.local:05821] Checking distance for device=mlx4_0
<br>
[node1.local:05821] hwloc_distances-&gt;nbobjs=4
<br>
[node1.local:05821] hwloc_distances-&gt;latency[0]=1.000000
<br>
[node1.local:05821] hwloc_distances-&gt;latency[1]=2.100000
<br>
[node1.local:05821] hwloc_distances-&gt;latency[2]=2.100000
<br>
[node1.local:05821] hwloc_distances-&gt;latency[3]=2.100000
<br>
[node1.local:05821] hwloc_distances-&gt;latency[4]=2.100000
<br>
[node1.local:05821] hwloc_distances-&gt;latency[5]=1.000000
<br>
[node1.local:05821] hwloc_distances-&gt;latency[6]=2.100000
<br>
[node1.local:05821] hwloc_distances-&gt;latency[7]=2.100000
<br>
[node1.local:05821] ibv_obj-&gt;type = 1 &lt;---------------------HWLOC_OBJ_MACHINE
<br>
[node1.local:05821] ibv_obj-&gt;type set to NULL
<br>
[node1.local:05821] Proc is bound: distance=0.000000
<br>
<p>[node1.local:05821] [rank=0] openib: skipping device mlx4_1; it is too far away
<br>
[node1.local:05821] [rank=0] openib: using port mlx4_0:1
<br>
[node1.local:05821] [rank=0] openib: using port mlx4_0:2
<br>
<p><p>Machine (1024GB)
<br>
&nbsp;&nbsp;NUMANode L#0 (P#0 256GB) + Socket L#0 + L3 L#0 (30MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB) + Core L#0 + PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB) + Core L#1 + PU L#1 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#2 (256KB) + L1d L#2 (32KB) + L1i L#2 (32KB) + Core L#2 + PU L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#3 (256KB) + L1d L#3 (32KB) + L1i L#3 (32KB) + Core L#3 + PU L#3 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#4 (256KB) + L1d L#4 (32KB) + L1i L#4 (32KB) + Core L#4 + PU L#4 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#5 (256KB) + L1d L#5 (32KB) + L1i L#5 (32KB) + Core L#5 + PU L#5 (P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#6 (256KB) + L1d L#6 (32KB) + L1i L#6 (32KB) + Core L#6 + PU L#6 (P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#7 (256KB) + L1d L#7 (32KB) + L1i L#7 (32KB) + Core L#7 + PU L#7 (P#7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#8 (256KB) + L1d L#8 (32KB) + L1i L#8 (32KB) + Core L#8 + PU L#8 (P#8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#9 (256KB) + L1d L#9 (32KB) + L1i L#9 (32KB) + Core L#9 + PU L#9 (P#9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#10 (256KB) + L1d L#10 (32KB) + L1i L#10 (32KB) + Core L#10 + PU L#10 (P#10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#11 (256KB) + L1d L#11 (32KB) + L1i L#11 (32KB) + Core L#11 + PU L#11 (P#11)
<br>
&nbsp;&nbsp;NUMANode L#1 (P#1 256GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Socket L#1 + L3 L#1 (30MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#12 (256KB) + L1d L#12 (32KB) + L1i L#12 (32KB) + Core L#12 + PU L#12 (P#12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#13 (256KB) + L1d L#13 (32KB) + L1i L#13 (32KB) + Core L#13 + PU L#13 (P#13)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#14 (256KB) + L1d L#14 (32KB) + L1i L#14 (32KB) + Core L#14 + PU L#14 (P#14)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#15 (256KB) + L1d L#15 (32KB) + L1i L#15 (32KB) + Core L#15 + PU L#15 (P#15)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#16 (256KB) + L1d L#16 (32KB) + L1i L#16 (32KB) + Core L#16 + PU L#16 (P#16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#17 (256KB) + L1d L#17 (32KB) + L1i L#17 (32KB) + Core L#17 + PU L#17 (P#17)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#18 (256KB) + L1d L#18 (32KB) + L1i L#18 (32KB) + Core L#18 + PU L#18 (P#18)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#19 (256KB) + L1d L#19 (32KB) + L1i L#19 (32KB) + Core L#19 + PU L#19 (P#19)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#20 (256KB) + L1d L#20 (32KB) + L1i L#20 (32KB) + Core L#20 + PU L#20 (P#20)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#21 (256KB) + L1d L#21 (32KB) + L1i L#21 (32KB) + Core L#21 + PU L#21 (P#21)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#22 (256KB) + L1d L#22 (32KB) + L1i L#22 (32KB) + Core L#22 + PU L#22 (P#22)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#23 (256KB) + L1d L#23 (32KB) + L1i L#23 (32KB) + Core L#23 + PU L#23 (P#23)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;HostBridge L#5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 15b3:1003
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#7 &quot;ib2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#8 &quot;ib3&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OpenFabrics L#9 &quot;mlx4_1&quot;
<br>
<p>&nbsp;&nbsp;NUMANode L#2 (P#2 256GB) + Socket L#2 + L3 L#2 (30MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#24 (256KB) + L1d L#24 (32KB) + L1i L#24 (32KB) + Core L#24 + PU L#24 (P#24)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#25 (256KB) + L1d L#25 (32KB) + L1i L#25 (32KB) + Core L#25 + PU L#25 (P#25)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#26 (256KB) + L1d L#26 (32KB) + L1i L#26 (32KB) + Core L#26 + PU L#26 (P#26)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#27 (256KB) + L1d L#27 (32KB) + L1i L#27 (32KB) + Core L#27 + PU L#27 (P#27)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#28 (256KB) + L1d L#28 (32KB) + L1i L#28 (32KB) + Core L#28 + PU L#28 (P#28)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#29 (256KB) + L1d L#29 (32KB) + L1i L#29 (32KB) + Core L#29 + PU L#29 (P#29)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#30 (256KB) + L1d L#30 (32KB) + L1i L#30 (32KB) + Core L#30 + PU L#30 (P#30)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#31 (256KB) + L1d L#31 (32KB) + L1i L#31 (32KB) + Core L#31 + PU L#31 (P#31)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#32 (256KB) + L1d L#32 (32KB) + L1i L#32 (32KB) + Core L#32 + PU L#32 (P#32)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#33 (256KB) + L1d L#33 (32KB) + L1i L#33 (32KB) + Core L#33 + PU L#33 (P#33)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#34 (256KB) + L1d L#34 (32KB) + L1i L#34 (32KB) + Core L#34 + PU L#34 (P#34)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#35 (256KB) + L1d L#35 (32KB) + L1i L#35 (32KB) + Core L#35 + PU L#35 (P#35)
<br>
&nbsp;&nbsp;NUMANode L#3 (P#3 256GB) + Socket L#3 + L3 L#3 (30MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#36 (256KB) + L1d L#36 (32KB) + L1i L#36 (32KB) + Core L#36 + PU L#36 (P#36)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#37 (256KB) + L1d L#37 (32KB) + L1i L#37 (32KB) + Core L#37 + PU L#37 (P#37)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#38 (256KB) + L1d L#38 (32KB) + L1i L#38 (32KB) + Core L#38 + PU L#38 (P#38)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#39 (256KB) + L1d L#39 (32KB) + L1i L#39 (32KB) + Core L#39 + PU L#39 (P#39)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#40 (256KB) + L1d L#40 (32KB) + L1i L#40 (32KB) + Core L#40 + PU L#40 (P#40)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#41 (256KB) + L1d L#41 (32KB) + L1i L#41 (32KB) + Core L#41 + PU L#41 (P#41)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#42 (256KB) + L1d L#42 (32KB) + L1i L#42 (32KB) + Core L#42 + PU L#42 (P#42)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#43 (256KB) + L1d L#43 (32KB) + L1i L#43 (32KB) + Core L#43 + PU L#43 (P#43)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#44 (256KB) + L1d L#44 (32KB) + L1i L#44 (32KB) + Core L#44 + PU L#44 (P#44)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#45 (256KB) + L1d L#45 (32KB) + L1i L#45 (32KB) + Core L#45 + PU L#45 (P#45)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#46 (256KB) + L1d L#46 (32KB) + L1i L#46 (32KB) + Core L#46 + PU L#46 (P#46)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#47 (256KB) + L1d L#47 (32KB) + L1i L#47 (32KB) + Core L#47 + PU L#47 (P#47)
<br>
&nbsp;&nbsp;HostBridge L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:1528
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#0 &quot;eth0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:1528
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#1 &quot;eth1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 1000:005d
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#2 &quot;sda&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 15b3:1003
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#3 &quot;ib0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#4 &quot;ib1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OpenFabrics L#5 &quot;mlx4_0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 102b:0522
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 19a2:0800
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:1d02
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#6 &quot;sr0&quot;
<br>
<p><p><p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17904/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17905.php">Atchley, Scott: "Re: [OMPI devel] Dual rail IB card problem"</a>
<li><strong>Previous message:</strong> <a href="17903.php">Howard Pritchard: "Re: [OMPI devel] Status update: PMIx on master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17905.php">Atchley, Scott: "Re: [OMPI devel] Dual rail IB card problem"</a>
<li><strong>Reply:</strong> <a href="17905.php">Atchley, Scott: "Re: [OMPI devel] Dual rail IB card problem"</a>
<li><strong>Reply:</strong> <a href="17906.php">Brice Goglin: "Re: [OMPI devel] Dual rail IB card problem"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17911.php">Brice Goglin: "Re: [OMPI devel] Dual rail IB card problem"</a>
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
