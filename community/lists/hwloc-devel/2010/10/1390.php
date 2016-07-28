<?
$subject_val = "Re: [hwloc-devel] Strange results on itanium 2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 29 17:00:03 2010" -->
<!-- isoreceived="20101029210003" -->
<!-- sent="Fri, 29 Oct 2010 22:59:25 +0200" -->
<!-- isosent="20101029205925" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Strange results on itanium 2" -->
<!-- id="4CCB35AD.1010507_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201010292157.59339.jhladky_at_redhat.com" -->
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
<strong>Date:</strong> 2010-10-29 16:59:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1391.php">Jirka Hladky: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>Previous message:</strong> <a href="1389.php">Jirka Hladky: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>In reply to:</strong> <a href="1389.php">Jirka Hladky: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1391.php">Jirka Hladky: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>Reply:</strong> <a href="1391.php">Jirka Hladky: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 29/10/2010 21:57, Jirka Hladky a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Samuel,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have attached the output of
</span><br>
<span class="quotelev1">&gt; tests/linux/gather-topology.sh `uname --kernel-release`_`uname --
</span><br>
<span class="quotelev1">&gt; nodename`_gather-topology
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sorry for the long delay - systems has been used by somebody else, I had 
</span><br>
<span class="quotelev1">&gt; to wait for it to be free.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; System is running kernel 2.6.18-227.el5 (RHEL 5.6). ia64 is not supported on 
</span><br>
<span class="quotelev1">&gt; RHEL 6.0 so I cannot really test it on the new kernel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be really interesting if you can recognize if it's a kernel bug or 
</span><br>
<span class="quotelev1">&gt; hwloc problem.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>/sys/devices/system/cpu/cpu*/cache/index4/shared_cpu_map contains an
<br>
empty map. This index4 is a L3 cache. But this map means that this cache
<br>
is near none of the cores... The instruction L2 has the same problem
<br>
(index3 instead of 4). This is a kernel bug.
<br>
<p>But, we already have a dedicated work-around in hwloc
<br>
(src/topology-linux.c):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (hwloc_bitmap_weight(cacheset) &lt; 1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* mask is wrong (happens on ia64), assumes it's not shared */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_bitmap_only(cacheset, i);
<br>
<p>This work-around worked fine on old itaniums since they had one L3, one
<br>
L2 and one L1 per core. Your machine has hyperthreading, so our
<br>
work-around creates one L3 per thread, while L1 and L2 (properly
<br>
reported by the kernel) are core-specific. Maybe hwloc should just
<br>
ignore caches with invalid shared_cpu_map.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1391.php">Jirka Hladky: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>Previous message:</strong> <a href="1389.php">Jirka Hladky: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>In reply to:</strong> <a href="1389.php">Jirka Hladky: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1391.php">Jirka Hladky: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>Reply:</strong> <a href="1391.php">Jirka Hladky: "Re: [hwloc-devel] Strange results on itanium 2"</a>
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
