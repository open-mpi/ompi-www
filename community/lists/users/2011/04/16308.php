<?
$subject_val = "Re: [OMPI users] btl_openib_cpc_include rdmacm questions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 21 18:41:59 2011" -->
<!-- isoreceived="20110421224159" -->
<!-- sent="Thu, 21 Apr 2011 18:41:52 -0400" -->
<!-- isosent="20110421224152" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_openib_cpc_include rdmacm questions" -->
<!-- id="B0015C26-0E36-4826-896B-B9EE7CD7ECFB_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C1B81499-8585-4FEE-B94D-A501A85720AA_at_cisco.com" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-21 18:41:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16309.php">Ralph Castain: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16307.php">Jeff Squyres: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<li><strong>In reply to:</strong> <a href="16304.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16309.php">Ralph Castain: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Reply:</strong> <a href="16309.php">Ralph Castain: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Given that part of our cluster is TCP only, openib wouldn't even startup on those hosts and this would be ignored on hosts with IB adaptors?  
<br>
<p>Just checking thanks!
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Apr 21, 2011, at 6:21 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Over IB, I'm not sure there is much of a drawback.  It might be slightly slower to establish QP's, but I don't think that matters much.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Over iWARP, rdmacm can cause connection storms as you scale to thousands of MPI processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 20, 2011, at 5:03 PM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We managed to have another user hit the bug that causes collectives (this time MPI_Bcast() ) to hang on IB that was fixed by setting:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; btl_openib_cpc_include rdmacm
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My question is if we set this to the default on our system with an environment variable does it introduce any performance or other issues we should be aware of?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a reason we should not use rdmacm?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="16309.php">Ralph Castain: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16307.php">Jeff Squyres: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<li><strong>In reply to:</strong> <a href="16304.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16309.php">Ralph Castain: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Reply:</strong> <a href="16309.php">Ralph Castain: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
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
