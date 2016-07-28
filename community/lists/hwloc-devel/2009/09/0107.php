<?
$subject_val = "Re: [hwloc-devel] dynamic cpuset_t?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 29 13:18:53 2009" -->
<!-- isoreceived="20090929171853" -->
<!-- sent="Tue, 29 Sep 2009 19:18:48 +0200" -->
<!-- isosent="20090929171848" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] dynamic cpuset_t?" -->
<!-- id="20090929171848.GD25109_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20090923215130.GE6376_at_const.famille.thibault.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-29 13:18:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0108.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Previous message:</strong> <a href="0106.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>In reply to:</strong> <a href="0073.php">Samuel Thibault: "[hwloc-devel] dynamic cpuset_t?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0109.php">Fawzi Mohamed: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Reply:</strong> <a href="0109.php">Fawzi Mohamed: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault, le Wed 23 Sep 2009 23:51:30 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; Also, dynamic-size cpuset_t is actually more efficient for small boxes
</span><br>
<span class="quotelev1">&gt; for most operations, as the bitmask will be smaller.
</span><br>
<p>As raised in another thread, dynamic-size cpuset_t could also permit a
<br>
sparse implementation for really big boxes (100 000 cores).
<br>
<p>Just to be clear: I'm not concerned by the ABI we choose right now, as I
<br>
believe recompiling to get better support is not a problem for people.
<br>
I'm concerned by the needed API changes, i.e. providing functions to
<br>
allocate/copy/destroy cpusets so that later ABI changes don't require a
<br>
change in the API.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0108.php">Fawzi Mohamed: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>Previous message:</strong> <a href="0106.php">Samuel Thibault: "Re: [hwloc-devel] structure assumptions, duplication"</a>
<li><strong>In reply to:</strong> <a href="0073.php">Samuel Thibault: "[hwloc-devel] dynamic cpuset_t?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0109.php">Fawzi Mohamed: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Reply:</strong> <a href="0109.php">Fawzi Mohamed: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
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
