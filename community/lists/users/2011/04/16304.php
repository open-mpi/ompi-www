<?
$subject_val = "Re: [OMPI users] btl_openib_cpc_include rdmacm questions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 21 18:21:41 2011" -->
<!-- isoreceived="20110421222141" -->
<!-- sent="Thu, 21 Apr 2011 18:21:33 -0400" -->
<!-- isosent="20110421222133" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_openib_cpc_include rdmacm questions" -->
<!-- id="C1B81499-8585-4FEE-B94D-A501A85720AA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B297C66-9CCF-4410-865E-65D80B8802B8_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl_openib_cpc_include rdmacm questions<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-21 18:21:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16305.php">Jeff Squyres: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>Previous message:</strong> <a href="16303.php">Ralph Castain: "Re: [OMPI users] Removing Portals BTLs"</a>
<li><strong>In reply to:</strong> <a href="16298.php">Brock Palen: "[OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16308.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Reply:</strong> <a href="16308.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Over IB, I'm not sure there is much of a drawback.  It might be slightly slower to establish QP's, but I don't think that matters much.
<br>
<p>Over iWARP, rdmacm can cause connection storms as you scale to thousands of MPI processes.
<br>
<p><p>On Apr 20, 2011, at 5:03 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; We managed to have another user hit the bug that causes collectives (this time MPI_Bcast() ) to hang on IB that was fixed by setting:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; btl_openib_cpc_include rdmacm
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My question is if we set this to the default on our system with an environment variable does it introduce any performance or other issues we should be aware of?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a reason we should not use rdmacm?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16305.php">Jeff Squyres: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using &quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>Previous message:</strong> <a href="16303.php">Ralph Castain: "Re: [OMPI users] Removing Portals BTLs"</a>
<li><strong>In reply to:</strong> <a href="16298.php">Brock Palen: "[OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16308.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Reply:</strong> <a href="16308.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
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
