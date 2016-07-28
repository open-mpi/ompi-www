<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 09:58:21 2007" -->
<!-- isoreceived="20070813135821" -->
<!-- sent="Mon, 13 Aug 2007 17:00:37 +0300" -->
<!-- isosent="20070813140037" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem in mpool rdma finalize" -->
<!-- id="46C06405.9060308_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D07C6571-96FC-4B6F-B2D1-B9AECAD24269_at_cisco.com" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-13 10:00:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2115.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2113.php">Jeff Squyres: "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<li><strong>In reply to:</strong> <a href="2113.php">Jeff Squyres: "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2136.php">Gleb Natapov: "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<li><strong>Reply:</strong> <a href="2136.php">Gleb Natapov: "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; FWIW: we fixed this recently in the openib BTL by ensuring that all  
</span><br>
<span class="quotelev1">&gt; registered memory is freed during the BTL finalize (vs. the mpool  
</span><br>
<span class="quotelev1">&gt; finalize).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is a new issue because the mpool finalize was just recently  
</span><br>
<span class="quotelev1">&gt; expanded to un-register all of its memory as part of the NIC-restart  
</span><br>
<span class="quotelev1">&gt; effort (and will likely also be needed for checkpoint/restart...?).
</span><br>
<span class="quotelev1">&gt;   
</span><br>
mpool rdma finalize was empty function. I changed it to do the 
<br>
&quot;finalize&quot; job - go over all registered segments in mpool  and release 
<br>
them one by one,
<br>
Mpool use reference counter for each memory region and it prevents us 
<br>
from double free bug. In openib btl all memory that was registered with 
<br>
mpool  on finalize stage will be  unregistered with mpool too.
<br>
So maybe in gm the memory (that was registred with mpool) released 
<br>
directly (not via mpool) and it cause the segfault.
<br>
<p>Pasha
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 13, 2007, at 9:11 AM, Tim Prins wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have run into a problem with mca_mpool_rdma_finalize as  
</span><br>
<span class="quotelev2">&gt;&gt; implemented in
</span><br>
<span class="quotelev2">&gt;&gt; r15557. With the t_win onesided test, running over gm, it  
</span><br>
<span class="quotelev2">&gt;&gt; segfaults. What
</span><br>
<span class="quotelev2">&gt;&gt; appears to be happening is that some memory is registered with gm,  
</span><br>
<span class="quotelev2">&gt;&gt; and then
</span><br>
<span class="quotelev2">&gt;&gt; gets freed by mca_mpool_rdma_finalize. But the free function that  
</span><br>
<span class="quotelev2">&gt;&gt; it is using
</span><br>
<span class="quotelev2">&gt;&gt; is in the gm btl, and the btls are unloaded before the mpool is  
</span><br>
<span class="quotelev2">&gt;&gt; shut down. So
</span><br>
<span class="quotelev2">&gt;&gt; the function call segfaults.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I change the code so we never unload the btls (and we don't free  
</span><br>
<span class="quotelev2">&gt;&gt; the gm
</span><br>
<span class="quotelev2">&gt;&gt; port), it works fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that the openib btl works just fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Forgive me if this is a known problem, I am trying to catch up from my
</span><br>
<span class="quotelev2">&gt;&gt; vacation...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Tim
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt; If anyone cares, here is the callstack:
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x404de825 in ?? () from /lib/libgcc_s.so.1
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x4048081a in mca_mpool_rdma_finalize (mpool=0x925b690)
</span><br>
<span class="quotelev2">&gt;&gt;     at mpool_rdma_module.c:431
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x400caca9 in mca_mpool_base_close () at base/ 
</span><br>
<span class="quotelev2">&gt;&gt; mpool_base_close.c:57
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x40060094 in ompi_mpi_finalize () at runtime/ 
</span><br>
<span class="quotelev2">&gt;&gt; ompi_mpi_finalize.c:304
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x4009a4c9 in PMPI_Finalize () at pfinalize.c:44
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x08049946 in main (argc=1, argv=0xbfe16924) at t_win.c:214
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt; gdb shows that at this point the gm btl is no longer loaded.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2115.php">Jeff Squyres: "Re: [OMPI devel] openib btl header caching"</a>
<li><strong>Previous message:</strong> <a href="2113.php">Jeff Squyres: "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<li><strong>In reply to:</strong> <a href="2113.php">Jeff Squyres: "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2136.php">Gleb Natapov: "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<li><strong>Reply:</strong> <a href="2136.php">Gleb Natapov: "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
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
