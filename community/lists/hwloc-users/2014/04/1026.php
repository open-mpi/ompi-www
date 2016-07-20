<?
$subject_val = "Re: [hwloc-users] divide by zero error?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 01:36:53 2014" -->
<!-- isoreceived="20140429053653" -->
<!-- sent="Tue, 29 Apr 2014 07:36:51 +0200" -->
<!-- isosent="20140429053651" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] divide by zero error?" -->
<!-- id="535F3A73.7040109_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0429C22EBDB44040B478F8F77EF14518BD4456_at_ORSMSX114.amr.corp.intel.com" -->
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
<strong>Date:</strong> 2014-04-29 01:36:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/05/1027.php">Craig Kapfer: "[hwloc-users] node configuration differs form hardware"</a>
<li><strong>Previous message:</strong> <a href="1025.php">Friedley, Andrew: "[hwloc-users] divide by zero error?"</a>
<li><strong>In reply to:</strong> <a href="1025.php">Friedley, Andrew: "[hwloc-users] divide by zero error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/06/1037.php">Brice Goglin: "Re: [hwloc-users] divide by zero error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please run &quot;hwloc-gather-topology simics&quot; and send the resulting
<br>
simics.tar.bz2 that it will create. However, I assume that the simulator
<br>
returns buggy x86 cpuid information, so we'll see if we want/can easily
<br>
workaround the bug or just let simics developers fix it.
<br>
Brice
<br>
<p><p>Le 29/04/2014 01:15, Friedley, Andrew a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran into a problem when running OMPI v1.8.1 -- a divide by zero crash deep in the hwloc code called by OMPI.  The system I'm running is a simics x86_64 emulator and RHEL 6.3.  I can reproduce the error running lstopo from hwloc v1.9:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_viper0 bin]# LD_LIBRARY_PATH=/root/hwloc/lib ./lstopo -v
</span><br>
<span class="quotelev1">&gt; Floating point exception (core dumped)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hwloc v1.1rc6, already installed on the system, and a corresponding OMPI 1.6.5 build, works with no problems:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_viper0 bin]# lstopo --version
</span><br>
<span class="quotelev1">&gt; lstopo 1.1rc6
</span><br>
<span class="quotelev1">&gt; [root_at_viper0 bin]# lstopo -v
</span><br>
<span class="quotelev1">&gt; Machine (P#0 local=2055580KB total=2055580KB DMIProductName=Bochs DMIProductVersion= DMIProductSerial= DMIChassisVendor=Bochs DMIChassisType=1 DMIChassisVersion= DMIChassisSerial= DMIChassisAssetTag= DMIBIOSVendor=Bochs DMIBIOSVersion=Bochs DMIBIOSDate=01/01/2007 DMIS)
</span><br>
<span class="quotelev1">&gt;   Socket L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;     L3Cache L#0 (8192KB line=64)
</span><br>
<span class="quotelev1">&gt;       L2Cache L#0 (256KB line=64)
</span><br>
<span class="quotelev1">&gt;         L1Cache L#0 (32KB line=64)
</span><br>
<span class="quotelev1">&gt;           Core L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;             PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt; depth 0:        1 Machine (type #1)
</span><br>
<span class="quotelev1">&gt;  depth 1:       1 Socket (type #3)
</span><br>
<span class="quotelev1">&gt;   depth 2:      1 Cache (type #4)
</span><br>
<span class="quotelev1">&gt;    depth 3:     1 Cache (type #4)
</span><br>
<span class="quotelev1">&gt;     depth 4:    1 Cache (type #4)
</span><br>
<span class="quotelev1">&gt;      depth 5:   1 Core (type #5)
</span><br>
<span class="quotelev1">&gt;       depth 6:  1 PU (type #6)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the output from a GDB session on hwloc v1.9:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [root_at_viper0 bin]# LD_LIBRARY_PATH=/root/hwloc/lib gdb ./lstopo
</span><br>
<span class="quotelev1">&gt; GNU gdb (GDB) Red Hat Enterprise Linux (7.2-56.el6)
</span><br>
<span class="quotelev1">&gt; Copyright (C) 2010 Free Software Foundation, Inc.
</span><br>
<span class="quotelev1">&gt; License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
</span><br>
<span class="quotelev1">&gt; This is free software: you are free to change and redistribute it.
</span><br>
<span class="quotelev1">&gt; There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
</span><br>
<span class="quotelev1">&gt; and &quot;show warranty&quot; for details.
</span><br>
<span class="quotelev1">&gt; This GDB was configured as &quot;x86_64-redhat-linux-gnu&quot;.
</span><br>
<span class="quotelev1">&gt; For bug reporting instructions, please see:
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
</span><br>
<span class="quotelev1">&gt; Reading symbols from /root/hwloc/bin/lstopo...done.
</span><br>
<span class="quotelev1">&gt; (gdb) r -v
</span><br>
<span class="quotelev1">&gt; Starting program: /root/hwloc/bin/lstopo -v
</span><br>
<span class="quotelev1">&gt; warning: no loadable sections found in added symbol-file system-supplied DSO at 0x7ffff7ffd000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program received signal SIGFPE, Arithmetic exception.
</span><br>
<span class="quotelev1">&gt; 0x00007ffff7df0558 in look_proc (infos=0x61b6a0, highest_cpuid=11, highest_ext_cpuid=&lt;value optimized out&gt;, features=&lt;value optimized out&gt;, cpuid_type=intel)
</span><br>
<span class="quotelev1">&gt;     at topology-x86.c:323
</span><br>
<span class="quotelev1">&gt; 323           infos-&gt;threadid = infos-&gt;logprocid % infos-&gt;max_nbthreads;
</span><br>
<span class="quotelev1">&gt; Missing separate debuginfos, use: debuginfo-install glibc-2.12-1.80.el6.x86_64
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007ffff7df0558 in look_proc (infos=0x61b6a0, highest_cpuid=11, highest_ext_cpuid=&lt;value optimized out&gt;, features=&lt;value optimized out&gt;,
</span><br>
<span class="quotelev1">&gt;     cpuid_type=intel) at topology-x86.c:323
</span><br>
<span class="quotelev1">&gt; #1  0x00007ffff7df165a in look_procs (topology=0x619100, nbprocs=1, fulldiscovery=0) at topology-x86.c:741
</span><br>
<span class="quotelev1">&gt; #2  hwloc_look_x86 (topology=0x619100, nbprocs=1, fulldiscovery=0) at topology-x86.c:886
</span><br>
<span class="quotelev1">&gt; #3  0x00007ffff7df17f9 in hwloc_x86_discover (backend=&lt;value optimized out&gt;) at topology-x86.c:934
</span><br>
<span class="quotelev1">&gt; #4  0x00007ffff7dd6568 in hwloc_discover (topology=0x619100) at topology.c:2452
</span><br>
<span class="quotelev1">&gt; #5  hwloc_topology_load (topology=0x619100) at topology.c:2925
</span><br>
<span class="quotelev1">&gt; #6  0x0000000000402cf0 in main (argc=&lt;value optimized out&gt;, argv=&lt;value optimized out&gt;) at lstopo.c:581
</span><br>
<span class="quotelev1">&gt;  (gdb) print infos-&gt;logprocid
</span><br>
<span class="quotelev1">&gt; $1 = 0
</span><br>
<span class="quotelev1">&gt; (gdb) print infos-&gt;max_nbthreads
</span><br>
<span class="quotelev1">&gt; $2 = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas?  Any other info I should provide?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-users mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/05/1027.php">Craig Kapfer: "[hwloc-users] node configuration differs form hardware"</a>
<li><strong>Previous message:</strong> <a href="1025.php">Friedley, Andrew: "[hwloc-users] divide by zero error?"</a>
<li><strong>In reply to:</strong> <a href="1025.php">Friedley, Andrew: "[hwloc-users] divide by zero error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/06/1037.php">Brice Goglin: "Re: [hwloc-users] divide by zero error?"</a>
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
