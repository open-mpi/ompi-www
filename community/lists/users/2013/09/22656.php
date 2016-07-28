<?
$subject_val = "Re: [OMPI users] any deadlocks in this sets of MPI_send and	MPI_recv ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 15 06:29:25 2013" -->
<!-- isoreceived="20130915102925" -->
<!-- sent="Sun, 15 Sep 2013 10:29:24 +0000" -->
<!-- isosent="20130915102924" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] any deadlocks in this sets of MPI_send and	MPI_recv ?" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8AC22D_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAOQ90zEygGDQ7ZZDTKakCgWMyOtu4nxEOD+XVuwwyTC7CmDSsw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2013-09-15 06:29:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22657.php">Huangwei: "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<li><strong>Previous message:</strong> <a href="22655.php">Huangwei: "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<li><strong>In reply to:</strong> <a href="22655.php">Huangwei: "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22657.php">Huangwei: "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<li><strong>Reply:</strong> <a href="22657.php">Huangwei: "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 14, 2013, at 12:21 PM, Huangwei &lt;hz283_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;      do i=1, N-1
</span><br>
<span class="quotelev1">&gt;           allocate (QRECS(A(i)))
</span><br>
<span class="quotelev1">&gt;           itag = i
</span><br>
<span class="quotelev1">&gt;          call mpi_recv(QRECS......., i, itag, .................)
</span><br>
<span class="quotelev1">&gt;           deallocate(QRECS)
</span><br>
<span class="quotelev1">&gt;      enddo
</span><br>
<p>I assume you're doing more than just allocate/mpi_recv/deallocate.  :-)
<br>
<p>I don't know what A(i) is, so it's hard to say whether this is correct or not.
<br>
<p><span class="quotelev1">&gt; Will this cause any problem using this way to introducing QRECS?
</span><br>
<p>I don't know.  
<br>
<p>Can you make a small program that reproduces the problem?
<br>
<p><span class="quotelev1">&gt; Besides, the reasonable why I did not choose mpi_gatherv is that the QRECS will put into YVAR in a non-consecutive way. for instance, if I have 4 processors, the first element in YVAR is from rank 0, second from rank 1 ......fourth from rank 3, and then fifth from rank 0 again, sixth from rank 1 again....... But I will try your suggestion. 
</span><br>
<p>Depending on how big the arrays are, it may still be faster/simpler to gather(v) to a single array and copy to the final array.  Shrug.  It depends on what your program is doing, and whether that is wort it to you.
<br>
<p>To be clear: either way should work fine; there may or may not be coding and/or performance implications of each.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22657.php">Huangwei: "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<li><strong>Previous message:</strong> <a href="22655.php">Huangwei: "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<li><strong>In reply to:</strong> <a href="22655.php">Huangwei: "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22657.php">Huangwei: "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
<li><strong>Reply:</strong> <a href="22657.php">Huangwei: "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?"</a>
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
