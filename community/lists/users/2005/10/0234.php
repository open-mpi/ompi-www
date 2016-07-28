<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 25 14:47:57 2005" -->
<!-- isoreceived="20051025194757" -->
<!-- sent="Tue, 25 Oct 2005 15:47:46 -0400" -->
<!-- isosent="20051025194746" -->
<!-- name="Charles Williams" -->
<!-- email="willic3_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Correction to 'Questions about mpif90/g95'" -->
<!-- id="46C23DA5-A174-4CDE-B25C-A38ECC92D7F7_at_rpi.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.19.1130173204.15439.users_at_open-mpi.org" -->
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
<strong>From:</strong> Charles Williams (<em>willic3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-25 14:47:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0235.php">Troy Telford: "Re: [O-MPI users] HPL &amp; HPCC: Wedged"</a>
<li><strong>Previous message:</strong> <a href="0233.php">Nick I: "[O-MPI users] Ask the Cluster Expert"</a>
<li><strong>Maybe in reply to:</strong> <a href="0220.php">Charles Williams: "[O-MPI users] Correction to 'Questions about mpif90/g95'"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Recreating the problem will probably be a bit convoluted, but should  
<br>
be possible.  Things are also complicated by the fact that I'm using  
<br>
the current developers' version of petsc.  I am presently getting  
<br>
around the problem by reverting to an older version of g95, but I  
<br>
believe that this is a symptom of the problem rather than the cause.   
<br>
The primary differences between the two versions is that the newer  
<br>
one does not include libgcc_s.dylib.  Anyway, assuming you have  
<br>
access to a Tiger system, here is how you should be able to recreate  
<br>
the situation:
<br>
<p>1.  Install the current fink version of g95 (0.50-20051002).
<br>
<p>2.  Configure and build Open MPI after setting FC and F77 to g95.
<br>
<p>3.  Get the current developers' version of PETSc.  I believe there is  
<br>
a tarball version available at ftp.mcs.anl.gov/pub/petsc.  They used  
<br>
to hide it by putting a dot in front of the name, but I just looked  
<br>
and that no longer seems to be the case.  I am instead using the open- 
<br>
source BitKeeper client to grab things.  You will need to get both  
<br>
the main package (bk://petsc.bkbits.net/petsc-dev) as well as the  
<br>
BuildSystem package (bk://sidl.bkbits.net/BuildSystem), which should  
<br>
be installed in ${PETSC_DIR}/python/BuildSystem.
<br>
<p>4.  This is where things get a little tricky.  So far, I have to edit  
<br>
a couple of the PETSc files to get things working properly with Open  
<br>
MPI.  Open MPI appears to build two-level namespace libraries on OSX  
<br>
by default, where PETSc attempts to build the old-style flat  
<br>
namespace libraries.  I haven't been able to get shared and dynamic  
<br>
libraries to build properly using their default setup with Open MPI.   
<br>
The two files in question are ${PETSC_DIR}/bmake/common/ 
<br>
rules.shared.basic and ${PETSC_DIR}/python/BuildSystem/config/ 
<br>
setCompilers.py.  I have attached edited copies of both files.  If  
<br>
you want to build the python bindings using Open MPI, you also need  
<br>
to edit a third file (${PETSC_DIR}/python/config/base.py), which I  
<br>
have also attached.
<br>
<p>5.  Configure PETSc:
<br>
<p>./config/configure.py \
<br>
--PETSC_ARCH=darwin8.2.0-openmpi-opt \
<br>
--with-clanguage=c++ \
<br>
--with-c-support \
<br>
--with-cc=mpicc \
<br>
--with-cxx=mpic++ \
<br>
--with-fc=mpif90 \
<br>
--with-shared \
<br>
--with-dynamic \
<br>
--with-python \
<br>
--sharedLibraryFlags='-dynamiclib -single_module -undefined  
<br>
dynamic_lookup -multiply_defined suppress' \
<br>
--dynamicLibraryFlags='-bundle -undefined dynamic_lookup - 
<br>
multiply_defined suppress' \
<br>
--with-mpi-dir=/Users/willic3/geoframe/tools/openmpi
<br>
<p>If the --sharedLibraryFlags and --dynamicLibraryFlags worked the way  
<br>
I think they should, editing the files would not be necessary.  If  
<br>
you don't edit the files, though, these settings get overridden.
<br>
<p>6.  Build PETSc (things should build OK), and then try 'make test',  
<br>
which I believe will duplicate what is pasted below.
<br>
<p>If you have any insights into what the problem might be, I would  
<br>
certainly appreciate it.  Thanks for your help.
<br>
<p>Charles
<br>
<p>&#239;&#191;&#188;&#239;&#191;&#188;&#239;&#191;&#188;
<br>
<p>On Oct 24, 2005, at 1:00 PM, users-request_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt;     users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt;     users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    1. Re: Correction to 'Questions about mpif90/g95' (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Mon, 24 Oct 2005 11:01:37 -0500
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [O-MPI users] Correction to 'Questions about mpif90/g95'
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;435D0561.8030800_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We actually do not have profiling versions of the MPI_Wtick and
</span><br>
<span class="quotelev1">&gt; MPI_Wtime functions -- the MPI standard says that we don't have to
</span><br>
<span class="quotelev1">&gt; (indeed, in Open MPI, they're inline functions in mpi.h).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just built the PETSc tests last week with no problem, however  
</span><br>
<span class="quotelev1">&gt; (but on
</span><br>
<span class="quotelev1">&gt; Linux, not OSX).  Can you send more specific information about how you
</span><br>
<span class="quotelev1">&gt; built PETSc so that I can try to replicate the problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Charles Williams wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm sorry about my previous post.  It turns out that was an  
</span><br>
<span class="quotelev2">&gt;&gt; experiment
</span><br>
<span class="quotelev2">&gt;&gt; of mine where I created a dynamic library for libmpi_f90, which  
</span><br>
<span class="quotelev2">&gt;&gt; doesn't
</span><br>
<span class="quotelev2">&gt;&gt; happen normally.  My test example now runs, but I still have problems
</span><br>
<span class="quotelev2">&gt;&gt; with PETSc:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; make test
</span><br>
<span class="quotelev2">&gt;&gt; Running test examples to verify correct installation
</span><br>
<span class="quotelev2">&gt;&gt; /Users/willic3/geoframe/tools/petsc/src/snes/examples/tutorials
</span><br>
<span class="quotelev2">&gt;&gt; --------------Error detected during compile or  
</span><br>
<span class="quotelev2">&gt;&gt; link!-----------------------
</span><br>
<span class="quotelev2">&gt;&gt; See <a href="http://www.mcs.anl.gov/petsc/petsc-2/documentation/">http://www.mcs.anl.gov/petsc/petsc-2/documentation/</a> 
</span><br>
<span class="quotelev2">&gt;&gt; troubleshooting.html
</span><br>
<span class="quotelev2">&gt;&gt; mpic++ -c -Wall -g3 -fPIC
</span><br>
<span class="quotelev2">&gt;&gt; -I/PETSc3/geodynamics/PetscSimulationsViewers/src
</span><br>
<span class="quotelev2">&gt;&gt; -I/Users/willic3/geoframe/tools/petsc
</span><br>
<span class="quotelev2">&gt;&gt; -I/Users/willic3/geoframe/tools/petsc/bmake/darwin8.2.0-openmpi-opt
</span><br>
<span class="quotelev2">&gt;&gt; -I/Users/willic3/geoframe/tools/petsc/include
</span><br>
<span class="quotelev2">&gt;&gt; -I/Users/willic3/geoframe/tools/openmpi/include
</span><br>
<span class="quotelev2">&gt;&gt; -D__SDIR__=&quot;src/snes/examples/tutorials/&quot; ex19.c
</span><br>
<span class="quotelev2">&gt;&gt; mpic++ -Wall -g3  -o ex19  ex19.o
</span><br>
<span class="quotelev2">&gt;&gt; -L/Users/willic3/geoframe/tools/petsc/lib/darwin8.2.0-openmpi-opt
</span><br>
<span class="quotelev2">&gt;&gt; -L/Users/willic3/geoframe/tools/petsc/lib/darwin8.2.0-openmpi-opt
</span><br>
<span class="quotelev2">&gt;&gt; -lpetscsnes -lpetscksp -lpetscdm -lpetscmat -lpetscvec -lpetsc
</span><br>
<span class="quotelev2">&gt;&gt; -L/usr/X11R6/lib -lX11
</span><br>
<span class="quotelev2">&gt;&gt; /System/Library/Frameworks/vecLib.framework/vecLib
</span><br>
<span class="quotelev2">&gt;&gt; -L/Users/willic3/geoframe/tools/openmpi/lib
</span><br>
<span class="quotelev2">&gt;&gt; -L/Users/willic3/geoframe/export/pythia-0.8/lib
</span><br>
<span class="quotelev2">&gt;&gt; -L/Users/willic3/geoframe/tools/lib
</span><br>
<span class="quotelev2">&gt;&gt; -L/usr/lib/gcc/powerpc-apple-darwin8/4.0.0
</span><br>
<span class="quotelev2">&gt;&gt; -L/usr/lib/gcc/powerpc-apple-darwin8/4.0.0/../../.. -ldl -lmpi -lorte
</span><br>
<span class="quotelev2">&gt;&gt; -lopal -lgcc_eh -lSystemStubs -lmx -lSystem -lf95 -lm
</span><br>
<span class="quotelev2">&gt;&gt; -L/sw/bin/../lib/gcc-lib/powerpc-apple-darwin8/4.0.2/
</span><br>
<span class="quotelev2">&gt;&gt; -L/sw/bin/../lib/gcc-lib/powerpc-apple-darwin8/4.0.2
</span><br>
<span class="quotelev2">&gt;&gt; -L/Users/willic3/geoframe/export/pythia-0.8/lib//
</span><br>
<span class="quotelev2">&gt;&gt; -L/Users/willic3/geoframe/tools/lib//
</span><br>
<span class="quotelev2">&gt;&gt; -L/Users/willic3/geoframe/tools/openmpi/lib//
</span><br>
<span class="quotelev2">&gt;&gt; -L/sw/lib/gcc-lib/powerpc-apple-darwin8/4.0.2/ -L/usr/lib/gcc//
</span><br>
<span class="quotelev2">&gt;&gt; -L/sw/bin/../lib/gcc-lib/powerpc-apple-darwin8/4.0.2///
</span><br>
<span class="quotelev2">&gt;&gt; -L/sw/lib/gcc-lib/powerpc-apple-darwin8/4.0.2/// -L/usr/lib// -lm
</span><br>
<span class="quotelev2">&gt;&gt; -L/Users/willic3/geoframe/tools/openmpi/lib
</span><br>
<span class="quotelev2">&gt;&gt; -L/Users/willic3/geoframe/export/pythia-0.8/lib
</span><br>
<span class="quotelev2">&gt;&gt; -L/Users/willic3/geoframe/tools/lib
</span><br>
<span class="quotelev2">&gt;&gt; -L/usr/lib/gcc/powerpc-apple-darwin8/4.0.0
</span><br>
<span class="quotelev2">&gt;&gt; -L/usr/lib/gcc/powerpc-apple-darwin8/4.0.0/../../.. -ldl -lmpi -lorte
</span><br>
<span class="quotelev2">&gt;&gt; -lopal -lgcc_eh -lSystemStubs -lmx -lSystem -lmpi_cxx -lstdc++ - 
</span><br>
<span class="quotelev2">&gt;&gt; lgcc_s
</span><br>
<span class="quotelev2">&gt;&gt; -L/Users/willic3/geoframe/tools/openmpi/lib
</span><br>
<span class="quotelev2">&gt;&gt; -L/Users/willic3/geoframe/export/pythia-0.8/lib
</span><br>
<span class="quotelev2">&gt;&gt; -L/Users/willic3/geoframe/tools/lib
</span><br>
<span class="quotelev2">&gt;&gt; -L/usr/lib/gcc/powerpc-apple-darwin8/4.0.0
</span><br>
<span class="quotelev2">&gt;&gt; -L/usr/lib/gcc/powerpc-apple-darwin8/4.0.0/../../.. -ldl -lmpi -lorte
</span><br>
<span class="quotelev2">&gt;&gt; -lopal -lgcc_eh -lSystemStubs -lmx -lSystem -lmpi_cxx -lstdc++ - 
</span><br>
<span class="quotelev2">&gt;&gt; lgcc_s
</span><br>
<span class="quotelev2">&gt;&gt; -L/Users/willic3/geoframe/tools/openmpi/lib
</span><br>
<span class="quotelev2">&gt;&gt; -L/Users/willic3/geoframe/export/pythia-0.8/lib
</span><br>
<span class="quotelev2">&gt;&gt; -L/Users/willic3/geoframe/tools/lib
</span><br>
<span class="quotelev2">&gt;&gt; -L/usr/lib/gcc/powerpc-apple-darwin8/4.0.0
</span><br>
<span class="quotelev2">&gt;&gt; -L/usr/lib/gcc/powerpc-apple-darwin8/4.0.0/../../.. -ldl -lmpi -lorte
</span><br>
<span class="quotelev2">&gt;&gt; -lopal -lgcc_eh -lSystemStubs -lmx -lSystem -ldl
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: Undefined symbols:
</span><br>
<span class="quotelev2">&gt;&gt; _pmpi_wtick__
</span><br>
<span class="quotelev2">&gt;&gt; _pmpi_wtime__
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: [ex19] Error 1 (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; etc., etc.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone have any ideas?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Charles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Charles A. Williams
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dept. of Earth &amp; Environmental Sciences
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Science Center, 2C01B
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rensselaer Polytechnic Institute
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Troy, NY  12180
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Phone:    (518) 276-3369
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FAX:        (518) 276-2012
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; e-mail:    willic3_at_[hidden] &lt;mailto:willic3_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; ---
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; End of users Digest, Vol 117, Issue 1
</span><br>
<span class="quotelev1">&gt; *************************************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Charles A. Williams
<br>
Dept. of Earth &amp; Environmental Sciences
<br>
Science Center, 2C01B
<br>
Rensselaer Polytechnic Institute
<br>
Troy, NY  12180
<br>
Phone:    (518) 276-3369
<br>
FAX:        (518) 276-2012
<br>
e-mail:    willic3_at_[hidden]
<br>
<p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0234/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0234/rules.shared.basic">rules.shared.basic</a>
</ul>
<!-- attachment="rules.shared.basic" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0234/03-attachment">attachment</a>
</ul>
<!-- attachment="03-attachment" -->
<hr>
<ul>
<li>text/x-python-script attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0234/base.py">base.py</a>
</ul>
<!-- attachment="base.py" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0234/05-attachment">attachment</a>
</ul>
<!-- attachment="05-attachment" -->
<hr>
<ul>
<li>text/x-python-script attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0234/setCompilers.py">setCompilers.py</a>
</ul>
<!-- attachment="setCompilers.py" -->
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0234/07-attachment">attachment</a>
</ul>
<!-- attachment="07-attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0235.php">Troy Telford: "Re: [O-MPI users] HPL &amp; HPCC: Wedged"</a>
<li><strong>Previous message:</strong> <a href="0233.php">Nick I: "[O-MPI users] Ask the Cluster Expert"</a>
<li><strong>Maybe in reply to:</strong> <a href="0220.php">Charles Williams: "[O-MPI users] Correction to 'Questions about mpif90/g95'"</a>
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
