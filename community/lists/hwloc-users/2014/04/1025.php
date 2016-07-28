<?
$subject_val = "[hwloc-users] divide by zero error?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 28 19:15:58 2014" -->
<!-- isoreceived="20140428231558" -->
<!-- sent="Mon, 28 Apr 2014 23:15:53 +0000" -->
<!-- isosent="20140428231553" -->
<!-- name="Friedley, Andrew" -->
<!-- email="andrew.friedley_at_[hidden]" -->
<!-- subject="[hwloc-users] divide by zero error?" -->
<!-- id="0429C22EBDB44040B478F8F77EF14518BD4456_at_ORSMSX114.amr.corp.intel.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-users] divide by zero error?<br>
<strong>From:</strong> Friedley, Andrew (<em>andrew.friedley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-28 19:15:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1026.php">Brice Goglin: "Re: [hwloc-users] divide by zero error?"</a>
<li><strong>Previous message:</strong> <a href="1024.php">Brice Goglin: "Re: [hwloc-users] problem with open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1026.php">Brice Goglin: "Re: [hwloc-users] divide by zero error?"</a>
<li><strong>Reply:</strong> <a href="1026.php">Brice Goglin: "Re: [hwloc-users] divide by zero error?"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/06/1037.php">Brice Goglin: "Re: [hwloc-users] divide by zero error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I ran into a problem when running OMPI v1.8.1 -- a divide by zero crash deep in the hwloc code called by OMPI.  The system I'm running is a simics x86_64 emulator and RHEL 6.3.  I can reproduce the error running lstopo from hwloc v1.9:
<br>
<p>[root_at_viper0 bin]# LD_LIBRARY_PATH=/root/hwloc/lib ./lstopo -v
<br>
Floating point exception (core dumped)
<br>
<p><p>Hwloc v1.1rc6, already installed on the system, and a corresponding OMPI 1.6.5 build, works with no problems:
<br>
<p>[root_at_viper0 bin]# lstopo --version
<br>
lstopo 1.1rc6
<br>
[root_at_viper0 bin]# lstopo -v
<br>
Machine (P#0 local=2055580KB total=2055580KB DMIProductName=Bochs DMIProductVersion= DMIProductSerial= DMIChassisVendor=Bochs DMIChassisType=1 DMIChassisVersion= DMIChassisSerial= DMIChassisAssetTag= DMIBIOSVendor=Bochs DMIBIOSVersion=Bochs DMIBIOSDate=01/01/2007 DMIS)
<br>
&nbsp;&nbsp;Socket L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3Cache L#0 (8192KB line=64)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2Cache L#0 (256KB line=64)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1Cache L#0 (32KB line=64)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#0 (P#0)
<br>
depth 0:        1 Machine (type #1)
<br>
&nbsp;depth 1:       1 Socket (type #3)
<br>
&nbsp;&nbsp;depth 2:      1 Cache (type #4)
<br>
&nbsp;&nbsp;&nbsp;depth 3:     1 Cache (type #4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;depth 4:    1 Cache (type #4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 5:   1 Core (type #5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 6:  1 PU (type #6)
<br>
<p><p>Here's the output from a GDB session on hwloc v1.9:
<br>
<p>[root_at_viper0 bin]# LD_LIBRARY_PATH=/root/hwloc/lib gdb ./lstopo
<br>
GNU gdb (GDB) Red Hat Enterprise Linux (7.2-56.el6)
<br>
Copyright (C) 2010 Free Software Foundation, Inc.
<br>
License GPLv3+: GNU GPL version 3 or later &lt;<a href="http://gnu.org/licenses/gpl.html">http://gnu.org/licenses/gpl.html</a>&gt;
<br>
This is free software: you are free to change and redistribute it.
<br>
There is NO WARRANTY, to the extent permitted by law.  Type &quot;show copying&quot;
<br>
and &quot;show warranty&quot; for details.
<br>
This GDB was configured as &quot;x86_64-redhat-linux-gnu&quot;.
<br>
For bug reporting instructions, please see:
<br>
&lt;<a href="http://www.gnu.org/software/gdb/bugs/">http://www.gnu.org/software/gdb/bugs/</a>&gt;...
<br>
Reading symbols from /root/hwloc/bin/lstopo...done.
<br>
(gdb) r -v
<br>
Starting program: /root/hwloc/bin/lstopo -v
<br>
warning: no loadable sections found in added symbol-file system-supplied DSO at 0x7ffff7ffd000
<br>
<p>Program received signal SIGFPE, Arithmetic exception.
<br>
0x00007ffff7df0558 in look_proc (infos=0x61b6a0, highest_cpuid=11, highest_ext_cpuid=&lt;value optimized out&gt;, features=&lt;value optimized out&gt;, cpuid_type=intel)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at topology-x86.c:323
<br>
323           infos-&gt;threadid = infos-&gt;logprocid % infos-&gt;max_nbthreads;
<br>
Missing separate debuginfos, use: debuginfo-install glibc-2.12-1.80.el6.x86_64
<br>
(gdb) bt
<br>
#0  0x00007ffff7df0558 in look_proc (infos=0x61b6a0, highest_cpuid=11, highest_ext_cpuid=&lt;value optimized out&gt;, features=&lt;value optimized out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cpuid_type=intel) at topology-x86.c:323
<br>
#1  0x00007ffff7df165a in look_procs (topology=0x619100, nbprocs=1, fulldiscovery=0) at topology-x86.c:741
<br>
#2  hwloc_look_x86 (topology=0x619100, nbprocs=1, fulldiscovery=0) at topology-x86.c:886
<br>
#3  0x00007ffff7df17f9 in hwloc_x86_discover (backend=&lt;value optimized out&gt;) at topology-x86.c:934
<br>
#4  0x00007ffff7dd6568 in hwloc_discover (topology=0x619100) at topology.c:2452
<br>
#5  hwloc_topology_load (topology=0x619100) at topology.c:2925
<br>
#6  0x0000000000402cf0 in main (argc=&lt;value optimized out&gt;, argv=&lt;value optimized out&gt;) at lstopo.c:581
<br>
&nbsp;(gdb) print infos-&gt;logprocid
<br>
$1 = 0
<br>
(gdb) print infos-&gt;max_nbthreads
<br>
$2 = 0
<br>
<p><p>Any ideas?  Any other info I should provide?
<br>
<p>Thanks,
<br>
<p>Andrew
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1026.php">Brice Goglin: "Re: [hwloc-users] divide by zero error?"</a>
<li><strong>Previous message:</strong> <a href="1024.php">Brice Goglin: "Re: [hwloc-users] problem with open mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1026.php">Brice Goglin: "Re: [hwloc-users] divide by zero error?"</a>
<li><strong>Reply:</strong> <a href="1026.php">Brice Goglin: "Re: [hwloc-users] divide by zero error?"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/06/1037.php">Brice Goglin: "Re: [hwloc-users] divide by zero error?"</a>
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
