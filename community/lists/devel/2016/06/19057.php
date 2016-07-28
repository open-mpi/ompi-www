<?
$subject_val = "Re: [OMPI devel] contributing to Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  2 00:22:03 2016" -->
<!-- isoreceived="20160602042203" -->
<!-- sent="Thu, 2 Jun 2016 09:52:01 +0530" -->
<!-- isosent="20160602042201" -->
<!-- name="Sreenidhi Bharathkar Ramesh" -->
<!-- email="sreenidhi-bharathkar.ramesh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] contributing to Open MPI" -->
<!-- id="CANi1EtNatCa0RFoYHwKM27PumMxAQifXU0s3_ZMsE7wVi9GdLg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1FE91F40-C44B-4D75-BC71-BD919FE531DE_at_cisco.com" -->
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
<strong>From:</strong> Sreenidhi Bharathkar Ramesh (<em>sreenidhi-bharathkar.ramesh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-02 00:22:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19058.php">Nathan Hjelm: "Re: [OMPI devel] contributing to Open MPI"</a>
<li><strong>Previous message:</strong> <a href="19056.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19051.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] contributing to Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19058.php">Nathan Hjelm: "Re: [OMPI devel] contributing to Open MPI"</a>
<li><strong>Reply:</strong> <a href="19058.php">Nathan Hjelm: "Re: [OMPI devel] contributing to Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for the response.
<br>
<p>Nathan,
<br>
Sure, we will try out your branch and let you know.  Any idea when it is
<br>
likely to be pulled into master ?
<br>
I presume that our changes, if any, will need to be on top of these changes.
<br>
<p>Jeff,
<br>
<p>A few clarifications please:
<br>
<p><span class="quotelev1">&gt; a) run MTT regularly and submit the results to the community database
</span><br>
<p>Is MTT required along with initial proposed branch ?   Also, what
<br>
regularity of MTT is required after submission ?
<br>
<p>I apologize if these questions sound basic.  We are just getting started,
<br>
hence asking.
<br>
<p>Thanks!
<br>
- Sreenidhi.
<br>
<p>On Tue, May 31, 2016 at 7:33 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Let me address the questions Nathan didn't:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - testing: if you're adding support for a platform that we don't test,
</span><br>
<span class="quotelev1">&gt; it's likely that the code will grow stale and eventually be removed.  The
</span><br>
<span class="quotelev1">&gt; best way to make sure a platform stays supported is to a) run MTT regularly
</span><br>
<span class="quotelev1">&gt; and submit the results to the community database, and b) make sure that
</span><br>
<span class="quotelev1">&gt; there are tests that are exercising the code paths you're adding for your
</span><br>
<span class="quotelev1">&gt; platform.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - submissions are added to release branches on a rolling basis.  You're
</span><br>
<span class="quotelev1">&gt; too late for the 2.0.x series, but the door is open for the v2.1.x series
</span><br>
<span class="quotelev1">&gt; (and beyond, of course).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 30, 2016, at 11:15 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I should clarify. The PR adds support for ARM64 atomics and CMA when the
</span><br>
<span class="quotelev1">&gt; linux headers are not installed. It does not update the timer code and
</span><br>
<span class="quotelev1">&gt; still needs some testing.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On May 30, 2016, at 8:37 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; We already have a PR open to add ARM64 support. Please test
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/pull/1634">https://github.com/open-mpi/ompi/pull/1634</a> and let me know if it works
</span><br>
<span class="quotelev1">&gt; for you. Additional contributions are greatly appreciated!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Nathan
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On May 30, 2016, at 4:32 AM, Sreenidhi Bharathkar Ramesh &lt;
</span><br>
<span class="quotelev1">&gt; sreenidhi-bharathkar.ramesh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; We may be in a position to contribute to Open MPI, initially by adding
</span><br>
<span class="quotelev1">&gt; ARM64 support.  Specifically, atomics and Timer support.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have already gone through:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="https://www.open-mpi.org/community/contribute/">https://www.open-mpi.org/community/contribute/</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="https://www.open-mpi.org/faq/?category=contributing">https://www.open-mpi.org/faq/?category=contributing</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Please let me know:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1. baseline for the patch
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 2. test logs and results that are expected
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 3. any cutoffs from release timeline perspective
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; - Sreenidhi.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19048.php">http://www.open-mpi.org/community/lists/devel/2016/05/19048.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19050.php">http://www.open-mpi.org/community/lists/devel/2016/05/19050.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19051.php">http://www.open-mpi.org/community/lists/devel/2016/05/19051.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19057/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19058.php">Nathan Hjelm: "Re: [OMPI devel] contributing to Open MPI"</a>
<li><strong>Previous message:</strong> <a href="19056.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19051.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] contributing to Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19058.php">Nathan Hjelm: "Re: [OMPI devel] contributing to Open MPI"</a>
<li><strong>Reply:</strong> <a href="19058.php">Nathan Hjelm: "Re: [OMPI devel] contributing to Open MPI"</a>
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
