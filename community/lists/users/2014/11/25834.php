<?
$subject_val = "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 18 04:09:42 2014" -->
<!-- isoreceived="20141118090942" -->
<!-- sent="Tue, 18 Nov 2014 09:09:40 +0000" -->
<!-- isosent="20141118090940" -->
<!-- name="John Bray" -->
<!-- email="jbray_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently" -->
<!-- id="CAM2Y-dZ4JvTVgQm7HyqKKo4jT45+ACvjoGs5mN6NVEARhv3mkQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMD57oed9gKon5q-di1Xho-SMr3SsNqJ3nZQO5JUK5MQwAqe2A_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2014-11-18 04:09:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25835.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>Previous message:</strong> <a href="25833.php">Ralph Castain: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>In reply to:</strong> <a href="25833.php">Ralph Castain: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25835.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>Reply:</strong> <a href="25835.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A delightful bug this, you get a segfault if you code contains a
<br>
random_number call and is compiled with -fopenmp, EVEN IF YOU CANNOT CALL
<br>
IT!
<br>
<p>program fred
<br>
use mpi
<br>
integer :: ierr
<br>
call mpi_init(ierr)
<br>
print *,&quot;hello&quot;
<br>
call mpi_finalize(ierr)
<br>
contains
<br>
&nbsp;&nbsp;subroutine sub
<br>
&nbsp;&nbsp;&nbsp;&nbsp;real :: a(10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call random_number(a)
<br>
&nbsp;&nbsp;&nbsp;end subroutine sub
<br>
end program fred
<br>
<p>The segfault is nothing to do with OpenMPI, but there remains a mystery as
<br>
to why I only get the segfault error messages on lower node counts.
<br>
<p>mpif90 -O0 -fopenmp ./fred.f90
<br>
mpiexec -n 6 ./a.out
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 4 with PID 28402 on node mic2 exited on
<br>
signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
jbray_at_mic2:intel-15_openmpi-1.8.3% mpiexec -n 12 ./a.out
<br>
&lt;nothing&gt;
<br>
<p>It was the silence that made me raise the issue here. I am running on a 12
<br>
physical core hyperthreaded Xeon Phi. Is there something in OpenMPI that is
<br>
suppressing the messages, as I am getting 4/5 core files each time.
<br>
<p>John
<br>
<p>On 18 November 2014 04:24, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Just checked the head of the 1.8 branch (soon to be released as 1.8.4),
</span><br>
<span class="quotelev1">&gt; and confirmed the same results. I know the thread-multiple option is still
</span><br>
<span class="quotelev1">&gt; broken there, but will test that once we get the final fix committed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Nov 17, 2014 at 7:29 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: I don't have access to a Linux box right now, but I built the OMPI
</span><br>
<span class="quotelev2">&gt;&gt; devel master on my Mac using Intel 2015 compilers and was able to build/run
</span><br>
<span class="quotelev2">&gt;&gt; all of the Fortran examples in our &quot;examples&quot; directory.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I suspect the problem here is your use of the
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpi-thread-multiple option. The 1.8 series had an issue with
</span><br>
<span class="quotelev2">&gt;&gt; that option - we are in the process of fixing it (I'm waiting for an
</span><br>
<span class="quotelev2">&gt;&gt; updated patch), and you might be hitting it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you remove that configure option, do things then work?
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Nov 17, 2014 at 5:56 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Hi John,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do you MPI_Init() or do you MPI_Init_thread(MPI_THREAD_MULTIPLE) ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does your program calls MPI anywhere from an OpenMP region ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does your program calls MPI only within an !$OMP MASTER section ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does your program does not invoke MPI at all from any OpenMP region ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can you reproduce this issue with a simple fortran program ? or can you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; publish all your files ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2014/11/18 1:41, John Bray wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have succesfully been using OpenMPI 1.8.3 compiled with Intel-14, using
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/usr/local/mpi/$(basename $PWD) --with-threads=posix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-mpi-thread-multiple --disable-vt --with-scif=no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have now switched to Intel 15.0.1, and configuring with the same options,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I get minor changes in config.log about warning spotting, but it makes all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the binaries, and I can compile my own fortran code with mpif90/mpicc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but a command 'mpiexec --verbose -n 12 ./fortran_binary' does nothing
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I checked the FAQ and started using
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./configure --prefix=/usr/local/mpi/$(basename $PWD) --with-threads=posix
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-mpi-thread-multiple --disable-vt --with-scif=no CC=icc CXX=icpc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; F77=ifort FC=ifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but that makes no difference.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Only with -d do I get any more information
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -d --verbose -n 12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/jbray/5.0/mic2/one/intel-15_openmpi-1.8.3/one_f_debug.exe
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mic2:21851] procdir: /tmp/openmpi-sessions-jbray_at_mic2_0/27642/0/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mic2:21851] jobdir: /tmp/openmpi-sessions-jbray_at_mic2_0/27642/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mic2:21851] top: openmpi-sessions-jbray_at_mic2_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mic2:21851] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mic2:21851] sess_dir_cleanup: job session dir does not exist
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mic2:21851] procdir: /tmp/openmpi-sessions-jbray_at_mic2_0/27642/0/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mic2:21851] jobdir: /tmp/openmpi-sessions-jbray_at_mic2_0/27642/0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mic2:21851] top: openmpi-sessions-jbray_at_mic2_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mic2:21851] tmp: /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mic2:21851] sess_dir_finalize: proc session dir does not exist
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;12 times&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mic2:21851] sess_dir_cleanup: job session dir does not exist
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exiting with status 139
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My C codes do not have this problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Compiler options are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpicxx -g -O0 -fno-inline-functions -openmp -o one_c_debug.exe async.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collective.c compute.c memory.c one.c openmp.c p2p.c variables.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; auditmpi.c   control.c inout.c perfio.c ring.c wave.c io.c   leak.c mpiio.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pthreads.c -openmp -lpthread
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpif90 -g -O0  -fno-inline-functions -openmp -o one_f_debug.exe control.o
</span><br>
<span class="quotelev3">&gt;&gt;&gt; io.f90 leak.f90 memory.f90 one.f90 ring.f90 slow.f90 swapbounds.f90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; variables.f90 wave.f90 *.F90 -openmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any suggestions as to what is upsetting Fortran with Intel-15
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; John
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25823.php">http://www.open-mpi.org/community/lists/users/2014/11/25823.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25829.php">http://www.open-mpi.org/community/lists/users/2014/11/25829.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25833.php">http://www.open-mpi.org/community/lists/users/2014/11/25833.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25834/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25835.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>Previous message:</strong> <a href="25833.php">Ralph Castain: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>In reply to:</strong> <a href="25833.php">Ralph Castain: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25835.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>Reply:</strong> <a href="25835.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
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
