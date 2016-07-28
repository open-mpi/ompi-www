<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 09:23:18 2007" -->
<!-- isoreceived="20070813132318" -->
<!-- sent="Mon, 13 Aug 2007 09:23:07 -0400" -->
<!-- isosent="20070813132307" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem in mpool rdma finalize" -->
<!-- id="D07C6571-96FC-4B6F-B2D1-B9AECAD24269_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200708130911.10026.tprins_at_cs.indiana.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-13 09:23:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2114.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<li><strong>Previous message:</strong> <a href="2112.php">Tim Prins: "[OMPI devel] Problem in mpool rdma finalize"</a>
<li><strong>In reply to:</strong> <a href="2112.php">Tim Prins: "[OMPI devel] Problem in mpool rdma finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2114.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<li><strong>Reply:</strong> <a href="2114.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: we fixed this recently in the openib BTL by ensuring that all  
<br>
registered memory is freed during the BTL finalize (vs. the mpool  
<br>
finalize).
<br>
<p>This is a new issue because the mpool finalize was just recently  
<br>
expanded to un-register all of its memory as part of the NIC-restart  
<br>
effort (and will likely also be needed for checkpoint/restart...?).
<br>
<p><p><p>On Aug 13, 2007, at 9:11 AM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have run into a problem with mca_mpool_rdma_finalize as  
</span><br>
<span class="quotelev1">&gt; implemented in
</span><br>
<span class="quotelev1">&gt; r15557. With the t_win onesided test, running over gm, it  
</span><br>
<span class="quotelev1">&gt; segfaults. What
</span><br>
<span class="quotelev1">&gt; appears to be happening is that some memory is registered with gm,  
</span><br>
<span class="quotelev1">&gt; and then
</span><br>
<span class="quotelev1">&gt; gets freed by mca_mpool_rdma_finalize. But the free function that  
</span><br>
<span class="quotelev1">&gt; it is using
</span><br>
<span class="quotelev1">&gt; is in the gm btl, and the btls are unloaded before the mpool is  
</span><br>
<span class="quotelev1">&gt; shut down. So
</span><br>
<span class="quotelev1">&gt; the function call segfaults.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I change the code so we never unload the btls (and we don't free  
</span><br>
<span class="quotelev1">&gt; the gm
</span><br>
<span class="quotelev1">&gt; port), it works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that the openib btl works just fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Forgive me if this is a known problem, I am trying to catch up from my
</span><br>
<span class="quotelev1">&gt; vacation...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; If anyone cares, here is the callstack:
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x404de825 in ?? () from /lib/libgcc_s.so.1
</span><br>
<span class="quotelev1">&gt; #1  0x4048081a in mca_mpool_rdma_finalize (mpool=0x925b690)
</span><br>
<span class="quotelev1">&gt;     at mpool_rdma_module.c:431
</span><br>
<span class="quotelev1">&gt; #2  0x400caca9 in mca_mpool_base_close () at base/ 
</span><br>
<span class="quotelev1">&gt; mpool_base_close.c:57
</span><br>
<span class="quotelev1">&gt; #3  0x40060094 in ompi_mpi_finalize () at runtime/ 
</span><br>
<span class="quotelev1">&gt; ompi_mpi_finalize.c:304
</span><br>
<span class="quotelev1">&gt; #4  0x4009a4c9 in PMPI_Finalize () at pfinalize.c:44
</span><br>
<span class="quotelev1">&gt; #5  0x08049946 in main (argc=1, argv=0xbfe16924) at t_win.c:214
</span><br>
<span class="quotelev1">&gt; (gdb)
</span><br>
<span class="quotelev1">&gt; gdb shows that at this point the gm btl is no longer loaded.
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
<li><strong>Next message:</strong> <a href="2114.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<li><strong>Previous message:</strong> <a href="2112.php">Tim Prins: "[OMPI devel] Problem in mpool rdma finalize"</a>
<li><strong>In reply to:</strong> <a href="2112.php">Tim Prins: "[OMPI devel] Problem in mpool rdma finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2114.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<li><strong>Reply:</strong> <a href="2114.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
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
