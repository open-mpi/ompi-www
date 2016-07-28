<?
$subject_val = "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 18 05:58:59 2014" -->
<!-- isoreceived="20141118105859" -->
<!-- sent="Tue, 18 Nov 2014 02:58:57 -0800" -->
<!-- isosent="20141118105857" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently" -->
<!-- id="CAMD57odCvgPWitp=FBRhKq_=phEg5COxWarOOzuu4Vz-7T8UkA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="8337B490252F0944BF1D38541059627E173718F2_at_DLREXMBX01.intra.dlr.de" -->
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
<strong>Date:</strong> 2014-11-18 05:58:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25839.php">Jerry Mersel: "[OMPI users] job running out of memory"</a>
<li><strong>Previous message:</strong> <a href="25837.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>In reply to:</strong> <a href="25837.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Best guess is you are seeing a race condition. If a proc immediately fails,
<br>
we will respond by aborting the launch of any other local processes as we
<br>
are going to kill the entire job. So if I get several of them started
<br>
before the first one aborts, then any remaining ones will never get
<br>
spawned, and you won't see an error for every proc you requested.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p>On Tue, Nov 18, 2014 at 2:16 AM, &lt;Michael.Rachner_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Tip:  INTEL-Ftn-compiler problems can be communicated to INTEL there:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://software.intel.com/en-us/forums/intel-fortran-compiler-for-linux-and-mac-os-x">https://software.intel.com/en-us/forums/intel-fortran-compiler-for-linux-and-mac-os-x</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael Rachner
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Von:* users [mailto:users-bounces_at_[hidden]] *Im Auftrag von *John
</span><br>
<span class="quotelev1">&gt; Bray
</span><br>
<span class="quotelev1">&gt; *Gesendet:* Dienstag, 18. November 2014 11:03
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *An:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Betreff:* Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with
</span><br>
<span class="quotelev1">&gt; Intel-15 does nothing silently
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The original problem used a separate file and not a module. Its clearly a
</span><br>
<span class="quotelev1">&gt; bizarre Intel bug, I am only continuing to persue it here as I'm curious as
</span><br>
<span class="quotelev1">&gt; to why the segfault messages disappear at higher process counts
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
<span class="quotelev1">&gt; On 18 November 2014 09:58, &lt;Michael.Rachner_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It may be possibly a bug in Intel-15.0 .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect it has to do with the   contains-block   and with the fact, that
</span><br>
<span class="quotelev1">&gt; you call an intrinsic sbr in that contains-block.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Normally this must work. You may try to separate the influence of both:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What happens with these 3 variants of your code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; variant a):   using an own sbr instead of the intrinsic sbr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; program fred
</span><br>
<span class="quotelev1">&gt; use mpi
</span><br>
<span class="quotelev1">&gt; integer :: ierr
</span><br>
<span class="quotelev1">&gt; call mpi_init(ierr)
</span><br>
<span class="quotelev1">&gt; print *,&quot;hello&quot;
</span><br>
<span class="quotelev1">&gt; call mpi_finalize(ierr)
</span><br>
<span class="quotelev1">&gt; contains
</span><br>
<span class="quotelev1">&gt;   subroutine sub
</span><br>
<span class="quotelev1">&gt;      real :: a(10)
</span><br>
<span class="quotelev1">&gt;      call mydummy_random_number(a)
</span><br>
<span class="quotelev1">&gt;    end subroutine sub
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    subroutine mydummy_random_number(a)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      real :: a(10)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      print *,&#226;&#128;&#153;---I am in sbr mydummy_random_number&#226;&#128;&#153;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    end subroutine mydummy_random_number
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; end program fred
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
<span class="quotelev1">&gt; variant b):   removing the  contains-block
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; program fred
</span><br>
<span class="quotelev1">&gt; use mpi
</span><br>
<span class="quotelev1">&gt; integer :: ierr
</span><br>
<span class="quotelev1">&gt; call mpi_init(ierr)
</span><br>
<span class="quotelev1">&gt; print *,&quot;hello&quot;
</span><br>
<span class="quotelev1">&gt; call mpi_finalize(ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; end program fred
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; subroutine sub
</span><br>
<span class="quotelev1">&gt;     real :: a(10)
</span><br>
<span class="quotelev1">&gt;     call random_number(a)
</span><br>
<span class="quotelev1">&gt; end subroutine sub
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; variant c):     moving the contains-block into a module
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module MYMODULE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; contains
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   subroutine sub
</span><br>
<span class="quotelev1">&gt;     real :: a(10)
</span><br>
<span class="quotelev1">&gt;     call random_number(a)
</span><br>
<span class="quotelev1">&gt;    end subroutine sub
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; end module MYMODULE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; program fred
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; use MYMODULE
</span><br>
<span class="quotelev1">&gt; use mpi
</span><br>
<span class="quotelev1">&gt; integer :: ierr
</span><br>
<span class="quotelev1">&gt; call mpi_init(ierr)
</span><br>
<span class="quotelev1">&gt; print *,&quot;hello&quot;
</span><br>
<span class="quotelev1">&gt; call mpi_finalize(ierr)
</span><br>
<span class="quotelev1">&gt; end program fred
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
<span class="quotelev1">&gt; Greetings
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael Rachner
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Von:* users [mailto:users-bounces_at_[hidden]] *Im Auftrag von *John
</span><br>
<span class="quotelev1">&gt; Bray
</span><br>
<span class="quotelev1">&gt; *Gesendet:* Dienstag, 18. November 2014 10:10
</span><br>
<span class="quotelev1">&gt; *An:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Betreff:* Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with
</span><br>
<span class="quotelev1">&gt; Intel-15 does nothing silently
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A delightful bug this, you get a segfault if you code contains a
</span><br>
<span class="quotelev1">&gt; random_number call and is compiled with -fopenmp, EVEN IF YOU CANNOT CALL
</span><br>
<span class="quotelev1">&gt; IT!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; program fred
</span><br>
<span class="quotelev1">&gt; use mpi
</span><br>
<span class="quotelev1">&gt; integer :: ierr
</span><br>
<span class="quotelev1">&gt; call mpi_init(ierr)
</span><br>
<span class="quotelev1">&gt; print *,&quot;hello&quot;
</span><br>
<span class="quotelev1">&gt; call mpi_finalize(ierr)
</span><br>
<span class="quotelev1">&gt; contains
</span><br>
<span class="quotelev1">&gt;   subroutine sub
</span><br>
<span class="quotelev1">&gt;     real :: a(10)
</span><br>
<span class="quotelev1">&gt;     call random_number(a)
</span><br>
<span class="quotelev1">&gt;    end subroutine sub
</span><br>
<span class="quotelev1">&gt; end program fred
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The segfault is nothing to do with OpenMPI, but there remains a mystery as
</span><br>
<span class="quotelev1">&gt; to why I only get the segfault error messages on lower node counts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpif90 -O0 -fopenmp ./fred.f90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpiexec -n 6 ./a.out
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 4 with PID 28402 on node mic2 exited on
</span><br>
<span class="quotelev1">&gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; jbray_at_mic2:intel-15_openmpi-1.8.3% mpiexec -n 12 ./a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;nothing&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It was the silence that made me raise the issue here. I am running on a 12
</span><br>
<span class="quotelev1">&gt; physical core hyperthreaded Xeon Phi. Is there something in OpenMPI that is
</span><br>
<span class="quotelev1">&gt; suppressing the messages, as I am getting 4/5 core files each time.
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
<span class="quotelev1">&gt; On 18 November 2014 04:24, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just checked the head of the 1.8 branch (soon to be released as 1.8.4),
</span><br>
<span class="quotelev1">&gt; and confirmed the same results. I know the thread-multiple option is still
</span><br>
<span class="quotelev1">&gt; broken there, but will test that once we get the final fix committed.
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
<span class="quotelev1">&gt; On Mon, Nov 17, 2014 at 7:29 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: I don't have access to a Linux box right now, but I built the OMPI
</span><br>
<span class="quotelev1">&gt; devel master on my Mac using Intel 2015 compilers and was able to build/run
</span><br>
<span class="quotelev1">&gt; all of the Fortran examples in our &quot;examples&quot; directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect the problem here is your use of the --enable-mpi-thread-multiple option.
</span><br>
<span class="quotelev1">&gt; The 1.8 series had an issue with that option - we are in the process of
</span><br>
<span class="quotelev1">&gt; fixing it (I'm waiting for an updated patch), and you might be hitting it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you remove that configure option, do things then work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
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
<span class="quotelev1">&gt; On Mon, Nov 17, 2014 at 5:56 PM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Hi John,
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2014/11/18 1:41, John Bray wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I have succesfully been using OpenMPI 1.8.3 compiled with Intel-14, using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/mpi/$(basename $PWD) --with-threads=posix
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --enable-mpi-thread-multiple --disable-vt --with-scif=no
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have now switched to Intel 15.0.1, and configuring with the same options,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get minor changes in config.log about warning spotting, but it makes all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the binaries, and I can compile my own fortran code with mpif90/mpicc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but a command 'mpiexec --verbose -n 12 ./fortran_binary' does nothing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked the FAQ and started using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr/local/mpi/$(basename $PWD) --with-threads=posix
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --enable-mpi-thread-multiple --disable-vt --with-scif=no CC=icc CXX=icpc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; F77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but that makes no difference.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Only with -d do I get any more information
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -d --verbose -n 12
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/jbray/5.0/mic2/one/intel-15_openmpi-1.8.3/one_f_debug.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mic2:21851] procdir: /tmp/openmpi-sessions-jbray_at_mic2_0/27642/0/0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mic2:21851] jobdir: /tmp/openmpi-sessions-jbray_at_mic2_0/27642/0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mic2:21851] top: openmpi-sessions-jbray_at_mic2_0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mic2:21851] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mic2:21851] sess_dir_cleanup: job session dir does not exist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mic2:21851] procdir: /tmp/openmpi-sessions-jbray_at_mic2_0/27642/0/0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mic2:21851] jobdir: /tmp/openmpi-sessions-jbray_at_mic2_0/27642/0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mic2:21851] top: openmpi-sessions-jbray_at_mic2_0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mic2:21851] tmp: /tmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mic2:21851] sess_dir_finalize: proc session dir does not exist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;12 times&gt;
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
<span class="quotelev1">&gt; [mic2:21851] sess_dir_cleanup: job session dir does not exist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; exiting with status 139
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My C codes do not have this problem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compiler options are
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpicxx -g -O0 -fno-inline-functions -openmp -o one_c_debug.exe async.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; collective.c compute.c memory.c one.c openmp.c p2p.c variables.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; auditmpi.c   control.c inout.c perfio.c ring.c wave.c io.c   leak.c mpiio.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pthreads.c -openmp -lpthread
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpif90 -g -O0  -fno-inline-functions -openmp -o one_f_debug.exe control.o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; io.f90 leak.f90 memory.f90 one.f90 ring.f90 slow.f90 swapbounds.f90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; variables.f90 wave.f90 *.F90 -openmp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions as to what is upsetting Fortran with Intel-15
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/11/25823.php">http://www.open-mpi.org/community/lists/users/2014/11/25823.php</a>
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25829.php">http://www.open-mpi.org/community/lists/users/2014/11/25829.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25835.php">http://www.open-mpi.org/community/lists/users/2014/11/25835.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/11/25837.php">http://www.open-mpi.org/community/lists/users/2014/11/25837.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25838/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25839.php">Jerry Mersel: "[OMPI users] job running out of memory"</a>
<li><strong>Previous message:</strong> <a href="25837.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<li><strong>In reply to:</strong> <a href="25837.php">Michael.Rachner_at_[hidden]: "Re: [OMPI users] Fortran and OpenMPI 1.8.3 compiled with Intel-15 does nothing silently"</a>
<!-- nextthread="start" -->
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
