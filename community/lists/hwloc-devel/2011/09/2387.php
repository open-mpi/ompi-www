<?
$subject_val = "Re: [hwloc-devel] roadmap, XML/JSON/...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  6 10:53:30 2011" -->
<!-- isoreceived="20110906145330" -->
<!-- sent="Tue, 6 Sep 2011 10:53:23 -0400" -->
<!-- isosent="20110906145323" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] roadmap, XML/JSON/..." -->
<!-- id="CB0665AA-BDD3-4884-94E9-B0A875E86938_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E6631CE.2090403_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] roadmap, XML/JSON/...<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-06 10:53:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2388.php">Igor Galić: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Previous message:</strong> <a href="2386.php">Brice Goglin: "[hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>In reply to:</strong> <a href="2386.php">Brice Goglin: "[hwloc-devel] roadmap, XML/JSON/..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2390.php">Brice Goglin: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>Reply:</strong> <a href="2390.php">Brice Goglin: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 6, 2011, at 10:44 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; v1.3rc1 has been released two weeks ago and many things are going on
</span><br>
<span class="quotelev1">&gt; right now, in all branches:
</span><br>
<span class="quotelev1">&gt; * I just finished fixing my pile of distance-related bugs (thanks to
</span><br>
<span class="quotelev1">&gt; multinode support and OMPI users). I backported the really important
</span><br>
<span class="quotelev1">&gt; ones in v1.3 and v1.2. Do we want a 1.2.2?
</span><br>
<span class="quotelev1">&gt; * I applied some non-trivial changes (mostly XML) to v1.3 after rc1,
</span><br>
<span class="quotelev1">&gt; which means rc2 won't be the final release.
</span><br>
<span class="quotelev1">&gt; * I wonder if we should also include in v1.3 the XML/JSON/whatever
</span><br>
<span class="quotelev1">&gt; export/import that's under discussion in another thread. If we need it
</span><br>
<span class="quotelev1">&gt; for OMPI, it may need a backport in v1.2 anyway, so getting early
</span><br>
<span class="quotelev1">&gt; feedback through v1.3 would be better.
</span><br>
<p>I'm a bit ambivalent about this:
<br>
<p>- I don't know where we ended up in the other thread: do we want JSON or no?  If we can parse it easily without an external dependency, then I think it's worthwhile.
<br>
<p>- OMPI currently uses hwloc 1.2.  From that perspective, I'd like to see JSON in hwloc 1.2.x.
<br>
<p>- OTOH, JSON would be a new feature, and probably shouldn't be introduced after a x.y.0 release.
<br>
<p>- I could bump OMPI to v1.3, but it's not as mature as 1.2.x, which just makes me a little nervous (the goal for the hwloc stuff is to bring it in late in the OMPI v1.5 series... but I've already got some feedback that there might be resistance to what we're proposing to use hwloc for in OMPI, so we'll see :-) ).
<br>
<p><span class="quotelev1">&gt; * If we apply these big export/import changes in v1.3, we're not going
</span><br>
<span class="quotelev1">&gt; to do the final v1.3 release very soon. Should we do a rc2 now (the
</span><br>
<span class="quotelev1">&gt; changelog is already large) and then a rc3 with this new export/import?
</span><br>
<span class="quotelev1">&gt; Or wait for the new import/export before doing rc2?
</span><br>
<p>If we're going to do JSON, might as well have fewer RCs.  &quot;RC&quot;, to me, has always meant &quot;feature complete.&quot;
<br>
<p><span class="quotelev1">&gt; I'm a bit too lazy to release a 1.2.2 except if there's a single RC :)
</span><br>
<span class="quotelev1">&gt; And I think I would vote for 1.3rc2 now too.
</span><br>
<p>I can drive the v1.2.x release stuff.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2388.php">Igor Galić: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Previous message:</strong> <a href="2386.php">Brice Goglin: "[hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>In reply to:</strong> <a href="2386.php">Brice Goglin: "[hwloc-devel] roadmap, XML/JSON/..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2390.php">Brice Goglin: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>Reply:</strong> <a href="2390.php">Brice Goglin: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
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
