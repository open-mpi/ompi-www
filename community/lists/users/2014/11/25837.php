<?
$subject_val = "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 18 05:16:18 2014" -->
<!-- isoreceived="20141118101618" -->
<!-- sent="Tue, 18 Nov 2014 10:16:16 +0000" -->
<!-- isosent="20141118101616" -->
<!-- name="Michael.Rachner_at_[hidden]" -->
<!-- email="Michael.Rachner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently" -->
<!-- id="8337B490252F0944BF1D38541059627E173718F2_at_DLREXMBX01.intra.dlr.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAM2Y-daMGPfMWPB9xanhaiaxG7UL-4=wN76rqVXqVEmJpXpRfw_at_mail.gmail.com" -->
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
<strong>From:</strong> <a href="mailto:Michael.Rachner_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Fortran%20and%20OpenMPI%201.8.3%20compiled%20with%20Intel-15%20does%20nothing%20silently"><em>Michael.Rachner_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-11-18 05:16:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25838.php">Ralph Castain: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>Previous message:</strong> <a href="25836.php">John Bray: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>In reply to:</strong> <a href="25836.php">John Bray: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25838.php">Ralph Castain: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>Reply:</strong> <a href="25838.php">Ralph Castain: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tip:  INTEL-Ftn-compiler problems can be communicated to INTEL there:
<br>

<br>
<a href="https://software.intel.com/en-us/forums/intel-fortran-compiler-for-linux-and-mac-os-x">https://software.intel.com/en-us/forums/intel-fortran-compiler-for-linux-and-mac-os-x</a>
<br>

<br>
Greetings
<br>
Michael Rachner
<br>

<br>
Von: users [mailto:users-bounces_at_[hidden]] Im Auftrag von John Bray
<br>
Gesendet: Dienstag, 18. November 2014 11:03
<br>
An: Open MPI Users
<br>
Betreff: Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently
<br>

<br>
The original problem used a separate file and not a module. Its clearly a bizarre Intel bug, I am only continuing to persue it here as I'm curious as to why the segfault messages disappear at higher process counts
<br>
John
<br>

<br>
On 18 November 2014 09:58, &lt;Michael.Rachner_at_[hidden]&lt;mailto:Michael.Rachner_at_[hidden]&gt;&gt; wrote:
<br>
It may be possibly a bug in Intel-15.0 .
<br>
I suspect it has to do with the   contains-block   and with the fact, that you call an intrinsic sbr in that contains-block.
<br>
Normally this must work. You may try to separate the influence of both:
<br>

<br>
What happens with these 3 variants of your code:
<br>

<br>
variant a):   using an own sbr instead of the intrinsic sbr
<br>

<br>
program fred
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real :: a(10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mydummy_random_number(a)
<br>
&nbsp;&nbsp;&nbsp;end subroutine sub
<br>
&nbsp;&nbsp;&nbsp;subroutine mydummy_random_number(a)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real :: a(10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *,&#226;&#128;&#153;---I am in sbr mydummy_random_number&#226;&#128;&#153;
<br>
&nbsp;&nbsp;&nbsp;end subroutine mydummy_random_number
<br>
end program fred
<br>

<br>

<br>
variant b):   removing the  contains-block
<br>

<br>
program fred
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
end program fred
<br>
!
<br>
subroutine sub
<br>
&nbsp;&nbsp;&nbsp;&nbsp;real :: a(10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call random_number(a)
<br>
end subroutine sub
<br>

<br>
variant c):     moving the contains-block into a module
<br>

<br>
module MYMODULE
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
end module MYMODULE
<br>
!
<br>
program fred
<br>
use MYMODULE
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
end program fred
<br>

<br>

<br>
Greetings
<br>
Michael Rachner
<br>

<br>

<br>

<br>
Von: users [mailto:users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] Im Auftrag von John Bray
<br>
Gesendet: Dienstag, 18. November 2014 10:10
<br>
An: Open MPI Users
<br>
Betreff: Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently
<br>

<br>
A delightful bug this, you get a segfault if you code contains a random_number call and is compiled with -fopenmp, EVEN IF YOU CANNOT CALL IT!
<br>

<br>
program fred
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
The segfault is nothing to do with OpenMPI, but there remains a mystery as to why I only get the segfault error messages on lower node counts.
<br>

<br>
mpif90 -O0 -fopenmp ./fred.f90
<br>
mpiexec -n 6 ./a.out
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 4 with PID 28402 on node mic2 exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
jbray_at_mic2:intel-15_openmpi-1.8.3%&lt;mailto:jbray_at_mic2:intel-15_openmpi-1.8.3%25&gt; mpiexec -n 12 ./a.out
<br>
&lt;nothing&gt;
<br>
It was the silence that made me raise the issue here. I am running on a 12 physical core hyperthreaded Xeon Phi. Is there something in OpenMPI that is suppressing the messages, as I am getting 4/5 core files each time.
<br>
John
<br>

<br>
On 18 November 2014 04:24, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
Just checked the head of the 1.8 branch (soon to be released as 1.8.4), and confirmed the same results. I know the thread-multiple option is still broken there, but will test that once we get the final fix committed.
<br>

<br>

<br>
On Mon, Nov 17, 2014 at 7:29 PM, Ralph Castain &lt;rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
<br>
FWIW: I don't have access to a Linux box right now, but I built the OMPI devel master on my Mac using Intel 2015 compilers and was able to build/run all of the Fortran examples in our &quot;examples&quot; directory.
<br>

<br>
I suspect the problem here is your use of the --enable-mpi-thread-multiple option. The 1.8 series had an issue with that option - we are in the process of fixing it (I'm waiting for an updated patch), and you might be hitting it.
<br>

<br>
If you remove that configure option, do things then work?
<br>
Ralph
<br>

<br>

<br>
On Mon, Nov 17, 2014 at 5:56 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
<br>
Hi John,
<br>

<br>
do you MPI_Init() or do you MPI_Init_thread(MPI_THREAD_MULTIPLE) ?
<br>

<br>
does your program calls MPI anywhere from an OpenMP region ?
<br>
does your program calls MPI only within an !$OMP MASTER section ?
<br>
does your program does not invoke MPI at all from any OpenMP region ?
<br>

<br>
can you reproduce this issue with a simple fortran program ? or can you publish all your files ?
<br>

<br>
Cheers,
<br>

<br>
Gilles
<br>

<br>

<br>
On 2014/11/18 1:41, John Bray wrote:
<br>

<br>
I have succesfully been using OpenMPI 1.8.3 compiled with Intel-14, using
<br>

<br>

<br>

<br>
./configure --prefix=/usr/local/mpi/$(basename $PWD) --with-threads=posix
<br>

<br>
--enable-mpi-thread-multiple --disable-vt --with-scif=no
<br>

<br>

<br>

<br>
I have now switched to Intel 15.0.1, and configuring with the same options,
<br>

<br>
I get minor changes in config.log about warning spotting, but it makes all
<br>

<br>
the binaries, and I can compile my own fortran code with mpif90/mpicc
<br>

<br>

<br>

<br>
but a command 'mpiexec --verbose -n 12 ./fortran_binary' does nothing
<br>

<br>

<br>

<br>
I checked the FAQ and started using
<br>

<br>

<br>

<br>
./configure --prefix=/usr/local/mpi/$(basename $PWD) --with-threads=posix
<br>

<br>
--enable-mpi-thread-multiple --disable-vt --with-scif=no CC=icc CXX=icpc
<br>

<br>
F77=ifort FC=ifort
<br>

<br>

<br>

<br>
but that makes no difference.
<br>

<br>

<br>

<br>
Only with -d do I get any more information
<br>

<br>

<br>

<br>
mpirun -d --verbose -n 12
<br>

<br>
/home/jbray/5.0/mic2/one/intel-15_openmpi-1.8.3/one_f_debug.exe
<br>

<br>
[mic2:21851] procdir: /tmp/openmpi-sessions-jbray_at_mic2_0/27642/0/0
<br>

<br>
[mic2:21851] jobdir: /tmp/openmpi-sessions-jbray_at_mic2_0/27642/0
<br>

<br>
[mic2:21851] top: openmpi-sessions-jbray_at_mic2_0
<br>

<br>
[mic2:21851] tmp: /tmp
<br>

<br>
[mic2:21851] sess_dir_cleanup: job session dir does not exist
<br>

<br>
[mic2:21851] procdir: /tmp/openmpi-sessions-jbray_at_mic2_0/27642/0/0
<br>

<br>
[mic2:21851] jobdir: /tmp/openmpi-sessions-jbray_at_mic2_0/27642/0
<br>

<br>
[mic2:21851] top: openmpi-sessions-jbray_at_mic2_0
<br>

<br>
[mic2:21851] tmp: /tmp
<br>

<br>
[mic2:21851] sess_dir_finalize: proc session dir does not exist
<br>

<br>
&lt;12 times&gt;
<br>

<br>

<br>

<br>

<br>

<br>
[mic2:21851] sess_dir_cleanup: job session dir does not exist
<br>

<br>
exiting with status 139
<br>

<br>

<br>

<br>
My C codes do not have this problem
<br>

<br>

<br>

<br>
Compiler options are
<br>

<br>

<br>

<br>
mpicxx -g -O0 -fno-inline-functions -openmp -o one_c_debug.exe async.c
<br>

<br>
collective.c compute.c memory.c one.c openmp.c p2p.c variables.c
<br>

<br>
auditmpi.c   control.c inout.c perfio.c ring.c wave.c io.c   leak.c mpiio.c
<br>

<br>
pthreads.c -openmp -lpthread
<br>

<br>

<br>

<br>
mpif90 -g -O0  -fno-inline-functions -openmp -o one_f_debug.exe control.o
<br>

<br>
io.f90 leak.f90 memory.f90 one.f90 ring.f90 slow.f90 swapbounds.f90
<br>

<br>
variables.f90 wave.f90 *.F90 -openmp
<br>

<br>

<br>

<br>
Any suggestions as to what is upsetting Fortran with Intel-15
<br>

<br>

<br>

<br>
John
<br>

<br>

<br>

<br>

<br>
_______________________________________________
<br>

<br>
users mailing list
<br>

<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>

<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>

<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25823.php">http://www.open-mpi.org/community/lists/users/2014/11/25823.php</a>
<br>

<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25829.php">http://www.open-mpi.org/community/lists/users/2014/11/25829.php</a>
<br>

<br>

<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25833.php">http://www.open-mpi.org/community/lists/users/2014/11/25833.php</a>
<br>

<br>

<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25835.php">http://www.open-mpi.org/community/lists/users/2014/11/25835.php</a>
<br>

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25837/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25838.php">Ralph Castain: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>Previous message:</strong> <a href="25836.php">John Bray: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>In reply to:</strong> <a href="25836.php">John Bray: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25838.php">Ralph Castain: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>Reply:</strong> <a href="25838.php">Ralph Castain: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
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
