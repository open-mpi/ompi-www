<?
$subject_val = "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep  6 22:37:12 2013" -->
<!-- isoreceived="20130907023712" -->
<!-- sent="Fri, 06 Sep 2013 19:37:05 -0700" -->
<!-- isosent="20130907023705" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran" -->
<!-- id="1378521425.3458.16.camel_at_cedar.reachone.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1378517233.13843.18942785.147C616B_at_webmail.messagingengine.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-06 22:37:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22615.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Previous message:</strong> <a href="22613.php">Hugo Gagnon: "[OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>In reply to:</strong> <a href="22613.php">Hugo Gagnon: "[OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22615.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Reply:</strong> <a href="22615.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Your syntax defining 'a' is not correct.  This code works correctly.
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
if (myrank == 0) then
<br>
&nbsp;a(1) = 1
<br>
&nbsp;a(2) = 2
<br>
else
<br>
&nbsp;a(1) = 3
<br>
&nbsp;a(2) = 4
<br>
endif
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
<p>mpif90 test.f90
<br>
mpirun -np 2 a.out      
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0           4           6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1           4           6
<br>
<p>T. Rosmond
<br>
<p><p><p><p><p>On Fri, 2013-09-06 at 21:27 -0400, Hugo Gagnon wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to run this bit of code:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; program test
</span><br>
<span class="quotelev1">&gt; use mpi
</span><br>
<span class="quotelev1">&gt; integer :: ierr, myrank, a(2) = 0
</span><br>
<span class="quotelev1">&gt; call MPI_Init(ierr)
</span><br>
<span class="quotelev1">&gt; call MPI_Comm_rank(MPI_COMM_WORLD,myrank,ierr)
</span><br>
<span class="quotelev1">&gt; if (myrank == 0) a(1) = 1; a(2) = 2
</span><br>
<span class="quotelev1">&gt; if (myrank == 1) a(1) = 3; a(2) = 4
</span><br>
<span class="quotelev1">&gt; call
</span><br>
<span class="quotelev1">&gt; MPI_Allreduce(MPI_IN_PLACE,a,2,MPI_INTEGER,MPI_SUM,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt; write(*,*) myrank, a(:)
</span><br>
<span class="quotelev1">&gt; call MPI_Finalize(ierr)
</span><br>
<span class="quotelev1">&gt; end program test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but the output is not what I'd expect:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ openmpif90 test.f90
</span><br>
<span class="quotelev1">&gt; $ openmpirun -np 2 a.out
</span><br>
<span class="quotelev1">&gt;            0           0           0
</span><br>
<span class="quotelev1">&gt;            1           0           0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried a version without MPI_IN_PLACE and the call to MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; works fine in that case.  Am I doing something wrong with MPI_IN_PLACE? 
</span><br>
<span class="quotelev1">&gt; I'm using OpenMPI 1.6.5 compiled with gcc 4.8.1 on Mac OS 10.8.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22615.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Previous message:</strong> <a href="22613.php">Hugo Gagnon: "[OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>In reply to:</strong> <a href="22613.php">Hugo Gagnon: "[OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22615.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Reply:</strong> <a href="22615.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
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
