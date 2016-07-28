<?
$subject_val = "Re: [OMPI devel] 1.7.4rc1 test failure : cygwin 64 bit";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  7 08:54:46 2014" -->
<!-- isoreceived="20140107135446" -->
<!-- sent="Tue, 7 Jan 2014 14:54:43 +0100" -->
<!-- isosent="20140107135443" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc1 test failure : cygwin 64 bit" -->
<!-- id="55A2329E-F709-4B44-9A5E-CEEF42805437_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="52CBFEEB.6080804_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc1 test failure : cygwin 64 bit<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-07 08:54:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13573.php">Josh Hursey: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<li><strong>Previous message:</strong> <a href="13571.php">marco atzeri: "[OMPI devel] 1.7.4rc1 test failure : cygwin 64 bit"</a>
<li><strong>In reply to:</strong> <a href="13571.php">marco atzeri: "[OMPI devel] 1.7.4rc1 test failure : cygwin 64 bit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13626.php">marco atzeri: "Re: [OMPI devel] 1.7.4rc1 test failure : cygwin 64 bit"</a>
<li><strong>Reply:</strong> <a href="13626.php">marco atzeri: "Re: [OMPI devel] 1.7.4rc1 test failure : cygwin 64 bit"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you try with the latest trunk please?
<br>
<p>Also if things are not going well with the trunk please provide the opal_config.h file.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;George.
<br>
<p>On Jan 7, 2014, at 14:19 , marco atzeri &lt;marco.atzeri_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Failures on cygwin 64bit with gcc-4.8.2.
</span><br>
<span class="quotelev1">&gt; Notes:
</span><br>
<span class="quotelev1">&gt; - cygwin 32bit gives no failure
</span><br>
<span class="quotelev1">&gt; - These failures are not new, they were also present in openmpi-1.7.3-1
</span><br>
<span class="quotelev1">&gt;   and previous
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --&gt; Testing atomic_spinlock_noinline.exe
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/run_tests: line 8:  6476 Segmentation fault      (core dumped) $* $threads
</span><br>
<span class="quotelev1">&gt;    - 1 threads: Failed
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/run_tests: line 8:  6680 Segmentation fault      (core dumped) $* $threads
</span><br>
<span class="quotelev1">&gt;    - 2 threads: Failed
</span><br>
<span class="quotelev1">&gt;    - 4 threads: Passed
</span><br>
<span class="quotelev1">&gt;    - 5 threads: Passed
</span><br>
<span class="quotelev1">&gt;    - 8 threads: Passed
</span><br>
<span class="quotelev1">&gt; FAIL: atomic_spinlock_noinline.exe
</span><br>
<span class="quotelev1">&gt; --&gt; Testing atomic_math.exe
</span><br>
<span class="quotelev1">&gt;    - 1 threads: Passed
</span><br>
<span class="quotelev1">&gt;    - 2 threads: Passed
</span><br>
<span class="quotelev1">&gt;    - 4 threads: Passed
</span><br>
<span class="quotelev1">&gt;    - 5 threads: Passed
</span><br>
<span class="quotelev1">&gt;    - 8 threads: Passed
</span><br>
<span class="quotelev1">&gt; PASS: atomic_math.exe
</span><br>
<span class="quotelev1">&gt; --&gt; Testing atomic_math_noinline.exe
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/run_tests: line 8:  6676 Segmentation fault      (core dumped) $* $threads
</span><br>
<span class="quotelev1">&gt;    - 1 threads: Failed
</span><br>
<span class="quotelev1">&gt;    - 2 threads: Passed
</span><br>
<span class="quotelev1">&gt;    - 4 threads: Passed
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/run_tests: line 8:  6976 Segmentation fault      (core dumped) $* $threads
</span><br>
<span class="quotelev1">&gt;    - 5 threads: Failed
</span><br>
<span class="quotelev1">&gt;    - 8 threads: Passed
</span><br>
<span class="quotelev1">&gt; FAIL: atomic_math_noinline.exe
</span><br>
<span class="quotelev1">&gt; --&gt; Testing atomic_cmpset.exe
</span><br>
<span class="quotelev1">&gt;    - 1 threads: Passed
</span><br>
<span class="quotelev1">&gt;    - 2 threads: Passed
</span><br>
<span class="quotelev1">&gt;    - 4 threads: Passed
</span><br>
<span class="quotelev1">&gt;    - 5 threads: Passed
</span><br>
<span class="quotelev1">&gt;    - 8 threads: Passed
</span><br>
<span class="quotelev1">&gt; PASS: atomic_cmpset.exe
</span><br>
<span class="quotelev1">&gt; --&gt; Testing atomic_cmpset_noinline.exe
</span><br>
<span class="quotelev1">&gt; assertion &quot;opal_atomic_cmpset_32(&amp;vol32, old32, new32) == 1&quot; failed: file &quot;/pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/atomic_cmpset_noinline.c&quot;, line 105, function: main
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/run_tests: line 8:  6248 Aborted                 (core dumped) $* $threads
</span><br>
<span class="quotelev1">&gt;    - 1 threads: Failed
</span><br>
<span class="quotelev1">&gt; assertion &quot;opal_atomic_cmpset_32(&amp;vol32, old32, new32) == 1&quot; failed: file &quot;/pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/atomic_cmpset_noinline.c&quot;, line 105, function: main
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/run_tests: line 8:  2556 Aborted                 (core dumped) $* $threads
</span><br>
<span class="quotelev1">&gt;    - 2 threads: Failed
</span><br>
<span class="quotelev1">&gt; assertion &quot;opal_atomic_cmpset_32(&amp;vol32, old32, new32) == 1&quot; failed: file &quot;/pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/atomic_cmpset_noinline.c&quot;, line 105, function: main
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/run_tests: line 8:  6164 Aborted                 (core dumped) $* $threads
</span><br>
<span class="quotelev1">&gt;    - 4 threads: Failed
</span><br>
<span class="quotelev1">&gt; assertion &quot;opal_atomic_cmpset_32(&amp;vol32, old32, new32) == 1&quot; failed: file &quot;/pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/atomic_cmpset_noinline.c&quot;, line 105, function: main
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/run_tests: line 8:  5312 Aborted                 (core dumped) $* $threads
</span><br>
<span class="quotelev1">&gt;    - 5 threads: Failed
</span><br>
<span class="quotelev1">&gt; assertion &quot;opal_atomic_cmpset_32(&amp;vol32, old32, new32) == 1&quot; failed: file &quot;/pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/atomic_cmpset_noinline.c&quot;, line 105, function: main
</span><br>
<span class="quotelev1">&gt; /pub/devel/openmpi/openmpi-1.7.4rc1-1/src/openmpi-1.7.4rc1/test/asm/run_tests: line 8:  7948 Aborted                 (core dumped) $* $threads
</span><br>
<span class="quotelev1">&gt;    - 8 threads: Failed
</span><br>
<span class="quotelev1">&gt; FAIL: atomic_cmpset_noinline.exe
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; 3 of 8 tests failed
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13573.php">Josh Hursey: "Re: [OMPI devel] return value of opal_compress_base_register() in opal/mca/compress/base/compress_base_open.c"</a>
<li><strong>Previous message:</strong> <a href="13571.php">marco atzeri: "[OMPI devel] 1.7.4rc1 test failure : cygwin 64 bit"</a>
<li><strong>In reply to:</strong> <a href="13571.php">marco atzeri: "[OMPI devel] 1.7.4rc1 test failure : cygwin 64 bit"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13626.php">marco atzeri: "Re: [OMPI devel] 1.7.4rc1 test failure : cygwin 64 bit"</a>
<li><strong>Reply:</strong> <a href="13626.php">marco atzeri: "Re: [OMPI devel] 1.7.4rc1 test failure : cygwin 64 bit"</a>
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
