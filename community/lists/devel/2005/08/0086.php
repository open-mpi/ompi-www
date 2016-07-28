<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  8 08:38:35 2005" -->
<!-- isoreceived="20050808133835" -->
<!-- sent="Mon, 8 Aug 2005 16:38:05 +0300" -->
<!-- isosent="20050808133805" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="[PATCH] for ompi_free_list.c" -->
<!-- id="20050808133805.GG16361_at_minantech.com" -->
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
<strong>Date:</strong> 2005-08-08 08:38:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0087.php">Ralph H. Castain: "Re:  compile error"</a>
<li><strong>Previous message:</strong> <a href="0085.php">Gleb Natapov: "compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0096.php">Galen Shipman: "Re:  [PATCH] for ompi_free_list.c"</a>
<li><strong>Reply:</strong> <a href="0096.php">Galen Shipman: "Re:  [PATCH] for ompi_free_list.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Included patch fixes bugs in ompi_free_list in the case ompi_free_list was
<br>
created with NULL class and/or mpool parameters.
<br>
<p>Index: ompi/class/ompi_free_list.c
<br>
===================================================================
<br>
--- ompi/class/ompi_free_list.c	(revision 6760)
<br>
+++ ompi/class/ompi_free_list.c	(working copy)
<br>
@@ -75,7 +75,7 @@ int ompi_free_list_grow(ompi_free_list_t
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned char* ptr;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t mod;
<br>
-    mca_mpool_base_registration_t* user_out; 
<br>
+    mca_mpool_base_registration_t* user_out = NULL; 
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (flist-&gt;fl_max_to_alloc &gt; 0 &amp;&amp; flist-&gt;fl_num_allocated + num_elements &gt; flist-&gt;fl_max_to_alloc)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERR_TEMP_OUT_OF_RESOURCE;
<br>
@@ -97,7 +97,10 @@ int ompi_free_list_grow(ompi_free_list_t
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item-&gt;user_data = user_out; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != flist-&gt;fl_elem_class) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OBJ_CONSTRUCT_INTERNAL(item, flist-&gt;fl_elem_class);
<br>
-        }
<br>
+        } else {
<br>
+	    OBJ_CONSTRUCT (&amp;item-&gt;super, opal_list_item_t);
<br>
+	}
<br>
+	
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_list_append(&amp;(flist-&gt;super), &amp;(item-&gt;super));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ptr += flist-&gt;fl_elem_size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0087.php">Ralph H. Castain: "Re:  compile error"</a>
<li><strong>Previous message:</strong> <a href="0085.php">Gleb Natapov: "compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0096.php">Galen Shipman: "Re:  [PATCH] for ompi_free_list.c"</a>
<li><strong>Reply:</strong> <a href="0096.php">Galen Shipman: "Re:  [PATCH] for ompi_free_list.c"</a>
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
