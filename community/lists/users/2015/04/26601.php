<?
$subject_val = "Re: [OMPI users] [mpich-discuss]  Buffered sends are evil?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  3 11:34:40 2015" -->
<!-- isoreceived="20150403153440" -->
<!-- sent="Fri, 3 Apr 2015 15:34:39 +0000" -->
<!-- isosent="20150403153439" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [mpich-discuss]  Buffered sends are evil?" -->
<!-- id="BF64226F-3E6D-4FFE-B037-B08AEA37B483_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="A4B77922-2FA1-4A1F-83EC-D9EC7E838468_at_anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [mpich-discuss]  Buffered sends are evil?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-03 11:34:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26602.php">Lei Shi: "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>Previous message:</strong> <a href="26600.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26619.php">Jeff Hammond: "Re: [OMPI users] [mpich-discuss]  Buffered sends are evil?"</a>
<li><strong>Reply:</strong> <a href="26619.php">Jeff Hammond: "Re: [OMPI users] [mpich-discuss]  Buffered sends are evil?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fair enough.
<br>

<br>
My main point should probably be summarized as: MPI_BSEND isn't worth it; there are other, less-confusing, generally-more-optimized alternatives.
<br>

<br>

<br>

<br>

<br>
<span class="quotelev1">&gt; On Apr 3, 2015, at 11:20 AM, Balaji, Pavan &lt;balaji_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your blog post seems to confuse what implementations currently do with what Bsend is capable of.  If users really wanted it (e.g., a big customer asked for it), every implementation will optimize the crap out of it.  The problem is that every few users really care for it, so there's not been a good incentive for implementations to optimize it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Coming to the technical aspects, bsend doesn't require copying into the user buffer, if you have internal buffer resources.  It only guarantees that Bsend will not block if enough user buffer space is available.  If you are blocking for progress anyway, I'm not sure the extra copy would matter too much -- it matters some, of course, but likely not to the extent of a full copy cost.  Also, the semantics it provides are different -- guaranteed nonblocking nature when there's buffer space available.  It's like saying Ssend is not as efficient as send.  That's true, but those are different semantics.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Having said that, I do agree with some of the shortcomings you pointed out -- specifically, you can only attach one buffer.  I'd add to the list with one more shortcoming: It's not communicator safe.  That is, if I attach a buffer, some other library I linked with might chew up my buffer space.  So the nonblocking guarantee is kind of bogus at that point.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  -- Pavan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 3, 2015, at 5:30 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes.  I think the blog post gives 10 excellent reasons why.  :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 3, 2015, at 2:40 AM, Lei Shi &lt;leishi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I want to use buffered sends. Read a blog said it is evil, <a href="http://blogs.cisco.com/performance/top-10-reasons-why-buffered-sends-are-evil">http://blogs.cisco.com/performance/top-10-reasons-why-buffered-sends-are-evil</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it true or not? Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sincerely Yours,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lei Shi 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26597.php">http://www.open-mpi.org/community/lists/users/2015/04/26597.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; discuss mailing list     discuss_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; To manage subscription options or unsubscribe:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://lists.mpich.org/mailman/listinfo/discuss">https://lists.mpich.org/mailman/listinfo/discuss</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Pavan Balaji  &#226;&#156;&#137;&#239;&#184;&#143;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; discuss mailing list     discuss_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To manage subscription options or unsubscribe:
</span><br>
<span class="quotelev1">&gt; <a href="https://lists.mpich.org/mailman/listinfo/discuss">https://lists.mpich.org/mailman/listinfo/discuss</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26602.php">Lei Shi: "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>Previous message:</strong> <a href="26600.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26619.php">Jeff Hammond: "Re: [OMPI users] [mpich-discuss]  Buffered sends are evil?"</a>
<li><strong>Reply:</strong> <a href="26619.php">Jeff Hammond: "Re: [OMPI users] [mpich-discuss]  Buffered sends are evil?"</a>
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
