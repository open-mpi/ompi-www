<?
$subject_val = "Re: [OMPI users] Myid changes to 0 after using a mpi_recv";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  6 11:36:59 2012" -->
<!-- isoreceived="20120406153659" -->
<!-- sent="Fri, 6 Apr 2012 11:36:54 -0400" -->
<!-- isosent="20120406153654" -->
<!-- name="Anton Morgan" -->
<!-- email="amorgan.cartech_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Myid changes to 0 after using a mpi_recv" -->
<!-- id="CALC7YahraT0Q+QCsuGR1MW2o_NB6jmv9q4er=tRbZnev8ffE6g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="04F4CBF9-837A-4604-AB2D-73AF45FF8C44_at_cisco.com" -->
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
<strong>Date:</strong> 2012-04-06 11:36:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18966.php">toufik hadjazi: "[OMPI users] mpi_publish/lookup scope"</a>
<li><strong>Previous message:</strong> <a href="18964.php">Jeffrey Squyres: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<li><strong>In reply to:</strong> <a href="18964.php">Jeffrey Squyres: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18976.php">Shiqing Fan: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<li><strong>Reply:</strong> <a href="18976.php">Shiqing Fan: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the response. The output I receive is:
<br>
<p>mpirun -n 4 mpihello.exe
<br>
<p>Master says, Flag: 1 MyID: 0
<br>
Master says, Flag2: 2 MyID: 0
<br>
&nbsp;Slave:            1
<br>
&nbsp;Slave:            2
<br>
&nbsp;Slave:            3
<br>
Master says, Flag: 1 MyID: 0
<br>
Slave says, Flag: 1 MyID: 0
<br>
Slave says, Flag: 1 MyID: 0
<br>
Master says, Flag2: 2 MyID: 0
<br>
Slave says, Flag2: 0 MyID: 0
<br>
Slave says, Flag2: 0 MyID: 0
<br>
Master says, Flag: 1 MyID: 0
<br>
Slave says, Flag: 1 MyID: 0
<br>
Master says, Flag2: 2 MyID: 0
<br>
Slave says, Flag2: 0 MyID: 0
<br>
<p>So after the first mpi_rcv, the myid changes. This occurs on two Windows 7
<br>
64 bit machines. I compiled this on one machine, with the environment I
<br>
described previously and the other I just have OpenMPI installed and ran
<br>
the .exe using mpirun as shown above.
<br>
<p>And if I compile the same code with openMPI uninstalled, but using.
<br>
Microsoft MPI, it works as you would expect.
<br>
<p>-Amorgan
<br>
<p>On Fri, Apr 6, 2012 at 9:25 AM, Jeffrey Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The output from that program looks fine to me on Linux:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [6:25] svbu-mpi:~/mpi % mpirun -np 4 hello
</span><br>
<span class="quotelev1">&gt;  Slave:            1
</span><br>
<span class="quotelev1">&gt;  Slave:            2
</span><br>
<span class="quotelev1">&gt; Slave says, Flag: 1 MyID: 2
</span><br>
<span class="quotelev1">&gt; Slave says, Flag2: 2 MyID: 2
</span><br>
<span class="quotelev1">&gt;  Slave:            3
</span><br>
<span class="quotelev1">&gt; Slave says, Flag: 1 MyID: 3
</span><br>
<span class="quotelev1">&gt; Slave says, Flag2: 2 MyID: 3
</span><br>
<span class="quotelev1">&gt; Master says, Flag: 1 MyID: 0
</span><br>
<span class="quotelev1">&gt; Master says, Flag2: 2 MyID: 0
</span><br>
<span class="quotelev1">&gt; Master says, Flag: 1 MyID: 0
</span><br>
<span class="quotelev1">&gt; Master says, Flag2: 2 MyID: 0
</span><br>
<span class="quotelev1">&gt; Master says, Flag: 1 MyID: 0
</span><br>
<span class="quotelev1">&gt; Master says, Flag2: 2 MyID: 0
</span><br>
<span class="quotelev1">&gt; Slave says, Flag: 1 MyID: 1
</span><br>
<span class="quotelev1">&gt; Slave says, Flag2: 2 MyID: 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shiqing -- can you verify on Windows?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 5, 2012, at 6:15 PM, Anton Morgan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Some things to add. I installed Microsoft MPI and this issue did not
</span><br>
<span class="quotelev1">&gt; occur and gave me the correct rank/myid numbers when running this program.
</span><br>
<span class="quotelev1">&gt; So it seems something might be incorrect in Open MPI. I would still like to
</span><br>
<span class="quotelev1">&gt; use Open MPI, so I would like to help and see a resolution to this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also to add in the example Makefile. change pikaia to mpihello to make
</span><br>
<span class="quotelev1">&gt; correctly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Apr 5, 2012 at 3:39 PM, Anton Morgan &lt;amorgan.cartech_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; My setup is kinda convoluted unfortunately so this also might be an
</span><br>
<span class="quotelev1">&gt; issue, but just keep that in the back of your mind for now and assume that
</span><br>
<span class="quotelev1">&gt; is not the problem. I am using Windows 7 64-bit, with cygwin and compiling
</span><br>
<span class="quotelev1">&gt; using x86_64-w64-mingw32-gfortran and installed open MPI via
</span><br>
<span class="quotelev1">&gt; OpenMPI_v1.5.5-1_win64.exe. I have compiled and ran some mpi test programs
</span><br>
<span class="quotelev1">&gt; I made, but first time using the mpi_send and mpi_recv commands I ran into
</span><br>
<span class="quotelev1">&gt; this error, or what seems to be an error to me.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Back story: I am trying to run Parallel Pikaia, which is an open source
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Fortran Code:
</span><br>
<span class="quotelev2">&gt; &gt; c ----------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       program mpi_hello
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       implicit none
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       include 'mpif.h'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       integer ierr,myid,nproc,rc,flag,nrank,rank
</span><br>
<span class="quotelev2">&gt; &gt;       integer status(MPI_STATUS_SIZE), flag2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; c ----------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; c     Initialize MPI
</span><br>
<span class="quotelev2">&gt; &gt; c ----------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;       call mpi_init( ierr )
</span><br>
<span class="quotelev2">&gt; &gt;       call mpi_comm_rank( MPI_COMM_WORLD, myid, ierr )
</span><br>
<span class="quotelev2">&gt; &gt;       call mpi_comm_size( MPI_COMM_WORLD, nproc, ierr )
</span><br>
<span class="quotelev2">&gt; &gt;       nrank=nproc-1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; c ----------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; c Master portion
</span><br>
<span class="quotelev2">&gt; &gt; c ----------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;       if (myid.eq.0) then
</span><br>
<span class="quotelev2">&gt; &gt;          flag=1
</span><br>
<span class="quotelev2">&gt; &gt;          flag2=2
</span><br>
<span class="quotelev2">&gt; &gt; c send two integers to all slaves
</span><br>
<span class="quotelev2">&gt; &gt;          do rank=1,nrank
</span><br>
<span class="quotelev2">&gt; &gt;          call mpi_send( flag, 1, MPI_INTEGER, rank,
</span><br>
<span class="quotelev2">&gt; &gt;      +               1, MPI_COMM_WORLD, ierr )
</span><br>
<span class="quotelev2">&gt; &gt;          print 8, flag, myid
</span><br>
<span class="quotelev2">&gt; &gt;    8     format('Master says, Flag: ',i0.1, ' MyID: ', i0.1)
</span><br>
<span class="quotelev2">&gt; &gt;          call mpi_send( flag2, 1, MPI_INTEGER, rank,
</span><br>
<span class="quotelev2">&gt; &gt;      +               1, MPI_COMM_WORLD, ierr )
</span><br>
<span class="quotelev2">&gt; &gt;          print 10, flag2, myid
</span><br>
<span class="quotelev2">&gt; &gt;    10    format('Master says, Flag2: ',i0.1, ' MyID: ', i0.1)
</span><br>
<span class="quotelev2">&gt; &gt;          enddo
</span><br>
<span class="quotelev2">&gt; &gt; c ----------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; c Slave portion
</span><br>
<span class="quotelev2">&gt; &gt; c ----------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;       elseif (myid.ne.0) then
</span><br>
<span class="quotelev2">&gt; &gt; c to see ID before mpi_rcv
</span><br>
<span class="quotelev2">&gt; &gt;          print *, 'Slave: ', myid
</span><br>
<span class="quotelev2">&gt; &gt;          call mpi_recv( flag, 1, MPI_INTEGER, 0,
</span><br>
<span class="quotelev2">&gt; &gt;      +               1, MPI_COMM_WORLD, status, ierr )
</span><br>
<span class="quotelev2">&gt; &gt; c check myid after recv which turns to 0 on my environment
</span><br>
<span class="quotelev2">&gt; &gt;          print 9, flag, myid
</span><br>
<span class="quotelev2">&gt; &gt;    9     format('Slave says, Flag: ',i0.1, ' MyID: ', i0.1)
</span><br>
<span class="quotelev2">&gt; &gt;          call mpi_recv( flag2, 1, MPI_INTEGER, 0,
</span><br>
<span class="quotelev2">&gt; &gt;      +               1, MPI_COMM_WORLD, status, ierr )
</span><br>
<span class="quotelev2">&gt; &gt;          print 11, flag2, myid
</span><br>
<span class="quotelev2">&gt; &gt;    11    format('Slave says, Flag2: ',i0.1, ' MyID: ', i0.1)
</span><br>
<span class="quotelev2">&gt; &gt;       endif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;       call mpi_finalize(rc)
</span><br>
<span class="quotelev2">&gt; &gt;       stop
</span><br>
<span class="quotelev2">&gt; &gt;       end
</span><br>
<span class="quotelev2">&gt; &gt; c ----------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Simple makefile for my environment:
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; # MPI makefile
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; #INSTALL_DIR = ./
</span><br>
<span class="quotelev2">&gt; &gt; F77        = x86_64-w64-mingw32-gfortran
</span><br>
<span class="quotelev2">&gt; &gt; # Progra~2 because it is located in Program Files (x86)
</span><br>
<span class="quotelev2">&gt; &gt; LIB        = -L/cygdrive/c/Progra~2/OpenMPI_v1.5.5-x64/bin
</span><br>
<span class="quotelev2">&gt; &gt; INCLUDE    = -I/cygdrive/c/Progra~2/OpenMPI_v1.5.5-x64/include
</span><br>
<span class="quotelev2">&gt; &gt; FFLAGS    =
</span><br>
<span class="quotelev2">&gt; &gt; MAKE    = make
</span><br>
<span class="quotelev2">&gt; &gt; SHELL    = /bin/sh
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; ### End User configurable options ###
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; SRC1    = mpihello
</span><br>
<span class="quotelev2">&gt; &gt; OBJS    = $(SRC1).o
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; pikaia : $(OBJS)
</span><br>
<span class="quotelev2">&gt; &gt;     $(F77) $(FFLAGS) -o mpihello $(OBJS) $(LIB) -lmpi_f77
</span><br>
<span class="quotelev2">&gt; &gt; #    rm -f *.o
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $(SRC1).o : $(SRC1).f
</span><br>
<span class="quotelev2">&gt; &gt;     $(F77) $(FFLAGS) $(INCLUDE) -c $(SRC1).f
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So I am wondering if this is something that is an issue with the current
</span><br>
<span class="quotelev1">&gt; build of openMPI , if I am missing something or if it's my convoluted
</span><br>
<span class="quotelev1">&gt; environment. Attached is the source and makefile of what is above and then
</span><br>
<span class="quotelev1">&gt; my built .exe and a libgcc_s_sjlj-1.dll to run the .exe.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you for the help
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; AMorgan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
*AMorgan*
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18965/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18966.php">toufik hadjazi: "[OMPI users] mpi_publish/lookup scope"</a>
<li><strong>Previous message:</strong> <a href="18964.php">Jeffrey Squyres: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<li><strong>In reply to:</strong> <a href="18964.php">Jeffrey Squyres: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18976.php">Shiqing Fan: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
<li><strong>Reply:</strong> <a href="18976.php">Shiqing Fan: "Re: [OMPI users] Myid changes to 0 after using a mpi_recv"</a>
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
