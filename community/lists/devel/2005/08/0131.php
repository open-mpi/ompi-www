<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 11 11:08:08 2005" -->
<!-- isoreceived="20050811160808" -->
<!-- sent="Thu, 11 Aug 2005 10:08:04 -0600" -->
<!-- isosent="20050811160804" -->
<!-- name="Tim S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re:  Memory registration question." -->
<!-- id="42FB77E4.5040605_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20050810104554.GN16361_at_minantech.com" -->
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
<strong>From:</strong> Tim S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-11 11:08:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0132.php">Galen Shipman: "Re:  couple of problems in openib mpool."</a>
<li><strong>Previous message:</strong> <a href="0130.php">Gleb Natapov: "couple of problems in openib mpool."</a>
<li><strong>In reply to:</strong> <a href="0122.php">Gleb Natapov: "Re:  Memory registration question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0148.php">Gleb Natapov: "Re:  Memory registration question."</a>
<li><strong>Reply:</strong> <a href="0148.php">Gleb Natapov: "Re:  Memory registration question."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Gleb,
<br>
<p>A couple of general comments:
<br>
<p>We initially started by maintaining the cache at the btl/mpool level. However,
<br>
we needed to expose the registrations to the upper level (pml), to
<br>
allow the pml to make scheduling decisions (which btl/protocol to use),
<br>
so we re-organized this to maintain a global cache/tree, where a given
<br>
registration in the tree may reference multiple btls. This allows the pml
<br>
to do a single lookup, and optionally schedule the message on the set of
<br>
btls that have registered the memory.
<br>
<p>That said, there are problems with the current approach as you've indicated.
<br>
MRU lists are maintained on a per-btl module basis (for fairness), which results
<br>
in a good bit of duplicated code across btls. Also, as you've indicated, the
<br>
current API/global cache (R/B tree) doesn't support overlapping registrations.
<br>
<p>Additional comments inline:
<br>
<p>Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; Hello Tim,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Aug 09, 2005 at 10:22:34AM -0600, Timothy B. Prins wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;If you have anyother ideas of how to do it please let us know.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have to confess I don't like current pindown cache implementation much or 
</span><br>
<span class="quotelev1">&gt; perhaps I don't understand it enough.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I managed to understand from the code is this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are three functions:
</span><br>
<span class="quotelev1">&gt; int mca_mpool_base_insert(void * addr, size_t size, 
</span><br>
<span class="quotelev1">&gt;                           mca_mpool_base_module_t* mpool, 
</span><br>
<span class="quotelev1">&gt;                           void* user_data,
</span><br>
<span class="quotelev1">&gt;                           mca_mpool_base_registration_t* registration);
</span><br>
<span class="quotelev1">&gt; int mca_mpool_base_remove(void * base);
</span><br>
<span class="quotelev1">&gt; mca_mpool_base_chunk_t* mca_mpool_base_find(void* base);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When btl registers memory it inserts registration in global cache by calling
</span><br>
<span class="quotelev1">&gt; mca_mpool_base_insert() this insertion may shadow registration of the same 
</span><br>
<span class="quotelev1">&gt; memory from another module or even from the same module.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca_mpool_base_remove() removes address from the cache, but there is no way 
</span><br>
<span class="quotelev1">&gt; module can guaranty that deleted registration belongs to the module calling 
</span><br>
<span class="quotelev1">&gt; remove.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca_mpool_base_find() returns first registration it encounter in the cache. The
</span><br>
<span class="quotelev1">&gt; registration may not be the best (biggest) or it may belong to the wrong module 
</span><br>
<span class="quotelev1">&gt; (endpoint is not accessible through it).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>This is true. We have discussed changing the API to accept the base address
<br>
and range - and return the entire set of overlapping registrations.
<br>
<p><span class="quotelev1">&gt; Each btl should maintain it's own mru list, but the code is pretty much the same.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Agreed - this is ugly...
<br>
<p><span class="quotelev1">&gt; The saddest thing is you can't override the interface in your module. It is too
</span><br>
<span class="quotelev1">&gt; coupled with pml (ob1) and btls. If you don't like the way registration cache
</span><br>
<span class="quotelev1">&gt; works the only way to fix it is rewrite pml/btl/mpool.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>True. We could implement a new framework for the cache, to allow this to be replaced.
<br>
However, my preference is still to maintain a single cache/tree, to minimize latency/overhead
<br>
in doing lookups.
<br>
<p><span class="quotelev1">&gt; I have some ideas about interface that I want to see, but perhaps it will not
</span><br>
<span class="quotelev1">&gt; play nice with the way ob1 works now. And remember my view is IB centric and may
</span><br>
<span class="quotelev1">&gt; be completely wrong for other interconnects. I will be glad to here your
</span><br>
<span class="quotelev1">&gt; comments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think cache should be implemented for each mpool and not single global one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Three function will be added to mca_mpool_base_module_t:
</span><br>
<span class="quotelev1">&gt; mpool_insert(mca_mpool_base_module_t, mca_mpool_base_registration_t)
</span><br>
<span class="quotelev1">&gt; mca_mpool_base_registration_t mpool_find(mca_mpool_base_module_t, void *addr, size_t size)
</span><br>
<span class="quotelev1">&gt; mpool_put (mca_mpool_base_module_t, mca_mpool_base_registration_t);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Each mpool can override those functions and provide its own cache implementation.
</span><br>
<span class="quotelev1">&gt; But base implementation will provide default one. The cache will maintain it's
</span><br>
<span class="quotelev1">&gt; own mru list.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mca_mpool_base_find(void *addr, size_t length) will iterate through mpool list,
</span><br>
<span class="quotelev1">&gt; will call mpool_find() for each of them and will return list of registration to
</span><br>
<span class="quotelev1">&gt; pml. pml should call mpool_put() on registration it no longer needs (this is
</span><br>
<span class="quotelev1">&gt; needed for proper reference counting).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; btl will call mpool_insert() after mpool_register() it is possible to merge these
</span><br>
<span class="quotelev1">&gt; two functions in one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>My only issue with this is the cost of iterating over each of the mpools and doing
<br>
a lookup in each.
<br>
<p><p><span class="quotelev1">&gt; I have code that manages overlapping registrations and I am porting it to
</span><br>
<span class="quotelev1">&gt; openmpi now, but without changing the way mpool works it will be not very
</span><br>
<span class="quotelev1">&gt; useful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Could we implement this a single cache where each entry could reference multiple
<br>
mpools/btls?
<br>
<p>Any thoughts/opions regarding a framework for a single cache?
<br>
<p><p>Thanks,
<br>
Tim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0132.php">Galen Shipman: "Re:  couple of problems in openib mpool."</a>
<li><strong>Previous message:</strong> <a href="0130.php">Gleb Natapov: "couple of problems in openib mpool."</a>
<li><strong>In reply to:</strong> <a href="0122.php">Gleb Natapov: "Re:  Memory registration question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0148.php">Gleb Natapov: "Re:  Memory registration question."</a>
<li><strong>Reply:</strong> <a href="0148.php">Gleb Natapov: "Re:  Memory registration question."</a>
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
