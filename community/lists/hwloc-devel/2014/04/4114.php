<?
$subject_val = "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 17:29:19 2014" -->
<!-- isoreceived="20140407212919" -->
<!-- sent="Mon, 7 Apr 2014 21:29:18 +0000" -->
<!-- isosent="20140407212918" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec" -->
<!-- id="C8FE2C98-A067-4DA5-868B-5DB4850BF17A_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="D2E095D7-DF8D-4307-A73D-CA061B9716A4_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-07 17:29:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4115.php">Brice Goglin: "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Previous message:</strong> <a href="4113.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT: hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>In reply to:</strong> <a href="4113.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT: hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4115.php">Brice Goglin: "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Reply:</strong> <a href="4115.php">Brice Goglin: "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 7, 2014, at 5:06 PM, &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ok, lemme look at tar -- there's a canonical way to copy dir trees with tar; let me look it up...
</span><br>
<p>Does this work for you?  It seems to do the Right Thing for me on OS X and Linux.
<br>
<p><p>diff --git a/config/distscript.sh b/config/distscript.sh
<br>
index d7bdfa4..68f1f8a 100755
<br>
--- a/config/distscript.sh
<br>
+++ b/config/distscript.sh
<br>
@@ -69,7 +69,7 @@ fi
<br>
&nbsp;# Trivial helper function
<br>
&nbsp;doit() {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;echo $*
<br>
-    $*
<br>
+    eval $*
<br>
&nbsp;}
<br>
&nbsp;
<br>
&nbsp;echo &quot;*** Copying doxygen-doc tree to dist...&quot;
<br>
@@ -77,7 +77,7 @@ echo &quot;*** Directory: srcdir: $srcdir, distdir: $distdir, pwd: 
<br>
&nbsp;doit mkdir -p $distdir/doc/doxygen-doc
<br>
&nbsp;doit chmod -R a=rwx $distdir/doc/doxygen-doc
<br>
&nbsp;doit rm -rf $distdir/doc/doxygen-doc
<br>
-doit cp -rpf $srcdir/doc/doxygen-doc $distdir/doc
<br>
+doit &quot;tar -c -C $srcdir -h -f - doc/doxygen-doc | tar -x -C $distdir -f -&quot;
<br>
&nbsp;
<br>
&nbsp;echo &quot;*** Copying new README&quot;
<br>
&nbsp;ls -lf $distdir/README
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
<li><strong>Next message:</strong> <a href="4115.php">Brice Goglin: "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Previous message:</strong> <a href="4113.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT: hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>In reply to:</strong> <a href="4113.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] GIT: hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4115.php">Brice Goglin: "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Reply:</strong> <a href="4115.php">Brice Goglin: "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
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
