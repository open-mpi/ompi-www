<?
$subject_val = "Re: [OMPI users] poor performance using the openib btl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 24 18:40:59 2014" -->
<!-- isoreceived="20140624224059" -->
<!-- sent="Tue, 24 Jun 2014 18:40:59 -0400" -->
<!-- isosent="20140624224059" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] poor performance using the openib btl" -->
<!-- id="53A9FE7B.6000807_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C86C7F6037A63C44BCCD0D77E9D59BFE159F66045E_at_SWEC9985.w-intra.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] poor performance using the openib btl<br>
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-24 18:40:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24699.php">Mike Dubman: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>Previous message:</strong> <a href="24697.php">Fischer, Greg A.: "[OMPI users] poor performance using the openib btl"</a>
<li><strong>In reply to:</strong> <a href="24697.php">Fischer, Greg A.: "[OMPI users] poor performance using the openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24699.php">Mike Dubman: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>Reply:</strong> <a href="24699.php">Mike Dubman: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>Reply:</strong> <a href="24700.php">Fischer, Greg A.: "Re: [OMPI users] poor performance using the openib btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What are your threading options for OpenMPI (when it was built) ?
<br>
<p>I have seen OpenIB BTL completely lock when some level of threading is 
<br>
enabled before.
<br>
<p>Maxime Boissonneault
<br>
<p><p>Le 2014-06-24 18:18, Fischer, Greg A. a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello openmpi-users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A few weeks ago, I posted to the list about difficulties I was having 
</span><br>
<span class="quotelev1">&gt; getting openib to work with Torque (see &quot;openib segfaults with 
</span><br>
<span class="quotelev1">&gt; Torque&quot;, June 6, 2014). The issues were related to Torque imposing 
</span><br>
<span class="quotelev1">&gt; restrictive limits on locked memory, and have since been resolved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, now that I've had some time to test the applications, I'm 
</span><br>
<span class="quotelev1">&gt; seeing abysmal performance over the openib layer. Applications run 
</span><br>
<span class="quotelev1">&gt; with the tcp btl execute about 10x faster than with the openib btl. 
</span><br>
<span class="quotelev1">&gt; Clearly something still isn't quite right.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried running with &quot;-mca btl_openib_verbose 1&quot;, but didn't see 
</span><br>
<span class="quotelev1">&gt; anything resembling a smoking gun. How should I go about determining 
</span><br>
<span class="quotelev1">&gt; the source of the problem? (This uses the same OpenMPI Version 1.8.1 / 
</span><br>
<span class="quotelev1">&gt; SLES11 SP3 / GCC 4.8.3 setup discussed previously.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24697.php">http://www.open-mpi.org/community/lists/users/2014/06/24697.php</a>
</span><br>
<p><p><pre>
-- 
---------------------------------
Maxime Boissonneault
Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
Ph. D. en physique
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24698/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24699.php">Mike Dubman: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>Previous message:</strong> <a href="24697.php">Fischer, Greg A.: "[OMPI users] poor performance using the openib btl"</a>
<li><strong>In reply to:</strong> <a href="24697.php">Fischer, Greg A.: "[OMPI users] poor performance using the openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24699.php">Mike Dubman: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>Reply:</strong> <a href="24699.php">Mike Dubman: "Re: [OMPI users] poor performance using the openib btl"</a>
<li><strong>Reply:</strong> <a href="24700.php">Fischer, Greg A.: "Re: [OMPI users] poor performance using the openib btl"</a>
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
