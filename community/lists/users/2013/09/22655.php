<?
$subject_val = "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 14 06:22:23 2013" -->
<!-- isoreceived="20130914102223" -->
<!-- sent="Sat, 14 Sep 2013 11:21:40 +0100" -->
<!-- isosent="20130914102140" -->
<!-- name="Huangwei" -->
<!-- email="hz283_at_[hidden]" -->
<!-- subject="Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?" -->
<!-- id="CAOQ90zEygGDQ7ZZDTKakCgWMyOtu4nxEOD+XVuwwyTC7CmDSsw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F8A98F1_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?<br>
<strong>From:</strong> Huangwei (<em>hz283_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-14 06:21:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22656.php">Jeff Squyres (jsquyres): "Re: [OMPI users] any deadlocks in this sets of MPI_send and	MPI_recv ?"</a>
<li><strong>Previous message:</strong> <a href="22654.php">Jeff Squyres (jsquyres): "Re: [OMPI users] any deadlocks in this sets of MPI_send and	MPI_recv ?"</a>
<li><strong>In reply to:</strong> <a href="22654.php">Jeff Squyres (jsquyres): "Re: [OMPI users] any deadlocks in this sets of MPI_send and	MPI_recv ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22656.php">Jeff Squyres (jsquyres): "Re: [OMPI users] any deadlocks in this sets of MPI_send and	MPI_recv ?"</a>
<li><strong>Reply:</strong> <a href="22656.php">Jeff Squyres (jsquyres): "Re: [OMPI users] any deadlocks in this sets of MPI_send and	MPI_recv ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Thank you very much. About the QRECS, it is an allocatable array, and it is
<br>
introduced like:
<br>
<p>if(myrank .ne. 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;itag = myrank
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_send(Q.............., 0, itag, .................)
<br>
else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do i=1, N-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocate (QRECS(A(i)))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;itag = i
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_recv(QRECS......., i, itag, .................)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;deallocate(QRECS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enddo
<br>
<p>endif
<br>
<p>call mpi_bcast(YVAR............., 0, ..............)
<br>
Will this cause any problem using this way to introducing QRECS?
<br>
<p><p>Besides, the reasonable why I did not choose mpi_gatherv is that the QRECS
<br>
will put into YVAR in a non-consecutive way. for instance, if I have 4
<br>
processors, the first element in YVAR is from rank 0, second from rank 1
<br>
......fourth from rank 3, and then fifth from rank 0 again, sixth from rank
<br>
1 again....... But I will try your suggestion.
<br>
<p>Thanks.
<br>
<p>best regards,
<br>
Huangwei
<br>
<p><p><p><p><p><p>On 14 September 2013 09:19, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; At first glance, your code doesn't look problematic.  First thing I'd
</span><br>
<span class="quotelev1">&gt; check is ensure that QRECS is large enough to hold the incoming data (i.e.,
</span><br>
<span class="quotelev1">&gt; that you aren't overwriting the buffer and causing memory corruption, which
</span><br>
<span class="quotelev1">&gt; can cause weird/unexplained faults like this).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, you might well be able to accomplish the same communication pattern
</span><br>
<span class="quotelev1">&gt; with MPI_GATHER (or MPI_GATHERV, if each rank is sending a different amount
</span><br>
<span class="quotelev1">&gt; of information).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 14, 2013, at 12:27 AM, Huangwei &lt;hz283_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;  wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; The code I would like to post is like this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; if(myrank .ne. 0) then
</span><br>
<span class="quotelev2">&gt; &gt;      itag = myrank
</span><br>
<span class="quotelev2">&gt; &gt;      call mpi_send(Q.............., 0, itag, .................)
</span><br>
<span class="quotelev2">&gt; &gt; else
</span><br>
<span class="quotelev2">&gt; &gt;      do i=1, N-1
</span><br>
<span class="quotelev2">&gt; &gt;           itag = i
</span><br>
<span class="quotelev2">&gt; &gt;          call mpi_recv(QRECS......., i, itag, .................)
</span><br>
<span class="quotelev2">&gt; &gt;      enddo
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; endif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; call mpi_bcast(YVAR............., 0, ..............)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; best regards,
</span><br>
<span class="quotelev2">&gt; &gt; Huangwei
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 13 September 2013 23:25, Huangwei &lt;hz283_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Dear All,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have a question about using MPI_send and MPI_recv.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The object  is as follows:
</span><br>
<span class="quotelev2">&gt; &gt; I would like to send an array Q from rank=1, N-1 to rank=0, and then
</span><br>
<span class="quotelev1">&gt; rank 0 receives the Q from all other processors. Q will be put into a new
</span><br>
<span class="quotelev1">&gt; array Y in rank 0. (of couse this is not realized by MPI). and then
</span><br>
<span class="quotelev1">&gt; MPI_bcast is used (from rank 0) to broadcast the Y to all the processors.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Fortran Code is like:
</span><br>
<span class="quotelev2">&gt; &gt; if(myrank .eq. 0) then
</span><br>
<span class="quotelev2">&gt; &gt;      itag = myrank
</span><br>
<span class="quotelev2">&gt; &gt;      call mpi_send(Q.............., 0, itag, .................)
</span><br>
<span class="quotelev2">&gt; &gt; else
</span><br>
<span class="quotelev2">&gt; &gt;      do i=1, N-1
</span><br>
<span class="quotelev2">&gt; &gt;           itag = i
</span><br>
<span class="quotelev2">&gt; &gt;          call mpi_recv(QRECS......., i, itag, .................)
</span><br>
<span class="quotelev2">&gt; &gt;      enddo
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; endif
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; call mpi_bcast(YVAR............., 0, ..............)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Problem I met is:
</span><br>
<span class="quotelev2">&gt; &gt; In my simulation, time marching is performed, These mpi_send and recv
</span><br>
<span class="quotelev1">&gt; are fine for the first three time steps. However, for the fourth time step,
</span><br>
<span class="quotelev1">&gt; the looping is only finished from i=1 to i=13, (totally 48 processors).
</span><br>
<span class="quotelev1">&gt; That mean after 14th processors, the mpi_recv did not receive the date from
</span><br>
<span class="quotelev1">&gt; them. Thus the code hangs there forever. Does deadlock occur for this
</span><br>
<span class="quotelev1">&gt; situation? How can I figure out this problem?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you so much if anyone can give me some suggestions.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; best regards,
</span><br>
<span class="quotelev2">&gt; &gt; Huangwei
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22655/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22656.php">Jeff Squyres (jsquyres): "Re: [OMPI users] any deadlocks in this sets of MPI_send and	MPI_recv ?"</a>
<li><strong>Previous message:</strong> <a href="22654.php">Jeff Squyres (jsquyres): "Re: [OMPI users] any deadlocks in this sets of MPI_send and	MPI_recv ?"</a>
<li><strong>In reply to:</strong> <a href="22654.php">Jeff Squyres (jsquyres): "Re: [OMPI users] any deadlocks in this sets of MPI_send and	MPI_recv ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22656.php">Jeff Squyres (jsquyres): "Re: [OMPI users] any deadlocks in this sets of MPI_send and	MPI_recv ?"</a>
<li><strong>Reply:</strong> <a href="22656.php">Jeff Squyres (jsquyres): "Re: [OMPI users] any deadlocks in this sets of MPI_send and	MPI_recv ?"</a>
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
