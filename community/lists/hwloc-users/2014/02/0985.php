<?
$subject_val = "Re: [hwloc-users] Using hwloc to map GPU layout on system";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 14 17:21:17 2014" -->
<!-- isoreceived="20140214222117" -->
<!-- sent="Fri, 14 Feb 2014 17:21:15 -0500" -->
<!-- isosent="20140214222115" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Using hwloc to map GPU layout on system" -->
<!-- id="859C81DB-E23F-44A4-AFDE-32FE3947C538_at_umich.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="52F4F185.5040002_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Using hwloc to map GPU layout on system<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-14 17:21:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/03/0986.php">Biddiscombe, John A.: "[hwloc-users] BGQ question."</a>
<li><strong>Previous message:</strong> <a href="0984.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.8.1 released"</a>
<li><strong>In reply to:</strong> <a href="0980.php">Brice Goglin: "Re: [hwloc-users] Using hwloc to map GPU layout on system"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 7, 2014, at 9:45 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Le 06/02/2014 21:31, Brock Palen a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Actually that did turn out to help. The nvml# devices appear to be numbered in the way that CUDA_VISABLE_DEVICES sees them, while the cuda# devices are in the order that PBS and nvidia-smi see them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By the way, did you have CUDA_VISIBLE_DEVICES set during the lstopo below? Was it set to 2,3,0,1 ? That would explain the reordering.
</span><br>
<p>It was not set, and I have double checked it just now to be sure.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not sure in which order you want to do things in the end. One way that could help is:
</span><br>
<span class="quotelev1">&gt; * Get the locality of each GPU by doing CUDA_VISIBLE_DEVICES=x (for x in 0..number of gpus-1). Each iteration gives a single GPU in hwloc, and you can retrieve the corresponding locality from the cuda0 object.
</span><br>
<span class="quotelev1">&gt; * Once you know which GPUs you want based on the locality info, take the corresponding #x and put them in CUDA_VISIBLE_DEVICES=x,y before you run your program. hwloc will create cuda0 for x and cuda1 for y.
</span><br>
<p>The cuda ID's match the order if you run nvidia-smi  (which gives you PCI addresses)
<br>
<p>The nvml id's  match the order in which they start.  That is CUDA_VISIBLE_DEVICES=0, cudaSetDevice(0) matches nvml0  which matches id 2 for CoProc cuda2 and for nvidia-smi id 2.
<br>
<p>This appears to be very consistent between reboots.
<br>
te
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you don't set CUDA_VISIBLE_DEVICES, cuda* objects are basically out-of-order. nvml objects are (a bit less likely) ordered by PCI bus is (lstopo -v would confirm that).
</span><br>
<p>Yes the nvml and what is ordering is by ascending PCI ID,  nvidia-smi shows this:
<br>
<p>[root_at_nyx7500 ~]# nvidia-smi | grep Tesla
<br>
|   0  Tesla K20Xm         Off  | 0000:09:00.0     Off |                    0 |
<br>
|   1  Tesla K20Xm         Off  | 0000:0A:00.0     Off |                    0 |
<br>
|   2  Tesla K20Xm         Off  | 0000:0D:00.0     Off |                    0 |
<br>
|   3  Tesla K20Xm         Off  | 0000:0E:00.0     Off |                    0 |
<br>
|   4  Tesla K20Xm         Off  | 0000:28:00.0     Off |                    0 |
<br>
|   5  Tesla K20Xm         Off  | 0000:2B:00.0     Off |                    0 |
<br>
|   6  Tesla K20Xm         Off  | 0000:30:00.0     Off |                    0 |
<br>
|   7  Tesla K20Xm         Off  | 0000:33:00.0     Off |                    0 |
<br>
<p>[root_at_nyx7500 ~]# lstopo -v
<br>
Machine (P#0 total=67073288KB DMIProductName=&quot;ProLiant SL270s Gen8   &quot; DMIProductVersion= DMIProductSerial=&quot;USE3267A92      &quot; DMIProductUUID=36353439-3437-5553-4533-323637413932 DMIBoardVendor=HP DMIBoardName= DMIBoardVersion= DMIBoardSerial=&quot;USE3267A92      &quot; DMIBoardAssetTag=&quot;        &quot; DMIChassisVendor=HP DMIChassisType=25 DMIChassisVersion= DMIChassisSerial=&quot;USE3267A90      &quot; DMIChassisAssetTag=&quot;        &quot; DMIBIOSVendor=HP DMIBIOSVersion=P75 DMIBIOSDate=09/18/2013 DMISysVendor=HP Backend=Linux LinuxCgroup=/ OSName=Linux OSRelease=2.6.32-358.23.2.el6.x86_64 OSVersion=&quot;#1 SMP Sat Sep 14 05:32:37 EDT 2013&quot; HostName=nyx7500.engin.umich.edu Architecture=x86_64)
<br>
&nbsp;&nbsp;NUMANode L#0 (P#0 local=33518860KB total=33518860KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Socket L#0 (P#0 CPUModel=&quot;Intel(R) Xeon(R) CPU E5-2670 0 @ 2.60GHz&quot; CPUVendor=GenuineIntel CPUModelNumber=45 CPUFamilyNumber=6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3Cache L#0 (size=20480KB linesize=64 ways=20)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#0 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#0 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#0 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#1 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#1 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#1 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#1 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#1 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#2 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#2 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#2 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#3 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#3 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#3 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#3 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#3 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#4 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#4 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#4 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#4 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#4 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#5 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#5 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#5 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#5 (P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#5 (P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#6 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#6 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#6 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#6 (P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#6 (P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#7 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#7 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#7 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#7 (P#7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#7 (P#7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bridge Host-&gt;PCI L#0 (P#0 buses=0000:[00-14])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#16 busid=0000:00:01.0 id=8086:3c02 class=0604(PCI_B) link=2.00GB/s buses=0000:[05-05])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 1000:0087 (P#20480 busid=0000:05:00.0 class=0107(SAS) link=2.00GB/s)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#0 &quot;sda&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#1 &quot;sdb&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#32 busid=0000:00:02.0 id=8086:3c04 class=0604(PCI_B) link=15.75GB/s buses=0000:[0b-0e])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#45056 busid=0000:0b:00.0 id=10b5:8747 class=0604(PCI_B) link=15.75GB/s buses=0000:[0c-0e])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#49280 busid=0000:0c:08.0 id=10b5:8747 class=0604(PCI_B) link=4.00GB/s buses=0000:[0d-0d])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 10de:1021 (P#53248 busid=0000:0d:00.0 class=0302(3D) link=8.00GB/s)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Co-Processor L#2 (CoProcType=CUDA Backend=CUDA GPUVendor=&quot;NVIDIA Corporation&quot; GPUModel=&quot;Tesla K20Xm&quot;) &quot;cuda0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GPU L#3 (Backend=NVML GPUVendor=&quot;NVIDIA Corporation&quot; GPUModel=&quot;Tesla K20Xm&quot; NVIDIASerial=0320413039409 NVIDIAUUID=GPU-ce438227-9e75-de70-22ea-37dbe4de5219) &quot;nvml2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#49408 busid=0000:0c:10.0 id=10b5:8747 class=0604(PCI_B) link=4.00GB/s buses=0000:[0e-0e])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 10de:1021 (P#57344 busid=0000:0e:00.0 class=0302(3D) link=8.00GB/s)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Co-Processor L#4 (CoProcType=CUDA Backend=CUDA GPUVendor=&quot;NVIDIA Corporation&quot; GPUModel=&quot;Tesla K20Xm&quot;) &quot;cuda1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GPU L#5 (Backend=NVML GPUVendor=&quot;NVIDIA Corporation&quot; GPUModel=&quot;Tesla K20Xm&quot; NVIDIASerial=0320413039509 NVIDIAUUID=GPU-1079ef10-bf05-a0bc-c942-5f6a650b1691) &quot;nvml3&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#48 busid=0000:00:03.0 id=8086:3c08 class=0604(PCI_B) link=15.75GB/s buses=0000:[07-0a])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#28672 busid=0000:07:00.0 id=10b5:8747 class=0604(PCI_B) link=15.75GB/s buses=0000:[08-0a])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#32896 busid=0000:08:08.0 id=10b5:8747 class=0604(PCI_B) link=8.00GB/s buses=0000:[09-09])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 10de:1021 (P#36864 busid=0000:09:00.0 class=0302(3D) link=8.00GB/s)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Co-Processor L#6 (CoProcType=CUDA Backend=CUDA GPUVendor=&quot;NVIDIA Corporation&quot; GPUModel=&quot;Tesla K20Xm&quot;) &quot;cuda2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GPU L#7 (Backend=NVML GPUVendor=&quot;NVIDIA Corporation&quot; GPUModel=&quot;Tesla K20Xm&quot; NVIDIASerial=0320413039709 NVIDIAUUID=GPU-185e845c-0887-501c-75e2-0d025c651910) &quot;nvml0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#33024 busid=0000:08:10.0 id=10b5:8747 class=0604(PCI_B) link=8.00GB/s buses=0000:[0a-0a])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 10de:1021 (P#40960 busid=0000:0a:00.0 class=0302(3D) link=8.00GB/s)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Co-Processor L#8 (CoProcType=CUDA Backend=CUDA GPUVendor=&quot;NVIDIA Corporation&quot; GPUModel=&quot;Tesla K20Xm&quot;) &quot;cuda3&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GPU L#9 (Backend=NVML GPUVendor=&quot;NVIDIA Corporation&quot; GPUModel=&quot;Tesla K20Xm&quot; NVIDIASerial=0320413039717 NVIDIAUUID=GPU-f13fa871-57ce-47b8-a6c3-c8d35efa686d) &quot;nvml1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#448 busid=0000:00:1c.0 id=8086:1d10 class=0604(PCI_B) link=2.00GB/s buses=0000:[02-02])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:1521 (P#8192 busid=0000:02:00.0 class=0200(Ether) link=2.00GB/s)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Network L#10 (Address=c8:cb:b8:cd:18:4a) &quot;eth0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:1521 (P#8193 busid=0000:02:00.1 class=0200(Ether) link=2.00GB/s)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Network L#11 (Address=c8:cb:b8:cd:18:4b) &quot;eth1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#455 busid=0000:00:1c.7 id=8086:1d1e class=0604(PCI_B) link=0.25GB/s buses=0000:[01-01])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 102b:0533 (P#4097 busid=0000:01:00.1 class=0300(VGA) link=0.25GB/s)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:1d02 (P#498 busid=0000:00:1f.2 class=0106(SATA))
<br>
&nbsp;&nbsp;NUMANode L#1 (P#1 local=33554428KB total=33554428KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Socket L#1 (P#1 CPUModel=&quot;Intel(R) Xeon(R) CPU E5-2670 0 @ 2.60GHz&quot; CPUVendor=GenuineIntel CPUModelNumber=45 CPUFamilyNumber=6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3Cache L#1 (size=20480KB linesize=64 ways=20)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#8 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#8 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#8 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#8 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#8 (P#8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#9 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#9 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#9 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#9 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#9 (P#9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#10 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#10 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#10 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#10 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#10 (P#10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#11 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#11 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#11 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#11 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#11 (P#11)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#12 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#12 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#12 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#12 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#12 (P#12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#13 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#13 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#13 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#13 (P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#13 (P#13)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#14 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#14 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#14 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#14 (P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#14 (P#14)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#15 (size=256KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#15 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#15 (size=32KB linesize=64 ways=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#15 (P#7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#15 (P#15)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Bridge Host-&gt;PCI L#12 (P#1 buses=0000:[20-3d])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#131088 busid=0000:20:01.0 id=8086:3c02 class=0604(PCI_B) link=7.88GB/s buses=0000:[21-25])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#135168 busid=0000:21:00.0 id=10b5:8724 class=0604(PCI_B) link=7.88GB/s buses=0000:[22-25])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#139280 busid=0000:22:01.0 id=10b5:8724 class=0604(PCI_B) link=7.88GB/s buses=0000:[23-23])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 15b3:1003 (P#143360 busid=0000:23:00.0 class=0280(Net) link=7.88GB/s)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Network L#12 (Address=24:be:05:8b:e4:e2 Port=2) &quot;eth2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Network L#13 (Address=80:00:00:49:fe:80:00:00:00:00:00:00:24:be:05:ff:ff:8b:e4:e1 Port=1) &quot;ib0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Network L#14 (Address=06:00:00:00:03:29 Port=1) &quot;eoib0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OpenFabrics L#15 (NodeGUID=24be:05ff:ff8b:e4e0 SysImageGUID=24be:05ff:ff8b:e4e3 Port1State=4 Port1LID=0x2f8 Port1LMC=0 Port1GID0=fe80:0000:0000:0000:24be:05ff:ff8b:e4e1 Port2State=1 Port2LID=0x0 Port2LMC=0 Port2GID0=fe80:0000:0000:0000:26be:05ff:fe8b:e4e2) &quot;mlx4_0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#131104 busid=0000:20:02.0 id=8086:3c04 class=0604(PCI_B) link=15.75GB/s buses=0000:[26-2d])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#155648 busid=0000:26:00.0 id=10b5:8747 class=0604(PCI_B) link=15.75GB/s buses=0000:[27-2d])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#159872 busid=0000:27:08.0 id=10b5:8747 class=0604(PCI_B) link=4.00GB/s buses=0000:[28-28])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 10de:1021 (P#163840 busid=0000:28:00.0 class=0302(3D) link=8.00GB/s)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Co-Processor L#16 (CoProcType=CUDA Backend=CUDA GPUVendor=&quot;NVIDIA Corporation&quot; GPUModel=&quot;Tesla K20Xm&quot;) &quot;cuda4&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GPU L#17 (Backend=NVML GPUVendor=&quot;NVIDIA Corporation&quot; GPUModel=&quot;Tesla K20Xm&quot; NVIDIASerial=0320413039422 NVIDIAUUID=GPU-89053185-7a14-cdc7-c89f-9a69b64cef0a) &quot;nvml4&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#160000 busid=0000:27:10.0 id=10b5:8747 class=0604(PCI_B) link=4.00GB/s buses=0000:[2b-2b])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 10de:1021 (P#176128 busid=0000:2b:00.0 class=0302(3D) link=8.00GB/s)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Co-Processor L#18 (CoProcType=CUDA Backend=CUDA GPUVendor=&quot;NVIDIA Corporation&quot; GPUModel=&quot;Tesla K20Xm&quot;) &quot;cuda5&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GPU L#19 (Backend=NVML GPUVendor=&quot;NVIDIA Corporation&quot; GPUModel=&quot;Tesla K20Xm&quot; NVIDIASerial=0320413039702 NVIDIAUUID=GPU-20a32c55-de79-c7b0-74ed-cbbc9fc2bfee) &quot;nvml5&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#131120 busid=0000:20:03.0 id=8086:3c08 class=0604(PCI_B) link=15.75GB/s buses=0000:[2e-35])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#188416 busid=0000:2e:00.0 id=10b5:8747 class=0604(PCI_B) link=15.75GB/s buses=0000:[2f-35])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#192640 busid=0000:2f:08.0 id=10b5:8747 class=0604(PCI_B) link=4.00GB/s buses=0000:[30-30])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 10de:1021 (P#196608 busid=0000:30:00.0 class=0302(3D) link=8.00GB/s)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Co-Processor L#20 (CoProcType=CUDA Backend=CUDA GPUVendor=&quot;NVIDIA Corporation&quot; GPUModel=&quot;Tesla K20Xm&quot;) &quot;cuda6&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GPU L#21 (Backend=NVML GPUVendor=&quot;NVIDIA Corporation&quot; GPUModel=&quot;Tesla K20Xm&quot; NVIDIASerial=0320413039633 NVIDIAUUID=GPU-d24b7e36-3a28-f787-4497-c43356a7ff2d) &quot;nvml6&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bridge PCI-&gt;PCI (P#192768 busid=0000:2f:10.0 id=10b5:8747 class=0604(PCI_B) link=4.00GB/s buses=0000:[33-33])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 10de:1021 (P#208896 busid=0000:33:00.0 class=0302(3D) link=8.00GB/s)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Co-Processor L#22 (CoProcType=CUDA Backend=CUDA GPUVendor=&quot;NVIDIA Corporation&quot; GPUModel=&quot;Tesla K20Xm&quot;) &quot;cuda7&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GPU L#23 (Backend=NVML GPUVendor=&quot;NVIDIA Corporation&quot; GPUModel=&quot;Tesla K20Xm&quot; NVIDIASerial=0320413039548 NVIDIAUUID=GPU-01fa129f-f63c-2542-d9fc-ad6dfe3e9467) &quot;nvml7&quot;
<br>
depth 0:	1 Machine (type #1)
<br>
&nbsp;depth 1:	2 NUMANode (type #2)
<br>
&nbsp;&nbsp;depth 2:	2 Socket (type #3)
<br>
&nbsp;&nbsp;&nbsp;depth 3:	2 L3Cache (type #4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;depth 4:	16 L2Cache (type #4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 5:	16 L1dCache (type #4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 6:	16 L1iCache (type #4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 7:	16 Core (type #5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 8:	16 PU (type #6)
<br>
Special depth -3:	24 Bridge (type #9)
<br>
Special depth -4:	14 PCI Device (type #10)
<br>
Special depth -5:	24 OS Device (type #11)
<br>
latency matrix between NUMANodes (depth 1) by logical indexes:
<br>
&nbsp;&nbsp;index     0     1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0 1.000 2.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 2.000 1.000
<br>
<p><p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev2">&gt;&gt;         PCIBridge
</span><br>
<span class="quotelev2">&gt;&gt;           PCIBridge
</span><br>
<span class="quotelev2">&gt;&gt;             PCI 10de:1021
</span><br>
<span class="quotelev2">&gt;&gt;               CoProc L#2 &quot;cuda0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               GPU L#3 &quot;nvml2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCIBridge
</span><br>
<span class="quotelev2">&gt;&gt;             PCI 10de:1021
</span><br>
<span class="quotelev2">&gt;&gt;               CoProc L#4 &quot;cuda1&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               GPU L#5 &quot;nvml3&quot;
</span><br>
<span class="quotelev2">&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev2">&gt;&gt;         PCIBridge
</span><br>
<span class="quotelev2">&gt;&gt;           PCIBridge
</span><br>
<span class="quotelev2">&gt;&gt;             PCI 10de:1021
</span><br>
<span class="quotelev2">&gt;&gt;               CoProc L#6 &quot;cuda2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               GPU L#7 &quot;nvml0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;           PCIBridge
</span><br>
<span class="quotelev2">&gt;&gt;             PCI 10de:1021
</span><br>
<span class="quotelev2">&gt;&gt;               CoProc L#8 &quot;cuda3&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               GPU L#9 &quot;nvml1&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Right now I am trying to create a python script that will take the XML output of lstopo and give me just the cuda and nvml devices in order. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I dont' know if some value are deterministic though.  Could I  ignore the CoProc line and just use the:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;               GPU L#3 &quot;nvml2&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               GPU L#5 &quot;nvml3&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               GPU L#7 &quot;nvml0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;               GPU L#9 &quot;nvml1&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is the L# always going to be in the oder I would expect?  Because then I already have my map then. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 5, 2014, at 1:19 AM, Brice Goglin 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Brock,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Some people reported the same issue in the past and that's why we added the &quot;nvml&quot; objects. CUDA reorders devices by &quot;performance&quot;. Batch-schedulers are somehow supposed to use &quot;nvml&quot; for managing GPUs without actually using them with CUDA directly. And the &quot;nvml&quot; order is the &quot;normal&quot; order.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You need &quot;tdk&quot; (
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://developer.nvidia.com/tesla-deployment-kit">https://developer.nvidia.com/tesla-deployment-kit</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ) to get nvml library and development headers installed. Then hwloc can build its &quot;nvml&quot; backend. Once ready, you'll see a hwloc &quot;cudaX&quot; and a hwloc &quot;nvmlY&quot; object in each NVIDIA PCI devices, and you can get their locality as usual.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does this help?
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
<span class="quotelev3">&gt;&gt;&gt; Le 05/02/2014 05:25, Brock Palen a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We are trying to build a system to mask users to the GPU's they were assigned by our batch system (torque).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The batch system sets the GPU's into thread exclusive mode when assigned to a job, so we want the GPU that the batch system assigns to be the one set in CUDA_VISIBLE_DEVICES,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Problem is on our nodes what the batch system sees as gpu 0  is not the same GPU that CUDA_VISIBLE_DEVICES sees as 0.   Actually 0  is 2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You can see this behavior is you run 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nvidia-smi  and look at the PCI ID's of the devices.  You can then look at the PCI ID's outputed by deviceQuery from the SDK examples and see they are in a different order.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The ID's you would set in CUDA_VISIBLE_DEVICES matches the order that deviceQuery sees, not the order that nvida-smi sees.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Example (All values turned to decimal to match deviceQuery):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nvidia-smi order: 9, 10, 13, 14, 40, 43, 48, 51
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dviceQuery order: 13, 14, 9, 10, 40, 43, 48, 51
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can hwloc help me with this?  Right now I am hacking a script based on the output of the two commands, and making a map, between the two and then set CUDA_VISIBLE_DEVICES
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any ideas would be great. Later as we currently also use CPU sets, we want to pass GPU locality information to the scheduler to make decisions to match GPU-&gt; CPU Socket information, as performance of threads across QPI domains is very poor. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Machine (64GB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   NUMANode L#0 (P#0 32GB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Socket L#0 + L3 L#0 (20MB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       L2 L#0 (256KB) + L1d L#0 (32KB) + L1i L#0 (32KB) + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       L2 L#1 (256KB) + L1d L#1 (32KB) + L1i L#1 (32KB) + Core L#1 + PU L#1 (P#1)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       L2 L#2 (256KB) + L1d L#2 (32KB) + L1i L#2 (32KB) + Core L#2 + PU L#2 (P#2)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       L2 L#3 (256KB) + L1d L#3 (32KB) + L1i L#3 (32KB) + Core L#3 + PU L#3 (P#3)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       L2 L#4 (256KB) + L1d L#4 (32KB) + L1i L#4 (32KB) + Core L#4 + PU L#4 (P#4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       L2 L#5 (256KB) + L1d L#5 (32KB) + L1i L#5 (32KB) + Core L#5 + PU L#5 (P#5)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       L2 L#6 (256KB) + L1d L#6 (32KB) + L1i L#6 (32KB) + Core L#6 + PU L#6 (P#6)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       L2 L#7 (256KB) + L1d L#7 (32KB) + L1i L#7 (32KB) + Core L#7 + PU L#7 (P#7)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     HostBridge L#0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         PCI 1000:0087
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           Block L#0 &quot;sda&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           Block L#1 &quot;sdb&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         PCIBridge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           PCIBridge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             PCI 10de:1021
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               CoProc L#2 &quot;cuda0&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           PCIBridge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             PCI 10de:1021
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               CoProc L#3 &quot;cuda1&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         PCIBridge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           PCIBridge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             PCI 10de:1021
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               CoProc L#4 &quot;cuda2&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           PCIBridge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             PCI 10de:1021
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               CoProc L#5 &quot;cuda3&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         PCI 8086:1521
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           Net L#6 &quot;eth0&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         PCI 8086:1521
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           Net L#7 &quot;eth1&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         PCI 102b:0533
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       PCI 8086:1d02
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   NUMANode L#1 (P#1 32GB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Socket L#1 + L3 L#1 (20MB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       L2 L#8 (256KB) + L1d L#8 (32KB) + L1i L#8 (32KB) + Core L#8 + PU L#8 (P#8)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       L2 L#9 (256KB) + L1d L#9 (32KB) + L1i L#9 (32KB) + Core L#9 + PU L#9 (P#9)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       L2 L#10 (256KB) + L1d L#10 (32KB) + L1i L#10 (32KB) + Core L#10 + PU L#10 (P#10)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       L2 L#11 (256KB) + L1d L#11 (32KB) + L1i L#11 (32KB) + Core L#11 + PU L#11 (P#11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       L2 L#12 (256KB) + L1d L#12 (32KB) + L1i L#12 (32KB) + Core L#12 + PU L#12 (P#12)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       L2 L#13 (256KB) + L1d L#13 (32KB) + L1i L#13 (32KB) + Core L#13 + PU L#13 (P#13)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       L2 L#14 (256KB) + L1d L#14 (32KB) + L1i L#14 (32KB) + Core L#14 + PU L#14 (P#14)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       L2 L#15 (256KB) + L1d L#15 (32KB) + L1i L#15 (32KB) + Core L#15 + PU L#15 (P#15)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     HostBridge L#12
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         PCIBridge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           PCIBridge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             PCI 15b3:1003
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               Net L#8 &quot;eth2&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               Net L#9 &quot;ib0&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               Net L#10 &quot;eoib0&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               OpenFabrics L#11 &quot;mlx4_0&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         PCIBridge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           PCIBridge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             PCI 10de:1021
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               CoProc L#12 &quot;cuda4&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           PCIBridge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             PCI 10de:1021
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               CoProc L#13 &quot;cuda5&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       PCIBridge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         PCIBridge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           PCIBridge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             PCI 10de:1021
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               CoProc L#14 &quot;cuda6&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           PCIBridge
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;             PCI 10de:1021
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;               CoProc L#15 &quot;cuda7&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CAEN Advanced Computing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; XSEDE Campus Champion
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0985/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/03/0986.php">Biddiscombe, John A.: "[hwloc-users] BGQ question."</a>
<li><strong>Previous message:</strong> <a href="0984.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.8.1 released"</a>
<li><strong>In reply to:</strong> <a href="0980.php">Brice Goglin: "Re: [hwloc-users] Using hwloc to map GPU layout on system"</a>
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
