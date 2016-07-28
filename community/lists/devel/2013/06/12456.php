<?
$subject_val = "Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 11 18:10:49 2013" -->
<!-- isoreceived="20130611221049" -->
<!-- sent="Wed, 12 Jun 2013 00:10:42 +0200" -->
<!-- isosent="20130611221042" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t" -->
<!-- id="940C1E29-CFCA-49AF-B6C6-42548EDAE308_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-11 18:10:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12457.php">Nathan Hjelm: "Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<li><strong>Previous message:</strong> <a href="12455.php">Alex A. Granovsky: "Re: [OMPI devel] RFC: improve the hash function used byopal_hash_table_t"</a>
<li><strong>In reply to:</strong> <a href="12454.php">Nathan Hjelm: "[OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12457.php">Nathan Hjelm: "Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<li><strong>Reply:</strong> <a href="12457.php">Nathan Hjelm: "Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The one-at-the-time version computes on chars, if the performance of the hash function is a critical element in the equation then you will be better off avoiding its usage. I would suggest going with Murmur (<a href="http://en.wikipedia.org/wiki/MurmurHash">http://en.wikipedia.org/wiki/MurmurHash</a>) instead, which is faster and perform well in random distribution. Another interesting features is that there are specialized derivative for strings based key, a feature that might prove helpful with the MCA parameters and the MPI_T stuff.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Jun 11, 2013, at 23:32 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What: Implement a better hash function in opal_hash_table_t. The function is a simple one-at-a-time Jenkin's hash (see <a href="http://en.wikipedia.org/wiki/Jenkins_hash_function">http://en.wikipedia.org/wiki/Jenkins_hash_function</a>) and has good collision rates and isn't overly complex or slow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why: I am preparing an update to the MCA variable system (adding performance variables) which will include a hash-based lookup function (in preperation for the inevitable MPI_T_cvar/pvar/category lookup functions-- MPI 3.0 errata). The current hash function is not very good so now seems like a good time to update it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When: Will push this to trunk on Thursday if there are no objections.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Patch below
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index: opal/class/opal_hash_table.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- opal/class/opal_hash_table.c	(revision 28609)
</span><br>
<span class="quotelev1">&gt; +++ opal/class/opal_hash_table.c	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -356,14 +356,20 @@
</span><br>
<span class="quotelev1">&gt; static inline uint32_t opal_hash_value(size_t mask, const void *key,
</span><br>
<span class="quotelev1">&gt;                                        size_t keysize)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; -    size_t h, i;
</span><br>
<span class="quotelev1">&gt; -    const unsigned char *p;
</span><br>
<span class="quotelev1">&gt; -    
</span><br>
<span class="quotelev1">&gt; -    h = 0;
</span><br>
<span class="quotelev1">&gt; -    p = (const unsigned char *)key;
</span><br>
<span class="quotelev1">&gt; -    for (i = 0; i &lt; keysize; i++, p++)
</span><br>
<span class="quotelev1">&gt; -        h = HASH_MULTIPLIER*h + *p;
</span><br>
<span class="quotelev1">&gt; -    return (uint32_t)(h &amp; mask);
</span><br>
<span class="quotelev1">&gt; +    const unsigned char *p = (const unsigned char *) key;
</span><br>
<span class="quotelev1">&gt; +    uint32_t h = 0, i;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    for (i = 0 ; i &lt; keysize ; ++i, ++p) {
</span><br>
<span class="quotelev1">&gt; +        h += *p;
</span><br>
<span class="quotelev1">&gt; +        h += h &lt;&lt; 10;
</span><br>
<span class="quotelev1">&gt; +        h ^= h &gt;&gt; 6;
</span><br>
<span class="quotelev1">&gt; +    }
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    h += h &lt;&lt; 3;
</span><br>
<span class="quotelev1">&gt; +    h ^= h &gt;&gt; 11;
</span><br>
<span class="quotelev1">&gt; +    h += h &lt;&lt; 15;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    return h &amp; (uint32_t) mask;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int opal_hash_table_get_value_ptr(opal_hash_table_t* ht, const void* key,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12457.php">Nathan Hjelm: "Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<li><strong>Previous message:</strong> <a href="12455.php">Alex A. Granovsky: "Re: [OMPI devel] RFC: improve the hash function used byopal_hash_table_t"</a>
<li><strong>In reply to:</strong> <a href="12454.php">Nathan Hjelm: "[OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12457.php">Nathan Hjelm: "Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<li><strong>Reply:</strong> <a href="12457.php">Nathan Hjelm: "Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
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
