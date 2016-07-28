<?
$subject_val = "Re: [OMPI users] problems on parallel writing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 24 02:29:51 2010" -->
<!-- isoreceived="20100224072951" -->
<!-- sent="Wed, 24 Feb 2010 08:29:45 +0100" -->
<!-- isosent="20100224072945" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems on parallel writing" -->
<!-- id="9b0da5ce1002232329v92f9e5at8fa38187b6bf396e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="870f08a61002231938s11e6ed87m2000994c5d0c3b88_at_mail.gmail.com" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-24 02:29:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12125.php">Gabriele Fatigati: "[OMPI users] MPi Abort verbosity"</a>
<li><strong>Previous message:</strong> <a href="12123.php">w k: "[OMPI users] problems on parallel writing"</a>
<li><strong>In reply to:</strong> <a href="12123.php">w k: "[OMPI users] problems on parallel writing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12139.php">w k: "Re: [OMPI users] problems on parallel writing"</a>
<li><strong>Reply:</strong> <a href="12139.php">w k: "Re: [OMPI users] problems on parallel writing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I know nearly nothing about fortran
<br>
but it looks to me as  the pointer 'temp' in
<br>
<p><span class="quotelev1">&gt; call MPI_FILE_WRITE(FH, temp, COUNT, MPI_REAL8, STATUS, IERR)
</span><br>
<p>is not defined (or perhaps NULL?) for all processors except processor 0 :
<br>
<p><span class="quotelev1">&gt; if ( myid == 0 ) then
</span><br>
<span class="quotelev1">&gt;     count = 1
</span><br>
<span class="quotelev1">&gt;  else
</span><br>
<span class="quotelev1">&gt;     count = 0
</span><br>
<span class="quotelev1">&gt;  end if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if (count .gt. 0) then
</span><br>
<span class="quotelev1">&gt;     allocate(temp(count))
</span><br>
<span class="quotelev1">&gt;     temp(1) = 2122010.0d0
</span><br>
<span class="quotelev1">&gt;  end if
</span><br>
<p>In C/C++ something like this would almost certainly lead to a crash,
<br>
but i don't know if this would be the case in Fortran...
<br>
jody
<br>
<p><p>On Wed, Feb 24, 2010 at 4:38 AM, w k &lt;thuwk99_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to implement some functions in my code using parallel writing.
</span><br>
<span class="quotelev1">&gt; Each processor has an array, say q, whose length is single_no(could be zero
</span><br>
<span class="quotelev1">&gt; on some processors). I want to write q down to a common file, but the
</span><br>
<span class="quotelev1">&gt; elements of q would be scattered to their locations in this file. The
</span><br>
<span class="quotelev1">&gt; locations of the elements are described by a map. I wrote my testing code
</span><br>
<span class="quotelev1">&gt; according to an example in a MPI-2 tutorial which can be found here:
</span><br>
<span class="quotelev1">&gt; www.npaci.edu/ahm2002/ahm_ppt/Parallel_IO_MPI_2.ppt. This way of writing is
</span><br>
<span class="quotelev1">&gt; called &quot;Accessing Irregularly Distributed Arrays&quot; in this tutorial and the
</span><br>
<span class="quotelev1">&gt; example is given in page 42.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tested my code with mvapich and got the result as expected. But when I
</span><br>
<span class="quotelev1">&gt; tested it with openmpi, it didn't work. I tried the version 1.2.8 and 1.4
</span><br>
<span class="quotelev1">&gt; and both didn't work. I tried two clusters. Both of them are intel chips
</span><br>
<span class="quotelev1">&gt; (woodcrest and nehalem), DDR infiniband with Linux system. I got some error
</span><br>
<span class="quotelev1">&gt; message like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +++++++++++++++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt; [n0883:08251] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [n0883:08249] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [n0883:08249] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [n0883:08249] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [n0883:08249] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [n0883:08251] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [n0883:08251] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [n0883:08251] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [n0883:08248] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [n0883:08250] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [n0883:08248] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [n0883:08248] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [n0883:08248] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [n0883:08250] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [n0883:08250] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [n0883:08250] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [n0883:08251] [ 0] /lib64/libpthread.so.0 [0x2b4f0a2f0d60]
</span><br>
<span class="quotelev1">&gt; +++++++++++++++++++++++++++++++++++++++++++++++++++
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My testing code is here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===========================================================================================================
</span><br>
<span class="quotelev1">&gt; program test_MPI_write_adv2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; !-- Template for any mpi program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; implicit none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; !--Include the mpi header file
</span><br>
<span class="quotelev1">&gt; &#160; include 'mpif.h'&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; ! --&gt; Required statement
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; !--Declare all variables and arrays.
</span><br>
<span class="quotelev1">&gt; &#160; integer :: fh, ierr, myid, numprocs, itag, etype, filetype, info
</span><br>
<span class="quotelev1">&gt; &#160; integer :: status(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev1">&gt; &#160; integer :: irc, ip
</span><br>
<span class="quotelev1">&gt; &#160; integer(kind=mpi_offset_kind) :: offset, disp
</span><br>
<span class="quotelev1">&gt; &#160; integer :: i, j, k
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; integer :: num
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; character(len=64) :: filename
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; real(8), pointer :: q(:), temp(:)
</span><br>
<span class="quotelev1">&gt; &#160; integer, pointer :: map(:)
</span><br>
<span class="quotelev1">&gt; &#160; integer :: single_no, count
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; !--Initialize MPI
</span><br>
<span class="quotelev1">&gt; &#160; call MPI_INIT( ierr )&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; ! --&gt; Required statement
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; !--Who am I? --- get my rank=myid
</span><br>
<span class="quotelev1">&gt; &#160; call MPI_COMM_RANK( MPI_COMM_WORLD, myid, ierr )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; !--How many processes in the global group?
</span><br>
<span class="quotelev1">&gt; &#160; call MPI_COMM_SIZE( MPI_COMM_WORLD, numprocs, ierr )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; if ( myid == 0 ) then
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160; single_no = 4
</span><br>
<span class="quotelev1">&gt; &#160; elseif ( myid == 1 ) then
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160; single_no = 2
</span><br>
<span class="quotelev1">&gt; &#160; elseif ( myid == 2 ) then
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160; single_no = 2
</span><br>
<span class="quotelev1">&gt; &#160; elseif ( myid == 3 ) then
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160; single_no = 3
</span><br>
<span class="quotelev1">&gt; &#160; else
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160; single_no = 0
</span><br>
<span class="quotelev1">&gt; &#160; end if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; if (single_no .gt. 0) allocate(map(single_no))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; if ( myid == 0 ) then
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160; map = (/ 0, 2, 5, 6 /)
</span><br>
<span class="quotelev1">&gt; &#160; elseif ( myid == 1 ) then
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160; map = (/ 1, 4 /)
</span><br>
<span class="quotelev1">&gt; &#160; elseif ( myid == 2 ) then
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160; map = (/ 3, 9 /)
</span><br>
<span class="quotelev1">&gt; &#160; elseif ( myid == 3 ) then
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160; map = (/ 7, 8, 10 /)
</span><br>
<span class="quotelev1">&gt; &#160; end if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; if (single_no .gt. 0) allocate(q(single_no))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; if (single_no .gt. 0) then
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160; do i = 1,single_no
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160; q(i) = dble(myid+1)*100.0d0 + dble(map(i)+1)
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160; end do
</span><br>
<span class="quotelev1">&gt; &#160; end if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; if (single_no .gt. 0) map = map + 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; if ( myid == 0 ) then
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160; count = 1
</span><br>
<span class="quotelev1">&gt; &#160; else
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160; count = 0
</span><br>
<span class="quotelev1">&gt; &#160; end if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; if (count .gt. 0) then
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160; allocate(temp(count))
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160; temp(1) = 2122010.0d0
</span><br>
<span class="quotelev1">&gt; &#160; end if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; write(filename,'(a)') 'test_write.bin'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; call MPI_FILE_OPEN(MPI_COMM_WORLD, filename,
</span><br>
<span class="quotelev1">&gt; MPI_MODE_RDWR+MPI_MODE_CREATE, MPI_INFO_NULL, fh, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; call MPI_FILE_WRITE(FH, temp, COUNT, MPI_REAL8, STATUS, IERR)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; call MPI_TYPE_CREATE_INDEXED_BLOCK(single_no, 1, map,
</span><br>
<span class="quotelev1">&gt; MPI_DOUBLE_PRECISION, filetype, ierr)
</span><br>
<span class="quotelev1">&gt; &#160; call MPI_TYPE_COMMIT(filetype, ierr)
</span><br>
<span class="quotelev1">&gt; &#160; disp = 0
</span><br>
<span class="quotelev1">&gt; &#160; call MPI_FILE_SET_VIEW(fh, disp, MPI_DOUBLE_PRECISION, filetype, 'native',
</span><br>
<span class="quotelev1">&gt; MPI_INFO_NULL, ierr)
</span><br>
<span class="quotelev1">&gt; &#160; call MPI_FILE_WRITE_ALL(fh, q, single_no, MPI_DOUBLE_PRECISION, status,
</span><br>
<span class="quotelev1">&gt; ierr)
</span><br>
<span class="quotelev1">&gt; &#160; call MPI_FILE_CLOSE(fh, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; if (single_no .gt. 0) deallocate(map)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; if (single_no .gt. 0) deallocate(q)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; if (count .gt. 0) deallocate(temp)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; !--Finilize MPI
</span><br>
<span class="quotelev1">&gt; &#160; call MPI_FINALIZE(irc)&#160;&#160;&#160;&#160;&#160;&#160;&#160; ! ---&gt; Required statement
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160; stop
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; end program test_MPI_write_adv2
</span><br>
<span class="quotelev1">&gt; ===========================================================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The expected result is (should be in binary but the values are as follows) :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160; 2122010.00000000
</span><br>
<span class="quotelev1">&gt; &#160;&#160; 101.000000000000
</span><br>
<span class="quotelev1">&gt; &#160;&#160; 202.000000000000
</span><br>
<span class="quotelev1">&gt; &#160;&#160; 103.000000000000
</span><br>
<span class="quotelev1">&gt; &#160;&#160; 304.000000000000
</span><br>
<span class="quotelev1">&gt; &#160;&#160; 205.000000000000
</span><br>
<span class="quotelev1">&gt; &#160;&#160; 106.000000000000
</span><br>
<span class="quotelev1">&gt; &#160;&#160; 107.000000000000
</span><br>
<span class="quotelev1">&gt; &#160;&#160; 408.000000000000
</span><br>
<span class="quotelev1">&gt; &#160;&#160; 409.000000000000
</span><br>
<span class="quotelev1">&gt; &#160;&#160; 310.000000000000
</span><br>
<span class="quotelev1">&gt; &#160;&#160; 411.000000000000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone help me on this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot,
</span><br>
<span class="quotelev1">&gt; Kan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12125.php">Gabriele Fatigati: "[OMPI users] MPi Abort verbosity"</a>
<li><strong>Previous message:</strong> <a href="12123.php">w k: "[OMPI users] problems on parallel writing"</a>
<li><strong>In reply to:</strong> <a href="12123.php">w k: "[OMPI users] problems on parallel writing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12139.php">w k: "Re: [OMPI users] problems on parallel writing"</a>
<li><strong>Reply:</strong> <a href="12139.php">w k: "Re: [OMPI users] problems on parallel writing"</a>
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
