<?
$subject_val = "[hwloc-devel] Problem with hwloc_linux_foreach_proc_tid()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 17 16:41:44 2010" -->
<!-- isoreceived="20100317204144" -->
<!-- sent="Wed, 17 Mar 2010 21:41:39 +0100" -->
<!-- isosent="20100317204139" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="[hwloc-devel] Problem with hwloc_linux_foreach_proc_tid()" -->
<!-- id="36ca99e91003171341g479de4a2pc93a867d86f09b8f_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [hwloc-devel] Problem with hwloc_linux_foreach_proc_tid()<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-17 16:41:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0769.php">Bert Wesarg: "[hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<li><strong>Previous message:</strong> <a href="0767.php">Bert Wesarg: "Re: [hwloc-devel] Proposal for cpuset API change"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0770.php">Brice Goglin: "Re: [hwloc-devel] Problem with hwloc_linux_foreach_proc_tid()"</a>
<li><strong>Reply:</strong> <a href="0770.php">Brice Goglin: "Re: [hwloc-devel] Problem with hwloc_linux_foreach_proc_tid()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I have a problem with this retry algorithm of
<br>
hwloc_linux_foreach_proc_tid(). For example with the
<br>
hwloc_linux_get_pid_cpubind() function. hwloc_linux_get_pid_cpubind()
<br>
should collect all affinity mask from the threads. But if the retry is
<br>
triggered and the new tid list does not have a tid anymore which had
<br>
an affinity mask which is not a subset of the collected one in the
<br>
first run. The end result is inaccurate.
<br>
<p>A small example:
<br>
<p>tid A has affinity 0x1
<br>
tid B has affinity 0x2
<br>
<p>After the first round the affinity mask is 0x3. Now tid A exits and
<br>
the retry check will be trigged. The end affinity mask will still be
<br>
0x3. Because the mask will not be reset to 0.
<br>
<p>Here is a proposal to fix this. It passes a new argument to the
<br>
callback function, which is only true for the first tid. So this can
<br>
be used to zero the cpuset.
<br>
<p>Regards,
<br>
Bert
<br>
<p><pre>
---
diff --git i/src/topology-linux.c w/src/topology-linux.c
index 06d1739..9366fa5 100644
--- i/src/topology-linux.c
+++ w/src/topology-linux.c
@@ -340,23 +340,26 @@ hwloc_linux_get_proc_tids(DIR *taskdir, unsigned
*nr_tidsp, pid_t ** tidsp)
 }
 /* Callbacks for binding each process sub-tid */
-typedef int (*hwloc_linux_foreach_proc_tid_cb_t)(hwloc_topology_t
topology, pid_t tid, void *data, int policy);
+typedef int (*hwloc_linux_foreach_proc_tid_cb_t)(hwloc_topology_t
topology, pid_t tid, void *data, int policy, int first);
 static int
-hwloc_linux_foreach_proc_tid_set_cpubind_cb(hwloc_topology_t
topology, pid_t tid, void *data, int policy __hwloc_attribute_unused)
+hwloc_linux_foreach_proc_tid_set_cpubind_cb(hwloc_topology_t
topology, pid_t tid, void *data, int policy __hwloc_attribute_unused,
int first __hwloc_attribute_unused)
 {
   hwloc_cpuset_t cpuset = (hwloc_cpuset_t) data;
   return hwloc_linux_set_tid_cpubind(topology, tid, cpuset);
 }
 static int
-hwloc_linux_foreach_proc_tid_get_cpubind_cb(hwloc_topology_t
topology, pid_t tid, void *data, int policy)
+hwloc_linux_foreach_proc_tid_get_cpubind_cb(hwloc_topology_t
topology, pid_t tid, void *data, int policy, int first)
 {
   hwloc_cpuset_t cpuset = (hwloc_cpuset_t) data;
   hwloc_cpuset_t tidset = hwloc_linux_get_tid_cpubind(topology, tid);
   if (!tidset)
     return -1;
+  if (first)
+    hwloc_cpuset_zero(cpuset);
+
   if (policy &amp; HWLOC_CPUBIND_STRICT) {
     /* if STRICT, we want all threads to have the same binding */
     if (hwloc_cpuset_iszero(cpuset)) {
@@ -386,6 +389,7 @@ hwloc_linux_foreach_proc_tid(hwloc_topology_t topology,
   DIR *taskdir;
   pid_t *tids, *newtids;
   unsigned i, nr, newnr;
+  int first;
   int err;
   if (pid)
@@ -406,9 +410,11 @@ hwloc_linux_foreach_proc_tid(hwloc_topology_t topology,
     goto out_with_dir;
  retry:
+  first = 1;
   /* apply the callback to all threads */
   for(i=0; i&lt;nr; i++) {
-    err = cb(topology, tids[i], data, policy);
+    err = cb(topology, tids[i], data, policy, first);
+    first = 0;
     if (err &lt; 0)
       goto out_with_tids;
   }
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0769.php">Bert Wesarg: "[hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<li><strong>Previous message:</strong> <a href="0767.php">Bert Wesarg: "Re: [hwloc-devel] Proposal for cpuset API change"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0770.php">Brice Goglin: "Re: [hwloc-devel] Problem with hwloc_linux_foreach_proc_tid()"</a>
<li><strong>Reply:</strong> <a href="0770.php">Brice Goglin: "Re: [hwloc-devel] Problem with hwloc_linux_foreach_proc_tid()"</a>
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
