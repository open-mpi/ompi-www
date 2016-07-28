<?
$subject_val = "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 09:50:46 2009" -->
<!-- isoreceived="20090327135046" -->
<!-- sent="Fri, 27 Mar 2009 09:50:05 -0400" -->
<!-- isosent="20090327135005" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++." -->
<!-- id="49CCD98D.8080005_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="49CA478C.8080801_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2009-03-27 09:50:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8614.php">Gary Draving: "Re: [OMPI users] error polling LP CQ with status RETRY EXCEEDED	ERROR"</a>
<li><strong>Previous message:</strong> <a href="8612.php">Jerome BENOIT: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and	SLURMon	Debian	(Lenny)]"</a>
<li><strong>In reply to:</strong> <a href="8580.php">Gus Correa: "[OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8620.php">Jeff Squyres: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<li><strong>Reply:</strong> <a href="8620.php">Jeff Squyres: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI pros.
<br>
<p>I've got no answer, so let me try again.
<br>
<p>I can't build OpenMPI 1.3 with a hybrid pgf90+gcc/g++ compiler set.
<br>
However, OpenMPI 1.2.8 builds correctly with the same compilers,
<br>
on the same computer (Linux x86_64 cluster), and same environment.
<br>
See details in my original message below.
<br>
<p>The OpenMPI 1.3 build fails due to the (gcc) &quot;-pthread&quot; flag being
<br>
rejected by pgf90 during the libtool
<br>
link phase of libmpi_f90.so.0.0.0.
<br>
Since this flag was not present on the same spot on OMPI 1.2.8,
<br>
I wonder if the &quot;-pthread&quot; flag is really needed at that point,
<br>
or if inadvertently sneaked in the
<br>
OMPI 1.3 Makefiles and configure script.
<br>
<p>These hybrid compiler builds of MPI often mean the difference
<br>
between being able to compile and run the very large
<br>
climate/ocean/atmosphere codes
<br>
which are at the core of our research mission here.
<br>
To my knowledge, this is not a unique situation,
<br>
and other people in our research field also need and use these
<br>
libraries built on &quot;Gnu+commercial Fortran&quot; compilers.
<br>
For this reason I keep a variety of OpenMPI, MPICH2, MVAPICH2
<br>
builds, and I try to stay current with the newest releases.
<br>
<p>Any help is much appreciated.
<br>
<p>Thank you,
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
<p><p>Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Dear OpenMPI experts
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Against all odds and the OpenMPI developer's and FAQ recommendation,
</span><br>
<span class="quotelev1">&gt; I've been building hybrid OpenMPI libraries using Gnu
</span><br>
<span class="quotelev1">&gt; gcc/g++ and Fortran compilers from PGI and from Intel.
</span><br>
<span class="quotelev1">&gt; One reason for this is that some climate/oceans/atmosphere
</span><br>
<span class="quotelev1">&gt; code we use compiles and runs with less hassle this way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (I also build &quot;thoroughbred&quot; Gnu/gfortran, PGI, and
</span><br>
<span class="quotelev1">&gt; Intel libraries.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, all was fine up to OpenMPI 1.2.8, of which I have functional
</span><br>
<span class="quotelev1">&gt; Gnu(C/C++)+PGI(F77/F90) and Gnu(C/C++)+Intel(F77/F90) libraries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, when I tried to compile the Gnu(C/C++)+PGI(F77/F90).
</span><br>
<span class="quotelev1">&gt; version of OpenMPI 1.3 (I haven't got to 1.3.1 yet),
</span><br>
<span class="quotelev1">&gt; I've got an error during the make phase (see snippet below).
</span><br>
<span class="quotelev1">&gt; The error seems to be caused by the insertion of the &quot;-pthread&quot;
</span><br>
<span class="quotelev1">&gt; compiler flag on the build of libmpi_f90.so.0.0.0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some change in the configure script may perhaps
</span><br>
<span class="quotelev1">&gt; have allowed this extra flag to sneak in?
</span><br>
<span class="quotelev1">&gt; The flag was not present on the same spot in the OpenMPI 1.2.8 build,
</span><br>
<span class="quotelev1">&gt; as I checked in the make log of 1.2.8.
</span><br>
<span class="quotelev1">&gt; It is a Gnu/gcc flag, not recognized by PGI/pgf90.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For now I can live with 1.2.8, but I wonder if this problem can
</span><br>
<span class="quotelev1">&gt; be fixed somehow, so that I can stay up to date with the
</span><br>
<span class="quotelev1">&gt; OpenMPI releases.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More info:
</span><br>
<span class="quotelev1">&gt; (The same configuration was used for both OpenMPI 1.3 and 1.2.8.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. AMD Opteron Shanghai (dual socket, quad core)
</span><br>
<span class="quotelev1">&gt; 2. Linux kernel 2.6.18-92.1.22.el5 #1 SMP (CentOS 5.2)
</span><br>
<span class="quotelev1">&gt; 3. PGI 8.0.4
</span><br>
<span class="quotelev1">&gt; 4. Gnu/GCC 4.1.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Error message from &quot;make&quot;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libtool: link: pgf90 -shared  -fpic -Mnomain  .libs/mpi.o 
</span><br>
<span class="quotelev1">&gt; .libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o 
</span><br>
<span class="quotelev1">&gt; .libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o 
</span><br>
<span class="quotelev1">&gt; .libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o 
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath 
</span><br>
<span class="quotelev1">&gt; -Wl,/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/ompi/.libs 
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath 
</span><br>
<span class="quotelev1">&gt; -Wl,/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/orte/.libs 
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath -Wl,/usr/lib64 -Wl,-rpath 
</span><br>
<span class="quotelev1">&gt; -Wl,/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/opal/.libs 
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath -Wl,/home/sw/openmpi/openmpi-1.3-gnu-4.1.2-pgi-8.0-4/lib 
</span><br>
<span class="quotelev1">&gt; -Wl,-rpath -Wl,/usr/lib64 
</span><br>
<span class="quotelev1">&gt; -L/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/orte/.libs 
</span><br>
<span class="quotelev1">&gt; -L/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/opal/.libs 
</span><br>
<span class="quotelev1">&gt; ../../../ompi/.libs/libmpi.so -L/usr/lib64/lib -L/usr/lib64 -lrdmacm 
</span><br>
<span class="quotelev1">&gt; -libverbs 
</span><br>
<span class="quotelev1">&gt; /home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/orte/.libs/libopen-rte.so 
</span><br>
<span class="quotelev1">&gt; /usr/lib64/libtorque.so 
</span><br>
<span class="quotelev1">&gt; /home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/opal/.libs/libopen-pal.so 
</span><br>
<span class="quotelev1">&gt; -lnuma -ldl -lnsl -lutil -lm    -pthread -Wl,-soname -Wl,libmpi_f90.so.0 
</span><br>
<span class="quotelev1">&gt; -o .libs/libmpi_f90.so.0.0.0
</span><br>
<span class="quotelev1">&gt; pgf90-Error-Unknown switch: -pthread
</span><br>
<span class="quotelev1">&gt; make[4]: *** [libmpi_f90.la] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you,
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8614.php">Gary Draving: "Re: [OMPI users] error polling LP CQ with status RETRY EXCEEDED	ERROR"</a>
<li><strong>Previous message:</strong> <a href="8612.php">Jerome BENOIT: "Re: [OMPI users] [Fwd: Re: Configure OpenMPI and	SLURMon	Debian	(Lenny)]"</a>
<li><strong>In reply to:</strong> <a href="8580.php">Gus Correa: "[OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8620.php">Jeff Squyres: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<li><strong>Reply:</strong> <a href="8620.php">Jeff Squyres: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
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
