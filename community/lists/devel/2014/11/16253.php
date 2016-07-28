<?
$subject_val = "Re: [OMPI devel] osu_mbw_mr error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 16:39:03 2014" -->
<!-- isoreceived="20141106213903" -->
<!-- sent="Thu, 6 Nov 2014 14:39:02 -0700" -->
<!-- isosent="20141106213902" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] osu_mbw_mr error" -->
<!-- id="20141106213902.GU6508_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAG4F6z8VmOe=Qdwtuka-_2K5NQRXDrHMXquv7QkfdwFe6jUyEg_at_mail.gmail.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-06 16:39:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16254.php">Jeff Squyres (jsquyres): "[OMPI devel] MTT diligence"</a>
<li><strong>Previous message:</strong> <a href="16252.php">Joshua Ladd: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>In reply to:</strong> <a href="16252.php">Joshua Ladd: "Re: [OMPI devel] osu_mbw_mr error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16256.php">Ralph Castain: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>Reply:</strong> <a href="16256.php">Ralph Castain: "Re: [OMPI devel] osu_mbw_mr error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Nov 06, 2014 at 04:29:44PM -0500, Joshua Ladd wrote:
<br>
<span class="quotelev1">&gt;    On Thursday, November 6, 2014, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      On Thu, Nov 06, 2014 at 04:06:23PM -0500, Joshua Ladd wrote:
</span><br>
<span class="quotelev2">&gt;      &gt;    Nathan,
</span><br>
<span class="quotelev2">&gt;      &gt;    Has this bug always been present in OpenIB or is this a recent
</span><br>
<span class="quotelev1">&gt;      addition?
</span><br>
<span class="quotelev2">&gt;      &gt;    If this is regression, I would also be inclined to say that this is
</span><br>
<span class="quotelev1">&gt;      a
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      The bug is as old as the message coalescing feature in the openib
</span><br>
<span class="quotelev1">&gt;      btl. When the feature was added the openib btl no longer supported
</span><br>
<span class="quotelev1">&gt;      calling btl_free on descriptors allocated by sendi (a serious bug).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;      &gt;    blocker for 1.8.4. This is a SIGNIFICANT bug. Both Howard and I
</span><br>
<span class="quotelev1">&gt;      were quite
</span><br>
<span class="quotelev2">&gt;      &gt;    surprised that all the while this code has been in use at LANL
</span><br>
<span class="quotelev2">&gt;      &gt;    in production systems, this issue was never discovered.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Don't know why it suddenly came up but in 1.8.1 we added a inline send
</span><br>
<span class="quotelev1">&gt;      optimization to the MPI_Isend path. The optimization uses the btl_sendi
</span><br>
<span class="quotelev1">&gt;      function to get the fragment on the wire without allocating a send
</span><br>
<span class="quotelev1">&gt;      request. If this fails the btl fragment returned by sendi is released
</span><br>
<span class="quotelev1">&gt;      with btl_free, a send request is allocated, and the normal send path is
</span><br>
<span class="quotelev1">&gt;      used. The optimization was tested with the openib btl so I don't know
</span><br>
<span class="quotelev1">&gt;      why this wasn't caught earlier. My guess is some other change may have
</span><br>
<span class="quotelev1">&gt;      triggered it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      We fixed the bug in 1.8.4 by totally disabling message coalescing. The
</span><br>
<span class="quotelev1">&gt;      feature is meant to game the osu_mbw_mr test and does next to nothing
</span><br>
<span class="quotelev1">&gt;      for real apps. Additionally, the inline send optimization makes the
</span><br>
<span class="quotelev1">&gt;      feature less of a win with osu_mbw_mr anyway. We beat mvapich handily on
</span><br>
<span class="quotelev1">&gt;      LANL systems without message coalescing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    [josh] Can you point to the PR, Nathan? I didn't realize this was already
</span><br>
<span class="quotelev1">&gt;    addressed in the 1.8.4 prerelease. I would seek Howard's guidance as to
</span><br>
<span class="quotelev1">&gt;    whether this is an acceptable solution for LANL.  Regardless of your
</span><br>
<span class="quotelev1">&gt;    opinion about the utility of MC, real decisions are made on the basis of
</span><br>
<span class="quotelev1">&gt;    those benchmarks, so I'm not entirely convinced of your argument
</span><br>
<span class="quotelev1">&gt;    here.  OMPI, as we are all aware tends to be a target on the basis of
</span><br>
<span class="quotelev1">&gt;    these comparisons. 
</span><br>
<p>This was already discussed here. On LANL systems the message rates are
<br>
the same with and without the message coalescing &quot;feature&quot; so we are
<br>
turning it off and disabling it for 1.8.4. As for the PR. It looks like
<br>
Ralph has not merged it into 1.8.4 yet.
<br>
<p>-Nathan
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16253/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16254.php">Jeff Squyres (jsquyres): "[OMPI devel] MTT diligence"</a>
<li><strong>Previous message:</strong> <a href="16252.php">Joshua Ladd: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>In reply to:</strong> <a href="16252.php">Joshua Ladd: "Re: [OMPI devel] osu_mbw_mr error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16256.php">Ralph Castain: "Re: [OMPI devel] osu_mbw_mr error"</a>
<li><strong>Reply:</strong> <a href="16256.php">Ralph Castain: "Re: [OMPI devel] osu_mbw_mr error"</a>
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
