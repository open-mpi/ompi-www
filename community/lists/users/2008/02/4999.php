<?
$subject_val = "Re: [OMPI users] MPI_CART_CREATE and Fortran 90 Interface";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 07:52:13 2008" -->
<!-- isoreceived="20080207125213" -->
<!-- sent="Thu, 7 Feb 2008 07:51:50 -0500" -->
<!-- isosent="20080207125150" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_CART_CREATE and Fortran 90 Interface" -->
<!-- id="31D4AB0D-06BE-4032-A6F8-894EC10D4126_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="35BB98BA-C032-4BC3-B660-75C70DACB70D_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_CART_CREATE and Fortran 90 Interface<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-07 07:51:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5000.php">Jeff Squyres: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<li><strong>Previous message:</strong> <a href="4998.php">Torje Henriksen: "[OMPI users] Oversubscribing a subset of a machine's cores"</a>
<li><strong>In reply to:</strong> <a href="4994.php">Michal Charemza: "[OMPI users] MPI_CART_CREATE and Fortran 90 Interface"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michal -
<br>
<p>You are absolutely right; sorry about that.  I have fixed the bug in  
<br>
the OMPI development trunk which means that it will be incorporated in  
<br>
the upcoming v1.3 series (see <a href="https://svn.open-mpi.org/trac/ompi/changeset/17395">https://svn.open-mpi.org/trac/ompi/changeset/17395</a>) 
<br>
.  I also filed a change request for the v1.2 branch; if we ever do a  
<br>
v1.2.6 release, this fix will be included in it.
<br>
<p>Thanks for reporting this problem!
<br>
<p><p>On Feb 6, 2008, at 8:49 AM, Michal Charemza wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm having a bit of trouble getting MPI_CART_CREATE to work with the
</span><br>
<span class="quotelev1">&gt; Fortran 90 Interface, i.e. if I &quot;use mpi&quot;, I get an error at
</span><br>
<span class="quotelev1">&gt; compilation time (of my program) of:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is no specific subroutine for the generic 'mpi_cart_create'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, if I include mpif.h this error does not occur. After looking
</span><br>
<span class="quotelev1">&gt; into the source, I see that in my mpi-f90-interfaces.h, there is a  
</span><br>
<span class="quotelev1">&gt; part:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; interface MPI_Cart_create
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; subroutine MPI_Cart_create(old_comm, ndims, dims, periods, reorder, &amp;
</span><br>
<span class="quotelev1">&gt;         comm_cart, ierr)
</span><br>
<span class="quotelev1">&gt;   integer, intent(in) :: old_comm
</span><br>
<span class="quotelev1">&gt;   integer, intent(in) :: ndims
</span><br>
<span class="quotelev1">&gt;   integer, dimension(*), intent(in) :: dims
</span><br>
<span class="quotelev1">&gt;   integer, dimension(*), intent(in) :: periods
</span><br>
<span class="quotelev1">&gt;   integer, intent(in) :: reorder
</span><br>
<span class="quotelev1">&gt;   integer, intent(out) :: comm_cart
</span><br>
<span class="quotelev1">&gt;   integer, intent(out) :: ierr
</span><br>
<span class="quotelev1">&gt; end subroutine MPI_Cart_create
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; end interface MPI_Cart_create
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thought according to the MPI specs, periods should be a logical
</span><br>
<span class="quotelev1">&gt; array, and reorder should be a logical scalar. Is this a bug in the
</span><br>
<span class="quotelev1">&gt; Fortran 90 interface?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michal.
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
<li><strong>Next message:</strong> <a href="5000.php">Jeff Squyres: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<li><strong>Previous message:</strong> <a href="4998.php">Torje Henriksen: "[OMPI users] Oversubscribing a subset of a machine's cores"</a>
<li><strong>In reply to:</strong> <a href="4994.php">Michal Charemza: "[OMPI users] MPI_CART_CREATE and Fortran 90 Interface"</a>
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
