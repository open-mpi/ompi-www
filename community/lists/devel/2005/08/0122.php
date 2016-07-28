<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 10 05:46:29 2005" -->
<!-- isoreceived="20050810104629" -->
<!-- sent="Wed, 10 Aug 2005 13:45:54 +0300" -->
<!-- isosent="20050810104554" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re:  Memory registration question." -->
<!-- id="20050810104554.GN16361_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="46560.128.165.148.200.1123604554.squirrel_at_webmail.lanl.gov" -->
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
<strong>Date:</strong> 2005-08-10 05:45:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0123.php">Gleb Natapov: "Re:  New version of Valgrind: 3.0.0"</a>
<li><strong>Previous message:</strong> <a href="0121.php">Jeff Squyres: "New version of Valgrind: 3.0.0"</a>
<li><strong>In reply to:</strong> <a href="0114.php">Timothy B. Prins: "Re:  Memory registration question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0131.php">Tim S. Woodall: "Re:  Memory registration question."</a>
<li><strong>Reply:</strong> <a href="0131.php">Tim S. Woodall: "Re:  Memory registration question."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Tim,
<br>
<p>On Tue, Aug 09, 2005 at 10:22:34AM -0600, Timothy B. Prins wrote:
<br>
<span class="quotelev1">&gt; If you have anyother ideas of how to do it please let us know.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I have to confess I don't like current pindown cache implementation much or 
<br>
perhaps I don't understand it enough.
<br>
<p>What I managed to understand from the code is this:
<br>
<p>There are three functions:
<br>
int mca_mpool_base_insert(void * addr, size_t size, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_mpool_base_module_t* mpool, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void* user_data,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_mpool_base_registration_t* registration);
<br>
int mca_mpool_base_remove(void * base);
<br>
mca_mpool_base_chunk_t* mca_mpool_base_find(void* base);
<br>
<p>When btl registers memory it inserts registration in global cache by calling
<br>
mca_mpool_base_insert() this insertion may shadow registration of the same 
<br>
memory from another module or even from the same module.
<br>
<p>mca_mpool_base_remove() removes address from the cache, but there is no way 
<br>
module can guaranty that deleted registration belongs to the module calling 
<br>
remove.
<br>
<p>mca_mpool_base_find() returns first registration it encounter in the cache. The
<br>
registration may not be the best (biggest) or it may belong to the wrong module 
<br>
(endpoint is not accessible through it).
<br>
<p>Each btl should maintain it's own mru list, but the code is pretty much the same.
<br>
<p>The saddest thing is you can't override the interface in your module. It is too
<br>
coupled with pml (ob1) and btls. If you don't like the way registration cache
<br>
works the only way to fix it is rewrite pml/btl/mpool.
<br>
<p>I have some ideas about interface that I want to see, but perhaps it will not
<br>
play nice with the way ob1 works now. And remember my view is IB centric and may
<br>
be completely wrong for other interconnects. I will be glad to here your
<br>
comments.
<br>
<p>I think cache should be implemented for each mpool and not single global one.
<br>
<p>Three function will be added to mca_mpool_base_module_t:
<br>
mpool_insert(mca_mpool_base_module_t, mca_mpool_base_registration_t)
<br>
mca_mpool_base_registration_t mpool_find(mca_mpool_base_module_t, void *addr, size_t size)
<br>
mpool_put (mca_mpool_base_module_t, mca_mpool_base_registration_t);
<br>
<p>Each mpool can override those functions and provide its own cache implementation.
<br>
But base implementation will provide default one. The cache will maintain it's
<br>
own mru list.
<br>
<p>mca_mpool_base_find(void *addr, size_t length) will iterate through mpool list,
<br>
will call mpool_find() for each of them and will return list of registration to
<br>
pml. pml should call mpool_put() on registration it no longer needs (this is
<br>
needed for proper reference counting).
<br>
<p>btl will call mpool_insert() after mpool_register() it is possible to merge these
<br>
two functions in one.
<br>
<p>I have code that manages overlapping registrations and I am porting it to
<br>
openmpi now, but without changing the way mpool works it will be not very
<br>
useful.
<br>
<p>Thanks,
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0123.php">Gleb Natapov: "Re:  New version of Valgrind: 3.0.0"</a>
<li><strong>Previous message:</strong> <a href="0121.php">Jeff Squyres: "New version of Valgrind: 3.0.0"</a>
<li><strong>In reply to:</strong> <a href="0114.php">Timothy B. Prins: "Re:  Memory registration question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0131.php">Tim S. Woodall: "Re:  Memory registration question."</a>
<li><strong>Reply:</strong> <a href="0131.php">Tim S. Woodall: "Re:  Memory registration question."</a>
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
