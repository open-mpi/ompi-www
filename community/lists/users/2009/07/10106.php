<?
$subject_val = "Re: [OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 27 17:13:35 2009" -->
<!-- isoreceived="20090727211335" -->
<!-- sent="Mon, 27 Jul 2009 17:13:23 -0400" -->
<!-- isosent="20090727211323" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE" -->
<!-- id="966A51C3-A15F-425B-A6B0-81221033CCF1_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1AA0D69A-AFF2-4E2E-B0EC-D5539F5B2BED_at_ist.utl.pt" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-27 17:13:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10107.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>Previous message:</strong> <a href="10105.php">Jeff Squyres: "Re: [OMPI users] Network connection check"</a>
<li><strong>In reply to:</strong> <a href="10099.php">Ricardo Fonseca: "[OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ricardo,
<br>
<p>I can't reproduce your problem with the latest version (trunk r21734).  
<br>
If I run the provided program on two nodes I get the following answer.
<br>
[***]$ mpif77 inplace.f -o inplace -g
<br>
[***]$ mpirun -bynode -np 2 ./inplace
<br>
&nbsp;&nbsp;Result:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;3.0000000       3.0000000       3.0000000       3.0000000
<br>
<p>This seems correct and in sync with the C answer.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Jul 27, 2009, at 09:42 , Ricardo Fonseca wrote:
<br>
<p><span class="quotelev1">&gt; program inplace
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   use mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   implicit none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   integer :: ierr, rank, rsize, bsize
</span><br>
<span class="quotelev1">&gt;   real, dimension( 2, 2 ) :: buffer, out
</span><br>
<span class="quotelev1">&gt;   integer :: rc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   call MPI_INIT(ierr)
</span><br>
<span class="quotelev1">&gt;   call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
</span><br>
<span class="quotelev1">&gt;   call MPI_COMM_SIZE(MPI_COMM_WORLD, rsize, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   buffer = rank + 1
</span><br>
<span class="quotelev1">&gt;   bsize = size(buffer,1) * size(buffer,2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   if ( rank == 0 ) then
</span><br>
<span class="quotelev1">&gt;     call mpi_reduce( MPI_IN_PLACE, buffer, bsize, MPI_REAL, MPI_SUM,  
</span><br>
<span class="quotelev1">&gt; 0, MPI_COMM_WORLD, ierr )
</span><br>
<span class="quotelev1">&gt;   else
</span><br>
<span class="quotelev1">&gt;     call mpi_reduce( buffer,       0,      bsize, MPI_REAL, MPI_SUM,  
</span><br>
<span class="quotelev1">&gt; 0, MPI_COMM_WORLD, ierr )
</span><br>
<span class="quotelev1">&gt;   endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ! use allreduce instead
</span><br>
<span class="quotelev1">&gt;   ! call mpi_allreduce( MPI_IN_PLACE, buffer, bsize, MPI_REAL,  
</span><br>
<span class="quotelev1">&gt; MPI_SUM, MPI_COMM_WORLD, ierr )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   if ( rank == 0 ) then
</span><br>
<span class="quotelev1">&gt;     print *, 'Result:'
</span><br>
<span class="quotelev1">&gt;     print *, buffer
</span><br>
<span class="quotelev1">&gt;   endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   rc = 0
</span><br>
<span class="quotelev1">&gt;   call mpi_finalize( rc )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; end program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10107.php">Ashika Umanga Umagiliya: "Re: [OMPI users] Embedding MPI program into a webservice ?"</a>
<li><strong>Previous message:</strong> <a href="10105.php">Jeff Squyres: "Re: [OMPI users] Network connection check"</a>
<li><strong>In reply to:</strong> <a href="10099.php">Ricardo Fonseca: "[OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
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
