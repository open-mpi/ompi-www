<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 30 14:26:05 2005" -->
<!-- isoreceived="20050830192605" -->
<!-- sent="Tue, 30 Aug 2005 15:22:51 -0400" -->
<!-- isosent="20050830192251" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re:  Fortran peculiarities on Mac OS X 10.4" -->
<!-- id="CF05B180-B8C5-4498-A9EF-61A7F5358084_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="29D52356-D790-4ECD-9F78-80C4ED2F4CBC_at_lanl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-30 14:22:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0271.php">Greg Watson: "Re:  Fortran peculiarities on Mac OS X 10.4"</a>
<li><strong>Previous message:</strong> <a href="0269.php">Aurelien Bouteiller: "Autogen.sh issue when using autogen.subdirs"</a>
<li><strong>In reply to:</strong> <a href="0268.php">David Daniel: "Fortran peculiarities on Mac OS X 10.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0271.php">Greg Watson: "Re:  Fortran peculiarities on Mac OS X 10.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I do. I'm compiling f77 and f90 on my MAC. Bu in order to do it I had  
<br>
to install my own gfortran. Basically I use the gcc provided by  
<br>
apple, and a gfortran version 4.0. Everything seems to work fine. I  
<br>
get all the Fortran types with the correct size and alignment.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 30, 2005, at 1:58 PM, David Daniel wrote:
<br>
<p><span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone had any luck building fortran on Tiger, particularly f90?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm probably just dumb, but appended are 4 problems I've seen.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. gfortran
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure --enable-f77 --enable-f90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Fortran 77 compiler
</span><br>
<span class="quotelev1">&gt; checking for gfortran... gfortran
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU Fortran 77 compiler... yes
</span><br>
<span class="quotelev1">&gt; checking whether gfortran accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking gfortran external symbol convention... double underscore
</span><br>
<span class="quotelev1">&gt; checking if FORTRAN compiler supports LOGICAL... yes
</span><br>
<span class="quotelev1">&gt; checking size of FORTRAN LOGICAL... 4
</span><br>
<span class="quotelev1">&gt; checking for C type corresponding to Fortran LOGICAL... int
</span><br>
<span class="quotelev1">&gt; checking alignment of FORTRAN LOGICAL... unknown
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Problem running configure test!
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** See config.log for details.
</span><br>
<span class="quotelev1">&gt; configure: error: *** Cannot continue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. xlf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure FC=xlf F77=xlf --enable-f77 --enable-f90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Fortran 77 compiler
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU Fortran 77 compiler... no
</span><br>
<span class="quotelev1">&gt; checking whether xlf accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking xlf external symbol convention... no underscore
</span><br>
<span class="quotelev1">&gt; checking if FORTRAN compiler supports LOGICAL... yes
</span><br>
<span class="quotelev1">&gt; checking size of FORTRAN LOGICAL... unknown
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Problem running configure test!
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** See config.log for details.
</span><br>
<span class="quotelev1">&gt; configure: error: *** Cannot continue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. xlf again
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure FC=xlf95 F77=xlf77 --enable-f77 --enable-f90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Fortran 77 compiler
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU Fortran 77 compiler... no
</span><br>
<span class="quotelev1">&gt; checking whether xlf77 accepts -g... no
</span><br>
<span class="quotelev1">&gt; checking xlf77 external symbol convention... configure: WARNING:
</span><br>
<span class="quotelev1">&gt; unable to produce an object file testing F77 compiler
</span><br>
<span class="quotelev1">&gt; checking if FORTRAN compiler supports LOGICAL... no
</span><br>
<span class="quotelev1">&gt; checking if FORTRAN compiler supports INTEGER... no
</span><br>
<span class="quotelev1">&gt; checking if FORTRAN compiler supports INTEGER*1... no
</span><br>
<span class="quotelev1">&gt; checking if FORTRAN compiler supports INTEGER*2... no
</span><br>
<span class="quotelev1">&gt; checking if FORTRAN compiler supports INTEGER*4... no
</span><br>
<span class="quotelev1">&gt; checking if FORTRAN compiler supports INTEGER*8... no
</span><br>
<span class="quotelev1">&gt; checking if FORTRAN compiler supports INTEGER*16... no
</span><br>
<span class="quotelev1">&gt; checking if FORTRAN compiler supports REAL... no
</span><br>
<span class="quotelev1">&gt; checking if FORTRAN compiler supports REAL*4... no
</span><br>
<span class="quotelev1">&gt; checking if FORTRAN compiler supports REAL*8... no
</span><br>
<span class="quotelev1">&gt; checking if FORTRAN compiler supports REAL*16... no
</span><br>
<span class="quotelev1">&gt; checking if FORTRAN compiler supports DOUBLE PRECISION... no
</span><br>
<span class="quotelev1">&gt; checking if FORTRAN compiler supports COMPLEX... no
</span><br>
<span class="quotelev1">&gt; checking if FORTRAN compiler supports COMPLEX*8... no
</span><br>
<span class="quotelev1">&gt; checking if FORTRAN compiler supports COMPLEX*16... no
</span><br>
<span class="quotelev1">&gt; checking if FORTRAN compiler supports COMPLEX*32... no
</span><br>
<span class="quotelev1">&gt; checking for max fortran MPI handle index... 2147483647
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Fortran 90/95 compiler
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU Fortran compiler... no
</span><br>
<span class="quotelev1">&gt; checking whether xlf95 accepts -g... yes
</span><br>
<span class="quotelev1">&gt; checking for Fortran flag to compile .f files... none
</span><br>
<span class="quotelev1">&gt; checking for Fortran flag to compile .f90 files... -qsuffix=f=f90
</span><br>
<span class="quotelev1">&gt; checking for Fortran flag to compile .f95 files... -qsuffix=f=f95
</span><br>
<span class="quotelev1">&gt; checking whether xlf77 and xlf95 compilers are compatible... no
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Fortran 77 and Fortran 90 compilers are not
</span><br>
<span class="quotelev1">&gt; link compatible
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Disabling Fortran 90/95 bindings
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. Do we need to add -lSystemStubs ???
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ configure F77=gxlf --disable-f90 --enable-f77 --enable-static --
</span><br>
<span class="quotelev1">&gt; disable-shared
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ make
</span><br>
<span class="quotelev1">&gt; $ make install
</span><br>
<span class="quotelev1">&gt; $ mpif77 hellof.f
</span><br>
<span class="quotelev1">&gt; ** _main   === End of Compilation 1 ===
</span><br>
<span class="quotelev1">&gt; 1501-510  Compilation successful for file hellof.f.
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: Undefined symbols:
</span><br>
<span class="quotelev1">&gt; _asprintf$LDBLStub
</span><br>
<span class="quotelev1">&gt; _fprintf$LDBLStub
</span><br>
<span class="quotelev1">&gt; _snprintf$LDBLStub
</span><br>
<span class="quotelev1">&gt; _sprintf$LDBLStub
</span><br>
<span class="quotelev1">&gt; _sscanf$LDBLStub
</span><br>
<span class="quotelev1">&gt; _printf$LDBLStub
</span><br>
<span class="quotelev1">&gt; _vfprintf$LDBLStub
</span><br>
<span class="quotelev1">&gt; _vasprintf$LDBLStub
</span><br>
<span class="quotelev1">&gt; _syslog$LDBLStub
</span><br>
<span class="quotelev1">&gt; xlf95 -I/opt/openmpi/trunk/include -I/opt/openmpi/trunk/include/
</span><br>
<span class="quotelev1">&gt; openmpi/ompi hellof.f -L/opt/openmpi/trunk/lib -lmpi -lorte -lopal -
</span><br>
<span class="quotelev1">&gt; lm -ldl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BUT.... explicitly adding -lSystemStubs (which needs to be at the end
</span><br>
<span class="quotelev1">&gt; so I can't use mpif77 -- or can I?)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ xlf95 -I/opt/openmpi/trunk/include -I/opt/openmpi/trunk/include/
</span><br>
<span class="quotelev1">&gt; openmpi/ompi hellof.f -L/opt/openmpi/trunk/lib -lmpi -lorte -lopal -
</span><br>
<span class="quotelev1">&gt; lm -ldl -lSystemStubs
</span><br>
<span class="quotelev1">&gt; ** _main   === End of Compilation 1 ===
</span><br>
<span class="quotelev1">&gt; 1501-510  Compilation successful for file hellof.f.
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0271.php">Greg Watson: "Re:  Fortran peculiarities on Mac OS X 10.4"</a>
<li><strong>Previous message:</strong> <a href="0269.php">Aurelien Bouteiller: "Autogen.sh issue when using autogen.subdirs"</a>
<li><strong>In reply to:</strong> <a href="0268.php">David Daniel: "Fortran peculiarities on Mac OS X 10.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0271.php">Greg Watson: "Re:  Fortran peculiarities on Mac OS X 10.4"</a>
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
