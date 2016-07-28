<?
$subject_val = "Re: [OMPI users] OMPI users] Fortran vs C reductions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  9 00:42:28 2016" -->
<!-- isoreceived="20160209054228" -->
<!-- sent="Mon, 08 Feb 2016 22:42:17 -0700" -->
<!-- isosent="20160209054217" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] Fortran vs C reductions" -->
<!-- id="87y4au8mo6.fsf_at_jedbrown.org" -->
<!-- inreplyto="CAMJJpkWME67eUdgGixrv7iO81bcZwZRTASsB0nM0HnKNJ3HiGw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-02-09 00:42:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28471.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28469.php">George Bosilca: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28469.php">George Bosilca: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28471.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28471.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28472.php">Dave Love: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca &lt;bosilca_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Now we can argue if DOUBLE PRECISION in Fortran is a double in C. As these
</span><br>
<span class="quotelev1">&gt; languages are interoperable, and there is no explicit conversion function,
</span><br>
<span class="quotelev1">&gt; it is safe to assume this is the case. Thus, is seems to me absolutely
</span><br>
<span class="quotelev1">&gt; legal to provide the MPI-required support for DOUBLE PRECISION despite the
</span><br>
<span class="quotelev1">&gt; fact that Fortran support is not enabled.
</span><br>
<p>Isn't that entirely dependent on the Fortran compiler?  There is no
<br>
universal requirement that there be a relationship between Fortran
<br>
INTEGER and C int, for example.
<br>
<p><span class="quotelev1">&gt; Now taking a closer look at the op, I see nothing in the standard the would
</span><br>
<span class="quotelev1">&gt; require to provide the op if the corresponding language is not supported.
</span><br>
<span class="quotelev1">&gt; While it could be nice (as a convenience for the users and also because
</span><br>
<span class="quotelev1">&gt; there is no technical reason not to) to enable the loc op, on non native
</span><br>
<span class="quotelev1">&gt; datatypes, this is not mandatory. Thus, the current behavior exposed by
</span><br>
<span class="quotelev1">&gt; Open MPI is acceptable from the standard perspective.
</span><br>
<p>I believe the question is not whether it's standard-compliant to define
<br>
the types when they are not supported (the OP's usage doesn't sound
<br>
valid anyway because they are using the Fortran MPI datatypes to refer
<br>
to C types).  Rather, the question is: if those types are
<br>
non-functional, can/should they be removed from the header.  This, for
<br>
example, allows a configure script to test whether those datatypes
<br>
exist.
<br>
<p>Feature tests are far more reliable, accurate, and lower maintenance
<br>
than platform/version tests.  When a package defines macros/symbols that
<br>
fail at run-time, it makes feature tests much more expensive.  Even more
<br>
so when cross-compiling, where run-time tests require batch submission.
<br>
<p>The fact is that if a package makes it impractical to test features, the
<br>
end-user experience reflects poorly on that package and all of its
<br>
dependencies (though which user support passes).  It's the sort of thing
<br>
that drives users and developers away from the platform.
<br>
<p>Since I don't think you can make the Fortran types reliable without
<br>
access to a Fortran compiler, my suggestion would be remove the symbols
<br>
when Fortran is not available.
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28470/signature.asc">signature.asc</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28471.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Previous message:</strong> <a href="28469.php">George Bosilca: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28469.php">George Bosilca: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28471.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28471.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28472.php">Dave Love: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
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
