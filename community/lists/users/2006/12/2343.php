<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec 11 16:04:44 2006" -->
<!-- isoreceived="20061211210444" -->
<!-- sent="Mon, 11 Dec 2006 13:04:33 -0800" -->
<!-- isosent="20061211210433" -->
<!-- name="Reese Faucette" -->
<!-- email="reese_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpool_gm_module error" -->
<!-- id="0b1501c71d67$f5a35eb0$58c31fac_at_bart" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AAE78145-A84E-45AC-AA59-83C17AD5724B_at_umich.edu" -->
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
<strong>Date:</strong> 2006-12-11 16:04:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2344.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Previous message:</strong> <a href="2342.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>In reply to:</strong> <a href="2342.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2351.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Reply:</strong> <a href="2351.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; GM: gm_register_memory will be able to lock XXX pages (YYY MBytes)
</span><br>
<span class="quotelev1">&gt; Is there a way to tell GM to pull more memory from the system?
</span><br>
<p>GM reserves all IOMMU space that the OS is willing to give it, so what is 
<br>
needed is a way to tell the OS and/or machine to allow a bigger chunk of 
<br>
IOMMU space to be grabbed by GM.  Note that IOMMU space is not the same as 
<br>
the amount of memory a process can used, it is the amount of DMA-able memory 
<br>
that a driver can have &quot;registered&quot; at any one time.  MPI then has to manage 
<br>
this space much like a VMM has to manage physical memory vs. page space.
<br>
-reese
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2344.php">Ralph Castain: "Re: [OMPI users] Pernode request"</a>
<li><strong>Previous message:</strong> <a href="2342.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>In reply to:</strong> <a href="2342.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2351.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Reply:</strong> <a href="2351.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
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
