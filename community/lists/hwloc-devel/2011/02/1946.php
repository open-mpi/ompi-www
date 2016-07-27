<?
$subject_val = "[hwloc-devel] sched.h and _GNU_SOURCE vs hwloc/glibc-sched.h mess";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 17 11:30:08 2011" -->
<!-- isoreceived="20110217163008" -->
<!-- sent="Thu, 17 Feb 2011 17:30:02 +0100" -->
<!-- isosent="20110217163002" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] sched.h and _GNU_SOURCE vs hwloc/glibc-sched.h mess" -->
<!-- id="4D5D4D0A.3040807_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] sched.h and _GNU_SOURCE vs hwloc/glibc-sched.h mess<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-17 11:30:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1947.php">Samuel Thibault: "Re: [hwloc-devel] sched.h and _GNU_SOURCE vs hwloc/glibc-sched.h mess"</a>
<li><strong>Previous message:</strong> <a href="1945.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3175)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1947.php">Samuel Thibault: "Re: [hwloc-devel] sched.h and _GNU_SOURCE vs hwloc/glibc-sched.h mess"</a>
<li><strong>Maybe reply:</strong> <a href="1947.php">Samuel Thibault: "Re: [hwloc-devel] sched.h and _GNU_SOURCE vs hwloc/glibc-sched.h mess"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Most of our helper headers include the relevant upstream headers: for
<br>
instance hwloc/cuda.h includes cuda.h. The only exception is
<br>
hwloc/glibc-sched.h which doesn't include sched.h. The reason is that
<br>
sched.h is needed with _GNU_SOURCE defined. So if somebody includes
<br>
sched.h without _GNU_SOURCE and then includes hwloc/glibc-sched.h, it
<br>
breaks.
<br>
<p>Until now glibc-sched.h just complains with #error if sched.h wasn't
<br>
included earlier or _GNU_SOURCE isn't defined. I am tempted to apply the
<br>
following patch, so that people don't see the warning when they didn't
<br>
explicitly include sched.h without _GNU_SOURCE: we would include sched.h
<br>
with _GNU_SOURCE if not done already.
<br>
<p>However, it gets funnier when you find out that hwloc.h ends up
<br>
including sched.h (through hwloc/config.h and pthread.h). And
<br>
_GNU_SOURCE doesn't get defined there. So the patch below would likely
<br>
not help anyway.
<br>
<p>I guess we can't #define _GNU_SOURCE in hwloc.h. Any comments or better
<br>
idea ?
<br>
<p>Brice
<br>
<p><p>--- a/include/hwloc/glibc-sched.h
<br>
+++ b/include/hwloc/glibc-sched.h
<br>
@@ -20,8 +20,13 @@
<br>
&nbsp;#include &lt;hwloc/helper.h&gt;
<br>
&nbsp;#include &lt;assert.h&gt;
<br>
&nbsp;
<br>
-#if !defined _GNU_SOURCE || !defined _SCHED_H
<br>
-#error sched.h must be included with _GNU_SOURCE defined
<br>
+#if defined _SCHED_H
<br>
+# if !defined _GNU_SOURCE
<br>
+#  error you must define _GNU_SOURCE before including &lt;sched.h&gt;
<br>
+# endif
<br>
+#else
<br>
+# define _GNU_SOURCE
<br>
+# include &lt;sched.h&gt;
<br>
&nbsp;#endif
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1947.php">Samuel Thibault: "Re: [hwloc-devel] sched.h and _GNU_SOURCE vs hwloc/glibc-sched.h mess"</a>
<li><strong>Previous message:</strong> <a href="1945.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r3175)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1947.php">Samuel Thibault: "Re: [hwloc-devel] sched.h and _GNU_SOURCE vs hwloc/glibc-sched.h mess"</a>
<li><strong>Maybe reply:</strong> <a href="1947.php">Samuel Thibault: "Re: [hwloc-devel] sched.h and _GNU_SOURCE vs hwloc/glibc-sched.h mess"</a>
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
