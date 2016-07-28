<?
$subject_val = "[OMPI users] Building OpenMPI 10.4 with PGI fortran  10.8 and gcc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 14 15:18:01 2010" -->
<!-- isoreceived="20100914191801" -->
<!-- sent="Tue, 14 Sep 2010 12:17:59 -0700" -->
<!-- isosent="20100914191759" -->
<!-- name="Axel Schweiger" -->
<!-- email="axel_at_[hidden]" -->
<!-- subject="[OMPI users] Building OpenMPI 10.4 with PGI fortran  10.8 and gcc" -->
<!-- id="4C8FCA67.1070901_at_apl.washington.edu" -->
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
<strong>Subject:</strong> [OMPI users] Building OpenMPI 10.4 with PGI fortran  10.8 and gcc<br>
<strong>From:</strong> Axel Schweiger (<em>axel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-14 15:17:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14230.php">Doug Reeder: "Re: [OMPI users] Building OpenMPI 10.4 with PGI fortran 10.8 and gcc"</a>
<li><strong>Previous message:</strong> <a href="14228.php">Joshua Hursey: "Re: [OMPI users] Question on staging in checkpoint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14230.php">Doug Reeder: "Re: [OMPI users] Building OpenMPI 10.4 with PGI fortran 10.8 and gcc"</a>
<li><strong>Reply:</strong> <a href="14230.php">Doug Reeder: "Re: [OMPI users] Building OpenMPI 10.4 with PGI fortran 10.8 and gcc"</a>
<li><strong>Reply:</strong> <a href="14231.php">Gus Correa: "Re: [OMPI users] Building OpenMPI 10.4 with PGI fortran 10.8 and gcc"</a>
<li><strong>Reply:</strong> <a href="14233.php">Prentice Bisbal: "Re: [OMPI users] Building OpenMPI 10.4 with PGI fortran 10.8 and gcc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Trying to build a hybrid OpenMPI with PGI fortran and gcc to support 
<br>
WRF model
<br>
The problem appears to be due to a -pthread switch passed to pgfortran.
<br>
<p><p><p>libtool: link: pgfortran -shared  -fpic -Mnomain  .libs/mpi.o 
<br>
.libs/mpi_sizeof.o .libs/mpi_comm_spawn_multiple_f90.o 
<br>
.libs/mpi_testall_f90.o .libs/mpi_testsome_f90.o .libs/mpi_waitall_f90.o 
<br>
.libs/mpi_waitsome_f90.o .libs/mpi_wtick_f90.o .libs/mpi_wtime_f90.o   
<br>
-Wl,-rpath -Wl,/home/axel/AxboxInstall/openmpi-1.4.2/ompi/.libs 
<br>
-Wl,-rpath -Wl,/home/axel/AxboxInstall/openmpi-1.4.2/orte/.libs 
<br>
-Wl,-rpath -Wl,/home/axel/AxboxInstall/openmpi-1.4.2/opal/.libs 
<br>
-Wl,-rpath -Wl,/opt/openmpi-pgi-gcc-1.42/lib 
<br>
-L/home/axel/AxboxInstall/openmpi-1.4.2/orte/.libs 
<br>
-L/home/axel/AxboxInstall/openmpi-1.4.2/opal/.libs 
<br>
../../../ompi/.libs/libmpi.so 
<br>
/home/axel/AxboxInstall/openmpi-1.4.2/orte/.libs/libopen-rte.so 
<br>
/home/axel/AxboxInstall/openmpi-1.4.2/opal/.libs/libopen-pal.so -ldl 
<br>
-lnsl -lutil -lm    -pthread -Wl,-soname -Wl,libmpi_f90.so.0 -o 
<br>
.libs/libmpi_f90.so.0.0.0
<br>
pgfortran-Error-Unknown switch: -pthread
<br>
make[4]: *** [libmpi_f90.la] Error 1
<br>
<p><p>There has been discussion on this issue and the below solution 
<br>
suggested. This doesn't appear to work for the 10.8
<br>
release.
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2009/04/8911.php">http://www.open-mpi.org/community/lists/users/2009/04/8911.php</a>
<br>
<p>There was a previous thread:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/03/8687.php">http://www.open-mpi.org/community/lists/users/2009/03/8687.php</a>
<br>
<p>suggesting other solutions.
<br>
<p>Wondering if there is a better solution right now? Building 1.4.2
<br>
<p>Thanks
<br>
Axel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14230.php">Doug Reeder: "Re: [OMPI users] Building OpenMPI 10.4 with PGI fortran 10.8 and gcc"</a>
<li><strong>Previous message:</strong> <a href="14228.php">Joshua Hursey: "Re: [OMPI users] Question on staging in checkpoint"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14230.php">Doug Reeder: "Re: [OMPI users] Building OpenMPI 10.4 with PGI fortran 10.8 and gcc"</a>
<li><strong>Reply:</strong> <a href="14230.php">Doug Reeder: "Re: [OMPI users] Building OpenMPI 10.4 with PGI fortran 10.8 and gcc"</a>
<li><strong>Reply:</strong> <a href="14231.php">Gus Correa: "Re: [OMPI users] Building OpenMPI 10.4 with PGI fortran 10.8 and gcc"</a>
<li><strong>Reply:</strong> <a href="14233.php">Prentice Bisbal: "Re: [OMPI users] Building OpenMPI 10.4 with PGI fortran 10.8 and gcc"</a>
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
