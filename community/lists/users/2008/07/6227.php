<?
$subject_val = "Re: [OMPI users] Missing F90 modules";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 16:29:40 2008" -->
<!-- isoreceived="20080730202940" -->
<!-- sent="Wed, 30 Jul 2008 14:29:36 -0600" -->
<!-- isosent="20080730202936" -->
<!-- name="Edmund Sumbar" -->
<!-- email="esumbar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Missing F90 modules" -->
<!-- id="20080730202936.GC86146_at_hurl.aict.ualberta.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4890CBFA.2020506_at_cse.ucdavis.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Missing F90 modules<br>
<strong>From:</strong> Edmund Sumbar (<em>esumbar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-30 16:29:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6228.php">Jeff Squyres: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Previous message:</strong> <a href="6226.php">Joe Griffin: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>In reply to:</strong> <a href="6223.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6228.php">Jeff Squyres: "Re: [OMPI users] Missing F90 modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jul 30, 2008 at 01:15:54PM -0700, Scott Beardsley wrote:
<br>
<span class="quotelev1">&gt; Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On all MPI's I have always used there was only MPI
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; use mpi;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Please excuse my admittedly gross ignorance of all things Fortran but 
</span><br>
<span class="quotelev1">&gt; why does &quot;include 'mpif.h'&quot; work but &quot;use mpi&quot; does not? When I try the 
</span><br>
<span class="quotelev1">&gt; &quot;use mpi&quot; method I get errors like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpif90 -c cart.f
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        call mpi_cart_get(   igcomm,2,ivdimx,lvperx, mygrid,       ierr)
</span><br>
<span class="quotelev1">&gt;             ^
</span><br>
<span class="quotelev1">&gt; pathf95-389 pathf90: ERROR CART, File = cart.f, Line = 34, Column = 12
</span><br>
<span class="quotelev1">&gt;    No specific match can be found for the generic subprogram call 
</span><br>
<span class="quotelev1">&gt; &quot;MPI_CART_GET&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpif90 -c cartfoo.f
</span><br>
<span class="quotelev1">&gt; $ diff cart.f cartfoo.f
</span><br>
<span class="quotelev1">&gt; 3,4c3,4
</span><br>
<span class="quotelev1">&gt; &lt; C     include 'mpif.h'
</span><br>
<span class="quotelev1">&gt; &lt;       use mpi;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt;  &gt;       include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;  &gt; C      use mpi;
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  From the googling I've done it seems like &quot;use mpi&quot; is preferred[1]. 
</span><br>
<span class="quotelev1">&gt; I've made sure that my $LD_LIBRARY_PATH has the directory that MPI.mod 
</span><br>
<span class="quotelev1">&gt; is in.
</span><br>
<p>Try adding the path to MPI.mod to the include path (e.g.,
<br>
-I/usr/local/openmpi/mod).
<br>
<p><pre>
-- 
Ed[mund [Sumbar]]
AICT Research Support Group
esumbar_at_[hidden]
780.492.9360
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6228.php">Jeff Squyres: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Previous message:</strong> <a href="6226.php">Joe Griffin: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>In reply to:</strong> <a href="6223.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6228.php">Jeff Squyres: "Re: [OMPI users] Missing F90 modules"</a>
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
