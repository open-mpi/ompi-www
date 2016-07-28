<?
$subject_val = "[OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 04:07:28 2015" -->
<!-- isoreceived="20151119090728" -->
<!-- sent="Thu, 19 Nov 2015 09:07:22 +0000" -->
<!-- isosent="20151119090722" -->
<!-- name="Michael.Rachner_at_[hidden]" -->
<!-- email="Michael.Rachner_at_[hidden]" -->
<!-- subject="[OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler" -->
<!-- id="8337B490252F0944BF1D38541059627E173BA24D_at_DLREXMBX01.intra.dlr.de" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler<br>
<strong>From:</strong> <a href="mailto:Michael.Rachner_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Bug%20in%20Fortran-module%20MPI%20of%20OpenMPI%201.10.0%20with%20Intel-Ftn-compiler"><em>Michael.Rachner_at_[hidden]</em></a><br>
<strong>Date:</strong> 2015-11-19 04:07:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28051.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>Previous message:</strong> <a href="28049.php">Howard Pritchard: "Re: [OMPI users] mpijavac doesn't compile any thing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28051.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>Maybe reply:</strong> <a href="28051.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear developers of OpenMPI,
<br>
<p>I am trying to run our parallelized Ftn-95 code on a Linux cluster with OpenMPI-1-10.0 and Intel-16.0.0 Fortran compiler.
<br>
In the code I use the  module MPI  (&quot;use MPI&quot;-stmts).
<br>
<p>However I am not able to compile the code, because of compiler error messages like this:
<br>
<p>/src_SPRAY/mpi_wrapper.f90(2065): error #6285: There is no matching specific subroutin for this generic subroutine call.   [MPI_REDUCE]
<br>
<p><p>The problem seems for me to be this one:
<br>
<p>The interfaces in the module MPI for the MPI-routines do not accept a send or receive buffer array, which is
<br>
actually a variable, an array element or a constant (like MPI_IN_PLACE).
<br>
<p>Example 1:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This does not work (gives the compiler error message:      error #6285: There is no matching specific subroutin for this generic subroutine call  )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ivar=123    ! &lt;-- ivar is an integer variable, not an array
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_BCAST( ivar, 1, MPI_INTEGER, 0, MPI_COMM_WORLD), ierr_mpi )    ! &lt;--- this should work, but is not accepted by the compiler
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;only this cumbersome workaround works:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ivar=123
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocate( iarr(1) )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iarr(1) = ivar
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_BCAST( iarr, 1, MPI_INTEGER, 0, MPI_COMM_WORLD, ierr_mpi )    ! &lt;--- this workaround works
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ivar = iarr(1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;deallocate( iarr(1) )
<br>
<p>Example 2:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Any call of an MPI-routine with MPI_IN_PLACE does not work, like that coding:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(lmaster) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_REDUCE( MPI_IN_PLACE, rbuffarr, nelem, MPI_REAL8, MPI_MAX &amp;    ! &lt;--- this should work, but is not accepted by the compiler
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;,0_INT4, MPI_COMM_WORLD, ierr_mpi )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else  ! slaves
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_REDUCE( rbuffarr, rdummyarr, nelem, MPI_REAL8, MPI_MAX &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;,0_INT4, MPI_COMM_WORLD, ierr_mpi )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;This results in this compiler error message:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/src_SPRAY/mpi_wrapper.f90(2122): error #6285: There is no matching specific subroutine for this generic subroutine call.   [MPI_REDUCE]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_REDUCE( MPI_IN_PLACE, rbuffarr, nelem, MPI_REAL8, MPI_MAX &amp;
<br>
-------------^
<br>
<p><p>In our code I observed the bug with MPI_BCAST, MPI_REDUCE, MPI_ALLREDUCE,
<br>
but probably there may be other MPI-routines with the same kind of bug.
<br>
<p>This bug occurred for                               :     OpenMPI-1.10.0  with Intel-16.0.0
<br>
In contrast, this bug did NOT occur for:     OpenMPI-1.8.8    with Intel-16.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OpenMPI-1.8.8    with Intel-15.0.3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OpenMPI-1.10.0  with gfortran-5.2.0
<br>
<p>Greetings
<br>
Michael Rachner
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28050/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28051.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>Previous message:</strong> <a href="28049.php">Howard Pritchard: "Re: [OMPI users] mpijavac doesn't compile any thing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28051.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
<li><strong>Maybe reply:</strong> <a href="28051.php">Gilles Gouaillardet: "Re: [OMPI users] Bug in Fortran-module MPI of OpenMPI 1.10.0 with Intel-Ftn-compiler"</a>
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
