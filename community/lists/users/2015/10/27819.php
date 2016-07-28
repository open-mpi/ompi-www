<?
$subject_val = "[OMPI users] MPI_CART_CREATE no matching specific subroutine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  6 15:31:20 2015" -->
<!-- isoreceived="20151006193120" -->
<!-- sent="Tue, 6 Oct 2015 14:31:17 -0500" -->
<!-- isosent="20151006193117" -->
<!-- name="Hector E Barrios Molano" -->
<!-- email="hectorb_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_CART_CREATE no matching specific subroutine" -->
<!-- id="CANv8CY-3uMgGDAVrxqWpgjaObQS0WkOpz0+kRTxzL8L6jtkk1w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_CART_CREATE no matching specific subroutine<br>
<strong>From:</strong> Hector E Barrios Molano (<em>hectorb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-06 15:31:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27820.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Previous message:</strong> <a href="27818.php">marcin.krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27824.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_CART_CREATE no matching specific subroutine"</a>
<li><strong>Reply:</strong> <a href="27824.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_CART_CREATE no matching specific subroutine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Open MPI Experts!
<br>
<p>I'm using OpenMPI v1.10.0 and get this error when using MPI_CART_CREATE:
<br>
<p>simple.f90(10): error #6285: There is no matching specific subroutine for
<br>
this generic subroutine call.   [MPI_CART_CREATE]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_CART_CREATE( MPI_COMM_WORLD, 1, numprocs, .false., .true.,
<br>
comm1d, ierr )
<br>
---------^
<br>
compilation aborted for simple.f90 (code 1)
<br>
<p><p>I'm using ifort v 15.0.3 through mpifort wrapper
<br>
<p>Here is the code I'm trying to compile:
<br>
<p>program main
<br>
&nbsp;&nbsp;&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer myid, numprocs, ierr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer comm1d, nbrbottom, nbrtop, s, e, it
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT( ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK( MPI_COMM_WORLD, myid, ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE( MPI_COMM_WORLD, numprocs, ierr )
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_CART_CREATE( MPI_COMM_WORLD, 1, numprocs, .false., .true.,
<br>
comm1d, ierr )
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK( comm1d, myid, ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Cart_shift( comm1d, 0,  1, nbrbottom, nbrtop, ierr )
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FINALIZE(ierr)
<br>
end program
<br>
<p><p>It seems that everything is ok, do you know why I'm having this problem?
<br>
<p>Thank you very much for your help!
<br>
<p>Best regards,
<br>
<p>Hector
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27819/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27820.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Previous message:</strong> <a href="27818.php">marcin.krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27824.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_CART_CREATE no matching specific subroutine"</a>
<li><strong>Reply:</strong> <a href="27824.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_CART_CREATE no matching specific subroutine"</a>
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
