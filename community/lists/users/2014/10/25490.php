<?
$subject_val = "Re: [OMPI users] Fortran wrapper libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 13 15:40:39 2014" -->
<!-- isoreceived="20141013194039" -->
<!-- sent="Mon, 13 Oct 2014 19:40:38 +0000" -->
<!-- isosent="20141013194038" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran wrapper libraries" -->
<!-- id="59970DEB-9A03-45C1-8451-E440A2649E97_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="54354134.8040503_at_grs-sim.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran wrapper libraries<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-13 15:40:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25491.php">Rajeev Thakur: "[OMPI users] new tutorial books on MPI"</a>
<li><strong>Previous message:</strong> <a href="25489.php">Jamil Appa: "Re: [OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with mpi_init_thread"</a>
<li><strong>In reply to:</strong> <a href="25479.php">Marc-Andre Hermanns: "[OMPI users] Fortran wrapper libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25492.php">Marc-Andre Hermanns: "Re: [OMPI users] Fortran wrapper libraries"</a>
<li><strong>Reply:</strong> <a href="25492.php">Marc-Andre Hermanns: "Re: [OMPI users] Fortran wrapper libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Marc-Andre --
<br>
<p>Sorry for the delay.  Which version of Open MPI are you referring to?  I'm offline at the moment, and I think you're referring to the OMPI 1.6 series -- I'm pretty sure we renamed these libraries in the 1.7/1.8 series, to something like libmpi_mpifh, libmpi_usmpi (respectively), and libmpi_usempif08.
<br>
<p>More below.
<br>
<p><p>On Oct 8, 2014, at 9:50 AM, Marc-Andre Hermanns &lt;m.a.hermanns_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open-MPI Team,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in the Score-P measurement system, we'd like to use the Fortran wrapper
</span><br>
<span class="quotelev1">&gt; libraries provided with Open-MPI rather than our own. When checking the
</span><br>
<span class="quotelev1">&gt; library directory we found:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libmpi_f77.so
</span><br>
<span class="quotelev1">&gt; libmpi_f90.so
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our questions are:
</span><br>
<span class="quotelev1">&gt; - Does it matter which one of the libraries we link with the application?
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; - Does the first correspond to mpif77 and the second to mpif90?
</span><br>
<p>No.  Also note that in OMPI 1.7/1.8, we have renamed the Fortran wrapper to be mpifort -- mpif77 and mpif90 are sym links to mpifort provided simply for backwards compatibility.
<br>
<p>mpifort acts identically, regardless of whether it is invoked by the name &quot;mpif77&quot; or &quot;mpif90&quot; or &quot;mpifort&quot;.
<br>
<p>In the 1.7/1.8 series, we link in all the Fortran libraries when you invoke mpifort, which allows you to use any of the 3 MPI Fortran interfaces (mpif.h, the mpi module, and the mpi_f08 module).  This is, of course, tempered by what you built and installed -- e.g., if you're using an old version of gfortran, the libmpi_usempif08 library won't be built, and therefore won't be linked in by mpifort, and &quot;use mpi_f08&quot; in applications will fail to compile.
<br>
<p><span class="quotelev1">&gt; - Is there a best practice as to what to put on the link line?
</span><br>
<p>You don't need to list any MPI libraries on the mpifort (or mpif77 or mpif90 -- even back in the v1.6 series) command line.  You can just:
<br>
<p>&nbsp;mpifort my_awesome_fortran_mpi_app.f90 -o foo
<br>
<p>And OMPI will link in the appropriate libraries for you.  That's why we felt comfortable changing the Fortran library names in the v1.7/v1.8 series.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25491.php">Rajeev Thakur: "[OMPI users] new tutorial books on MPI"</a>
<li><strong>Previous message:</strong> <a href="25489.php">Jamil Appa: "Re: [OMPI users] OMPI 1.8.1 Deadlock in mpi_finalize with mpi_init_thread"</a>
<li><strong>In reply to:</strong> <a href="25479.php">Marc-Andre Hermanns: "[OMPI users] Fortran wrapper libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25492.php">Marc-Andre Hermanns: "Re: [OMPI users] Fortran wrapper libraries"</a>
<li><strong>Reply:</strong> <a href="25492.php">Marc-Andre Hermanns: "Re: [OMPI users] Fortran wrapper libraries"</a>
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
