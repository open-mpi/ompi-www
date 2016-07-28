<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 20 10:05:27 2006" -->
<!-- isoreceived="20060720140527" -->
<!-- sent="Thu, 20 Jul 2006 10:04:23 -0400" -->
<!-- isosent="20060720140423" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI applicability" -->
<!-- id="591AC401-CCDC-4401-991B-DB8582CDE3D0_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BA623CCCA597B14A9BDC3BB2894637237A0B99_at_NJ-E2K3-MBOX01.cnet.cnwk" -->
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
<strong>Date:</strong> 2006-07-20 10:04:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1670.php">Jeff Squyres: "Re: [OMPI users] MPI applicability"</a>
<li><strong>Previous message:</strong> <a href="1668.php">Vladimir Sipos: "[OMPI users] MPI applicability"</a>
<li><strong>In reply to:</strong> <a href="1668.php">Vladimir Sipos: "[OMPI users] MPI applicability"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1670.php">Jeff Squyres: "Re: [OMPI users] MPI applicability"</a>
<li><strong>Reply:</strong> <a href="1670.php">Jeff Squyres: "Re: [OMPI users] MPI applicability"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Its doable, the scaling will not as good, because a network is a  
<br>
network.  If you are using just regular 100Mbit,  you will not scale  
<br>
as far as really good 1gig ethernet, but we are still talking about  
<br>
tcp which incurs a penalty over networks like infiniband and myrinet.
<br>
Tcp is the largest issue, its going to be really application  
<br>
dependent you are right.
<br>
On another note though many of the older cluster that are now out of  
<br>
service used just 100Mbit ethernet and worked.
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Jul 20, 2006, at 9:27 AM, Vladimir Sipos wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is MPI paradigm applicable to the cluster of regular networked  
</span><br>
<span class="quotelev1">&gt; machines.
</span><br>
<span class="quotelev1">&gt; That is, does the cost of network IO offset benefits of  
</span><br>
<span class="quotelev1">&gt; parallelization?
</span><br>
<span class="quotelev1">&gt; My guess is that this really depends on the application itself,  
</span><br>
<span class="quotelev1">&gt; however,
</span><br>
<span class="quotelev1">&gt; I'm wondering if you guys know of any success stories which involve  
</span><br>
<span class="quotelev1">&gt; MPI
</span><br>
<span class="quotelev1">&gt; running on a set of networked machines (not beowulf cluster or any  
</span><br>
<span class="quotelev1">&gt; SC).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Vladimir Sipos
</span><br>
<span class="quotelev1">&gt; Software Engineer
</span><br>
<span class="quotelev1">&gt; Advertising Technology
</span><br>
<span class="quotelev1">&gt; CNET Networks, Inc.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1670.php">Jeff Squyres: "Re: [OMPI users] MPI applicability"</a>
<li><strong>Previous message:</strong> <a href="1668.php">Vladimir Sipos: "[OMPI users] MPI applicability"</a>
<li><strong>In reply to:</strong> <a href="1668.php">Vladimir Sipos: "[OMPI users] MPI applicability"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1670.php">Jeff Squyres: "Re: [OMPI users] MPI applicability"</a>
<li><strong>Reply:</strong> <a href="1670.php">Jeff Squyres: "Re: [OMPI users] MPI applicability"</a>
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
