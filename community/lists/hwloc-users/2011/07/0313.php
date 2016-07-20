<?
$subject_val = "[hwloc-users] on using hwloc_get_area_membind_nodeset";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  5 14:13:13 2011" -->
<!-- isoreceived="20110705181313" -->
<!-- sent="Tue, 5 Jul 2011 20:13:08 +0200" -->
<!-- isosent="20110705181308" -->
<!-- name="Alfredo Buttari" -->
<!-- email="alfredo.buttari_at_[hidden]" -->
<!-- subject="[hwloc-users] on using hwloc_get_area_membind_nodeset" -->
<!-- id="CAA0LXa=2MrgVjQVv=sB7Mjm7YYjeTnFjrbXxhxOyTUnnomWqfw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [hwloc-users] on using hwloc_get_area_membind_nodeset<br>
<strong>From:</strong> Alfredo Buttari (<em>alfredo.buttari_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-05 14:13:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0314.php">Brice Goglin: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>Previous message:</strong> <a href="0312.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0314.php">Brice Goglin: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>Reply:</strong> <a href="0314.php">Brice Goglin: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>Maybe reply:</strong> <a href="0315.php">Samuel Thibault: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
if I understand correctly this routine can tell on which NUMA node(s)
<br>
a specific memory area resides, is this correct?
<br>
Will this routine work on any memory area allocated with any
<br>
allocation routine other than those provided by hwloc?
<br>
<p>Can anybody provide a simple example of usage of this routine?
<br>
<p>I tried something simple like this
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;hwloc_topology_t topology;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int *a;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_membind_policy_t *policy;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_nodeset_t nodeset;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;hwloc_topology_init(&amp;topology);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hwloc_topology_load(topology);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;a = (int *) malloc(1000*sizeof(int));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;nodeset = hwloc_bitmap_alloc();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ret = hwloc_get_area_membind_nodeset( topology, a,
<br>
1000*sizeof(int), nodeset, policy, HWLOC_MEMBIND_STRICT);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;---&gt; %d\n&quot;,ret);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;hwloc_topology_destroy(topology);
<br>
<p><p><p>but I'm always getting a -1 in ret. What's wrong?
<br>
<p>Thanks in advance
<br>
<p>Alfredo
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0314.php">Brice Goglin: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>Previous message:</strong> <a href="0312.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0314.php">Brice Goglin: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>Reply:</strong> <a href="0314.php">Brice Goglin: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>Maybe reply:</strong> <a href="0315.php">Samuel Thibault: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
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
