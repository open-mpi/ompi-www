<?
$subject_val = "Re: [OMPI users] MPI_CART_CREATE no matching specific subroutine";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  6 18:01:11 2015" -->
<!-- isoreceived="20151006220111" -->
<!-- sent="Tue, 6 Oct 2015 17:01:07 -0500" -->
<!-- isosent="20151006220107" -->
<!-- name="Hector E Barrios Molano" -->
<!-- email="hectorb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_CART_CREATE no matching specific subroutine" -->
<!-- id="CANv8CY-ef0Mr75Ax70WTmmHvhfKTZu+-p_fRKNRDVH1_1B7ZcA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5uZ0J3ApQ0uj87JRNnVAXHoPvmC=HpPWH2vy1abBuNpGg_at_mail.gmail.com" -->
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
<strong>From:</strong> Hector E Barrios Molano (<em>hectorb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-06 18:01:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27826.php">Siegmar Gross: "[OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
<li><strong>Previous message:</strong> <a href="27824.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_CART_CREATE no matching specific subroutine"</a>
<li><strong>In reply to:</strong> <a href="27824.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_CART_CREATE no matching specific subroutine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gilles,
<br>
<p>Thank you very much for your answer. I modified the code and it worked!
<br>
<p>Here is the modified code:
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
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_CART_CREATE( MPI_COMM_WORLD, 1, *[numprocs], [.false.]*,
<br>
.true., comm1d, ierr )
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
<p>Best regards,
<br>
<p>Hector
<br>
<p>On Tue, Oct 6, 2015 at 4:30 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hector,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; numprocs and .false. are scalars and MPI_Cart_create expects one dimension
</span><br>
<span class="quotelev1">&gt; array.
</span><br>
<span class="quotelev1">&gt; can you fix this and try again ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wednesday, October 7, 2015, Hector E Barrios Molano &lt;hectorb_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Open MPI Experts!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using OpenMPI v1.10.0 and get this error when using MPI_CART_CREATE:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; simple.f90(10): error #6285: There is no matching specific subroutine for
</span><br>
<span class="quotelev2">&gt;&gt; this generic subroutine call.   [MPI_CART_CREATE]
</span><br>
<span class="quotelev2">&gt;&gt;     call MPI_CART_CREATE( MPI_COMM_WORLD, 1, numprocs, .false., .true.,
</span><br>
<span class="quotelev2">&gt;&gt; comm1d, ierr )
</span><br>
<span class="quotelev2">&gt;&gt; ---------^
</span><br>
<span class="quotelev2">&gt;&gt; compilation aborted for simple.f90 (code 1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using ifort v 15.0.3 through mpifort wrapper
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the code I'm trying to compile:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; program main
</span><br>
<span class="quotelev2">&gt;&gt;     use mpi
</span><br>
<span class="quotelev2">&gt;&gt;     integer myid, numprocs, ierr
</span><br>
<span class="quotelev2">&gt;&gt;     integer comm1d, nbrbottom, nbrtop, s, e, it
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     call MPI_INIT( ierr )
</span><br>
<span class="quotelev2">&gt;&gt;     call MPI_COMM_RANK( MPI_COMM_WORLD, myid, ierr )
</span><br>
<span class="quotelev2">&gt;&gt;     call MPI_COMM_SIZE( MPI_COMM_WORLD, numprocs, ierr )
</span><br>
<span class="quotelev2">&gt;&gt; !
</span><br>
<span class="quotelev2">&gt;&gt;     call MPI_CART_CREATE( MPI_COMM_WORLD, 1, numprocs, .false., .true.,
</span><br>
<span class="quotelev2">&gt;&gt; comm1d, ierr )
</span><br>
<span class="quotelev2">&gt;&gt; !
</span><br>
<span class="quotelev2">&gt;&gt;     call MPI_COMM_RANK( comm1d, myid, ierr )
</span><br>
<span class="quotelev2">&gt;&gt;     call MPI_Cart_shift( comm1d, 0,  1, nbrbottom, nbrtop, ierr )
</span><br>
<span class="quotelev2">&gt;&gt; !
</span><br>
<span class="quotelev2">&gt;&gt;     call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev2">&gt;&gt; end program
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems that everything is ok, do you know why I'm having this problem?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much for your help!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hector
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27824.php">http://www.open-mpi.org/community/lists/users/2015/10/27824.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27825/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27826.php">Siegmar Gross: "[OMPI users] fatal error: openmpi-v2.x-dev-415-g5c9b192 andopenmpi-dev-2696-gd579a07"</a>
<li><strong>Previous message:</strong> <a href="27824.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_CART_CREATE no matching specific subroutine"</a>
<li><strong>In reply to:</strong> <a href="27824.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_CART_CREATE no matching specific subroutine"</a>
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
