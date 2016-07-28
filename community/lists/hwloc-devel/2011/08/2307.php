<?
$subject_val = "[hwloc-devel] [RFC] multinode topology";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 23 13:22:30 2011" -->
<!-- isoreceived="20110823172230" -->
<!-- sent="Tue, 23 Aug 2011 19:22:23 +0200" -->
<!-- isosent="20110823172223" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] [RFC] multinode topology" -->
<!-- id="4E53E1CF.4090407_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] [RFC] multinode topology<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-23 13:22:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2308.php">Samuel Thibault: "Re: [hwloc-devel] [RFC] multinode topology"</a>
<li><strong>Previous message:</strong> <a href="2306.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3rc1r3643)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2308.php">Samuel Thibault: "Re: [hwloc-devel] [RFC] multinode topology"</a>
<li><strong>Maybe reply:</strong> <a href="2308.php">Samuel Thibault: "Re: [hwloc-devel] [RFC] multinode topology"</a>
<li><strong>Reply:</strong> <a href="2312.php">Jeff Squyres: "Re: [hwloc-devel] [RFC] multinode topology"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am working on a prototype implementation for agregating multiple node
<br>
topologies into a single global one. I was initially thinking of doing a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int hwloc_topology_insert_from_xml(newtopology, newparent, xmlsrc)
<br>
but it would require non-trivial changes to the core without being very
<br>
generic. So I came with the following solution:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int hwloc_topology_insert_topology(newtopology, newparent, oldtopology);
<br>
<p>The advantage is that you can insert topologies from wherever you want:
<br>
existing topology in memory, xml buffer, xml file, synthetic, ... You
<br>
just need the corresponding topology object.
<br>
hwloc_topology_insert_topology() just duplicates the existing topo
<br>
inside another one under the &quot;newparent&quot; object.
<br>
<p>The drawback is that it's slower because you load the topology once and
<br>
then duplicate it into the other one. But I don't expect topology
<br>
agregation to be performance critical so it should be OK.
<br>
<p>Here's an example that already works in my tree after fixing a couple
<br>
things in the core:
<br>
<p>&nbsp;&nbsp;hwloc_topology_t local, global;
<br>
&nbsp;&nbsp;hwloc_obj_t sw1, sw2, root;
<br>
<p>&nbsp;&nbsp;printf(&quot;Loading the local topology...\n&quot;);
<br>
&nbsp;&nbsp;hwloc_topology_init(&amp;local);
<br>
&nbsp;&nbsp;hwloc_topology_load(local);
<br>
<p>&nbsp;&nbsp;printf(&quot;Creating a custom topology...\n&quot;);
<br>
&nbsp;&nbsp;hwloc_topology_init(&amp;global);
<br>
&nbsp;&nbsp;hwloc_topology_set_custom(global);
<br>
<p>&nbsp;&nbsp;printf(&quot;Inserting the local topology into the global one...\n&quot;);
<br>
&nbsp;&nbsp;root = hwloc_get_root_obj(global);
<br>
&nbsp;&nbsp;sw1 = hwloc_topology_insert_misc_object_by_parent(global, root, &quot;Switch&quot;);
<br>
&nbsp;&nbsp;hwloc_topology_insert_topology(global, sw1, local);
<br>
&nbsp;&nbsp;hwloc_topology_insert_topology(global, sw1, local);
<br>
&nbsp;&nbsp;sw2 = hwloc_topology_insert_misc_object_by_parent(global, root, &quot;Switch&quot;);
<br>
&nbsp;&nbsp;hwloc_topology_insert_topology(global, sw2, local);
<br>
&nbsp;&nbsp;hwloc_topology_insert_topology(global, sw2, local);
<br>
<p>&nbsp;&nbsp;hwloc_topology_destroy(local);
<br>
<p>&nbsp;&nbsp;printf(&quot;Building the global topology...\n&quot;);
<br>
&nbsp;&nbsp;hwloc_topology_load(global);
<br>
&nbsp;&nbsp;hwloc_topology_export_xml(global, &quot;foo.xml&quot;);
<br>
&nbsp;&nbsp;hwloc_topology_destroy(global);
<br>
<p>Guess what: lstopo -i foo.xml shows one System object above two Misc
<br>
objects (representing switches) above four identical machines.
<br>
<p>hwloc_topology_set_custom() initializes my new &quot;custom&quot; backend. It
<br>
basically means that I am going to insert Misc objects and/or topologies
<br>
that hwloc_topology_load() will just have to connect together later.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2308.php">Samuel Thibault: "Re: [hwloc-devel] [RFC] multinode topology"</a>
<li><strong>Previous message:</strong> <a href="2306.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3rc1r3643)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2308.php">Samuel Thibault: "Re: [hwloc-devel] [RFC] multinode topology"</a>
<li><strong>Maybe reply:</strong> <a href="2308.php">Samuel Thibault: "Re: [hwloc-devel] [RFC] multinode topology"</a>
<li><strong>Reply:</strong> <a href="2312.php">Jeff Squyres: "Re: [hwloc-devel] [RFC] multinode topology"</a>
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
