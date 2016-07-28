<?
$subject_val = "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 11 15:20:26 2014" -->
<!-- isoreceived="20140611192026" -->
<!-- sent="Wed, 11 Jun 2014 21:20:23 +0200" -->
<!-- isosent="20140611192023" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] misleading cache size on AMD Opteron 6348?" -->
<!-- id="5398ABF7.5040306_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CANmgRRATDgZhpFCrkfDTaLE4tbvTUpdDzTT6cF5UXHtcU+UXnA_at_mail.gmail.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-11 15:20:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/07/1040.php">Nick Papior Andersen: "[hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>Previous message:</strong> <a href="1038.php">Yury Vorobyov: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<li><strong>In reply to:</strong> <a href="1038.php">Yury Vorobyov: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The hwloc version will likely not change much regarding this hardware bug.
<br>
Since your hardware/BIOS looks buggy, we can't do much about it except
<br>
creating a valid XML that you could force to override the normal
<br>
hardware-based discovery.
<br>
<p>Brice
<br>
<p><p><p>Le 11/06/2014 21:16, Yury Vorobyov a &#233;crit :
<br>
<span class="quotelev1">&gt; I do not see big difference... This time I used upstream version of
</span><br>
<span class="quotelev1">&gt; hwloc (not git live).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ lstopo
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt; * hwloc has encountered what looks like an error from the operating
</span><br>
<span class="quotelev1">&gt; system.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * L3 (P#6 cpuset 0x000003f0) intersects with NUMANode (P#0 cpuset
</span><br>
<span class="quotelev1">&gt; 0x0000003f) without inclusion!
</span><br>
<span class="quotelev1">&gt; * Error occurred in topology.c line 940
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Please report this error message to the hwloc user's mailing list,
</span><br>
<span class="quotelev1">&gt; * along with the output from the hwloc-gather-topology script.
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt; Machine
</span><br>
<span class="quotelev1">&gt;   Socket L#0
</span><br>
<span class="quotelev1">&gt;     NUMANode L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;       L3 L#0 (6144KB)
</span><br>
<span class="quotelev1">&gt;         L2 L#0 (2048KB) + L1i L#0 (64KB)
</span><br>
<span class="quotelev1">&gt;           L1d L#0 (16KB) + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;           L1d L#1 (16KB) + Core L#1 + PU L#1 (P#1)
</span><br>
<span class="quotelev1">&gt;         L2 L#1 (2048KB) + L1i L#1 (64KB)
</span><br>
<span class="quotelev1">&gt;           L1d L#2 (16KB) + Core L#2 + PU L#2 (P#2)
</span><br>
<span class="quotelev1">&gt;           L1d L#3 (16KB) + Core L#3 + PU L#3 (P#3)
</span><br>
<span class="quotelev1">&gt;       L2 L#2 (2048KB) + L1i L#2 (64KB)
</span><br>
<span class="quotelev1">&gt;         L1d L#4 (16KB) + Core L#4 + PU L#4 (P#4)
</span><br>
<span class="quotelev1">&gt;         L1d L#5 (16KB) + Core L#5 + PU L#5 (P#5)
</span><br>
<span class="quotelev1">&gt;     NUMANode L#1 (P#1)
</span><br>
<span class="quotelev1">&gt;       L2 L#3 (2048KB) + L1i L#3 (64KB)
</span><br>
<span class="quotelev1">&gt;         L1d L#6 (16KB) + Core L#6 + PU L#6 (P#6)
</span><br>
<span class="quotelev1">&gt;         L1d L#7 (16KB) + Core L#7 + PU L#7 (P#7)
</span><br>
<span class="quotelev1">&gt;       L2 L#4 (2048KB) + L1i L#4 (64KB)
</span><br>
<span class="quotelev1">&gt;         L1d L#8 (16KB) + Core L#8 + PU L#8 (P#8)
</span><br>
<span class="quotelev1">&gt;         L1d L#9 (16KB) + Core L#9 + PU L#9 (P#9)
</span><br>
<span class="quotelev1">&gt;       L3 L#1 (6144KB) + L2 L#5 (2048KB) + L1i L#5 (64KB)
</span><br>
<span class="quotelev1">&gt;         L1d L#10 (16KB) + Core L#10 + PU L#10 (P#10)
</span><br>
<span class="quotelev1">&gt;         L1d L#11 (16KB) + Core L#11 + PU L#11 (P#11)
</span><br>
<span class="quotelev1">&gt;   Socket L#1
</span><br>
<span class="quotelev1">&gt;     NUMANode L#2 (P#2)
</span><br>
<span class="quotelev1">&gt;       L3 L#2 (6144KB) + L2 L#6 (2048KB) + L1i L#6 (64KB)
</span><br>
<span class="quotelev1">&gt;         L1d L#12 (16KB) + Core L#12 + PU L#12 (P#12)
</span><br>
<span class="quotelev1">&gt;         L1d L#13 (16KB) + Core L#13 + PU L#13 (P#13)
</span><br>
<span class="quotelev1">&gt;       L2 L#7 (2048KB) + L1i L#7 (64KB)
</span><br>
<span class="quotelev1">&gt;         L1d L#14 (16KB) + Core L#14 + PU L#14 (P#14)
</span><br>
<span class="quotelev1">&gt;         L1d L#15 (16KB) + Core L#15 + PU L#15 (P#15)
</span><br>
<span class="quotelev1">&gt;       L2 L#8 (2048KB) + L1i L#8 (64KB)
</span><br>
<span class="quotelev1">&gt;         L1d L#16 (16KB) + Core L#16 + PU L#16 (P#16)
</span><br>
<span class="quotelev1">&gt;         L1d L#17 (16KB) + Core L#17 + PU L#17 (P#17)
</span><br>
<span class="quotelev1">&gt;     NUMANode L#3 (P#3)
</span><br>
<span class="quotelev1">&gt;       L2 L#9 (2048KB) + L1i L#9 (64KB)
</span><br>
<span class="quotelev1">&gt;         L1d L#18 (16KB) + Core L#18 + PU L#18 (P#18)
</span><br>
<span class="quotelev1">&gt;         L1d L#19 (16KB) + Core L#19 + PU L#19 (P#19)
</span><br>
<span class="quotelev1">&gt;       L3 L#3 (6144KB)
</span><br>
<span class="quotelev1">&gt;         L2 L#10 (2048KB) + L1i L#10 (64KB)
</span><br>
<span class="quotelev1">&gt;           L1d L#20 (16KB) + Core L#20 + PU L#20 (P#20)
</span><br>
<span class="quotelev1">&gt;           L1d L#21 (16KB) + Core L#21 + PU L#21 (P#21)
</span><br>
<span class="quotelev1">&gt;         L2 L#11 (2048KB) + L1i L#11 (64KB)
</span><br>
<span class="quotelev1">&gt;           L1d L#22 (16KB) + Core L#22 + PU L#22 (P#22)
</span><br>
<span class="quotelev1">&gt;           L1d L#23 (16KB) + Core L#23 + PU L#23 (P#23)
</span><br>
<span class="quotelev1">&gt;   HostBridge L#0
</span><br>
<span class="quotelev1">&gt;     PCIBridge
</span><br>
<span class="quotelev1">&gt;       PCI 10de:0f00
</span><br>
<span class="quotelev1">&gt;     PCIBridge
</span><br>
<span class="quotelev1">&gt;       PCI 8086:10d3
</span><br>
<span class="quotelev1">&gt;     PCIBridge
</span><br>
<span class="quotelev1">&gt;       PCI 8086:10d3
</span><br>
<span class="quotelev1">&gt;     PCIBridge
</span><br>
<span class="quotelev1">&gt;       PCI 1002:6889
</span><br>
<span class="quotelev1">&gt;     PCI 1002:4390
</span><br>
<span class="quotelev1">&gt;     PCI 1002:439c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 1, 2014 at 1:47 PM, Yury Vorobyov &lt;teupollam_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:teupollam_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Current BIOS version could be improperly detecting CPUs, which
</span><br>
<span class="quotelev1">&gt;     engineering samples of 6348 (all characteristics are same).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Tue, Apr 1, 2014 at 6:59 PM, Yury Vorobyov &lt;teupollam_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:teupollam_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         The BIOS has latest version. If I should check some BIOS
</span><br>
<span class="quotelev1">&gt;         information, I have access to hardware. Tell me what variables
</span><br>
<span class="quotelev1">&gt;         from SMBIOS you want to see?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On Fri, Jan 31, 2014 at 1:07 PM, Brice Goglin
</span><br>
<span class="quotelev1">&gt;         &lt;Brice.Goglin_at_[hidden] &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Your BIOS reports invalid L3 cache information. On these
</span><br>
<span class="quotelev1">&gt;             processors, the L3 is shared by 6 cores, it covers 6 cores
</span><br>
<span class="quotelev1">&gt;             of an entire half-socket NUMA node. But the BIOS says that
</span><br>
<span class="quotelev1">&gt;             some L3 are shared between 4 cores, others by 6 cores. And
</span><br>
<span class="quotelev1">&gt;             worse it says that some L3 is shared by some cores from a
</span><br>
<span class="quotelev1">&gt;             NUMA node and others from another NUMA nodes, which causes
</span><br>
<span class="quotelev1">&gt;             the error message (and these L3 cannot be inserted in the
</span><br>
<span class="quotelev1">&gt;             topology).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             I see &quot;AMD Eng Sample, ZS268145TCG54_32/26/20_2/16&quot; in the
</span><br>
<span class="quotelev1">&gt;             processor type, so it might explain why your BIOS is
</span><br>
<span class="quotelev1">&gt;             somehow experimental. See if you can upgrade it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Also make sure your kernel isn't too old in case it misses
</span><br>
<span class="quotelev1">&gt;             L3 info for these processors. At least 3.3 should be OK iirc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             NUMA node sharing info:
</span><br>
<span class="quotelev1">&gt;             $ cat sys/devices/system/node/node*/cpumap
</span><br>
<span class="quotelev1">&gt;             00000000,0000003f
</span><br>
<span class="quotelev1">&gt;             00000000,00000fc0
</span><br>
<span class="quotelev1">&gt;             00000000,0003f000
</span><br>
<span class="quotelev1">&gt;             00000000,00fc0000
</span><br>
<span class="quotelev1">&gt;             $ cat
</span><br>
<span class="quotelev1">&gt;             sys/devices/system/cpu/cpu{?,??}/cache/index3/shared_cpu_map
</span><br>
<span class="quotelev1">&gt;             00000000,0000000f &lt;&lt; wrong, should be 003f
</span><br>
<span class="quotelev1">&gt;             00000000,0000000f &lt;&lt; wrong, should be 003f
</span><br>
<span class="quotelev1">&gt;             00000000,0000000f &lt;&lt; wrong, should be 003f
</span><br>
<span class="quotelev1">&gt;             00000000,0000000f &lt;&lt; wrong, should be 003f
</span><br>
<span class="quotelev1">&gt;             00000000,000003f0 &lt;&lt;impossible, should be 003f
</span><br>
<span class="quotelev1">&gt;             00000000,000003f0 &lt;&lt;impossible, should be 003f
</span><br>
<span class="quotelev1">&gt;             00000000,000003f0 &lt;&lt;impossible, should be 0fc0
</span><br>
<span class="quotelev1">&gt;             00000000,000003f0 &lt;&lt;impossible, should be 0fc0
</span><br>
<span class="quotelev1">&gt;             00000000,000003f0 &lt;&lt;impossible, should be 0fc0
</span><br>
<span class="quotelev1">&gt;             00000000,000003f0 &lt;&lt;impossible, should be 0fc0
</span><br>
<span class="quotelev1">&gt;             00000000,00000c00 &lt;&lt;wrong, should be 0fc0
</span><br>
<span class="quotelev1">&gt;             00000000,00000c00 &lt;&lt;wrong, should be 0fc0
</span><br>
<span class="quotelev1">&gt;             00000000,00003000 &lt;&lt;wrong, should be 003f000
</span><br>
<span class="quotelev1">&gt;             00000000,00003000 &lt;&lt;wrong, should be 003f000
</span><br>
<span class="quotelev1">&gt;             00000000,000fc000 &lt;&lt;impossible, should be 003f000
</span><br>
<span class="quotelev1">&gt;             00000000,000fc000 &lt;&lt;impossible, should be 003f000
</span><br>
<span class="quotelev1">&gt;             00000000,000fc000 &lt;&lt;impossible, should be 003f000
</span><br>
<span class="quotelev1">&gt;             00000000,000fc000 &lt;&lt;impossible, should be 003f000
</span><br>
<span class="quotelev1">&gt;             00000000,000fc000 &lt;&lt;impossible, should be 0fc0000
</span><br>
<span class="quotelev1">&gt;             00000000,000fc000 &lt;&lt;impossible, should be 0fc0000
</span><br>
<span class="quotelev1">&gt;             00000000,00f00000 &lt;&lt;wrong, should be 0fc0000
</span><br>
<span class="quotelev1">&gt;             00000000,00f00000 &lt;&lt;wrong, should be 0fc0000
</span><br>
<span class="quotelev1">&gt;             00000000,00f00000 &lt;&lt;wrong, should be 0fc0000
</span><br>
<span class="quotelev1">&gt;             00000000,00f00000 &lt;&lt;wrong, should be 0fc0000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Le 31/01/2014 03:46, Yury Vorobyov a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;             I have got error about &quot;intersecting caches&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             Info from hwloc in attachments.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             I never got this before. I use &quot;live&quot; builds of OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt;             directly from repo.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;             hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;             hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt;             hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/06/1039.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/06/1039.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1039/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/07/1040.php">Nick Papior Andersen: "[hwloc-users] hwloc 1.9 and openmpi using intel compiler"</a>
<li><strong>Previous message:</strong> <a href="1038.php">Yury Vorobyov: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<li><strong>In reply to:</strong> <a href="1038.php">Yury Vorobyov: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<!-- nextthread="start" -->
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
