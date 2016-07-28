<?
$subject_val = "Re: [OMPI devel] autosizing the shared memory backing file";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 01:06:50 2009" -->
<!-- isoreceived="20090114060650" -->
<!-- sent="Tue, 13 Jan 2009 22:11:00 -0800" -->
<!-- isosent="20090114061100" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autosizing the shared memory backing file" -->
<!-- id="496D81F4.7080404_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="03BE9590-552E-4E3C-8E9B-86B4321DD531_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] autosizing the shared memory backing file<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-14 01:11:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5172.php">Eugene Loh: "[OMPI devel] RFC: Fragmented sm Allocations"</a>
<li><strong>Previous message:</strong> <a href="5170.php">George Bosilca: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>In reply to:</strong> <a href="5159.php">George Bosilca: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5180.php">Jeff Squyres: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<li><strong>Reply:</strong> <a href="5180.php">Jeff Squyres: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the reply.  I kind of understand, but it's rather weird.  The 
<br>
BTL calls mca_mpool_base_module_create() to create a pool of memory, but 
<br>
the BTL has no say how big of a pool to create?  Could you imagine 
<br>
having a memory allocation routine (&quot;malloc&quot; or something) that didn't 
<br>
allow you to control the size of the allocation?  Instead, the 
<br>
allocation routine determines the size.  That's weird.  I must be 
<br>
missing something about how this is supposed to work.
<br>
<p>E.g., I see that there is a &quot;resources&quot; argument 
<br>
(mca_mpool_base_resources_t).  Maybe that structure should be expanded 
<br>
to include a &quot;size&quot; field?
<br>
<p>Or, maybe I should bypass 
<br>
mca_mpool_base_module_create()/mca_mpool_sm_init() and just call
<br>
mca_common_sm_mmap_init() directly, the way mca/coll/sm does things.  
<br>
That would allow me to specify the size of the file.
<br>
<p>George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; The simple answer is you can't. The mpool is loaded before the BTLs  
</span><br>
<span class="quotelev1">&gt; and on Linux the loader use the RTLD_NOW flag (i.e. all symbols have  
</span><br>
<span class="quotelev1">&gt; to be defined or the dlopen call will fail).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Moreover, there is no way in Open MPI to exchange information between  
</span><br>
<span class="quotelev1">&gt; components except a global variable or something in the mca/common. 
</span><br>
<span class="quotelev1">&gt; In  other words there is no way for you to call from the mpool a 
</span><br>
<span class="quotelev1">&gt; function  from the sm BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 13, 2009, at 19:22 , Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With the sm BTL, there is a file that each process mmaps in for  
</span><br>
<span class="quotelev2">&gt;&gt; shared memory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to get mpool_sm to size the file appropriately.  So, I  
</span><br>
<span class="quotelev2">&gt;&gt; would like mpool_sm to call some mca_btl_sm function that provides a  
</span><br>
<span class="quotelev2">&gt;&gt; good guess of the size.  (mpool_sm creates and mmaps the file, but  
</span><br>
<span class="quotelev2">&gt;&gt; the size depends on parameters like eager limit and max frag size  
</span><br>
<span class="quotelev2">&gt;&gt; that are known by the btl_sm.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5172.php">Eugene Loh: "[OMPI devel] RFC: Fragmented sm Allocations"</a>
<li><strong>Previous message:</strong> <a href="5170.php">George Bosilca: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>In reply to:</strong> <a href="5159.php">George Bosilca: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5180.php">Jeff Squyres: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<li><strong>Reply:</strong> <a href="5180.php">Jeff Squyres: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
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
