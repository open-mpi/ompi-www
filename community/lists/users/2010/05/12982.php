<?
$subject_val = "Re: [OMPI users] Problem with mpi_comm_spawn_multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  7 18:08:49 2010" -->
<!-- isoreceived="20100507220849" -->
<!-- sent="Fri, 7 May 2010 23:08:42 +0100" -->
<!-- isosent="20100507220842" -->
<!-- name="Andrew J Marquis" -->
<!-- email="a.marquis_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with mpi_comm_spawn_multiple" -->
<!-- id="20100507220842.GA2598_at_mefred01.me.ic.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FE5F6988-71A5-42EA-BE72-98B29F22A051_at_cisco.com" -->
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
<strong>From:</strong> Andrew J Marquis (<em>a.marquis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-07 18:08:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12983.php">Noam Bernstein: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="12981.php">Andrew J Marquis: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="12980.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12983.php">Noam Bernstein: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff,
<br>
<p>&nbsp;&nbsp;following the failure I just reported I changed the CC=icc to CC=cc and reran and got this:
<br>
<p>fred_at_prandtl:~/test/fortran-c-2d-char&gt; make CC=cc FC=ifort
<br>
cc -g   -c -o c_func.o c_func.c
<br>
ifort -g main.o c_func.o -g -o main
<br>
fred_at_prandtl:~/test/fortran-c-2d-char&gt; ./main 
<br>
Got leading dimension: 2
<br>
Got string len: 14
<br>
Found string: 1 2 3 4
<br>
Found string: 4 5 6 7
<br>
Found string: hello
<br>
Found string: goodbye
<br>
Found string: helloagain
<br>
Found string: goodbyeagain
<br>
End of the array -- found 6 entries
<br>
<p><p><p>Fred Marquis.
<br>
<p><p>On Fri, May 07, 2010 at 10:49:40PM +0100, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Yoinks; I missed that -- sorry!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's a simple tarball; can you try this with your compiler?  Just untar it and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   make CC=icc FC=ifort
</span><br>
<span class="quotelev1">&gt;   ./main
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you see only 6 entries in the array?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (I have icc 9.0, but I'm now running RHEL 5.4, and the gcc version with it is too new for icc 9.0 -- so I can't run it)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 7, 2010, at 5:44 PM, Andrew J Marquis wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Dear Jeff,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    am afraid not, as I said in my original post I am using the Intel ifort compiler version 9.0, i.e.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; fred_at_prandtl:~&gt;  mpif77 -V
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Intel(R) Fortran Compiler for Intel(R) EM64T-based applications, Version 9.0    Build 20060222 Package ID: &lt;installpackageid&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Copyright (C) 1985-2006 Intel Corporation.  All rights reserved.
</span><br>
<span class="quotelev2">&gt; &gt; FOR NON-COMMERCIAL USE ONLY
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have been looking at this myself and have noted a couple of things, some of these need cross-checking (I am using different computers and different setups and different compilers and different openmpi releases !!!!!!)  but my thoughts at the moment are (point number (4) is possibly the most important so far):
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1) If I allocate the string array using an allocate statement then I see that ALL of the string locations are initialised to &quot;\0&quot; (character 0).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 2) If I set part of a location in the string array then all the OTHER characters in the same location are set to &quot; &quot; (character 32).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 3) If the character array is defined via a dimension statement then the locations in the array seem to be initialised at random.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 4) Looking at the output from my test program I noticed and odd pattern in the arguments being sent to the slaves (yes I do need to quantify this better !!). However this caused me to look at the ompi source, in particular I am looking at:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    openmpi-1.4.1/ompi/mpi/f77/base/strings.c
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; In particular at the bottom (line 156( in function &quot;ompi_fortran_multiple_argvs_f2c&quot; at the end of the for statement there is the line:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    current_array += len * i;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The &quot;* i&quot; looks wrong to me I am thinking it should just be:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    current_array += len;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; making this change improves things BUT like you suggest in your email there seems to be a problem locating the end of the 2d-array elements.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I will try and look at this more over the w/e.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Fred Marquis.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, May 07, 2010 at 10:02:48PM +0100, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Greetings Fred.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; After looking at this for more hours than I'd care to admit, I'm wondering if this is a bug in gfortran.  I can replicate your problem with a simple program on gfortran 4.1 on RHEL 5.4, but it doesn't happen with the Intel Fortran compiler (11.1) or the PGI fortran compiler (10.0).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; One of the issues appears how to determine how Fortran 2d CHARACTER arrays are terminated.  I can't figure out how gfortran is terminating them -- but intel and PGI both terminate them by having an empty string at the end.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Are you using gfortran 4.1, perchance?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On May 5, 2010, at 2:08 PM, Fred Marquis wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   I am using mpi_comm_spawn_multiple to spawn multiple commands with argument lists. I am trying to do this in fortran (77) using version openmpi-1.4.1 and the ifort compiler v9.0. The operating system is SuSE Linux 10.1 (x86-64).
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I have put together a simple controlling example program (test_pbload.F) and an example slave program (spray.F) to try and explain my problem.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; In the controlling program mpi_comm_spawn_multiple is used to set 2 copies of the slave running. The first is started with the argument list &quot;1 2 3 4&quot; and the second with &quot;5 6 7 8&quot;.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The slaves are started OK and the slaves print out the argument lists and exit. In addition the slaves print out their rank numbers so I can see which argument list belongs to which slave.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; What I am finding is that the argument lists are not being sent to the slaves correctly, indeed both slaves seem to be getting both arguments lists !!!
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; To compile and run the programs I follow the steps below.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Controlling program &quot;test_pbload.F&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    mpif77 -o test_pbload test_pbload.F
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Slave program &quot;spray.F&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    mpif77 -o spray spray.F
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Run the controller
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    mpirun -np 1 test_pbload
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The output of which is from the first slave:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  nsize, mytid: iargs           2           0 :           2
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  spray:   0 1:1 2 3 4   &lt; FIRST ARGUMENT         
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  spray:   0 2:4 5 6 7   &lt; SECOND ARGUMENT           
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  and the second slave:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  nsize, mytid: iargs           2           1 :           2
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  spray:   1 1:1 2 3 4   &lt; FIRST ARGUMENT           
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;  spray:   1 2:4 5 6 7   &lt; SECOND ARGUMENT
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; In each case the arguments (2 in both cases) are the same.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I have written a C version of the controlling program and everthing works as expected so I presume that I have either got the specification of the argument list wrong or I have discovered an error/bug. At the moment I working on the former -- but am at a loss to see what is wrong !!
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Any help, pointers etc really appreciated.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Controlling program (that uses MPI_COMM_SPAWN_MULTIPLE) test_pbload.F
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       program main
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; c
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       implicit none
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; #include &quot;mpif.h&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       integer error
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       integer intercomm
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       CHARACTER*25 commands(2), argvs(2, 2)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       integer nprocs(2),info(2),ncpus
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; c
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       call mpi_init(error)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; c
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        ncpus = 2
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; c
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        commands(1) = ' ./spray '
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        nprocs(1) = 1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        info(1) = MPI_INFO_NULL
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        argvs(1, 1) = ' 1 2 3 4 '
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        argvs(1, 2) = ' '
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; c
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        commands(2) = ' ./spray '
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        nprocs(2) = 1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        info(2) = MPI_INFO_NULL
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        argvs(2, 1) = ' 4 5 6 7 '
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        argvs(2, 2) = ' '
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; c
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       call mpi_comm_spawn_multiple( ncpus,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      1      commands, argvs, nprocs, info,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      2      0, MPI_COMM_WORLD, intercomm,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      3      MPI_ERRCODES_IGNORE, error )
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; c
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       call mpi_finalize(error)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; c
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       end
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Slave program (started by the controlling program) spray.F
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       program main
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       integer error
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       integer pid
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       character*20 line(100)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       call mpi_init(error)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; c
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       CALL MPI_COMM_SIZE(MPI_COMM_WORLD,NSIZE,error)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       CALL MPI_COMM_RANK(MPI_COMM_WORLD,MYTID,error)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; c
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       iargs=iargc()
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       write(*,*) 'nsize, mytid: iargs', nsize, mytid, &quot;:&quot;, iargs
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; c
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       if( iargs.gt.0 ) then
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;          do i = 1, iargs
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;             call getarg(i,line(i))
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;             write(*,'(1x,a,i3,20(i2,1h:,a))')
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      1       'spray: ',mytid,i,line(i)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;          enddo
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       endif
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; c
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       call mpi_finalize(error)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; c
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;       end
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt;    ----------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;    Dr. A.J. Marquis       Tel:      +44 (0)20 7594 7040
</span><br>
<span class="quotelev2">&gt; &gt;    Dept. of Mech. Eng.    Fax:      +44 (0)20 7594 1472
</span><br>
<span class="quotelev2">&gt; &gt;    Imperial College
</span><br>
<span class="quotelev2">&gt; &gt;    Exhibition Road        E-Mail:   a.marquis_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;    London   SW7 2AZ
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    BOFH: Maintence window broken
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    All views expressed are my own !
</span><br>
<span class="quotelev2">&gt; &gt;    ----------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
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
<p><p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
   ----------------------------------------------------------
   Dr. A.J. Marquis       Tel:      +44 (0)20 7594 7040
   Dept. of Mech. Eng.    Fax:      +44 (0)20 7594 1472
   Imperial College
   Exhibition Road        E-Mail:   a.marquis_at_[hidden]
   London   SW7 2AZ
   BOFH: Maintence window broken
   All views expressed are my own !
   ----------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12983.php">Noam Bernstein: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="12981.php">Andrew J Marquis: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="12980.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12983.php">Noam Bernstein: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
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
