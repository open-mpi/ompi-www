<?
$subject_val = "Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 09:39:16 2009" -->
<!-- isoreceived="20090304143916" -->
<!-- sent="Wed, 4 Mar 2009 09:39:08 -0500" -->
<!-- isosent="20090304143908" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3" -->
<!-- id="F767E374-A212-4432-A0A1-D06C8959773C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 09:39:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8282.php">Jeff Squyres: "Re: [OMPI users] Calculation stuck in MPI"</a>
<li><strong>Previous message:</strong> <a href="8280.php">Jeff Squyres: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>In reply to:</strong> <a href="8273.php">Nathan Baca: "[OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, we don't have a whole lot of insight into how the  
<br>
internals of the IO support work -- we mainly bundle the ROMIO package  
<br>
from MPICH2 into Open MPI.  Our latest integration was the ROMIO from  
<br>
MPICH2 v1.0.7.
<br>
<p>Do you see the same behavior if you run your application under MPICH2  
<br>
compiled with Lustre ROMIO support?
<br>
<p><p>On Mar 3, 2009, at 12:51 PM, Nathan Baca wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am seeing inconsistent mpi-io behavior when writing to a Lustre  
</span><br>
<span class="quotelev1">&gt; file system using open mpi 1.3 with romio. What follows is a simple  
</span><br>
<span class="quotelev1">&gt; reproducer and output. Essentially one or more of the running  
</span><br>
<span class="quotelev1">&gt; processes does not read or write the correct amount of data to its  
</span><br>
<span class="quotelev1">&gt; part of a file residing on a Lustre (parallel) file system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help figuring out what is happening is greatly appreciated.  
</span><br>
<span class="quotelev1">&gt; Thanks, Nate
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
<span class="quotelev1">&gt; !     call mpi_info_set   (my_info, &quot;romio_ds_read&quot; , &quot;enable&quot;   ,  
</span><br>
<span class="quotelev1">&gt; ierr)
</span><br>
<span class="quotelev1">&gt; !     call mpi_info_set   (my_info, &quot;romio_ds_write&quot;, &quot;enable&quot;   ,  
</span><br>
<span class="quotelev1">&gt; ierr)
</span><br>
<span class="quotelev1">&gt; !     call mpi_info_set   (my_info, &quot;romio_cb_write&quot;, &quot;enable&quot;    ,  
</span><br>
<span class="quotelev1">&gt; ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       x_size = 410011  ! A 'big' number, with bigger numbers it is  
</span><br>
<span class="quotelev1">&gt; more likely to fail
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
<span class="quotelev1">&gt;           if (count .ne. mylen) print*, &quot;Wrong initial write  
</span><br>
<span class="quotelev1">&gt; count:&quot;, count,mylen
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
<span class="quotelev1">&gt;       offset = (w_me * X_SIZE) * 4 ! multiply by four, since it is  
</span><br>
<span class="quotelev1">&gt; real*4
</span><br>
<span class="quotelev1">&gt;       mylen = X_SIZE
</span><br>
<span class="quotelev1">&gt;       call MPI_FILE_OPEN   
</span><br>
<span class="quotelev1">&gt; (MPI_COMM_WORLD,&quot;output.dat&quot;,MPI_MODE_WRONLY, my_info, fileID, ierr)
</span><br>
<span class="quotelev1">&gt;       print*,&quot;node&quot;,w_me,&quot;starting&quot;,(offset/4) + 1,&quot;ending&quot;,(offset/ 
</span><br>
<span class="quotelev1">&gt; 4)+mylen
</span><br>
<span class="quotelev1">&gt;       call MPI_FILE_SET_VIEW(fileID,offset, MPI_REAL,MPI_REAL,  
</span><br>
<span class="quotelev1">&gt; &quot;native&quot;,MPI_INFO_NULL,ierr)
</span><br>
<span class="quotelev1">&gt;       call MPI_File_write(fileID, array2, mylen , MPI_REAL,  
</span><br>
<span class="quotelev1">&gt; status,ierr)
</span><br>
<span class="quotelev1">&gt;       call MPI_Get_count(status,MPI_INTEGER, count, ierr)
</span><br>
<span class="quotelev1">&gt;       if (count .ne. mylen) print*, &quot;Wrong write count:&quot;,  
</span><br>
<span class="quotelev1">&gt; count,mylen,w_me
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
<span class="quotelev1">&gt;           call MPI_File_read(fileID, array2, mylen , MPI_REAL,  
</span><br>
<span class="quotelev1">&gt; status,ierr)
</span><br>
<span class="quotelev1">&gt;           call MPI_Get_count(status,MPI_INTEGER, count, ierr)
</span><br>
<span class="quotelev1">&gt;           if (count .ne. mylen) print*, &quot;Wrong read count:&quot;,  
</span><br>
<span class="quotelev1">&gt; count,mylen
</span><br>
<span class="quotelev1">&gt;           do i=1,ncells
</span><br>
<span class="quotelev1">&gt;                if (array2(i) .ne. 1) then
</span><br>
<span class="quotelev1">&gt;                   print*, &quot;ERROR&quot;, i,array2(i), ((i-1)*4), ((i-1)*4)/ 
</span><br>
<span class="quotelev1">&gt; (1024d0*1024d0) ! Index, value, # of good bytes,MB
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
<span class="quotelev1">&gt;  node           0 starting                     1  
</span><br>
<span class="quotelev1">&gt; ending                410011
</span><br>
<span class="quotelev1">&gt;  node           1 starting                410012  
</span><br>
<span class="quotelev1">&gt; ending                820022
</span><br>
<span class="quotelev1">&gt;  node           2 starting                820023  
</span><br>
<span class="quotelev1">&gt; ending               1230033
</span><br>
<span class="quotelev1">&gt;  node           3 starting               1230034  
</span><br>
<span class="quotelev1">&gt; ending               1640044
</span><br>
<span class="quotelev1">&gt;  node           4 starting               1640045  
</span><br>
<span class="quotelev1">&gt; ending               2050055
</span><br>
<span class="quotelev1">&gt;  node           5 starting               2050056  
</span><br>
<span class="quotelev1">&gt; ending               2460066
</span><br>
<span class="quotelev1">&gt;  All done with nothing wrong
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  node           0 starting                     1  
</span><br>
<span class="quotelev1">&gt; ending                410011
</span><br>
<span class="quotelev1">&gt;  node           1 starting                410012  
</span><br>
<span class="quotelev1">&gt; ending                820022
</span><br>
<span class="quotelev1">&gt;  node           2 starting                820023  
</span><br>
<span class="quotelev1">&gt; ending               1230033
</span><br>
<span class="quotelev1">&gt;  node           5 starting               2050056  
</span><br>
<span class="quotelev1">&gt; ending               2460066
</span><br>
<span class="quotelev1">&gt;  node           4 starting               1640045  
</span><br>
<span class="quotelev1">&gt; ending               2050055
</span><br>
<span class="quotelev1">&gt;  node           3 starting               1230034  
</span><br>
<span class="quotelev1">&gt; ending               1640044
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
<span class="quotelev1">&gt;  node           1 starting                410012  
</span><br>
<span class="quotelev1">&gt; ending                820022
</span><br>
<span class="quotelev1">&gt;  node           0 starting                     1  
</span><br>
<span class="quotelev1">&gt; ending                410011
</span><br>
<span class="quotelev1">&gt;  node           2 starting                820023  
</span><br>
<span class="quotelev1">&gt; ending               1230033
</span><br>
<span class="quotelev1">&gt;  node           3 starting               1230034  
</span><br>
<span class="quotelev1">&gt; ending               1640044
</span><br>
<span class="quotelev1">&gt;  node           4 starting               1640045  
</span><br>
<span class="quotelev1">&gt; ending               2050055
</span><br>
<span class="quotelev1">&gt;  node           5 starting               2050056  
</span><br>
<span class="quotelev1">&gt; ending               2460066
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8282.php">Jeff Squyres: "Re: [OMPI users] Calculation stuck in MPI"</a>
<li><strong>Previous message:</strong> <a href="8280.php">Jeff Squyres: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>In reply to:</strong> <a href="8273.php">Nathan Baca: "[OMPI users] MPI-IO Inconsistency over Lustre using OMPI 1.3"</a>
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
