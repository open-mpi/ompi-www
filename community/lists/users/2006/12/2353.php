<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec 12 16:24:33 2006" -->
<!-- isoreceived="20061212212433" -->
<!-- sent="Tue, 12 Dec 2006 23:24:27 +0200" -->
<!-- isosent="20061212212427" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpool_gm_module error" -->
<!-- id="20061212212427.GA25275_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0c4d01c71e30$35c0f4d0$58c31fac_at_bart" -->
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
<strong>Date:</strong> 2006-12-12 16:24:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2354.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Previous message:</strong> <a href="2352.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>In reply to:</strong> <a href="2352.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2354.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Reply:</strong> <a href="2354.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Dec 12, 2006 at 12:58:00PM -0800, Reese Faucette wrote:
<br>
<span class="quotelev2">&gt; &gt; Well I have no luck in finding a way to up the amount the system will
</span><br>
<span class="quotelev2">&gt; &gt; allow GM to use.  What is a recommended solution? Is this even a
</span><br>
<span class="quotelev2">&gt; &gt; problem in most cases?  Like am i encountering a corner case?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; upping the limit was not what i'm suggesting as a fix, just pointing out 
</span><br>
<span class="quotelev1">&gt; that it is kind of low and even with a fully working ompi or mpich-gm.  ompi 
</span><br>
<span class="quotelev1">&gt; should still work, even if the IOMMU limit is low.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since you are running 1 thread per CPU (== 2 total), it is possible (likely) 
</span><br>
<span class="quotelev1">&gt; that the 1st thread is grabbing all the available registerable memory, 
</span><br>
<span class="quotelev1">&gt; leaving not even enough for the second thread to even start.  I recommend 
</span><br>
<span class="quotelev1">&gt; you try the &quot;mpool_rdma_rcache_size_limit&quot; that Gleb mentions - the 
</span><br>
<span class="quotelev1">&gt; equivalent setting is used in MPICH-GM in similar situations.  Set this to 
</span><br>
<span class="quotelev1">&gt; about 180 MB and run with that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gleb - I assume that when registration needs exceed 
</span><br>
<span class="quotelev1">&gt; &quot;mpool_rdma_rcache_size_limit&quot;, that previously registered memory is 
</span><br>
<span class="quotelev1">&gt; unregistered much as virtual memory is swapped out?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
If previously registered memory is in use than registration returns
<br>
error to upper layer and operation is retried late. Otherwise unused memory
<br>
is unregistered. The code for mpool_rdma_rcache_size_limit is not on
<br>
trunk yet. It is on tmp branch /tmp/gleb-mpool, I don't know if /tmp is
<br>
open to everyone. If not I can send the patch.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2354.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Previous message:</strong> <a href="2352.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>In reply to:</strong> <a href="2352.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2354.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Reply:</strong> <a href="2354.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
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
