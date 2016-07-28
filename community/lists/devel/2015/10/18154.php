<?
$subject_val = "[OMPI devel] topic for agenda";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 12 11:47:51 2015" -->
<!-- isoreceived="20151012154751" -->
<!-- sent="Mon, 12 Oct 2015 15:47:34 +0000" -->
<!-- isosent="20151012154734" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] topic for agenda" -->
<!-- id="C6D9D6B0-4EFA-417D-8FB3-8D62B75A6E62_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] topic for agenda<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-12 11:47:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18155.php">Ralph Castain: "Re: [OMPI devel] topic for agenda"</a>
<li><strong>Previous message:</strong> <a href="18153.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI face-to-face devel meeting: Jan/Feb 2016"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18155.php">Ralph Castain: "Re: [OMPI devel] topic for agenda"</a>
<li><strong>Reply:</strong> <a href="18155.php">Ralph Castain: "Re: [OMPI devel] topic for agenda"</a>
<li><strong>Reply:</strong> <a href="18207.php">Jeff Squyres (jsquyres): "[OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf: can you add this to the agenda?
<br>
<p>We're now adding multiple ways to get to the same underlying network transport, and it's getting confusing for users (I've fielded several off-list questions from users about this issue).
<br>
<p>- MXM: can be accessed via Yalla, the MXM MTL, (soon) UCX, and (soon) libfabric
<br>
- PSM: can be accessed via the PSM MTL and libfabric
<br>
- verbs: can be accessed via the openib BTL and libfabric
<br>
- PSM2: ditto
<br>
- uGNI: can be accessed via the uGNI BTL, portals(4?), and (soon) UCX
<br>
- shared memory: can be accessed via sm, vader, and (soon) UCX
<br>
<p>But you can also look at this from a different perspective:
<br>
<p>- IB: can be used via Yalla, MXM MTL, UCX, libfabric (multiple ways)
<br>
- RoCE: can be used via ^^some (or all? I'm not sure) of these
<br>
- Cray: can be used via the uGNI BTL, portals(4?), and (soon) UCX
<br>
<p>...what's a user supposed to use?
<br>
<p>And more specifically, how can a user enable or disable a specific type of network?  Or API?
<br>
<p>A recent (off list) example I had was a user who was frustrated trying to figure out how to disable all forms of MXM (note: this is a larger issue than just MXM).
<br>
<p>Bottom line: underlying networks can be accessed through multiple upper-layer APIs, and it creates both a mapping problem for the MPI implementation, and a usability issue for users trying to be specific about which network(s) they want the MPI implementation to use.
<br>
<p>I don't have a solution (or even a proposal) here.  This is something we need to think / talk about.
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
<li><strong>Next message:</strong> <a href="18155.php">Ralph Castain: "Re: [OMPI devel] topic for agenda"</a>
<li><strong>Previous message:</strong> <a href="18153.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI face-to-face devel meeting: Jan/Feb 2016"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18155.php">Ralph Castain: "Re: [OMPI devel] topic for agenda"</a>
<li><strong>Reply:</strong> <a href="18155.php">Ralph Castain: "Re: [OMPI devel] topic for agenda"</a>
<li><strong>Reply:</strong> <a href="18207.php">Jeff Squyres (jsquyres): "[OMPI devel] Specifying networks/APIs for OMPI (was: topic for agenda)"</a>
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
