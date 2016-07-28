<?
$subject_val = "[OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 04:25:51 2014" -->
<!-- isoreceived="20141105092551" -->
<!-- sent="Wed, 5 Nov 2014 09:25:47 +0000" -->
<!-- isosent="20141105092547" -->
<!-- name="Michael.Rachner_at_[hidden]" -->
<!-- email="Michael.Rachner_at_[hidden]" -->
<!-- subject="[OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF" -->
<!-- id="8337B490252F0944BF1D38541059627E1736FE2A_at_DLREXMBX01.intra.dlr.de" -->
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
<strong>Subject:</strong> [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF<br>
<strong>From:</strong> <a href="mailto:Michael.Rachner_at_[hidden]?Subject=Re:%20[OMPI%20users]%20OPENMPI-1.8.3:%20missing%20fortran%20bindings%20for%20MPI_SIZEOF"><em>Michael.Rachner_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-11-05 04:25:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25677.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<li><strong>Previous message:</strong> <a href="25675.php">jfsanchez: "Re: [OMPI users] mpirun error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25682.php">Gilles Gouaillardet: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25682.php">Gilles Gouaillardet: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Maybe reply:</strong> <a href="25683.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OPENMPI developers,
<br>

<br>
In OPENMPI-1.8.3 the Ftn-bindings for  MPI_SIZEOF  are missing, when using the mpi-module and when using mpif.h .
<br>
(I have not controlled, whether they are present in the mpi_08 module.)
<br>

<br>
I get this message from the linker (Intel-14.0.2):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/home/vat/src/KERNEL/mpi_ini.f90:534: undefined reference to `mpi_sizeof0di4_'
<br>

<br>
So can you add  the Ftn-bindings for MPI_SIZEOF?
<br>

<br>
Once again I feel, that Fortran-bindings are unloved step-children for C-programmers. 
<br>

<br>
Greetings to you all
<br>
&nbsp;Michael Rachner
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25677.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in OpenMPI-1.8.3: storage limition in shared memory allocation (MPI_WIN_ALLOCATE_SHARED) in Ftn-code"</a>
<li><strong>Previous message:</strong> <a href="25675.php">jfsanchez: "Re: [OMPI users] mpirun error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25682.php">Gilles Gouaillardet: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Reply:</strong> <a href="25682.php">Gilles Gouaillardet: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
<li><strong>Maybe reply:</strong> <a href="25683.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] OPENMPI-1.8.3: missing fortran bindings for MPI_SIZEOF"</a>
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
