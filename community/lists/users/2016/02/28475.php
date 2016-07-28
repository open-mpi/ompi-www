<?
$subject_val = "Re: [OMPI users] OMPI users] Fortran vs C reductions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  9 10:18:17 2016" -->
<!-- isoreceived="20160209151817" -->
<!-- sent="Tue, 09 Feb 2016 08:18:01 -0700" -->
<!-- isosent="20160209151801" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] Fortran vs C reductions" -->
<!-- id="87pow59al2.fsf_at_jedbrown.org" -->
<!-- inreplyto="CAAkFZ5shoCQzcVf_TmGPpJ4Oj2UwCrs4yODbp_xPa0GBu-4QGA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] Fortran vs C reductions<br>
<strong>From:</strong> Jed Brown (<em>jed_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-09 10:18:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28476.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28474.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28471.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28482.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28482.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Jed,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my 0.02US$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; we recently had a kind of similar discussion about MPI_DATATYPE_NULL, and
</span><br>
<span class="quotelev1">&gt; we concluded
</span><br>
<span class="quotelev1">&gt; ompi should do its best to implement the MPI standard, and not what some of
</span><br>
<span class="quotelev1">&gt; us think the standard should be.
</span><br>
<p>Did anyone suggest violating the standard?
<br>
<p><span class="quotelev1">&gt; in your configure script, you can simply try to compile a simple fortran
</span><br>
<span class="quotelev1">&gt; MPI hello world.
</span><br>
<span class="quotelev1">&gt; if it fails, then you can assume fortran bindings are not available, and
</span><br>
<span class="quotelev1">&gt; not use fortran types in your application.
</span><br>
<p>With which compiler?  Remember that we're talking about the C macros --
<br>
the user of those might not have any Fortran in their code.  Like
<br>
suppose I have a C library that implements a custom reduction.  I'll
<br>
need to be checking the datatype to dispatch to a concrete
<br>
implementation.  Must I compile in support for being called with
<br>
MPI_DOUBLE_COMPLEX?
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28475/signature.asc">signature.asc</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28476.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28474.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28471.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28482.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28482.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
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
