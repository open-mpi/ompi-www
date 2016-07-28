<?
$subject_val = "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 18 13:38:49 2011" -->
<!-- isoreceived="20110118183849" -->
<!-- sent="Tue, 18 Jan 2011 19:38:29 +0100" -->
<!-- isosent="20110118183829" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux" -->
<!-- id="1295375909.2218.223.camel_at_kallies" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="4D35D7B7.5070404_at_inria.fr" -->
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
<strong>From:</strong> Bernd Kallies (<em>kallies_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-18 13:38:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1833.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<li><strong>Previous message:</strong> <a href="1831.php">Brice Goglin: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<li><strong>In reply to:</strong> <a href="1831.php">Brice Goglin: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1834.php">Brice Goglin: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<li><strong>Reply:</strong> <a href="1834.php">Brice Goglin: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2011-01-18 at 19:11 +0100, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 18/01/2011 17:40, Bernd Kallies a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Hallo,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm using hwloc-1.1 on Linux 2.6.32.19 (x86_64) on a machine that has
</span><br>
<span class="quotelev2">&gt; &gt; several NUMA nodes. It seems to me that there are unwanted bits left in
</span><br>
<span class="quotelev2">&gt; &gt; the nodeset &quot;set&quot;, when calling hwloc_get_membind_nodeset(topo,
</span><br>
<span class="quotelev2">&gt; &gt; set, ...) after a successful hwloc_set_membind() or
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_set_membind_nodeset().
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; E.g. when binding to node 2, then calling
</span><br>
<span class="quotelev2">&gt; &gt; hwloc_get_membind_nodeset(topo, set), then stringifying set, I get
</span><br>
<span class="quotelev2">&gt; &gt; something like 2,516,518. The machine has 64 nodes and 1024 pus.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It seems that the following resolves the problem:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --- src/topology-linux.c.bak	2010-11-25 15:01:48.000000000 +0100
</span><br>
<span class="quotelev2">&gt; &gt; +++ src/topology-linux.c	2011-01-18 17:38:18.000000000 +0100
</span><br>
<span class="quotelev2">&gt; &gt; @@ -886,18 +886,13 @@
</span><br>
<span class="quotelev2">&gt; &gt;  static void
</span><br>
<span class="quotelev2">&gt; &gt;  hwloc_linux_membind_mask_to_nodeset(hwloc_topology_t topology __hwloc_attribute_unused,
</span><br>
<span class="quotelev2">&gt; &gt;  				    hwloc_nodeset_t nodeset,
</span><br>
<span class="quotelev2">&gt; &gt; -				    unsigned _max_os_index, const unsigned long *linuxmask)
</span><br>
<span class="quotelev2">&gt; &gt; +				    unsigned max_os_index, const unsigned long *linuxmask)
</span><br>
<span class="quotelev2">&gt; &gt;  {
</span><br>
<span class="quotelev2">&gt; &gt; -  unsigned max_os_index;
</span><br>
<span class="quotelev2">&gt; &gt;    unsigned i;
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev2">&gt; &gt; -  /* round up to the nearest multiple of BITS_PER_LONG */
</span><br>
<span class="quotelev2">&gt; &gt; -  max_os_index = (_max_os_index + HWLOC_BITS_PER_LONG) &amp; ~(HWLOC_BITS_PER_LONG - 1);
</span><br>
<span class="quotelev2">&gt; &gt; -
</span><br>
<span class="quotelev2">&gt; &gt;    hwloc_bitmap_zero(nodeset);
</span><br>
<span class="quotelev2">&gt; &gt;    for(i=0; i&lt;max_os_index/HWLOC_BITS_PER_LONG; i++)
</span><br>
<span class="quotelev2">&gt; &gt;      hwloc_bitmap_set_ith_ulong(nodeset, i, linuxmask[i]);
</span><br>
<span class="quotelev2">&gt; &gt; -  /* if we don't trust the kernel, we could clear bits from _max_os_index+1 to max_os_index-1 */
</span><br>
<span class="quotelev2">&gt; &gt;  }
</span><br>
<span class="quotelev2">&gt; &gt;  #endif /* HWLOC_HAVE_SET_MEMPOLICY || HWLOC_HAVE_MBIND */
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello Bernd,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to understand better what's going on here.
</span><br>
<span class="quotelev1">&gt; What's CONFIG_NODES_SHIFT in your kernel config?
</span><br>
<p>/proc/config.gz says CONFIG_NODES_SHIFT=9
<br>
<p><span class="quotelev1">&gt; Can you print max_os_index above (without round-up)?
</span><br>
<p>max_os_index = 512, HWLOC_BITS_PER_LONG = 64, rounding gives
<br>
max_os_index = 576.
<br>
<p>I also saw the same behaviour on a much smaller machine (usual 2-socket
<br>
Nehalem-EP). CONFIG_NODES_SHIFT is not found in /proc/config.gz.
<br>
max_os_index = 64, HWLOC_BITS_PER_LONG = 64, rounding gives max_os_index
<br>
= 128.
<br>
<p>Hope this helps. BK
<br>
<p><p><span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="1833.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3046"</a>
<li><strong>Previous message:</strong> <a href="1831.php">Brice Goglin: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<li><strong>In reply to:</strong> <a href="1831.php">Brice Goglin: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1834.php">Brice Goglin: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<li><strong>Reply:</strong> <a href="1834.php">Brice Goglin: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
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
