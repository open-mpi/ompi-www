<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec 11 14:54:01 2006" -->
<!-- isoreceived="20061211195401" -->
<!-- sent="Mon, 11 Dec 2006 14:52:40 -0500" -->
<!-- isosent="20061211195240" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpool_gm_module error" -->
<!-- id="AB65CCE1-504E-42E5-9472-8C34A903AC9F_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0ae001c71d5c$de8ce1c0$58c31fac_at_bart" -->
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
<strong>Date:</strong> 2006-12-11 14:52:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2341.php">Gleb Natapov: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Previous message:</strong> <a href="2339.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>In reply to:</strong> <a href="2339.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2341.php">Gleb Natapov: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Reply:</strong> <a href="2341.php">Gleb Natapov: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 11, 2006, at 2:45 PM, Reese Faucette wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Also I have no idea what the memory window question is, i will
</span><br>
<span class="quotelev2">&gt;&gt; look it up on google.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; aon075:~ root# dmesg | grep GM
</span><br>
<span class="quotelev2">&gt;&gt; GM: gm_register_memory will be able to lock 96000 pages (375 MBytes)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This just answered it - there is 375MB available for GM to  
</span><br>
<span class="quotelev1">&gt; register, which
</span><br>
<span class="quotelev1">&gt; is the IOMMU window size available to the GM driver.  This is quite  
</span><br>
<span class="quotelev1">&gt; small,
</span><br>
<span class="quotelev1">&gt; and it would be very helpful if this could be increased.  helpful  
</span><br>
<span class="quotelev1">&gt; == much
</span><br>
<span class="quotelev1">&gt; better performance for your jobs.
</span><br>
Always a plus
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's possible that OMPI is not managing registered space well, as is
</span><br>
<span class="quotelev1">&gt; required when the aggregate registered memory needed by a job is  
</span><br>
<span class="quotelev1">&gt; larger than
</span><br>
<span class="quotelev1">&gt; the memory available to be registered.  I do some research locally  
</span><br>
<span class="quotelev1">&gt; into
</span><br>
<span class="quotelev1">&gt; OMPIs management of registered memory when using GM.  If it comes  
</span><br>
<span class="quotelev1">&gt; to it,
</span><br>
<span class="quotelev1">&gt; would you be willing to run an OMPI with some debug statements in  
</span><br>
<span class="quotelev1">&gt; it for me?
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
Sure i can run them.
<br>
<p><span class="quotelev1">&gt; -reese
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="2341.php">Gleb Natapov: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Previous message:</strong> <a href="2339.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>In reply to:</strong> <a href="2339.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2341.php">Gleb Natapov: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Reply:</strong> <a href="2341.php">Gleb Natapov: "Re: [OMPI users] mpool_gm_module error"</a>
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
