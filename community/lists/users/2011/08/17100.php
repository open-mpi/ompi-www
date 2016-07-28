<?
$subject_val = "[OMPI users] problems with parallel IO";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 25 08:25:33 2011" -->
<!-- isoreceived="20110825122533" -->
<!-- sent="Thu, 25 Aug 2011 14:25:27 +0200" -->
<!-- isosent="20110825122527" -->
<!-- name="Alexander Beck-Ratzka" -->
<!-- email="alexander.beck-ratzka_at_[hidden]" -->
<!-- subject="[OMPI users] problems with parallel IO" -->
<!-- id="201108251425.27610.alexander.beck-ratzka_at_aei.mpg.de" -->
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
<strong>Subject:</strong> [OMPI users] problems with parallel IO<br>
<strong>From:</strong> Alexander Beck-Ratzka (<em>alexander.beck-ratzka_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-25 08:25:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17101.php">Alexander Beck-Ratzka: "Re: [OMPI users] problems with parallel IO  solved!"</a>
<li><strong>Previous message:</strong> <a href="17099.php">Barrett, Brian W: "Re: [OMPI users] Compiling both 32-bit and 64-bit?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>I have problems to retrieve my data thatI have written out with MPI parallel 
<br>
IO. Ins tests everything works fine, but within an huger environment, the data 
<br>
read in differ from those written out. 
<br>
<p>Here the setup of my experiment:
<br>
<p>##### the writer #####
<br>
program parallel_io
<br>
<p>&nbsp;&nbsp;use mpi
<br>
<p>&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;integer,parameter :: nx=1,ny=300,nz=256,nv=12
<br>
&nbsp;&nbsp;integer ierr, i, myrank, comm_size, BUFSIZE, thefile, intsize
<br>
<p>&nbsp;&nbsp;parameter (BUFSIZE=1075200)
<br>
<p>&nbsp;&nbsp;real,dimension(nv+2,nx,ny,nz) :: v1
<br>
<p>&nbsp;&nbsp;integer (kind=MPI_OFFSET_KIND) disp
<br>
&nbsp;&nbsp;integer ix, iy, iz, nn, counter
<br>
<p>&nbsp;&nbsp;character(6) cname
<br>
&nbsp;&nbsp;call mpi_init(ierr)
<br>
&nbsp;&nbsp;call mpi_comm_size(mpi_comm_world, comm_size, ierr)
<br>
&nbsp;&nbsp;call mpi_comm_rank(mpi_comm_world, myrank,ierr)
<br>
<p>&nbsp;&nbsp;counter=0
<br>
&nbsp;&nbsp;do ix = 1,nz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do iy=1,ny
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do iz=1,nx
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do nn=1,nv+2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;v1(nn,ix,iy,iz) = counter*(myrank+20)/200.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;counter=counter+1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
&nbsp;&nbsp;end do
<br>
<p>&nbsp;&nbsp;call mpi_barrier(mpi_comm_world,ierr)
<br>
<p>&nbsp;&nbsp;call mpi_type_extent(mpi_real, intsize, ierr)
<br>
&nbsp;&nbsp;call mpi_file_open(mpi_comm_world, 'testfile', MPI_MODE_WRONLY + 
<br>
MPI_MODE_CREATE, mpi_info_null, thefile, ierr)
<br>
&nbsp;&nbsp;call mpi_type_size(MPI_INTEGER, intsize, ierr)
<br>
<p>&nbsp;&nbsp;disp = myrank * BUFSIZE * intsize
<br>
<p>&nbsp;&nbsp;!  call mpi_file_set_view(thefile, disp, MPI_INTEGER, MPI_INTEGER, 'native', 
<br>
mpi_info_null, ierr)
<br>
&nbsp;&nbsp;call mpi_file_write_at(thefile, disp, v1(1,1,1,1), BUFSIZE, MPI_REAL, 
<br>
mpi_status_ignore, ierr)
<br>
<p>&nbsp;&nbsp;call mpi_file_close(thefile, ierr)
<br>
<p>&nbsp;&nbsp;!  print the data read in...
<br>
<p>&nbsp;&nbsp;open (12, file='out000.dat-parallel-write-0')
<br>
<p>&nbsp;&nbsp;if (myrank.eq.0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write (12,'(i4,e18.8)') ((((myrank, 
<br>
v1(nn,ix,iy,iz),nn=1,nv+2),ix=1,nx),iy=1,ny), iz=1,nz)
<br>
&nbsp;&nbsp;endif
<br>
<p>&nbsp;&nbsp;close (12)
<br>
<p>&nbsp;&nbsp;call mpi_finalize(ierr)
<br>
<p><p>end program parallel_io
<br>
<p>###############################################
<br>
<p>and the reader...
<br>
<p>####################reader#######################
<br>
&nbsp;program parallel_read_io
<br>
<p>&nbsp;&nbsp;use mpi
<br>
<p>&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;integer,parameter :: nx=1,ny=300,nz=256,nv=12
<br>
<p>&nbsp;&nbsp;integer ierr, i, myrank, comm_size, BUFSIZE, thefile, realsize
<br>
&nbsp;&nbsp;parameter (BUFSIZE=1075200)
<br>
<p>&nbsp;&nbsp;real,dimension(nv+2,nx,ny,nz) :: v1
<br>
<p>&nbsp;&nbsp;integer (kind=MPI_OFFSET_KIND) disp
<br>
<p>&nbsp;&nbsp;integer ix, iy, iz, nn
<br>
<p>&nbsp;&nbsp;call mpi_init(ierr)
<br>
&nbsp;&nbsp;call mpi_comm_size(mpi_comm_world, comm_size, ierr)
<br>
&nbsp;&nbsp;call mpi_comm_rank(mpi_comm_world, myrank,ierr)
<br>
<p>&nbsp;&nbsp;!  do i=0,BUFSIZE
<br>
&nbsp;&nbsp;!     buf(i) = myrank*BUFSIZE + i
<br>
&nbsp;&nbsp;!  end do
<br>
<p>&nbsp;&nbsp;call mpi_type_extent(mpi_integer, realsize, ierr)
<br>
&nbsp;&nbsp;call mpi_file_open(mpi_comm_world, 'testfile', MPI_MODE_RDONLY, mpi_info_null, 
<br>
thefile, ierr)
<br>
&nbsp;&nbsp;call mpi_type_size(MPI_REAL, realsize, ierr)
<br>
<p>&nbsp;&nbsp;disp = myrank * BUFSIZE * realsize
<br>
&nbsp;&nbsp;print*, 'myrank: ', myrank, '  disp: ', disp, '  realsize: ', realsize
<br>
<p>&nbsp;&nbsp;!  call mpi_file_set_view(thefile, disp, MPI_INTEGER, MPI_INTEGER, 'native', 
<br>
mpi_info_null, ierr)
<br>
&nbsp;&nbsp;!  call mpi_file_read(thefile, buf, BUFSIZE, MPI_INTEGER, mpi_status_ignore, 
<br>
ierr)
<br>
<p>&nbsp;&nbsp;call mpi_file_read_at(thefile, disp, v1(1,1,1,1), BUFSIZE, MPI_REAL, 
<br>
mpi_status_ignore, ierr)
<br>
<p>&nbsp;&nbsp;call mpi_file_close(thefile, ierr)
<br>
<p>&nbsp;&nbsp;call mpi_barrier(mpi_comm_world,ierr)
<br>
<p>&nbsp;&nbsp;!  print the data read in...
<br>
<p>&nbsp;&nbsp;open (12, file='out000.dat-parallel-read-0')
<br>
<p>&nbsp;&nbsp;if (myrank.eq.0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write (12,'(i4,e18.8)') ((((myrank, 
<br>
v1(nn,ix,iy,iz),nn=1,nv+2),ix=1,nx),iy=1,ny), iz=1,nz)
<br>
&nbsp;&nbsp;endif
<br>
<p>&nbsp;&nbsp;close (12)
<br>
<p>&nbsp;&nbsp;call mpi_finalize(ierr)
<br>
<p><p>end program parallel_read_io
<br>
###############################################
<br>
<p>Here everything is working fine. However integrating this into a huger program,
<br>
I get totally different data written out and read in.
<br>
<p>The setup up is the same as in the experiment, but I need some more memory...
<br>
<p>What might be the reason for such problems, and if I have an MPI error, how 
<br>
can I estimate this within a fortan program. I have only found examples for 
<br>
the error handling of MPI errors in C or C++. I would need an example for C.
<br>
<p>So any hints or ideas?
<br>
<p>Best wishes
<br>
<p>Alexander
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17101.php">Alexander Beck-Ratzka: "Re: [OMPI users] problems with parallel IO  solved!"</a>
<li><strong>Previous message:</strong> <a href="17099.php">Barrett, Brian W: "Re: [OMPI users] Compiling both 32-bit and 64-bit?"</a>
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
