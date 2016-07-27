<?
$subject_val = "Re: [hwloc-devel] Valgrind errors for hwloc_bind in 1.1rc4r2825";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 24 02:30:19 2010" -->
<!-- isoreceived="20101124073019" -->
<!-- sent="Wed, 24 Nov 2010 08:30:13 +0100" -->
<!-- isosent="20101124073013" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Valgrind errors for hwloc_bind in 1.1rc4r2825" -->
<!-- id="4CECBF05.3090706_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CECAEEF.6050408_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Valgrind errors for hwloc_bind in 1.1rc4r2825<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-24 02:30:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1595.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2831"</a>
<li><strong>Previous message:</strong> <a href="1593.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1584.php">Christopher Samuel: "[hwloc-devel] Valgrind errors for hwloc_bind in 1.1rc4r2825"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 24/11/2010 07:21, Christopher Samuel a &#233;crit :
<br>
<span class="quotelev1">&gt; This is the error on x86-64:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==13648== 6 errors in context 1 of 1:
</span><br>
<span class="quotelev1">&gt; ==13648== Conditional jump or move depends on uninitialised value(s)
</span><br>
<span class="quotelev1">&gt; ==13648==    at 0x40B678: hwloc_alloc (bind.c:451)
</span><br>
<p>Just fixed it.
<br>
<p><span class="quotelev1">&gt; ==6259== 1 errors in context 1 of 18:
</span><br>
<span class="quotelev1">&gt; ==6259== Syscall param get_mempolicy(nodemask) points to unaddressable
</span><br>
<span class="quotelev1">&gt; byte(s)
</span><br>
<span class="quotelev1">&gt; ==6259==    at 0xFBE6FE0: syscall (in /lib/power6x/libc-2.4.so)
</span><br>
<span class="quotelev1">&gt; ==6259==    by 0xFC9BDCB: get_mempolicy (in /usr/lib/libnuma.so.1)
</span><br>
<span class="quotelev1">&gt; ==6259==    by 0x10016A7B: hwloc_linux_get_thisthread_membind
</span><br>
<span class="quotelev1">&gt; (topology-linux.c:1064)
</span><br>
<p>This one looks strange to me, this nodemask was allocated and checked
<br>
just above get_mempolicy. Could be a valgrind problem.
<br>
<p><span class="quotelev1">&gt; ==6259== 1 errors in context 2 of 18:
</span><br>
<span class="quotelev1">&gt; ==6259== Invalid write of size 1
</span><br>
<span class="quotelev1">&gt; ==6259==    at 0xFC005F4: __vsnprintf_chk@@GLIBC_2.4 (in
</span><br>
<span class="quotelev1">&gt; /lib/power6x/libc-2.4.so)
</span><br>
<span class="quotelev1">&gt; ==6259==    by 0xFC004F3: __snprintf_chk@@GLIBC_2.4 (in
</span><br>
<span class="quotelev1">&gt; /lib/power6x/libc-2.4.so)
</span><br>
<span class="quotelev1">&gt; ==6259==    by 0xFC9B4D3: numa_init (in /usr/lib/libnuma.so.1)
</span><br>
<p>Not from us.
<br>
<p><span class="quotelev1">&gt; ==6259== 12 errors in context 7 of 18:
</span><br>
<span class="quotelev1">&gt; ==6259== Invalid write of size 1
</span><br>
<span class="quotelev1">&gt; ==6259==    at 0xFFBA678: memset (mc_replace_strmem.c:626)
</span><br>
<span class="quotelev1">&gt; ==6259==    by 0x10016867: hwloc_linux_set_thisthread_membind
</span><br>
<span class="quotelev1">&gt; (topology-linux.c:1001)
</span><br>
<p>Memset just got fixed.
<br>
<p>The others are duplicates of these.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1595.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2831"</a>
<li><strong>Previous message:</strong> <a href="1593.php">Christopher Samuel: "Re: [hwloc-devel] hwloc 1.1 rc2 make check fails on SLES10SP1 on PPC64"</a>
<li><strong>In reply to:</strong> <a href="1584.php">Christopher Samuel: "[hwloc-devel] Valgrind errors for hwloc_bind in 1.1rc4r2825"</a>
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
