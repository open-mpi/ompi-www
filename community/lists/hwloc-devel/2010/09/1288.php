<?
$subject_val = "Re: [hwloc-devel] Ordering of cache and cpu objects";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  8 05:04:00 2010" -->
<!-- isoreceived="20100908090400" -->
<!-- sent="Wed, 08 Sep 2010 11:03:40 +0200" -->
<!-- isosent="20100908090340" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Ordering of cache and cpu objects" -->
<!-- id="4C87516C.8090004_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C873E25.1090909_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Ordering of cache and cpu objects<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-08 05:03:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1289.php">Alexey Kardashevskiy: "[hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Previous message:</strong> <a href="1287.php">Pavan Balaji: "[hwloc-devel] Ordering of cache and cpu objects"</a>
<li><strong>In reply to:</strong> <a href="1287.php">Pavan Balaji: "[hwloc-devel] Ordering of cache and cpu objects"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have no way to know if a cache is inside or outside of an object,
<br>
except when their cpusets are different. There are some default ordering
<br>
rules but they may not always be right depending on the architecture and
<br>
processor. So yes, it may be wrong to show your L1 outside of your
<br>
cores, but it doesn't really matter since there's a single L1 for each
<br>
core anyway, these L1 are useless from a hierarchy point of view anyway.
<br>
<p>Brice
<br>
<p><p><p>Le 08/09/2010 09:41, Pavan Balaji a &#233;crit :
<br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was poking around with the ordering of the objects found by hwloc.
</span><br>
<span class="quotelev1">&gt; Here's the output I got (custom program: space represents the depth of
</span><br>
<span class="quotelev1">&gt; the object):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [MACHINE] total memory: 4089507840; local memory: 4089507840
</span><br>
<span class="quotelev1">&gt;     [SOCKET]
</span><br>
<span class="quotelev1">&gt;         [CACHE] L2 cache size: 4194304
</span><br>
<span class="quotelev1">&gt;             [CACHE] L1 cache size: 32768
</span><br>
<span class="quotelev1">&gt;                 [CORE]
</span><br>
<span class="quotelev1">&gt;             [CACHE] L1 cache size: 32768
</span><br>
<span class="quotelev1">&gt;                 [CORE]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is clear that the second-level cache is at depth 3, and is
</span><br>
<span class="quotelev1">&gt; contained within a socket (depth 2). However, the first-level cache is
</span><br>
<span class="quotelev1">&gt; at a lower depth (depth 4) than the cores themselves (depth 5). Is
</span><br>
<span class="quotelev1">&gt; there a reason why the ordering of the caches and CPU objects is not
</span><br>
<span class="quotelev1">&gt; consistent, or am I misreading these results?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the lstopo output for information on my machine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % ./src/pm/hydra/tools/bind/hwloc/hwloc/utils/lstopo
</span><br>
<span class="quotelev1">&gt; Machine (3900MB) + Socket #0 + L2 #0 (4096KB)
</span><br>
<span class="quotelev1">&gt;   L1 #0 (32KB) + Core #0 + PU #0 (phys=0)
</span><br>
<span class="quotelev1">&gt;   L1 #1 (32KB) + Core #1 + PU #1 (phys=1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -- Pavan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1289.php">Alexey Kardashevskiy: "[hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Previous message:</strong> <a href="1287.php">Pavan Balaji: "[hwloc-devel] Ordering of cache and cpu objects"</a>
<li><strong>In reply to:</strong> <a href="1287.php">Pavan Balaji: "[hwloc-devel] Ordering of cache and cpu objects"</a>
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
