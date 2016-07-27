<?
$subject_val = "Re: [hwloc-devel] 1.3.2rc1 has escaped";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  8 16:10:57 2012" -->
<!-- isoreceived="20120208211057" -->
<!-- sent="Wed, 08 Feb 2012 13:10:36 -0800" -->
<!-- isosent="20120208211036" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.3.2rc1 has escaped" -->
<!-- id="4F32E4CC.7060303_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0E93E1E1-BBB3-46E8-9452-9A90D2F1D51D_at_cisco.com" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-08 16:10:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2821.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2819.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2817.php">Jeff Squyres: "[hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2823.php">Brice Goglin: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2823.php">Brice Goglin: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2826.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/8/2012 8:58 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; * Detect when a compiler such as xlc may not report compile errors
</span><br>
<span class="quotelev1">&gt;    properly, causing some configure checks to be wrong. Thanks to
</span><br>
<span class="quotelev1">&gt;    Paul H. Hargrove for reporting the problem and providing a patch.
</span><br>
<p>Looks like I botched this one!
<br>
<p>I have added two Linux/ppc64 machines the xlc-7.0, xlc-8.0 and xlc-9.0 
<br>
to my testing.
<br>
These are NOT running on the odd virtual node that caused assertion 
<br>
failures when testing xlc-11.1.
<br>
<p>With these new xlc versions AND the original xlc-11.1 compiler (4 
<br>
compilers on 3 different nodes) I am STILL seeing the following 
<br>
INCORRECT result:
<br>
<span class="quotelev1">&gt; checking for old prototype of sched_setaffinity... yes
</span><br>
Where gcc on the same machines correctly gives a &quot;no&quot; result.
<br>
<p>Looking in config.log, I do NOT see the -qhalt=E that was discussed as 
<br>
the solution to this problem:
<br>
<span class="quotelev1">&gt; configure:9065: checking for old prototype of sched_setaffinity
</span><br>
<span class="quotelev1">&gt; configure:9083: xlc -c  conftest.c &gt;&amp;5
</span><br>
<p>And, of course, I didn't see the fatal error that should have occurred 
<br>
at configure time.
<br>
So, I poked around some more in config.log and found:
<br>
<span class="quotelev1">&gt; configure:8338: xlc -c -q32  conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; &quot;conftest.c&quot;, line 62.43: 1506-099 (S) Unexpected argument.
</span><br>
<span class="quotelev1">&gt; &quot;conftest.c&quot;, line 62.55: 1506-098 (E) Missing argument(s).
</span><br>
<p>So, what this means is that the probe I wrote for &quot;xlc needs -qhalt=E&quot; 
<br>
is WRONG.
<br>
<p>The following tests too many and too few as distinct cases, and appears 
<br>
to resolve the problem for me:
<br>
--- config/hwloc.m4~    2012-02-08 20:55:03.188903698 +0000
<br>
+++ config/hwloc.m4     2012-02-08 20:57:29.987668761 +0000
<br>
@@ -269,11 +269,16 @@
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# make sure the compiler returns an error code when function arg 
<br>
count is wrong,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;# otherwise sched_setaffinity checks may fail
<br>
+    hwloc_args_check_ok=yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_COMPILE_IFELSE([AC_LANG_PROGRAM([[
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;extern int one_arg(int x);
<br>
+        int foo(void) { return one_arg(1, 2); }
<br>
+    ]])], [ hwloc_args_check_ok=no ])
<br>
+    AC_COMPILE_IFELSE([AC_LANG_PROGRAM([[
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;extern int two_arg(int x, int y);
<br>
-        int foo(void) { return one_arg(1, 2) + two_arg(3); }
<br>
-    ]])], [
<br>
+        int foo(void) { return two_arg(3); }
<br>
+    ]])], [ hwloc_args_check_ok=no ])
<br>
+    AS_IF([test &quot;$hwloc_args_check_ok&quot; != &quot;yes&quot;],[
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_WARN([Your C compiler does not consider incorrect 
<br>
argument counts to be a fatal error.])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if test &quot;$hwloc_check_compiler_vendor_result&quot; = &quot;ibm&quot;; then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_WARN([For XLC you may try appending '-qhalt=-e' to 
<br>
the value of CFLAGS.])
<br>
<p>With that change in place, configure stops as desired:
<br>
<span class="quotelev1">&gt; configure: WARNING: Your C compiler does not consider incorrect 
</span><br>
<span class="quotelev1">&gt; argument counts to be a fatal error.
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Please report this failure, and configure using a 
</span><br>
<span class="quotelev1">&gt; different C compiler if possible.
</span><br>
<span class="quotelev1">&gt; configure: error: Cannot continue.
</span><br>
<p>EXCEPT, that I am not seeing the &quot;set CFLAGS...&quot; message.
<br>
Is it possible that this check is running before 
<br>
hwloc_check_compiler_vendor_result has been set?
<br>
<p>ALSO, the text of the (missing) message is incorrect:
<br>
284c284
<br>
&lt;             AC_MSG_WARN([For XLC you may try appending '-qhalt=-e' to 
<br>
the value of CFLAGS.])
<br>
<pre>
---
 &gt;             AC_MSG_WARN([For XLC you may try appending '-qhalt=e' to 
the value of CFLAGS.])
That is probably my fault, too.
-Paul
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2821.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="2819.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="2817.php">Jeff Squyres: "[hwloc-devel] 1.3.2rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2823.php">Brice Goglin: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2823.php">Brice Goglin: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="2826.php">Paul H. Hargrove: "Re: [hwloc-devel] 1.3.2rc1 has escaped"</a>
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
