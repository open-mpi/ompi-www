<?
$subject_val = "[OMPI users] Myid changes to 0 after using a mpi_recv";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  5 15:39:51 2012" -->
<!-- isoreceived="20120405193951" -->
<!-- sent="Thu, 5 Apr 2012 15:39:44 -0400" -->
<!-- isosent="20120405193944" -->
<!-- name="Anton Morgan" -->
<!-- email="amorgan.cartech_at_[hidden]" -->
<!-- subject="[OMPI users] Myid changes to 0 after using a mpi_recv" -->
<!-- id="CALC7YagOE2uXApPLfKNU+w5o0e=QJYr-nDUSwj9yxAJDWf7+Sg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Myid changes to 0 after using a mpi_recv<br>
<strong>From:</strong> Anton Morgan (<em>amorgan.cartech_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-05 15:39:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18960.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Previous message:</strong> <a href="18958.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18961.php">Anton Morgan: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<li><strong>Reply:</strong> <a href="18961.php">Anton Morgan: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My setup is kinda convoluted unfortunately so this also might be an issue,
<br>
but just keep that in the back of your mind for now and assume that is not
<br>
the problem. I am using Windows 7 64-bit, with cygwin and compiling using
<br>
x86_64-w64-mingw32-gfortran and installed open MPI via
<br>
OpenMPI_v1.5.5-1_win64.exe. I have compiled and ran some mpi test programs
<br>
I made, but first time using the mpi_send and mpi_recv commands I ran into
<br>
this error, or what seems to be an error to me.
<br>
<p>Back story: I am trying to run Parallel Pikaia, which is an open source
<br>
Genetics Algorithm in Fortran that uses MPI. It should run out of the box
<br>
fine, but it does run all processes properly. So I started to troubleshoot
<br>
and found that after the first mpi_recv command on the slaves, the myid
<br>
changes to 0, but right before the command it is the appropriate myid/rank.
<br>
So I made a simple fortran code to test if it was Pikaia or MPI and it
<br>
shows to be MPI.
<br>
<p>Fortran Code:
<br>
c ----------------------------------------------
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program mpi_hello
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include 'mpif.h'
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer ierr,myid,nproc,rc,flag,nrank,rank
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer status(MPI_STATUS_SIZE), flag2
<br>
<p>c ----------------------------------------------
<br>
c     Initialize MPI
<br>
c ----------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_init( ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_comm_rank( MPI_COMM_WORLD, myid, ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_comm_size( MPI_COMM_WORLD, nproc, ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nrank=nproc-1
<br>
<p>c ----------------------------------------------
<br>
c Master portion
<br>
c ----------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (myid.eq.0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;flag=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;flag2=2
<br>
c send two integers to all slaves
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do rank=1,nrank
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_send( flag, 1, MPI_INTEGER, rank,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+               1, MPI_COMM_WORLD, ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print 8, flag, myid
<br>
&nbsp;&nbsp;&nbsp;8     format('Master says, Flag: ',i0.1, ' MyID: ', i0.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_send( flag2, 1, MPI_INTEGER, rank,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+               1, MPI_COMM_WORLD, ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print 10, flag2, myid
<br>
&nbsp;&nbsp;&nbsp;10    format('Master says, Flag2: ',i0.1, ' MyID: ', i0.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enddo
<br>
c ----------------------------------------------
<br>
c Slave portion
<br>
c ----------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elseif (myid.ne.0) then
<br>
c to see ID before mpi_rcv
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, 'Slave: ', myid
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_recv( flag, 1, MPI_INTEGER, 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+               1, MPI_COMM_WORLD, status, ierr )
<br>
c check myid after recv which turns to 0 on my environment
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print 9, flag, myid
<br>
&nbsp;&nbsp;&nbsp;9     format('Slave says, Flag: ',i0.1, ' MyID: ', i0.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_recv( flag2, 1, MPI_INTEGER, 0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+               1, MPI_COMM_WORLD, status, ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print 11, flag2, myid
<br>
&nbsp;&nbsp;&nbsp;11    format('Slave says, Flag2: ',i0.1, ' MyID: ', i0.1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_finalize(rc)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stop
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
c ----------------------------------------------
<br>
<p>Simple makefile for my environment:
<br>
#
<br>
# MPI makefile
<br>
#
<br>
#INSTALL_DIR = ./
<br>
F77        = x86_64-w64-mingw32-gfortran
<br>
# Progra~2 because it is located in Program Files (x86)
<br>
LIB        = -L/cygdrive/c/Progra~2/OpenMPI_v1.5.5-x64/bin
<br>
INCLUDE    = -I/cygdrive/c/Progra~2/OpenMPI_v1.5.5-x64/include
<br>
FFLAGS    =
<br>
MAKE    = make
<br>
SHELL    = /bin/sh
<br>
#
<br>
### End User configurable options ###
<br>
<p>SRC1    = mpihello
<br>
OBJS    = $(SRC1).o
<br>
<p>pikaia : $(OBJS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$(F77) $(FFLAGS) -o mpihello $(OBJS) $(LIB) -lmpi_f77
<br>
#    rm -f *.o
<br>
<p>$(SRC1).o : $(SRC1).f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$(F77) $(FFLAGS) $(INCLUDE) -c $(SRC1).f
<br>
<p>So I am wondering if this is something that is an issue with the current
<br>
build of openMPI , if I am missing something or if it's my convoluted
<br>
environment. Attached is the source and makefile of what is above and then
<br>
my built .exe and a libgcc_s_sjlj-1.dll to run the .exe.
<br>
<p>Thank you for the help
<br>
<p><pre>
-- 
*AMorgan*

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18959/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/rar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18959/mpi_hello.rar">mpi_hello.rar</a>
</ul>
<!-- attachment="mpi_hello.rar" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18960.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Barrier (Inter-communicator)"</a>
<li><strong>Previous message:</strong> <a href="18958.php">Reuti: "Re: [OMPI users] sge tight intregration leads to bad allocation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18961.php">Anton Morgan: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<li><strong>Reply:</strong> <a href="18961.php">Anton Morgan: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
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
