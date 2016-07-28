<?
$subject_val = "[OMPI users] problems on parallel writing";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 23 22:38:09 2010" -->
<!-- isoreceived="20100224033809" -->
<!-- sent="Tue, 23 Feb 2010 22:38:03 -0500" -->
<!-- isosent="20100224033803" -->
<!-- name="w k" -->
<!-- email="thuwk99_at_[hidden]" -->
<!-- subject="[OMPI users] problems on parallel writing" -->
<!-- id="870f08a61002231938s11e6ed87m2000994c5d0c3b88_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] problems on parallel writing<br>
<strong>From:</strong> w k (<em>thuwk99_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-23 22:38:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12124.php">jody: "Re: [OMPI users] problems on parallel writing"</a>
<li><strong>Previous message:</strong> <a href="12122.php">Terry Frankcombe: "Re: [OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]	mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12124.php">jody: "Re: [OMPI users] problems on parallel writing"</a>
<li><strong>Reply:</strong> <a href="12124.php">jody: "Re: [OMPI users] problems on parallel writing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p><p>I'm trying to implement some functions in my code using parallel writing.
<br>
Each processor has an array, say q, whose length is single_no(could be zero
<br>
on some processors). I want to write q down to a common file, but the
<br>
elements of q would be scattered to their locations in this file. The
<br>
locations of the elements are described by a map. I wrote my testing code
<br>
according to an example in a MPI-2 tutorial which can be found here:
<br>
www.npaci.edu/ahm2002/ahm_ppt/Parallel_IO_MPI_2.ppt. This way of writing is
<br>
called &quot;Accessing Irregularly Distributed Arrays&quot; in this tutorial and the
<br>
example is given in page 42.
<br>
<p>I tested my code with mvapich and got the result as expected. But when I
<br>
tested it with openmpi, it didn't work. I tried the version 1.2.8 and 1.4
<br>
and both didn't work. I tried two clusters. Both of them are intel chips
<br>
(woodcrest and nehalem), DDR infiniband with Linux system. I got some error
<br>
message like
<br>
<p>+++++++++++++++++++++++++++++++++++++++++++++++++++
<br>
[n0883:08251] *** Process received signal ***
<br>
[n0883:08249] *** Process received signal ***
<br>
[n0883:08249] Signal: Segmentation fault (11)
<br>
[n0883:08249] Signal code: Address not mapped (1)
<br>
[n0883:08249] Failing at address: (nil)
<br>
[n0883:08251] Signal: Segmentation fault (11)
<br>
[n0883:08251] Signal code: Address not mapped (1)
<br>
[n0883:08251] Failing at address: (nil)
<br>
[n0883:08248] *** Process received signal ***
<br>
[n0883:08250] *** Process received signal ***
<br>
[n0883:08248] Signal: Segmentation fault (11)
<br>
[n0883:08248] Signal code: Address not mapped (1)
<br>
[n0883:08248] Failing at address: (nil)
<br>
[n0883:08250] Signal: Segmentation fault (11)
<br>
[n0883:08250] Signal code: Address not mapped (1)
<br>
[n0883:08250] Failing at address: (nil)
<br>
[n0883:08251] [ 0] /lib64/libpthread.so.0 [0x2b4f0a2f0d60]
<br>
+++++++++++++++++++++++++++++++++++++++++++++++++++
<br>
<p><p><p>My testing code is here:
<br>
<p>===========================================================================================================
<br>
program test_MPI_write_adv2
<br>
<p><p>&nbsp;&nbsp;!-- Template for any mpi program
<br>
<p>&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;!--Include the mpi header file
<br>
&nbsp;&nbsp;include 'mpif.h'              ! --&gt; Required statement
<br>
<p>&nbsp;&nbsp;!--Declare all variables and arrays.
<br>
&nbsp;&nbsp;integer :: fh, ierr, myid, numprocs, itag, etype, filetype, info
<br>
&nbsp;&nbsp;integer :: status(MPI_STATUS_SIZE)
<br>
&nbsp;&nbsp;integer :: irc, ip
<br>
&nbsp;&nbsp;integer(kind=mpi_offset_kind) :: offset, disp
<br>
&nbsp;&nbsp;integer :: i, j, k
<br>
<p>&nbsp;&nbsp;integer :: num
<br>
<p>&nbsp;&nbsp;character(len=64) :: filename
<br>
<p>&nbsp;&nbsp;real(8), pointer :: q(:), temp(:)
<br>
&nbsp;&nbsp;integer, pointer :: map(:)
<br>
&nbsp;&nbsp;integer :: single_no, count
<br>
<p><p>&nbsp;&nbsp;!--Initialize MPI
<br>
&nbsp;&nbsp;call MPI_INIT( ierr )         ! --&gt; Required statement
<br>
<p>&nbsp;&nbsp;!--Who am I? --- get my rank=myid
<br>
&nbsp;&nbsp;call MPI_COMM_RANK( MPI_COMM_WORLD, myid, ierr )
<br>
<p>&nbsp;&nbsp;!--How many processes in the global group?
<br>
&nbsp;&nbsp;call MPI_COMM_SIZE( MPI_COMM_WORLD, numprocs, ierr )
<br>
<p>&nbsp;&nbsp;if ( myid == 0 ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;single_no = 4
<br>
&nbsp;&nbsp;elseif ( myid == 1 ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;single_no = 2
<br>
&nbsp;&nbsp;elseif ( myid == 2 ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;single_no = 2
<br>
&nbsp;&nbsp;elseif ( myid == 3 ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;single_no = 3
<br>
&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;single_no = 0
<br>
&nbsp;&nbsp;end if
<br>
<p>&nbsp;&nbsp;if (single_no .gt. 0) allocate(map(single_no))
<br>
<p>&nbsp;&nbsp;if ( myid == 0 ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;map = (/ 0, 2, 5, 6 /)
<br>
&nbsp;&nbsp;elseif ( myid == 1 ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;map = (/ 1, 4 /)
<br>
&nbsp;&nbsp;elseif ( myid == 2 ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;map = (/ 3, 9 /)
<br>
&nbsp;&nbsp;elseif ( myid == 3 ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;map = (/ 7, 8, 10 /)
<br>
&nbsp;&nbsp;end if
<br>
<p>&nbsp;&nbsp;if (single_no .gt. 0) allocate(q(single_no))
<br>
<p>&nbsp;&nbsp;if (single_no .gt. 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do i = 1,single_no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;q(i) = dble(myid+1)*100.0d0 + dble(map(i)+1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
&nbsp;&nbsp;end if
<br>
<p>&nbsp;&nbsp;if (single_no .gt. 0) map = map + 1
<br>
<p>&nbsp;&nbsp;if ( myid == 0 ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;count = 1
<br>
&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;count = 0
<br>
&nbsp;&nbsp;end if
<br>
<p>&nbsp;&nbsp;if (count .gt. 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocate(temp(count))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;temp(1) = 2122010.0d0
<br>
&nbsp;&nbsp;end if
<br>
<p>&nbsp;&nbsp;write(filename,'(a)') 'test_write.bin'
<br>
<p>&nbsp;&nbsp;call MPI_FILE_OPEN(MPI_COMM_WORLD, filename,
<br>
MPI_MODE_RDWR+MPI_MODE_CREATE, MPI_INFO_NULL, fh, ierr)
<br>
<p>&nbsp;&nbsp;call MPI_FILE_WRITE(FH, temp, COUNT, MPI_REAL8, STATUS, IERR)
<br>
<p>&nbsp;&nbsp;call MPI_TYPE_CREATE_INDEXED_BLOCK(single_no, 1, map,
<br>
MPI_DOUBLE_PRECISION, filetype, ierr)
<br>
&nbsp;&nbsp;call MPI_TYPE_COMMIT(filetype, ierr)
<br>
&nbsp;&nbsp;disp = 0
<br>
&nbsp;&nbsp;call MPI_FILE_SET_VIEW(fh, disp, MPI_DOUBLE_PRECISION, filetype, 'native',
<br>
MPI_INFO_NULL, ierr)
<br>
&nbsp;&nbsp;call MPI_FILE_WRITE_ALL(fh, q, single_no, MPI_DOUBLE_PRECISION, status,
<br>
ierr)
<br>
&nbsp;&nbsp;call MPI_FILE_CLOSE(fh, ierr)
<br>
<p><p>&nbsp;&nbsp;if (single_no .gt. 0) deallocate(map)
<br>
<p>&nbsp;&nbsp;if (single_no .gt. 0) deallocate(q)
<br>
<p>&nbsp;&nbsp;if (count .gt. 0) deallocate(temp)
<br>
<p>&nbsp;&nbsp;!--Finilize MPI
<br>
&nbsp;&nbsp;call MPI_FINALIZE(irc)        ! ---&gt; Required statement
<br>
<p>&nbsp;&nbsp;stop
<br>
<p><p>end program test_MPI_write_adv2
<br>
===========================================================================================================
<br>
<p><p>The expected result is (should be in binary but the values are as follows) :
<br>
<p>&nbsp;&nbsp;&nbsp;2122010.00000000
<br>
&nbsp;&nbsp;&nbsp;101.000000000000
<br>
&nbsp;&nbsp;&nbsp;202.000000000000
<br>
&nbsp;&nbsp;&nbsp;103.000000000000
<br>
&nbsp;&nbsp;&nbsp;304.000000000000
<br>
&nbsp;&nbsp;&nbsp;205.000000000000
<br>
&nbsp;&nbsp;&nbsp;106.000000000000
<br>
&nbsp;&nbsp;&nbsp;107.000000000000
<br>
&nbsp;&nbsp;&nbsp;408.000000000000
<br>
&nbsp;&nbsp;&nbsp;409.000000000000
<br>
&nbsp;&nbsp;&nbsp;310.000000000000
<br>
&nbsp;&nbsp;&nbsp;411.000000000000
<br>
<p><p>Can anyone help me on this problem?
<br>
<p><p>Thanks a lot,
<br>
Kan
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12123/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12124.php">jody: "Re: [OMPI users] problems on parallel writing"</a>
<li><strong>Previous message:</strong> <a href="12122.php">Terry Frankcombe: "Re: [OMPI users] [btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]	mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12124.php">jody: "Re: [OMPI users] problems on parallel writing"</a>
<li><strong>Reply:</strong> <a href="12124.php">jody: "Re: [OMPI users] problems on parallel writing"</a>
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
