<?
$subject_val = "[OMPI devel] RFC: enable the use of source in platform files";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  9 17:09:34 2012" -->
<!-- isoreceived="20120709210934" -->
<!-- sent="Mon, 9 Jul 2012 15:09:25 -0600" -->
<!-- isosent="20120709210925" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: enable the use of source in platform files" -->
<!-- id="20120709210925.GD81027_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: enable the use of source in platform files<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-09 17:09:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11261.php">Jeff Squyres: "Re: [OMPI devel] ibm/collective/bcast_f08.f90"</a>
<li><strong>Previous message:</strong> <a href="11259.php">Jeff Squyres: "[OMPI devel] Fwd: CVE-2012-3386 Automake security fix for 'make distcheck'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11262.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Reply:</strong> <a href="11262.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When: Thurs, Jul 12, 5 PM MDT
<br>
<p>Why: Useful feature. Enabling source may cut down on the maintenance required to keep platform files up to date.
<br>
<p>How: Change directories to the platform file's directory before sourcing it (not after).
<br>
<p>diff --git a/config/ompi_load_platform.m4 b/config/ompi_load_platform.m4
<br>
index 7231f83..250e7d8 100644
<br>
--- a/config/ompi_load_platform.m4
<br>
+++ b/config/ompi_load_platform.m4
<br>
@@ -50,7 +50,18 @@ AC_DEFUN([OMPI_LOAD_PLATFORM], [
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# eval into environment
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_LOG_MSG([Loading environment file $with_platform, with contents below])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_LOG_FILE([$with_platform])
<br>
-        . &quot;$with_platform&quot;
<br>
+
<br>
+        # setup by getting full pathname for the platform directories
<br>
+        platform_base=&quot;`dirname $with_platform`&quot;
<br>
+        platform_file=&quot;`basename $with_platform`&quot;
<br>
+        # get full pathname of where we are so we can return
<br>
+        platform_savedir=&quot;`pwd`&quot;
<br>
+        # go to where the platform file is located
<br>
+        cd &quot;$platform_base&quot;
<br>
+        # get the full path to this location
<br>
+        platform_file_dir=`pwd`
<br>
+
<br>
+        . &quot;$platform_file&quot;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# see if they left us a name
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$OMPI_PLATFORM_LOADED&quot; != &quot;&quot; ; then
<br>
@@ -63,14 +74,6 @@ AC_DEFUN([OMPI_LOAD_PLATFORM], [
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# look for default mca param file
<br>
&nbsp;
<br>
-        # setup by getting full pathname for the platform directories
<br>
-        platform_base=&quot;`dirname $with_platform`&quot;
<br>
-        # get full pathname of where we are so we can return
<br>
-        platform_savedir=&quot;`pwd`&quot;
<br>
-        # go to where the platform file is located
<br>
-        cd &quot;$platform_base&quot;
<br>
-        # get the full path to this location
<br>
-        platform_file_dir=`pwd`
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# return to where we started
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cd &quot;$platform_savedir&quot;
<br>
&nbsp;
<br>
<p>-Nathan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11261.php">Jeff Squyres: "Re: [OMPI devel] ibm/collective/bcast_f08.f90"</a>
<li><strong>Previous message:</strong> <a href="11259.php">Jeff Squyres: "[OMPI devel] Fwd: CVE-2012-3386 Automake security fix for 'make distcheck'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11262.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>Reply:</strong> <a href="11262.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
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
