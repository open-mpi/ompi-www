<?
$subject_val = "[hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 19 15:33:53 2009" -->
<!-- isoreceived="20091119203353" -->
<!-- sent="Thu, 19 Nov 2009 14:33:49 -0600" -->
<!-- isosent="20091119203349" -->
<!-- name="Michael Raymond" -->
<!-- email="mraymond_at_[hidden]" -->
<!-- subject="[hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2" -->
<!-- id="4B05ABAD.8040206_at_sgi.com" -->
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
<strong>Subject:</strong> [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2<br>
<strong>From:</strong> Michael Raymond (<em>mraymond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-19 15:33:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0403.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>Previous message:</strong> <a href="0401.php">Tony Breeds: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0403.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>Reply:</strong> <a href="0403.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>Maybe reply:</strong> <a href="0417.php">Chris Samuel: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;On one of my Linux machines I'm getting a crash if I do a
<br>
hwloc_topology_load() while ignoring HWLOC_OBJ_NODE.
<br>
<p>#0  hwloc_cpuset_orset (set=0x605410, modifier_set=0x0) at cpuset.c:410
<br>
#1  0x00007fc87f943146 in hwloc__setup_misc_level_from_distances (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;topology=0x604010, nbobjs=4, objs=0x7fff8228c750,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;_distances=0x7fff8228c700, depth=0) at topology.c:256
<br>
#2  0x00007fc87f945fe8 in look_sysfsnode (topology=0x604010,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;path=0x7fc87f9487c6 &quot;/sys/devices/system/node&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;admin_disabled_cpus_set=0x605080, admin_disabled_mems_set=0x605110)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at topology-linux.c:600
<br>
#3  0x00007fc87f946e0f in hwloc_look_linux (topology=0x604010)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at topology-linux.c:1052
<br>
#4  0x00007fc87f941fc9 in hwloc_topology_load (topology=0x604010)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at topology.c:904
<br>
#5  0x000000000040155d in main (argc=2, argv=0x7fff8228ccd8) at hwwalk.c:386
<br>
<p>&nbsp;&nbsp;The following patch fixes it.
<br>
<p>--- hwloc-0.9.2/src/topology-linux.c	2009-11-03 16:40:31.000000000 -0600
<br>
+++ hwloc-new//src/topology-linux.c	2009-11-19 14:20:43.630035434 -0600
<br>
@@ -536,6 +536,10 @@
<br>
&nbsp;&nbsp;&nbsp;struct dirent *dirent;
<br>
&nbsp;&nbsp;&nbsp;hwloc_obj_t node;
<br>
<p>+  if (topology-&gt;ignored_types[HWLOC_OBJ_NODE] ==
<br>
HWLOC_IGNORE_TYPE_ALWAYS) {
<br>
+	  return;
<br>
+  }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;dir = hwloc_opendir(path, topology-&gt;backend_params.sysfs.root_fd);
<br>
&nbsp;&nbsp;&nbsp;if (dir)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
<p>&nbsp;&nbsp;Also I'm concerned about the value of CPUSET_MASK_LEN in
<br>
hwloc_admin_disable_set_from_cpuset().  It's only 64 characters but our
<br>
Linux boxes can have to 2048 processors.  I don't think there's any harm
<br>
in bumping that up a little.
<br>
<p><pre>
-- 
Michael A. Raymond
Message Passing Toolkit Team
Silicon Graphics Inc
(651) 683-3434
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0403.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>Previous message:</strong> <a href="0401.php">Tony Breeds: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0403.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>Reply:</strong> <a href="0403.php">Samuel Thibault: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>Maybe reply:</strong> <a href="0417.php">Chris Samuel: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
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
