<?
$subject_val = "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 21 05:15:48 2010" -->
<!-- isoreceived="20100921091548" -->
<!-- sent="Tue, 21 Sep 2010 11:15:42 +0200" -->
<!-- isosent="20100921091542" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch" -->
<!-- id="20100921091542.GC5780_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="660528691.21686.1285059262854.JavaMail.root_at_zmbs2.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-21 05:15:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1327.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Previous message:</strong> <a href="1325.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Maybe in reply to:</strong> <a href="1289.php">Alexey Kardashevskiy: "[hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1327.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1327.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1328.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alexey Kardashevskiy, le Tue 21 Sep 2010 10:54:22 +0200, a &#233;crit :
<br>
<span class="quotelev2">&gt; &gt;Oh, it's odd that it's still called &quot;l2_cache&quot; for L3 caches above L2,
</span><br>
<span class="quotelev2">&gt; &gt;too :)
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;2&quot; here has the meaning &quot;one level higher&quot; :-)
</span><br>
<p>Sure, that's why I understood too, but it's still odd :)
<br>
<p><span class="quotelev2">&gt; &gt;We assume that the compiler can understand
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   device_tree_cpus_t cpus = { .n = 0 };
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;which is much clearer, please use that :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the compiler can understand { 0 }, I would keep it as having whole 
</span><br>
<span class="quotelev1">&gt; structure filled with zeroes is safer :-)
</span><br>
<p>{ .n = 0 } also fills the whole structure with zeroes. But it also is
<br>
better documentation, to explicitly say what is supposed to be zeroed
<br>
(actually the pointer also needs to be set to NULL IIRC).
<br>
<p><span class="quotelev3">&gt; &gt;&gt;+      /* Add socket */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;+      /* -1 - to discuss */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;+      struct hwloc_obj *socket = 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;hwloc_alloc_setup_object(HWLOC_OBJ_SOCKET, -1);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;+      socket-&gt;cpuset = hwloc_cpuset_dup(cpuset);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;+      hwloc_insert_object_by_cpuset(topology, socket);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt;Mmm, are we really sure that this describes sockets?  How would a multicore
</span><br>
<span class="quotelev2">&gt; &gt;socket look like here?  We should not insert sockets if we are not sure
</span><br>
<span class="quotelev2">&gt; &gt;which cpuset they really have (the principle of hwloc is &quot;never lie, at
</span><br>
<span class="quotelev2">&gt; &gt;worse don't say anything&quot;).
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My idea was to do as hwloc on RHEL6 and the same hardware does:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Group0 cpuset 0xffffffff,0xffffffff
</span><br>
<span class="quotelev1">&gt;     NUMANode#0(local=0KB total=58458112KB) cpuset 0xffffffff nodeset 
</span><br>
<span class="quotelev1">&gt; 0x00000001
</span><br>
<span class="quotelev1">&gt;       Socket cpuset 0x0000000f
</span><br>
<span class="quotelev1">&gt;         L3Cache(4096KB line=128) cpuset 0x0000000f
</span><br>
<span class="quotelev1">&gt;           L2Cache(256KB line=128) cpuset 0x0000000f
</span><br>
<span class="quotelev1">&gt;             L1Cache(32KB line=128) cpuset 0x0000000f
</span><br>
<span class="quotelev1">&gt;               Core#0 cpuset 0x0000000f
</span><br>
<span class="quotelev1">&gt;                 PU#0 cpuset 0x00000001
</span><br>
<span class="quotelev1">&gt;                 PU#1 cpuset 0x00000002
</span><br>
<span class="quotelev1">&gt;                 PU#2 cpuset 0x00000004
</span><br>
<span class="quotelev1">&gt;                 PU#3 cpuset 0x00000008
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is that ok if there is numa node, L*cache nodes and no &quot;socket&quot; in between?
</span><br>
<p>Yes. If you don't know for sure where sockets are (and your code doesn't
<br>
show any knowledge of that), then just don't add socket objects.
<br>
<p><span class="quotelev3">&gt; &gt;&gt;+      /* Add L1 cache */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;+      /* Ignore Instruction caches */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;+
</span><br>
<span class="quotelev3">&gt; &gt;&gt;+      /* d-cache-block-size - ignore */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;+      /* d-cache-line-size - to read, in bytes */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;+      /* d-cache-sets - ignore */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;+      /* d-cache-size - to read, in bytes */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;+      /* d-tlb-sets - ignore */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;+      /* d-tlb-size - ignore, always 0 on power6 */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;+      /* i-cache-* and i-tlb-* represent instruction cache, ignore */
</span><br>
<span class="quotelev3">&gt; &gt;&gt;+      uint32_t d_cache_line_size = 0, d_cache_size = 0;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;+      if ( (0 != hwloc_read_uint32(cpu, 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;&quot;d-cache-line-size&quot;,&amp;d_cache_line_size, root_fd))&amp;&amp;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;+          (0 != hwloc_read_uint32(cpu, &quot;d-cache-size&quot;,&amp;d_cache_size, 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;root_fd))  ) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;+        struct hwloc_obj *cache =
</span><br>
<span class="quotelev3">&gt; &gt;&gt;+            hwloc_alloc_setup_object(HWLOC_OBJ_CACHE, -1);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;+        cache-&gt;attr-&gt;cache.size = d_cache_size;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;+        cache-&gt;attr-&gt;cache.depth = 1;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;+        cache-&gt;attr-&gt;cache.linesize = d_cache_line_size;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt;I would rather create an L1 cache object as soon as any of the cache
</span><br>
<span class="quotelev2">&gt; &gt;properties is there, and then fill the properties with what is actually
</span><br>
<span class="quotelev2">&gt; &gt;available.
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please explain, I did not get the point. L1 cache properties beside in a 
</span><br>
<span class="quotelev1">&gt; CPU folder while other levels cache properties are stored in their own 
</span><br>
<span class="quotelev1">&gt; folders. And I add L1 cache as soon as I find a CPU which has such 
</span><br>
<span class="quotelev1">&gt; properties.
</span><br>
<p>What I mean is replace
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( (0 != hwloc_read_uint32(cpu, &quot;d-cache-line-size&quot;,&amp;d_cache_line_size, root_fd))&amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(0 != hwloc_read_uint32(cpu, &quot;d-cache-size&quot;,&amp;d_cache_size, 
<br>
<p>with
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( (0 != hwloc_read_uint32(cpu, &quot;d-cache-line-size&quot;,&amp;d_cache_line_size, root_fd))||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(0 != hwloc_read_uint32(cpu, &quot;d-cache-size&quot;,&amp;d_cache_size, 
<br>
<p>(i.e. replace &amp;&amp; with ||) and fix the rest accordingly.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1327.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Previous message:</strong> <a href="1325.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Maybe in reply to:</strong> <a href="1289.php">Alexey Kardashevskiy: "[hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1327.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1327.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1328.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
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
