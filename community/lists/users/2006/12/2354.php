<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec 12 16:30:38 2006" -->
<!-- isoreceived="20061212213038" -->
<!-- sent="Tue, 12 Dec 2006 16:29:15 -0500" -->
<!-- isosent="20061212212915" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpool_gm_module error" -->
<!-- id="DE128F00-BAD2-4945-8308-AA9BBC183DDE_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061212212427.GA25275_at_minantech.com" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-12 16:29:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2355.php">Michael Alexander: "[OMPI users] CfP Workshops on Virtualization/XEN in HPC Cluster and Grid Computing Environments (XHPC'07, VHPC'07)"</a>
<li><strong>Previous message:</strong> <a href="2353.php">Gleb Natapov: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>In reply to:</strong> <a href="2353.php">Gleb Natapov: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 12, 2006, at 4:24 PM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Dec 12, 2006 at 12:58:00PM -0800, Reese Faucette wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Well I have no luck in finding a way to up the amount the system  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allow GM to use.  What is a recommended solution? Is this even a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem in most cases?  Like am i encountering a corner case?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; upping the limit was not what i'm suggesting as a fix, just  
</span><br>
<span class="quotelev2">&gt;&gt; pointing out
</span><br>
<span class="quotelev2">&gt;&gt; that it is kind of low and even with a fully working ompi or mpich- 
</span><br>
<span class="quotelev2">&gt;&gt; gm.  ompi
</span><br>
<span class="quotelev2">&gt;&gt; should still work, even if the IOMMU limit is low.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Since you are running 1 thread per CPU (== 2 total), it is  
</span><br>
<span class="quotelev2">&gt;&gt; possible (likely)
</span><br>
<span class="quotelev2">&gt;&gt; that the 1st thread is grabbing all the available registerable  
</span><br>
<span class="quotelev2">&gt;&gt; memory,
</span><br>
<span class="quotelev2">&gt;&gt; leaving not even enough for the second thread to even start.  I  
</span><br>
<span class="quotelev2">&gt;&gt; recommend
</span><br>
<span class="quotelev2">&gt;&gt; you try the &quot;mpool_rdma_rcache_size_limit&quot; that Gleb mentions - the
</span><br>
<span class="quotelev2">&gt;&gt; equivalent setting is used in MPICH-GM in similar situations.  Set  
</span><br>
<span class="quotelev2">&gt;&gt; this to
</span><br>
<span class="quotelev2">&gt;&gt; about 180 MB and run with that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gleb - I assume that when registration needs exceed
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpool_rdma_rcache_size_limit&quot;, that previously registered memory is
</span><br>
<span class="quotelev2">&gt;&gt; unregistered much as virtual memory is swapped out?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; If previously registered memory is in use than registration returns
</span><br>
<span class="quotelev1">&gt; error to upper layer and operation is retried late. Otherwise  
</span><br>
<span class="quotelev1">&gt; unused memory
</span><br>
<span class="quotelev1">&gt; is unregistered. The code for mpool_rdma_rcache_size_limit is not on
</span><br>
<span class="quotelev1">&gt; trunk yet. It is on tmp branch /tmp/gleb-mpool, I don't know if / 
</span><br>
<span class="quotelev1">&gt; tmp is
</span><br>
<span class="quotelev1">&gt; open to everyone. If not I can send the patch.
</span><br>
<p>If you could mail me the patch ill try it out.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2355.php">Michael Alexander: "[OMPI users] CfP Workshops on Virtualization/XEN in HPC Cluster and Grid Computing Environments (XHPC'07, VHPC'07)"</a>
<li><strong>Previous message:</strong> <a href="2353.php">Gleb Natapov: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>In reply to:</strong> <a href="2353.php">Gleb Natapov: "Re: [OMPI users] mpool_gm_module error"</a>
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
