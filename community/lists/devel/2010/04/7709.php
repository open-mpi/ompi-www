<?
$subject_val = "[OMPI devel] RFC: Change bml_base_btl_array to an array of pointers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  7 10:55:44 2010" -->
<!-- isoreceived="20100407145544" -->
<!-- sent="Wed, 07 Apr 2010 10:55:08 -0400" -->
<!-- isosent="20100407145508" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rolf.vandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Change bml_base_btl_array to an array of pointers" -->
<!-- id="4BBC9CCC.4000203_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Change bml_base_btl_array to an array of pointers<br>
<strong>From:</strong> Rolf vandeVaart (<em>rolf.vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-07 10:55:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7710.php">hu yaohui: "Re: [OMPI devel] compile openmpi error on debian"</a>
<li><strong>Previous message:</strong> <a href="7708.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT:  Change the bml_base_btl_array to be an array of
<br>
pointers to structs instead of array of structs themselves.
<br>
<p>WHY:   Some PMLs (like the failover one I am working on) may map
<br>
out a BTL when an error is seen.  Currently, the act of mapping out a
<br>
BTL for communication means removing an entry from the
<br>
bml_base_btl_array and shuffling the remaining entries.  The
<br>
problem is that pointers to entries in the bml_base_btl_array
<br>
are cached in the descriptor.  After mapping out a BTL, these
<br>
pointers may no longer be valid since the entries they are
<br>
pointing to may have been moved.  In order for me to have
<br>
my changes isolated to a PML,  I need this change in the BML.
<br>
<p>WHERE:
<br>
ompi/mca/bml/bml.h, ompi/mca/bml/r2/bml_r2.c, 
<br>
ompi/mca/bml/base/bml_base_btl.c
<br>
<p>TIMEOUT: Friday, April 16, 2010
<br>
<p>-----------------
<br>
More details:
<br>
<p>I have created a modified OB1 PML that can handle the failure of an IB
<br>
rail when running in dual-rail mode.  When an error occurs on a rail,
<br>
I map out the BTL so it will no longer be used for communication.
<br>
As stated earlier, the mapping out means the removal of an entry in
<br>
the bml_base_btl_array and shuffling the other entries so it remains as
<br>
a contiguous array.
<br>
<p>The problem is that I will still be polling the broken BTL and
<br>
receiving completion events.  Many of these completion events have a
<br>
pointer to an entry in the bml_base_btl_array cached in the
<br>
descriptor.  To prevent these pointers from becoming invalid, we want
<br>
to ensure that the structures do not move even though entries in the
<br>
array get moved.
<br>
<p>Since the changes are not that big, I have included them here.
<br>
<p>There may be some concern about performance, but I have trouble
<br>
seeing how these changes will have any effect.
<br>
<p><p>&nbsp;sr1-ubur-19 274 =&gt;svn diff
<br>
Index: ompi/mca/bml/bml.h
<br>
===================================================================
<br>
--- ompi/mca/bml/bml.h  (revision 22925)
<br>
+++ ompi/mca/bml/bml.h  (working copy)
<br>
@@ -74,7 +74,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t arr_size;                     /**&lt; number available */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t arr_reserve;                  /**&lt; size of allocated 
<br>
btl_proc array */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t arr_index;                    /**&lt; last used index*/
<br>
-    mca_bml_base_btl_t* bml_btls;   /**&lt; array of  bml btl's */
<br>
+    mca_bml_base_btl_t** bml_btls;       /**&lt; array of bml btl pointers */
<br>
&nbsp;};
<br>
&nbsp;typedef struct mca_bml_base_btl_array_t mca_bml_base_btl_array_t;
<br>
<p>@@ -119,7 +119,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;#endif
<br>
-    return &amp;array-&gt;bml_btls[array-&gt;arr_size++];
<br>
+    return array-&gt;bml_btls[array-&gt;arr_size++];
<br>
&nbsp;}
<br>
<p>&nbsp;/**
<br>
@@ -134,7 +134,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t i = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* find the btl */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for( i = 0; i &lt; array-&gt;arr_size; i++ ) {
<br>
-        if( array-&gt;bml_btls[i].btl == btl ) {
<br>
+        if( array-&gt;bml_btls[i]-&gt;btl == btl ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* make sure not to go out of bounds */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for( ; i &lt; array-&gt;arr_size-1; i++ ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* move all btl's back by 1, so the found
<br>
@@ -165,7 +165,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;#endif
<br>
-    return &amp;array-&gt;bml_btls[item_index];
<br>
+    return array-&gt;bml_btls[item_index];
<br>
&nbsp;}
<br>
<p>&nbsp;/**
<br>
@@ -184,7 +184,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( 1 == array-&gt;arr_size ) {
<br>
-        return &amp;array-&gt;bml_btls[0];  /* force the return to avoid a jump */
<br>
+        return array-&gt;bml_btls[0];  /* force the return to avoid a jump */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t current_position = array-&gt;arr_index;  /* force to always 
<br>
start from zero */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( (current_position + 1) == array-&gt;arr_size ) {
<br>
@@ -192,7 +192,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array-&gt;arr_index = current_position + 1;  /* continue */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-        return &amp;array-&gt;bml_btls[current_position];
<br>
+        return array-&gt;bml_btls[current_position];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;}
<br>
<p>@@ -207,8 +207,8 @@
<br>
&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t i=0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(i=0; i&lt;array-&gt;arr_size; i++) {
<br>
-        if(array-&gt;bml_btls[i].btl == btl) {
<br>
-            return &amp;array-&gt;bml_btls[i];
<br>
+        if(array-&gt;bml_btls[i]-&gt;btl == btl) {
<br>
+            return array-&gt;bml_btls[i];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
Index: ompi/mca/bml/r2/bml_r2.c
<br>
===================================================================
<br>
--- ompi/mca/bml/r2/bml_r2.c    (revision 22925)
<br>
+++ ompi/mca/bml/r2/bml_r2.c    (working copy)
<br>
@@ -127,10 +127,10 @@
<br>
<p>&nbsp;static int btl_bandwidth_compare(const void *v1, const void *v2)
<br>
&nbsp;{
<br>
-    mca_bml_base_btl_t *b1 = (mca_bml_base_btl_t*)v1,
<br>
-                       *b2 = (mca_bml_base_btl_t*)v2;
<br>
+    mca_bml_base_btl_t **b1 = (mca_bml_base_btl_t**)v1,
<br>
+                       **b2 = (mca_bml_base_btl_t**)v2;
<br>
<p>-    return b2-&gt;btl-&gt;btl_bandwidth - b1-&gt;btl-&gt;btl_bandwidth;
<br>
+    return (*b2)-&gt;btl-&gt;btl_bandwidth - (*b1)-&gt;btl-&gt;btl_bandwidth;
<br>
&nbsp;}
<br>
<p>&nbsp;/*
<br>
@@ -331,7 +331,7 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* sort BTLs in descending order according to bandwidth value */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;qsort(bml_endpoint-&gt;btl_send.bml_btls, n_size,
<br>
-                sizeof(mca_bml_base_btl_t), btl_bandwidth_compare);
<br>
+                sizeof(mca_bml_base_btl_t*), btl_bandwidth_compare);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bml_endpoint-&gt;btl_rdma_index = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(n_index = 0; n_index &lt; n_size; n_index++) {
<br>
Index: ompi/mca/bml/base/bml_base_btl.c
<br>
===================================================================
<br>
--- ompi/mca/bml/base/bml_base_btl.c    (revision 22925)
<br>
+++ ompi/mca/bml/base/bml_base_btl.c    (working copy)
<br>
@@ -35,7 +35,11 @@
<br>
<p>&nbsp;static void mca_bml_base_btl_array_destruct(mca_bml_base_btl_array_t* 
<br>
array)
<br>
&nbsp;{
<br>
+    int i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(NULL != array-&gt;bml_btls) {
<br>
+        for (i=0; i &lt; array-&gt;arr_size; i++) {
<br>
+            free(array-&gt;bml_btls[i]);
<br>
+        }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(array-&gt;bml_btls);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array-&gt;bml_btls = NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
@@ -53,15 +57,23 @@
<br>
<p>&nbsp;int mca_bml_base_btl_array_reserve(mca_bml_base_btl_array_t* array, 
<br>
size_t size)
<br>
&nbsp;{
<br>
-    size_t old_len = sizeof(mca_bml_base_btl_t)*array-&gt;arr_reserve;
<br>
-    size_t new_len = sizeof(mca_bml_base_btl_t)*size;
<br>
+    int i;
<br>
+    size_t old_len = sizeof(mca_bml_base_btl_t *)*array-&gt;arr_reserve;
<br>
+    size_t new_len = sizeof(mca_bml_base_btl_t *)*size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(old_len &gt;= new_len)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
<p>-    array-&gt;bml_btls = (mca_bml_base_btl_t*)realloc(array-&gt;bml_btls, 
<br>
new_len);
<br>
+    array-&gt;bml_btls = (mca_bml_base_btl_t**)realloc(array-&gt;bml_btls, 
<br>
new_len);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(NULL == array-&gt;bml_btls)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_ERR_OUT_OF_RESOURCE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memset((unsigned char*)array-&gt;bml_btls + old_len, 0, new_len-old_len);
<br>
+    /* Allocate the bml structs and the initalize the pointers to them */
<br>
+    for (i = array-&gt;arr_reserve; i &lt; size; i++) {
<br>
+        array-&gt;bml_btls[i] = calloc(1, sizeof(mca_bml_base_btl_t));
<br>
+        if(NULL == array-&gt;bml_btls[i]) {
<br>
+            return OMPI_ERR_OUT_OF_RESOURCE;
<br>
+        }
<br>
+    }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array-&gt;arr_reserve = size;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return OMPI_SUCCESS;
<br>
&nbsp;}
<br>
&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7710.php">hu yaohui: "Re: [OMPI devel] compile openmpi error on debian"</a>
<li><strong>Previous message:</strong> <a href="7708.php">Oliver Geisler: "Re: [OMPI devel] kernel 2.6.23 vs 2.6.24 - communication/wait times"</a>
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
