<?
$subject_val = "Re: [hwloc-devel] Strange results on itanium 2";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 31 17:38:34 2010" -->
<!-- isoreceived="20101031213834" -->
<!-- sent="Sun, 31 Oct 2010 22:38:24 +0100" -->
<!-- isosent="20101031213824" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Strange results on itanium 2" -->
<!-- id="201010312238.24838.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4CCD2C90.1080409_at_inria.fr" -->
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
<strong>Date:</strong> 2010-10-31 17:38:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1400.php">Jirka Hladky: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>Previous message:</strong> <a href="1398.php">Brice Goglin: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>In reply to:</strong> <a href="1398.php">Brice Goglin: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sunday, October 31, 2010 09:45:04 am Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 30/10/2010 00:55, Jirka Hladky a &#233;crit :
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; L2 and one L1 per core. Your machine has hyperthreading, so our
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; This work-around worked fine on old itaniums since they had one
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; L3, one
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; work-around creates one L3 per thread, while L1 and L2 (properly
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; reported by the kernel) are core-specific. Maybe hwloc should just
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt;&gt; ignore caches with invalid shared_cpu_map.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; BTW, it's Intel Itanium2 9140N CPU with 18MB of L3 cache.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks all Itaniums (even the latest 93xx ones) have per-core L1/L2/L3
</span><br>
<span class="quotelev1">&gt; caches. Nothing is ever shared between cores. So a best workaround would
</span><br>
<span class="quotelev1">&gt; be to use the core cpuset (both threads) when the cache cpuset is wrong
</span><br>
<span class="quotelev1">&gt; (instead of using the thread cpuset like we do right now). I'll likely
</span><br>
<span class="quotelev1">&gt; commit that later.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<p><p>Thanks Brice!
<br>
<p>Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1400.php">Jirka Hladky: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>Previous message:</strong> <a href="1398.php">Brice Goglin: "Re: [hwloc-devel] Strange results on itanium 2"</a>
<li><strong>In reply to:</strong> <a href="1398.php">Brice Goglin: "Re: [hwloc-devel] Strange results on itanium 2"</a>
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
