<?
$subject_val = "[OMPI devel] [patch] async-signal-safe signal handler";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 11 01:44:05 2013" -->
<!-- isoreceived="20131211064405" -->
<!-- sent="Wed, 11 Dec 2013 06:43:58 +0000" -->
<!-- isosent="20131211064358" -->
<!-- name="Kawashima, Takahiro" -->
<!-- email="t-kawashima_at_[hidden]" -->
<!-- subject="[OMPI devel] [patch] async-signal-safe signal handler" -->
<!-- id="20131211154357.7724464fc83de5a19f923d18_at_jp.fujitsu.com" -->
<!-- charset="iso-2022-jp" -->
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
<strong>Subject:</strong> [OMPI devel] [patch] async-signal-safe signal handler<br>
<strong>From:</strong> Kawashima, Takahiro (<em>t-kawashima_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-11 01:43:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13413.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
<li><strong>Previous message:</strong> <a href="13411.php">Ralph Castain: "Re: [OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13463.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [patch] async-signal-safe signal handler"</a>
<li><strong>Reply:</strong> <a href="13463.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [patch] async-signal-safe signal handler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Open MPI's signal handler (show_stackframe function defined in
<br>
opal/util/stacktrace.c) calls non-async-signal-safe functions
<br>
and it causes a problem.
<br>
<p>See attached mpisigabrt.c. Passing corrupted memory to realloc(3)
<br>
will cause SIGABRT and show_stackframe function will be invoked.
<br>
But invoked show_stackframe function deadlocks in backtrace_symbols(3)
<br>
on some systems because backtrace_symbols(3) calls malloc(3)
<br>
internally and a deadlock of realloc/malloc mutex occurs.
<br>
<p>Attached mpisigabrt.gstack.txt shows the stacktrace gotten
<br>
by gdb in this deadlock situation on Ubuntu 12.04 LTS (precise)
<br>
x86_64. Though I could not reproduce this behavior on RHEL 5/6,
<br>
I can reproduce it also on K computer and its successor PRIMEHPC FX10.
<br>
Passing non-heap memory to free(3) and double-free also cause
<br>
this deadlock.
<br>
<p>malloc (and backtrace_symbols) is not marked as async-signal-safe
<br>
in POSIX and current glibc, though it seems to have been marked
<br>
in old glibc. So we should not call it in the signal handler now.
<br>
<p>&nbsp;&nbsp;<a href="http://pubs.opengroup.org/onlinepubs/9699919799/functions/V2_chap02.html#tag_15_04">http://pubs.opengroup.org/onlinepubs/9699919799/functions/V2_chap02.html#tag_15_04</a>
<br>
&nbsp;&nbsp;<a href="http://cygwin.com/ml/libc-help/2013-06/msg00005.html">http://cygwin.com/ml/libc-help/2013-06/msg00005.html</a>
<br>
<p>I wrote a patch to address this issue. See the attached
<br>
async-signal-safe-stacktrace.patch.
<br>
<p>This patch calls backtrace_symbols_fd(3) instead of backtrace_symbols(3).
<br>
Though backtrace_symbols_fd is not declared as async-signal-safe,
<br>
it is described not to call malloc internally in its man. So it
<br>
should be rather safer.
<br>
<p>Output format of show_stackframe function is not changed by
<br>
this patch. But the opal_backtrace_print function (backtrace
<br>
framework) interface is changed for the output format compatibility.
<br>
This requires changes in some additional files (ompi_mpi_abort.c
<br>
etc.).
<br>
<p>This patch also removes unnecessary fflush(3) calls, which are
<br>
meaningless for write(2) system call but might cause a similar
<br>
problem.
<br>
<p>What do you think about this patch?
<br>
<p>Takahiro Kawashima,
<br>
MPI development team,
<br>
Fujitsu
<br>
<p>


<br><hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13412/async-signal-safe-stacktrace.patch">async-signal-safe-stacktrace.patch</a>
</ul>
<!-- attachment="async-signal-safe-stacktrace.patch" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13412/mpisigabrt.c">mpisigabrt.c</a>
</ul>
<!-- attachment="mpisigabrt.c" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13412/mpisigabrt.gstack.txt">mpisigabrt.gstack.txt</a>
</ul>
<!-- attachment="mpisigabrt.gstack.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13413.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Test suite of openMPI 1.7.3 fails"</a>
<li><strong>Previous message:</strong> <a href="13411.php">Ralph Castain: "Re: [OMPI devel] [PATCH v2] Trying to get the C/R code to compile again. (last)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13463.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [patch] async-signal-safe signal handler"</a>
<li><strong>Reply:</strong> <a href="13463.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [patch] async-signal-safe signal handler"</a>
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
