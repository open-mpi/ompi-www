<?
$subject_val = "Re: [OMPI users] Finalize() does not return";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 21 09:08:39 2013" -->
<!-- isoreceived="20130821130839" -->
<!-- sent="Wed, 21 Aug 2013 15:08:20 +0200" -->
<!-- isosent="20130821130820" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eloi.gaudry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Finalize() does not return" -->
<!-- id="zarafa.5214bbc4.7c8b.0994539966a40e5e_at_mail.fft" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F822217_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Finalize() does not return<br>
<strong>From:</strong> Eloi Gaudry (<em>eloi.gaudry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-21 09:08:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22535.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22533.php">Hugo Gagnon: "Re: [OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8"</a>
<li><strong>In reply to:</strong> <a href="22520.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Finalize() does not return"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev2">&gt;&gt; Is there any other information I could provide that might be useful?
</span><br>
<p><span class="quotelev1">&gt;You might want to audit the code and ensure that you have no pending communications that haven't finished -- check all your sends and receives, not just in the code, but at run-time (e.g., use an MPI profiling tool to match up the sends and receives, and see what's left at Finalize time).
</span><br>
<p>Jeff, could you advice one tool or set of options to perform such a check ?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22535.php">Siddhartha Jana: "Re: [OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22533.php">Hugo Gagnon: "Re: [OMPI users] Problem compiling 1.7.2 on Mac OS 10.8 with gcc 4.8"</a>
<li><strong>In reply to:</strong> <a href="22520.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Finalize() does not return"</a>
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
