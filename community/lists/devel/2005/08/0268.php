<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 30 12:58:30 2005" -->
<!-- isoreceived="20050830175830" -->
<!-- sent="Tue, 30 Aug 2005 11:58:27 -0600" -->
<!-- isosent="20050830175827" -->
<!-- name="David Daniel" -->
<!-- email="ddd_at_[hidden]" -->
<!-- subject="Fortran peculiarities on Mac OS X 10.4" -->
<!-- id="29D52356-D790-4ECD-9F78-80C4ED2F4CBC_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> David Daniel (<em>ddd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-30 12:58:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0269.php">Aurelien Bouteiller: "Autogen.sh issue when using autogen.subdirs"</a>
<li><strong>Previous message:</strong> <a href="0267.php">Brian Barrett: "WRAPPER_EXTRA_LIBS build issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0270.php">George Bosilca: "Re:  Fortran peculiarities on Mac OS X 10.4"</a>
<li><strong>Reply:</strong> <a href="0270.php">George Bosilca: "Re:  Fortran peculiarities on Mac OS X 10.4"</a>
<li><strong>Reply:</strong> <a href="0271.php">Greg Watson: "Re:  Fortran peculiarities on Mac OS X 10.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>Anyone had any luck building fortran on Tiger, particularly f90?
<br>
<p>I'm probably just dumb, but appended are 4 problems I've seen.
<br>
<p>Thanks, David
<br>
<p><p><p>1. gfortran
<br>
<p>configure --enable-f77 --enable-f90
<br>
<p>[snip]
<br>
<p>*** Fortran 77 compiler
<br>
checking for gfortran... gfortran
<br>
checking whether we are using the GNU Fortran 77 compiler... yes
<br>
checking whether gfortran accepts -g... yes
<br>
checking gfortran external symbol convention... double underscore
<br>
checking if FORTRAN compiler supports LOGICAL... yes
<br>
checking size of FORTRAN LOGICAL... 4
<br>
checking for C type corresponding to Fortran LOGICAL... int
<br>
checking alignment of FORTRAN LOGICAL... unknown
<br>
configure: WARNING: *** Problem running configure test!
<br>
configure: WARNING: *** See config.log for details.
<br>
configure: error: *** Cannot continue.
<br>
<p><p><p>2. xlf
<br>
<p>configure FC=xlf F77=xlf --enable-f77 --enable-f90
<br>
<p>[snip]
<br>
<p>*** Fortran 77 compiler
<br>
checking whether we are using the GNU Fortran 77 compiler... no
<br>
checking whether xlf accepts -g... yes
<br>
checking xlf external symbol convention... no underscore
<br>
checking if FORTRAN compiler supports LOGICAL... yes
<br>
checking size of FORTRAN LOGICAL... unknown
<br>
configure: WARNING: *** Problem running configure test!
<br>
configure: WARNING: *** See config.log for details.
<br>
configure: error: *** Cannot continue.
<br>
<p><p><p>3. xlf again
<br>
<p>configure FC=xlf95 F77=xlf77 --enable-f77 --enable-f90
<br>
<p>[snip]
<br>
<p>*** Fortran 77 compiler
<br>
checking whether we are using the GNU Fortran 77 compiler... no
<br>
checking whether xlf77 accepts -g... no
<br>
checking xlf77 external symbol convention... configure: WARNING:  
<br>
unable to produce an object file testing F77 compiler
<br>
checking if FORTRAN compiler supports LOGICAL... no
<br>
checking if FORTRAN compiler supports INTEGER... no
<br>
checking if FORTRAN compiler supports INTEGER*1... no
<br>
checking if FORTRAN compiler supports INTEGER*2... no
<br>
checking if FORTRAN compiler supports INTEGER*4... no
<br>
checking if FORTRAN compiler supports INTEGER*8... no
<br>
checking if FORTRAN compiler supports INTEGER*16... no
<br>
checking if FORTRAN compiler supports REAL... no
<br>
checking if FORTRAN compiler supports REAL*4... no
<br>
checking if FORTRAN compiler supports REAL*8... no
<br>
checking if FORTRAN compiler supports REAL*16... no
<br>
checking if FORTRAN compiler supports DOUBLE PRECISION... no
<br>
checking if FORTRAN compiler supports COMPLEX... no
<br>
checking if FORTRAN compiler supports COMPLEX*8... no
<br>
checking if FORTRAN compiler supports COMPLEX*16... no
<br>
checking if FORTRAN compiler supports COMPLEX*32... no
<br>
checking for max fortran MPI handle index... 2147483647
<br>
<p>*** Fortran 90/95 compiler
<br>
checking whether we are using the GNU Fortran compiler... no
<br>
checking whether xlf95 accepts -g... yes
<br>
checking for Fortran flag to compile .f files... none
<br>
checking for Fortran flag to compile .f90 files... -qsuffix=f=f90
<br>
checking for Fortran flag to compile .f95 files... -qsuffix=f=f95
<br>
checking whether xlf77 and xlf95 compilers are compatible... no
<br>
configure: WARNING: *** Fortran 77 and Fortran 90 compilers are not  
<br>
link compatible
<br>
configure: WARNING: *** Disabling Fortran 90/95 bindings
<br>
<p><p><p>4. Do we need to add -lSystemStubs ???
<br>
<p>$ configure F77=gxlf --disable-f90 --enable-f77 --enable-static -- 
<br>
disable-shared
<br>
<p>$ make
<br>
$ make install
<br>
$ mpif77 hellof.f
<br>
** _main   === End of Compilation 1 ===
<br>
1501-510  Compilation successful for file hellof.f.
<br>
/usr/bin/ld: Undefined symbols:
<br>
_asprintf$LDBLStub
<br>
_fprintf$LDBLStub
<br>
_snprintf$LDBLStub
<br>
_sprintf$LDBLStub
<br>
_sscanf$LDBLStub
<br>
_printf$LDBLStub
<br>
_vfprintf$LDBLStub
<br>
_vasprintf$LDBLStub
<br>
_syslog$LDBLStub
<br>
xlf95 -I/opt/openmpi/trunk/include -I/opt/openmpi/trunk/include/ 
<br>
openmpi/ompi hellof.f -L/opt/openmpi/trunk/lib -lmpi -lorte -lopal - 
<br>
lm -ldl
<br>
<p><p>BUT.... explicitly adding -lSystemStubs (which needs to be at the end  
<br>
so I can't use mpif77 -- or can I?)
<br>
<p>$ xlf95 -I/opt/openmpi/trunk/include -I/opt/openmpi/trunk/include/ 
<br>
openmpi/ompi hellof.f -L/opt/openmpi/trunk/lib -lmpi -lorte -lopal - 
<br>
lm -ldl -lSystemStubs
<br>
** _main   === End of Compilation 1 ===
<br>
1501-510  Compilation successful for file hellof.f.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0269.php">Aurelien Bouteiller: "Autogen.sh issue when using autogen.subdirs"</a>
<li><strong>Previous message:</strong> <a href="0267.php">Brian Barrett: "WRAPPER_EXTRA_LIBS build issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0270.php">George Bosilca: "Re:  Fortran peculiarities on Mac OS X 10.4"</a>
<li><strong>Reply:</strong> <a href="0270.php">George Bosilca: "Re:  Fortran peculiarities on Mac OS X 10.4"</a>
<li><strong>Reply:</strong> <a href="0271.php">Greg Watson: "Re:  Fortran peculiarities on Mac OS X 10.4"</a>
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
