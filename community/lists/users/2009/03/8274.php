<?
$subject_val = "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 13:18:15 2009" -->
<!-- isoreceived="20090303181815" -->
<!-- sent="Tue, 3 Mar 2009 13:10:49 -0500" -->
<!-- isosent="20090303181049" -->
<!-- name="Brian Dobbins" -->
<!-- email="bdobbins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3" -->
<!-- id="2b5e0c120903031010g3d3ef546s88765d640d5b2a14_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="d1196de80903030951g562b7da9x78566446d6666f40_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3<br>
<strong>From:</strong> Brian Dobbins (<em>bdobbins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-03 13:10:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8275.php">Terry Frankcombe: "[OMPI users] libnuma under ompi 1.3"</a>
<li><strong>Previous message:</strong> <a href="8273.php">Nathan Baca: "[OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<li><strong>In reply to:</strong> <a href="8273.php">Nathan Baca: "[OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8276.php">Nathan Baca: "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<li><strong>Reply:</strong> <a href="8276.php">Nathan Baca: "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Nathan,
<br>
<p>&nbsp;&nbsp;I just ran your code here and it worked fine - CentOS 5 on dual Xeons w/
<br>
IB network, and the kernel is 2.6.18-53.1.14.el5_lustre.1.6.5smp.  I used an
<br>
OpenMPI 1.3.0 install compiled with Intel 11.0.081 and, independently, one
<br>
with GCC 4.1.2.  I tried a few different times with varying numbers of
<br>
processors.
<br>
<p>&nbsp;&nbsp;(Both executables were compiled with -O2)
<br>
<p>&nbsp;&nbsp;I'm sure the main OpenMPI guys will have better ideas, but in the meantime
<br>
what kernel, OS and compilers are you using?  And does it happen when you
<br>
write to a single OST?  Make a directory and try setting the stripe-size to
<br>
1 (eg, lfs setstripe &lt;directory name&gt; 1048576 0 1' will give you, I think, a
<br>
1MB stripe size starting at OST 0 and of size 1.)  I'm just wondering
<br>
whether it's something with your hardware, maybe a particular OST, since it
<br>
seems to work for me.
<br>
<p>&nbsp;&nbsp;... Sorry I can't be of more help, but I imagine the regular experts will
<br>
chime in shortly.
<br>
<p>&nbsp;&nbsp;Cheers,
<br>
&nbsp;&nbsp;- Brian
<br>
<p><p>On Tue, Mar 3, 2009 at 12:51 PM, Nathan Baca &lt;nathan.baca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am seeing inconsistent mpi-io behavior when writing to a Lustre file
</span><br>
<span class="quotelev1">&gt; system using open mpi 1.3 with romio. What follows is a simple reproducer
</span><br>
<span class="quotelev1">&gt; and output. Essentially one or more of the running processes does not read
</span><br>
<span class="quotelev1">&gt; or write the correct amount of data to its part of a file residing on a
</span><br>
<span class="quotelev1">&gt; Lustre (parallel) file system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help figuring out what is happening is greatly appreciated. Thanks,
</span><br>
<span class="quotelev1">&gt; Nate
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; program gcrm_test_io
</span><br>
<span class="quotelev1">&gt;   implicit none
</span><br>
<span class="quotelev1">&gt;   include &quot;mpif.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   integer X_SIZE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       integer w_me, w_nprocs
</span><br>
<span class="quotelev1">&gt;       integer  my_info
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       integer i
</span><br>
<span class="quotelev1">&gt;       integer (kind=4) :: ierr
</span><br>
<span class="quotelev1">&gt;       integer (kind=4) :: fileID
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       integer (kind=MPI_OFFSET_KIND)        :: mylen
</span><br>
<span class="quotelev1">&gt;       integer (kind=MPI_OFFSET_KIND)        :: offset
</span><br>
<span class="quotelev1">&gt;       integer status(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev1">&gt;       integer count
</span><br>
<span class="quotelev1">&gt;       integer ncells
</span><br>
<span class="quotelev1">&gt;       real (kind=4), allocatable, dimension (:)     :: array2
</span><br>
<span class="quotelev1">&gt;       logical sync
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       call mpi_init(ierr)
</span><br>
<span class="quotelev1">&gt;       call MPI_COMM_SIZE(MPI_COMM_WORLD,w_nprocs,ierr)
</span><br>
<span class="quotelev1">&gt;       call MPI_COMM_RANK(MPI_COMM_WORLD,w_me,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       call mpi_info_create(my_info, ierr)
</span><br>
<span class="quotelev1">&gt; !     optional ways to set things in mpi-io
</span><br>
<span class="quotelev1">&gt; !     call mpi_info_set   (my_info, &quot;romio_ds_read&quot; , &quot;enable&quot;   , ierr)
</span><br>
<span class="quotelev1">&gt; !     call mpi_info_set   (my_info, &quot;romio_ds_write&quot;, &quot;enable&quot;   , ierr)
</span><br>
<span class="quotelev1">&gt; !     call mpi_info_set   (my_info, &quot;romio_cb_write&quot;, &quot;enable&quot;    , ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       x_size = 410011  ! A 'big' number, with bigger numbers it is more
</span><br>
<span class="quotelev1">&gt; likely to fail
</span><br>
<span class="quotelev1">&gt;       sync = .true.  ! Extra file synchronization
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       ncells = (X_SIZE * w_nprocs)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; !  Use node zero to fill it with nines
</span><br>
<span class="quotelev1">&gt;       if (w_me .eq. 0) then
</span><br>
<span class="quotelev1">&gt;           call MPI_FILE_OPEN  (MPI_COMM_SELF, &quot;output.dat&quot;,
</span><br>
<span class="quotelev1">&gt; MPI_MODE_CREATE+MPI_MODE_WRONLY, my_info, fileID, ierr)
</span><br>
<span class="quotelev1">&gt;           allocate (array2(ncells))
</span><br>
<span class="quotelev1">&gt;           array2(:) = 9.0
</span><br>
<span class="quotelev1">&gt;           mylen = ncells
</span><br>
<span class="quotelev1">&gt;           offset = 0 * 4
</span><br>
<span class="quotelev1">&gt;           call MPI_FILE_SET_VIEW(fileID,offset, MPI_REAL,MPI_REAL,
</span><br>
<span class="quotelev1">&gt; &quot;native&quot;,MPI_INFO_NULL,ierr)
</span><br>
<span class="quotelev1">&gt;           call MPI_File_write(fileID, array2, mylen , MPI_REAL,
</span><br>
<span class="quotelev1">&gt; status,ierr)
</span><br>
<span class="quotelev1">&gt;           call MPI_Get_count(status,MPI_INTEGER, count, ierr)
</span><br>
<span class="quotelev1">&gt;           if (count .ne. mylen) print*, &quot;Wrong initial write count:&quot;,
</span><br>
<span class="quotelev1">&gt; count,mylen
</span><br>
<span class="quotelev1">&gt;           deallocate(array2)
</span><br>
<span class="quotelev1">&gt;           if (sync) call MPI_FILE_SYNC (fileID,ierr)
</span><br>
<span class="quotelev1">&gt;           call MPI_FILE_CLOSE (fileID,ierr)
</span><br>
<span class="quotelev1">&gt;       endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; !  All nodes now fill their area with ones
</span><br>
<span class="quotelev1">&gt;       call MPI_BARRIER(MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt;       allocate (array2( X_SIZE))
</span><br>
<span class="quotelev1">&gt;       array2(:) = 1.0
</span><br>
<span class="quotelev1">&gt;       offset = (w_me * X_SIZE) * 4 ! multiply by four, since it is real*4
</span><br>
<span class="quotelev1">&gt;       mylen = X_SIZE
</span><br>
<span class="quotelev1">&gt;       call MPI_FILE_OPEN  (MPI_COMM_WORLD,&quot;output.dat&quot;,MPI_MODE_WRONLY,
</span><br>
<span class="quotelev1">&gt; my_info, fileID, ierr)
</span><br>
<span class="quotelev1">&gt;       print*,&quot;node&quot;,w_me,&quot;starting&quot;,(offset/4) +
</span><br>
<span class="quotelev1">&gt; 1,&quot;ending&quot;,(offset/4)+mylen
</span><br>
<span class="quotelev1">&gt;       call MPI_FILE_SET_VIEW(fileID,offset, MPI_REAL,MPI_REAL,
</span><br>
<span class="quotelev1">&gt; &quot;native&quot;,MPI_INFO_NULL,ierr)
</span><br>
<span class="quotelev1">&gt;       call MPI_File_write(fileID, array2, mylen , MPI_REAL, status,ierr)
</span><br>
<span class="quotelev1">&gt;       call MPI_Get_count(status,MPI_INTEGER, count, ierr)
</span><br>
<span class="quotelev1">&gt;       if (count .ne. mylen) print*, &quot;Wrong write count:&quot;, count,mylen,w_me
</span><br>
<span class="quotelev1">&gt;       deallocate(array2)
</span><br>
<span class="quotelev1">&gt;       if (sync) call MPI_FILE_SYNC (fileID,ierr)
</span><br>
<span class="quotelev1">&gt;       call MPI_FILE_CLOSE (fileID,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; !  Read it back on node zero to see if it is ok data
</span><br>
<span class="quotelev1">&gt;       if (w_me .eq. 0) then
</span><br>
<span class="quotelev1">&gt;           call MPI_FILE_OPEN  (MPI_COMM_SELF, &quot;output.dat&quot;,
</span><br>
<span class="quotelev1">&gt; MPI_MODE_RDONLY, my_info, fileID, ierr)
</span><br>
<span class="quotelev1">&gt;           mylen = ncells
</span><br>
<span class="quotelev1">&gt;           allocate (array2(ncells))
</span><br>
<span class="quotelev1">&gt;           call MPI_File_read(fileID, array2, mylen , MPI_REAL, status,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           call MPI_Get_count(status,MPI_INTEGER, count, ierr)
</span><br>
<span class="quotelev1">&gt;           if (count .ne. mylen) print*, &quot;Wrong read count:&quot;, count,mylen
</span><br>
<span class="quotelev1">&gt;           do i=1,ncells
</span><br>
<span class="quotelev1">&gt;                if (array2(i) .ne. 1) then
</span><br>
<span class="quotelev1">&gt;                   print*, &quot;ERROR&quot;, i,array2(i), ((i-1)*4),
</span><br>
<span class="quotelev1">&gt; ((i-1)*4)/(1024d0*1024d0) ! Index, value, # of good bytes,MB
</span><br>
<span class="quotelev1">&gt;                   goto 999
</span><br>
<span class="quotelev1">&gt;                end if
</span><br>
<span class="quotelev1">&gt;           end do
</span><br>
<span class="quotelev1">&gt;           print*, &quot;All done with nothing wrong&quot;
</span><br>
<span class="quotelev1">&gt;  999      deallocate(array2)
</span><br>
<span class="quotelev1">&gt;           call MPI_FILE_CLOSE (fileID,ierr)
</span><br>
<span class="quotelev1">&gt;           call MPI_file_delete (&quot;output.dat&quot;,MPI_INFO_NULL,ierr)
</span><br>
<span class="quotelev1">&gt;       endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       call mpi_finalize(ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; end program gcrm_test_io
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1.3 Open MPI
</span><br>
<span class="quotelev1">&gt;  node           0 starting                     1 ending
</span><br>
<span class="quotelev1">&gt; 410011
</span><br>
<span class="quotelev1">&gt;  node           1 starting                410012 ending
</span><br>
<span class="quotelev1">&gt; 820022
</span><br>
<span class="quotelev1">&gt;  node           2 starting                820023 ending
</span><br>
<span class="quotelev1">&gt; 1230033
</span><br>
<span class="quotelev1">&gt;  node           3 starting               1230034 ending
</span><br>
<span class="quotelev1">&gt; 1640044
</span><br>
<span class="quotelev1">&gt;  node           4 starting               1640045 ending
</span><br>
<span class="quotelev1">&gt; 2050055
</span><br>
<span class="quotelev1">&gt;  node           5 starting               2050056 ending
</span><br>
<span class="quotelev1">&gt; 2460066
</span><br>
<span class="quotelev1">&gt;  All done with nothing wrong
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  node           0 starting                     1 ending
</span><br>
<span class="quotelev1">&gt; 410011
</span><br>
<span class="quotelev1">&gt;  node           1 starting                410012 ending
</span><br>
<span class="quotelev1">&gt; 820022
</span><br>
<span class="quotelev1">&gt;  node           2 starting                820023 ending
</span><br>
<span class="quotelev1">&gt; 1230033
</span><br>
<span class="quotelev1">&gt;  node           5 starting               2050056 ending
</span><br>
<span class="quotelev1">&gt; 2460066
</span><br>
<span class="quotelev1">&gt;  node           4 starting               1640045 ending
</span><br>
<span class="quotelev1">&gt; 2050055
</span><br>
<span class="quotelev1">&gt;  node           3 starting               1230034 ending
</span><br>
<span class="quotelev1">&gt; 1640044
</span><br>
<span class="quotelev1">&gt;  Wrong write count:      228554                410011           2
</span><br>
<span class="quotelev1">&gt;  Wrong read count:     1048576               2460066
</span><br>
<span class="quotelev1">&gt;  ERROR     1048577  0.0000000E+00     4194304   4.00000000000000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  node           1 starting                410012 ending
</span><br>
<span class="quotelev1">&gt; 820022
</span><br>
<span class="quotelev1">&gt;  node           0 starting                     1 ending
</span><br>
<span class="quotelev1">&gt; 410011
</span><br>
<span class="quotelev1">&gt;  node           2 starting                820023 ending
</span><br>
<span class="quotelev1">&gt; 1230033
</span><br>
<span class="quotelev1">&gt;  node           3 starting               1230034 ending
</span><br>
<span class="quotelev1">&gt; 1640044
</span><br>
<span class="quotelev1">&gt;  node           4 starting               1640045 ending
</span><br>
<span class="quotelev1">&gt; 2050055
</span><br>
<span class="quotelev1">&gt;  node           5 starting               2050056 ending
</span><br>
<span class="quotelev1">&gt; 2460066
</span><br>
<span class="quotelev1">&gt;  Wrong read count:     1229824               2460066
</span><br>
<span class="quotelev1">&gt;  ERROR     1229825  0.0000000E+00     4919296   4.69140625000000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Nathan Baca
</span><br>
<span class="quotelev1">&gt; nathan.baca_at_[hidden]
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8274/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8275.php">Terry Frankcombe: "[OMPI users] libnuma under ompi 1.3"</a>
<li><strong>Previous message:</strong> <a href="8273.php">Nathan Baca: "[OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<li><strong>In reply to:</strong> <a href="8273.php">Nathan Baca: "[OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8276.php">Nathan Baca: "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<li><strong>Reply:</strong> <a href="8276.php">Nathan Baca: "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
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
