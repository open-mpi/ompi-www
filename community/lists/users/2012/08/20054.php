<?
$subject_val = "[OMPI users] MPI_Cart_sub periods";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 29 05:33:01 2012" -->
<!-- isoreceived="20120829093301" -->
<!-- sent="Wed, 29 Aug 2012 09:32:38 +0000" -->
<!-- isosent="20120829093238" -->
<!-- name="Craske, John" -->
<!-- email="john.craske07_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Cart_sub periods" -->
<!-- id="29C7B1986A5DF64FA3334BF1F25E56F8483E2A75_at_icexch-m1.ic.ac.uk" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Cart_sub periods<br>
<strong>From:</strong> Craske, John (<em>john.craske07_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-29 05:32:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20055.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20053.php">Ralph Castain: "Re: [OMPI users] MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20141.php">Jeff Squyres: "Re: [OMPI users] MPI_Cart_sub periods"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20141.php">Jeff Squyres: "Re: [OMPI users] MPI_Cart_sub periods"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>We are partitioning a two-dimensional Cartesian communicator into
<br>
two one-dimensional subgroups. In this situation we have found
<br>
that both one-dimensional communicators inherit the period
<br>
logical of the first dimension of the original two-dimensional
<br>
communicator when using Open MPI.  Using MPICH each
<br>
one-dimensional communicator inherits the period corresponding to
<br>
the dimensions specified in REMAIN_DIMS, as expected.  Could this
<br>
be a bug, or are we making a mistake? The relevant calls we make in a
<br>
Fortran code are
<br>
<p>CALL MPI_CART_CREATE(MPI_COMM_WORLD, 2, (/ NDIMX, NDIMY /), (/ .True., .False. /), .TRUE.,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COMM_CART_2D, IERROR)
<br>
<p>CALL MPI_CART_SUB(COMM_CART_2D, (/ .True., .False. /), COMM_CART_X, IERROR)
<br>
CALL MPI_CART_SUB(COMM_CART_2D, (/ .False., .True. /), COMM_CART_Y, IERROR)
<br>
<p>Following these requests,
<br>
<p>CALL MPI_CART_GET(COMM_CART_X, MAXDIM_X, DIMS_X, PERIODS_X, COORDS_X, IERROR)
<br>
CALL MPI_CART_GET(COMM_CART_Y, MAXDIM_Y, DIMS_Y, PERIODS_Y, COORDS_Y, IERROR)
<br>
<p>will result in
<br>
<p>PERIODS_X = T
<br>
PERIODS_Y = T
<br>
<p>If, on the other hand we define the two-dimensional communicator
<br>
using PERIODS = (/ .False., .True. /), we find
<br>
<p>PERIODS_X = F
<br>
PERIODS_Y = F
<br>
<p>Your advice on the matter would be greatly appreciated.
<br>
<p>Regards,
<br>
<p>John.
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20054/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20055.php">Siegmar Gross: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20053.php">Ralph Castain: "Re: [OMPI users] MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20141.php">Jeff Squyres: "Re: [OMPI users] MPI_Cart_sub periods"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/09/20141.php">Jeff Squyres: "Re: [OMPI users] MPI_Cart_sub periods"</a>
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
