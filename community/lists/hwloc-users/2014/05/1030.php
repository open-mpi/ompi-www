<?
$subject_val = "Re: [hwloc-users] node configuration differs form hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 28 08:21:00 2014" -->
<!-- isoreceived="20140528122100" -->
<!-- sent="Wed, 28 May 2014 14:20:58 +0200" -->
<!-- isosent="20140528122058" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] node configuration differs form hardware" -->
<!-- id="5385D4AA.8000107_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1401279214.46706.YahooMailNeo_at_web120606.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] node configuration differs form hardware<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-28 08:20:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1031.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>Previous message:</strong> <a href="1029.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>In reply to:</strong> <a href="1029.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1031.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>Reply:</strong> <a href="1031.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/05/2014 14:13, Craig Kapfer a &#233;crit :
<br>
<span class="quotelev1">&gt; Interesting, quite right, thank you very much.  Yes these are AMD 6300
</span><br>
<span class="quotelev1">&gt; series.  Same kernel but these boxes seem to have different BIOS
</span><br>
<span class="quotelev1">&gt; versions, direct from the factory, delivered in the same physical
</span><br>
<span class="quotelev1">&gt; enclosure even!  Some are AMI 3.5 and some are 3.0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So slurm is then incorrectly parsing correct output from lstopo to
</span><br>
<span class="quotelev1">&gt; generate this message?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     May 27 11:53:04 n001 slurmd[3629]: Node configuration differs from hardware: CPUs=64:64(hw) Boards=1:1(hw) SocketsPerBoard=4:8(hw)
</span><br>
<span class="quotelev2">&gt;&gt;      CoresPerSocket=16:8(hw) ThreadsPerCore=1:1(hw)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<p>It's saying &quot;there are 8 sockets with 8 cores in hw instead of 4 sockets
<br>
with 16 cores each in config&quot; ?
<br>
My feeling is that Slurm just has a (valid) config that says group2
<br>
while it was running on group1 in this case.
<br>
<p>Brice
<br>
<p><p><span class="quotelev1">&gt; Thanks much,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Craig
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wednesday, May 28, 2014 1:39 PM, Brice Goglin
</span><br>
<span class="quotelev1">&gt; &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Aside of the BIOS config, are you sure that you have the exact same
</span><br>
<span class="quotelev1">&gt; BIOS *version* in each node? (can check in /sys/class/dmi/id/bios_*)
</span><br>
<span class="quotelev1">&gt; Same Linux kernel too?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, recently we've seen somebody fix such problems by unplugging and
</span><br>
<span class="quotelev1">&gt; replugging some CPUs on the motherboard. Seems crazy but it happened
</span><br>
<span class="quotelev1">&gt; for real...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By the way, your discussion of groups 1 and 2 below is wrong. Group 2
</span><br>
<span class="quotelev1">&gt; doesn't say that NUMA node == socket, and it doesn't report 8 sockets
</span><br>
<span class="quotelev1">&gt; of 8 cores each. It reports 4 sockets containing 2 NUMA nodes each
</span><br>
<span class="quotelev1">&gt; containing 8 cores each, and that's likely what you have here (AMD
</span><br>
<span class="quotelev1">&gt; Opteron 6300 or 6200 processors?).
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
<span class="quotelev1">&gt; Le 28/05/2014 12:27, Craig Kapfer a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; We have a bunch of 64-core (quad-socket, 16 cores/socket) AMD servers and some of them are reporting the following error from slurm, which I gather gets its info from hwloc:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     May 27 11:53:04 n001 slurmd[3629]: Node configuration differs from hardware: CPUs=64:64(hw) Boards=1:1(hw) SocketsPerBoard=4:8(hw) CoresPerSocket=16:8(hw) ThreadsPerCore=1:1(hw)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All nodes have the exact same CPUs, motherboards and OS (PXE booted from the same master image even).  The bios settings between nodes also look the same.  The nodes only differ in the amount of memory and number of DIMMs.  
</span><br>
<span class="quotelev2">&gt;&gt; There are two sets of nodes with different output from lstopo:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Group 1 (correct): reporting 4 sockets with 16 cores per socket
</span><br>
<span class="quotelev2">&gt;&gt; Group 2 (incorrect): reporting 8 sockets with 8 cores per socket
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Group 2 seems to be (incorrectly?) taking numanodes as sockets.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The output of lstopo is slightly different in the two groups, note the extra Socket layer for group 2:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Group 1: 
</span><br>
<span class="quotelev2">&gt;&gt; Machine (128GB)
</span><br>
<span class="quotelev2">&gt;&gt;   NUMANode L#0 (P#0 32GB) + Socket L#0
</span><br>
<span class="quotelev2">&gt;&gt;   #16 cores listed
</span><br>
<span class="quotelev2">&gt;&gt;   &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   NUMANode L#1 (P#2 32GB) + Socket L#1
</span><br>
<span class="quotelev2">&gt;&gt;   #16 cores listed
</span><br>
<span class="quotelev2">&gt;&gt;   etc
</span><br>
<span class="quotelev2">&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Group 2:
</span><br>
<span class="quotelev2">&gt;&gt; Machine (256GB)
</span><br>
<span class="quotelev2">&gt;&gt;   Socket L#0 (64GB)
</span><br>
<span class="quotelev2">&gt;&gt;     NUMANode L#0 (P#0 32GB) + L3 L#0 (6144KB)
</span><br>
<span class="quotelev2">&gt;&gt;     # 8 cores listed
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     NUMANode L#1 (P#1 32GB) + L3 L#1 (6144KB)
</span><br>
<span class="quotelev2">&gt;&gt;     # 8 cores listed
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Socket L#1 (64GB)
</span><br>
<span class="quotelev2">&gt;&gt;     NUMANode L#2 (P#2 32GB) + L3 L#2 (6144KB)
</span><br>
<span class="quotelev2">&gt;&gt;     # 8 cores listed
</span><br>
<span class="quotelev2">&gt;&gt;     etc
</span><br>
<span class="quotelev2">&gt;&gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The group 2 reporting doesn't match our hardware, at least as far as sockets and cores per socket goes--is there a reason other than the memory configuration that could cause this? 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Craig
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden] &lt;mailto:hwloc-users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1030/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1031.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>Previous message:</strong> <a href="1029.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>In reply to:</strong> <a href="1029.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1031.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>Reply:</strong> <a href="1031.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
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
