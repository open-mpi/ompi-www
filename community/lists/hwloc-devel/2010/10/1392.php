<?
$subject_val = "Re: [hwloc-devel] Strange results on itanium 2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 29 18:24:45 2010" -->
<!-- isoreceived="20101029222445" -->
<!-- sent="Sat, 30 Oct 2010 00:24:14 +0200" -->
<!-- isosent="20101029222414" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Strange results on itanium 2" -->
<!-- id="4CCB498E.80309_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201010300001.26895.jhladky_at_redhat.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-29 18:24:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1393.php">Jirka Hladky: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>Previous message:</strong> <a href="1391.php">Jirka Hladky: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>In reply to:</strong> <a href="1391.php">Jirka Hladky: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1393.php">Jirka Hladky: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>Reply:</strong> <a href="1393.php">Jirka Hladky: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 30/10/2010 00:01, Jirka Hladky a &#233;crit :
<br>
<span class="quotelev1">&gt; On Friday, October 29, 2010 10:59:25 pm Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Le 29/10/2010 21:57, Jirka Hladky a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Samuel,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have attached the output of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tests/linux/gather-topology.sh `uname --kernel-release`_`uname --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodename`_gather-topology
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm sorry for the long delay - systems has been used by somebody else, I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; had to wait for it to be free.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; System is running kernel 2.6.18-227.el5 (RHEL 5.6). ia64 is not supported
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on RHEL 6.0 so I cannot really test it on the new kernel.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It would be really interesting if you can recognize if it's a kernel bug
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or hwloc problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; /sys/devices/system/cpu/cpu*/cache/index4/shared_cpu_map contains an
</span><br>
<span class="quotelev2">&gt;&gt; empty map. This index4 is a L3 cache. But this map means that this cache
</span><br>
<span class="quotelev2">&gt;&gt; is near none of the cores... The instruction L2 has the same problem
</span><br>
<span class="quotelev2">&gt;&gt; (index3 instead of 4). This is a kernel bug.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But, we already have a dedicated work-around in hwloc
</span><br>
<span class="quotelev2">&gt;&gt; (src/topology-linux.c):
</span><br>
<span class="quotelev2">&gt;&gt;           if (hwloc_bitmap_weight(cacheset) &lt; 1)
</span><br>
<span class="quotelev2">&gt;&gt;             /* mask is wrong (happens on ia64), assumes it's not shared */
</span><br>
<span class="quotelev2">&gt;&gt;             hwloc_bitmap_only(cacheset, i);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This work-around worked fine on old itaniums since they had one L3, one
</span><br>
<span class="quotelev2">&gt;&gt; L2 and one L1 per core. Your machine has hyperthreading, so our
</span><br>
<span class="quotelev2">&gt;&gt; work-around creates one L3 per thread, while L1 and L2 (properly
</span><br>
<span class="quotelev2">&gt;&gt; reported by the kernel) are core-specific. Maybe hwloc should just
</span><br>
<span class="quotelev2">&gt;&gt; ignore caches with invalid shared_cpu_map.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks for looking into it! I'm going to open a BZ for it and put you on the 
</span><br>
<span class="quotelev1">&gt; Cc.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Thanks.
<br>
<p><span class="quotelev1">&gt; BTW, is there some documentation on /sys/devices/system/cpu/* tree? 
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p>There's some doc in Documentation/ABI/*/sysfs-devices-* inside the
<br>
kernel source tree.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1393.php">Jirka Hladky: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>Previous message:</strong> <a href="1391.php">Jirka Hladky: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>In reply to:</strong> <a href="1391.php">Jirka Hladky: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1393.php">Jirka Hladky: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>Reply:</strong> <a href="1393.php">Jirka Hladky: "Re: [hwloc-devel] Strange results on itanium 2"</a>
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
