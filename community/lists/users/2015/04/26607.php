<?
$subject_val = "Re: [OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  3 21:14:58 2015" -->
<!-- isoreceived="20150404011458" -->
<!-- sent="Fri, 3 Apr 2015 20:14:36 -0500" -->
<!-- isosent="20150404011436" -->
<!-- name="Lei Shi" -->
<!-- email="leishi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever" -->
<!-- id="CAEV8=V_52DjLU+ShJ=J9Pb=g_FPsceh+qAo1SzLDC5DRWofheQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHCaCk+2uDCpQe2eA_8YoiLOi9vC+kS75fR6HqP_JF_PxpzPsw_at_mail.gmail.com" -->
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
<strong>From:</strong> Lei Shi (<em>leishi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-03 21:14:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26608.php">Subhra Mazumdar: "[OMPI users] Hang in MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="26606.php">Matthieu Brucher: "Re: [OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>In reply to:</strong> <a href="26606.php">Matthieu Brucher: "Re: [OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Matthieu,
<br>
<p>I see your point, if I avoid calling mpi_test or wait, there is no data
<br>
transfer at all.
<br>
<p><p>Sincerely Yours,
<br>
<p>Lei Shi
<br>
---------
<br>
<p>On Fri, Apr 3, 2015 at 5:17 PM, Matthieu Brucher &lt;matthieu.brucher_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; If you don't need to know if the data was transferred or not, then why do
</span><br>
<span class="quotelev1">&gt; you transfer it in the first place? The schema seems kind of strange, as
</span><br>
<span class="quotelev1">&gt; you don't have any clue that the data was actually transferred. Actually
</span><br>
<span class="quotelev1">&gt; without Wait and Test, you can pretty much assume you don't transfer
</span><br>
<span class="quotelev1">&gt; anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matthieu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015-04-03 22:51 GMT+01:00 Lei Shi &lt;leishi_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your reminder. I don't need to make sure the data is correct
</span><br>
<span class="quotelev2">&gt;&gt; or not. I know it sounds crazy at first time, but there are some numerical
</span><br>
<span class="quotelev2">&gt;&gt; schemes designed for this situation. I just want to call
</span><br>
<span class="quotelev2">&gt;&gt; MPI_ISend/MPI_IRecv without calling waiting or testing but can still run my
</span><br>
<span class="quotelev2">&gt;&gt; program smoothly.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sincerely Yours,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Lei Shi
</span><br>
<span class="quotelev2">&gt;&gt; ---------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Apr 3, 2015 at 11:52 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 3, 2015, at 12:50 PM, Lei Shi &lt;leishi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; P.S.  Pavan suggests me to use MPI_Request_free. I will give it a try.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Keep in mind that you have zero indication of when a send or receive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; completes if you MPI_Request_free (Pavan implied this, too).  You could be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reading half a message from a prior receive, for example.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26605.php">http://www.open-mpi.org/community/lists/users/2015/04/26605.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Information System Engineer, Ph.D.
</span><br>
<span class="quotelev1">&gt; Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
</span><br>
<span class="quotelev1">&gt; LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</span><br>
<span class="quotelev1">&gt; Music band: <a href="http://liliejay.com/">http://liliejay.com/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26606.php">http://www.open-mpi.org/community/lists/users/2015/04/26606.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26607/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26608.php">Subhra Mazumdar: "[OMPI users] Hang in MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="26606.php">Matthieu Brucher: "Re: [OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>In reply to:</strong> <a href="26606.php">Matthieu Brucher: "Re: [OMPI users] Fwd: Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
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
