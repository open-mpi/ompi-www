<?
$subject_val = "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 22:49:56 2009" -->
<!-- isoreceived="20090304034956" -->
<!-- sent="Tue, 3 Mar 2009 20:49:49 -0700" -->
<!-- isosent="20090304034949" -->
<!-- name="Nathan Baca" -->
<!-- email="nathan.baca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3" -->
<!-- id="d1196de80903031949x191c5704n5b951109ac74b8c1_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2b5e0c120903031010g3d3ef546s88765d640d5b2a14_at_mail.gmail.com" -->
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
<strong>From:</strong> Nathan Baca (<em>nathan.baca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-03 22:49:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8277.php">Sangamesh B: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>Previous message:</strong> <a href="8275.php">Terry Frankcombe: "[OMPI users] libnuma under ompi 1.3"</a>
<li><strong>In reply to:</strong> <a href="8274.php">Brian Dobbins: "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8281.php">Jeff Squyres: "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the quick reply and suggestions.
<br>
<p>I have tried both isolating the output to a single OST and striping across
<br>
multiple OSTs. Both will produce the same result. I have tried compiling
<br>
with multiple versions of both pathscale and intel compilers all with the
<br>
same result.
<br>
<p>The odd thing is that this seems to work using hpmpi 2.03 compiled with
<br>
pathscale 3.2 and intel 10.1.018. The operating system is XC 3.2.1 which is
<br>
essentially rhel4.5. The kernel is 2.6.9-67.9hp.7sp.XCsmp. Lustre version is
<br>
lustre-1.4.11-2.3_0.6_xc3.2.1_k2.6.9_67.9hp.7sp.XCsmp.
<br>
<p>Thanks for the info, Nate
<br>
<p><p>On Tue, Mar 3, 2009 at 11:10 AM, Brian Dobbins &lt;bdobbins_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Nathan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I just ran your code here and it worked fine - CentOS 5 on dual Xeons w/
</span><br>
<span class="quotelev1">&gt; IB network, and the kernel is 2.6.18-53.1.14.el5_lustre.1.6.5smp.  I used an
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.3.0 install compiled with Intel 11.0.081 and, independently, one
</span><br>
<span class="quotelev1">&gt; with GCC 4.1.2.  I tried a few different times with varying numbers of
</span><br>
<span class="quotelev1">&gt; processors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   (Both executables were compiled with -O2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I'm sure the main OpenMPI guys will have better ideas, but in the
</span><br>
<span class="quotelev1">&gt; meantime what kernel, OS and compilers are you using?  And does it happen
</span><br>
<span class="quotelev1">&gt; when you write to a single OST?  Make a directory and try setting the
</span><br>
<span class="quotelev1">&gt; stripe-size to 1 (eg, lfs setstripe &lt;directory name&gt; 1048576 0 1' will give
</span><br>
<span class="quotelev1">&gt; you, I think, a 1MB stripe size starting at OST 0 and of size 1.)  I'm just
</span><br>
<span class="quotelev1">&gt; wondering whether it's something with your hardware, maybe a particular OST,
</span><br>
<span class="quotelev1">&gt; since it seems to work for me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   ... Sorry I can't be of more help, but I imagine the regular experts will
</span><br>
<span class="quotelev1">&gt; chime in shortly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Cheers,
</span><br>
<span class="quotelev1">&gt;   - Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Mar 3, 2009 at 12:51 PM, Nathan Baca &lt;nathan.baca_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am seeing inconsistent mpi-io behavior when writing to a Lustre file
</span><br>
<span class="quotelev2">&gt;&gt; system using open mpi 1.3 with romio. What follows is a simple reproducer
</span><br>
<span class="quotelev2">&gt;&gt; and output. Essentially one or more of the running processes does not read
</span><br>
<span class="quotelev2">&gt;&gt; or write the correct amount of data to its part of a file residing on a
</span><br>
<span class="quotelev2">&gt;&gt; Lustre (parallel) file system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help figuring out what is happening is greatly appreciated. Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Nate
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; program gcrm_test_io
</span><br>
<span class="quotelev2">&gt;&gt;   implicit none
</span><br>
<span class="quotelev2">&gt;&gt;   include &quot;mpif.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   integer X_SIZE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       integer w_me, w_nprocs
</span><br>
<span class="quotelev2">&gt;&gt;       integer  my_info
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       integer i
</span><br>
<span class="quotelev2">&gt;&gt;       integer (kind=4) :: ierr
</span><br>
<span class="quotelev2">&gt;&gt;       integer (kind=4) :: fileID
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       integer (kind=MPI_OFFSET_KIND)        :: mylen
</span><br>
<span class="quotelev2">&gt;&gt;       integer (kind=MPI_OFFSET_KIND)        :: offset
</span><br>
<span class="quotelev2">&gt;&gt;       integer status(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev2">&gt;&gt;       integer count
</span><br>
<span class="quotelev2">&gt;&gt;       integer ncells
</span><br>
<span class="quotelev2">&gt;&gt;       real (kind=4), allocatable, dimension (:)     :: array2
</span><br>
<span class="quotelev2">&gt;&gt;       logical sync
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       call mpi_init(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;       call MPI_COMM_SIZE(MPI_COMM_WORLD,w_nprocs,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;       call MPI_COMM_RANK(MPI_COMM_WORLD,w_me,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       call mpi_info_create(my_info, ierr)
</span><br>
<span class="quotelev2">&gt;&gt; !     optional ways to set things in mpi-io
</span><br>
<span class="quotelev2">&gt;&gt; !     call mpi_info_set   (my_info, &quot;romio_ds_read&quot; , &quot;enable&quot;   , ierr)
</span><br>
<span class="quotelev2">&gt;&gt; !     call mpi_info_set   (my_info, &quot;romio_ds_write&quot;, &quot;enable&quot;   , ierr)
</span><br>
<span class="quotelev2">&gt;&gt; !     call mpi_info_set   (my_info, &quot;romio_cb_write&quot;, &quot;enable&quot;    , ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       x_size = 410011  ! A 'big' number, with bigger numbers it is more
</span><br>
<span class="quotelev2">&gt;&gt; likely to fail
</span><br>
<span class="quotelev2">&gt;&gt;       sync = .true.  ! Extra file synchronization
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       ncells = (X_SIZE * w_nprocs)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; !  Use node zero to fill it with nines
</span><br>
<span class="quotelev2">&gt;&gt;       if (w_me .eq. 0) then
</span><br>
<span class="quotelev2">&gt;&gt;           call MPI_FILE_OPEN  (MPI_COMM_SELF, &quot;output.dat&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_MODE_CREATE+MPI_MODE_WRONLY, my_info, fileID, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;           allocate (array2(ncells))
</span><br>
<span class="quotelev2">&gt;&gt;           array2(:) = 9.0
</span><br>
<span class="quotelev2">&gt;&gt;           mylen = ncells
</span><br>
<span class="quotelev2">&gt;&gt;           offset = 0 * 4
</span><br>
<span class="quotelev2">&gt;&gt;           call MPI_FILE_SET_VIEW(fileID,offset, MPI_REAL,MPI_REAL,
</span><br>
<span class="quotelev2">&gt;&gt; &quot;native&quot;,MPI_INFO_NULL,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;           call MPI_File_write(fileID, array2, mylen , MPI_REAL,
</span><br>
<span class="quotelev2">&gt;&gt; status,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;           call MPI_Get_count(status,MPI_INTEGER, count, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;           if (count .ne. mylen) print*, &quot;Wrong initial write count:&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; count,mylen
</span><br>
<span class="quotelev2">&gt;&gt;           deallocate(array2)
</span><br>
<span class="quotelev2">&gt;&gt;           if (sync) call MPI_FILE_SYNC (fileID,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;           call MPI_FILE_CLOSE (fileID,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;       endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; !  All nodes now fill their area with ones
</span><br>
<span class="quotelev2">&gt;&gt;       call MPI_BARRIER(MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;       allocate (array2( X_SIZE))
</span><br>
<span class="quotelev2">&gt;&gt;       array2(:) = 1.0
</span><br>
<span class="quotelev2">&gt;&gt;       offset = (w_me * X_SIZE) * 4 ! multiply by four, since it is real*4
</span><br>
<span class="quotelev2">&gt;&gt;       mylen = X_SIZE
</span><br>
<span class="quotelev2">&gt;&gt;       call MPI_FILE_OPEN  (MPI_COMM_WORLD,&quot;output.dat&quot;,MPI_MODE_WRONLY,
</span><br>
<span class="quotelev2">&gt;&gt; my_info, fileID, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;       print*,&quot;node&quot;,w_me,&quot;starting&quot;,(offset/4) +
</span><br>
<span class="quotelev2">&gt;&gt; 1,&quot;ending&quot;,(offset/4)+mylen
</span><br>
<span class="quotelev2">&gt;&gt;       call MPI_FILE_SET_VIEW(fileID,offset, MPI_REAL,MPI_REAL,
</span><br>
<span class="quotelev2">&gt;&gt; &quot;native&quot;,MPI_INFO_NULL,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;       call MPI_File_write(fileID, array2, mylen , MPI_REAL, status,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;       call MPI_Get_count(status,MPI_INTEGER, count, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;       if (count .ne. mylen) print*, &quot;Wrong write count:&quot;, count,mylen,w_me
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       deallocate(array2)
</span><br>
<span class="quotelev2">&gt;&gt;       if (sync) call MPI_FILE_SYNC (fileID,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;       call MPI_FILE_CLOSE (fileID,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; !  Read it back on node zero to see if it is ok data
</span><br>
<span class="quotelev2">&gt;&gt;       if (w_me .eq. 0) then
</span><br>
<span class="quotelev2">&gt;&gt;           call MPI_FILE_OPEN  (MPI_COMM_SELF, &quot;output.dat&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_MODE_RDONLY, my_info, fileID, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;           mylen = ncells
</span><br>
<span class="quotelev2">&gt;&gt;           allocate (array2(ncells))
</span><br>
<span class="quotelev2">&gt;&gt;           call MPI_File_read(fileID, array2, mylen , MPI_REAL,
</span><br>
<span class="quotelev2">&gt;&gt; status,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;           call MPI_Get_count(status,MPI_INTEGER, count, ierr)
</span><br>
<span class="quotelev2">&gt;&gt;           if (count .ne. mylen) print*, &quot;Wrong read count:&quot;, count,mylen
</span><br>
<span class="quotelev2">&gt;&gt;           do i=1,ncells
</span><br>
<span class="quotelev2">&gt;&gt;                if (array2(i) .ne. 1) then
</span><br>
<span class="quotelev2">&gt;&gt;                   print*, &quot;ERROR&quot;, i,array2(i), ((i-1)*4),
</span><br>
<span class="quotelev2">&gt;&gt; ((i-1)*4)/(1024d0*1024d0) ! Index, value, # of good bytes,MB
</span><br>
<span class="quotelev2">&gt;&gt;                   goto 999
</span><br>
<span class="quotelev2">&gt;&gt;                end if
</span><br>
<span class="quotelev2">&gt;&gt;           end do
</span><br>
<span class="quotelev2">&gt;&gt;           print*, &quot;All done with nothing wrong&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  999      deallocate(array2)
</span><br>
<span class="quotelev2">&gt;&gt;           call MPI_FILE_CLOSE (fileID,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;           call MPI_file_delete (&quot;output.dat&quot;,MPI_INFO_NULL,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;       endif
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       call mpi_finalize(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; end program gcrm_test_io
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1.3 Open MPI
</span><br>
<span class="quotelev2">&gt;&gt;  node           0 starting                     1 ending
</span><br>
<span class="quotelev2">&gt;&gt; 410011
</span><br>
<span class="quotelev2">&gt;&gt;  node           1 starting                410012 ending
</span><br>
<span class="quotelev2">&gt;&gt; 820022
</span><br>
<span class="quotelev2">&gt;&gt;  node           2 starting                820023 ending
</span><br>
<span class="quotelev2">&gt;&gt; 1230033
</span><br>
<span class="quotelev2">&gt;&gt;  node           3 starting               1230034 ending
</span><br>
<span class="quotelev2">&gt;&gt; 1640044
</span><br>
<span class="quotelev2">&gt;&gt;  node           4 starting               1640045 ending
</span><br>
<span class="quotelev2">&gt;&gt; 2050055
</span><br>
<span class="quotelev2">&gt;&gt;  node           5 starting               2050056 ending
</span><br>
<span class="quotelev2">&gt;&gt; 2460066
</span><br>
<span class="quotelev2">&gt;&gt;  All done with nothing wrong
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  node           0 starting                     1 ending
</span><br>
<span class="quotelev2">&gt;&gt; 410011
</span><br>
<span class="quotelev2">&gt;&gt;  node           1 starting                410012 ending
</span><br>
<span class="quotelev2">&gt;&gt; 820022
</span><br>
<span class="quotelev2">&gt;&gt;  node           2 starting                820023 ending
</span><br>
<span class="quotelev2">&gt;&gt; 1230033
</span><br>
<span class="quotelev2">&gt;&gt;  node           5 starting               2050056 ending
</span><br>
<span class="quotelev2">&gt;&gt; 2460066
</span><br>
<span class="quotelev2">&gt;&gt;  node           4 starting               1640045 ending
</span><br>
<span class="quotelev2">&gt;&gt; 2050055
</span><br>
<span class="quotelev2">&gt;&gt;  node           3 starting               1230034 ending
</span><br>
<span class="quotelev2">&gt;&gt; 1640044
</span><br>
<span class="quotelev2">&gt;&gt;  Wrong write count:      228554                410011           2
</span><br>
<span class="quotelev2">&gt;&gt;  Wrong read count:     1048576               2460066
</span><br>
<span class="quotelev2">&gt;&gt;  ERROR     1048577  0.0000000E+00     4194304   4.00000000000000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  node           1 starting                410012 ending
</span><br>
<span class="quotelev2">&gt;&gt; 820022
</span><br>
<span class="quotelev2">&gt;&gt;  node           0 starting                     1 ending
</span><br>
<span class="quotelev2">&gt;&gt; 410011
</span><br>
<span class="quotelev2">&gt;&gt;  node           2 starting                820023 ending
</span><br>
<span class="quotelev2">&gt;&gt; 1230033
</span><br>
<span class="quotelev2">&gt;&gt;  node           3 starting               1230034 ending
</span><br>
<span class="quotelev2">&gt;&gt; 1640044
</span><br>
<span class="quotelev2">&gt;&gt;  node           4 starting               1640045 ending
</span><br>
<span class="quotelev2">&gt;&gt; 2050055
</span><br>
<span class="quotelev2">&gt;&gt;  node           5 starting               2050056 ending
</span><br>
<span class="quotelev2">&gt;&gt; 2460066
</span><br>
<span class="quotelev2">&gt;&gt;  Wrong read count:     1229824               2460066
</span><br>
<span class="quotelev2">&gt;&gt;  ERROR     1229825  0.0000000E+00     4919296   4.69140625000000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Nathan Baca
</span><br>
<span class="quotelev2">&gt;&gt; nathan.baca_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><p><pre>
-- 
Nathan Baca
nathan.baca_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8276/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8277.php">Sangamesh B: "Re: [OMPI users] Low performance of Open MPI-1.3 over Gigabit"</a>
<li><strong>Previous message:</strong> <a href="8275.php">Terry Frankcombe: "[OMPI users] libnuma under ompi 1.3"</a>
<li><strong>In reply to:</strong> <a href="8274.php">Brian Dobbins: "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8281.php">Jeff Squyres: "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
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
