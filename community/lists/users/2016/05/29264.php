<?
$subject_val = "[OMPI users] fortran problem when mixing &quot;use mpi&quot; and &quot;use mpi_f08&quot; with gfortran 5";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 21 12:17:43 2016" -->
<!-- isoreceived="20160521161743" -->
<!-- sent="Sat, 21 May 2016 18:17:13 +0200" -->
<!-- isosent="20160521161713" -->
<!-- name="Andrea Negri" -->
<!-- email="negri.andre_at_[hidden]" -->
<!-- subject="[OMPI users] fortran problem when mixing &amp;quot;use mpi&amp;quot; and &amp;quot;use mpi_f08&amp;quot; with gfortran 5" -->
<!-- id="CAPUxaiRhZBTg2HncCaXDO70oGzThR+8OfOx9aXzKpY5k4yt86A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] fortran problem when mixing &quot;use mpi&quot; and &quot;use mpi_f08&quot; with gfortran 5<br>
<strong>From:</strong> Andrea Negri (<em>negri.andre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-21 12:17:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29265.php">Jeff Hammond: "Re: [OMPI users] [slightly off topic] hardware solutions with monetary cost in mind"</a>
<li><strong>Previous message:</strong> <a href="29263.php">Akihiro Tabuchi: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29312.php">Jeff Squyres (jsquyres): "Re: [OMPI users] fortran problem when mixing &quot;use mpi&quot; and &quot;use	mpi_f08&quot; with gfortran 5"</a>
<li><strong>Reply:</strong> <a href="29312.php">Jeff Squyres (jsquyres): "Re: [OMPI users] fortran problem when mixing &quot;use mpi&quot; and &quot;use	mpi_f08&quot; with gfortran 5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, in the last few days I ported my entire fortran mpi code to &quot;use
<br>
mpif_08&quot;. You really did a great job with this interface. However,
<br>
since HDF5 still uses integers to handle communicators, I have a
<br>
module where I still use &quot;use mpi&quot;, and with gfortran 5.3.0 and
<br>
openmpi-1.10.2 I got some errors.
<br>
<p>I have been able to produce an extremely minimalistic example that
<br>
reproduces the same errors. If you try to compile with mpifort -c this
<br>
file
<br>
<p>!==========================================
<br>
module test1_mod
<br>
! I use ONLY here just to show you that errors happen even with  ONLY
<br>
use mpi, only: MPI_BARRIER,  MPI_COMM_WORLD
<br>
implicit none
<br>
private
<br>
public ::  test1
<br>
contains
<br>
subroutine test1(a)
<br>
implicit none
<br>
real, intent(inout) :: a
<br>
integer :: ierr
<br>
a=0
<br>
call mpi_barrier(MPI_COMM_WORLD, ierr)
<br>
endsubroutine test1
<br>
endmodule test1_mod
<br>
<p><p><p>module prova2
<br>
use mpi_f08
<br>
implicit none
<br>
private
<br>
contains
<br>
subroutine prova3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;use test
<br>
&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;real :: a
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;call test1(a)
<br>
endsubroutine prova3
<br>
endmodule prova2
<br>
!==========================================
<br>
<p><p>and I obtain the errors:
<br>
<p><p><p><p><p><p>use mpi_f08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
prova.f90:2.4:
<br>
<p>use mpi, only: MPI_BARRIER,  MPI_COMM_WORLD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2
<br>
Error: Variable mpi_argv_null with binding label mpi_fortran_argv_null
<br>
at (1) uses the same global identifier as entity at (2)
<br>
prova.f90:19.4:
<br>
<p>use mpi_f08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
prova.f90:2.4:
<br>
<p>use mpi, only: MPI_BARRIER,  MPI_COMM_WORLD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2
<br>
Error: Variable mpi_argvs_null with binding label
<br>
mpi_fortran_argvs_null at (1) uses the same global identifier as
<br>
entity at (2)
<br>
prova.f90:19.4:
<br>
<p>use mpi_f08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
prova.f90:2.4:
<br>
<p>use mpi, only: MPI_BARRIER,  MPI_COMM_WORLD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2
<br>
Error: Variable mpi_bottom with binding label mpi_fortran_bottom at
<br>
(1) uses the same global identifier as entity at (2)
<br>
prova.f90:19.4:
<br>
<p>use mpi_f08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
prova.f90:2.4:
<br>
<p>use mpi, only: MPI_BARRIER,  MPI_COMM_WORLD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2
<br>
Error: Variable mpi_errcodes_ignore with binding label
<br>
mpi_fortran_errcodes_ignore at (1) uses the same global identifier as
<br>
entity at (2)
<br>
prova.f90:19.4:
<br>
<p>use mpi_f08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
prova.f90:2.4:
<br>
<p>use mpi, only: MPI_BARRIER,  MPI_COMM_WORLD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2
<br>
Error: Variable mpi_in_place with binding label mpi_fortran_in_place
<br>
at (1) uses the same global identifier as entity at (2)
<br>
prova.f90:19.4:
<br>
<p>use mpi_f08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
prova.f90:2.4:
<br>
<p>use mpi, only: MPI_BARRIER,  MPI_COMM_WORLD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2
<br>
Error: Variable mpi_status_ignore with binding label
<br>
mpi_fortran_status_ignore at (1) uses the same global identifier as
<br>
entity at (2)
<br>
prova.f90:19.4:
<br>
<p>use mpi_f08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
prova.f90:2.4:
<br>
<p>use mpi, only: MPI_BARRIER,  MPI_COMM_WORLD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2
<br>
Error: Variable mpi_statuses_ignore with binding label
<br>
mpi_fortran_statuses_ignore at (1) uses the same global identifier as
<br>
entity at (2)
<br>
prova.f90:19.4:
<br>
<p>use mpi_f08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
prova.f90:2.4:
<br>
<p>use mpi, only: MPI_BARRIER,  MPI_COMM_WORLD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2
<br>
Error: Variable mpi_unweighted with binding label
<br>
mpi_fortran_unweighted at (1) uses the same global identifier as
<br>
entity at (2)
<br>
prova.f90:19.4:
<br>
<p>use mpi_f08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
prova.f90:2.4:
<br>
<p>use mpi, only: MPI_BARRIER,  MPI_COMM_WORLD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2
<br>
Error: Variable mpi_weights_empty with binding label
<br>
mpi_fortran_weights_empty at (1) uses the same global identifier as
<br>
entity at (2)
<br>
<p><p><p><p>I don't know if this is a compiler-related issue, since the PRIVATE
<br>
statement should mask everything...
<br>
Thanks in advance for the help.
<br>
<p>Andrea
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29265.php">Jeff Hammond: "Re: [OMPI users] [slightly off topic] hardware solutions with monetary cost in mind"</a>
<li><strong>Previous message:</strong> <a href="29263.php">Akihiro Tabuchi: "Re: [OMPI users] MPI_Put/Get with many nested derived type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29312.php">Jeff Squyres (jsquyres): "Re: [OMPI users] fortran problem when mixing &quot;use mpi&quot; and &quot;use	mpi_f08&quot; with gfortran 5"</a>
<li><strong>Reply:</strong> <a href="29312.php">Jeff Squyres (jsquyres): "Re: [OMPI users] fortran problem when mixing &quot;use mpi&quot; and &quot;use	mpi_f08&quot; with gfortran 5"</a>
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
