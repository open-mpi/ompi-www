<?
$subject_val = "[OMPI users] problems with parallel MPI-IO...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 19 09:02:41 2011" -->
<!-- isoreceived="20110719130241" -->
<!-- sent="Tue, 19 Jul 2011 15:02:36 +0200" -->
<!-- isosent="20110719130236" -->
<!-- name="Alexander Beck-Ratzka" -->
<!-- email="alexander.beck-ratzka_at_[hidden]" -->
<!-- subject="[OMPI users] problems with parallel MPI-IO..." -->
<!-- id="201107191502.36286.alexander.beck-ratzka_at_aei.mpg.de" -->
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
<strong>Subject:</strong> [OMPI users] problems with parallel MPI-IO...<br>
<strong>From:</strong> Alexander Beck-Ratzka (<em>alexander.beck-ratzka_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-19 09:02:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16960.php">Jonathan Dursi: "Re: [OMPI users] problems with parallel MPI-IO..."</a>
<li><strong>Previous message:</strong> <a href="16958.php">Bill Johnstone: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16960.php">Jonathan Dursi: "Re: [OMPI users] problems with parallel MPI-IO..."</a>
<li><strong>Reply:</strong> <a href="16960.php">Jonathan Dursi: "Re: [OMPI users] problems with parallel MPI-IO..."</a>
<li><strong>Maybe reply:</strong> <a href="16961.php">Alexander Beck-Ratzka: "Re: [OMPI users] problems with parallel MPI-IO..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>I am using the following f90 example program for writing a file in parallel 
<br>
with MIP:
<br>
<p>[snip]
<br>
&nbsp;&nbsp;program parallel_io
<br>
<p>&nbsp;&nbsp;use mpi
<br>
<p>&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;integer ierr, i, myrank, BUFSIZE, thefile, intsize
<br>
&nbsp;&nbsp;parameter (BUFSIZE=100)
<br>
&nbsp;&nbsp;integer buf(BUFSIZE)
<br>
&nbsp;&nbsp;!  integer (kind=MPI_OFFSET_KIND) disp
<br>
&nbsp;&nbsp;integer*8 disp
<br>
<p>&nbsp;&nbsp;call mpi_init(ierr)
<br>
&nbsp;&nbsp;call mpi_comm_rank(mpi_comm_world, myrank,ierr)
<br>
<p>&nbsp;&nbsp;do i=0,BUFSIZE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf(i) = myrank*BUFSIZE + i
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print*, 'i =', i, 'myrank =', myrank, 'buf(i)=',buf(i)
<br>
&nbsp;&nbsp;end do
<br>
<p>&nbsp;&nbsp;call mpi_file_open(mpi_comm_world, 'testfile', MPI_MODE_WRONLY + 
<br>
MPI_MODE_CREATE, mpi_info_null, thefile, ierr)
<br>
&nbsp;&nbsp;call mpi_type_size(MPI_INTEGER, intsize, ierr)
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;disp = myrank * BUFSIZE * intsize
<br>
<p>&nbsp;&nbsp;!  call mpi_file_set_view(thefile, disp, MPI_INTEGER, MPI_INTEGER, 'native', 
<br>
mpi_info_null, ierr)
<br>
&nbsp;&nbsp;call mpi_file_write_at(thefile, disp, buf, BUFSIZE, MPI_INTEGER, 
<br>
mpi_status_ignore, ierr)
<br>
<p>&nbsp;&nbsp;call mpi_file_close(thefile, ierr)
<br>
&nbsp;&nbsp;call mpi_finalize(ierr)
<br>
<p><p>end program parallel_io
<br>
[snip]
<br>
<p><p>And the follwoing program shall read all the data in again, and print them out
<br>
<p>[snip]
<br>
&nbsp;&nbsp;program parallel_read_io
<br>
<p>&nbsp;&nbsp;use mpi
<br>
<p>&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;integer ierr, i, myrank, BUFSIZE, thefile, intsize
<br>
&nbsp;&nbsp;parameter (BUFSIZE=100)
<br>
&nbsp;&nbsp;integer buf(BUFSIZE)
<br>
&nbsp;&nbsp;!  integer (kind=MPI_OFFSET_KIND) disp
<br>
&nbsp;&nbsp;integer*8 disp
<br>
<p>&nbsp;&nbsp;call mpi_init(ierr)
<br>
&nbsp;&nbsp;call mpi_comm_rank(mpi_comm_world, myrank,ierr)
<br>
<p>&nbsp;&nbsp;!  do i=0,BUFSIZE
<br>
&nbsp;&nbsp;!     buf(i) = myrank*BUFSIZE + i
<br>
&nbsp;&nbsp;!  end do
<br>
<p>&nbsp;&nbsp;call mpi_file_open(mpi_comm_world, 'testfile', MPI_MODE_RDONLY, mpi_info_null, 
<br>
thefile, ierr)
<br>
&nbsp;&nbsp;call mpi_type_size(MPI_INTEGER, intsize, ierr)
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;disp = myrank * BUFSIZE * intsize
<br>
<p>&nbsp;&nbsp;!  call mpi_file_set_view(thefile, disp, MPI_INTEGER, MPI_INTEGER, 'native', 
<br>
mpi_info_null, ierr)
<br>
&nbsp;&nbsp;!  call mpi_file_read(thefile, buf, BUFSIZE, MPI_INTEGER, mpi_status_ignore, 
<br>
ierr)
<br>
&nbsp;&nbsp;call mpi_file_read_at(thefile, disp, buf, BUFSIZE, MPI_INTEGER, 
<br>
mpi_status_ignore, ierr)
<br>
<p>&nbsp;&nbsp;call mpi_file_close(thefile, ierr)
<br>
<p>&nbsp;&nbsp;!  print the data read in...
<br>
<p>&nbsp;&nbsp;if (myrank.eq.1) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do i = 0,BUFSIZE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print*, 'i =', i, 'myrank =', myrank, 'buf(i)=', buf(i)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
&nbsp;&nbsp;endif
<br>
<p>&nbsp;&nbsp;call mpi_finalize(ierr)
<br>
[snip]
<br>
<p>I have maid several tests, also with do loops only from 0 to (BUFSIZE-1), with 
<br>
MPI_FILE_SET_VIEW and MPI_FILE_READ, etc...
<br>
<p>When I am reading the data in again and print them out, I always have:
<br>
<p>buf(0)=0
<br>
<p>for every rank, so I assume that something with the offset is wrong. I am using 
<br>
openmpi with an Intel f90 compiler.
<br>
<p>What am I doing wrong?
<br>
<p>Best wishes
<br>
<p>Alexander
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16960.php">Jonathan Dursi: "Re: [OMPI users] problems with parallel MPI-IO..."</a>
<li><strong>Previous message:</strong> <a href="16958.php">Bill Johnstone: "Re: [OMPI users] InfiniBand, different OpenFabrics transport types"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16960.php">Jonathan Dursi: "Re: [OMPI users] problems with parallel MPI-IO..."</a>
<li><strong>Reply:</strong> <a href="16960.php">Jonathan Dursi: "Re: [OMPI users] problems with parallel MPI-IO..."</a>
<li><strong>Maybe reply:</strong> <a href="16961.php">Alexander Beck-Ratzka: "Re: [OMPI users] problems with parallel MPI-IO..."</a>
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
