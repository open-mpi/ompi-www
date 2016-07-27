<?
$subject_val = "[hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 11 17:31:05 2010" -->
<!-- isoreceived="20100311223105" -->
<!-- sent="Thu, 11 Mar 2010 23:30:57 +0100" -->
<!-- isosent="20100311223057" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="[hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines" -->
<!-- id="1268346657-8983-1-git-send-email-bert.wesarg_at_googlemail.com" -->
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
<strong>Subject:</strong> [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-11 17:30:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0733.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Previous message:</strong> <a href="0731.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Use the #links as an estimate for the #tids in a tasks directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0733.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Reply:</strong> <a href="0733.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This does multiple things at once:
<br>
<p>&nbsp;I) it uses getmntent_r(3) to parse lines from /proc/mounts
<br>
<p>&nbsp;II) while doing this, it uses the correct un-escape rules for this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;file format.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The current code converts &quot;\ &quot; to &quot; &quot;, while linux uses a &quot;\040&quot; to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot; &quot; escaping rule.
<br>
<p>&nbsp;III) it accurately finds the cpuset option for a cgroups mount point.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The current code would fail if &quot;cpuset&quot; would be a substring
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of an other mount option.
<br>
<p>I'm inclined to remove the old code. But maybe there is a reason for the
<br>
current handmade parsing and un-escape code.
<br>
<p>Regards,
<br>
Bert
<br>
<p><pre>
---
 config/hwloc.m4      |    3 +++
 src/topology-linux.c |   27 +++++++++++++++++++++++++++
 2 files changed, 30 insertions(+), 0 deletions(-)
diff --git a/config/hwloc.m4 b/config/hwloc.m4
index 602f112..a893616 100644
--- a/config/hwloc.m4
+++ b/config/hwloc.m4
@@ -275,6 +275,9 @@ AC_DEFUN([HWLOC_INIT],[
           ])
       ], [], [[#include &lt;curses.h&gt;]])
     ])
+    AC_CHECK_HEADERS([mntent.h], [
+      AC_CHECK_FUNCS([getmntent_r])
+    ])
     LIBS=&quot;$old_LIBS&quot;
 
     AC_CHECK_TYPES([KAFFINITY,
diff --git a/src/topology-linux.c b/src/topology-linux.c
index f8d22d3..0fb9446 100644
--- a/src/topology-linux.c
+++ b/src/topology-linux.c
@@ -21,6 +21,9 @@
 #include &lt;sys/stat.h&gt;
 #include &lt;sched.h&gt;
 #include &lt;pthread.h&gt;
+#if defined(HAVE_GETMNTENT_R) &amp;&amp; HAVE_GETMNTENT_R
+#include &lt;mntent.h&gt;
+#endif
 
 #ifndef HWLOC_HAVE_CPU_SET
 /* libc doesn't have support for sched_setaffinity, build system call
@@ -755,6 +758,9 @@ hwloc_find_linux_cpuset_mntpnt(char **cgroup_mntpnt, char **cpuset_mntpnt, int f
 #define PROC_MOUNT_LINE_LEN 128
   char line[PROC_MOUNT_LINE_LEN];
   FILE *fd;
+#if defined(HAVE_GETMNTENT_R) &amp;&amp; HAVE_GETMNTENT_R
+  struct mntent ent;
+#endif
 
   *cgroup_mntpnt = NULL;
   *cpuset_mntpnt = NULL;
@@ -763,6 +769,26 @@ hwloc_find_linux_cpuset_mntpnt(char **cgroup_mntpnt, char **cpuset_mntpnt, int f
   if (!fd)
     return;
 
+#if defined(HAVE_GETMNTENT_R) &amp;&amp; HAVE_GETMNTENT_R
+  while (getmntent_r(fd, &amp;ent, line, sizeof(line))) {
+    if (!strcmp(ent.mnt_type, &quot;cpuset&quot;)) {
+      /* found a cpuset mntpnt */
+      hwloc_debug(&quot;Found cpuset mount point on %s\n&quot;, ent.mnt_dir);
+      *cpuset_mntpnt = strdup(ent.mnt_dir);
+      break;
+    } else if (!strcmp(ent.mnt_type, &quot;cgroup&quot;)) {
+      /* found a cgroup mntpnt, look for a cpuset options */
+      char *opt, *opts = ent.mnt_opts;
+      while ((opt = strsep(&amp;opts, &quot;,&quot;)) &amp;&amp; strcmp(opt, &quot;cpuset&quot;))
+        ; /* continue */
+      if (opt) {
+	hwloc_debug(&quot;Found cgroup/cpuset mount point on %s\n&quot;, ent.mnt_dir);
+	*cgroup_mntpnt = strdup(ent.mnt_dir);
+	break;
+      }
+    }
+  }
+#else
   while (fgets(line, sizeof(line), fd)) {
     char *path;
     char *type;
@@ -798,6 +824,7 @@ hwloc_find_linux_cpuset_mntpnt(char **cgroup_mntpnt, char **cpuset_mntpnt, int f
       break;
     }
   }
+#endif
 
   fclose(fd);
 }
-- 
tg: (e66476e..) bw/getmntent (depends on: master)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0733.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Previous message:</strong> <a href="0731.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Use the #links as an estimate for the #tids in a tasks directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0733.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Reply:</strong> <a href="0733.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
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
