<?
$subject_val = "[OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 11:02:45 2009" -->
<!-- isoreceived="20090325150245" -->
<!-- sent="Wed, 25 Mar 2009 11:02:36 -0400" -->
<!-- isosent="20090325150236" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="[OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++." -->
<!-- id="49CA478C.8080801_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++.<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-25 11:02:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8581.php">Daniel Spångberg: "Re: [OMPI users] problem with overlapping communication with calculation"</a>
<li><strong>Previous message:</strong> <a href="8579.php">Lionel Gamet: "[OMPI users] Bug report [?] on spawn processes - blocking when more than one Send/Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8613.php">Gus Correa: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<li><strong>Reply:</strong> <a href="8613.php">Gus Correa: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI experts
<br>
<p>Against all odds and the OpenMPI developer's and FAQ recommendation,
<br>
I've been building hybrid OpenMPI libraries using Gnu
<br>
gcc/g++ and Fortran compilers from PGI and from Intel.
<br>
One reason for this is that some climate/oceans/atmosphere
<br>
code we use compiles and runs with less hassle this way.
<br>
<p>(I also build &quot;thoroughbred&quot; Gnu/gfortran, PGI, and
<br>
Intel libraries.)
<br>
<p>Anyway, all was fine up to OpenMPI 1.2.8, of which I have functional
<br>
Gnu(C/C++)+PGI(F77/F90) and Gnu(C/C++)+Intel(F77/F90) libraries.
<br>
<p>However, when I tried to compile the Gnu(C/C++)+PGI(F77/F90).
<br>
version of OpenMPI 1.3 (I haven't got to 1.3.1 yet),
<br>
I've got an error during the make phase (see snippet below).
<br>
The error seems to be caused by the insertion of the &quot;-pthread&quot;
<br>
compiler flag on the build of libmpi_f90.so.0.0.0.
<br>
<p>Some change in the configure script may perhaps
<br>
have allowed this extra flag to sneak in?
<br>
The flag was not present on the same spot in the OpenMPI 1.2.8 build,
<br>
as I checked in the make log of 1.2.8.
<br>
It is a Gnu/gcc flag, not recognized by PGI/pgf90.
<br>
<p>For now I can live with 1.2.8, but I wonder if this problem can
<br>
be fixed somehow, so that I can stay up to date with the
<br>
OpenMPI releases.
<br>
<p>More info:
<br>
(The same configuration was used for both OpenMPI 1.3 and 1.2.8.)
<br>
<p>1. AMD Opteron Shanghai (dual socket, quad core)
<br>
2. Linux kernel 2.6.18-92.1.22.el5 #1 SMP (CentOS 5.2)
<br>
3. PGI 8.0.4
<br>
4. Gnu/GCC 4.1.2
<br>
<p>Error message from &quot;make&quot;:
<br>
<p>libtool: link: pgf90 -shared  -fpic -Mnomain  .libs/mpi.o 
<br>
.libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o 
<br>
.libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o 
<br>
.libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o 
<br>
-Wl,-rpath 
<br>
-Wl,/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/ompi/.libs 
<br>
-Wl,-rpath 
<br>
-Wl,/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/orte/.libs 
<br>
-Wl,-rpath -Wl,/usr/lib64 -Wl,-rpath 
<br>
-Wl,/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/opal/.libs 
<br>
-Wl,-rpath -Wl,/home/sw/openmpi/openmpi-1.3-gnu-4.1.2-pgi-8.0-4/lib 
<br>
-Wl,-rpath -Wl,/usr/lib64 
<br>
-L/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/orte/.libs 
<br>
-L/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/opal/.libs 
<br>
../../../ompi/.libs/libmpi.so -L/usr/lib64/lib -L/usr/lib64 -lrdmacm 
<br>
-libverbs 
<br>
/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/orte/.libs/libopen-rte.so 
<br>
/usr/lib64/libtorque.so 
<br>
/home/swinst/openmpi/1.3/openmpi-1.3/build_gnu-4.1.2_pgi-8.0-4/opal/.libs/libopen-pal.so 
<br>
-lnuma -ldl -lnsl -lutil -lm    -pthread -Wl,-soname -Wl,libmpi_f90.so.0 
<br>
-o .libs/libmpi_f90.so.0.0.0
<br>
pgf90-Error-Unknown switch: -pthread
<br>
make[4]: *** [libmpi_f90.la] Error 1
<br>
<p><p>Thank you,
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8581.php">Daniel Spångberg: "Re: [OMPI users] problem with overlapping communication with calculation"</a>
<li><strong>Previous message:</strong> <a href="8579.php">Lionel Gamet: "[OMPI users] Bug report [?] on spawn processes - blocking when more than one Send/Recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8613.php">Gus Correa: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
<li><strong>Reply:</strong> <a href="8613.php">Gus Correa: "Re: [OMPI users] Cannot build OpenMPI 1.3 with PGI pgf90 and Gnu gcc/g++."</a>
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
