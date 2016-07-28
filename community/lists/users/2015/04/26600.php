<?
$subject_val = "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  3 06:34:33 2015" -->
<!-- isoreceived="20150403103433" -->
<!-- sent="Fri, 3 Apr 2015 10:34:31 +0000" -->
<!-- isosent="20150403103431" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever" -->
<!-- id="1DD14AD4-8D0B-4222-A6D8-48EB83F448C3_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-03 06:34:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26601.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [mpich-discuss]  Buffered sends are evil?"</a>
<li><strong>Previous message:</strong> <a href="26599.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Buffered sends are evil?"</a>
<li><strong>In reply to:</strong> <a href="26598.php">Matthieu Brucher: "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26603.php">Lei Shi: "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>Reply:</strong> <a href="26603.php">Lei Shi: "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the general case, MPI defines that you *have* to call one of the MPI_Test or MPI_Wait functions to finish the communication request.  If you don't do so, you're basically leaking resources (e.g., memory).
<br>
<p>In a single-threaded MPI implementation, the call to MPI_Test/MPI_Wait/etc. may be where the actual message passing progress occurs, too.
<br>
<p>If you don't want to block waiting for the communication, you can keep an array of outstanding MPI_Requests and call MPI_Testall() on them to allow MPI to make progress on them, but not block your application until all (or any) of them complete.
<br>
<p><p><p><span class="quotelev1">&gt; On Apr 3, 2015, at 3:43 AM, Matthieu Brucher &lt;matthieu.brucher_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think you have to call either Wait or Test to make the communications move forward in the general case. Some hardware may have a hardware thread that makes the communication, but usually you have to make it &quot;advance&quot; yourself by either calling Wait ot Test.
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
<span class="quotelev1">&gt; I want to use non-blocking send/rev MPI_Isend/MPI_Irev to do communication. But in my case, I don't really care what kind of data I get or it is ready to use or not. So I don't want to waste my time to do any synchronization  by calling MPI_Wait or etc API. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But when I avoid calling MPI_Wait, my program is freezed several secs after running some iterations (after multiple MPI_Isend/Irev callings), then continues. It takes even more time than the case with MPI_Wait.  So my question is how to do a &quot;true&quot; non-blocking communication without waiting for the data ready or not. Thanks.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26596.php">http://www.open-mpi.org/community/lists/users/2015/04/26596.php</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26598.php">http://www.open-mpi.org/community/lists/users/2015/04/26598.php</a>
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
<li><strong>Next message:</strong> <a href="26601.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [mpich-discuss]  Buffered sends are evil?"</a>
<li><strong>Previous message:</strong> <a href="26599.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Buffered sends are evil?"</a>
<li><strong>In reply to:</strong> <a href="26598.php">Matthieu Brucher: "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26603.php">Lei Shi: "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>Reply:</strong> <a href="26603.php">Lei Shi: "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
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
