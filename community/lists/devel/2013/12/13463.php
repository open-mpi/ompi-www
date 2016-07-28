<?
$subject_val = "Re: [OMPI devel] [patch] async-signal-safe signal handler";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 18 08:52:28 2013" -->
<!-- isoreceived="20131218135228" -->
<!-- sent="Wed, 18 Dec 2013 13:52:17 +0000" -->
<!-- isosent="20131218135217" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [patch] async-signal-safe signal handler" -->
<!-- id="7104E50B-B635-4410-B06B-504A4C049DEE_at_cisco.com" -->
<!-- charset="iso-2022-jp" -->
<!-- inreplyto="20131211154357.7724464fc83de5a19f923d18_at_jp.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [patch] async-signal-safe signal handler<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-18 08:52:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13464.php">Adrian Reber: "[OMPI devel] [PATCH v2 0/2] Trying to get the C/R code to compile again"</a>
<li><strong>Previous message:</strong> <a href="13462.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Recommended tool to measure packet counters"</a>
<li><strong>In reply to:</strong> <a href="13412.php">Kawashima, Takahiro: "[OMPI devel] [patch] async-signal-safe signal handler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This patch looks good to me (sorry for the delay in replying -- MPI Forum + OMPI dev meeting got in the way).
<br>
<p>Brian -- do you have any opinions on it?
<br>
<p><p>On Dec 11, 2013, at 1:43 AM, Kawashima, Takahiro &lt;t-kawashima_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI's signal handler (show_stackframe function defined in
</span><br>
<span class="quotelev1">&gt; opal/util/stacktrace.c) calls non-async-signal-safe functions
</span><br>
<span class="quotelev1">&gt; and it causes a problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See attached mpisigabrt.c. Passing corrupted memory to realloc(3)
</span><br>
<span class="quotelev1">&gt; will cause SIGABRT and show_stackframe function will be invoked.
</span><br>
<span class="quotelev1">&gt; But invoked show_stackframe function deadlocks in backtrace_symbols(3)
</span><br>
<span class="quotelev1">&gt; on some systems because backtrace_symbols(3) calls malloc(3)
</span><br>
<span class="quotelev1">&gt; internally and a deadlock of realloc/malloc mutex occurs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached mpisigabrt.gstack.txt shows the stacktrace gotten
</span><br>
<span class="quotelev1">&gt; by gdb in this deadlock situation on Ubuntu 12.04 LTS (precise)
</span><br>
<span class="quotelev1">&gt; x86_64. Though I could not reproduce this behavior on RHEL 5/6,
</span><br>
<span class="quotelev1">&gt; I can reproduce it also on K computer and its successor PRIMEHPC FX10.
</span><br>
<span class="quotelev1">&gt; Passing non-heap memory to free(3) and double-free also cause
</span><br>
<span class="quotelev1">&gt; this deadlock.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; malloc (and backtrace_symbols) is not marked as async-signal-safe
</span><br>
<span class="quotelev1">&gt; in POSIX and current glibc, though it seems to have been marked
</span><br>
<span class="quotelev1">&gt; in old glibc. So we should not call it in the signal handler now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="http://pubs.opengroup.org/onlinepubs/9699919799/functions/V2_chap02.html#tag_15_04">http://pubs.opengroup.org/onlinepubs/9699919799/functions/V2_chap02.html#tag_15_04</a>
</span><br>
<span class="quotelev1">&gt;  <a href="http://cygwin.com/ml/libc-help/2013-06/msg00005.html">http://cygwin.com/ml/libc-help/2013-06/msg00005.html</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wrote a patch to address this issue. See the attached
</span><br>
<span class="quotelev1">&gt; async-signal-safe-stacktrace.patch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This patch calls backtrace_symbols_fd(3) instead of backtrace_symbols(3).
</span><br>
<span class="quotelev1">&gt; Though backtrace_symbols_fd is not declared as async-signal-safe,
</span><br>
<span class="quotelev1">&gt; it is described not to call malloc internally in its man. So it
</span><br>
<span class="quotelev1">&gt; should be rather safer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Output format of show_stackframe function is not changed by
</span><br>
<span class="quotelev1">&gt; this patch. But the opal_backtrace_print function (backtrace
</span><br>
<span class="quotelev1">&gt; framework) interface is changed for the output format compatibility.
</span><br>
<span class="quotelev1">&gt; This requires changes in some additional files (ompi_mpi_abort.c
</span><br>
<span class="quotelev1">&gt; etc.).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This patch also removes unnecessary fflush(3) calls, which are
</span><br>
<span class="quotelev1">&gt; meaningless for write(2) system call but might cause a similar
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What do you think about this patch?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Takahiro Kawashima,
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt; &lt;async-signal-safe-stacktrace.patch&gt;&lt;mpisigabrt.c&gt;&lt;mpisigabrt.gstack.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
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
<li><strong>Next message:</strong> <a href="13464.php">Adrian Reber: "[OMPI devel] [PATCH v2 0/2] Trying to get the C/R code to compile again"</a>
<li><strong>Previous message:</strong> <a href="13462.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Recommended tool to measure packet counters"</a>
<li><strong>In reply to:</strong> <a href="13412.php">Kawashima, Takahiro: "[OMPI devel] [patch] async-signal-safe signal handler"</a>
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
