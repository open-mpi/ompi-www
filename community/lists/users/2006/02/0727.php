<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 28 18:13:37 2006" -->
<!-- isoreceived="20060228231337" -->
<!-- sent="Tue, 28 Feb 2006 18:13:11 -0500" -->
<!-- isosent="20060228231311" -->
<!-- name="Michael Kluskens" -->
<!-- email="michael.kluskens_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1" -->
<!-- id="960889E7-D174-403C-8B6B-1DEF77D7028B_at_nrl.navy.mil" -->
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
<strong>From:</strong> Michael Kluskens (<em>michael.kluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-28 18:13:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0728.php">George Bosilca: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<li><strong>Previous message:</strong> <a href="0726.php">Scott Weitzenkamp \(sweitzen\): "[OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0728.php">George Bosilca: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<li><strong>Reply:</strong> <a href="0728.php">George Bosilca: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using OpenMPI 1.0.1 compiled with g95 on OS X (same problem on Debian  
<br>
Linux with g95, I have not tested other compilers yet)
<br>
<p>mpif90 spawn.f90 -o spawn
<br>
In file spawn.f90:35
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD, slavecomm, MPI_ERRCODES_IGNORE, ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Generic subroutine 'mpi_comm_spawn' at (1) is not consistent  
<br>
with a specific subroutine interface
<br>
make: *** [spawn] Error 1
<br>
<p>I can't see the problem with the following, all the arguments match  
<br>
the info presented in the book &quot;Using MPI-2&quot; page 236:
<br>
<p>&nbsp;&nbsp;&nbsp;call MPI_Comm_spawn('subprocess', MPI_ARGV_NULL, universe_size-1,  
<br>
MPI_INFO_NULL, 0, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD, slavecomm, MPI_ERRCODES_IGNORE, ierr )
<br>
<p>the entire test program follows:
<br>
<p>program main
<br>
&nbsp;&nbsp;&nbsp;USE MPI
<br>
&nbsp;&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;&nbsp;integer :: ierr,size,rank,slavecomm
<br>
&nbsp;&nbsp;&nbsp;integer  (kind=MPI_ADDRESS_KIND) :: universe_size
<br>
&nbsp;&nbsp;&nbsp;integer :: status(MPI_STATUS_SIZE)
<br>
&nbsp;&nbsp;&nbsp;logical :: flag
<br>
&nbsp;&nbsp;&nbsp;integer :: ans
<br>
&nbsp;&nbsp;&nbsp;integer :: k
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
&nbsp;&nbsp;&nbsp;call MPI_Comm_spawn('subprocess', MPI_ARGV_NULL, universe_size-1,  
<br>
MPI_INFO_NULL, 0, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD, slavecomm, MPI_ERRCODES_IGNORE, ierr )
<br>
<p>&nbsp;&nbsp;&nbsp;do k = 1, universe_size-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'master receiving'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_RECV( ans, 1, MPI_INTEGER, MPI_ANY_SOURCE, MPI_ANY_TAG,  
<br>
slavecomm, status, ierr )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'answer=',ans,' from alpha',k
<br>
&nbsp;&nbsp;&nbsp;end do
<br>
<p>&nbsp;&nbsp;&nbsp;call MPI_COMM_FREE(slavecomm,ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;call MPI_FINALIZE(ierr)
<br>
end
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0728.php">George Bosilca: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<li><strong>Previous message:</strong> <a href="0726.php">Scott Weitzenkamp \(sweitzen\): "[OMPI users] anyone have OpenMPI working with OpenIB on RHEL4 U3 beta?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0728.php">George Bosilca: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
<li><strong>Reply:</strong> <a href="0728.php">George Bosilca: "Re: [OMPI users] MPI_COMM_SPAWN versus OpenMPI 1.0.1"</a>
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
