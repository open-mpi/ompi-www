<?
$subject_val = "[OMPI users] fortran bindings for MPI_Op_commutative";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 27 10:31:57 2012" -->
<!-- isoreceived="20120927143157" -->
<!-- sent="Thu, 27 Sep 2012 16:31:50 +0200" -->
<!-- isosent="20120927143150" -->
<!-- name="Ake Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="[OMPI users] fortran bindings for MPI_Op_commutative" -->
<!-- id="1348756310.30594.89.camel_at_lurvas.hpc2n.umu.se" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] fortran bindings for MPI_Op_commutative<br>
<strong>From:</strong> Ake Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-27 10:31:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20341.php">Ake Sandgren: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
<li><strong>Previous message:</strong> <a href="20339.php">Siegmar Gross: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20341.php">Ake Sandgren: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
<li><strong>Reply:</strong> <a href="20341.php">Ake Sandgren: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>Building 1.6.1 and 1.6.2 i seem to be missing the actual fortran
<br>
bindings for MPI_Op_commutative and a bunch of other functions.
<br>
<p>My configure is
<br>
./configure --enable-orterun-prefix-by-default --enable-cxx-exceptions
<br>
<p>When looking in libmpi_f77.so there is no mpi_op_commutative_ defined.
<br>
mpi_init_ is there (as a weak) as it should.
<br>
<p>All compilers give me the same result.
<br>
<p>Any ideas why?
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20341.php">Ake Sandgren: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
<li><strong>Previous message:</strong> <a href="20339.php">Siegmar Gross: "Re: [OMPI users] problems with mpiJava in openmpi-1.9a1r27362"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20341.php">Ake Sandgren: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
<li><strong>Reply:</strong> <a href="20341.php">Ake Sandgren: "Re: [OMPI users] fortran bindings for MPI_Op_commutative"</a>
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
