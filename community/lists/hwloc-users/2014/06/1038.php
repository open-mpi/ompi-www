<?
$subject_val = "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 11 15:16:26 2014" -->
<!-- isoreceived="20140611191626" -->
<!-- sent="Wed, 11 Jun 2014 19:16:25 +0000" -->
<!-- isosent="20140611191625" -->
<!-- name="Yury Vorobyov" -->
<!-- email="teupollam_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] misleading cache size on AMD Opteron 6348?" -->
<!-- id="CANmgRRATDgZhpFCrkfDTaLE4tbvTUpdDzTT6cF5UXHtcU+UXnA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CANmgRRCcTOovo7=8QCqSn1+u8O0CVrKJ1J15kV6oLPuuL1SR-A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] misleading cache size on AMD Opteron 6348?<br>
<strong>From:</strong> Yury Vorobyov (<em>teupollam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-11 15:16:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1039.php">Brice Goglin: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<li><strong>Previous message:</strong> <a href="1037.php">Brice Goglin: "Re: [hwloc-users] divide by zero error?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/04/1021.php">Yury Vorobyov: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1039.php">Brice Goglin: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<li><strong>Reply:</strong> <a href="1039.php">Brice Goglin: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I do not see big difference... This time I used upstream version of hwloc
<br>
(not git live).
<br>
<p>$ lstopo
<br>
****************************************************************************
<br>
* hwloc has encountered what looks like an error from the operating system.
<br>
*
<br>
* L3 (P#6 cpuset 0x000003f0) intersects with NUMANode (P#0 cpuset
<br>
0x0000003f) without inclusion!
<br>
* Error occurred in topology.c line 940
<br>
*
<br>
* Please report this error message to the hwloc user's mailing list,
<br>
* along with the output from the hwloc-gather-topology script.
<br>
****************************************************************************
<br>
Machine
<br>
&nbsp;&nbsp;Socket L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 L#0 (6144KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#0 (2048KB) + L1i L#0 (64KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#0 (16KB) + Core L#0 + PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#1 (16KB) + Core L#1 + PU L#1 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#1 (2048KB) + L1i L#1 (64KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#2 (16KB) + Core L#2 + PU L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#3 (16KB) + Core L#3 + PU L#3 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#2 (2048KB) + L1i L#2 (64KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#4 (16KB) + Core L#4 + PU L#4 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#5 (16KB) + Core L#5 + PU L#5 (P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#1 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#3 (2048KB) + L1i L#3 (64KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#6 (16KB) + Core L#6 + PU L#6 (P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#7 (16KB) + Core L#7 + PU L#7 (P#7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#4 (2048KB) + L1i L#4 (64KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#8 (16KB) + Core L#8 + PU L#8 (P#8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#9 (16KB) + Core L#9 + PU L#9 (P#9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 L#1 (6144KB) + L2 L#5 (2048KB) + L1i L#5 (64KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#10 (16KB) + Core L#10 + PU L#10 (P#10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#11 (16KB) + Core L#11 + PU L#11 (P#11)
<br>
&nbsp;&nbsp;Socket L#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 L#2 (6144KB) + L2 L#6 (2048KB) + L1i L#6 (64KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#12 (16KB) + Core L#12 + PU L#12 (P#12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#13 (16KB) + Core L#13 + PU L#13 (P#13)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#7 (2048KB) + L1i L#7 (64KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#14 (16KB) + Core L#14 + PU L#14 (P#14)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#15 (16KB) + Core L#15 + PU L#15 (P#15)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#8 (2048KB) + L1i L#8 (64KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#16 (16KB) + Core L#16 + PU L#16 (P#16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#17 (16KB) + Core L#17 + PU L#17 (P#17)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#3 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#9 (2048KB) + L1i L#9 (64KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#18 (16KB) + Core L#18 + PU L#18 (P#18)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#19 (16KB) + Core L#19 + PU L#19 (P#19)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3 L#3 (6144KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#10 (2048KB) + L1i L#10 (64KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#20 (16KB) + Core L#20 + PU L#20 (P#20)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#21 (16KB) + Core L#21 + PU L#21 (P#21)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#11 (2048KB) + L1i L#11 (64KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#22 (16KB) + Core L#22 + PU L#22 (P#22)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1d L#23 (16KB) + Core L#23 + PU L#23 (P#23)
<br>
&nbsp;&nbsp;HostBridge L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 10de:0f00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:10d3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:10d3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 1002:6889
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCI 1002:4390
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCI 1002:439c
<br>
<p><p><p>On Tue, Apr 1, 2014 at 1:47 PM, Yury Vorobyov &lt;teupollam_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Current BIOS version could be improperly detecting CPUs, which engineering
</span><br>
<span class="quotelev1">&gt; samples of 6348 (all characteristics are same).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 1, 2014 at 6:59 PM, Yury Vorobyov &lt;teupollam_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The BIOS has latest version. If I should check some BIOS information, I
</span><br>
<span class="quotelev2">&gt;&gt; have access to hardware. Tell me what variables from SMBIOS you want to see?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Jan 31, 2014 at 1:07 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your BIOS reports invalid L3 cache information. On these processors, the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L3 is shared by 6 cores, it covers 6 cores of an entire half-socket NUMA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node. But the BIOS says that some L3 are shared between 4 cores, others by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6 cores. And worse it says that some L3 is shared by some cores from a NUMA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node and others from another NUMA nodes, which causes the error message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (and these L3 cannot be inserted in the topology).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I see &quot;AMD Eng Sample, ZS268145TCG54_32/26/20_2/16&quot; in the processor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; type, so it might explain why your BIOS is somehow experimental. See if you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can upgrade it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also make sure your kernel isn't too old in case it misses L3 info for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; these processors. At least 3.3 should be OK iirc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NUMA node sharing info:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ cat sys/devices/system/node/node*/cpumap
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,0000003f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,00000fc0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,0003f000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,00fc0000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ cat sys/devices/system/cpu/cpu{?,??}/cache/index3/shared_cpu_map
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,0000000f &lt;&lt; wrong, should be 003f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,0000000f &lt;&lt; wrong, should be 003f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,0000000f &lt;&lt; wrong, should be 003f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,0000000f &lt;&lt; wrong, should be 003f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,000003f0 &lt;&lt;impossible, should be 003f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,000003f0 &lt;&lt;impossible, should be 003f
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,000003f0 &lt;&lt;impossible, should be 0fc0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,000003f0 &lt;&lt;impossible, should be 0fc0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,000003f0 &lt;&lt;impossible, should be 0fc0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,000003f0 &lt;&lt;impossible, should be 0fc0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,00000c00 &lt;&lt;wrong, should be 0fc0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,00000c00 &lt;&lt;wrong, should be 0fc0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,00003000 &lt;&lt;wrong, should be 003f000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,00003000 &lt;&lt;wrong, should be 003f000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,000fc000 &lt;&lt;impossible, should be 003f000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,000fc000 &lt;&lt;impossible, should be 003f000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,000fc000 &lt;&lt;impossible, should be 003f000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,000fc000 &lt;&lt;impossible, should be 003f000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,000fc000 &lt;&lt;impossible, should be 0fc0000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,000fc000 &lt;&lt;impossible, should be 0fc0000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,00f00000 &lt;&lt;wrong, should be 0fc0000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,00f00000 &lt;&lt;wrong, should be 0fc0000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,00f00000 &lt;&lt;wrong, should be 0fc0000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 00000000,00f00000 &lt;&lt;wrong, should be 0fc0000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 31/01/2014 03:46, Yury Vorobyov a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I have got error about &quot;intersecting caches&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Info from hwloc in attachments.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I never got this before. I use &quot;live&quot; builds of OpenMPI directly from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; repo.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users mailing listhwloc-users_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
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
<span class="quotelev3">&gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1038/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1039.php">Brice Goglin: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<li><strong>Previous message:</strong> <a href="1037.php">Brice Goglin: "Re: [hwloc-users] divide by zero error?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/04/1021.php">Yury Vorobyov: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1039.php">Brice Goglin: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<li><strong>Reply:</strong> <a href="1039.php">Brice Goglin: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
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
