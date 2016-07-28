<?
$subject_val = "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 17 10:51:52 2012" -->
<!-- isoreceived="20120117155152" -->
<!-- sent="Tue, 17 Jan 2012 16:51:47 +0100" -->
<!-- isosent="20120117155147" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind" -->
<!-- id="20120117155147.GB4320_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="375584549.416144.1326809712553.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-17 10:51:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0523.php">Brice Goglin: "[hwloc-users] removing old cpuset API?"</a>
<li><strong>Previous message:</strong> <a href="0521.php">Samuel Thibault: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<li><strong>Maybe in reply to:</strong> <a href="0518.php">Marc-Andr&#233; Hermanns: "[hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Marc-Andr&#233; Hermanns, le Tue 17 Jan 2012 15:15:12 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; write(1, &quot;This system has 4 levels\n&quot;, 25) = 25
</span><br>
<span class="quotelev1">&gt; open(&quot;/proc/self/task&quot;, O_RDONLY|O_NONBLOCK|O_LARGEFILE|O_DIRECTORY|O_CLOEXEC) = 4
</span><br>
<span class="quotelev1">&gt; fcntl64(4, F_GETFD)                     = 0x1 (flags FD_CLOEXEC)
</span><br>
<span class="quotelev1">&gt; fstat64(4, {st_mode=S_IFDIR|0555, st_size=0, ...}) = 0
</span><br>
<span class="quotelev1">&gt; lseek(4, 0, SEEK_SET)                   = 0
</span><br>
<span class="quotelev1">&gt; getdents(4, /* 3 entries */, 32768)     = 52
</span><br>
<p>3 entries, so I guess /proc/self/task properly contains &quot;.&quot;, &quot;..&quot;, and
<br>
the pid.
<br>
<p><span class="quotelev1">&gt; getdents(4, /* 0 entries */, 32768)     = 0
</span><br>
<span class="quotelev1">&gt; sched_getaffinity(0, 4, {fff})          = 4
</span><br>
<span class="quotelev1">&gt; sched_getaffinity(19173, 4, {fff})      = 4
</span><br>
<p>I don't understand how a call to last_cpu_location can result in
<br>
calling sched_getaffinity. Could you build with CFLAGS=-g, run the
<br>
program in gdb, put a breakpoint on hwloc_linux_get_tid_cpubind and
<br>
hwloc_linux_get_thread_cpubind, and send us the resulting backtrace?
<br>
<p>Thanks,
<br>
Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0523.php">Brice Goglin: "[hwloc-users] removing old cpuset API?"</a>
<li><strong>Previous message:</strong> <a href="0521.php">Samuel Thibault: "Re: [hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
<li><strong>Maybe in reply to:</strong> <a href="0518.php">Marc-Andr&#233; Hermanns: "[hwloc-users] hwloc_get_last_cpu_location and hwloc_get_cpubind"</a>
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
