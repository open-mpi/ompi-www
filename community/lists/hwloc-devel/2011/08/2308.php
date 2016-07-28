<?
$subject_val = "Re: [hwloc-devel] [RFC] multinode topology";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 23 13:29:26 2011" -->
<!-- isoreceived="20110823172926" -->
<!-- sent="Tue, 23 Aug 2011 19:29:21 +0200" -->
<!-- isosent="20110823172921" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [RFC] multinode topology" -->
<!-- id="20110823172921.GC4202_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="484581165.2070181.1314120169307.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-23 13:29:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2309.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3648)"</a>
<li><strong>Previous message:</strong> <a href="2307.php">Brice Goglin: "[hwloc-devel] [RFC] multinode topology"</a>
<li><strong>Maybe in reply to:</strong> <a href="2307.php">Brice Goglin: "[hwloc-devel] [RFC] multinode topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2312.php">Jeff Squyres: "Re: [hwloc-devel] [RFC] multinode topology"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Tue 23 Aug 2011 19:22:49 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt;   root = hwloc_get_root_obj(global);
</span><br>
<span class="quotelev1">&gt;   sw1 = hwloc_topology_insert_misc_object_by_parent(global, root, &quot;Switch&quot;);
</span><br>
<span class="quotelev1">&gt;   hwloc_topology_insert_topology(global, sw1, local);
</span><br>
<span class="quotelev1">&gt;   hwloc_topology_insert_topology(global, sw1, local);
</span><br>
<span class="quotelev1">&gt;   sw2 = hwloc_topology_insert_misc_object_by_parent(global, root, &quot;Switch&quot;);
</span><br>
<span class="quotelev1">&gt;   hwloc_topology_insert_topology(global, sw2, local);
</span><br>
<span class="quotelev1">&gt;   hwloc_topology_insert_topology(global, sw2, local);
</span><br>
<p>That looks good!
<br>
<p>The performance hit should be quite low, I expect a copy to be much less
<br>
costly than the actual probe or XML load.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2309.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3648)"</a>
<li><strong>Previous message:</strong> <a href="2307.php">Brice Goglin: "[hwloc-devel] [RFC] multinode topology"</a>
<li><strong>Maybe in reply to:</strong> <a href="2307.php">Brice Goglin: "[hwloc-devel] [RFC] multinode topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2312.php">Jeff Squyres: "Re: [hwloc-devel] [RFC] multinode topology"</a>
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
