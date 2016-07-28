<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec  6 13:11:44 2006" -->
<!-- isoreceived="20061206181144" -->
<!-- sent="Wed, 6 Dec 2006 11:11:21 -0700" -->
<!-- isosent="20061206181121" -->
<!-- name="Galen Shipman" -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running with the dr pml." -->
<!-- id="BE420EF9-BA12-433D-A295-814261127099_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B0AC932D-D87A-4ABC-AC18-76DDD8E01915_at_myri.com" -->
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
<strong>From:</strong> Galen Shipman (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-06 13:11:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2313.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Previous message:</strong> <a href="2311.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>In reply to:</strong> <a href="2306.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2313.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Reply:</strong> <a href="2313.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem is that, when running HPL, he sees failed residuals. When
</span><br>
<span class="quotelev1">&gt; running HPL under MPICH-GM, he does not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried running HPCC (HPL plus other benchmarks) using OMPI with
</span><br>
<span class="quotelev1">&gt; GM on 32-bit Xeons and 64-bit Opterons. I do not see any failed
</span><br>
<span class="quotelev1">&gt; residuals. I am trying to get access to a couple of OSX machines to
</span><br>
<span class="quotelev1">&gt; replicate Brock's setup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I wonder if we can narrow this down a bit to perhaps a PML protocol  
<br>
issue.
<br>
Start by disabling RDMA by using:
<br>
-mca btl_gm_flags 1
<br>
<p>Let's see if that helps things out at all.
<br>
<p>- Galen
<br>
<p><p><span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2313.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Previous message:</strong> <a href="2311.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>In reply to:</strong> <a href="2306.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2313.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Reply:</strong> <a href="2313.php">Brock Palen: "Re: [OMPI users] running with the dr pml."</a>
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
