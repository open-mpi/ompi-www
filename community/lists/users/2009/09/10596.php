<?
$subject_val = "Re: [OMPI users] SVD with mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  9 02:44:56 2009" -->
<!-- isoreceived="20090909064456" -->
<!-- sent="Wed, 09 Sep 2009 08:44:51 +0200" -->
<!-- isosent="20090909064451" -->
<!-- name="Yann JOBIC" -->
<!-- email="jobic_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SVD with mpi" -->
<!-- id="4AA74EE3.9030303_at_polytech.univ-mrs.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="25787e150909080455j241fd9b1pb5af8eba4ca21543_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SVD with mpi<br>
<strong>From:</strong> Yann JOBIC (<em>jobic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-09 02:44:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10597.php">Lenny Verkhovsky: "Re: [OMPI users] [OMPI devel] Error message improvement"</a>
<li><strong>Previous message:</strong> <a href="10595.php">Terry Frankcombe: "Re: [OMPI users] SVD with mpi"</a>
<li><strong>In reply to:</strong> <a href="10587.php">Attila B&#246;rcs: "[OMPI users] SVD with mpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Attila B&#246;rcs wrote:
<br>
<span class="quotelev1">&gt; Hi Everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd like to achieve singular value decomposition with mpi. I heard 
</span><br>
<span class="quotelev1">&gt; about Lanczos algorith and some different kind of algorith for svd, 
</span><br>
<span class="quotelev1">&gt; but I need some help about this theme. Knows anybody some usable code 
</span><br>
<span class="quotelev1">&gt; or tutorial about parallel svd?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attila
</span><br>
If you need a full decomposition, scalapack is the best.
<br>
Otherwise, you may take a look at SLEPc (which use the PETSc framework)
<br>
<p><p>Yann
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10597.php">Lenny Verkhovsky: "Re: [OMPI users] [OMPI devel] Error message improvement"</a>
<li><strong>Previous message:</strong> <a href="10595.php">Terry Frankcombe: "Re: [OMPI users] SVD with mpi"</a>
<li><strong>In reply to:</strong> <a href="10587.php">Attila B&#246;rcs: "[OMPI users] SVD with mpi"</a>
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
