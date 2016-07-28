<?
$subject_val = "Re: [OMPI users] OMPI users] Fortran vs C reductions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 10 01:09:28 2016" -->
<!-- isoreceived="20160210060928" -->
<!-- sent="Tue, 09 Feb 2016 23:09:24 -0700" -->
<!-- isosent="20160210060924" -->
<!-- name="Jed Brown" -->
<!-- email="jed_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] Fortran vs C reductions" -->
<!-- id="87mvr95c6j.fsf_at_jedbrown.org" -->
<!-- inreplyto="56BAA4D1.4060405_at_rist.or.jp" -->
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
<strong>Date:</strong> 2016-02-10 01:09:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28484.php">Delphine Ramalingom: "[OMPI users] error openmpi check hdf5"</a>
<li><strong>Previous message:</strong> <a href="28482.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28482.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28547.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28547.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles Gouaillardet &lt;gilles_at_[hidden]&gt; writes:
<br>
<span class="quotelev2">&gt;&gt; implementation.  Must I compile in support for being called with
</span><br>
<span class="quotelev2">&gt;&gt; MPI_DOUBLE_COMPLEX?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; does that really matter ?
</span><br>
<p>Possibly.  For example, if the library needed to define some static
<br>
data, its setup might involve communicating values before being called
<br>
with that particular type.  That setup phase would fail if the Fortran
<br>
type is invalid.
<br>
<p><span class="quotelev1">&gt; i assume your library and the user code are built with the same OpenMPI.
</span><br>
<span class="quotelev1">&gt; if there is no Fortran support, then you are compiling code that cannot 
</span><br>
<span class="quotelev1">&gt; be invoked (e.g. dead code),
</span><br>
<span class="quotelev1">&gt; and though that is not the most elegant thing to do, that does not sound 
</span><br>
<span class="quotelev1">&gt; like a showstopper to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; so yes, compile in support for being called with Fortran predefined 
</span><br>
<span class="quotelev1">&gt; datatypes,
</span><br>
<span class="quotelev1">&gt; worst case scenario is you generate broken dead code.
</span><br>
<p>No, worst case is that the library crashes at run-time, e.g., during
<br>
setup of some sort.
<br>
<p>I don't have a specific library with this behavior, but I can fill in
<br>
the details to scientifically justify such a thing.
<br>
<p>Anyway, my suggestion is to either make a compile-time error so that a
<br>
configure script can test its validity or make it possible to query at
<br>
run-time whether the type/object is valid.  The latter would have the
<br>
advantage that you could rebuild MPI to add Fortran support and
<br>
dependent projects would not need to be rebuilt because they saw the
<br>
same environment.  I think that would involve new function(s).
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28483/signature.asc">signature.asc</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28484.php">Delphine Ramalingom: "[OMPI users] error openmpi check hdf5"</a>
<li><strong>Previous message:</strong> <a href="28482.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>In reply to:</strong> <a href="28482.php">Gilles Gouaillardet: "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28547.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
<li><strong>Reply:</strong> <a href="28547.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI users] Fortran vs C reductions"</a>
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
