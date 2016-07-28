<?
$subject_val = "Re: [hwloc-users] hwloc errors on program startup";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 17 12:40:31 2014" -->
<!-- isoreceived="20140117174031" -->
<!-- sent="Fri, 17 Jan 2014 18:40:28 +0100" -->
<!-- isosent="20140117174028" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc errors on program startup" -->
<!-- id="52D96B0C.3000200_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.LRH.2.02.1401171103310.13334_at_localhost.localdomain" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc errors on program startup<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-17 12:40:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0951.php">Doug Roberts: "Re: [hwloc-users] hwloc errors on program startup"</a>
<li><strong>Previous message:</strong> <a href="0949.php">Doug Roberts: "[hwloc-users] hwloc errors on program startup"</a>
<li><strong>In reply to:</strong> <a href="0949.php">Doug Roberts: "[hwloc-users] hwloc errors on program startup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0951.php">Doug Roberts: "Re: [hwloc-users] hwloc errors on program startup"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Linux says socket 0 contains processors 0-7 and socket 1 contains 8-15,
<br>
while NUMA node 0 contains processors 0-3+8-11 and NUMA node 1 contains
<br>
processors 4-7+12-15. Given why I read about Opteron 6320 online, the
<br>
problem is that NUMA 0 should be replaced with two NUMA nodes with
<br>
processors 0-3 on one side and 8-11 on the other side, and NUMA 1 be
<br>
replaced with two NUMA nodes with processors 4-7 and 12-15 respectively.
<br>
<p>Your grep for SRAT confirms that there are 4 NUMA nodes in the machine,
<br>
and the APIC numbers seem correctly associated.
<br>
<p>Unfortunately, it looks like you have the last BIOS revision (1.01)
<br>
<a href="http://www.tyan.com/support_download_bios.aspx?model=B.YR190B8238">http://www.tyan.com/support_download_bios.aspx?model=B.YR190B8238</a>
<br>
Is there any kernel update available from RHEL6 for your machine?
<br>
<p>Brice
<br>
<p><p><p>Le 17/01/2014 17:11, Doug Roberts a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) We are getting hwloc topology errors when programs startup on
</span><br>
<span class="quotelev1">&gt; some new compute nodes added into our cluster recently ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [roberpj_at_bro127:~/samples/mpi_test]
</span><br>
<span class="quotelev1">&gt; /opt/sharcnet/openmpi/1.6.5/intel/bin/mpirun -np 2 --mca btl
</span><br>
<span class="quotelev1">&gt; tcp,sm,self --host bro127,bro127 ./a.out
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Hwloc has encountered what looks like an error from the operating
</span><br>
<span class="quotelev1">&gt; system.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * object intersection without inclusion!
</span><br>
<span class="quotelev1">&gt; * Error occurred in topology.c line 594
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Please report this error message to the hwloc user's mailing list,
</span><br>
<span class="quotelev1">&gt; * along with the output from the hwloc-gather-topology.sh script.
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Number of processes = 2
</span><br>
<span class="quotelev1">&gt; Test repeated 3 times for reliability
</span><br>
<span class="quotelev1">&gt; I am process 0 on node bro127
</span><br>
<span class="quotelev1">&gt; Run 1 of 3
</span><br>
<span class="quotelev1">&gt; P0: Sending to P1
</span><br>
<span class="quotelev1">&gt; I am process 1 on node bro127
</span><br>
<span class="quotelev1">&gt; P1: Waiting to receive from to P0
</span><br>
<span class="quotelev1">&gt; P0:  Waiting to receive from P1
</span><br>
<span class="quotelev1">&gt; P0:  Received from to P1
</span><br>
<span class="quotelev1">&gt; Run 2 of 3
</span><br>
<span class="quotelev1">&gt; P0:  Sending to P1
</span><br>
<span class="quotelev1">&gt; P0:  Waiting to receive from P1
</span><br>
<span class="quotelev1">&gt; P0:  Received from to P1
</span><br>
<span class="quotelev1">&gt; Run 3 of 3
</span><br>
<span class="quotelev1">&gt; P0:  Sending to P1
</span><br>
<span class="quotelev1">&gt; P0:  Waiting to receive from P1
</span><br>
<span class="quotelev1">&gt; P0:  Received from to P1
</span><br>
<span class="quotelev1">&gt; P0:  Done
</span><br>
<span class="quotelev1">&gt; P1:  Sending to to P0
</span><br>
<span class="quotelev1">&gt; P1:  Waiting to receive from to P0
</span><br>
<span class="quotelev1">&gt; P1:  Sending to to P0
</span><br>
<span class="quotelev1">&gt; P1:  Waiting to receive from to P0
</span><br>
<span class="quotelev1">&gt; P1:  Sending to to P0
</span><br>
<span class="quotelev1">&gt; P1:  Done
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Ive run hwloc-gather-topology.sh and attached bro127.tar.bz2 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [roberpj_at_bro127:~/samples/hwloc-gather-topology]
</span><br>
<span class="quotelev1">&gt; /home/roberpj/builds/hwloc/1.7.2/1.7.2-debug/bin/hwloc-gather-topology
</span><br>
<span class="quotelev1">&gt; $(uname -n)
</span><br>
<span class="quotelev1">&gt; Hierarchy gathered in ./bro127.tar.bz2 and kept in
</span><br>
<span class="quotelev1">&gt; /tmp/tmp.Fr37QhvDGD/bro127/
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Hwloc has encountered what looks like an error from the operating
</span><br>
<span class="quotelev1">&gt; system.
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * object (Socket P#0 cpuset 0x000000ff) intersection without inclusion!
</span><br>
<span class="quotelev1">&gt; * Error occurred in topology.c line 718
</span><br>
<span class="quotelev1">&gt; *
</span><br>
<span class="quotelev1">&gt; * Please report this error message to the hwloc user's mailing list,
</span><br>
<span class="quotelev1">&gt; * along with the output from the hwloc-gather-topology.sh script.
</span><br>
<span class="quotelev1">&gt; ****************************************************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Expected topology output stored in ./bro127.output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [roberpj_at_bro127:~/samples/hwloc-gather-topology] cat bro127.output
</span><br>
<span class="quotelev1">&gt; Machine (P#0 total=67106040KB DMIProductName=empty
</span><br>
<span class="quotelev1">&gt; DMIProductVersion=empty DMIBoardVendor=&quot;TYAN Computer Corporation&quot;
</span><br>
<span class="quotelev1">&gt; DMIBoardName=YR190-B8238 DMIBoardVersion=empty DMIBoardAssetTag=empty
</span><br>
<span class="quotelev1">&gt; DMIChassisVendor=empty DMIChassisType=3 DMIChassisVersion=empty
</span><br>
<span class="quotelev1">&gt; DMIChassisAssetTag=empty DMIBIOSVendor=&quot;American Megatrends Inc.&quot;
</span><br>
<span class="quotelev1">&gt; DMIBIOSVersion='V1.01.B10' DMIBIOSDate=09/26/2011 DMISysVendor=empty
</span><br>
<span class="quotelev1">&gt; Backend=Linux LinuxCgroup=/)
</span><br>
<span class="quotelev1">&gt;    NUMANode L#0 (P#0 local=33551608KB total=33551608KB)
</span><br>
<span class="quotelev1">&gt;      L3Cache L#0 (size=6144KB linesize=64 ways=64)
</span><br>
<span class="quotelev1">&gt;        L2Cache L#0 (size=2048KB linesize=64 ways=16)
</span><br>
<span class="quotelev1">&gt;          L1iCache L#0 (size=64KB linesize=64 ways=2)
</span><br>
<span class="quotelev1">&gt;            L1dCache L#0 (size=16KB linesize=64 ways=4)
</span><br>
<span class="quotelev1">&gt;              Core L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;                PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;            L1dCache L#1 (size=16KB linesize=64 ways=4)
</span><br>
<span class="quotelev1">&gt;              Core L#1 (P#1)
</span><br>
<span class="quotelev1">&gt;                PU L#1 (P#1)
</span><br>
<span class="quotelev1">&gt;        L2Cache L#1 (size=2048KB linesize=64 ways=16)
</span><br>
<span class="quotelev1">&gt;          L1iCache L#1 (size=64KB linesize=64 ways=2)
</span><br>
<span class="quotelev1">&gt;            L1dCache L#2 (size=16KB linesize=64 ways=4)
</span><br>
<span class="quotelev1">&gt;              Core L#2 (P#2)
</span><br>
<span class="quotelev1">&gt;                PU L#2 (P#2)
</span><br>
<span class="quotelev1">&gt;            L1dCache L#3 (size=16KB linesize=64 ways=4)
</span><br>
<span class="quotelev1">&gt;              Core L#3 (P#3)
</span><br>
<span class="quotelev1">&gt;                PU L#3 (P#3)
</span><br>
<span class="quotelev1">&gt;      L3Cache L#1 (size=6144KB linesize=64 ways=64)
</span><br>
<span class="quotelev1">&gt;        L2Cache L#2 (size=2048KB linesize=64 ways=16)
</span><br>
<span class="quotelev1">&gt;          L1iCache L#2 (size=64KB linesize=64 ways=2)
</span><br>
<span class="quotelev1">&gt;            L1dCache L#4 (size=16KB linesize=64 ways=4)
</span><br>
<span class="quotelev1">&gt;              Core L#4 (P#0)
</span><br>
<span class="quotelev1">&gt;                PU L#4 (P#8)
</span><br>
<span class="quotelev1">&gt;            L1dCache L#5 (size=16KB linesize=64 ways=4)
</span><br>
<span class="quotelev1">&gt;              Core L#5 (P#1)
</span><br>
<span class="quotelev1">&gt;                PU L#5 (P#9)
</span><br>
<span class="quotelev1">&gt;        L2Cache L#3 (size=2048KB linesize=64 ways=16)
</span><br>
<span class="quotelev1">&gt;          L1iCache L#3 (size=64KB linesize=64 ways=2)
</span><br>
<span class="quotelev1">&gt;            L1dCache L#6 (size=16KB linesize=64 ways=4)
</span><br>
<span class="quotelev1">&gt;              Core L#6 (P#2)
</span><br>
<span class="quotelev1">&gt;                PU L#6 (P#10)
</span><br>
<span class="quotelev1">&gt;            L1dCache L#7 (size=16KB linesize=64 ways=4)
</span><br>
<span class="quotelev1">&gt;              Core L#7 (P#3)
</span><br>
<span class="quotelev1">&gt;                PU L#7 (P#11)
</span><br>
<span class="quotelev1">&gt;    NUMANode L#1 (P#1 local=33554432KB total=33554432KB)
</span><br>
<span class="quotelev1">&gt;      L3Cache L#2 (size=6144KB linesize=64 ways=64)
</span><br>
<span class="quotelev1">&gt;        L2Cache L#4 (size=2048KB linesize=64 ways=16)
</span><br>
<span class="quotelev1">&gt;          L1iCache L#4 (size=64KB linesize=64 ways=2)
</span><br>
<span class="quotelev1">&gt;            L1dCache L#8 (size=16KB linesize=64 ways=4)
</span><br>
<span class="quotelev1">&gt;              Core L#8 (P#0)
</span><br>
<span class="quotelev1">&gt;                PU L#8 (P#4)
</span><br>
<span class="quotelev1">&gt;            L1dCache L#9 (size=16KB linesize=64 ways=4)
</span><br>
<span class="quotelev1">&gt;              Core L#9 (P#1)
</span><br>
<span class="quotelev1">&gt;                PU L#9 (P#5)
</span><br>
<span class="quotelev1">&gt;        L2Cache L#5 (size=2048KB linesize=64 ways=16)
</span><br>
<span class="quotelev1">&gt;          L1iCache L#5 (size=64KB linesize=64 ways=2)
</span><br>
<span class="quotelev1">&gt;            L1dCache L#10 (size=16KB linesize=64 ways=4)
</span><br>
<span class="quotelev1">&gt;              Core L#10 (P#2)
</span><br>
<span class="quotelev1">&gt;                PU L#10 (P#6)
</span><br>
<span class="quotelev1">&gt;            L1dCache L#11 (size=16KB linesize=64 ways=4)
</span><br>
<span class="quotelev1">&gt;              Core L#11 (P#3)
</span><br>
<span class="quotelev1">&gt;                PU L#11 (P#7)
</span><br>
<span class="quotelev1">&gt;      L3Cache L#3 (size=6144KB linesize=64 ways=64)
</span><br>
<span class="quotelev1">&gt;        L2Cache L#6 (size=2048KB linesize=64 ways=16)
</span><br>
<span class="quotelev1">&gt;          L1iCache L#6 (size=64KB linesize=64 ways=2)
</span><br>
<span class="quotelev1">&gt;            L1dCache L#12 (size=16KB linesize=64 ways=4)
</span><br>
<span class="quotelev1">&gt;              Core L#12 (P#0)
</span><br>
<span class="quotelev1">&gt;                PU L#12 (P#12)
</span><br>
<span class="quotelev1">&gt;            L1dCache L#13 (size=16KB linesize=64 ways=4)
</span><br>
<span class="quotelev1">&gt;              Core L#13 (P#1)
</span><br>
<span class="quotelev1">&gt;                PU L#13 (P#13)
</span><br>
<span class="quotelev1">&gt;        L2Cache L#7 (size=2048KB linesize=64 ways=16)
</span><br>
<span class="quotelev1">&gt;          L1iCache L#7 (size=64KB linesize=64 ways=2)
</span><br>
<span class="quotelev1">&gt;            L1dCache L#14 (size=16KB linesize=64 ways=4)
</span><br>
<span class="quotelev1">&gt;              Core L#14 (P#2)
</span><br>
<span class="quotelev1">&gt;                PU L#14 (P#14)
</span><br>
<span class="quotelev1">&gt;            L1dCache L#15 (size=16KB linesize=64 ways=4)
</span><br>
<span class="quotelev1">&gt;              Core L#15 (P#3)
</span><br>
<span class="quotelev1">&gt;               PU L#15 (P#15)
</span><br>
<span class="quotelev1">&gt; depth 0:    1 Machine (type #1)
</span><br>
<span class="quotelev1">&gt;   depth 1:    2 NUMANode (type #2)
</span><br>
<span class="quotelev1">&gt;    depth 2:    4 L3Cache (type #4)
</span><br>
<span class="quotelev1">&gt;     depth 3:    8 L2Cache (type #4)
</span><br>
<span class="quotelev1">&gt;      depth 4:    8 L1iCache (type #4)
</span><br>
<span class="quotelev1">&gt;       depth 5:    16 L1dCache (type #4)
</span><br>
<span class="quotelev1">&gt;        depth 6:    16 Core (type #5)
</span><br>
<span class="quotelev1">&gt;        depth 7:    16 PU (type #6)
</span><br>
<span class="quotelev1">&gt; latency matrix between NUMANodes (depth 1) by logical indexes:
</span><br>
<span class="quotelev1">&gt;    index     0     1
</span><br>
<span class="quotelev1">&gt;        0 1.000 1.600
</span><br>
<span class="quotelev1">&gt;        1 1.600 1.000
</span><br>
<span class="quotelev1">&gt; Topology not from this system
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) SRAT dmesg output was mentioned in another similar ticket
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/05/0639.php">http://www.open-mpi.org/community/lists/hwloc-users/2012/05/0639.php</a>
</span><br>
<span class="quotelev1">&gt; so i am including ours here also ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [roberpj_at_bro127:~] dmesg | grep SRAT
</span><br>
<span class="quotelev1">&gt; ACPI: SRAT 00000000dfdba570 001D0 (v02 AMD    AGESA    00000001 AMD
</span><br>
<span class="quotelev1">&gt; 00000001)
</span><br>
<span class="quotelev1">&gt; SRAT:  PXM 0 -&gt; APIC 32 -&gt; Node 0
</span><br>
<span class="quotelev1">&gt; SRAT:  PXM 0 -&gt; APIC 33 -&gt; Node 0
</span><br>
<span class="quotelev1">&gt; SRAT:  PXM 0 -&gt; APIC 34 -&gt; Node 0
</span><br>
<span class="quotelev1">&gt; SRAT:  PXM 0 -&gt; APIC 35 -&gt; Node 0
</span><br>
<span class="quotelev1">&gt; SRAT:  PXM 1 -&gt; APIC 36 -&gt; Node 1
</span><br>
<span class="quotelev1">&gt; SRAT:  PXM 1 -&gt; APIC 37 -&gt; Node 1
</span><br>
<span class="quotelev1">&gt; SRAT:  PXM 1 -&gt; APIC 38 -&gt; Node 1
</span><br>
<span class="quotelev1">&gt; SRAT:  PXM 1 -&gt; APIC 39 -&gt; Node 1
</span><br>
<span class="quotelev1">&gt; SRAT:  PXM 2 -&gt; APIC 64 -&gt; Node 2
</span><br>
<span class="quotelev1">&gt; SRAT:  PXM 2 -&gt; APIC 65 -&gt; Node 2
</span><br>
<span class="quotelev1">&gt; SRAT:  PXM 2 -&gt; APIC 66 -&gt; Node 2
</span><br>
<span class="quotelev1">&gt; SRAT:  PXM 2 -&gt; APIC 67 -&gt; Node 2
</span><br>
<span class="quotelev1">&gt; SRAT:  PXM 3 -&gt; APIC 68 -&gt; Node 3
</span><br>
<span class="quotelev1">&gt; SRAT:  PXM 3 -&gt; APIC 69 -&gt; Node 3
</span><br>
<span class="quotelev1">&gt; SRAT:  PXM 3 -&gt; APIC 70 -&gt; Node 3
</span><br>
<span class="quotelev1">&gt; SRAT:  PXM 3 -&gt; APIC 71 -&gt; Node 3
</span><br>
<span class="quotelev1">&gt; SRAT:  Node 0 PXM 0 0-a0000
</span><br>
<span class="quotelev1">&gt; SRAT:  Node 0 PXM 0 100000-e0000000
</span><br>
<span class="quotelev1">&gt; SRAT:  Node 0 PXM 0 100000000-820000000
</span><br>
<span class="quotelev1">&gt; SRAT:  Node 1 PXM 1 820000000-1020000000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4) Note the nodes have a 10GE interface on eth2 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_bro127:~] nano /var/log/messages  (snip)
</span><br>
<span class="quotelev1">&gt; Jan 15 16:03:55 bro127 kernel: ADDRCONF(NETDEV_UP): eth2: link is not
</span><br>
<span class="quotelev1">&gt; ready
</span><br>
<span class="quotelev1">&gt; Jan 15 16:03:55 bro127 kernel: ixgbe 0000:04:00.0: eth2: changing MTU
</span><br>
<span class="quotelev1">&gt; from 1500 to 8000
</span><br>
<span class="quotelev1">&gt; Jan 15 16:03:55 bro127 kernel: ixgbe 0000:04:00.0: eth2: detected SFP+: 3
</span><br>
<span class="quotelev1">&gt; Jan 15 16:03:55 bro127 kernel: SoftIWARP attached
</span><br>
<span class="quotelev1">&gt; Jan 15 16:03:55 bro127 kernel: ixgbe 0000:04:00.0: eth2: detected SFP+: 3
</span><br>
<span class="quotelev1">&gt; Jan 15 16:03:55 bro127 kernel: ixgbe 0000:04:00.0: eth2: NIC Link is
</span><br>
<span class="quotelev1">&gt; Up 10 Gbps, Flow Control: RX/TX
</span><br>
<span class="quotelev1">&gt; Jan 15 16:03:55 bro127 kernel: ADDRCONF(NETDEV_CHANGE): eth2: link
</span><br>
<span class="quotelev1">&gt; becomes ready
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [roberpj_at_bro127:~] modinfo ixgbe
</span><br>
<span class="quotelev1">&gt; filename:
</span><br>
<span class="quotelev1">&gt; /lib/modules/2.6.32-279.5.2.el6.x86_64/kernel/drivers/net/ixgbe/ixgbe.ko
</span><br>
<span class="quotelev1">&gt; version:        3.6.7-k
</span><br>
<span class="quotelev1">&gt; license:        GPL
</span><br>
<span class="quotelev1">&gt; description:    Intel(R) 10 Gigabit PCI Express Network Driver
</span><br>
<span class="quotelev1">&gt; author:         Intel Corporation, &lt;linux.nics_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; srcversion:     EC64C3345C7AC6AB4BD6F5C
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d0000154Asv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d00001557sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d0000154Fsv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d0000154Dsv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d00001528sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d000010F8sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d0000151Csv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d00001529sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d0000152Asv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d000010F9sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d00001514sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d00001507sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d000010FBsv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d00001517sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d000010FCsv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d000010F7sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d00001508sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d000010DBsv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d000010F4sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d000010E1sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d000010F1sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d000010ECsv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d000010DDsv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d0000150Bsv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d000010C8sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d000010C7sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d000010C6sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; alias: pci: v00008086d000010B6sv*sd*bc*sc*i*
</span><br>
<span class="quotelev1">&gt; depends:        mdio,dca
</span><br>
<span class="quotelev1">&gt; vermagic:       2.6.32-279.5.2.el6.x86_64 SMP mod_unload modversions
</span><br>
<span class="quotelev1">&gt; parm:           IntMode:Change Interrupt Mode (0=Legacy, 1=MSI,
</span><br>
<span class="quotelev1">&gt; 2=MSI-X), default 2 (array of int)
</span><br>
<span class="quotelev1">&gt; parm:           FdirMode:Flow Director filtering modes (0=Off,
</span><br>
<span class="quotelev1">&gt; 1=Hashing) default 1 (array of int)
</span><br>
<span class="quotelev1">&gt; parm:           max_vfs:Maximum number of virtual functions to
</span><br>
<span class="quotelev1">&gt; allocate per physical function (uint)
</span><br>
<span class="quotelev1">&gt; parm:           allow_unsupported_sfp:Allow unsupported and untested
</span><br>
<span class="quotelev1">&gt; SFP+ modules on 82599-based adapters (uint)
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0950/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0951.php">Doug Roberts: "Re: [hwloc-users] hwloc errors on program startup"</a>
<li><strong>Previous message:</strong> <a href="0949.php">Doug Roberts: "[hwloc-users] hwloc errors on program startup"</a>
<li><strong>In reply to:</strong> <a href="0949.php">Doug Roberts: "[hwloc-users] hwloc errors on program startup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0951.php">Doug Roberts: "Re: [hwloc-users] hwloc errors on program startup"</a>
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
