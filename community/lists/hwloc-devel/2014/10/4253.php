<?
$subject_val = "[hwloc-devel] hwloc version number";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  1 20:50:03 2014" -->
<!-- isoreceived="20141002005003" -->
<!-- sent="Thu, 2 Oct 2014 00:50:02 +0000" -->
<!-- isosent="20141002005002" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc version number" -->
<!-- id="124CB694-E0A7-42B2-84C3-662381557F95_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc version number<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-01 20:50:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4254.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc version number"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/09/4252.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-239-gfe0111e)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4254.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc version number"</a>
<li><strong>Reply:</strong> <a href="4254.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc version number"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We just changed the version numbering scheme over in OMPI to always be &quot;a.b.c&quot;, even if c==0.  Do we want the same thing in hwloc?
<br>
<p>Right now, hwloc uses the old OMPI versioning scheme -- it's &quot;a.b.c&quot;, except when c==0, and then the version is &quot;a.b&quot;.
<br>
<p>It's a pretty simple change:
<br>
<p>diff --git a/config/hwloc_get_version.sh b/config/hwloc_get_version.sh
<br>
index 45139f4..4a3d201 100755
<br>
--- a/config/hwloc_get_version.sh
<br>
+++ b/config/hwloc_get_version.sh
<br>
@@ -43,12 +43,7 @@ else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p&quot; &lt; &quot;$srcfile&quot;`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;eval &quot;$ompi_vers&quot;
<br>
&nbsp;
<br>
-        # Only include the release version if it isn't 0
<br>
-        if test $HWLOC_RELEASE_VERSION -ne 0 ; then
<br>
-            HWLOC_VERSION=&quot;$HWLOC_MAJOR_VERSION.$HWLOC_MINOR_VERSION.$HWLOC_REL
<br>
-        else
<br>
-            HWLOC_VERSION=&quot;$HWLOC_MAJOR_VERSION.$HWLOC_MINOR_VERSION&quot;
<br>
-        fi
<br>
+        HWLOC_VERSION=&quot;$HWLOC_MAJOR_VERSION.$HWLOC_MINOR_VERSION&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HWLOC_VERSION=&quot;${HWLOC_VERSION}${HWLOC_GREEK_VERSION}&quot;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# If HWLOC_SNAPSHOT=1, then use HWLOC_SNAPSHOT_VERSION
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
<li><strong>Next message:</strong> <a href="4254.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc version number"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/09/4252.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-239-gfe0111e)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4254.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc version number"</a>
<li><strong>Reply:</strong> <a href="4254.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc version number"</a>
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
