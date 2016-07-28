<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec 11 14:20:22 2006" -->
<!-- isoreceived="20061211192022" -->
<!-- sent="Mon, 11 Dec 2006 11:20:08 -0800" -->
<!-- isosent="20061211192008" -->
<!-- name="Reese Faucette" -->
<!-- email="reese_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpool_gm_module error" -->
<!-- id="0ad001c71d59$5f40b700$58c31fac_at_bart" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51F0595F-AF96-4F38-AFD4-5158D8CC3909_at_umich.edu" -->
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
<strong>Date:</strong> 2006-12-11 14:20:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2337.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Previous message:</strong> <a href="2335.php">Brock Palen: "[OMPI users] mpool_gm_module error"</a>
<li><strong>In reply to:</strong> <a href="2335.php">Brock Palen: "[OMPI users] mpool_gm_module error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2337.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Reply:</strong> <a href="2337.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Reply:</strong> <a href="2342.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; I have tried moving around machines that the run is done on to the
</span><br>
<span class="quotelev1">&gt; same result in multiple places.
</span><br>
<span class="quotelev1">&gt; The error is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [aon049.engin.umich.edu:21866] [mpool_gm_module.c:100] error(8)
</span><br>
<span class="quotelev1">&gt; registering gm memory
</span><br>
<p>This is on a PPC-based OSX system?  How many MPI processes per node are you 
<br>
starting?  And I assume this is a pretty maximallly sized HPL run for the 
<br>
nodes' memory?  And this system has an IOMMU, yes?  Do you know how big its 
<br>
memory window is?
<br>
<p>Could you send me the output of &quot;dmesg | grep GM&quot; after loading GM?  We're 
<br>
looking for a line of the form:
<br>
GM: gm_register_memory will be able to lock XXX pages (YYY MBytes)
<br>
<p>thanks,
<br>
-r
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2337.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Previous message:</strong> <a href="2335.php">Brock Palen: "[OMPI users] mpool_gm_module error"</a>
<li><strong>In reply to:</strong> <a href="2335.php">Brock Palen: "[OMPI users] mpool_gm_module error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2337.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Reply:</strong> <a href="2337.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
<li><strong>Reply:</strong> <a href="2342.php">Brock Palen: "Re: [OMPI users] mpool_gm_module error"</a>
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
