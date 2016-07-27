<?
$subject_val = "[hwloc-devel] PATCH: Mark fd as close-on-exec";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 23 17:05:59 2014" -->
<!-- isoreceived="20140423210559" -->
<!-- sent="Wed, 23 Apr 2014 21:05:55 +0000" -->
<!-- isosent="20140423210555" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] PATCH: Mark fd as close-on-exec" -->
<!-- id="FF62DB79-EC8D-44D7-9743-C849E7872798_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] PATCH: Mark fd as close-on-exec<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-23 17:05:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4130.php">Brice Goglin: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Previous message:</strong> <a href="4128.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.9-10-g1013f83)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4130.php">Brice Goglin: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Reply:</strong> <a href="4130.php">Brice Goglin: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Reply:</strong> <a href="4131.php">Samuel Thibault: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Any objections to this patch?  In OMPI, we're seeing this fd leak into child processes.
<br>
<p>diff --git a/src/topology-linux.c b/src/topology-linux.c
<br>
index e934d4c..8c5fba1 100644
<br>
--- a/src/topology-linux.c
<br>
+++ b/src/topology-linux.c
<br>
@@ -4601,6 +4601,13 @@ hwloc_linux_component_instantiate(struct hwloc_disc_compo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;data-&gt;is_real_fsroot = 0;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
+  /* Since this fd stays open after hwloc returns, mark it as
<br>
+     close-on-exec so that children don't inherit it */
<br>
+  if (fcntl(root, F_SETFD, FD_CLOEXEC) == -1) {
<br>
+      close(root);
<br>
+      root = -1;
<br>
+      goto out_with_data;
<br>
+  }
<br>
&nbsp;#else
<br>
&nbsp;&nbsp;&nbsp;if (strcmp(fsroot_path, &quot;/&quot;)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;errno = ENOSYS;
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4130.php">Brice Goglin: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Previous message:</strong> <a href="4128.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.9-10-g1013f83)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4130.php">Brice Goglin: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Reply:</strong> <a href="4130.php">Brice Goglin: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Reply:</strong> <a href="4131.php">Samuel Thibault: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
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
