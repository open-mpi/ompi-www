<?
$subject_val = "Re: [OMPI users] Myid changes to 0 after using a mpi_recv";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  6 09:26:02 2012" -->
<!-- isoreceived="20120406132602" -->
<!-- sent="Fri, 6 Apr 2012 09:25:57 -0400" -->
<!-- isosent="20120406132557" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Myid changes to 0 after using a mpi_recv" -->
<!-- id="04F4CBF9-837A-4604-AB2D-73AF45FF8C44_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CALC7YaiAui6LB3au36qea2te6_uSt9ML60obmJt6B2_S=bjMNQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-06 09:25:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18965.php">Anton Morgan: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<li><strong>Previous message:</strong> <a href="18963.php">Mathieu westphal: "Re: [OMPI users] &quot;Partial&quot; Reduce and overlapping communicator"</a>
<li><strong>In reply to:</strong> <a href="18961.php">Anton Morgan: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18965.php">Anton Morgan: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<li><strong>Reply:</strong> <a href="18965.php">Anton Morgan: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The output from that program looks fine to me on Linux:
<br>
<p>[6:25] svbu-mpi:~/mpi % mpirun -np 4 hello
<br>
&nbsp;Slave:            1
<br>
&nbsp;Slave:            2
<br>
Slave says, Flag: 1 MyID: 2
<br>
Slave says, Flag2: 2 MyID: 2
<br>
&nbsp;Slave:            3
<br>
Slave says, Flag: 1 MyID: 3
<br>
Slave says, Flag2: 2 MyID: 3
<br>
Master says, Flag: 1 MyID: 0
<br>
Master says, Flag2: 2 MyID: 0
<br>
Master says, Flag: 1 MyID: 0
<br>
Master says, Flag2: 2 MyID: 0
<br>
Master says, Flag: 1 MyID: 0
<br>
Master says, Flag2: 2 MyID: 0
<br>
Slave says, Flag: 1 MyID: 1
<br>
Slave says, Flag2: 2 MyID: 1
<br>
<p>Shiqing -- can you verify on Windows?
<br>
<p><p>On Apr 5, 2012, at 6:15 PM, Anton Morgan wrote:
<br>
<p><span class="quotelev1">&gt; Some things to add. I installed Microsoft MPI and this issue did not occur and gave me the correct rank/myid numbers when running this program. So it seems something might be incorrect in Open MPI. I would still like to use Open MPI, so I would like to help and see a resolution to this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also to add in the example Makefile. change pikaia to mpihello to make correctly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Apr 5, 2012 at 3:39 PM, Anton Morgan &lt;amorgan.cartech_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; My setup is kinda convoluted unfortunately so this also might be an issue, but just keep that in the back of your mind for now and assume that is not the problem. I am using Windows 7 64-bit, with cygwin and compiling using x86_64-w64-mingw32-gfortran and installed open MPI via OpenMPI_v1.5.5-1_win64.exe. I have compiled and ran some mpi test programs I made, but first time using the mpi_send and mpi_recv commands I ran into this error, or what seems to be an error to me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Back story: I am trying to run Parallel Pikaia, which is an open source Genetics Algorithm in Fortran that uses MPI. It should run out of the box fine, but it does run all processes properly. So I started to troubleshoot and found that after the first mpi_recv command on the slaves, the myid changes to 0, but right before the command it is the appropriate myid/rank. So I made a simple fortran code to test if it was Pikaia or MPI and it shows to be MPI.
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
<span class="quotelev1">&gt; So I am wondering if this is something that is an issue with the current build of openMPI , if I am missing something or if it's my convoluted environment. Attached is the source and makefile of what is above and then my built .exe and a libgcc_s_sjlj-1.dll to run the .exe.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for the help
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; AMorgan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Anton Morgan
</span><br>
<span class="quotelev1">&gt; CAR Technologies LLC
</span><br>
<span class="quotelev1">&gt; amorgan.cartech_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 1305 Kinnear Rd.
</span><br>
<span class="quotelev1">&gt; Columbus, Oh 43212
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18965.php">Anton Morgan: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<li><strong>Previous message:</strong> <a href="18963.php">Mathieu westphal: "Re: [OMPI users] &quot;Partial&quot; Reduce and overlapping communicator"</a>
<li><strong>In reply to:</strong> <a href="18961.php">Anton Morgan: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18965.php">Anton Morgan: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<li><strong>Reply:</strong> <a href="18965.php">Anton Morgan: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
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
