<?
$subject_val = "[OMPI users] MPI_COMPLEX16";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 26 18:43:35 2012" -->
<!-- isoreceived="20120426224335" -->
<!-- sent="Fri, 27 Apr 2012 08:43:28 +1000" -->
<!-- isosent="20120426224328" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_COMPLEX16" -->
<!-- id="4F99CF90.40909_at_anu.edu.au" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI_COMPLEX16<br>
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-26 18:43:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19148.php">David Singleton: "Re: [OMPI users] MPI_COMPLEX16"</a>
<li><strong>Previous message:</strong> <a href="19146.php">Prentice Bisbal: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19148.php">David Singleton: "Re: [OMPI users] MPI_COMPLEX16"</a>
<li><strong>Maybe reply:</strong> <a href="19148.php">David Singleton: "Re: [OMPI users] MPI_COMPLEX16"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19334.php">David Singleton: "Re: [OMPI users] MPI_COMPLEX16"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Apologies if this has already been covered somewhere.  One of our users
<br>
has noticed that MPI_COMPLEX16 is flagged as an invalid type in 1.5.4
<br>
but not in 1.4.3 while MPI_DOUBLE_COMPLEX is accepted for both. This is
<br>
with either gfortran or intel-fc.  Superficially, the configure looks
<br>
the same for 1.4.3 and 1.5.4,  eg.
<br>
% grep COMPLEX16  opal/include/opal_config.h
<br>
#define OMPI_HAVE_F90_COMPLEX16 1
<br>
#define OMPI_HAVE_FORTRAN_COMPLEX16 1
<br>
<p>Their test code (appended below) produces:
<br>
<p>% module load openmpi/1.4.3
<br>
% mpif90 mpi_complex_test.f90
<br>
% mpirun -np 2 ./a.out
<br>
&nbsp;&nbsp;SUM1 (3.00000000000000,-1.00000000000000)
<br>
&nbsp;&nbsp;SUM2 (3.00000000000000,-1.00000000000000)
<br>
% module swap openmpi/1.5.4
<br>
% mpif90 mpi_complex_test.f90
<br>
% mpirun -np 2 ./a.out
<br>
[vayu1:1935] *** An error occurred in MPI_Reduce
<br>
[vayu1:1935] *** on communicator MPI_COMM_WORLD
<br>
[vayu1:1935] *** MPI_ERR_TYPE: invalid datatype
<br>
[vayu1:1935] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
<br>
&nbsp;&nbsp;SUM1 (3.00000000000000,-1.00000000000000)
<br>
<p>Thanks for any help,
<br>
David
<br>
<p><p>program mpi_test
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, parameter :: r8 = selected_real_kind(12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;complex(kind=r8) :: local, global
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer :: ierr, myid, nproc
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT (ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK (MPI_COMM_WORLD, myid, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE (MPI_COMM_WORLD, nproc, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;local = cmplx(myid+1.0, myid-1.0, kind=r8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_REDUCE (local, global, 1, MPI_DOUBLE_COMPLEX, MPI_SUM, 0, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ( myid == 0 ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print*, 'SUM1', global
<br>
&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;call MPI_REDUCE (local, global, 1, MPI_COMPLEX16, MPI_SUM, 0, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if ( myid == 0 ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print*, 'SUM2', global
<br>
&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FINALIZE (ierr)
<br>
<p>end program mpi_test
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19148.php">David Singleton: "Re: [OMPI users] MPI_COMPLEX16"</a>
<li><strong>Previous message:</strong> <a href="19146.php">Prentice Bisbal: "Re: [OMPI users] regarding the problem occurred while running anmpi programs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19148.php">David Singleton: "Re: [OMPI users] MPI_COMPLEX16"</a>
<li><strong>Maybe reply:</strong> <a href="19148.php">David Singleton: "Re: [OMPI users] MPI_COMPLEX16"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19334.php">David Singleton: "Re: [OMPI users] MPI_COMPLEX16"</a>
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
