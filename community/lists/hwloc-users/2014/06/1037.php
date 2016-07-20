<?
$subject_val = "Re: [hwloc-users] divide by zero error?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  8 03:38:10 2014" -->
<!-- isoreceived="20140608073810" -->
<!-- sent="Sun, 08 Jun 2014 09:38:07 +0200" -->
<!-- isosent="20140608073807" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] divide by zero error?" -->
<!-- id="539412DF.1080706_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0429C22EBDB44040B478F8F77EF14518BD68FD_at_ORSMSX114.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] divide by zero error?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-08 03:38:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1038.php">Yury Vorobyov: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/05/1036.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/04/1025.php">Friedley, Andrew: "[hwloc-users] divide by zero error?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I added --disable-cpuid, will be in hwloc v1.10.
<br>
Brice
<br>
<p><p><p>Le 06/05/2014 00:44, Friedley, Andrew a &#233;crit :
<br>
<span class="quotelev1">&gt; Actually, is there any way to make HWLOC_COMPONENTS=-x86 the default or otherwise disable or compile without the x86 backend, so that I get that behavior by default?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: Brice Goglin [mailto:Brice.Goglin_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, May 5, 2014 1:03 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Friedley, Andrew
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [hwloc-users] divide by zero error?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; The simulator returns buggy cpuid information. It may be possible to
</span><br>
<span class="quotelev2">&gt;&gt; workaround this specific problem, but I am afraid there could be others.
</span><br>
<span class="quotelev2">&gt;&gt; I think you should just disable the hwloc x86 backend by setting
</span><br>
<span class="quotelev2">&gt;&gt; HWLOC_COMPONENTS=-x86 in the environment. Does this look like an
</span><br>
<span class="quotelev2">&gt;&gt; acceptable work-around ?
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 05/05/2014 20:21, Friedley, Andrew a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Back from vacation -- Is this what you're after?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_viper0 bin]# ./lstopo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  * Topology extraction from /proc/cpuinfo *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found 1 cpu topologies, cpuset 0x00000001 os socket 0 has cpuset
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x00000001 os core 0 has cpuset 0x00000001 thread 0 has cpuset
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0x00000001 cache depth 0 has cpuset 0x00000001 cache depth 0 has
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpuset 0x00000001 cache depth 1 has cpuset 0x00000001 cache depth 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has cpuset 0x00000001 found DMIProductName 'Bochs'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found DMIProductVersion ''
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found DMIProductSerial ''
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found DMIChassisVendor 'Bochs'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found DMIChassisType '1'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found DMIChassisVersion ''
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found DMIChassisSerial ''
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found DMIChassisAssetTag ''
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found DMIBIOSVendor 'Bochs'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found DMIBIOSVersion 'Bochs'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found DMIBIOSDate '01/01/2007'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found DMISysVendor 'Bochs'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Machine#0(local=2055580KB total=0KB DMIProductName=Bochs
</span><br>
<span class="quotelev2">&gt;&gt; DMIProductVersion= DMIProductSerial= DMIChassisVendor=Bochs
</span><br>
<span class="quotelev2">&gt;&gt; DMIChassisType=1 DMI) cpuset 0xf...f complete 0x00000001 online 0xf...f
</span><br>
<span class="quotelev2">&gt;&gt; allowed 0xf...f nodeset 0x0 completeN 0x0 allowedN 0xf...f
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Socket#0(CPUVendor=GenuineIntel CPUFamilyNumber=6
</span><br>
<span class="quotelev2">&gt;&gt; CPUModelNumber=26 CPUModel=&quot;Intel(R) Core(TM) i7 CPU              @
</span><br>
<span class="quotelev2">&gt;&gt; 2.00GHz&quot;) cpuset 0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     L3Cache(size=8192KB linesize=64 ways=16) cpuset 0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       L2Cache(size=256KB linesize=64 ways=8) cpuset 0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         L1dCache(size=32KB linesize=64 ways=8) cpuset 0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           L1iCache(size=32KB linesize=64 ways=4) cpuset 0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;             Core#0 cpuset 0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt;               PU#0 cpuset 0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Backend x86 forcing a reconnect of levels
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- Socket level has number 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- Cache level depth 3 has number 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- Cache level depth 2 has number 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- Cache level depth 1 has number 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- Cache level depth 1 has number 5
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- Core level has number 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --- PU level has number 7
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; highest cpuid b, cpuid type 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; highest extended cpuid 80000008
</span><br>
<span class="quotelev3">&gt;&gt;&gt; possible CPUs are 0x00000001
</span><br>
<span class="quotelev3">&gt;&gt;&gt; binding to CPU0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; APIC ID 0x00 max_log_proc 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; phys 0 thread 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache 0 type 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache 1 type 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache 2 type 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache 3 type 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache 4 type 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cache 0 type 1 L1 t2 c8 linesize 64 linepart 1 ways 8 sets 64, size
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 32KB thus 0 threads Floating point exception (core dumped)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: Brice Goglin [mailto:Brice.Goglin_at_[hidden]]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sent: Wednesday, April 30, 2014 2:30 AM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Friedley, Andrew
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [hwloc-users] divide by zero error?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The Linux backend works well so the bug is indeed in the x86 backend
</span><br>
<span class="quotelev2">&gt;&gt; only.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could you rebuild with --enable-debug and send the entire
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stdout+stderr output of lstopo ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Le 29/04/2014 17:01, Friedley, Andrew a &#233;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Attached, off list.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Andrew
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; From: hwloc-users [mailto:hwloc-users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Behalf
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Of Brice Goglin
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sent: Monday, April 28, 2014 10:37 PM
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; To: hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subject: Re: [hwloc-users] divide by zero error?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Please run &quot;hwloc-gather-topology simics&quot; and send the resulting
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; simics.tar.bz2 that it will create. However, I assume that the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; simulator returns buggy x86 cpuid information, so we'll see if we
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; want/can easily workaround the bug or just let simics developers fix it.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Le 29/04/2014 01:15, Friedley, Andrew a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I ran into a problem when running OMPI v1.8.1 -- a divide by zero
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; crash
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; deep in the hwloc code called by OMPI.  The system I'm running is a
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; simics
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; x86_64 emulator and RHEL 6.3.  I can reproduce the error running
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; lstopo from hwloc v1.9:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_viper0 bin]# LD_LIBRARY_PATH=/root/hwloc/lib ./lstopo -v
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Floating point exception (core dumped)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hwloc v1.1rc6, already installed on the system, and a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; corresponding OMPI
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1.6.5 build, works with no problems:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_viper0 bin]# lstopo --version lstopo 1.1rc6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_viper0 bin]# lstopo -v
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Machine (P#0 local=2055580KB total=2055580KB
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DMIProductName=Bochs
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; DMIProductVersion= DMIProductSerial= DMIChassisVendor=Bochs
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; DMIChassisType=1 DMIChassisVersion= DMIChassisSerial=
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; DMIChassisAssetTag= DMIBIOSVendor=Bochs DMIBIOSVersion=Bochs
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; DMIBIOSDate=01/01/2007 DMIS)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   Socket L#0 (P#0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     L3Cache L#0 (8192KB line=64)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;       L2Cache L#0 (256KB line=64)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;         L1Cache L#0 (32KB line=64)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;           Core L#0 (P#0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;             PU L#0 (P#0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; depth 0:        1 Machine (type #1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  depth 1:       1 Socket (type #3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;   depth 2:      1 Cache (type #4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;    depth 3:     1 Cache (type #4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     depth 4:    1 Cache (type #4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;      depth 5:   1 Core (type #5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;       depth 6:  1 PU (type #6)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here's the output from a GDB session on hwloc v1.9:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_viper0 bin]# LD_LIBRARY_PATH=/root/hwloc/lib gdb ./lstopo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; GNU
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; gdb (GDB) Red Hat Enterprise Linux (7.2-56.el6) Copyright (C) 2010
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Free Software Foundation, Inc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; License GPLv3+: GNU GPL version 3 or later
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; copying&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This GDB was configured as &quot;x86_64-redhat-linux-gnu&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Reading symbols from /root/hwloc/bin/lstopo...done.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (gdb) r -v
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Starting program: /root/hwloc/bin/lstopo -v
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; warning: no loadable sections found in added symbol-file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; system-supplied DSO at 0x7ffff7ffd000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Program received signal SIGFPE, Arithmetic exception.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x00007ffff7df0558 in look_proc (infos=0x61b6a0, highest_cpuid=11,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; highest_ext_cpuid=&lt;value optimized out&gt;, features=&lt;value optimized
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; out&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cpuid_type=intel)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     at topology-x86.c:323
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 323           infos-&gt;threadid = infos-&gt;logprocid % infos-&gt;max_nbthreads;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Missing separate debuginfos, use: debuginfo-install
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; glibc-2.12-1.80.el6.x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #0  0x00007ffff7df0558 in look_proc (infos=0x61b6a0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; highest_cpuid=11,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; highest_ext_cpuid=&lt;value optimized out&gt;, features=&lt;value optimized
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; out&gt;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     cpuid_type=intel) at topology-x86.c:323
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #1  0x00007ffff7df165a in look_procs (topology=0x619100,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; nbprocs=1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; fulldiscovery=0) at topology-x86.c:741
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #2  hwloc_look_x86 (topology=0x619100, nbprocs=1, fulldiscovery=0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; topology-x86.c:886
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #3  0x00007ffff7df17f9 in hwloc_x86_discover (backend=&lt;value
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; optimized
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; out&gt;) at topology-x86.c:934
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #4  0x00007ffff7dd6568 in hwloc_discover (topology=0x619100) at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; topology.c:2452
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #5  hwloc_topology_load (topology=0x619100) at topology.c:2925
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #6  0x0000000000402cf0 in main (argc=&lt;value optimized out&gt;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; argv=&lt;value optimized out&gt;) at lstopo.c:581
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;  (gdb) print infos-&gt;logprocid
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; $1 = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (gdb) print infos-&gt;max_nbthreads
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; $2 = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Any ideas?  Any other info I should provide?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Andrew
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1038.php">Yury Vorobyov: "Re: [hwloc-users] misleading cache size on AMD Opteron 6348?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/05/1036.php">Craig Kapfer: "Re: [hwloc-users] node configuration differs form hardware"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/04/1025.php">Friedley, Andrew: "[hwloc-users] divide by zero error?"</a>
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
