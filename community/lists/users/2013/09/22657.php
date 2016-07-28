<?
$subject_val = "Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 15 08:44:27 2013" -->
<!-- isoreceived="20130915124427" -->
<!-- sent="Sun, 15 Sep 2013 13:43:43 +0100" -->
<!-- isosent="20130915124343" -->
<!-- name="Huangwei" -->
<!-- email="hz283_at_[hidden]" -->
<!-- subject="Re: [OMPI users] any deadlocks in this sets of MPI_send and MPI_recv ?" -->
<!-- id="CAOQ90zF1L21i5_yMXkNxBV46KDFZOEmpcnLWiPq=EhpGrYJDqg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F8AC22D_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Date:</strong> 2013-09-15 08:43:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22658.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<li><strong>Previous message:</strong> <a href="22656.php">Jeff Squyres (jsquyres): "Re: [OMPI users] any deadlocks in this sets of MPI_send and	MPI_recv ?"</a>
<li><strong>In reply to:</strong> <a href="22656.php">Jeff Squyres (jsquyres): "Re: [OMPI users] any deadlocks in this sets of MPI_send and	MPI_recv ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks very much, have a nice weekend!
<br>
<p>best regards,
<br>
Huangwei
<br>
<p><p><p><p><p><p>On 15 September 2013 11:29, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 14, 2013, at 12:21 PM, Huangwei &lt;hz283_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;      do i=1, N-1
</span><br>
<span class="quotelev2">&gt; &gt;           allocate (QRECS(A(i)))
</span><br>
<span class="quotelev2">&gt; &gt;           itag = i
</span><br>
<span class="quotelev2">&gt; &gt;          call mpi_recv(QRECS......., i, itag, .................)
</span><br>
<span class="quotelev2">&gt; &gt;           deallocate(QRECS)
</span><br>
<span class="quotelev2">&gt; &gt;      enddo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I assume you're doing more than just allocate/mpi_recv/deallocate.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know what A(i) is, so it's hard to say whether this is correct or
</span><br>
<span class="quotelev1">&gt; not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Will this cause any problem using this way to introducing QRECS?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you make a small program that reproduces the problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Besides, the reasonable why I did not choose mpi_gatherv is that the
</span><br>
<span class="quotelev1">&gt; QRECS will put into YVAR in a non-consecutive way. for instance, if I have
</span><br>
<span class="quotelev1">&gt; 4 processors, the first element in YVAR is from rank 0, second from rank 1
</span><br>
<span class="quotelev1">&gt; ......fourth from rank 3, and then fifth from rank 0 again, sixth from rank
</span><br>
<span class="quotelev1">&gt; 1 again....... But I will try your suggestion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Depending on how big the arrays are, it may still be faster/simpler to
</span><br>
<span class="quotelev1">&gt; gather(v) to a single array and copy to the final array.  Shrug.  It
</span><br>
<span class="quotelev1">&gt; depends on what your program is doing, and whether that is wort it to you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To be clear: either way should work fine; there may or may not be coding
</span><br>
<span class="quotelev1">&gt; and/or performance implications of each.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22657/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22658.php">Ralph Castain: "Re: [OMPI users] Segmentation fault with fresh compilation of 1.7.2"</a>
<li><strong>Previous message:</strong> <a href="22656.php">Jeff Squyres (jsquyres): "Re: [OMPI users] any deadlocks in this sets of MPI_send and	MPI_recv ?"</a>
<li><strong>In reply to:</strong> <a href="22656.php">Jeff Squyres (jsquyres): "Re: [OMPI users] any deadlocks in this sets of MPI_send and	MPI_recv ?"</a>
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
