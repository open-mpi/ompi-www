<?
$subject_val = "[OMPI devel] RFC: improve the hash function used by opal_hash_table_t";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 11 17:32:49 2013" -->
<!-- isoreceived="20130611213249" -->
<!-- sent="Tue, 11 Jun 2013 15:32:44 -0600" -->
<!-- isosent="20130611213244" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: improve the hash function used by opal_hash_table_t" -->
<!-- id="20130611213244.GF83995_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: improve the hash function used by opal_hash_table_t<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-11 17:32:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12455.php">Alex A. Granovsky: "Re: [OMPI devel] RFC: improve the hash function used byopal_hash_table_t"</a>
<li><strong>Previous message:</strong> <a href="12453.php">Ralph Castain: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12455.php">Alex A. Granovsky: "Re: [OMPI devel] RFC: improve the hash function used byopal_hash_table_t"</a>
<li><strong>Reply:</strong> <a href="12455.php">Alex A. Granovsky: "Re: [OMPI devel] RFC: improve the hash function used byopal_hash_table_t"</a>
<li><strong>Reply:</strong> <a href="12456.php">George Bosilca: "Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What: Implement a better hash function in opal_hash_table_t. The function is a simple one-at-a-time Jenkin's hash (see <a href="http://en.wikipedia.org/wiki/Jenkins_hash_function">http://en.wikipedia.org/wiki/Jenkins_hash_function</a>) and has good collision rates and isn't overly complex or slow.
<br>
<p>Why: I am preparing an update to the MCA variable system (adding performance variables) which will include a hash-based lookup function (in preperation for the inevitable MPI_T_cvar/pvar/category lookup functions-- MPI 3.0 errata). The current hash function is not very good so now seems like a good time to update it.
<br>
<p>When: Will push this to trunk on Thursday if there are no objections.
<br>
<p>Patch below
<br>
<p>Index: opal/class/opal_hash_table.c
<br>
===================================================================
<br>
--- opal/class/opal_hash_table.c	(revision 28609)
<br>
+++ opal/class/opal_hash_table.c	(working copy)
<br>
@@ -356,14 +356,20 @@
<br>
&nbsp;static inline uint32_t opal_hash_value(size_t mask, const void *key,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t keysize)
<br>
&nbsp;{
<br>
-    size_t h, i;
<br>
-    const unsigned char *p;
<br>
-    
<br>
-    h = 0;
<br>
-    p = (const unsigned char *)key;
<br>
-    for (i = 0; i &lt; keysize; i++, p++)
<br>
-        h = HASH_MULTIPLIER*h + *p;
<br>
-    return (uint32_t)(h &amp; mask);
<br>
+    const unsigned char *p = (const unsigned char *) key;
<br>
+    uint32_t h = 0, i;
<br>
+
<br>
+    for (i = 0 ; i &lt; keysize ; ++i, ++p) {
<br>
+        h += *p;
<br>
+        h += h &lt;&lt; 10;
<br>
+        h ^= h &gt;&gt; 6;
<br>
+    }
<br>
+
<br>
+    h += h &lt;&lt; 3;
<br>
+    h ^= h &gt;&gt; 11;
<br>
+    h += h &lt;&lt; 15;
<br>
+
<br>
+    return h &amp; (uint32_t) mask;
<br>
&nbsp;}
<br>
&nbsp;
<br>
&nbsp;int opal_hash_table_get_value_ptr(opal_hash_table_t* ht, const void* key,
<br>
<p><p><p><p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12455.php">Alex A. Granovsky: "Re: [OMPI devel] RFC: improve the hash function used byopal_hash_table_t"</a>
<li><strong>Previous message:</strong> <a href="12453.php">Ralph Castain: "Re: [OMPI devel] RFC: Add static initializer for opal_mutex_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12455.php">Alex A. Granovsky: "Re: [OMPI devel] RFC: improve the hash function used byopal_hash_table_t"</a>
<li><strong>Reply:</strong> <a href="12455.php">Alex A. Granovsky: "Re: [OMPI devel] RFC: improve the hash function used byopal_hash_table_t"</a>
<li><strong>Reply:</strong> <a href="12456.php">George Bosilca: "Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
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
