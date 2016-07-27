<?
$subject_val = "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  7 09:41:06 2011" -->
<!-- isoreceived="20110207144106" -->
<!-- sent="Mon, 07 Feb 2011 15:40:50 +0100" -->
<!-- isosent="20110207144050" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode" -->
<!-- id="1297089650.12560.125.camel_at_kallies" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="4D4FFA35.6050403_at_inria.fr" -->
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
<strong>From:</strong> Bernd Kallies (<em>kallies_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-07 09:40:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1912.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
<li><strong>Previous message:</strong> <a href="1910.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
<li><strong>In reply to:</strong> <a href="1910.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1912.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
<li><strong>Reply:</strong> <a href="1912.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2011-02-07 at 14:57 +0100, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 07/02/2011 14:34, Bernd Kallies a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Hallo,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; we currently have some large SMP systems (SGI Ultraviolet, 64 NUMA nodes
</span><br>
<span class="quotelev2">&gt; &gt; and 1024 logical procs per OS instance).
</span><br>
<span class="quotelev2">&gt; &gt; After reboot of one of them, the system came up with memory of one node
</span><br>
<span class="quotelev2">&gt; &gt; missing. In particular, one of the pseudo
</span><br>
<span class="quotelev2">&gt; &gt; directories /sys/devices/system/node/nodeXXX is missing (in particular
</span><br>
<span class="quotelev2">&gt; &gt; node29 is missing). All CPUs (even those of node29) are found
</span><br>
<span class="quotelev2">&gt; &gt; in /proc/cpuinfo and /sys/devices/system/cpuXXX. It is currently not
</span><br>
<span class="quotelev2">&gt; &gt; clear if this is a hardware or BIOS or kernel issue.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In any event, applications that base on hwloc-1.1 and hwloc-1.1.1 crash
</span><br>
<span class="quotelev2">&gt; &gt; with SIGSEGV while loading the topology of this machine. They run within
</span><br>
<span class="quotelev2">&gt; &gt; the linux root cpuset, which contains cpus 0-1023 (all CPUs of the
</span><br>
<span class="quotelev2">&gt; &gt; system), and mems 0-28,30-63 (node 29 is missing).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is the traceback of lstopo version 1.1:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev2">&gt; &gt; 0x00000000004119de in hwloc__setup_misc_level_from_distances (topology=0x531370, nbobjs=63, objs=0x7fffffffd450, _distances=0x7fffffff9630, depth=0)
</span><br>
<span class="quotelev2">&gt; &gt;     at topology.c:272
</span><br>
<span class="quotelev2">&gt; &gt; 272	              groupdistances[groupids[i]-1][groupids[j]-1] += (*distances)[i][j];
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) where
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x00000000004119de in hwloc__setup_misc_level_from_distances (topology=0x531370, nbobjs=63, objs=0x7fffffffd450, _distances=0x7fffffff9630, depth=0)
</span><br>
<span class="quotelev2">&gt; &gt;     at topology.c:272
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x0000000000411f99 in hwloc_setup_misc_level_from_distances (topology=0x531370, nbobjs=63, objs=0x7fffffffd450, _distances=0x7fffffff9630, 
</span><br>
<span class="quotelev2">&gt; &gt;     _distance_indexes=0x7fffffff9520) at topology.c:339
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x00000000004206df in look_sysfsnode (topology=0x531370, path=0x4276ea &quot;/sys/devices/system/node&quot;, found=0x7fffffffd864) at topology-linux.c:1870
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x0000000000423161 in hwloc_look_linux (topology=0x531370) at topology-linux.c:2633
</span><br>
<span class="quotelev2">&gt; &gt; #4  0x000000000041497b in hwloc_discover (topology=0x531370) at topology.c:1513
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x0000000000415d88 in hwloc_topology_load (topology=0x531370) at topology.c:2163
</span><br>
<span class="quotelev2">&gt; &gt; #6  0x0000000000403c7a in main (argc=1, argv=0x7fffffffde28) at lstopo.c:434
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The particular reason of SIGSEGV is that groupids[28] equals to zero,
</span><br>
<span class="quotelev2">&gt; &gt; yielding topology.c:272 to evaluate to groupdistances[0][-1] += ...
</span><br>
<span class="quotelev2">&gt; &gt; The groupids array is set via hwloc_setup_group_from_min_distance().
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-1.1.1 behaves the same. hwloc-1.0.2 works for this machine, but
</span><br>
<span class="quotelev2">&gt; &gt; the hwloc topology misses all HWLOC_GROUP objects, which are usually
</span><br>
<span class="quotelev2">&gt; &gt; there if the machine is OK.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Despite the machine has to be repaired, I'm wondering if hwloc can be
</span><br>
<span class="quotelev2">&gt; &gt; hardened against missing components of such large machines. This
</span><br>
<span class="quotelev2">&gt; &gt; particular system seems to work fine, even with a missing part, as long
</span><br>
<span class="quotelev2">&gt; &gt; as one does not use the CPUs that seem to have no directly attached
</span><br>
<span class="quotelev2">&gt; &gt; memory.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Attached you find a tar file with the following additional information:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - lstopo-1.1.huv04.output: lstopo output (--enable-debug) for the malfunctioning machine until SIGSEGV
</span><br>
<span class="quotelev2">&gt; &gt; - lstopo-1.1.huv01.output: lstopo output (--enable-debug) for a similar machine, which is OK
</span><br>
<span class="quotelev2">&gt; &gt; - lstopo-1.1.huv01.xml: lstopo xml output for a similar machine, which is OK
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I may upload hwloc-gather-topology information to somewhere (about 600
</span><br>
<span class="quotelev2">&gt; &gt; kByte, which is too big to attach it to emails to your mail server)
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello Bernd,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We support machines with sparse NUMA numbers.  But I am not sure I have
</span><br>
<span class="quotelev1">&gt; tested the grouping code on such machines. If you set
</span><br>
<span class="quotelev1">&gt; HWLOC_IGNORE_DISTANCES=1 in your environment, does hwloc work? If so, we
</span><br>
<span class="quotelev1">&gt; just need some fixes inside the grouping code.
</span><br>
<p>When setting HWLOC_IGNORE_DISTANCES=1, hwloc-1.1 does not crash on this
<br>
machine, but produces a somehow unusual topology. Btw. the same topology
<br>
error is got when applying a trivial fix to the grouping code, namely
<br>
<p>--- src/topology.c.bak	2010-11-25 15:54:33.000000000 +0100
<br>
+++ src/topology.c	2011-02-07 10:55:14.000000000 +0100
<br>
@@ -269,6 +269,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memset(groupdistances, 0, sizeof(groupdistances));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=0; i&lt;nbobjs; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(j=0; j&lt;nbobjs; j++)
<br>
+	    if(groupids[i] &amp;&amp; groupids[j])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;groupdistances[groupids[i]-1][groupids[j]-1] += (*distances)[i][j];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=0; i&lt;nbgroups; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(j=0; j&lt;nbgroups; j++)
<br>
<p>The topology error is: the 1st NODE object contains 2 sockets, instead
<br>
of one. The additional socket contains the processors of the lost node
<br>
29.
<br>
<p>I'm not sure how to deal with that, since /sys/devices/system/cpu is
<br>
inconsistent with /sys/devices/system/node on this machine. A naive idea
<br>
would be to implement such a consistency check. On this machine the node
<br>
ID of a cpu is found in
<br>
/sys/devices/system/cpu/cpu*/topology/physical_package_id
<br>
One may check if this node has a corresponding
<br>
/sys/devices/system/node/nodeXXX entry, and ignore a cpu if this is not
<br>
the case. But I'm not sure if this directory layout is somehow standard.
<br>
<p>I'll send the gather-topology info soon.
<br>
<p>Regards BK
<br>
<p><span class="quotelev1">&gt; Feel free to send the gather-topology output to me in private. I'll
</span><br>
<span class="quotelev1">&gt; work
</span><br>
<span class="quotelev1">&gt; on fixing this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1912.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
<li><strong>Previous message:</strong> <a href="1910.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
<li><strong>In reply to:</strong> <a href="1910.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1912.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
<li><strong>Reply:</strong> <a href="1912.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.1 crash when missing a NUMAnode"</a>
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
