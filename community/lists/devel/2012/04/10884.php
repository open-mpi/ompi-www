<?
$subject_val = "Re: [OMPI devel] RFC: New Fortran bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 17 14:35:31 2012" -->
<!-- isoreceived="20120417183531" -->
<!-- sent="Tue, 17 Apr 2012 14:35:26 -0400" -->
<!-- isosent="20120417183526" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: New Fortran bindings" -->
<!-- id="7C3418DB-B158-4BF0-A490-9033E3CC3B94_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-17 14:35:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10885.php">Jeffrey Squyres: "[OMPI devel] SVN quiet time (Fortran merge)"</a>
<li><strong>Previous message:</strong> <a href="10883.php">Jeff Squyres (jsquyres): "[OMPI devel] Agenda item"</a>
<li><strong>In reply to:</strong> <a href="10828.php">Jeffrey Squyres: "[OMPI devel] RFC: New Fortran bindings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The general consensus has been that the new Fortran stuff is ready to go in.  Per Josh's comments on the original RFC, I've updated all the mpiext stuff to handle the 3 new MPI Fortran interfaces (mpif.h, use mpi, and use mpi_f08).
<br>
<p>I plan to commit this to the OMPI trunk tomorrow (Wed, Apr 18, 2012).  
<br>
<p>*** NOTE: this commit is a complicated process that will definitely require multiple SVN commits to get correct (there are directory moves, etc.).  I will ask for SVN &quot;quiet time&quot; while doing this, where no one else commits while I'm working on this merge.  I'll send out an &quot;all clear&quot; when I'm all done.  
<br>
<p>During the &quot;quiet time&quot;, the SVN trunk is likely to be inconsistent / broken.  You will likely not want to &quot;svn up&quot; during this time.
<br>
<p>Hopefully, the process will take less than 1 work day.
<br>
<p>I'm sure that there will be some breakage after I'm all done, too -- you'll be testing configurations that we have not, so post-commit bug fixing will be inevitable.  Please be patient with me while we slog through these issues.
<br>
<p>Thanks!
<br>
<p><p><p><p>On Apr 5, 2012, at 11:37 AM, Jeffrey Squyres wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Revamp the entire MPI Fortran bindings; new &quot;mpifort&quot; wrapper compiler
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
<span class="quotelev1">&gt; I will request an SVN &quot;quiet time&quot; to commit this stuff.  It's coming from a VERY long-lived mercurial branch (3 years! see below); it'll almost certainly take a few SVN commits and a bunch of testing before I get it correctly committed to the SVN trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More details:
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Craig Rasmussen and I have been working with the MPI-3 Fortran WG and Fortran J3 committees for a long, long time to make a prototype MPI-3 Fortran bindings implementation.  We think we're at a stable enough state to bring this stuff back to the trunk, with the goal of including it in OMPI v1.7.  
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
<span class="quotelev1">&gt; Note that gfortran is currently unsupported for the mpi_f08 module and the new mpi module.  gfortran users will a) fall back to the same mpi module implementation that is in OMPI v1.5.x, and b) not get the new mpi_f08 module.  The gfortran maintainers are actively working hard to add the necessary features to support both the new mpi_f08 module and the new mpi module implementations.  This will take some time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As mentioned above, ompi/mpi/f77 and ompi/mpi/f90 no longer exist.  All the fortran bindings implementations have been collated under ompi/mpi/fortran; each implementation has its own subdirectory:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi/mpi/fortran/
</span><br>
<span class="quotelev1">&gt;  base/               - glue code
</span><br>
<span class="quotelev1">&gt;  mpif-h/             - what used to be ompi/mpi/f77
</span><br>
<span class="quotelev1">&gt;  use-mpi-tkr/        - what used to be ompi/mpi/f90
</span><br>
<span class="quotelev1">&gt;  use-mpi-ignore-tkr/ - new mpi module implementation
</span><br>
<span class="quotelev1">&gt;  use-mpi-f08/        - new mpi_f08 module implementation
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's also a prototype 6-function-MPI implementation under use-mpi-f08-desc that emulates the new F08 dimension(..) syntax that isn't fully available in Fortran compilers yet.  We did that to prove it to ourselves that it could be done once the compilers fully support it.  This directory/implementation will likely eventually replace the use-mpi-f08 version.
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
<span class="quotelev1">&gt;  - libmpi_f77 -&gt; libmpi_mpifh
</span><br>
<span class="quotelev1">&gt;  - libmpi_f90 -&gt; libmpi_usempi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - The configury for Fortran was consolidated and significantly slimmed down.  Note that the F77 env variable is now IGNORED for configure; you should only use FC.  Example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    ./configure CC=icc CXX=icpc FC=ifort ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - The <a href="https://bitbucket.org/jsquyres/mpi3-fortran">https://bitbucket.org/jsquyres/mpi3-fortran</a> branch has got to be one of OMPI's longest-running branches.  Its first commit was Tue Apr 07 23:01:46 2009 -0400 -- in 2 days, it'll be 3 years old.  :-)  We think we've pulled in all relevant changes from the OMPI trunk (e.g., Fortran implementations of the new MPI-3 MPROBE stuff for mpif.h, use mpi, and use mpi_f08, and the recent Fujitsu Fortran patches).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I anticipate some instability when we bring this stuff into the trunk, simply because it touches a LOT of code in the MPI layer in the OMPI code base.  We'll try our best to make it as pain-free as possible, but please bear with us when it is committed.
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10885.php">Jeffrey Squyres: "[OMPI devel] SVN quiet time (Fortran merge)"</a>
<li><strong>Previous message:</strong> <a href="10883.php">Jeff Squyres (jsquyres): "[OMPI devel] Agenda item"</a>
<li><strong>In reply to:</strong> <a href="10828.php">Jeffrey Squyres: "[OMPI devel] RFC: New Fortran bindings"</a>
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
