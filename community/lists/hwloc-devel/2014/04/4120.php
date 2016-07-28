<?
$subject_val = "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  7 18:09:22 2014" -->
<!-- isoreceived="20140407220922" -->
<!-- sent="Mon, 7 Apr 2014 22:09:09 +0000" -->
<!-- isosent="20140407220909" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec" -->
<!-- id="6DF1B378-604F-4DB3-9539-E66112B9567A_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53432103.9090003_at_inria.fr" -->
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
<strong>Date:</strong> 2014-04-07 18:09:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4121.php">Brice Goglin: "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Previous message:</strong> <a href="4119.php">Brice Goglin: "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>In reply to:</strong> <a href="4119.php">Brice Goglin: "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4121.php">Brice Goglin: "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Reply:</strong> <a href="4121.php">Brice Goglin: "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How about this:
<br>
<p>diff --git a/config/distscript.sh b/config/distscript.sh
<br>
index d7bdfa4..9f05a2f 100755
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
@@ -77,7 +77,26 @@ echo &quot;*** Directory: srcdir: $srcdir, distdir: $distdir, pwd:
<br>
&nbsp;doit mkdir -p $distdir/doc/doxygen-doc
<br>
&nbsp;doit chmod -R a=rwx $distdir/doc/doxygen-doc
<br>
&nbsp;doit rm -rf $distdir/doc/doxygen-doc
<br>
-doit cp -rpf $srcdir/doc/doxygen-doc $distdir/doc
<br>
+
<br>
+# We want to copy the entire directory tree to the distdir.  In some
<br>
+# cases, doxygen-doc may be a sym link, so we want the copy to follow
<br>
+# the sym links.  It's a bit of a portability nightmare, so try a few
<br>
+# different ways...
<br>
+# This seems to work on OS X and Linux (but not Solaris)
<br>
+doit &quot;tar c -C $srcdir -h -f - doc/doxygen-doc | tar x -C $distdir -f -&quot;
<br>
+if test ! -d $distdir/doc/doxygen-doc; then
<br>
+    # This seems to work on Linux and Solaris
<br>
+    doit cp -rpf $srcdir/doc/doxygen-doc/ $distdir/doc
<br>
+fi
<br>
+if test ! -d $distdir/doc/doxygen-doc; then
<br>
+    # This seems to work on OS X (probably redundant, but we know it works)
<br>
+    doit cp -rpf $srcdir/doc/doxygen-doc $distdir/doc
<br>
+fi
<br>
+# If we still failed, just error out
<br>
+if test ! -d $distdir/doc/doxygen-doc; then
<br>
+    echo &quot;ERROR: Cannot seem to copy a directory to the distdir :-(&quot;
<br>
+    exit 1
<br>
+fi
<br>
&nbsp;
<br>
&nbsp;echo &quot;*** Copying new README&quot;
<br>
&nbsp;ls -lf $distdir/README
<br>
<p><p><p><p><p><p><p>On Apr 7, 2014, at 6:04 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; My jenkins does make distcheck on some Linux and only make check on
</span><br>
<span class="quotelev1">&gt; others, so it should be fine on my side.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 08/04/2014 00:01, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Do we care about &quot;make dist&quot; on Solaris?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 7, 2014, at 5:57 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Same error.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 07/04/2014 23:43, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How about:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tar c -C /home/ci/hwloc-gitclone -h -f - doc/doxygen-doc | tar x -C /home/ci/hwloc-gitclone/build/hwloc-gitclone -f -
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 7, 2014, at 5:36 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Works on my Linux but fails on Solaris:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tar -c -C /home/ci/hwloc-gitclone -h -f - doc/doxygen-doc | tar -x -C
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /home/ci/hwloc-gitclone/build/hwloc-gitclone -f -
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tar: /dev/rmt/0: No such file or directory
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Le 07/04/2014 23:29, Jeff Squyres (jsquyres) a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --- a/config/distscript.sh
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +++ b/config/distscript.sh
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; @@ -69,7 +69,7 @@ fi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; # Trivial helper function
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; doit() {
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;   echo $*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -    $*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +    eval $*
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; echo &quot;*** Copying doxygen-doc tree to dist...&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; @@ -77,7 +77,7 @@ echo &quot;*** Directory: srcdir: $srcdir, distdir: $distdir, pwd: 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; doit mkdir -p $distdir/doc/doxygen-doc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; doit chmod -R a=rwx $distdir/doc/doxygen-doc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; doit rm -rf $distdir/doc/doxygen-doc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -doit cp -rpf $srcdir/doc/doxygen-doc $distdir/doc
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; +doit &quot;tar -c -C $srcdir -h -f - doc/doxygen-doc | tar -x -C $distdir -f -&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; echo &quot;*** Copying new README&quot;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ls -lf $distdir/README
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
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
<li><strong>Next message:</strong> <a href="4121.php">Brice Goglin: "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Previous message:</strong> <a href="4119.php">Brice Goglin: "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>In reply to:</strong> <a href="4119.php">Brice Goglin: "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4121.php">Brice Goglin: "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
<li><strong>Reply:</strong> <a href="4121.php">Brice Goglin: "Re: [hwloc-devel] GIT:	hwloc	branch	master	updated.	0e6fe307c10d47efee3fb95c50aee9c0f01bc8ec"</a>
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
