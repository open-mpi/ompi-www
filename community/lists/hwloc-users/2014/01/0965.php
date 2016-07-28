<?
$subject_val = "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 28 10:32:24 2014" -->
<!-- isoreceived="20140128153224" -->
<!-- sent="Tue, 28 Jan 2014 16:32:16 +0100" -->
<!-- isosent="20140128153216" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64" -->
<!-- id="52E7CD80.5070603_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52E7B139.5050405_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-28 10:32:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0966.php">Robin Scher: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Previous message:</strong> <a href="0964.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>In reply to:</strong> <a href="0964.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0966.php">Robin Scher: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Reply:</strong> <a href="0966.php">Robin Scher: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/01/2014 14:31, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 28/01/2014 13:00, Samuel Thibault a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Brice Goglin, le Tue 28 Jan 2014 12:46:24 +0100, a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   42: xchg %ebx,%rbx
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I guess having both ebx and rbx on these lines isn't OK. On Linux, I get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rsi instead of ebx, no problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Samuel, any idea?
</span><br>
<span class="quotelev2">&gt;&gt; Mmm, IIRC, &quot;unsigned long&quot; on windows may not be 64bit but 32bit?
</span><br>
<span class="quotelev2">&gt;&gt; Perhaps we could rather include stdint.h and use uintptr_t or uint64_t
</span><br>
<span class="quotelev2">&gt;&gt; there (so any other unix with 32bit unsigned long is fixed), and in the
</span><br>
<span class="quotelev2">&gt;&gt; case of windows, include windows.h and use DWORDLONG.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>The attached patch gets the x86 backend working on win32 and win64
<br>
(without breaking Linux/*BSD on ci.inria.fr).
<br>
I am reusing the hwloc_uint64_t logic by manually reimplementing what's
<br>
not in hwloc/autogen/config.h yet.
<br>
<p>Robin, I can send a new win64 build (based on master/v1.9) if you want
<br>
to test before I release an official v1.8 fix.
<br>
<p>Brice
<br>
<p><p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0965/fix_win64_cpuid.patch">fix_win64_cpuid.patch</a>
</ul>
<!-- attachment="fix_win64_cpuid.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0966.php">Robin Scher: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Previous message:</strong> <a href="0964.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>In reply to:</strong> <a href="0964.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0966.php">Robin Scher: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Reply:</strong> <a href="0966.php">Robin Scher: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
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
