<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1865";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 27 10:06:48 2010" -->
<!-- isoreceived="20100327140648" -->
<!-- sent="Sat, 27 Mar 2010 15:06:43 +0100" -->
<!-- isosent="20100327140643" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1865" -->
<!-- id="36ca99e91003270706yead8a7er781ff0a4eb53a29_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201003270753.o2R7rlfV000678_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1865<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-27 10:06:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0835.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="0833.php">Bert Wesarg: "Re: [hwloc-devel] Strange difference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0836.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1865"</a>
<li><strong>Reply:</strong> <a href="0836.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1865"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>thanks for sharing this early.
<br>
<p>On Sat, Mar 27, 2010 at 08:53,  &lt;bgoglin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Modified: branches/dyncpusets/src/cpuset.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/dyncpusets/src/cpuset.c &#194;&#160; &#194;&#160;(original)
</span><br>
<span class="quotelev1">&gt; +++ branches/dyncpusets/src/cpuset.c &#194;&#160; &#194;&#160;2010-03-27 03:53:47 EDT (Sat, 27 Mar 2010)
</span><br>
<span class="quotelev1">&gt; @@ -50,10 +63,18 @@
</span><br>
<span class="quotelev1">&gt; &#194;&#160;struct hwloc_cpuset_s * hwloc_cpuset_alloc(void)
</span><br>
<span class="quotelev1">&gt; &#194;&#160;{
</span><br>
<span class="quotelev1">&gt; &#194;&#160; struct hwloc_cpuset_s * set;
</span><br>
<span class="quotelev1">&gt; - &#194;&#160;set = calloc(sizeof(*set), 1);
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;set = malloc(sizeof(struct hwloc_cpuset_s));
</span><br>
<span class="quotelev1">&gt; &#194;&#160; if (!set)
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; return NULL;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;set-&gt;ulongs_count = 1;
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;set-&gt;ulongs = calloc(sizeof(unsigned long), set-&gt;ulongs_count);
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;if (!set-&gt;ulongs) {
</span><br>
<span class="quotelev1">&gt; + &#194;&#160; &#194;&#160;free(set-&gt;ulongs);
</span><br>
<p>That should be free(set).
<br>
<p><span class="quotelev1">&gt; + &#194;&#160; &#194;&#160;return NULL;
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;set-&gt;infinite = 0;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;#ifdef HWLOC_DEBUG
</span><br>
<span class="quotelev1">&gt; &#194;&#160; set-&gt;magic = HWLOC_CPUSET_MAGIC;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;#endif
</span><br>
<span class="quotelev1">&gt; @@ -70,29 +91,78 @@
</span><br>
<span class="quotelev1">&gt; &#194;&#160; set-&gt;magic = 0;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;#endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;free(set-&gt;ulongs);
</span><br>
<span class="quotelev1">&gt; &#194;&#160; free(set);
</span><br>
<span class="quotelev1">&gt; &#194;&#160;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +/* realloc until it contains at least needed_count ulongs */
</span><br>
<span class="quotelev1">&gt; +static void
</span><br>
<span class="quotelev1">&gt; +hwloc_cpuset_realloc_by_ulongs(struct hwloc_cpuset_s * set, unsigned needed_count)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;unsigned ulongs_count = set-&gt;ulongs_count;
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;unsigned i;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;HWLOC__CPUSET_CHECK(set);
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;if (needed_count &lt;= ulongs_count)
</span><br>
<span class="quotelev1">&gt; + &#194;&#160; &#194;&#160;return;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;while (ulongs_count &lt; needed_count)
</span><br>
<span class="quotelev1">&gt; + &#194;&#160; &#194;&#160;ulongs_count *= 2;
</span><br>
<p>You may have notices, that I don't like exponential realloc schemes.
<br>
On the other hand, I know that you plan to use a sparse implementation
<br>
in the future, so this is probably only an intermediate step. Anyway,
<br>
in this case, because one ulong should suffice for the common case, a
<br>
linear scheme with an increment of 1 would be crazy, I would use an
<br>
exponential scheme until some limit and from that on a linear scheme
<br>
(with that limit as the increment). The cache line size would be such
<br>
limit and a good one I think.
<br>
<p>Regards,
<br>
Bert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0835.php">MPI Team: "[hwloc-devel] === CREATE FAILURE (trunk) ==="</a>
<li><strong>Previous message:</strong> <a href="0833.php">Bert Wesarg: "Re: [hwloc-devel] Strange difference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0836.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1865"</a>
<li><strong>Reply:</strong> <a href="0836.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1865"</a>
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
