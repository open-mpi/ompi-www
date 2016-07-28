<?
$subject_val = "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  3 03:43:33 2015" -->
<!-- isoreceived="20150403074333" -->
<!-- sent="Fri, 3 Apr 2015 08:43:30 +0100" -->
<!-- isosent="20150403074330" -->
<!-- name="Matthieu Brucher" -->
<!-- email="matthieu.brucher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever" -->
<!-- id="CAHCaCkJDu7eDPWdu7wgk8c2koMEu8hsZERio4Q6UPHktQKrfrA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAEV8=V_uUvLesPPQoSaKT5SyXujctS2dvUYgBcXdHp2T87KESw_at_mail.gmail.com" -->
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
<strong>From:</strong> Matthieu Brucher (<em>matthieu.brucher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-03 03:43:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26599.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Buffered sends are evil?"</a>
<li><strong>Previous message:</strong> <a href="26597.php">Lei Shi: "[OMPI users] Buffered sends are evil?"</a>
<li><strong>In reply to:</strong> <a href="26596.php">Lei Shi: "[OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26600.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>Reply:</strong> <a href="26600.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>Reply:</strong> <a href="26602.php">Lei Shi: "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I think you have to call either Wait or Test to make the communications
<br>
move forward in the general case. Some hardware may have a hardware thread
<br>
that makes the communication, but usually you have to make it &quot;advance&quot;
<br>
yourself by either calling Wait ot Test.
<br>
<p>Cheers,
<br>
<p>Matthieu
<br>
<p>2015-04-03 5:48 GMT+01:00 Lei Shi &lt;leishi_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; I want to use non-blocking send/rev MPI_Isend/MPI_Irev to do
</span><br>
<span class="quotelev1">&gt; communication. But in my case, I don't really care what kind of data I get
</span><br>
<span class="quotelev1">&gt; or it is ready to use or not. So I don't want to waste my time to do any
</span><br>
<span class="quotelev1">&gt; synchronization  by calling MPI_Wait or etc API.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But when I avoid calling MPI_Wait, my program is freezed several secs
</span><br>
<span class="quotelev1">&gt; after running some iterations (after multiple MPI_Isend/Irev callings),
</span><br>
<span class="quotelev1">&gt; then continues. It takes even more time than the case with MPI_Wait.  So my
</span><br>
<span class="quotelev1">&gt; question is how to do a &quot;true&quot; non-blocking communication without waiting
</span><br>
<span class="quotelev1">&gt; for the data ready or not. Thanks.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26596.php">http://www.open-mpi.org/community/lists/users/2015/04/26596.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26598/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26599.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Buffered sends are evil?"</a>
<li><strong>Previous message:</strong> <a href="26597.php">Lei Shi: "[OMPI users] Buffered sends are evil?"</a>
<li><strong>In reply to:</strong> <a href="26596.php">Lei Shi: "[OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26600.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>Reply:</strong> <a href="26600.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>Reply:</strong> <a href="26602.php">Lei Shi: "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
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
