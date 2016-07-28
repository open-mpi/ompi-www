<?
$subject_val = "Re: [OMPI users] [mpich-discuss]  Buffered sends are evil?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  6 15:41:36 2015" -->
<!-- isoreceived="20150406194136" -->
<!-- sent="Mon, 6 Apr 2015 12:41:15 -0700" -->
<!-- isosent="20150406194115" -->
<!-- name="Jeff Hammond" -->
<!-- email="jeff.science_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [mpich-discuss]  Buffered sends are evil?" -->
<!-- id="CAGKz=uJFeS_SUwLDF0KjiSPLY6uj+ri5AVTtNhJ=HjeiKVz-xw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BF64226F-3E6D-4FFE-B037-B08AEA37B483_at_cisco.com" -->
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
<strong>From:</strong> Jeff Hammond (<em>jeff.science_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-06 15:41:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26620.php">Howard Pritchard: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>Previous message:</strong> <a href="26618.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>In reply to:</strong> <a href="26601.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [mpich-discuss]  Buffered sends are evil?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
While we are tilting at windmills, can we also discuss the evils of
<br>
MPI_Cancel for MPI_Send, everything about MPI_Alltoallw, how
<br>
MPI_Reduce_scatter is named wrong, and any number of other pet peeves
<br>
that people have about MPI-3? :-D
<br>
<p>The MPI standard contains many useful functions and at least a handful
<br>
of stupid ones.  This is remarkably similar to other outputs of the
<br>
design-by-committee process and can be observed in OpenMP 4.0, C++14,
<br>
Fortran 2008, and probably every other standardized parallel
<br>
programming interface in use today.
<br>
<p>Fortunately, judicious parallel programmers know that less is more and
<br>
generally focus on using the useful functions effectively, while
<br>
ignoring the less useful ones, and it's usually not hard to tell the
<br>
difference.
<br>
<p>Jeff
<br>
<p>PS I used MPI_Bsend once and found it superior to the alternative of
<br>
MPI_Isend+MPI_Request_free for sending fire-and-forget acks, because
<br>
it forced the implementation to do what I wanted and the performance
<br>
improved as a result.
<br>
<p>On Fri, Apr 3, 2015 at 8:34 AM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Fair enough.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My main point should probably be summarized as: MPI_BSEND isn't worth it; there are other, less-confusing, generally-more-optimized alternatives.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 3, 2015, at 11:20 AM, Balaji, Pavan &lt;balaji_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your blog post seems to confuse what implementations currently do with what Bsend is capable of.  If users really wanted it (e.g., a big customer asked for it), every implementation will optimize the crap out of it.  The problem is that every few users really care for it, so there's not been a good incentive for implementations to optimize it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Coming to the technical aspects, bsend doesn't require copying into the user buffer, if you have internal buffer resources.  It only guarantees that Bsend will not block if enough user buffer space is available.  If you are blocking for progress anyway, I'm not sure the extra copy would matter too much -- it matters some, of course, but likely not to the extent of a full copy cost.  Also, the semantics it provides are different -- guaranteed nonblocking nature when there's buffer space available.  It's like saying Ssend is not as efficient as send.  That's true, but those are different semantics.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Having said that, I do agree with some of the shortcomings you pointed out -- specifically, you can only attach one buffer.  I'd add to the list with one more shortcoming: It's not communicator safe.  That is, if I attach a buffer, some other library I linked with might chew up my buffer space.  So the nonblocking guarantee is kind of bogus at that point.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  -- Pavan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 3, 2015, at 5:30 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes.  I think the blog post gives 10 excellent reasons why.  :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 3, 2015, at 2:40 AM, Lei Shi &lt;leishi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I want to use buffered sends. Read a blog said it is evil, <a href="http://blogs.cisco.com/performance/top-10-reasons-why-buffered-sends-are-evil">http://blogs.cisco.com/performance/top-10-reasons-why-buffered-sends-are-evil</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is it true or not? Thanks!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sincerely Yours,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Lei Shi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26597.php">http://www.open-mpi.org/community/lists/users/2015/04/26597.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; discuss mailing list     discuss_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To manage subscription options or unsubscribe:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://lists.mpich.org/mailman/listinfo/discuss">https://lists.mpich.org/mailman/listinfo/discuss</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Pavan Balaji  &#226;&#156;&#137;&#239;&#184;&#143;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; discuss mailing list     discuss_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; To manage subscription options or unsubscribe:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://lists.mpich.org/mailman/listinfo/discuss">https://lists.mpich.org/mailman/listinfo/discuss</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; discuss mailing list     discuss_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To manage subscription options or unsubscribe:
</span><br>
<span class="quotelev1">&gt; <a href="https://lists.mpich.org/mailman/listinfo/discuss">https://lists.mpich.org/mailman/listinfo/discuss</a>
</span><br>
<p><p><p><pre>
-- 
Jeff Hammond
jeff.science_at_[hidden]
<a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26620.php">Howard Pritchard: "Re: [OMPI users] OpenMPI 1.8.4 - Java Library - allToAllv()"</a>
<li><strong>Previous message:</strong> <a href="26618.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>In reply to:</strong> <a href="26601.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [mpich-discuss]  Buffered sends are evil?"</a>
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
