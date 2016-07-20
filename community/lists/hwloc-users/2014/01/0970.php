<?
$subject_val = "[hwloc-users] Finding closest host bridge";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 28 17:16:45 2014" -->
<!-- isoreceived="20140128221645" -->
<!-- sent="Tue, 28 Jan 2014 14:12:21 -0800" -->
<!-- isosent="20140128221221" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[hwloc-users] Finding closest host bridge" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F3601917D34A_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> [hwloc-users] Finding closest host bridge<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-28 17:12:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0971.php">Brice Goglin: "Re: [hwloc-users] Finding closest host bridge"</a>
<li><strong>Previous message:</strong> <a href="0969.php">Jeff Hammond: "Re: [hwloc-users] CPU info on ARM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0971.php">Brice Goglin: "Re: [hwloc-users] Finding closest host bridge"</a>
<li><strong>Reply:</strong> <a href="0971.php">Brice Goglin: "Re: [hwloc-users] Finding closest host bridge"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I cam up with this snippet of code so I could find the PCI devices closest to where a process was running.  This works fine on a NUMA node.  However, on a non-NUMA node, it appears that the HWLOC bridge is not connected to anything.  Therefore, I believe I just need to do something like hwloc_get_obj_by_type(topology, HWLOC_OBJ_BRIDGE, 0) when running on a non-NUMA node.  Does that seem correct?  Should I special case where I do not find a HWLOC_OBJ_NODE object?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;retval = hwloc_topology_init(&amp;topology);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;retval = hwloc_topology_set_flags(topology, flags);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;retval = hwloc_topology_load(topology);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;newset = hwloc_bitmap_alloc();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;retval = hwloc_get_last_cpu_location(topology, newset, 0);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* Get the object that contains the cpuset */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;node = hwloc_get_first_largest_obj_inside_cpuset(topology, newset);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* Climb up from that object until we find HWLOC_OBJ_NODE */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;while (node-&gt;type != HWLOC_OBJ_NODE) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node = node-&gt;parent;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;/* Now look for the HWLOC_OBJ_BRIDGE.  All PCI busses hanging off the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* node will have one of these */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;bridge = hwloc_get_next_child(topology, node, NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;while (bridge != NULL &amp;&amp; bridge-&gt;type != HWLOC_OBJ_BRIDGE) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bridge = hwloc_get_next_child(topology, node, bridge);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0971.php">Brice Goglin: "Re: [hwloc-users] Finding closest host bridge"</a>
<li><strong>Previous message:</strong> <a href="0969.php">Jeff Hammond: "Re: [hwloc-users] CPU info on ARM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0971.php">Brice Goglin: "Re: [hwloc-users] Finding closest host bridge"</a>
<li><strong>Reply:</strong> <a href="0971.php">Brice Goglin: "Re: [hwloc-users] Finding closest host bridge"</a>
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
