<?
$subject_val = "Re: [OMPI devel] matching code rewrite in OB1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 11:08:53 2007" -->
<!-- isoreceived="20071211160853" -->
<!-- sent="Tue, 11 Dec 2007 18:08:46 +0200" -->
<!-- isosent="20071211160846" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] matching code rewrite in OB1" -->
<!-- id="20071211160846.GG3360_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C3841E63.11CD1%rlgraham_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] matching code rewrite in OB1<br>
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-11 11:08:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2791.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2789.php">Andrew Friedley: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2788.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2828.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Dec 11, 2007 at 11:00:51AM -0500, Richard Graham wrote:
<br>
<span class="quotelev1">&gt; Gleb,
</span><br>
<span class="quotelev1">&gt;   I would suggest that before this is checked in this be tested on a system
</span><br>
<span class="quotelev1">&gt; that has N-way network parallelism, where N is as large as you can find.
</span><br>
<span class="quotelev1">&gt; This is a key bit of code for MPI correctness, and out-of-order operations
</span><br>
<span class="quotelev1">&gt; will break it, so you want to maximize the chance for such operations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
I started this rewrite while chasing this bug <a href="https://svn.open-mpi.org/trac/ompi/ticket/1158">https://svn.open-mpi.org/trac/ompi/ticket/1158</a>.
<br>
As you can see OpenIB reorders fragment quite a bit unfortunately :(
<br>
No testing is enough for such important piece of code of cause.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2791.php">Gleb Natapov: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>Previous message:</strong> <a href="2789.php">Andrew Friedley: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<li><strong>In reply to:</strong> <a href="2788.php">Richard Graham: "Re: [OMPI devel] matching code rewrite in OB1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2828.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] matching code rewrite in OB1"</a>
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
