<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 24 11:01:39 2005" -->
<!-- isoreceived="20051024160139" -->
<!-- sent="Mon, 24 Oct 2005 11:01:37 -0500" -->
<!-- isosent="20051024160137" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Correction to 'Questions about mpif90/g95'" -->
<!-- id="435D0561.8030800_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8913E2EB-E34A-4E13-94EE-717EED222A1E_at_rpi.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-24 11:01:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0228.php">Jeff Squyres: "Re: [O-MPI users] thread support"</a>
<li><strong>Previous message:</strong> <a href="0226.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>In reply to:</strong> <a href="0220.php">Charles Williams: "[O-MPI users] Correction to 'Questions about mpif90/g95'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0234.php">Charles Williams: "Re: [O-MPI users] Correction to 'Questions about mpif90/g95'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We actually do not have profiling versions of the MPI_Wtick and 
<br>
MPI_Wtime functions -- the MPI standard says that we don't have to 
<br>
(indeed, in Open MPI, they're inline functions in mpi.h).
<br>
<p>I just built the PETSc tests last week with no problem, however (but on 
<br>
Linux, not OSX).  Can you send more specific information about how you 
<br>
built PETSc so that I can try to replicate the problem?
<br>
<p><p><p>Charles Williams wrote:
<br>
<span class="quotelev1">&gt; I'm sorry about my previous post.  It turns out that was an experiment 
</span><br>
<span class="quotelev1">&gt; of mine where I created a dynamic library for libmpi_f90, which doesn't 
</span><br>
<span class="quotelev1">&gt; happen normally.  My test example now runs, but I still have problems 
</span><br>
<span class="quotelev1">&gt; with PETSc:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; make test
</span><br>
<span class="quotelev1">&gt; Running test examples to verify correct installation
</span><br>
<span class="quotelev1">&gt; /Users/willic3/geoframe/tools/petsc/src/snes/examples/tutorials
</span><br>
<span class="quotelev1">&gt; --------------Error detected during compile or link!-----------------------
</span><br>
<span class="quotelev1">&gt; See <a href="http://www.mcs.anl.gov/petsc/petsc-2/documentation/troubleshooting.html">http://www.mcs.anl.gov/petsc/petsc-2/documentation/troubleshooting.html</a>
</span><br>
<span class="quotelev1">&gt; mpic++ -c -Wall -g3 -fPIC 
</span><br>
<span class="quotelev1">&gt; -I/PETSc3/geodynamics/PetscSimulationsViewers/src 
</span><br>
<span class="quotelev1">&gt; -I/Users/willic3/geoframe/tools/petsc 
</span><br>
<span class="quotelev1">&gt; -I/Users/willic3/geoframe/tools/petsc/bmake/darwin8.2.0-openmpi-opt 
</span><br>
<span class="quotelev1">&gt; -I/Users/willic3/geoframe/tools/petsc/include 
</span><br>
<span class="quotelev1">&gt; -I/Users/willic3/geoframe/tools/openmpi/include 
</span><br>
<span class="quotelev1">&gt; -D__SDIR__=&quot;src/snes/examples/tutorials/&quot; ex19.c
</span><br>
<span class="quotelev1">&gt; mpic++ -Wall -g3  -o ex19  ex19.o 
</span><br>
<span class="quotelev1">&gt; -L/Users/willic3/geoframe/tools/petsc/lib/darwin8.2.0-openmpi-opt 
</span><br>
<span class="quotelev1">&gt; -L/Users/willic3/geoframe/tools/petsc/lib/darwin8.2.0-openmpi-opt 
</span><br>
<span class="quotelev1">&gt; -lpetscsnes -lpetscksp -lpetscdm -lpetscmat -lpetscvec -lpetsc    
</span><br>
<span class="quotelev1">&gt; -L/usr/X11R6/lib -lX11 
</span><br>
<span class="quotelev1">&gt; /System/Library/Frameworks/vecLib.framework/vecLib 
</span><br>
<span class="quotelev1">&gt; -L/Users/willic3/geoframe/tools/openmpi/lib 
</span><br>
<span class="quotelev1">&gt; -L/Users/willic3/geoframe/export/pythia-0.8/lib 
</span><br>
<span class="quotelev1">&gt; -L/Users/willic3/geoframe/tools/lib 
</span><br>
<span class="quotelev1">&gt; -L/usr/lib/gcc/powerpc-apple-darwin8/4.0.0 
</span><br>
<span class="quotelev1">&gt; -L/usr/lib/gcc/powerpc-apple-darwin8/4.0.0/../../.. -ldl -lmpi -lorte 
</span><br>
<span class="quotelev1">&gt; -lopal -lgcc_eh -lSystemStubs -lmx -lSystem -lf95 -lm 
</span><br>
<span class="quotelev1">&gt; -L/sw/bin/../lib/gcc-lib/powerpc-apple-darwin8/4.0.2/ 
</span><br>
<span class="quotelev1">&gt; -L/sw/bin/../lib/gcc-lib/powerpc-apple-darwin8/4.0.2 
</span><br>
<span class="quotelev1">&gt; -L/Users/willic3/geoframe/export/pythia-0.8/lib// 
</span><br>
<span class="quotelev1">&gt; -L/Users/willic3/geoframe/tools/lib// 
</span><br>
<span class="quotelev1">&gt; -L/Users/willic3/geoframe/tools/openmpi/lib// 
</span><br>
<span class="quotelev1">&gt; -L/sw/lib/gcc-lib/powerpc-apple-darwin8/4.0.2/ -L/usr/lib/gcc// 
</span><br>
<span class="quotelev1">&gt; -L/sw/bin/../lib/gcc-lib/powerpc-apple-darwin8/4.0.2/// 
</span><br>
<span class="quotelev1">&gt; -L/sw/lib/gcc-lib/powerpc-apple-darwin8/4.0.2/// -L/usr/lib// -lm 
</span><br>
<span class="quotelev1">&gt; -L/Users/willic3/geoframe/tools/openmpi/lib 
</span><br>
<span class="quotelev1">&gt; -L/Users/willic3/geoframe/export/pythia-0.8/lib 
</span><br>
<span class="quotelev1">&gt; -L/Users/willic3/geoframe/tools/lib 
</span><br>
<span class="quotelev1">&gt; -L/usr/lib/gcc/powerpc-apple-darwin8/4.0.0 
</span><br>
<span class="quotelev1">&gt; -L/usr/lib/gcc/powerpc-apple-darwin8/4.0.0/../../.. -ldl -lmpi -lorte 
</span><br>
<span class="quotelev1">&gt; -lopal -lgcc_eh -lSystemStubs -lmx -lSystem -lmpi_cxx -lstdc++ -lgcc_s 
</span><br>
<span class="quotelev1">&gt; -L/Users/willic3/geoframe/tools/openmpi/lib 
</span><br>
<span class="quotelev1">&gt; -L/Users/willic3/geoframe/export/pythia-0.8/lib 
</span><br>
<span class="quotelev1">&gt; -L/Users/willic3/geoframe/tools/lib 
</span><br>
<span class="quotelev1">&gt; -L/usr/lib/gcc/powerpc-apple-darwin8/4.0.0 
</span><br>
<span class="quotelev1">&gt; -L/usr/lib/gcc/powerpc-apple-darwin8/4.0.0/../../.. -ldl -lmpi -lorte 
</span><br>
<span class="quotelev1">&gt; -lopal -lgcc_eh -lSystemStubs -lmx -lSystem -lmpi_cxx -lstdc++ -lgcc_s 
</span><br>
<span class="quotelev1">&gt; -L/Users/willic3/geoframe/tools/openmpi/lib 
</span><br>
<span class="quotelev1">&gt; -L/Users/willic3/geoframe/export/pythia-0.8/lib 
</span><br>
<span class="quotelev1">&gt; -L/Users/willic3/geoframe/tools/lib 
</span><br>
<span class="quotelev1">&gt; -L/usr/lib/gcc/powerpc-apple-darwin8/4.0.0 
</span><br>
<span class="quotelev1">&gt; -L/usr/lib/gcc/powerpc-apple-darwin8/4.0.0/../../.. -ldl -lmpi -lorte 
</span><br>
<span class="quotelev1">&gt; -lopal -lgcc_eh -lSystemStubs -lmx -lSystem -ldl
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: Undefined symbols:
</span><br>
<span class="quotelev1">&gt; _pmpi_wtick__
</span><br>
<span class="quotelev1">&gt; _pmpi_wtime__
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: [ex19] Error 1 (ignored)
</span><br>
<span class="quotelev1">&gt; etc., etc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone have any ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Charles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Charles A. Williams
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dept. of Earth &amp; Environmental Sciences
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Science Center, 2C01B
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rensselaer Polytechnic Institute
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Troy, NY  12180
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Phone:    (518) 276-3369
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FAX:        (518) 276-2012
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; e-mail:    willic3_at_[hidden] &lt;mailto:willic3_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
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
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0228.php">Jeff Squyres: "Re: [O-MPI users] thread support"</a>
<li><strong>Previous message:</strong> <a href="0226.php">Ken Mighell: "Re: [O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>In reply to:</strong> <a href="0220.php">Charles Williams: "[O-MPI users] Correction to 'Questions about mpif90/g95'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0234.php">Charles Williams: "Re: [O-MPI users] Correction to 'Questions about mpif90/g95'"</a>
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
