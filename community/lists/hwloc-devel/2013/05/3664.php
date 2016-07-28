<?
$subject_val = "[hwloc-devel] pci hierarchy";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  2 02:58:33 2013" -->
<!-- isoreceived="20130502065833" -->
<!-- sent="Thu, 2 May 2013 02:58:06 -0400" -->
<!-- isosent="20130502065806" -->
<!-- name="Zheng Da" -->
<!-- email="zhengda1936_at_[hidden]" -->
<!-- subject="[hwloc-devel] pci hierarchy" -->
<!-- id="CAFLer81fHDMN+-Je8FjSR-AQ0mG13ks+ODfxtcsdXsoDdaBg8A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] pci hierarchy<br>
<strong>From:</strong> Zheng Da (<em>zhengda1936_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-02 02:58:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3665.php">Brice Goglin: "Re: [hwloc-devel] pci hierarchy"</a>
<li><strong>Previous message:</strong> <a href="3663.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.7 woes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3665.php">Brice Goglin: "Re: [hwloc-devel] pci hierarchy"</a>
<li><strong>Reply:</strong> <a href="3665.php">Brice Goglin: "Re: [hwloc-devel] pci hierarchy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I was recently told about this tool. It's really nice. It shows me so much
<br>
information I previously tried very hard to find out.
<br>
<p>Right now, I try to find out the PCI connectivity in my NUMA machine.
<br>
lstopo shows me that each processor connects to a separate bridge host.
<br>
However, many Intel documents such as &quot;Intel&#174; QuickPath Interconnect
<br>
Architectural Features Supporting Scalable System Architectures&quot; say that
<br>
multiple processors share one I/O hub. I assume the I/O hub in the
<br>
documents is the bridge host. I'm quite confused. Does the PCI topology
<br>
shown by lstopo not represent the real topology in the machine  or the I/O
<br>
hub in the documents is different from the bridge host? I attach the output
<br>
of lstopo in my machine.
<br>
<p>Thanks,
<br>
Da
<br>
<p>$lstopo -v --whole-io
<br>
Machine (P#0 total=536824300KB DMIProductName=&quot;PowerEdge R820&quot;
<br>
DMIProductVersion= DMIBoardVendor=&quot;Dell Inc.&quot; DMIBoardName=04K5X5
<br>
DMIBoardVersion=A04 DMIBoardAssetTag= DMIChassisVendor=&quot;Dell Inc.&quot;
<br>
DMIChassisType=23 DMIChassisVersion= DMIChassisAssetTag=
<br>
DMIBIOSVendor=&quot;Dell Inc.&quot; DMIBIOSVersion=1.1.5 DMIBIOSDate=05/10/2012
<br>
DMISysVendor=&quot;Dell Inc.&quot; Backend=Linux LinuxCgroup=/ OSName=Linux
<br>
OSRelease=3.2.30 OSVersion=&quot;#3 SMP Tue Nov 20 13:06:53 EST 2012&quot;
<br>
HostName=ubuntu Architecture=x86_64)
<br>
&nbsp;&nbsp;NUMANode L#0 (P#0 local=134171116KB total=134171116KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Socket L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3Cache L#0 (size=16384KB linesize=64 ways=16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#0 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#0 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#1 (P#32)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#1 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#1 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#1 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#2 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#3 (P#36)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#2 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#2 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#4 (P#8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#5 (P#40)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#3 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#3 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#3 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#6 (P#12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#7 (P#44)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#4 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#4 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#4 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#8 (P#16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#9 (P#48)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#5 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#5 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#5 (P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#10 (P#20)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#11 (P#52)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#6 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#6 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#6 (P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#12 (P#24)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#13 (P#56)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#7 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#7 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#7 (P#7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#14 (P#28)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#15 (P#60)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bridge Host-&gt;PCI L#2 (P#0 buses=0000:[00-0d])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c00 (P#0 busid=0000:00:00.0 class=0600(Host)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge DMI2&quot;) &quot;Intel
<br>
Corporation Sandy Bridge DMI2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#16 busid=0000:00:01.0 id=8086:3c02
<br>
class=0604(PCI_B) buses=0000:[02-02] PCIVendor=&quot;Intel Corporation&quot;
<br>
PCIDevice=&quot;Sandy Bridge IIO PCI Express Root Port 1a&quot;) &quot;Intel Corporation
<br>
Sandy Bridge IIO PCI Express Root Port 1a&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 14e4:165f (P#8192 busid=0000:02:00.0 class=0200(Ether)
<br>
PCIVendor=&quot;Broadcom Corporation&quot; PCIDevice=&quot;NetXtreme BCM5720 Gigabit
<br>
Ethernet PCIe&quot;) &quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet
<br>
PCIe&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#0 (Address=e0:db:55:07:f3:de) &quot;eth2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 14e4:165f (P#8193 busid=0000:02:00.1 class=0200(Ether)
<br>
PCIVendor=&quot;Broadcom Corporation&quot; PCIDevice=&quot;NetXtreme BCM5720 Gigabit
<br>
Ethernet PCIe&quot;) &quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet
<br>
PCIe&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#1 (Address=e0:db:55:07:f3:df) &quot;eth3&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#17 busid=0000:00:01.1 id=8086:3c03
<br>
class=0604(PCI_B) buses=0000:[01-01] PCIVendor=&quot;Intel Corporation&quot;
<br>
PCIDevice=&quot;Sandy Bridge IIO PCI Express Root Port 1b&quot;) &quot;Intel Corporation
<br>
Sandy Bridge IIO PCI Express Root Port 1b&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 14e4:165f (P#4096 busid=0000:01:00.0 class=0200(Ether)
<br>
PCIVendor=&quot;Broadcom Corporation&quot; PCIDevice=&quot;NetXtreme BCM5720 Gigabit
<br>
Ethernet PCIe&quot;) &quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet
<br>
PCIe&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#2 (Address=e0:db:55:07:f3:dc) &quot;eth0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 14e4:165f (P#4097 busid=0000:01:00.1 class=0200(Ether)
<br>
PCIVendor=&quot;Broadcom Corporation&quot; PCIDevice=&quot;NetXtreme BCM5720 Gigabit
<br>
Ethernet PCIe&quot;) &quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet
<br>
PCIe&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#3 (Address=e0:db:55:07:f3:dd) &quot;eth1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#32 busid=0000:00:02.0 id=8086:3c04
<br>
class=0604(PCI_B) buses=0000:[03-03] PCIVendor=&quot;Intel Corporation&quot;
<br>
PCIDevice=&quot;Sandy Bridge IIO PCI Express Root Port 2a&quot;) &quot;Intel Corporation
<br>
Sandy Bridge IIO PCI Express Root Port 2a&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 1000:005b (P#12288 busid=0000:03:00.0 class=0104(RAID)
<br>
PCIVendor=&quot;LSI Logic / Symbios Logic&quot; PCIDevice=&quot;MegaRAID SAS 2208
<br>
[Thunderbolt]&quot;) &quot;LSI Logic / Symbios Logic MegaRAID SAS 2208 [Thunderbolt]&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#4 &quot;sda&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#34 busid=0000:00:02.2 id=8086:3c06
<br>
class=0604(PCI_B) buses=0000:[04-04] PCIVendor=&quot;Intel Corporation&quot;
<br>
PCIDevice=&quot;Sandy Bridge IIO PCI Express Root Port 2c&quot;) &quot;Intel Corporation
<br>
Sandy Bridge IIO PCI Express Root Port 2c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#48 busid=0000:00:03.0 id=8086:3c08
<br>
class=0604(PCI_B) buses=0000:[05-05] PCIVendor=&quot;Intel Corporation&quot;
<br>
PCIDevice=&quot;Sandy Bridge IIO PCI Express Root Port 3a in PCI Express Mode&quot;)
<br>
&quot;Intel Corporation Sandy Bridge IIO PCI Express Root Port 3a in PCI Express
<br>
Mode&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 1000:0087 (P#20480 busid=0000:05:00.0 class=0107(SAS)
<br>
PCIVendor=&quot;LSI Logic / Symbios Logic&quot; PCIDevice=&quot;SAS2308 PCI-Express
<br>
Fusion-MPT SAS-2&quot;) &quot;LSI Logic / Symbios Logic SAS2308 PCI-Express
<br>
Fusion-MPT SAS-2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c28 (P#80 busid=0000:00:05.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Address Map,
<br>
VTd_Misc, System Management&quot;) &quot;Intel Corporation Sandy Bridge Address Map,
<br>
VTd_Misc, System Management&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c2a (P#82 busid=0000:00:05.2 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Control Status and
<br>
Global Errors&quot;) &quot;Intel Corporation Sandy Bridge Control Status and Global
<br>
Errors&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#272 busid=0000:00:11.0 id=8086:1d3e
<br>
class=0604(PCI_B) buses=0000:[06-06] PCIVendor=&quot;Intel Corporation&quot;
<br>
PCIDevice=&quot;Patsburg PCI Express Virtual Root Port&quot;) &quot;Intel Corporation
<br>
Patsburg PCI Express Virtual Root Port&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:1d3a (P#352 busid=0000:00:16.0 class=0780(Comm)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;X79 series chipset HECI Controller
<br>
#2&quot;) &quot;Intel Corporation X79 series chipset HECI Controller #2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:1d3b (P#353 busid=0000:00:16.1 class=0780(Comm)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;X79 series chipset IDE-r
<br>
Controller&quot;) &quot;Intel Corporation X79 series chipset IDE-r Controller&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:1d2d (P#416 busid=0000:00:1a.0 class=0c03(USB)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;X79 series chipset USB2 Enhanced
<br>
Host Controller #2&quot;) &quot;Intel Corporation X79 series chipset USB2 Enhanced
<br>
Host Controller #2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#448 busid=0000:00:1c.0 id=8086:1d10
<br>
class=0604(PCI_B) buses=0000:[07-07] PCIVendor=&quot;Intel Corporation&quot;
<br>
PCIDevice=&quot;X79 series chipset PCI Express Root Port 1&quot;) &quot;Intel Corporation
<br>
X79 series chipset PCI Express Root Port 1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#455 busid=0000:00:1c.7 id=8086:1d1e
<br>
class=0604(PCI_B) buses=0000:[08-0c] PCIVendor=&quot;Intel Corporation&quot;
<br>
PCIDevice=&quot;X79 series chipset PCI Express Root Port 8&quot;) &quot;Intel Corporation
<br>
X79 series chipset PCI Express Root Port 8&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#32768 busid=0000:08:00.0 id=1912:0013
<br>
class=0604(PCI_B) buses=0000:[09-0c] PCIVendor=&quot;Renesas Technology Corp.&quot;
<br>
PCIDevice=&quot;SH7757 PCIe Switch [PS]&quot;) &quot;Renesas Technology Corp. SH7757 PCIe
<br>
Switch [PS]&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#36864 busid=0000:09:00.0 id=1912:0013
<br>
class=0604(PCI_B) buses=0000:[0a-0b] PCIVendor=&quot;Renesas Technology Corp.&quot;
<br>
PCIDevice=&quot;SH7757 PCIe Switch [PS]&quot;) &quot;Renesas Technology Corp. SH7757 PCIe
<br>
Switch [PS]&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#40960 busid=0000:0a:00.0 id=1912:0012
<br>
class=0604(PCI_B) buses=0000:[0b-0b] PCIVendor=&quot;Renesas Technology Corp.&quot;
<br>
PCIDevice=&quot;SH7757 PCIe-PCI Bridge [PPB]&quot;) &quot;Renesas Technology Corp. SH7757
<br>
PCIe-PCI Bridge [PPB]&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 102b:0534 (P#45056 busid=0000:0b:00.0 class=0300(VGA)
<br>
PCIVendor=&quot;Matrox Graphics, Inc.&quot; PCIDevice=G200eR2) &quot;Matrox Graphics, Inc.
<br>
G200eR2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#36880 busid=0000:09:01.0 id=1912:0013
<br>
class=0604(PCI_B) buses=0000:[0c-0c] PCIVendor=&quot;Renesas Technology Corp.&quot;
<br>
PCIDevice=&quot;SH7757 PCIe Switch [PS]&quot;) &quot;Renesas Technology Corp. SH7757 PCIe
<br>
Switch [PS]&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:1d26 (P#464 busid=0000:00:1d.0 class=0c03(USB)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;X79 series chipset USB2 Enhanced
<br>
Host Controller #1&quot;) &quot;Intel Corporation X79 series chipset USB2 Enhanced
<br>
Host Controller #1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#480 busid=0000:00:1e.0 id=8086:244e
<br>
class=0604(PCI_B) buses=0000:[0d-0d] PCIVendor=&quot;Intel Corporation&quot;
<br>
PCIDevice=&quot;82801 PCI Bridge&quot;) &quot;Intel Corporation 82801 PCI Bridge&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:1d41 (P#496 busid=0000:00:1f.0 class=0601(ISA)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;X79 series chipset LPC
<br>
Controller&quot;) &quot;Intel Corporation X79 series chipset LPC Controller&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:1d02 (P#498 busid=0000:00:1f.2 class=0106(SATA)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;X79 series chipset 6-Port SATA
<br>
AHCI Controller&quot;) &quot;Intel Corporation X79 series chipset 6-Port SATA AHCI
<br>
Controller&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#5 &quot;sr0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bridge Host-&gt;PCI L#16 (P#1 buses=0000:[3f-3f])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c80 (P#258176 busid=0000:3f:08.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge QPI Link 0&quot;) &quot;Intel
<br>
Corporation Sandy Bridge QPI Link 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c90 (P#258192 busid=0000:3f:09.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge QPI Link 1&quot;) &quot;Intel
<br>
Corporation Sandy Bridge QPI Link 1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cc0 (P#258208 busid=0000:3f:0a.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power Control Unit
<br>
0&quot;) &quot;Intel Corporation Sandy Bridge Power Control Unit 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cc1 (P#258209 busid=0000:3f:0a.1 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power Control Unit
<br>
1&quot;) &quot;Intel Corporation Sandy Bridge Power Control Unit 1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cc2 (P#258210 busid=0000:3f:0a.2 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power Control Unit
<br>
2&quot;) &quot;Intel Corporation Sandy Bridge Power Control Unit 2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cd0 (P#258211 busid=0000:3f:0a.3 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power Control Unit
<br>
3&quot;) &quot;Intel Corporation Sandy Bridge Power Control Unit 3&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce0 (P#258224 busid=0000:3f:0b.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Interrupt Control
<br>
Registers&quot;) &quot;Intel Corporation Sandy Bridge Interrupt Control Registers&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce3 (P#258227 busid=0000:3f:0b.3 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Semaphore and
<br>
Scratchpad Configuration Registers&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Semaphore and Scratchpad Configuration Registers&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#258240 busid=0000:3f:0c.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#258241 busid=0000:3f:0c.1 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#258242 busid=0000:3f:0c.2 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#258243 busid=0000:3f:0c.3 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cf4 (P#258246 busid=0000:3f:0c.6 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller System Address Decoder 0&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller System Address Decoder 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cf6 (P#258247 busid=0000:3f:0c.7 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge System Address
<br>
Decoder&quot;) &quot;Intel Corporation Sandy Bridge System Address Decoder&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#258256 busid=0000:3f:0d.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#258257 busid=0000:3f:0d.1 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#258258 busid=0000:3f:0d.2 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#258259 busid=0000:3f:0d.3 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cf5 (P#258262 busid=0000:3f:0d.6 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller System Address Decoder 1&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller System Address Decoder 1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ca0 (P#258272 busid=0000:3f:0e.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Processor Home
<br>
Agent&quot;) &quot;Intel Corporation Sandy Bridge Processor Home Agent&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c46 (P#258273 busid=0000:3f:0e.1 class=1101(Signl)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Processor Home Agent
<br>
Performance Monitoring&quot;) &quot;Intel Corporation Sandy Bridge Processor Home
<br>
Agent Performance Monitoring&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ca8 (P#258288 busid=0000:3f:0f.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Registers&quot;) &quot;Intel Corporation Sandy Bridge Integrated Memory
<br>
Controller Registers&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c71 (P#258289 busid=0000:3f:0f.1 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller RAS Registers&quot;) &quot;Intel Corporation Sandy Bridge Integrated
<br>
Memory Controller RAS Registers&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3caa (P#258290 busid=0000:3f:0f.2 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Target Address Decoder 0&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Target Address Decoder 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cab (P#258291 busid=0000:3f:0f.3 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Target Address Decoder 1&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Target Address Decoder 1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cac (P#258292 busid=0000:3f:0f.4 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Target Address Decoder 2&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Target Address Decoder 2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cad (P#258293 busid=0000:3f:0f.5 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Target Address Decoder 3&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Target Address Decoder 3&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cae (P#258294 busid=0000:3f:0f.6 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Target Address Decoder 4&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Target Address Decoder 4&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb0 (P#258304 busid=0000:3f:10.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Channel 0-3 Thermal Control 0&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Channel 0-3 Thermal Control 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb1 (P#258305 busid=0000:3f:10.1 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Channel 0-3 Thermal Control 1&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Channel 0-3 Thermal Control 1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb2 (P#258306 busid=0000:3f:10.2 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller ERROR Registers 0&quot;) &quot;Intel Corporation Sandy Bridge Integrated
<br>
Memory Controller ERROR Registers 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb3 (P#258307 busid=0000:3f:10.3 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller ERROR Registers 1&quot;) &quot;Intel Corporation Sandy Bridge Integrated
<br>
Memory Controller ERROR Registers 1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb4 (P#258308 busid=0000:3f:10.4 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Channel 0-3 Thermal Control 2&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Channel 0-3 Thermal Control 2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb5 (P#258309 busid=0000:3f:10.5 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Channel 0-3 Thermal Control 3&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Channel 0-3 Thermal Control 3&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb6 (P#258310 busid=0000:3f:10.6 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller ERROR Registers 2&quot;) &quot;Intel Corporation Sandy Bridge Integrated
<br>
Memory Controller ERROR Registers 2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb7 (P#258311 busid=0000:3f:10.7 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller ERROR Registers 3&quot;) &quot;Intel Corporation Sandy Bridge Integrated
<br>
Memory Controller ERROR Registers 3&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb8 (P#258320 busid=0000:3f:11.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge DDRIO&quot;) &quot;Intel
<br>
Corporation Sandy Bridge DDRIO&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce4 (P#258352 busid=0000:3f:13.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge R2PCIe&quot;) &quot;Intel
<br>
Corporation Sandy Bridge R2PCIe&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c43 (P#258353 busid=0000:3f:13.1 class=1101(Signl)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Ring to PCI Express
<br>
Performance Monitor&quot;) &quot;Intel Corporation Sandy Bridge Ring to PCI Express
<br>
Performance Monitor&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce6 (P#258356 busid=0000:3f:13.4 class=1101(Signl)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge QuickPath
<br>
Interconnect Agent Ring Registers&quot;) &quot;Intel Corporation Sandy Bridge
<br>
QuickPath Interconnect Agent Ring Registers&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c44 (P#258357 busid=0000:3f:13.5 class=1101(Signl)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Ring to QuickPath
<br>
Interconnect Link 0 Performance Monitor&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Ring to QuickPath Interconnect Link 0 Performance Monitor&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c45 (P#258358 busid=0000:3f:13.6 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Ring to QuickPath
<br>
Interconnect Link 1 Performance Monitor&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Ring to QuickPath Interconnect Link 1 Performance Monitor&quot;
<br>
&nbsp;&nbsp;NUMANode L#1 (P#1 local=134217728KB total=134217728KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Socket L#1 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3Cache L#1 (size=16384KB linesize=64 ways=16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#8 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#8 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#8 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#16 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#17 (P#33)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#9 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#9 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#9 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#18 (P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#19 (P#37)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#10 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#10 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#10 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#20 (P#9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#21 (P#41)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#11 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#11 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#11 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#22 (P#13)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#23 (P#45)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#12 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#12 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#12 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#24 (P#17)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#25 (P#49)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#13 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#13 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#13 (P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#26 (P#21)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#27 (P#53)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#14 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#14 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#14 (P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#28 (P#25)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#29 (P#57)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#15 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#15 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#15 (P#7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#30 (P#29)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#31 (P#61)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bridge Host-&gt;PCI L#17 (P#2 buses=0000:[40-44])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#262160 busid=0000:40:01.0 id=8086:3c02
<br>
class=0604(PCI_B) buses=0000:[41-41] PCIVendor=&quot;Intel Corporation&quot;
<br>
PCIDevice=&quot;Sandy Bridge IIO PCI Express Root Port 1a&quot;) &quot;Intel Corporation
<br>
Sandy Bridge IIO PCI Express Root Port 1a&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#262176 busid=0000:40:02.0 id=8086:3c04
<br>
class=0604(PCI_B) buses=0000:[42-42] PCIVendor=&quot;Intel Corporation&quot;
<br>
PCIDevice=&quot;Sandy Bridge IIO PCI Express Root Port 2a&quot;) &quot;Intel Corporation
<br>
Sandy Bridge IIO PCI Express Root Port 2a&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#262178 busid=0000:40:02.2 id=8086:3c06
<br>
class=0604(PCI_B) buses=0000:[43-43] PCIVendor=&quot;Intel Corporation&quot;
<br>
PCIDevice=&quot;Sandy Bridge IIO PCI Express Root Port 2c&quot;) &quot;Intel Corporation
<br>
Sandy Bridge IIO PCI Express Root Port 2c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 1000:0087 (P#274432 busid=0000:43:00.0 class=0107(SAS)
<br>
PCIVendor=&quot;LSI Logic / Symbios Logic&quot; PCIDevice=&quot;SAS2308 PCI-Express
<br>
Fusion-MPT SAS-2&quot;) &quot;LSI Logic / Symbios Logic SAS2308 PCI-Express
<br>
Fusion-MPT SAS-2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#6 &quot;sdb&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#7 &quot;sdc&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#8 &quot;sdd&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#9 &quot;sde&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#10 &quot;sdf&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#11 &quot;sdg&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#12 &quot;sdh&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#13 &quot;sdi&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#262192 busid=0000:40:03.0 id=8086:3c08
<br>
class=0604(PCI_B) buses=0000:[44-44] PCIVendor=&quot;Intel Corporation&quot;
<br>
PCIDevice=&quot;Sandy Bridge IIO PCI Express Root Port 3a in PCI Express Mode&quot;)
<br>
&quot;Intel Corporation Sandy Bridge IIO PCI Express Root Port 3a in PCI Express
<br>
Mode&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 1000:0087 (P#278528 busid=0000:44:00.0 class=0107(SAS)
<br>
PCIVendor=&quot;LSI Logic / Symbios Logic&quot; PCIDevice=&quot;SAS2308 PCI-Express
<br>
Fusion-MPT SAS-2&quot;) &quot;LSI Logic / Symbios Logic SAS2308 PCI-Express
<br>
Fusion-MPT SAS-2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#14 &quot;sdj&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#15 &quot;sdk&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#16 &quot;sdl&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#17 &quot;sdm&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#18 &quot;sdn&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#19 &quot;sdo&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#20 &quot;sdp&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#21 &quot;sdq&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c28 (P#262224 busid=0000:40:05.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Address Map,
<br>
VTd_Misc, System Management&quot;) &quot;Intel Corporation Sandy Bridge Address Map,
<br>
VTd_Misc, System Management&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c2a (P#262226 busid=0000:40:05.2 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Control Status and
<br>
Global Errors&quot;) &quot;Intel Corporation Sandy Bridge Control Status and Global
<br>
Errors&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bridge Host-&gt;PCI L#22 (P#3 buses=0000:[7f-7f])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c80 (P#520320 busid=0000:7f:08.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge QPI Link 0&quot;) &quot;Intel
<br>
Corporation Sandy Bridge QPI Link 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c90 (P#520336 busid=0000:7f:09.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge QPI Link 1&quot;) &quot;Intel
<br>
Corporation Sandy Bridge QPI Link 1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cc0 (P#520352 busid=0000:7f:0a.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power Control Unit
<br>
0&quot;) &quot;Intel Corporation Sandy Bridge Power Control Unit 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cc1 (P#520353 busid=0000:7f:0a.1 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power Control Unit
<br>
1&quot;) &quot;Intel Corporation Sandy Bridge Power Control Unit 1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cc2 (P#520354 busid=0000:7f:0a.2 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power Control Unit
<br>
2&quot;) &quot;Intel Corporation Sandy Bridge Power Control Unit 2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cd0 (P#520355 busid=0000:7f:0a.3 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power Control Unit
<br>
3&quot;) &quot;Intel Corporation Sandy Bridge Power Control Unit 3&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce0 (P#520368 busid=0000:7f:0b.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Interrupt Control
<br>
Registers&quot;) &quot;Intel Corporation Sandy Bridge Interrupt Control Registers&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce3 (P#520371 busid=0000:7f:0b.3 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Semaphore and
<br>
Scratchpad Configuration Registers&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Semaphore and Scratchpad Configuration Registers&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#520384 busid=0000:7f:0c.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#520385 busid=0000:7f:0c.1 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#520386 busid=0000:7f:0c.2 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#520387 busid=0000:7f:0c.3 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cf4 (P#520390 busid=0000:7f:0c.6 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller System Address Decoder 0&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller System Address Decoder 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cf6 (P#520391 busid=0000:7f:0c.7 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge System Address
<br>
Decoder&quot;) &quot;Intel Corporation Sandy Bridge System Address Decoder&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#520400 busid=0000:7f:0d.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#520401 busid=0000:7f:0d.1 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#520402 busid=0000:7f:0d.2 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#520403 busid=0000:7f:0d.3 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cf5 (P#520406 busid=0000:7f:0d.6 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller System Address Decoder 1&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller System Address Decoder 1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ca0 (P#520416 busid=0000:7f:0e.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Processor Home
<br>
Agent&quot;) &quot;Intel Corporation Sandy Bridge Processor Home Agent&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c46 (P#520417 busid=0000:7f:0e.1 class=1101(Signl)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Processor Home Agent
<br>
Performance Monitoring&quot;) &quot;Intel Corporation Sandy Bridge Processor Home
<br>
Agent Performance Monitoring&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ca8 (P#520432 busid=0000:7f:0f.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Registers&quot;) &quot;Intel Corporation Sandy Bridge Integrated Memory
<br>
Controller Registers&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c71 (P#520433 busid=0000:7f:0f.1 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller RAS Registers&quot;) &quot;Intel Corporation Sandy Bridge Integrated
<br>
Memory Controller RAS Registers&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3caa (P#520434 busid=0000:7f:0f.2 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Target Address Decoder 0&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Target Address Decoder 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cab (P#520435 busid=0000:7f:0f.3 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Target Address Decoder 1&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Target Address Decoder 1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cac (P#520436 busid=0000:7f:0f.4 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Target Address Decoder 2&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Target Address Decoder 2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cad (P#520437 busid=0000:7f:0f.5 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Target Address Decoder 3&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Target Address Decoder 3&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cae (P#520438 busid=0000:7f:0f.6 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Target Address Decoder 4&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Target Address Decoder 4&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb0 (P#520448 busid=0000:7f:10.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Channel 0-3 Thermal Control 0&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Channel 0-3 Thermal Control 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb1 (P#520449 busid=0000:7f:10.1 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Channel 0-3 Thermal Control 1&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Channel 0-3 Thermal Control 1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb2 (P#520450 busid=0000:7f:10.2 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller ERROR Registers 0&quot;) &quot;Intel Corporation Sandy Bridge Integrated
<br>
Memory Controller ERROR Registers 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb3 (P#520451 busid=0000:7f:10.3 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller ERROR Registers 1&quot;) &quot;Intel Corporation Sandy Bridge Integrated
<br>
Memory Controller ERROR Registers 1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb4 (P#520452 busid=0000:7f:10.4 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Channel 0-3 Thermal Control 2&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Channel 0-3 Thermal Control 2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb5 (P#520453 busid=0000:7f:10.5 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Channel 0-3 Thermal Control 3&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Channel 0-3 Thermal Control 3&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb6 (P#520454 busid=0000:7f:10.6 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller ERROR Registers 2&quot;) &quot;Intel Corporation Sandy Bridge Integrated
<br>
Memory Controller ERROR Registers 2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb7 (P#520455 busid=0000:7f:10.7 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller ERROR Registers 3&quot;) &quot;Intel Corporation Sandy Bridge Integrated
<br>
Memory Controller ERROR Registers 3&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb8 (P#520464 busid=0000:7f:11.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge DDRIO&quot;) &quot;Intel
<br>
Corporation Sandy Bridge DDRIO&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce4 (P#520496 busid=0000:7f:13.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge R2PCIe&quot;) &quot;Intel
<br>
Corporation Sandy Bridge R2PCIe&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c43 (P#520497 busid=0000:7f:13.1 class=1101(Signl)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Ring to PCI Express
<br>
Performance Monitor&quot;) &quot;Intel Corporation Sandy Bridge Ring to PCI Express
<br>
Performance Monitor&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce6 (P#520500 busid=0000:7f:13.4 class=1101(Signl)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge QuickPath
<br>
Interconnect Agent Ring Registers&quot;) &quot;Intel Corporation Sandy Bridge
<br>
QuickPath Interconnect Agent Ring Registers&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c44 (P#520501 busid=0000:7f:13.5 class=1101(Signl)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Ring to QuickPath
<br>
Interconnect Link 0 Performance Monitor&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Ring to QuickPath Interconnect Link 0 Performance Monitor&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c45 (P#520502 busid=0000:7f:13.6 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Ring to QuickPath
<br>
Interconnect Link 1 Performance Monitor&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Ring to QuickPath Interconnect Link 1 Performance Monitor&quot;
<br>
&nbsp;&nbsp;NUMANode L#2 (P#2 local=134217728KB total=134217728KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Socket L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3Cache L#2 (size=16384KB linesize=64 ways=16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#16 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#16 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#16 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#32 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#33 (P#34)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#17 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#17 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#17 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#34 (P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#35 (P#38)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#18 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#18 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#18 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#36 (P#10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#37 (P#42)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#19 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#19 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#19 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#38 (P#14)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#39 (P#46)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#20 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#20 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#20 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#40 (P#18)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#41 (P#50)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#21 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#21 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#21 (P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#42 (P#22)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#43 (P#54)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#22 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#22 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#22 (P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#44 (P#26)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#45 (P#58)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#23 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#23 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#23 (P#7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#46 (P#30)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#47 (P#62)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bridge Host-&gt;PCI L#23 (P#5 buses=0000:[bf-bf])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c80 (P#782464 busid=0000:bf:08.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge QPI Link 0&quot;) &quot;Intel
<br>
Corporation Sandy Bridge QPI Link 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c90 (P#782480 busid=0000:bf:09.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge QPI Link 1&quot;) &quot;Intel
<br>
Corporation Sandy Bridge QPI Link 1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cc0 (P#782496 busid=0000:bf:0a.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power Control Unit
<br>
0&quot;) &quot;Intel Corporation Sandy Bridge Power Control Unit 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cc1 (P#782497 busid=0000:bf:0a.1 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power Control Unit
<br>
1&quot;) &quot;Intel Corporation Sandy Bridge Power Control Unit 1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cc2 (P#782498 busid=0000:bf:0a.2 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power Control Unit
<br>
2&quot;) &quot;Intel Corporation Sandy Bridge Power Control Unit 2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cd0 (P#782499 busid=0000:bf:0a.3 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power Control Unit
<br>
3&quot;) &quot;Intel Corporation Sandy Bridge Power Control Unit 3&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce0 (P#782512 busid=0000:bf:0b.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Interrupt Control
<br>
Registers&quot;) &quot;Intel Corporation Sandy Bridge Interrupt Control Registers&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce3 (P#782515 busid=0000:bf:0b.3 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Semaphore and
<br>
Scratchpad Configuration Registers&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Semaphore and Scratchpad Configuration Registers&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#782528 busid=0000:bf:0c.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#782529 busid=0000:bf:0c.1 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#782530 busid=0000:bf:0c.2 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#782531 busid=0000:bf:0c.3 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cf4 (P#782534 busid=0000:bf:0c.6 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller System Address Decoder 0&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller System Address Decoder 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cf6 (P#782535 busid=0000:bf:0c.7 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge System Address
<br>
Decoder&quot;) &quot;Intel Corporation Sandy Bridge System Address Decoder&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#782544 busid=0000:bf:0d.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#782545 busid=0000:bf:0d.1 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#782546 busid=0000:bf:0d.2 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#782547 busid=0000:bf:0d.3 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cf5 (P#782550 busid=0000:bf:0d.6 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller System Address Decoder 1&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller System Address Decoder 1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ca0 (P#782560 busid=0000:bf:0e.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Processor Home
<br>
Agent&quot;) &quot;Intel Corporation Sandy Bridge Processor Home Agent&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c46 (P#782561 busid=0000:bf:0e.1 class=1101(Signl)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Processor Home Agent
<br>
Performance Monitoring&quot;) &quot;Intel Corporation Sandy Bridge Processor Home
<br>
Agent Performance Monitoring&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ca8 (P#782576 busid=0000:bf:0f.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Registers&quot;) &quot;Intel Corporation Sandy Bridge Integrated Memory
<br>
Controller Registers&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c71 (P#782577 busid=0000:bf:0f.1 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller RAS Registers&quot;) &quot;Intel Corporation Sandy Bridge Integrated
<br>
Memory Controller RAS Registers&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3caa (P#782578 busid=0000:bf:0f.2 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Target Address Decoder 0&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Target Address Decoder 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cab (P#782579 busid=0000:bf:0f.3 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Target Address Decoder 1&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Target Address Decoder 1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cac (P#782580 busid=0000:bf:0f.4 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Target Address Decoder 2&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Target Address Decoder 2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cad (P#782581 busid=0000:bf:0f.5 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Target Address Decoder 3&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Target Address Decoder 3&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cae (P#782582 busid=0000:bf:0f.6 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Target Address Decoder 4&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Target Address Decoder 4&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb0 (P#782592 busid=0000:bf:10.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Channel 0-3 Thermal Control 0&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Channel 0-3 Thermal Control 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb1 (P#782593 busid=0000:bf:10.1 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Channel 0-3 Thermal Control 1&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Channel 0-3 Thermal Control 1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb2 (P#782594 busid=0000:bf:10.2 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller ERROR Registers 0&quot;) &quot;Intel Corporation Sandy Bridge Integrated
<br>
Memory Controller ERROR Registers 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb3 (P#782595 busid=0000:bf:10.3 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller ERROR Registers 1&quot;) &quot;Intel Corporation Sandy Bridge Integrated
<br>
Memory Controller ERROR Registers 1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb4 (P#782596 busid=0000:bf:10.4 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Channel 0-3 Thermal Control 2&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Channel 0-3 Thermal Control 2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb5 (P#782597 busid=0000:bf:10.5 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Channel 0-3 Thermal Control 3&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Channel 0-3 Thermal Control 3&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb6 (P#782598 busid=0000:bf:10.6 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller ERROR Registers 2&quot;) &quot;Intel Corporation Sandy Bridge Integrated
<br>
Memory Controller ERROR Registers 2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb7 (P#782599 busid=0000:bf:10.7 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller ERROR Registers 3&quot;) &quot;Intel Corporation Sandy Bridge Integrated
<br>
Memory Controller ERROR Registers 3&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb8 (P#782608 busid=0000:bf:11.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge DDRIO&quot;) &quot;Intel
<br>
Corporation Sandy Bridge DDRIO&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce4 (P#782640 busid=0000:bf:13.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge R2PCIe&quot;) &quot;Intel
<br>
Corporation Sandy Bridge R2PCIe&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c43 (P#782641 busid=0000:bf:13.1 class=1101(Signl)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Ring to PCI Express
<br>
Performance Monitor&quot;) &quot;Intel Corporation Sandy Bridge Ring to PCI Express
<br>
Performance Monitor&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce6 (P#782644 busid=0000:bf:13.4 class=1101(Signl)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge QuickPath
<br>
Interconnect Agent Ring Registers&quot;) &quot;Intel Corporation Sandy Bridge
<br>
QuickPath Interconnect Agent Ring Registers&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c44 (P#782645 busid=0000:bf:13.5 class=1101(Signl)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Ring to QuickPath
<br>
Interconnect Link 0 Performance Monitor&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Ring to QuickPath Interconnect Link 0 Performance Monitor&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c45 (P#782646 busid=0000:bf:13.6 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Ring to QuickPath
<br>
Interconnect Link 1 Performance Monitor&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Ring to QuickPath Interconnect Link 1 Performance Monitor&quot;
<br>
&nbsp;&nbsp;NUMANode L#3 (P#3 local=134217728KB total=134217728KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Socket L#3 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3Cache L#3 (size=16384KB linesize=64 ways=16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#24 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#24 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#24 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#48 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#49 (P#35)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#25 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#25 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#25 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#50 (P#7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#51 (P#39)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#26 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#26 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#26 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#52 (P#11)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#53 (P#43)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#27 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#27 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#27 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#54 (P#15)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#55 (P#47)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#28 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#28 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#28 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#56 (P#19)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#57 (P#51)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#29 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#29 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#29 (P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#58 (P#23)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#59 (P#55)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#30 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#30 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#30 (P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#60 (P#27)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#61 (P#59)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#31 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#31 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#31 (P#7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#62 (P#31)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#63 (P#63)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bridge Host-&gt;PCI L#24 (P#7 buses=0000:[ff-ff])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c80 (P#1044608 busid=0000:ff:08.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge QPI Link 0&quot;) &quot;Intel
<br>
Corporation Sandy Bridge QPI Link 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c90 (P#1044624 busid=0000:ff:09.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge QPI Link 1&quot;) &quot;Intel
<br>
Corporation Sandy Bridge QPI Link 1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cc0 (P#1044640 busid=0000:ff:0a.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power Control Unit
<br>
0&quot;) &quot;Intel Corporation Sandy Bridge Power Control Unit 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cc1 (P#1044641 busid=0000:ff:0a.1 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power Control Unit
<br>
1&quot;) &quot;Intel Corporation Sandy Bridge Power Control Unit 1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cc2 (P#1044642 busid=0000:ff:0a.2 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power Control Unit
<br>
2&quot;) &quot;Intel Corporation Sandy Bridge Power Control Unit 2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cd0 (P#1044643 busid=0000:ff:0a.3 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Power Control Unit
<br>
3&quot;) &quot;Intel Corporation Sandy Bridge Power Control Unit 3&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce0 (P#1044656 busid=0000:ff:0b.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Interrupt Control
<br>
Registers&quot;) &quot;Intel Corporation Sandy Bridge Interrupt Control Registers&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce3 (P#1044659 busid=0000:ff:0b.3 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Semaphore and
<br>
Scratchpad Configuration Registers&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Semaphore and Scratchpad Configuration Registers&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#1044672 busid=0000:ff:0c.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#1044673 busid=0000:ff:0c.1 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#1044674 busid=0000:ff:0c.2 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#1044675 busid=0000:ff:0c.3 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cf4 (P#1044678 busid=0000:ff:0c.6 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller System Address Decoder 0&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller System Address Decoder 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cf6 (P#1044679 busid=0000:ff:0c.7 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge System Address
<br>
Decoder&quot;) &quot;Intel Corporation Sandy Bridge System Address Decoder&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#1044688 busid=0000:ff:0d.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#1044689 busid=0000:ff:0d.1 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#1044690 busid=0000:ff:0d.2 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce8 (P#1044691 busid=0000:ff:0d.3 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Unicast Register 0&quot;)
<br>
&quot;Intel Corporation Sandy Bridge Unicast Register 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cf5 (P#1044694 busid=0000:ff:0d.6 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller System Address Decoder 1&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller System Address Decoder 1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ca0 (P#1044704 busid=0000:ff:0e.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Processor Home
<br>
Agent&quot;) &quot;Intel Corporation Sandy Bridge Processor Home Agent&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c46 (P#1044705 busid=0000:ff:0e.1 class=1101(Signl)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Processor Home Agent
<br>
Performance Monitoring&quot;) &quot;Intel Corporation Sandy Bridge Processor Home
<br>
Agent Performance Monitoring&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ca8 (P#1044720 busid=0000:ff:0f.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Registers&quot;) &quot;Intel Corporation Sandy Bridge Integrated Memory
<br>
Controller Registers&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c71 (P#1044721 busid=0000:ff:0f.1 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller RAS Registers&quot;) &quot;Intel Corporation Sandy Bridge Integrated
<br>
Memory Controller RAS Registers&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3caa (P#1044722 busid=0000:ff:0f.2 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Target Address Decoder 0&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Target Address Decoder 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cab (P#1044723 busid=0000:ff:0f.3 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Target Address Decoder 1&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Target Address Decoder 1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cac (P#1044724 busid=0000:ff:0f.4 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Target Address Decoder 2&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Target Address Decoder 2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cad (P#1044725 busid=0000:ff:0f.5 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Target Address Decoder 3&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Target Address Decoder 3&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cae (P#1044726 busid=0000:ff:0f.6 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Target Address Decoder 4&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Target Address Decoder 4&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb0 (P#1044736 busid=0000:ff:10.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Channel 0-3 Thermal Control 0&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Channel 0-3 Thermal Control 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb1 (P#1044737 busid=0000:ff:10.1 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Channel 0-3 Thermal Control 1&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Channel 0-3 Thermal Control 1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb2 (P#1044738 busid=0000:ff:10.2 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller ERROR Registers 0&quot;) &quot;Intel Corporation Sandy Bridge Integrated
<br>
Memory Controller ERROR Registers 0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb3 (P#1044739 busid=0000:ff:10.3 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller ERROR Registers 1&quot;) &quot;Intel Corporation Sandy Bridge Integrated
<br>
Memory Controller ERROR Registers 1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb4 (P#1044740 busid=0000:ff:10.4 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Channel 0-3 Thermal Control 2&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Channel 0-3 Thermal Control 2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb5 (P#1044741 busid=0000:ff:10.5 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller Channel 0-3 Thermal Control 3&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Integrated Memory Controller Channel 0-3 Thermal Control 3&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb6 (P#1044742 busid=0000:ff:10.6 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller ERROR Registers 2&quot;) &quot;Intel Corporation Sandy Bridge Integrated
<br>
Memory Controller ERROR Registers 2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb7 (P#1044743 busid=0000:ff:10.7 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Integrated Memory
<br>
Controller ERROR Registers 3&quot;) &quot;Intel Corporation Sandy Bridge Integrated
<br>
Memory Controller ERROR Registers 3&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3cb8 (P#1044752 busid=0000:ff:11.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge DDRIO&quot;) &quot;Intel
<br>
Corporation Sandy Bridge DDRIO&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce4 (P#1044784 busid=0000:ff:13.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge R2PCIe&quot;) &quot;Intel
<br>
Corporation Sandy Bridge R2PCIe&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c43 (P#1044785 busid=0000:ff:13.1 class=1101(Signl)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Ring to PCI Express
<br>
Performance Monitor&quot;) &quot;Intel Corporation Sandy Bridge Ring to PCI Express
<br>
Performance Monitor&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3ce6 (P#1044788 busid=0000:ff:13.4 class=1101(Signl)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge QuickPath
<br>
Interconnect Agent Ring Registers&quot;) &quot;Intel Corporation Sandy Bridge
<br>
QuickPath Interconnect Agent Ring Registers&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c44 (P#1044789 busid=0000:ff:13.5 class=1101(Signl)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Ring to QuickPath
<br>
Interconnect Link 0 Performance Monitor&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Ring to QuickPath Interconnect Link 0 Performance Monitor&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c45 (P#1044790 busid=0000:ff:13.6 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Ring to QuickPath
<br>
Interconnect Link 1 Performance Monitor&quot;) &quot;Intel Corporation Sandy Bridge
<br>
Ring to QuickPath Interconnect Link 1 Performance Monitor&quot;
<br>
&nbsp;&nbsp;Bridge Host-&gt;PCI L#0 (P#4 buses=0000:[80-80])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c28 (P#524368 busid=0000:80:05.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Address Map,
<br>
VTd_Misc, System Management&quot;) &quot;Intel Corporation Sandy Bridge Address Map,
<br>
VTd_Misc, System Management&quot;
<br>
&nbsp;&nbsp;Bridge Host-&gt;PCI L#1 (P#6 buses=0000:[c0-c0])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3c28 (P#786512 busid=0000:c0:05.0 class=0880(Syst)
<br>
PCIVendor=&quot;Intel Corporation&quot; PCIDevice=&quot;Sandy Bridge Address Map,
<br>
VTd_Misc, System Management&quot;) &quot;Intel Corporation Sandy Bridge Address Map,
<br>
VTd_Misc, System Management&quot;
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3664/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3665.php">Brice Goglin: "Re: [hwloc-devel] pci hierarchy"</a>
<li><strong>Previous message:</strong> <a href="3663.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.7 woes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3665.php">Brice Goglin: "Re: [hwloc-devel] pci hierarchy"</a>
<li><strong>Reply:</strong> <a href="3665.php">Brice Goglin: "Re: [hwloc-devel] pci hierarchy"</a>
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
