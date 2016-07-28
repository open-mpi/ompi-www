<?
$subject_val = "Re: [OMPI devel] topic for agenda";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 12 11:55:40 2015" -->
<!-- isoreceived="20151012155540" -->
<!-- sent="Mon, 12 Oct 2015 08:55:34 -0700" -->
<!-- isosent="20151012155534" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] topic for agenda" -->
<!-- id="20FFFD2A-0690-4FF1-85AA-3E2821E32539_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="C6D9D6B0-4EFA-417D-8FB3-8D62B75A6E62_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] topic for agenda<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-12 11:55:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18156.php">Jeff Squyres (jsquyres): "[OMPI devel] Jan/Feb dev meeting"</a>
<li><strong>Previous message:</strong> <a href="18154.php">Jeff Squyres (jsquyres): "[OMPI devel] topic for agenda"</a>
<li><strong>In reply to:</strong> <a href="18154.php">Jeff Squyres (jsquyres): "[OMPI devel] topic for agenda"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18157.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] topic for agenda"</a>
<li><strong>Reply:</strong> <a href="18157.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] topic for agenda"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: I&#226;&#128;&#153;ve started getting some of these queries myself - it is indeed confusing. To make things worse, uGNI and shared memory will also be in libfabric as well, so we&#226;&#128;&#153;ll basically have every network available three (or more!) different ways
<br>
<p><p><span class="quotelev1">&gt; On Oct 12, 2015, at 8:47 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf: can you add this to the agenda?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We're now adding multiple ways to get to the same underlying network transport, and it's getting confusing for users (I've fielded several off-list questions from users about this issue).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - MXM: can be accessed via Yalla, the MXM MTL, (soon) UCX, and (soon) libfabric
</span><br>
<span class="quotelev1">&gt; - PSM: can be accessed via the PSM MTL and libfabric
</span><br>
<span class="quotelev1">&gt; - verbs: can be accessed via the openib BTL and libfabric
</span><br>
<span class="quotelev1">&gt; - PSM2: ditto
</span><br>
<span class="quotelev1">&gt; - uGNI: can be accessed via the uGNI BTL, portals(4?), and (soon) UCX
</span><br>
<span class="quotelev1">&gt; - shared memory: can be accessed via sm, vader, and (soon) UCX
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But you can also look at this from a different perspective:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - IB: can be used via Yalla, MXM MTL, UCX, libfabric (multiple ways)
</span><br>
<span class="quotelev1">&gt; - RoCE: can be used via ^^some (or all? I'm not sure) of these
</span><br>
<span class="quotelev1">&gt; - Cray: can be used via the uGNI BTL, portals(4?), and (soon) UCX
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...what's a user supposed to use?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And more specifically, how can a user enable or disable a specific type of network?  Or API?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A recent (off list) example I had was a user who was frustrated trying to figure out how to disable all forms of MXM (note: this is a larger issue than just MXM).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bottom line: underlying networks can be accessed through multiple upper-layer APIs, and it creates both a mapping problem for the MPI implementation, and a usability issue for users trying to be specific about which network(s) they want the MPI implementation to use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't have a solution (or even a proposal) here.  This is something we need to think / talk about.
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18154.php">http://www.open-mpi.org/community/lists/devel/2015/10/18154.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18156.php">Jeff Squyres (jsquyres): "[OMPI devel] Jan/Feb dev meeting"</a>
<li><strong>Previous message:</strong> <a href="18154.php">Jeff Squyres (jsquyres): "[OMPI devel] topic for agenda"</a>
<li><strong>In reply to:</strong> <a href="18154.php">Jeff Squyres (jsquyres): "[OMPI devel] topic for agenda"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18157.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] topic for agenda"</a>
<li><strong>Reply:</strong> <a href="18157.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] topic for agenda"</a>
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
