<?
$subject_val = "Re: [OMPI users] Missing F90 modules";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 16:34:28 2008" -->
<!-- isoreceived="20080730203428" -->
<!-- sent="Wed, 30 Jul 2008 16:34:13 -0400" -->
<!-- isosent="20080730203413" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Missing F90 modules" -->
<!-- id="6FCC6626-9181-4874-A5C0-DB3B5ABDD930_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-30 16:34:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6229.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Previous message:</strong> <a href="6227.php">Edmund Sumbar: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>In reply to:</strong> <a href="6223.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6229.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Reply:</strong> <a href="6229.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;use mpi&quot; basically gives you stronger type checking in Fortran 90  
<br>
that you don't get with Fortran 77.  So the error you're seeing is  
<br>
basically a compiler error telling you that you have the wrong types  
<br>
for MPI_CART_GET and that it doesn't match any of the functions  
<br>
provided by Open MPI.
<br>
<p>FWIW, the official declaration of the Fortran binding for MPI_CART_GET  
<br>
is:
<br>
<p>MPI_CART_GET(COMM, MAXDIMS, DIMS, PERIODS, COORDS, IERROR)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTEGER COMM, MAXDIMS, DIMS(*), COORDS(*), IERROR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOGICAL PERIODS(*)
<br>
<p>The real problem is that it looks like we have a bug in our F90  
<br>
bindings.  :-(  We have the &quot;periods&quot; argument typed as an integer  
<br>
array, when it really should be a logical array.  Doh!
<br>
<p>The patch below fixes the problem in the v1.2 series; I'll get it  
<br>
included in v1.2.7 and the upcoming v1.3 series.
<br>
<p>Index: ompi/mpi/f90/scripts/mpi-f90-interfaces.h.sh
<br>
===================================================================
<br>
--- ompi/mpi/f90/scripts/mpi-f90-interfaces.h.sh	(revision 19099)
<br>
+++ ompi/mpi/f90/scripts/mpi-f90-interfaces.h.sh	(working copy)
<br>
@@ -1120,7 +1120,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(in) :: comm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(in) :: maxdims
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, dimension(*), intent(out) :: dims
<br>
-  integer, dimension(*), intent(out) :: periods
<br>
+  logical, dimension(*), intent(out) :: periods
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, dimension(*), intent(out) :: coords
<br>
&nbsp;&nbsp;&nbsp;&nbsp;integer, intent(out) :: ierr
<br>
&nbsp;&nbsp;end subroutine ${procedure}
<br>
<p><p><p><p><p>On Jul 30, 2008, at 4:15 PM, Scott Beardsley wrote:
<br>
<p><span class="quotelev1">&gt; Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On all MPI's I have always used there was only MPI
</span><br>
<span class="quotelev2">&gt;&gt; use mpi;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please excuse my admittedly gross ignorance of all things Fortran  
</span><br>
<span class="quotelev1">&gt; but why does &quot;include 'mpif.h'&quot; work but &quot;use mpi&quot; does not? When I  
</span><br>
<span class="quotelev1">&gt; try the &quot;use mpi&quot; method I get errors like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpif90 -c cart.f
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      call mpi_cart_get(   igcomm,2,ivdimx,lvperx, mygrid,       ierr)
</span><br>
<span class="quotelev1">&gt;           ^
</span><br>
<span class="quotelev1">&gt; pathf95-389 pathf90: ERROR CART, File = cart.f, Line = 34, Column = 12
</span><br>
<span class="quotelev1">&gt;  No specific match can be found for the generic subprogram call  
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
<span class="quotelev2">&gt; &gt;       include 'mpif.h'
</span><br>
<span class="quotelev2">&gt; &gt; C      use mpi;
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From the googling I've done it seems like &quot;use mpi&quot; is preferred[1].  
</span><br>
<span class="quotelev1">&gt; I've made sure that my $LD_LIBRARY_PATH has the directory that  
</span><br>
<span class="quotelev1">&gt; MPI.mod is in.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt; --------
</span><br>
<span class="quotelev1">&gt; [1] <a href="http://www.mpi-forum.org/docs/mpi-20-html/node243.htm">http://www.mpi-forum.org/docs/mpi-20-html/node243.htm</a>
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
<li><strong>Next message:</strong> <a href="6229.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Previous message:</strong> <a href="6227.php">Edmund Sumbar: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>In reply to:</strong> <a href="6223.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6229.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Reply:</strong> <a href="6229.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
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
