<?
$subject_val = "Re: [OMPI devel] osu_mbw_mr error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 16:55:16 2014" -->
<!-- isoreceived="20141106215516" -->
<!-- sent="Thu, 6 Nov 2014 13:55:13 -0800" -->
<!-- isosent="20141106215513" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] osu_mbw_mr error" -->
<!-- id="C3A060B2-E922-4AFA-9DEF-0086F9790D67_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20141106213902.GU6508_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] osu_mbw_mr error<br>
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-06 16:55:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16257.php">Ralph Castain: "Re: [OMPI devel] MTT diligence"</a>
<li><strong>Previous message:</strong> <a href="16255.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>In reply to:</strong> <a href="16253.php">Nathan Hjelm: "Re: [OMPI devel] osu_mbw_mr error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16254.php">Jeff Squyres (jsquyres): "[OMPI devel] MTT diligence"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Nov 6, 2014, at 1:39 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Nov 06, 2014 at 04:29:44PM -0500, Joshua Ladd wrote:
</span><br>
<span class="quotelev2">&gt;&gt;   On Thursday, November 6, 2014, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     On Thu, Nov 06, 2014 at 04:06:23PM -0500, Joshua Ladd wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Nathan,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Has this bug always been present in OpenIB or is this a recent
</span><br>
<span class="quotelev2">&gt;&gt;     addition?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   If this is regression, I would also be inclined to say that this is
</span><br>
<span class="quotelev2">&gt;&gt;     a
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     The bug is as old as the message coalescing feature in the openib
</span><br>
<span class="quotelev2">&gt;&gt;     btl. When the feature was added the openib btl no longer supported
</span><br>
<span class="quotelev2">&gt;&gt;     calling btl_free on descriptors allocated by sendi (a serious bug).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   blocker for 1.8.4. This is a SIGNIFICANT bug. Both Howard and I
</span><br>
<span class="quotelev2">&gt;&gt;     were quite
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   surprised that all the while this code has been in use at LANL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   in production systems, this issue was never discovered.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     Don't know why it suddenly came up but in 1.8.1 we added a inline send
</span><br>
<span class="quotelev2">&gt;&gt;     optimization to the MPI_Isend path. The optimization uses the btl_sendi
</span><br>
<span class="quotelev2">&gt;&gt;     function to get the fragment on the wire without allocating a send
</span><br>
<span class="quotelev2">&gt;&gt;     request. If this fails the btl fragment returned by sendi is released
</span><br>
<span class="quotelev2">&gt;&gt;     with btl_free, a send request is allocated, and the normal send path is
</span><br>
<span class="quotelev2">&gt;&gt;     used. The optimization was tested with the openib btl so I don't know
</span><br>
<span class="quotelev2">&gt;&gt;     why this wasn't caught earlier. My guess is some other change may have
</span><br>
<span class="quotelev2">&gt;&gt;     triggered it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     We fixed the bug in 1.8.4 by totally disabling message coalescing. The
</span><br>
<span class="quotelev2">&gt;&gt;     feature is meant to game the osu_mbw_mr test and does next to nothing
</span><br>
<span class="quotelev2">&gt;&gt;     for real apps. Additionally, the inline send optimization makes the
</span><br>
<span class="quotelev2">&gt;&gt;     feature less of a win with osu_mbw_mr anyway. We beat mvapich handily on
</span><br>
<span class="quotelev2">&gt;&gt;     LANL systems without message coalescing.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   [josh] Can you point to the PR, Nathan? I didn't realize this was already
</span><br>
<span class="quotelev2">&gt;&gt;   addressed in the 1.8.4 prerelease. I would seek Howard's guidance as to
</span><br>
<span class="quotelev2">&gt;&gt;   whether this is an acceptable solution for LANL.  Regardless of your
</span><br>
<span class="quotelev2">&gt;&gt;   opinion about the utility of MC, real decisions are made on the basis of
</span><br>
<span class="quotelev2">&gt;&gt;   those benchmarks, so I'm not entirely convinced of your argument
</span><br>
<span class="quotelev2">&gt;&gt;   here.  OMPI, as we are all aware tends to be a target on the basis of
</span><br>
<span class="quotelev2">&gt;&gt;   these comparisons. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This was already discussed here. On LANL systems the message rates are
</span><br>
<span class="quotelev1">&gt; the same with and without the message coalescing &quot;feature&quot; so we are
</span><br>
<span class="quotelev1">&gt; turning it off and disabling it for 1.8.4. As for the PR. It looks like
</span><br>
<span class="quotelev1">&gt; Ralph has not merged it into 1.8.4 yet.
</span><br>
<p>Correct - it is still pending review/comment. You&#226;&#128;&#153;ll find it here:
<br>
<p><a href="https://github.com/open-mpi/ompi-release/pull/79">https://github.com/open-mpi/ompi-release/pull/79</a> &lt;<a href="https://github.com/open-mpi/ompi-release/pull/79">https://github.com/open-mpi/ompi-release/pull/79</a>&gt;
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16253.php">http://www.open-mpi.org/community/lists/devel/2014/11/16253.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16256/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16257.php">Ralph Castain: "Re: [OMPI devel] MTT diligence"</a>
<li><strong>Previous message:</strong> <a href="16255.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>In reply to:</strong> <a href="16253.php">Nathan Hjelm: "Re: [OMPI devel] osu_mbw_mr error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16254.php">Jeff Squyres (jsquyres): "[OMPI devel] MTT diligence"</a>
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
