<?
$subject_val = "[hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 12 10:10:02 2015" -->
<!-- isoreceived="20150512141002" -->
<!-- sent="Tue, 12 May 2015 16:09:55 +0200" -->
<!-- isosent="20150512140955" -->
<!-- name="Peter Korsgaard" -->
<!-- email="peter_at_[hidden]" -->
<!-- subject="[hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition" -->
<!-- id="1431439795-2068-1-git-send-email-peter_at_korsgaard.com" -->
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
<strong>Subject:</strong> [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition<br>
<strong>From:</strong> Peter Korsgaard (<em>peter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-12 10:09:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4443.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<li><strong>Previous message:</strong> <a href="4441.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.10.1-29-g39f17f8)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4443.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<li><strong>Reply:</strong> <a href="4443.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<li><strong>Reply:</strong> <a href="4444.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Make install contains a race condition in utils/hwloc, as both
<br>
install-exec-hook (through intall-exec) and install-data trigger
<br>
install-man:
<br>
<p><a href="http://autobuild.buildroot.net/results/414/41403f8ce4751a27dd1bb9c43f5a97895dea3980/build-end.log">http://autobuild.buildroot.net/results/414/41403f8ce4751a27dd1bb9c43f5a97895dea3980/build-end.log</a>
<br>
<p>The install-exec-hook target doesn't do anything with the manual pages, so
<br>
fix the race condition by dropping the dependency.
<br>
<p>Signed-off-by: Peter Korsgaard &lt;peter_at_[hidden]&gt;
<br>
<pre>
---
 utils/hwloc/Makefile.am | 2 +-
 1 file changed, 1 insertion(+), 1 deletion(-)
diff --git a/utils/hwloc/Makefile.am b/utils/hwloc/Makefile.am
index b7f78d3..f20e58c 100644
--- a/utils/hwloc/Makefile.am
+++ b/utils/hwloc/Makefile.am
@@ -106,7 +106,7 @@ endif HWLOC_HAVE_LINUX
 	  -e 's/#HWLOC_DATE#/@HWLOC_RELEASE_DATE@/g' \
 	  &gt; $@ &lt; $&lt;
 
-install-exec-hook: install-man
+install-exec-hook:
 	$(SED) -e 's/HWLOC_top_builddir\/utils\/hwloc/bindir/' -e 's/HWLOC_top_builddir\/utils\/lstopo/bindir/' -e '/HWLOC_top_builddir/d' $(DESTDIR)$(bindir)/hwloc-compress-dir &gt; $(DESTDIR)$(bindir)/hwloc-compress-dir.tmp &amp;&amp; mv -f $(DESTDIR)$(bindir)/hwloc-compress-dir.tmp $(DESTDIR)$(bindir)/hwloc-compress-dir
 	chmod +x $(DESTDIR)$(bindir)/hwloc-compress-dir
 if HWLOC_HAVE_LINUX
-- 
2.1.4
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4443.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<li><strong>Previous message:</strong> <a href="4441.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.10.1-29-g39f17f8)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4443.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<li><strong>Reply:</strong> <a href="4443.php">Brice Goglin: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
<li><strong>Reply:</strong> <a href="4444.php">Samuel Thibault: "Re: [hwloc-devel] [PATCH] utils/hwloc/Makefile.am: fix install-man race condition"</a>
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
