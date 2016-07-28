<?
$subject_val = "Re: [OMPI devel] autosizing the shared memory backing file";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 09:43:47 2009" -->
<!-- isoreceived="20090114144347" -->
<!-- sent="Wed, 14 Jan 2009 09:43:41 -0500" -->
<!-- isosent="20090114144341" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autosizing the shared memory backing file" -->
<!-- id="8726C541-28CD-46BA-8E56-ACE35EF96C5E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="496D81F4.7080404_at_sun.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-14 09:43:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5181.php">Jeff Squyres: "Re: [OMPI devel] RFC: Fragmented sm Allocations"</a>
<li><strong>Previous message:</strong> <a href="5179.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>In reply to:</strong> <a href="5171.php">Eugene Loh: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5182.php">Ralph Castain: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<li><strong>Reply:</strong> <a href="5182.php">Ralph Castain: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ya, that does seem weird to me, but I never fully grokked the whole  
<br>
mpool / allocator scheme (I haven't had to interact with that part of  
<br>
the code much).
<br>
<p>Would it be useful to get on the phone and discuss this stuff?
<br>
<p><p><p>On Jan 14, 2009, at 1:11 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the reply.  I kind of understand, but it's rather weird.   
</span><br>
<span class="quotelev1">&gt; The BTL calls mca_mpool_base_module_create() to create a pool of  
</span><br>
<span class="quotelev1">&gt; memory, but the BTL has no say how big of a pool to create?  Could  
</span><br>
<span class="quotelev1">&gt; you imagine having a memory allocation routine (&quot;malloc&quot; or  
</span><br>
<span class="quotelev1">&gt; something) that didn't allow you to control the size of the  
</span><br>
<span class="quotelev1">&gt; allocation?  Instead, the allocation routine determines the size.   
</span><br>
<span class="quotelev1">&gt; That's weird.  I must be missing something about how this is  
</span><br>
<span class="quotelev1">&gt; supposed to work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; E.g., I see that there is a &quot;resources&quot; argument  
</span><br>
<span class="quotelev1">&gt; (mca_mpool_base_resources_t).  Maybe that structure should be  
</span><br>
<span class="quotelev1">&gt; expanded to include a &quot;size&quot; field?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Or, maybe I should bypass mca_mpool_base_module_create()/ 
</span><br>
<span class="quotelev1">&gt; mca_mpool_sm_init() and just call
</span><br>
<span class="quotelev1">&gt; mca_common_sm_mmap_init() directly, the way mca/coll/sm does  
</span><br>
<span class="quotelev1">&gt; things.  That would allow me to specify the size of the file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The simple answer is you can't. The mpool is loaded before the  
</span><br>
<span class="quotelev2">&gt;&gt; BTLs  and on Linux the loader use the RTLD_NOW flag (i.e. all  
</span><br>
<span class="quotelev2">&gt;&gt; symbols have  to be defined or the dlopen call will fail).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Moreover, there is no way in Open MPI to exchange information  
</span><br>
<span class="quotelev2">&gt;&gt; between  components except a global variable or something in the  
</span><br>
<span class="quotelev2">&gt;&gt; mca/common. In  other words there is no way for you to call from  
</span><br>
<span class="quotelev2">&gt;&gt; the mpool a function  from the sm BTL.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 13, 2009, at 19:22 , Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With the sm BTL, there is a file that each process mmaps in for   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared memory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to get mpool_sm to size the file appropriately.  So, I   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would like mpool_sm to call some mca_btl_sm function that provides  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a  good guess of the size.  (mpool_sm creates and mmaps the file,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but  the size depends on parameters like eager limit and max frag  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; size  that are known by the btl_sm.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5181.php">Jeff Squyres: "Re: [OMPI devel] RFC: Fragmented sm Allocations"</a>
<li><strong>Previous message:</strong> <a href="5179.php">Greg Watson: "Re: [OMPI devel] -display-map"</a>
<li><strong>In reply to:</strong> <a href="5171.php">Eugene Loh: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5182.php">Ralph Castain: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<li><strong>Reply:</strong> <a href="5182.php">Ralph Castain: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
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
