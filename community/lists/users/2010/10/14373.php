<?
$subject_val = "Re: [OMPI users] mpi_comm_spawn have problems with group communicators";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  4 09:51:30 2010" -->
<!-- isoreceived="20101004135130" -->
<!-- sent="Mon, 4 Oct 2010 07:51:20 -0600" -->
<!-- isosent="20101004135120" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_comm_spawn have problems with group communicators" -->
<!-- id="8EFE65FC-76D2-4882-8893-0AA8612574C3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="19625.8838.995453.461991_at_ala.cmm.ki.si" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_comm_spawn have problems with group communicators<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-04 09:51:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14374.php">Barrett, Brian W: "Re: [OMPI users] Granular locks?"</a>
<li><strong>Previous message:</strong> <a href="14372.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14370.php">Milan Hodoscek: "[OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14379.php">Milan Hodoscek: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<li><strong>Reply:</strong> <a href="14379.php">Milan Hodoscek: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure why the group communicator would make a difference - the code area in question knows nothing about the mpi aspects of the job. It looks like you are hitting a race condition that causes a particular internal recv to not exist when we subsequently try to cancel it, which generates that error message.
<br>
<p>How did you configure OMPI?
<br>
<p><p>On Oct 3, 2010, at 6:40 PM, Milan Hodoscek wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am a long time happy user of mpi_comm_spawn() routine. But so far I
</span><br>
<span class="quotelev1">&gt; used it only with the MPI_COMM_WORLD communicator. Now I want to
</span><br>
<span class="quotelev1">&gt; execute more mpi_comm_spawn() routines, by creating and using group
</span><br>
<span class="quotelev1">&gt; communicators. However this seems to have some problems. I can get it
</span><br>
<span class="quotelev1">&gt; to run about 50% times on my laptop, but on some more &quot;speedy&quot;
</span><br>
<span class="quotelev1">&gt; machines it just produces the following message:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -n 4 a.out
</span><br>
<span class="quotelev1">&gt; [ala:31406] [[45304,0],0] ORTE_ERROR_LOG: Not found in file base/plm_base_launch_support.c at line 758
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to start the specified application as it encountered an error.
</span><br>
<span class="quotelev1">&gt; More information may be available above.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am attaching the 2 programs needed to test the behavior. Compile:
</span><br>
<span class="quotelev1">&gt; $ mpif90 -o sps sps.f08 # spawned program
</span><br>
<span class="quotelev1">&gt; $ mpif90 mspbug.f08     # program with problems
</span><br>
<span class="quotelev1">&gt; $ mpirun -n 4 a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The compiler is gfortran-4.4.4, and openmpi is 1.4.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Needless to say it runs with mpich2, but mpich2 doesn't know how to
</span><br>
<span class="quotelev1">&gt; deal with stdin on a spawned process, so it's useless for my project :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------
</span><br>
<span class="quotelev1">&gt; program sps
</span><br>
<span class="quotelev1">&gt;  use mpi
</span><br>
<span class="quotelev1">&gt;  implicit none
</span><br>
<span class="quotelev1">&gt;  integer :: ier,nproc,me,pcomm,meroot,mi,on
</span><br>
<span class="quotelev1">&gt;  integer, dimension(1:10) :: num
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  call mpi_init(ier)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  mi=mpi_integer
</span><br>
<span class="quotelev1">&gt;  call mpi_comm_rank(mpi_comm_world,me,ier)
</span><br>
<span class="quotelev1">&gt;  meroot=0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  on=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  call mpi_comm_get_parent(pcomm,ier)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  call mpi_bcast(num,on,mi,meroot,pcomm,ier)
</span><br>
<span class="quotelev1">&gt;  write(*,*)'sps&gt;me,num=',me,num(on)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  call mpi_finalize(ier)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; end program sps
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; program groupspawn
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  use mpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  implicit none
</span><br>
<span class="quotelev1">&gt;  ! in the case use mpi does not work (eg Ubuntu) use the include below
</span><br>
<span class="quotelev1">&gt;  ! include 'mpif.h'
</span><br>
<span class="quotelev1">&gt;  integer :: ier,intercom,nproc,meroot,info,mpierrs(1),mcw
</span><br>
<span class="quotelev1">&gt;  integer :: i,myrepsiz,me,np,mcg,repdgrp,repdcom,on,mi,op
</span><br>
<span class="quotelev1">&gt;  integer, dimension(1:10) :: myrepgrp
</span><br>
<span class="quotelev1">&gt;  character(len=5) :: sarg(1),prog
</span><br>
<span class="quotelev1">&gt;  integer, dimension(1:10) :: num,sm
</span><br>
<span class="quotelev1">&gt;  integer :: newme,ngrp,igrp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  call mpi_init(ier)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  prog='sps'
</span><br>
<span class="quotelev1">&gt;  sarg(1) = ''
</span><br>
<span class="quotelev1">&gt;  nproc=2
</span><br>
<span class="quotelev1">&gt;  on=1
</span><br>
<span class="quotelev1">&gt;  meroot=0
</span><br>
<span class="quotelev1">&gt;  mcw=mpi_comm_world
</span><br>
<span class="quotelev1">&gt;  info=mpi_info_null
</span><br>
<span class="quotelev1">&gt;  mi=mpi_integer
</span><br>
<span class="quotelev1">&gt;  op=mpi_sum
</span><br>
<span class="quotelev1">&gt;  mpierrs(1)=mpi_errcodes_ignore(1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  call mpi_comm_rank(mcw,me,ier)
</span><br>
<span class="quotelev1">&gt;  call mpi_comm_size(mcw,np,ier)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ngrp=2  ! lets have some groups
</span><br>
<span class="quotelev1">&gt;  myrepsiz=np/ngrp
</span><br>
<span class="quotelev1">&gt;  igrp=me/myrepsiz
</span><br>
<span class="quotelev1">&gt;  do i = 1, myrepsiz
</span><br>
<span class="quotelev1">&gt;        myrepgrp(i)=i+me-mod(me,myrepsiz)-1
</span><br>
<span class="quotelev1">&gt;  enddo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  call mpi_comm_group(mcw,mcg,ier)
</span><br>
<span class="quotelev1">&gt;  call mpi_group_incl(mcg,myrepsiz,myrepgrp,repdgrp,ier)
</span><br>
<span class="quotelev1">&gt;  call mpi_comm_create(mcw,repdgrp,repdcom,ier)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; !  call mpi_comm_spawn(prog,sarg,nproc,info,meroot,mcw,intercom,mpierrs,ier)
</span><br>
<span class="quotelev1">&gt;  call mpi_comm_spawn(prog,sarg,nproc,info,meroot,repdcom,intercom,mpierrs,ier)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ! send a number to spawned ones...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  call mpi_comm_rank(intercom,newme,ier)
</span><br>
<span class="quotelev1">&gt;  write(*,*)'me,intercom,newme=',me,intercom,newme
</span><br>
<span class="quotelev1">&gt;  num(1)=111*(igrp+1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  meroot=mpi_proc_null
</span><br>
<span class="quotelev1">&gt;  if(newme == 0) meroot=mpi_root ! to send data
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  call mpi_bcast(num,on,mi,meroot,intercom,ier)
</span><br>
<span class="quotelev1">&gt;  ! sometimes there is no output from sps programs, so we wait here: WEIRD :-(
</span><br>
<span class="quotelev1">&gt;  !call sleep(1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  call mpi_finalize(ier)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; end program groupspawn
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14374.php">Barrett, Brian W: "Re: [OMPI users] Granular locks?"</a>
<li><strong>Previous message:</strong> <a href="14372.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14370.php">Milan Hodoscek: "[OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14379.php">Milan Hodoscek: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<li><strong>Reply:</strong> <a href="14379.php">Milan Hodoscek: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
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
