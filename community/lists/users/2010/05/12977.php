<?
$subject_val = "Re: [OMPI users] Problem with mpi_comm_spawn_multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  7 17:02:53 2010" -->
<!-- isoreceived="20100507210253" -->
<!-- sent="Fri, 7 May 2010 17:02:48 -0400" -->
<!-- isosent="20100507210248" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with mpi_comm_spawn_multiple" -->
<!-- id="E65F094E-A8D6-4321-9216-554B4B088015_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100505180814.GA30251_at_fred-T60" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with mpi_comm_spawn_multiple<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-07 17:02:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12978.php">Cristobal Navarro: "Re: [OMPI users] communicate C++ STL strucutures ??"</a>
<li><strong>Previous message:</strong> <a href="12976.php">Secretan Yves: "[OMPI users] MPI_FILE_SET_ERRHANDLER returns an error with MPI_FILE_NULL"</a>
<li><strong>In reply to:</strong> <a href="12908.php">Fred Marquis: "[OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12979.php">Andrew J Marquis: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="12979.php">Andrew J Marquis: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings Fred.
<br>
<p>After looking at this for more hours than I'd care to admit, I'm wondering if this is a bug in gfortran.  I can replicate your problem with a simple program on gfortran 4.1 on RHEL 5.4, but it doesn't happen with the Intel Fortran compiler (11.1) or the PGI fortran compiler (10.0).
<br>
<p>One of the issues appears how to determine how Fortran 2d CHARACTER arrays are terminated.  I can't figure out how gfortran is terminating them -- but intel and PGI both terminate them by having an empty string at the end.
<br>
<p>Are you using gfortran 4.1, perchance?
<br>
<p><p><p><p>On May 5, 2010, at 2:08 PM, Fred Marquis wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   I am using mpi_comm_spawn_multiple to spawn multiple commands with argument lists. I am trying to do this in fortran (77) using version openmpi-1.4.1 and the ifort compiler v9.0. The operating system is SuSE Linux 10.1 (x86-64).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have put together a simple controlling example program (test_pbload.F) and an example slave program (spray.F) to try and explain my problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the controlling program mpi_comm_spawn_multiple is used to set 2 copies of the slave running. The first is started with the argument list &quot;1 2 3 4&quot; and the second with &quot;5 6 7 8&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The slaves are started OK and the slaves print out the argument lists and exit. In addition the slaves print out their rank numbers so I can see which argument list belongs to which slave.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I am finding is that the argument lists are not being sent to the slaves correctly, indeed both slaves seem to be getting both arguments lists !!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To compile and run the programs I follow the steps below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Controlling program &quot;test_pbload.F&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    mpif77 -o test_pbload test_pbload.F
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Slave program &quot;spray.F&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    mpif77 -o spray spray.F
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Run the controller
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    mpirun -np 1 test_pbload
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The output of which is from the first slave:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  nsize, mytid: iargs           2           0 :           2
</span><br>
<span class="quotelev1">&gt;  spray:   0 1:1 2 3 4   &lt; FIRST ARGUMENT          
</span><br>
<span class="quotelev1">&gt;  spray:   0 2:4 5 6 7   &lt; SECOND ARGUMENT            
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  and the second slave:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  nsize, mytid: iargs           2           1 :           2
</span><br>
<span class="quotelev1">&gt;  spray:   1 1:1 2 3 4   &lt; FIRST ARGUMENT            
</span><br>
<span class="quotelev1">&gt;  spray:   1 2:4 5 6 7   &lt; SECOND ARGUMENT 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In each case the arguments (2 in both cases) are the same.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have written a C version of the controlling program and everthing works as expected so I presume that I have either got the specification of the argument list wrong or I have discovered an error/bug. At the moment I working on the former -- but am at a loss to see what is wrong !!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help, pointers etc really appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Controlling program (that uses MPI_COMM_SPAWN_MULTIPLE) test_pbload.F
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       program main
</span><br>
<span class="quotelev1">&gt; c
</span><br>
<span class="quotelev1">&gt;       implicit none
</span><br>
<span class="quotelev1">&gt; #include &quot;mpif.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       integer error
</span><br>
<span class="quotelev1">&gt;       integer intercomm
</span><br>
<span class="quotelev1">&gt;       CHARACTER*25 commands(2), argvs(2, 2)
</span><br>
<span class="quotelev1">&gt;       integer nprocs(2),info(2),ncpus
</span><br>
<span class="quotelev1">&gt; c
</span><br>
<span class="quotelev1">&gt;       call mpi_init(error)
</span><br>
<span class="quotelev1">&gt; c
</span><br>
<span class="quotelev1">&gt;        ncpus = 2
</span><br>
<span class="quotelev1">&gt; c
</span><br>
<span class="quotelev1">&gt;        commands(1) = ' ./spray '
</span><br>
<span class="quotelev1">&gt;        nprocs(1) = 1
</span><br>
<span class="quotelev1">&gt;        info(1) = MPI_INFO_NULL
</span><br>
<span class="quotelev1">&gt;        argvs(1, 1) = ' 1 2 3 4 '
</span><br>
<span class="quotelev1">&gt;        argvs(1, 2) = ' '
</span><br>
<span class="quotelev1">&gt; c
</span><br>
<span class="quotelev1">&gt;        commands(2) = ' ./spray '
</span><br>
<span class="quotelev1">&gt;        nprocs(2) = 1
</span><br>
<span class="quotelev1">&gt;        info(2) = MPI_INFO_NULL
</span><br>
<span class="quotelev1">&gt;        argvs(2, 1) = ' 4 5 6 7 '
</span><br>
<span class="quotelev1">&gt;        argvs(2, 2) = ' '
</span><br>
<span class="quotelev1">&gt; c
</span><br>
<span class="quotelev1">&gt;       call mpi_comm_spawn_multiple( ncpus,
</span><br>
<span class="quotelev1">&gt;      1      commands, argvs, nprocs, info,
</span><br>
<span class="quotelev1">&gt;      2      0, MPI_COMM_WORLD, intercomm,
</span><br>
<span class="quotelev1">&gt;      3      MPI_ERRCODES_IGNORE, error )
</span><br>
<span class="quotelev1">&gt; c
</span><br>
<span class="quotelev1">&gt;       call mpi_finalize(error)
</span><br>
<span class="quotelev1">&gt; c
</span><br>
<span class="quotelev1">&gt;       end
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Slave program (started by the controlling program) spray.F
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       program main
</span><br>
<span class="quotelev1">&gt;       integer error
</span><br>
<span class="quotelev1">&gt;       integer pid
</span><br>
<span class="quotelev1">&gt;       character*20 line(100)
</span><br>
<span class="quotelev1">&gt;       call mpi_init(error)
</span><br>
<span class="quotelev1">&gt; c
</span><br>
<span class="quotelev1">&gt;       CALL MPI_COMM_SIZE(MPI_COMM_WORLD,NSIZE,error)
</span><br>
<span class="quotelev1">&gt;       CALL MPI_COMM_RANK(MPI_COMM_WORLD,MYTID,error)
</span><br>
<span class="quotelev1">&gt; c
</span><br>
<span class="quotelev1">&gt;       iargs=iargc()
</span><br>
<span class="quotelev1">&gt;       write(*,*) 'nsize, mytid: iargs', nsize, mytid, &quot;:&quot;, iargs
</span><br>
<span class="quotelev1">&gt; c
</span><br>
<span class="quotelev1">&gt;       if( iargs.gt.0 ) then
</span><br>
<span class="quotelev1">&gt;          do i = 1, iargs
</span><br>
<span class="quotelev1">&gt;             call getarg(i,line(i))
</span><br>
<span class="quotelev1">&gt;             write(*,'(1x,a,i3,20(i2,1h:,a))')
</span><br>
<span class="quotelev1">&gt;      1       'spray: ',mytid,i,line(i)
</span><br>
<span class="quotelev1">&gt;          enddo
</span><br>
<span class="quotelev1">&gt;       endif
</span><br>
<span class="quotelev1">&gt; c
</span><br>
<span class="quotelev1">&gt;       call mpi_finalize(error)
</span><br>
<span class="quotelev1">&gt; c
</span><br>
<span class="quotelev1">&gt;       end
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12978.php">Cristobal Navarro: "Re: [OMPI users] communicate C++ STL strucutures ??"</a>
<li><strong>Previous message:</strong> <a href="12976.php">Secretan Yves: "[OMPI users] MPI_FILE_SET_ERRHANDLER returns an error with MPI_FILE_NULL"</a>
<li><strong>In reply to:</strong> <a href="12908.php">Fred Marquis: "[OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12979.php">Andrew J Marquis: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="12979.php">Andrew J Marquis: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
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
