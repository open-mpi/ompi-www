<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec 11 14:45:20 2006" -->
<!-- isoreceived="20061211194520" -->
<!-- sent="Mon, 11 Dec 2006 11:45:10 -0800" -->
<!-- isosent="20061211194510" -->
<!-- name="Reese Faucette" -->
<!-- email="reese_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpool_gm_module error" -->
<!-- id="0ae001c71d5c$de8ce1c0$58c31fac_at_bart" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="79516035-0D83-47F4-B823-87A90467998D_at_umich.edu" -->
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
<strong>Date:</strong> 2006-12-11 14:45:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2340.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Previous message:</strong> <a href="2338.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>In reply to:</strong> <a href="2337.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2340.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Reply:</strong> <a href="2340.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Also I have no idea what the memory window question is, i will
</span><br>
<span class="quotelev1">&gt; look it up on google.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; aon075:~ root# dmesg | grep GM
</span><br>
<span class="quotelev1">&gt; GM: gm_register_memory will be able to lock 96000 pages (375 MBytes)
</span><br>
<p>This just answered it - there is 375MB available for GM to register, which 
<br>
is the IOMMU window size available to the GM driver.  This is quite small, 
<br>
and it would be very helpful if this could be increased.  helpful == much 
<br>
better performance for your jobs.
<br>
<p>It's possible that OMPI is not managing registered space well, as is 
<br>
required when the aggregate registered memory needed by a job is larger than 
<br>
the memory available to be registered.  I do some research locally into 
<br>
OMPIs management of registered memory when using GM.  If it comes to it, 
<br>
would you be willing to run an OMPI with some debug statements in it for me?
<br>
thanks,
<br>
-reese
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2340.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Previous message:</strong> <a href="2338.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>In reply to:</strong> <a href="2337.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2340.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Reply:</strong> <a href="2340.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
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
