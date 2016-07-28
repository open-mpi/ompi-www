<?
$subject_val = "Re: [OMPI users] Trouble with MPI-IO";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 20 06:23:26 2011" -->
<!-- isoreceived="20110520102326" -->
<!-- sent="Fri, 20 May 2011 06:23:21 -0400" -->
<!-- isosent="20110520102321" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Trouble with MPI-IO" -->
<!-- id="A5B121E9-E664-49D0-AE54-2CFE527129D2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1305861865.4284.104.camel_at_cedar.reachone.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Trouble with MPI-IO<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-20 06:23:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16589.php">Jeff Squyres: "Re: [OMPI users] MPI_Alltoallv function crashes when np &gt; 100"</a>
<li><strong>Previous message:</strong> <a href="16587.php">David B&#252;ttner: "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test"</a>
<li><strong>In reply to:</strong> <a href="16586.php">Tom Rosmond: "Re: [OMPI users] Trouble with MPI-IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16591.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>Reply:</strong> <a href="16591.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 19, 2011, at 11:24 PM, Tom Rosmond wrote:
<br>
<p><span class="quotelev1">&gt; What fortran compiler did you use?
</span><br>
<p>gfortran.
<br>
<p><span class="quotelev1">&gt; In the original script my Intel compile used the -132 option, 
</span><br>
<span class="quotelev1">&gt; allowing up to that many columns per line.  
</span><br>
<p>Gotcha.
<br>
<p><span class="quotelev2">&gt;&gt; x.f90:99.77:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    call mpi_type_indexed(lenij,ijlena,ijdisp,mpi_real,ij_vector_type,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;                                                                           1  
</span><br>
<span class="quotelev2">&gt;&gt; Error: There is no specific subroutine for the generic 'mpi_type_indexed' at (1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmmm, very strange, since I am looking right at the MPI standard
</span><br>
<span class="quotelev1">&gt; documents with that routine documented.  I too get this compile failure
</span><br>
<span class="quotelev1">&gt; when I switch to 'use mpi'.  Could that be a problem with the Open MPI
</span><br>
<span class="quotelev1">&gt; fortran libraries???
</span><br>
<p>I think that that error is telling us that there's a compile-time mismatch -- that the signature of what you've passed doesn't match the signature of OMPI's MPI_Type_indexed subroutine.
<br>
<p><span class="quotelev2">&gt;&gt; I looked at our mpi F90 module and see the following:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; interface MPI_Type_indexed
</span><br>
<span class="quotelev2">&gt;&gt; subroutine MPI_Type_indexed(count, array_of_blocklengths, array_of_displacements, oldtype, newtype, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;  integer, intent(in) :: count
</span><br>
<span class="quotelev2">&gt;&gt;  integer, dimension(*), intent(in) :: array_of_blocklengths
</span><br>
<span class="quotelev2">&gt;&gt;  integer, dimension(*), intent(in) :: array_of_displacements
</span><br>
<span class="quotelev2">&gt;&gt;  integer, intent(in) :: oldtype
</span><br>
<span class="quotelev2">&gt;&gt;  integer, intent(out) :: newtype
</span><br>
<span class="quotelev2">&gt;&gt;  integer, intent(out) :: ierr
</span><br>
<span class="quotelev2">&gt;&gt; end subroutine MPI_Type_indexed
</span><br>
<span class="quotelev2">&gt;&gt; end interface
</span><br>
<p>Shouldn't ijlena and ijdisp be 1D arrays, not 2D arrays?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16589.php">Jeff Squyres: "Re: [OMPI users] MPI_Alltoallv function crashes when np &gt; 100"</a>
<li><strong>Previous message:</strong> <a href="16587.php">David B&#252;ttner: "Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and MPI_Wait/Test"</a>
<li><strong>In reply to:</strong> <a href="16586.php">Tom Rosmond: "Re: [OMPI users] Trouble with MPI-IO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16591.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
<li><strong>Reply:</strong> <a href="16591.php">Jeff Squyres: "Re: [OMPI users] Trouble with MPI-IO"</a>
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
