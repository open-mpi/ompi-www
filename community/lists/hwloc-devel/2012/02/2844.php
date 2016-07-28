<?
$subject_val = "Re: [hwloc-devel] 1.3.2rc1 has escaped";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  9 08:08:17 2012" -->
<!-- isoreceived="20120209130817" -->
<!-- sent="Thu, 9 Feb 2012 08:08:11 -0500" -->
<!-- isosent="20120209130811" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.2rc1 has escaped" -->
<!-- id="B95DE678-4B1F-4AD8-97CE-6AC8D8C146EE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F33179B.1010504_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.3.2rc1 has escaped<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-09 08:08:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2845.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2843.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2835.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2847.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2847.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How's this patch (against v1.3, assuming 
<br>
<a href="https://svn.open-mpi.org/trac/hwloc/changeset/4285">https://svn.open-mpi.org/trac/hwloc/changeset/4285</a>)?
<br>
<p>Is the test that checks to see if compilers error when the wrong number of params are passed now mooot?
<br>
<p>Index: config/hwloc.m4
<br>
===================================================================
<br>
--- config/hwloc.m4	(revision 4285)
<br>
+++ config/hwloc.m4	(working copy)
<br>
@@ -268,22 +268,24 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test &quot;$HWLOC_VISIBILITY_CFLAGS&quot; != &quot;&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_WARN([&quot;$HWLOC_VISIBILITY_CFLAGS&quot; has been added to the hwloc CFLAGS])])
<br>
&nbsp;
<br>
-    # make sure the compiler returns an error code when function arg count is wrong,
<br>
-    # otherwise sched_setaffinity checks may fail
<br>
+    # Make sure the compiler returns an error code when function arg
<br>
+    # count is wrong, otherwise sched_setaffinity checks may fail.
<br>
+    # For older, buggy versions of the xlc compilers, we need to set
<br>
+    # an additional compiler flag to catch these situations.
<br>
+    AS_IF([test &quot;$hwloc_c_vendor&quot; = &quot;ibm&quot;],
<br>
+          [HWLOC_CFLAGS_save=$CFLAGS
<br>
+           CFLAGS=&quot;$CFLAGS -qhalt=e&quot;])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_COMPILE_IFELSE([AC_LANG_PROGRAM([[
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;extern int one_arg(int x);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;extern int two_arg(int x, int y);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int foo(void) { return one_arg(1, 2) + two_arg(3); }
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]])], [
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_WARN([Your C compiler does not consider incorrect argument counts to be a fatal error.])
<br>
-        if test &quot;$hwloc_check_compiler_vendor_result&quot; = &quot;ibm&quot;; then
<br>
-            AC_MSG_WARN([For XLC you may try appending '-qhalt=-e' to the value of CFLAGS.])
<br>
-            AC_MSG_WARN([Alternatively you may configure with a different compiler.])
<br>
-        else
<br>
-            AC_MSG_WARN([Please report this failure, and configure using a different C compiler if possible.])
<br>
-        fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_ERROR([Cannot continue.])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;])
<br>
+    # Restore the CFLAGS if we modified them above
<br>
+    AS_IF([test &quot;$hwloc_c_vendor&quot; = &quot;ibm&quot;],
<br>
+          [CFLAGS=HWLOC_CFLAGS])
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# Now detect support
<br>
@@ -387,6 +389,12 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_DEFINE_UNQUOTED(hwloc_thread_t, $hwloc_thread_t, [Define this to the thread ID type])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
+    # For older, buggy versions of the xlc compilers, we need to set
<br>
+    # an additional compiler flag to catch cases where the wrong
<br>
+    # number of parameters are passed.
<br>
+    AS_IF([test &quot;$hwloc_c_vendor&quot; = &quot;ibm&quot;],
<br>
+          [HWLOC_CFLAGS_save=$CFLAGS
<br>
+           CFLAGS=&quot;$CFLAGS -qhalt=e&quot;])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_HWLOC_CHECK_DECL([sched_setaffinity], [
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_DEFINE([HWLOC_HAVE_SCHED_SETAFFINITY], [1], [Define to 1 if glibc provides a prototype of sched_setaffinity()])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING([for old prototype of sched_setaffinity])
<br>
@@ -403,6 +411,9 @@
<br>
&nbsp;#define _GNU_SOURCE
<br>
&nbsp;#include &lt;sched.h&gt;
<br>
&nbsp;]])
<br>
+    # Restore the CFLAGS if we modified them above
<br>
+    AS_IF([test &quot;$hwloc_c_vendor&quot; = &quot;ibm&quot;],
<br>
+          [CFLAGS=HWLOC_CFLAGS])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_CHECKING([for working CPU_SET])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_LINK_IFELSE([
<br>
<p><p><p><p>On Feb 8, 2012, at 7:47 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/8/2012 4:41 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I do agree w/ Samuel that the BEST solution is to apply &quot;-qhalt=e&quot; ONLY to the test(s) where one expects the compiler to through errors (rather than warnings) for function calls with argument counts which don't match the prototypes.  At the moment, I am 90% certain that the &quot;old sched_setaffinity()&quot; probe is the only one fitting that description. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am hoping to be able contribute  patch for this soon.
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2845.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2843.php">Jeff Squyres: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2835.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2847.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2847.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
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
