<?
$subject_val = "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 28 10:40:39 2010" -->
<!-- isoreceived="20100728144039" -->
<!-- sent="Wed, 28 Jul 2010 16:37:41 +0200" -->
<!-- isosent="20100728143741" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet" -->
<!-- id="4C5040B5.5090003_at_inria.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="1280326876.2300.43.camel_at_kallies.zib.de" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-28 10:37:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1223.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Previous message:</strong> <a href="1221.php">Bernd Kallies: "[hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>In reply to:</strong> <a href="1221.php">Bernd Kallies: "[hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1223.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/07/2010 16:21, Bernd Kallies a &#233;crit :
<br>
<span class="quotelev1">&gt; We just got one SGI UltraViolet rack, containing 48 NUMA nodes with one
</span><br>
<span class="quotelev1">&gt; Octocore Nehalem each, SMT switched on. Essentially the machine is a big
</span><br>
<span class="quotelev1">&gt; shared-memory machine, similar to what SGI had with their Itanium-based
</span><br>
<span class="quotelev1">&gt; Altix 4700.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OS is SLES11 (2.6.32.12-0.7.1.1381.1.PTF-default x86_64). I used
</span><br>
<span class="quotelev1">&gt; hwloc-1.0.2 compiled with gcc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The lstopo output looks a bit strange. The full output of lstopo is
</span><br>
<span class="quotelev1">&gt; attached. It begins with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Machine (1534GB)
</span><br>
<span class="quotelev1">&gt;   Group4 #0 (1022GB)
</span><br>
<span class="quotelev1">&gt;     Group3 #0 (510GB)
</span><br>
<span class="quotelev1">&gt;       Group2 #0 (254GB)
</span><br>
<span class="quotelev1">&gt;         Group1 #0 (126GB)
</span><br>
<span class="quotelev1">&gt;           Group0 #0 (62GB)
</span><br>
<span class="quotelev1">&gt;             NUMANode #0 (phys=0 30GB) + Socket #0 + L3 #0 (24MB)
</span><br>
<span class="quotelev1">&gt;               L2 #0 (256KB) + L1 #0 (32KB) + Core #0
</span><br>
<span class="quotelev1">&gt;                 PU #0 (phys=0)
</span><br>
<span class="quotelev1">&gt;                 PU #1 (phys=384)
</span><br>
<span class="quotelev1">&gt;               L2 #1 (256KB) + L1 #1 (32KB) + Core #1
</span><br>
<span class="quotelev1">&gt;                 PU #2 (phys=1)
</span><br>
<span class="quotelev1">&gt;                 PU #3 (phys=385)
</span><br>
<span class="quotelev1">&gt;               L2 #2 (256KB) + L1 #2 (32KB) + Core #2
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;             NUMANode #1 (phys=1 32GB) + Socket #1 + L3 #1 (24MB)
</span><br>
<span class="quotelev1">&gt;               L2 #8 (256KB) + L1 #8 (32KB) + Core #8
</span><br>
<span class="quotelev1">&gt;                 PU #16 (phys=8)
</span><br>
<span class="quotelev1">&gt;                 PU #17 (phys=392)
</span><br>
<span class="quotelev1">&gt;               L2 #9 (256KB) + L1 #9 (32KB) + Core #9
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output essentially says that there are 48 NUMA nodes with 8 cores
</span><br>
<span class="quotelev1">&gt; each. Each NUMA node contains 32 GB memory except the 1st one, which
</span><br>
<span class="quotelev1">&gt; contains 30 GB. Two NUMA nodes are grouped together as &quot;Group0&quot;. Two
</span><br>
<span class="quotelev1">&gt; &quot;Group0&quot; are grouped together as &quot;Group1&quot; and so on. There are three
</span><br>
<span class="quotelev1">&gt; &quot;Group3&quot; objects, the 1st one contains 16 NUMA nodes with 510 GB, the
</span><br>
<span class="quotelev1">&gt; remaining two contain 16 NUMA nodes with 512 GB each. Up to here the
</span><br>
<span class="quotelev1">&gt; topology is understandeable. I'm wondering about &quot;Group4&quot;, which
</span><br>
<span class="quotelev1">&gt; contains the three &quot;Group3&quot; objects. lstopo should print &quot;1534GB&quot;
</span><br>
<span class="quotelev1">&gt; instead of &quot;1022GB&quot;. There is only one &quot;Group4&quot; object, and there are no
</span><br>
<span class="quotelev1">&gt; other direct children of the root object.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Indeed, there's something wrong.
<br>
Can you send the output of tests/linux/gather_topology.sh so that I try
<br>
to debug this from here?
<br>
<p><span class="quotelev1">&gt; Moreover, when running applications that use the hwloc API, and call
</span><br>
<span class="quotelev1">&gt; functions like hwloc_get_next_obj_by_depth or hwloc_get_obj_by_depth,
</span><br>
<span class="quotelev1">&gt; then calling hwloc_topology_destroy or even free() on some
</span><br>
<span class="quotelev1">&gt; self-allocated memory, then the app fail at this stage with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** glibc detected *** a.out: double free or corruption (out).
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; *** glibc detected *** a.out: free(): invalid next size (fast):
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Can you send an example as well?
<br>
<p>thanks,
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1223.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>Previous message:</strong> <a href="1221.php">Bernd Kallies: "[hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<li><strong>In reply to:</strong> <a href="1221.php">Bernd Kallies: "[hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1223.php">Brice Goglin: "Re: [hwloc-devel] Bug report: topology strange on SGI UltraViolet"</a>
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
