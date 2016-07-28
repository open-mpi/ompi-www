<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 19 08:17:43 2007" -->
<!-- isoreceived="20070719121743" -->
<!-- sent="Thu, 19 Jul 2007 15:19:29 +0300" -->
<!-- isosent="20070719121929" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problems with openib finalize" -->
<!-- id="469F56D1.4020304_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="42FAA153-E2FD-4DEE-ABFB-63BBEA05F959_at_cisco.com" -->
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
<strong>Date:</strong> 2007-07-19 08:19:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1941.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15492"</a>
<li><strong>Previous message:</strong> <a href="1939.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15492"</a>
<li><strong>In reply to:</strong> <a href="1938.php">Jeff Squyres: "[OMPI devel] problems with openib finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1974.php">Pavel Shamis (Pasha): "Re: [OMPI devel] problems with openib finalize"</a>
<li><strong>Reply:</strong> <a href="1974.php">Pavel Shamis (Pasha): "Re: [OMPI devel] problems with openib finalize"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Background: Pasha added a call in the openib BTL finalize function  
</span><br>
<span class="quotelev1">&gt; that will only succeed if all registered memory has been released  
</span><br>
<span class="quotelev1">&gt; (ibv_dealloc_pd()).  Since the test app didn't call MPI_FREE_MEM,  
</span><br>
<span class="quotelev1">&gt; there was some memory that was still registered, and therefore the  
</span><br>
<span class="quotelev1">&gt; call in finalize failed.  We treated this as a fatal error.  Last  
</span><br>
<span class="quotelev1">&gt; night's MTT runs turned up several apps that exhibited this fatal error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While we're examining this problem, Pasha has removed the call to  
</span><br>
<span class="quotelev1">&gt; ibv_dealloc_pd() in the trunk openib BTL finalize.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I examined 1 of the tests that was failing last night in MTT:  
</span><br>
<span class="quotelev1">&gt; onesided/t.f90.  This test has an MPI_ALLOC_MEM with no corresponding  
</span><br>
<span class="quotelev1">&gt; MPI_FREE_MEM.  To investigate this problem, I restored the call to  
</span><br>
<span class="quotelev1">&gt; ibv_dealloc_pd() and re-ran the t.f90 test -- the problem still  
</span><br>
<span class="quotelev1">&gt; occurs.  Good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, once I got the right MPI_FREE_MEM call in t.f90, the test  
</span><br>
<span class="quotelev1">&gt; started passing.  I.e., ibv_dealloc_pd(hca-&gt;ib_pd) succeeds because  
</span><br>
<span class="quotelev1">&gt; all registered memory has been released.  Hence, the test itself was  
</span><br>
<span class="quotelev1">&gt; faulty.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I don't think we should *error* if we fail to ibv_dealloc_pd 
</span><br>
<span class="quotelev1">&gt; (hca-&gt;ib_pd); it's a user error, but it's not catastrophic unless  
</span><br>
<span class="quotelev1">&gt; we're trying to do an HCA restart scenario.  Specifically: during a  
</span><br>
<span class="quotelev1">&gt; normal MPI_FINALIZE, who cares?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think we should do the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. If we're not doing an HCA restart/checkpoint and we fail to  
</span><br>
<span class="quotelev1">&gt; ibv_dealloc_pd(), just move on (i.e., it's not a warning/error unless  
</span><br>
<span class="quotelev1">&gt; we *want* a warning, such as if an MCA parameter  
</span><br>
<span class="quotelev1">&gt; btl_openib_warn_if_finalize_fail is enabled, or somesuch).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. If we *are* doing an HCA restart/checkpoint and ibv_dealloc_pd()  
</span><br>
<span class="quotelev1">&gt; fails, then we have to gracefully fail to notify upper layers that  
</span><br>
<span class="quotelev1">&gt; Bad Things happened (I suspect that we need mpool finalize  
</span><br>
<span class="quotelev1">&gt; implemented to properly implement checkpointing for RDMA networks).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. Add a new MCA parameter named mpi_show_mpi_alloc_mem_leaks that,  
</span><br>
<span class="quotelev1">&gt; when enabled, shows a warning in ompi_mpi_finalize() if there is  
</span><br>
<span class="quotelev1">&gt; still memory allocated by MPI_ALLOC_MEM that was not freed by  
</span><br>
<span class="quotelev1">&gt; MPI_FREE_MEM (this MCA parameter will parallel the already-existing  
</span><br>
<span class="quotelev1">&gt; mpi_show_handle_leaks MCA param which displays warnings if the app  
</span><br>
<span class="quotelev1">&gt; creates MPI objects but does not free them).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My points:
</span><br>
<span class="quotelev1">&gt; - leaked MPI_ALLOC_MEM memory should be reported by the MPI layer,  
</span><br>
<span class="quotelev1">&gt; not a BTL or mpool
</span><br>
<span class="quotelev1">&gt; - failing to ibv_dealloc_pd() during MPI_FINALIZE should only trigger  
</span><br>
<span class="quotelev1">&gt; a warning if the user wants to see it
</span><br>
<span class="quotelev1">&gt; - failing to ibv_dealloc_pd() during an HCA restart or checkpoint  
</span><br>
<span class="quotelev1">&gt; should gracefully fail upwards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Comments?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
Agree.
<br>
<p>In addition I will add code that will flush all user data from mpool and 
<br>
will allow normal IB finalization.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1941.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15492"</a>
<li><strong>Previous message:</strong> <a href="1939.php">Bert Wesarg: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15492"</a>
<li><strong>In reply to:</strong> <a href="1938.php">Jeff Squyres: "[OMPI devel] problems with openib finalize"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1974.php">Pavel Shamis (Pasha): "Re: [OMPI devel] problems with openib finalize"</a>
<li><strong>Reply:</strong> <a href="1974.php">Pavel Shamis (Pasha): "Re: [OMPI devel] problems with openib finalize"</a>
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
