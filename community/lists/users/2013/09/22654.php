<?
$subject_val = "Re: [OMPI users] any deadlocks in this sets of MPI_send and	MPI_recv ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 14 04:19:15 2013" -->
<!-- isoreceived="20130914081915" -->
<!-- sent="Sat, 14 Sep 2013 08:19:13 +0000" -->
<!-- isosent="20130914081913" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] any deadlocks in this sets of MPI_send and	MPI_recv ?" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8A98F1_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAOQ90zFnofSTrjOstcXa8kjKCaZrTYnCFHUarSXROak3sWofpA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] any deadlocks in this sets of MPI_send and	MPI_recv ?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-14 04:19:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22655.php">Huangwei: "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<li><strong>Previous message:</strong> <a href="22653.php">Jeff Squyres (jsquyres): "Re: [OMPI users] adding library (libmpi_cxx.so.1)"</a>
<li><strong>In reply to:</strong> <a href="22652.php">Huangwei: "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22655.php">Huangwei: "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<li><strong>Reply:</strong> <a href="22655.php">Huangwei: "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At first glance, your code doesn't look problematic.  First thing I'd check is ensure that QRECS is large enough to hold the incoming data (i.e., that you aren't overwriting the buffer and causing memory corruption, which can cause weird/unexplained faults like this).
<br>
<p>Also, you might well be able to accomplish the same communication pattern with MPI_GATHER (or MPI_GATHERV, if each rank is sending a different amount of information).
<br>
<p><p>On Sep 14, 2013, at 12:27 AM, Huangwei &lt;hz283_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; The code I would like to post is like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if(myrank .ne. 0) then
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 13 September 2013 23:25, Huangwei &lt;hz283_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Dear All, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a question about using MPI_send and MPI_recv. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The object  is as follows:
</span><br>
<span class="quotelev1">&gt; I would like to send an array Q from rank=1, N-1 to rank=0, and then rank 0 receives the Q from all other processors. Q will be put into a new array Y in rank 0. (of couse this is not realized by MPI). and then MPI_bcast is used (from rank 0) to broadcast the Y to all the processors. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fortran Code is like:
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
<span class="quotelev1">&gt; Problem I met is:
</span><br>
<span class="quotelev1">&gt; In my simulation, time marching is performed, These mpi_send and recv are fine for the first three time steps. However, for the fourth time step, the looping is only finished from i=1 to i=13, (totally 48 processors). That mean after 14th processors, the mpi_recv did not receive the date from them. Thus the code hangs there forever. Does deadlock occur for this situation? How can I figure out this problem?
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22655.php">Huangwei: "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<li><strong>Previous message:</strong> <a href="22653.php">Jeff Squyres (jsquyres): "Re: [OMPI users] adding library (libmpi_cxx.so.1)"</a>
<li><strong>In reply to:</strong> <a href="22652.php">Huangwei: "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22655.php">Huangwei: "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<li><strong>Reply:</strong> <a href="22655.php">Huangwei: "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
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
