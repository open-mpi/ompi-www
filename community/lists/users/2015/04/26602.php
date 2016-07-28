<?
$subject_val = "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  3 12:25:55 2015" -->
<!-- isoreceived="20150403162555" -->
<!-- sent="Fri, 3 Apr 2015 11:25:34 -0500" -->
<!-- isosent="20150403162534" -->
<!-- name="Lei Shi" -->
<!-- email="leishi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever" -->
<!-- id="CAEV8=V-mKjB03LePj0mDsMYhYwf8jS8rnPHcVsLPCibPanT9Ng_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHCaCkJDu7eDPWdu7wgk8c2koMEu8hsZERio4Q6UPHktQKrfrA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever<br>
<strong>From:</strong> Lei Shi (<em>leishi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-03 12:25:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26603.php">Lei Shi: "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>Previous message:</strong> <a href="26601.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [mpich-discuss]  Buffered sends are evil?"</a>
<li><strong>In reply to:</strong> <a href="26598.php">Matthieu Brucher: "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Matthieu,
<br>
<p>Thanks for your help. That is my understanding too and is verified by my
<br>
test code. But I think there may be still a way to do it without calling
<br>
wait or test. For my case, I just don't need to worry about the received
<br>
data is correct or not (latest one or the old initial data)
<br>
<p>Sincerely Yours,
<br>
<p>Lei Shi
<br>
---------
<br>
<p>On Fri, Apr 3, 2015 at 2:43 AM, Matthieu Brucher &lt;matthieu.brucher_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think you have to call either Wait or Test to make the communications
</span><br>
<span class="quotelev1">&gt; move forward in the general case. Some hardware may have a hardware thread
</span><br>
<span class="quotelev1">&gt; that makes the communication, but usually you have to make it &quot;advance&quot;
</span><br>
<span class="quotelev1">&gt; yourself by either calling Wait ot Test.
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
<span class="quotelev1">&gt; 2015-04-03 5:48 GMT+01:00 Lei Shi &lt;leishi_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I want to use non-blocking send/rev MPI_Isend/MPI_Irev to do
</span><br>
<span class="quotelev2">&gt;&gt; communication. But in my case, I don't really care what kind of data I get
</span><br>
<span class="quotelev2">&gt;&gt; or it is ready to use or not. So I don't want to waste my time to do any
</span><br>
<span class="quotelev2">&gt;&gt; synchronization  by calling MPI_Wait or etc API.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But when I avoid calling MPI_Wait, my program is freezed several secs
</span><br>
<span class="quotelev2">&gt;&gt; after running some iterations (after multiple MPI_Isend/Irev callings),
</span><br>
<span class="quotelev2">&gt;&gt; then continues. It takes even more time than the case with MPI_Wait.  So my
</span><br>
<span class="quotelev2">&gt;&gt; question is how to do a &quot;true&quot; non-blocking communication without waiting
</span><br>
<span class="quotelev2">&gt;&gt; for the data ready or not. Thanks.
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26596.php">http://www.open-mpi.org/community/lists/users/2015/04/26596.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26598.php">http://www.open-mpi.org/community/lists/users/2015/04/26598.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26602/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26603.php">Lei Shi: "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>Previous message:</strong> <a href="26601.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [mpich-discuss]  Buffered sends are evil?"</a>
<li><strong>In reply to:</strong> <a href="26598.php">Matthieu Brucher: "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
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
