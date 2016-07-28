<?
$subject_val = "[OMPI users] mpi_comm_spawn have problems with group communicators";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct  3 20:40:44 2010" -->
<!-- isoreceived="20101004004044" -->
<!-- sent="Mon, 4 Oct 2010 02:40:38 +0200" -->
<!-- isosent="20101004004038" -->
<!-- name="Milan Hodoscek" -->
<!-- email="milan_at_[hidden]" -->
<!-- subject="[OMPI users] mpi_comm_spawn have problems with group communicators" -->
<!-- id="19625.8838.995453.461991_at_ala.cmm.ki.si" -->
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
<strong>Subject:</strong> [OMPI users] mpi_comm_spawn have problems with group communicators<br>
<strong>From:</strong> Milan Hodoscek (<em>milan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-03 20:40:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14371.php">Chris Jewell: "[OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14369.php">Reuti: "Re: [OMPI users] STDIN"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14373.php">Ralph Castain: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<li><strong>Reply:</strong> <a href="14373.php">Ralph Castain: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am a long time happy user of mpi_comm_spawn() routine. But so far I
<br>
used it only with the MPI_COMM_WORLD communicator. Now I want to
<br>
execute more mpi_comm_spawn() routines, by creating and using group
<br>
communicators. However this seems to have some problems. I can get it
<br>
to run about 50% times on my laptop, but on some more &quot;speedy&quot;
<br>
machines it just produces the following message:
<br>
<p>$ mpirun -n 4 a.out
<br>
[ala:31406] [[45304,0],0] ORTE_ERROR_LOG: Not found in file base/plm_base_launch_support.c at line 758
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to start the specified application as it encountered an error.
<br>
More information may be available above.
<br>
--------------------------------------------------------------------------
<br>
<p>I am attaching the 2 programs needed to test the behavior. Compile:
<br>
$ mpif90 -o sps sps.f08 # spawned program
<br>
$ mpif90 mspbug.f08     # program with problems
<br>
$ mpirun -n 4 a.out
<br>
<p>The compiler is gfortran-4.4.4, and openmpi is 1.4.2.
<br>
<p>Needless to say it runs with mpich2, but mpich2 doesn't know how to
<br>
deal with stdin on a spawned process, so it's useless for my project :-(
<br>
<p>Any ideas?
<br>
<p>-------------------------------------------------
<br>
program sps
<br>
&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;integer :: ier,nproc,me,pcomm,meroot,mi,on
<br>
&nbsp;&nbsp;integer, dimension(1:10) :: num
<br>
<p>&nbsp;&nbsp;call mpi_init(ier)
<br>
<p>&nbsp;&nbsp;mi=mpi_integer
<br>
&nbsp;&nbsp;call mpi_comm_rank(mpi_comm_world,me,ier)
<br>
&nbsp;&nbsp;meroot=0
<br>
<p>&nbsp;&nbsp;on=1
<br>
<p>&nbsp;&nbsp;call mpi_comm_get_parent(pcomm,ier)
<br>
<p>&nbsp;&nbsp;call mpi_bcast(num,on,mi,meroot,pcomm,ier)
<br>
&nbsp;&nbsp;write(*,*)'sps&gt;me,num=',me,num(on)
<br>
<p>&nbsp;&nbsp;call mpi_finalize(ier)
<br>
<p>end program sps
<br>
-------------------------------------------------
<br>
<p>program groupspawn
<br>
<p>&nbsp;&nbsp;use mpi
<br>
<p>&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;! in the case use mpi does not work (eg Ubuntu) use the include below
<br>
&nbsp;&nbsp;! include 'mpif.h'
<br>
&nbsp;&nbsp;integer :: ier,intercom,nproc,meroot,info,mpierrs(1),mcw
<br>
&nbsp;&nbsp;integer :: i,myrepsiz,me,np,mcg,repdgrp,repdcom,on,mi,op
<br>
&nbsp;&nbsp;integer, dimension(1:10) :: myrepgrp
<br>
&nbsp;&nbsp;character(len=5) :: sarg(1),prog
<br>
&nbsp;&nbsp;integer, dimension(1:10) :: num,sm
<br>
&nbsp;&nbsp;integer :: newme,ngrp,igrp
<br>
<p>&nbsp;&nbsp;call mpi_init(ier)
<br>
<p>&nbsp;&nbsp;prog='sps'
<br>
&nbsp;&nbsp;sarg(1) = ''
<br>
&nbsp;&nbsp;nproc=2
<br>
&nbsp;&nbsp;on=1
<br>
&nbsp;&nbsp;meroot=0
<br>
&nbsp;&nbsp;mcw=mpi_comm_world
<br>
&nbsp;&nbsp;info=mpi_info_null
<br>
&nbsp;&nbsp;mi=mpi_integer
<br>
&nbsp;&nbsp;op=mpi_sum
<br>
&nbsp;&nbsp;mpierrs(1)=mpi_errcodes_ignore(1)
<br>
<p>&nbsp;&nbsp;call mpi_comm_rank(mcw,me,ier)
<br>
&nbsp;&nbsp;call mpi_comm_size(mcw,np,ier)
<br>
<p>&nbsp;&nbsp;ngrp=2  ! lets have some groups
<br>
&nbsp;&nbsp;myrepsiz=np/ngrp
<br>
&nbsp;&nbsp;igrp=me/myrepsiz
<br>
&nbsp;&nbsp;do i = 1, myrepsiz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;myrepgrp(i)=i+me-mod(me,myrepsiz)-1
<br>
&nbsp;&nbsp;enddo
<br>
<p>&nbsp;&nbsp;call mpi_comm_group(mcw,mcg,ier)
<br>
&nbsp;&nbsp;call mpi_group_incl(mcg,myrepsiz,myrepgrp,repdgrp,ier)
<br>
&nbsp;&nbsp;call mpi_comm_create(mcw,repdgrp,repdcom,ier)
<br>
<p>!  call mpi_comm_spawn(prog,sarg,nproc,info,meroot,mcw,intercom,mpierrs,ier)
<br>
&nbsp;&nbsp;call mpi_comm_spawn(prog,sarg,nproc,info,meroot,repdcom,intercom,mpierrs,ier)
<br>
<p>&nbsp;&nbsp;! send a number to spawned ones...
<br>
<p>&nbsp;&nbsp;call mpi_comm_rank(intercom,newme,ier)
<br>
&nbsp;&nbsp;write(*,*)'me,intercom,newme=',me,intercom,newme
<br>
&nbsp;&nbsp;num(1)=111*(igrp+1)
<br>
<p>&nbsp;&nbsp;meroot=mpi_proc_null
<br>
&nbsp;&nbsp;if(newme == 0) meroot=mpi_root ! to send data
<br>
<p>&nbsp;&nbsp;call mpi_bcast(num,on,mi,meroot,intercom,ier)
<br>
&nbsp;&nbsp;! sometimes there is no output from sps programs, so we wait here: WEIRD :-(
<br>
&nbsp;&nbsp;!call sleep(1)
<br>
<p>&nbsp;&nbsp;call mpi_finalize(ier)
<br>
<p>end program groupspawn
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14371.php">Chris Jewell: "[OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Previous message:</strong> <a href="14369.php">Reuti: "Re: [OMPI users] STDIN"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14373.php">Ralph Castain: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<li><strong>Reply:</strong> <a href="14373.php">Ralph Castain: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
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
