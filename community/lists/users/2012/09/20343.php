<?
$subject_val = "Re: [OMPI users] fortran bindings for MPI_Op_commutative";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 27 11:06:05 2012" -->
<!-- isoreceived="20120927150605" -->
<!-- sent="Thu, 27 Sep 2012 08:06:01 -0700" -->
<!-- isosent="20120927150601" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fortran bindings for MPI_Op_commutative" -->
<!-- id="CAMD57ocFn34WamUjxivacL3OXzuYrh3M3-D6O0AaYDQos-htxQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1348757135.30594.92.camel_at_lurvas.hpc2n.umu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] fortran bindings for MPI_Op_commutative<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-27 11:06:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20344.php">Sébastien Boisvert: "[OMPI users] About MPI_TAG_UB"</a>
<li><strong>Previous message:</strong> <a href="20342.php">Ralph Castain: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<li><strong>In reply to:</strong> <a href="20341.php">Ake Sandgren: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20379.php">Jeff Squyres: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20379.php">Jeff Squyres: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ouch! Thanks - I'll fix that and check for any other missing entries (Jeff
<br>
is on a plane back from Europe today). Don't know when Jeff will want to
<br>
roll a replacement 1.6.3 release, but he can address that when he returns
<br>
to the airwaves.
<br>
<p><p>On Thu, Sep 27, 2012 at 7:45 AM, Ake Sandgren &lt;ake.sandgren_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 2012-09-27 at 16:31 +0200, Ake Sandgren wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Building 1.6.1 and 1.6.2 i seem to be missing the actual fortran
</span><br>
<span class="quotelev2">&gt; &gt; bindings for MPI_Op_commutative and a bunch of other functions.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My configure is
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --enable-orterun-prefix-by-default --enable-cxx-exceptions
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When looking in libmpi_f77.so there is no mpi_op_commutative_ defined.
</span><br>
<span class="quotelev2">&gt; &gt; mpi_init_ is there (as a weak) as it should.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; All compilers give me the same result.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any ideas why?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ahh, pop_commutative_f.c is missing from the profile/Makefile.am
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20343/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20344.php">Sébastien Boisvert: "[OMPI users] About MPI_TAG_UB"</a>
<li><strong>Previous message:</strong> <a href="20342.php">Ralph Castain: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<li><strong>In reply to:</strong> <a href="20341.php">Ake Sandgren: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20379.php">Jeff Squyres: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/10/20379.php">Jeff Squyres: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
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
