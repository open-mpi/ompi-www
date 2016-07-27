<?
$subject_val = "[hwloc-devel] new filter/ignore API";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 12:15:38 2015" -->
<!-- isoreceived="20151029161538" -->
<!-- sent="Thu, 29 Oct 2015 17:15:33 +0100" -->
<!-- isosent="20151029161533" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] new filter/ignore API" -->
<!-- id="56324625.6020308_at_inria.fr" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [hwloc-devel] new filter/ignore API<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-29 12:15:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4649.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-824-g6b1aa63)"</a>
<li><strong>Previous message:</strong> <a href="4647.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.11.1-4-gada1ee9)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I just pushed the &quot;type-filter&quot; branch. It's supposed to replace the old
<br>
&quot;ignore&quot; API as well as ICACHES and IO topology flags in v2.0.
<br>
<p>Main points:
<br>
* you may now enable, disable and query the &quot;ignoring&quot; (now called
<br>
filter) for any object type
<br>
* instruction caches and I/O don't need special topology flags anymore,
<br>
you may just set their filtering to KEEP_ALL
<br>
* there are 4 kinds of filter. KEEP_ALL and KEEP_NONE (obvious).
<br>
KEEP_STRUCTURE (similar to what we have in v1.x). KEEP_IMPORTANT (for
<br>
I/Os without too many useless objects).
<br>
* defaults are unchanged, both in the C API and in command-line tools
<br>
<p>If you want everything (like lstopo), you just
<br>
hwloc_topology_set_all_types_filter(topology,
<br>
HWLOC_TYPE_FILTER_KEEP_ALL). There are variants for just changing the
<br>
filter for all I/O types, all caches, or all instruction caches. Examples:
<br>
<a href="https://github.com/open-mpi/hwloc/blob/type-filter/utils/hwloc/hwloc-diff.c#L72">https://github.com/open-mpi/hwloc/blob/type-filter/utils/hwloc/hwloc-diff.c#L72</a>
<br>
<a href="https://github.com/open-mpi/hwloc/blob/type-filter/doc/examples/sharedcaches.c#L35">https://github.com/open-mpi/hwloc/blob/type-filter/doc/examples/sharedcaches.c#L35</a>
<br>
<a href="https://github.com/open-mpi/hwloc/blob/type-filter/tests/hwloc/cuda.c#L37">https://github.com/open-mpi/hwloc/blob/type-filter/tests/hwloc/cuda.c#L37</a>
<br>
<p>Full API:
<br>
<a href="https://github.com/open-mpi/hwloc/blob/type-filter/include/hwloc.h#L1919">https://github.com/open-mpi/hwloc/blob/type-filter/include/hwloc.h#L1919</a>
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4649.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-824-g6b1aa63)"</a>
<li><strong>Previous message:</strong> <a href="4647.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.11.1-4-gada1ee9)"</a>
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
