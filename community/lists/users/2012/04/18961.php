<?
$subject_val = "Re: [OMPI users] Myid changes to 0 after using a mpi_recv";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  5 18:15:54 2012" -->
<!-- isoreceived="20120405221554" -->
<!-- sent="Thu, 5 Apr 2012 18:15:49 -0400" -->
<!-- isosent="20120405221549" -->
<!-- name="Anton Morgan" -->
<!-- email="amorgan.cartech_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Myid changes to 0 after using a mpi_recv" -->
<!-- id="CALC7YaiAui6LB3au36qea2te6_uSt9ML60obmJt6B2_S=bjMNQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CALC7YagOE2uXApPLfKNU+w5o0e=QJYr-nDUSwj9yxAJDWf7+Sg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Myid changes to 0 after using a mpi_recv<br>
<strong>From:</strong> Anton Morgan (<em>amorgan.cartech_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-05 18:15:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18962.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="18960.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>In reply to:</strong> <a href="18959.php">Anton Morgan: "[OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18964.php">Jeffrey Squyres: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<li><strong>Reply:</strong> <a href="18964.php">Jeffrey Squyres: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Some things to add. I installed Microsoft MPI and this issue did not occur
<br>
and gave me the correct rank/myid numbers when running this program. So it
<br>
seems something might be incorrect in Open MPI. I would still like to use
<br>
Open MPI, so I would like to help and see a resolution to this.
<br>
<p>Also to add in the example Makefile. change pikaia to mpihello to make
<br>
correctly.
<br>
<p>Thanks.
<br>
<p>On Thu, Apr 5, 2012 at 3:39 PM, Anton Morgan &lt;amorgan.cartech_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; My setup is kinda convoluted unfortunately so this also might be an issue,
</span><br>
<span class="quotelev1">&gt; but just keep that in the back of your mind for now and assume that is not
</span><br>
<span class="quotelev1">&gt; the problem. I am using Windows 7 64-bit, with cygwin and compiling using
</span><br>
<span class="quotelev1">&gt; x86_64-w64-mingw32-gfortran and installed open MPI via
</span><br>
<span class="quotelev1">&gt; OpenMPI_v1.5.5-1_win64.exe. I have compiled and ran some mpi test programs
</span><br>
<span class="quotelev1">&gt; I made, but first time using the mpi_send and mpi_recv commands I ran into
</span><br>
<span class="quotelev1">&gt; this error, or what seems to be an error to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Back story: I am trying to run Parallel Pikaia, which is an open source
</span><br>
<span class="quotelev1">&gt; Genetics Algorithm in Fortran that uses MPI. It should run out of the box
</span><br>
<span class="quotelev1">&gt; fine, but it does run all processes properly. So I started to troubleshoot
</span><br>
<span class="quotelev1">&gt; and found that after the first mpi_recv command on the slaves, the myid
</span><br>
<span class="quotelev1">&gt; changes to 0, but right before the command it is the appropriate myid/rank.
</span><br>
<span class="quotelev1">&gt; So I made a simple fortran code to test if it was Pikaia or MPI and it
</span><br>
<span class="quotelev1">&gt; shows to be MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Fortran Code:
</span><br>
<span class="quotelev1">&gt; c ----------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       program mpi_hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       implicit none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       integer ierr,myid,nproc,rc,flag,nrank,rank
</span><br>
<span class="quotelev1">&gt;       integer status(MPI_STATUS_SIZE), flag2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; c ----------------------------------------------
</span><br>
<span class="quotelev1">&gt; c     Initialize MPI
</span><br>
<span class="quotelev1">&gt; c ----------------------------------------------
</span><br>
<span class="quotelev1">&gt;       call mpi_init( ierr )
</span><br>
<span class="quotelev1">&gt;       call mpi_comm_rank( MPI_COMM_WORLD, myid, ierr )
</span><br>
<span class="quotelev1">&gt;       call mpi_comm_size( MPI_COMM_WORLD, nproc, ierr )
</span><br>
<span class="quotelev1">&gt;       nrank=nproc-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; c ----------------------------------------------
</span><br>
<span class="quotelev1">&gt; c Master portion
</span><br>
<span class="quotelev1">&gt; c ----------------------------------------------
</span><br>
<span class="quotelev1">&gt;       if (myid.eq.0) then
</span><br>
<span class="quotelev1">&gt;          flag=1
</span><br>
<span class="quotelev1">&gt;          flag2=2
</span><br>
<span class="quotelev1">&gt; c send two integers to all slaves
</span><br>
<span class="quotelev1">&gt;          do rank=1,nrank
</span><br>
<span class="quotelev1">&gt;          call mpi_send( flag, 1, MPI_INTEGER, rank,
</span><br>
<span class="quotelev1">&gt;      +               1, MPI_COMM_WORLD, ierr )
</span><br>
<span class="quotelev1">&gt;          print 8, flag, myid
</span><br>
<span class="quotelev1">&gt;    8     format('Master says, Flag: ',i0.1, ' MyID: ', i0.1)
</span><br>
<span class="quotelev1">&gt;          call mpi_send( flag2, 1, MPI_INTEGER, rank,
</span><br>
<span class="quotelev1">&gt;      +               1, MPI_COMM_WORLD, ierr )
</span><br>
<span class="quotelev1">&gt;          print 10, flag2, myid
</span><br>
<span class="quotelev1">&gt;    10    format('Master says, Flag2: ',i0.1, ' MyID: ', i0.1)
</span><br>
<span class="quotelev1">&gt;          enddo
</span><br>
<span class="quotelev1">&gt; c ----------------------------------------------
</span><br>
<span class="quotelev1">&gt; c Slave portion
</span><br>
<span class="quotelev1">&gt; c ----------------------------------------------
</span><br>
<span class="quotelev1">&gt;       elseif (myid.ne.0) then
</span><br>
<span class="quotelev1">&gt; c to see ID before mpi_rcv
</span><br>
<span class="quotelev1">&gt;          print *, 'Slave: ', myid
</span><br>
<span class="quotelev1">&gt;          call mpi_recv( flag, 1, MPI_INTEGER, 0,
</span><br>
<span class="quotelev1">&gt;      +               1, MPI_COMM_WORLD, status, ierr )
</span><br>
<span class="quotelev1">&gt; c check myid after recv which turns to 0 on my environment
</span><br>
<span class="quotelev1">&gt;          print 9, flag, myid
</span><br>
<span class="quotelev1">&gt;    9     format('Slave says, Flag: ',i0.1, ' MyID: ', i0.1)
</span><br>
<span class="quotelev1">&gt;          call mpi_recv( flag2, 1, MPI_INTEGER, 0,
</span><br>
<span class="quotelev1">&gt;      +               1, MPI_COMM_WORLD, status, ierr )
</span><br>
<span class="quotelev1">&gt;          print 11, flag2, myid
</span><br>
<span class="quotelev1">&gt;    11    format('Slave says, Flag2: ',i0.1, ' MyID: ', i0.1)
</span><br>
<span class="quotelev1">&gt;       endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       call mpi_finalize(rc)
</span><br>
<span class="quotelev1">&gt;       stop
</span><br>
<span class="quotelev1">&gt;       end
</span><br>
<span class="quotelev1">&gt; c ----------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Simple makefile for my environment:
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # MPI makefile
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #INSTALL_DIR = ./
</span><br>
<span class="quotelev1">&gt; F77        = x86_64-w64-mingw32-gfortran
</span><br>
<span class="quotelev1">&gt; # Progra~2 because it is located in Program Files (x86)
</span><br>
<span class="quotelev1">&gt; LIB        = -L/cygdrive/c/Progra~2/OpenMPI_v1.5.5-x64/bin
</span><br>
<span class="quotelev1">&gt; INCLUDE    = -I/cygdrive/c/Progra~2/OpenMPI_v1.5.5-x64/include
</span><br>
<span class="quotelev1">&gt; FFLAGS    =
</span><br>
<span class="quotelev1">&gt; MAKE    = make
</span><br>
<span class="quotelev1">&gt; SHELL    = /bin/sh
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; ### End User configurable options ###
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SRC1    = mpihello
</span><br>
<span class="quotelev1">&gt; OBJS    = $(SRC1).o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pikaia : $(OBJS)
</span><br>
<span class="quotelev1">&gt;     $(F77) $(FFLAGS) -o mpihello $(OBJS) $(LIB) -lmpi_f77
</span><br>
<span class="quotelev1">&gt; #    rm -f *.o
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $(SRC1).o : $(SRC1).f
</span><br>
<span class="quotelev1">&gt;     $(F77) $(FFLAGS) $(INCLUDE) -c $(SRC1).f
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I am wondering if this is something that is an issue with the current
</span><br>
<span class="quotelev1">&gt; build of openMPI , if I am missing something or if it's my convoluted
</span><br>
<span class="quotelev1">&gt; environment. Attached is the source and makefile of what is above and then
</span><br>
<span class="quotelev1">&gt; my built .exe and a libgcc_s_sjlj-1.dll to run the .exe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for the help
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; *AMorgan*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
*Anton Morgan*
CAR Technologies LLC
amorgan.cartech_at_[hidden]
1305 Kinnear Rd.
Columbus, Oh 43212
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18961/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18962.php">Eloi Gaudry: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<li><strong>Previous message:</strong> <a href="18960.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>In reply to:</strong> <a href="18959.php">Anton Morgan: "[OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18964.php">Jeffrey Squyres: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<li><strong>Reply:</strong> <a href="18964.php">Jeffrey Squyres: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
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
