<?
$subject_val = "Re: [hwloc-devel] structure assumptions, duplication";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 04:39:31 2009" -->
<!-- isoreceived="20090930083931" -->
<!-- sent="Wed, 30 Sep 2009 10:38:31 +0200" -->
<!-- isosent="20090930083831" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] structure assumptions, duplication" -->
<!-- id="4AC31907.90107_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F0FDDC9-973C-4127-BAB4-081840DD024A_at_gmx.ch" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] structure assumptions, duplication<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-30 04:38:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0122.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Previous message:</strong> <a href="0120.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>In reply to:</strong> <a href="0119.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0122.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0122.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fawzi Mohamed wrote:
<br>
<span class="quotelev1">&gt; NODE 1
</span><br>
<span class="quotelev1">&gt;   cache2
</span><br>
<span class="quotelev1">&gt;     cache1
</span><br>
<span class="quotelev1">&gt;       p0
</span><br>
<span class="quotelev1">&gt;   cache2
</span><br>
<span class="quotelev1">&gt;     cache1
</span><br>
<span class="quotelev1">&gt;       p1
</span><br>
<span class="quotelev1">&gt; NODE 2
</span><br>
<span class="quotelev1">&gt;     cache1
</span><br>
<span class="quotelev1">&gt;       p2
</span><br>
<span class="quotelev1">&gt;     cache1
</span><br>
<span class="quotelev1">&gt;       p3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or is it even possible to have a node with children of a single node
</span><br>
<span class="quotelev1">&gt; of different depth?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this is supposing that you want to keep that a level has a single type
</span><br>
<span class="quotelev1">&gt; (and given the api I suppose it is so).
</span><br>
<p>We keep same caches in the same level. So node 2 has children at depth+2
<br>
instead of depth+1.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0122.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Previous message:</strong> <a href="0120.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>In reply to:</strong> <a href="0119.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0122.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Reply:</strong> <a href="0122.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
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
