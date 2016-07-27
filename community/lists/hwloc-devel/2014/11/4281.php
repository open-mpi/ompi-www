<?
$subject_val = "Re: [hwloc-devel] upcoming feature removal";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 08:07:14 2014" -->
<!-- isoreceived="20141103130714" -->
<!-- sent="Mon, 3 Nov 2014 14:07:13 +0100" -->
<!-- isosent="20141103130713" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] upcoming feature removal" -->
<!-- id="20141103130713.GO3114_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="54575D9E.7070106_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] upcoming feature removal<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-03 08:07:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4282.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-257-gd438bad)"</a>
<li><strong>Previous message:</strong> <a href="4280.php">Brice Goglin: "[hwloc-devel] upcoming feature removal"</a>
<li><strong>In reply to:</strong> <a href="4280.php">Brice Goglin: "[hwloc-devel] upcoming feature removal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4284.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] upcoming feature removal"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Mon 03 Nov 2014 11:49:02 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; * kerrighed support (single-system image): planned for removal since
</span><br>
<span class="quotelev1">&gt; 2012, see <a href="https://github.com/open-mpi/hwloc/issues/73">https://github.com/open-mpi/hwloc/issues/73</a>
</span><br>
<p>Right, Kerrighed is mostly discontinued.
<br>
<p><span class="quotelev1">&gt; I am also considering this change that shouldn't break existing programs:
</span><br>
<span class="quotelev1">&gt; * always create a NUMA node even if the machine isn't NUMA
</span><br>
<p>That makes sense to me, yes.
<br>
<p><span class="quotelev1">&gt; If we're going to break the ABI anyway (removing custom will break the
</span><br>
<span class="quotelev1">&gt; ABI), we could break it even more.
</span><br>
<p>Yes, sure, a 2.0 is the opportunity to break the ABI/API a bit.
<br>
<p><span class="quotelev1">&gt; * don't put I/O objects in &quot;normal&quot; children since it confuses programs
</span><br>
<span class="quotelev1">&gt; consulting the children list. rather place them under a dedicated child
</span><br>
<span class="quotelev1">&gt; pointer special objects such as Misc may go there as well.
</span><br>
<p>Indeed.
<br>
<p><span class="quotelev1">&gt; * replace hwloc_topology_ignore_type_keep_structure() with a flavor that
</span><br>
<span class="quotelev1">&gt; does not create asymmetric topologies. only remove entire levels that
</span><br>
<span class="quotelev1">&gt; don't add any hierarchy. don't remove single objects within levels in
</span><br>
<span class="quotelev1">&gt; case of asymmetric topologies (restricted by cgroup etc).
</span><br>
<p>Agreed.
<br>
<p><span class="quotelev1">&gt; * remove obj-&gt;os_level: pretty much unused and undocumented, can go in a
</span><br>
<span class="quotelev1">&gt; string attribute if really useful
</span><br>
<p>Indeed. This was introduced for AIX, and later re-used by x86, but
<br>
applications most probably won't really make use of it.  I don't think
<br>
it's even useful to put it in an attribute.
<br>
<p><span class="quotelev1">&gt; Changes requested by some users but that I am not sure what to do yet:
</span><br>
<span class="quotelev1">&gt; * stop having 4 cpusets and 3 nodesets per object and just have 1 cpuset
</span><br>
<span class="quotelev1">&gt; and 1 nodeset depending on topology flags (only allowed, or only online,
</span><br>
<span class="quotelev1">&gt; etc). possibly with ways to switch between modes at runtime
</span><br>
<p>Right, I can understand it scares users to get all this information .
<br>
Having to choose at runtime however poses the problem of applications
<br>
which would want the various information, to deal with both online and
<br>
allowed, lstopo is such an example, because they wouldn't like to have
<br>
to build the topology several times to get the various information.
<br>
<p>What I guess would work fine is to have only the cpuset and nodeset
<br>
fields, have a flag to decide between cpuset/nodeset being the complete
<br>
sets or just what is covered by PU object (the latter being the default,
<br>
probably), and provide the allowed and online cpuset/nodesets another
<br>
way: we don't need it in all objects anyway, since one can always
<br>
perform an AND of allowed or online with the object cpuset to get what
<br>
one wants. Considering the netloc support, I guess the information
<br>
should be contained in the machine object.
<br>
<p><span class="quotelev1">&gt; * stop having a CACHE type + data/instruction/unified + depth, and just
</span><br>
<span class="quotelev1">&gt; have one type for each of them, such as HWLOC_OBJ_CACHE_L1d. the
</span><br>
<span class="quotelev1">&gt; advantage is that you can switch (type) without special-casing the CACHE
</span><br>
<span class="quotelev1">&gt; subtypes. One drawback is that there are many subtypes in existing
</span><br>
<span class="quotelev1">&gt; machines (at least L1[id], L2[idu], L3[idu], L4u).
</span><br>
<p>Yes, and we don't know when it will end. We had only L1 in the past,
<br>
then L1-L2, then L1-L3, then L1-L4, ... :) It would be a pity to abandon
<br>
providing applications with a level-agnostic way to deal with caches.
<br>
Separating instruction cache from data caches seems reasonable to me,
<br>
however.
<br>
<p><span class="quotelev1">&gt; Also the &quot;Group&quot; type still needs special-casing because of multiple
</span><br>
<span class="quotelev1">&gt; nested groups in large NUMA machines.
</span><br>
<p>Which kind of special-casing do we see in the wild?  I would usually
<br>
consider groups as something applications can't really take into account
<br>
more precisely than the mere topology division.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4282.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-257-gd438bad)"</a>
<li><strong>Previous message:</strong> <a href="4280.php">Brice Goglin: "[hwloc-devel] upcoming feature removal"</a>
<li><strong>In reply to:</strong> <a href="4280.php">Brice Goglin: "[hwloc-devel] upcoming feature removal"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4284.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] upcoming feature removal"</a>
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
