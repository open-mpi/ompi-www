<?
$subject_val = "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 17 16:23:13 2014" -->
<!-- isoreceived="20141117212313" -->
<!-- sent="Mon, 17 Nov 2014 21:23:12 +0000" -->
<!-- isosent="20141117212312" -->
<!-- name="John Bray" -->
<!-- email="jbray_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently" -->
<!-- id="CAM2Y-dbCnOAXxod3QEgQzR0YSYdMwKZNaZuO9K_9n=pFAsmFQQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAM2Y-dbTArY_oOtra6aAPgNrZ582uQSPxnMLOQgzBa1GBRkfOA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently<br>
<strong>From:</strong> John Bray (<em>jbray_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-17 16:23:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25829.php">Gilles Gouaillardet: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>Previous message:</strong> <a href="25827.php">Tim Prince: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does	nothing silently"</a>
<li><strong>In reply to:</strong> <a href="25823.php">John Bray: "[OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25829.php">Gilles Gouaillardet: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
More investigation suggests its the use of -fopenmp (and also its new name
<br>
-qopenmp) just to compile in OpenMP code, even if it is never executed
<br>
<p>mpiexec -n 12 ./one_f_debug.exe
<br>
fails silently
<br>
<p>mpiexec -n 2 ./one_f_debug.exe
<br>
has a segfault
<br>
<p>Both the segfault and the reason why changing the process count suppresses
<br>
it are still a mystery
<br>
<p>John
<br>
<p>On 17 November 2014 16:41, John Bray &lt;jbray_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have succesfully been using OpenMPI 1.8.3 compiled with Intel-14, using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/mpi/$(basename $PWD) --with-threads=posix
</span><br>
<span class="quotelev1">&gt; --enable-mpi-thread-multiple --disable-vt --with-scif=no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have now switched to Intel 15.0.1, and configuring with the same
</span><br>
<span class="quotelev1">&gt; options, I get minor changes in config.log about warning spotting, but it
</span><br>
<span class="quotelev1">&gt; makes all the binaries, and I can compile my own fortran code with
</span><br>
<span class="quotelev1">&gt; mpif90/mpicc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but a command 'mpiexec --verbose -n 12 ./fortran_binary' does nothing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked the FAQ and started using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/mpi/$(basename $PWD) --with-threads=posix
</span><br>
<span class="quotelev1">&gt; --enable-mpi-thread-multiple --disable-vt --with-scif=no CC=icc CXX=icpc
</span><br>
<span class="quotelev1">&gt; F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but that makes no difference.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Only with -d do I get any more information
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -d --verbose -n 12
</span><br>
<span class="quotelev1">&gt; /home/jbray/5.0/mic2/one/intel-15_openmpi-1.8.3/one_f_debug.exe
</span><br>
<span class="quotelev1">&gt; [mic2:21851] procdir: /tmp/openmpi-sessions-jbray_at_mic2_0/27642/0/0
</span><br>
<span class="quotelev1">&gt; [mic2:21851] jobdir: /tmp/openmpi-sessions-jbray_at_mic2_0/27642/0
</span><br>
<span class="quotelev1">&gt; [mic2:21851] top: openmpi-sessions-jbray_at_mic2_0
</span><br>
<span class="quotelev1">&gt; [mic2:21851] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [mic2:21851] sess_dir_cleanup: job session dir does not exist
</span><br>
<span class="quotelev1">&gt; [mic2:21851] procdir: /tmp/openmpi-sessions-jbray_at_mic2_0/27642/0/0
</span><br>
<span class="quotelev1">&gt; [mic2:21851] jobdir: /tmp/openmpi-sessions-jbray_at_mic2_0/27642/0
</span><br>
<span class="quotelev1">&gt; [mic2:21851] top: openmpi-sessions-jbray_at_mic2_0
</span><br>
<span class="quotelev1">&gt; [mic2:21851] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [mic2:21851] sess_dir_finalize: proc session dir does not exist
</span><br>
<span class="quotelev1">&gt; &lt;12 times&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mic2:21851] sess_dir_cleanup: job session dir does not exist
</span><br>
<span class="quotelev1">&gt; exiting with status 139
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My C codes do not have this problem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compiler options are
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicxx -g -O0 -fno-inline-functions -openmp -o one_c_debug.exe async.c
</span><br>
<span class="quotelev1">&gt; collective.c compute.c memory.c one.c openmp.c p2p.c variables.c
</span><br>
<span class="quotelev1">&gt; auditmpi.c   control.c inout.c perfio.c ring.c wave.c io.c   leak.c mpiio.c
</span><br>
<span class="quotelev1">&gt; pthreads.c -openmp -lpthread
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpif90 -g -O0  -fno-inline-functions -openmp -o one_f_debug.exe control.o
</span><br>
<span class="quotelev1">&gt; io.f90 leak.f90 memory.f90 one.f90 ring.f90 slow.f90 swapbounds.f90
</span><br>
<span class="quotelev1">&gt; variables.f90 wave.f90 *.F90 -openmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions as to what is upsetting Fortran with Intel-15
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; John
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25828/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25829.php">Gilles Gouaillardet: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>Previous message:</strong> <a href="25827.php">Tim Prince: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does	nothing silently"</a>
<li><strong>In reply to:</strong> <a href="25823.php">John Bray: "[OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25829.php">Gilles Gouaillardet: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
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
