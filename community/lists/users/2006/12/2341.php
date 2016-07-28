<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec 11 15:23:08 2006" -->
<!-- isoreceived="20061211202308" -->
<!-- sent="Mon, 11 Dec 2006 22:22:57 +0200" -->
<!-- isosent="20061211202257" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpool_gm_module error" -->
<!-- id="20061211202257.GA2598_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AB65CCE1-504E-42E5-9472-8C34A903AC9F_at_umich.edu" -->
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
<strong>Date:</strong> 2006-12-11 15:22:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2342.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Previous message:</strong> <a href="2340.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>In reply to:</strong> <a href="2340.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2342.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Dec 11, 2006 at 02:52:40PM -0500, Brock Palen wrote:
<br>
<span class="quotelev1">&gt; On Dec 11, 2006, at 2:45 PM, Reese Faucette wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Also I have no idea what the memory window question is, i will
</span><br>
<span class="quotelev3">&gt; &gt;&gt; look it up on google.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; aon075:~ root# dmesg | grep GM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; GM: gm_register_memory will be able to lock 96000 pages (375 MBytes)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This just answered it - there is 375MB available for GM to  
</span><br>
<span class="quotelev2">&gt; &gt; register, which
</span><br>
<span class="quotelev2">&gt; &gt; is the IOMMU window size available to the GM driver.  This is quite  
</span><br>
<span class="quotelev2">&gt; &gt; small,
</span><br>
<span class="quotelev2">&gt; &gt; and it would be very helpful if this could be increased.  helpful  
</span><br>
<span class="quotelev2">&gt; &gt; == much
</span><br>
<span class="quotelev2">&gt; &gt; better performance for your jobs.
</span><br>
<span class="quotelev1">&gt; Always a plus
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It's possible that OMPI is not managing registered space well, as is
</span><br>
<span class="quotelev2">&gt; &gt; required when the aggregate registered memory needed by a job is  
</span><br>
<span class="quotelev2">&gt; &gt; larger than
</span><br>
<span class="quotelev2">&gt; &gt; the memory available to be registered.  I do some research locally  
</span><br>
<span class="quotelev2">&gt; &gt; into
</span><br>
<span class="quotelev2">&gt; &gt; OMPIs management of registered memory when using GM.  If it comes  
</span><br>
<span class="quotelev2">&gt; &gt; to it,
</span><br>
<span class="quotelev2">&gt; &gt; would you be willing to run an OMPI with some debug statements in  
</span><br>
<span class="quotelev2">&gt; &gt; it for me?
</span><br>
<span class="quotelev2">&gt; &gt; thanks,
</span><br>
<span class="quotelev1">&gt; Sure i can run them.
</span><br>
I added to OMPI possibility to limit the amount of registered memory.
<br>
There is a new parameter mpool_rdma_rcache_size_limit that controls how
<br>
much memory can be pinned at once. But this work is not yet on the trunk.
<br>
If you can checkout /tmp/gleb-mpool branch and test it this would be
<br>
great.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -reese
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2342.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Previous message:</strong> <a href="2340.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>In reply to:</strong> <a href="2340.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2342.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
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
