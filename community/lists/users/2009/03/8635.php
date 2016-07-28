<?
$subject_val = "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 11:21:33 2009" -->
<!-- isoreceived="20090330152133" -->
<!-- sent="Mon, 30 Mar 2009 11:21:24 -0400" -->
<!-- isosent="20090330152124" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++." -->
<!-- id="49D0E374.9080406_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E971247-6193-4512-928A-2BB48250F380_at_cisco.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-30 11:21:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8636.php">Iain Bason: "Re: [OMPI users] Linux opteron infiniband sunstudio	configure	problem"</a>
<li><strong>Previous message:</strong> <a href="8634.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>In reply to:</strong> <a href="8620.php">Jeff Squyres: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8668.php">Jeff Squyres: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<li><strong>Reply:</strong> <a href="8668.php">Jeff Squyres: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff, list
<br>
<p>Jeff: Thank you for getting back to me.
<br>
<p><p>1) MPI-F90 features
<br>
<p>I most likely need the F90 bindings.
<br>
<p>The majority of the climate/ocean/atmosphere programs
<br>
are written in F90.
<br>
I've been using mpif90 to build these codes for a while
<br>
(with OpenMPI and MPICH2).
<br>
These are mostly &quot;community&quot; codes from NCAR, national labs, etc,
<br>
and some code written in house.
<br>
I would have to check these (big) codes in detail to see
<br>
if any MPI-F90 features
<br>
(e.g. mpi type checking) are really used,
<br>
or if they are just doing MPI-F77 old-style calls
<br>
(in which case I might be able
<br>
to get away with the mpif77 wrapper built on top of pgf90, right?).
<br>
<p>However, if not yet used, sooner or later somebody will
<br>
write a module relying on MPI-F90 features,
<br>
hence, it would be better to build mpif90.
<br>
<p>**
<br>
<p>2) Configure scripts
<br>
<p>I tried to build two ways.
<br>
With machine-specific optimization flags, as on the script below,
<br>
and without any optimization (other than what OpenMPI sets internally).
<br>
Both builds fail the same way, at the same point,
<br>
as I described before.
<br>
<p>Here is the &quot;optimized&quot; script:
<br>
<p>(The &quot;on-optimized&quot; just comments out
<br>
the commands to export of CFLAGS, CXXFLAGS, FFLAGS, and FCFLAGS.)
<br>
<p>#! /bin/sh
<br>
export MYINSTALLDIR=/somehwere/in/the/file/system
<br>
####################################################
<br>
export CC=gcc
<br>
export CXX=g++
<br>
export F77=pgf90
<br>
export FC=${F77}
<br>
# Note: Optimization flags for AMD Opteron &quot;Shanghai&quot;
<br>
export CFLAGS='-march=amdfam10 -O3 -finline-functions -funroll-loops 
<br>
-mfpmath=sse'
<br>
export CXXFLAGS=${CFLAGS}
<br>
export FFLAGS='-tp shanghai-64 -fast -Mfprelaxed'
<br>
export FCFLAGS=${FFLAGS}
<br>
####################################################
<br>
../configure \
<br>
--prefix=${MYINSTALLDIR} \
<br>
--with-libnuma=/usr/lib64 \
<br>
--with-tm=/usr/lib64 \
<br>
--with-openib=/usr/lib64 \
<br>
--enable-static \
<br>
2&gt;&amp;1 | tee configure.log
<br>
<p>**
<br>
<p>3) &quot;-pthread&quot; flag when building libmpi_f90.so.0.0.0
<br>
<p>I am confused by why the &quot;-phtread&quot; flag, which was absent
<br>
when building libmpi_f90.so.0.0.0 on 1.2.8 (successful build),
<br>
appears on the same spot on 1.3, causing the build to fail.
<br>
The build scripts are the same, the computer is the same,
<br>
etc, only the OpenMPI release varies.
<br>
<p>Is there a way around?
<br>
E.g., not using pthreads there,
<br>
if not essential, or perhaps helping PGI to find the library
<br>
and link to it, if it is indeed required there.
<br>
<p>**
<br>
<p>Thank you again,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Sorry for the delay in replying.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you send your exact configure command line?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, do you need the F90 MPI bindings?  If not, you can disable them 
</span><br>
<span class="quotelev1">&gt; with the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    --disable-mpi-f90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 27, 2009, at 9:50 AM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear OpenMPI pros.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've got no answer, so let me try again.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can't build OpenMPI 1.3 with a hybrid pgf90+gcc/g++ compiler set.
</span><br>
<span class="quotelev2">&gt;&gt; However, OpenMPI 1.2.8 builds correctly with the same compilers,
</span><br>
<span class="quotelev2">&gt;&gt; on the same computer (Linux x86_64 cluster), and same environment.
</span><br>
<span class="quotelev2">&gt;&gt; See details in my original message below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The OpenMPI 1.3 build fails due to the (gcc) &quot;-pthread&quot; flag being
</span><br>
<span class="quotelev2">&gt;&gt; rejected by pgf90 during the libtool
</span><br>
<span class="quotelev2">&gt;&gt; link phase of libmpi_f90.so.0.0.0.
</span><br>
<span class="quotelev2">&gt;&gt; Since this flag was not present on the same spot on OMPI 1.2.8,
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if the &quot;-pthread&quot; flag is really needed at that point,
</span><br>
<span class="quotelev2">&gt;&gt; or if inadvertently sneaked in the
</span><br>
<span class="quotelev2">&gt;&gt; OMPI 1.3 Makefiles and configure script.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; These hybrid compiler builds of MPI often mean the difference
</span><br>
<span class="quotelev2">&gt;&gt; between being able to compile and run the very large
</span><br>
<span class="quotelev2">&gt;&gt; climate/ocean/atmosphere codes
</span><br>
<span class="quotelev2">&gt;&gt; which are at the core of our research mission here.
</span><br>
<span class="quotelev2">&gt;&gt; To my knowledge, this is not a unique situation,
</span><br>
<span class="quotelev2">&gt;&gt; and other people in our research field also need and use these
</span><br>
<span class="quotelev2">&gt;&gt; libraries built on &quot;Gnu+commercial Fortran&quot; compilers.
</span><br>
<span class="quotelev2">&gt;&gt; For this reason I keep a variety of OpenMPI, MPICH2, MVAPICH2
</span><br>
<span class="quotelev2">&gt;&gt; builds, and I try to stay current with the newest releases.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help is much appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt;&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt;&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Dear OpenMPI experts
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Against all odds and the OpenMPI developer's and FAQ recommendation,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I've been building hybrid OpenMPI libraries using Gnu
</span><br>
<span class="quotelev3">&gt;&gt; &gt; gcc/g++ and Fortran compilers from PGI and from Intel.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; One reason for this is that some climate/oceans/atmosphere
</span><br>
<span class="quotelev3">&gt;&gt; &gt; code we use compiles and runs with less hassle this way.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (I also build &quot;thoroughbred&quot; Gnu/gfortran, PGI, and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Intel libraries.)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Anyway, all was fine up to OpenMPI 1.2.8, of which I have functional
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Gnu(C/C++)+PGI(F77/F90) and Gnu(C/C++)+Intel(F77/F90) libraries.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; However, when I tried to compile the Gnu(C/C++)+PGI(F77/F90).
</span><br>
<span class="quotelev3">&gt;&gt; &gt; version of OpenMPI 1.3 (I haven't got to 1.3.1 yet),
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I've got an error during the make phase (see snippet below).
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The error seems to be caused by the insertion of the &quot;-pthread&quot;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; compiler flag on the build of libmpi_f90.so.0.0.0.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Some change in the configure script may perhaps
</span><br>
<span class="quotelev3">&gt;&gt; &gt; have allowed this extra flag to sneak in?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; The flag was not present on the same spot in the OpenMPI 1.2.8 build,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; as I checked in the make log of 1.2.8.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It is a Gnu/gcc flag, not recognized by PGI/pgf90.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; For now I can live with 1.2.8, but I wonder if this problem can
</span><br>
<span class="quotelev3">&gt;&gt; &gt; be fixed somehow, so that I can stay up to date with the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; OpenMPI releases.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; More info:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; (The same configuration was used for both OpenMPI 1.3 and 1.2.8.)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 1. AMD Opteron Shanghai (dual socket, quad core)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 2. Linux kernel 2.6.18-92.1.22.el5 #1 SMP (CentOS 5.2)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 3. PGI 8.0.4
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 4. Gnu/GCC 4.1.2
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Error message from &quot;make&quot;:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; libtool: link: pgf90 -shared  -fpic -Mnomain  .libs/mpi.o
</span><br>
<span class="quotelev3">&gt;&gt; &gt; .libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o
</span><br>
<span class="quotelev3">&gt;&gt; &gt; .libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o 
</span><br>
<span class="quotelev2">&gt;&gt; .libs/mpi_waitall_f90.o
</span><br>
<span class="quotelev3">&gt;&gt; &gt; .libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -Wl,-rpath
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/ompi/.libs 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -Wl,-rpath
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/orte/.libs 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -Wl,-rpath -Wl,/usr/lib64 -Wl,-rpath
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/opal/.libs 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -Wl,-rpath -Wl,/home/sw/openmpi/openmpi-1.3-gnu-4.1.2-pgi-8.0-4/lib
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -Wl,-rpath -Wl,/usr/lib64
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -L/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/orte/.libs 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -L/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/opal/.libs 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ../../../ompi/.libs/libmpi.so -L/usr/lib64/lib -L/usr/lib64 -lrdmacm
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -libverbs
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/orte/.libs/libopen-rte.so 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /usr/lib64/libtorque.so
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/opal/.libs/libopen-pal.so 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -lnuma -ldl -lnsl -lutil -lm    -pthread -Wl,-soname 
</span><br>
<span class="quotelev2">&gt;&gt; -Wl,libmpi_f90.so.0
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -o .libs/libmpi_f90.so.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt; &gt; pgf90-Error-Unknown switch: -pthread
</span><br>
<span class="quotelev3">&gt;&gt; &gt; make[4]: *** [libmpi_f90.la] Error 1
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Gustavo Correa
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8636.php">Iain Bason: "Re: [OMPI users] Linux opteron infiniband sunstudio	configure	problem"</a>
<li><strong>Previous message:</strong> <a href="8634.php">Kevin McManus: "Re: [OMPI users] Linux opteron infiniband sunstudio configure	problem"</a>
<li><strong>In reply to:</strong> <a href="8620.php">Jeff Squyres: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8668.php">Jeff Squyres: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<li><strong>Reply:</strong> <a href="8668.php">Jeff Squyres: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
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
