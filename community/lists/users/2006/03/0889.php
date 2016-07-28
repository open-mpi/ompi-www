<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 20 18:18:59 2006" -->
<!-- isoreceived="20060320231859" -->
<!-- sent="Mon, 20 Mar 2006 18:18:47 -0500" -->
<!-- isosent="20060320231847" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="[OMPI users] Sample code demonstrating issues with multiple versions of OpenMPI" -->
<!-- id="5FE9AE3D-0EA4-4746-BBBE-03CF98CFD76D_at_ieee.org" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-20 18:18:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0890.php">Brian Barrett: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<li><strong>Previous message:</strong> <a href="0888.php">Michael Kluskens: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The sample code at the end of this message demonstrates issues with  
<br>
multiple versions of OpenMPI.
<br>
<p>OpenMPI 1.0.2a10 compiles the code but crashes because of the  
<br>
interface issues previously discussed.   This is both using &quot; USE MPI  
<br>
&quot; and &quot; include 'mpif.h' &quot;
<br>
<p>OpenMPI 1.1a1r9336 generates the following output (generated on OS X  
<br>
with g95, but same errors previously documented on Debian Linux with  
<br>
pgif90 version 6.1):
<br>
<p><p><span class="quotelev1">  &gt;spawn
</span><br>
How many processes total?
<br>
2
<br>
alpha 0  of  1
<br>
master receiving
<br>
alpha 0 receiving 17 from master
<br>
alpha 0  sending -1 0
<br>
answer= -1 0  from alpha 0 0
<br>
[x:14559] [0,0,0] ORTE_ERROR_LOG: GPR data corruption in file base/ 
<br>
soh_base_get_proc_soh.c at line 100
<br>
[x:14559] [0,0,0] ORTE_ERROR_LOG: GPR data corruption in file base/ 
<br>
oob_base_xcast.c at line 108
<br>
[x:14559] [0,0,0] ORTE_ERROR_LOG: GPR data corruption in file base/ 
<br>
rmgr_base_stage_gate.c at line 276
<br>
[x:14559] [0,0,0] ORTE_ERROR_LOG: GPR data corruption in file base/ 
<br>
soh_base_get_proc_soh.c at line 100
<br>
[x:14559] [0,0,0] ORTE_ERROR_LOG: GPR data corruption in file base/ 
<br>
oob_base_xcast.c at line 108
<br>
[x:14559] [0,0,0] ORTE_ERROR_LOG: GPR data corruption in file base/ 
<br>
rmgr_base_stage_gate.c at line 276
<br>
<p>Michael
<br>
<p>---- spawn.f90 ---
<br>
<p>program main
<br>
&nbsp;&nbsp;&nbsp;USE MPI
<br>
&nbsp;&nbsp;&nbsp;implicit none
<br>
!  include 'mpif.h'
<br>
&nbsp;&nbsp;&nbsp;integer :: ierr,size,rank,child
<br>
&nbsp;&nbsp;&nbsp;integer  (kind=MPI_ADDRESS_KIND) :: universe_size
<br>
&nbsp;&nbsp;&nbsp;integer :: status(MPI_STATUS_SIZE)
<br>
&nbsp;&nbsp;&nbsp;logical :: flag
<br>
&nbsp;&nbsp;&nbsp;integer :: ans(0:2),btest
<br>
&nbsp;&nbsp;&nbsp;integer :: k, subprocesses
<br>
&nbsp;&nbsp;&nbsp;real    :: ts(4)
<br>
<p>&nbsp;&nbsp;&nbsp;call MPI_INIT(ierr)
<br>
&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD,rank,ierr)
<br>
&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD,size,ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;if ( size /= 1 ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( rank == 0 ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'Only one master process permitted'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'Terminating all but root process'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FINALIZE(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stop
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
&nbsp;&nbsp;&nbsp;end if
<br>
<p>&nbsp;&nbsp;&nbsp;call MPI_Comm_get_attr(MPI_COMM_WORLD, MPI_UNIVERSE_SIZE,  
<br>
universe_size, flag,ierr)
<br>
&nbsp;&nbsp;&nbsp;if ( .not. flag ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'This MPI does not support UNIVERSE_SIZE.'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'How many processes total?'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;read(*,*) universe_size
<br>
&nbsp;&nbsp;&nbsp;else if ( universe_size &lt; 2 ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'How many processes total?'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;read(*,*) universe_size
<br>
&nbsp;&nbsp;&nbsp;end if
<br>
&nbsp;&nbsp;&nbsp;subprocesses = universe_size-1
<br>
&nbsp;&nbsp;&nbsp;call MPI_Comm_spawn('subprocess', MPI_ARGV_NULL, subprocesses,  
<br>
MPI_INFO_NULL, 0, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD, child, MPI_ERRCODES_IGNORE, ierr )
<br>
<p>&nbsp;&nbsp;&nbsp;btest = 17
<br>
&nbsp;&nbsp;&nbsp;call MPI_BCAST( btest, 1, MPI_INTEGER, MPI_ROOT, child, ierr )
<br>
&nbsp;&nbsp;&nbsp;call MPI_BCAST( ts,4   ,MPI_REAL   ,MPI_ROOT,child,ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;do k = 1, universe_size-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'master receiving'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ans = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_RECV( ans, 2, MPI_INTEGER, MPI_ANY_SOURCE, MPI_ANY_TAG,  
<br>
child, status, ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'answer=',ans(0:1),' from alpha',status 
<br>
(MPI_SOURCE),status(MPI_TAG)
<br>
&nbsp;&nbsp;&nbsp;end do
<br>
<p>&nbsp;&nbsp;&nbsp;call MPI_COMM_FREE(child,ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;call MPI_FINALIZE(ierr)
<br>
end
<br>
<p>--- subprocess.f90 ----
<br>
program alpha
<br>
&nbsp;&nbsp;&nbsp;USE MPI
<br>
&nbsp;&nbsp;&nbsp;implicit none
<br>
!  include 'mpif.h'
<br>
&nbsp;&nbsp;&nbsp;integer :: ierr,size,rank,parent,rsize
<br>
&nbsp;&nbsp;&nbsp;integer :: ans(0:2), btest
<br>
&nbsp;&nbsp;&nbsp;real    :: ts(4)
<br>
<p>&nbsp;&nbsp;&nbsp;call MPI_INIT(ierr)
<br>
&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD,rank,ierr)
<br>
&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD,size,ierr)
<br>
&nbsp;&nbsp;&nbsp;write(*,*) 'alpha',rank,' of ',size
<br>
&nbsp;&nbsp;&nbsp;call MPI_Comm_get_parent(parent,ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;call MPI_BCAST( btest, 1, MPI_INTEGER, 0, parent, ierr )
<br>
&nbsp;&nbsp;&nbsp;call MPI_BCAST(ts,4,MPI_REAL,0,parent,ierr)
<br>
&nbsp;&nbsp;&nbsp;write(*,*) 'alpha',rank,'receiving',btest,'from master'
<br>
&nbsp;&nbsp;&nbsp;ans(0) = rank-1
<br>
&nbsp;&nbsp;&nbsp;ans(1) = rank
<br>
&nbsp;&nbsp;&nbsp;ans(2) = rank+1
<br>
&nbsp;&nbsp;&nbsp;write(*,*) 'alpha',rank,' sending',ans(0:1)
<br>
&nbsp;&nbsp;&nbsp;call MPI_SSEND( ans, 2, MPI_INTEGER, 0, rank, parent, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;call MPI_FINALIZE(ierr)
<br>
end program alpha
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0890.php">Brian Barrett: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
<li><strong>Previous message:</strong> <a href="0888.php">Michael Kluskens: "Re: [OMPI users] mpif90 broken in recent tarballs of 1.1a1"</a>
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
