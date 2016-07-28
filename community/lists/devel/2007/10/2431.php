<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 11 17:37:00 2007" -->
<!-- isoreceived="20071011213700" -->
<!-- sent="Thu, 11 Oct 2007 23:36:53 +0200" -->
<!-- isosent="20071011213653" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="[OMPI devel] small configure cache variable bug" -->
<!-- id="20071011213653.GC5266_at_ins.uni-bonn.de" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-11 17:36:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2432.php">Ralf Wildenhues: "Re: [OMPI devel] small configure cache variable bug"</a>
<li><strong>Previous message:</strong> <a href="2430.php">George Bosilca: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2432.php">Ralf Wildenhues: "Re: [OMPI devel] small configure cache variable bug"</a>
<li><strong>Reply:</strong> <a href="2432.php">Ralf Wildenhues: "Re: [OMPI devel] small configure cache variable bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Open MPI Developers,
<br>
<p>Here's a small patch to fix a misnamed cache variable.  The next
<br>
Autoconf version will issue a warning for typos like these, which
<br>
is how I found this.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* config/ompi_check_visibility.m4 (OMPI_CHECK_VISIBILITY):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rename ompi_cv_cc_fvisibility to ompi_vc_cc_fvisibility, so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;that it will be cached.
<br>
<p>Index: config/ompi_check_visibility.m4
<br>
===================================================================
<br>
--- config/ompi_check_visibility.m4	(revision 16430)
<br>
+++ config/ompi_check_visibility.m4	(working copy)
<br>
@@ -33,7 +33,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CFLAGS=&quot;$CFLAGS_orig -fvisibility=hidden&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;add=
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_CACHE_CHECK([if $CC supports -fvisibility],
<br>
-            [ompi_vc_cc_fvisibility],
<br>
+            [ompi_cv_cc_fvisibility],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_TRY_LINK([
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;stdio.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__attribute__((visibility(&quot;default&quot;))) int foo;
<br>
@@ -42,17 +42,17 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[if test -s conftest.err ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$GREP -iq &quot;visibility&quot; conftest.err
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$?&quot; = &quot;0&quot; ; then
<br>
-                            ompi_vc_cc_fvisibility=&quot;no&quot;
<br>
+                            ompi_cv_cc_fvisibility=&quot;no&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
-                            ompi_vc_cc_fvisibility=&quot;yes&quot;
<br>
+                            ompi_cv_cc_fvisibility=&quot;yes&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
-                        ompi_vc_cc_fvisibility=&quot;yes&quot;
<br>
+                        ompi_cv_cc_fvisibility=&quot;yes&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi],
<br>
-                    [ompi_vc_cc_fvisibility=&quot;no&quot;])
<br>
+                    [ompi_cv_cc_fvisibility=&quot;no&quot;])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;])
<br>
&nbsp;
<br>
-        if test &quot;$ompi_vc_cc_fvisibility&quot; = &quot;yes&quot; ; then
<br>
+        if test &quot;$ompi_cv_cc_fvisibility&quot; = &quot;yes&quot; ; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;add=&quot; -fvisibility=hidden&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;have_visibility=1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_WARN([$add has been added to CFLAGS])
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2432.php">Ralf Wildenhues: "Re: [OMPI devel] small configure cache variable bug"</a>
<li><strong>Previous message:</strong> <a href="2430.php">George Bosilca: "Re: [OMPI devel] [RFC] change wrapper compilers from binaries to shell scripts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2432.php">Ralf Wildenhues: "Re: [OMPI devel] small configure cache variable bug"</a>
<li><strong>Reply:</strong> <a href="2432.php">Ralf Wildenhues: "Re: [OMPI devel] small configure cache variable bug"</a>
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
