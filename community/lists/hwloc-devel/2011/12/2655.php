<?
$subject_val = "[hwloc-devel] Open MPI + hwloc: move to 1.3.1?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 16 10:03:27 2011" -->
<!-- isoreceived="20111216150327" -->
<!-- sent="Fri, 16 Dec 2011 10:03:18 -0500" -->
<!-- isosent="20111216150318" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] Open MPI + hwloc: move to 1.3.1?" -->
<!-- id="92D5CC78-169E-40BC-8F24-06AFC3FCED90_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] Open MPI + hwloc: move to 1.3.1?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-16 10:03:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2656.php">Brice Goglin: "Re: [hwloc-devel] Open MPI + hwloc: move to 1.3.1?"</a>
<li><strong>Previous message:</strong> <a href="2654.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4069"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2656.php">Brice Goglin: "Re: [hwloc-devel] Open MPI + hwloc: move to 1.3.1?"</a>
<li><strong>Reply:</strong> <a href="2656.php">Brice Goglin: "Re: [hwloc-devel] Open MPI + hwloc: move to 1.3.1?"</a>
<li><strong>Reply:</strong> <a href="2657.php">Paul H. Hargrove: "Re: [hwloc-devel] Open MPI + hwloc: move to 1.3.1?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There have been a bunch of updates that have (rightfully) not been back-ported to the 1.2-ompi branch.
<br>
<p>Is 1.3.x stable/mature enough for me to move into OMPI?
<br>
<p>I have two targets:
<br>
<p>* Open MPI v1.5 series: we're just about to release the final Open MPI 1.5.x and transition it to the v1.6 series (i.e., bug fixes only after it is renumbered to 1.6).  Is hwloc 1.3.x a good candidate here?  As Paul noted, without some of the recent fixes, OMPI 1.5.5 won't run on older Linuxes (e.g., Fedora 8).
<br>
<p>* Open MPI trunk (which will eventually become the v1.7 series): it's ok to be a bit more forward-looking here.  I'm actually pretty convinced that this one should be upgraded to hwloc 1.3.1 (or whatever the latest set of fixes is) in the near future.
<br>
<p>Thoughts?
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
<li><strong>Next message:</strong> <a href="2656.php">Brice Goglin: "Re: [hwloc-devel] Open MPI + hwloc: move to 1.3.1?"</a>
<li><strong>Previous message:</strong> <a href="2654.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4069"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2656.php">Brice Goglin: "Re: [hwloc-devel] Open MPI + hwloc: move to 1.3.1?"</a>
<li><strong>Reply:</strong> <a href="2656.php">Brice Goglin: "Re: [hwloc-devel] Open MPI + hwloc: move to 1.3.1?"</a>
<li><strong>Reply:</strong> <a href="2657.php">Paul H. Hargrove: "Re: [hwloc-devel] Open MPI + hwloc: move to 1.3.1?"</a>
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
