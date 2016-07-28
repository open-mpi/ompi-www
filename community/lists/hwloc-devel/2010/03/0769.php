<?
$subject_val = "[hwloc-devel] [PATCH] Replace readdir() with readdir_r()";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 17 17:38:58 2010" -->
<!-- isoreceived="20100317213858" -->
<!-- sent="Wed, 17 Mar 2010 22:38:46 +0100" -->
<!-- isosent="20100317213846" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="[hwloc-devel] [PATCH] Replace readdir() with readdir_r()" -->
<!-- id="1268861926-19792-1-git-send-email-bert.wesarg_at_googlemail.com" -->
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
<strong>Subject:</strong> [hwloc-devel] [PATCH] Replace readdir() with readdir_r()<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-17 17:38:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0770.php">Brice Goglin: "Re: [hwloc-devel] Problem with hwloc_linux_foreach_proc_tid()"</a>
<li><strong>Previous message:</strong> <a href="0768.php">Bert Wesarg: "[hwloc-devel] Problem with hwloc_linux_foreach_proc_tid()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0771.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<li><strong>Reply:</strong> <a href="0771.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Make the linux backend more re-entrant safe by using readdir_r() instead
<br>
of readdir().
<br>
<p>The size calculation for the struct dirent comes from the linux man-page.
<br>
<p>Regards,
<br>
Bert
<br>
<p><pre>
---
 src/topology-linux.c |   25 +++++++++++++++++++++----
 1 files changed, 21 insertions(+), 4 deletions(-)
diff --git a/src/topology-linux.c b/src/topology-linux.c
index 50fe2a3..7defcae 100644
--- a/src/topology-linux.c
+++ b/src/topology-linux.c
@@ -10,6 +10,7 @@
 #include &lt;private/private.h&gt;
 #include &lt;private/debug.h&gt;
 
+#include &lt;stddef.h&gt;
 #include &lt;limits.h&gt;
 #include &lt;stdio.h&gt;
 #include &lt;fcntl.h&gt;
@@ -192,6 +193,13 @@ hwloc_opendir(const char *p, int d __hwloc_attribute_unused)
 #endif
 }
 
+static inline struct dirent *
+hwloc_dirent_alloc(DIR *dir)
+{
+    return malloc(offsetof(struct dirent, d_name) +
+            fpathconf(dirfd(dir), _PC_NAME_MAX) + 1);
+}
+
 int
 hwloc_linux_set_tid_cpubind(hwloc_topology_t topology __hwloc_attribute_unused, pid_t tid, hwloc_const_cpuset_t hwloc_set)
 {
@@ -311,6 +319,7 @@ static int
 hwloc_linux_get_proc_tids(DIR *taskdir, unsigned *nr_tidsp, pid_t ** tidsp)
 {
   struct dirent *dirent;
+  struct dirent *dirent_storage;
   unsigned nr_tids = 0;
   unsigned max_tids = 32;
   pid_t *tids;
@@ -324,7 +333,8 @@ hwloc_linux_get_proc_tids(DIR *taskdir, unsigned *nr_tidsp, pid_t ** tidsp)
 
   rewinddir(taskdir);
 
-  while ((dirent = readdir(taskdir)) != NULL) {
+  dirent_storage = hwloc_dirent_alloc(taskdir);
+  while (readdir_r(taskdir, dirent_storage, &amp;dirent) == 0) {
     if (nr_tids == max_tids) {
       max_tids += 8;
       tids = realloc(tids, max_tids*sizeof(pid_t));
@@ -333,6 +343,7 @@ hwloc_linux_get_proc_tids(DIR *taskdir, unsigned *nr_tidsp, pid_t ** tidsp)
       continue;
     tids[nr_tids++] = atoi(dirent-&gt;d_name);
   }
+  free(dirent_storage);
 
   *nr_tidsp = nr_tids;
   *tidsp = tids;
@@ -1166,7 +1177,8 @@ look_sysfsnode(struct hwloc_topology *topology, const char *path, unsigned *foun
   dir = hwloc_opendir(path, topology-&gt;backend_params.sysfs.root_fd);
   if (dir)
     {
-      while ((dirent = readdir(dir)) != NULL)
+      struct dirent *dirent_storage = hwloc_dirent_alloc(dir);
+      while (readdir_r(dir, dirent_storage, &amp;dirent) == 0)
 	{
 	  unsigned long numnode;
 	  if (strncmp(dirent-&gt;d_name, &quot;node&quot;, 4))
@@ -1176,6 +1188,7 @@ look_sysfsnode(struct hwloc_topology *topology, const char *path, unsigned *foun
 	    nbnodes = numnode+1;
 	}
       closedir(dir);
+      free(dirent_storage);
     }
 
   if (nbnodes &lt;= 1)
@@ -1234,7 +1247,8 @@ look_sysfscpu(struct hwloc_topology *topology, const char *path)
   dir = hwloc_opendir(path, topology-&gt;backend_params.sysfs.root_fd);
   if (dir) {
     struct dirent *dirent;
-    while ((dirent = readdir(dir)) != NULL) {
+    struct dirent *dirent_storage = hwloc_dirent_alloc(dir);
+    while (readdir_r(dir, dirent_storage, &amp;dirent) == 0) {
       unsigned long cpu;
       char online[2];
 
@@ -1276,6 +1290,7 @@ look_sysfscpu(struct hwloc_topology *topology, const char *path)
       hwloc_cpuset_set(cpuset, cpu);
     }
     closedir(dir);
+    free(dirent_storage);
   }
 
   topology-&gt;support.discovery.proc = 1;
@@ -1614,6 +1629,7 @@ hwloc_look_linux(struct hwloc_topology *topology)
   if (nodes_dir) {
     /* Kerrighed */
     struct dirent *dirent;
+    struct dirent *dirent_storage = hwloc_dirent_alloc(nodes_dir);
     char path[128];
     hwloc_obj_t machine;
     hwloc_cpuset_t machine_online_set;
@@ -1625,7 +1641,7 @@ hwloc_look_linux(struct hwloc_topology *topology)
 
     /* No cpuset support for now.  */
     /* No sys support for now.  */
-    while ((dirent = readdir(nodes_dir)) != NULL) {
+    while (readdir_r(nodes_dir, dirent_storage, &amp;dirent) == 0) {
       unsigned long node;
       if (strncmp(dirent-&gt;d_name, &quot;node&quot;, 4))
 	continue;
@@ -1655,6 +1671,7 @@ hwloc_look_linux(struct hwloc_topology *topology)
 			 &amp;machine-&gt;attr-&gt;machine.dmi_board_name);
     }
     closedir(nodes_dir);
+    free(dirent_storage);
   } else {
     /* Get the machine memory attributes */
     hwloc_get_procfs_meminfo_info(topology, &quot;/proc/meminfo&quot;, &amp;topology-&gt;levels[0][0]-&gt;memory);
-- 
tg: (00cf78b..) bw/readdir_r (depends on: master)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0770.php">Brice Goglin: "Re: [hwloc-devel] Problem with hwloc_linux_foreach_proc_tid()"</a>
<li><strong>Previous message:</strong> <a href="0768.php">Bert Wesarg: "[hwloc-devel] Problem with hwloc_linux_foreach_proc_tid()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0771.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
<li><strong>Reply:</strong> <a href="0771.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Replace readdir() with readdir_r()"</a>
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
