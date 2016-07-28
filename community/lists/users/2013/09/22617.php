<?
$subject_val = "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep  7 00:39:52 2013" -->
<!-- isoreceived="20130907043952" -->
<!-- sent="Fri, 06 Sep 2013 21:39:45 -0700" -->
<!-- isosent="20130907043945" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran" -->
<!-- id="1378528785.3458.35.camel_at_cedar.reachone.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1378523670.1888.18963041.02171C01_at_webmail.messagingengine.com" -->
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
<strong>Date:</strong> 2013-09-07 00:39:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22618.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Previous message:</strong> <a href="22616.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>In reply to:</strong> <a href="22615.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22618.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Reply:</strong> <a href="22618.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just as an experiment, try replacing
<br>
<p>use mpi
<br>
<p>&nbsp;&nbsp;with
<br>
<p>include 'mpif.h'
<br>
<p>If that fixes the problem, you can confront the  OpenMPI experts
<br>
<p>T. Rosmond
<br>
<p><p><p>On Fri, 2013-09-06 at 23:14 -0400, Hugo Gagnon wrote:
<br>
<span class="quotelev1">&gt; Thanks for the input but it still doesn't work for me...  Here's the
</span><br>
<span class="quotelev1">&gt; version without MPI_IN_PLACE that does work:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; program test
</span><br>
<span class="quotelev1">&gt; use mpi
</span><br>
<span class="quotelev1">&gt; integer :: ierr, myrank, a(2), a_loc(2) = 0
</span><br>
<span class="quotelev1">&gt; call MPI_Init(ierr)
</span><br>
<span class="quotelev1">&gt; call MPI_Comm_rank(MPI_COMM_WORLD,myrank,ierr)
</span><br>
<span class="quotelev1">&gt; if (myrank == 0) then
</span><br>
<span class="quotelev1">&gt;   a_loc(1) = 1
</span><br>
<span class="quotelev1">&gt;   a_loc(2) = 2
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt;   a_loc(1) = 3
</span><br>
<span class="quotelev1">&gt;   a_loc(2) = 4
</span><br>
<span class="quotelev1">&gt; endif
</span><br>
<span class="quotelev1">&gt; call MPI_Allreduce(a_loc,a,2,MPI_INTEGER,MPI_SUM,MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt; write(*,*) myrank, a(:)
</span><br>
<span class="quotelev1">&gt; call MPI_Finalize(ierr)
</span><br>
<span class="quotelev1">&gt; end program test
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ openmpif90 test.f90
</span><br>
<span class="quotelev1">&gt; $ openmpirun -np 2 a.out
</span><br>
<span class="quotelev1">&gt;            0           4           6
</span><br>
<span class="quotelev1">&gt;            1           4           6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I'd be curious to know why your OpenMPI implementation handles
</span><br>
<span class="quotelev1">&gt; MPI_IN_PLACE correctly and not mine!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22618.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Previous message:</strong> <a href="22616.php">Tom Rosmond: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>In reply to:</strong> <a href="22615.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22618.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
<li><strong>Reply:</strong> <a href="22618.php">Hugo Gagnon: "Re: [OMPI users] MPI_IN_PLACE in a call to MPI_Allreduce in Fortran"</a>
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
