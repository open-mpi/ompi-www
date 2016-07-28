<?
$subject_val = "Re: [OMPI users] fortran bindings for MPI_Op_commutative";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 27 10:45:40 2012" -->
<!-- isoreceived="20120927144540" -->
<!-- sent="Thu, 27 Sep 2012 16:45:35 +0200" -->
<!-- isosent="20120927144535" -->
<!-- name="Ake Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fortran bindings for MPI_Op_commutative" -->
<!-- id="1348757135.30594.92.camel_at_lurvas.hpc2n.umu.se" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1348756310.30594.89.camel_at_lurvas.hpc2n.umu.se" -->
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
<strong>From:</strong> Ake Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-27 10:45:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20342.php">Ralph Castain: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<li><strong>Previous message:</strong> <a href="20340.php">Ake Sandgren: "[OMPI users] fortran bindings for MPI_Op_commutative"</a>
<li><strong>In reply to:</strong> <a href="20340.php">Ake Sandgren: "[OMPI users] fortran bindings for MPI_Op_commutative"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20343.php">Ralph Castain: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
<li><strong>Reply:</strong> <a href="20343.php">Ralph Castain: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2012-09-27 at 16:31 +0200, Ake Sandgren wrote:
<br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Building 1.6.1 and 1.6.2 i seem to be missing the actual fortran
</span><br>
<span class="quotelev1">&gt; bindings for MPI_Op_commutative and a bunch of other functions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My configure is
</span><br>
<span class="quotelev1">&gt; ./configure --enable-orterun-prefix-by-default --enable-cxx-exceptions
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When looking in libmpi_f77.so there is no mpi_op_commutative_ defined.
</span><br>
<span class="quotelev1">&gt; mpi_init_ is there (as a weak) as it should.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All compilers give me the same result.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas why?
</span><br>
<p>Ahh, pop_commutative_f.c is missing from the profile/Makefile.am
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20342.php">Ralph Castain: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<li><strong>Previous message:</strong> <a href="20340.php">Ake Sandgren: "[OMPI users] fortran bindings for MPI_Op_commutative"</a>
<li><strong>In reply to:</strong> <a href="20340.php">Ake Sandgren: "[OMPI users] fortran bindings for MPI_Op_commutative"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20343.php">Ralph Castain: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
<li><strong>Reply:</strong> <a href="20343.php">Ralph Castain: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
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
