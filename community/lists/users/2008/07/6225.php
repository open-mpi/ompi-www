<?
$subject_val = "Re: [OMPI users] Missing F90 modules";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 16:25:48 2008" -->
<!-- isoreceived="20080730202548" -->
<!-- sent="Wed, 30 Jul 2008 16:24:41 -0400" -->
<!-- isosent="20080730202441" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Missing F90 modules" -->
<!-- id="5EC0825C-5DE8-4EF4-9DA5-66A4ED8D70F9_at_umich.edu" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-30 16:24:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6226.php">Joe Griffin: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Previous message:</strong> <a href="6224.php">Jeff Squyres: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>In reply to:</strong> <a href="6223.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6226.php">Joe Griffin: "Re: [OMPI users] Missing F90 modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have seen strange things about fortran compilers and the suffix of  
<br>
files.
<br>
<p>use mpi
<br>
<p>is a fortran 90 thing, not 77,  many compilers want fortran 90 codes  
<br>
to end in .f90 or .F90
<br>
<p>Try renaming carfoo.f  to cartfoo.f90  and try again.
<br>
<p>I have attached a helloworld.f90 that uses use mpi that works on our  
<br>
openmpi installs.
<br>
<p><p>

<br><p>
<p><p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Jul 30, 2008, at 4:15 PM, Scott Beardsley wrote:
<br>
<span class="quotelev1">&gt; Brock Palen wrote:
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
<span class="quotelev1">&gt;       call mpi_cart_get(   igcomm,2,ivdimx,lvperx, mygrid,       ierr)
</span><br>
<span class="quotelev1">&gt;            ^
</span><br>
<span class="quotelev1">&gt; pathf95-389 pathf90: ERROR CART, File = cart.f, Line = 34, Column = 12
</span><br>
<span class="quotelev1">&gt;   No specific match can be found for the generic subprogram call  
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
<span class="quotelev1">&gt; From the googling I've done it seems like &quot;use mpi&quot; is preferred 
</span><br>
<span class="quotelev1">&gt; [1]. I've made sure that my $LD_LIBRARY_PATH has the directory that  
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6225/helloworld.f90">helloworld.f90</a>
</ul>
<!-- attachment="helloworld.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6226.php">Joe Griffin: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Previous message:</strong> <a href="6224.php">Jeff Squyres: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>In reply to:</strong> <a href="6223.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6226.php">Joe Griffin: "Re: [OMPI users] Missing F90 modules"</a>
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
