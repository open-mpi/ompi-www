<?
$subject_val = "Re: [OMPI devel] topic for agenda";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 13 06:18:25 2015" -->
<!-- isoreceived="20151013101825" -->
<!-- sent="Tue, 13 Oct 2015 10:18:08 +0000" -->
<!-- isosent="20151013101808" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] topic for agenda" -->
<!-- id="FD9B37AA-6B2E-46E0-A4E4-841B7E7384A9_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20FFFD2A-0690-4FF1-85AA-3E2821E32539_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-13 06:18:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18158.php">Jeff Squyres (jsquyres): "[OMPI devel] Jan/Feb OMPI developer meeting"</a>
<li><strong>Previous message:</strong> <a href="18156.php">Jeff Squyres (jsquyres): "[OMPI devel] Jan/Feb dev meeting"</a>
<li><strong>In reply to:</strong> <a href="18155.php">Ralph Castain: "Re: [OMPI devel] topic for agenda"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18207.php">Jeff Squyres (jsquyres): "[OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Another topic for today (probably a quick one):
<br>

<br>
&nbsp;&nbsp;&nbsp;&nbsp;Remove --disable-mpi-profile option
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/pull/845">https://github.com/open-mpi/ompi/pull/845</a>
<br>

<br>

<br>
<span class="quotelev1">&gt; On Oct 12, 2015, at 11:55 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW: I&#226;&#128;&#153;ve started getting some of these queries myself - it is indeed confusing. To make things worse, uGNI and shared memory will also be in libfabric as well, so we&#226;&#128;&#153;ll basically have every network available three (or more!) different ways
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 12, 2015, at 8:47 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Rolf: can you add this to the agenda?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We're now adding multiple ways to get to the same underlying network transport, and it's getting confusing for users (I've fielded several off-list questions from users about this issue).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - MXM: can be accessed via Yalla, the MXM MTL, (soon) UCX, and (soon) libfabric
</span><br>
<span class="quotelev2">&gt;&gt; - PSM: can be accessed via the PSM MTL and libfabric
</span><br>
<span class="quotelev2">&gt;&gt; - verbs: can be accessed via the openib BTL and libfabric
</span><br>
<span class="quotelev2">&gt;&gt; - PSM2: ditto
</span><br>
<span class="quotelev2">&gt;&gt; - uGNI: can be accessed via the uGNI BTL, portals(4?), and (soon) UCX
</span><br>
<span class="quotelev2">&gt;&gt; - shared memory: can be accessed via sm, vader, and (soon) UCX
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But you can also look at this from a different perspective:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - IB: can be used via Yalla, MXM MTL, UCX, libfabric (multiple ways)
</span><br>
<span class="quotelev2">&gt;&gt; - RoCE: can be used via ^^some (or all? I'm not sure) of these
</span><br>
<span class="quotelev2">&gt;&gt; - Cray: can be used via the uGNI BTL, portals(4?), and (soon) UCX
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ...what's a user supposed to use?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And more specifically, how can a user enable or disable a specific type of network?  Or API?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A recent (off list) example I had was a user who was frustrated trying to figure out how to disable all forms of MXM (note: this is a larger issue than just MXM).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Bottom line: underlying networks can be accessed through multiple upper-layer APIs, and it creates both a mapping problem for the MPI implementation, and a usability issue for users trying to be specific about which network(s) they want the MPI implementation to use.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't have a solution (or even a proposal) here.  This is something we need to think / talk about.
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
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18154.php">http://www.open-mpi.org/community/lists/devel/2015/10/18154.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18155.php">http://www.open-mpi.org/community/lists/devel/2015/10/18155.php</a>
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
<li><strong>Next message:</strong> <a href="18158.php">Jeff Squyres (jsquyres): "[OMPI devel] Jan/Feb OMPI developer meeting"</a>
<li><strong>Previous message:</strong> <a href="18156.php">Jeff Squyres (jsquyres): "[OMPI devel] Jan/Feb dev meeting"</a>
<li><strong>In reply to:</strong> <a href="18155.php">Ralph Castain: "Re: [OMPI devel] topic for agenda"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18207.php">Jeff Squyres (jsquyres): "[OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
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
