<?
$subject_val = "Re: [OMPI users] MPI_CART_CREATE no matching specific subroutine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  6 17:30:52 2015" -->
<!-- isoreceived="20151006213052" -->
<!-- sent="Wed, 7 Oct 2015 06:30:49 +0900" -->
<!-- isosent="20151006213049" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_CART_CREATE no matching specific subroutine" -->
<!-- id="CAAkFZ5uZ0J3ApQ0uj87JRNnVAXHoPvmC=HpPWH2vy1abBuNpGg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CANv8CY-3uMgGDAVrxqWpgjaObQS0WkOpz0+kRTxzL8L6jtkk1w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_CART_CREATE no matching specific subroutine<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-06 17:30:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27825.php">Hector E Barrios Molano: "Re: [OMPI users] MPI_CART_CREATE no matching specific subroutine"</a>
<li><strong>Previous message:</strong> <a href="27823.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>In reply to:</strong> <a href="27819.php">Hector E Barrios Molano: "[OMPI users] MPI_CART_CREATE no matching specific subroutine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27825.php">Hector E Barrios Molano: "Re: [OMPI users] MPI_CART_CREATE no matching specific subroutine"</a>
<li><strong>Reply:</strong> <a href="27825.php">Hector E Barrios Molano: "Re: [OMPI users] MPI_CART_CREATE no matching specific subroutine"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hector,
<br>
<p>numprocs and .false. are scalars and MPI_Cart_create expects one dimension
<br>
array.
<br>
can you fix this and try again ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, October 7, 2015, Hector E Barrios Molano &lt;hectorb_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi Open MPI Experts!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using OpenMPI v1.10.0 and get this error when using MPI_CART_CREATE:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; simple.f90(10): error #6285: There is no matching specific subroutine for
</span><br>
<span class="quotelev1">&gt; this generic subroutine call.   [MPI_CART_CREATE]
</span><br>
<span class="quotelev1">&gt;     call MPI_CART_CREATE( MPI_COMM_WORLD, 1, numprocs, .false., .true.,
</span><br>
<span class="quotelev1">&gt; comm1d, ierr )
</span><br>
<span class="quotelev1">&gt; ---------^
</span><br>
<span class="quotelev1">&gt; compilation aborted for simple.f90 (code 1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using ifort v 15.0.3 through mpifort wrapper
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the code I'm trying to compile:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; program main
</span><br>
<span class="quotelev1">&gt;     use mpi
</span><br>
<span class="quotelev1">&gt;     integer myid, numprocs, ierr
</span><br>
<span class="quotelev1">&gt;     integer comm1d, nbrbottom, nbrtop, s, e, it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     call MPI_INIT( ierr )
</span><br>
<span class="quotelev1">&gt;     call MPI_COMM_RANK( MPI_COMM_WORLD, myid, ierr )
</span><br>
<span class="quotelev1">&gt;     call MPI_COMM_SIZE( MPI_COMM_WORLD, numprocs, ierr )
</span><br>
<span class="quotelev1">&gt; !
</span><br>
<span class="quotelev1">&gt;     call MPI_CART_CREATE( MPI_COMM_WORLD, 1, numprocs, .false., .true.,
</span><br>
<span class="quotelev1">&gt; comm1d, ierr )
</span><br>
<span class="quotelev1">&gt; !
</span><br>
<span class="quotelev1">&gt;     call MPI_COMM_RANK( comm1d, myid, ierr )
</span><br>
<span class="quotelev1">&gt;     call MPI_Cart_shift( comm1d, 0,  1, nbrbottom, nbrtop, ierr )
</span><br>
<span class="quotelev1">&gt; !
</span><br>
<span class="quotelev1">&gt;     call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev1">&gt; end program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that everything is ok, do you know why I'm having this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much for your help!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hector
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27824/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27825.php">Hector E Barrios Molano: "Re: [OMPI users] MPI_CART_CREATE no matching specific subroutine"</a>
<li><strong>Previous message:</strong> <a href="27823.php">Ralph Castain: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>In reply to:</strong> <a href="27819.php">Hector E Barrios Molano: "[OMPI users] MPI_CART_CREATE no matching specific subroutine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27825.php">Hector E Barrios Molano: "Re: [OMPI users] MPI_CART_CREATE no matching specific subroutine"</a>
<li><strong>Reply:</strong> <a href="27825.php">Hector E Barrios Molano: "Re: [OMPI users] MPI_CART_CREATE no matching specific subroutine"</a>
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
