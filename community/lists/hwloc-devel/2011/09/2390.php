<?
$subject_val = "Re: [hwloc-devel] roadmap, XML/JSON/...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  6 11:26:10 2011" -->
<!-- isoreceived="20110906152610" -->
<!-- sent="Tue, 06 Sep 2011 17:25:47 +0200" -->
<!-- isosent="20110906152547" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] roadmap, XML/JSON/..." -->
<!-- id="4E663B7B.7010303_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CB0665AA-BDD3-4884-94E9-B0A875E86938_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-06 11:25:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2391.php">Jeff Squyres: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>Previous message:</strong> <a href="2389.php">Samuel Thibault: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>In reply to:</strong> <a href="2387.php">Jeff Squyres: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2391.php">Jeff Squyres: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>Reply:</strong> <a href="2391.php">Jeff Squyres: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 06/09/2011 16:53, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Sep 6, 2011, at 10:44 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; v1.3rc1 has been released two weeks ago and many things are going on
</span><br>
<span class="quotelev2">&gt;&gt; right now, in all branches:
</span><br>
<span class="quotelev2">&gt;&gt; * I just finished fixing my pile of distance-related bugs (thanks to
</span><br>
<span class="quotelev2">&gt;&gt; multinode support and OMPI users). I backported the really important
</span><br>
<span class="quotelev2">&gt;&gt; ones in v1.3 and v1.2. Do we want a 1.2.2?
</span><br>
<span class="quotelev2">&gt;&gt; * I applied some non-trivial changes (mostly XML) to v1.3 after rc1,
</span><br>
<span class="quotelev2">&gt;&gt; which means rc2 won't be the final release.
</span><br>
<span class="quotelev2">&gt;&gt; * I wonder if we should also include in v1.3 the XML/JSON/whatever
</span><br>
<span class="quotelev2">&gt;&gt; export/import that's under discussion in another thread. If we need it
</span><br>
<span class="quotelev2">&gt;&gt; for OMPI, it may need a backport in v1.2 anyway, so getting early
</span><br>
<span class="quotelev2">&gt;&gt; feedback through v1.3 would be better.
</span><br>
<span class="quotelev1">&gt; I'm a bit ambivalent about this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - I don't know where we ended up in the other thread: do we want JSON or no?  If we can parse it easily without an external dependency, then I think it's worthwhile.
</span><br>
<p>I stopped working on JSON this to see where the idea of reimplementing
<br>
our own XML parser would go.
<br>
<p><span class="quotelev1">&gt; - OTOH, JSON would be a new feature, and probably shouldn't be introduced after a x.y.0 release.
</span><br>
<p>Yeah but it's a new backend, it's supposed to not touch anything in the
<br>
core and to not break other backends.
<br>
<p><span class="quotelev1">&gt; - I could bump OMPI to v1.3, but it's not as mature as 1.2.x, which just makes me a little nervous (the goal for the hwloc stuff is to bring it in late in the OMPI v1.5 series... but I've already got some feedback that there might be resistance to what we're proposing to use hwloc for in OMPI, so we'll see :-) ).
</span><br>
<p>Agreed, v1.3 is too young for OMPI. I am not sure many people already
<br>
tried v1.3rc1. I wouldn't put it in OMPI before hwloc 1.3.1.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2391.php">Jeff Squyres: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>Previous message:</strong> <a href="2389.php">Samuel Thibault: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>In reply to:</strong> <a href="2387.php">Jeff Squyres: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2391.php">Jeff Squyres: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>Reply:</strong> <a href="2391.php">Jeff Squyres: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
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
