<?
$subject_val = "[hwloc-devel] dynamic cpuset_t?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 23 17:51:36 2009" -->
<!-- isoreceived="20090923215136" -->
<!-- sent="Wed, 23 Sep 2009 23:51:30 +0200" -->
<!-- isosent="20090923215130" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="[hwloc-devel] dynamic cpuset_t?" -->
<!-- id="20090923215130.GE6376_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] dynamic cpuset_t?<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-23 17:51:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0074.php">Brice Goglin: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Previous message:</strong> <a href="0072.php">Samuel Thibault: "Re: [hwloc-devel] Cache size/sharing errors on 8x4 Opteron system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0075.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Reply:</strong> <a href="0075.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Reply:</strong> <a href="0107.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>One thing we weren't so sure about while designing libtopology was
<br>
whether to use fixed-size cpuset_t or dynamic-size cpuset_t. The
<br>
advantage of the former is simplicity of course. The currently defined
<br>
size is 1024 cpus and can easily be configured if one needs more. We
<br>
could think that 1024 is plenty for now and we'll see later. But if
<br>
later we realize that we have to change the API in order to be able to
<br>
use dynamic-size cpuset_t (e.g. copy &amp; destroy functions at least), that
<br>
will be a burden. Also, dynamic-size cpuset_t is actually more efficient
<br>
for small boxes for most operations, as the bitmask will be smaller.
<br>
<p>While we are at libtopology-&gt;hwloc API transition and now that a few
<br>
people are subscribed to hwloc-devel, what do people think about it?
<br>
Maybe we should at least make sure that the API doesn't hinder potential
<br>
for dynamic support?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0074.php">Brice Goglin: "Re: [hwloc-devel] last API possible changes"</a>
<li><strong>Previous message:</strong> <a href="0072.php">Samuel Thibault: "Re: [hwloc-devel] Cache size/sharing errors on 8x4 Opteron system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0075.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Reply:</strong> <a href="0075.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
<li><strong>Reply:</strong> <a href="0107.php">Samuel Thibault: "Re: [hwloc-devel] dynamic cpuset_t?"</a>
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
