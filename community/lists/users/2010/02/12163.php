<?
$subject_val = "Re: [OMPI users] problems on parallel writing";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 21:42:57 2010" -->
<!-- isoreceived="20100226024257" -->
<!-- sent="Thu, 25 Feb 2010 21:42:52 -0500" -->
<!-- isosent="20100226024252" -->
<!-- name="w k" -->
<!-- email="thuwk99_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems on parallel writing" -->
<!-- id="870f08a61002251842l2ce2ff5es5ee100383dc0022e_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce1002250035j7d0e015bpa2f446d10a498a03_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-02-25 21:42:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12164.php">Federico Golfrè Andreasi: "[OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="12162.php">Amr Hassan: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>In reply to:</strong> <a href="12151.php">jody: "Re: [OMPI users] problems on parallel writing"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jody,
<br>
<p>I tried your suggestion but it still failed. Attached is the modified code.
<br>
If your machine has fortran compiler as well, you can try it.
<br>
<p>BTW, how many processors did you use for testing your C code?
<br>
<p><p>Thanks,
<br>
Kan
<br>
<p><p><p><p>On Thu, Feb 25, 2010 at 3:35 AM, jody &lt;jody.xha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; Just wanted to let you know:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I translated your program to C ran it, and it crashed at MPI_FILE_SET_VIEW
</span><br>
<span class="quotelev1">&gt; in a similar way than yours did.
</span><br>
<span class="quotelev1">&gt; then i added an if-clause to prevent the call of MPI_FILE_WRITE with
</span><br>
<span class="quotelev1">&gt; the undefined value.
</span><br>
<span class="quotelev1">&gt;    if (myid == 0) {
</span><br>
<span class="quotelev1">&gt;        MPI_File_write(fh, temp, count, MPI_DOUBLE, &amp;status);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; After this it ran without crash.
</span><br>
<span class="quotelev1">&gt; However, the output is not what you expected:
</span><br>
<span class="quotelev1">&gt; The number 2122010.0 was not there - probably overwritten by the
</span><br>
<span class="quotelev1">&gt; MPI_FILE_WRITE_ALL.
</span><br>
<span class="quotelev1">&gt; But this was fixed by replacing the line
</span><br>
<span class="quotelev1">&gt;  disp=0
</span><br>
<span class="quotelev1">&gt; by
</span><br>
<span class="quotelev1">&gt;  disp=8
</span><br>
<span class="quotelev1">&gt; and removing the
</span><br>
<span class="quotelev1">&gt;   if (single_no .gt. 0) map = map + 1
</span><br>
<span class="quotelev1">&gt; statement.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So here's what all looks like:
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
<span class="quotelev1">&gt;  !-- Template for any mpi program
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  implicit none
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  !--Include the mpi header file
</span><br>
<span class="quotelev1">&gt;  include 'mpif.h'              ! --&gt; Required statement
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  !--Declare all variables and arrays.
</span><br>
<span class="quotelev1">&gt;  integer :: fh, ierr, myid, numprocs, itag, etype, filetype, info
</span><br>
<span class="quotelev1">&gt;  integer :: status(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev1">&gt;  integer :: irc, ip
</span><br>
<span class="quotelev1">&gt;  integer(kind=mpi_offset_kind) :: offset, disp
</span><br>
<span class="quotelev1">&gt;  integer :: i, j, k
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  integer :: num
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  character(len=64) :: filename
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  real(8), pointer :: q(:), temp(:)
</span><br>
<span class="quotelev1">&gt;  integer, pointer :: map(:)
</span><br>
<span class="quotelev1">&gt;  integer :: single_no, count
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  !--Initialize MPI
</span><br>
<span class="quotelev1">&gt;  call MPI_INIT( ierr )         ! --&gt; Required statement
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  !--Who am I? --- get my rank=myid
</span><br>
<span class="quotelev1">&gt;  call MPI_COMM_RANK( MPI_COMM_WORLD, myid, ierr )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  !--How many processes in the global group?
</span><br>
<span class="quotelev1">&gt;  call MPI_COMM_SIZE( MPI_COMM_WORLD, numprocs, ierr )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if ( myid == 0 ) then
</span><br>
<span class="quotelev1">&gt;     single_no = 4
</span><br>
<span class="quotelev1">&gt;  elseif ( myid == 1 ) then
</span><br>
<span class="quotelev1">&gt;     single_no = 2
</span><br>
<span class="quotelev1">&gt;  elseif ( myid == 2 ) then
</span><br>
<span class="quotelev1">&gt;     single_no = 2
</span><br>
<span class="quotelev1">&gt;  elseif ( myid == 3 ) then
</span><br>
<span class="quotelev1">&gt;     single_no = 3
</span><br>
<span class="quotelev1">&gt;  else
</span><br>
<span class="quotelev1">&gt;     single_no = 0
</span><br>
<span class="quotelev1">&gt;  end if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if (single_no .gt. 0) allocate(map(single_no))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if ( myid == 0 ) then
</span><br>
<span class="quotelev1">&gt;     map = (/ 0, 2, 5, 6 /)
</span><br>
<span class="quotelev1">&gt;  elseif ( myid == 1 ) then
</span><br>
<span class="quotelev1">&gt;     map = (/ 1, 4 /)
</span><br>
<span class="quotelev1">&gt;  elseif ( myid == 2 ) then
</span><br>
<span class="quotelev1">&gt;     map = (/ 3, 9 /)
</span><br>
<span class="quotelev1">&gt;  elseif ( myid == 3 ) then
</span><br>
<span class="quotelev1">&gt;     map = (/ 7, 8, 10 /)
</span><br>
<span class="quotelev1">&gt;  end if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if (single_no .gt. 0) allocate(q(single_no))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if (single_no .gt. 0) then
</span><br>
<span class="quotelev1">&gt;     do i = 1,single_no
</span><br>
<span class="quotelev1">&gt;        q(i) = dble(myid+1)*100.0d0 + dble(map(i)+1)
</span><br>
<span class="quotelev1">&gt;     end do
</span><br>
<span class="quotelev1">&gt;  end if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   if ( myid == 0 ) then
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
<span class="quotelev1">&gt;  if (count .gt. 0) then
</span><br>
<span class="quotelev1">&gt;     allocate(temp(count))
</span><br>
<span class="quotelev1">&gt;     temp(1) = 2122010.0d0
</span><br>
<span class="quotelev1">&gt;  end if
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  write(filename,'(a)') 'test_write.bin'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  call MPI_FILE_OPEN(MPI_COMM_WORLD, filename,
</span><br>
<span class="quotelev1">&gt; MPI_MODE_RDWR+MPI_MODE_CREATE, MPI_INFO_NULL, fh, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   if (my_id == 0) then
</span><br>
<span class="quotelev1">&gt;     call MPI_FILE_WRITE(FH, temp, COUNT, MPI_REAL8, STATUS, IERR)
</span><br>
<span class="quotelev1">&gt;   endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  call MPI_TYPE_CREATE_INDEXED_BLOCK(single_no, 1, map,
</span><br>
<span class="quotelev1">&gt; MPI_DOUBLE_PRECISION, filetype, ierr)
</span><br>
<span class="quotelev1">&gt;  call MPI_TYPE_COMMIT(filetype, ierr)
</span><br>
<span class="quotelev1">&gt;   disp = 8  ! ---&gt; size of MPI_REAL8 (number written when my_id = 0)
</span><br>
<span class="quotelev1">&gt;   call MPI_FILE_SET_VIEW(fh, disp, MPI_DOUBLE_PRECISION, filetype,
</span><br>
<span class="quotelev1">&gt; 'native', MPI_INFO_NULL, ierr)
</span><br>
<span class="quotelev1">&gt;  call MPI_FILE_WRITE_ALL(fh, q, single_no, MPI_DOUBLE_PRECISION, status,
</span><br>
<span class="quotelev1">&gt; ierr)
</span><br>
<span class="quotelev1">&gt;  call MPI_FILE_CLOSE(fh, ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if (single_no .gt. 0) deallocate(map)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if (single_no .gt. 0) deallocate(q)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  if (count .gt. 0) deallocate(temp)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  !--Finilize MPI
</span><br>
<span class="quotelev1">&gt;  call MPI_FINALIZE(irc)        ! ---&gt; Required statement
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  stop
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; end program test_MPI_write_adv2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ===========================================================================================================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;   jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Feb 25, 2010 at 2:47 AM, Terry Frankcombe &lt;terry_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, 2010-02-24 at 13:40 -0500, w k wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Jordy,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I don't think this part caused the problem. For fortran, it doesn't
</span><br>
<span class="quotelev3">&gt; &gt;&gt; matter if the pointer is NULL as long as the count requested from the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; processor is 0. Actually I tested the code and it passed this part
</span><br>
<span class="quotelev3">&gt; &gt;&gt; without problem. I believe it aborted at MPI_FILE_SET_VIEW part.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For the record:  A pointer is not NULL unless you've nullified it.
</span><br>
<span class="quotelev2">&gt; &gt; IIRC, the Fortran standard says that any non-assigning reference to an
</span><br>
<span class="quotelev2">&gt; &gt; unassigned, unnullified pointer is undefined (or maybe illegal... check
</span><br>
<span class="quotelev2">&gt; &gt; the standard).
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
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12163/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12163/test_MPI_write_adv2.f90">test_MPI_write_adv2.f90</a>
</ul>
<!-- attachment="test_MPI_write_adv2.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12164.php">Federico Golfrè Andreasi: "[OMPI users] Number of processes and spawn"</a>
<li><strong>Previous message:</strong> <a href="12162.php">Amr Hassan: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>In reply to:</strong> <a href="12151.php">jody: "Re: [OMPI users] problems on parallel writing"</a>
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
