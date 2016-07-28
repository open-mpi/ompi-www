<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 09:11:19 2007" -->
<!-- isoreceived="20070813131119" -->
<!-- sent="Mon, 13 Aug 2007 09:11:09 -0400" -->
<!-- isosent="20070813131109" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="[OMPI devel] Problem in mpool rdma finalize" -->
<!-- id="200708130911.10026.tprins_at_cs.indiana.edu" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-13 09:11:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2113.php">Jeff Squyres: "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<li><strong>Previous message:</strong> <a href="2111.php">Scott Atchley: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2113.php">Jeff Squyres: "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<li><strong>Reply:</strong> <a href="2113.php">Jeff Squyres: "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks,
<br>
<p>I have run into a problem with mca_mpool_rdma_finalize as implemented in 
<br>
r15557. With the t_win onesided test, running over gm, it segfaults. What 
<br>
appears to be happening is that some memory is registered with gm, and then 
<br>
gets freed by mca_mpool_rdma_finalize. But the free function that it is using 
<br>
is in the gm btl, and the btls are unloaded before the mpool is shut down. So 
<br>
the function call segfaults.
<br>
<p>If I change the code so we never unload the btls (and we don't free the gm 
<br>
port), it works fine.
<br>
<p>Note that the openib btl works just fine.
<br>
<p>Forgive me if this is a known problem, I am trying to catch up from my 
<br>
vacation...
<br>
<p>Tim
<br>
<p><pre>
---
If anyone cares, here is the callstack:
(gdb) bt
#0  0x404de825 in ?? () from /lib/libgcc_s.so.1
#1  0x4048081a in mca_mpool_rdma_finalize (mpool=0x925b690)
    at mpool_rdma_module.c:431
#2  0x400caca9 in mca_mpool_base_close () at base/mpool_base_close.c:57
#3  0x40060094 in ompi_mpi_finalize () at runtime/ompi_mpi_finalize.c:304
#4  0x4009a4c9 in PMPI_Finalize () at pfinalize.c:44
#5  0x08049946 in main (argc=1, argv=0xbfe16924) at t_win.c:214
(gdb)
gdb shows that at this point the gm btl is no longer loaded. 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2113.php">Jeff Squyres: "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<li><strong>Previous message:</strong> <a href="2111.php">Scott Atchley: "Re: [OMPI devel] openib btl header caching"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2113.php">Jeff Squyres: "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
<li><strong>Reply:</strong> <a href="2113.php">Jeff Squyres: "Re: [OMPI devel] Problem in mpool rdma finalize"</a>
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
