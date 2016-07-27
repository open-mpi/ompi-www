<?
$subject_val = "[hwloc-devel] roadmap, XML/JSON/...";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  6 10:44:35 2011" -->
<!-- isoreceived="20110906144435" -->
<!-- sent="Tue, 06 Sep 2011 16:44:30 +0200" -->
<!-- isosent="20110906144430" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] roadmap, XML/JSON/..." -->
<!-- id="4E6631CE.2090403_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] roadmap, XML/JSON/...<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-06 10:44:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2387.php">Jeff Squyres: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>Previous message:</strong> <a href="2385.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2387.php">Jeff Squyres: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>Reply:</strong> <a href="2387.php">Jeff Squyres: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
v1.3rc1 has been released two weeks ago and many things are going on
<br>
right now, in all branches:
<br>
* I just finished fixing my pile of distance-related bugs (thanks to
<br>
multinode support and OMPI users). I backported the really important
<br>
ones in v1.3 and v1.2. Do we want a 1.2.2?
<br>
* I applied some non-trivial changes (mostly XML) to v1.3 after rc1,
<br>
which means rc2 won't be the final release.
<br>
* I wonder if we should also include in v1.3 the XML/JSON/whatever
<br>
export/import that's under discussion in another thread. If we need it
<br>
for OMPI, it may need a backport in v1.2 anyway, so getting early
<br>
feedback through v1.3 would be better.
<br>
* If we apply these big export/import changes in v1.3, we're not going
<br>
to do the final v1.3 release very soon. Should we do a rc2 now (the
<br>
changelog is already large) and then a rc3 with this new export/import?
<br>
Or wait for the new import/export before doing rc2?
<br>
<p>I'm a bit too lazy to release a 1.2.2 except if there's a single RC :)
<br>
And I think I would vote for 1.3rc2 now too.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2387.php">Jeff Squyres: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>Previous message:</strong> <a href="2385.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2387.php">Jeff Squyres: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>Reply:</strong> <a href="2387.php">Jeff Squyres: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
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
