<?
$subject_val = "[OMPI users] mkl threaded works in serail but not in parallel";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 22 03:17:38 2016" -->
<!-- isoreceived="20160622071738" -->
<!-- sent="Wed, 22 Jun 2016 09:17:35 +0200" -->
<!-- isosent="20160622071735" -->
<!-- name="remi marchal" -->
<!-- email="remi.marchal_at_[hidden]" -->
<!-- subject="[OMPI users] mkl threaded works in serail but not in parallel" -->
<!-- id="81671C5B-FE02-4B33-BA70-08E238828FD1_at_univ-rennes1.fr" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] mkl threaded works in serail but not in parallel<br>
<strong>From:</strong> remi marchal (<em>remi.marchal_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-22 03:17:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29496.php">Jeff Hammond: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>Previous message:</strong> <a href="29494.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29496.php">Jeff Hammond: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>Reply:</strong> <a href="29496.php">Jeff Hammond: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>Reply:</strong> <a href="29497.php">Gilles Gouaillardet: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear openmpi users,
<br>
<p>Today, I faced a strange problem.
<br>
<p>I am compiling a quantum chemistry software (CASTEP-16) using intel16, mkl threaded libraries and openmpi-18.1.
<br>
<p>The compilation works fine.
<br>
<p>When I ask for MKL_NUM_THREAD=4 and call the program in serial mode (without mpirun), it works perfectly and use 4 threads.
<br>
<p>However, when I start the program with mpirun, even with 1 mpi process, the program ran but only with 1 thread.
<br>
<p>I never add such kind of trouble.
<br>
<p>Does anyone have an explanation.
<br>
<p>Regards,
<br>
<p>R&#195;&#169;mi
<br>
<p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29495/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29496.php">Jeff Hammond: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>Previous message:</strong> <a href="29494.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_File_read+MPI_BOTTOM crash on NFS ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29496.php">Jeff Hammond: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>Reply:</strong> <a href="29496.php">Jeff Hammond: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
<li><strong>Reply:</strong> <a href="29497.php">Gilles Gouaillardet: "Re: [OMPI users] mkl threaded works in serail but not in parallel"</a>
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
