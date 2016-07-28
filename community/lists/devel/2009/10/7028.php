<?
$subject_val = "Re: [OMPI devel] Fortran mpi module missing MPI_CART_SHIFT";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 26 15:23:54 2009" -->
<!-- isoreceived="20091026192354" -->
<!-- sent="Mon, 26 Oct 2009 15:23:49 -0400" -->
<!-- isosent="20091026192349" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran mpi module missing MPI_CART_SHIFT" -->
<!-- id="FD2412F7-2347-469D-882D-CEC1AF5F0BF9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="579EBE41-6459-4BA9-9640-4EC6D7AD6803_at_usgs.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fortran mpi module missing MPI_CART_SHIFT<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-26 15:23:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7029.php">Larry Baker: "Re: [OMPI devel] Fortran mpi module missing MPI_CART_SHIFT"</a>
<li><strong>Previous message:</strong> <a href="7027.php">Jeff Squyres: "Re: [OMPI devel] RFC for patches r22113 and r22138 (and followupfixes)"</a>
<li><strong>In reply to:</strong> <a href="6971.php">Larry Baker: "[OMPI devel] Fortran mpi module missing MPI_CART_SHIFT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7029.php">Larry Baker: "Re: [OMPI devel] Fortran mpi module missing MPI_CART_SHIFT"</a>
<li><strong>Reply:</strong> <a href="7029.php">Larry Baker: "Re: [OMPI devel] Fortran mpi module missing MPI_CART_SHIFT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 15, 2009, at 9:28 PM, Larry Baker wrote:
<br>
<p><span class="quotelev1">&gt; ../src/run_nnlsqs_mpi.f(39): error #6285: There is no matching
</span><br>
<span class="quotelev1">&gt; specific subroutine for this generic subroutine call.    
</span><br>
<span class="quotelev1">&gt; [MPI_CART_SHIFT]
</span><br>
<span class="quotelev1">&gt;         Call MPI_CART_SHIFT( mpi_comm_grid, direction, amount,
</span><br>
<span class="quotelev1">&gt; -------------^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Sorry for the delay in replying; my INBOX has grown totally out of  
<br>
hand.  :-(
<br>
<p>I see that we do define MPI_CART_SHIFT in our F90 module as follows:
<br>
<p>subroutine MPI_Cart_shift(comm, direction, disp, rank_source,  
<br>
rank_dest, ierr)
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: comm
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: direction
<br>
&nbsp;&nbsp;&nbsp;integer, intent(in) :: disp
<br>
&nbsp;&nbsp;&nbsp;integer, intent(out) :: rank_source
<br>
&nbsp;&nbsp;&nbsp;integer, intent(out) :: rank_dest
<br>
&nbsp;&nbsp;&nbsp;integer, intent(out) :: ierr
<br>
end subroutine MPI_Cart_shift
<br>
<p>Do all your arguments match?  The output you give above only shows the  
<br>
first 3 parameters and none of their types.
<br>
<p><span class="quotelev1">&gt; With Fortran 90 &quot;Include 'mpif.h'&quot;, no errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>mpif.h does not provide any argument checking at all (even when  
<br>
compiled with an F90 compiler).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7029.php">Larry Baker: "Re: [OMPI devel] Fortran mpi module missing MPI_CART_SHIFT"</a>
<li><strong>Previous message:</strong> <a href="7027.php">Jeff Squyres: "Re: [OMPI devel] RFC for patches r22113 and r22138 (and followupfixes)"</a>
<li><strong>In reply to:</strong> <a href="6971.php">Larry Baker: "[OMPI devel] Fortran mpi module missing MPI_CART_SHIFT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7029.php">Larry Baker: "Re: [OMPI devel] Fortran mpi module missing MPI_CART_SHIFT"</a>
<li><strong>Reply:</strong> <a href="7029.php">Larry Baker: "Re: [OMPI devel] Fortran mpi module missing MPI_CART_SHIFT"</a>
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
