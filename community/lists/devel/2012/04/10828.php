<?
$subject_val = "[OMPI devel] RFC: New Fortran bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  5 11:37:49 2012" -->
<!-- isoreceived="20120405153749" -->
<!-- sent="Thu, 5 Apr 2012 11:37:42 -0400" -->
<!-- isosent="20120405153742" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: New Fortran bindings" -->
<!-- id="2D930F2D-C394-4446-AE1B-2A0C4EB1BDB5_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: New Fortran bindings<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-05 11:37:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10829.php">Josh Hursey: "Re: [OMPI devel] RFC: New Fortran bindings"</a>
<li><strong>Previous message:</strong> <a href="10827.php">Gutierrez, Samuel K: "Re: [OMPI devel] [EXTERNAL] Re: Developers Meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10829.php">Josh Hursey: "Re: [OMPI devel] RFC: New Fortran bindings"</a>
<li><strong>Reply:</strong> <a href="10829.php">Josh Hursey: "Re: [OMPI devel] RFC: New Fortran bindings"</a>
<li><strong>Reply:</strong> <a href="10884.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: New Fortran bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Revamp the entire MPI Fortran bindings; new &quot;mpifort&quot; wrapper compiler
<br>
<p>WHY: Much better mpi module implementation; addition of MPI-3 mpi_f08 module
<br>
<p>WHERE: Remove ompi/mpi/f77 and ompi/mpi/f90, replace with ompi/mpi/fortran
<br>
<p>TIMEOUT: Teleconf, Tue Apr 17, 2012
<br>
<p>====================================================
<br>
<p>Highlights:
<br>
-----------
<br>
<p>1. New mpifort wrapper compiler: you can utilize mpif.h, use mpi, and use mpi_f08 through this one wrapper compiler
<br>
2. mpif77 and mpif90 still exist, but are sym links to mpifort and may be removed in a future release
<br>
3. The mpi module has been re-implemented and is significantly &quot;mo' bettah&quot;
<br>
4. The mpi_f08 module offers many, many improvements over mpif.h and the mpi module
<br>
<p>I will request an SVN &quot;quiet time&quot; to commit this stuff.  It's coming from a VERY long-lived mercurial branch (3 years! see below); it'll almost certainly take a few SVN commits and a bunch of testing before I get it correctly committed to the SVN trunk.
<br>
<p>More details:
<br>
-------------
<br>
<p>Craig Rasmussen and I have been working with the MPI-3 Fortran WG and Fortran J3 committees for a long, long time to make a prototype MPI-3 Fortran bindings implementation.  We think we're at a stable enough state to bring this stuff back to the trunk, with the goal of including it in OMPI v1.7.  
<br>
<p>Special thanks go out to everyone who has been incredibly patient and helpful to us in this journey:
<br>
<p>- Rolf Rabenseifner/HLRS (mastermind/genius behind the entire MPI-3 Fortran effort)
<br>
- The Fortran J3 committee
<br>
- Tobias Burnus/gfortran
<br>
- Tony Goetz/Absoft
<br>
- Terry Donte/Oracle
<br>
- ...and probably others whom I'm forgetting :-(
<br>
<p>There's still opportunities for optimization in the mpi_f08 implementation, but by and large, it is as far along as it can be until Fortran compilers start implementing the new F08 dimension(..) syntax.
<br>
<p>Note that gfortran is currently unsupported for the mpi_f08 module and the new mpi module.  gfortran users will a) fall back to the same mpi module implementation that is in OMPI v1.5.x, and b) not get the new mpi_f08 module.  The gfortran maintainers are actively working hard to add the necessary features to support both the new mpi_f08 module and the new mpi module implementations.  This will take some time.
<br>
<p>As mentioned above, ompi/mpi/f77 and ompi/mpi/f90 no longer exist.  All the fortran bindings implementations have been collated under ompi/mpi/fortran; each implementation has its own subdirectory:
<br>
<p>ompi/mpi/fortran/
<br>
&nbsp;&nbsp;base/               - glue code
<br>
&nbsp;&nbsp;mpif-h/             - what used to be ompi/mpi/f77
<br>
&nbsp;&nbsp;use-mpi-tkr/        - what used to be ompi/mpi/f90
<br>
&nbsp;&nbsp;use-mpi-ignore-tkr/ - new mpi module implementation
<br>
&nbsp;&nbsp;use-mpi-f08/        - new mpi_f08 module implementation
<br>
<p>There's also a prototype 6-function-MPI implementation under use-mpi-f08-desc that emulates the new F08 dimension(..) syntax that isn't fully available in Fortran compilers yet.  We did that to prove it to ourselves that it could be done once the compilers fully support it.  This directory/implementation will likely eventually replace the use-mpi-f08 version.
<br>
<p>Other things that were done:
<br>
<p>- ompi_info grew a few new output fields to describe what level of Fortran support is included
<br>
<p>- Existing Fortran examples in examples/ were renamed; new mpi_f08 examples were added
<br>
<p>- The old Fortran MPI libraries were renamed:
<br>
&nbsp;&nbsp;- libmpi_f77 -&gt; libmpi_mpifh
<br>
&nbsp;&nbsp;- libmpi_f90 -&gt; libmpi_usempi
<br>
<p>- The configury for Fortran was consolidated and significantly slimmed down.  Note that the F77 env variable is now IGNORED for configure; you should only use FC.  Example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;./configure CC=icc CXX=icpc FC=ifort ...
<br>
<p>- The <a href="https://bitbucket.org/jsquyres/mpi3-fortran">https://bitbucket.org/jsquyres/mpi3-fortran</a> branch has got to be one of OMPI's longest-running branches.  Its first commit was Tue Apr 07 23:01:46 2009 -0400 -- in 2 days, it'll be 3 years old.  :-)  We think we've pulled in all relevant changes from the OMPI trunk (e.g., Fortran implementations of the new MPI-3 MPROBE stuff for mpif.h, use mpi, and use mpi_f08, and the recent Fujitsu Fortran patches).
<br>
<p>I anticipate some instability when we bring this stuff into the trunk, simply because it touches a LOT of code in the MPI layer in the OMPI code base.  We'll try our best to make it as pain-free as possible, but please bear with us when it is committed.
<br>
<p>Thanks!
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
<li><strong>Next message:</strong> <a href="10829.php">Josh Hursey: "Re: [OMPI devel] RFC: New Fortran bindings"</a>
<li><strong>Previous message:</strong> <a href="10827.php">Gutierrez, Samuel K: "Re: [OMPI devel] [EXTERNAL] Re: Developers Meeting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10829.php">Josh Hursey: "Re: [OMPI devel] RFC: New Fortran bindings"</a>
<li><strong>Reply:</strong> <a href="10829.php">Josh Hursey: "Re: [OMPI devel] RFC: New Fortran bindings"</a>
<li><strong>Reply:</strong> <a href="10884.php">Jeffrey Squyres: "Re: [OMPI devel] RFC: New Fortran bindings"</a>
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
