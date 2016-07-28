<?
$subject_val = "Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 08:59:50 2008" -->
<!-- isoreceived="20081205135950" -->
<!-- sent="Fri, 5 Dec 2008 08:59:44 -0500" -->
<!-- isosent="20081205135944" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()" -->
<!-- id="B1AF6AEE-291C-48EB-B86B-53A33D98310D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4938F938.5080303_at_gmx.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-05 08:59:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7405.php">Nick Wright: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Previous message:</strong> <a href="7403.php">Yasmine Yacoub: "[OMPI users] MCA parameter"</a>
<li><strong>In reply to:</strong> <a href="7402.php">Jens: "[OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7406.php">Jens: "Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
<li><strong>Reply:</strong> <a href="7406.php">Jens: "Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
These functions do exist in Open MPI, but your code is not quite  
<br>
correct.  Here's a new version that is correct:
<br>
<p>-----
<br>
program main
<br>
use mpi
<br>
implicit none
<br>
integer :: ierr, rank, size
<br>
integer :: mpi1_val
<br>
integer(kind = MPI_ADDRESS_KIND) :: mpi2_val
<br>
logical :: attr_flag
<br>
<p>call MPI_INIT(ierr)
<br>
call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
<br>
call MPI_COMM_SIZE(MPI_COMM_WORLD, size, ierr)
<br>
<p>call MPI_COMM_GET_ATTR(MPI_COMM_WORLD, MPI_IO, mpi2_val, attr_flag,  
<br>
ierr)
<br>
call MPI_ATTR_GET(MPI_COMM_WORLD, MPI_IO, mpi1_val, attr_flag, ierr)
<br>
<p>print *, &quot;Hello, world, I am &quot;, rank, &quot; of &quot;, size
<br>
call MPI_FINALIZE(ierr)
<br>
end
<br>
-----
<br>
<p>Note three things:
<br>
<p>1. attr_flag is supposed to be of type logical, not integer
<br>
2. In MPI-1 (MPI_ATTR_GET) the type of the value is integer
<br>
2. In MPI-2 (MPI_COMM_GET_ATTR), the type of the value is  
<br>
integer(kind=MPI_ADDRESS_KIND)
<br>
<p>F90 is strongly typed, so the F90 compiler is correct in claiming that  
<br>
functions of the signature you specified were not found.
<br>
<p>Make sense?
<br>
<p>I'm not sure why your original code works with MPICH2 -- perhaps they  
<br>
don't have F90 bindings for these functions, and therefore they're  
<br>
falling through to the F77 bindings (where no type checking is  
<br>
done)...?  If so, you're getting lucky that it works; perhaps  
<br>
sizeof(INTEGER) == sizeof(LOGICAL), and sizeof(INTEGER) ==  
<br>
sizeof(INTEGER(KIND=MPI_ADDRESS_KIND)).  That's a guess.
<br>
<p><p><p>On Dec 5, 2008, at 4:49 AM, Jens wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just switched from MPICH2 to openmpi because of sge-support, but I  
</span><br>
<span class="quotelev1">&gt; am
</span><br>
<span class="quotelev1">&gt; missing some mpi-functions for fortran 90.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone know why
</span><br>
<span class="quotelev1">&gt; MPI_COMM_GET_ATTR()
</span><br>
<span class="quotelev1">&gt; MPI_ATTR_GET()
</span><br>
<span class="quotelev1">&gt; are not available? They work fine with MPICH2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compiled openmpi 1.2.8/1.3rc on a clean CentOS 5.2 with GNU- 
</span><br>
<span class="quotelev1">&gt; compilers
</span><br>
<span class="quotelev1">&gt; and Intel 11.0. Both give me the same error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; GNU:
</span><br>
<span class="quotelev1">&gt; Error: There is no specific subroutine for the generic  
</span><br>
<span class="quotelev1">&gt; 'mpi_attr_get' at (1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Intel 11.0:
</span><br>
<span class="quotelev1">&gt; hello_f90.f90(22): error #6285: There is no matching specific  
</span><br>
<span class="quotelev1">&gt; subroutine
</span><br>
<span class="quotelev1">&gt; for this generic subroutine call.   [MPI_ATTR_GET]
</span><br>
<span class="quotelev1">&gt;    call MPI_ATTR_GET(MPI_COMM_WORLD, MPI_IO, attr_val, attr_flag,  
</span><br>
<span class="quotelev1">&gt; ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas ...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings
</span><br>
<span class="quotelev1">&gt; Jens
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------
</span><br>
<span class="quotelev1">&gt; program main
</span><br>
<span class="quotelev1">&gt; use mpi
</span><br>
<span class="quotelev1">&gt; implicit none
</span><br>
<span class="quotelev1">&gt; integer :: ierr, rank, size
</span><br>
<span class="quotelev1">&gt; integer :: attr_val, attr_flag
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
<span class="quotelev1">&gt; call MPI_COMM_GET_ATTR(MPI_COMM_WORLD, MPI_IO, attr_val, attr_flag,  
</span><br>
<span class="quotelev1">&gt; ierr)
</span><br>
<span class="quotelev1">&gt; call MPI_ATTR_GET(MPI_COMM_WORLD, MPI_IO, attr_val, attr_flag, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; print *, &quot;Hello, world, I am &quot;, rank, &quot; of &quot;, size
</span><br>
<span class="quotelev1">&gt; call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev1">&gt; end
</span><br>
<span class="quotelev1">&gt; -------------------------------
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7405.php">Nick Wright: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<li><strong>Previous message:</strong> <a href="7403.php">Yasmine Yacoub: "[OMPI users] MCA parameter"</a>
<li><strong>In reply to:</strong> <a href="7402.php">Jens: "[OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7406.php">Jens: "Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
<li><strong>Reply:</strong> <a href="7406.php">Jens: "Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
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
