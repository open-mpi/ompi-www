<?
$subject_val = "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 06:41:43 2014" -->
<!-- isoreceived="20140424104143" -->
<!-- sent="Thu, 24 Apr 2014 10:41:42 +0000" -->
<!-- isosent="20140424104142" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PATCH: Mark fd as close-on-exec" -->
<!-- id="B26F669D-4885-4523-AC54-DD35D2698F59_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA17-CBzKKGc5QcmmvTTXMqEh7jBuNs6ypE6R64F2S1JLFA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] PATCH: Mark fd as close-on-exec<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-24 06:41:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4145.php">Paul Hargrove: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Previous message:</strong> <a href="4143.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.9-11-gb654e19)"</a>
<li><strong>In reply to:</strong> <a href="4136.php">Paul Hargrove: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4145.php">Paul Hargrove: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Reply:</strong> <a href="4145.php">Paul Hargrove: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 23, 2014, at 6:38 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; -Paul [Who always does what the late W. Richard Stevens says to.]
</span><br>
<p>You make a good point, sir.  How about this?
<br>
<p>diff --git a/src/topology-linux.c b/src/topology-linux.c
<br>
index 25fb465..c9dc7e2 100644
<br>
--- a/src/topology-linux.c
<br>
+++ b/src/topology-linux.c
<br>
@@ -4568,7 +4568,7 @@ hwloc_linux_component_instantiate(struct hwloc_disc_compon
<br>
&nbsp;&nbsp;&nbsp;struct hwloc_backend *backend;
<br>
&nbsp;&nbsp;&nbsp;struct hwloc_linux_backend_data_s *data;
<br>
&nbsp;&nbsp;&nbsp;const char * fsroot_path = _data1;
<br>
-  int root = -1;
<br>
+  int flags, root = -1;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;backend = hwloc_backend_alloc(component);
<br>
&nbsp;&nbsp;&nbsp;if (!backend)
<br>
@@ -4602,8 +4602,11 @@ hwloc_linux_component_instantiate(struct hwloc_disc_compo
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;/* Since this fd stays open after hwloc returns, mark it as
<br>
-     close-on-exec so that children don't inherit it */
<br>
-  if (fcntl(root, F_SETFD, FD_CLOEXEC) == -1) {
<br>
+     close-on-exec so that children don't inherit it.  Stevens says
<br>
+     that we should GETFD before we SETFD, so we do. */
<br>
+  flags = fcntl(root, F_GETFD, 0);
<br>
+  if (-1 == flags ||
<br>
+      -1 == fcntl(root, F_SETFD, FD_CLOEXEC | flags)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;close(root);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;root = -1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto out_with_data;
<br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4145.php">Paul Hargrove: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Previous message:</strong> <a href="4143.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.9-11-gb654e19)"</a>
<li><strong>In reply to:</strong> <a href="4136.php">Paul Hargrove: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4145.php">Paul Hargrove: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
<li><strong>Reply:</strong> <a href="4145.php">Paul Hargrove: "Re: [hwloc-devel] PATCH: Mark fd as close-on-exec"</a>
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
