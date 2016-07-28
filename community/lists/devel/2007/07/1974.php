<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 23 12:48:20 2007" -->
<!-- isoreceived="20070723164820" -->
<!-- sent="Mon, 23 Jul 2007 19:49:43 +0300" -->
<!-- isosent="20070723164943" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] problems with openib finalize" -->
<!-- id="46A4DC27.3090504_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="469F56D1.4020304_at_dev.mellanox.co.il" -->
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
<strong>Date:</strong> 2007-07-23 12:49:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1975.php">Bill McMillan: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<li><strong>Previous message:</strong> <a href="1973.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>In reply to:</strong> <a href="1940.php">Pavel Shamis (Pasha): "Re: [OMPI devel] problems with openib finalize"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just committed r15557 &lt;/trac/ompi/changeset/15557&gt; that adds finalize 
<br>
flow to mpool. So now openib should be able to release
<br>
all resources in normal way.
<br>
Pasha
<br>
<p><p>Pavel Shamis (Pasha) wrote:
<br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Background: Pasha added a call in the openib BTL finalize function  
</span><br>
<span class="quotelev2">&gt;&gt; that will only succeed if all registered memory has been released  
</span><br>
<span class="quotelev2">&gt;&gt; (ibv_dealloc_pd()).  Since the test app didn't call MPI_FREE_MEM,  
</span><br>
<span class="quotelev2">&gt;&gt; there was some memory that was still registered, and therefore the  
</span><br>
<span class="quotelev2">&gt;&gt; call in finalize failed.  We treated this as a fatal error.  Last  
</span><br>
<span class="quotelev2">&gt;&gt; night's MTT runs turned up several apps that exhibited this fatal error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While we're examining this problem, Pasha has removed the call to  
</span><br>
<span class="quotelev2">&gt;&gt; ibv_dealloc_pd() in the trunk openib BTL finalize.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I examined 1 of the tests that was failing last night in MTT:  
</span><br>
<span class="quotelev2">&gt;&gt; onesided/t.f90.  This test has an MPI_ALLOC_MEM with no corresponding  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_FREE_MEM.  To investigate this problem, I restored the call to  
</span><br>
<span class="quotelev2">&gt;&gt; ibv_dealloc_pd() and re-ran the t.f90 test -- the problem still  
</span><br>
<span class="quotelev2">&gt;&gt; occurs.  Good.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, once I got the right MPI_FREE_MEM call in t.f90, the test  
</span><br>
<span class="quotelev2">&gt;&gt; started passing.  I.e., ibv_dealloc_pd(hca-&gt;ib_pd) succeeds because  
</span><br>
<span class="quotelev2">&gt;&gt; all registered memory has been released.  Hence, the test itself was  
</span><br>
<span class="quotelev2">&gt;&gt; faulty.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, I don't think we should *error* if we fail to ibv_dealloc_pd 
</span><br>
<span class="quotelev2">&gt;&gt; (hca-&gt;ib_pd); it's a user error, but it's not catastrophic unless  
</span><br>
<span class="quotelev2">&gt;&gt; we're trying to do an HCA restart scenario.  Specifically: during a  
</span><br>
<span class="quotelev2">&gt;&gt; normal MPI_FINALIZE, who cares?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think we should do the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. If we're not doing an HCA restart/checkpoint and we fail to  
</span><br>
<span class="quotelev2">&gt;&gt; ibv_dealloc_pd(), just move on (i.e., it's not a warning/error unless  
</span><br>
<span class="quotelev2">&gt;&gt; we *want* a warning, such as if an MCA parameter  
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_warn_if_finalize_fail is enabled, or somesuch).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. If we *are* doing an HCA restart/checkpoint and ibv_dealloc_pd()  
</span><br>
<span class="quotelev2">&gt;&gt; fails, then we have to gracefully fail to notify upper layers that  
</span><br>
<span class="quotelev2">&gt;&gt; Bad Things happened (I suspect that we need mpool finalize  
</span><br>
<span class="quotelev2">&gt;&gt; implemented to properly implement checkpointing for RDMA networks).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. Add a new MCA parameter named mpi_show_mpi_alloc_mem_leaks that,  
</span><br>
<span class="quotelev2">&gt;&gt; when enabled, shows a warning in ompi_mpi_finalize() if there is  
</span><br>
<span class="quotelev2">&gt;&gt; still memory allocated by MPI_ALLOC_MEM that was not freed by  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_FREE_MEM (this MCA parameter will parallel the already-existing  
</span><br>
<span class="quotelev2">&gt;&gt; mpi_show_handle_leaks MCA param which displays warnings if the app  
</span><br>
<span class="quotelev2">&gt;&gt; creates MPI objects but does not free them).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My points:
</span><br>
<span class="quotelev2">&gt;&gt; - leaked MPI_ALLOC_MEM memory should be reported by the MPI layer,  
</span><br>
<span class="quotelev2">&gt;&gt; not a BTL or mpool
</span><br>
<span class="quotelev2">&gt;&gt; - failing to ibv_dealloc_pd() during MPI_FINALIZE should only trigger  
</span><br>
<span class="quotelev2">&gt;&gt; a warning if the user wants to see it
</span><br>
<span class="quotelev2">&gt;&gt; - failing to ibv_dealloc_pd() during an HCA restart or checkpoint  
</span><br>
<span class="quotelev2">&gt;&gt; should gracefully fail upwards
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Comments?
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Agree.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In addition I will add code that will flush all user data from mpool and 
</span><br>
<span class="quotelev1">&gt; will allow normal IB finalization.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1975.php">Bill McMillan: "Re: [OMPI devel] Fwd: lsf support / farm use models"</a>
<li><strong>Previous message:</strong> <a href="1973.php">Gleb Natapov: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<li><strong>In reply to:</strong> <a href="1940.php">Pavel Shamis (Pasha): "Re: [OMPI devel] problems with openib finalize"</a>
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
