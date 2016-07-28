<?
$subject_val = "Re: [OMPI users] send and receive vectors + variable length";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  9 12:39:51 2015" -->
<!-- isoreceived="20150109173951" -->
<!-- sent="Fri, 9 Jan 2015 12:39:50 -0500" -->
<!-- isosent="20150109173950" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] send and receive vectors + variable length" -->
<!-- id="CAMJJpkVF7zOwAAY6Zbq55yCPZJ_PZANRyQ_hegk9CcuAqv=9bQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="EA78A4B0-432B-40D0-84BB-02976C482C53_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] send and receive vectors + variable length<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-09 12:39:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26156.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Previous message:</strong> <a href="26154.php">Dave Goodell (dgoodell): "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>In reply to:</strong> <a href="26154.php">Dave Goodell (dgoodell): "Re: [OMPI users] send and receive vectors + variable length"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26156.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Reply:</strong> <a href="26156.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Reply:</strong> <a href="26157.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send and receive vectors + variable length"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I totally agree with Dave here. Moreover, based on the logic exposed by
<br>
Jeff, there is no right solution because if one choose to first wait on the
<br>
receive requests this  also leads to a deadlock as the send requests might
<br>
not be progressed.
<br>
<p>As a side note, posting the receive requests first minimize the potential
<br>
for unexpected requests.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Fri, Jan 9, 2015 at 12:31 PM, Dave Goodell (dgoodell) &lt;dgoodell_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Jan 9, 2015, at 7:46 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes, I know examples 3.8/3.9 are blocking examples.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But it's morally the same as:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_WAITALL(send_requests...)
</span><br>
<span class="quotelev2">&gt; &gt; MPI_WAITALL(recv_requests...)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Strictly speaking, that can deadlock, too.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It reality, it has far less chance of deadlocking than examples 3.8 and
</span><br>
<span class="quotelev1">&gt; 3.9 (because you're likely within the general progression engine, and the
</span><br>
<span class="quotelev1">&gt; implementation will progress both the send and receive requests while in
</span><br>
<span class="quotelev1">&gt; the first WAITALL).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But still, it would be valid for an implementation to *only* progress
</span><br>
<span class="quotelev1">&gt; the send requests -- and NOT the receive requests -- while in the first
</span><br>
<span class="quotelev1">&gt; WAITALL.  Which makes it functionally equivalent to examples 3.8/3.9.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's not true.  The implementation is required to make progress on all
</span><br>
<span class="quotelev1">&gt; outstanding requests (assuming they can be progressed).  The following
</span><br>
<span class="quotelev1">&gt; should not deadlock:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----&#226;&#156;&#130;----
</span><br>
<span class="quotelev1">&gt; for (...)  MPI_Isend(...)
</span><br>
<span class="quotelev1">&gt; for (...)  MPI_Irecv(...)
</span><br>
<span class="quotelev1">&gt; MPI_Waitall(send_requests...)
</span><br>
<span class="quotelev1">&gt; MPI_Waitall(recv_requests...)
</span><br>
<span class="quotelev1">&gt; ----&#226;&#156;&#130;----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26154.php">http://www.open-mpi.org/community/lists/users/2015/01/26154.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26155/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26156.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Previous message:</strong> <a href="26154.php">Dave Goodell (dgoodell): "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>In reply to:</strong> <a href="26154.php">Dave Goodell (dgoodell): "Re: [OMPI users] send and receive vectors + variable length"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26156.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Reply:</strong> <a href="26156.php">Diego Avesani: "Re: [OMPI users] send and receive vectors + variable length"</a>
<li><strong>Reply:</strong> <a href="26157.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send and receive vectors + variable length"</a>
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
