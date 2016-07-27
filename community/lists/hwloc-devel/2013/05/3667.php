<?
$subject_val = "Re: [hwloc-devel] pci hierarchy";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  2 13:43:11 2013" -->
<!-- isoreceived="20130502174311" -->
<!-- sent="Thu, 02 May 2013 19:42:59 +0200" -->
<!-- isosent="20130502174259" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] pci hierarchy" -->
<!-- id="5182A5A3.9080203_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAFLer81HtGObn82-8UvK1nD+yaS+JeMuK2o52iruQDyv-dwNMw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] pci hierarchy<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-02 13:42:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3668.php">Zheng Da: "Re: [hwloc-devel] pci hierarchy"</a>
<li><strong>Previous message:</strong> <a href="3666.php">Zheng Da: "Re: [hwloc-devel] pci hierarchy"</a>
<li><strong>In reply to:</strong> <a href="3666.php">Zheng Da: "Re: [hwloc-devel] pci hierarchy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3668.php">Zheng Da: "Re: [hwloc-devel] pci hierarchy"</a>
<li><strong>Reply:</strong> <a href="3668.php">Zheng Da: "Re: [hwloc-devel] pci hierarchy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All processor info is easy to find in Google once you have exact model
<br>
numbers. Then the best source of information is in the motherboard
<br>
manuals. We have several supermicro servers whose manuals have nice
<br>
pictures of all QPI, PCI, etc links. With other vendors such as Dell,
<br>
it's sometimes harder to get useful information.
<br>
<p>Brice
<br>
<p><p><p><p>Le 02/05/2013 19:39, Zheng Da a &#233;crit :
<br>
<span class="quotelev1">&gt; Thank you for your reply.
</span><br>
<span class="quotelev1">&gt; Where is such information documented? I mean how I/O hubs are
</span><br>
<span class="quotelev1">&gt; connected to processors/sockets. I really have hard time of searching
</span><br>
<span class="quotelev1">&gt; for such information.
</span><br>
<span class="quotelev1">&gt; I'm interested in knowing how I/O hubs are connected in a machine with
</span><br>
<span class="quotelev1">&gt; multiple sockets (4, 8 or even more sockets).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Da
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, May 2, 2013 at 3:49 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Both cases are possible, and lstopo reports the correct
</span><br>
<span class="quotelev1">&gt;     information as long as the BIOS give correct locality information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Nehalem and Westmere dual-xeon servers, in most cases, you have
</span><br>
<span class="quotelev1">&gt;     a single I/O hub (host bridge) connected to both sockets (what
</span><br>
<span class="quotelev1">&gt;     your &quot;intel documents&quot; say). Some machines (those that need
</span><br>
<span class="quotelev1">&gt;     multiple large PCI slots) have two I/O hubs, one near each socket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Sandy-Bridge, you have one hub inside each socket (what your
</span><br>
<span class="quotelev1">&gt;     lstopo shows below). Some dual-socket sans-bridge machines also
</span><br>
<span class="quotelev1">&gt;     report an additional hostbridge connected to both sockets at the
</span><br>
<span class="quotelev1">&gt;     same time, I think it's a BIOS bug but there are not interesting
</span><br>
<span class="quotelev1">&gt;     PCI devices behind it anyway (only Intel-specific QPI
</span><br>
<span class="quotelev1">&gt;     configuration through virtual PCI devices), so you can ignore them
</span><br>
<span class="quotelev1">&gt;     (and lstopo ignores them by default).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On machines with more than 2 sockets, I/O hubs are usually
</span><br>
<span class="quotelev1">&gt;     connected to 1 or 2 sockets only. On AMD, it's connected to a
</span><br>
<span class="quotelev1">&gt;     single NUMA node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Le 02/05/2013 08:58, Zheng Da a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I was recently told about this tool. It's really nice. It shows
</span><br>
<span class="quotelev2">&gt;&gt;     me so much information I previously tried very hard to find out.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Right now, I try to find out the PCI connectivity in my NUMA
</span><br>
<span class="quotelev2">&gt;&gt;     machine. lstopo shows me that each processor connects to a
</span><br>
<span class="quotelev2">&gt;&gt;     separate bridge host. However, many Intel documents such as
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;Intel&#174; QuickPath Interconnect Architectural Features Supporting
</span><br>
<span class="quotelev2">&gt;&gt;     Scalable System Architectures&quot; say that multiple processors share
</span><br>
<span class="quotelev2">&gt;&gt;     one I/O hub. I assume the I/O hub in the documents is the bridge
</span><br>
<span class="quotelev2">&gt;&gt;     host. I'm quite confused. Does the PCI topology shown by lstopo
</span><br>
<span class="quotelev2">&gt;&gt;     not represent the real topology in the machine  or the I/O hub in
</span><br>
<span class="quotelev2">&gt;&gt;     the documents is different from the bridge host? I attach the
</span><br>
<span class="quotelev2">&gt;&gt;     output of lstopo in my machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;     Da
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     $lstopo -v --whole-io
</span><br>
<span class="quotelev2">&gt;&gt;     Machine (P#0 total=536824300KB DMIProductName=&quot;PowerEdge R820&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     DMIProductVersion= DMIBoardVendor=&quot;Dell Inc.&quot; DMIBoardName=04K5X5
</span><br>
<span class="quotelev2">&gt;&gt;     DMIBoardVersion=A04 DMIBoardAssetTag= DMIChassisVendor=&quot;Dell
</span><br>
<span class="quotelev2">&gt;&gt;     Inc.&quot; DMIChassisType=23 DMIChassisVersion= DMIChassisAssetTag=
</span><br>
<span class="quotelev2">&gt;&gt;     DMIBIOSVendor=&quot;Dell Inc.&quot; DMIBIOSVersion=1.1.5
</span><br>
<span class="quotelev2">&gt;&gt;     DMIBIOSDate=05/10/2012 DMISysVendor=&quot;Dell Inc.&quot; Backend=Linux
</span><br>
<span class="quotelev2">&gt;&gt;     LinuxCgroup=/ OSName=Linux OSRelease=3.2.30 OSVersion=&quot;#3 SMP Tue
</span><br>
<span class="quotelev2">&gt;&gt;     Nov 20 13:06:53 EST 2012&quot; HostName=ubuntu Architecture=x86_64)
</span><br>
<span class="quotelev2">&gt;&gt;       NUMANode L#0 (P#0 local=134171116KB total=134171116KB)
</span><br>
<span class="quotelev2">&gt;&gt;         Socket L#0 (P#0)
</span><br>
<span class="quotelev2">&gt;&gt;           L3Cache L#0 (size=16384KB linesize=64 ways=16)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#0 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#0 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#0 (P#0)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#0 (P#0)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#1 (P#32)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#1 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#1 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#1 (P#1)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#2 (P#4)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#3 (P#36)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#2 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#2 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#2 (P#2)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#4 (P#8)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#5 (P#40)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#3 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#3 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#3 (P#3)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#6 (P#12)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#7 (P#44)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#4 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#4 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#4 (P#4)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#8 (P#16)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#9 (P#48)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#5 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#5 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#5 (P#5)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#10 (P#20)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#11 (P#52)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#6 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#6 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#6 (P#6)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#12 (P#24)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#13 (P#56)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#7 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#7 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#7 (P#7)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#14 (P#28)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#15 (P#60)
</span><br>
<span class="quotelev2">&gt;&gt;         Bridge Host-&gt;PCI L#2 (P#0 buses=0000:[00-0d])
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c00 (P#0 busid=0000:00:00.0 class=0600(Host)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge DMI2&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;Intel Corporation Sandy Bridge DMI2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           Bridge PCI-&gt;PCI (P#16 busid=0000:00:01.0 id=8086:3c02
</span><br>
<span class="quotelev2">&gt;&gt;     class=0604(PCI_B) buses=0000:[02-02] PCIVendor=&quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation&quot; PCIDevice=&quot;Sandy Bridge IIO PCI Express Root Port
</span><br>
<span class="quotelev2">&gt;&gt;     1a&quot;) &quot;Intel Corporation Sandy Bridge IIO PCI Express Root Port 1a&quot;
</span><br>
<span class="quotelev2">&gt;&gt;             PCI 14e4:165f (P#8192 busid=0000:02:00.0
</span><br>
<span class="quotelev2">&gt;&gt;     class=0200(Ether) PCIVendor=&quot;Broadcom Corporation&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     PCIDevice=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;) &quot;Broadcom
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               Net L#0 (Address=e0:db:55:07:f3:de) &quot;eth2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;             PCI 14e4:165f (P#8193 busid=0000:02:00.1
</span><br>
<span class="quotelev2">&gt;&gt;     class=0200(Ether) PCIVendor=&quot;Broadcom Corporation&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     PCIDevice=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;) &quot;Broadcom
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               Net L#1 (Address=e0:db:55:07:f3:df) &quot;eth3&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           Bridge PCI-&gt;PCI (P#17 busid=0000:00:01.1 id=8086:3c03
</span><br>
<span class="quotelev2">&gt;&gt;     class=0604(PCI_B) buses=0000:[01-01] PCIVendor=&quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation&quot; PCIDevice=&quot;Sandy Bridge IIO PCI Express Root Port
</span><br>
<span class="quotelev2">&gt;&gt;     1b&quot;) &quot;Intel Corporation Sandy Bridge IIO PCI Express Root Port 1b&quot;
</span><br>
<span class="quotelev2">&gt;&gt;             PCI 14e4:165f (P#4096 busid=0000:01:00.0
</span><br>
<span class="quotelev2">&gt;&gt;     class=0200(Ether) PCIVendor=&quot;Broadcom Corporation&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     PCIDevice=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;) &quot;Broadcom
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               Net L#2 (Address=e0:db:55:07:f3:dc) &quot;eth0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;             PCI 14e4:165f (P#4097 busid=0000:01:00.1
</span><br>
<span class="quotelev2">&gt;&gt;     class=0200(Ether) PCIVendor=&quot;Broadcom Corporation&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     PCIDevice=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;) &quot;Broadcom
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               Net L#3 (Address=e0:db:55:07:f3:dd) &quot;eth1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           Bridge PCI-&gt;PCI (P#32 busid=0000:00:02.0 id=8086:3c04
</span><br>
<span class="quotelev2">&gt;&gt;     class=0604(PCI_B) buses=0000:[03-03] PCIVendor=&quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation&quot; PCIDevice=&quot;Sandy Bridge IIO PCI Express Root Port
</span><br>
<span class="quotelev2">&gt;&gt;     2a&quot;) &quot;Intel Corporation Sandy Bridge IIO PCI Express Root Port 2a&quot;
</span><br>
<span class="quotelev2">&gt;&gt;             PCI 1000:005b (P#12288 busid=0000:03:00.0
</span><br>
<span class="quotelev2">&gt;&gt;     class=0104(RAID) PCIVendor=&quot;LSI Logic / Symbios Logic&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     PCIDevice=&quot;MegaRAID SAS 2208 [Thunderbolt]&quot;) &quot;LSI Logic / Symbios
</span><br>
<span class="quotelev2">&gt;&gt;     Logic MegaRAID SAS 2208 [Thunderbolt]&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               Block L#4 &quot;sda&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           Bridge PCI-&gt;PCI (P#34 busid=0000:00:02.2 id=8086:3c06
</span><br>
<span class="quotelev2">&gt;&gt;     class=0604(PCI_B) buses=0000:[04-04] PCIVendor=&quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation&quot; PCIDevice=&quot;Sandy Bridge IIO PCI Express Root Port
</span><br>
<span class="quotelev2">&gt;&gt;     2c&quot;) &quot;Intel Corporation Sandy Bridge IIO PCI Express Root Port 2c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           Bridge PCI-&gt;PCI (P#48 busid=0000:00:03.0 id=8086:3c08
</span><br>
<span class="quotelev2">&gt;&gt;     class=0604(PCI_B) buses=0000:[05-05] PCIVendor=&quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation&quot; PCIDevice=&quot;Sandy Bridge IIO PCI Express Root Port 3a
</span><br>
<span class="quotelev2">&gt;&gt;     in PCI Express Mode&quot;) &quot;Intel Corporation Sandy Bridge IIO PCI
</span><br>
<span class="quotelev2">&gt;&gt;     Express Root Port 3a in PCI Express Mode&quot;
</span><br>
<span class="quotelev2">&gt;&gt;             PCI 1000:0087 (P#20480 busid=0000:05:00.0 class=0107(SAS)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;LSI Logic / Symbios Logic&quot; PCIDevice=&quot;SAS2308
</span><br>
<span class="quotelev2">&gt;&gt;     PCI-Express Fusion-MPT SAS-2&quot;) &quot;LSI Logic / Symbios Logic SAS2308
</span><br>
<span class="quotelev2">&gt;&gt;     PCI-Express Fusion-MPT SAS-2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c28 (P#80 busid=0000:00:05.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Address
</span><br>
<span class="quotelev2">&gt;&gt;     Map, VTd_Misc, System Management&quot;) &quot;Intel Corporation Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Address Map, VTd_Misc, System Management&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c2a (P#82 busid=0000:00:05.2 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Control
</span><br>
<span class="quotelev2">&gt;&gt;     Status and Global Errors&quot;) &quot;Intel Corporation Sandy Bridge
</span><br>
<span class="quotelev2">&gt;&gt;     Control Status and Global Errors&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           Bridge PCI-&gt;PCI (P#272 busid=0000:00:11.0 id=8086:1d3e
</span><br>
<span class="quotelev2">&gt;&gt;     class=0604(PCI_B) buses=0000:[06-06] PCIVendor=&quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation&quot; PCIDevice=&quot;Patsburg PCI Express Virtual Root Port&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;Intel Corporation Patsburg PCI Express Virtual Root Port&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:1d3a (P#352 busid=0000:00:16.0 class=0780(Comm)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;X79 series chipset HECI
</span><br>
<span class="quotelev2">&gt;&gt;     Controller #2&quot;) &quot;Intel Corporation X79 series chipset HECI
</span><br>
<span class="quotelev2">&gt;&gt;     Controller #2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:1d3b (P#353 busid=0000:00:16.1 class=0780(Comm)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;X79 series chipset IDE-r
</span><br>
<span class="quotelev2">&gt;&gt;     Controller&quot;) &quot;Intel Corporation X79 series chipset IDE-r Controller&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:1d2d (P#416 busid=0000:00:1a.0 class=0c03(USB)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;X79 series chipset USB2
</span><br>
<span class="quotelev2">&gt;&gt;     Enhanced Host Controller #2&quot;) &quot;Intel Corporation X79 series
</span><br>
<span class="quotelev2">&gt;&gt;     chipset USB2 Enhanced Host Controller #2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           Bridge PCI-&gt;PCI (P#448 busid=0000:00:1c.0 id=8086:1d10
</span><br>
<span class="quotelev2">&gt;&gt;     class=0604(PCI_B) buses=0000:[07-07] PCIVendor=&quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation&quot; PCIDevice=&quot;X79 series chipset PCI Express Root Port
</span><br>
<span class="quotelev2">&gt;&gt;     1&quot;) &quot;Intel Corporation X79 series chipset PCI Express Root Port 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           Bridge PCI-&gt;PCI (P#455 busid=0000:00:1c.7 id=8086:1d1e
</span><br>
<span class="quotelev2">&gt;&gt;     class=0604(PCI_B) buses=0000:[08-0c] PCIVendor=&quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation&quot; PCIDevice=&quot;X79 series chipset PCI Express Root Port
</span><br>
<span class="quotelev2">&gt;&gt;     8&quot;) &quot;Intel Corporation X79 series chipset PCI Express Root Port 8&quot;
</span><br>
<span class="quotelev2">&gt;&gt;             Bridge PCI-&gt;PCI (P#32768 busid=0000:08:00.0 id=1912:0013
</span><br>
<span class="quotelev2">&gt;&gt;     class=0604(PCI_B) buses=0000:[09-0c] PCIVendor=&quot;Renesas
</span><br>
<span class="quotelev2">&gt;&gt;     Technology Corp.&quot; PCIDevice=&quot;SH7757 PCIe Switch [PS]&quot;) &quot;Renesas
</span><br>
<span class="quotelev2">&gt;&gt;     Technology Corp. SH7757 PCIe Switch [PS]&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               Bridge PCI-&gt;PCI (P#36864 busid=0000:09:00.0
</span><br>
<span class="quotelev2">&gt;&gt;     id=1912:0013 class=0604(PCI_B) buses=0000:[0a-0b]
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Renesas Technology Corp.&quot; PCIDevice=&quot;SH7757 PCIe
</span><br>
<span class="quotelev2">&gt;&gt;     Switch [PS]&quot;) &quot;Renesas Technology Corp. SH7757 PCIe Switch [PS]&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                 Bridge PCI-&gt;PCI (P#40960 busid=0000:0a:00.0
</span><br>
<span class="quotelev2">&gt;&gt;     id=1912:0012 class=0604(PCI_B) buses=0000:[0b-0b]
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Renesas Technology Corp.&quot; PCIDevice=&quot;SH7757 PCIe-PCI
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge [PPB]&quot;) &quot;Renesas Technology Corp. SH7757 PCIe-PCI Bridge
</span><br>
<span class="quotelev2">&gt;&gt;     [PPB]&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                   PCI 102b:0534 (P#45056 busid=0000:0b:00.0
</span><br>
<span class="quotelev2">&gt;&gt;     class=0300(VGA) PCIVendor=&quot;Matrox Graphics, Inc.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     PCIDevice=G200eR2) &quot;Matrox Graphics, Inc. G200eR2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               Bridge PCI-&gt;PCI (P#36880 busid=0000:09:01.0
</span><br>
<span class="quotelev2">&gt;&gt;     id=1912:0013 class=0604(PCI_B) buses=0000:[0c-0c]
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Renesas Technology Corp.&quot; PCIDevice=&quot;SH7757 PCIe
</span><br>
<span class="quotelev2">&gt;&gt;     Switch [PS]&quot;) &quot;Renesas Technology Corp. SH7757 PCIe Switch [PS]&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:1d26 (P#464 busid=0000:00:1d.0 class=0c03(USB)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;X79 series chipset USB2
</span><br>
<span class="quotelev2">&gt;&gt;     Enhanced Host Controller #1&quot;) &quot;Intel Corporation X79 series
</span><br>
<span class="quotelev2">&gt;&gt;     chipset USB2 Enhanced Host Controller #1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           Bridge PCI-&gt;PCI (P#480 busid=0000:00:1e.0 id=8086:244e
</span><br>
<span class="quotelev2">&gt;&gt;     class=0604(PCI_B) buses=0000:[0d-0d] PCIVendor=&quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation&quot; PCIDevice=&quot;82801 PCI Bridge&quot;) &quot;Intel Corporation
</span><br>
<span class="quotelev2">&gt;&gt;     82801 PCI Bridge&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:1d41 (P#496 busid=0000:00:1f.0 class=0601(ISA)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;X79 series chipset LPC
</span><br>
<span class="quotelev2">&gt;&gt;     Controller&quot;) &quot;Intel Corporation X79 series chipset LPC Controller&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:1d02 (P#498 busid=0000:00:1f.2 class=0106(SATA)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;X79 series chipset
</span><br>
<span class="quotelev2">&gt;&gt;     6-Port SATA AHCI Controller&quot;) &quot;Intel Corporation X79 series
</span><br>
<span class="quotelev2">&gt;&gt;     chipset 6-Port SATA AHCI Controller&quot;
</span><br>
<span class="quotelev2">&gt;&gt;             Block L#5 &quot;sr0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;         Bridge Host-&gt;PCI L#16 (P#1 buses=0000:[3f-3f])
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c80 (P#258176 busid=0000:3f:08.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge QPI Link
</span><br>
<span class="quotelev2">&gt;&gt;     0&quot;) &quot;Intel Corporation Sandy Bridge QPI Link 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c90 (P#258192 busid=0000:3f:09.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge QPI Link
</span><br>
<span class="quotelev2">&gt;&gt;     1&quot;) &quot;Intel Corporation Sandy Bridge QPI Link 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cc0 (P#258208 busid=0000:3f:0a.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power
</span><br>
<span class="quotelev2">&gt;&gt;     Control Unit 0&quot;) &quot;Intel Corporation Sandy Bridge Power Control
</span><br>
<span class="quotelev2">&gt;&gt;     Unit 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cc1 (P#258209 busid=0000:3f:0a.1 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power
</span><br>
<span class="quotelev2">&gt;&gt;     Control Unit 1&quot;) &quot;Intel Corporation Sandy Bridge Power Control
</span><br>
<span class="quotelev2">&gt;&gt;     Unit 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cc2 (P#258210 busid=0000:3f:0a.2 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power
</span><br>
<span class="quotelev2">&gt;&gt;     Control Unit 2&quot;) &quot;Intel Corporation Sandy Bridge Power Control
</span><br>
<span class="quotelev2">&gt;&gt;     Unit 2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cd0 (P#258211 busid=0000:3f:0a.3 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power
</span><br>
<span class="quotelev2">&gt;&gt;     Control Unit 3&quot;) &quot;Intel Corporation Sandy Bridge Power Control
</span><br>
<span class="quotelev2">&gt;&gt;     Unit 3&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce0 (P#258224 busid=0000:3f:0b.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Interrupt
</span><br>
<span class="quotelev2">&gt;&gt;     Control Registers&quot;) &quot;Intel Corporation Sandy Bridge Interrupt
</span><br>
<span class="quotelev2">&gt;&gt;     Control Registers&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce3 (P#258227 busid=0000:3f:0b.3 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Semaphore
</span><br>
<span class="quotelev2">&gt;&gt;     and Scratchpad Configuration Registers&quot;) &quot;Intel Corporation Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Semaphore and Scratchpad Configuration Registers&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#258240 busid=0000:3f:0c.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast
</span><br>
<span class="quotelev2">&gt;&gt;     Register 0&quot;) &quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#258241 busid=0000:3f:0c.1 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast
</span><br>
<span class="quotelev2">&gt;&gt;     Register 0&quot;) &quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#258242 busid=0000:3f:0c.2 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast
</span><br>
<span class="quotelev2">&gt;&gt;     Register 0&quot;) &quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#258243 busid=0000:3f:0c.3 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast
</span><br>
<span class="quotelev2">&gt;&gt;     Register 0&quot;) &quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cf4 (P#258246 busid=0000:3f:0c.6 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller System Address Decoder 0&quot;) &quot;Intel Corporation
</span><br>
<span class="quotelev2">&gt;&gt;     Sandy Bridge Integrated Memory Controller System Address Decoder 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cf6 (P#258247 busid=0000:3f:0c.7 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge System
</span><br>
<span class="quotelev2">&gt;&gt;     Address Decoder&quot;) &quot;Intel Corporation Sandy Bridge System Address
</span><br>
<span class="quotelev2">&gt;&gt;     Decoder&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#258256 busid=0000:3f:0d.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast
</span><br>
<span class="quotelev2">&gt;&gt;     Register 0&quot;) &quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#258257 busid=0000:3f:0d.1 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast
</span><br>
<span class="quotelev2">&gt;&gt;     Register 0&quot;) &quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#258258 busid=0000:3f:0d.2 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast
</span><br>
<span class="quotelev2">&gt;&gt;     Register 0&quot;) &quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#258259 busid=0000:3f:0d.3 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast
</span><br>
<span class="quotelev2">&gt;&gt;     Register 0&quot;) &quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cf5 (P#258262 busid=0000:3f:0d.6 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller System Address Decoder 1&quot;) &quot;Intel Corporation
</span><br>
<span class="quotelev2">&gt;&gt;     Sandy Bridge Integrated Memory Controller System Address Decoder 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ca0 (P#258272 busid=0000:3f:0e.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Processor
</span><br>
<span class="quotelev2">&gt;&gt;     Home Agent&quot;) &quot;Intel Corporation Sandy Bridge Processor Home Agent&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c46 (P#258273 busid=0000:3f:0e.1
</span><br>
<span class="quotelev2">&gt;&gt;     class=1101(Signl) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Processor Home Agent Performance Monitoring&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Processor Home Agent Performance Monitoring&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ca8 (P#258288 busid=0000:3f:0f.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Registers&quot;) &quot;Intel Corporation Sandy Bridge
</span><br>
<span class="quotelev2">&gt;&gt;     Integrated Memory Controller Registers&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c71 (P#258289 busid=0000:3f:0f.1 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller RAS Registers&quot;) &quot;Intel Corporation Sandy Bridge
</span><br>
<span class="quotelev2">&gt;&gt;     Integrated Memory Controller RAS Registers&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3caa (P#258290 busid=0000:3f:0f.2 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Target Address Decoder 0&quot;) &quot;Intel Corporation
</span><br>
<span class="quotelev2">&gt;&gt;     Sandy Bridge Integrated Memory Controller Target Address Decoder 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cab (P#258291 busid=0000:3f:0f.3 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Target Address Decoder 1&quot;) &quot;Intel Corporation
</span><br>
<span class="quotelev2">&gt;&gt;     Sandy Bridge Integrated Memory Controller Target Address Decoder 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cac (P#258292 busid=0000:3f:0f.4 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Target Address Decoder 2&quot;) &quot;Intel Corporation
</span><br>
<span class="quotelev2">&gt;&gt;     Sandy Bridge Integrated Memory Controller Target Address Decoder 2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cad (P#258293 busid=0000:3f:0f.5 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Target Address Decoder 3&quot;) &quot;Intel Corporation
</span><br>
<span class="quotelev2">&gt;&gt;     Sandy Bridge Integrated Memory Controller Target Address Decoder 3&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cae (P#258294 busid=0000:3f:0f.6 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Target Address Decoder 4&quot;) &quot;Intel Corporation
</span><br>
<span class="quotelev2">&gt;&gt;     Sandy Bridge Integrated Memory Controller Target Address Decoder 4&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb0 (P#258304 busid=0000:3f:10.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Channel 0-3 Thermal Control 0&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Integrated Memory Controller Channel 0-3
</span><br>
<span class="quotelev2">&gt;&gt;     Thermal Control 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb1 (P#258305 busid=0000:3f:10.1 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Channel 0-3 Thermal Control 1&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Integrated Memory Controller Channel 0-3
</span><br>
<span class="quotelev2">&gt;&gt;     Thermal Control 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb2 (P#258306 busid=0000:3f:10.2 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller ERROR Registers 0&quot;) &quot;Intel Corporation Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller ERROR Registers 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb3 (P#258307 busid=0000:3f:10.3 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller ERROR Registers 1&quot;) &quot;Intel Corporation Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller ERROR Registers 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb4 (P#258308 busid=0000:3f:10.4 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Channel 0-3 Thermal Control 2&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Integrated Memory Controller Channel 0-3
</span><br>
<span class="quotelev2">&gt;&gt;     Thermal Control 2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb5 (P#258309 busid=0000:3f:10.5 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Channel 0-3 Thermal Control 3&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Integrated Memory Controller Channel 0-3
</span><br>
<span class="quotelev2">&gt;&gt;     Thermal Control 3&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb6 (P#258310 busid=0000:3f:10.6 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller ERROR Registers 2&quot;) &quot;Intel Corporation Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller ERROR Registers 2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb7 (P#258311 busid=0000:3f:10.7 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller ERROR Registers 3&quot;) &quot;Intel Corporation Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller ERROR Registers 3&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb8 (P#258320 busid=0000:3f:11.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge DDRIO&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;Intel Corporation Sandy Bridge DDRIO&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce4 (P#258352 busid=0000:3f:13.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge R2PCIe&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;Intel Corporation Sandy Bridge R2PCIe&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c43 (P#258353 busid=0000:3f:13.1
</span><br>
<span class="quotelev2">&gt;&gt;     class=1101(Signl) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Ring to PCI Express Performance Monitor&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Ring to PCI Express Performance Monitor&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce6 (P#258356 busid=0000:3f:13.4
</span><br>
<span class="quotelev2">&gt;&gt;     class=1101(Signl) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge QuickPath Interconnect Agent Ring Registers&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge QuickPath Interconnect Agent Ring Registers&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c44 (P#258357 busid=0000:3f:13.5
</span><br>
<span class="quotelev2">&gt;&gt;     class=1101(Signl) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Ring to QuickPath Interconnect Link 0 Performance
</span><br>
<span class="quotelev2">&gt;&gt;     Monitor&quot;) &quot;Intel Corporation Sandy Bridge Ring to QuickPath
</span><br>
<span class="quotelev2">&gt;&gt;     Interconnect Link 0 Performance Monitor&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c45 (P#258358 busid=0000:3f:13.6 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Ring to
</span><br>
<span class="quotelev2">&gt;&gt;     QuickPath Interconnect Link 1 Performance Monitor&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Ring to QuickPath Interconnect Link 1
</span><br>
<span class="quotelev2">&gt;&gt;     Performance Monitor&quot;
</span><br>
<span class="quotelev2">&gt;&gt;       NUMANode L#1 (P#1 local=134217728KB total=134217728KB)
</span><br>
<span class="quotelev2">&gt;&gt;         Socket L#1 (P#1)
</span><br>
<span class="quotelev2">&gt;&gt;           L3Cache L#1 (size=16384KB linesize=64 ways=16)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#8 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#8 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#8 (P#0)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#16 (P#1)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#17 (P#33)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#9 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#9 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#9 (P#1)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#18 (P#5)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#19 (P#37)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#10 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#10 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#10 (P#2)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#20 (P#9)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#21 (P#41)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#11 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#11 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#11 (P#3)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#22 (P#13)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#23 (P#45)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#12 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#12 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#12 (P#4)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#24 (P#17)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#25 (P#49)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#13 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#13 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#13 (P#5)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#26 (P#21)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#27 (P#53)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#14 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#14 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#14 (P#6)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#28 (P#25)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#29 (P#57)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#15 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#15 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#15 (P#7)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#30 (P#29)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#31 (P#61)
</span><br>
<span class="quotelev2">&gt;&gt;         Bridge Host-&gt;PCI L#17 (P#2 buses=0000:[40-44])
</span><br>
<span class="quotelev2">&gt;&gt;           Bridge PCI-&gt;PCI (P#262160 busid=0000:40:01.0 id=8086:3c02
</span><br>
<span class="quotelev2">&gt;&gt;     class=0604(PCI_B) buses=0000:[41-41] PCIVendor=&quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation&quot; PCIDevice=&quot;Sandy Bridge IIO PCI Express Root Port
</span><br>
<span class="quotelev2">&gt;&gt;     1a&quot;) &quot;Intel Corporation Sandy Bridge IIO PCI Express Root Port 1a&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           Bridge PCI-&gt;PCI (P#262176 busid=0000:40:02.0 id=8086:3c04
</span><br>
<span class="quotelev2">&gt;&gt;     class=0604(PCI_B) buses=0000:[42-42] PCIVendor=&quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation&quot; PCIDevice=&quot;Sandy Bridge IIO PCI Express Root Port
</span><br>
<span class="quotelev2">&gt;&gt;     2a&quot;) &quot;Intel Corporation Sandy Bridge IIO PCI Express Root Port 2a&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           Bridge PCI-&gt;PCI (P#262178 busid=0000:40:02.2 id=8086:3c06
</span><br>
<span class="quotelev2">&gt;&gt;     class=0604(PCI_B) buses=0000:[43-43] PCIVendor=&quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation&quot; PCIDevice=&quot;Sandy Bridge IIO PCI Express Root Port
</span><br>
<span class="quotelev2">&gt;&gt;     2c&quot;) &quot;Intel Corporation Sandy Bridge IIO PCI Express Root Port 2c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;             PCI 1000:0087 (P#274432 busid=0000:43:00.0
</span><br>
<span class="quotelev2">&gt;&gt;     class=0107(SAS) PCIVendor=&quot;LSI Logic / Symbios Logic&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     PCIDevice=&quot;SAS2308 PCI-Express Fusion-MPT SAS-2&quot;) &quot;LSI Logic /
</span><br>
<span class="quotelev2">&gt;&gt;     Symbios Logic SAS2308 PCI-Express Fusion-MPT SAS-2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               Block L#6 &quot;sdb&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               Block L#7 &quot;sdc&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               Block L#8 &quot;sdd&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               Block L#9 &quot;sde&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               Block L#10 &quot;sdf&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               Block L#11 &quot;sdg&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               Block L#12 &quot;sdh&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               Block L#13 &quot;sdi&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           Bridge PCI-&gt;PCI (P#262192 busid=0000:40:03.0 id=8086:3c08
</span><br>
<span class="quotelev2">&gt;&gt;     class=0604(PCI_B) buses=0000:[44-44] PCIVendor=&quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation&quot; PCIDevice=&quot;Sandy Bridge IIO PCI Express Root Port 3a
</span><br>
<span class="quotelev2">&gt;&gt;     in PCI Express Mode&quot;) &quot;Intel Corporation Sandy Bridge IIO PCI
</span><br>
<span class="quotelev2">&gt;&gt;     Express Root Port 3a in PCI Express Mode&quot;
</span><br>
<span class="quotelev2">&gt;&gt;             PCI 1000:0087 (P#278528 busid=0000:44:00.0
</span><br>
<span class="quotelev2">&gt;&gt;     class=0107(SAS) PCIVendor=&quot;LSI Logic / Symbios Logic&quot;
</span><br>
<span class="quotelev2">&gt;&gt;     PCIDevice=&quot;SAS2308 PCI-Express Fusion-MPT SAS-2&quot;) &quot;LSI Logic /
</span><br>
<span class="quotelev2">&gt;&gt;     Symbios Logic SAS2308 PCI-Express Fusion-MPT SAS-2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               Block L#14 &quot;sdj&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               Block L#15 &quot;sdk&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               Block L#16 &quot;sdl&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               Block L#17 &quot;sdm&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               Block L#18 &quot;sdn&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               Block L#19 &quot;sdo&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               Block L#20 &quot;sdp&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               Block L#21 &quot;sdq&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c28 (P#262224 busid=0000:40:05.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Address
</span><br>
<span class="quotelev2">&gt;&gt;     Map, VTd_Misc, System Management&quot;) &quot;Intel Corporation Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Address Map, VTd_Misc, System Management&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c2a (P#262226 busid=0000:40:05.2 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Control
</span><br>
<span class="quotelev2">&gt;&gt;     Status and Global Errors&quot;) &quot;Intel Corporation Sandy Bridge
</span><br>
<span class="quotelev2">&gt;&gt;     Control Status and Global Errors&quot;
</span><br>
<span class="quotelev2">&gt;&gt;         Bridge Host-&gt;PCI L#22 (P#3 buses=0000:[7f-7f])
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c80 (P#520320 busid=0000:7f:08.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge QPI Link
</span><br>
<span class="quotelev2">&gt;&gt;     0&quot;) &quot;Intel Corporation Sandy Bridge QPI Link 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c90 (P#520336 busid=0000:7f:09.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge QPI Link
</span><br>
<span class="quotelev2">&gt;&gt;     1&quot;) &quot;Intel Corporation Sandy Bridge QPI Link 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cc0 (P#520352 busid=0000:7f:0a.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power
</span><br>
<span class="quotelev2">&gt;&gt;     Control Unit 0&quot;) &quot;Intel Corporation Sandy Bridge Power Control
</span><br>
<span class="quotelev2">&gt;&gt;     Unit 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cc1 (P#520353 busid=0000:7f:0a.1 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power
</span><br>
<span class="quotelev2">&gt;&gt;     Control Unit 1&quot;) &quot;Intel Corporation Sandy Bridge Power Control
</span><br>
<span class="quotelev2">&gt;&gt;     Unit 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cc2 (P#520354 busid=0000:7f:0a.2 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power
</span><br>
<span class="quotelev2">&gt;&gt;     Control Unit 2&quot;) &quot;Intel Corporation Sandy Bridge Power Control
</span><br>
<span class="quotelev2">&gt;&gt;     Unit 2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cd0 (P#520355 busid=0000:7f:0a.3 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power
</span><br>
<span class="quotelev2">&gt;&gt;     Control Unit 3&quot;) &quot;Intel Corporation Sandy Bridge Power Control
</span><br>
<span class="quotelev2">&gt;&gt;     Unit 3&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce0 (P#520368 busid=0000:7f:0b.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Interrupt
</span><br>
<span class="quotelev2">&gt;&gt;     Control Registers&quot;) &quot;Intel Corporation Sandy Bridge Interrupt
</span><br>
<span class="quotelev2">&gt;&gt;     Control Registers&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce3 (P#520371 busid=0000:7f:0b.3 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Semaphore
</span><br>
<span class="quotelev2">&gt;&gt;     and Scratchpad Configuration Registers&quot;) &quot;Intel Corporation Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Semaphore and Scratchpad Configuration Registers&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#520384 busid=0000:7f:0c.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast
</span><br>
<span class="quotelev2">&gt;&gt;     Register 0&quot;) &quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#520385 busid=0000:7f:0c.1 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast
</span><br>
<span class="quotelev2">&gt;&gt;     Register 0&quot;) &quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#520386 busid=0000:7f:0c.2 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast
</span><br>
<span class="quotelev2">&gt;&gt;     Register 0&quot;) &quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#520387 busid=0000:7f:0c.3 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast
</span><br>
<span class="quotelev2">&gt;&gt;     Register 0&quot;) &quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cf4 (P#520390 busid=0000:7f:0c.6 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller System Address Decoder 0&quot;) &quot;Intel Corporation
</span><br>
<span class="quotelev2">&gt;&gt;     Sandy Bridge Integrated Memory Controller System Address Decoder 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cf6 (P#520391 busid=0000:7f:0c.7 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge System
</span><br>
<span class="quotelev2">&gt;&gt;     Address Decoder&quot;) &quot;Intel Corporation Sandy Bridge System Address
</span><br>
<span class="quotelev2">&gt;&gt;     Decoder&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#520400 busid=0000:7f:0d.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast
</span><br>
<span class="quotelev2">&gt;&gt;     Register 0&quot;) &quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#520401 busid=0000:7f:0d.1 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast
</span><br>
<span class="quotelev2">&gt;&gt;     Register 0&quot;) &quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#520402 busid=0000:7f:0d.2 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast
</span><br>
<span class="quotelev2">&gt;&gt;     Register 0&quot;) &quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#520403 busid=0000:7f:0d.3 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast
</span><br>
<span class="quotelev2">&gt;&gt;     Register 0&quot;) &quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cf5 (P#520406 busid=0000:7f:0d.6 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller System Address Decoder 1&quot;) &quot;Intel Corporation
</span><br>
<span class="quotelev2">&gt;&gt;     Sandy Bridge Integrated Memory Controller System Address Decoder 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ca0 (P#520416 busid=0000:7f:0e.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Processor
</span><br>
<span class="quotelev2">&gt;&gt;     Home Agent&quot;) &quot;Intel Corporation Sandy Bridge Processor Home Agent&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c46 (P#520417 busid=0000:7f:0e.1
</span><br>
<span class="quotelev2">&gt;&gt;     class=1101(Signl) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Processor Home Agent Performance Monitoring&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Processor Home Agent Performance Monitoring&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ca8 (P#520432 busid=0000:7f:0f.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Registers&quot;) &quot;Intel Corporation Sandy Bridge
</span><br>
<span class="quotelev2">&gt;&gt;     Integrated Memory Controller Registers&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c71 (P#520433 busid=0000:7f:0f.1 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller RAS Registers&quot;) &quot;Intel Corporation Sandy Bridge
</span><br>
<span class="quotelev2">&gt;&gt;     Integrated Memory Controller RAS Registers&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3caa (P#520434 busid=0000:7f:0f.2 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Target Address Decoder 0&quot;) &quot;Intel Corporation
</span><br>
<span class="quotelev2">&gt;&gt;     Sandy Bridge Integrated Memory Controller Target Address Decoder 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cab (P#520435 busid=0000:7f:0f.3 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Target Address Decoder 1&quot;) &quot;Intel Corporation
</span><br>
<span class="quotelev2">&gt;&gt;     Sandy Bridge Integrated Memory Controller Target Address Decoder 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cac (P#520436 busid=0000:7f:0f.4 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Target Address Decoder 2&quot;) &quot;Intel Corporation
</span><br>
<span class="quotelev2">&gt;&gt;     Sandy Bridge Integrated Memory Controller Target Address Decoder 2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cad (P#520437 busid=0000:7f:0f.5 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Target Address Decoder 3&quot;) &quot;Intel Corporation
</span><br>
<span class="quotelev2">&gt;&gt;     Sandy Bridge Integrated Memory Controller Target Address Decoder 3&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cae (P#520438 busid=0000:7f:0f.6 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Target Address Decoder 4&quot;) &quot;Intel Corporation
</span><br>
<span class="quotelev2">&gt;&gt;     Sandy Bridge Integrated Memory Controller Target Address Decoder 4&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb0 (P#520448 busid=0000:7f:10.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Channel 0-3 Thermal Control 0&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Integrated Memory Controller Channel 0-3
</span><br>
<span class="quotelev2">&gt;&gt;     Thermal Control 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb1 (P#520449 busid=0000:7f:10.1 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Channel 0-3 Thermal Control 1&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Integrated Memory Controller Channel 0-3
</span><br>
<span class="quotelev2">&gt;&gt;     Thermal Control 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb2 (P#520450 busid=0000:7f:10.2 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller ERROR Registers 0&quot;) &quot;Intel Corporation Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller ERROR Registers 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb3 (P#520451 busid=0000:7f:10.3 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller ERROR Registers 1&quot;) &quot;Intel Corporation Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller ERROR Registers 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb4 (P#520452 busid=0000:7f:10.4 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Channel 0-3 Thermal Control 2&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Integrated Memory Controller Channel 0-3
</span><br>
<span class="quotelev2">&gt;&gt;     Thermal Control 2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb5 (P#520453 busid=0000:7f:10.5 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Channel 0-3 Thermal Control 3&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Integrated Memory Controller Channel 0-3
</span><br>
<span class="quotelev2">&gt;&gt;     Thermal Control 3&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb6 (P#520454 busid=0000:7f:10.6 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller ERROR Registers 2&quot;) &quot;Intel Corporation Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller ERROR Registers 2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb7 (P#520455 busid=0000:7f:10.7 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller ERROR Registers 3&quot;) &quot;Intel Corporation Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller ERROR Registers 3&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb8 (P#520464 busid=0000:7f:11.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge DDRIO&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;Intel Corporation Sandy Bridge DDRIO&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce4 (P#520496 busid=0000:7f:13.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge R2PCIe&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;Intel Corporation Sandy Bridge R2PCIe&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c43 (P#520497 busid=0000:7f:13.1
</span><br>
<span class="quotelev2">&gt;&gt;     class=1101(Signl) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Ring to PCI Express Performance Monitor&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Ring to PCI Express Performance Monitor&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce6 (P#520500 busid=0000:7f:13.4
</span><br>
<span class="quotelev2">&gt;&gt;     class=1101(Signl) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge QuickPath Interconnect Agent Ring Registers&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge QuickPath Interconnect Agent Ring Registers&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c44 (P#520501 busid=0000:7f:13.5
</span><br>
<span class="quotelev2">&gt;&gt;     class=1101(Signl) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Ring to QuickPath Interconnect Link 0 Performance
</span><br>
<span class="quotelev2">&gt;&gt;     Monitor&quot;) &quot;Intel Corporation Sandy Bridge Ring to QuickPath
</span><br>
<span class="quotelev2">&gt;&gt;     Interconnect Link 0 Performance Monitor&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c45 (P#520502 busid=0000:7f:13.6 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Ring to
</span><br>
<span class="quotelev2">&gt;&gt;     QuickPath Interconnect Link 1 Performance Monitor&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Ring to QuickPath Interconnect Link 1
</span><br>
<span class="quotelev2">&gt;&gt;     Performance Monitor&quot;
</span><br>
<span class="quotelev2">&gt;&gt;       NUMANode L#2 (P#2 local=134217728KB total=134217728KB)
</span><br>
<span class="quotelev2">&gt;&gt;         Socket L#2 (P#2)
</span><br>
<span class="quotelev2">&gt;&gt;           L3Cache L#2 (size=16384KB linesize=64 ways=16)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#16 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#16 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#16 (P#0)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#32 (P#2)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#33 (P#34)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#17 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#17 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#17 (P#1)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#34 (P#6)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#35 (P#38)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#18 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#18 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#18 (P#2)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#36 (P#10)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#37 (P#42)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#19 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#19 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#19 (P#3)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#38 (P#14)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#39 (P#46)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#20 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#20 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#20 (P#4)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#40 (P#18)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#41 (P#50)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#21 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#21 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#21 (P#5)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#42 (P#22)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#43 (P#54)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#22 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#22 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#22 (P#6)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#44 (P#26)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#45 (P#58)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#23 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#23 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#23 (P#7)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#46 (P#30)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#47 (P#62)
</span><br>
<span class="quotelev2">&gt;&gt;         Bridge Host-&gt;PCI L#23 (P#5 buses=0000:[bf-bf])
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c80 (P#782464 busid=0000:bf:08.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge QPI Link
</span><br>
<span class="quotelev2">&gt;&gt;     0&quot;) &quot;Intel Corporation Sandy Bridge QPI Link 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c90 (P#782480 busid=0000:bf:09.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge QPI Link
</span><br>
<span class="quotelev2">&gt;&gt;     1&quot;) &quot;Intel Corporation Sandy Bridge QPI Link 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cc0 (P#782496 busid=0000:bf:0a.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power
</span><br>
<span class="quotelev2">&gt;&gt;     Control Unit 0&quot;) &quot;Intel Corporation Sandy Bridge Power Control
</span><br>
<span class="quotelev2">&gt;&gt;     Unit 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cc1 (P#782497 busid=0000:bf:0a.1 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power
</span><br>
<span class="quotelev2">&gt;&gt;     Control Unit 1&quot;) &quot;Intel Corporation Sandy Bridge Power Control
</span><br>
<span class="quotelev2">&gt;&gt;     Unit 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cc2 (P#782498 busid=0000:bf:0a.2 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power
</span><br>
<span class="quotelev2">&gt;&gt;     Control Unit 2&quot;) &quot;Intel Corporation Sandy Bridge Power Control
</span><br>
<span class="quotelev2">&gt;&gt;     Unit 2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cd0 (P#782499 busid=0000:bf:0a.3 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power
</span><br>
<span class="quotelev2">&gt;&gt;     Control Unit 3&quot;) &quot;Intel Corporation Sandy Bridge Power Control
</span><br>
<span class="quotelev2">&gt;&gt;     Unit 3&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce0 (P#782512 busid=0000:bf:0b.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Interrupt
</span><br>
<span class="quotelev2">&gt;&gt;     Control Registers&quot;) &quot;Intel Corporation Sandy Bridge Interrupt
</span><br>
<span class="quotelev2">&gt;&gt;     Control Registers&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce3 (P#782515 busid=0000:bf:0b.3 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Semaphore
</span><br>
<span class="quotelev2">&gt;&gt;     and Scratchpad Configuration Registers&quot;) &quot;Intel Corporation Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Semaphore and Scratchpad Configuration Registers&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#782528 busid=0000:bf:0c.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast
</span><br>
<span class="quotelev2">&gt;&gt;     Register 0&quot;) &quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#782529 busid=0000:bf:0c.1 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast
</span><br>
<span class="quotelev2">&gt;&gt;     Register 0&quot;) &quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#782530 busid=0000:bf:0c.2 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast
</span><br>
<span class="quotelev2">&gt;&gt;     Register 0&quot;) &quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#782531 busid=0000:bf:0c.3 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast
</span><br>
<span class="quotelev2">&gt;&gt;     Register 0&quot;) &quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cf4 (P#782534 busid=0000:bf:0c.6 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller System Address Decoder 0&quot;) &quot;Intel Corporation
</span><br>
<span class="quotelev2">&gt;&gt;     Sandy Bridge Integrated Memory Controller System Address Decoder 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cf6 (P#782535 busid=0000:bf:0c.7 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge System
</span><br>
<span class="quotelev2">&gt;&gt;     Address Decoder&quot;) &quot;Intel Corporation Sandy Bridge System Address
</span><br>
<span class="quotelev2">&gt;&gt;     Decoder&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#782544 busid=0000:bf:0d.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast
</span><br>
<span class="quotelev2">&gt;&gt;     Register 0&quot;) &quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#782545 busid=0000:bf:0d.1 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast
</span><br>
<span class="quotelev2">&gt;&gt;     Register 0&quot;) &quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#782546 busid=0000:bf:0d.2 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast
</span><br>
<span class="quotelev2">&gt;&gt;     Register 0&quot;) &quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#782547 busid=0000:bf:0d.3 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast
</span><br>
<span class="quotelev2">&gt;&gt;     Register 0&quot;) &quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cf5 (P#782550 busid=0000:bf:0d.6 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller System Address Decoder 1&quot;) &quot;Intel Corporation
</span><br>
<span class="quotelev2">&gt;&gt;     Sandy Bridge Integrated Memory Controller System Address Decoder 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ca0 (P#782560 busid=0000:bf:0e.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Processor
</span><br>
<span class="quotelev2">&gt;&gt;     Home Agent&quot;) &quot;Intel Corporation Sandy Bridge Processor Home Agent&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c46 (P#782561 busid=0000:bf:0e.1
</span><br>
<span class="quotelev2">&gt;&gt;     class=1101(Signl) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Processor Home Agent Performance Monitoring&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Processor Home Agent Performance Monitoring&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ca8 (P#782576 busid=0000:bf:0f.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Registers&quot;) &quot;Intel Corporation Sandy Bridge
</span><br>
<span class="quotelev2">&gt;&gt;     Integrated Memory Controller Registers&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c71 (P#782577 busid=0000:bf:0f.1 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller RAS Registers&quot;) &quot;Intel Corporation Sandy Bridge
</span><br>
<span class="quotelev2">&gt;&gt;     Integrated Memory Controller RAS Registers&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3caa (P#782578 busid=0000:bf:0f.2 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Target Address Decoder 0&quot;) &quot;Intel Corporation
</span><br>
<span class="quotelev2">&gt;&gt;     Sandy Bridge Integrated Memory Controller Target Address Decoder 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cab (P#782579 busid=0000:bf:0f.3 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Target Address Decoder 1&quot;) &quot;Intel Corporation
</span><br>
<span class="quotelev2">&gt;&gt;     Sandy Bridge Integrated Memory Controller Target Address Decoder 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cac (P#782580 busid=0000:bf:0f.4 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Target Address Decoder 2&quot;) &quot;Intel Corporation
</span><br>
<span class="quotelev2">&gt;&gt;     Sandy Bridge Integrated Memory Controller Target Address Decoder 2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cad (P#782581 busid=0000:bf:0f.5 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Target Address Decoder 3&quot;) &quot;Intel Corporation
</span><br>
<span class="quotelev2">&gt;&gt;     Sandy Bridge Integrated Memory Controller Target Address Decoder 3&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cae (P#782582 busid=0000:bf:0f.6 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Target Address Decoder 4&quot;) &quot;Intel Corporation
</span><br>
<span class="quotelev2">&gt;&gt;     Sandy Bridge Integrated Memory Controller Target Address Decoder 4&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb0 (P#782592 busid=0000:bf:10.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Channel 0-3 Thermal Control 0&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Integrated Memory Controller Channel 0-3
</span><br>
<span class="quotelev2">&gt;&gt;     Thermal Control 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb1 (P#782593 busid=0000:bf:10.1 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Channel 0-3 Thermal Control 1&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Integrated Memory Controller Channel 0-3
</span><br>
<span class="quotelev2">&gt;&gt;     Thermal Control 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb2 (P#782594 busid=0000:bf:10.2 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller ERROR Registers 0&quot;) &quot;Intel Corporation Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller ERROR Registers 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb3 (P#782595 busid=0000:bf:10.3 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller ERROR Registers 1&quot;) &quot;Intel Corporation Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller ERROR Registers 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb4 (P#782596 busid=0000:bf:10.4 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Channel 0-3 Thermal Control 2&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Integrated Memory Controller Channel 0-3
</span><br>
<span class="quotelev2">&gt;&gt;     Thermal Control 2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb5 (P#782597 busid=0000:bf:10.5 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller Channel 0-3 Thermal Control 3&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Integrated Memory Controller Channel 0-3
</span><br>
<span class="quotelev2">&gt;&gt;     Thermal Control 3&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb6 (P#782598 busid=0000:bf:10.6 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller ERROR Registers 2&quot;) &quot;Intel Corporation Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller ERROR Registers 2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb7 (P#782599 busid=0000:bf:10.7 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated
</span><br>
<span class="quotelev2">&gt;&gt;     Memory Controller ERROR Registers 3&quot;) &quot;Intel Corporation Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller ERROR Registers 3&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb8 (P#782608 busid=0000:bf:11.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge DDRIO&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;Intel Corporation Sandy Bridge DDRIO&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce4 (P#782640 busid=0000:bf:13.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge R2PCIe&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;Intel Corporation Sandy Bridge R2PCIe&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c43 (P#782641 busid=0000:bf:13.1
</span><br>
<span class="quotelev2">&gt;&gt;     class=1101(Signl) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Ring to PCI Express Performance Monitor&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Ring to PCI Express Performance Monitor&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce6 (P#782644 busid=0000:bf:13.4
</span><br>
<span class="quotelev2">&gt;&gt;     class=1101(Signl) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge QuickPath Interconnect Agent Ring Registers&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge QuickPath Interconnect Agent Ring Registers&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c44 (P#782645 busid=0000:bf:13.5
</span><br>
<span class="quotelev2">&gt;&gt;     class=1101(Signl) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Ring to QuickPath Interconnect Link 0 Performance
</span><br>
<span class="quotelev2">&gt;&gt;     Monitor&quot;) &quot;Intel Corporation Sandy Bridge Ring to QuickPath
</span><br>
<span class="quotelev2">&gt;&gt;     Interconnect Link 0 Performance Monitor&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c45 (P#782646 busid=0000:bf:13.6 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Ring to
</span><br>
<span class="quotelev2">&gt;&gt;     QuickPath Interconnect Link 1 Performance Monitor&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Ring to QuickPath Interconnect Link 1
</span><br>
<span class="quotelev2">&gt;&gt;     Performance Monitor&quot;
</span><br>
<span class="quotelev2">&gt;&gt;       NUMANode L#3 (P#3 local=134217728KB total=134217728KB)
</span><br>
<span class="quotelev2">&gt;&gt;         Socket L#3 (P#3)
</span><br>
<span class="quotelev2">&gt;&gt;           L3Cache L#3 (size=16384KB linesize=64 ways=16)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#24 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#24 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#24 (P#0)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#48 (P#3)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#49 (P#35)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#25 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#25 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#25 (P#1)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#50 (P#7)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#51 (P#39)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#26 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#26 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#26 (P#2)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#52 (P#11)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#53 (P#43)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#27 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#27 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#27 (P#3)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#54 (P#15)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#55 (P#47)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#28 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#28 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#28 (P#4)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#56 (P#19)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#57 (P#51)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#29 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#29 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#29 (P#5)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#58 (P#23)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#59 (P#55)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#30 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#30 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#30 (P#6)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#60 (P#27)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#61 (P#59)
</span><br>
<span class="quotelev2">&gt;&gt;             L2Cache L#31 (size=256KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;               L1Cache L#31 (size=32KB linesize=64 ways=8)
</span><br>
<span class="quotelev2">&gt;&gt;                 Core L#31 (P#7)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#62 (P#31)
</span><br>
<span class="quotelev2">&gt;&gt;                   PU L#63 (P#63)
</span><br>
<span class="quotelev2">&gt;&gt;         Bridge Host-&gt;PCI L#24 (P#7 buses=0000:[ff-ff])
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c80 (P#1044608 busid=0000:ff:08.0
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge QPI Link 0&quot;) &quot;Intel Corporation Sandy Bridge QPI Link 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c90 (P#1044624 busid=0000:ff:09.0
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge QPI Link 1&quot;) &quot;Intel Corporation Sandy Bridge QPI Link 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cc0 (P#1044640 busid=0000:ff:0a.0
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Power Control Unit 0&quot;) &quot;Intel Corporation Sandy Bridge
</span><br>
<span class="quotelev2">&gt;&gt;     Power Control Unit 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cc1 (P#1044641 busid=0000:ff:0a.1
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Power Control Unit 1&quot;) &quot;Intel Corporation Sandy Bridge
</span><br>
<span class="quotelev2">&gt;&gt;     Power Control Unit 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cc2 (P#1044642 busid=0000:ff:0a.2
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Power Control Unit 2&quot;) &quot;Intel Corporation Sandy Bridge
</span><br>
<span class="quotelev2">&gt;&gt;     Power Control Unit 2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cd0 (P#1044643 busid=0000:ff:0a.3
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Power Control Unit 3&quot;) &quot;Intel Corporation Sandy Bridge
</span><br>
<span class="quotelev2">&gt;&gt;     Power Control Unit 3&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce0 (P#1044656 busid=0000:ff:0b.0
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Interrupt Control Registers&quot;) &quot;Intel Corporation Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Interrupt Control Registers&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce3 (P#1044659 busid=0000:ff:0b.3
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Semaphore and Scratchpad Configuration Registers&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Semaphore and Scratchpad Configuration
</span><br>
<span class="quotelev2">&gt;&gt;     Registers&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#1044672 busid=0000:ff:0c.0
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Unicast Register 0&quot;) &quot;Intel Corporation Sandy Bridge
</span><br>
<span class="quotelev2">&gt;&gt;     Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#1044673 busid=0000:ff:0c.1
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Unicast Register 0&quot;) &quot;Intel Corporation Sandy Bridge
</span><br>
<span class="quotelev2">&gt;&gt;     Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#1044674 busid=0000:ff:0c.2
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Unicast Register 0&quot;) &quot;Intel Corporation Sandy Bridge
</span><br>
<span class="quotelev2">&gt;&gt;     Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#1044675 busid=0000:ff:0c.3
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Unicast Register 0&quot;) &quot;Intel Corporation Sandy Bridge
</span><br>
<span class="quotelev2">&gt;&gt;     Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cf4 (P#1044678 busid=0000:ff:0c.6
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller System Address Decoder 0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;Intel Corporation Sandy Bridge Integrated Memory Controller
</span><br>
<span class="quotelev2">&gt;&gt;     System Address Decoder 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cf6 (P#1044679 busid=0000:ff:0c.7
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge System Address Decoder&quot;) &quot;Intel Corporation Sandy Bridge
</span><br>
<span class="quotelev2">&gt;&gt;     System Address Decoder&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#1044688 busid=0000:ff:0d.0
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Unicast Register 0&quot;) &quot;Intel Corporation Sandy Bridge
</span><br>
<span class="quotelev2">&gt;&gt;     Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#1044689 busid=0000:ff:0d.1
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Unicast Register 0&quot;) &quot;Intel Corporation Sandy Bridge
</span><br>
<span class="quotelev2">&gt;&gt;     Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#1044690 busid=0000:ff:0d.2
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Unicast Register 0&quot;) &quot;Intel Corporation Sandy Bridge
</span><br>
<span class="quotelev2">&gt;&gt;     Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce8 (P#1044691 busid=0000:ff:0d.3
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Unicast Register 0&quot;) &quot;Intel Corporation Sandy Bridge
</span><br>
<span class="quotelev2">&gt;&gt;     Unicast Register 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cf5 (P#1044694 busid=0000:ff:0d.6
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller System Address Decoder 1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;Intel Corporation Sandy Bridge Integrated Memory Controller
</span><br>
<span class="quotelev2">&gt;&gt;     System Address Decoder 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ca0 (P#1044704 busid=0000:ff:0e.0
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Processor Home Agent&quot;) &quot;Intel Corporation Sandy Bridge
</span><br>
<span class="quotelev2">&gt;&gt;     Processor Home Agent&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c46 (P#1044705 busid=0000:ff:0e.1
</span><br>
<span class="quotelev2">&gt;&gt;     class=1101(Signl) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Processor Home Agent Performance Monitoring&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Processor Home Agent Performance Monitoring&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ca8 (P#1044720 busid=0000:ff:0f.0
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller Registers&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Integrated Memory Controller Registers&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c71 (P#1044721 busid=0000:ff:0f.1
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller RAS Registers&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Integrated Memory Controller RAS Registers&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3caa (P#1044722 busid=0000:ff:0f.2
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller Target Address Decoder 0&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;Intel Corporation Sandy Bridge Integrated Memory Controller
</span><br>
<span class="quotelev2">&gt;&gt;     Target Address Decoder 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cab (P#1044723 busid=0000:ff:0f.3
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller Target Address Decoder 1&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;Intel Corporation Sandy Bridge Integrated Memory Controller
</span><br>
<span class="quotelev2">&gt;&gt;     Target Address Decoder 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cac (P#1044724 busid=0000:ff:0f.4
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller Target Address Decoder 2&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;Intel Corporation Sandy Bridge Integrated Memory Controller
</span><br>
<span class="quotelev2">&gt;&gt;     Target Address Decoder 2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cad (P#1044725 busid=0000:ff:0f.5
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller Target Address Decoder 3&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;Intel Corporation Sandy Bridge Integrated Memory Controller
</span><br>
<span class="quotelev2">&gt;&gt;     Target Address Decoder 3&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cae (P#1044726 busid=0000:ff:0f.6
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller Target Address Decoder 4&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;     &quot;Intel Corporation Sandy Bridge Integrated Memory Controller
</span><br>
<span class="quotelev2">&gt;&gt;     Target Address Decoder 4&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb0 (P#1044736 busid=0000:ff:10.0
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller Channel 0-3 Thermal Control
</span><br>
<span class="quotelev2">&gt;&gt;     0&quot;) &quot;Intel Corporation Sandy Bridge Integrated Memory Controller
</span><br>
<span class="quotelev2">&gt;&gt;     Channel 0-3 Thermal Control 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb1 (P#1044737 busid=0000:ff:10.1
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller Channel 0-3 Thermal Control
</span><br>
<span class="quotelev2">&gt;&gt;     1&quot;) &quot;Intel Corporation Sandy Bridge Integrated Memory Controller
</span><br>
<span class="quotelev2">&gt;&gt;     Channel 0-3 Thermal Control 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb2 (P#1044738 busid=0000:ff:10.2
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller ERROR Registers 0&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Integrated Memory Controller ERROR
</span><br>
<span class="quotelev2">&gt;&gt;     Registers 0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb3 (P#1044739 busid=0000:ff:10.3
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller ERROR Registers 1&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Integrated Memory Controller ERROR
</span><br>
<span class="quotelev2">&gt;&gt;     Registers 1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb4 (P#1044740 busid=0000:ff:10.4
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller Channel 0-3 Thermal Control
</span><br>
<span class="quotelev2">&gt;&gt;     2&quot;) &quot;Intel Corporation Sandy Bridge Integrated Memory Controller
</span><br>
<span class="quotelev2">&gt;&gt;     Channel 0-3 Thermal Control 2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb5 (P#1044741 busid=0000:ff:10.5
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller Channel 0-3 Thermal Control
</span><br>
<span class="quotelev2">&gt;&gt;     3&quot;) &quot;Intel Corporation Sandy Bridge Integrated Memory Controller
</span><br>
<span class="quotelev2">&gt;&gt;     Channel 0-3 Thermal Control 3&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb6 (P#1044742 busid=0000:ff:10.6
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller ERROR Registers 2&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Integrated Memory Controller ERROR
</span><br>
<span class="quotelev2">&gt;&gt;     Registers 2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb7 (P#1044743 busid=0000:ff:10.7
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Integrated Memory Controller ERROR Registers 3&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Integrated Memory Controller ERROR
</span><br>
<span class="quotelev2">&gt;&gt;     Registers 3&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3cb8 (P#1044752 busid=0000:ff:11.0
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge DDRIO&quot;) &quot;Intel Corporation Sandy Bridge DDRIO&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce4 (P#1044784 busid=0000:ff:13.0
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge R2PCIe&quot;) &quot;Intel Corporation Sandy Bridge R2PCIe&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c43 (P#1044785 busid=0000:ff:13.1
</span><br>
<span class="quotelev2">&gt;&gt;     class=1101(Signl) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Ring to PCI Express Performance Monitor&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge Ring to PCI Express Performance Monitor&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3ce6 (P#1044788 busid=0000:ff:13.4
</span><br>
<span class="quotelev2">&gt;&gt;     class=1101(Signl) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge QuickPath Interconnect Agent Ring Registers&quot;) &quot;Intel
</span><br>
<span class="quotelev2">&gt;&gt;     Corporation Sandy Bridge QuickPath Interconnect Agent Ring Registers&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c44 (P#1044789 busid=0000:ff:13.5
</span><br>
<span class="quotelev2">&gt;&gt;     class=1101(Signl) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Ring to QuickPath Interconnect Link 0 Performance
</span><br>
<span class="quotelev2">&gt;&gt;     Monitor&quot;) &quot;Intel Corporation Sandy Bridge Ring to QuickPath
</span><br>
<span class="quotelev2">&gt;&gt;     Interconnect Link 0 Performance Monitor&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCI 8086:3c45 (P#1044790 busid=0000:ff:13.6
</span><br>
<span class="quotelev2">&gt;&gt;     class=0880(Syst) PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Ring to QuickPath Interconnect Link 1 Performance
</span><br>
<span class="quotelev2">&gt;&gt;     Monitor&quot;) &quot;Intel Corporation Sandy Bridge Ring to QuickPath
</span><br>
<span class="quotelev2">&gt;&gt;     Interconnect Link 1 Performance Monitor&quot;
</span><br>
<span class="quotelev2">&gt;&gt;       Bridge Host-&gt;PCI L#0 (P#4 buses=0000:[80-80])
</span><br>
<span class="quotelev2">&gt;&gt;         PCI 8086:3c28 (P#524368 busid=0000:80:05.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Address
</span><br>
<span class="quotelev2">&gt;&gt;     Map, VTd_Misc, System Management&quot;) &quot;Intel Corporation Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Address Map, VTd_Misc, System Management&quot;
</span><br>
<span class="quotelev2">&gt;&gt;       Bridge Host-&gt;PCI L#1 (P#6 buses=0000:[c0-c0])
</span><br>
<span class="quotelev2">&gt;&gt;         PCI 8086:3c28 (P#786512 busid=0000:c0:05.0 class=0880(Syst)
</span><br>
<span class="quotelev2">&gt;&gt;     PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Address
</span><br>
<span class="quotelev2">&gt;&gt;     Map, VTd_Misc, System Management&quot;) &quot;Intel Corporation Sandy
</span><br>
<span class="quotelev2">&gt;&gt;     Bridge Address Map, VTd_Misc, System Management&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     hwloc-devel_at_[hidden] &lt;mailto:hwloc-devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3667/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3668.php">Zheng Da: "Re: [hwloc-devel] pci hierarchy"</a>
<li><strong>Previous message:</strong> <a href="3666.php">Zheng Da: "Re: [hwloc-devel] pci hierarchy"</a>
<li><strong>In reply to:</strong> <a href="3666.php">Zheng Da: "Re: [hwloc-devel] pci hierarchy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3668.php">Zheng Da: "Re: [hwloc-devel] pci hierarchy"</a>
<li><strong>Reply:</strong> <a href="3668.php">Zheng Da: "Re: [hwloc-devel] pci hierarchy"</a>
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
