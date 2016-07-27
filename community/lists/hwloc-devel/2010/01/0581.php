<?
$subject_val = "Re: [hwloc-devel] #23: network topology support and v1.0 semanticfixes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 11 10:12:08 2010" -->
<!-- isoreceived="20100111151208" -->
<!-- sent="Mon, 11 Jan 2010 10:12:00 -0500" -->
<!-- isosent="20100111151200" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] #23: network topology support and v1.0 semanticfixes" -->
<!-- id="576E0107-4EBD-437C-BF9C-47A3E9A01DC6_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20100107183534.GE4848_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] #23: network topology support and v1.0 semanticfixes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-11 10:12:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0582.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1589"</a>
<li><strong>Previous message:</strong> <a href="0580.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1589"</a>
<li><strong>In reply to:</strong> <a href="0562.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support and v1.0 semantic fixes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0583.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support and v1.0 semanticfixes"</a>
<li><strong>Reply:</strong> <a href="0583.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support and v1.0 semanticfixes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Been mulling this for a few days; here's my thoughts...
<br>
<p><p>On Jan 7, 2010, at 1:35 PM, Samuel Thibault wrote:
<br>
<p><span class="quotelev1">&gt; Considering future network topology support, I believe we probably need
</span><br>
<span class="quotelev1">&gt; to fix a couple of things before releasing 1.0.  Just to sum up the a
</span><br>
<span class="quotelev1">&gt; bunch of points that have been raised in the past months:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - there should be a way to have the complete toplogy in just one tree,
</span><br>
<span class="quotelev1">&gt;   so you can browse in it and assign tasks/process/whatever in it,
</span><br>
<span class="quotelev1">&gt;   according to architectural details provided by hwloc, but also network
</span><br>
<span class="quotelev1">&gt;   details like bandwidth etc.
</span><br>
<p>Are you thinking of adding bandwidth attributes?  Or are you thinking of adding weighting between objects in the hierarchy?  Or ...?
<br>
<p><span class="quotelev1">&gt; - the core of hwloc mustn't force any kind of tools, it must be easy
</span><br>
<span class="quotelev1">&gt;   to either build something around hwloc detection and binding
</span><br>
<span class="quotelev1">&gt;   functions, or load detection &amp; binding plugins.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The way I see it is to provide a hwloc_topology_combine() function that
</span><br>
<span class="quotelev1">&gt; takes a series of several hwloc_topology_t trees and an object type,
</span><br>
<span class="quotelev1">&gt; and builds a tree that contains a new object of that type, under which
</span><br>
<span class="quotelev1">&gt; the trees appear.  That combination can actually already be done by
</span><br>
<span class="quotelev1">&gt; hand by catenating xml files. For instance, on a simple cluster you'd
</span><br>
<span class="quotelev1">&gt; run lstopo on each machine and save xml files, load them together,
</span><br>
<span class="quotelev1">&gt; combine them under a &quot;network&quot; object (being able to register dynamic
</span><br>
<span class="quotelev1">&gt; object types should be easy), and save the result as an xml file, which
</span><br>
<span class="quotelev1">&gt; thus contains the complete topology of the cluster. A task dispatcher
</span><br>
<span class="quotelev1">&gt; can thus browse it at will etc. When it comes about binding, it'd be
</span><br>
<span class="quotelev1">&gt; the task dispatcher's role to first run the application to the target
</span><br>
<span class="quotelev1">&gt; machine, and there run hwloc to perform the actual binding, according to
</span><br>
<span class="quotelev1">&gt; the cpuset in the tree.
</span><br>
<p>All sounds good.
<br>
<p><span class="quotelev1">&gt; Now, coming to semantic changes:
</span><br>
<span class="quotelev1">&gt; - The top node of the tree wouldn't necessarily be a system object.
</span><br>
<span class="quotelev1">&gt;   Actually, having always the top object having the system type is not
</span><br>
<span class="quotelev1">&gt;   providing any useful information :), and it makes us duplicate fields
</span><br>
<span class="quotelev1">&gt;   between system and machine. On usual (non-Kerrighed) machines, the top
</span><br>
<span class="quotelev1">&gt;   node would just be machine. On Kerrighed systems, the top node would
</span><br>
<span class="quotelev1">&gt;   be system. On networked systems, the top node would be a switch or the
</span><br>
<span class="quotelev1">&gt;   Internet :)
</span><br>
<span class="quotelev1">&gt;   As a consequence, hwloc_get_system_obj would have to be renamed to
</span><br>
<span class="quotelev1">&gt;   hwloc_get_root_obj.
</span><br>
<span class="quotelev1">&gt; - Objects of network trees may not have cpusets defined  (Trees obtained
</span><br>
<span class="quotelev1">&gt;   directly from hwloc with defaults parameter would still have cpusets
</span><br>
<span class="quotelev1">&gt;   on every node however).  It does not make sense to merge cpusets of
</span><br>
<span class="quotelev1">&gt;   different machines (they will conflict), and things like shifting
</span><br>
<span class="quotelev1">&gt;   cpusets to be able to merge them would probably only bring issues.
</span><br>
<span class="quotelev1">&gt;   That being said, that does not prevent from writing a transparency
</span><br>
<span class="quotelev1">&gt;   plugin that automatically discovers the network topology, shifts
</span><br>
<span class="quotelev1">&gt;   cpusets, and when requested for binding, automatically migrates to
</span><br>
<span class="quotelev1">&gt;   the machine according to the shift, and uses the underlying OS hooks
</span><br>
<span class="quotelev1">&gt;   to perform the binding.  My point is that the hwloc combining operation
</span><br>
<span class="quotelev1">&gt;   wouldn't fix cpusets itself and leave them NULL. The caller of the
</span><br>
<span class="quotelev1">&gt;   combining operation will be responsible for that.
</span><br>
<p>More generally -- some objects can be bound to, some cannot.  I assume (per Brice's reply) that we can't bind to PCI objects, so I think making this a full generalization is probably a good thing (especially as hwloc can understand/map more and more kinds of objects).  
<br>
<p>How does this kind of thing extend to, say, co-processors (such as accelerators, FPGAs, GPGPUs, etc.)?
<br>
<p><span class="quotelev1">&gt; - This also means there can't be &quot;global&quot; cpusets like the recently
</span><br>
<span class="quotelev1">&gt;   added hwloc_topology_get_{topology,complete,online,allowed}_cpuset
</span><br>
<span class="quotelev1">&gt;   functions (not released yet). These can just be moved to the hwloc_obj
</span><br>
<span class="quotelev1">&gt;   structure, thus being available for each object, which could actually be
</span><br>
<span class="quotelev1">&gt;   helpful btw.
</span><br>
<p>I'm not sure I follow -- you say that we can't have &quot;global&quot; cpusets anymore (which I grok), but then you say that we can move them to the hwloc_obj struct.  Isn't that the top-level struct?  I probably misunderstand here.
<br>
<p><span class="quotelev1">&gt; - Helpers that take cpuset parameters of course don't make sense any more
</span><br>
<span class="quotelev1">&gt;   when applied to networked topologies.  But it probably doesn't make
</span><br>
<span class="quotelev1">&gt;   sense for the caller to call them in the first place, and the caller
</span><br>
<span class="quotelev1">&gt;   knows it since it's the caller that has first called the combining
</span><br>
<span class="quotelev1">&gt;   operation or loaded an XML file resulting from it.
</span><br>
<p>Agreed.  Perhaps we should have a general query function that can return whether a given object can be bound to or not (e.g., for generic tree-traversal kinds of functionality)...?
<br>
<p><span class="quotelev1">&gt;   If, however, at some point (after having distributed tasks between
</span><br>
<span class="quotelev1">&gt;   machines for instance), operations with cpusets are desired, we could
</span><br>
<span class="quotelev1">&gt;   provide a duplication function that takes a topology object parameter
</span><br>
<span class="quotelev1">&gt;   A and builds a new topology tree containing all the objects under
</span><br>
<span class="quotelev1">&gt;   A, A thus being its root, and then (if A indeed has a cpuset, but
</span><br>
<span class="quotelev1">&gt;   the caller should know that) heleprs taking cpuset parameters can be
</span><br>
<span class="quotelev1">&gt;   called.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, to sum it up:
</span><br>
<span class="quotelev1">&gt; - hwloc_get_obj_by_depth(topo, 0, 0) may not be a system object any
</span><br>
<span class="quotelev1">&gt;   more (actually it'd only be one on kerrighed systems).
</span><br>
<span class="quotelev1">&gt; - no global cpuset field, only in objects.
</span><br>
<p>Some generic points...
<br>
<p>1. How about defining a small set of generic operations based on what you described above?  E.g.:
<br>
<p>- copy: take a tree with root R; copy it to a new tree (note that R may not be the root of the original tree)
<br>
- remove: take a tree with root R; find object X within that tree; remove X and all of its children
<br>
- insert: take two trees with roots R and S; find object X within R; copy tree S to become a new child of X
<br>
- ...?
<br>
<p><span class="quotelev1">&gt; The second point shouldn't harm, it's just a matter of fixing the (not
</span><br>
<span class="quotelev1">&gt; yet released) API.  The first point clearly contradicts the current
</span><br>
<span class="quotelev1">&gt; documentation (&#147;HWLOC_OBJ_SYSTEM will always be the highest&#148;),
</span><br>
<span class="quotelev1">&gt; but I believe not breaking it as soon as now will tie us from further
</span><br>
<span class="quotelev1">&gt; extensions anyway, and I don't think much code relies on it anyway.
</span><br>
<p>Agreed.
<br>
<p><span class="quotelev1">&gt; The plan I see is that for 1.0 we only check that catenating .XML files
</span><br>
<span class="quotelev1">&gt; by hand to build misc levels representing network layers does indeed
</span><br>
<span class="quotelev1">&gt; work, which should mean that actual combining functions etc. should be
</span><br>
<span class="quotelev1">&gt; possible to implement later.
</span><br>
<p>FWIW, I'd prefer to see the combining/etc. functions ASAP -- we could definitely use such things in Open MPI...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0582.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1589"</a>
<li><strong>Previous message:</strong> <a href="0580.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1589"</a>
<li><strong>In reply to:</strong> <a href="0562.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support and v1.0 semantic fixes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0583.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support and v1.0 semanticfixes"</a>
<li><strong>Reply:</strong> <a href="0583.php">Samuel Thibault: "Re: [hwloc-devel] #23: network topology support and v1.0 semanticfixes"</a>
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
