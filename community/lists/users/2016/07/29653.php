<?
$subject_val = "Re: [OMPI users] MPI-RMA rget doesn't complete the communication after	mpi_wait";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 12 19:19:52 2016" -->
<!-- isoreceived="20160712231952" -->
<!-- sent="Tue, 12 Jul 2016 23:19:49 +0000" -->
<!-- isosent="20160712231949" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-RMA rget doesn't complete the communication after	mpi_wait" -->
<!-- id="0C91790F-5A42-47C9-AA9D-ECA541C3B61A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJjY+1ZHFF9V8_7_ijA666FVbxyZUUyeX2Arfgn2sRs6fW-UQQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI-RMA rget doesn't complete the communication after	mpi_wait<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-12 19:19:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29654.php">Alfio Lazzaro: "Re: [OMPI users] MPI-RMA rget doesn't complete the communication after mpi_wait"</a>
<li><strong>Previous message:</strong> <a href="29652.php">Emani, Murali: "Re: [OMPI users] [OMPI devel]    Class information in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="29648.php">Alfio Lazzaro: "[OMPI users] MPI-RMA rget doesn't complete the communication after mpi_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29654.php">Alfio Lazzaro: "Re: [OMPI users] MPI-RMA rget doesn't complete the communication after mpi_wait"</a>
<li><strong>Reply:</strong> <a href="29654.php">Alfio Lazzaro: "Re: [OMPI users] MPI-RMA rget doesn't complete the communication after mpi_wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alfio --
<br>
<p>We just released Open MPI v2.0.0, with lots of MPI RMA fixes.  Would you mind testing there?
<br>
<p><p><span class="quotelev1">&gt; On Jul 12, 2016, at 1:33 PM, Alfio Lazzaro &lt;alfio.lazzaro_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev1">&gt; we found a strange behavior when using MPI-RMA passive target and OpenMPI (versions 1.8.3 and 1.10.2). We don't see any problem when using MPICH.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a small example on what we want to do:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===================
</span><br>
<span class="quotelev1">&gt; program rma_openmpi
</span><br>
<span class="quotelev1">&gt;   use mpi
</span><br>
<span class="quotelev1">&gt;   integer :: nproc, rank, ierr
</span><br>
<span class="quotelev1">&gt;   integer :: win, request, size
</span><br>
<span class="quotelev1">&gt;   INTEGER(kind=mpi_address_kind) :: size_aint, disp_aint     
</span><br>
<span class="quotelev1">&gt;   integer, DIMENSION(:), ALLOCATABLE :: meta, recv
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   call MPI_INIT(ierr)
</span><br>
<span class="quotelev1">&gt;   call MPI_COMM_SIZE(MPI_COMM_WORLD, nproc, ierr)
</span><br>
<span class="quotelev1">&gt;   call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   size=100
</span><br>
<span class="quotelev1">&gt;   ALLOCATE(meta(size),recv(size))
</span><br>
<span class="quotelev1">&gt;   meta(:) = rank
</span><br>
<span class="quotelev1">&gt;   recv(:) = -1
</span><br>
<span class="quotelev1">&gt;   size_aint = size*4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   call MPI_WIN_CREATE(meta,size_aint,4,MPI_INFO_NULL,MPI_COMM_WORLD,win,ierr)
</span><br>
<span class="quotelev1">&gt;   call MPI_WIN_LOCK_ALL(MPI_MODE_NOCHECK, win, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   disp_aint = 0
</span><br>
<span class="quotelev1">&gt;   CALL MPI_RGET(recv,size,MPI_INTEGER,MOD(rank+1,2),disp_aint,&amp;
</span><br>
<span class="quotelev1">&gt;        size,MPI_INTEGER,win,request,ierr)
</span><br>
<span class="quotelev1">&gt;   IF (ierr .NE. 0) STOP &quot;error mpi_rget&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   CALL MPI_WAIT(request,MPI_STATUS_IGNORE,ierr)
</span><br>
<span class="quotelev1">&gt;   IF (ierr .NE. 0) STOP &quot;error mpi_wait&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; !  call MPI_Win_flush_all(win,ierr)                                                                                     
</span><br>
<span class="quotelev1">&gt;   print *,rank,&quot;=&quot;,recv(1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   call MPI_WIN_UNLOCK_ALL(win, ierr)
</span><br>
<span class="quotelev1">&gt;   call MPI_WIN_FREE(win,ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   DEALLOCATE(meta)
</span><br>
<span class="quotelev1">&gt;   call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev1">&gt; end program rma_openmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can run with 2 ranks. 
</span><br>
<span class="quotelev1">&gt; As you can see it is a simple rget operation from the neighbor rank. However, it seems that the communications doesn't complete after the mpi_wait. Indeed we get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;           0 =          -1
</span><br>
<span class="quotelev1">&gt;           1 =          -1
</span><br>
<span class="quotelev1">&gt; while it should be:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;            0 =           1
</span><br>
<span class="quotelev1">&gt;            1 =           0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The code works as we want by uncommenting the flush operation, but we would expect the same behavior with such a synchronization.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Alfio
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/07/29648.php">http://www.open-mpi.org/community/lists/users/2016/07/29648.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29654.php">Alfio Lazzaro: "Re: [OMPI users] MPI-RMA rget doesn't complete the communication after mpi_wait"</a>
<li><strong>Previous message:</strong> <a href="29652.php">Emani, Murali: "Re: [OMPI users] [OMPI devel]    Class information in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="29648.php">Alfio Lazzaro: "[OMPI users] MPI-RMA rget doesn't complete the communication after mpi_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29654.php">Alfio Lazzaro: "Re: [OMPI users] MPI-RMA rget doesn't complete the communication after mpi_wait"</a>
<li><strong>Reply:</strong> <a href="29654.php">Alfio Lazzaro: "Re: [OMPI users] MPI-RMA rget doesn't complete the communication after mpi_wait"</a>
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
