<?
$subject_val = "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 12:45:23 2014" -->
<!-- isoreceived="20141210174523" -->
<!-- sent="Wed, 10 Dec 2014 18:45:16 +0100" -->
<!-- isosent="20141210174516" -->
<!-- name="Pim Schellart" -->
<!-- email="p.schellart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6" -->
<!-- id="2679CA05-8F14-42FD-BB3A-FA2B8B95D881_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="5486B50C.6010506_at_iferc.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6<br>
<strong>From:</strong> Pim Schellart (<em>p.schellart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-10 12:45:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16493.php">Brice Goglin: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>Previous message:</strong> <a href="16491.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<li><strong>In reply to:</strong> <a href="16465.php">Gilles Gouaillardet: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16493.php">Brice Goglin: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>Reply:</strong> <a href="16493.php">Brice Goglin: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>Reply:</strong> <a href="16494.php">Ralph Castain: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>Reply:</strong> <a href="16498.php">Gilles Gouaillardet: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Gilles et al.,
<br>
<p>we tested with openmpi compiled from source (version 1.8.3) both with:
<br>
<p>./configure --prefix=/usr/local/openmpi --disable-silent-rules --with-libltdl=external --with-devel-headers --with-slurm --enable-heterogeneous --disable-vt --sysconfdir=/etc/openmpi
<br>
<p>and
<br>
<p>./configure --prefix=/usr/local/openmpi --with-hwloc=/usr --disable-silent-rules --with-libltdl=external --with-devel-headers --with-slurm --enable-heterogeneous --disable-vt --sysconfdir=/etc/openmpi
<br>
<p>(e.g. with embedded and external hwloc) and the issue remains the same. Meanwhile we have found another interesting detail. A job is started consisting of four tasks split over two nodes. If this is the only job running on those nodes the out-of-order warnings do not appear. However, if multiple jobs are running the warnings do appear but only for the jobs that are started later. We suspect that this is because for the first started job the CPU cores assigned are 0 and 1 whereas they are different for the later started jobs. I attached the output (including lstopo &#226;&#128;&#148;of xml output (called for each task)) for both the working and broken case again.
<br>
<p>Kind regards,
<br>
<p>Pim Schellart
<br>
<p><p>
<br><p>
&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
<br>
&lt;!DOCTYPE topology SYSTEM &quot;hwloc.dtd&quot;&gt;
<br>
&lt;topology&gt;
<br>
&nbsp;&nbsp;&lt;object type=&quot;Machine&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x0000ffff&quot; online_cpuset=&quot;0x0000ffff&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000003&quot; complete_nodeset=&quot;0x00000003&quot; allowed_nodeset=&quot;0x00000003&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;2097152&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIProductName&quot; value=&quot;PowerEdge R720&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIProductVersion&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardName&quot; value=&quot;046V88&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardVersion&quot; value=&quot;A00&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardAssetTag&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisType&quot; value=&quot;23&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisVersion&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisAssetTag&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBIOSVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBIOSVersion&quot; value=&quot;1.2.6&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBIOSDate&quot; value=&quot;05/10/2012&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMISysVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Backend&quot; value=&quot;Linux&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;LinuxCgroup&quot; value=&quot;/slurm/uid_11922/job_106635/step_0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSName&quot; value=&quot;Linux&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSRelease&quot; value=&quot;3.13.0-40-generic&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSVersion&quot; value=&quot;#69-Ubuntu SMP Thu Nov 13 17:53:56 UTC 2014&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;HostName&quot; value=&quot;coma04&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Architecture&quot; value=&quot;x86_64&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;distances nbobjs=&quot;2&quot; relative_depth=&quot;1&quot; latency_base=&quot;10.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;1.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;2.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;2.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;1.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/distances&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;NUMANode&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00005555&quot; online_cpuset=&quot;0x00005555&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; local_memory=&quot;67514843136&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;16483116&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;2097152&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Socket&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00005555&quot; online_cpuset=&quot;0x00005555&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;CPUModel&quot; value=&quot;Intel(R) Xeon(R) CPU E5-2660 0 @ 2.20GHz&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00005555&quot; online_cpuset=&quot;0x00005555&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;20971520&quot; depth=&quot;3&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;20&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00000004&quot; online_cpuset=&quot;0x00000004&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;262144&quot; depth=&quot;2&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00000004&quot; online_cpuset=&quot;0x00000004&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;1&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00000004&quot; online_cpuset=&quot;0x00000004&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00000004&quot; online_cpuset=&quot;0x00000004&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_index=&quot;2&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00000004&quot; online_cpuset=&quot;0x00000004&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;NUMANode&quot; os_index=&quot;1&quot; cpuset=&quot;0x0&quot; complete_cpuset=&quot;0x0000aaaa&quot; online_cpuset=&quot;0x0000aaaa&quot; allowed_cpuset=&quot;0x0&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; local_memory=&quot;67643228160&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;16514460&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;2097152&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;0&quot; bridge_type=&quot;0-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[00-0d]&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;16&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 1a&quot; bridge_type=&quot;1-1&quot; depth=&quot;1&quot; bridge_pci=&quot;0000:[02-02]&quot; pci_busid=&quot;0000:00:01.0&quot; pci_type=&quot;0604 [8086:3c02] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 1a&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;8192&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:02:00.0&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em3&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:88:12&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;8193&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:02:00.1&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em4&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:88:13&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;17&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 1b&quot; bridge_type=&quot;1-1&quot; depth=&quot;1&quot; bridge_pci=&quot;0000:[01-01]&quot; pci_busid=&quot;0000:00:01.1&quot; pci_type=&quot;0604 [8086:3c03] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 1b&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;4096&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:01:00.0&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em1&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:88:10&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;4097&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:01:00.1&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em2&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:88:11&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;34&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 2c&quot; bridge_type=&quot;1-1&quot; depth=&quot;1&quot; bridge_pci=&quot;0000:[03-03]&quot; pci_busid=&quot;0000:00:02.2&quot; pci_type=&quot;0604 [8086:3c06] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 2c&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;12288&quot; name=&quot;LSI Logic / Symbios Logic MegaRAID SAS 2208 [Thunderbolt]&quot; pci_busid=&quot;0000:03:00.0&quot; pci_type=&quot;0104 [1000:005b] [1028:1f38] 01&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;LSI Logic / Symbios Logic&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;MegaRAID SAS 2208 [Thunderbolt]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;sda&quot; osdev_type=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;48&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot; bridge_type=&quot;1-1&quot; depth=&quot;1&quot; bridge_pci=&quot;0000:[05-05]&quot; pci_busid=&quot;0000:00:03.0&quot; pci_type=&quot;0604 [8086:3c08] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;20480&quot; name=&quot;NVIDIA Corporation GF110GL [Tesla M2090]&quot; pci_busid=&quot;0000:05:00.0&quot; pci_type=&quot;0302 [10de:1091] [10de:0887] a1&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;NVIDIA Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;GF110GL [Tesla M2090]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;card0&quot; osdev_type=&quot;1&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;455&quot; name=&quot;Intel Corporation C600/X79 series chipset PCI Express Root Port 8&quot; bridge_type=&quot;1-1&quot; depth=&quot;1&quot; bridge_pci=&quot;0000:[08-0c]&quot; pci_busid=&quot;0000:00:1c.7&quot; pci_type=&quot;0604 [8086:1d1e] [0000:0000] b5&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;C600/X79 series chipset PCI Express Root Port 8&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;32768&quot; name=&quot;Renesas Technology Corp. SH7757 PCIe Switch [PS]&quot; bridge_type=&quot;1-1&quot; depth=&quot;2&quot; bridge_pci=&quot;0000:[09-0c]&quot; pci_busid=&quot;0000:08:00.0&quot; pci_type=&quot;0604 [1912:0013] [0000:0000] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Renesas Technology Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;SH7757 PCIe Switch [PS]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;36864&quot; name=&quot;Renesas Technology Corp. SH7757 PCIe Switch [PS]&quot; bridge_type=&quot;1-1&quot; depth=&quot;3&quot; bridge_pci=&quot;0000:[0a-0b]&quot; pci_busid=&quot;0000:09:00.0&quot; pci_type=&quot;0604 [1912:0013] [0000:0000] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Renesas Technology Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;SH7757 PCIe Switch [PS]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;40960&quot; name=&quot;Renesas Technology Corp. SH7757 PCIe-PCI Bridge [PPB]&quot; bridge_type=&quot;1-1&quot; depth=&quot;4&quot; bridge_pci=&quot;0000:[0b-0b]&quot; pci_busid=&quot;0000:0a:00.0&quot; pci_type=&quot;0604 [1912:0012] [0000:0000] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Renesas Technology Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;SH7757 PCIe-PCI Bridge [PPB]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;45056&quot; name=&quot;Matrox Electronics Systems Ltd. G200eR2&quot; pci_busid=&quot;0000:0b:00.0&quot; pci_type=&quot;0300 [102b:0534] [1028:048c] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Matrox Electronics Systems Ltd.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;G200eR2&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;2&quot; bridge_type=&quot;0-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[40-44]&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;262192&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot; bridge_type=&quot;1-1&quot; depth=&quot;1&quot; bridge_pci=&quot;0000:[43-43]&quot; pci_busid=&quot;0000:40:03.0&quot; pci_type=&quot;0604 [8086:3c08] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;274432&quot; name=&quot;QLogic Corp. IBA7322 QDR InfiniBand HCA&quot; pci_busid=&quot;0000:43:00.0&quot; pci_type=&quot;0c06 [1077:7322] [1077:7322] 02&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;QLogic Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;IBA7322 QDR InfiniBand HCA&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;ib0&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;80:00:00:03:fe:80:00:00:00:00:00:00:00:11:75:00:00:76:f4:80&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port&quot; value=&quot;1&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;qib0&quot; osdev_type=&quot;3&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;NodeGUID&quot; value=&quot;0011:7500:0076:f480&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;SysImageGUID&quot; value=&quot;0011:7500:0076:f480&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1State&quot; value=&quot;4&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1LID&quot; value=&quot;0x8&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1LMC&quot; value=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1GID0&quot; value=&quot;fe80:0000:0000:0000:0011:7500:0076:f480&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&lt;/object&gt;
<br>
&lt;/topology&gt;
<br>
&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
<br>
&lt;!DOCTYPE topology SYSTEM &quot;hwloc.dtd&quot;&gt;
<br>
&lt;topology&gt;
<br>
&nbsp;&nbsp;&lt;object type=&quot;Machine&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000058&quot; complete_cpuset=&quot;0x0000ffff&quot; online_cpuset=&quot;0x0000ffff&quot; allowed_cpuset=&quot;0x00000058&quot; nodeset=&quot;0x00000003&quot; complete_nodeset=&quot;0x00000003&quot; allowed_nodeset=&quot;0x00000003&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;2097152&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIProductName&quot; value=&quot;PowerEdge R720&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIProductVersion&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardName&quot; value=&quot;046V88&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardVersion&quot; value=&quot;A00&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardAssetTag&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisType&quot; value=&quot;23&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisVersion&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisAssetTag&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBIOSVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBIOSVersion&quot; value=&quot;1.2.6&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBIOSDate&quot; value=&quot;05/10/2012&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMISysVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Backend&quot; value=&quot;Linux&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;LinuxCgroup&quot; value=&quot;/slurm/uid_11922/job_106635/step_0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSName&quot; value=&quot;Linux&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSRelease&quot; value=&quot;3.13.0-39-generic&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSVersion&quot; value=&quot;#66-Ubuntu SMP Tue Oct 28 13:30:27 UTC 2014&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;HostName&quot; value=&quot;coma03&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Architecture&quot; value=&quot;x86_64&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;distances nbobjs=&quot;2&quot; relative_depth=&quot;1&quot; latency_base=&quot;10.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;1.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;2.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;2.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;1.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/distances&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;NUMANode&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000050&quot; complete_cpuset=&quot;0x00005555&quot; online_cpuset=&quot;0x00005555&quot; allowed_cpuset=&quot;0x00000050&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; local_memory=&quot;67514843136&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;16483116&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;2097152&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Socket&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000050&quot; complete_cpuset=&quot;0x00005555&quot; online_cpuset=&quot;0x00005555&quot; allowed_cpuset=&quot;0x00000050&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;CPUModel&quot; value=&quot;Intel(R) Xeon(R) CPU E5-2660 0 @ 2.20GHz&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000050&quot; complete_cpuset=&quot;0x00005555&quot; online_cpuset=&quot;0x00005555&quot; allowed_cpuset=&quot;0x00000050&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;20971520&quot; depth=&quot;3&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;20&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000010&quot; complete_cpuset=&quot;0x00000010&quot; online_cpuset=&quot;0x00000010&quot; allowed_cpuset=&quot;0x00000010&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;262144&quot; depth=&quot;2&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000010&quot; complete_cpuset=&quot;0x00000010&quot; online_cpuset=&quot;0x00000010&quot; allowed_cpuset=&quot;0x00000010&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;1&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000010&quot; complete_cpuset=&quot;0x00000010&quot; online_cpuset=&quot;0x00000010&quot; allowed_cpuset=&quot;0x00000010&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_index=&quot;2&quot; cpuset=&quot;0x00000010&quot; complete_cpuset=&quot;0x00000010&quot; online_cpuset=&quot;0x00000010&quot; allowed_cpuset=&quot;0x00000010&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_index=&quot;4&quot; cpuset=&quot;0x00000010&quot; complete_cpuset=&quot;0x00000010&quot; online_cpuset=&quot;0x00000010&quot; allowed_cpuset=&quot;0x00000010&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000040&quot; complete_cpuset=&quot;0x00000040&quot; online_cpuset=&quot;0x00000040&quot; allowed_cpuset=&quot;0x00000040&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;262144&quot; depth=&quot;2&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000040&quot; complete_cpuset=&quot;0x00000040&quot; online_cpuset=&quot;0x00000040&quot; allowed_cpuset=&quot;0x00000040&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;1&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000040&quot; complete_cpuset=&quot;0x00000040&quot; online_cpuset=&quot;0x00000040&quot; allowed_cpuset=&quot;0x00000040&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_index=&quot;3&quot; cpuset=&quot;0x00000040&quot; complete_cpuset=&quot;0x00000040&quot; online_cpuset=&quot;0x00000040&quot; allowed_cpuset=&quot;0x00000040&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_index=&quot;6&quot; cpuset=&quot;0x00000040&quot; complete_cpuset=&quot;0x00000040&quot; online_cpuset=&quot;0x00000040&quot; allowed_cpuset=&quot;0x00000040&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;0&quot; bridge_type=&quot;0-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[00-0d]&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;16&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 1a&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[02-02]&quot; pci_busid=&quot;0000:00:01.0&quot; pci_type=&quot;0604 [8086:3c02] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 1a&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;8192&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:02:00.0&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em3&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:6f:d7&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;8193&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:02:00.1&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em4&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:6f:d8&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;17&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 1b&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[01-01]&quot; pci_busid=&quot;0000:00:01.1&quot; pci_type=&quot;0604 [8086:3c03] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 1b&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;4096&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:01:00.0&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em1&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:6f:d5&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;4097&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:01:00.1&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em2&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:6f:d6&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;34&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 2c&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[03-03]&quot; pci_busid=&quot;0000:00:02.2&quot; pci_type=&quot;0604 [8086:3c06] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 2c&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;12288&quot; name=&quot;LSI Logic / Symbios Logic MegaRAID SAS 2208 [Thunderbolt]&quot; pci_busid=&quot;0000:03:00.0&quot; pci_type=&quot;0104 [1000:005b] [1028:1f38] 01&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;LSI Logic / Symbios Logic&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;MegaRAID SAS 2208 [Thunderbolt]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;sda&quot; osdev_type=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;48&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[05-05]&quot; pci_busid=&quot;0000:00:03.0&quot; pci_type=&quot;0604 [8086:3c08] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;20480&quot; name=&quot;NVIDIA Corporation GF110GL [Tesla M2090]&quot; pci_busid=&quot;0000:05:00.0&quot; pci_type=&quot;0302 [10de:1091] [10de:0887] a1&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;NVIDIA Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;GF110GL [Tesla M2090]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;card0&quot; osdev_type=&quot;1&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;455&quot; name=&quot;Intel Corporation C600/X79 series chipset PCI Express Root Port 8&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[08-0c]&quot; pci_busid=&quot;0000:00:1c.7&quot; pci_type=&quot;0604 [8086:1d1e] [0000:0000] b5&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;C600/X79 series chipset PCI Express Root Port 8&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;32768&quot; name=&quot;Renesas Technology Corp. SH7757 PCIe Switch [PS]&quot; bridge_type=&quot;1-1&quot; depth=&quot;1&quot; bridge_pci=&quot;0000:[09-0c]&quot; pci_busid=&quot;0000:08:00.0&quot; pci_type=&quot;0604 [1912:0013] [0000:0000] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Renesas Technology Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;SH7757 PCIe Switch [PS]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;36864&quot; name=&quot;Renesas Technology Corp. SH7757 PCIe Switch [PS]&quot; bridge_type=&quot;1-1&quot; depth=&quot;2&quot; bridge_pci=&quot;0000:[0a-0b]&quot; pci_busid=&quot;0000:09:00.0&quot; pci_type=&quot;0604 [1912:0013] [0000:0000] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Renesas Technology Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;SH7757 PCIe Switch [PS]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;40960&quot; name=&quot;Renesas Technology Corp. SH7757 PCIe-PCI Bridge [PPB]&quot; bridge_type=&quot;1-1&quot; depth=&quot;3&quot; bridge_pci=&quot;0000:[0b-0b]&quot; pci_busid=&quot;0000:0a:00.0&quot; pci_type=&quot;0604 [1912:0012] [0000:0000] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Renesas Technology Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;SH7757 PCIe-PCI Bridge [PPB]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;45056&quot; name=&quot;Matrox Electronics Systems Ltd. G200eR2&quot; pci_busid=&quot;0000:0b:00.0&quot; pci_type=&quot;0300 [102b:0534] [1028:048c] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Matrox Electronics Systems Ltd.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;G200eR2&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;NUMANode&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x0000aaaa&quot; online_cpuset=&quot;0x0000aaaa&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; local_memory=&quot;67643228160&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;16514460&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;2097152&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Socket&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x0000aaaa&quot; online_cpuset=&quot;0x0000aaaa&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;CPUModel&quot; value=&quot;Intel(R) Xeon(R) CPU E5-2660 0 @ 2.20GHz&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x0000aaaa&quot; online_cpuset=&quot;0x0000aaaa&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; cache_size=&quot;20971520&quot; depth=&quot;3&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;20&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x00000008&quot; online_cpuset=&quot;0x00000008&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; cache_size=&quot;262144&quot; depth=&quot;2&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x00000008&quot; online_cpuset=&quot;0x00000008&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;1&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x00000008&quot; online_cpuset=&quot;0x00000008&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x00000008&quot; online_cpuset=&quot;0x00000008&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_index=&quot;3&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x00000008&quot; online_cpuset=&quot;0x00000008&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;2&quot; bridge_type=&quot;0-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[40-44]&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;262192&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[43-43]&quot; pci_busid=&quot;0000:40:03.0&quot; pci_type=&quot;0604 [8086:3c08] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;274432&quot; name=&quot;QLogic Corp. IBA7322 QDR InfiniBand HCA&quot; pci_busid=&quot;0000:43:00.0&quot; pci_type=&quot;0c06 [1077:7322] [1077:7322] 02&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;QLogic Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;IBA7322 QDR InfiniBand HCA&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;ib0&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;80:00:00:03:fe:80:00:00:00:00:00:00:00:11:75:00:00:76:f1:86&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port&quot; value=&quot;1&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;qib0&quot; osdev_type=&quot;3&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;NodeGUID&quot; value=&quot;0011:7500:0076:f186&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;SysImageGUID&quot; value=&quot;0011:7500:0076:f186&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1State&quot; value=&quot;4&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1LID&quot; value=&quot;0xa&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1LMC&quot; value=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1GID0&quot; value=&quot;fe80:0000:0000:0000:0011:7500:0076:f186&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&lt;/object&gt;
<br>
&lt;/topology&gt;
<br>
&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
<br>
&lt;!DOCTYPE topology SYSTEM &quot;hwloc.dtd&quot;&gt;
<br>
&lt;topology&gt;
<br>
&nbsp;&nbsp;&lt;object type=&quot;Machine&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000058&quot; complete_cpuset=&quot;0x0000ffff&quot; online_cpuset=&quot;0x0000ffff&quot; allowed_cpuset=&quot;0x00000058&quot; nodeset=&quot;0x00000003&quot; complete_nodeset=&quot;0x00000003&quot; allowed_nodeset=&quot;0x00000003&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;2097152&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIProductName&quot; value=&quot;PowerEdge R720&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIProductVersion&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardName&quot; value=&quot;046V88&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardVersion&quot; value=&quot;A00&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardAssetTag&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisType&quot; value=&quot;23&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisVersion&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisAssetTag&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBIOSVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBIOSVersion&quot; value=&quot;1.2.6&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBIOSDate&quot; value=&quot;05/10/2012&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMISysVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Backend&quot; value=&quot;Linux&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;LinuxCgroup&quot; value=&quot;/slurm/uid_11922/job_106635/step_0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSName&quot; value=&quot;Linux&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSRelease&quot; value=&quot;3.13.0-39-generic&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSVersion&quot; value=&quot;#66-Ubuntu SMP Tue Oct 28 13:30:27 UTC 2014&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;HostName&quot; value=&quot;coma03&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Architecture&quot; value=&quot;x86_64&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;distances nbobjs=&quot;2&quot; relative_depth=&quot;1&quot; latency_base=&quot;10.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;1.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;2.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;2.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;1.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/distances&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;NUMANode&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000050&quot; complete_cpuset=&quot;0x00005555&quot; online_cpuset=&quot;0x00005555&quot; allowed_cpuset=&quot;0x00000050&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; local_memory=&quot;67514843136&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;16483116&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;2097152&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Socket&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000050&quot; complete_cpuset=&quot;0x00005555&quot; online_cpuset=&quot;0x00005555&quot; allowed_cpuset=&quot;0x00000050&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;CPUModel&quot; value=&quot;Intel(R) Xeon(R) CPU E5-2660 0 @ 2.20GHz&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000050&quot; complete_cpuset=&quot;0x00005555&quot; online_cpuset=&quot;0x00005555&quot; allowed_cpuset=&quot;0x00000050&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;20971520&quot; depth=&quot;3&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;20&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000010&quot; complete_cpuset=&quot;0x00000010&quot; online_cpuset=&quot;0x00000010&quot; allowed_cpuset=&quot;0x00000010&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;262144&quot; depth=&quot;2&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000010&quot; complete_cpuset=&quot;0x00000010&quot; online_cpuset=&quot;0x00000010&quot; allowed_cpuset=&quot;0x00000010&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;1&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000010&quot; complete_cpuset=&quot;0x00000010&quot; online_cpuset=&quot;0x00000010&quot; allowed_cpuset=&quot;0x00000010&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_index=&quot;2&quot; cpuset=&quot;0x00000010&quot; complete_cpuset=&quot;0x00000010&quot; online_cpuset=&quot;0x00000010&quot; allowed_cpuset=&quot;0x00000010&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_index=&quot;4&quot; cpuset=&quot;0x00000010&quot; complete_cpuset=&quot;0x00000010&quot; online_cpuset=&quot;0x00000010&quot; allowed_cpuset=&quot;0x00000010&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000040&quot; complete_cpuset=&quot;0x00000040&quot; online_cpuset=&quot;0x00000040&quot; allowed_cpuset=&quot;0x00000040&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;262144&quot; depth=&quot;2&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000040&quot; complete_cpuset=&quot;0x00000040&quot; online_cpuset=&quot;0x00000040&quot; allowed_cpuset=&quot;0x00000040&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;1&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000040&quot; complete_cpuset=&quot;0x00000040&quot; online_cpuset=&quot;0x00000040&quot; allowed_cpuset=&quot;0x00000040&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_index=&quot;3&quot; cpuset=&quot;0x00000040&quot; complete_cpuset=&quot;0x00000040&quot; online_cpuset=&quot;0x00000040&quot; allowed_cpuset=&quot;0x00000040&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_index=&quot;6&quot; cpuset=&quot;0x00000040&quot; complete_cpuset=&quot;0x00000040&quot; online_cpuset=&quot;0x00000040&quot; allowed_cpuset=&quot;0x00000040&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;0&quot; bridge_type=&quot;0-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[00-0d]&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;16&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 1a&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[02-02]&quot; pci_busid=&quot;0000:00:01.0&quot; pci_type=&quot;0604 [8086:3c02] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 1a&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;8192&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:02:00.0&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em3&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:6f:d7&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;8193&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:02:00.1&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em4&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:6f:d8&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;17&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 1b&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[01-01]&quot; pci_busid=&quot;0000:00:01.1&quot; pci_type=&quot;0604 [8086:3c03] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 1b&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;4096&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:01:00.0&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em1&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:6f:d5&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;4097&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:01:00.1&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em2&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:6f:d6&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;34&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 2c&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[03-03]&quot; pci_busid=&quot;0000:00:02.2&quot; pci_type=&quot;0604 [8086:3c06] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 2c&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;12288&quot; name=&quot;LSI Logic / Symbios Logic MegaRAID SAS 2208 [Thunderbolt]&quot; pci_busid=&quot;0000:03:00.0&quot; pci_type=&quot;0104 [1000:005b] [1028:1f38] 01&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;LSI Logic / Symbios Logic&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;MegaRAID SAS 2208 [Thunderbolt]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;sda&quot; osdev_type=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;48&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[05-05]&quot; pci_busid=&quot;0000:00:03.0&quot; pci_type=&quot;0604 [8086:3c08] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;20480&quot; name=&quot;NVIDIA Corporation GF110GL [Tesla M2090]&quot; pci_busid=&quot;0000:05:00.0&quot; pci_type=&quot;0302 [10de:1091] [10de:0887] a1&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;NVIDIA Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;GF110GL [Tesla M2090]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;card0&quot; osdev_type=&quot;1&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;455&quot; name=&quot;Intel Corporation C600/X79 series chipset PCI Express Root Port 8&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[08-0c]&quot; pci_busid=&quot;0000:00:1c.7&quot; pci_type=&quot;0604 [8086:1d1e] [0000:0000] b5&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;C600/X79 series chipset PCI Express Root Port 8&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;32768&quot; name=&quot;Renesas Technology Corp. SH7757 PCIe Switch [PS]&quot; bridge_type=&quot;1-1&quot; depth=&quot;1&quot; bridge_pci=&quot;0000:[09-0c]&quot; pci_busid=&quot;0000:08:00.0&quot; pci_type=&quot;0604 [1912:0013] [0000:0000] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Renesas Technology Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;SH7757 PCIe Switch [PS]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;36864&quot; name=&quot;Renesas Technology Corp. SH7757 PCIe Switch [PS]&quot; bridge_type=&quot;1-1&quot; depth=&quot;2&quot; bridge_pci=&quot;0000:[0a-0b]&quot; pci_busid=&quot;0000:09:00.0&quot; pci_type=&quot;0604 [1912:0013] [0000:0000] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Renesas Technology Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;SH7757 PCIe Switch [PS]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;40960&quot; name=&quot;Renesas Technology Corp. SH7757 PCIe-PCI Bridge [PPB]&quot; bridge_type=&quot;1-1&quot; depth=&quot;3&quot; bridge_pci=&quot;0000:[0b-0b]&quot; pci_busid=&quot;0000:0a:00.0&quot; pci_type=&quot;0604 [1912:0012] [0000:0000] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Renesas Technology Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;SH7757 PCIe-PCI Bridge [PPB]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;45056&quot; name=&quot;Matrox Electronics Systems Ltd. G200eR2&quot; pci_busid=&quot;0000:0b:00.0&quot; pci_type=&quot;0300 [102b:0534] [1028:048c] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Matrox Electronics Systems Ltd.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;G200eR2&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;NUMANode&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x0000aaaa&quot; online_cpuset=&quot;0x0000aaaa&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; local_memory=&quot;67643228160&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;16514460&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;2097152&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Socket&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x0000aaaa&quot; online_cpuset=&quot;0x0000aaaa&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;CPUModel&quot; value=&quot;Intel(R) Xeon(R) CPU E5-2660 0 @ 2.20GHz&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x0000aaaa&quot; online_cpuset=&quot;0x0000aaaa&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; cache_size=&quot;20971520&quot; depth=&quot;3&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;20&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x00000008&quot; online_cpuset=&quot;0x00000008&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; cache_size=&quot;262144&quot; depth=&quot;2&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x00000008&quot; online_cpuset=&quot;0x00000008&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;1&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x00000008&quot; online_cpuset=&quot;0x00000008&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x00000008&quot; online_cpuset=&quot;0x00000008&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_index=&quot;3&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x00000008&quot; online_cpuset=&quot;0x00000008&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;2&quot; bridge_type=&quot;0-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[40-44]&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;262192&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[43-43]&quot; pci_busid=&quot;0000:40:03.0&quot; pci_type=&quot;0604 [8086:3c08] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;274432&quot; name=&quot;QLogic Corp. IBA7322 QDR InfiniBand HCA&quot; pci_busid=&quot;0000:43:00.0&quot; pci_type=&quot;0c06 [1077:7322] [1077:7322] 02&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;QLogic Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;IBA7322 QDR InfiniBand HCA&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;ib0&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;80:00:00:03:fe:80:00:00:00:00:00:00:00:11:75:00:00:76:f1:86&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port&quot; value=&quot;1&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;qib0&quot; osdev_type=&quot;3&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;NodeGUID&quot; value=&quot;0011:7500:0076:f186&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;SysImageGUID&quot; value=&quot;0011:7500:0076:f186&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1State&quot; value=&quot;4&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1LID&quot; value=&quot;0xa&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1LMC&quot; value=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1GID0&quot; value=&quot;fe80:0000:0000:0000:0011:7500:0076:f186&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&lt;/object&gt;
<br>
&lt;/topology&gt;
<br>
&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
<br>
&lt;!DOCTYPE topology SYSTEM &quot;hwloc.dtd&quot;&gt;
<br>
&lt;topology&gt;
<br>
&nbsp;&nbsp;&lt;object type=&quot;Machine&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000058&quot; complete_cpuset=&quot;0x0000ffff&quot; online_cpuset=&quot;0x0000ffff&quot; allowed_cpuset=&quot;0x00000058&quot; nodeset=&quot;0x00000003&quot; complete_nodeset=&quot;0x00000003&quot; allowed_nodeset=&quot;0x00000003&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;2097152&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIProductName&quot; value=&quot;PowerEdge R720&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIProductVersion&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardName&quot; value=&quot;046V88&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardVersion&quot; value=&quot;A00&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardAssetTag&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisType&quot; value=&quot;23&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisVersion&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisAssetTag&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBIOSVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBIOSVersion&quot; value=&quot;1.2.6&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBIOSDate&quot; value=&quot;05/10/2012&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMISysVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Backend&quot; value=&quot;Linux&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;LinuxCgroup&quot; value=&quot;/slurm/uid_11922/job_106635/step_0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSName&quot; value=&quot;Linux&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSRelease&quot; value=&quot;3.13.0-39-generic&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSVersion&quot; value=&quot;#66-Ubuntu SMP Tue Oct 28 13:30:27 UTC 2014&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;HostName&quot; value=&quot;coma03&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Architecture&quot; value=&quot;x86_64&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;distances nbobjs=&quot;2&quot; relative_depth=&quot;1&quot; latency_base=&quot;10.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;1.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;2.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;2.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;1.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/distances&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;NUMANode&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000050&quot; complete_cpuset=&quot;0x00005555&quot; online_cpuset=&quot;0x00005555&quot; allowed_cpuset=&quot;0x00000050&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; local_memory=&quot;67514843136&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;16483116&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;2097152&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Socket&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000050&quot; complete_cpuset=&quot;0x00005555&quot; online_cpuset=&quot;0x00005555&quot; allowed_cpuset=&quot;0x00000050&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;CPUModel&quot; value=&quot;Intel(R) Xeon(R) CPU E5-2660 0 @ 2.20GHz&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000050&quot; complete_cpuset=&quot;0x00005555&quot; online_cpuset=&quot;0x00005555&quot; allowed_cpuset=&quot;0x00000050&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;20971520&quot; depth=&quot;3&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;20&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000010&quot; complete_cpuset=&quot;0x00000010&quot; online_cpuset=&quot;0x00000010&quot; allowed_cpuset=&quot;0x00000010&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;262144&quot; depth=&quot;2&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000010&quot; complete_cpuset=&quot;0x00000010&quot; online_cpuset=&quot;0x00000010&quot; allowed_cpuset=&quot;0x00000010&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;1&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000010&quot; complete_cpuset=&quot;0x00000010&quot; online_cpuset=&quot;0x00000010&quot; allowed_cpuset=&quot;0x00000010&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_index=&quot;2&quot; cpuset=&quot;0x00000010&quot; complete_cpuset=&quot;0x00000010&quot; online_cpuset=&quot;0x00000010&quot; allowed_cpuset=&quot;0x00000010&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_index=&quot;4&quot; cpuset=&quot;0x00000010&quot; complete_cpuset=&quot;0x00000010&quot; online_cpuset=&quot;0x00000010&quot; allowed_cpuset=&quot;0x00000010&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000040&quot; complete_cpuset=&quot;0x00000040&quot; online_cpuset=&quot;0x00000040&quot; allowed_cpuset=&quot;0x00000040&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;262144&quot; depth=&quot;2&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000040&quot; complete_cpuset=&quot;0x00000040&quot; online_cpuset=&quot;0x00000040&quot; allowed_cpuset=&quot;0x00000040&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;1&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000040&quot; complete_cpuset=&quot;0x00000040&quot; online_cpuset=&quot;0x00000040&quot; allowed_cpuset=&quot;0x00000040&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_index=&quot;3&quot; cpuset=&quot;0x00000040&quot; complete_cpuset=&quot;0x00000040&quot; online_cpuset=&quot;0x00000040&quot; allowed_cpuset=&quot;0x00000040&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_index=&quot;6&quot; cpuset=&quot;0x00000040&quot; complete_cpuset=&quot;0x00000040&quot; online_cpuset=&quot;0x00000040&quot; allowed_cpuset=&quot;0x00000040&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;0&quot; bridge_type=&quot;0-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[00-0d]&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;16&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 1a&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[02-02]&quot; pci_busid=&quot;0000:00:01.0&quot; pci_type=&quot;0604 [8086:3c02] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 1a&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;8192&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:02:00.0&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em3&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:6f:d7&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;8193&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:02:00.1&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em4&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:6f:d8&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;17&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 1b&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[01-01]&quot; pci_busid=&quot;0000:00:01.1&quot; pci_type=&quot;0604 [8086:3c03] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 1b&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;4096&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:01:00.0&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em1&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:6f:d5&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;4097&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:01:00.1&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em2&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:6f:d6&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;34&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 2c&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[03-03]&quot; pci_busid=&quot;0000:00:02.2&quot; pci_type=&quot;0604 [8086:3c06] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 2c&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;12288&quot; name=&quot;LSI Logic / Symbios Logic MegaRAID SAS 2208 [Thunderbolt]&quot; pci_busid=&quot;0000:03:00.0&quot; pci_type=&quot;0104 [1000:005b] [1028:1f38] 01&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;LSI Logic / Symbios Logic&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;MegaRAID SAS 2208 [Thunderbolt]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;sda&quot; osdev_type=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;48&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[05-05]&quot; pci_busid=&quot;0000:00:03.0&quot; pci_type=&quot;0604 [8086:3c08] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;20480&quot; name=&quot;NVIDIA Corporation GF110GL [Tesla M2090]&quot; pci_busid=&quot;0000:05:00.0&quot; pci_type=&quot;0302 [10de:1091] [10de:0887] a1&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;NVIDIA Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;GF110GL [Tesla M2090]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;card0&quot; osdev_type=&quot;1&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;455&quot; name=&quot;Intel Corporation C600/X79 series chipset PCI Express Root Port 8&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[08-0c]&quot; pci_busid=&quot;0000:00:1c.7&quot; pci_type=&quot;0604 [8086:1d1e] [0000:0000] b5&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;C600/X79 series chipset PCI Express Root Port 8&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;32768&quot; name=&quot;Renesas Technology Corp. SH7757 PCIe Switch [PS]&quot; bridge_type=&quot;1-1&quot; depth=&quot;1&quot; bridge_pci=&quot;0000:[09-0c]&quot; pci_busid=&quot;0000:08:00.0&quot; pci_type=&quot;0604 [1912:0013] [0000:0000] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Renesas Technology Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;SH7757 PCIe Switch [PS]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;36864&quot; name=&quot;Renesas Technology Corp. SH7757 PCIe Switch [PS]&quot; bridge_type=&quot;1-1&quot; depth=&quot;2&quot; bridge_pci=&quot;0000:[0a-0b]&quot; pci_busid=&quot;0000:09:00.0&quot; pci_type=&quot;0604 [1912:0013] [0000:0000] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Renesas Technology Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;SH7757 PCIe Switch [PS]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;40960&quot; name=&quot;Renesas Technology Corp. SH7757 PCIe-PCI Bridge [PPB]&quot; bridge_type=&quot;1-1&quot; depth=&quot;3&quot; bridge_pci=&quot;0000:[0b-0b]&quot; pci_busid=&quot;0000:0a:00.0&quot; pci_type=&quot;0604 [1912:0012] [0000:0000] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Renesas Technology Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;SH7757 PCIe-PCI Bridge [PPB]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;45056&quot; name=&quot;Matrox Electronics Systems Ltd. G200eR2&quot; pci_busid=&quot;0000:0b:00.0&quot; pci_type=&quot;0300 [102b:0534] [1028:048c] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Matrox Electronics Systems Ltd.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;G200eR2&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;NUMANode&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x0000aaaa&quot; online_cpuset=&quot;0x0000aaaa&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; local_memory=&quot;67643228160&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;16514460&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;2097152&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Socket&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x0000aaaa&quot; online_cpuset=&quot;0x0000aaaa&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;CPUModel&quot; value=&quot;Intel(R) Xeon(R) CPU E5-2660 0 @ 2.20GHz&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x0000aaaa&quot; online_cpuset=&quot;0x0000aaaa&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; cache_size=&quot;20971520&quot; depth=&quot;3&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;20&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x00000008&quot; online_cpuset=&quot;0x00000008&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; cache_size=&quot;262144&quot; depth=&quot;2&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x00000008&quot; online_cpuset=&quot;0x00000008&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;1&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x00000008&quot; online_cpuset=&quot;0x00000008&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x00000008&quot; online_cpuset=&quot;0x00000008&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_index=&quot;3&quot; cpuset=&quot;0x00000008&quot; complete_cpuset=&quot;0x00000008&quot; online_cpuset=&quot;0x00000008&quot; allowed_cpuset=&quot;0x00000008&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;2&quot; bridge_type=&quot;0-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[40-44]&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;262192&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[43-43]&quot; pci_busid=&quot;0000:40:03.0&quot; pci_type=&quot;0604 [8086:3c08] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;274432&quot; name=&quot;QLogic Corp. IBA7322 QDR InfiniBand HCA&quot; pci_busid=&quot;0000:43:00.0&quot; pci_type=&quot;0c06 [1077:7322] [1077:7322] 02&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;QLogic Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;IBA7322 QDR InfiniBand HCA&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;ib0&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;80:00:00:03:fe:80:00:00:00:00:00:00:00:11:75:00:00:76:f1:86&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port&quot; value=&quot;1&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;qib0&quot; osdev_type=&quot;3&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;NodeGUID&quot; value=&quot;0011:7500:0076:f186&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;SysImageGUID&quot; value=&quot;0011:7500:0076:f186&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1State&quot; value=&quot;4&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1LID&quot; value=&quot;0xa&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1LMC&quot; value=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1GID0&quot; value=&quot;fe80:0000:0000:0000:0011:7500:0076:f186&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&lt;/object&gt;
<br>
&lt;/topology&gt;
<br>
Begin: init_MPI
<br>
MPI_Init....
<br>
Begin: init_MPI
<br>
MPI_Init....
<br>
Begin: init_MPI
<br>
MPI_Init....
<br>
****************************************************************************
<br>
* hwloc has encountered an out-of-order topology discovery.
<br>
* An object with cpuset 0x00000008 was inserted after object with 0x00000050
<br>
* Please check that your input topology (XML file, etc.) is valid.
<br>
****************************************************************************
<br>
Begin: init_MPI
<br>
MPI_Init....
<br>
****************************************************************************
<br>
* hwloc has encountered an out-of-order topology discovery.
<br>
* An object with cpuset 0x00000008 was inserted after object with 0x00000050
<br>
* Please check that your input topology (XML file, etc.) is valid.
<br>
****************************************************************************
<br>
****************************************************************************
<br>
* hwloc has encountered an out-of-order topology discovery.
<br>
* An object with cpuset 0x00000008 was inserted after object with 0x00000050
<br>
* Please check that your input topology (XML file, etc.) is valid.
<br>
****************************************************************************
<br>
MPI_Comm_size....
<br>
MPI_Comm_size....
<br>
MPI_Comm_rank....
<br>
MPI_Get_processor_name...
<br>
myargs....
<br>
MYID = 0 
<br>
numprocs=4  ncpux[1]=2  ncpux[2]=2  ncpux[3]=1  percpusize:   NM1=32 NM2=32 NM3=32 proc: .0000 on coma03
<br>
end: init_MPI
<br>
<p>user code output begins here...
<br>
<p>
<br><p>
&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
<br>
&lt;!DOCTYPE topology SYSTEM &quot;hwloc.dtd&quot;&gt;
<br>
&lt;topology&gt;
<br>
&nbsp;&nbsp;&lt;object type=&quot;Machine&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000007&quot; complete_cpuset=&quot;0x0000ffff&quot; online_cpuset=&quot;0x0000ffff&quot; allowed_cpuset=&quot;0x00000007&quot; nodeset=&quot;0x00000003&quot; complete_nodeset=&quot;0x00000003&quot; allowed_nodeset=&quot;0x00000003&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;2097152&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIProductName&quot; value=&quot;PowerEdge R720&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIProductVersion&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardName&quot; value=&quot;046V88&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardVersion&quot; value=&quot;A00&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardAssetTag&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisType&quot; value=&quot;23&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisVersion&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisAssetTag&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBIOSVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBIOSVersion&quot; value=&quot;1.2.6&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBIOSDate&quot; value=&quot;05/10/2012&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMISysVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Backend&quot; value=&quot;Linux&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;LinuxCgroup&quot; value=&quot;/slurm/uid_11922/job_106634/step_0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSName&quot; value=&quot;Linux&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSRelease&quot; value=&quot;3.13.0-39-generic&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSVersion&quot; value=&quot;#66-Ubuntu SMP Tue Oct 28 13:30:27 UTC 2014&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;HostName&quot; value=&quot;coma03&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Architecture&quot; value=&quot;x86_64&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;distances nbobjs=&quot;2&quot; relative_depth=&quot;1&quot; latency_base=&quot;10.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;1.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;2.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;2.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;1.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/distances&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;NUMANode&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000005&quot; complete_cpuset=&quot;0x00005555&quot; online_cpuset=&quot;0x00005555&quot; allowed_cpuset=&quot;0x00000005&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; local_memory=&quot;67514843136&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;16483116&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;2097152&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Socket&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000005&quot; complete_cpuset=&quot;0x00005555&quot; online_cpuset=&quot;0x00005555&quot; allowed_cpuset=&quot;0x00000005&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;CPUModel&quot; value=&quot;Intel(R) Xeon(R) CPU E5-2660 0 @ 2.20GHz&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000005&quot; complete_cpuset=&quot;0x00005555&quot; online_cpuset=&quot;0x00005555&quot; allowed_cpuset=&quot;0x00000005&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;20971520&quot; depth=&quot;3&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;20&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0x00000001&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;262144&quot; depth=&quot;2&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0x00000001&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;1&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0x00000001&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0x00000001&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0x00000001&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00000004&quot; online_cpuset=&quot;0x00000004&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;262144&quot; depth=&quot;2&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00000004&quot; online_cpuset=&quot;0x00000004&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;1&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00000004&quot; online_cpuset=&quot;0x00000004&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00000004&quot; online_cpuset=&quot;0x00000004&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_index=&quot;2&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00000004&quot; online_cpuset=&quot;0x00000004&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;0&quot; bridge_type=&quot;0-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[00-0d]&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;16&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 1a&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[02-02]&quot; pci_busid=&quot;0000:00:01.0&quot; pci_type=&quot;0604 [8086:3c02] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 1a&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;8192&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:02:00.0&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em3&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:6f:d7&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;8193&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:02:00.1&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em4&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:6f:d8&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;17&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 1b&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[01-01]&quot; pci_busid=&quot;0000:00:01.1&quot; pci_type=&quot;0604 [8086:3c03] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 1b&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;4096&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:01:00.0&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em1&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:6f:d5&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;4097&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:01:00.1&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em2&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:6f:d6&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;34&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 2c&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[03-03]&quot; pci_busid=&quot;0000:00:02.2&quot; pci_type=&quot;0604 [8086:3c06] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 2c&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;12288&quot; name=&quot;LSI Logic / Symbios Logic MegaRAID SAS 2208 [Thunderbolt]&quot; pci_busid=&quot;0000:03:00.0&quot; pci_type=&quot;0104 [1000:005b] [1028:1f38] 01&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;LSI Logic / Symbios Logic&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;MegaRAID SAS 2208 [Thunderbolt]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;sda&quot; osdev_type=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;48&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[05-05]&quot; pci_busid=&quot;0000:00:03.0&quot; pci_type=&quot;0604 [8086:3c08] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;20480&quot; name=&quot;NVIDIA Corporation GF110GL [Tesla M2090]&quot; pci_busid=&quot;0000:05:00.0&quot; pci_type=&quot;0302 [10de:1091] [10de:0887] a1&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;NVIDIA Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;GF110GL [Tesla M2090]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;card0&quot; osdev_type=&quot;1&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;455&quot; name=&quot;Intel Corporation C600/X79 series chipset PCI Express Root Port 8&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[08-0c]&quot; pci_busid=&quot;0000:00:1c.7&quot; pci_type=&quot;0604 [8086:1d1e] [0000:0000] b5&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;C600/X79 series chipset PCI Express Root Port 8&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;32768&quot; name=&quot;Renesas Technology Corp. SH7757 PCIe Switch [PS]&quot; bridge_type=&quot;1-1&quot; depth=&quot;1&quot; bridge_pci=&quot;0000:[09-0c]&quot; pci_busid=&quot;0000:08:00.0&quot; pci_type=&quot;0604 [1912:0013] [0000:0000] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Renesas Technology Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;SH7757 PCIe Switch [PS]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;36864&quot; name=&quot;Renesas Technology Corp. SH7757 PCIe Switch [PS]&quot; bridge_type=&quot;1-1&quot; depth=&quot;2&quot; bridge_pci=&quot;0000:[0a-0b]&quot; pci_busid=&quot;0000:09:00.0&quot; pci_type=&quot;0604 [1912:0013] [0000:0000] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Renesas Technology Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;SH7757 PCIe Switch [PS]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;40960&quot; name=&quot;Renesas Technology Corp. SH7757 PCIe-PCI Bridge [PPB]&quot; bridge_type=&quot;1-1&quot; depth=&quot;3&quot; bridge_pci=&quot;0000:[0b-0b]&quot; pci_busid=&quot;0000:0a:00.0&quot; pci_type=&quot;0604 [1912:0012] [0000:0000] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Renesas Technology Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;SH7757 PCIe-PCI Bridge [PPB]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;45056&quot; name=&quot;Matrox Electronics Systems Ltd. G200eR2&quot; pci_busid=&quot;0000:0b:00.0&quot; pci_type=&quot;0300 [102b:0534] [1028:048c] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Matrox Electronics Systems Ltd.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;G200eR2&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;NUMANode&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x0000aaaa&quot; online_cpuset=&quot;0x0000aaaa&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; local_memory=&quot;67643228160&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;16514460&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;2097152&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Socket&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x0000aaaa&quot; online_cpuset=&quot;0x0000aaaa&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;CPUModel&quot; value=&quot;Intel(R) Xeon(R) CPU E5-2660 0 @ 2.20GHz&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x0000aaaa&quot; online_cpuset=&quot;0x0000aaaa&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; cache_size=&quot;20971520&quot; depth=&quot;3&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;20&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x00000002&quot; online_cpuset=&quot;0x00000002&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; cache_size=&quot;262144&quot; depth=&quot;2&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x00000002&quot; online_cpuset=&quot;0x00000002&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;1&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x00000002&quot; online_cpuset=&quot;0x00000002&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x00000002&quot; online_cpuset=&quot;0x00000002&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x00000002&quot; online_cpuset=&quot;0x00000002&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;2&quot; bridge_type=&quot;0-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[40-44]&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;262192&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[43-43]&quot; pci_busid=&quot;0000:40:03.0&quot; pci_type=&quot;0604 [8086:3c08] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;274432&quot; name=&quot;QLogic Corp. IBA7322 QDR InfiniBand HCA&quot; pci_busid=&quot;0000:43:00.0&quot; pci_type=&quot;0c06 [1077:7322] [1077:7322] 02&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;QLogic Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;IBA7322 QDR InfiniBand HCA&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;ib0&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;80:00:00:03:fe:80:00:00:00:00:00:00:00:11:75:00:00:76:f1:86&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port&quot; value=&quot;1&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;qib0&quot; osdev_type=&quot;3&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;NodeGUID&quot; value=&quot;0011:7500:0076:f186&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;SysImageGUID&quot; value=&quot;0011:7500:0076:f186&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1State&quot; value=&quot;4&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1LID&quot; value=&quot;0xa&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1LMC&quot; value=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1GID0&quot; value=&quot;fe80:0000:0000:0000:0011:7500:0076:f186&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&lt;/object&gt;
<br>
&lt;/topology&gt;
<br>
&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
<br>
&lt;!DOCTYPE topology SYSTEM &quot;hwloc.dtd&quot;&gt;
<br>
&lt;topology&gt;
<br>
&nbsp;&nbsp;&lt;object type=&quot;Machine&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000007&quot; complete_cpuset=&quot;0x0000ffff&quot; online_cpuset=&quot;0x0000ffff&quot; allowed_cpuset=&quot;0x00000007&quot; nodeset=&quot;0x00000003&quot; complete_nodeset=&quot;0x00000003&quot; allowed_nodeset=&quot;0x00000003&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;2097152&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIProductName&quot; value=&quot;PowerEdge R720&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIProductVersion&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardName&quot; value=&quot;046V88&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardVersion&quot; value=&quot;A00&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardAssetTag&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisType&quot; value=&quot;23&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisVersion&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisAssetTag&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBIOSVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBIOSVersion&quot; value=&quot;1.2.6&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBIOSDate&quot; value=&quot;05/10/2012&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMISysVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Backend&quot; value=&quot;Linux&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;LinuxCgroup&quot; value=&quot;/slurm/uid_11922/job_106634/step_0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSName&quot; value=&quot;Linux&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSRelease&quot; value=&quot;3.13.0-39-generic&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSVersion&quot; value=&quot;#66-Ubuntu SMP Tue Oct 28 13:30:27 UTC 2014&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;HostName&quot; value=&quot;coma03&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Architecture&quot; value=&quot;x86_64&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;distances nbobjs=&quot;2&quot; relative_depth=&quot;1&quot; latency_base=&quot;10.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;1.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;2.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;2.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;1.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/distances&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;NUMANode&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000005&quot; complete_cpuset=&quot;0x00005555&quot; online_cpuset=&quot;0x00005555&quot; allowed_cpuset=&quot;0x00000005&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; local_memory=&quot;67514843136&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;16483116&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;2097152&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Socket&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000005&quot; complete_cpuset=&quot;0x00005555&quot; online_cpuset=&quot;0x00005555&quot; allowed_cpuset=&quot;0x00000005&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;CPUModel&quot; value=&quot;Intel(R) Xeon(R) CPU E5-2660 0 @ 2.20GHz&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000005&quot; complete_cpuset=&quot;0x00005555&quot; online_cpuset=&quot;0x00005555&quot; allowed_cpuset=&quot;0x00000005&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;20971520&quot; depth=&quot;3&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;20&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0x00000001&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;262144&quot; depth=&quot;2&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0x00000001&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;1&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0x00000001&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0x00000001&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0x00000001&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00000004&quot; online_cpuset=&quot;0x00000004&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;262144&quot; depth=&quot;2&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00000004&quot; online_cpuset=&quot;0x00000004&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;1&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00000004&quot; online_cpuset=&quot;0x00000004&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00000004&quot; online_cpuset=&quot;0x00000004&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_index=&quot;2&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00000004&quot; online_cpuset=&quot;0x00000004&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;0&quot; bridge_type=&quot;0-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[00-0d]&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;16&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 1a&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[02-02]&quot; pci_busid=&quot;0000:00:01.0&quot; pci_type=&quot;0604 [8086:3c02] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 1a&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;8192&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:02:00.0&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em3&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:6f:d7&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;8193&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:02:00.1&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em4&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:6f:d8&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;17&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 1b&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[01-01]&quot; pci_busid=&quot;0000:00:01.1&quot; pci_type=&quot;0604 [8086:3c03] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 1b&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;4096&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:01:00.0&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em1&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:6f:d5&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;4097&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:01:00.1&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em2&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:6f:d6&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;34&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 2c&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[03-03]&quot; pci_busid=&quot;0000:00:02.2&quot; pci_type=&quot;0604 [8086:3c06] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 2c&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;12288&quot; name=&quot;LSI Logic / Symbios Logic MegaRAID SAS 2208 [Thunderbolt]&quot; pci_busid=&quot;0000:03:00.0&quot; pci_type=&quot;0104 [1000:005b] [1028:1f38] 01&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;LSI Logic / Symbios Logic&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;MegaRAID SAS 2208 [Thunderbolt]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;sda&quot; osdev_type=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;48&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[05-05]&quot; pci_busid=&quot;0000:00:03.0&quot; pci_type=&quot;0604 [8086:3c08] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;20480&quot; name=&quot;NVIDIA Corporation GF110GL [Tesla M2090]&quot; pci_busid=&quot;0000:05:00.0&quot; pci_type=&quot;0302 [10de:1091] [10de:0887] a1&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;NVIDIA Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;GF110GL [Tesla M2090]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;card0&quot; osdev_type=&quot;1&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;455&quot; name=&quot;Intel Corporation C600/X79 series chipset PCI Express Root Port 8&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[08-0c]&quot; pci_busid=&quot;0000:00:1c.7&quot; pci_type=&quot;0604 [8086:1d1e] [0000:0000] b5&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;C600/X79 series chipset PCI Express Root Port 8&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;32768&quot; name=&quot;Renesas Technology Corp. SH7757 PCIe Switch [PS]&quot; bridge_type=&quot;1-1&quot; depth=&quot;1&quot; bridge_pci=&quot;0000:[09-0c]&quot; pci_busid=&quot;0000:08:00.0&quot; pci_type=&quot;0604 [1912:0013] [0000:0000] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Renesas Technology Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;SH7757 PCIe Switch [PS]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;36864&quot; name=&quot;Renesas Technology Corp. SH7757 PCIe Switch [PS]&quot; bridge_type=&quot;1-1&quot; depth=&quot;2&quot; bridge_pci=&quot;0000:[0a-0b]&quot; pci_busid=&quot;0000:09:00.0&quot; pci_type=&quot;0604 [1912:0013] [0000:0000] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Renesas Technology Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;SH7757 PCIe Switch [PS]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;40960&quot; name=&quot;Renesas Technology Corp. SH7757 PCIe-PCI Bridge [PPB]&quot; bridge_type=&quot;1-1&quot; depth=&quot;3&quot; bridge_pci=&quot;0000:[0b-0b]&quot; pci_busid=&quot;0000:0a:00.0&quot; pci_type=&quot;0604 [1912:0012] [0000:0000] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Renesas Technology Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;SH7757 PCIe-PCI Bridge [PPB]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;45056&quot; name=&quot;Matrox Electronics Systems Ltd. G200eR2&quot; pci_busid=&quot;0000:0b:00.0&quot; pci_type=&quot;0300 [102b:0534] [1028:048c] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Matrox Electronics Systems Ltd.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;G200eR2&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;NUMANode&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x0000aaaa&quot; online_cpuset=&quot;0x0000aaaa&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; local_memory=&quot;67643228160&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;16514460&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;2097152&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Socket&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x0000aaaa&quot; online_cpuset=&quot;0x0000aaaa&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;CPUModel&quot; value=&quot;Intel(R) Xeon(R) CPU E5-2660 0 @ 2.20GHz&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x0000aaaa&quot; online_cpuset=&quot;0x0000aaaa&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; cache_size=&quot;20971520&quot; depth=&quot;3&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;20&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x00000002&quot; online_cpuset=&quot;0x00000002&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; cache_size=&quot;262144&quot; depth=&quot;2&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x00000002&quot; online_cpuset=&quot;0x00000002&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;1&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x00000002&quot; online_cpuset=&quot;0x00000002&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x00000002&quot; online_cpuset=&quot;0x00000002&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x00000002&quot; online_cpuset=&quot;0x00000002&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;2&quot; bridge_type=&quot;0-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[40-44]&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;262192&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[43-43]&quot; pci_busid=&quot;0000:40:03.0&quot; pci_type=&quot;0604 [8086:3c08] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;274432&quot; name=&quot;QLogic Corp. IBA7322 QDR InfiniBand HCA&quot; pci_busid=&quot;0000:43:00.0&quot; pci_type=&quot;0c06 [1077:7322] [1077:7322] 02&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;QLogic Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;IBA7322 QDR InfiniBand HCA&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;ib0&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;80:00:00:03:fe:80:00:00:00:00:00:00:00:11:75:00:00:76:f1:86&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port&quot; value=&quot;1&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;qib0&quot; osdev_type=&quot;3&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;NodeGUID&quot; value=&quot;0011:7500:0076:f186&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;SysImageGUID&quot; value=&quot;0011:7500:0076:f186&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1State&quot; value=&quot;4&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1LID&quot; value=&quot;0xa&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1LMC&quot; value=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1GID0&quot; value=&quot;fe80:0000:0000:0000:0011:7500:0076:f186&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&lt;/object&gt;
<br>
&lt;/topology&gt;
<br>
&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
<br>
&lt;!DOCTYPE topology SYSTEM &quot;hwloc.dtd&quot;&gt;
<br>
&lt;topology&gt;
<br>
&nbsp;&nbsp;&lt;object type=&quot;Machine&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000007&quot; complete_cpuset=&quot;0x0000ffff&quot; online_cpuset=&quot;0x0000ffff&quot; allowed_cpuset=&quot;0x00000007&quot; nodeset=&quot;0x00000003&quot; complete_nodeset=&quot;0x00000003&quot; allowed_nodeset=&quot;0x00000003&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;2097152&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIProductName&quot; value=&quot;PowerEdge R720&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIProductVersion&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardName&quot; value=&quot;046V88&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardVersion&quot; value=&quot;A00&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardAssetTag&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisType&quot; value=&quot;23&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisVersion&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisAssetTag&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBIOSVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBIOSVersion&quot; value=&quot;1.2.6&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBIOSDate&quot; value=&quot;05/10/2012&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMISysVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Backend&quot; value=&quot;Linux&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;LinuxCgroup&quot; value=&quot;/slurm/uid_11922/job_106634/step_0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSName&quot; value=&quot;Linux&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSRelease&quot; value=&quot;3.13.0-39-generic&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSVersion&quot; value=&quot;#66-Ubuntu SMP Tue Oct 28 13:30:27 UTC 2014&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;HostName&quot; value=&quot;coma03&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Architecture&quot; value=&quot;x86_64&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;distances nbobjs=&quot;2&quot; relative_depth=&quot;1&quot; latency_base=&quot;10.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;1.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;2.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;2.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;1.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/distances&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;NUMANode&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000005&quot; complete_cpuset=&quot;0x00005555&quot; online_cpuset=&quot;0x00005555&quot; allowed_cpuset=&quot;0x00000005&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; local_memory=&quot;67514843136&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;16483116&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;2097152&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Socket&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000005&quot; complete_cpuset=&quot;0x00005555&quot; online_cpuset=&quot;0x00005555&quot; allowed_cpuset=&quot;0x00000005&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;CPUModel&quot; value=&quot;Intel(R) Xeon(R) CPU E5-2660 0 @ 2.20GHz&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000005&quot; complete_cpuset=&quot;0x00005555&quot; online_cpuset=&quot;0x00005555&quot; allowed_cpuset=&quot;0x00000005&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;20971520&quot; depth=&quot;3&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;20&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0x00000001&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;262144&quot; depth=&quot;2&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0x00000001&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;1&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0x00000001&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0x00000001&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0x00000001&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00000004&quot; online_cpuset=&quot;0x00000004&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;262144&quot; depth=&quot;2&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00000004&quot; online_cpuset=&quot;0x00000004&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;1&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00000004&quot; online_cpuset=&quot;0x00000004&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00000004&quot; online_cpuset=&quot;0x00000004&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_index=&quot;2&quot; cpuset=&quot;0x00000004&quot; complete_cpuset=&quot;0x00000004&quot; online_cpuset=&quot;0x00000004&quot; allowed_cpuset=&quot;0x00000004&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;0&quot; bridge_type=&quot;0-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[00-0d]&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;16&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 1a&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[02-02]&quot; pci_busid=&quot;0000:00:01.0&quot; pci_type=&quot;0604 [8086:3c02] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 1a&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;8192&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:02:00.0&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em3&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:6f:d7&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;8193&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:02:00.1&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em4&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:6f:d8&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;17&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 1b&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[01-01]&quot; pci_busid=&quot;0000:00:01.1&quot; pci_type=&quot;0604 [8086:3c03] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 1b&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;4096&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:01:00.0&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em1&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:6f:d5&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;4097&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:01:00.1&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em2&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:6f:d6&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;34&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 2c&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[03-03]&quot; pci_busid=&quot;0000:00:02.2&quot; pci_type=&quot;0604 [8086:3c06] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 2c&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;12288&quot; name=&quot;LSI Logic / Symbios Logic MegaRAID SAS 2208 [Thunderbolt]&quot; pci_busid=&quot;0000:03:00.0&quot; pci_type=&quot;0104 [1000:005b] [1028:1f38] 01&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;LSI Logic / Symbios Logic&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;MegaRAID SAS 2208 [Thunderbolt]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;sda&quot; osdev_type=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;48&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[05-05]&quot; pci_busid=&quot;0000:00:03.0&quot; pci_type=&quot;0604 [8086:3c08] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;20480&quot; name=&quot;NVIDIA Corporation GF110GL [Tesla M2090]&quot; pci_busid=&quot;0000:05:00.0&quot; pci_type=&quot;0302 [10de:1091] [10de:0887] a1&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;NVIDIA Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;GF110GL [Tesla M2090]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;card0&quot; osdev_type=&quot;1&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;455&quot; name=&quot;Intel Corporation C600/X79 series chipset PCI Express Root Port 8&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[08-0c]&quot; pci_busid=&quot;0000:00:1c.7&quot; pci_type=&quot;0604 [8086:1d1e] [0000:0000] b5&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;C600/X79 series chipset PCI Express Root Port 8&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;32768&quot; name=&quot;Renesas Technology Corp. SH7757 PCIe Switch [PS]&quot; bridge_type=&quot;1-1&quot; depth=&quot;1&quot; bridge_pci=&quot;0000:[09-0c]&quot; pci_busid=&quot;0000:08:00.0&quot; pci_type=&quot;0604 [1912:0013] [0000:0000] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Renesas Technology Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;SH7757 PCIe Switch [PS]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;36864&quot; name=&quot;Renesas Technology Corp. SH7757 PCIe Switch [PS]&quot; bridge_type=&quot;1-1&quot; depth=&quot;2&quot; bridge_pci=&quot;0000:[0a-0b]&quot; pci_busid=&quot;0000:09:00.0&quot; pci_type=&quot;0604 [1912:0013] [0000:0000] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Renesas Technology Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;SH7757 PCIe Switch [PS]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;40960&quot; name=&quot;Renesas Technology Corp. SH7757 PCIe-PCI Bridge [PPB]&quot; bridge_type=&quot;1-1&quot; depth=&quot;3&quot; bridge_pci=&quot;0000:[0b-0b]&quot; pci_busid=&quot;0000:0a:00.0&quot; pci_type=&quot;0604 [1912:0012] [0000:0000] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Renesas Technology Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;SH7757 PCIe-PCI Bridge [PPB]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;45056&quot; name=&quot;Matrox Electronics Systems Ltd. G200eR2&quot; pci_busid=&quot;0000:0b:00.0&quot; pci_type=&quot;0300 [102b:0534] [1028:048c] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Matrox Electronics Systems Ltd.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;G200eR2&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;NUMANode&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x0000aaaa&quot; online_cpuset=&quot;0x0000aaaa&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; local_memory=&quot;67643228160&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;16514460&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;2097152&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Socket&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x0000aaaa&quot; online_cpuset=&quot;0x0000aaaa&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;CPUModel&quot; value=&quot;Intel(R) Xeon(R) CPU E5-2660 0 @ 2.20GHz&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x0000aaaa&quot; online_cpuset=&quot;0x0000aaaa&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; cache_size=&quot;20971520&quot; depth=&quot;3&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;20&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x00000002&quot; online_cpuset=&quot;0x00000002&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; cache_size=&quot;262144&quot; depth=&quot;2&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x00000002&quot; online_cpuset=&quot;0x00000002&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;1&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x00000002&quot; online_cpuset=&quot;0x00000002&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x00000002&quot; online_cpuset=&quot;0x00000002&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_index=&quot;1&quot; cpuset=&quot;0x00000002&quot; complete_cpuset=&quot;0x00000002&quot; online_cpuset=&quot;0x00000002&quot; allowed_cpuset=&quot;0x00000002&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;2&quot; bridge_type=&quot;0-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[40-44]&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;262192&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot; bridge_type=&quot;1-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[43-43]&quot; pci_busid=&quot;0000:40:03.0&quot; pci_type=&quot;0604 [8086:3c08] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;274432&quot; name=&quot;QLogic Corp. IBA7322 QDR InfiniBand HCA&quot; pci_busid=&quot;0000:43:00.0&quot; pci_type=&quot;0c06 [1077:7322] [1077:7322] 02&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;QLogic Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;IBA7322 QDR InfiniBand HCA&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;ib0&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;80:00:00:03:fe:80:00:00:00:00:00:00:00:11:75:00:00:76:f1:86&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port&quot; value=&quot;1&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;qib0&quot; osdev_type=&quot;3&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;NodeGUID&quot; value=&quot;0011:7500:0076:f186&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;SysImageGUID&quot; value=&quot;0011:7500:0076:f186&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1State&quot; value=&quot;4&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1LID&quot; value=&quot;0xa&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1LMC&quot; value=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1GID0&quot; value=&quot;fe80:0000:0000:0000:0011:7500:0076:f186&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&lt;/object&gt;
<br>
&lt;/topology&gt;
<br>
&lt;?xml version=&quot;1.0&quot; encoding=&quot;UTF-8&quot;?&gt;
<br>
&lt;!DOCTYPE topology SYSTEM &quot;hwloc.dtd&quot;&gt;
<br>
&lt;topology&gt;
<br>
&nbsp;&nbsp;&lt;object type=&quot;Machine&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x0000ffff&quot; online_cpuset=&quot;0x0000ffff&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000003&quot; complete_nodeset=&quot;0x00000003&quot; allowed_nodeset=&quot;0x00000003&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;2097152&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIProductName&quot; value=&quot;PowerEdge R720&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIProductVersion&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardName&quot; value=&quot;046V88&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardVersion&quot; value=&quot;A00&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBoardAssetTag&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisType&quot; value=&quot;23&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisVersion&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIChassisAssetTag&quot; value=&quot;&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBIOSVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBIOSVersion&quot; value=&quot;1.2.6&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMIBIOSDate&quot; value=&quot;05/10/2012&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;DMISysVendor&quot; value=&quot;Dell Inc.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Backend&quot; value=&quot;Linux&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;LinuxCgroup&quot; value=&quot;/slurm/uid_11922/job_106634/step_0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSName&quot; value=&quot;Linux&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSRelease&quot; value=&quot;3.13.0-40-generic&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;OSVersion&quot; value=&quot;#69-Ubuntu SMP Thu Nov 13 17:53:56 UTC 2014&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;HostName&quot; value=&quot;coma04&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Architecture&quot; value=&quot;x86_64&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;distances nbobjs=&quot;2&quot; relative_depth=&quot;1&quot; latency_base=&quot;10.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;1.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;2.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;2.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;latency value=&quot;1.000000&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/distances&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;NUMANode&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00005555&quot; online_cpuset=&quot;0x00005555&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; local_memory=&quot;67514843136&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;16483116&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;2097152&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Socket&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00005555&quot; online_cpuset=&quot;0x00005555&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;CPUModel&quot; value=&quot;Intel(R) Xeon(R) CPU E5-2660 0 @ 2.20GHz&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00005555&quot; online_cpuset=&quot;0x00005555&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;20971520&quot; depth=&quot;3&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;20&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0x00000001&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;262144&quot; depth=&quot;2&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0x00000001&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;1&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Cache&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0x00000001&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot; cache_size=&quot;32768&quot; depth=&quot;1&quot; cache_linesize=&quot;64&quot; cache_associativity=&quot;8&quot; cache_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Core&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0x00000001&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PU&quot; os_index=&quot;0&quot; cpuset=&quot;0x00000001&quot; complete_cpuset=&quot;0x00000001&quot; online_cpuset=&quot;0x00000001&quot; allowed_cpuset=&quot;0x00000001&quot; nodeset=&quot;0x00000001&quot; complete_nodeset=&quot;0x00000001&quot; allowed_nodeset=&quot;0x00000001&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;NUMANode&quot; os_index=&quot;1&quot; cpuset=&quot;0x0&quot; complete_cpuset=&quot;0x0000aaaa&quot; online_cpuset=&quot;0x0000aaaa&quot; allowed_cpuset=&quot;0x0&quot; nodeset=&quot;0x00000002&quot; complete_nodeset=&quot;0x00000002&quot; allowed_nodeset=&quot;0x00000002&quot; local_memory=&quot;67643228160&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;4096&quot; count=&quot;16514460&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;page_type size=&quot;2097152&quot; count=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;0&quot; bridge_type=&quot;0-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[00-0d]&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;16&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 1a&quot; bridge_type=&quot;1-1&quot; depth=&quot;1&quot; bridge_pci=&quot;0000:[02-02]&quot; pci_busid=&quot;0000:00:01.0&quot; pci_type=&quot;0604 [8086:3c02] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 1a&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;8192&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:02:00.0&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em3&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:88:12&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;8193&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:02:00.1&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em4&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:88:13&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;17&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 1b&quot; bridge_type=&quot;1-1&quot; depth=&quot;1&quot; bridge_pci=&quot;0000:[01-01]&quot; pci_busid=&quot;0000:00:01.1&quot; pci_type=&quot;0604 [8086:3c03] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 1b&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;4096&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:01:00.0&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em1&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:88:10&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;4097&quot; name=&quot;Broadcom Corporation NetXtreme BCM5720 Gigabit Ethernet PCIe&quot; pci_busid=&quot;0000:01:00.1&quot; pci_type=&quot;0200 [14e4:165f] [1028:1f5b] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Broadcom Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;NetXtreme BCM5720 Gigabit Ethernet PCIe&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;em2&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;d4:ae:52:ad:88:11&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;34&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 2c&quot; bridge_type=&quot;1-1&quot; depth=&quot;1&quot; bridge_pci=&quot;0000:[03-03]&quot; pci_busid=&quot;0000:00:02.2&quot; pci_type=&quot;0604 [8086:3c06] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 2c&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;12288&quot; name=&quot;LSI Logic / Symbios Logic MegaRAID SAS 2208 [Thunderbolt]&quot; pci_busid=&quot;0000:03:00.0&quot; pci_type=&quot;0104 [1000:005b] [1028:1f38] 01&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;LSI Logic / Symbios Logic&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;MegaRAID SAS 2208 [Thunderbolt]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;sda&quot; osdev_type=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;48&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot; bridge_type=&quot;1-1&quot; depth=&quot;1&quot; bridge_pci=&quot;0000:[05-05]&quot; pci_busid=&quot;0000:00:03.0&quot; pci_type=&quot;0604 [8086:3c08] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;20480&quot; name=&quot;NVIDIA Corporation GF110GL [Tesla M2090]&quot; pci_busid=&quot;0000:05:00.0&quot; pci_type=&quot;0302 [10de:1091] [10de:0887] a1&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;NVIDIA Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;GF110GL [Tesla M2090]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;card0&quot; osdev_type=&quot;1&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;455&quot; name=&quot;Intel Corporation C600/X79 series chipset PCI Express Root Port 8&quot; bridge_type=&quot;1-1&quot; depth=&quot;1&quot; bridge_pci=&quot;0000:[08-0c]&quot; pci_busid=&quot;0000:00:1c.7&quot; pci_type=&quot;0604 [8086:1d1e] [0000:0000] b5&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;C600/X79 series chipset PCI Express Root Port 8&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;32768&quot; name=&quot;Renesas Technology Corp. SH7757 PCIe Switch [PS]&quot; bridge_type=&quot;1-1&quot; depth=&quot;2&quot; bridge_pci=&quot;0000:[09-0c]&quot; pci_busid=&quot;0000:08:00.0&quot; pci_type=&quot;0604 [1912:0013] [0000:0000] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Renesas Technology Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;SH7757 PCIe Switch [PS]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;36864&quot; name=&quot;Renesas Technology Corp. SH7757 PCIe Switch [PS]&quot; bridge_type=&quot;1-1&quot; depth=&quot;3&quot; bridge_pci=&quot;0000:[0a-0b]&quot; pci_busid=&quot;0000:09:00.0&quot; pci_type=&quot;0604 [1912:0013] [0000:0000] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Renesas Technology Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;SH7757 PCIe Switch [PS]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;40960&quot; name=&quot;Renesas Technology Corp. SH7757 PCIe-PCI Bridge [PPB]&quot; bridge_type=&quot;1-1&quot; depth=&quot;4&quot; bridge_pci=&quot;0000:[0b-0b]&quot; pci_busid=&quot;0000:0a:00.0&quot; pci_type=&quot;0604 [1912:0012] [0000:0000] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Renesas Technology Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;SH7757 PCIe-PCI Bridge [PPB]&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;45056&quot; name=&quot;Matrox Electronics Systems Ltd. G200eR2&quot; pci_busid=&quot;0000:0b:00.0&quot; pci_type=&quot;0300 [102b:0534] [1028:048c] 00&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Matrox Electronics Systems Ltd.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;G200eR2&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;2&quot; bridge_type=&quot;0-1&quot; depth=&quot;0&quot; bridge_pci=&quot;0000:[40-44]&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;Bridge&quot; os_index=&quot;262192&quot; name=&quot;Intel Corporation Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot; bridge_type=&quot;1-1&quot; depth=&quot;1&quot; bridge_pci=&quot;0000:[43-43]&quot; pci_busid=&quot;0000:40:03.0&quot; pci_type=&quot;0604 [8086:3c08] [0000:0000] 07&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;Intel Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;Xeon E5/Core i7 IIO PCI Express Root Port 3a in PCI Express Mode&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;274432&quot; name=&quot;QLogic Corp. IBA7322 QDR InfiniBand HCA&quot; pci_busid=&quot;0000:43:00.0&quot; pci_type=&quot;0c06 [1077:7322] [1077:7322] 02&quot; pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;QLogic Corp.&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIDevice&quot; value=&quot;IBA7322 QDR InfiniBand HCA&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;ib0&quot; osdev_type=&quot;2&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Address&quot; value=&quot;80:00:00:03:fe:80:00:00:00:00:00:00:00:11:75:00:00:76:f4:80&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port&quot; value=&quot;1&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;OSDev&quot; name=&quot;qib0&quot; osdev_type=&quot;3&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;NodeGUID&quot; value=&quot;0011:7500:0076:f480&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;SysImageGUID&quot; value=&quot;0011:7500:0076:f480&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1State&quot; value=&quot;4&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1LID&quot; value=&quot;0x8&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1LMC&quot; value=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;Port1GID0&quot; value=&quot;fe80:0000:0000:0000:0011:7500:0076:f480&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
&nbsp;&nbsp;&lt;/object&gt;
<br>
&lt;/topology&gt;
<br>
Begin: init_MPI
<br>
MPI_Init....
<br>
Begin: init_MPI
<br>
MPI_Init....
<br>
Begin: init_MPI
<br>
MPI_Init....
<br>
Begin: init_MPI
<br>
MPI_Init....
<br>
MPI_Comm_size....
<br>
MPI_Comm_size....
<br>
MPI_Comm_rank....
<br>
MPI_Get_processor_name...
<br>
myargs....
<br>
MYID = 1 
<br>
numprocs=4  ncpux[1]=2  ncpux[2]=2  ncpux[3]=1  percpusize:   NM1=32 NM2=32 NM3=32 proc: .0001 on coma03
<br>
end: init_MPI
<br>
MPI_Comm_rank....
<br>
MPI_Get_processor_name...
<br>
myargs....
<br>
MYID = 0 
<br>
numprocs=4  ncpux[1]=2  ncpux[2]=2  ncpux[3]=1  percpusize:   NM1=32 NM2=32 NM3=32 proc: .0000 on coma03
<br>
end: init_MPI
<br>
<p>################# MPI DOMAIN INFO ################################
<br>
MPI-DOM: pid=1 : ncpux[0-3]     =    1    2    2    1 
<br>
MPI-DOM: pid=1 : cpupos[0-3]    =    0    1    0    0 
<br>
MPI-DOM: pid=1 : totalsize[0-3] =    1   64   64   32 
<br>
MPI-DOM: pid=1 : globalpos[0-3] =    0   32    0    0 
<br>
MPI-DOM: pid=1 : n_cells_glob   = 131072 
<br>
MPI-DOM: pid=1 : global_index   = 65536 
<br>
MPI-DOM: pid=1 : numprocs       = 4 
<br>
MPI-DOM: pid=1 : n_spatial_dims = 3 
<br>
###################################################################
<br>
<p>################# MPI DOMAIN INFO ################################
<br>
MPI_Comm_size....
<br>
MPI_Comm_rank....
<br>
MPI_Get_processor_name...
<br>
MPI-DOM: pid=0 : ncpux[0-3]     =    1    2    2    1 
<br>
myargs....
<br>
MYID = 3 
<br>
numprocs=4  ncpux[1]=2  ncpux[2]=2  ncpux[3]=1  percpusize:   NM1=32 NM2=32 NM3=32 proc: .0003 on coma04
<br>
end: init_MPI
<br>
MPI-DOM: pid=0 : cpupos[0-3]    =    0    0    0    0 
<br>
MPI-DOM: pid=0 : totalsize[0-3] =    1   64   64   32 
<br>
MPI-DOM: pid=0 : globalpos[0-3] =    0    0    0    0 
<br>
MPI-DOM: pid=0 : n_cells_glob   = 131072 
<br>
MPI-DOM: pid=0 : global_index   = 0 
<br>
MPI-DOM: pid=0 : numprocs       = 4 
<br>
MPI-DOM: pid=0 : n_spatial_dims = 3 
<br>
###################################################################
<br>
MPI_Comm_size....
<br>
MPI_Comm_rank....
<br>
MPI_Get_processor_name...
<br>
myargs....
<br>
MYID = 2 
<br>
numprocs=4  ncpux[1]=2  ncpux[2]=2  ncpux[3]=1  percpusize:   NM1=32 NM2=32 NM3=32 proc: .0002 on coma03
<br>
end: init_MPI
<br>
<p>user code output begins here...
<br>
<p>
<br><p>
<p><p><span class="quotelev1">&gt; On 09 Dec 2014, at 09:38, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pim,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if you configure OpenMPI with --with-hwloc=external (or something like
</span><br>
<span class="quotelev1">&gt; --with-hwloc=/usr) it is very likely
</span><br>
<span class="quotelev1">&gt; OpenMPI will use the same hwloc library (e.g. the &quot;system&quot; library) that
</span><br>
<span class="quotelev1">&gt; is used by SLURM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* i do not know how Ubuntu packages OpenMPI ... */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The default (e.g. no --with-hwloc parameter in the configure command
</span><br>
<span class="quotelev1">&gt; line) is to use the hwloc library that is embedded within OpenMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/12/09 17:34, Pim Schellart wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ah, ok so that was where the confusion came from, I did see hwloc in the SLURM sources but couldn&#226;&#128;&#153;t immediately figure out where exactly it was used. We will try compiling openmpi with the embedded hwloc. Any particular flags I should set?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 09 Dec 2014, at 09:30, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is no linkage between slurm and ompi when it comes to hwloc. If you directly launch your app using srun, then slurm will use its version of hwloc to do the binding. If you use mpirun to launch the app, then we&#226;&#128;&#153;ll use our internal version to do it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The two are completely isolated from each other.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Dec 9, 2014, at 12:25 AM, Pim Schellart &lt;p.schellart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The version that &#226;&#128;&#156;lstopo --version&#226;&#128;&#157; reports is the same (1.8) on all nodes, but we may indeed be hitting the second issue. We can try to compile a new version of openmpi, but how do we ensure that the external programs (e.g. SLURM) are using the same hwloc version as the one embedded in openmpi? Is it enough to just compile hwloc 1.9 separately as well and link against that? Also, if this is an issue, should we file a bug against hwloc or openmpi on Ubuntu for mismatching versions?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 09 Dec 2014, at 00:50, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hmmm&#226;&#128;&#166;they probably linked that to the external, system hwloc version, so it sounds like one or more of your nodes has a different hwloc rpm on it.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I couldn&#226;&#128;&#153;t leaf thru your output well enough to see all the lstopo versions, but you might check to ensure they are the same.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Looking at the code base, you may also hit a problem here. OMPI 1.6 series was based on hwloc 1.3 - the output you sent indicated you have hwloc 1.8, which is quite a big change. OMPI 1.8 series is based on hwloc 1.9, so at least that is closer (though probably still a mismatch).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Frankly, I&#226;&#128;&#153;d just download and install an OMPI tarball myself and avoid these headaches. This mismatch in required versions is why we embed hwloc as it is a critical library for OMPI, and we had to ensure that the version matched our internal requirements.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Dec 8, 2014, at 8:50 AM, Pim Schellart &lt;p.schellart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It is the default openmpi that comes with Ubuntu 14.04.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 08 Dec 2014, at 17:17, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Pim: is this an OMPI you built, or one you were given somehow? If you built it, how did you configure it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Dec 8, 2014, at 8:12 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It likely depends on how SLURM allocates the cpuset/cgroup inside the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; nodes. The XML warning is related to these restrictions inside the node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Anyway, my feeling is that there's a old OMPI or a old hwloc somewhere.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; How do we check after install whether OMPI uses the embedded or the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; system-wide hwloc?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Le 08/12/2014 17:07, Pim Schellart a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dear Ralph,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the nodes are called coma## and as you can see in the logs the nodes of the broken example are the same as the nodes of the working one, so that doesn&#226;&#128;&#153;t seem to be the cause. Unless (very likely) I&#226;&#128;&#153;m missing something. Anything else I can check?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Pim
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 08 Dec 2014, at 17:03, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; As Brice said, OMPI has its own embedded version of hwloc that we use, so there is no Slurm interaction to be considered. The most likely cause is that one or more of your nodes is picking up a different version of OMPI. So things &#226;&#128;&#156;work&#226;&#128;&#157; if you happen to get nodes where all the versions match, and &#226;&#128;&#156;fail&#226;&#128;&#157; when you get a combination that includes a different version.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is there some way you can narrow down your search to find the node(s) that are picking up the different version?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Dec 8, 2014, at 7:48 AM, Pim Schellart &lt;p.schellart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dear Brice,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am not sure why this is happening since all code seems to be using the same hwloc library version (1.8) but it does :) An MPI program is started through SLURM on two nodes with four CPU cores total (divided over the nodes) using the following script:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #! /bin/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; #SBATCH -N 2 -n 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/bin/mpiexec /usr/bin/lstopo --version
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/bin/mpiexec /usr/bin/lstopo --of xml
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/bin/mpiexec  /path/to/my_mpi_code
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When this is submitted multiple times it gives &#226;&#128;&#156;out-of-order&#226;&#128;&#157; warnings in about 9/10 cases but works without warnings in 1/10 cases. I attached the output (with xml) for both the working and `broken` case. Note that the xml is of course printed (differently) multiple times for each task/core. As always, any help would be appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Pim Schellart
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; P.S. $ mpirun --version
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun (Open MPI) 1.6.5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;broken.log&gt;&lt;working.log&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On 07 Dec 2014, at 13:50, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The github issue you're refering to was closed 18 months ago. The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; warning (it's not an error) is only supposed to appear if you're
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; importing in a recent hwloc a XML that was exported from a old hwloc. I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; don't see how that could happen when using Open MPI since the hwloc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; versions on both sides is the same.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Make sure you're not confusing with another error described here
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/projects/hwloc/doc/v1.10.0/a00028.php#faq_os_error">http://www.open-mpi.org/projects/hwloc/doc/v1.10.0/a00028.php#faq_os_error</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Otherwise please report the exact Open MPI and/or hwloc versions as well
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; as the XML lstopo output on the nodes that raise the warning (lstopo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; foo.xml). Send these to hwloc mailing lists such as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; hwloc-users_at_[hidden] or hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Le 07/12/2014 13:29, Pim Schellart a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; this might be a bit off topic but when using the SLURM scheduler (with cpuset support) on Ubuntu 14.04 (openmpi 1.6) hwloc sometimes gives a &quot;out-of-order topology discovery&#226;&#128;&#157; error. According to issue #103 on github (<a href="https://github.com/open-mpi/hwloc/issues/103">https://github.com/open-mpi/hwloc/issues/103</a>) this error was discussed before and it was possible to sort it out in &#226;&#128;&#156;insert_object_by_parent&#226;&#128;&#157;, is this still considered? If not, what (top level) hwloc API call should we look for in the SLURM sources to start debugging? Any help will be most welcome.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Pim Schellart
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16441.php">http://www.open-mpi.org/community/lists/devel/2014/12/16441.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16447.php">http://www.open-mpi.org/community/lists/devel/2014/12/16447.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16448.php">http://www.open-mpi.org/community/lists/devel/2014/12/16448.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16449.php">http://www.open-mpi.org/community/lists/devel/2014/12/16449.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16450.php">http://www.open-mpi.org/community/lists/devel/2014/12/16450.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16451.php">http://www.open-mpi.org/community/lists/devel/2014/12/16451.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16452.php">http://www.open-mpi.org/community/lists/devel/2014/12/16452.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16453.php">http://www.open-mpi.org/community/lists/devel/2014/12/16453.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16458.php">http://www.open-mpi.org/community/lists/devel/2014/12/16458.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16460.php">http://www.open-mpi.org/community/lists/devel/2014/12/16460.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16464.php">http://www.open-mpi.org/community/lists/devel/2014/12/16464.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16465.php">http://www.open-mpi.org/community/lists/devel/2014/12/16465.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16493.php">Brice Goglin: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>Previous message:</strong> <a href="16491.php">Joshua Ladd: "Re: [OMPI devel] [OMPI users] Warning about not enough registerable memory on SL6.6"</a>
<li><strong>In reply to:</strong> <a href="16465.php">Gilles Gouaillardet: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16493.php">Brice Goglin: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>Reply:</strong> <a href="16493.php">Brice Goglin: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>Reply:</strong> <a href="16494.php">Ralph Castain: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>Reply:</strong> <a href="16498.php">Gilles Gouaillardet: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
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
