<?
$subject_val = "Re: [OMPI devel] autosizing the shared memory backing file";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 13:13:12 2009" -->
<!-- isoreceived="20090114181312" -->
<!-- sent="Wed, 14 Jan 2009 10:17:19 -0800" -->
<!-- isosent="20090114181719" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autosizing the shared memory backing file" -->
<!-- id="496E2C2F.3060908_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20E26ED3-2F49-4774-9B79-52B0616C5B89_at_lanl.gov" -->
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
<strong>Date:</strong> 2009-01-14 13:17:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5193.php">Josh Hursey: "Re: [OMPI devel] crcpw verbosity"</a>
<li><strong>Previous message:</strong> <a href="5191.php">George Bosilca: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>In reply to:</strong> <a href="5182.php">Ralph Castain: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think you'd like to know more than just how many procs are local.  
<br>
E.g., if the chunk or eager limits are changed much, that would impact 
<br>
how much memory you'd like to allocate.
<br>
<p>A phone chat is all right for me, though so far all I've heard is that 
<br>
no one understands the code!
<br>
<p>But, maybe we can nip this one in the bud.  How about the following 
<br>
proposal.
<br>
<p>First, what's happening is:
<br>
*) the sm BTL (which knows how big the file should be)
<br>
calls
<br>
*) mca_mpool_base_module_create()
<br>
calls
<br>
*) mca_mpool_sm_init() (which creates the file)
<br>
<p>There is no explicit calling argument to transmit an mpool size through 
<br>
these function calls, but there is a &quot;resources&quot; argument.  This 
<br>
resources argument appears to be opaque to the intervening function, but 
<br>
it seems to be understood by both the sm BTL caller and the sm mpool 
<br>
component callee.  Other components appear to have other definitions of 
<br>
the resources data structure.
<br>
<p>So, I propose:
<br>
<p>*)  In mca/mpool/sm/mpool_sm.h, there is a definition of 
<br>
mca_mpool_base_resources_t.  It has a single field (int32_t mem_node).  
<br>
How about I add another field here:  size_t size.
<br>
<p>*)  In the sm BTL in sm_btl_first_time_init(), I can set the size of the 
<br>
mmap file in my &quot;resources&quot; data structure.
<br>
<p>*)  In mca_mpool_sm_init(), when I determine the mmap file size, I just 
<br>
look up the resources-&gt;size value and use that.
<br>
<p>Yes?  Clean and proper solution?  Does not break other BTLs?
<br>
<p>Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I also know little about that part of the code, but agree that does  
</span><br>
<span class="quotelev1">&gt; seem weird. Seeing as we know how many local procs there are before 
</span><br>
<span class="quotelev1">&gt; we  get to this point, I would think we could be smart about our 
</span><br>
<span class="quotelev1">&gt; memory  pool size. You might not need to dive into the sm BTL to get 
</span><br>
<span class="quotelev1">&gt; the info  you need - if all you need is how many procs are local, that 
</span><br>
<span class="quotelev1">&gt; can be  obtained fairly easily.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Be happy to contribute to the chat, if it would be helpful.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 14, 2009, at 7:43 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would it be useful to get on the phone and discuss this stuff?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 14, 2009, at 1:11 AM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the reply.  I kind of understand, but it's rather  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; weird.  The BTL calls mca_mpool_base_module_create() to create a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pool of memory, but the BTL has no say how big of a pool to  create?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; E.g., I see that there is a &quot;resources&quot; argument  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (mca_mpool_base_resources_t).  Maybe that structure should be  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; expanded to include a &quot;size&quot; field?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 13, 2009, at 19:22 , Eugene Loh wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; With the sm BTL, there is a file that each process mmaps in for 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; shared memory.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm trying to get mpool_sm to size the file appropriately.  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpool_sm creates and mmaps  the file, but  the size depends on 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; parameters like eager limit  and max frag size  that are known by 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the btl_sm.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5193.php">Josh Hursey: "Re: [OMPI devel] crcpw verbosity"</a>
<li><strong>Previous message:</strong> <a href="5191.php">George Bosilca: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>In reply to:</strong> <a href="5182.php">Ralph Castain: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
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
