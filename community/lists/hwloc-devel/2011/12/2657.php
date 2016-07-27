<?
$subject_val = "Re: [hwloc-devel] Open MPI + hwloc: move to 1.3.1?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 16 16:25:27 2011" -->
<!-- isoreceived="20111216212527" -->
<!-- sent="Fri, 16 Dec 2011 13:25:05 -0800" -->
<!-- isosent="20111216212505" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Open MPI + hwloc: move to 1.3.1?" -->
<!-- id="4EEBB731.8030604_at_lbl.gov" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-16 16:25:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2658.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r4080)"</a>
<li><strong>Previous message:</strong> <a href="2656.php">Brice Goglin: "Re: [hwloc-devel] Open MPI + hwloc: move to 1.3.1?"</a>
<li><strong>In reply to:</strong> <a href="2655.php">Jeff Squyres: "[hwloc-devel] Open MPI + hwloc: move to 1.3.1?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;From my point of view the option of using an external hwloc for OMPI 
<br>
eliminates the need to be overly concerned about back-ports for 
<br>
OMPI-1.5.  If I really need hwloc w/ my RHL8 (dual-socket/single-core) 
<br>
systems, then I'll build hwloc-1.3.x (w/ patches if needed) and point my 
<br>
OMPI build at it.
<br>
<p>I have no opinion on what belongs in OMPI 1.6 or 1.7.
<br>
<p>-Paul
<br>
<p>On 12/16/2011 7:03 AM, Jeff Squyres wrote:
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thoughts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2658.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r4080)"</a>
<li><strong>Previous message:</strong> <a href="2656.php">Brice Goglin: "Re: [hwloc-devel] Open MPI + hwloc: move to 1.3.1?"</a>
<li><strong>In reply to:</strong> <a href="2655.php">Jeff Squyres: "[hwloc-devel] Open MPI + hwloc: move to 1.3.1?"</a>
<!-- nextthread="start" -->
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
