<?
$subject_val = "Re: [OMPI users] MPI-RMA rget doesn't complete the communication after mpi_wait";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 13 05:23:42 2016" -->
<!-- isoreceived="20160713092342" -->
<!-- sent="Wed, 13 Jul 2016 11:23:40 +0200" -->
<!-- isosent="20160713092340" -->
<!-- name="Alfio Lazzaro" -->
<!-- email="alfio.lazzaro_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-RMA rget doesn't complete the communication after mpi_wait" -->
<!-- id="CAJjY+1b=i375rs_baaYJf9FNr85B_nRB1C0SaFaxiPZ0rV6XXQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="0C91790F-5A42-47C9-AA9D-ECA541C3B61A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI-RMA rget doesn't complete the communication after mpi_wait<br>
<strong>From:</strong> Alfio Lazzaro (<em>alfio.lazzaro_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-13 05:23:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29655.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI-RMA rget doesn't complete the communication after mpi_wait"</a>
<li><strong>Previous message:</strong> <a href="29653.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI-RMA rget doesn't complete the communication after	mpi_wait"</a>
<li><strong>In reply to:</strong> <a href="29653.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI-RMA rget doesn't complete the communication after	mpi_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29655.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI-RMA rget doesn't complete the communication after mpi_wait"</a>
<li><strong>Reply:</strong> <a href="29655.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI-RMA rget doesn't complete the communication after mpi_wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
thanks for your reply. We tried it and it still doesn't work...
<br>
<p>Alfio
<br>
<p>2016-07-13 1:19 GMT+02:00 Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Alfio --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We just released Open MPI v2.0.0, with lots of MPI RMA fixes.  Would you
</span><br>
<span class="quotelev1">&gt; mind testing there?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 12, 2016, at 1:33 PM, Alfio Lazzaro &lt;alfio.lazzaro_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear OpenMPI developers,
</span><br>
<span class="quotelev2">&gt; &gt; we found a strange behavior when using MPI-RMA passive target and
</span><br>
<span class="quotelev1">&gt; OpenMPI (versions 1.8.3 and 1.10.2). We don't see any problem when using
</span><br>
<span class="quotelev1">&gt; MPICH.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is a small example on what we want to do:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ===================
</span><br>
<span class="quotelev2">&gt; &gt; program rma_openmpi
</span><br>
<span class="quotelev2">&gt; &gt;   use mpi
</span><br>
<span class="quotelev2">&gt; &gt;   integer :: nproc, rank, ierr
</span><br>
<span class="quotelev2">&gt; &gt;   integer :: win, request, size
</span><br>
<span class="quotelev2">&gt; &gt;   INTEGER(kind=mpi_address_kind) :: size_aint, disp_aint
</span><br>
<span class="quotelev2">&gt; &gt;   integer, DIMENSION(:), ALLOCATABLE :: meta, recv
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   call MPI_INIT(ierr)
</span><br>
<span class="quotelev2">&gt; &gt;   call MPI_COMM_SIZE(MPI_COMM_WORLD, nproc, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;   call MPI_COMM_RANK(MPI_COMM_WORLD, rank, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   size=100
</span><br>
<span class="quotelev2">&gt; &gt;   ALLOCATE(meta(size),recv(size))
</span><br>
<span class="quotelev2">&gt; &gt;   meta(:) = rank
</span><br>
<span class="quotelev2">&gt; &gt;   recv(:) = -1
</span><br>
<span class="quotelev2">&gt; &gt;   size_aint = size*4
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   call
</span><br>
<span class="quotelev1">&gt; MPI_WIN_CREATE(meta,size_aint,4,MPI_INFO_NULL,MPI_COMM_WORLD,win,ierr)
</span><br>
<span class="quotelev2">&gt; &gt;   call MPI_WIN_LOCK_ALL(MPI_MODE_NOCHECK, win, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   disp_aint = 0
</span><br>
<span class="quotelev2">&gt; &gt;   CALL MPI_RGET(recv,size,MPI_INTEGER,MOD(rank+1,2),disp_aint,&amp;
</span><br>
<span class="quotelev2">&gt; &gt;        size,MPI_INTEGER,win,request,ierr)
</span><br>
<span class="quotelev2">&gt; &gt;   IF (ierr .NE. 0) STOP &quot;error mpi_rget&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   CALL MPI_WAIT(request,MPI_STATUS_IGNORE,ierr)
</span><br>
<span class="quotelev2">&gt; &gt;   IF (ierr .NE. 0) STOP &quot;error mpi_wait&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; !  call MPI_Win_flush_all(win,ierr)
</span><br>
<span class="quotelev2">&gt; &gt;   print *,rank,&quot;=&quot;,recv(1)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   call MPI_WIN_UNLOCK_ALL(win, ierr)
</span><br>
<span class="quotelev2">&gt; &gt;   call MPI_WIN_FREE(win,ierr)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   DEALLOCATE(meta)
</span><br>
<span class="quotelev2">&gt; &gt;   call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev2">&gt; &gt; end program rma_openmpi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ===================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You can run with 2 ranks.
</span><br>
<span class="quotelev2">&gt; &gt; As you can see it is a simple rget operation from the neighbor rank.
</span><br>
<span class="quotelev1">&gt; However, it seems that the communications doesn't complete after the
</span><br>
<span class="quotelev1">&gt; mpi_wait. Indeed we get:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;           0 =          -1
</span><br>
<span class="quotelev2">&gt; &gt;           1 =          -1
</span><br>
<span class="quotelev2">&gt; &gt; while it should be:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;            0 =           1
</span><br>
<span class="quotelev2">&gt; &gt;            1 =           0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The code works as we want by uncommenting the flush operation, but we
</span><br>
<span class="quotelev1">&gt; would expect the same behavior with such a synchronization.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your help!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best regards,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Alfio
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29648.php">http://www.open-mpi.org/community/lists/users/2016/07/29648.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/07/29653.php">http://www.open-mpi.org/community/lists/users/2016/07/29653.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Alfio Lazzaro
skype account: alfio.lazzaro
Sito web: <a href="https://sites.google.com/site/alfiolazzaro/">https://sites.google.com/site/alfiolazzaro/</a>
email: alfio.lazzaro_at_[hidden] (per messaggi a cui prometto di rispondere
in qualche giorno, ma rispondo! :) )
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29654/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29655.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI-RMA rget doesn't complete the communication after mpi_wait"</a>
<li><strong>Previous message:</strong> <a href="29653.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI-RMA rget doesn't complete the communication after	mpi_wait"</a>
<li><strong>In reply to:</strong> <a href="29653.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI-RMA rget doesn't complete the communication after	mpi_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29655.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI-RMA rget doesn't complete the communication after mpi_wait"</a>
<li><strong>Reply:</strong> <a href="29655.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI-RMA rget doesn't complete the communication after mpi_wait"</a>
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
