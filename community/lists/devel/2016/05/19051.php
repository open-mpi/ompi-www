<?
$subject_val = "Re: [OMPI devel] contributing to Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 31 10:03:13 2016" -->
<!-- isoreceived="20160531140313" -->
<!-- sent="Tue, 31 May 2016 14:03:09 +0000" -->
<!-- isosent="20160531140309" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] contributing to Open MPI" -->
<!-- id="1FE91F40-C44B-4D75-BC71-BD919FE531DE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8C6B513A-5D67-4E30-9347-E8A0FFD26BC5_at_me.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] contributing to Open MPI<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-31 10:03:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19052.php">Jeff Squyres (jsquyres): "[OMPI devel] Git mail cap and AUTHORS update"</a>
<li><strong>Previous message:</strong> <a href="19050.php">Nathan Hjelm: "Re: [OMPI devel] contributing to Open MPI"</a>
<li><strong>In reply to:</strong> <a href="19050.php">Nathan Hjelm: "Re: [OMPI devel] contributing to Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19057.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] contributing to Open MPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19057.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] contributing to Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me address the questions Nathan didn't:
<br>
<p>- testing: if you're adding support for a platform that we don't test, it's likely that the code will grow stale and eventually be removed.  The best way to make sure a platform stays supported is to a) run MTT regularly and submit the results to the community database, and b) make sure that there are tests that are exercising the code paths you're adding for your platform.
<br>
<p>- submissions are added to release branches on a rolling basis.  You're too late for the 2.0.x series, but the door is open for the v2.1.x series (and beyond, of course).
<br>
<p><p><p><span class="quotelev1">&gt; On May 30, 2016, at 11:15 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I should clarify. The PR adds support for ARM64 atomics and CMA when the linux headers are not installed. It does not update the timer code and still needs some testing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 30, 2016, at 8:37 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We already have a PR open to add ARM64 support. Please test <a href="https://github.com/open-mpi/ompi/pull/1634">https://github.com/open-mpi/ompi/pull/1634</a> and let me know if it works for you. Additional contributions are greatly appreciated!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Nathan
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 30, 2016, at 4:32 AM, Sreenidhi Bharathkar Ramesh &lt;sreenidhi-bharathkar.ramesh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We may be in a position to contribute to Open MPI, initially by adding ARM64 support.  Specifically, atomics and Timer support.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have already gone through:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://www.open-mpi.org/community/contribute/">https://www.open-mpi.org/community/contribute/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://www.open-mpi.org/faq/?category=contributing">https://www.open-mpi.org/faq/?category=contributing</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please let me know:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. baseline for the patch
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. test logs and results that are expected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. any cutoffs from release timeline perspective
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - Sreenidhi.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19048.php">http://www.open-mpi.org/community/lists/devel/2016/05/19048.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19050.php">http://www.open-mpi.org/community/lists/devel/2016/05/19050.php</a>
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
<li><strong>Next message:</strong> <a href="19052.php">Jeff Squyres (jsquyres): "[OMPI devel] Git mail cap and AUTHORS update"</a>
<li><strong>Previous message:</strong> <a href="19050.php">Nathan Hjelm: "Re: [OMPI devel] contributing to Open MPI"</a>
<li><strong>In reply to:</strong> <a href="19050.php">Nathan Hjelm: "Re: [OMPI devel] contributing to Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19057.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] contributing to Open MPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19057.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] contributing to Open MPI"</a>
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
