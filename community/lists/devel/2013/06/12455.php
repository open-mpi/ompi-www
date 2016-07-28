<?
$subject_val = "Re: [OMPI devel] RFC: improve the hash function used byopal_hash_table_t";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 11 17:55:55 2013" -->
<!-- isoreceived="20130611215555" -->
<!-- sent="Wed, 12 Jun 2013 01:54:56 +0400" -->
<!-- isosent="20130611215456" -->
<!-- name="Alex A. Granovsky" -->
<!-- email="gran_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: improve the hash function used byopal_hash_table_t" -->
<!-- id="654D534514A9493786C00B8FC05891A2_at_chem.msu.ru" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20130611213244.GF83995_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: improve the hash function used byopal_hash_table_t<br>
<strong>From:</strong> Alex A. Granovsky (<em>gran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-11 17:54:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12456.php">George Bosilca: "Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<li><strong>Previous message:</strong> <a href="12454.php">Nathan Hjelm: "[OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<li><strong>In reply to:</strong> <a href="12454.php">Nathan Hjelm: "[OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12456.php">George Bosilca: "Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>one of the best hash functions I know is crc32. It is not very expensive, 
<br>
especially with modern CPUs where it is implemented as the CPU instruction.
<br>
<p>Hope this helps.
<br>
<p>Kind regards,
<br>
Alex Granovsky
<br>
<p><p>-----Original Message----- 
<br>
From: Nathan Hjelm
<br>
Sent: Wednesday, June 12, 2013 1:32 AM
<br>
To: Open MPI Developers
<br>
Subject: [OMPI devel] RFC: improve the hash function used 
<br>
byopal_hash_table_t
<br>
<p>What: Implement a better hash function in opal_hash_table_t. The function is 
<br>
a simple one-at-a-time Jenkin's hash (see 
<br>
<a href="http://en.wikipedia.org/wiki/Jenkins_hash_function">http://en.wikipedia.org/wiki/Jenkins_hash_function</a>) and has good collision 
<br>
rates and isn't overly complex or slow.
<br>
<p>Why: I am preparing an update to the MCA variable system (adding performance 
<br>
variables) which will include a hash-based lookup function (in preperation 
<br>
for the inevitable MPI_T_cvar/pvar/category lookup functions-- MPI 3.0 
<br>
errata). The current hash function is not very good so now seems like a good 
<br>
time to update it.
<br>
<p>When: Will push this to trunk on Thursday if there are no objections.
<br>
<p>Patch below
<br>
<p>Index: opal/class/opal_hash_table.c
<br>
===================================================================
<br>
--- opal/class/opal_hash_table.c (revision 28609)
<br>
+++ opal/class/opal_hash_table.c (working copy)
<br>
@@ -356,14 +356,20 @@
<br>
static inline uint32_t opal_hash_value(size_t mask, const void *key,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size_t keysize)
<br>
{
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
}
<br>
<p>int opal_hash_table_get_value_ptr(opal_hash_table_t* ht, const void* key,
<br>
<p><p><p><p>-Nathan
<br>
_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12456.php">George Bosilca: "Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<li><strong>Previous message:</strong> <a href="12454.php">Nathan Hjelm: "[OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<li><strong>In reply to:</strong> <a href="12454.php">Nathan Hjelm: "[OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12456.php">George Bosilca: "Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
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
