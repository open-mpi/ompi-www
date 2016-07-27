<?
$subject_val = "Re: [hwloc-devel] Open MPI + hwloc: move to 1.3.1?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 16 12:50:30 2011" -->
<!-- isoreceived="20111216175030" -->
<!-- sent="Fri, 16 Dec 2011 18:50:23 +0100" -->
<!-- isosent="20111216175023" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Open MPI + hwloc: move to 1.3.1?" -->
<!-- id="4EEB84DF.1050806_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="92D5CC78-169E-40BC-8F24-06AFC3FCED90_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Open MPI + hwloc: move to 1.3.1?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-16 12:50:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2657.php">Paul H. Hargrove: "Re: [hwloc-devel] Open MPI + hwloc: move to 1.3.1?"</a>
<li><strong>Previous message:</strong> <a href="2655.php">Jeff Squyres: "[hwloc-devel] Open MPI + hwloc: move to 1.3.1?"</a>
<li><strong>In reply to:</strong> <a href="2655.php">Jeff Squyres: "[hwloc-devel] Open MPI + hwloc: move to 1.3.1?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2657.php">Paul H. Hargrove: "Re: [hwloc-devel] Open MPI + hwloc: move to 1.3.1?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 16/12/2011 16:03, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; There have been a bunch of updates that have (rightfully) not been back-ported to the 1.2-ompi branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is 1.3.x stable/mature enough for me to move into OMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have two targets:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Open MPI v1.5 series: we're just about to release the final Open MPI 1.5.x and transition it to the v1.6 series (i.e., bug fixes only after it is renumbered to 1.6).  Is hwloc 1.3.x a good candidate here?  As Paul noted, without some of the recent fixes, OMPI 1.5.5 won't run on older Linuxes (e.g., Fedora 8).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Open MPI trunk (which will eventually become the v1.7 series): it's ok to be a bit more forward-looking here.  I'm actually pretty convinced that this one should be upgraded to hwloc 1.3.1 (or whatever the latest set of fixes is) in the near future.
</span><br>
<p>For OMPI 1.7, you want to upgrade to 1.3.1 for sure. I don't know the
<br>
OMPI 1.7 timeframe, but hwloc 1.4 might even be a better idea by then.
<br>
<p>For OMPI 1.5/1.6, I am not sure. If fixing redhat 8 (not fedora) is
<br>
really important, we can probably backport some patches.
<br>
Upgrading to 1.3.1 just because of this seems like overkill. I am not
<br>
saying that 1.3.1 won't be stable. We had a lot of testing recently.
<br>
<p>However upgrading to 1.3.1 would likely ease the maintenance of the OMPI
<br>
1.6 later because hwloc patches would be easier to backport. IIRC
<br>
there's way more changes between 1.2 and 1.3 than between 1.3 and 1.4
<br>
(and likely 1.5).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2657.php">Paul H. Hargrove: "Re: [hwloc-devel] Open MPI + hwloc: move to 1.3.1?"</a>
<li><strong>Previous message:</strong> <a href="2655.php">Jeff Squyres: "[hwloc-devel] Open MPI + hwloc: move to 1.3.1?"</a>
<li><strong>In reply to:</strong> <a href="2655.php">Jeff Squyres: "[hwloc-devel] Open MPI + hwloc: move to 1.3.1?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2657.php">Paul H. Hargrove: "Re: [hwloc-devel] Open MPI + hwloc: move to 1.3.1?"</a>
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
