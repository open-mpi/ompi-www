<?
$subject_val = "Re: [OMPI users] problems on parallel writing";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 25 03:35:16 2010" -->
<!-- isoreceived="20100225083516" -->
<!-- sent="Thu, 25 Feb 2010 09:35:10 +0100" -->
<!-- isosent="20100225083510" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems on parallel writing" -->
<!-- id="9b0da5ce1002250035j7d0e015bpa2f446d10a498a03_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1267062456.5836.54.camel_at_rscpc28.anu.edu.au" -->
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
<strong>Date:</strong> 2010-02-25 03:35:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12152.php">Amr Hassan: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Previous message:</strong> <a href="12150.php">Brian Budge: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>In reply to:</strong> <a href="12144.php">Terry Frankcombe: "Re: [OMPI users] problems on parallel writing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12163.php">w k: "Re: [OMPI users] problems on parallel writing"</a>
<li><strong>Reply:</strong> <a href="12163.php">w k: "Re: [OMPI users] problems on parallel writing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
Just wanted to let you know:
<br>
<p>I translated your program to C ran it, and it crashed at MPI_FILE_SET_VIEW
<br>
in a similar way than yours did.
<br>
then i added an if-clause to prevent the call of MPI_FILE_WRITE with
<br>
the undefined value.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (myid == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_write(fh, temp, count, MPI_DOUBLE, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
After this it ran without crash.
<br>
However, the output is not what you expected:
<br>
The number 2122010.0 was not there - probably overwritten by the
<br>
MPI_FILE_WRITE_ALL.
<br>
But this was fixed by replacing the line
<br>
&nbsp;&nbsp;disp=0
<br>
by
<br>
&nbsp;&nbsp;disp=8
<br>
and removing the
<br>
&nbsp;&nbsp;if (single_no .gt. 0) map = map + 1
<br>
statement.
<br>
<p>So here's what all looks like:
<br>
===========================================================================================================
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
<p><p>&nbsp;&nbsp;if ( myid == 0 ) then
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
<p>&nbsp;&nbsp;if (my_id == 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FILE_WRITE(FH, temp, COUNT, MPI_REAL8, STATUS, IERR)
<br>
&nbsp;&nbsp;endif
<br>
<p>&nbsp;&nbsp;call MPI_TYPE_CREATE_INDEXED_BLOCK(single_no, 1, map,
<br>
MPI_DOUBLE_PRECISION, filetype, ierr)
<br>
&nbsp;&nbsp;call MPI_TYPE_COMMIT(filetype, ierr)
<br>
&nbsp;&nbsp;disp = 8  ! ---&gt; size of MPI_REAL8 (number written when my_id = 0)
<br>
&nbsp;&nbsp;call MPI_FILE_SET_VIEW(fh, disp, MPI_DOUBLE_PRECISION, filetype,
<br>
'native', MPI_INFO_NULL, ierr)
<br>
&nbsp;&nbsp;call MPI_FILE_WRITE_ALL(fh, q, single_no, MPI_DOUBLE_PRECISION, status, ierr)
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
<p>Regards
<br>
&nbsp;&nbsp;jody
<br>
<p>On Thu, Feb 25, 2010 at 2:47 AM, Terry Frankcombe &lt;terry_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Wed, 2010-02-24 at 13:40 -0500, w k wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jordy,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't think this part caused the problem. For fortran, it doesn't
</span><br>
<span class="quotelev2">&gt;&gt; matter if the pointer is NULL as long as the count requested from the
</span><br>
<span class="quotelev2">&gt;&gt; processor is 0. Actually I tested the code and it passed this part
</span><br>
<span class="quotelev2">&gt;&gt; without problem. I believe it aborted at MPI_FILE_SET_VIEW part.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the record: &#160;A pointer is not NULL unless you've nullified it.
</span><br>
<span class="quotelev1">&gt; IIRC, the Fortran standard says that any non-assigning reference to an
</span><br>
<span class="quotelev1">&gt; unassigned, unnullified pointer is undefined (or maybe illegal... check
</span><br>
<span class="quotelev1">&gt; the standard).
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
<li><strong>Next message:</strong> <a href="12152.php">Amr Hassan: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>Previous message:</strong> <a href="12150.php">Brian Budge: "Re: [OMPI users] Sending relatively large messages with high frequency"</a>
<li><strong>In reply to:</strong> <a href="12144.php">Terry Frankcombe: "Re: [OMPI users] problems on parallel writing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12163.php">w k: "Re: [OMPI users] problems on parallel writing"</a>
<li><strong>Reply:</strong> <a href="12163.php">w k: "Re: [OMPI users] problems on parallel writing"</a>
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
