<?
$subject_val = "Re: [OMPI users] OMPI users] Fortran vs C reductions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  9 07:42:10 2016" -->
<!-- isoreceived="20160209124210" -->
<!-- sent="Tue, 09 Feb 2016 12:42:08 +0000" -->
<!-- isosent="20160209124208" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] Fortran vs C reductions" -->
<!-- id="87ziva5a3j.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-09 07:42:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28473.php">Dave Love: "Re: [OMPI users] Help with OpenMPI and Univa Grid Engine"</a>
<li><strong>Previous message:</strong> <a href="28471.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28470.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28476.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28476.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jed Brown &lt;jed_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; George Bosilca &lt;bosilca_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now we can argue if DOUBLE PRECISION in Fortran is a double in C. As these
</span><br>
<span class="quotelev2">&gt;&gt; languages are interoperable, and there is no explicit conversion function,
</span><br>
<span class="quotelev2">&gt;&gt; it is safe to assume this is the case. Thus, is seems to me absolutely
</span><br>
<span class="quotelev2">&gt;&gt; legal to provide the MPI-required support for DOUBLE PRECISION despite the
</span><br>
<span class="quotelev2">&gt;&gt; fact that Fortran support is not enabled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Isn't that entirely dependent on the Fortran compiler?  There is no
</span><br>
<span class="quotelev1">&gt; universal requirement that there be a relationship between Fortran
</span><br>
<span class="quotelev1">&gt; INTEGER and C int, for example.
</span><br>
<p>In case it's not generally obvious:  the compiler _and its options_.
<br>
You can typically change the width of real and double precision, as with
<br>
gfortran -default-real-8, and similarly for integer.  (It seems unKIND
<br>
if the MPI standard specifically enshrines double precision, but
<br>
anyhow...)
<br>
<p><span class="quotelev1">&gt; Feature tests are far more reliable, accurate, and lower maintenance
</span><br>
<span class="quotelev1">&gt; than platform/version tests.  When a package defines macros/symbols that
</span><br>
<span class="quotelev1">&gt; fail at run-time, it makes feature tests much more expensive.  Even more
</span><br>
<span class="quotelev1">&gt; so when cross-compiling, where run-time tests require batch submission.
</span><br>
<p>Right, but isn't the existence of the compiler wrapper the appropriate
<br>
test for Fortran support, and don't you really need it to run
<br>
Fortran-related feature tests?  I have an &quot;integer*8&quot; build of OMPI, for
<br>
instance.  It's a pain generally when build systems for MPI stuff avoid
<br>
compiler wrappers, and I'd hope that using them could make
<br>
possibly-unfortunate standards requirements like this moot.  Would there
<br>
be a problem with that in this case?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28473.php">Dave Love: "Re: [OMPI users] Help with OpenMPI and Univa Grid Engine"</a>
<li><strong>Previous message:</strong> <a href="28471.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28470.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28476.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28476.php">Jed Brown: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
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
