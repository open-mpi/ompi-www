<?
$subject_val = "Re: [hwloc-devel] [RFC] multinode topology";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 24 09:02:49 2011" -->
<!-- isoreceived="20110824130249" -->
<!-- sent="Wed, 24 Aug 2011 09:02:44 -0400" -->
<!-- isosent="20110824130244" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [RFC] multinode topology" -->
<!-- id="B96D89EF-CD0F-4FC3-976D-C2BC54966AE9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E53E1CF.4090407_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [RFC] multinode topology<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-24 09:02:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2313.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3671"</a>
<li><strong>Previous message:</strong> <a href="2311.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-bugs] make does not go through in AIX 5.2"</a>
<li><strong>In reply to:</strong> <a href="2307.php">Brice Goglin: "[hwloc-devel] [RFC] multinode topology"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks good to me, too.
<br>
On Aug 23, 2011, at 1:22 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; I am working on a prototype implementation for agregating multiple node
</span><br>
<span class="quotelev1">&gt; topologies into a single global one. I was initially thinking of doing a
</span><br>
<span class="quotelev1">&gt;    int hwloc_topology_insert_from_xml(newtopology, newparent, xmlsrc)
</span><br>
<span class="quotelev1">&gt; but it would require non-trivial changes to the core without being very
</span><br>
<span class="quotelev1">&gt; generic. So I came with the following solution:
</span><br>
<span class="quotelev1">&gt;    int hwloc_topology_insert_topology(newtopology, newparent, oldtopology);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The advantage is that you can insert topologies from wherever you want:
</span><br>
<span class="quotelev1">&gt; existing topology in memory, xml buffer, xml file, synthetic, ... You
</span><br>
<span class="quotelev1">&gt; just need the corresponding topology object.
</span><br>
<span class="quotelev1">&gt; hwloc_topology_insert_topology() just duplicates the existing topo
</span><br>
<span class="quotelev1">&gt; inside another one under the &quot;newparent&quot; object.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The drawback is that it's slower because you load the topology once and
</span><br>
<span class="quotelev1">&gt; then duplicate it into the other one. But I don't expect topology
</span><br>
<span class="quotelev1">&gt; agregation to be performance critical so it should be OK.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's an example that already works in my tree after fixing a couple
</span><br>
<span class="quotelev1">&gt; things in the core:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_t local, global;
</span><br>
<span class="quotelev1">&gt;  hwloc_obj_t sw1, sw2, root;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  printf(&quot;Loading the local topology...\n&quot;);
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_init(&amp;local);
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_load(local);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  printf(&quot;Creating a custom topology...\n&quot;);
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_init(&amp;global);
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_set_custom(global);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  printf(&quot;Inserting the local topology into the global one...\n&quot;);
</span><br>
<span class="quotelev1">&gt;  root = hwloc_get_root_obj(global);
</span><br>
<span class="quotelev1">&gt;  sw1 = hwloc_topology_insert_misc_object_by_parent(global, root, &quot;Switch&quot;);
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_insert_topology(global, sw1, local);
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_insert_topology(global, sw1, local);
</span><br>
<span class="quotelev1">&gt;  sw2 = hwloc_topology_insert_misc_object_by_parent(global, root, &quot;Switch&quot;);
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_insert_topology(global, sw2, local);
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_insert_topology(global, sw2, local);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_destroy(local);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  printf(&quot;Building the global topology...\n&quot;);
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_load(global);
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_export_xml(global, &quot;foo.xml&quot;);
</span><br>
<span class="quotelev1">&gt;  hwloc_topology_destroy(global);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Guess what: lstopo -i foo.xml shows one System object above two Misc
</span><br>
<span class="quotelev1">&gt; objects (representing switches) above four identical machines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc_topology_set_custom() initializes my new &quot;custom&quot; backend. It
</span><br>
<span class="quotelev1">&gt; basically means that I am going to insert Misc objects and/or topologies
</span><br>
<span class="quotelev1">&gt; that hwloc_topology_load() will just have to connect together later.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2313.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3671"</a>
<li><strong>Previous message:</strong> <a href="2311.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-bugs] make does not go through in AIX 5.2"</a>
<li><strong>In reply to:</strong> <a href="2307.php">Brice Goglin: "[hwloc-devel] [RFC] multinode topology"</a>
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
