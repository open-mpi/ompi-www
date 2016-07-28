<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec 12 15:58:14 2006" -->
<!-- isoreceived="20061212205814" -->
<!-- sent="Tue, 12 Dec 2006 12:58:00 -0800" -->
<!-- isosent="20061212205800" -->
<!-- name="Reese Faucette" -->
<!-- email="reese_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpool_gm_module error" -->
<!-- id="0c4d01c71e30$35c0f4d0$58c31fac_at_bart" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="9918CF2B-69F1-4FB2-92F2-5A5CA495A238_at_umich.edu" -->
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
<strong>From:</strong> Reese Faucette (<em>reese_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-12 15:58:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2353.php">Gleb Natapov: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Previous message:</strong> <a href="2351.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>In reply to:</strong> <a href="2351.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2353.php">Gleb Natapov: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Reply:</strong> <a href="2353.php">Gleb Natapov: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Well I have no luck in finding a way to up the amount the system will
</span><br>
<span class="quotelev1">&gt; allow GM to use.  What is a recommended solution? Is this even a
</span><br>
<span class="quotelev1">&gt; problem in most cases?  Like am i encountering a corner case?
</span><br>
<p>upping the limit was not what i'm suggesting as a fix, just pointing out 
<br>
that it is kind of low and even with a fully working ompi or mpich-gm.  ompi 
<br>
should still work, even if the IOMMU limit is low.
<br>
<p>Since you are running 1 thread per CPU (== 2 total), it is possible (likely) 
<br>
that the 1st thread is grabbing all the available registerable memory, 
<br>
leaving not even enough for the second thread to even start.  I recommend 
<br>
you try the &quot;mpool_rdma_rcache_size_limit&quot; that Gleb mentions - the 
<br>
equivalent setting is used in MPICH-GM in similar situations.  Set this to 
<br>
about 180 MB and run with that.
<br>
<p>Gleb - I assume that when registration needs exceed 
<br>
&quot;mpool_rdma_rcache_size_limit&quot;, that previously registered memory is 
<br>
unregistered much as virtual memory is swapped out?
<br>
<p>regards,
<br>
-reese
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2353.php">Gleb Natapov: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Previous message:</strong> <a href="2351.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>In reply to:</strong> <a href="2351.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2353.php">Gleb Natapov: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Reply:</strong> <a href="2353.php">Gleb Natapov: "Re: [OMPI users] mpool_gm_module error"</a>
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
