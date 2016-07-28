<?
$subject_val = "[OMPI devel] RFC: Remove alignment code from rcache";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 10 14:45:47 2013" -->
<!-- isoreceived="20130910184547" -->
<!-- sent="Tue, 10 Sep 2013 11:45:43 -0700" -->
<!-- isosent="20130910184543" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Remove alignment code from rcache" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F360068DE976_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Remove alignment code from rcache<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-10 14:45:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12882.php">Michał Pecio: "[OMPI devel] [PATCH] orte: Do not call tcgetattr on pipe descriptor"</a>
<li><strong>Previous message:</strong> <a href="12880.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12927.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Remove alignment code from rcache"</a>
<li><strong>Reply:</strong> <a href="12927.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Remove alignment code from rcache"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Remove alignment code from ompi/mca/rcache/vma module
<br>
WHY: Because it is redundant and causing problems for memory pools that want different alignment
<br>
WHERE: ompi/mca/rcache/vma/rcache_vma.c, ompi/mca/mpool/grdma/mpool_grdma_module.c (Detailed changes attached)
<br>
WHEN: Tuesday,  September 17, 2013 COB
<br>
More detail:
<br>
This RFC looks to remove the alignment code from the rcache as it seems unnecessary.  In all use cases in the library, alignment requirements are handled in the memory pool layer (or in the case of the vader btl, in the btl layer).  It seems more logical that the alignment is in the upper layer as that code is also where any registration restrictions would be known.  The rcache alignment code causes problems for me where I want to have different alignment requirements than the rcache is forcing on me.  (The rcache defaults to an alignment of mca_mpool_base_page_size_log=4K on my machine)  Therefore, I would like to make the change as attached to this email.
<br>
<p>I have run through some tests and all seems OK.  Is there anything I am missing such that we need this  code in the rcache?
<br>
<p>Thanks,
<br>
Rolf
<br>
<p>[rvandevaart_at_sm064 ompi-trunk-tuesday]$ svn diff
<br>
Index: ompi/mca/rcache/vma/rcache_vma.c
<br>
===================================================================
<br>
--- ompi/mca/rcache/vma/rcache_vma.c             (revision 29155)
<br>
+++ ompi/mca/rcache/vma/rcache_vma.c          (working copy)
<br>
@@ -48,15 +48,13 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void* addr, size_t size, mca_mpool_base_registration_t **reg)  {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rc;
<br>
-    void* base_addr;
<br>
-    void* bound_addr;
<br>
+    unsigned char* bound_addr;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(size == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-    base_addr = down_align_addr(addr, mca_mpool_base_page_size_log);
<br>
-    bound_addr = up_align_addr((void*) ((unsigned long) addr + size - 1), mca_mpool_base_page_size_log);
<br>
+    bound_addr = addr + size - 1;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Check to ensure that the cache is valid */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OPAL_UNLIKELY(opal_memory_changed() &amp;&amp; @@ -65,8 +63,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-    *reg = mca_rcache_vma_tree_find((mca_rcache_vma_module_t*)rcache, (unsigned char*)base_addr,
<br>
-            (unsigned char*)bound_addr);
<br>
+    *reg = mca_rcache_vma_tree_find((mca_rcache_vma_module_t*)rcache, (unsigned char*)addr,
<br>
+            bound_addr);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
}
<br>
@@ -76,14 +74,13 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int reg_cnt)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rc;
<br>
-    void *base_addr, *bound_addr;
<br>
+    unsigned char *bound_addr;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(size == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-    base_addr = down_align_addr(addr, mca_mpool_base_page_size_log);
<br>
-    bound_addr = up_align_addr((void*) ((unsigned long) addr + size - 1), mca_mpool_base_page_size_log);
<br>
+    bound_addr = addr + size - 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Check to ensure that the cache is valid */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OPAL_UNLIKELY(opal_memory_changed() &amp;&amp; @@ -93,7 +90,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return mca_rcache_vma_tree_find_all((mca_rcache_vma_module_t*)rcache,
<br>
-            (unsigned char*)base_addr, (unsigned char*)bound_addr, regs,
<br>
+            (unsigned char*)addr, bound_addr, regs,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reg_cnt);
<br>
}
<br>
Index: ompi/mca/mpool/grdma/mpool_grdma_module.c
<br>
===================================================================
<br>
--- ompi/mca/mpool/grdma/mpool_grdma_module.c   (revision 29155)
<br>
+++ ompi/mca/mpool/grdma/mpool_grdma_module.c                (working copy)
<br>
@@ -233,7 +233,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* Persistent registration are always registered and placed in the cache */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(!(bypass_cache || persist)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* check to see if memory is registered */
<br>
-        mpool-&gt;rcache-&gt;rcache_find(mpool-&gt;rcache, addr, size, reg);
<br>
+        mpool-&gt;rcache-&gt;rcache_find(mpool-&gt;rcache, base, bound - base +
<br>
+ 1, reg);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (*reg &amp;&amp; !(flags &amp; MCA_MPOOL_FLAGS_INVALID)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (0 == (*reg)-&gt;ref_count) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Leave pinned must be set for this to still be in the rcache. */ @@ -346,7 +346,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_LOCK(&amp;mpool-&gt;rcache-&gt;lock);
<br>
-    rc = mpool-&gt;rcache-&gt;rcache_find(mpool-&gt;rcache, addr, size, reg);
<br>
+    rc = mpool-&gt;rcache-&gt;rcache_find(mpool-&gt;rcache, base, bound - base +
<br>
+ 1, reg);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(NULL != *reg &amp;&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(mca_mpool_grdma_component.leave_pinned ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;((*reg)-&gt;flags &amp; MCA_MPOOL_FLAGS_PERSIST) ||
<br>
[rvandevaart_at_sm064 ompi-trunk-tuesday]$
<br>
<p><p>-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12881/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12882.php">Michał Pecio: "[OMPI devel] [PATCH] orte: Do not call tcgetattr on pipe descriptor"</a>
<li><strong>Previous message:</strong> <a href="12880.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12927.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Remove alignment code from rcache"</a>
<li><strong>Reply:</strong> <a href="12927.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Remove alignment code from rcache"</a>
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
