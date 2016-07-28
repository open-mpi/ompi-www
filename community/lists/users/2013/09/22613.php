<?
$subject_val = "[OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  6 21:27:18 2013" -->
<!-- isoreceived="20130907012718" -->
<!-- sent="Fri, 06 Sep 2013 21:27:13 -0400" -->
<!-- isosent="20130907012713" -->
<!-- name="Hugo Gagnon" -->
<!-- email="opensource.openmpi_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran" -->
<!-- id="1378517233.13843.18942785.147C616B_at_webmail.messagingengine.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran<br>
<strong>From:</strong> Hugo Gagnon (<em>opensource.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-06 21:27:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22614.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Previous message:</strong> <a href="22612.php">Huangwei: "[OMPI users] mpi_bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22614.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Reply:</strong> <a href="22614.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm trying to run this bit of code:
<br>
<p>program test
<br>
use mpi
<br>
integer :: ierr, myrank, a(2) = 0
<br>
call MPI_Init(ierr)
<br>
call MPI_Comm_rank(MPI_COMM_WORLD,myrank,ierr)
<br>
if (myrank == 0) a(1) = 1; a(2) = 2
<br>
if (myrank == 1) a(1) = 3; a(2) = 4
<br>
call
<br>
MPI_Allreduce(MPI_IN_PLACE,a,2,MPI_INTEGER,MPI_SUM,MPI_COMM_WORLD,ierr)
<br>
write(*,*) myrank, a(:)
<br>
call MPI_Finalize(ierr)
<br>
end program test
<br>
<p>but the output is not what I'd expect:
<br>
<p>$ openmpif90 test.f90
<br>
$ openmpirun -np 2 a.out
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0           0           0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1           0           0
<br>
<p>I tried a version without MPI_IN_PLACE and the call to MPI_Allreduce
<br>
works fine in that case.  Am I doing something wrong with MPI_IN_PLACE? 
<br>
I'm using OpenMPI 1.6.5 compiled with gcc 4.8.1 on Mac OS 10.8.
<br>
<p>Thanks,
<br>
<pre>
-- 
  Hugo Gagnon
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22614.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Previous message:</strong> <a href="22612.php">Huangwei: "[OMPI users] mpi_bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22614.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Reply:</strong> <a href="22614.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
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
