<?
$subject_val = "[hwloc-devel] upcoming feature removal";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 05:49:03 2014" -->
<!-- isoreceived="20141103104903" -->
<!-- sent="Mon, 03 Nov 2014 11:49:02 +0100" -->
<!-- isosent="20141103104902" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] upcoming feature removal" -->
<!-- id="54575D9E.7070106_at_inria.fr" -->
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
<strong>Subject:</strong> [hwloc-devel] upcoming feature removal<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-03 05:49:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4281.php">Samuel Thibault: "Re: [hwloc-devel] upcoming feature removal"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/10/4279.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-256-g1ef7481)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4281.php">Samuel Thibault: "Re: [hwloc-devel] upcoming feature removal"</a>
<li><strong>Reply:</strong> <a href="4281.php">Samuel Thibault: "Re: [hwloc-devel] upcoming feature removal"</a>
<li><strong>Reply:</strong> <a href="4284.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] upcoming feature removal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I am considering removing some features from hwloc since the next major
<br>
release will be called 2.0 and it deserves major changes :)
<br>
<p>If you care about anything below, please speak up:
<br>
* the &quot;custom&quot; interface and hwloc-assembler tools (for assembling the
<br>
topology of multiple nodes): nobody ever used it as far as I know, it
<br>
complicates the code by allowing NULL cpuset at the top of the topology,
<br>
and we know the design doesn't work (that's why netloc is coming)
<br>
* kerrighed support (single-system image): planned for removal since
<br>
2012, see <a href="https://github.com/open-mpi/hwloc/issues/73">https://github.com/open-mpi/hwloc/issues/73</a>
<br>
<p>I am also considering this change that shouldn't break existing programs:
<br>
* always create a NUMA node even if the machine isn't NUMA: we currently
<br>
use a full nodeset for UMA machines without any NUMA object, and that
<br>
makes the code ugly.
<br>
<p><p>If we're going to break the ABI anyway (removing custom will break the
<br>
ABI), we could break it even more. Other possible more intrusive changes:
<br>
* don't put I/O objects in &quot;normal&quot; children since it confuses programs
<br>
consulting the children list. rather place them under a dedicated child
<br>
pointer special objects such as Misc may go there as well.
<br>
* replace hwloc_topology_ignore_type_keep_structure() with a flavor that
<br>
does not create asymmetric topologies. only remove entire levels that
<br>
don't add any hierarchy. don't remove single objects within levels in
<br>
case of asymmetric topologies (restricted by cgroup etc).
<br>
* remove obj-&gt;os_level: pretty much unused and undocumented, can go in a
<br>
string attribute if really useful
<br>
<p>Changes requested by some users but that I am not sure what to do yet:
<br>
* stop having 4 cpusets and 3 nodesets per object and just have 1 cpuset
<br>
and 1 nodeset depending on topology flags (only allowed, or only online,
<br>
etc). possibly with ways to switch between modes at runtime
<br>
* stop having a CACHE type + data/instruction/unified + depth, and just
<br>
have one type for each of them, such as HWLOC_OBJ_CACHE_L1d. the
<br>
advantage is that you can switch (type) without special-casing the CACHE
<br>
subtypes. One drawback is that there are many subtypes in existing
<br>
machines (at least L1[id], L2[idu], L3[idu], L4u). Also the &quot;Group&quot; type
<br>
still needs special-casing because of multiple nested groups in large
<br>
NUMA machines.
<br>
<p>Other things you don't like and never said?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4281.php">Samuel Thibault: "Re: [hwloc-devel] upcoming feature removal"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/10/4279.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-256-g1ef7481)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4281.php">Samuel Thibault: "Re: [hwloc-devel] upcoming feature removal"</a>
<li><strong>Reply:</strong> <a href="4281.php">Samuel Thibault: "Re: [hwloc-devel] upcoming feature removal"</a>
<li><strong>Reply:</strong> <a href="4284.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] upcoming feature removal"</a>
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
