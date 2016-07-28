<?
$subject_val = "Re: [OMPI devel] Fortran mpi module missing MPI_CART_SHIFT";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 26 16:26:29 2009" -->
<!-- isoreceived="20091026202629" -->
<!-- sent="Mon, 26 Oct 2009 13:26:24 -0700" -->
<!-- isosent="20091026202624" -->
<!-- name="Larry Baker" -->
<!-- email="baker_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fortran mpi module missing MPI_CART_SHIFT" -->
<!-- id="59C3367A-3FF3-4FC1-A272-5E398E53381C_at_usgs.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="FD2412F7-2347-469D-882D-CEC1AF5F0BF9_at_cisco.com" -->
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
<strong>From:</strong> Larry Baker (<em>baker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-26 16:26:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7030.php">Ashley Pittman: "Re: [OMPI devel] RFC: Use automake &quot;silent rules&quot;"</a>
<li><strong>Previous message:</strong> <a href="7028.php">Jeff Squyres: "Re: [OMPI devel] Fortran mpi module missing MPI_CART_SHIFT"</a>
<li><strong>In reply to:</strong> <a href="7028.php">Jeff Squyres: "Re: [OMPI devel] Fortran mpi module missing MPI_CART_SHIFT"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>You are exactly right.  I had a typo in the declaration of one of the  
<br>
arguments, and I had neglected to use &quot;Implicit None&quot;.  I should know  
<br>
better than to leave out &quot;Implicit None&quot;.
<br>
<p>Thanks for the diagnosis.
<br>
<p>Larry Baker
<br>
US Geological Survey
<br>
650-329-5608
<br>
baker_at_[hidden]
<br>
<p>On Oct 26, 2009, at 12:23 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 15, 2009, at 9:28 PM, Larry Baker wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../src/run_nnlsqs_mpi.f(39): error #6285: There is no matching
</span><br>
<span class="quotelev2">&gt;&gt; specific subroutine for this generic subroutine call.    
</span><br>
<span class="quotelev2">&gt;&gt; [MPI_CART_SHIFT]
</span><br>
<span class="quotelev2">&gt;&gt;        Call MPI_CART_SHIFT( mpi_comm_grid, direction, amount,
</span><br>
<span class="quotelev2">&gt;&gt; -------------^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the delay in replying; my INBOX has grown totally out of  
</span><br>
<span class="quotelev1">&gt; hand.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see that we do define MPI_CART_SHIFT in our F90 module as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; subroutine MPI_Cart_shift(comm, direction, disp, rank_source,  
</span><br>
<span class="quotelev1">&gt; rank_dest, ierr)
</span><br>
<span class="quotelev1">&gt;  integer, intent(in) :: comm
</span><br>
<span class="quotelev1">&gt;  integer, intent(in) :: direction
</span><br>
<span class="quotelev1">&gt;  integer, intent(in) :: disp
</span><br>
<span class="quotelev1">&gt;  integer, intent(out) :: rank_source
</span><br>
<span class="quotelev1">&gt;  integer, intent(out) :: rank_dest
</span><br>
<span class="quotelev1">&gt;  integer, intent(out) :: ierr
</span><br>
<span class="quotelev1">&gt; end subroutine MPI_Cart_shift
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do all your arguments match?  The output you give above only shows  
</span><br>
<span class="quotelev1">&gt; the first 3 parameters and none of their types.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With Fortran 90 &quot;Include 'mpif.h'&quot;, no errors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpif.h does not provide any argument checking at all (even when  
</span><br>
<span class="quotelev1">&gt; compiled with an F90 compiler).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7030.php">Ashley Pittman: "Re: [OMPI devel] RFC: Use automake &quot;silent rules&quot;"</a>
<li><strong>Previous message:</strong> <a href="7028.php">Jeff Squyres: "Re: [OMPI devel] Fortran mpi module missing MPI_CART_SHIFT"</a>
<li><strong>In reply to:</strong> <a href="7028.php">Jeff Squyres: "Re: [OMPI devel] Fortran mpi module missing MPI_CART_SHIFT"</a>
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
