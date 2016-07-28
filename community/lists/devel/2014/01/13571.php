<?
$subject_val = "[OMPI devel] 1.7.4rc1 test failure : cygwin 64 bit";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  7 08:19:43 2014" -->
<!-- isoreceived="20140107131943" -->
<!-- sent="Tue, 07 Jan 2014 14:19:39 +0100" -->
<!-- isosent="20140107131939" -->
<!-- name="marco atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc1 test failure : cygwin 64 bit" -->
<!-- id="52CBFEEB.6080804_at_gmail.com" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc1 test failure : cygwin 64 bit<br>
<strong>From:</strong> marco atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-07 08:19:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13572.php">George Bosilca: "Re: [OMPI devel] 1.7.4rc1 test failure : cygwin 64 bit"</a>
<li><strong>Previous message:</strong> <a href="13570.php">Ralph Castain: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13572.php">George Bosilca: "Re: [OMPI devel] 1.7.4rc1 test failure : cygwin 64 bit"</a>
<li><strong>Reply:</strong> <a href="13572.php">George Bosilca: "Re: [OMPI devel] 1.7.4rc1 test failure : cygwin 64 bit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Failures on cygwin 64bit with gcc-4.8.2.
<br>
Notes:
<br>
- cygwin 32bit gives no failure
<br>
- These failures are not new, they were also present in openmpi-1.7.3-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;and previous
<br>
<p>-----------------------------------------------------------------
<br>
--&gt; Testing atomic_spinlock_noinline.exe
<br>
/pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/run_tests: 
<br>
line 8:  6476 Segmentation fault      (core dumped) $* $threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Failed
<br>
/pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/run_tests: 
<br>
line 8:  6680 Segmentation fault      (core dumped) $* $threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Failed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Passed
<br>
FAIL: atomic_spinlock_noinline.exe
<br>
--&gt; Testing atomic_math.exe
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Passed
<br>
PASS: atomic_math.exe
<br>
--&gt; Testing atomic_math_noinline.exe
<br>
/pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/run_tests: 
<br>
line 8:  6676 Segmentation fault      (core dumped) $* $threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Failed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Passed
<br>
/pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/run_tests: 
<br>
line 8:  6976 Segmentation fault      (core dumped) $* $threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Failed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Passed
<br>
FAIL: atomic_math_noinline.exe
<br>
--&gt; Testing atomic_cmpset.exe
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Passed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Passed
<br>
PASS: atomic_cmpset.exe
<br>
--&gt; Testing atomic_cmpset_noinline.exe
<br>
assertion &quot;opal_atomic_cmpset_32(&amp;vol32, old32, new32) == 1&quot; failed: 
<br>
file 
<br>
&quot;/pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/atomic_cmpset_noinline.c&quot;, 
<br>
line 105, function: main
<br>
/pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/run_tests: 
<br>
line 8:  6248 Aborted                 (core dumped) $* $threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 1 threads: Failed
<br>
assertion &quot;opal_atomic_cmpset_32(&amp;vol32, old32, new32) == 1&quot; failed: 
<br>
file 
<br>
&quot;/pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/atomic_cmpset_noinline.c&quot;, 
<br>
line 105, function: main
<br>
/pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/run_tests: 
<br>
line 8:  2556 Aborted                 (core dumped) $* $threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 2 threads: Failed
<br>
assertion &quot;opal_atomic_cmpset_32(&amp;vol32, old32, new32) == 1&quot; failed: 
<br>
file 
<br>
&quot;/pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/atomic_cmpset_noinline.c&quot;, 
<br>
line 105, function: main
<br>
/pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/run_tests: 
<br>
line 8:  6164 Aborted                 (core dumped) $* $threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 4 threads: Failed
<br>
assertion &quot;opal_atomic_cmpset_32(&amp;vol32, old32, new32) == 1&quot; failed: 
<br>
file 
<br>
&quot;/pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/atomic_cmpset_noinline.c&quot;, 
<br>
line 105, function: main
<br>
/pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/run_tests: 
<br>
line 8:  5312 Aborted                 (core dumped) $* $threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 5 threads: Failed
<br>
assertion &quot;opal_atomic_cmpset_32(&amp;vol32, old32, new32) == 1&quot; failed: 
<br>
file 
<br>
&quot;/pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/atomic_cmpset_noinline.c&quot;, 
<br>
line 105, function: main
<br>
/pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/run_tests: 
<br>
line 8:  7948 Aborted                 (core dumped) $* $threads
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- 8 threads: Failed
<br>
FAIL: atomic_cmpset_noinline.exe
<br>
========================================================
<br>
3 of 8 tests failed
<br>
------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13572.php">George Bosilca: "Re: [OMPI devel] 1.7.4rc1 test failure : cygwin 64 bit"</a>
<li><strong>Previous message:</strong> <a href="13570.php">Ralph Castain: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13572.php">George Bosilca: "Re: [OMPI devel] 1.7.4rc1 test failure : cygwin 64 bit"</a>
<li><strong>Reply:</strong> <a href="13572.php">George Bosilca: "Re: [OMPI devel] 1.7.4rc1 test failure : cygwin 64 bit"</a>
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
