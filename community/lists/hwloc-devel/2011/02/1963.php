<?
$subject_val = "Re: [hwloc-devel] The de-C99 of hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 18 10:52:09 2011" -->
<!-- isoreceived="20110218155209" -->
<!-- sent="Fri, 18 Feb 2011 10:52:04 -0500" -->
<!-- isosent="20110218155204" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] The de-C99 of hwloc" -->
<!-- id="D7220192-8248-4AA0-AACA-0B6A936FE10E_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20110217235307.GW5461_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] The de-C99 of hwloc<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-18 10:52:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1964.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Previous message:</strong> <a href="1962.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>In reply to:</strong> <a href="1956.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1960.php">Brice Goglin: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 17, 2011, at 6:53 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres, le Thu 17 Feb 2011 23:15:26 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; -    uint64_t cacheconfig[n];
</span><br>
<span class="quotelev2">&gt;&gt; -    uint32_t cacheconfig32[n];
</span><br>
<span class="quotelev2">&gt;&gt; -    uint64_t cachesize[n];
</span><br>
<span class="quotelev2">&gt;&gt; +    uint64_t *cacheconfig = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +    uint64_t *cachesize = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; +    uint32_t *cacheconfig32 = NULL;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; +    cacheconfig = malloc(sizeof(uint64_t) * n * 2);
</span><br>
<span class="quotelev2">&gt;&gt; +    if (NULL == cacheconfig) {
</span><br>
<span class="quotelev2">&gt;&gt; +        goto out;
</span><br>
<span class="quotelev2">&gt;&gt; +    }
</span><br>
<span class="quotelev2">&gt;&gt; +    cachesize = cacheconfig + n;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not really fond of allocating for two pointers like this.
</span><br>
<p>Ok, I've changed it to 2 mallocs.
<br>
<p><span class="quotelev2">&gt;&gt; hwloc_linux_get_pid_cpubind(hwloc_topology_t topology, pid_t pid, hwloc_bitmap_t hwloc_set, int flags)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;   hwloc_bitmap_t tidset = hwloc_bitmap_alloc();
</span><br>
<span class="quotelev2">&gt;&gt; -  hwloc_bitmap_t cpusets[2] = { hwloc_set, tidset };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ow, even that is not allowed before C99?!
</span><br>
<p>No -- they're not constant.  :-(
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1964.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Previous message:</strong> <a href="1962.php">Jeff Squyres: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>In reply to:</strong> <a href="1956.php">Samuel Thibault: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1960.php">Brice Goglin: "Re: [hwloc-devel] The de-C99 of hwloc"</a>
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
