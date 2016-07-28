<?
$subject_val = "Re: [OMPI devel] thread-tests hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  5 12:56:35 2014" -->
<!-- isoreceived="20141105175635" -->
<!-- sent="Wed, 5 Nov 2014 17:56:28 +0000" -->
<!-- isosent="20141105175628" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] thread-tests hang" -->
<!-- id="273558A5-61EA-4180-B882-D36E518C7C77_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAG4F6z9FLPEqRPpg7J4uVgpcY-eDCubt2Ez_TSezR-AXr2F1vA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] thread-tests hang<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-05 12:56:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16213.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI Developers F2F Q1 2015 (poll closes on Friday, 7th of November)"</a>
<li><strong>Previous message:</strong> <a href="16211.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>In reply to:</strong> <a href="16210.php">Joshua Ladd: "Re: [OMPI devel] thread-tests hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16217.php">Paul Hargrove: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16217.php">Paul Hargrove: "Re: [OMPI devel] thread-tests hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 5, 2014, at 12:03 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I think this is a pretty significant change in behavior for a minor release, Jeff. According to the interested parties:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;I'm reporting a performance (message rate 16%, latency 3%) regression when using PSM that occurred between OMPI v1.6.5 and v1.8.1.  I would guess it affects other networks too, but I haven't tested.  The problem stems from the --enable-smp-locks and --enable-opal-multi-threads options.&quot;
</span><br>
<p>Right, and we just fixed that problem.  
<br>
<p>To be clear: the above report is from *before* we fixed the problem, not from *after* we fixed it.  After we fixed it, Intel confirmed that PSM performance went back up to v1.6 levels.
<br>
<p>It was never in the plan to bring over the enable-THREAD_MULTIPLE-beavhior-by-default functionality to the v1.8 branch.  It was a mistake that it got brought over.
<br>
<p><span class="quotelev1">&gt; So, this has been in effect the entire 1.8 series and now you want to significantly alter the behavior.
</span><br>
<p>Put differently: I want to fix the performance bug.
<br>
<p><span class="quotelev1">&gt; I'm of the opinion that we should live with the mistake in the 1.8.x series and provide users with clear guidance on the default behavior and advice for disabling the threading support that is consistent across this series. 1.9.x is a clean slate. 
</span><br>
<p>I disagree.
<br>
<p>MPI_THREAD_MULTIPLE support barely works in v1.8.  Why have it on by default, especially when there's a performance penalty?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16213.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI Developers F2F Q1 2015 (poll closes on Friday, 7th of November)"</a>
<li><strong>Previous message:</strong> <a href="16211.php">Ralph Castain: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>In reply to:</strong> <a href="16210.php">Joshua Ladd: "Re: [OMPI devel] thread-tests hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16217.php">Paul Hargrove: "Re: [OMPI devel] thread-tests hang"</a>
<li><strong>Reply:</strong> <a href="16217.php">Paul Hargrove: "Re: [OMPI devel] thread-tests hang"</a>
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
