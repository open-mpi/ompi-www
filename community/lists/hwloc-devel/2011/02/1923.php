<?
$subject_val = "Re: [hwloc-devel] get cpu where a process/thread is executing";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 12 17:23:57 2011" -->
<!-- isoreceived="20110212222357" -->
<!-- sent="Sat, 12 Feb 2011 23:23:46 +0100" -->
<!-- isosent="20110212222346" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] get cpu where a process/thread is executing" -->
<!-- id="20110212222346.GM5131_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1128870987.1818120.1297182712624.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] get cpu where a process/thread is executing<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-12 17:23:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1924.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Previous message:</strong> <a href="1922.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1915.php">Brice Goglin: "[hwloc-devel] get cpu where a process/thread is executing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1933.php">Jeff Squyres: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Reply:</strong> <a href="1933.php">Jeff Squyres: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Brice Goglin, le Tue 08 Feb 2011 17:31:52 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; If we only support single threads, we can return a single CPU number. If
</span><br>
<span class="quotelev1">&gt; we support multithreaded processes, we must return multiple numbers. So
</span><br>
<span class="quotelev1">&gt; I am returning a cpuset here.
</span><br>
<p>Agreed.
<br>
<p><span class="quotelev1">&gt; * I am not such a big fan of get_cpuexec and get_proc_cpuexec names, any
</span><br>
<span class="quotelev1">&gt; better names?
</span><br>
<p>I've often seen things like get_currentcpu
<br>
<p><span class="quotelev1">&gt; * Do we want something to retrieve the current location of pages in
</span><br>
<span class="quotelev1">&gt; memory too? Linux can do this on a page per page basis with the
</span><br>
<span class="quotelev1">&gt; move_pages syscall
</span><br>
<p>That can be useful, yes.
<br>
<p><span class="quotelev1">&gt; Index: src/bind.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- src/bind.c	(r??vision 3167)
</span><br>
<span class="quotelev1">&gt; +++ src/bind.c	(copie de travail)
</span><br>
<span class="quotelev1">&gt; @@ -16,7 +16,9 @@
</span><br>
<span class="quotelev1">&gt;  #ifdef HAVE_MALLOC_H
</span><br>
<span class="quotelev1">&gt;  #  include &lt;malloc.h&gt;
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; +#ifdef HWLOC_HAVE_GET_PROC_STATS
</span><br>
<span class="quotelev1">&gt; +#  include &lt;proc/readproc.h&gt;
</span><br>
<span class="quotelev1">&gt; +#endif
</span><br>
<p>Err, that should rather be a OS-specific hook (libproc is mostly
<br>
linux-specific, I'm also wondering whether it's worth depending on it
<br>
when parsing /proc/pid/stat is very easy, it's the 39th field).  For the
<br>
windows case, could you just put a &quot;TODO: use GetCurrentProcessorNumber&quot;
<br>
comment?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1924.php">Samuel Thibault: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Previous message:</strong> <a href="1922.php">Samuel Thibault: "Re: [hwloc-devel] What does this C99 notation mean?"</a>
<li><strong>Maybe in reply to:</strong> <a href="1915.php">Brice Goglin: "[hwloc-devel] get cpu where a process/thread is executing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1933.php">Jeff Squyres: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
<li><strong>Reply:</strong> <a href="1933.php">Jeff Squyres: "Re: [hwloc-devel] get cpu where a process/thread is executing"</a>
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
