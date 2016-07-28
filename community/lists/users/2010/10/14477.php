<?
$subject_val = "[OMPI users] MPI_STARTALL doesn't compile with mpif90 and a multi-dimensional request array";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 15 00:17:20 2010" -->
<!-- isoreceived="20101015041720" -->
<!-- sent="Fri, 15 Oct 2010 00:17:10 -0400" -->
<!-- isosent="20101015041710" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_STARTALL doesn't compile with mpif90 and a multi-dimensional request array" -->
<!-- id="4CB7D5C6.7070303_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a multi-dimensional request array<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-15 00:17:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14478.php">Jeff Squyres: "Re: [OMPI users] self-messaging questions"</a>
<li><strong>Previous message:</strong> <a href="14476.php">Gus Correa: "[OMPI users] self-messaging questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14479.php">Jeff Squyres: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a multi-dimensional request array"</a>
<li><strong>Reply:</strong> <a href="14479.php">Jeff Squyres: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a multi-dimensional request array"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI Experts
<br>
<p>I am having trouble compiling code with MPI_STARTALL using
<br>
OpenMPI 1.4.2 mpif90 built with gcc (4.1.2) and Intel ifort (10.1.017),
<br>
when the array of requests is multi-dimensional.
<br>
<p>It gives me this error message:
<br>
<p>**************************
<br>
fortcom: Error: mpiwrap_mod.F90, line 478: There is no matching specific 
<br>
subroutine for this generic subroutine call.   [MPI_STARTALL]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_STARTALL(nreq,req,ierr)
<br>
---------^
<br>
**************************
<br>
<p>However, if I replace MPI_STARTALL by a loop that calls
<br>
MPI_START repeated times, the compilation succeeds.
<br>
I wonder if the serialization imposed by the loop may
<br>
have some performance impact,
<br>
or if MPI_STARTALL just implements the same type of loop.
<br>
<p>Another workaround is to declare my array of requests
<br>
as a one-dimensional assumed-size array inside my subroutine.
<br>
<p>The problem seems to be that MPI_STARTALL doesn't handle 
<br>
multi-dimensional arrays of requests.
<br>
<p>I can live with either workaround above,
<br>
but is this supposed to be so?
<br>
<p>***
<br>
<p>I poked around on the OpenMPI code in ompi/mpi/f90/scripts
<br>
and I found out that several OpenMPI Fortran90 subroutines
<br>
have code to handle arrays up to rank 7 (the Fortran90 maximum),
<br>
mostly for the send and receive buffers.
<br>
<p>However, other subroutines and other array arguments, which can also
<br>
legitimately be multi-dimensional arrays, are not treated the same way.
<br>
<p>In particular, there is only one (assumed-size) dimension for the
<br>
array of requests in MPI_STARTALL, for instance.
<br>
MPI_WAITALL is another example of restriction,
<br>
but there are probably other examples,
<br>
most likely on those subroutines that take request and status arrays.
<br>
<p>I guess it would be nice if all OpenMPI
<br>
subroutines in the Fortran90 bindings would accept
<br>
arrays of rank up to 7 on all of their array dummy arguments.
<br>
Assuming this doesn't violate the MPI standard, of course.
<br>
This would allow more flexibility when writing MPI programs
<br>
in Fortran90.
<br>
<p>***
<br>
<p>More details:
<br>
<p>This is the code that fails to compile (np is global in the module):
<br>
<p>***********************************
<br>
&nbsp;&nbsp;&nbsp;subroutine mpiwrap_startall(req)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, dimension(0:np-1,0:1), intent(inout) :: req
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, parameter :: nreq = 2*np
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: ierr
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_STARTALL(nreq,req,ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;end subroutine mpiwrap_startall
<br>
********************************
<br>
<p>This code that compiles:
<br>
<p>*****************************
<br>
&nbsp;&nbsp;&nbsp;subroutine mpiwrap_startall(req)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, dimension(0:np-1,0:1), intent(inout) :: req
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: pp, ii
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: ierr
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do ii=0,1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do pp=0,np-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_START(req(ii,pp),ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enddo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enddo
<br>
<p>&nbsp;&nbsp;&nbsp;end subroutine mpiwrap_startall
<br>
*********************************
<br>
<p>This is yet another code that compiles:
<br>
<p>*********************************
<br>
&nbsp;&nbsp;&nbsp;subroutine mpiwrap_startall(req)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;! dummy arguments
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, dimension(*), intent(inout) :: req
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer, parameter :: nreq = 2*np
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: ierr
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_STARTALL(nreq,req,ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;end subroutine mpiwrap_startall
<br>
<p>*********************************
<br>
<p><p>Many thanks,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14478.php">Jeff Squyres: "Re: [OMPI users] self-messaging questions"</a>
<li><strong>Previous message:</strong> <a href="14476.php">Gus Correa: "[OMPI users] self-messaging questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14479.php">Jeff Squyres: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a multi-dimensional request array"</a>
<li><strong>Reply:</strong> <a href="14479.php">Jeff Squyres: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a multi-dimensional request array"</a>
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
