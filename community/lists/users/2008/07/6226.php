<?
$subject_val = "Re: [OMPI users] Missing F90 modules";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 16:27:23 2008" -->
<!-- isoreceived="20080730202723" -->
<!-- sent="Wed, 30 Jul 2008 13:22:39 -0700" -->
<!-- isosent="20080730202239" -->
<!-- name="Joe Griffin" -->
<!-- email="joe.griffin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Missing F90 modules" -->
<!-- id="260B5BEEF399B143A0F6E5D1D73ED2311EF60F_at_NASCMEX01.na.mscsoftware.com" -->
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
<strong>From:</strong> Joe Griffin (<em>joe.griffin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-30 16:22:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6227.php">Edmund Sumbar: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Previous message:</strong> <a href="6225.php">Brock Palen: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>In reply to:</strong> <a href="6223.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6227.php">Edmund Sumbar: "Re: [OMPI users] Missing F90 modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Scott,
<br>
<p>include brings in a file
<br>
<p>use brings in a module .. kind of like an object file.
<br>
<p>Joe
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
On
<br>
<span class="quotelev1">&gt; Behalf Of Scott Beardsley
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, July 30, 2008 1:16 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Missing F90 modules
</span><br>
<span class="quotelev1">&gt; 
</span><br>
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
<span class="quotelev1">&gt; why does &quot;include 'mpif.h'&quot; work but &quot;use mpi&quot; does not? When I try
</span><br>
the
<br>
<span class="quotelev1">&gt; &quot;use mpi&quot; method I get errors like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpif90 -c cart.f
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        call mpi_cart_get(   igcomm,2,ivdimx,lvperx, mygrid,
</span><br>
ierr)
<br>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6227.php">Edmund Sumbar: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Previous message:</strong> <a href="6225.php">Brock Palen: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>In reply to:</strong> <a href="6223.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6227.php">Edmund Sumbar: "Re: [OMPI users] Missing F90 modules"</a>
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
