<?
$subject_val = "Re: [OMPI users] readv failed How to debug?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 16 13:19:58 2016" -->
<!-- isoreceived="20160216181958" -->
<!-- sent="Tue, 16 Feb 2016 18:19:56 +0000" -->
<!-- isosent="20160216181956" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] readv failed How to debug?" -->
<!-- id="etPan.56c3684a.335eb236.cef3_at_JSQUYRES-M-H05C" -->
<!-- charset="utf-8" -->
<!-- inreplyto="56C33489.8040800_at_txcorp.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] readv failed How to debug?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-16 13:19:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28543.php">JR Cary: "Re: [OMPI users] readv failed How to debug?"</a>
<li><strong>Previous message:</strong> <a href="28541.php">Eugene Loh: "Re: [OMPI users] difference between OpenMPI - intel MPI -- how to understand where\why"</a>
<li><strong>In reply to:</strong> <a href="28539.php">JR Cary: "Re: [OMPI users] readv failed How to debug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28543.php">JR Cary: "Re: [OMPI users] readv failed How to debug?"</a>
<li><strong>Reply:</strong> <a href="28543.php">JR Cary: "Re: [OMPI users] readv failed How to debug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----Original Message-----
<br>
From:&#194;&#160;JR Cary &lt;cary_at_[hidden]&gt;
<br>
Reply:&#194;&#160;Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Date:&#194;&#160;February 16, 2016 at 9:39:23 AM
<br>
To:&#194;&#160;users_at_[hidden] &lt;users_at_[hidden]&gt;
<br>
Subject:&#194;&#160; Re: [OMPI users] readv failed How to debug?
<br>

<br>
<span class="quotelev1">&gt; Thanks, Gilles,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Yes, this binary was built a few years ago.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; You mention a user error, but do you mean developer error? I.e., it
</span><br>
<span class="quotelev1">&gt; would have to be in the code?
</span><br>

<br>
We can't say for sure, but it is *likely* that this error is in the code itself.
<br>

<br>
<span class="quotelev1">&gt; What does &quot;--mca coll ^tuned&quot; do?
</span><br>

<br>
It turns off the &quot;tuned&quot; collective component and instead uses the &quot;basic&quot; collective component. &#194;&#160;The &quot;basic&quot; component generally has lower performance, but *if* the problem is that the code is using equivalent-but-different datatypes, the problem should go away. &#194;&#160;If the problem is that one of the MPI processes is simply providing an incorrect count, then it's going to fail like this no matter what mpirun CLI options are used.
<br>

<br>
--  
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]  
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28543.php">JR Cary: "Re: [OMPI users] readv failed How to debug?"</a>
<li><strong>Previous message:</strong> <a href="28541.php">Eugene Loh: "Re: [OMPI users] difference between OpenMPI - intel MPI -- how to understand where\why"</a>
<li><strong>In reply to:</strong> <a href="28539.php">JR Cary: "Re: [OMPI users] readv failed How to debug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28543.php">JR Cary: "Re: [OMPI users] readv failed How to debug?"</a>
<li><strong>Reply:</strong> <a href="28543.php">JR Cary: "Re: [OMPI users] readv failed How to debug?"</a>
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
