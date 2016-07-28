<?
$subject_val = "[OMPI users] Problem with mpi_comm_spawn_multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  5 14:08:26 2010" -->
<!-- isoreceived="20100505180826" -->
<!-- sent="Wed, 05 May 2010 19:08:20 +0100" -->
<!-- isosent="20100505180820" -->
<!-- name="Fred Marquis" -->
<!-- email="a.marquis_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with mpi_comm_spawn_multiple" -->
<!-- id="20100505180814.GA30251_at_fred-T60" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Problem with mpi_comm_spawn_multiple<br>
<strong>From:</strong> Fred Marquis (<em>a.marquis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-05 14:08:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12909.php">Ralph Castain: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="12907.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12909.php">Ralph Castain: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="12909.php">Ralph Castain: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="12977.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;&nbsp;I am using mpi_comm_spawn_multiple to spawn multiple commands with argument lists. I am trying to do this in fortran (77) using version openmpi-1.4.1 and the ifort compiler v9.0. The operating system is SuSE Linux 10.1 (x86-64).
<br>
<p>I have put together a simple controlling example program (test_pbload.F) and an example slave program (spray.F) to try and explain my problem.
<br>
<p>In the controlling program mpi_comm_spawn_multiple is used to set 2 copies of the slave running. The first is started with the argument list &quot;1 2 3 4&quot; and the second with &quot;5 6 7 8&quot;.
<br>
<p>The slaves are started OK and the slaves print out the argument lists and exit. In addition the slaves print out their rank numbers so I can see which argument list belongs to which slave.
<br>
<p>What I am finding is that the argument lists are not being sent to the slaves correctly, indeed both slaves seem to be getting both arguments lists !!!
<br>
<p>To compile and run the programs I follow the steps below.
<br>
<p>Controlling program &quot;test_pbload.F&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;mpif77 -o test_pbload test_pbload.F
<br>
<p>Slave program &quot;spray.F&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;mpif77 -o spray spray.F
<br>
<p>Run the controller
<br>
<p>&nbsp;&nbsp;&nbsp;mpirun -np 1 test_pbload
<br>
<p><p><p><p>The output of which is from the first slave:
<br>
<p>&nbsp;nsize, mytid: iargs           2           0 :           2
<br>
&nbsp;spray:   0 1:1 2 3 4   &lt; FIRST ARGUMENT           
<br>
&nbsp;spray:   0 2:4 5 6 7   &lt; SECOND ARGUMENT             
<br>
<p>&nbsp;and the second slave:
<br>
<p>&nbsp;nsize, mytid: iargs           2           1 :           2
<br>
&nbsp;spray:   1 1:1 2 3 4   &lt; FIRST ARGUMENT             
<br>
&nbsp;spray:   1 2:4 5 6 7   &lt; SECOND ARGUMENT  
<br>
<p>In each case the arguments (2 in both cases) are the same.
<br>
<p>I have written a C version of the controlling program and everthing works as expected so I presume that I have either got the specification of the argument list wrong or I have discovered an error/bug. At the moment I working on the former -- but am at a loss to see what is wrong !!
<br>
<p>Any help, pointers etc really appreciated.
<br>
<p><p>Controlling program (that uses MPI_COMM_SPAWN_MULTIPLE) test_pbload.F
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program main
<br>
c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
#include &quot;mpif.h&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer error
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer intercomm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CHARACTER*25 commands(2), argvs(2, 2) 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer nprocs(2),info(2),ncpus
<br>
c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_init(error)
<br>
c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ncpus = 2
<br>
c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;commands(1) = ' ./spray ' 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nprocs(1) = 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;info(1) = MPI_INFO_NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;argvs(1, 1) = ' 1 2 3 4 '
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;argvs(1, 2) = ' ' 
<br>
c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;commands(2) = ' ./spray ' 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nprocs(2) = 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;info(2) = MPI_INFO_NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;argvs(2, 1) = ' 4 5 6 7 ' 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;argvs(2, 2) = ' ' 
<br>
c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_comm_spawn_multiple( ncpus,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1      commands, argvs, nprocs, info,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2      0, MPI_COMM_WORLD, intercomm, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3      MPI_ERRCODES_IGNORE, error )
<br>
c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_finalize(error)
<br>
c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
<p>Slave program (started by the controlling program) spray.F
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program main
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer error
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer pid
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;character*20 line(100)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_init(error)
<br>
c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_COMM_SIZE(MPI_COMM_WORLD,NSIZE,error)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_COMM_RANK(MPI_COMM_WORLD,MYTID,error)
<br>
c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iargs=iargc()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'nsize, mytid: iargs', nsize, mytid, &quot;:&quot;, iargs
<br>
c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if( iargs.gt.0 ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do i = 1, iargs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call getarg(i,line(i))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,'(1x,a,i3,20(i2,1h:,a))') 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1       'spray: ',mytid,i,line(i)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enddo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_finalize(error)
<br>
c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12909.php">Ralph Castain: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="12907.php">Gus Correa: "Re: [OMPI users] How do I run OpenMPI safely on	a	Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12909.php">Ralph Castain: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="12909.php">Ralph Castain: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="12977.php">Jeff Squyres: "Re: [OMPI users] Problem with mpi_comm_spawn_multiple"</a>
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
