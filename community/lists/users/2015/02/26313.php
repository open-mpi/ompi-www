<?
$subject_val = "[OMPI users] GPUDirect with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 11 14:17:13 2015" -->
<!-- isoreceived="20150211191713" -->
<!-- sent="Wed, 11 Feb 2015 19:17:09 +0000" -->
<!-- isosent="20150211191709" -->
<!-- name="Aulwes, Rob" -->
<!-- email="rta_at_[hidden]" -->
<!-- subject="[OMPI users] GPUDirect with OpenMPI" -->
<!-- id="D100F8C3.19224%rta_at_lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] GPUDirect with OpenMPI<br>
<strong>From:</strong> Aulwes, Rob (<em>rta_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-11 14:17:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26314.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="26312.php">Riccardo Zese: "[OMPI users] Java MPI and OWL API: segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26316.php">Rolf vandeVaart: "Re: [OMPI users] GPUDirect with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="26316.php">Rolf vandeVaart: "Re: [OMPI users] GPUDirect with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I built OpenMPI 1.8.3 using PGI 14.7 and enabled CUDA support for CUDA 6.0.  I have a Fortran test code that tests GPUDirect and have included it here.  When I run it across 2 nodes using 4 MPI procs, sometimes it fails with incorrect results.  Specifically, sometimes rank 1 does not receive the correct value from one of the neighbors.
<br>
<p>The code was compiled using PGI 14.7:
<br>
mpif90 -o direct.x -acc acc_direct.f90
<br>
<p>and executed with:
<br>
mpirun -np 4 -npernode 2 -mca btl_openib_want_cudagdr 1 ./direct.x
<br>
<p>Does anyone know if I'm missing something when using GPUDirect?
<br>
<p>Thanks,Rob Aulwes
<br>
<p><p>program acc_direct
<br>
<p><p>&nbsp;include 'mpif.h'
<br>
<p><p><p>&nbsp;integer :: ierr, rank, nranks
<br>
<p>integer, dimension(:), allocatable :: i_ra
<br>
<p><p>&nbsp;&nbsp;&nbsp;call mpi_init(ierr)
<br>
<p><p>&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;rank = rank + 1
<br>
<p>&nbsp;&nbsp;&nbsp;write(*,*) 'hello from rank ',rank
<br>
<p><p>&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD, nranks, ierr)
<br>
<p><p>&nbsp;&nbsp;&nbsp;allocate( i_ra(nranks) )
<br>
<p><p>&nbsp;&nbsp;&nbsp;call nb_exchange
<br>
<p><p>&nbsp;&nbsp;&nbsp;call mpi_finalize(ierr)
<br>
<p><p><p>&nbsp;contains
<br>
<p><p>&nbsp;subroutine nb_exchange
<br>
<p><p>&nbsp;&nbsp;&nbsp;integer :: i, j
<br>
<p>&nbsp;&nbsp;&nbsp;integer, dimension(nranks - 1) :: sendreq, recvreq
<br>
<p>&nbsp;&nbsp;&nbsp;logical :: done
<br>
<p>&nbsp;&nbsp;&nbsp;integer :: stat(MPI_STATUS_SIZE)
<br>
<p><p>&nbsp;&nbsp;&nbsp;i_ra = -1
<br>
<p>&nbsp;&nbsp;&nbsp;i_ra(rank) = rank
<br>
<p><p>&nbsp;&nbsp;&nbsp;!$acc data copy(i_ra(1:nranks))
<br>
<p><p>&nbsp;&nbsp;&nbsp;!$acc host_data use_device(i_ra)
<br>
<p><p>&nbsp;&nbsp;&nbsp;cnt = 0
<br>
<p>&nbsp;&nbsp;&nbsp;do i = 1,nranks
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( i .ne. rank ) then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cnt = cnt + 1
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_ISEND(i_ra(rank), 1, MPI_INTEGER, i - 1, rank, &amp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD, sendreq(cnt), ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( ierr .ne. MPI_SUCCESS ) write(*,*) 'isend call failed.'
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_IRECV(i_ra(i), 1, MPI_INTEGER, i - 1, i, &amp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD, recvreq(cnt), ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( ierr .ne. MPI_SUCCESS ) write(*,*) 'irecv call failed.'
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p><p>&nbsp;&nbsp;&nbsp;enddo
<br>
<p><p>&nbsp;&nbsp;&nbsp;!$acc end host_data
<br>
<p><p>&nbsp;&nbsp;&nbsp;i = 0
<br>
<p>&nbsp;&nbsp;&nbsp;do while ( i .lt. 2*cnt )
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do j = 1, cnt
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( recvreq(j) .ne. MPI_REQUEST_NULL ) then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_TEST(recvreq(j), done, stat, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( ierr .ne. MPI_SUCCESS ) &amp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'test for irecv call failed.'
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( done ) then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i = i + 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( sendreq(j) .ne. MPI_REQUEST_NULL ) then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_TEST(sendreq(j), done, MPI_STATUS_IGNORE, ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( ierr .ne. MPI_SUCCESS ) &amp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'test for irecv call failed.'
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( done ) then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;i = i + 1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enddo
<br>
<p>&nbsp;&nbsp;&nbsp;enddo
<br>
<p><p>&nbsp;&nbsp;&nbsp;write(*,*) rank,': nb_exchange: Updating host...'
<br>
<p>&nbsp;&nbsp;&nbsp;!$acc update host(i_ra(1:nranks))
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;do j = 1, nranks
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( i_ra(j) .ne. j ) then
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'isend/irecv failed.'
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write(*,*) 'rank', rank,': i_ra(',j,') = ',i_ra(j)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p>&nbsp;&nbsp;&nbsp;enddo
<br>
<p><p>&nbsp;&nbsp;&nbsp;!$acc end data
<br>
<p><p>&nbsp;end subroutine
<br>
<p><p><p>end program
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26313/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26314.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Java MPI and OWL API: segmentation fault"</a>
<li><strong>Previous message:</strong> <a href="26312.php">Riccardo Zese: "[OMPI users] Java MPI and OWL API: segmentation fault"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26316.php">Rolf vandeVaart: "Re: [OMPI users] GPUDirect with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="26316.php">Rolf vandeVaart: "Re: [OMPI users] GPUDirect with OpenMPI"</a>
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
