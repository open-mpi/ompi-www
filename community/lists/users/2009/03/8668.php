<?
$subject_val = "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 22:35:35 2009" -->
<!-- isoreceived="20090331023535" -->
<!-- sent="Mon, 30 Mar 2009 22:35:26 -0400" -->
<!-- isosent="20090331023526" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++." -->
<!-- id="C8ED4297-E15E-44AA-9BFD-CC4DE25FAEF8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49D0E374.9080406_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 22:35:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8669.php">Jerome BENOIT: "Re: [OMPI users] OpenMPI 1.3.1 svn Debian trouble"</a>
<li><strong>Previous message:</strong> <a href="8667.php">Jeff Squyres: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>In reply to:</strong> <a href="8635.php">Gus Correa: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8687.php">Gus Correa: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<li><strong>Reply:</strong> <a href="8687.php">Gus Correa: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I can replicate your error; this looks like a Libtool bug.
<br>
<p>Open MPI does specifically test each of the C, C++, F77, and F90  
<br>
compilers for the -pthread flag (and others).  When mixing gcc/g++ and  
<br>
pgf77/pgf90, OMPI's configure script correctly determines that gcc/g++  
<br>
support -pthread, but pgf77/pgf90 do not.
<br>
<p>When building the F90 library, OMPI issues the following command:
<br>
<p>/bin/sh ../../../libtool   --mode=link pgf90 -I../../../ompi/include - 
<br>
I../../../ompi/include -I. -I. -I../../../ompi/mpi/f90    -export- 
<br>
dynamic   -o libmpi_f90.la -rpath /home/jsquyres/bogus/lib mpi.lo  
<br>
mpi_sizeof.lo mpi_comm_spawn_multiple_f90.lo mpi_testall_f90.lo  
<br>
mpi_testsome_f90.lo mpi_waitall_f90.lo mpi_waitsome_f90.lo  
<br>
mpi_wtick_f90.lo mpi_wtime_f90.lo   ../../../ompi/libmpi.la -lnsl  - 
<br>
lutil -lm
<br>
<p>Notice the lack of -pthread in there.  Libtool translates this into:
<br>
<p>pgf90 -shared  -fpic -Mnomain  .libs/mpi.o .libs/mpi_sizeof.o .libs/ 
<br>
mpi_comm_spawn_multiple_f90.o .libs/mpi_testall_f90.o .libs/ 
<br>
mpi_testsome_f90.o .libs/mpi_waitall_f90.o .libs/ 
<br>
mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o   -Wl,- 
<br>
rpath -Wl,/users/jsquyres/svn/ompi/ompi/.libs -Wl,-rpath -Wl,/users/ 
<br>
jsquyres/svn/ompi/orte/.libs -Wl,-rpath -Wl,/users/jsquyres/svn/ompi/ 
<br>
opal/.libs -Wl,-rpath -Wl,/home/jsquyres/bogus/lib -L/users/jsquyres/ 
<br>
svn/ompi/orte/.libs -L/users/jsquyres/svn/ompi/opal/.libs ../../../ 
<br>
ompi/.libs/libmpi.so /users/jsquyres/svn/ompi/orte/.libs/libopen- 
<br>
rte.so /users/jsquyres/svn/ompi/opal/.libs/libopen-pal.so -ldl -lnsl - 
<br>
lutil -lm    -pthread -Wl,-soname -Wl,libmpi_f90.so.0 -o .libs/ 
<br>
libmpi_f90.so.0.0.0
<br>
<p>Note the addition of -pthread, which then causes the problem.  I  
<br>
*suspect* that this is because the f90 library is linking against  
<br>
libmpi, libopen-rte, and libopen-pal (OMPI internal libraries) that  
<br>
were built with -pthread (i.e., Libtool picks up these flags  
<br>
automatically).  This should probably be reported to the Libtool  
<br>
developers, but I'm not 100% sure they can fix it -- I believe that  
<br>
they assume that the linker flags used for one language can be used in  
<br>
any language (compiler/linker).
<br>
<p>I can think of two workarounds for you (one significantly less icky  
<br>
than the other):
<br>
<p>1. Use pgcc, pgCC, pgf77, and pgf90 to build Open MPI.  If you have no  
<br>
C++ MPI code, the resulting Open MPI build *should* be compatible with  
<br>
your C + Fortran code.
<br>
<p>2. Instead of using the &quot;real&quot; pgf77/pgf90, put pgf77/pgf90 scripts  
<br>
early in your PATH that simply strip out -pthread from the argv and  
<br>
then invoke the real/underlying pgf77/pgf90 compilers.  This is pretty  
<br>
icky, but it should work...
<br>
<p><p><p><p>On Mar 30, 2009, at 11:21 AM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff, list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff: Thank you for getting back to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) MPI-F90 features
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I most likely need the F90 bindings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The majority of the climate/ocean/atmosphere programs
</span><br>
<span class="quotelev1">&gt; are written in F90.
</span><br>
<span class="quotelev1">&gt; I've been using mpif90 to build these codes for a while
</span><br>
<span class="quotelev1">&gt; (with OpenMPI and MPICH2).
</span><br>
<span class="quotelev1">&gt; These are mostly &quot;community&quot; codes from NCAR, national labs, etc,
</span><br>
<span class="quotelev1">&gt; and some code written in house.
</span><br>
<span class="quotelev1">&gt; I would have to check these (big) codes in detail to see
</span><br>
<span class="quotelev1">&gt; if any MPI-F90 features
</span><br>
<span class="quotelev1">&gt; (e.g. mpi type checking) are really used,
</span><br>
<span class="quotelev1">&gt; or if they are just doing MPI-F77 old-style calls
</span><br>
<span class="quotelev1">&gt; (in which case I might be able
</span><br>
<span class="quotelev1">&gt; to get away with the mpif77 wrapper built on top of pgf90, right?).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, if not yet used, sooner or later somebody will
</span><br>
<span class="quotelev1">&gt; write a module relying on MPI-F90 features,
</span><br>
<span class="quotelev1">&gt; hence, it would be better to build mpif90.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Configure scripts
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to build two ways.
</span><br>
<span class="quotelev1">&gt; With machine-specific optimization flags, as on the script below,
</span><br>
<span class="quotelev1">&gt; and without any optimization (other than what OpenMPI sets  
</span><br>
<span class="quotelev1">&gt; internally).
</span><br>
<span class="quotelev1">&gt; Both builds fail the same way, at the same point,
</span><br>
<span class="quotelev1">&gt; as I described before.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the &quot;optimized&quot; script:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (The &quot;on-optimized&quot; just comments out
</span><br>
<span class="quotelev1">&gt; the commands to export of CFLAGS, CXXFLAGS, FFLAGS, and FCFLAGS.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #! /bin/sh
</span><br>
<span class="quotelev1">&gt; export MYINSTALLDIR=/somehwere/in/the/file/system
</span><br>
<span class="quotelev1">&gt; ####################################################
</span><br>
<span class="quotelev1">&gt; export CC=gcc
</span><br>
<span class="quotelev1">&gt; export CXX=g++
</span><br>
<span class="quotelev1">&gt; export F77=pgf90
</span><br>
<span class="quotelev1">&gt; export FC=${F77}
</span><br>
<span class="quotelev1">&gt; # Note: Optimization flags for AMD Opteron &quot;Shanghai&quot;
</span><br>
<span class="quotelev1">&gt; export CFLAGS='-march=amdfam10 -O3 -finline-functions -funroll-loops
</span><br>
<span class="quotelev1">&gt; -mfpmath=sse'
</span><br>
<span class="quotelev1">&gt; export CXXFLAGS=${CFLAGS}
</span><br>
<span class="quotelev1">&gt; export FFLAGS='-tp shanghai-64 -fast -Mfprelaxed'
</span><br>
<span class="quotelev1">&gt; export FCFLAGS=${FFLAGS}
</span><br>
<span class="quotelev1">&gt; ####################################################
</span><br>
<span class="quotelev1">&gt; ../configure \
</span><br>
<span class="quotelev1">&gt; --prefix=${MYINSTALLDIR} \
</span><br>
<span class="quotelev1">&gt; --with-libnuma=/usr/lib64 \
</span><br>
<span class="quotelev1">&gt; --with-tm=/usr/lib64 \
</span><br>
<span class="quotelev1">&gt; --with-openib=/usr/lib64 \
</span><br>
<span class="quotelev1">&gt; --enable-static \
</span><br>
<span class="quotelev1">&gt; 2&gt;&amp;1 | tee configure.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) &quot;-pthread&quot; flag when building libmpi_f90.so.0.0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am confused by why the &quot;-phtread&quot; flag, which was absent
</span><br>
<span class="quotelev1">&gt; when building libmpi_f90.so.0.0.0 on 1.2.8 (successful build),
</span><br>
<span class="quotelev1">&gt; appears on the same spot on 1.3, causing the build to fail.
</span><br>
<span class="quotelev1">&gt; The build scripts are the same, the computer is the same,
</span><br>
<span class="quotelev1">&gt; etc, only the OpenMPI release varies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a way around?
</span><br>
<span class="quotelev1">&gt; E.g., not using pthreads there,
</span><br>
<span class="quotelev1">&gt; if not essential, or perhaps helping PGI to find the library
</span><br>
<span class="quotelev1">&gt; and link to it, if it is indeed required there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you again,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Sorry for the delay in replying.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you send your exact configure command line?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also, do you need the F90 MPI bindings?  If not, you can disable  
</span><br>
<span class="quotelev1">&gt; them
</span><br>
<span class="quotelev2">&gt; &gt; with the following:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    --disable-mpi-f90
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 27, 2009, at 9:50 AM, Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Dear OpenMPI pros.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I've got no answer, so let me try again.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I can't build OpenMPI 1.3 with a hybrid pgf90+gcc/g++ compiler set.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However, OpenMPI 1.2.8 builds correctly with the same compilers,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; on the same computer (Linux x86_64 cluster), and same environment.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; See details in my original message below.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The OpenMPI 1.3 build fails due to the (gcc) &quot;-pthread&quot; flag being
</span><br>
<span class="quotelev3">&gt; &gt;&gt; rejected by pgf90 during the libtool
</span><br>
<span class="quotelev3">&gt; &gt;&gt; link phase of libmpi_f90.so.0.0.0.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Since this flag was not present on the same spot on OMPI 1.2.8,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I wonder if the &quot;-pthread&quot; flag is really needed at that point,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; or if inadvertently sneaked in the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OMPI 1.3 Makefiles and configure script.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; These hybrid compiler builds of MPI often mean the difference
</span><br>
<span class="quotelev3">&gt; &gt;&gt; between being able to compile and run the very large
</span><br>
<span class="quotelev3">&gt; &gt;&gt; climate/ocean/atmosphere codes
</span><br>
<span class="quotelev3">&gt; &gt;&gt; which are at the core of our research mission here.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To my knowledge, this is not a unique situation,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and other people in our research field also need and use these
</span><br>
<span class="quotelev3">&gt; &gt;&gt; libraries built on &quot;Gnu+commercial Fortran&quot; compilers.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; For this reason I keep a variety of OpenMPI, MPICH2, MVAPICH2
</span><br>
<span class="quotelev3">&gt; &gt;&gt; builds, and I try to stay current with the newest releases.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Any help is much appreciated.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gus Correa wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Dear OpenMPI experts
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Against all odds and the OpenMPI developer's and FAQ  
</span><br>
<span class="quotelev1">&gt; recommendation,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I've been building hybrid OpenMPI libraries using Gnu
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; gcc/g++ and Fortran compilers from PGI and from Intel.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; One reason for this is that some climate/oceans/atmosphere
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; code we use compiles and runs with less hassle this way.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; (I also build &quot;thoroughbred&quot; Gnu/gfortran, PGI, and
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Intel libraries.)
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Anyway, all was fine up to OpenMPI 1.2.8, of which I have  
</span><br>
<span class="quotelev1">&gt; functional
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Gnu(C/C++)+PGI(F77/F90) and Gnu(C/C++)+Intel(F77/F90) libraries.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; However, when I tried to compile the Gnu(C/C++)+PGI(F77/F90).
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; version of OpenMPI 1.3 (I haven't got to 1.3.1 yet),
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; I've got an error during the make phase (see snippet below).
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; The error seems to be caused by the insertion of the &quot;-pthread&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; compiler flag on the build of libmpi_f90.so.0.0.0.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Some change in the configure script may perhaps
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; have allowed this extra flag to sneak in?
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; The flag was not present on the same spot in the OpenMPI 1.2.8  
</span><br>
<span class="quotelev1">&gt; build,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; as I checked in the make log of 1.2.8.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; It is a Gnu/gcc flag, not recognized by PGI/pgf90.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; For now I can live with 1.2.8, but I wonder if this problem can
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; be fixed somehow, so that I can stay up to date with the
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; OpenMPI releases.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; More info:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; (The same configuration was used for both OpenMPI 1.3 and 1.2.8.)
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; 1. AMD Opteron Shanghai (dual socket, quad core)
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; 2. Linux kernel 2.6.18-92.1.22.el5 #1 SMP (CentOS 5.2)
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; 3. PGI 8.0.4
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; 4. Gnu/GCC 4.1.2
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Error message from &quot;make&quot;:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; libtool: link: pgf90 -shared  -fpic -Mnomain  .libs/mpi.o
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; .libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; .libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o
</span><br>
<span class="quotelev3">&gt; &gt;&gt; .libs/mpi_waitall_f90.o
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; .libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/ 
</span><br>
<span class="quotelev1">&gt; mpi_wtime_f90.o
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; -Wl,-rpath
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Wl,/home/swinst/openmpi/1.3/openmpi-1.3/ 
</span><br>
<span class="quotelev1">&gt; build_gnu-4.1.2_pgi-8.0-4/ompi/.libs
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; -Wl,-rpath
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Wl,/home/swinst/openmpi/1.3/openmpi-1.3/ 
</span><br>
<span class="quotelev1">&gt; build_gnu-4.1.2_pgi-8.0-4/orte/.libs
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; -Wl,-rpath -Wl,/usr/lib64 -Wl,-rpath
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Wl,/home/swinst/openmpi/1.3/openmpi-1.3/ 
</span><br>
<span class="quotelev1">&gt; build_gnu-4.1.2_pgi-8.0-4/opal/.libs
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; -Wl,-rpath -Wl,/home/sw/openmpi/openmpi-1.3-gnu-4.1.2-pgi-8.0-4/ 
</span><br>
<span class="quotelev1">&gt; lib
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; -Wl,-rpath -Wl,/usr/lib64
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -L/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/ 
</span><br>
<span class="quotelev1">&gt; orte/.libs
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -L/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/ 
</span><br>
<span class="quotelev1">&gt; opal/.libs
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; ../../../ompi/.libs/libmpi.so -L/usr/lib64/lib -L/usr/lib64 - 
</span><br>
<span class="quotelev1">&gt; lrdmacm
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; -libverbs
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/ 
</span><br>
<span class="quotelev1">&gt; orte/.libs/libopen-rte.so
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; /usr/lib64/libtorque.so
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/ 
</span><br>
<span class="quotelev1">&gt; opal/.libs/libopen-pal.so
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; -lnuma -ldl -lnsl -lutil -lm    -pthread -Wl,-soname
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Wl,libmpi_f90.so.0
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; -o .libs/libmpi_f90.so.0.0.0
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; pgf90-Error-Unknown switch: -pthread
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; make[4]: *** [libmpi_f90.la] Error 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Thank you,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Gus Correa
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Gustavo Correa
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8669.php">Jerome BENOIT: "Re: [OMPI users] OpenMPI 1.3.1 svn Debian trouble"</a>
<li><strong>Previous message:</strong> <a href="8667.php">Jeff Squyres: "Re: [OMPI users] 'orte_ess_base_select failed'"</a>
<li><strong>In reply to:</strong> <a href="8635.php">Gus Correa: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8687.php">Gus Correa: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<li><strong>Reply:</strong> <a href="8687.php">Gus Correa: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
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
