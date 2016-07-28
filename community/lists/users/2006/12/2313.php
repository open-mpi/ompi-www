<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec  6 14:30:56 2006" -->
<!-- isoreceived="20061206193056" -->
<!-- sent="Wed, 6 Dec 2006 14:29:33 -0500" -->
<!-- isosent="20061206192933" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running with the dr pml." -->
<!-- id="66A04C51-D09D-462F-B7BC-56B704ACC0E3_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BE420EF9-BA12-433D-A295-814261127099_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-12-06 14:29:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2314.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Previous message:</strong> <a href="2312.php">Galen Shipman: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>In reply to:</strong> <a href="2312.php">Galen Shipman: "Re: [OMPI users] running with the dr pml."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2314.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Reply:</strong> <a href="2314.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wonder if we can narrow this down a bit to perhaps a PML protocol
</span><br>
<span class="quotelev1">&gt; issue.
</span><br>
<span class="quotelev1">&gt; Start by disabling RDMA by using:
</span><br>
<span class="quotelev1">&gt; -mca btl_gm_flags 1
</span><br>
<p>This helps some,  I at least now see the start up of HPL, but i never  
<br>
get a single pass,  output ends at:
<br>
<p>- Computational tests pass if scaled residuals are less  
<br>
than           16.0
<br>
<p>On the other-hand,  with OB1  using btl_gm_flags 1  fixed the error  
<br>
problem with OMPI!  Which is a great first step.
<br>
<p>mpirun -np 4 --mca btl_gm_flags 1 ./xhpl
<br>
<p>Allowed HPL to run with no errors.  I verified the performance was  
<br>
better than when ran without gm
<br>
<p>(added --mca btl ^gm )
<br>
<p>So still a problem with DR  which i dont need but im willing to help  
<br>
test it.
<br>
<p>Scott,
<br>
<p>Can we look into why leaving RDMA on if causing a problem?
<br>
<p>Brock
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's see if that helps things out at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Galen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Scott
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
<li><strong>Next message:</strong> <a href="2314.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Previous message:</strong> <a href="2312.php">Galen Shipman: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>In reply to:</strong> <a href="2312.php">Galen Shipman: "Re: [OMPI users] running with the dr pml."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2314.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
<li><strong>Reply:</strong> <a href="2314.php">Scott Atchley: "Re: [OMPI users] running with the dr pml."</a>
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
