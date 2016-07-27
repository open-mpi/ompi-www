<?
$subject_val = "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 18 13:11:09 2011" -->
<!-- isoreceived="20110118181109" -->
<!-- sent="Tue, 18 Jan 2011 19:11:03 +0100" -->
<!-- isosent="20110118181103" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux" -->
<!-- id="4D35D7B7.5070404_at_inria.fr" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="1295368844.2218.200.camel_at_kallies" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-18 13:11:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1832.php">Bernd Kallies: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<li><strong>Previous message:</strong> <a href="1830.php">Guy Streeter: "Re: [hwloc-devel] python bindings"</a>
<li><strong>In reply to:</strong> <a href="1829.php">Bernd Kallies: "[hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1832.php">Bernd Kallies: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<li><strong>Reply:</strong> <a href="1832.php">Bernd Kallies: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 18/01/2011 17:40, Bernd Kallies a &#233;crit :
<br>
<span class="quotelev1">&gt; Hallo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using hwloc-1.1 on Linux 2.6.32.19 (x86_64) on a machine that has
</span><br>
<span class="quotelev1">&gt; several NUMA nodes. It seems to me that there are unwanted bits left in
</span><br>
<span class="quotelev1">&gt; the nodeset &quot;set&quot;, when calling hwloc_get_membind_nodeset(topo,
</span><br>
<span class="quotelev1">&gt; set, ...) after a successful hwloc_set_membind() or
</span><br>
<span class="quotelev1">&gt; hwloc_set_membind_nodeset().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; E.g. when binding to node 2, then calling
</span><br>
<span class="quotelev1">&gt; hwloc_get_membind_nodeset(topo, set), then stringifying set, I get
</span><br>
<span class="quotelev1">&gt; something like 2,516,518. The machine has 64 nodes and 1024 pus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that the following resolves the problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- src/topology-linux.c.bak	2010-11-25 15:01:48.000000000 +0100
</span><br>
<span class="quotelev1">&gt; +++ src/topology-linux.c	2011-01-18 17:38:18.000000000 +0100
</span><br>
<span class="quotelev1">&gt; @@ -886,18 +886,13 @@
</span><br>
<span class="quotelev1">&gt;  static void
</span><br>
<span class="quotelev1">&gt;  hwloc_linux_membind_mask_to_nodeset(hwloc_topology_t topology __hwloc_attribute_unused,
</span><br>
<span class="quotelev1">&gt;  				    hwloc_nodeset_t nodeset,
</span><br>
<span class="quotelev1">&gt; -				    unsigned _max_os_index, const unsigned long *linuxmask)
</span><br>
<span class="quotelev1">&gt; +				    unsigned max_os_index, const unsigned long *linuxmask)
</span><br>
<span class="quotelev1">&gt;  {
</span><br>
<span class="quotelev1">&gt; -  unsigned max_os_index;
</span><br>
<span class="quotelev1">&gt;    unsigned i;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -  /* round up to the nearest multiple of BITS_PER_LONG */
</span><br>
<span class="quotelev1">&gt; -  max_os_index = (_max_os_index + HWLOC_BITS_PER_LONG) &amp; ~(HWLOC_BITS_PER_LONG - 1);
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt;    hwloc_bitmap_zero(nodeset);
</span><br>
<span class="quotelev1">&gt;    for(i=0; i&lt;max_os_index/HWLOC_BITS_PER_LONG; i++)
</span><br>
<span class="quotelev1">&gt;      hwloc_bitmap_set_ith_ulong(nodeset, i, linuxmask[i]);
</span><br>
<span class="quotelev1">&gt; -  /* if we don't trust the kernel, we could clear bits from _max_os_index+1 to max_os_index-1 */
</span><br>
<span class="quotelev1">&gt;  }
</span><br>
<span class="quotelev1">&gt;  #endif /* HWLOC_HAVE_SET_MEMPOLICY || HWLOC_HAVE_MBIND */
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Hello Bernd,
<br>
<p>I would like to understand better what's going on here.
<br>
What's CONFIG_NODES_SHIFT in your kernel config?
<br>
Can you print max_os_index above (without round-up)?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1832.php">Bernd Kallies: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<li><strong>Previous message:</strong> <a href="1830.php">Guy Streeter: "Re: [hwloc-devel] python bindings"</a>
<li><strong>In reply to:</strong> <a href="1829.php">Bernd Kallies: "[hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1832.php">Bernd Kallies: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<li><strong>Reply:</strong> <a href="1832.php">Bernd Kallies: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
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
