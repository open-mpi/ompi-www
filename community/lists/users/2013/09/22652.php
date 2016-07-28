<?
$subject_val = "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 13 18:28:27 2013" -->
<!-- isoreceived="20130913222827" -->
<!-- sent="Fri, 13 Sep 2013 23:27:44 +0100" -->
<!-- isosent="20130913222744" -->
<!-- name="Huangwei" -->
<!-- email="hz283_at_[hidden]" -->
<!-- subject="Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?" -->
<!-- id="CAOQ90zFnofSTrjOstcXa8kjKCaZrTYnCFHUarSXROak3sWofpA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAOQ90zFZD3poriJ3mdt6cz5_CZEy2N_L1N=qHU+VUpnx5L8L+g_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-09-13 18:27:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22653.php">Jeff Squyres (jsquyres): "Re: [OMPI users] adding library (libmpi_cxx.so.1)"</a>
<li><strong>Previous message:</strong> <a href="22651.php">Huangwei: "[OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<li><strong>In reply to:</strong> <a href="22651.php">Huangwei: "[OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22654.php">Jeff Squyres (jsquyres): "Re: [OMPI users] any deadlocks in this sets of MPI_send and	MPI_recv ?"</a>
<li><strong>Reply:</strong> <a href="22654.php">Jeff Squyres (jsquyres): "Re: [OMPI users] any deadlocks in this sets of MPI_send and	MPI_recv ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
*The code I would like to post is like this:*
<br>
*
<br>
*
<br>
if(myrank .ne. 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;itag = myrank
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_send(Q.............., 0, itag, .................)
<br>
else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do i=1, N-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;itag = i
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_recv(QRECS......., i, itag, .................)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;enddo
<br>
<p>endif
<br>
<p>call mpi_bcast(YVAR............., 0, ..............)
<br>
<p>best regards,
<br>
Huangwei
<br>
<p><p><p><p><p><p>On 13 September 2013 23:25, Huangwei &lt;hz283_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a question about using MPI_send and MPI_recv.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *The object  is as follows:*
</span><br>
<span class="quotelev1">&gt; I would like to send an array Q from rank=1, N-1 to rank=0, and then rank
</span><br>
<span class="quotelev1">&gt; 0 receives the Q from all other processors. Q will be put into a new array
</span><br>
<span class="quotelev1">&gt; Y in rank 0. (of couse this is not realized by MPI). and then MPI_bcast is
</span><br>
<span class="quotelev1">&gt; used (from rank 0) to broadcast the Y to all the processors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Fortran Code is like:*
</span><br>
<span class="quotelev1">&gt; if(myrank .eq. 0) then
</span><br>
<span class="quotelev1">&gt;      itag = myrank
</span><br>
<span class="quotelev1">&gt;      call mpi_send(Q.............., 0, itag, .................)
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt;      do i=1, N-1
</span><br>
<span class="quotelev1">&gt;           itag = i
</span><br>
<span class="quotelev1">&gt;          call mpi_recv(QRECS......., i, itag, .................)
</span><br>
<span class="quotelev1">&gt;      enddo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; call mpi_bcast(YVAR............., 0, ..............)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Problem I met is:*
</span><br>
<span class="quotelev1">&gt; In my simulation, time marching is performed, These mpi_send and recv are
</span><br>
<span class="quotelev1">&gt; fine for the first three time steps. However, for the fourth time step, the
</span><br>
<span class="quotelev1">&gt; looping is only finished from i=1 to i=13, (totally 48 processors). That
</span><br>
<span class="quotelev1">&gt; mean after 14th processors, the mpi_recv did not receive the date from
</span><br>
<span class="quotelev1">&gt; them. Thus the code hangs there forever. Does deadlock occur for this
</span><br>
<span class="quotelev1">&gt; situation? How can I figure out this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you so much if anyone can give me some suggestions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; best regards,
</span><br>
<span class="quotelev1">&gt; Huangwei
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22652/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22653.php">Jeff Squyres (jsquyres): "Re: [OMPI users] adding library (libmpi_cxx.so.1)"</a>
<li><strong>Previous message:</strong> <a href="22651.php">Huangwei: "[OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<li><strong>In reply to:</strong> <a href="22651.php">Huangwei: "[OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22654.php">Jeff Squyres (jsquyres): "Re: [OMPI users] any deadlocks in this sets of MPI_send and	MPI_recv ?"</a>
<li><strong>Reply:</strong> <a href="22654.php">Jeff Squyres (jsquyres): "Re: [OMPI users] any deadlocks in this sets of MPI_send and	MPI_recv ?"</a>
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
