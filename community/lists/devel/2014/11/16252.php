<?
$subject_val = "Re: [OMPI devel] osu_mbw_mr error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 16:29:46 2014" -->
<!-- isoreceived="20141106212946" -->
<!-- sent="Thu, 6 Nov 2014 16:29:44 -0500" -->
<!-- isosent="20141106212944" -->
<!-- name="Joshua Ladd" -->
<!-- email="jladd.mlnx_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] osu_mbw_mr error" -->
<!-- id="CAG4F6z8VmOe=Qdwtuka-_2K5NQRXDrHMXquv7QkfdwFe6jUyEg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20141106211807.GT6508_at_pn1246003.lanl.gov" -->
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
<strong>From:</strong> Joshua Ladd (<em>jladd.mlnx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-06 16:29:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16253.php">Nathan Hjelm: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>Previous message:</strong> <a href="16251.php">Nathan Hjelm: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>In reply to:</strong> <a href="16251.php">Nathan Hjelm: "Re: [OMPI devel] osu_mbw_mr error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16253.php">Nathan Hjelm: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>Reply:</strong> <a href="16253.php">Nathan Hjelm: "Re: [OMPI devel] osu_mbw_mr error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thursday, November 6, 2014, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, Nov 06, 2014 at 04:06:23PM -0500, Joshua Ladd wrote:
</span><br>
<span class="quotelev2">&gt; &gt;    Nathan,
</span><br>
<span class="quotelev2">&gt; &gt;    Has this bug always been present in OpenIB or is this a recent
</span><br>
<span class="quotelev1">&gt; addition?
</span><br>
<span class="quotelev2">&gt; &gt;    If this is regression, I would also be inclined to say that this is a
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The bug is as old as the message coalescing feature in the openib
</span><br>
<span class="quotelev1">&gt; btl. When the feature was added the openib btl no longer supported
</span><br>
<span class="quotelev1">&gt; calling btl_free on descriptors allocated by sendi (a serious bug).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;    blocker for 1.8.4. This is a SIGNIFICANT bug. Both Howard and I were
</span><br>
<span class="quotelev1">&gt; quite
</span><br>
<span class="quotelev2">&gt; &gt;    surprised that all the while this code has been in use at LANL
</span><br>
<span class="quotelev2">&gt; &gt;    in production systems, this issue was never discovered.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Don't know why it suddenly came up but in 1.8.1 we added a inline send
</span><br>
<span class="quotelev1">&gt; optimization to the MPI_Isend path. The optimization uses the btl_sendi
</span><br>
<span class="quotelev1">&gt; function to get the fragment on the wire without allocating a send
</span><br>
<span class="quotelev1">&gt; request. If this fails the btl fragment returned by sendi is released
</span><br>
<span class="quotelev1">&gt; with btl_free, a send request is allocated, and the normal send path is
</span><br>
<span class="quotelev1">&gt; used. The optimization was tested with the openib btl so I don't know
</span><br>
<span class="quotelev1">&gt; why this wasn't caught earlier. My guess is some other change may have
</span><br>
<span class="quotelev1">&gt; triggered it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We fixed the bug in 1.8.4 by totally disabling message coalescing. The
</span><br>
<span class="quotelev1">&gt; feature is meant to game the osu_mbw_mr test and does next to nothing
</span><br>
<span class="quotelev1">&gt; for real apps. Additionally, the inline send optimization makes the
</span><br>
<span class="quotelev1">&gt; feature less of a win with osu_mbw_mr anyway. We beat mvapich handily on
</span><br>
<span class="quotelev1">&gt; LANL systems without message coalescing.
</span><br>
<p><p>[josh] Can you point to the PR, Nathan? I didn't realize this was already
<br>
addressed in the 1.8.4 prerelease. I would seek Howard's guidance as to
<br>
whether this is an acceptable solution for LANL.  Regardless of your
<br>
opinion about the utility of MC, real decisions are made on the basis of
<br>
those benchmarks, so I'm not entirely convinced of your argument
<br>
here.  OMPI, as we are all aware tends to be a target on the basis of
<br>
these comparisons.
<br>
<p><p><span class="quotelev1">&gt; For master I have a fix that allows the message coalescing feature to
</span><br>
<span class="quotelev1">&gt; remain on. This fix will come over with the btl changes. I may backport
</span><br>
<span class="quotelev1">&gt; this fix to 1.8.5 as it fixes another long standing bug with message
</span><br>
<span class="quotelev1">&gt; coalescing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16252/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16253.php">Nathan Hjelm: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>Previous message:</strong> <a href="16251.php">Nathan Hjelm: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>In reply to:</strong> <a href="16251.php">Nathan Hjelm: "Re: [OMPI devel] osu_mbw_mr error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16253.php">Nathan Hjelm: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>Reply:</strong> <a href="16253.php">Nathan Hjelm: "Re: [OMPI devel] osu_mbw_mr error"</a>
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
