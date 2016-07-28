<?
$subject_val = "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  7 08:57:14 2011" -->
<!-- isoreceived="20110207135714" -->
<!-- sent="Mon, 07 Feb 2011 14:57:09 +0100" -->
<!-- isosent="20110207135709" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode" -->
<!-- id="4D4FFA35.6050403_at_inria.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="1297085671.12560.105.camel_at_kallies" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-07 08:57:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1911.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
<li><strong>Previous message:</strong> <a href="1909.php">Bernd Kallies: "[hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
<li><strong>In reply to:</strong> <a href="1909.php">Bernd Kallies: "[hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1911.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
<li><strong>Reply:</strong> <a href="1911.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 07/02/2011 14:34, Bernd Kallies a &#233;crit :
<br>
<span class="quotelev1">&gt; Hallo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; we currently have some large SMP systems (SGI Ultraviolet, 64 NUMA nodes
</span><br>
<span class="quotelev1">&gt; and 1024 logical procs per OS instance).
</span><br>
<span class="quotelev1">&gt; After reboot of one of them, the system came up with memory of one node
</span><br>
<span class="quotelev1">&gt; missing. In particular, one of the pseudo
</span><br>
<span class="quotelev1">&gt; directories /sys/devices/system/node/nodeXXX is missing (in particular
</span><br>
<span class="quotelev1">&gt; node29 is missing). All CPUs (even those of node29) are found
</span><br>
<span class="quotelev1">&gt; in /proc/cpuinfo and /sys/devices/system/cpuXXX. It is currently not
</span><br>
<span class="quotelev1">&gt; clear if this is a hardware or BIOS or kernel issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In any event, applications that base on hwloc-1.1 and hwloc-1.1.1 crash
</span><br>
<span class="quotelev1">&gt; with SIGSEGV while loading the topology of this machine. They run within
</span><br>
<span class="quotelev1">&gt; the linux root cpuset, which contains cpus 0-1023 (all CPUs of the
</span><br>
<span class="quotelev1">&gt; system), and mems 0-28,30-63 (node 29 is missing).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the traceback of lstopo version 1.1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; 0x00000000004119de in hwloc__setup_misc_level_from_distances (topology=0x531370, nbobjs=63, objs=0x7fffffffd450, _distances=0x7fffffff9630, depth=0)
</span><br>
<span class="quotelev1">&gt;     at topology.c:272
</span><br>
<span class="quotelev1">&gt; 272	              groupdistances[groupids[i]-1][groupids[j]-1] += (*distances)[i][j];
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x00000000004119de in hwloc__setup_misc_level_from_distances (topology=0x531370, nbobjs=63, objs=0x7fffffffd450, _distances=0x7fffffff9630, depth=0)
</span><br>
<span class="quotelev1">&gt;     at topology.c:272
</span><br>
<span class="quotelev1">&gt; #1  0x0000000000411f99 in hwloc_setup_misc_level_from_distances (topology=0x531370, nbobjs=63, objs=0x7fffffffd450, _distances=0x7fffffff9630, 
</span><br>
<span class="quotelev1">&gt;     _distance_indexes=0x7fffffff9520) at topology.c:339
</span><br>
<span class="quotelev1">&gt; #2  0x00000000004206df in look_sysfsnode (topology=0x531370, path=0x4276ea &quot;/sys/devices/system/node&quot;, found=0x7fffffffd864) at topology-linux.c:1870
</span><br>
<span class="quotelev1">&gt; #3  0x0000000000423161 in hwloc_look_linux (topology=0x531370) at topology-linux.c:2633
</span><br>
<span class="quotelev1">&gt; #4  0x000000000041497b in hwloc_discover (topology=0x531370) at topology.c:1513
</span><br>
<span class="quotelev1">&gt; #5  0x0000000000415d88 in hwloc_topology_load (topology=0x531370) at topology.c:2163
</span><br>
<span class="quotelev1">&gt; #6  0x0000000000403c7a in main (argc=1, argv=0x7fffffffde28) at lstopo.c:434
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The particular reason of SIGSEGV is that groupids[28] equals to zero,
</span><br>
<span class="quotelev1">&gt; yielding topology.c:272 to evaluate to groupdistances[0][-1] += ...
</span><br>
<span class="quotelev1">&gt; The groupids array is set via hwloc_setup_group_from_min_distance().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc-1.1.1 behaves the same. hwloc-1.0.2 works for this machine, but
</span><br>
<span class="quotelev1">&gt; the hwloc topology misses all HWLOC_GROUP objects, which are usually
</span><br>
<span class="quotelev1">&gt; there if the machine is OK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Despite the machine has to be repaired, I'm wondering if hwloc can be
</span><br>
<span class="quotelev1">&gt; hardened against missing components of such large machines. This
</span><br>
<span class="quotelev1">&gt; particular system seems to work fine, even with a missing part, as long
</span><br>
<span class="quotelev1">&gt; as one does not use the CPUs that seem to have no directly attached
</span><br>
<span class="quotelev1">&gt; memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached you find a tar file with the following additional information:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - lstopo-1.1.huv04.output: lstopo output (--enable-debug) for the malfunctioning machine until SIGSEGV
</span><br>
<span class="quotelev1">&gt; - lstopo-1.1.huv01.output: lstopo output (--enable-debug) for a similar machine, which is OK
</span><br>
<span class="quotelev1">&gt; - lstopo-1.1.huv01.xml: lstopo xml output for a similar machine, which is OK
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I may upload hwloc-gather-topology information to somewhere (about 600
</span><br>
<span class="quotelev1">&gt; kByte, which is too big to attach it to emails to your mail server)
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Hello Bernd,
<br>
<p>We support machines with sparse NUMA numbers.  But I am not sure I have
<br>
tested the grouping code on such machines. If you set
<br>
HWLOC_IGNORE_DISTANCES=1 in your environment, does hwloc work? If so, we
<br>
just need some fixes inside the grouping code.
<br>
<p>Feel free to send the gather-topology output to me in private. I'll work
<br>
on fixing this.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1911.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
<li><strong>Previous message:</strong> <a href="1909.php">Bernd Kallies: "[hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
<li><strong>In reply to:</strong> <a href="1909.php">Bernd Kallies: "[hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1911.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
<li><strong>Reply:</strong> <a href="1911.php">Bernd Kallies: "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
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
