<?
$subject_val = "Re: [hwloc-devel] #23: network topology support and v1.0 semantic fixes";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  7 13:35:40 2010" -->
<!-- isoreceived="20100107183540" -->
<!-- sent="Thu, 7 Jan 2010 19:35:34 +0100" -->
<!-- isosent="20100107183534" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] #23: network topology support and v1.0 semantic fixes" -->
<!-- id="20100107183534.GE4848_at_const.bordeaux.inria.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4B0AA97E.9050305_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] #23: network topology support and v1.0 semantic fixes<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-07 13:35:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0563.php">Brice Goglin: "Re: [hwloc-devel] #23: network topology support and v1.0 semantic fixes"</a>
<li><strong>Previous message:</strong> <a href="0561.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1567)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0563.php">Brice Goglin: "Re: [hwloc-devel] #23: network topology support and v1.0 semantic fixes"</a>
<li><strong>Reply:</strong> <a href="0563.php">Brice Goglin: "Re: [hwloc-devel] #23: network topology support and v1.0 semantic fixes"</a>
<li><strong>Reply:</strong> <a href="0581.php">Jeff Squyres: "Re: [hwloc-devel] #23: network topology support and v1.0 semanticfixes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Happy new year btw :D
<br>
<p>Considering future network topology support, I believe we probably need
<br>
to fix a couple of things before releasing 1.0.  Just to sum up the a
<br>
bunch of points that have been raised in the past months:
<br>
<p>- there should be a way to have the complete toplogy in just one tree,
<br>
&nbsp;&nbsp;so you can browse in it and assign tasks/process/whatever in it,
<br>
&nbsp;&nbsp;according to architectural details provided by hwloc, but also network
<br>
&nbsp;&nbsp;details like bandwidth etc.
<br>
- the core of hwloc mustn't force any kind of tools, it must be easy
<br>
&nbsp;&nbsp;to either build something around hwloc detection and binding
<br>
&nbsp;&nbsp;functions, or load detection &amp; binding plugins.
<br>
<p>The way I see it is to provide a hwloc_topology_combine() function that
<br>
takes a series of several hwloc_topology_t trees and an object type,
<br>
and builds a tree that contains a new object of that type, under which
<br>
the trees appear.  That combination can actually already be done by
<br>
hand by catenating xml files. For instance, on a simple cluster you'd
<br>
run lstopo on each machine and save xml files, load them together,
<br>
combine them under a &quot;network&quot; object (being able to register dynamic
<br>
object types should be easy), and save the result as an xml file, which
<br>
thus contains the complete topology of the cluster. A task dispatcher
<br>
can thus browse it at will etc. When it comes about binding, it'd be
<br>
the task dispatcher's role to first run the application to the target
<br>
machine, and there run hwloc to perform the actual binding, according to
<br>
the cpuset in the tree.
<br>
<p>Now, coming to semantic changes:
<br>
- The top node of the tree wouldn't necessarily be a system object.
<br>
&nbsp;&nbsp;Actually, having always the top object having the system type is not
<br>
&nbsp;&nbsp;providing any useful information :), and it makes us duplicate fields
<br>
&nbsp;&nbsp;between system and machine. On usual (non-Kerrighed) machines, the top
<br>
&nbsp;&nbsp;node would just be machine. On Kerrighed systems, the top node would
<br>
&nbsp;&nbsp;be system. On networked systems, the top node would be a switch or the
<br>
&nbsp;&nbsp;Internet :)
<br>
&nbsp;&nbsp;As a consequence, hwloc_get_system_obj would have to be renamed to
<br>
&nbsp;&nbsp;hwloc_get_root_obj.
<br>
- Objects of network trees may not have cpusets defined  (Trees obtained
<br>
&nbsp;&nbsp;directly from hwloc with defaults parameter would still have cpusets
<br>
&nbsp;&nbsp;on every node however).  It does not make sense to merge cpusets of
<br>
&nbsp;&nbsp;different machines (they will conflict), and things like shifting
<br>
&nbsp;&nbsp;cpusets to be able to merge them would probably only bring issues.
<br>
&nbsp;&nbsp;That being said, that does not prevent from writing a transparency
<br>
&nbsp;&nbsp;plugin that automatically discovers the network topology, shifts
<br>
&nbsp;&nbsp;cpusets, and when requested for binding, automatically migrates to
<br>
&nbsp;&nbsp;the machine according to the shift, and uses the underlying OS hooks
<br>
&nbsp;&nbsp;to perform the binding.  My point is that the hwloc combining operation
<br>
&nbsp;&nbsp;wouldn't fix cpusets itself and leave them NULL. The caller of the
<br>
&nbsp;&nbsp;combining operation will be responsible for that.
<br>
- This also means there can't be &quot;global&quot; cpusets like the recently
<br>
&nbsp;&nbsp;added hwloc_topology_get_{topology,complete,online,allowed}_cpuset
<br>
&nbsp;&nbsp;functions (not released yet). These can just be moved to the hwloc_obj
<br>
&nbsp;&nbsp;structure, thus being available for each object, which could actually be
<br>
&nbsp;&nbsp;helpful btw.
<br>
- Helpers that take cpuset parameters of course don't make sense any more
<br>
&nbsp;&nbsp;when applied to networked topologies.  But it probably doesn't make
<br>
&nbsp;&nbsp;sense for the caller to call them in the first place, and the caller
<br>
&nbsp;&nbsp;knows it since it's the caller that has first called the combining
<br>
&nbsp;&nbsp;operation or loaded an XML file resulting from it.
<br>
&nbsp;&nbsp;If, however, at some point (after having distributed tasks between
<br>
&nbsp;&nbsp;machines for instance), operations with cpusets are desired, we could
<br>
&nbsp;&nbsp;provide a duplication function that takes a topology object parameter
<br>
&nbsp;&nbsp;A and builds a new topology tree containing all the objects under
<br>
&nbsp;&nbsp;A, A thus being its root, and then (if A indeed has a cpuset, but
<br>
&nbsp;&nbsp;the caller should know that) heleprs taking cpuset parameters can be
<br>
&nbsp;&nbsp;called.
<br>
<p>So, to sum it up:
<br>
- hwloc_get_obj_by_depth(topo, 0, 0) may not be a system object any
<br>
&nbsp;&nbsp;more (actually it'd only be one on kerrighed systems).
<br>
- no global cpuset field, only in objects.
<br>
<p>The second point shouldn't harm, it's just a matter of fixing the (not
<br>
yet released) API.  The first point clearly contradicts the current
<br>
documentation (&#226;&#128;&#156;HWLOC_OBJ_SYSTEM will always be the highest&#226;&#128;&#157;),
<br>
but I believe not breaking it as soon as now will tie us from further
<br>
extensions anyway, and I don't think much code relies on it anyway.
<br>
<p>The plan I see is that for 1.0 we only check that catenating .XML files
<br>
by hand to build misc levels representing network layers does indeed
<br>
work, which should mean that actual combining functions etc. should be
<br>
possible to implement later.
<br>
<p>Please comment/disagree/agree :)
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0563.php">Brice Goglin: "Re: [hwloc-devel] #23: network topology support and v1.0 semantic fixes"</a>
<li><strong>Previous message:</strong> <a href="0561.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1567)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0563.php">Brice Goglin: "Re: [hwloc-devel] #23: network topology support and v1.0 semantic fixes"</a>
<li><strong>Reply:</strong> <a href="0563.php">Brice Goglin: "Re: [hwloc-devel] #23: network topology support and v1.0 semantic fixes"</a>
<li><strong>Reply:</strong> <a href="0581.php">Jeff Squyres: "Re: [hwloc-devel] #23: network topology support and v1.0 semanticfixes"</a>
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
