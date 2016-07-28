<?
$subject_val = "Re: [OMPI users] Forcing TCP btl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 19 00:52:10 2016" -->
<!-- isoreceived="20160719045210" -->
<!-- sent="Mon, 18 Jul 2016 22:52:05 -0600" -->
<!-- isosent="20160719045205" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Forcing TCP btl" -->
<!-- id="5DB9A43B-8B8B-4CF8-96C7-A2A43C561ED2_at_me.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+ssbKXiW5x9Noq+X+1GPTmajOqF4+uTZHSGVLB-p1Co=DF=nw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Forcing TCP btl<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-19 00:52:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29684.php">Saliya Ekanayake: "Re: [OMPI users] Forcing TCP btl"</a>
<li><strong>Previous message:</strong> <a href="29682.php">Saliya Ekanayake: "[OMPI users] Forcing TCP btl"</a>
<li><strong>In reply to:</strong> <a href="29682.php">Saliya Ekanayake: "[OMPI users] Forcing TCP btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29684.php">Saliya Ekanayake: "Re: [OMPI users] Forcing TCP btl"</a>
<li><strong>Reply:</strong> <a href="29684.php">Saliya Ekanayake: "Re: [OMPI users] Forcing TCP btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You probably will also want to run with -mca pml ob1 to make sure mxm is not in use. The combination should be sufficient to force tcp usage.
<br>
<p>-Nathan
<br>
<p><span class="quotelev1">&gt; On Jul 18, 2016, at 10:50 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I read in a previous thread (<a href="https://www.open-mpi.org/community/lists/users/2014/05/24475.php">https://www.open-mpi.org/community/lists/users/2014/05/24475.php</a>) that Jeff mentions it's possible for OpenMPI to pick up the openib transport if tcp is not requested explicitly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, does that mean if I do,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --mca btl ^openib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that it's still possible for OpenMPI to use Infiniband and not TCP? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a way to guarantee that a test is using TCP, but not IB?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; saliya 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake
</span><br>
<span class="quotelev1">&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev1">&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev1">&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29682.php">http://www.open-mpi.org/community/lists/users/2016/07/29682.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29684.php">Saliya Ekanayake: "Re: [OMPI users] Forcing TCP btl"</a>
<li><strong>Previous message:</strong> <a href="29682.php">Saliya Ekanayake: "[OMPI users] Forcing TCP btl"</a>
<li><strong>In reply to:</strong> <a href="29682.php">Saliya Ekanayake: "[OMPI users] Forcing TCP btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29684.php">Saliya Ekanayake: "Re: [OMPI users] Forcing TCP btl"</a>
<li><strong>Reply:</strong> <a href="29684.php">Saliya Ekanayake: "Re: [OMPI users] Forcing TCP btl"</a>
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
