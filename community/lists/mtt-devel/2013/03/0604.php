<?
$subject_val = "[MTT devel] Fwd: [OMPI svn-full] svn:open-mpi r28142 - trunk/ompi/mca/common/cuda";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  1 17:17:45 2013" -->
<!-- isoreceived="20130301221745" -->
<!-- sent="Fri, 1 Mar 2013 22:17:40 +0000" -->
<!-- isosent="20130301221740" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[MTT devel] Fwd: [OMPI svn-full] svn:open-mpi r28142 - trunk/ompi/mca/common/cuda" -->
<!-- id="2E30FE89-CD19-4E2B-90C0-F1B5253B7AB4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130301215056.7122715FA95_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> [MTT devel] Fwd: [OMPI svn-full] svn:open-mpi r28142 - trunk/ompi/mca/common/cuda<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-01 17:17:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0605.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1602 - in trunk/lib/MTT: . Reporter"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/02/0603.php">Jeff Squyres (jsquyres): "Re: [MTT devel] fix zombie commit"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mike -
<br>
<p>Can you verify that this commit is ok?
<br>
<p>Sent from my phone. No type good.
<br>
<p>Begin forwarded message:
<br>
<p>From: &lt;svn-commit-mailer_at_[hidden]&lt;mailto:svn-commit-mailer_at_[hidden]&gt;&gt;
<br>
Date: March 1, 2013, 4:50:56 PM EST
<br>
To: &lt;svn-full_at_[hidden]&lt;mailto:svn-full_at_[hidden]&gt;&gt;
<br>
Subject: [OMPI svn-full] svn:open-mpi r28142 - trunk/ompi/mca/common/cuda
<br>
Reply-To: &lt;devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;&gt;
<br>
<p>Author: rolfv (Rolf Vandevaart)
<br>
Date: 2013-03-01 16:50:56 EST (Fri, 01 Mar 2013)
<br>
New Revision: 28142
<br>
URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/28142">https://svn.open-mpi.org/trac/ompi/changeset/28142</a>
<br>
<p>Log:
<br>
Add a search path.  Refactor code.
<br>
<p>Text files modified:
<br>
&nbsp;&nbsp;trunk/ompi/mca/common/cuda/common_cuda.c |   116 +++++++++++++++++----------------------
<br>
&nbsp;&nbsp;1 files changed, 52 insertions(+), 64 deletions(-)
<br>
<p>Modified: trunk/ompi/mca/common/cuda/common_cuda.c
<br>
==============================================================================
<br>
--- trunk/ompi/mca/common/cuda/common_cuda.c    Fri Mar  1 14:13:06 2013    (r28141)
<br>
+++ trunk/ompi/mca/common/cuda/common_cuda.c    2013-03-01 16:50:56 EST (Fri, 01 Mar 2013)    (r28142)
<br>
@@ -463,11 +463,15 @@
<br>
&nbsp;* This function will open and load the symbols needed from the CUDA driver
<br>
&nbsp;* library.  Any failure will result in a message and we will return 1.
<br>
&nbsp;*/
<br>
+#define NUMLIBS 2
<br>
static int mca_common_cuda_load_libcuda(void)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;opal_lt_dladvise advise;
<br>
-    int retval;
<br>
+    int retval, i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int advise_support = 1;
<br>
+    bool loaded = true;
<br>
+    char *errs[NUMLIBS] = {NULL, NULL};
<br>
+    char *cudalibs[NUMLIBS] = {&quot;libcuda.so&quot;, &quot;libcuda.so.1&quot;};
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (0 != (retval = opal_lt_dlinit())) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OPAL_ERR_NOT_SUPPORTED == retval) {
<br>
@@ -491,6 +495,14 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>+    /* Make sure we check in lib64 also in the case where there are both
<br>
+     * 32 and 64 bit libraries installed.  Otherwise, we may fail trying to
<br>
+     * load the 32 bit library. */
<br>
+    opal_lt_dladdsearchdir(&quot;/usr/lib64&quot;);
<br>
+
<br>
+    /* Now walk through all the potential names libcuda and find one
<br>
+     * that works.  If it does, all is good.  If not, print out all
<br>
+     * the messages about why things failed. */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (advise_support) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (0 != (retval = opal_lt_dladvise_global(&amp;advise))) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_show_help(&quot;help-mpi-common-cuda.txt&quot;, &quot;unknown ltdl error&quot;, true,
<br>
@@ -498,84 +510,60 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_lt_dladvise_destroy(&amp;advise);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-
<br>
-        /*
<br>
-         * Try and open libcuda.so and libcuda.so.1.  Note that we are not using
<br>
-         * opal_lt_dladvise_ext() as we do not need ltdl to add any suffixes to
<br>
-         * the library names being handed in.
<br>
-         */
<br>
-        libcuda_handle = opal_lt_dlopenadvise(&quot;libcuda.so&quot;, advise);
<br>
-
<br>
-        /* If the first open fails, save the error message so that it can be printed
<br>
-         * out of the second open fails as well.  If the second open succeeds, then
<br>
-         * we do not caer that the first open failed. */
<br>
-        if (NULL == libcuda_handle) {
<br>
-            char *err1;
<br>
-            const char *str1 = opal_lt_dlerror();
<br>
-            if (NULL != str1) {
<br>
-                err1 = strdup(str1);
<br>
-            } else {
<br>
-                err1 = strdup(&quot;lt_dlerror() returned NULL.&quot;);
<br>
-            }
<br>
-            libcuda_handle = opal_lt_dlopenadvise(&quot;libcuda.so.1&quot;, advise);
<br>
+        for (i = 0; i &lt; NUMLIBS; i++) {
<br>
+            const char *str;
<br>
+            libcuda_handle = opal_lt_dlopenadvise(cudalibs[i], advise);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == libcuda_handle) {
<br>
-                char *err2;
<br>
-                const char *str2 = opal_lt_dlerror();
<br>
-                if (NULL != str2) {
<br>
-                    err2 = strdup(str2);
<br>
+                str = opal_lt_dlerror();
<br>
+                if (NULL != str) {
<br>
+                    errs[i] = strdup(str);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
-                    err2 = strdup(&quot;lt_dlerror() returned NULL.&quot;);
<br>
+                    errs[i] = strdup(&quot;lt_dlerror() returned NULL.&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-                opal_show_help(&quot;help-mpi-common-cuda.txt&quot;, &quot;dlopen failed&quot;, true,
<br>
-                               &quot;libcuda.so&quot;, err1, &quot;libcuda.so.1&quot;, err2);
<br>
-                free(err1);
<br>
-                free(err2);
<br>
-                opal_lt_dladvise_destroy(&amp;advise);
<br>
-                return 1;
<br>
+                opal_output_verbose(10, mca_common_cuda_output,
<br>
+                                    &quot;CUDA: Library open error: %s&quot;,
<br>
+                                    errs[i]);
<br>
+            } else {
<br>
+                loaded = true;
<br>
+                break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-            free(err1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_lt_dladvise_destroy(&amp;advise);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* No lt_dladvise support.  This should rarely happen. */
<br>
-        /*
<br>
-         * Try and open libcuda.so and libcuda.so.1.  Note that we are not using
<br>
-         * opal_lt_dladvise_ext() as we do not need ltdl to add any suffixes to
<br>
-         * the library names being handed in.
<br>
-         */
<br>
-        libcuda_handle = opal_lt_dlopen(&quot;libcuda.so&quot;);
<br>
-
<br>
-        /* If the first open fails, save the error message so that it can be printed
<br>
-         * out of the second open fails as well.  If the second open succeeds, then
<br>
-         * we do not caer that the first open failed. */
<br>
-        if (NULL == libcuda_handle) {
<br>
-            char *err1;
<br>
-            const char *str1 = opal_lt_dlerror();
<br>
-            if (NULL != str1) {
<br>
-                err1 = strdup(str1);
<br>
-            } else {
<br>
-                err1 = strdup(&quot;lt_dlerror() returned NULL.&quot;);
<br>
-            }
<br>
-            libcuda_handle = opal_lt_dlopen(&quot;libcuda.so.1&quot;);
<br>
+        for (i = 0; i &lt; NUMLIBS; i++) {
<br>
+            const char *str;
<br>
+            libcuda_handle = opal_lt_dlopen(cudalibs[i]);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (NULL == libcuda_handle) {
<br>
-                char *err2;
<br>
-                const char *str2 = opal_lt_dlerror();
<br>
-                if (NULL != str2) {
<br>
-                    err2 = strdup(str2);
<br>
+                str = opal_lt_dlerror();
<br>
+                if (NULL != str) {
<br>
+                    errs[i] = strdup(str);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
-                    err2 = strdup(&quot;lt_dlerror() returned NULL.&quot;);
<br>
+                    errs[i] = strdup(&quot;lt_dlerror() returned NULL.&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-                opal_show_help(&quot;help-mpi-common-cuda.txt&quot;, &quot;dlopen failed&quot;, true,
<br>
-                               &quot;libcuda.so&quot;, err1, &quot;libcuda.so.1&quot;, err2);
<br>
-                free(err1);
<br>
-                free(err2);
<br>
-                return 1;
<br>
+            } else {
<br>
+                loaded = true;
<br>
+                break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
-            free(err1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>+    if (loaded != true) {
<br>
+        opal_show_help(&quot;help-mpi-common-cuda.txt&quot;, &quot;dlopen failed&quot;, true,
<br>
+                       cudalibs[0], errs[0], cudalibs[1], errs[1]);
<br>
+    }
<br>
+
<br>
+    /* Cleanup error messages.  Need to do this after printing them. */
<br>
+    for (i = 0; i &lt; NUMLIBS; i++) {
<br>
+        if (NULL != errs[i]) {
<br>
+            free(errs[i]);
<br>
+        }
<br>
+    }
<br>
+
<br>
+    if (loaded != true) {
<br>
+        return 1;
<br>
+    }
<br>
+
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* Map in the functions that we need */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OMPI_CUDA_DLSYM(libcuda_handle, cuStreamCreate);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;OMPI_CUDA_DLSYM(libcuda_handle, cuCtxGetCurrent);
<br>
_______________________________________________
<br>
svn-full mailing list
<br>
svn-full_at_[hidden]&lt;mailto:svn-full_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0604/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0605.php">Jeff Squyres (jsquyres): "Re: [MTT devel] [MTT svn] svn:mtt-svn r1602 - in trunk/lib/MTT: . Reporter"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2013/02/0603.php">Jeff Squyres (jsquyres): "Re: [MTT devel] fix zombie commit"</a>
<!-- nextthread="start" -->
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
