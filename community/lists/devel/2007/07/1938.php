<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 19:55:44 2007" -->
<!-- isoreceived="20070718235544" -->
<!-- sent="Wed, 18 Jul 2007 19:55:32 -0400" -->
<!-- isosent="20070718235532" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] problems with openib finalize" -->
<!-- id="42FAA153-E2FD-4DEE-ABFB-63BBEA05F959_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2007-07-18 19:55:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1939.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15492"</a>
<li><strong>Previous message:</strong> <a href="1937.php">Jeff Squyres: "[OMPI devel] pathscale compilers and TLS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1940.php">Pavel Shamis (Pasha): "Re: [OMPI devel] problems with openib finalize"</a>
<li><strong>Reply:</strong> <a href="1940.php">Pavel Shamis (Pasha): "Re: [OMPI devel] problems with openib finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Background: Pasha added a call in the openib BTL finalize function  
<br>
that will only succeed if all registered memory has been released  
<br>
(ibv_dealloc_pd()).  Since the test app didn't call MPI_FREE_MEM,  
<br>
there was some memory that was still registered, and therefore the  
<br>
call in finalize failed.  We treated this as a fatal error.  Last  
<br>
night's MTT runs turned up several apps that exhibited this fatal error.
<br>
<p>While we're examining this problem, Pasha has removed the call to  
<br>
ibv_dealloc_pd() in the trunk openib BTL finalize.
<br>
<p>I examined 1 of the tests that was failing last night in MTT:  
<br>
onesided/t.f90.  This test has an MPI_ALLOC_MEM with no corresponding  
<br>
MPI_FREE_MEM.  To investigate this problem, I restored the call to  
<br>
ibv_dealloc_pd() and re-ran the t.f90 test -- the problem still  
<br>
occurs.  Good.
<br>
<p>However, once I got the right MPI_FREE_MEM call in t.f90, the test  
<br>
started passing.  I.e., ibv_dealloc_pd(hca-&gt;ib_pd) succeeds because  
<br>
all registered memory has been released.  Hence, the test itself was  
<br>
faulty.
<br>
<p>However, I don't think we should *error* if we fail to ibv_dealloc_pd 
<br>
(hca-&gt;ib_pd); it's a user error, but it's not catastrophic unless  
<br>
we're trying to do an HCA restart scenario.  Specifically: during a  
<br>
normal MPI_FINALIZE, who cares?
<br>
<p>I think we should do the following:
<br>
<p>1. If we're not doing an HCA restart/checkpoint and we fail to  
<br>
ibv_dealloc_pd(), just move on (i.e., it's not a warning/error unless  
<br>
we *want* a warning, such as if an MCA parameter  
<br>
btl_openib_warn_if_finalize_fail is enabled, or somesuch).
<br>
<p>2. If we *are* doing an HCA restart/checkpoint and ibv_dealloc_pd()  
<br>
fails, then we have to gracefully fail to notify upper layers that  
<br>
Bad Things happened (I suspect that we need mpool finalize  
<br>
implemented to properly implement checkpointing for RDMA networks).
<br>
<p>3. Add a new MCA parameter named mpi_show_mpi_alloc_mem_leaks that,  
<br>
when enabled, shows a warning in ompi_mpi_finalize() if there is  
<br>
still memory allocated by MPI_ALLOC_MEM that was not freed by  
<br>
MPI_FREE_MEM (this MCA parameter will parallel the already-existing  
<br>
mpi_show_handle_leaks MCA param which displays warnings if the app  
<br>
creates MPI objects but does not free them).
<br>
<p>My points:
<br>
- leaked MPI_ALLOC_MEM memory should be reported by the MPI layer,  
<br>
not a BTL or mpool
<br>
- failing to ibv_dealloc_pd() during MPI_FINALIZE should only trigger  
<br>
a warning if the user wants to see it
<br>
- failing to ibv_dealloc_pd() during an HCA restart or checkpoint  
<br>
should gracefully fail upwards
<br>
<p>Comments?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1939.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15492"</a>
<li><strong>Previous message:</strong> <a href="1937.php">Jeff Squyres: "[OMPI devel] pathscale compilers and TLS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1940.php">Pavel Shamis (Pasha): "Re: [OMPI devel] problems with openib finalize"</a>
<li><strong>Reply:</strong> <a href="1940.php">Pavel Shamis (Pasha): "Re: [OMPI devel] problems with openib finalize"</a>
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
