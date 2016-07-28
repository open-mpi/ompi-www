<?
$subject_val = "Re: [OMPI users] problems on parallel writing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 24 13:40:37 2010" -->
<!-- isoreceived="20100224184037" -->
<!-- sent="Wed, 24 Feb 2010 13:40:32 -0500" -->
<!-- isosent="20100224184032" -->
<!-- name="w k" -->
<!-- email="thuwk99_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems on parallel writing" -->
<!-- id="870f08a61002241040w6d871f51jb4b3f27a1d168a89_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce1002232329v92f9e5at8fa38187b6bf396e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems on parallel writing<br>
<strong>From:</strong> w k (<em>thuwk99_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-24 13:40:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12140.php">jody: "Re: [OMPI users] problems on parallel writing"</a>
<li><strong>Previous message:</strong> <a href="12138.php">Jeff Squyres: "[OMPI users] mpicc failure"</a>
<li><strong>In reply to:</strong> <a href="12124.php">jody: "Re: [OMPI users] problems on parallel writing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12140.php">jody: "Re: [OMPI users] problems on parallel writing"</a>
<li><strong>Reply:</strong> <a href="12140.php">jody: "Re: [OMPI users] problems on parallel writing"</a>
<li><strong>Reply:</strong> <a href="12144.php">Terry Frankcombe: "Re: [OMPI users] problems on parallel writing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jordy,
<br>
<p>I don't think this part caused the problem. For fortran, it doesn't matter
<br>
if the pointer is NULL as long as the count requested from the processor is
<br>
0. Actually I tested the code and it passed this part without problem. I
<br>
believe it aborted at MPI_FILE_SET_VIEW part.
<br>
<p>Just curious, how does C handle the case that we need to collect data in
<br>
array q but only part of the processors has q with a length greater than 0?
<br>
<p>Thanks for your reply,
<br>
Kan
<br>
<p><p><p><p>On Wed, Feb 24, 2010 at 2:29 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I know nearly nothing about fortran
</span><br>
<span class="quotelev1">&gt; but it looks to me as  the pointer 'temp' in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; call MPI_FILE_WRITE(FH, temp, COUNT, MPI_REAL8, STATUS, IERR)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is not defined (or perhaps NULL?) for all processors except processor 0 :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; if ( myid == 0 ) then
</span><br>
<span class="quotelev2">&gt; &gt;     count = 1
</span><br>
<span class="quotelev2">&gt; &gt;  else
</span><br>
<span class="quotelev2">&gt; &gt;     count = 0
</span><br>
<span class="quotelev2">&gt; &gt;  end if
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; if (count .gt. 0) then
</span><br>
<span class="quotelev2">&gt; &gt;     allocate(temp(count))
</span><br>
<span class="quotelev2">&gt; &gt;     temp(1) = 2122010.0d0
</span><br>
<span class="quotelev2">&gt; &gt;  end if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In C/C++ something like this would almost certainly lead to a crash,
</span><br>
<span class="quotelev1">&gt; but i don't know if this would be the case in Fortran...
</span><br>
<span class="quotelev1">&gt; jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 24, 2010 at 4:38 AM, w k &lt;thuwk99_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello everyone,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to implement some functions in my code using parallel writing.
</span><br>
<span class="quotelev2">&gt; &gt; Each processor has an array, say q, whose length is single_no(could be
</span><br>
<span class="quotelev1">&gt; zero
</span><br>
<span class="quotelev2">&gt; &gt; on some processors). I want to write q down to a common file, but the
</span><br>
<span class="quotelev2">&gt; &gt; elements of q would be scattered to their locations in this file. The
</span><br>
<span class="quotelev2">&gt; &gt; locations of the elements are described by a map. I wrote my testing code
</span><br>
<span class="quotelev2">&gt; &gt; according to an example in a MPI-2 tutorial which can be found here:
</span><br>
<span class="quotelev2">&gt; &gt; www.npaci.edu/ahm2002/ahm_ppt/Parallel_IO_MPI_2.ppt. This way of writing
</span><br>
<span class="quotelev1">&gt; is
</span><br>
<span class="quotelev2">&gt; &gt; called &quot;Accessing Irregularly Distributed Arrays&quot; in this tutorial and
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev2">&gt; &gt; example is given in page 42.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tested my code with mvapich and got the result as expected. But when I
</span><br>
<span class="quotelev2">&gt; &gt; tested it with openmpi, it didn't work. I tried the version 1.2.8 and 1.4
</span><br>
<span class="quotelev2">&gt; &gt; and both didn't work. I tried two clusters. Both of them are intel chips
</span><br>
<span class="quotelev2">&gt; &gt; (woodcrest and nehalem), DDR infiniband with Linux system. I got some
</span><br>
<span class="quotelev1">&gt; error
</span><br>
<span class="quotelev2">&gt; &gt; message like
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +++++++++++++++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt; &gt; [n0883:08251] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [n0883:08249] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [n0883:08249] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; [n0883:08249] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt; [n0883:08249] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt; &gt; [n0883:08251] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; [n0883:08251] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt; [n0883:08251] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt; &gt; [n0883:08248] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [n0883:08250] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [n0883:08248] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; [n0883:08248] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt; [n0883:08248] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt; &gt; [n0883:08250] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; [n0883:08250] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt; [n0883:08250] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt; &gt; [n0883:08251] [ 0] /lib64/libpthread.so.0 [0x2b4f0a2f0d60]
</span><br>
<span class="quotelev2">&gt; &gt; +++++++++++++++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My testing code is here:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ===========================================================================================================
</span><br>
<span class="quotelev2">&gt; &gt; program test_MPI_write_adv2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   !-- Template for any mpi program
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   implicit none
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   !--Include the mpi header file
</span><br>
<span class="quotelev2">&gt; &gt;   include 'mpif.h'              ! --&gt; Required statement
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   !--Declare all variables and arrays.
</span><br>
<span class="quotelev2">&gt; &gt;   integer :: fh, ierr, myid, numprocs, itag, etype, filetype, info
</span><br>
<span class="quotelev2">&gt; &gt;   integer :: status(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev2">&gt; &gt;   integer :: irc, ip
</span><br>
<span class="quotelev2">&gt; &gt;   integer(kind=mpi_offset_kind) :: offset, disp
</span><br>
<span class="quotelev2">&gt; &gt;   integer :: i, j, k
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   integer :: num
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   character(len=64) :: filename
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   real(8), pointer :: q(:), temp(:)
</span><br>
<span class="quotelev2">&gt; &gt;   integer, pointer :: map(:)
</span><br>
<span class="quotelev2">&gt; &gt;   integer :: single_no, count
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   !--Initialize MPI
</span><br>
<span class="quotelev2">&gt; &gt;   call MPI_INIT( ierr )         ! --&gt; Required statement
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   !--Who am I? --- get my rank=myid
</span><br>
<span class="quotelev2">&gt; &gt;   call MPI_COMM_RANK( MPI_COMM_WORLD, myid, ierr )
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   !--How many processes in the global group?
</span><br>
<span class="quotelev2">&gt; &gt;   call MPI_COMM_SIZE( MPI_COMM_WORLD, numprocs, ierr )
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   if ( myid == 0 ) then
</span><br>
<span class="quotelev2">&gt; &gt;      single_no = 4
</span><br>
<span class="quotelev2">&gt; &gt;   elseif ( myid == 1 ) then
</span><br>
<span class="quotelev2">&gt; &gt;      single_no = 2
</span><br>
<span class="quotelev2">&gt; &gt;   elseif ( myid == 2 ) then
</span><br>
<span class="quotelev2">&gt; &gt;      single_no = 2
</span><br>
<span class="quotelev2">&gt; &gt;   elseif ( myid == 3 ) then
</span><br>
<span class="quotelev2">&gt; &gt;      single_no = 3
</span><br>
<span class="quotelev2">&gt; &gt;   else
</span><br>
<span class="quotelev2">&gt; &gt;      single_no = 0
</span><br>
<span class="quotelev2">&gt; &gt;   end if
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   if (single_no .gt. 0) allocate(map(single_no))
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   if ( myid == 0 ) then
</span><br>
<span class="quotelev2">&gt; &gt;      map = (/ 0, 2, 5, 6 /)
</span><br>
<span class="quotelev2">&gt; &gt;   elseif ( myid == 1 ) then
</span><br>
<span class="quotelev2">&gt; &gt;      map = (/ 1, 4 /)
</span><br>
<span class="quotelev2">&gt; &gt;   elseif ( myid == 2 ) then
</span><br>
<span class="quotelev2">&gt; &gt;      map = (/ 3, 9 /)
</span><br>
<span class="quotelev2">&gt; &gt;   elseif ( myid == 3 ) then
</span><br>
<span class="quotelev2">&gt; &gt;      map = (/ 7, 8, 10 /)
</span><br>
<span class="quotelev2">&gt; &gt;   end if
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   if (single_no .gt. 0) allocate(q(single_no))
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   if (single_no .gt. 0) then
</span><br>
<span class="quotelev2">&gt; &gt;      do i = 1,single_no
</span><br>
<span class="quotelev2">&gt; &gt;         q(i) = dble(myid+1)*100.0d0 + dble(map(i)+1)
</span><br>
<span class="quotelev2">&gt; &gt;      end do
</span><br>
<span class="quotelev2">&gt; &gt;   end if
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   if (single_no .gt. 0) map = map + 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   if ( myid == 0 ) then
</span><br>
<span class="quotelev2">&gt; &gt;      count = 1
</span><br>
<span class="quotelev2">&gt; &gt;   else
</span><br>
<span class="quotelev2">&gt; &gt;      count = 0
</span><br>
<span class="quotelev2">&gt; &gt;   end if
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   if (count .gt. 0) then
</span><br>
<span class="quotelev2">&gt; &gt;      allocate(temp(count))
</span><br>
<span class="quotelev2">&gt; &gt;      temp(1) = 2122010.0d0
</span><br>
<span class="quotelev2">&gt; &gt;   end if
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   write(filename,'(a)') 'test_write.bin'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   call MPI_FILE_OPEN(MPI_COMM_WORLD, filename,
</span><br>
<span class="quotelev2">&gt; &gt; MPI_MODE_RDWR+MPI_MODE_CREATE, MPI_INFO_NULL, fh, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   call MPI_FILE_WRITE(FH, temp, COUNT, MPI_REAL8, STATUS, IERR)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   call MPI_TYPE_CREATE_INDEXED_BLOCK(single_no, 1, map,
</span><br>
<span class="quotelev2">&gt; &gt; MPI_DOUBLE_PRECISION, filetype, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;   call MPI_TYPE_COMMIT(filetype, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;   disp = 0
</span><br>
<span class="quotelev2">&gt; &gt;   call MPI_FILE_SET_VIEW(fh, disp, MPI_DOUBLE_PRECISION, filetype,
</span><br>
<span class="quotelev1">&gt; 'native',
</span><br>
<span class="quotelev2">&gt; &gt; MPI_INFO_NULL, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;   call MPI_FILE_WRITE_ALL(fh, q, single_no, MPI_DOUBLE_PRECISION, status,
</span><br>
<span class="quotelev2">&gt; &gt; ierr)
</span><br>
<span class="quotelev2">&gt; &gt;   call MPI_FILE_CLOSE(fh, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   if (single_no .gt. 0) deallocate(map)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   if (single_no .gt. 0) deallocate(q)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   if (count .gt. 0) deallocate(temp)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   !--Finilize MPI
</span><br>
<span class="quotelev2">&gt; &gt;   call MPI_FINALIZE(irc)        ! ---&gt; Required statement
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   stop
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; end program test_MPI_write_adv2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; ===========================================================================================================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The expected result is (should be in binary but the values are as
</span><br>
<span class="quotelev1">&gt; follows) :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    2122010.00000000
</span><br>
<span class="quotelev2">&gt; &gt;    101.000000000000
</span><br>
<span class="quotelev2">&gt; &gt;    202.000000000000
</span><br>
<span class="quotelev2">&gt; &gt;    103.000000000000
</span><br>
<span class="quotelev2">&gt; &gt;    304.000000000000
</span><br>
<span class="quotelev2">&gt; &gt;    205.000000000000
</span><br>
<span class="quotelev2">&gt; &gt;    106.000000000000
</span><br>
<span class="quotelev2">&gt; &gt;    107.000000000000
</span><br>
<span class="quotelev2">&gt; &gt;    408.000000000000
</span><br>
<span class="quotelev2">&gt; &gt;    409.000000000000
</span><br>
<span class="quotelev2">&gt; &gt;    310.000000000000
</span><br>
<span class="quotelev2">&gt; &gt;    411.000000000000
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can anyone help me on this problem?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks a lot,
</span><br>
<span class="quotelev2">&gt; &gt; Kan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12139/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12140.php">jody: "Re: [OMPI users] problems on parallel writing"</a>
<li><strong>Previous message:</strong> <a href="12138.php">Jeff Squyres: "[OMPI users] mpicc failure"</a>
<li><strong>In reply to:</strong> <a href="12124.php">jody: "Re: [OMPI users] problems on parallel writing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12140.php">jody: "Re: [OMPI users] problems on parallel writing"</a>
<li><strong>Reply:</strong> <a href="12140.php">jody: "Re: [OMPI users] problems on parallel writing"</a>
<li><strong>Reply:</strong> <a href="12144.php">Terry Frankcombe: "Re: [OMPI users] problems on parallel writing"</a>
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
