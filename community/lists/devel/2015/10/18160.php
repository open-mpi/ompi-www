<?
$subject_val = "[OMPI devel] 16 byte real in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 14 09:40:05 2015" -->
<!-- isoreceived="20151014134005" -->
<!-- sent="Wed, 14 Oct 2015 14:40:00 +0100" -->
<!-- isosent="20151014134000" -->
<!-- name="Vladim&#195;&#173;r Fuka" -->
<!-- email="vladimir.fuka_at_[hidden]" -->
<!-- subject="[OMPI devel] 16 byte real in Fortran" -->
<!-- id="CAKe2itcE1GdQsXyVqbbSH__hyHFnw9miab49LAWa-b4mXeJA3g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 16 byte real in Fortran<br>
<strong>From:</strong> Vladim&#195;&#173;r Fuka (<em>vladimir.fuka_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-14 09:40:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18161.php">Nathan Hjelm: "Re: [OMPI devel] 16 byte real in Fortran"</a>
<li><strong>Previous message:</strong> <a href="18159.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18161.php">Nathan Hjelm: "Re: [OMPI devel] 16 byte real in Fortran"</a>
<li><strong>Reply:</strong> <a href="18161.php">Nathan Hjelm: "Re: [OMPI devel] 16 byte real in Fortran"</a>
<li><strong>Reply:</strong> <a href="18168.php">Vladimír Fuka: "Re: [OMPI devel] 16 byte real in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;&nbsp;I have a problem with using the  quadruple (128bit) or extended
<br>
(80bit) precision reals in Fortran. I did my tests with gfortran-4.8.5
<br>
and OpenMPI-1.7.2 (preinstalled OpenSuSE 13.2), but others confirmed
<br>
this behaviour for more recent versions at
<br>
<a href="http://stackoverflow.com/questions/33109040/strange-result-of-mpi-allreduce-for-16-byte-real?noredirect=1#comment54060649_33109040">http://stackoverflow.com/questions/33109040/strange-result-of-mpi-allreduce-for-16-byte-real?noredirect=1#comment54060649_33109040</a>
<br>
.
<br>
<p>&nbsp;&nbsp;When I try to use REAL*16 variables (or equivalent kind-based
<br>
definition) and MPI_REAL16 the reductions don't give correct results
<br>
(see the link for the exact code). I was pointed to this issue ticket
<br>
<a href="https://github.com/open-mpi/ompi/issues/63">https://github.com/open-mpi/ompi/issues/63</a>.
<br>
<p>I thought, maybe the underlying long double is 80-bit extended
<br>
precision then and I tried to use REAL*10 variables and MPI_REAL16. I
<br>
actually received a correct answer from the reduction, but when I
<br>
tried to use REAL*10 or REAL(10) I am getting
<br>
<p>Error: There is no specific subroutine for the generic 'mpi_recv' at (1)
<br>
Error: There is no specific subroutine for the generic 'mpi_ssend' at (1)
<br>
<p>That is strange, because I should be able to use even types and array
<br>
ranks which I construct myself in point to point send/receives and
<br>
which are unknown to the MPI library, so the explicit interface should
<br>
not be required.
<br>
<p>Is there a correct way how to use the extended or quadruple precision
<br>
in OpenMPI? My intended usage is mainly checking if differences seen
<br>
numerical computations are getting smaller with increasing precision
<br>
and can therefore be attributed to rounding errors. If not they could
<br>
be a sign of a bug.
<br>
<p>&nbsp;&nbsp;&nbsp;Best regards,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vladimir
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18161.php">Nathan Hjelm: "Re: [OMPI devel] 16 byte real in Fortran"</a>
<li><strong>Previous message:</strong> <a href="18159.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18161.php">Nathan Hjelm: "Re: [OMPI devel] 16 byte real in Fortran"</a>
<li><strong>Reply:</strong> <a href="18161.php">Nathan Hjelm: "Re: [OMPI devel] 16 byte real in Fortran"</a>
<li><strong>Reply:</strong> <a href="18168.php">Vladimír Fuka: "Re: [OMPI devel] 16 byte real in Fortran"</a>
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
