<?
$subject_val = "[OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  3 17:51:56 2015" -->
<!-- isoreceived="20150403215156" -->
<!-- sent="Fri, 3 Apr 2015 16:51:34 -0500" -->
<!-- isosent="20150403215134" -->
<!-- name="Lei Shi" -->
<!-- email="leishi_at_[hidden]" -->
<!-- subject="[OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever" -->
<!-- id="CAEV8=V9gUcWXVup3MZGv6mxv70HR=PD8xrYgMkysydg64x4t7Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAEV8=V9M3Uu_sakSwHL+6Fks5hdP8vNTyo7N6y1b+Bfa00UnFg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever<br>
<strong>From:</strong> Lei Shi (<em>leishi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-03 17:51:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26606.php">Matthieu Brucher: "Re: [OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>Previous message:</strong> <a href="26604.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26606.php">Matthieu Brucher: "Re: [OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>Reply:</strong> <a href="26606.php">Matthieu Brucher: "Re: [OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Thanks for your reminder. I don't need to make sure the data is correct or
<br>
not. I know it sounds crazy at first time, but there are some numerical
<br>
schemes designed for this situation. I just want to call
<br>
MPI_ISend/MPI_IRecv without calling waiting or testing but can still run my
<br>
program smoothly.
<br>
<p>Sincerely Yours,
<br>
<p>Lei Shi
<br>
---------
<br>
<p>On Fri, Apr 3, 2015 at 11:52 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; On Apr 3, 2015, at 12:50 PM, Lei Shi &lt;leishi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; P.S.  Pavan suggests me to use MPI_Request_free. I will give it a try.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Keep in mind that you have zero indication of when a send or receive
</span><br>
<span class="quotelev1">&gt; completes if you MPI_Request_free (Pavan implied this, too).  You could be
</span><br>
<span class="quotelev1">&gt; reading half a message from a prior receive, for example.
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26605/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26606.php">Matthieu Brucher: "Re: [OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>Previous message:</strong> <a href="26604.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26606.php">Matthieu Brucher: "Re: [OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>Reply:</strong> <a href="26606.php">Matthieu Brucher: "Re: [OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
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
