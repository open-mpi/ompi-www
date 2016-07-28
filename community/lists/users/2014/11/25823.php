<?
$subject_val = "[OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 17 11:41:33 2014" -->
<!-- isoreceived="20141117164133" -->
<!-- sent="Mon, 17 Nov 2014 16:41:32 +0000" -->
<!-- isosent="20141117164132" -->
<!-- name="John Bray" -->
<!-- email="jbray_at_[hidden]" -->
<!-- subject="[OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently" -->
<!-- id="CAM2Y-dbTArY_oOtra6aAPgNrZ582uQSPxnMLOQgzBa1GBRkfOA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently<br>
<strong>From:</strong> John Bray (<em>jbray_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-17 11:41:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25824.php">Dave Love: "[OMPI users] mpi_wtime implementation"</a>
<li><strong>Previous message:</strong> <a href="25822.php">Mike Dubman: "Re: [OMPI users] shmalloc error with &gt;=512 mb"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25828.php">John Bray: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>Reply:</strong> <a href="25828.php">John Bray: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>Reply:</strong> <a href="25829.php">Gilles Gouaillardet: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have succesfully been using OpenMPI 1.8.3 compiled with Intel-14, using
<br>
<p>./configure --prefix=/usr/local/mpi/$(basename $PWD) --with-threads=posix
<br>
--enable-mpi-thread-multiple --disable-vt --with-scif=no
<br>
<p>I have now switched to Intel 15.0.1, and configuring with the same options,
<br>
I get minor changes in config.log about warning spotting, but it makes all
<br>
the binaries, and I can compile my own fortran code with mpif90/mpicc
<br>
<p>but a command 'mpiexec --verbose -n 12 ./fortran_binary' does nothing
<br>
<p>I checked the FAQ and started using
<br>
<p>./configure --prefix=/usr/local/mpi/$(basename $PWD) --with-threads=posix
<br>
--enable-mpi-thread-multiple --disable-vt --with-scif=no CC=icc CXX=icpc
<br>
F77=ifort FC=ifort
<br>
<p>but that makes no difference.
<br>
<p>Only with -d do I get any more information
<br>
<p>mpirun -d --verbose -n 12
<br>
/home/jbray/5.0/mic2/one/intel-15_openmpi-1.8.3/one_f_debug.exe
<br>
[mic2:21851] procdir: /tmp/openmpi-sessions-jbray_at_mic2_0/27642/0/0
<br>
[mic2:21851] jobdir: /tmp/openmpi-sessions-jbray_at_mic2_0/27642/0
<br>
[mic2:21851] top: openmpi-sessions-jbray_at_mic2_0
<br>
[mic2:21851] tmp: /tmp
<br>
[mic2:21851] sess_dir_cleanup: job session dir does not exist
<br>
[mic2:21851] procdir: /tmp/openmpi-sessions-jbray_at_mic2_0/27642/0/0
<br>
[mic2:21851] jobdir: /tmp/openmpi-sessions-jbray_at_mic2_0/27642/0
<br>
[mic2:21851] top: openmpi-sessions-jbray_at_mic2_0
<br>
[mic2:21851] tmp: /tmp
<br>
[mic2:21851] sess_dir_finalize: proc session dir does not exist
<br>
&lt;12 times&gt;
<br>
<p><p>[mic2:21851] sess_dir_cleanup: job session dir does not exist
<br>
exiting with status 139
<br>
<p>My C codes do not have this problem
<br>
<p>Compiler options are
<br>
<p>mpicxx -g -O0 -fno-inline-functions -openmp -o one_c_debug.exe async.c
<br>
collective.c compute.c memory.c one.c openmp.c p2p.c variables.c
<br>
auditmpi.c   control.c inout.c perfio.c ring.c wave.c io.c   leak.c mpiio.c
<br>
pthreads.c -openmp -lpthread
<br>
<p>mpif90 -g -O0  -fno-inline-functions -openmp -o one_f_debug.exe control.o
<br>
io.f90 leak.f90 memory.f90 one.f90 ring.f90 slow.f90 swapbounds.f90
<br>
variables.f90 wave.f90 *.F90 -openmp
<br>
<p>Any suggestions as to what is upsetting Fortran with Intel-15
<br>
<p>John
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25823/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25824.php">Dave Love: "[OMPI users] mpi_wtime implementation"</a>
<li><strong>Previous message:</strong> <a href="25822.php">Mike Dubman: "Re: [OMPI users] shmalloc error with &gt;=512 mb"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25828.php">John Bray: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>Reply:</strong> <a href="25828.php">John Bray: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>Reply:</strong> <a href="25829.php">Gilles Gouaillardet: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
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
