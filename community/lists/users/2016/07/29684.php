<?
$subject_val = "Re: [OMPI users] Forcing TCP btl";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 19 00:57:26 2016" -->
<!-- isoreceived="20160719045726" -->
<!-- sent="Tue, 19 Jul 2016 00:57:25 -0400" -->
<!-- isosent="20160719045725" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Forcing TCP btl" -->
<!-- id="CA+ssbKWnRXcvf93Dvg06VXH34qiChSfHmE1=4uFs5mvb=OamAA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5DB9A43B-8B8B-4CF8-96C7-A2A43C561ED2_at_me.com" -->
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
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-19 00:57:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29685.php">Gilles Gouaillardet: "Re: [OMPI users] Forcing TCP btl"</a>
<li><strong>Previous message:</strong> <a href="29683.php">Nathan Hjelm: "Re: [OMPI users] Forcing TCP btl"</a>
<li><strong>In reply to:</strong> <a href="29683.php">Nathan Hjelm: "Re: [OMPI users] Forcing TCP btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29685.php">Gilles Gouaillardet: "Re: [OMPI users] Forcing TCP btl"</a>
<li><strong>Reply:</strong> <a href="29685.php">Gilles Gouaillardet: "Re: [OMPI users] Forcing TCP btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, but what's mxm?
<br>
<p>On Tue, Jul 19, 2016 at 12:52 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You probably will also want to run with -mca pml ob1 to make sure mxm is
</span><br>
<span class="quotelev1">&gt; not in use. The combination should be sufficient to force tcp usage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 18, 2016, at 10:50 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I read in a previous thread (
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/community/lists/users/2014/05/24475.php">https://www.open-mpi.org/community/lists/users/2014/05/24475.php</a>) that
</span><br>
<span class="quotelev1">&gt; Jeff mentions it's possible for OpenMPI to pick up the openib transport if
</span><br>
<span class="quotelev1">&gt; tcp is not requested explicitly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So, does that mean if I do,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --mca btl ^openib
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; that it's still possible for OpenMPI to use Infiniband and not TCP?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is there a way to guarantee that a test is using TCP, but not IB?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you,
</span><br>
<span class="quotelev2">&gt; &gt; saliya
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Saliya Ekanayake
</span><br>
<span class="quotelev2">&gt; &gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev2">&gt; &gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev2">&gt; &gt; Indiana University, Bloomington
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29682.php">http://www.open-mpi.org/community/lists/users/2016/07/29682.php</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29683.php">http://www.open-mpi.org/community/lists/users/2016/07/29683.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29684/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29685.php">Gilles Gouaillardet: "Re: [OMPI users] Forcing TCP btl"</a>
<li><strong>Previous message:</strong> <a href="29683.php">Nathan Hjelm: "Re: [OMPI users] Forcing TCP btl"</a>
<li><strong>In reply to:</strong> <a href="29683.php">Nathan Hjelm: "Re: [OMPI users] Forcing TCP btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29685.php">Gilles Gouaillardet: "Re: [OMPI users] Forcing TCP btl"</a>
<li><strong>Reply:</strong> <a href="29685.php">Gilles Gouaillardet: "Re: [OMPI users] Forcing TCP btl"</a>
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
