<?
$subject_val = "[OMPI users] MPI-RMA rget doesn't complete the communication after mpi_wait";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 13:33:34 2016" -->
<!-- isoreceived="20160712173334" -->
<!-- sent="Tue, 12 Jul 2016 19:33:27 +0200" -->
<!-- isosent="20160712173327" -->
<!-- name="Alfio Lazzaro" -->
<!-- email="alfio.lazzaro_at_[hidden]" -->
<!-- subject="[OMPI users] MPI-RMA rget doesn't complete the communication after mpi_wait" -->
<!-- id="CAJjY+1ZHFF9V8_7_ijA666FVbxyZUUyeX2Arfgn2sRs6fW-UQQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI-RMA rget doesn't complete the communication after mpi_wait<br>
<strong>From:</strong> Alfio Lazzaro (<em>alfio.lazzaro_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-12 13:33:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29649.php">Emani, Murali: "Re: [OMPI users] [OMPI devel]  Class information in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="29647.php">Gundram Leifert: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29653.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI-RMA rget doesn't complete the communication after	mpi_wait"</a>
<li><strong>Reply:</strong> <a href="29653.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI-RMA rget doesn't complete the communication after	mpi_wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI developers,
<br>
we found a strange behavior when using MPI-RMA passive target and OpenMPI
<br>
(versions 1.8.3 and 1.10.2). We don't see any problem when using MPICH.
<br>
<p>This is a small example on what we want to do:
<br>
<p>===================
<br>
program rma_openmpi
<br>
&nbsp;&nbsp;use mpi
<br>
&nbsp;&nbsp;integer :: nproc, rank, ierr
<br>
&nbsp;&nbsp;integer :: win, request, size
<br>
&nbsp;&nbsp;INTEGER(kind=mpi_address_kind) :: size_aint, disp_aint
<br>
&nbsp;&nbsp;integer, DIMENSION(:), ALLOCATABLE :: meta, recv
<br>
<p>&nbsp;&nbsp;call MPI_INIT(ierr)
<br>
&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD, nproc, ierr)
<br>
&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
<br>
<p>&nbsp;&nbsp;size=100
<br>
&nbsp;&nbsp;ALLOCATE(meta(size),recv(size))
<br>
&nbsp;&nbsp;meta(:) = rank
<br>
&nbsp;&nbsp;recv(:) = -1
<br>
&nbsp;&nbsp;size_aint = size*4
<br>
<p>&nbsp;&nbsp;call
<br>
MPI_WIN_CREATE(meta,size_aint,4,MPI_INFO_NULL,MPI_COMM_WORLD,win,ierr)
<br>
&nbsp;&nbsp;call MPI_WIN_LOCK_ALL(MPI_MODE_NOCHECK, win, ierr)
<br>
<p>&nbsp;&nbsp;disp_aint = 0
<br>
&nbsp;&nbsp;CALL MPI_RGET(recv,size,MPI_INTEGER,MOD(rank+1,2),disp_aint,&amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size,MPI_INTEGER,win,request,ierr)
<br>
&nbsp;&nbsp;IF (ierr .NE. 0) STOP &quot;error mpi_rget&quot;
<br>
<p>&nbsp;&nbsp;CALL MPI_WAIT(request,MPI_STATUS_IGNORE,ierr)
<br>
&nbsp;&nbsp;IF (ierr .NE. 0) STOP &quot;error mpi_wait&quot;
<br>
<p>!  call MPI_Win_flush_all(win,ierr)
<br>
<p>&nbsp;&nbsp;print *,rank,&quot;=&quot;,recv(1)
<br>
<p>&nbsp;&nbsp;call MPI_WIN_UNLOCK_ALL(win, ierr)
<br>
&nbsp;&nbsp;call MPI_WIN_FREE(win,ierr)
<br>
<p>&nbsp;&nbsp;DEALLOCATE(meta)
<br>
&nbsp;&nbsp;call MPI_FINALIZE(ierr)
<br>
end program rma_openmpi
<br>
<p>===================
<br>
<p>You can run with 2 ranks.
<br>
As you can see it is a simple rget operation from the neighbor rank.
<br>
However, it seems that the communications doesn't complete after the
<br>
mpi_wait. Indeed we get:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0 =          -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 =          -1
<br>
while it should be:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0 =           1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1 =           0
<br>
<p>The code works as we want by uncommenting the flush operation, but we would
<br>
expect the same behavior with such a synchronization.
<br>
<p>Thanks for your help!
<br>
<p>Best regards,
<br>
<p>Alfio
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29648/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29649.php">Emani, Murali: "Re: [OMPI users] [OMPI devel]  Class information in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="29647.php">Gundram Leifert: "Re: [OMPI users] Java-OpenMPI returns with SIGSEGV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29653.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI-RMA rget doesn't complete the communication after	mpi_wait"</a>
<li><strong>Reply:</strong> <a href="29653.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI-RMA rget doesn't complete the communication after	mpi_wait"</a>
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
