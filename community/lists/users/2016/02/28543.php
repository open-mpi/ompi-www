<?
$subject_val = "Re: [OMPI users] readv failed How to debug?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 16 15:35:59 2016" -->
<!-- isoreceived="20160216203559" -->
<!-- sent="Tue, 16 Feb 2016 12:35:55 -0800" -->
<!-- isosent="20160216203555" -->
<!-- name="JR Cary" -->
<!-- email="cary_at_[hidden]" -->
<!-- subject="Re: [OMPI users] readv failed How to debug?" -->
<!-- id="56C3882B.8070000_at_txcorp.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="etPan.56c3684a.335eb236.cef3_at_JSQUYRES-M-H05C" -->
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
<strong>From:</strong> JR Cary (<em>cary_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-16 15:35:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28544.php">Gilles Gouaillardet: "Re: [OMPI users] readv failed How to debug?"</a>
<li><strong>Previous message:</strong> <a href="28542.php">Jeff Squyres (jsquyres): "Re: [OMPI users] readv failed How to debug?"</a>
<li><strong>In reply to:</strong> <a href="28542.php">Jeff Squyres (jsquyres): "Re: [OMPI users] readv failed How to debug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28544.php">Gilles Gouaillardet: "Re: [OMPI users] readv failed How to debug?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Jeff.
<br>
<p>I'll let you know what happens.
<br>
<p>Best.....John
<br>
<p>On 2/16/16 10:19 AM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: JR Cary &lt;cary_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: February 16, 2016 at 9:39:23 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden] &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject:  Re: [OMPI users] readv failed How to debug?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Yes, this binary was built a few years ago.
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; You mention a user error, but do you mean developer error? I.e., it
</span><br>
<span class="quotelev2">&gt;&gt; would have to be in the code?
</span><br>
<span class="quotelev1">&gt; We can't say for sure, but it is *likely* that this error is in the code itself.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What does &quot;--mca coll ^tuned&quot; do?
</span><br>
<span class="quotelev1">&gt; It turns off the &quot;tuned&quot; collective component and instead uses the &quot;basic&quot; collective component.  The &quot;basic&quot; component generally has lower performance, but *if* the problem is that the code is using equivalent-but-different datatypes, the problem should go away.  If the problem is that one of the MPI processes is simply providing an incorrect count, then it's going to fail like this no matter what mpirun CLI options are used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28544.php">Gilles Gouaillardet: "Re: [OMPI users] readv failed How to debug?"</a>
<li><strong>Previous message:</strong> <a href="28542.php">Jeff Squyres (jsquyres): "Re: [OMPI users] readv failed How to debug?"</a>
<li><strong>In reply to:</strong> <a href="28542.php">Jeff Squyres (jsquyres): "Re: [OMPI users] readv failed How to debug?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28544.php">Gilles Gouaillardet: "Re: [OMPI users] readv failed How to debug?"</a>
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
