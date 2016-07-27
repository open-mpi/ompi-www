<?
$subject_val = "[hwloc-devel] splitting HWLOC_OBJ_CACHE into multiple types";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 20 09:12:00 2015" -->
<!-- isoreceived="20150820131200" -->
<!-- sent="Thu, 20 Aug 2015 15:11:58 +0200" -->
<!-- isosent="20150820131158" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] splitting HWLOC_OBJ_CACHE into multiple types" -->
<!-- id="55D5D21E.1070208_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] splitting HWLOC_OBJ_CACHE into multiple types<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-20 09:11:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4565.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-684-g19d8b14)"</a>
<li><strong>Previous message:</strong> <a href="4563.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.11.0-20-g3852551)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>We currently have a single object type for caches (HWLOC_OBJ_CACHE) but
<br>
all machines have multiple levels of caches (usually, L1i, L1d, L2 and
<br>
L3). Functions like hwloc_get_obj_by_type() don't work for caches
<br>
because of these multiple levels. We got multiple complaints about this
<br>
because this requires special cases like:
<br>
<a href="https://github.com/open-mpi/ompi/blob/master/orte/mca/rmaps/base/rmaps_base_binding.c#L910">https://github.com/open-mpi/ompi/blob/master/orte/mca/rmaps/base/rmaps_base_binding.c#L910</a>
<br>
<p>The new &quot;cachetypes&quot; branch splits the single HWLOC_OBJ_CACHE into
<br>
multiple types, one per level:
<br>
* HWLOC_OBJ_L1CACHE, ..., HWLOC_OBJ_L5CACHE (those are either Data or
<br>
Unified caches, and we have never seen anything above L4).
<br>
* HWLOC_OBJ_L1ICACHE, ..., HWLOC_OBJ_L3ICACHE (modern processors have a
<br>
L1i, and I have never seen anything above L2i)
<br>
<p>Random notes:
<br>
<p>* Your switch cases on object types will need 8 lines to match all cache
<br>
types:
<br>
<a href="https://github.com/open-mpi/hwloc/blob/cachetypes/hwloc/topology-xml.c#L173">https://github.com/open-mpi/hwloc/blob/cachetypes/hwloc/topology-xml.c#L173</a>
<br>
Ranges in switch cases are not standard C yet unfortunately.
<br>
<p>* There is a hwloc_obj_type_is_cache(type) for testing if a given type
<br>
is a cache (and variants for data and instruction caches).
<br>
<a href="https://github.com/open-mpi/hwloc/blob/cachetypes/include/hwloc/helper.h#L453">https://github.com/open-mpi/hwloc/blob/cachetypes/include/hwloc/helper.h#L453</a>
<br>
<p>* If you want to ignore caches entirely in your topology, you need to
<br>
call the ignore function 8 times :/ I am planning to rework the ignoring
<br>
API in v2.0, we'll see if we can make that easier.
<br>
<p>* Contrary to the renaming of SOCKET into PACKAGE or NODE into NUMANODE,
<br>
we can't #define the old HWLOC_OBJ_CACHE to a new type to ease
<br>
forward-compatibility. I think it's better to force users to update
<br>
their code anyway. In the vast majority of cases, the new code will
<br>
be shorter thanks to no cache-specific hacks anymore.
<br>
<p>* There will be XML backward-compatiblity: old XML will be converted to
<br>
new cache types.
<br>
<p>* You may still have multiple levels of the same type in case of &quot;Groups
<br>
of Groups&quot; (usually on large SGI UV machines). That's why
<br>
HWLOC_TYPE_DEPTH_MULTIPLE will still exist unfortunately. Fortunately,
<br>
you probably never lookup &quot;Group&quot; objects &quot;by_type&quot;.
<br>
<p>If you have comments, let me know.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4565.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-684-g19d8b14)"</a>
<li><strong>Previous message:</strong> <a href="4563.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.11.0-20-g3852551)"</a>
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
