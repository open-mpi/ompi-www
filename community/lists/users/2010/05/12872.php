<?
$subject_val = "Re: [OMPI users] MPI_Comm_set_errhandler: error in Fortran90 Interfacempi.mod";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  3 22:32:27 2010" -->
<!-- isoreceived="20100504023227" -->
<!-- sent="Mon, 3 May 2010 21:32:18 -0500" -->
<!-- isosent="20100504023218" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_set_errhandler: error in Fortran90 Interfacempi.mod" -->
<!-- id="17C3A40B-E763-4A9E-A48D-DC711592729A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BDEEF43.2030903_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Comm_set_errhandler: error in Fortran90 Interfacempi.mod<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-03 22:32:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12873.php">Jeff Squyres: "Re: [OMPI users] Calling MPI from a CGI script"</a>
<li><strong>Previous message:</strong> <a href="12871.php">Pooja Varshneya: "[OMPI users] MPIError:MPI_Recv: MPI_ERR_TRUNCATE:"</a>
<li><strong>In reply to:</strong> <a href="12869.php">Paul Kapinos: "[OMPI users] MPI_Comm_set_errhandler: error in Fortran90 Interface mpi.mod"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul --
<br>
<p>Most excellent; thanks for the diagnosis and the reproducer.  You are absolutely correct that we have a bug in the F90 interface in MPI_COMM_SET_ERRHANDLER and MPI_WIN_SET_ERRHANDLER.  The INTENT for the communicator parameter was mistakenly set to INOUT instead of just IN, meaning that a constant parameter like MPI_COMM_WORLD is prohibited from being passed.
<br>
<p>A workaround is to assign MPI_COMM_WORLD to temporary integer variable and use that instead.
<br>
<p>The fix for OMPI is very easy, but I need to double check with some fortran experts tomorrow about the ABI implications for libmpif90.so.
<br>
<p><p>On May 3, 2010, at 10:44 AM, Paul Kapinos wrote:
<br>
<p><span class="quotelev1">&gt; Hello OpenMPI / Sun/Oracle MPI folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; we believe that the OpenMPI and SunMPI (Cluster Tools)  has an error in
</span><br>
<span class="quotelev1">&gt; the Fortran-90 (f90) bindings of the MPI_Comm_set_errhandler routine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tested MPI versions: OpenMPI/1.3.3 and Cluster Tools 8.2.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Consider the attached example. This file uses the &quot;USE MPI&quot; to bind the
</span><br>
<span class="quotelev1">&gt; MPI routines f90-style. The f77-style &quot;include 'mpif.h'&quot; is commented out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If using Intel MPI the attached example is running error-free (with both
</span><br>
<span class="quotelev1">&gt; bindings).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If trying to compiler with OpenMPI and using f90 bindings, any compilers
</span><br>
<span class="quotelev1">&gt; tested (Intel/11.1, Sun Studio/12.1, gcc/4.1) says the code cannot be
</span><br>
<span class="quotelev1">&gt; build because of trying to use a constant (MPI_COMM_WORLD) as input.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, the output of the Intel compiler:
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI_Comm_set_errhandler.f90(12): error #6638: An actual argument is an
</span><br>
<span class="quotelev1">&gt; expression or constant; this is not valid since the associated dummy
</span><br>
<span class="quotelev1">&gt; argument has the explicit INTENT(OUT) or INTENT(INOUT) attribute.   [0]
</span><br>
<span class="quotelev1">&gt; call MPI_Comm_set_errhandler (MPI_COMM_WORLD, errhandler, ierr)      !
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD in MPI_Comm_set_errhandler is the problem...
</span><br>
<span class="quotelev1">&gt; ------------------------------^
</span><br>
<span class="quotelev1">&gt; compilation aborted for MPI_Comm_set_errhandler.f90 (code 1)
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; With the f77 bindings, the attached program compiles and runs fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The older (deprecated) routine MPI_Errhandler_set which is defined to
</span><br>
<span class="quotelev1">&gt; have the same functionality works fine with both bindings and all MPI's.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, we believe the OpenMPI implementation of MPI standard erroneously
</span><br>
<span class="quotelev1">&gt; sets the INTENT(OUT) or INTENT(INOUT) attribute for the communicator
</span><br>
<span class="quotelev1">&gt; attribute. The definition of an error handle for MPI_COMM_WORLD should
</span><br>
<span class="quotelev1">&gt; be possible which it is currently not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best wishes,
</span><br>
<span class="quotelev1">&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PROGRAM sunerr
</span><br>
<span class="quotelev1">&gt; USE MPI                                   ! f90: Error on MPI_Comm_set_errhandler if using this with OpenMPI / Sun MPI
</span><br>
<span class="quotelev1">&gt; !include 'mpif.h'                          ! f77: Works fine with all MPI's tested
</span><br>
<span class="quotelev1">&gt; IMPLICIT NONE
</span><br>
<span class="quotelev1">&gt; !
</span><br>
<span class="quotelev1">&gt; integer :: data = 1, errhandler, ierr
</span><br>
<span class="quotelev1">&gt; external AbortWithMessage
</span><br>
<span class="quotelev1">&gt; !
</span><br>
<span class="quotelev1">&gt; call MPI_Init(ierr)
</span><br>
<span class="quotelev1">&gt; call MPI_Comm_create_errhandler (AbortWithMessage, errhandler, ierr)  ! Creating a handle: no problem
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; call MPI_Comm_set_errhandler (MPI_COMM_WORLD, errhandler, ierr)      ! MPI_COMM_WORLD in MPI_Comm_set_errhandler is the problem... in f90
</span><br>
<span class="quotelev1">&gt; !call MPI_Errhandler_set (MPI_COMM_WORLD, errhandler, ierr)            ! and this one deprecated function works fine both for f77 and f90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ! ... a errornous MPI routine ... 
</span><br>
<span class="quotelev1">&gt; call MPI_Send (data, 1, MPI_INTEGER, 1, -12, MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev1">&gt; call MPI_Finalize( ierr )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; END PROGRAM sunerr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; subroutine AbortWithMessage (comm, errorcode)
</span><br>
<span class="quotelev1">&gt;  use mpi
</span><br>
<span class="quotelev1">&gt;  implicit none
</span><br>
<span class="quotelev1">&gt;  integer :: comm, errorcode
</span><br>
<span class="quotelev1">&gt;  character(LEN=MPI_MAX_ERROR_STRING) :: errstr
</span><br>
<span class="quotelev1">&gt;  integer :: stringlength, ierr
</span><br>
<span class="quotelev1">&gt;  call MPI_Error_string (errorcode, errstr, stringlength, ierr)
</span><br>
<span class="quotelev1">&gt;  write (*,*) 'Error:  =+=&gt;  ', errstr, ' =+=&gt; Aborting'
</span><br>
<span class="quotelev1">&gt;  call MPI_Abort (comm, errorcode, ierr)
</span><br>
<span class="quotelev1">&gt; end subroutine AbortWithMessage
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12873.php">Jeff Squyres: "Re: [OMPI users] Calling MPI from a CGI script"</a>
<li><strong>Previous message:</strong> <a href="12871.php">Pooja Varshneya: "[OMPI users] MPIError:MPI_Recv: MPI_ERR_TRUNCATE:"</a>
<li><strong>In reply to:</strong> <a href="12869.php">Paul Kapinos: "[OMPI users] MPI_Comm_set_errhandler: error in Fortran90 Interface mpi.mod"</a>
<!-- nextthread="start" -->
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
