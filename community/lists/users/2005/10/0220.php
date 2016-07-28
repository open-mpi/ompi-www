<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 21 12:41:10 2005" -->
<!-- isoreceived="20051021174110" -->
<!-- sent="Fri, 21 Oct 2005 13:41:00 -0400" -->
<!-- isosent="20051021174100" -->
<!-- name="Charles Williams" -->
<!-- email="willic3_at_[hidden]" -->
<!-- subject="[O-MPI users] Correction to 'Questions about mpif90/g95'" -->
<!-- id="8913E2EB-E34A-4E13-94EE-717EED222A1E_at_rpi.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Date:</strong> 2005-10-21 12:41:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0221.php">Ken Mighell: "[O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>Previous message:</strong> <a href="0219.php">Charles Williams: "[O-MPI users] Questions about mpif90/g95"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0227.php">Jeff Squyres: "Re: [O-MPI users] Correction to 'Questions about mpif90/g95'"</a>
<li><strong>Reply:</strong> <a href="0227.php">Jeff Squyres: "Re: [O-MPI users] Correction to 'Questions about mpif90/g95'"</a>
<li><strong>Maybe reply:</strong> <a href="0234.php">Charles Williams: "Re: [O-MPI users] Correction to 'Questions about mpif90/g95'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm sorry about my previous post.  It turns out that was an  
<br>
experiment of mine where I created a dynamic library for libmpi_f90,  
<br>
which doesn't happen normally.  My test example now runs, but I still  
<br>
have problems with PETSc:
<br>
<p>make test
<br>
Running test examples to verify correct installation
<br>
/Users/willic3/geoframe/tools/petsc/src/snes/examples/tutorials
<br>
--------------Error detected during compile or  
<br>
link!-----------------------
<br>
See <a href="http://www.mcs.anl.gov/petsc/petsc-2/documentation/">http://www.mcs.anl.gov/petsc/petsc-2/documentation/</a> 
<br>
troubleshooting.html
<br>
mpic++ -c -Wall -g3 -fPIC -I/PETSc3/geodynamics/ 
<br>
PetscSimulationsViewers/src -I/Users/willic3/geoframe/tools/petsc -I/ 
<br>
Users/willic3/geoframe/tools/petsc/bmake/darwin8.2.0-openmpi-opt -I/ 
<br>
Users/willic3/geoframe/tools/petsc/include -I/Users/willic3/geoframe/ 
<br>
tools/openmpi/include -D__SDIR__=&quot;src/snes/examples/tutorials/&quot; ex19.c
<br>
mpic++ -Wall -g3  -o ex19  ex19.o -L/Users/willic3/geoframe/tools/ 
<br>
petsc/lib/darwin8.2.0-openmpi-opt -L/Users/willic3/geoframe/tools/ 
<br>
petsc/lib/darwin8.2.0-openmpi-opt -lpetscsnes -lpetscksp -lpetscdm - 
<br>
lpetscmat -lpetscvec -lpetsc    -L/usr/X11R6/lib -lX11 /System/ 
<br>
Library/Frameworks/vecLib.framework/vecLib -L/Users/willic3/geoframe/ 
<br>
tools/openmpi/lib -L/Users/willic3/geoframe/export/pythia-0.8/lib -L/ 
<br>
Users/willic3/geoframe/tools/lib -L/usr/lib/gcc/powerpc-apple- 
<br>
darwin8/4.0.0 -L/usr/lib/gcc/powerpc-apple-darwin8/4.0.0/../../.. - 
<br>
ldl -lmpi -lorte -lopal -lgcc_eh -lSystemStubs -lmx -lSystem -lf95 - 
<br>
lm -L/sw/bin/../lib/gcc-lib/powerpc-apple-darwin8/4.0.2/ -L/sw/bin/../ 
<br>
lib/gcc-lib/powerpc-apple-darwin8/4.0.2 -L/Users/willic3/geoframe/ 
<br>
export/pythia-0.8/lib// -L/Users/willic3/geoframe/tools/lib// -L/ 
<br>
Users/willic3/geoframe/tools/openmpi/lib// -L/sw/lib/gcc-lib/powerpc- 
<br>
apple-darwin8/4.0.2/ -L/usr/lib/gcc// -L/sw/bin/../lib/gcc-lib/ 
<br>
powerpc-apple-darwin8/4.0.2/// -L/sw/lib/gcc-lib/powerpc-apple- 
<br>
darwin8/4.0.2/// -L/usr/lib// -lm -L/Users/willic3/geoframe/tools/ 
<br>
openmpi/lib -L/Users/willic3/geoframe/export/pythia-0.8/lib -L/Users/ 
<br>
willic3/geoframe/tools/lib -L/usr/lib/gcc/powerpc-apple-darwin8/4.0.0  
<br>
-L/usr/lib/gcc/powerpc-apple-darwin8/4.0.0/../../.. -ldl -lmpi -lorte  
<br>
-lopal -lgcc_eh -lSystemStubs -lmx -lSystem -lmpi_cxx -lstdc++ - 
<br>
lgcc_s -L/Users/willic3/geoframe/tools/openmpi/lib -L/Users/willic3/ 
<br>
geoframe/export/pythia-0.8/lib -L/Users/willic3/geoframe/tools/lib -L/ 
<br>
usr/lib/gcc/powerpc-apple-darwin8/4.0.0 -L/usr/lib/gcc/powerpc-apple- 
<br>
darwin8/4.0.0/../../.. -ldl -lmpi -lorte -lopal -lgcc_eh - 
<br>
lSystemStubs -lmx -lSystem -lmpi_cxx -lstdc++ -lgcc_s -L/Users/ 
<br>
willic3/geoframe/tools/openmpi/lib -L/Users/willic3/geoframe/export/ 
<br>
pythia-0.8/lib -L/Users/willic3/geoframe/tools/lib -L/usr/lib/gcc/ 
<br>
powerpc-apple-darwin8/4.0.0 -L/usr/lib/gcc/powerpc-apple- 
<br>
darwin8/4.0.0/../../.. -ldl -lmpi -lorte -lopal -lgcc_eh - 
<br>
lSystemStubs -lmx -lSystem -ldl
<br>
/usr/bin/ld: Undefined symbols:
<br>
_pmpi_wtick__
<br>
_pmpi_wtime__
<br>
collect2: ld returned 1 exit status
<br>
make[2]: [ex19] Error 1 (ignored)
<br>
etc., etc.
<br>
<p>Does anyone have any ideas?
<br>
<p>Thanks,
<br>
Charles
<br>
<p><p>Charles A. Williams
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
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0220/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0221.php">Ken Mighell: "[O-MPI users] Building 1.0rc4 failed on a 5-node Beowulf cluster running RedHat Linux 7.3"</a>
<li><strong>Previous message:</strong> <a href="0219.php">Charles Williams: "[O-MPI users] Questions about mpif90/g95"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0227.php">Jeff Squyres: "Re: [O-MPI users] Correction to 'Questions about mpif90/g95'"</a>
<li><strong>Reply:</strong> <a href="0227.php">Jeff Squyres: "Re: [O-MPI users] Correction to 'Questions about mpif90/g95'"</a>
<li><strong>Maybe reply:</strong> <a href="0234.php">Charles Williams: "Re: [O-MPI users] Correction to 'Questions about mpif90/g95'"</a>
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
