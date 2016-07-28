<?
$subject_val = "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 21 20:33:50 2010" -->
<!-- isoreceived="20100922003350" -->
<!-- sent="Wed, 22 Sep 2010 10:33:41 +1000" -->
<!-- isosent="20100922003341" -->
<!-- name="Alexey Kardashevskiy" -->
<!-- email="aik_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch" -->
<!-- id="4C994EE5.9020800_at_au1.ibm.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100921091542.GC5780_at_const.bordeaux.inria.fr" -->
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
<strong>From:</strong> Alexey Kardashevskiy (<em>aik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-21 20:33:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1329.php">Jeff Squyres: "[hwloc-devel] hwloc on TCL core mailing list"</a>
<li><strong>Previous message:</strong> <a href="1327.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>In reply to:</strong> <a href="1326.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1330.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 21/09/10 19:15, Samuel Thibault wrote:
<br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      /* Add L1 cache */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      /* Ignore Instruction caches */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      /* d-cache-block-size - ignore */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      /* d-cache-line-size - to read, in bytes */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      /* d-cache-sets - ignore */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      /* d-cache-size - to read, in bytes */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      /* d-tlb-sets - ignore */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      /* d-tlb-size - ignore, always 0 on power6 */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      /* i-cache-* and i-tlb-* represent instruction cache, ignore */
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      uint32_t d_cache_line_size = 0, d_cache_size = 0;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +      if ( (0 != hwloc_read_uint32(cpu,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;d-cache-line-size&quot;,&amp;d_cache_line_size, root_fd))&amp;&amp;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +          (0 != hwloc_read_uint32(cpu, &quot;d-cache-size&quot;,&amp;d_cache_size,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; root_fd))  ) {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        struct hwloc_obj *cache =
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +            hwloc_alloc_setup_object(HWLOC_OBJ_CACHE, -1);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        cache-&gt;attr-&gt;cache.size = d_cache_size;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        cache-&gt;attr-&gt;cache.depth = 1;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +        cache-&gt;attr-&gt;cache.linesize = d_cache_line_size;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would rather create an L1 cache object as soon as any of the cache
</span><br>
<span class="quotelev3">&gt;&gt;&gt; properties is there, and then fill the properties with what is actually
</span><br>
<span class="quotelev3">&gt;&gt;&gt; available.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev1">&gt; What I mean is replace
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        if ( (0 != hwloc_read_uint32(cpu, &quot;d-cache-line-size&quot;,&amp;d_cache_line_size, root_fd))&amp;&amp;
</span><br>
<span class="quotelev1">&gt;            (0 != hwloc_read_uint32(cpu, &quot;d-cache-size&quot;,&amp;d_cache_size,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        if ( (0 != hwloc_read_uint32(cpu, &quot;d-cache-line-size&quot;,&amp;d_cache_line_size, root_fd))||
</span><br>
<span class="quotelev1">&gt;            (0 != hwloc_read_uint32(cpu, &quot;d-cache-size&quot;,&amp;d_cache_size,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (i.e. replace&amp;&amp;  with ||) and fix the rest accordingly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
What values should I use for property which is not present? cache_size = 
<br>
-1 and cache_line_size = -1 or what?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1329.php">Jeff Squyres: "[hwloc-devel] hwloc on TCL core mailing list"</a>
<li><strong>Previous message:</strong> <a href="1327.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>In reply to:</strong> <a href="1326.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1330.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
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
