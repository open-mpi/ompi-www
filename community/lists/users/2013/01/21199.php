<?
$subject_val = "Re: [OMPI users] MXM vs OpenIB";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 22 16:58:37 2013" -->
<!-- isoreceived="20130122215837" -->
<!-- sent="Tue, 22 Jan 2013 16:58:31 -0500" -->
<!-- isosent="20130122215831" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MXM vs OpenIB" -->
<!-- id="BDA9D249-4835-4561-8685-D3A79331E9B6_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="47219F15-4ACC-47DD-AF99-71492F4217FD_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MXM vs OpenIB<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-22 16:58:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21200.php">Brock Palen: "Re: [OMPI users] MXM vs OpenIB"</a>
<li><strong>Previous message:</strong> <a href="21198.php">Brock Palen: "Re: [OMPI users] XRC vs SRQ vs PRQ"</a>
<li><strong>In reply to:</strong> <a href="21197.php">Brock Palen: "Re: [OMPI users] MXM vs OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21200.php">Brock Palen: "Re: [OMPI users] MXM vs OpenIB"</a>
<li><strong>Reply:</strong> <a href="21200.php">Brock Palen: "Re: [OMPI users] MXM vs OpenIB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our jobs range from 4 cores to 1000 cores, looking at the FAQ page it states that MXM was used in the past only for &gt;128 ranks, but is in 1.6 used for rank counts of any size.
</span><br>
<p><p>This is reasonable threshold if you use openib btl with RC (default). Since XRC provides better scalability, you may move the threshold up. Bottom line you have to experiment and see what is good for you :)
<br>
<p>-Pasha
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; CAEN Advanced Computing
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
<span class="quotelev1">&gt; On Jan 22, 2013, at 2:58 PM, Shamis, Pavel wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We just learned about MXM, and given most our cards are Mellonox ConnectX cards (though not all, have have islands of previous to ConnectX and Qlogic supported in the same OpenMPI environment),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will MXM correctly fail though to PSM if on qlogic gear and fail though to OpenIB if on previous to connectX cards?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do you want to run MXM and PSM in the same MPI session ? You can't do it. MXM and PSM use different network protocols.
</span><br>
<span class="quotelev2">&gt;&gt; If you want to use MXM in your MPI job, all nodes should be configured to use MXM.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On the other hand, OpenIB btl should support mixed environments out of the box.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Pasha
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
<li><strong>Next message:</strong> <a href="21200.php">Brock Palen: "Re: [OMPI users] MXM vs OpenIB"</a>
<li><strong>Previous message:</strong> <a href="21198.php">Brock Palen: "Re: [OMPI users] XRC vs SRQ vs PRQ"</a>
<li><strong>In reply to:</strong> <a href="21197.php">Brock Palen: "Re: [OMPI users] MXM vs OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21200.php">Brock Palen: "Re: [OMPI users] MXM vs OpenIB"</a>
<li><strong>Reply:</strong> <a href="21200.php">Brock Palen: "Re: [OMPI users] MXM vs OpenIB"</a>
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
