<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec 11 15:49:02 2006" -->
<!-- isoreceived="20061211204902" -->
<!-- sent="Mon, 11 Dec 2006 15:47:39 -0500" -->
<!-- isosent="20061211204739" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpool_gm_module error" -->
<!-- id="AAE78145-A84E-45AC-AA59-83C17AD5724B_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="0ad001c71d59$5f40b700$58c31fac_at_bart" -->
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
<strong>Date:</strong> 2006-12-11 15:47:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2343.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Previous message:</strong> <a href="2341.php">Gleb Natapov: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>In reply to:</strong> <a href="2336.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2343.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Reply:</strong> <a href="2343.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 11, 2006, at 2:20 PM, Reese Faucette wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I have tried moving around machines that the run is done on to the
</span><br>
<span class="quotelev2">&gt;&gt; same result in multiple places.
</span><br>
<span class="quotelev2">&gt;&gt; The error is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [aon049.engin.umich.edu:21866] [mpool_gm_module.c:100] error(8)
</span><br>
<span class="quotelev2">&gt;&gt; registering gm memory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is on a PPC-based OSX system?  How many MPI processes per node  
</span><br>
<span class="quotelev1">&gt; are you
</span><br>
<span class="quotelev1">&gt; starting?  And I assume this is a pretty maximallly sized HPL run  
</span><br>
<span class="quotelev1">&gt; for the
</span><br>
<span class="quotelev1">&gt; nodes' memory?  And this system has an IOMMU, yes?  Do you know how  
</span><br>
<span class="quotelev1">&gt; big its
</span><br>
<span class="quotelev1">&gt; memory window is?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you send me the output of &quot;dmesg | grep GM&quot; after loading  
</span><br>
<span class="quotelev1">&gt; GM?  We're
</span><br>
<span class="quotelev1">&gt; looking for a line of the form:
</span><br>
<span class="quotelev1">&gt; GM: gm_register_memory will be able to lock XXX pages (YYY MBytes)
</span><br>
Is there a way to tell GM to pull more memory from the system?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; -r
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
<li><strong>Next message:</strong> <a href="2343.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Previous message:</strong> <a href="2341.php">Gleb Natapov: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>In reply to:</strong> <a href="2336.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2343.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Reply:</strong> <a href="2343.php">Reese Faucette: "Re: [OMPI users] mpool_gm_module error"</a>
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
