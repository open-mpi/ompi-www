<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 23 08:07:38 2007" -->
<!-- isoreceived="20070223130738" -->
<!-- sent="23 Feb 2007 13:04:20 -0000" -->
<!-- isosent="20070223130420" -->
<!-- name="Chandan  Basu" -->
<!-- email="cbasu_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Alltoall" -->
<!-- id="20070223130420.14999.qmail_at_webmail24.rediffmail.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Chandan  Basu (<em>cbasu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-23 08:04:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2731.php">George Bosilca: "Re: [OMPI users] MPI reduce ..."</a>
<li><strong>Previous message:</strong> <a href="2729.php">Lydia Heck: "[OMPI users] MPI reduce ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2732.php">Edgar Gabriel: "Re: [OMPI users] MPI_Alltoall"</a>
<li><strong>Reply:</strong> <a href="2732.php">Edgar Gabriel: "Re: [OMPI users] MPI_Alltoall"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to use MPI_Alltoall in the following program. After
execution all the nodes should show same value for the array su.
However only the root node is showing correct value. other nodes are giving garbage value. Please help.

I have used openmpi version &quot;1.1.4&quot;. The mpif90 uses intel fortran

cbasu

------------------------------------------------
program main
implicit none
include 'mpif.h'

integer :: status(MPI_Status_size)
integer :: ierr, rank, nProcs
double precision :: s
double precision, pointer :: su(:)

call MPI_Init (ierr)
call MPI_Comm_rank(MPI_COMM_WORLD, rank, ierr)
call MPI_Comm_size(MPI_COMM_WORLD, nProcs, ierr)

allocate(su(nProcs))
su = 0.0d0
s = 1.0d0
call MPI_Alltoall(s, 1, MPI_DOUBLE_PRECISION, su, 1, &amp;
       &amp; MPI_DOUBLE_PRECISION, MPI_COMM_WORLD, ierr);

! all nodes should have su(1:nProcs) = 1.0 at this pont
print *, rank, su

deallocate(su)

call MPI_Finalize(ierr)
end program main
----------------------------------------------
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2730/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2731.php">George Bosilca: "Re: [OMPI users] MPI reduce ..."</a>
<li><strong>Previous message:</strong> <a href="2729.php">Lydia Heck: "[OMPI users] MPI reduce ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2732.php">Edgar Gabriel: "Re: [OMPI users] MPI_Alltoall"</a>
<li><strong>Reply:</strong> <a href="2732.php">Edgar Gabriel: "Re: [OMPI users] MPI_Alltoall"</a>
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
