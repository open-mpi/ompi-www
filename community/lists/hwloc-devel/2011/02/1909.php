<?
$subject_val = "[hwloc-devel] hwloc-1.1 crash when missing a NUMAnode";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  7 08:34:59 2011" -->
<!-- isoreceived="20110207133459" -->
<!-- sent="Mon, 07 Feb 2011 14:34:31 +0100" -->
<!-- isosent="20110207133431" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-1.1 crash when missing a NUMAnode" -->
<!-- id="1297085671.12560.105.camel_at_kallies" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode<br>
<strong>From:</strong> Bernd Kallies (<em>kallies_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-07 08:34:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1910.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
<li><strong>Previous message:</strong> <a href="1908.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2a1r3160)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1910.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
<li><strong>Reply:</strong> <a href="1910.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hallo,
<br>
<p>we currently have some large SMP systems (SGI Ultraviolet, 64 NUMA nodes
<br>
and 1024 logical procs per OS instance).
<br>
After reboot of one of them, the system came up with memory of one node
<br>
missing. In particular, one of the pseudo
<br>
directories /sys/devices/system/node/nodeXXX is missing (in particular
<br>
node29 is missing). All CPUs (even those of node29) are found
<br>
in /proc/cpuinfo and /sys/devices/system/cpuXXX. It is currently not
<br>
clear if this is a hardware or BIOS or kernel issue.
<br>
<p>In any event, applications that base on hwloc-1.1 and hwloc-1.1.1 crash
<br>
with SIGSEGV while loading the topology of this machine. They run within
<br>
the linux root cpuset, which contains cpus 0-1023 (all CPUs of the
<br>
system), and mems 0-28,30-63 (node 29 is missing).
<br>
<p>Here is the traceback of lstopo version 1.1:
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
0x00000000004119de in hwloc__setup_misc_level_from_distances (topology=0x531370, nbobjs=63, objs=0x7fffffffd450, _distances=0x7fffffff9630, depth=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at topology.c:272
<br>
272	              groupdistances[groupids[i]-1][groupids[j]-1] += (*distances)[i][j];
<br>
(gdb) where
<br>
#0  0x00000000004119de in hwloc__setup_misc_level_from_distances (topology=0x531370, nbobjs=63, objs=0x7fffffffd450, _distances=0x7fffffff9630, depth=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at topology.c:272
<br>
#1  0x0000000000411f99 in hwloc_setup_misc_level_from_distances (topology=0x531370, nbobjs=63, objs=0x7fffffffd450, _distances=0x7fffffff9630, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;_distance_indexes=0x7fffffff9520) at topology.c:339
<br>
#2  0x00000000004206df in look_sysfsnode (topology=0x531370, path=0x4276ea &quot;/sys/devices/system/node&quot;, found=0x7fffffffd864) at topology-linux.c:1870
<br>
#3  0x0000000000423161 in hwloc_look_linux (topology=0x531370) at topology-linux.c:2633
<br>
#4  0x000000000041497b in hwloc_discover (topology=0x531370) at topology.c:1513
<br>
#5  0x0000000000415d88 in hwloc_topology_load (topology=0x531370) at topology.c:2163
<br>
#6  0x0000000000403c7a in main (argc=1, argv=0x7fffffffde28) at lstopo.c:434
<br>
<p>The particular reason of SIGSEGV is that groupids[28] equals to zero,
<br>
yielding topology.c:272 to evaluate to groupdistances[0][-1] += ...
<br>
The groupids array is set via hwloc_setup_group_from_min_distance().
<br>
<p>hwloc-1.1.1 behaves the same. hwloc-1.0.2 works for this machine, but
<br>
the hwloc topology misses all HWLOC_GROUP objects, which are usually
<br>
there if the machine is OK.
<br>
<p>Despite the machine has to be repaired, I'm wondering if hwloc can be
<br>
hardened against missing components of such large machines. This
<br>
particular system seems to work fine, even with a missing part, as long
<br>
as one does not use the CPUs that seem to have no directly attached
<br>
memory.
<br>
<p>Attached you find a tar file with the following additional information:
<br>
<p>- lstopo-1.1.huv04.output: lstopo output (--enable-debug) for the malfunctioning machine until SIGSEGV
<br>
- lstopo-1.1.huv01.output: lstopo output (--enable-debug) for a similar machine, which is OK
<br>
- lstopo-1.1.huv01.xml: lstopo xml output for a similar machine, which is OK
<br>
<p>I may upload hwloc-gather-topology information to somewhere (about 600
<br>
kByte, which is too big to attach it to emails to your mail server)
<br>
<p><p>Regards BK
<br>
<p><pre>
-- 
Dr. Bernd Kallies
Konrad-Zuse-Zentrum f&#252;r Informationstechnik Berlin
Takustr. 7
14195 Berlin
Tel: +49-30-84185-270
Fax: +49-30-84185-311
e-mail: kallies_at_[hidden]

</pre>
<p>
<p><hr>
<ul>
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1909/hwloc-huv.tgz">hwloc-huv.tgz</a>
</ul>
<!-- attachment="hwloc-huv.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1910.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
<li><strong>Previous message:</strong> <a href="1908.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1.2a1r3160)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1910.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
<li><strong>Reply:</strong> <a href="1910.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
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
