<?
$subject_val = "[hwloc-devel] merging plugins?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 24 16:03:41 2012" -->
<!-- isoreceived="20120924200341" -->
<!-- sent="Mon, 24 Sep 2012 22:03:35 +0200" -->
<!-- isosent="20120924200335" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] merging plugins?" -->
<!-- id="5060BC97.3000502_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] merging plugins?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-24 16:03:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3288.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3286.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4842)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3288.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3288.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am thinking of merging the components branch in trunk and start
<br>
thinking about doing a v1.6 for SC.
<br>
<p>For the record the components branch contains:
<br>
1) A rework of the backend infrastructure to make the core much more
<br>
readable (basically all changes in *.[ch] files). Now we add new
<br>
backends by declaring component structures with callbacks and flags. I
<br>
think this part is good to go.
<br>
2) Plugin support (basically all changes in the build system). It looks
<br>
ok on everything but AIX and Windows (disabled there) but it's harder to
<br>
test all cases. Fortunately it's disabled by default so we shouldn't see
<br>
much problems unless --enable-plugins is passed.
<br>
<p>By the way, I (privately) merged the components branch into the cuda
<br>
branch to make sure CUDA plugins would work, didn't find any issue.
<br>
<p>I could also try to merge (1) without (2) if that's really necessary.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3288.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Previous message:</strong> <a href="3286.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4842)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3288.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
<li><strong>Reply:</strong> <a href="3288.php">Samuel Thibault: "Re: [hwloc-devel] merging plugins?"</a>
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
