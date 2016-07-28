<?
$subject_val = "Re: [OMPI devel] RFC: Remove alignment code from rcache";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 18 10:13:59 2013" -->
<!-- isoreceived="20130918141359" -->
<!-- sent="Wed, 18 Sep 2013 07:13:57 -0700" -->
<!-- isosent="20130918141357" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove alignment code from rcache" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F36006A2A1CE_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F360068DE976_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove alignment code from rcache<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-18 10:13:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12928.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Previous message:</strong> <a href="12926.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>In reply to:</strong> <a href="12881.php">Rolf vandeVaart: "[OMPI devel] RFC: Remove alignment code from rcache"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I will wait another week on this since I know a lot of folks were traveling.  Any input welcome.
<br>
<p>From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Rolf vandeVaart
<br>
Sent: Tuesday, September 10, 2013 2:46 PM
<br>
To: devel_at_[hidden]
<br>
Subject: [OMPI devel] RFC: Remove alignment code from rcache
<br>
<p>WHAT: Remove alignment code from ompi/mca/rcache/vma module
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
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(size == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>-    base_addr = down_align_addr(addr, mca_mpool_base_page_size_log);
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
<p>-    *reg = mca_rcache_vma_tree_find((mca_rcache_vma_module_t*)rcache, (unsigned char*)base_addr,
<br>
-            (unsigned char*)bound_addr);
<br>
+    *reg = mca_rcache_vma_tree_find((mca_rcache_vma_module_t*)rcache, (unsigned char*)addr,
<br>
+            bound_addr);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
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
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(size == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERROR;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>-    base_addr = down_align_addr(addr, mca_mpool_base_page_size_log);
<br>
-    bound_addr = up_align_addr((void*) ((unsigned long) addr + size - 1), mca_mpool_base_page_size_log);
<br>
+    bound_addr = addr + size - 1;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Check to ensure that the cache is valid */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OPAL_UNLIKELY(opal_memory_changed() &amp;&amp; @@ -93,7 +90,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return mca_rcache_vma_tree_find_all((mca_rcache_vma_module_t*)rcache,
<br>
-            (unsigned char*)base_addr, (unsigned char*)bound_addr, regs,
<br>
+            (unsigned char*)addr, bound_addr, regs,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reg_cnt);
<br>
}
<br>
<p>Index: ompi/mca/mpool/grdma/mpool_grdma_module.c
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
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_THREAD_LOCK(&amp;mpool-&gt;rcache-&gt;lock);
<br>
<p>-    rc = mpool-&gt;rcache-&gt;rcache_find(mpool-&gt;rcache, addr, size, reg);
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
<p>-----------------------------------------------------------------------------------
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12927/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12928.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Previous message:</strong> <a href="12926.php">Ralph Castain: "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>In reply to:</strong> <a href="12881.php">Rolf vandeVaart: "[OMPI devel] RFC: Remove alignment code from rcache"</a>
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
