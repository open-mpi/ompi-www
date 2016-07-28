<?
$subject_val = "Re: [OMPI devel] autosizing the shared memory backing file";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 09:51:27 2009" -->
<!-- isoreceived="20090114145127" -->
<!-- sent="Wed, 14 Jan 2009 07:51:17 -0700" -->
<!-- isosent="20090114145117" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autosizing the shared memory backing file" -->
<!-- id="20E26ED3-2F49-4774-9B79-52B0616C5B89_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8726C541-28CD-46BA-8E56-ACE35EF96C5E_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-14 09:51:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5183.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="5181.php">Jeff Squyres: "Re: [OMPI devel] RFC: Fragmented sm Allocations"</a>
<li><strong>In reply to:</strong> <a href="5180.php">Jeff Squyres: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5192.php">Eugene Loh: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<li><strong>Reply:</strong> <a href="5192.php">Eugene Loh: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I also know little about that part of the code, but agree that does  
<br>
seem weird. Seeing as we know how many local procs there are before we  
<br>
get to this point, I would think we could be smart about our memory  
<br>
pool size. You might not need to dive into the sm BTL to get the info  
<br>
you need - if all you need is how many procs are local, that can be  
<br>
obtained fairly easily.
<br>
<p>Be happy to contribute to the chat, if it would be helpful.
<br>
<p><p>On Jan 14, 2009, at 7:43 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Ya, that does seem weird to me, but I never fully grokked the whole  
</span><br>
<span class="quotelev1">&gt; mpool / allocator scheme (I haven't had to interact with that part  
</span><br>
<span class="quotelev1">&gt; of the code much).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would it be useful to get on the phone and discuss this stuff?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 14, 2009, at 1:11 AM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the reply.  I kind of understand, but it's rather  
</span><br>
<span class="quotelev2">&gt;&gt; weird.  The BTL calls mca_mpool_base_module_create() to create a  
</span><br>
<span class="quotelev2">&gt;&gt; pool of memory, but the BTL has no say how big of a pool to  
</span><br>
<span class="quotelev2">&gt;&gt; create?  Could you imagine having a memory allocation routine  
</span><br>
<span class="quotelev2">&gt;&gt; (&quot;malloc&quot; or something) that didn't allow you to control the size  
</span><br>
<span class="quotelev2">&gt;&gt; of the allocation?  Instead, the allocation routine determines the  
</span><br>
<span class="quotelev2">&gt;&gt; size.  That's weird.  I must be missing something about how this is  
</span><br>
<span class="quotelev2">&gt;&gt; supposed to work.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; E.g., I see that there is a &quot;resources&quot; argument  
</span><br>
<span class="quotelev2">&gt;&gt; (mca_mpool_base_resources_t).  Maybe that structure should be  
</span><br>
<span class="quotelev2">&gt;&gt; expanded to include a &quot;size&quot; field?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Or, maybe I should bypass mca_mpool_base_module_create()/ 
</span><br>
<span class="quotelev2">&gt;&gt; mca_mpool_sm_init() and just call
</span><br>
<span class="quotelev2">&gt;&gt; mca_common_sm_mmap_init() directly, the way mca/coll/sm does  
</span><br>
<span class="quotelev2">&gt;&gt; things.  That would allow me to specify the size of the file.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The simple answer is you can't. The mpool is loaded before the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BTLs  and on Linux the loader use the RTLD_NOW flag (i.e. all  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; symbols have  to be defined or the dlopen call will fail).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Moreover, there is no way in Open MPI to exchange information  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; between  components except a global variable or something in the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca/common. In  other words there is no way for you to call from  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the mpool a function  from the sm BTL.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 13, 2009, at 19:22 , Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With the sm BTL, there is a file that each process mmaps in for   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shared memory.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm trying to get mpool_sm to size the file appropriately.  So,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I  would like mpool_sm to call some mca_btl_sm function that  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; provides a  good guess of the size.  (mpool_sm creates and mmaps  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the file, but  the size depends on parameters like eager limit  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and max frag size  that are known by the btl_sm.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="5183.php">Ralph Castain: "Re: [OMPI devel] -display-map"</a>
<li><strong>Previous message:</strong> <a href="5181.php">Jeff Squyres: "Re: [OMPI devel] RFC: Fragmented sm Allocations"</a>
<li><strong>In reply to:</strong> <a href="5180.php">Jeff Squyres: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5192.php">Eugene Loh: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<li><strong>Reply:</strong> <a href="5192.php">Eugene Loh: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
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
