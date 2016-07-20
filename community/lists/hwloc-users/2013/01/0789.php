<?
$subject_val = "Re: [hwloc-users] Single hwloc.h header files that work on linux and windows";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 16:42:40 2013" -->
<!-- isoreceived="20130103214240" -->
<!-- sent="Thu, 3 Jan 2013 22:42:33 +0100" -->
<!-- isosent="20130103214233" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Single hwloc.h header files that work on linux and windows" -->
<!-- id="20130103214233.GU8727_at_type.youpi.perso.aquilenet.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F35E91A4A347_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Single hwloc.h header files that work on linux and windows<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-03 16:42:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0790.php">Erik Schnetter: "[hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>Previous message:</strong> <a href="0788.php">Rolf vandeVaart: "[hwloc-users] Single hwloc.h header files that work on linux and windows"</a>
<li><strong>In reply to:</strong> <a href="0788.php">Rolf vandeVaart: "[hwloc-users] Single hwloc.h header files that work on linux and windows"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Rolf vandeVaart, le Thu 03 Jan 2013 22:30:58 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; And config.h is specific to how the library was configured.
</span><br>
<p>Not very much actually.
<br>
<p><span class="quotelev1">&gt; Is there a special hwloc.h and supporting headers that is system independent so
</span><br>
<span class="quotelev1">&gt; I can include them and build on both windows and linux?
</span><br>
<p>There isn't any at the moment.
<br>
<p><span class="quotelev1">&gt; Or do I need to have two different sets of header files, one for linux
</span><br>
<span class="quotelev1">&gt; and one for windows?  Perhaps I just need a config.h for windows and
</span><br>
<span class="quotelev1">&gt; one for linux and select them at build time.
</span><br>
<p>That should probably work.  The whole beginning of config.h is always
<br>
the same. The only generated parts is the following, with comments:
<br>
<p>- HWLOC_LINUX_SYS: just to know whether we are on Linux. That could have
<br>
&nbsp;&nbsp;been an #ifdef __linux__ actually.  That just defines whether
<br>
&nbsp;&nbsp;hwloc_set_linuxfs_hooks is available, and enables some parts of the
<br>
&nbsp;&nbsp;inlines, which you don't care about.
<br>
<p>- HWLOC_HAVE_CPU_SET: That just defines whether we can provide the glibc
<br>
&nbsp;&nbsp;inlines. Again, you don't care.
<br>
<p>- HWLOC_HAVE_WINDOWS_H: Used only below in config.h, to provide the
<br>
&nbsp;&nbsp;proper definition on windows or on Unix.
<br>
<p>- hwloc_pid_t/hwloc_thread_t: will be either pid_t/pthread_t or HANDLE,
<br>
&nbsp;&nbsp;depending on being on Unix or Windows.
<br>
<p>- HWLOC_SYM_TRANSFORM, HWLOC_SYM_PREFIX, HWLOC_SYM_PREFIX_CAPS: These
<br>
&nbsp;&nbsp;are only used for the embedded case, which I don't think you want to
<br>
&nbsp;&nbsp;support.
<br>
<p>So to summarize, having a windows version and a unix version should just
<br>
work.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0790.php">Erik Schnetter: "[hwloc-users] &quot;-lnuma&quot; missing from pkg-config information?"</a>
<li><strong>Previous message:</strong> <a href="0788.php">Rolf vandeVaart: "[hwloc-users] Single hwloc.h header files that work on linux and windows"</a>
<li><strong>In reply to:</strong> <a href="0788.php">Rolf vandeVaart: "[hwloc-users] Single hwloc.h header files that work on linux and windows"</a>
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
