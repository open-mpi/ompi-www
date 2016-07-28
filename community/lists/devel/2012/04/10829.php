<?
$subject_val = "Re: [OMPI devel] RFC: New Fortran bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  5 12:30:32 2012" -->
<!-- isoreceived="20120405163032" -->
<!-- sent="Thu, 5 Apr 2012 12:30:27 -0400" -->
<!-- isosent="20120405163027" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: New Fortran bindings" -->
<!-- id="CAANzjEkAsGDqp_aCFCJM8V8-Cy7SeGr1Vjhe8fRRNoppXbq5ew_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2D930F2D-C394-4446-AE1B-2A0C4EB1BDB5_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: New Fortran bindings<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-05 12:30:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10830.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: New Fortran bindings"</a>
<li><strong>Previous message:</strong> <a href="10828.php">Jeffrey Squyres: "[OMPI devel] RFC: New Fortran bindings"</a>
<li><strong>In reply to:</strong> <a href="10828.php">Jeffrey Squyres: "[OMPI devel] RFC: New Fortran bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10830.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: New Fortran bindings"</a>
<li><strong>Reply:</strong> <a href="10830.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: New Fortran bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>What is the state of 'mpiext' with this patch? From glancing at the
<br>
branch it doesn't look like it has been touched.
<br>
<p>-- Josh
<br>
<p>On Thu, Apr 5, 2012 at 11:37 AM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; WHAT: Revamp the entire MPI Fortran bindings; new &quot;mpifort&quot; wrapper compiler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHY: Much better mpi module implementation; addition of MPI-3 mpi_f08 module
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHERE: Remove ompi/mpi/f77 and ompi/mpi/f90, replace with ompi/mpi/fortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Teleconf, Tue Apr 17, 2012
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ====================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Highlights:
</span><br>
<span class="quotelev1">&gt; -----------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. New mpifort wrapper compiler: you can utilize mpif.h, use mpi, and use mpi_f08 through this one wrapper compiler
</span><br>
<span class="quotelev1">&gt; 2. mpif77 and mpif90 still exist, but are sym links to mpifort and may be removed in a future release
</span><br>
<span class="quotelev1">&gt; 3. The mpi module has been re-implemented and is significantly &quot;mo' bettah&quot;
</span><br>
<span class="quotelev1">&gt; 4. The mpi_f08 module offers many, many improvements over mpif.h and the mpi module
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will request an SVN &quot;quiet time&quot; to commit this stuff. &#160;It's coming from a VERY long-lived mercurial branch (3 years! see below); it'll almost certainly take a few SVN commits and a bunch of testing before I get it correctly committed to the SVN trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More details:
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Craig Rasmussen and I have been working with the MPI-3 Fortran WG and Fortran J3 committees for a long, long time to make a prototype MPI-3 Fortran bindings implementation. &#160;We think we're at a stable enough state to bring this stuff back to the trunk, with the goal of including it in OMPI v1.7.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Special thanks go out to everyone who has been incredibly patient and helpful to us in this journey:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Rolf Rabenseifner/HLRS (mastermind/genius behind the entire MPI-3 Fortran effort)
</span><br>
<span class="quotelev1">&gt; - The Fortran J3 committee
</span><br>
<span class="quotelev1">&gt; - Tobias Burnus/gfortran
</span><br>
<span class="quotelev1">&gt; - Tony Goetz/Absoft
</span><br>
<span class="quotelev1">&gt; - Terry Donte/Oracle
</span><br>
<span class="quotelev1">&gt; - ...and probably others whom I'm forgetting :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's still opportunities for optimization in the mpi_f08 implementation, but by and large, it is as far along as it can be until Fortran compilers start implementing the new F08 dimension(..) syntax.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that gfortran is currently unsupported for the mpi_f08 module and the new mpi module. &#160;gfortran users will a) fall back to the same mpi module implementation that is in OMPI v1.5.x, and b) not get the new mpi_f08 module. &#160;The gfortran maintainers are actively working hard to add the necessary features to support both the new mpi_f08 module and the new mpi module implementations. &#160;This will take some time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As mentioned above, ompi/mpi/f77 and ompi/mpi/f90 no longer exist. &#160;All the fortran bindings implementations have been collated under ompi/mpi/fortran; each implementation has its own subdirectory:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi/mpi/fortran/
</span><br>
<span class="quotelev1">&gt; &#160;base/ &#160; &#160; &#160; &#160; &#160; &#160; &#160; - glue code
</span><br>
<span class="quotelev1">&gt; &#160;mpif-h/ &#160; &#160; &#160; &#160; &#160; &#160; - what used to be ompi/mpi/f77
</span><br>
<span class="quotelev1">&gt; &#160;use-mpi-tkr/ &#160; &#160; &#160; &#160;- what used to be ompi/mpi/f90
</span><br>
<span class="quotelev1">&gt; &#160;use-mpi-ignore-tkr/ - new mpi module implementation
</span><br>
<span class="quotelev1">&gt; &#160;use-mpi-f08/ &#160; &#160; &#160; &#160;- new mpi_f08 module implementation
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's also a prototype 6-function-MPI implementation under use-mpi-f08-desc that emulates the new F08 dimension(..) syntax that isn't fully available in Fortran compilers yet. &#160;We did that to prove it to ourselves that it could be done once the compilers fully support it. &#160;This directory/implementation will likely eventually replace the use-mpi-f08 version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other things that were done:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - ompi_info grew a few new output fields to describe what level of Fortran support is included
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Existing Fortran examples in examples/ were renamed; new mpi_f08 examples were added
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - The old Fortran MPI libraries were renamed:
</span><br>
<span class="quotelev1">&gt; &#160;- libmpi_f77 -&gt; libmpi_mpifh
</span><br>
<span class="quotelev1">&gt; &#160;- libmpi_f90 -&gt; libmpi_usempi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - The configury for Fortran was consolidated and significantly slimmed down. &#160;Note that the F77 env variable is now IGNORED for configure; you should only use FC. &#160;Example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; &#160;./configure CC=icc CXX=icpc FC=ifort ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - The <a href="https://bitbucket.org/jsquyres/mpi3-fortran">https://bitbucket.org/jsquyres/mpi3-fortran</a> branch has got to be one of OMPI's longest-running branches. &#160;Its first commit was Tue Apr 07 23:01:46 2009 -0400 -- in 2 days, it'll be 3 years old. &#160;:-) &#160;We think we've pulled in all relevant changes from the OMPI trunk (e.g., Fortran implementations of the new MPI-3 MPROBE stuff for mpif.h, use mpi, and use mpi_f08, and the recent Fujitsu Fortran patches).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I anticipate some instability when we bring this stuff into the trunk, simply because it touches a LOT of code in the MPI layer in the OMPI code base. &#160;We'll try our best to make it as pain-free as possible, but please bear with us when it is committed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10830.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: New Fortran bindings"</a>
<li><strong>Previous message:</strong> <a href="10828.php">Jeffrey Squyres: "[OMPI devel] RFC: New Fortran bindings"</a>
<li><strong>In reply to:</strong> <a href="10828.php">Jeffrey Squyres: "[OMPI devel] RFC: New Fortran bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10830.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: New Fortran bindings"</a>
<li><strong>Reply:</strong> <a href="10830.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: New Fortran bindings"</a>
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
