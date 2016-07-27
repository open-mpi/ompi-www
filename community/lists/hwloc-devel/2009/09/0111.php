<?
$subject_val = "Re: [hwloc-devel] dynamic cpuset_t?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 14:51:30 2009" -->
<!-- isoreceived="20090929185130" -->
<!-- sent="Tue, 29 Sep 2009 20:51:23 +0200" -->
<!-- isosent="20090929185123" -->
<!-- name="Fawzi Mohamed" -->
<!-- email="fawzi_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] dynamic cpuset_t?" -->
<!-- id="4DD5D728-6ACC-475D-86A0-555A7F061D06_at_gmx.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20090929184322.GG25109_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] dynamic cpuset_t?<br>
<strong>From:</strong> Fawzi Mohamed (<em>fawzi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-29 14:51:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0112.php">Fawzi Mohamed: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Previous message:</strong> <a href="0110.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>In reply to:</strong> <a href="0110.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0112.php">Fawzi Mohamed: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Reply:</strong> <a href="0112.php">Fawzi Mohamed: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 29-set-09, at 20:43, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Fawzi Mohamed, le Tue 29 Sep 2009 20:39:02 +0200, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; It comes down to what you want to have, if you think you might want  
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; go the sparse full granularity way then indeed alloc/copy/free should
</span><br>
<span class="quotelev2">&gt;&gt; be added
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, that's my point: do we really want it?
</span><br>
<p>I am more for avoiding it, if needed by using granularity, and having  
<br>
extracting functions that might build the cpuset on the fly I think  
<br>
that most of advantages of allocating/freeing/copying can be achieved  
<br>
without the annoying free/alloc.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0112.php">Fawzi Mohamed: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Previous message:</strong> <a href="0110.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>In reply to:</strong> <a href="0110.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0112.php">Fawzi Mohamed: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Reply:</strong> <a href="0112.php">Fawzi Mohamed: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
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
