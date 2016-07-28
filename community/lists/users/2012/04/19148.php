<?
$subject_val = "Re: [OMPI users] MPI_COMPLEX16";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 26 18:54:05 2012" -->
<!-- isoreceived="20120426225405" -->
<!-- sent="Fri, 27 Apr 2012 08:54:00 +1000" -->
<!-- isosent="20120426225400" -->
<!-- name="David Singleton" -->
<!-- email="David.Singleton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMPLEX16" -->
<!-- id="4F99D208.1080900_at_anu.edu.au" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7519_1335480387_4F99D042_7519_15467_1_4F99CF90.40909_at_anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_COMPLEX16<br>
<strong>From:</strong> David Singleton (<em>David.Singleton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-26 18:54:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19149.php">Rémi Palancher: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>Previous message:</strong> <a href="19147.php">David Singleton: "[OMPI users] MPI_COMPLEX16"</a>
<li><strong>Maybe in reply to:</strong> <a href="19147.php">David Singleton: "[OMPI users] MPI_COMPLEX16"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19333.php">Patrick Le Dot: "Re: [OMPI users] MPI_COMPLEX16"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19333.php">Patrick Le Dot: "Re: [OMPI users] MPI_COMPLEX16"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I should have checked earlier - same for MPI_COMPLEX and MPI_COMPLEX8.
<br>
<p>David
<br>
<p>On 04/27/2012 08:43 AM, David Singleton wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Apologies if this has already been covered somewhere. One of our users
</span><br>
<span class="quotelev1">&gt; has noticed that MPI_COMPLEX16 is flagged as an invalid type in 1.5.4
</span><br>
<span class="quotelev1">&gt; but not in 1.4.3 while MPI_DOUBLE_COMPLEX is accepted for both. This is
</span><br>
<span class="quotelev1">&gt; with either gfortran or intel-fc. Superficially, the configure looks
</span><br>
<span class="quotelev1">&gt; the same for 1.4.3 and 1.5.4, eg.
</span><br>
<span class="quotelev1">&gt; % grep COMPLEX16 opal/include/opal_config.h
</span><br>
<span class="quotelev1">&gt; #define OMPI_HAVE_F90_COMPLEX16 1
</span><br>
<span class="quotelev1">&gt; #define OMPI_HAVE_FORTRAN_COMPLEX16 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Their test code (appended below) produces:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; % module load openmpi/1.4.3
</span><br>
<span class="quotelev1">&gt; % mpif90 mpi_complex_test.f90
</span><br>
<span class="quotelev1">&gt; % mpirun -np 2 ./a.out
</span><br>
<span class="quotelev1">&gt; SUM1 (3.00000000000000,-1.00000000000000)
</span><br>
<span class="quotelev1">&gt; SUM2 (3.00000000000000,-1.00000000000000)
</span><br>
<span class="quotelev1">&gt; % module swap openmpi/1.5.4
</span><br>
<span class="quotelev1">&gt; % mpif90 mpi_complex_test.f90
</span><br>
<span class="quotelev1">&gt; % mpirun -np 2 ./a.out
</span><br>
<span class="quotelev1">&gt; [vayu1:1935] *** An error occurred in MPI_Reduce
</span><br>
<span class="quotelev1">&gt; [vayu1:1935] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [vayu1:1935] *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev1">&gt; [vayu1:1935] *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev1">&gt; SUM1 (3.00000000000000,-1.00000000000000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any help,
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; program mpi_test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; implicit none
</span><br>
<span class="quotelev1">&gt; include 'mpif.h'
</span><br>
<span class="quotelev1">&gt; integer, parameter :: r8 = selected_real_kind(12)
</span><br>
<span class="quotelev1">&gt; complex(kind=r8) :: local, global
</span><br>
<span class="quotelev1">&gt; integer :: ierr, myid, nproc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; call MPI_INIT (ierr)
</span><br>
<span class="quotelev1">&gt; call MPI_COMM_RANK (MPI_COMM_WORLD, myid, ierr)
</span><br>
<span class="quotelev1">&gt; call MPI_COMM_SIZE (MPI_COMM_WORLD, nproc, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; local = cmplx(myid+1.0, myid-1.0, kind=r8)
</span><br>
<span class="quotelev1">&gt; call MPI_REDUCE (local, global, 1, MPI_DOUBLE_COMPLEX, MPI_SUM, 0, &amp;
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev1">&gt; if ( myid == 0 ) then
</span><br>
<span class="quotelev1">&gt; print*, 'SUM1', global
</span><br>
<span class="quotelev1">&gt; end if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; call MPI_REDUCE (local, global, 1, MPI_COMPLEX16, MPI_SUM, 0, &amp;
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev1">&gt; if ( myid == 0 ) then
</span><br>
<span class="quotelev1">&gt; print*, 'SUM2', global
</span><br>
<span class="quotelev1">&gt; end if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; call MPI_FINALIZE (ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; end program mpi_test
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19149.php">Rémi Palancher: "Re: [OMPI users] Error with multiple MPI runs inside one Slurm allocation (with QLogic PSM)"</a>
<li><strong>Previous message:</strong> <a href="19147.php">David Singleton: "[OMPI users] MPI_COMPLEX16"</a>
<li><strong>Maybe in reply to:</strong> <a href="19147.php">David Singleton: "[OMPI users] MPI_COMPLEX16"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19333.php">Patrick Le Dot: "Re: [OMPI users] MPI_COMPLEX16"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19333.php">Patrick Le Dot: "Re: [OMPI users] MPI_COMPLEX16"</a>
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
