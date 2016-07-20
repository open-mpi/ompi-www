<?
$subject_val = "[hwloc-users] binding to thread";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 29 13:01:45 2014" -->
<!-- isoreceived="20140929170145" -->
<!-- sent="Mon, 29 Sep 2014 17:01:44 +0000" -->
<!-- isosent="20140929170144" -->
<!-- name="Aulwes, Rob" -->
<!-- email="rta_at_[hidden]" -->
<!-- subject="[hwloc-users] binding to thread" -->
<!-- id="D04EEC95.896F%rta_at_lanl.gov" -->
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
<strong>Subject:</strong> [hwloc-users] binding to thread<br>
<strong>From:</strong> Aulwes, Rob (<em>rta_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-29 13:01:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1099.php">Brice Goglin: "Re: [hwloc-users] binding to thread"</a>
<li><strong>Previous message:</strong> <a href="1097.php">Dennis Jacobfeuerborn: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1099.php">Brice Goglin: "Re: [hwloc-users] binding to thread"</a>
<li><strong>Reply:</strong> <a href="1099.php">Brice Goglin: "Re: [hwloc-users] binding to thread"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm trying to allocate and bind memory on the same NUMA domain as the calling thread.  The code I use is as follows.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* retrieve the single PU where the current thread actually runs within this process binding */
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int err = hwloc_get_last_cpu_location(topo, set, HWLOC_CPUBIND_THREAD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (err &lt; 0) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;failed to get last cpu location\n&quot;);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int idx = hwloc_bitmap_first(set);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;auto obj = hwloc_get_pu_obj_by_os_index(topo, idx);
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// get NUMA node containing PU
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;obj = hwloc_get_ancestor_obj_by_type(topo, HWLOC_OBJ_NODE, obj);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;void * buffer = hwloc_alloc_membind_nodeset(topo, len, obj-&gt;nodeset,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_MEMBIND_BIND,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_MEMBIND_THREAD | HWLOC_MEMBIND_STRICT);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!buffer) {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stderr, &quot;failed to manually allocate memory on node %u\n&quot;, obj-&gt;os_index);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>However, for some allocations, if I print out where the allocation was bound, it doesn't match the node of the thread.  Any ideas about what I'm doing wrong?
<br>
<p>Thanks,Rob Aulwes
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-1098/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1099.php">Brice Goglin: "Re: [hwloc-users] binding to thread"</a>
<li><strong>Previous message:</strong> <a href="1097.php">Dennis Jacobfeuerborn: "Re: [hwloc-users] hwloc-ls graphical output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1099.php">Brice Goglin: "Re: [hwloc-users] binding to thread"</a>
<li><strong>Reply:</strong> <a href="1099.php">Brice Goglin: "Re: [hwloc-users] binding to thread"</a>
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
