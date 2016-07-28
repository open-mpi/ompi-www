<?
$subject_val = "Re: [OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  3 18:17:09 2015" -->
<!-- isoreceived="20150403221709" -->
<!-- sent="Fri, 3 Apr 2015 23:17:08 +0100" -->
<!-- isosent="20150403221708" -->
<!-- name="Matthieu Brucher" -->
<!-- email="matthieu.brucher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever" -->
<!-- id="CAHCaCk+2uDCpQe2eA_8YoiLOi9vC+kS75fR6HqP_JF_PxpzPsw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAEV8=V9gUcWXVup3MZGv6mxv70HR=PD8xrYgMkysydg64x4t7Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever<br>
<strong>From:</strong> Matthieu Brucher (<em>matthieu.brucher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-03 18:17:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26607.php">Lei Shi: "Re: [OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>Previous message:</strong> <a href="26605.php">Lei Shi: "[OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>In reply to:</strong> <a href="26605.php">Lei Shi: "[OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26607.php">Lei Shi: "Re: [OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>Reply:</strong> <a href="26607.php">Lei Shi: "Re: [OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you don't need to know if the data was transferred or not, then why do
<br>
you transfer it in the first place? The schema seems kind of strange, as
<br>
you don't have any clue that the data was actually transferred. Actually
<br>
without Wait and Test, you can pretty much assume you don't transfer
<br>
anything.
<br>
<p>Cheers,
<br>
<p>Matthieu
<br>
<p>2015-04-03 22:51 GMT+01:00 Lei Shi &lt;leishi_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your reminder. I don't need to make sure the data is correct or
</span><br>
<span class="quotelev1">&gt; not. I know it sounds crazy at first time, but there are some numerical
</span><br>
<span class="quotelev1">&gt; schemes designed for this situation. I just want to call
</span><br>
<span class="quotelev1">&gt; MPI_ISend/MPI_IRecv without calling waiting or testing but can still run my
</span><br>
<span class="quotelev1">&gt; program smoothly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely Yours,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Lei Shi
</span><br>
<span class="quotelev1">&gt; ---------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Apr 3, 2015 at 11:52 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 3, 2015, at 12:50 PM, Lei Shi &lt;leishi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; P.S.  Pavan suggests me to use MPI_Request_free. I will give it a try.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Keep in mind that you have zero indication of when a send or receive
</span><br>
<span class="quotelev2">&gt;&gt; completes if you MPI_Request_free (Pavan implied this, too).  You could be
</span><br>
<span class="quotelev2">&gt;&gt; reading half a message from a prior receive, for example.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26605.php">http://www.open-mpi.org/community/lists/users/2015/04/26605.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Information System Engineer, Ph.D.
Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
Music band: <a href="http://liliejay.com/">http://liliejay.com/</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26606/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26607.php">Lei Shi: "Re: [OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>Previous message:</strong> <a href="26605.php">Lei Shi: "[OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>In reply to:</strong> <a href="26605.php">Lei Shi: "[OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26607.php">Lei Shi: "Re: [OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>Reply:</strong> <a href="26607.php">Lei Shi: "Re: [OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
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
