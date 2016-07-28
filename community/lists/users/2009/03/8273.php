<?
$subject_val = "[OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 12:51:09 2009" -->
<!-- isoreceived="20090303175109" -->
<!-- sent="Tue, 3 Mar 2009 10:51:04 -0700" -->
<!-- isosent="20090303175104" -->
<!-- name="Nathan Baca" -->
<!-- email="nathan.baca_at_[hidden]" -->
<!-- subject="[OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3" -->
<!-- id="d1196de80903030951g562b7da9x78566446d6666f40_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3<br>
<strong>From:</strong> Nathan Baca (<em>nathan.baca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-03 12:51:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8274.php">Brian Dobbins: "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<li><strong>Previous message:</strong> <a href="8272.php">Ondrej Marsalek: "[OMPI users] Calculation stuck in MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8274.php">Brian Dobbins: "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<li><strong>Reply:</strong> <a href="8274.php">Brian Dobbins: "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<li><strong>Reply:</strong> <a href="8281.php">Jeff Squyres: "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am seeing inconsistent mpi-io behavior when writing to a Lustre file
<br>
system using open mpi 1.3 with romio. What follows is a simple reproducer
<br>
and output. Essentially one or more of the running processes does not read
<br>
or write the correct amount of data to its part of a file residing on a
<br>
Lustre (parallel) file system.
<br>
<p>Any help figuring out what is happening is greatly appreciated. Thanks, Nate
<br>
<p>program gcrm_test_io
<br>
&nbsp;&nbsp;implicit none
<br>
&nbsp;&nbsp;include &quot;mpif.h&quot;
<br>
<p>&nbsp;&nbsp;integer X_SIZE
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer w_me, w_nprocs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer  my_info
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer i
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer (kind=4) :: ierr
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer (kind=4) :: fileID
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer (kind=MPI_OFFSET_KIND)        :: mylen
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer (kind=MPI_OFFSET_KIND)        :: offset
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer status(MPI_STATUS_SIZE)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer count
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer ncells
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;real (kind=4), allocatable, dimension (:)     :: array2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;logical sync
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_init(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD,w_nprocs,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD,w_me,ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_info_create(my_info, ierr)
<br>
!     optional ways to set things in mpi-io
<br>
!     call mpi_info_set   (my_info, &quot;romio_ds_read&quot; , &quot;enable&quot;   , ierr)
<br>
!     call mpi_info_set   (my_info, &quot;romio_ds_write&quot;, &quot;enable&quot;   , ierr)
<br>
!     call mpi_info_set   (my_info, &quot;romio_cb_write&quot;, &quot;enable&quot;    , ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x_size = 410011  ! A 'big' number, with bigger numbers it is more
<br>
likely to fail
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sync = .true.  ! Extra file synchronization
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ncells = (X_SIZE * w_nprocs)
<br>
<p>!  Use node zero to fill it with nines
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (w_me .eq. 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FILE_OPEN  (MPI_COMM_SELF, &quot;output.dat&quot;,
<br>
MPI_MODE_CREATE+MPI_MODE_WRONLY, my_info, fileID, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocate (array2(ncells))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array2(:) = 9.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mylen = ncells
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;offset = 0 * 4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FILE_SET_VIEW(fileID,offset, MPI_REAL,MPI_REAL,
<br>
&quot;native&quot;,MPI_INFO_NULL,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_File_write(fileID, array2, mylen , MPI_REAL, status,ierr)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Get_count(status,MPI_INTEGER, count, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (count .ne. mylen) print*, &quot;Wrong initial write count:&quot;,
<br>
count,mylen
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;deallocate(array2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (sync) call MPI_FILE_SYNC (fileID,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FILE_CLOSE (fileID,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p>!  All nodes now fill their area with ones
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_BARRIER(MPI_COMM_WORLD,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocate (array2( X_SIZE))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;array2(:) = 1.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;offset = (w_me * X_SIZE) * 4 ! multiply by four, since it is real*4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mylen = X_SIZE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FILE_OPEN  (MPI_COMM_WORLD,&quot;output.dat&quot;,MPI_MODE_WRONLY,
<br>
my_info, fileID, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print*,&quot;node&quot;,w_me,&quot;starting&quot;,(offset/4) + 1,&quot;ending&quot;,(offset/4)+mylen
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FILE_SET_VIEW(fileID,offset, MPI_REAL,MPI_REAL,
<br>
&quot;native&quot;,MPI_INFO_NULL,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_File_write(fileID, array2, mylen , MPI_REAL, status,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Get_count(status,MPI_INTEGER, count, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (count .ne. mylen) print*, &quot;Wrong write count:&quot;, count,mylen,w_me
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;deallocate(array2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (sync) call MPI_FILE_SYNC (fileID,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FILE_CLOSE (fileID,ierr)
<br>
<p>!  Read it back on node zero to see if it is ok data
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (w_me .eq. 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FILE_OPEN  (MPI_COMM_SELF, &quot;output.dat&quot;, MPI_MODE_RDONLY,
<br>
my_info, fileID, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mylen = ncells
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocate (array2(ncells))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_File_read(fileID, array2, mylen , MPI_REAL, status,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Get_count(status,MPI_INTEGER, count, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (count .ne. mylen) print*, &quot;Wrong read count:&quot;, count,mylen
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do i=1,ncells
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (array2(i) .ne. 1) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print*, &quot;ERROR&quot;, i,array2(i), ((i-1)*4),
<br>
((i-1)*4)/(1024d0*1024d0) ! Index, value, # of good bytes,MB
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto 999
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end if
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print*, &quot;All done with nothing wrong&quot;
<br>
&nbsp;999      deallocate(array2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_FILE_CLOSE (fileID,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_file_delete (&quot;output.dat&quot;,MPI_INFO_NULL,ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_finalize(ierr)
<br>
<p>end program gcrm_test_io
<br>
<p>1.3 Open MPI
<br>
&nbsp;node           0 starting                     1 ending
<br>
410011
<br>
&nbsp;node           1 starting                410012 ending
<br>
820022
<br>
&nbsp;node           2 starting                820023 ending
<br>
1230033
<br>
&nbsp;node           3 starting               1230034 ending
<br>
1640044
<br>
&nbsp;node           4 starting               1640045 ending
<br>
2050055
<br>
&nbsp;node           5 starting               2050056 ending
<br>
2460066
<br>
&nbsp;All done with nothing wrong
<br>
<p><p>&nbsp;node           0 starting                     1 ending
<br>
410011
<br>
&nbsp;node           1 starting                410012 ending
<br>
820022
<br>
&nbsp;node           2 starting                820023 ending
<br>
1230033
<br>
&nbsp;node           5 starting               2050056 ending
<br>
2460066
<br>
&nbsp;node           4 starting               1640045 ending
<br>
2050055
<br>
&nbsp;node           3 starting               1230034 ending
<br>
1640044
<br>
&nbsp;Wrong write count:      228554                410011           2
<br>
&nbsp;Wrong read count:     1048576               2460066
<br>
&nbsp;ERROR     1048577  0.0000000E+00     4194304   4.00000000000000
<br>
<p><p>&nbsp;node           1 starting                410012 ending
<br>
820022
<br>
&nbsp;node           0 starting                     1 ending
<br>
410011
<br>
&nbsp;node           2 starting                820023 ending
<br>
1230033
<br>
&nbsp;node           3 starting               1230034 ending
<br>
1640044
<br>
&nbsp;node           4 starting               1640045 ending
<br>
2050055
<br>
&nbsp;node           5 starting               2050056 ending
<br>
2460066
<br>
&nbsp;Wrong read count:     1229824               2460066
<br>
&nbsp;ERROR     1229825  0.0000000E+00     4919296   4.69140625000000
<br>
<p><pre>
-- 
Nathan Baca
nathan.baca_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8273/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8274.php">Brian Dobbins: "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<li><strong>Previous message:</strong> <a href="8272.php">Ondrej Marsalek: "[OMPI users] Calculation stuck in MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8274.php">Brian Dobbins: "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<li><strong>Reply:</strong> <a href="8274.php">Brian Dobbins: "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<li><strong>Reply:</strong> <a href="8281.php">Jeff Squyres: "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
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
