<?
$subject_val = "Re: [OMPI devel] making Fortran MPI_Status components public";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 27 14:31:43 2012" -->
<!-- isoreceived="20120927183143" -->
<!-- sent="27 Sep 2012 19:31:37 +0100" -->
<!-- isosent="20120927183137" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] making Fortran MPI_Status components public" -->
<!-- id="Prayer.1.3.5.1209271931370.19831_at_hermes-1.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3BD8FE0B-B308-4319-B18D-4168C21F4D2B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] making Fortran MPI_Status components public<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-27 14:31:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11536.php">Eugene Loh: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Previous message:</strong> <a href="11534.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>In reply to:</strong> <a href="11534.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11536.php">Eugene Loh: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Reply:</strong> <a href="11536.php">Eugene Loh: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 27 2012, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fwiw, we have put in many hours of engineering to &quot;that obscene hack&quot; 
</span><br>
<span class="quotelev1">&gt; *because* compilers all have differing degrees of compatibility suck. 
</span><br>
<span class="quotelev1">&gt; It's going to be years before compilers fully support f08, for example, 
</span><br>
<span class="quotelev1">&gt; so we have no choice but to test for various compiler characteristics at 
</span><br>
<span class="quotelev1">&gt; configure time.
</span><br>
<p>Yes and no, but that wasn't my point anyway.  My remarks about the
<br>
obscene hack were to the configure mechanism more than its use - I
<br>
could describe why I said what I said, but it's not relevant.
<br>
<p><span class="quotelev1">&gt; So I'm ok propagating &quot;that obscene hack&quot; when it protects users and 
</span><br>
<span class="quotelev1">&gt; prevents wasting time on mailing list questions.
</span><br>
<p>That wasn't my point.  It may well be the lesser of two evils, given
<br>
the world that we are in.  It was that there really isn't worth having
<br>
a kludge around every little compiler lunacy.  Realistically, in the
<br>
year 2012, if any Fortran compiler doesn't support Fortran 95 properly,
<br>
it should be categorised as defective/obsolescent and only the old
<br>
interfaces provided.
<br>
<p>In this case, I doubt very much that Oracle's compiler doesn't support
<br>
PRIVATE, and I would definitely bet on the problem being caused by
<br>
some defect in the configure mechanism.  If it isn't, it's almost
<br>
certainly some OTHER issue that shows up as a failure with PRIVATE.
<br>
Fixing it by putting yet another hack into configure is definitely
<br>
not the right solution.
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11536.php">Eugene Loh: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Previous message:</strong> <a href="11534.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>In reply to:</strong> <a href="11534.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11536.php">Eugene Loh: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
<li><strong>Reply:</strong> <a href="11536.php">Eugene Loh: "Re: [OMPI devel] making Fortran MPI_Status components public"</a>
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
