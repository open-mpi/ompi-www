<?
$subject_val = "Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 11 18:22:25 2013" -->
<!-- isoreceived="20130611222225" -->
<!-- sent="Tue, 11 Jun 2013 16:22:17 -0600" -->
<!-- isosent="20130611222217" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t" -->
<!-- id="20130611222217.GG83995_at_pantheralanlgov.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="940C1E29-CFCA-49AF-B6C6-42548EDAE308_at_icl.utk.edu" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-11 18:22:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12458.php">George Bosilca: "Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<li><strong>Previous message:</strong> <a href="12456.php">George Bosilca: "Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<li><strong>In reply to:</strong> <a href="12456.php">George Bosilca: "Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12458.php">George Bosilca: "Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<li><strong>Reply:</strong> <a href="12458.php">George Bosilca: "Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think as long as we are updating this we might as well add a performant hash function. I see Murmur2 is 32-bit and has a public domain implementation: <a href="https://code.google.com/p/smhasher/source/browse/trunk/MurmurHash2.cpp">https://code.google.com/p/smhasher/source/browse/trunk/MurmurHash2.cpp</a>
<br>
<p>Since Murmur2 hashes in 4-byte blocks I expect it probably would perform better than either a nieve crc32 or Jenkins. Though a hardware accelerated crc32 (if available) would probably work great as well. Both are good suggestions that I will look into. I will also look into the string variant of Murmur though that would require another set of opal_hash_table functions for string keys (I was using the _ptr variety).
<br>
<p>-Nathan
<br>
<p>On Wed, Jun 12, 2013 at 12:10:42AM +0200, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; The one-at-the-time version computes on chars, if the performance of the hash function is a critical element in the equation then you will be better off avoiding its usage. I would suggest going with Murmur (<a href="http://en.wikipedia.org/wiki/MurmurHash">http://en.wikipedia.org/wiki/MurmurHash</a>) instead, which is faster and perform well in random distribution. Another interesting features is that there are specialized derivative for strings based key, a feature that might prove helpful with the MCA parameters and the MPI_T stuff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 11, 2013, at 23:32 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; What: Implement a better hash function in opal_hash_table_t. The function is a simple one-at-a-time Jenkin's hash (see <a href="http://en.wikipedia.org/wiki/Jenkins_hash_function">http://en.wikipedia.org/wiki/Jenkins_hash_function</a>) and has good collision rates and isn't overly complex or slow.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Why: I am preparing an update to the MCA variable system (adding performance variables) which will include a hash-based lookup function (in preperation for the inevitable MPI_T_cvar/pvar/category lookup functions-- MPI 3.0 errata). The current hash function is not very good so now seems like a good time to update it.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; When: Will push this to trunk on Thursday if there are no objections.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Patch below
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Index: opal/class/opal_hash_table.c
</span><br>
<span class="quotelev2">&gt; &gt; ===================================================================
</span><br>
<span class="quotelev2">&gt; &gt; --- opal/class/opal_hash_table.c	(revision 28609)
</span><br>
<span class="quotelev2">&gt; &gt; +++ opal/class/opal_hash_table.c	(working copy)
</span><br>
<span class="quotelev2">&gt; &gt; @@ -356,14 +356,20 @@
</span><br>
<span class="quotelev2">&gt; &gt; static inline uint32_t opal_hash_value(size_t mask, const void *key,
</span><br>
<span class="quotelev2">&gt; &gt;                                        size_t keysize)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; -    size_t h, i;
</span><br>
<span class="quotelev2">&gt; &gt; -    const unsigned char *p;
</span><br>
<span class="quotelev2">&gt; &gt; -    
</span><br>
<span class="quotelev2">&gt; &gt; -    h = 0;
</span><br>
<span class="quotelev2">&gt; &gt; -    p = (const unsigned char *)key;
</span><br>
<span class="quotelev2">&gt; &gt; -    for (i = 0; i &lt; keysize; i++, p++)
</span><br>
<span class="quotelev2">&gt; &gt; -        h = HASH_MULTIPLIER*h + *p;
</span><br>
<span class="quotelev2">&gt; &gt; -    return (uint32_t)(h &amp; mask);
</span><br>
<span class="quotelev2">&gt; &gt; +    const unsigned char *p = (const unsigned char *) key;
</span><br>
<span class="quotelev2">&gt; &gt; +    uint32_t h = 0, i;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    for (i = 0 ; i &lt; keysize ; ++i, ++p) {
</span><br>
<span class="quotelev2">&gt; &gt; +        h += *p;
</span><br>
<span class="quotelev2">&gt; &gt; +        h += h &lt;&lt; 10;
</span><br>
<span class="quotelev2">&gt; &gt; +        h ^= h &gt;&gt; 6;
</span><br>
<span class="quotelev2">&gt; &gt; +    }
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    h += h &lt;&lt; 3;
</span><br>
<span class="quotelev2">&gt; &gt; +    h ^= h &gt;&gt; 11;
</span><br>
<span class="quotelev2">&gt; &gt; +    h += h &lt;&lt; 15;
</span><br>
<span class="quotelev2">&gt; &gt; +
</span><br>
<span class="quotelev2">&gt; &gt; +    return h &amp; (uint32_t) mask;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; int opal_hash_table_get_value_ptr(opal_hash_table_t* ht, const void* key,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12458.php">George Bosilca: "Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<li><strong>Previous message:</strong> <a href="12456.php">George Bosilca: "Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<li><strong>In reply to:</strong> <a href="12456.php">George Bosilca: "Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12458.php">George Bosilca: "Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
<li><strong>Reply:</strong> <a href="12458.php">George Bosilca: "Re: [OMPI devel] RFC: improve the hash function used by opal_hash_table_t"</a>
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
