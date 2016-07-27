<?
$subject_val = "[hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 18 11:41:00 2011" -->
<!-- isoreceived="20110118164100" -->
<!-- sent="Tue, 18 Jan 2011 17:40:44 +0100" -->
<!-- isosent="20110118164044" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="[hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux" -->
<!-- id="1295368844.2218.200.camel_at_kallies" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux<br>
<strong>From:</strong> Bernd Kallies (<em>kallies_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-18 11:40:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1830.php">Guy Streeter: "Re: [hwloc-devel] python bindings"</a>
<li><strong>Previous message:</strong> <a href="1828.php">Jeff Squyres: "Re: [hwloc-devel] python bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1831.php">Brice Goglin: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<li><strong>Reply:</strong> <a href="1831.php">Brice Goglin: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hallo,
<br>
<p>I'm using hwloc-1.1 on Linux 2.6.32.19 (x86_64) on a machine that has
<br>
several NUMA nodes. It seems to me that there are unwanted bits left in
<br>
the nodeset &quot;set&quot;, when calling hwloc_get_membind_nodeset(topo,
<br>
set, ...) after a successful hwloc_set_membind() or
<br>
hwloc_set_membind_nodeset().
<br>
<p>E.g. when binding to node 2, then calling
<br>
hwloc_get_membind_nodeset(topo, set), then stringifying set, I get
<br>
something like 2,516,518. The machine has 64 nodes and 1024 pus.
<br>
<p>It seems that the following resolves the problem:
<br>
<p>--- src/topology-linux.c.bak	2010-11-25 15:01:48.000000000 +0100
<br>
+++ src/topology-linux.c	2011-01-18 17:38:18.000000000 +0100
<br>
@@ -886,18 +886,13 @@
<br>
&nbsp;static void
<br>
&nbsp;hwloc_linux_membind_mask_to_nodeset(hwloc_topology_t topology __hwloc_attribute_unused,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_nodeset_t nodeset,
<br>
-				    unsigned _max_os_index, const unsigned long *linuxmask)
<br>
+				    unsigned max_os_index, const unsigned long *linuxmask)
<br>
&nbsp;{
<br>
-  unsigned max_os_index;
<br>
&nbsp;&nbsp;&nbsp;unsigned i;
<br>
&nbsp;
<br>
-  /* round up to the nearest multiple of BITS_PER_LONG */
<br>
-  max_os_index = (_max_os_index + HWLOC_BITS_PER_LONG) &amp; ~(HWLOC_BITS_PER_LONG - 1);
<br>
-
<br>
&nbsp;&nbsp;&nbsp;hwloc_bitmap_zero(nodeset);
<br>
&nbsp;&nbsp;&nbsp;for(i=0; i&lt;max_os_index/HWLOC_BITS_PER_LONG; i++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_bitmap_set_ith_ulong(nodeset, i, linuxmask[i]);
<br>
-  /* if we don't trust the kernel, we could clear bits from _max_os_index+1 to max_os_index-1 */
<br>
&nbsp;}
<br>
&nbsp;#endif /* HWLOC_HAVE_SET_MEMPOLICY || HWLOC_HAVE_MBIND */
<br>
<p><p>but I'm not sure if this is the correct way.
<br>
<p>Regards BK
<br>
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
<li><strong>Next message:</strong> <a href="1830.php">Guy Streeter: "Re: [hwloc-devel] python bindings"</a>
<li><strong>Previous message:</strong> <a href="1828.php">Jeff Squyres: "Re: [hwloc-devel] python bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1831.php">Brice Goglin: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
<li><strong>Reply:</strong> <a href="1831.php">Brice Goglin: "Re: [hwloc-devel] bug in hwloc 1.1 hwloc_get_membind_nodeset on Linux"</a>
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
