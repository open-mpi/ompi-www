<?
$subject_val = "[OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 27 09:43:02 2009" -->
<!-- isoreceived="20090727134302" -->
<!-- sent="Mon, 27 Jul 2009 14:42:53 +0100" -->
<!-- isosent="20090727134253" -->
<!-- name="Ricardo Fonseca" -->
<!-- email="ricardo.fonseca_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE" -->
<!-- id="1AA0D69A-AFF2-4E2E-B0EC-D5539F5B2BED_at_ist.utl.pt" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE<br>
<strong>From:</strong> Ricardo Fonseca (<em>ricardo.fonseca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-27 09:42:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10100.php">jacob Balthazor: "[OMPI users] Installation problems"</a>
<li><strong>Previous message:</strong> <a href="10098.php">Alexey Sokolov: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10106.php">George Bosilca: "Re: [OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<li><strong>Reply:</strong> <a href="10106.php">George Bosilca: "Re: [OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys
<br>
<p>I'm having a little trouble using MPI_IN_PLACE with  MPI_REDUCE /  
<br>
MPI_ALLREDUCE in Fortran. If I try to MPI_IN_PLACE with C bindings it  
<br>
works fine running on 2 nodes:
<br>
<p>Result:
<br>
3.000000 3.000000 3.000000 3.000000
<br>
<p>Regardless of using MPI_Reduce or MPI_Allreduce. However, this fails  
<br>
for the fortran version:
<br>
<p>&nbsp;&nbsp;Result:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;2.000000       2.000000       2.000000       2.000000
<br>
<p>Apparently, MPI is ignoring values from the root node. Here's the  
<br>
source for the Fortran code:
<br>
<p><pre>
---
program inplace
   use mpi
   implicit none
   integer :: ierr, rank, rsize, bsize
   real, dimension( 2, 2 ) :: buffer, out
   integer :: rc
   call MPI_INIT(ierr)
   call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
   call MPI_COMM_SIZE(MPI_COMM_WORLD, rsize, ierr)
   buffer = rank + 1
   bsize = size(buffer,1) * size(buffer,2)
   if ( rank == 0 ) then
     call mpi_reduce( MPI_IN_PLACE, buffer, bsize, MPI_REAL, MPI_SUM,  
0, MPI_COMM_WORLD, ierr )
   else
     call mpi_reduce( buffer,       0,      bsize, MPI_REAL, MPI_SUM,  
0, MPI_COMM_WORLD, ierr )
   endif
   ! use allreduce instead
   ! call mpi_allreduce( MPI_IN_PLACE, buffer, bsize, MPI_REAL,  
MPI_SUM, MPI_COMM_WORLD, ierr )
   if ( rank == 0 ) then
     print *, 'Result:'
     print *, buffer
   endif
   rc = 0
   call mpi_finalize( rc )
end program
---
Any ideas?
Cheers,
Ricardo
---
Prof. Ricardo Fonseca
GoLP - Grupo de Lasers e Plasmas
Instituto de Plasmas e Fus&#227;o Nuclear
Instituto Superior T&#233;cnico
Av. Rovisco Pais
1049-001 Lisboa
Portugal
tel: +351 21 8419202
fax: +351 21 8464455
web: <a href="http://cfp.ist.utl.pt/golp/">http://cfp.ist.utl.pt/golp/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10099/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10100.php">jacob Balthazor: "[OMPI users] Installation problems"</a>
<li><strong>Previous message:</strong> <a href="10098.php">Alexey Sokolov: "Re: [OMPI users] Missmatch between sent and recieved data"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10106.php">George Bosilca: "Re: [OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<li><strong>Reply:</strong> <a href="10106.php">George Bosilca: "Re: [OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
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
