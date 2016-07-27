<?
$subject_val = "Re: [hwloc-devel] Strange results on itanium 2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 29 18:01:37 2010" -->
<!-- isoreceived="20101029220137" -->
<!-- sent="Sat, 30 Oct 2010 00:01:26 +0200" -->
<!-- isosent="20101029220126" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Strange results on itanium 2" -->
<!-- id="201010300001.26895.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4CCB35AD.1010507_at_inria.fr" -->
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
<strong>Date:</strong> 2010-10-29 18:01:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1392.php">Brice Goglin: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>Previous message:</strong> <a href="1390.php">Brice Goglin: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>In reply to:</strong> <a href="1390.php">Brice Goglin: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1392.php">Brice Goglin: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>Reply:</strong> <a href="1392.php">Brice Goglin: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Friday, October 29, 2010 10:59:25 pm Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 29/10/2010 21:57, Jirka Hladky a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Hi Samuel,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have attached the output of
</span><br>
<span class="quotelev2">&gt; &gt; tests/linux/gather-topology.sh `uname --kernel-release`_`uname --
</span><br>
<span class="quotelev2">&gt; &gt; nodename`_gather-topology
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm sorry for the long delay - systems has been used by somebody else, I
</span><br>
<span class="quotelev2">&gt; &gt; had to wait for it to be free.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; System is running kernel 2.6.18-227.el5 (RHEL 5.6). ia64 is not supported
</span><br>
<span class="quotelev2">&gt; &gt; on RHEL 6.0 so I cannot really test it on the new kernel.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It would be really interesting if you can recognize if it's a kernel bug
</span><br>
<span class="quotelev2">&gt; &gt; or hwloc problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /sys/devices/system/cpu/cpu*/cache/index4/shared_cpu_map contains an
</span><br>
<span class="quotelev1">&gt; empty map. This index4 is a L3 cache. But this map means that this cache
</span><br>
<span class="quotelev1">&gt; is near none of the cores... The instruction L2 has the same problem
</span><br>
<span class="quotelev1">&gt; (index3 instead of 4). This is a kernel bug.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, we already have a dedicated work-around in hwloc
</span><br>
<span class="quotelev1">&gt; (src/topology-linux.c):
</span><br>
<span class="quotelev1">&gt;           if (hwloc_bitmap_weight(cacheset) &lt; 1)
</span><br>
<span class="quotelev1">&gt;             /* mask is wrong (happens on ia64), assumes it's not shared */
</span><br>
<span class="quotelev1">&gt;             hwloc_bitmap_only(cacheset, i);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This work-around worked fine on old itaniums since they had one L3, one
</span><br>
<span class="quotelev1">&gt; L2 and one L1 per core. Your machine has hyperthreading, so our
</span><br>
<span class="quotelev1">&gt; work-around creates one L3 per thread, while L1 and L2 (properly
</span><br>
<span class="quotelev1">&gt; reported by the kernel) are core-specific. Maybe hwloc should just
</span><br>
<span class="quotelev1">&gt; ignore caches with invalid shared_cpu_map.
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
<p><p>Hi Brice,
<br>
<p>thanks for looking into it! I'm going to open a BZ for it and put you on the 
<br>
Cc.
<br>
<p>BTW, is there some documentation on /sys/devices/system/cpu/* tree? 
<br>
<p>Thanks!
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1392.php">Brice Goglin: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>Previous message:</strong> <a href="1390.php">Brice Goglin: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>In reply to:</strong> <a href="1390.php">Brice Goglin: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1392.php">Brice Goglin: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>Reply:</strong> <a href="1392.php">Brice Goglin: "Re: [hwloc-devel] Strange results on itanium 2"</a>
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
