<?
$subject_val = "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 17 22:29:02 2014" -->
<!-- isoreceived="20141118032902" -->
<!-- sent="Mon, 17 Nov 2014 19:29:00 -0800" -->
<!-- isosent="20141118032900" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently" -->
<!-- id="CAMD57ofgpZhyuUS3dKk=-xCMy5E2OGaUQn6X9fZXMmFqas2U8g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="546AA73C.9080501_at_iferc.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-17 22:29:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25831.php">Faraj, Daniel A: "[OMPI users] collective algorithms"</a>
<li><strong>Previous message:</strong> <a href="25829.php">Gilles Gouaillardet: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>In reply to:</strong> <a href="25829.php">Gilles Gouaillardet: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25833.php">Ralph Castain: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>Reply:</strong> <a href="25833.php">Ralph Castain: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: I don't have access to a Linux box right now, but I built the OMPI
<br>
devel master on my Mac using Intel 2015 compilers and was able to build/run
<br>
all of the Fortran examples in our &quot;examples&quot; directory.
<br>
<p>I suspect the problem here is your use of the
<br>
--enable-mpi-thread-multiple option.
<br>
The 1.8 series had an issue with that option - we are in the process of
<br>
fixing it (I'm waiting for an updated patch), and you might be hitting it.
<br>
<p>If you remove that configure option, do things then work?
<br>
Ralph
<br>
<p><p>On Mon, Nov 17, 2014 at 5:56 PM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Hi John,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; do you MPI_Init() or do you MPI_Init_thread(MPI_THREAD_MULTIPLE) ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; does your program calls MPI anywhere from an OpenMP region ?
</span><br>
<span class="quotelev1">&gt; does your program calls MPI only within an !$OMP MASTER section ?
</span><br>
<span class="quotelev1">&gt; does your program does not invoke MPI at all from any OpenMP region ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; can you reproduce this issue with a simple fortran program ? or can you
</span><br>
<span class="quotelev1">&gt; publish all your files ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/11/18 1:41, John Bray wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have succesfully been using OpenMPI 1.8.3 compiled with Intel-14, using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/mpi/$(basename $PWD) --with-threads=posix
</span><br>
<span class="quotelev1">&gt; --enable-mpi-thread-multiple --disable-vt --with-scif=no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have now switched to Intel 15.0.1, and configuring with the same options,
</span><br>
<span class="quotelev1">&gt; I get minor changes in config.log about warning spotting, but it makes all
</span><br>
<span class="quotelev1">&gt; the binaries, and I can compile my own fortran code with mpif90/mpicc
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25823.php">http://www.open-mpi.org/community/lists/users/2014/11/25823.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25829.php">http://www.open-mpi.org/community/lists/users/2014/11/25829.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25830/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25831.php">Faraj, Daniel A: "[OMPI users] collective algorithms"</a>
<li><strong>Previous message:</strong> <a href="25829.php">Gilles Gouaillardet: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>In reply to:</strong> <a href="25829.php">Gilles Gouaillardet: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25833.php">Ralph Castain: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>Reply:</strong> <a href="25833.php">Ralph Castain: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
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
