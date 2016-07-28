<?
$subject_val = "Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 10:33:42 2008" -->
<!-- isoreceived="20081205153342" -->
<!-- sent="Fri, 05 Dec 2008 16:33:36 +0100" -->
<!-- isosent="20081205153336" -->
<!-- name="Jens" -->
<!-- email="jens-devel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()" -->
<!-- id="493949D0.8050003_at_gmx.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B1AF6AEE-291C-48EB-B86B-53A33D98310D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()<br>
<strong>From:</strong> Jens (<em>jens-devel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-05 10:33:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7407.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Previous message:</strong> <a href="7405.php">Nick Wright: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>In reply to:</strong> <a href="7404.php">Jeff Squyres: "Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7408.php">Jeff Squyres: "Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
<li><strong>Reply:</strong> <a href="7408.php">Jeff Squyres: "Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>thanks a lot. This fixed a bug in my code.
<br>
I already like open-mpi for this :)
<br>
<p>Greeting
<br>
Jens
<br>
<p>Jeff Squyres schrieb:
<br>
<span class="quotelev1">&gt; These functions do exist in Open MPI, but your code is not quite
</span><br>
<span class="quotelev1">&gt; correct.  Here's a new version that is correct:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; program main
</span><br>
<span class="quotelev1">&gt; use mpi
</span><br>
<span class="quotelev1">&gt; implicit none
</span><br>
<span class="quotelev1">&gt; integer :: ierr, rank, size
</span><br>
<span class="quotelev1">&gt; integer :: mpi1_val
</span><br>
<span class="quotelev1">&gt; integer(kind = MPI_ADDRESS_KIND) :: mpi2_val
</span><br>
<span class="quotelev1">&gt; logical :: attr_flag
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; call MPI_INIT(ierr)
</span><br>
<span class="quotelev1">&gt; call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
</span><br>
<span class="quotelev1">&gt; call MPI_COMM_SIZE(MPI_COMM_WORLD, size, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; call MPI_COMM_GET_ATTR(MPI_COMM_WORLD, MPI_IO, mpi2_val, attr_flag, ierr)
</span><br>
<span class="quotelev1">&gt; call MPI_ATTR_GET(MPI_COMM_WORLD, MPI_IO, mpi1_val, attr_flag, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; print *, &quot;Hello, world, I am &quot;, rank, &quot; of &quot;, size
</span><br>
<span class="quotelev1">&gt; call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev1">&gt; end
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note three things:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. attr_flag is supposed to be of type logical, not integer
</span><br>
<span class="quotelev1">&gt; 2. In MPI-1 (MPI_ATTR_GET) the type of the value is integer
</span><br>
<span class="quotelev1">&gt; 2. In MPI-2 (MPI_COMM_GET_ATTR), the type of the value is
</span><br>
<span class="quotelev1">&gt; integer(kind=MPI_ADDRESS_KIND)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; F90 is strongly typed, so the F90 compiler is correct in claiming that
</span><br>
<span class="quotelev1">&gt; functions of the signature you specified were not found.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not sure why your original code works with MPICH2 -- perhaps they
</span><br>
<span class="quotelev1">&gt; don't have F90 bindings for these functions, and therefore they're
</span><br>
<span class="quotelev1">&gt; falling through to the F77 bindings (where no type checking is
</span><br>
<span class="quotelev1">&gt; done)...?  If so, you're getting lucky that it works; perhaps
</span><br>
<span class="quotelev1">&gt; sizeof(INTEGER) == sizeof(LOGICAL), and sizeof(INTEGER) ==
</span><br>
<span class="quotelev1">&gt; sizeof(INTEGER(KIND=MPI_ADDRESS_KIND)).  That's a guess.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 5, 2008, at 4:49 AM, Jens wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just switched from MPICH2 to openmpi because of sge-support, but I am
</span><br>
<span class="quotelev2">&gt;&gt; missing some mpi-functions for fortran 90.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone know why
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_GET_ATTR()
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ATTR_GET()
</span><br>
<span class="quotelev2">&gt;&gt; are not available? They work fine with MPICH2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I compiled openmpi 1.2.8/1.3rc on a clean CentOS 5.2 with GNU-compilers
</span><br>
<span class="quotelev2">&gt;&gt; and Intel 11.0. Both give me the same error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; GNU:
</span><br>
<span class="quotelev2">&gt;&gt; Error: There is no specific subroutine for the generic 'mpi_attr_get'
</span><br>
<span class="quotelev2">&gt;&gt; at (1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Intel 11.0:
</span><br>
<span class="quotelev2">&gt;&gt; hello_f90.f90(22): error #6285: There is no matching specific subroutine
</span><br>
<span class="quotelev2">&gt;&gt; for this generic subroutine call.   [MPI_ATTR_GET]
</span><br>
<span class="quotelev2">&gt;&gt;    call MPI_ATTR_GET(MPI_COMM_WORLD, MPI_IO, attr_val, attr_flag, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas ...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greetings
</span><br>
<span class="quotelev2">&gt;&gt; Jens
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; program main
</span><br>
<span class="quotelev2">&gt;&gt; use mpi
</span><br>
<span class="quotelev2">&gt;&gt; implicit none
</span><br>
<span class="quotelev2">&gt;&gt; integer :: ierr, rank, size
</span><br>
<span class="quotelev2">&gt;&gt; integer :: attr_val, attr_flag
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_INIT(ierr)
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_COMM_SIZE(MPI_COMM_WORLD, size, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_COMM_GET_ATTR(MPI_COMM_WORLD, MPI_IO, attr_val, attr_flag, ierr)
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_ATTR_GET(MPI_COMM_WORLD, MPI_IO, attr_val, attr_flag, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; print *, &quot;Hello, world, I am &quot;, rank, &quot; of &quot;, size
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev2">&gt;&gt; end
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7407.php">Edgar Gabriel: "Re: [OMPI users] Hybrid program"</a>
<li><strong>Previous message:</strong> <a href="7405.php">Nick Wright: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>In reply to:</strong> <a href="7404.php">Jeff Squyres: "Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7408.php">Jeff Squyres: "Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
<li><strong>Reply:</strong> <a href="7408.php">Jeff Squyres: "Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
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
