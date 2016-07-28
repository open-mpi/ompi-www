<?
$subject_val = "Re: [hwloc-devel] PCI device name question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 15:29:12 2012" -->
<!-- isoreceived="20120320192912" -->
<!-- sent="Tue, 20 Mar 2012 20:29:03 +0100" -->
<!-- isosent="20120320192903" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PCI device name question" -->
<!-- id="4F68DA7F.2060608_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D438A3A1-DD86-4C5A-A800-7A8C6E3212A6_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] PCI device name question<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-20 15:29:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2955.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Previous message:</strong> <a href="2953.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>In reply to:</strong> <a href="2953.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2955.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Reply:</strong> <a href="2955.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 20/03/2012 20:12, Jeffrey Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Mar 20, 2012, at 3:09 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looks like we just need to read /sys/class/net/ib*/dev_id, make that
</span><br>
<span class="quotelev2">&gt;&gt; decimal, add one, and we get the port number.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How would you like this to appear in the topology? Is a object info such
</span><br>
<span class="quotelev2">&gt;&gt; as &quot;Port=%d&quot; in each network interface in a OFED object ok?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You mean attached to the &quot;ib0&quot; (etc.) PCI devices?  If so, I think that would be fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are the other info keys capitalized?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will you display this info in lstopo output?
</span><br>
<p>Yes other info name are usually capitalized.
<br>
<p>All of them appear in lstopo verbose, but not in the default output
<br>
(because we don't want a huge text output by default and it's hard to
<br>
decide which ones matter).
<br>
<p>I just wrote a patch that adds Port=1/2 to all Net devices:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 15b3:673c (P#28672 busid=0000:07:00.0 class=0c06(IB) PCIVendor=&quot;Mellanox Technologies&quot; PCIDevice=&quot;MT26428 [ConnectX VPI PCIe 2.0 5GT/s - IB QDR / 10GigE]&quot;) &quot;Mellanox Technologies MT26428 [ConnectX VPI PCIe 2.0 5GT/s - IB QDR / 10GigE]&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#6 (Address=80:34:00:48:fe:80:00:00:00:00:00:01:00:02:c9:03:00:0b:53:49 Port=1) &quot;ib0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#7 (Address=80:34:00:49:fe:80:00:00:00:00:00:00:00:02:c9:03:00:0b:53:4a Port=2) &quot;ib1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OpenFabrics L#8 &quot;mlx4_0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 14c1:0008 (P#24576 busid=0000:06:00.0 class=0200(Ether) PCIVendor=&quot;MYRICOM Inc.&quot; PCIDevice=&quot;Myri-10G Dual-Protocol NIC&quot;) &quot;MYRICOM Inc. Myri-10G Dual-Protocol NIC&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#5 (Address=00:60:dd:47:c3:cd Port=1) &quot;myri0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 14e4:1639 (P#4096 busid=0000:01:00.0 class=0200(Ether) PCIVendor=&quot;Broadcom Corporation&quot; PCIDevice=&quot;NetXtreme II BCM5709 Gigabit Ethernet&quot;) &quot;Broadcom Corporation NetXtreme II BCM5709 Gigabit Ethernet&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#0 (Address=b8:ac:6f:83:df:80 Port=1) &quot;eth0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 14e4:1639 (P#4097 busid=0000:01:00.1 class=0200(Ether) PCIVendor=&quot;Broadcom Corporation&quot; PCIDevice=&quot;NetXtreme II BCM5709 Gigabit Ethernet&quot;) &quot;Broadcom Corporation NetXtreme II BCM5709 Gigabit Ethernet&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#1 (Address=b8:ac:6f:83:df:82 Port=1) &quot;eth1&quot;
<br>
<p><p><p>By the way, do you want Port numbers to start at 0 or 1?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2955.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Previous message:</strong> <a href="2953.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>In reply to:</strong> <a href="2953.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2955.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Reply:</strong> <a href="2955.php">Jeffrey Squyres: "Re: [hwloc-devel] PCI device name question"</a>
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
