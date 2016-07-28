<?
$subject_val = "Re: [hwloc-devel] Strange results on itanium 2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 29 18:55:45 2010" -->
<!-- isoreceived="20101029225545" -->
<!-- sent="Sat, 30 Oct 2010 00:55:34 +0200" -->
<!-- isosent="20101029225534" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Strange results on itanium 2" -->
<!-- id="201010300055.35254.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4CCB498E.80309_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Strange results on itanium 2<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-29 18:55:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1394.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2663)"</a>
<li><strong>Previous message:</strong> <a href="1392.php">Brice Goglin: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>In reply to:</strong> <a href="1392.php">Brice Goglin: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1398.php">Brice Goglin: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>Reply:</strong> <a href="1398.php">Brice Goglin: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Saturday, October 30, 2010 12:24:14 am Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 30/10/2010 00:01, Jirka Hladky a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; On Friday, October 29, 2010 10:59:25 pm Brice Goglin wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Le 29/10/2010 21:57, Jirka Hladky a &#233;crit :
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi Samuel,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have attached the output of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; tests/linux/gather-topology.sh `uname --kernel-release`_`uname --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; nodename`_gather-topology
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'm sorry for the long delay - systems has been used by somebody else,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I had to wait for it to be free.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; System is running kernel 2.6.18-227.el5 (RHEL 5.6). ia64 is not
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; supported on RHEL 6.0 so I cannot really test it on the new kernel.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; It would be really interesting if you can recognize if it's a kernel
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; bug or hwloc problem.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /sys/devices/system/cpu/cpu*/cache/index4/shared_cpu_map contains an
</span><br>
<span class="quotelev3">&gt; &gt;&gt; empty map. This index4 is a L3 cache. But this map means that this cache
</span><br>
<span class="quotelev3">&gt; &gt;&gt; is near none of the cores... The instruction L2 has the same problem
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (index3 instead of 4). This is a kernel bug.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; But, we already have a dedicated work-around in hwloc
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (src/topology-linux.c):
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           if (hwloc_bitmap_weight(cacheset) &lt; 1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             /* mask is wrong (happens on ia64), assumes it's not shared
</span><br>
<span class="quotelev3">&gt; &gt;&gt;             */ hwloc_bitmap_only(cacheset, i);
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This work-around worked fine on old itaniums since they had one L3, one
</span><br>
<span class="quotelev3">&gt; &gt;&gt; L2 and one L1 per core. Your machine has hyperthreading, so our
</span><br>
<span class="quotelev3">&gt; &gt;&gt; work-around creates one L3 per thread, while L1 and L2 (properly
</span><br>
<span class="quotelev3">&gt; &gt;&gt; reported by the kernel) are core-specific. Maybe hwloc should just
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ignore caches with invalid shared_cpu_map.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Brice,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; thanks for looking into it! I'm going to open a BZ for it and put you on
</span><br>
<span class="quotelev2">&gt; &gt; the Cc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
Bug 647949 - Wrong /sys/devices/system/cpu/cpu*/cache/index4/shared_cpu_map 
<br>
for L3 and L2 cache on HP Integrity BL870c box with 2 Intel Itanium2 9140N 
<br>
processors
<br>
<p><a href="https://bugzilla.redhat.com/show_bug.cgi?id=647949">https://bugzilla.redhat.com/show_bug.cgi?id=647949</a>
<br>
<p>I put you on Cc.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; BTW, is there some documentation on /sys/devices/system/cpu/* tree?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's some doc in Documentation/ABI/*/sysfs-devices-* inside the
</span><br>
<span class="quotelev1">&gt; kernel source tree.
</span><br>
Thanks!
<br>
<p>BTW, it's Intel Itanium2 9140N CPU with 18MB of L3 cache. Kernel reports only 
<br>
9MB of L3 cache. It's another bug.
<br>
<p>Bonne nuit
<br>
Jirka
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1393/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1394.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2663)"</a>
<li><strong>Previous message:</strong> <a href="1392.php">Brice Goglin: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>In reply to:</strong> <a href="1392.php">Brice Goglin: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1398.php">Brice Goglin: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>Reply:</strong> <a href="1398.php">Brice Goglin: "Re: [hwloc-devel] Strange results on itanium 2"</a>
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
