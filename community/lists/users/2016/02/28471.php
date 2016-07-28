<?
$subject_val = "Re: [OMPI users] OMPI users] Fortran vs C reductions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  9 07:32:32 2016" -->
<!-- isoreceived="20160209123232" -->
<!-- sent="Tue, 9 Feb 2016 21:32:31 +0900" -->
<!-- isosent="20160209123231" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] Fortran vs C reductions" -->
<!-- id="CAAkFZ5shoCQzcVf_TmGPpJ4Oj2UwCrs4yODbp_xPa0GBu-4QGA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="87y4au8mo6.fsf_at_jedbrown.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-09 07:32:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28472.php">Dave Love: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28470.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28470.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28475.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28475.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jed,
<br>
<p>my 0.02US$
<br>
<p>we recently had a kind of similar discussion about MPI_DATATYPE_NULL, and
<br>
we concluded
<br>
ompi should do its best to implement the MPI standard, and not what some of
<br>
us think the standard should be.
<br>
<p>in your configure script, you can simply try to compile a simple fortran
<br>
MPI hello world.
<br>
if it fails, then you can assume fortran bindings are not available, and
<br>
not use fortran types in your application.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Tuesday, February 9, 2016, Jed Brown &lt;jed_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George Bosilca &lt;bosilca_at_[hidden] &lt;javascript:;&gt;&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now we can argue if DOUBLE PRECISION in Fortran is a double in C. As
</span><br>
<span class="quotelev1">&gt; these
</span><br>
<span class="quotelev2">&gt; &gt; languages are interoperable, and there is no explicit conversion
</span><br>
<span class="quotelev1">&gt; function,
</span><br>
<span class="quotelev2">&gt; &gt; it is safe to assume this is the case. Thus, is seems to me absolutely
</span><br>
<span class="quotelev2">&gt; &gt; legal to provide the MPI-required support for DOUBLE PRECISION despite
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; fact that Fortran support is not enabled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Isn't that entirely dependent on the Fortran compiler?  There is no
</span><br>
<span class="quotelev1">&gt; universal requirement that there be a relationship between Fortran
</span><br>
<span class="quotelev1">&gt; INTEGER and C int, for example.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now taking a closer look at the op, I see nothing in the standard the
</span><br>
<span class="quotelev1">&gt; would
</span><br>
<span class="quotelev2">&gt; &gt; require to provide the op if the corresponding language is not supported.
</span><br>
<span class="quotelev2">&gt; &gt; While it could be nice (as a convenience for the users and also because
</span><br>
<span class="quotelev2">&gt; &gt; there is no technical reason not to) to enable the loc op, on non native
</span><br>
<span class="quotelev2">&gt; &gt; datatypes, this is not mandatory. Thus, the current behavior exposed by
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI is acceptable from the standard perspective.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe the question is not whether it's standard-compliant to define
</span><br>
<span class="quotelev1">&gt; the types when they are not supported (the OP's usage doesn't sound
</span><br>
<span class="quotelev1">&gt; valid anyway because they are using the Fortran MPI datatypes to refer
</span><br>
<span class="quotelev1">&gt; to C types).  Rather, the question is: if those types are
</span><br>
<span class="quotelev1">&gt; non-functional, can/should they be removed from the header.  This, for
</span><br>
<span class="quotelev1">&gt; example, allows a configure script to test whether those datatypes
</span><br>
<span class="quotelev1">&gt; exist.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Feature tests are far more reliable, accurate, and lower maintenance
</span><br>
<span class="quotelev1">&gt; than platform/version tests.  When a package defines macros/symbols that
</span><br>
<span class="quotelev1">&gt; fail at run-time, it makes feature tests much more expensive.  Even more
</span><br>
<span class="quotelev1">&gt; so when cross-compiling, where run-time tests require batch submission.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The fact is that if a package makes it impractical to test features, the
</span><br>
<span class="quotelev1">&gt; end-user experience reflects poorly on that package and all of its
</span><br>
<span class="quotelev1">&gt; dependencies (though which user support passes).  It's the sort of thing
</span><br>
<span class="quotelev1">&gt; that drives users and developers away from the platform.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since I don't think you can make the Fortran types reliable without
</span><br>
<span class="quotelev1">&gt; access to a Fortran compiler, my suggestion would be remove the symbols
</span><br>
<span class="quotelev1">&gt; when Fortran is not available.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28471/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28472.php">Dave Love: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28470.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28470.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28475.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28475.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
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
