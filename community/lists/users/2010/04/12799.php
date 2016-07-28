<?
$subject_val = "Re: [OMPI users] Solving SVD Using Lanczos Method Implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 13:34:02 2010" -->
<!-- isoreceived="20100426173402" -->
<!-- sent="Mon, 26 Apr 2010 19:33:52 +0200" -->
<!-- isosent="20100426173352" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Solving SVD Using Lanczos Method Implementation" -->
<!-- id="87tyqyazjz.fsf_at_59A2.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="m2k6f5f9bfc1004260830y148604e4u9e087bd57a3b3bdf_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Solving SVD Using Lanczos Method Implementation<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 13:33:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12800.php">Teng Lin: "[OMPI users] Bug report in plm_lsf_module.c"</a>
<li><strong>Previous message:</strong> <a href="12798.php">Jeff Squyres: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>In reply to:</strong> <a href="12785.php">long thai: "[OMPI users] Solving SVD Using Lanczos Method Implementation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 26 Apr 2010 22:30:15 +0700, long thai &lt;thaithanhlong2501_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to develop MPI program to solve SVD using Lanczos algorithms.
</span><br>
<span class="quotelev1">&gt; However, I have no idea how to do that. Somebody suggested to take a look at
</span><br>
<span class="quotelev1">&gt; <a href="http://www.netlib.org/scalapack/">http://www.netlib.org/scalapack/</a> but I cannot understand exactly what to
</span><br>
<span class="quotelev1">&gt; look. Morever, I know that *las2* is the popular library to solve SVD but
</span><br>
<span class="quotelev1">&gt; don't know how to use it in parallel computing.
</span><br>
<p>I recommend SLEPc
<br>
<p>&nbsp;&nbsp;<a href="http://www.grycap.upv.es/slepc/">http://www.grycap.upv.es/slepc/</a>
<br>
<p>There are plenty of examples and a variety of algorithms for scalable
<br>
computation of SVDs.
<br>
<p>Jed
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12800.php">Teng Lin: "[OMPI users] Bug report in plm_lsf_module.c"</a>
<li><strong>Previous message:</strong> <a href="12798.php">Jeff Squyres: "Re: [OMPI users] open-mpi behaviour on Fedora, Ubuntu, Debian and 	CentOS"</a>
<li><strong>In reply to:</strong> <a href="12785.php">long thai: "[OMPI users] Solving SVD Using Lanczos Method Implementation"</a>
<!-- nextthread="start" -->
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
