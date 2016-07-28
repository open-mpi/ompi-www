<?
$subject_val = "[OMPI users] MPI_CART_CREATE and Fortran 90 Interface";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 08:49:53 2008" -->
<!-- isoreceived="20080206134953" -->
<!-- sent="Wed, 6 Feb 2008 13:49:40 +0000" -->
<!-- isosent="20080206134940" -->
<!-- name="Michal Charemza" -->
<!-- email="michalcharemza_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_CART_CREATE and Fortran 90 Interface" -->
<!-- id="35BB98BA-C032-4BC3-B660-75C70DACB70D_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_CART_CREATE and Fortran 90 Interface<br>
<strong>From:</strong> Michal Charemza (<em>michalcharemza_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-06 08:49:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4995.php">jody: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<li><strong>Previous message:</strong> <a href="4993.php">jody: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4999.php">Jeff Squyres: "Re: [OMPI users] MPI_CART_CREATE and Fortran 90 Interface"</a>
<li><strong>Reply:</strong> <a href="4999.php">Jeff Squyres: "Re: [OMPI users] MPI_CART_CREATE and Fortran 90 Interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm having a bit of trouble getting MPI_CART_CREATE to work with the  
<br>
Fortran 90 Interface, i.e. if I &quot;use mpi&quot;, I get an error at  
<br>
compilation time (of my program) of:
<br>
<p>There is no specific subroutine for the generic 'mpi_cart_create'
<br>
<p>However, if I include mpif.h this error does not occur. After looking  
<br>
into the source, I see that in my mpi-f90-interfaces.h, there is a part:
<br>
<p>interface MPI_Cart_create
<br>
<p>subroutine MPI_Cart_create(old_comm, ndims, dims, periods, reorder, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm_cart, ierr)
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: old_comm
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: ndims
<br>
&nbsp;&nbsp;&nbsp;integer, dimension(*), intent(in) :: dims
<br>
&nbsp;&nbsp;&nbsp;integer, dimension(*), intent(in) :: periods
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: reorder
<br>
&nbsp;&nbsp;&nbsp;integer, intent(out) :: comm_cart
<br>
&nbsp;&nbsp;&nbsp;integer, intent(out) :: ierr
<br>
end subroutine MPI_Cart_create
<br>
<p>end interface MPI_Cart_create
<br>
<p>I thought according to the MPI specs, periods should be a logical  
<br>
array, and reorder should be a logical scalar. Is this a bug in the  
<br>
Fortran 90 interface?
<br>
<p>Michal.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4995.php">jody: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<li><strong>Previous message:</strong> <a href="4993.php">jody: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4999.php">Jeff Squyres: "Re: [OMPI users] MPI_CART_CREATE and Fortran 90 Interface"</a>
<li><strong>Reply:</strong> <a href="4999.php">Jeff Squyres: "Re: [OMPI users] MPI_CART_CREATE and Fortran 90 Interface"</a>
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
