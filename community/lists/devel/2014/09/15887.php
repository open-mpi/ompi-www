<?
$subject_val = "[OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 13:38:31 2014" -->
<!-- isoreceived="20140922173831" -->
<!-- sent="Mon, 22 Sep 2014 17:38:30 +0000" -->
<!-- isosent="20140922173830" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: &amp;quot;v1.9.0&amp;quot; (vs. &amp;quot;v1.9&amp;quot;)" -->
<!-- id="DB473054-6C3F-4894-8CD3-8B9266AB8E6E_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-22 13:38:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15888.php">Aurélien Bouteiller: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>Previous message:</strong> <a href="15886.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15888.php">Aurélien Bouteiller: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>Reply:</strong> <a href="15888.php">Aurélien Bouteiller: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Change our version numbering scheme to always include all 3 numbers -- even when the 3rd number is 0.
<br>
<p>WHY: I think we made a mistake years ago when we designed the version number scheme.  It's weird that we drop the last digit when it is 0.
<br>
<p>WHERE: Trivial patch.  See below.
<br>
<p>WHEN: Tuesday teleconf next week, 30 Sep 2014
<br>
<p>MORE DETAIL:
<br>
<p>Right now, per <a href="http://www.open-mpi.org/software/ompi/versions/">http://www.open-mpi.org/software/ompi/versions/</a>, when the 3rd digit of our version number is zero, we drop it in the filename and various other outputs (e.g., ompi_info).  For example, we have:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;openmpi-1.8.tar.bz2
<br>
instead of openmpi-1.8.0.tar.bz2
<br>
<p>Honestly, I think that's just a little weird.  I think I was the one who advocated for dropping the 0 way back in the beginning, but I'm now changing my mind.  :-)
<br>
<p>Making this change will be immediately obvious in the filename of the trunk nightly tarball.  It won't affect the v1.8 series (or any prior series), because they're all well past their .0 releases.  But it will mean that the first release in the v1.9 series will be &quot;v1.9.0&quot;.
<br>
<p>Finally, note that this will also apply to all version numbers shown in ompi_info (e.g., components and projects).
<br>
<p>Here's the diff:
<br>
<p>Index: config/opal_get_version.m4
<br>
===================================================================
<br>
--- config/opal_get_version.m4	(revision 32771)
<br>
+++ config/opal_get_version.m4	(working copy)
<br>
@@ -60,12 +60,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p&quot; &lt; &quot;$1&quot;`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[eval] &quot;$opal_vers&quot;
<br>
&nbsp;
<br>
-        # Only print release version if it isn't 0
<br>
-        if test $$2_RELEASE_VERSION -ne 0 ; then
<br>
-            $2_VERSION=&quot;$$2_MAJOR_VERSION.$$2_MINOR_VERSION.$$2_RELEASE_VERSION&quot;
<br>
-        else
<br>
-            $2_VERSION=&quot;$$2_MAJOR_VERSION.$$2_MINOR_VERSION&quot;
<br>
-        fi
<br>
+        $2_VERSION=&quot;$$2_MAJOR_VERSION.$$2_MINOR_VERSION.$$2_RELEASE_VERSION&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$2_VERSION=&quot;${$2_VERSION}${$2_GREEK_VERSION}&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$2_BASE_VERSION=$$2_VERSION
<br>
&nbsp;
<br>
Index: opal/runtime/opal_info_support.c
<br>
===================================================================
<br>
--- opal/runtime/opal_info_support.c	(revision 32771)
<br>
+++ opal/runtime/opal_info_support.c	(working copy)
<br>
@@ -1099,14 +1099,8 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;temp[BUFSIZ - 1] = '\0';
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (0 == strcmp(scope, opal_info_ver_full) ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0 == strcmp(scope, opal_info_ver_all)) {
<br>
-        snprintf(temp, BUFSIZ - 1, &quot;%d.%d&quot;, major, minor);
<br>
+        snprintf(temp, BUFSIZ - 1, &quot;%d.%d.%d&quot;, major, minor, release);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;str = strdup(temp);
<br>
-        if (release &gt; 0) {
<br>
-            snprintf(temp, BUFSIZ - 1, &quot;.%d&quot;, release);
<br>
-            asprintf(&amp;tmp, &quot;%s%s&quot;, str, temp);
<br>
-            free(str);
<br>
-            str = tmp;
<br>
-        }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL != greek) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;asprintf(&amp;tmp, &quot;%s%s&quot;, str, greek);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;free(str);
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
<li><strong>Next message:</strong> <a href="15888.php">Aurélien Bouteiller: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>Previous message:</strong> <a href="15886.php">Ralph Castain: "Re: [OMPI devel] race condition in oob/tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15888.php">Aurélien Bouteiller: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
<li><strong>Reply:</strong> <a href="15888.php">Aurélien Bouteiller: "Re: [OMPI devel] RFC: &quot;v1.9.0&quot; (vs. &quot;v1.9&quot;)"</a>
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
