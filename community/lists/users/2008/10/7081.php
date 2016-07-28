<?
$subject_val = "[OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 23 07:38:00 2008" -->
<!-- isoreceived="20081023113800" -->
<!-- sent="Thu, 23 Oct 2008 12:37:51 +0100 (BST)" -->
<!-- isosent="20081023113751" -->
<!-- name="Julien Devriendt" -->
<!-- email="jeg_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90" -->
<!-- id="Pine.LNX.4.62.0810231229470.26405_at_hoy.physics.ox.ac.uk" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90<br>
<strong>From:</strong> Julien Devriendt (<em>jeg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-23 07:37:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7082.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Previous message:</strong> <a href="7080.php">Lenny Verkhovsky: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7100.php">Jeff Squyres: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<li><strong>Reply:</strong> <a href="7100.php">Jeff Squyres: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm trying to do an MPI_ALLREDUCE with quadruple precision real and 
<br>
MPI_SUM and open mpi does not give me the correct answer (vartemp
<br>
is equal to vartored instead of 2*vartored). Switching to double precision 
<br>
real works fine.
<br>
My version of openmpi is 1.2.7 and it has been compiled with ifort v10.1
<br>
and icc/icpc at installation
<br>
<p>Here's the simple f90 code which fails:
<br>
<p>program test_quad
<br>
<p>&nbsp;&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;&nbsp;include &quot;mpif.h&quot;
<br>
<p><p>&nbsp;&nbsp;&nbsp;real(kind=16)             :: vartored(8),vartemp(8)
<br>
&nbsp;&nbsp;&nbsp;integer                   :: nn,nslaves,my_index
<br>
&nbsp;&nbsp;&nbsp;integer                   :: mpierror
<br>
<p><p>&nbsp;&nbsp;&nbsp;call MPI_INIT(mpierror)
<br>
&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD,nslaves,mpierror)
<br>
&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD,my_index,mpierror)
<br>
<p>&nbsp;&nbsp;&nbsp;nn       = 8
<br>
&nbsp;&nbsp;&nbsp;vartored = 1.0_16
<br>
&nbsp;&nbsp;&nbsp;vartemp  = 0.0_16
<br>
&nbsp;&nbsp;&nbsp;print*,&quot;P1 &quot;,my_index,vartored
<br>
&nbsp;&nbsp;&nbsp;call MPI_ALLREDUCE(vartored,vartemp,nn,MPI_REAL16,MPI_SUM,MPI_COMM_WORLD,mpierror)
<br>
&nbsp;&nbsp;&nbsp;print*,&quot;P2 &quot;,my_index,vartemp
<br>
<p>&nbsp;&nbsp;&nbsp;stop
<br>
<p>end program test_quad
<br>
<p>Any idea why this happens?
<br>
<p>Many thanks in advance!
<br>
<p>J.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7082.php">Mi Yan: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Previous message:</strong> <a href="7080.php">Lenny Verkhovsky: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7100.php">Jeff Squyres: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
<li><strong>Reply:</strong> <a href="7100.php">Jeff Squyres: "Re: [OMPI users] MPI_SUM and MPI_REAL16 with MPI_ALLREDUCE in fortran90"</a>
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
