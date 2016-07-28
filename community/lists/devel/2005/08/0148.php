<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Aug 14 07:53:45 2005" -->
<!-- isoreceived="20050814125345" -->
<!-- sent="Sun, 14 Aug 2005 15:53:10 +0300" -->
<!-- isosent="20050814125310" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re:  Memory registration question." -->
<!-- id="20050814125310.GZ16361_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="42FB77E4.5040605_at_lanl.gov" -->
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
<strong>Date:</strong> 2005-08-14 07:53:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0149.php">Jeff Squyres: "Re:  Memory registration question."</a>
<li><strong>Previous message:</strong> <a href="0147.php">Jeff Squyres: "frameworks in OPAL"</a>
<li><strong>In reply to:</strong> <a href="0131.php">Tim S. Woodall: "Re:  Memory registration question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0149.php">Jeff Squyres: "Re:  Memory registration question."</a>
<li><strong>Reply:</strong> <a href="0149.php">Jeff Squyres: "Re:  Memory registration question."</a>
<li><strong>Reply:</strong> <a href="0159.php">Tim S. Woodall: "Re:  Memory registration question."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Tim,
<br>
<p>On Thu, Aug 11, 2005 at 10:08:04AM -0600, Tim S. Woodall wrote:
<br>
<span class="quotelev1">&gt; Hello Gleb,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A couple of general comments:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We initially started by maintaining the cache at the btl/mpool level. However,
</span><br>
<span class="quotelev1">&gt; we needed to expose the registrations to the upper level (pml), to
</span><br>
<span class="quotelev1">&gt; allow the pml to make scheduling decisions (which btl/protocol to use),
</span><br>
<span class="quotelev1">&gt; so we re-organized this to maintain a global cache/tree, where a given
</span><br>
<span class="quotelev1">&gt; registration in the tree may reference multiple btls. This allows the pml
</span><br>
<span class="quotelev1">&gt; to do a single lookup, and optionally schedule the message on the set of
</span><br>
<span class="quotelev1">&gt; btls that have registered the memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
I understand the need to expose the registration cache to pml and I
<br>
think the optimisations you are using this for is very neat idea, but as far
<br>
as I see the current code returns multiple btls for the registration only if 
<br>
memory was registered using mca_mpool_base_alloc() (the rare case IMHO).
<br>
<p><span class="quotelev2">&gt; &gt; The saddest thing is you can't override the interface in your module. It is too
</span><br>
<span class="quotelev2">&gt; &gt; coupled with pml (ob1) and btls. If you don't like the way registration cache
</span><br>
<span class="quotelev2">&gt; &gt; works the only way to fix it is rewrite pml/btl/mpool.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; True. We could implement a new framework for the cache, to allow this to be replaced.
</span><br>
<span class="quotelev1">&gt; However, my preference is still to maintain a single cache/tree, to minimize latency/overhead
</span><br>
<span class="quotelev1">&gt; in doing lookups.
</span><br>
I think new framework for the cache would be grate and will fit openmpi
<br>
philosophy nicely (if something may be done different do it modular) :).
<br>
Regarding lookup latency I think it is not so obvious that the latency will
<br>
suffer (your datastructures will be more complex for instance), and think 
<br>
about other optimisation you can do if cache is per btl, like searching cache only
<br>
for btls from endpoint-&gt;btl_rdma for instance.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have some ideas about interface that I want to see, but perhaps it will not
</span><br>
<span class="quotelev2">&gt; &gt; play nice with the way ob1 works now. And remember my view is IB centric and may
</span><br>
<span class="quotelev2">&gt; &gt; be completely wrong for other interconnects. I will be glad to here your
</span><br>
<span class="quotelev2">&gt; &gt; comments.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I think cache should be implemented for each mpool and not single global one.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Three function will be added to mca_mpool_base_module_t:
</span><br>
<span class="quotelev2">&gt; &gt; mpool_insert(mca_mpool_base_module_t, mca_mpool_base_registration_t)
</span><br>
<span class="quotelev2">&gt; &gt; mca_mpool_base_registration_t mpool_find(mca_mpool_base_module_t, void *addr, size_t size)
</span><br>
<span class="quotelev2">&gt; &gt; mpool_put (mca_mpool_base_module_t, mca_mpool_base_registration_t);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Each mpool can override those functions and provide its own cache implementation.
</span><br>
<span class="quotelev2">&gt; &gt; But base implementation will provide default one. The cache will maintain it's
</span><br>
<span class="quotelev2">&gt; &gt; own mru list.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mca_mpool_base_find(void *addr, size_t length) will iterate through mpool list,
</span><br>
<span class="quotelev2">&gt; &gt; will call mpool_find() for each of them and will return list of registration to
</span><br>
<span class="quotelev2">&gt; &gt; pml. pml should call mpool_put() on registration it no longer needs (this is
</span><br>
<span class="quotelev2">&gt; &gt; needed for proper reference counting).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; btl will call mpool_insert() after mpool_register() it is possible to merge these
</span><br>
<span class="quotelev2">&gt; &gt; two functions in one.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My only issue with this is the cost of iterating over each of the mpools and doing
</span><br>
<span class="quotelev1">&gt; a lookup in each.
</span><br>
What about optimisation I mentioned (iterating only over endpoint-&gt;btl_rdma).
<br>
Also I looked more closely on all usages of mca_mpool_base_find() (there are not many of 
<br>
those) and I have a question:
<br>
<p>Lets say application wants to send buffer B to 100 other ranks. It does
<br>
100 MPI_Isend (B). OpenMPI desides to use rdma to send B and calls 
<br>
mca_pml_ob1_send_request_start_prepare() for each sendreq. 
<br>
The following is called for each sendreq:
<br>
...
<br>
sendreq-&gt;req_chunk = mca_mpool_base_find(sendreq-&gt;req_send.req_addr);
<br>
...
<br>
Note that req_chunk is cached in sendreq until call to
<br>
mca_pml_ob1_send_request_put() (lets say B was not yet registered so 
<br>
sendreq-&gt;req_chunk is NULL for all 100 requests).
<br>
When mca_pml_ob1_send_request_put() is called on first sendreq sometime later, it
<br>
finds NULL in sendreq-&gt;req_chunk and subsequent call to mca_bml_base_prepare_src()
<br>
registers B, but all other 99 requests have NULL in sendreq-&gt;req_chunk
<br>
and they will register same buffer 99 times more!
<br>
<p>Is this scenario possible or I missed something?
<br>
<p>If it is possible then it looks like the right thing to do is to search
<br>
cache inside mca_pml_ob1_send_request_put() and since btl is available as parameter 
<br>
to this function we can search only the btls cache.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have code that manages overlapping registrations and I am porting it to
</span><br>
<span class="quotelev2">&gt; &gt; openmpi now, but without changing the way mpool works it will be not very
</span><br>
<span class="quotelev2">&gt; &gt; useful.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could we implement this a single cache where each entry could reference multiple
</span><br>
<span class="quotelev1">&gt; mpools/btls?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Yes this is possible with performance hit.
<br>
<p>My cache is slightly reminds linux virtual memory area (VMA) list.
<br>
<p>The registration structure looks like this:
<br>
struct reg
<br>
{
<br>
&nbsp;&nbsp;int begin; /* start of registration */
<br>
&nbsp;&nbsp;int end;   /* end of registration */
<br>
};
<br>
<p>The VMA structure looks like this
<br>
struct vma
<br>
{
<br>
&nbsp;&nbsp;int begin; /* first page in the VMA */
<br>
&nbsp;&nbsp;int end;   /* last page in the VMA */
<br>
&nbsp;&nbsp;list reg_list /* list of registration in this VMA sorted by reg-&gt;end */
<br>
};
<br>
<p>VMAs are never overlap. reg_list of each VMA contains sorted list of all 
<br>
registrations that cover the entire VMA.
<br>
For instance if we have two registrations first (R1) from 50 to 150 and second
<br>
(R2) from 100 to 200 the cache will have three VMAs. First one will cover area 
<br>
from 50 to 99 and will have R1 in reg_list, second will cover area from 100 to
<br>
150 and will have R2 and R1 in reg_list, third will cover area from 151 to 200
<br>
and will have R2 in reg_list.
<br>
<p>All VMAs are stored in the R/B tree and in the sorted list. Insertion time is 
<br>
linear, search is logarithmic. The search function gets address and size as
<br>
parameters, it looks for VMA holding the address and check if the first 
<br>
registration on the list is big enough to hold size bytes (note that the 
<br>
reg_list is sorted so it is enough to check only the first element on the list).
<br>
<p>I can hold registrations from different mpools in the same database, but in this
<br>
case search functions will be less efficient since it will need to scan whole 
<br>
reg_list to find registration for each mpool and in most cases caller doesn't 
<br>
even need all the list, but only the registration for specific btl!
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0149.php">Jeff Squyres: "Re:  Memory registration question."</a>
<li><strong>Previous message:</strong> <a href="0147.php">Jeff Squyres: "frameworks in OPAL"</a>
<li><strong>In reply to:</strong> <a href="0131.php">Tim S. Woodall: "Re:  Memory registration question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0149.php">Jeff Squyres: "Re:  Memory registration question."</a>
<li><strong>Reply:</strong> <a href="0149.php">Jeff Squyres: "Re:  Memory registration question."</a>
<li><strong>Reply:</strong> <a href="0159.php">Tim S. Woodall: "Re:  Memory registration question."</a>
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
