<?
$subject_val = "Re: [hwloc-users] Hwloc error.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 30 11:24:46 2012" -->
<!-- isoreceived="20120530152446" -->
<!-- sent="Wed, 30 May 2012 17:24:41 +0200" -->
<!-- isosent="20120530152441" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Hwloc error." -->
<!-- id="4FC63BB9.5020202_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120530152240.GP3370_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Hwloc error.<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-30 11:24:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0642.php">Jeff Squyres: "Re: [hwloc-users] Hwloc error."</a>
<li><strong>Previous message:</strong> <a href="0640.php">Samuel Thibault: "Re: [hwloc-users] Hwloc error."</a>
<li><strong>In reply to:</strong> <a href="0640.php">Samuel Thibault: "Re: [hwloc-users] Hwloc error."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0642.php">Jeff Squyres: "Re: [hwloc-users] Hwloc error."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 30/05/2012 17:22, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; John Hanks, le Wed 30 May 2012 17:03:47 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; * Hwloc has encountered what looks like an error from the operating system.
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; * object intersection without inclusion!
</span><br>
<span class="quotelev2">&gt;&gt; * Error occurred in topology.c line 594
</span><br>
<span class="quotelev1">&gt; There is indeed something odd with what the Linux kernel reports:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; os node 1 has cpuset 0x0003ffff
</span><br>
<span class="quotelev1">&gt; os node 2 has cpuset 0x00fc0000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as can be seen in /sys/devices/system/node/node*/cpumap, but
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; os socket 0 has cpuset 0x00000fff
</span><br>
<span class="quotelev1">&gt; os socket 1 has cpuset 0x00fff000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; as can be seen in /sys/devices/system/cpu/cpu*/topology/physical_package_id
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i.e. the kernel reports that socket 0 is completely in node 1, while
</span><br>
<span class="quotelev1">&gt; socket 1 is half in node 1 and half in node 2. Do you have more
</span><br>
<span class="quotelev1">&gt; information about what the machine actually contains socket- and
</span><br>
<span class="quotelev1">&gt; NUMA-wise? The dell website is not really felpful, it talks about 4-16
</span><br>
<span class="quotelev1">&gt; cores for the DL165 G7, while you have 24.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It's a dual-opteron machine with AMD Magny-cours processors. Two 12-core
<br>
sockets, with 2 NUMA nodes in each. Maybe the BIOS wasn't updated for
<br>
these processors.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0642.php">Jeff Squyres: "Re: [hwloc-users] Hwloc error."</a>
<li><strong>Previous message:</strong> <a href="0640.php">Samuel Thibault: "Re: [hwloc-users] Hwloc error."</a>
<li><strong>In reply to:</strong> <a href="0640.php">Samuel Thibault: "Re: [hwloc-users] Hwloc error."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0642.php">Jeff Squyres: "Re: [hwloc-users] Hwloc error."</a>
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
