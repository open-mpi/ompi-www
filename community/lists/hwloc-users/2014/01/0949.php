<?
$subject_val = "[hwloc-users] hwloc errors on program startup";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 11:11:02 2014" -->
<!-- isoreceived="20140117161102" -->
<!-- sent="Fri, 17 Jan 2014 11:11:02 -0500 (EST)" -->
<!-- isosent="20140117161102" -->
<!-- name="Doug Roberts" -->
<!-- email="roberpj_at_[hidden]" -->
<!-- subject="[hwloc-users] hwloc errors on program startup" -->
<!-- id="alpine.LRH.2.02.1401171103310.13334_at_localhost.localdomain" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [hwloc-users] hwloc errors on program startup<br>
<strong>From:</strong> Doug Roberts (<em>roberpj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 11:11:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0950.php">Brice Goglin: "Re: [hwloc-users] hwloc errors on program startup"</a>
<li><strong>Previous message:</strong> <a href="0948.php">Brice Goglin: "Re: [hwloc-users] hwloc problem on SGI machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0950.php">Brice Goglin: "Re: [hwloc-users] hwloc errors on program startup"</a>
<li><strong>Reply:</strong> <a href="0950.php">Brice Goglin: "Re: [hwloc-users] hwloc errors on program startup"</a>
<li><strong>Maybe reply:</strong> <a href="0951.php">Doug Roberts: "Re: [hwloc-users] hwloc errors on program startup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
1) We are getting hwloc topology errors when programs startup on
<br>
some new compute nodes added into our cluster recently ...
<br>
<p>[roberpj_at_bro127:~/samples/mpi_test] 
<br>
/opt/sharcnet/openmpi/1.6.5/intel/bin/mpirun -np 2 --mca btl tcp,sm,self --host 
<br>
bro127,bro127 ./a.out
<br>
****************************************************************************
<br>
* Hwloc has encountered what looks like an error from the operating system.
<br>
*
<br>
* object intersection without inclusion!
<br>
* Error occurred in topology.c line 594
<br>
*
<br>
* Please report this error message to the hwloc user's mailing list,
<br>
* along with the output from the hwloc-gather-topology.sh script.
<br>
****************************************************************************
<br>
Number of processes = 2
<br>
Test repeated 3 times for reliability
<br>
I am process 0 on node bro127
<br>
Run 1 of 3
<br>
P0: Sending to P1
<br>
I am process 1 on node bro127
<br>
P1: Waiting to receive from to P0
<br>
P0:  Waiting to receive from P1
<br>
P0:  Received from to P1
<br>
Run 2 of 3
<br>
P0:  Sending to P1
<br>
P0:  Waiting to receive from P1
<br>
P0:  Received from to P1
<br>
Run 3 of 3
<br>
P0:  Sending to P1
<br>
P0:  Waiting to receive from P1
<br>
P0:  Received from to P1
<br>
P0:  Done
<br>
P1:  Sending to to P0
<br>
P1:  Waiting to receive from to P0
<br>
P1:  Sending to to P0
<br>
P1:  Waiting to receive from to P0
<br>
P1:  Sending to to P0
<br>
P1:  Done
<br>
<p>2) Ive run hwloc-gather-topology.sh and attached bro127.tar.bz2 ...
<br>
<p>[roberpj_at_bro127:~/samples/hwloc-gather-topology] 
<br>
/home/roberpj/builds/hwloc/1.7.2/1.7.2-debug/bin/hwloc-gather-topology $(uname 
<br>
-n)
<br>
Hierarchy gathered in ./bro127.tar.bz2 and kept in /tmp/tmp.Fr37QhvDGD/bro127/
<br>
****************************************************************************
<br>
* Hwloc has encountered what looks like an error from the operating system.
<br>
*
<br>
* object (Socket P#0 cpuset 0x000000ff) intersection without inclusion!
<br>
* Error occurred in topology.c line 718
<br>
*
<br>
* Please report this error message to the hwloc user's mailing list,
<br>
* along with the output from the hwloc-gather-topology.sh script.
<br>
****************************************************************************
<br>
Expected topology output stored in ./bro127.output
<br>
<p>[roberpj_at_bro127:~/samples/hwloc-gather-topology] cat bro127.output
<br>
Machine (P#0 total=67106040KB DMIProductName=empty DMIProductVersion=empty 
<br>
DMIBoardVendor=&quot;TYAN Computer Corporation&quot; DMIBoardName=YR190-B8238 
<br>
DMIBoardVersion=empty DMIBoardAssetTag=empty DMIChassisVendor=empty 
<br>
DMIChassisType=3 DMIChassisVersion=empty DMIChassisAssetTag=empty 
<br>
DMIBIOSVendor=&quot;American Megatrends Inc.&quot; DMIBIOSVersion='V1.01.B10' 
<br>
DMIBIOSDate=09/26/2011 DMISysVendor=empty Backend=Linux LinuxCgroup=/)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#0 (P#0 local=33551608KB total=33551608KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3Cache L#0 (size=6144KB linesize=64 ways=64)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#0 (size=2048KB linesize=64 ways=16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#0 (size=64KB linesize=64 ways=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#0 (size=16KB linesize=64 ways=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#1 (size=16KB linesize=64 ways=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#1 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#1 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#1 (size=2048KB linesize=64 ways=16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#1 (size=64KB linesize=64 ways=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#2 (size=16KB linesize=64 ways=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#3 (size=16KB linesize=64 ways=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#3 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#3 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3Cache L#1 (size=6144KB linesize=64 ways=64)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#2 (size=2048KB linesize=64 ways=16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#2 (size=64KB linesize=64 ways=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#4 (size=16KB linesize=64 ways=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#4 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#4 (P#8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#5 (size=16KB linesize=64 ways=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#5 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#5 (P#9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#3 (size=2048KB linesize=64 ways=16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#3 (size=64KB linesize=64 ways=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#6 (size=16KB linesize=64 ways=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#6 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#6 (P#10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#7 (size=16KB linesize=64 ways=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#7 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#7 (P#11)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#1 (P#1 local=33554432KB total=33554432KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3Cache L#2 (size=6144KB linesize=64 ways=64)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#4 (size=2048KB linesize=64 ways=16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#4 (size=64KB linesize=64 ways=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#8 (size=16KB linesize=64 ways=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#8 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#8 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#9 (size=16KB linesize=64 ways=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#9 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#9 (P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#5 (size=2048KB linesize=64 ways=16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#5 (size=64KB linesize=64 ways=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#10 (size=16KB linesize=64 ways=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#10 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#10 (P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#11 (size=16KB linesize=64 ways=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#11 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#11 (P#7)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L3Cache L#3 (size=6144KB linesize=64 ways=64)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#6 (size=2048KB linesize=64 ways=16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#6 (size=64KB linesize=64 ways=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#12 (size=16KB linesize=64 ways=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#12 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#12 (P#12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#13 (size=16KB linesize=64 ways=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#13 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#13 (P#13)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#7 (size=2048KB linesize=64 ways=16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1iCache L#7 (size=64KB linesize=64 ways=2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#14 (size=16KB linesize=64 ways=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#14 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#14 (P#14)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1dCache L#15 (size=16KB linesize=64 ways=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#15 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#15 (P#15)
<br>
depth 0:	1 Machine (type #1)
<br>
&nbsp;&nbsp;&nbsp;depth 1:	2 NUMANode (type #2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;depth 2:	4 L3Cache (type #4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 3:	8 L2Cache (type #4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 4:	8 L1iCache (type #4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 5:	16 L1dCache (type #4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 6:	16 Core (type #5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 7:	16 PU (type #6)
<br>
latency matrix between NUMANodes (depth 1) by logical indexes:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;index     0     1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0 1.000 1.600
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 1.600 1.000
<br>
Topology not from this system
<br>
<p>3) SRAT dmesg output was mentioned in another similar ticket
<br>
<a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/05/0639.php">http://www.open-mpi.org/community/lists/hwloc-users/2012/05/0639.php</a>
<br>
so i am including ours here also ...
<br>
<p>[roberpj_at_bro127:~] dmesg | grep SRAT
<br>
ACPI: SRAT 00000000dfdba570 001D0 (v02 AMD    AGESA    00000001 AMD 00000001)
<br>
SRAT:  PXM 0 -&gt; APIC 32 -&gt; Node 0
<br>
SRAT:  PXM 0 -&gt; APIC 33 -&gt; Node 0
<br>
SRAT:  PXM 0 -&gt; APIC 34 -&gt; Node 0
<br>
SRAT:  PXM 0 -&gt; APIC 35 -&gt; Node 0
<br>
SRAT:  PXM 1 -&gt; APIC 36 -&gt; Node 1
<br>
SRAT:  PXM 1 -&gt; APIC 37 -&gt; Node 1
<br>
SRAT:  PXM 1 -&gt; APIC 38 -&gt; Node 1
<br>
SRAT:  PXM 1 -&gt; APIC 39 -&gt; Node 1
<br>
SRAT:  PXM 2 -&gt; APIC 64 -&gt; Node 2
<br>
SRAT:  PXM 2 -&gt; APIC 65 -&gt; Node 2
<br>
SRAT:  PXM 2 -&gt; APIC 66 -&gt; Node 2
<br>
SRAT:  PXM 2 -&gt; APIC 67 -&gt; Node 2
<br>
SRAT:  PXM 3 -&gt; APIC 68 -&gt; Node 3
<br>
SRAT:  PXM 3 -&gt; APIC 69 -&gt; Node 3
<br>
SRAT:  PXM 3 -&gt; APIC 70 -&gt; Node 3
<br>
SRAT:  PXM 3 -&gt; APIC 71 -&gt; Node 3
<br>
SRAT:  Node 0 PXM 0 0-a0000
<br>
SRAT:  Node 0 PXM 0 100000-e0000000
<br>
SRAT:  Node 0 PXM 0 100000000-820000000
<br>
SRAT:  Node 1 PXM 1 820000000-1020000000
<br>
<p>4) Note the nodes have a 10GE interface on eth2 ...
<br>
<p>[root_at_bro127:~] nano /var/log/messages  (snip)
<br>
Jan 15 16:03:55 bro127 kernel: ADDRCONF(NETDEV_UP): eth2: link is not ready
<br>
Jan 15 16:03:55 bro127 kernel: ixgbe 0000:04:00.0: eth2: changing MTU from 1500 
<br>
to 8000
<br>
Jan 15 16:03:55 bro127 kernel: ixgbe 0000:04:00.0: eth2: detected SFP+: 3
<br>
Jan 15 16:03:55 bro127 kernel: SoftIWARP attached
<br>
Jan 15 16:03:55 bro127 kernel: ixgbe 0000:04:00.0: eth2: detected SFP+: 3
<br>
Jan 15 16:03:55 bro127 kernel: ixgbe 0000:04:00.0: eth2: NIC Link is Up 10 
<br>
Gbps, Flow Control: RX/TX
<br>
Jan 15 16:03:55 bro127 kernel: ADDRCONF(NETDEV_CHANGE): eth2: link becomes 
<br>
ready
<br>
<p>[roberpj_at_bro127:~] modinfo ixgbe
<br>
filename: 
<br>
/lib/modules/2.6.32-279.5.2.el6.x86_64/kernel/drivers/net/ixgbe/ixgbe.ko
<br>
version:        3.6.7-k
<br>
license:        GPL
<br>
description:    Intel(R) 10 Gigabit PCI Express Network Driver
<br>
author:         Intel Corporation, &lt;linux.nics_at_[hidden]&gt;
<br>
srcversion:     EC64C3345C7AC6AB4BD6F5C
<br>
alias: pci: v00008086d0000154Asv*sd*bc*sc*i*
<br>
alias: pci: v00008086d00001557sv*sd*bc*sc*i*
<br>
alias: pci: v00008086d0000154Fsv*sd*bc*sc*i*
<br>
alias: pci: v00008086d0000154Dsv*sd*bc*sc*i*
<br>
alias: pci: v00008086d00001528sv*sd*bc*sc*i*
<br>
alias: pci: v00008086d000010F8sv*sd*bc*sc*i*
<br>
alias: pci: v00008086d0000151Csv*sd*bc*sc*i*
<br>
alias: pci: v00008086d00001529sv*sd*bc*sc*i*
<br>
alias: pci: v00008086d0000152Asv*sd*bc*sc*i*
<br>
alias: pci: v00008086d000010F9sv*sd*bc*sc*i*
<br>
alias: pci: v00008086d00001514sv*sd*bc*sc*i*
<br>
alias: pci: v00008086d00001507sv*sd*bc*sc*i*
<br>
alias: pci: v00008086d000010FBsv*sd*bc*sc*i*
<br>
alias: pci: v00008086d00001517sv*sd*bc*sc*i*
<br>
alias: pci: v00008086d000010FCsv*sd*bc*sc*i*
<br>
alias: pci: v00008086d000010F7sv*sd*bc*sc*i*
<br>
alias: pci: v00008086d00001508sv*sd*bc*sc*i*
<br>
alias: pci: v00008086d000010DBsv*sd*bc*sc*i*
<br>
alias: pci: v00008086d000010F4sv*sd*bc*sc*i*
<br>
alias: pci: v00008086d000010E1sv*sd*bc*sc*i*
<br>
alias: pci: v00008086d000010F1sv*sd*bc*sc*i*
<br>
alias: pci: v00008086d000010ECsv*sd*bc*sc*i*
<br>
alias: pci: v00008086d000010DDsv*sd*bc*sc*i*
<br>
alias: pci: v00008086d0000150Bsv*sd*bc*sc*i*
<br>
alias: pci: v00008086d000010C8sv*sd*bc*sc*i*
<br>
alias: pci: v00008086d000010C7sv*sd*bc*sc*i*
<br>
alias: pci: v00008086d000010C6sv*sd*bc*sc*i*
<br>
alias: pci: v00008086d000010B6sv*sd*bc*sc*i*
<br>
depends:        mdio,dca
<br>
vermagic:       2.6.32-279.5.2.el6.x86_64 SMP mod_unload modversions
<br>
parm:           IntMode:Change Interrupt Mode (0=Legacy, 1=MSI, 2=MSI-X), 
<br>
default 2 (array of int)
<br>
parm:           FdirMode:Flow Director filtering modes (0=Off, 1=Hashing) 
<br>
default 1 (array of int)
<br>
parm:           max_vfs:Maximum number of virtual functions to allocate per 
<br>
physical function (uint)
<br>
parm:           allow_unsupported_sfp:Allow unsupported and untested SFP+ 
<br>
modules on 82599-based adapters (uint)
<br>

<br><hr>
<ul>
<li>APPLICATION/X-BZIP2 attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0949/bro127.tar.bz2">bro127.tar.bz2</a>
</ul>
<!-- attachment="bro127.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0950.php">Brice Goglin: "Re: [hwloc-users] hwloc errors on program startup"</a>
<li><strong>Previous message:</strong> <a href="0948.php">Brice Goglin: "Re: [hwloc-users] hwloc problem on SGI machine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0950.php">Brice Goglin: "Re: [hwloc-users] hwloc errors on program startup"</a>
<li><strong>Reply:</strong> <a href="0950.php">Brice Goglin: "Re: [hwloc-users] hwloc errors on program startup"</a>
<li><strong>Maybe reply:</strong> <a href="0951.php">Doug Roberts: "Re: [hwloc-users] hwloc errors on program startup"</a>
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
