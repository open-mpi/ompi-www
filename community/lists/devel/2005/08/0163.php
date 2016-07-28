<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 16 15:08:07 2005" -->
<!-- isoreceived="20050816200807" -->
<!-- sent="Tue, 16 Aug 2005 23:07:34 +0300" -->
<!-- isosent="20050816200734" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re:  Memory registration question." -->
<!-- id="20050816200734.GA22104_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="430218B8.3040303_at_lanl.gov" -->
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
<strong>Date:</strong> 2005-08-16 15:07:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0164.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0162.php">Jeff Squyres: "Re:  svn server is sick"</a>
<li><strong>In reply to:</strong> <a href="0159.php">Tim S. Woodall: "Re:  Memory registration question."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Aug 16, 2005 at 10:47:52AM -0600, Tim S. Woodall wrote:
<br>
<span class="quotelev1">&gt; We're working on an approach to this now, that I think will address what
</span><br>
<span class="quotelev1">&gt; you are looking for. Will let you know when we have something a little more
</span><br>
<span class="quotelev1">&gt; concrete.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
I have the initial code that does what I've described. Do you want me to send it
<br>
to you?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt; &gt;Hello Tim,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;On Thu, Aug 11, 2005 at 10:08:04AM -0600, Tim S. Woodall wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Hello Gleb,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;A couple of general comments:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;We initially started by maintaining the cache at the btl/mpool level. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;However,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;we needed to expose the registrations to the upper level (pml), to
</span><br>
<span class="quotelev3">&gt; &gt;&gt;allow the pml to make scheduling decisions (which btl/protocol to use),
</span><br>
<span class="quotelev3">&gt; &gt;&gt;so we re-organized this to maintain a global cache/tree, where a given
</span><br>
<span class="quotelev3">&gt; &gt;&gt;registration in the tree may reference multiple btls. This allows the pml
</span><br>
<span class="quotelev3">&gt; &gt;&gt;to do a single lookup, and optionally schedule the message on the set of
</span><br>
<span class="quotelev3">&gt; &gt;&gt;btls that have registered the memory.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I understand the need to expose the registration cache to pml and I
</span><br>
<span class="quotelev2">&gt; &gt;think the optimisations you are using this for is very neat idea, but as 
</span><br>
<span class="quotelev2">&gt; &gt;far
</span><br>
<span class="quotelev2">&gt; &gt;as I see the current code returns multiple btls for the registration only 
</span><br>
<span class="quotelev2">&gt; &gt;if memory was registered using mca_mpool_base_alloc() (the rare case IMHO).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;The saddest thing is you can't override the interface in your module. It 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;is too
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;coupled with pml (ob1) and btls. If you don't like the way registration 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;cache
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;works the only way to fix it is rewrite pml/btl/mpool.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;True. We could implement a new framework for the cache, to allow this to 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;be replaced.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;However, my preference is still to maintain a single cache/tree, to 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;minimize latency/overhead
</span><br>
<span class="quotelev3">&gt; &gt;&gt;in doing lookups.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I think new framework for the cache would be grate and will fit openmpi
</span><br>
<span class="quotelev2">&gt; &gt;philosophy nicely (if something may be done different do it modular) :).
</span><br>
<span class="quotelev2">&gt; &gt;Regarding lookup latency I think it is not so obvious that the latency will
</span><br>
<span class="quotelev2">&gt; &gt;suffer (your datastructures will be more complex for instance), and think 
</span><br>
<span class="quotelev2">&gt; &gt;about other optimisation you can do if cache is per btl, like searching 
</span><br>
<span class="quotelev2">&gt; &gt;cache only
</span><br>
<span class="quotelev2">&gt; &gt;for btls from endpoint-&gt;btl_rdma for instance.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;I have some ideas about interface that I want to see, but perhaps it 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;will not
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;play nice with the way ob1 works now. And remember my view is IB centric 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;and may
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;be completely wrong for other interconnects. I will be glad to here your
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;comments.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;I think cache should be implemented for each mpool and not single global 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;one.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Three function will be added to mca_mpool_base_module_t:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;mpool_insert(mca_mpool_base_module_t, mca_mpool_base_registration_t)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;mca_mpool_base_registration_t mpool_find(mca_mpool_base_module_t, void 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;*addr, size_t size)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;mpool_put (mca_mpool_base_module_t, mca_mpool_base_registration_t);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Each mpool can override those functions and provide its own cache 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;implementation.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;But base implementation will provide default one. The cache will 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;maintain it's
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;own mru list.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;mca_mpool_base_find(void *addr, size_t length) will iterate through 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;mpool list,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;will call mpool_find() for each of them and will return list of 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;registration to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;pml. pml should call mpool_put() on registration it no longer needs 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;(this is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;needed for proper reference counting).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;btl will call mpool_insert() after mpool_register() it is possible to 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;merge these
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;two functions in one.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;My only issue with this is the cost of iterating over each of the mpools 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;and doing
</span><br>
<span class="quotelev3">&gt; &gt;&gt;a lookup in each.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;What about optimisation I mentioned (iterating only over 
</span><br>
<span class="quotelev2">&gt; &gt;endpoint-&gt;btl_rdma).
</span><br>
<span class="quotelev2">&gt; &gt;Also I looked more closely on all usages of mca_mpool_base_find() (there 
</span><br>
<span class="quotelev2">&gt; &gt;are not many of those) and I have a question:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Lets say application wants to send buffer B to 100 other ranks. It does
</span><br>
<span class="quotelev2">&gt; &gt;100 MPI_Isend (B). OpenMPI desides to use rdma to send B and calls 
</span><br>
<span class="quotelev2">&gt; &gt;mca_pml_ob1_send_request_start_prepare() for each sendreq. 
</span><br>
<span class="quotelev2">&gt; &gt;The following is called for each sendreq:
</span><br>
<span class="quotelev2">&gt; &gt;...
</span><br>
<span class="quotelev2">&gt; &gt;sendreq-&gt;req_chunk = mca_mpool_base_find(sendreq-&gt;req_send.req_addr);
</span><br>
<span class="quotelev2">&gt; &gt;...
</span><br>
<span class="quotelev2">&gt; &gt;Note that req_chunk is cached in sendreq until call to
</span><br>
<span class="quotelev2">&gt; &gt;mca_pml_ob1_send_request_put() (lets say B was not yet registered so 
</span><br>
<span class="quotelev2">&gt; &gt;sendreq-&gt;req_chunk is NULL for all 100 requests).
</span><br>
<span class="quotelev2">&gt; &gt;When mca_pml_ob1_send_request_put() is called on first sendreq sometime 
</span><br>
<span class="quotelev2">&gt; &gt;later, it
</span><br>
<span class="quotelev2">&gt; &gt;finds NULL in sendreq-&gt;req_chunk and subsequent call to 
</span><br>
<span class="quotelev2">&gt; &gt;mca_bml_base_prepare_src()
</span><br>
<span class="quotelev2">&gt; &gt;registers B, but all other 99 requests have NULL in sendreq-&gt;req_chunk
</span><br>
<span class="quotelev2">&gt; &gt;and they will register same buffer 99 times more!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Is this scenario possible or I missed something?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;If it is possible then it looks like the right thing to do is to search
</span><br>
<span class="quotelev2">&gt; &gt;cache inside mca_pml_ob1_send_request_put() and since btl is available as 
</span><br>
<span class="quotelev2">&gt; &gt;parameter to this function we can search only the btls cache.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;I have code that manages overlapping registrations and I am porting it to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;openmpi now, but without changing the way mpool works it will be not very
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;useful.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;Could we implement this a single cache where each entry could reference 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;multiple
</span><br>
<span class="quotelev3">&gt; &gt;&gt;mpools/btls?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Yes this is possible with performance hit.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;My cache is slightly reminds linux virtual memory area (VMA) list.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;The registration structure looks like this:
</span><br>
<span class="quotelev2">&gt; &gt;struct reg
</span><br>
<span class="quotelev2">&gt; &gt;{
</span><br>
<span class="quotelev2">&gt; &gt;  int begin; /* start of registration */
</span><br>
<span class="quotelev2">&gt; &gt;  int end;   /* end of registration */
</span><br>
<span class="quotelev2">&gt; &gt;};
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;The VMA structure looks like this
</span><br>
<span class="quotelev2">&gt; &gt;struct vma
</span><br>
<span class="quotelev2">&gt; &gt;{
</span><br>
<span class="quotelev2">&gt; &gt;  int begin; /* first page in the VMA */
</span><br>
<span class="quotelev2">&gt; &gt;  int end;   /* last page in the VMA */
</span><br>
<span class="quotelev2">&gt; &gt;  list reg_list /* list of registration in this VMA sorted by reg-&gt;end */
</span><br>
<span class="quotelev2">&gt; &gt;};
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;VMAs are never overlap. reg_list of each VMA contains sorted list of all 
</span><br>
<span class="quotelev2">&gt; &gt;registrations that cover the entire VMA.
</span><br>
<span class="quotelev2">&gt; &gt;For instance if we have two registrations first (R1) from 50 to 150 and 
</span><br>
<span class="quotelev2">&gt; &gt;second
</span><br>
<span class="quotelev2">&gt; &gt;(R2) from 100 to 200 the cache will have three VMAs. First one will cover 
</span><br>
<span class="quotelev2">&gt; &gt;area from 50 to 99 and will have R1 in reg_list, second will cover area 
</span><br>
<span class="quotelev2">&gt; &gt;from 100 to
</span><br>
<span class="quotelev2">&gt; &gt;150 and will have R2 and R1 in reg_list, third will cover area from 151 to 
</span><br>
<span class="quotelev2">&gt; &gt;200
</span><br>
<span class="quotelev2">&gt; &gt;and will have R2 in reg_list.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;All VMAs are stored in the R/B tree and in the sorted list. Insertion time 
</span><br>
<span class="quotelev2">&gt; &gt;is linear, search is logarithmic. The search function gets address and 
</span><br>
<span class="quotelev2">&gt; &gt;size as
</span><br>
<span class="quotelev2">&gt; &gt;parameters, it looks for VMA holding the address and check if the first 
</span><br>
<span class="quotelev2">&gt; &gt;registration on the list is big enough to hold size bytes (note that the 
</span><br>
<span class="quotelev2">&gt; &gt;reg_list is sorted so it is enough to check only the first element on the 
</span><br>
<span class="quotelev2">&gt; &gt;list).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I can hold registrations from different mpools in the same database, but 
</span><br>
<span class="quotelev2">&gt; &gt;in this
</span><br>
<span class="quotelev2">&gt; &gt;case search functions will be less efficient since it will need to scan 
</span><br>
<span class="quotelev2">&gt; &gt;whole reg_list to find registration for each mpool and in most cases 
</span><br>
<span class="quotelev2">&gt; &gt;caller doesn't even need all the list, but only the registration for 
</span><br>
<span class="quotelev2">&gt; &gt;specific btl!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;--
</span><br>
<span class="quotelev2">&gt; &gt;			Gleb.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0164.php">Nathan DeBardeleben: "Re:  OMPI 32bit on a 64bit Linux box"</a>
<li><strong>Previous message:</strong> <a href="0162.php">Jeff Squyres: "Re:  svn server is sick"</a>
<li><strong>In reply to:</strong> <a href="0159.php">Tim S. Woodall: "Re:  Memory registration question."</a>
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
