<?
$subject_val = "Re: [OMPI users] 1.10.1 appears to break mpi4py";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  9 19:20:55 2015" -->
<!-- isoreceived="20151110002055" -->
<!-- sent="Tue, 10 Nov 2015 09:20:51 +0900" -->
<!-- isosent="20151110002051" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.10.1 appears to break mpi4py" -->
<!-- id="56413863.2090107_at_rist.or.jp" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5641300C.7000403_at_rist.or.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.10.1 appears to break mpi4py<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-09 19:20:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28031.php">Lev Givon: "Re: [OMPI users] 1.10.1 appears to break mpi4py"</a>
<li><strong>Previous message:</strong> <a href="28029.php">Gilles Gouaillardet: "Re: [OMPI users] 1.10.1 appears to break mpi4py"</a>
<li><strong>In reply to:</strong> <a href="28029.php">Gilles Gouaillardet: "Re: [OMPI users] 1.10.1 appears to break mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28031.php">Lev Givon: "Re: [OMPI users] 1.10.1 appears to break mpi4py"</a>
<li><strong>Reply:</strong> <a href="28031.php">Lev Givon: "Re: [OMPI users] 1.10.1 appears to break mpi4py"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Orion and Lev,
<br>
<p>here is the minimal patch that makes mpi4py tests happy again
<br>
<p>there might not be a v1.10.2, so you might have to manually apply that 
<br>
patch until v2.0.0
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 11/10/2015 8:45 AM, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Orion and Lev,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i will have a look at this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it seems we backported half of some changes and zero size messages are 
</span><br>
<span class="quotelev1">&gt; no more handled correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/10/2015 8:43 AM, Lev Givon wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Received from Orion Poplawski on Mon, Nov 09, 2015 at 06:36:05PM EST:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We're seeing test failures after bumping to 1.10.1 in Fedora (see 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; below).  Is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anyone else seeing this?  Any suggestions for debugging?
</span><br>
<span class="quotelev2">&gt;&gt; I see similar errors - you might want to mention it on the
</span><br>
<span class="quotelev2">&gt;&gt; mpi4py_at_[hidden] mailing list.
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
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/28029.php">http://www.open-mpi.org/community/lists/users/2015/11/28029.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28030/nbc_copy.patch">nbc_copy.patch</a>
</ul>
<!-- attachment="nbc_copy.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28031.php">Lev Givon: "Re: [OMPI users] 1.10.1 appears to break mpi4py"</a>
<li><strong>Previous message:</strong> <a href="28029.php">Gilles Gouaillardet: "Re: [OMPI users] 1.10.1 appears to break mpi4py"</a>
<li><strong>In reply to:</strong> <a href="28029.php">Gilles Gouaillardet: "Re: [OMPI users] 1.10.1 appears to break mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28031.php">Lev Givon: "Re: [OMPI users] 1.10.1 appears to break mpi4py"</a>
<li><strong>Reply:</strong> <a href="28031.php">Lev Givon: "Re: [OMPI users] 1.10.1 appears to break mpi4py"</a>
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
