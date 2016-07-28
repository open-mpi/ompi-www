<?
$subject_val = "[OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 04:49:49 2008" -->
<!-- isoreceived="20081205094949" -->
<!-- sent="Fri, 05 Dec 2008 10:49:44 +0100" -->
<!-- isosent="20081205094944" -->
<!-- name="Jens" -->
<!-- email="jens-devel_at_[hidden]" -->
<!-- subject="[OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()" -->
<!-- id="4938F938.5080303_at_gmx.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()<br>
<strong>From:</strong> Jens (<em>jens-devel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-05 04:49:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7403.php">Yasmine Yacoub: "[OMPI users] MCA parameter"</a>
<li><strong>Previous message:</strong> <a href="7401.php">Anthony Chan: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7404.php">Jeff Squyres: "Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
<li><strong>Reply:</strong> <a href="7404.php">Jeff Squyres: "Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I just switched from MPICH2 to openmpi because of sge-support, but I am
<br>
missing some mpi-functions for fortran 90.
<br>
<p>Does anyone know why
<br>
&nbsp;MPI_COMM_GET_ATTR()
<br>
&nbsp;MPI_ATTR_GET()
<br>
are not available? They work fine with MPICH2.
<br>
<p>I compiled openmpi 1.2.8/1.3rc on a clean CentOS 5.2 with GNU-compilers
<br>
and Intel 11.0. Both give me the same error:
<br>
<p>GNU:
<br>
Error: There is no specific subroutine for the generic 'mpi_attr_get' at (1)
<br>
<p>Intel 11.0:
<br>
hello_f90.f90(22): error #6285: There is no matching specific subroutine
<br>
for this generic subroutine call.   [MPI_ATTR_GET]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_ATTR_GET(MPI_COMM_WORLD, MPI_IO, attr_val, attr_flag, ierr)
<br>
<p>Any ideas ...?
<br>
<p>Greetings
<br>
Jens
<br>
<p>--------------------------------
<br>
program main
<br>
&nbsp;use mpi
<br>
&nbsp;implicit none
<br>
&nbsp;integer :: ierr, rank, size
<br>
&nbsp;integer :: attr_val, attr_flag
<br>
<p>&nbsp;call MPI_INIT(ierr)
<br>
&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
<br>
&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD, size, ierr)
<br>
<p>&nbsp;call MPI_COMM_GET_ATTR(MPI_COMM_WORLD, MPI_IO, attr_val, attr_flag, ierr)
<br>
&nbsp;call MPI_ATTR_GET(MPI_COMM_WORLD, MPI_IO, attr_val, attr_flag, ierr)
<br>
<p>&nbsp;print *, &quot;Hello, world, I am &quot;, rank, &quot; of &quot;, size
<br>
&nbsp;call MPI_FINALIZE(ierr)
<br>
end
<br>
-------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7403.php">Yasmine Yacoub: "[OMPI users] MCA parameter"</a>
<li><strong>Previous message:</strong> <a href="7401.php">Anthony Chan: "Re: [OMPI users] Issue with Profiling Fortran code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7404.php">Jeff Squyres: "Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
<li><strong>Reply:</strong> <a href="7404.php">Jeff Squyres: "Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
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
