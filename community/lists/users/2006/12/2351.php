<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Dec 12 15:03:12 2006" -->
<!-- isoreceived="20061212200312" -->
<!-- sent="Tue, 12 Dec 2006 15:02:09 -0500" -->
<!-- isosent="20061212200209" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpool_gm_module error" -->
<!-- id="9918CF2B-69F1-4FB2-92F2-5A5CA495A238_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0b1501c71d67$f5a35eb0$58c31fac_at_bart" -->
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
<strong>Date:</strong> 2006-12-12 15:02:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2352.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Previous message:</strong> <a href="2350.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>In reply to:</strong> <a href="2343.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2352.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Reply:</strong> <a href="2352.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 11, 2006, at 4:04 PM, Reese Faucette wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; GM: gm_register_memory will be able to lock XXX pages (YYY MBytes)
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to tell GM to pull more memory from the system?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; GM reserves all IOMMU space that the OS is willing to give it, so  
</span><br>
<span class="quotelev1">&gt; what is
</span><br>
<span class="quotelev1">&gt; needed is a way to tell the OS and/or machine to allow a bigger  
</span><br>
<span class="quotelev1">&gt; chunk of
</span><br>
<span class="quotelev1">&gt; IOMMU space to be grabbed by GM.  Note that IOMMU space is not the  
</span><br>
<span class="quotelev1">&gt; same as
</span><br>
<span class="quotelev1">&gt; the amount of memory a process can used, it is the amount of DMA- 
</span><br>
<span class="quotelev1">&gt; able memory
</span><br>
<span class="quotelev1">&gt; that a driver can have &quot;registered&quot; at any one time.  MPI then has  
</span><br>
<span class="quotelev1">&gt; to manage
</span><br>
<span class="quotelev1">&gt; this space much like a VMM has to manage physical memory vs. page  
</span><br>
<span class="quotelev1">&gt; space.
</span><br>
<span class="quotelev1">&gt; -reese
</span><br>
Well I have no luck in finding a way to up the amount the system will  
<br>
allow GM to use.  What is a recommended solution? Is this even a  
<br>
problem in most cases?  Like am i encountering a corner case?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="2352.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Previous message:</strong> <a href="2350.php">Maestas, Christopher Daniel: "Re: [OMPI users] Pernode request"</a>
<li><strong>In reply to:</strong> <a href="2343.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2352.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Reply:</strong> <a href="2352.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
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
