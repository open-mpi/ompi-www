<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 21 12:28:15 2005" -->
<!-- isoreceived="20051021172815" -->
<!-- sent="Fri, 21 Oct 2005 13:28:05 -0400" -->
<!-- isosent="20051021172805" -->
<!-- name="Charles Williams" -->
<!-- email="willic3_at_[hidden]" -->
<!-- subject="[O-MPI users] Questions about mpif90/g95" -->
<!-- id="BA7D85B0-D5AA-40A4-8A43-1E65A235D837_at_rpi.edu" -->
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
<strong>Date:</strong> 2005-10-21 12:28:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0220.php">Charles Williams: "[O-MPI users] Correction to 'Questions about mpif90/g95'"</a>
<li><strong>Previous message:</strong> <a href="0218.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am testing out Open MPI on a Mac running 10.4, using the Apple gnu  
<br>
compilers plus fink-installed g95.  I was running into problems  
<br>
building PETSc using mpif90 as my fortran compiler, so I tried a  
<br>
simple test on a trivial fortran example and got the same results.   
<br>
Here is what happens:
<br>
<p>mpif90 --show
<br>
g95 -I/Users/willic3/geoframe/tools/openmpi/include -I/Users/willic3/ 
<br>
geoframe/tools/openmpi/include/openmpi/ompi -I /Users/willic3/ 
<br>
geoframe/tools/openmpi/lib -Wl,-u,_munmap -Wl,- 
<br>
multiply_defined,suppress -L/Users/willic3/geoframe/tools/openmpi/lib  
<br>
-lmpi_f90 -lmpi -lorte -lopal -lm -ldl
<br>
284 willic3_at_rachel&gt;mpif90 -c -o testwrite2.o testwrite2.f
<br>
285 willic3_at_rachel&gt;mpif90 -o testwrite2 testwrite2.o
<br>
286 willic3_at_rachel&gt;testwrite2
<br>
dyld: Symbol not found: _pmpi_wtime__
<br>
&nbsp;&nbsp;&nbsp;Referenced from: /Users/willic3/geoframe/tools/openmpi/lib/ 
<br>
libmpi_f90.0.dylib
<br>
&nbsp;&nbsp;&nbsp;Expected in: dynamic lookup
<br>
<p>Trace/BPT trap
<br>
<p>This is similar to what happens when attempting to run a PETSc  
<br>
example, but in this case there is also a _pmpi_wtick__ missing  
<br>
symbol.  Looking at the Open MPI libraries, I do not find a  
<br>
definition for these symbols, although they are referenced in  
<br>
libmpi_f90.a.  The strange thing is that this problem does not occur  
<br>
using a slightly-modified version of an older g95 package.  The  
<br>
difference between the two packages is that the older one includes  
<br>
libgcc_s.dylib, while the newer version does not have any shared  
<br>
libraries.  The package maintainer informs me that this library  
<br>
should not be necessary for g95.
<br>
<p>Does anyone know whether this might be a g95 problem, an Open MPI  
<br>
problem, or something else?
<br>
<p>System info:
<br>
<p>uname -a
<br>
Darwin rachel.geo.rpi.edu 8.2.0 Darwin Kernel Version 8.2.0: Fri Jun  
<br>
24 17:46:54 PDT 2005; root:xnu-792.2.4.obj~3/RELEASE_PPC Power  
<br>
Macintosh powerpc
<br>
<p>gcc --version
<br>
powerpc-apple-darwin8-gcc-4.0.0 (GCC) 4.0.0 (Apple Computer, Inc.  
<br>
build 5026)
<br>
<p>g++ --version
<br>
powerpc-apple-darwin8-g++-4.0.0 (GCC) 4.0.0 (Apple Computer, Inc.  
<br>
build 5026)
<br>
<p>g95 --version
<br>
G95 (GCC 4.0.2 (g95!) Oct  3 2005)
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0219/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0220.php">Charles Williams: "[O-MPI users] Correction to 'Questions about mpif90/g95'"</a>
<li><strong>Previous message:</strong> <a href="0218.php">Konstantin Karganov: "Re: [O-MPI users] OpenMPI debugging support"</a>
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
