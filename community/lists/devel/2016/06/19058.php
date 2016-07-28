<?
$subject_val = "Re: [OMPI devel] contributing to Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  2 00:26:40 2016" -->
<!-- isoreceived="20160602042640" -->
<!-- sent="Wed, 01 Jun 2016 22:26:31 -0600" -->
<!-- isosent="20160602042631" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] contributing to Open MPI" -->
<!-- id="526A3F8A-F8EE-450C-881C-A1853B39CB5A_at_me.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CANi1EtNatCa0RFoYHwKM27PumMxAQifXU0s3_ZMsE7wVi9GdLg_at_mail.gmail.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-02 00:26:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19059.php">Gilles Gouaillardet: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Previous message:</strong> <a href="19057.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] contributing to Open MPI"</a>
<li><strong>In reply to:</strong> <a href="19057.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] contributing to Open MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The branch will be merged once we know make check succeeds on arm64 with &#226;&#128;&#148;disable-builtin-atomics. Just waiting on that testing.
<br>
<p>-Nathan
<br>
<p><span class="quotelev1">&gt; On Jun 1, 2016, at 10:22 PM, Sreenidhi Bharathkar Ramesh &lt;sreenidhi-bharathkar.ramesh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for the response.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nathan,
</span><br>
<span class="quotelev1">&gt; Sure, we will try out your branch and let you know.  Any idea when it is likely to be pulled into master ?
</span><br>
<span class="quotelev1">&gt; I presume that our changes, if any, will need to be on top of these changes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A few clarifications please:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; a) run MTT regularly and submit the results to the community database
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is MTT required along with initial proposed branch ?   Also, what regularity of MTT is required after submission ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I apologize if these questions sound basic.  We are just getting started, hence asking.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; - Sreenidhi.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, May 31, 2016 at 7:33 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Let me address the questions Nathan didn't:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - testing: if you're adding support for a platform that we don't test, it's likely that the code will grow stale and eventually be removed.  The best way to make sure a platform stays supported is to a) run MTT regularly and submit the results to the community database, and b) make sure that there are tests that are exercising the code paths you're adding for your platform.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - submissions are added to release branches on a rolling basis.  You're too late for the 2.0.x series, but the door is open for the v2.1.x series (and beyond, of course).
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
<span class="quotelev2">&gt; &gt; I should clarify. The PR adds support for ARM64 atomics and CMA when the linux headers are not installed. It does not update the timer code and still needs some testing.
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
<span class="quotelev3">&gt; &gt;&gt; We already have a PR open to add ARM64 support. Please test <a href="https://github.com/open-mpi/ompi/pull/1634">https://github.com/open-mpi/ompi/pull/1634</a> and let me know if it works for you. Additional contributions are greatly appreciated!
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -Nathan
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On May 30, 2016, at 4:32 AM, Sreenidhi Bharathkar Ramesh &lt;sreenidhi-bharathkar.ramesh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; We may be in a position to contribute to Open MPI, initially by adding ARM64 support.  Specifically, atomics and Timer support.
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
<span class="quotelev4">&gt; &gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19048.php">http://www.open-mpi.org/community/lists/devel/2016/05/19048.php</a>
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
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19050.php">http://www.open-mpi.org/community/lists/devel/2016/05/19050.php</a>
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19051.php">http://www.open-mpi.org/community/lists/devel/2016/05/19051.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/06/19057.php">http://www.open-mpi.org/community/lists/devel/2016/06/19057.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19058/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19059.php">Gilles Gouaillardet: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Previous message:</strong> <a href="19057.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] contributing to Open MPI"</a>
<li><strong>In reply to:</strong> <a href="19057.php">Sreenidhi Bharathkar Ramesh: "Re: [OMPI devel] contributing to Open MPI"</a>
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
