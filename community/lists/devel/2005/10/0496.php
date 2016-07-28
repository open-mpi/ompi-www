<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 27 06:55:15 2005" -->
<!-- isoreceived="20051027115515" -->
<!-- sent="Thu, 27 Oct 2005 13:54:20 +0200" -->
<!-- isosent="20051027115420" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="[PATCH] fix ompi_free_list_grow" -->
<!-- id="20051027115420.GB30696_at_minantech.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-27 06:54:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0497.php">Gleb Natapov: "[PATCH] openib btl."</a>
<li><strong>Previous message:</strong> <a href="0495.php">Jeff Squyres: "Re:  MPI_Barrier in Netpipe causes segfault"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Current ompi_free_list_grow implementation can fail before
<br>
max_elements_to_alloc is reached. This cause deadlock for me
<br>
sometimes. Included patch fix this.
<br>
<p>Index: ompi/class/ompi_free_list.c
<br>
===================================================================
<br>
--- ompi/class/ompi_free_list.c	(revision 7878)
<br>
+++ ompi/class/ompi_free_list.c	(working copy)
<br>
@@ -104,9 +104,13 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t mod;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_mpool_base_registration_t* user_out = NULL; 
<br>
&nbsp;
<br>
-    if (flist-&gt;fl_max_to_alloc &gt; 0 &amp;&amp; flist-&gt;fl_num_allocated + num_elements &gt; flist-&gt;fl_max_to_alloc)
<br>
-        return OMPI_ERR_TEMP_OUT_OF_RESOURCE;
<br>
+    if (flist-&gt;fl_max_to_alloc &gt; 0)
<br>
+        if (flist-&gt;fl_num_allocated + num_elements &gt; flist-&gt;fl_max_to_alloc)
<br>
+            num_elements = flist-&gt;fl_max_to_alloc - flist-&gt;fl_num_allocated;
<br>
&nbsp;
<br>
+    if (num_elements == 0)
<br>
+	return OMPI_ERR_TEMP_OUT_OF_RESOURCE;
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != flist-&gt;fl_mpool)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;alloc_ptr = flist-&gt;fl_mpool-&gt;mpool_alloc(flist-&gt;fl_mpool, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(num_elements * flist-&gt;fl_elem_size) + CACHE_LINE_SIZE + sizeof(ompi_free_list_memory_t), 
<br>
<pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0497.php">Gleb Natapov: "[PATCH] openib btl."</a>
<li><strong>Previous message:</strong> <a href="0495.php">Jeff Squyres: "Re:  MPI_Barrier in Netpipe causes segfault"</a>
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
