<?
$subject_val = "[hwloc-devel] [PATCH] Use the #links as an estimate for the #tids in a tasks directory";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 18:31:02 2010" -->
<!-- isoreceived="20100310233102" -->
<!-- sent="Thu, 11 Mar 2010 00:30:57 +0100" -->
<!-- isosent="20100310233057" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="[hwloc-devel] [PATCH] Use the #links as an estimate for the #tids in a tasks directory" -->
<!-- id="36ca99e91003101530x32b9fc46t1ef2ce9506dbbbbf_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [hwloc-devel] [PATCH] Use the #links as an estimate for the #tids in a tasks directory<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-10 18:30:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0730.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1822)"</a>
<li><strong>Previous message:</strong> <a href="0728.php">Brice Goglin: "Re: [hwloc-devel] Why are misc objects ignored by default?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0731.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Use the #links as an estimate for the #tids in a tasks directory"</a>
<li><strong>Reply:</strong> <a href="0731.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Use the #links as an estimate for the #tids in a tasks directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When reading all tids from a process in
<br>
topology-linux.c::hwloc_linux_get_proc_tids(), it used a
<br>
exponential realloc algorithm to increase the storage size for the tids.
<br>
<p>Now it uses the number of links (.st_nlinks) from a stat() call to the
<br>
directory (actually a fstat() call to the dirfd() of the opened
<br>
directory) as a good estimate for the initial size of the storage
<br>
vector and than a small linear expansion rule.
<br>
<p>Regards,
<br>
Bert
<br>
<p>Index: src/topology-linux.c
<br>
===================================================================
<br>
--- src/topology-linux.c        (revision 1821)
<br>
+++ src/topology-linux.c        (working copy)
<br>
@@ -18,6 +18,7 @@
<br>
&nbsp;#include &lt;dirent.h&gt;
<br>
&nbsp;#include &lt;unistd.h&gt;
<br>
&nbsp;#include &lt;sys/types.h&gt;
<br>
+#include &lt;sys/stat.h&gt;
<br>
&nbsp;#include &lt;sched.h&gt;
<br>
&nbsp;#include &lt;pthread.h&gt;
<br>
<p>@@ -312,13 +313,20 @@
<br>
&nbsp;&nbsp;&nbsp;struct dirent *dirent;
<br>
&nbsp;&nbsp;&nbsp;unsigned nr_tids = 0;
<br>
&nbsp;&nbsp;&nbsp;unsigned max_tids = 32;
<br>
-  pid_t *tids = malloc(max_tids*sizeof(pid_t));
<br>
+  pid_t *tids;
<br>
+  struct stat sb;
<br>
<p>+  /* take the number of links as a good estimate for the number of tids */
<br>
+  if (fstat(dirfd(taskdir), &amp;sb) == 0)
<br>
+    max_tids = sb.st_nlink;
<br>
+
<br>
+  tids = malloc(max_tids*sizeof(pid_t));
<br>
+
<br>
&nbsp;&nbsp;&nbsp;rewinddir(taskdir);
<br>
<p>&nbsp;&nbsp;&nbsp;while ((dirent = readdir(taskdir)) != NULL) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (nr_tids == max_tids) {
<br>
-      max_tids *= 2;
<br>
+      max_tids += 8;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tids = realloc(tids, max_tids*sizeof(pid_t));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!strcmp(dirent-&gt;d_name, &quot;.&quot;) || !strcmp(dirent-&gt;d_name, &quot;..&quot;))
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0730.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1822)"</a>
<li><strong>Previous message:</strong> <a href="0728.php">Brice Goglin: "Re: [hwloc-devel] Why are misc objects ignored by default?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0731.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Use the #links as an estimate for the #tids in a tasks directory"</a>
<li><strong>Reply:</strong> <a href="0731.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] Use the #links as an estimate for the #tids in a tasks directory"</a>
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
