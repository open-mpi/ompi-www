<?
$subject_val = "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 27 10:46:31 2014" -->
<!-- isoreceived="20140127154631" -->
<!-- sent="Mon, 27 Jan 2014 16:46:29 +0100" -->
<!-- isosent="20140127154629" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface" -->
<!-- id="52E67F55.6060201_at_hpc2n.umu.se" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52E67EE1.70109_at_hpc2n.umu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-27 10:46:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23476.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Specific use case - very very new to MPI"</a>
<li><strong>Previous message:</strong> <a href="23474.php">&#197;ke Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>In reply to:</strong> <a href="23474.php">&#197;ke Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23489.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Reply:</strong> <a href="23489.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/27/2014 04:44 PM, &#197;ke Sandgren wrote:
<br>
<span class="quotelev1">&gt; On 01/27/2014 04:31 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; We *do* still have a problem in the mpi_f08 module that we probably
</span><br>
<span class="quotelev2">&gt;&gt; won't fix before 1.7.4 is released.  Here's the ticket:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      <a href="https://svn.open-mpi.org/trac/ompi/ticket/4157">https://svn.open-mpi.org/trac/ompi/ticket/4157</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Craig has a suggested patch, but a) I haven't had time to investigate
</span><br>
<span class="quotelev2">&gt;&gt; it yet, and b) we believe that, at least so far, this issue only
</span><br>
<span class="quotelev2">&gt;&gt; affects the as-yet unreleased gfortran 4.9 compiler.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All that being said, my limited Fortran knowledge is probably showing
</span><br>
<span class="quotelev2">&gt;&gt; here: is this the same issue that you're reporting with the ekopath
</span><br>
<span class="quotelev2">&gt;&gt; compiler?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If so, what version of the ekopath compiler are you using?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yeah, that's exactly the problem I'm seeing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using Ekopath 5 (5.0.0) which was released a little while ago.
</span><br>
<span class="quotelev1">&gt; &quot;PathScale EKOPath(tm) Compiler Suite: Version 5.0.0&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (which also gets rid of the 32char limit in bind(c, name=&quot;...&quot;) that you
</span><br>
<span class="quotelev1">&gt; talked about with Christopher B. in case he haven't had time to get back
</span><br>
<span class="quotelev1">&gt; to you on that)
</span><br>
<p>I.e., if you need testing of patches for this, let me know.
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23476.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Specific use case - very very new to MPI"</a>
<li><strong>Previous message:</strong> <a href="23474.php">&#197;ke Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>In reply to:</strong> <a href="23474.php">&#197;ke Sandgren: "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23489.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
<li><strong>Reply:</strong> <a href="23489.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.7.4rc1 and f08 interface"</a>
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
