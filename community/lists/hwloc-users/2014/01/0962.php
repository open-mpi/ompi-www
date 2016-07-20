<?
$subject_val = "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 28 07:00:34 2014" -->
<!-- isoreceived="20140128120034" -->
<!-- sent="Tue, 28 Jan 2014 13:00:32 +0100" -->
<!-- isosent="20140128120032" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64" -->
<!-- id="20140128120032.GS5838_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="52E79876.9090601_at_inria.fr" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-28 07:00:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0963.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] CPU info on ARM"</a>
<li><strong>Previous message:</strong> <a href="0961.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>In reply to:</strong> <a href="0961.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0964.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Reply:</strong> <a href="0964.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Tue 28 Jan 2014 12:46:24 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt;   42: xchg %ebx,%rbx
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess having both ebx and rbx on these lines isn't OK. On Linux, I get
</span><br>
<span class="quotelev1">&gt; rsi instead of ebx, no problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel, any idea?
</span><br>
<p>Mmm, IIRC, &quot;unsigned long&quot; on windows may not be 64bit but 32bit?
<br>
Perhaps we could rather include stdint.h and use uintptr_t or uint64_t
<br>
there (so any other unix with 32bit unsigned long is fixed), and in the
<br>
case of windows, include windows.h and use DWORDLONG.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0963.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] CPU info on ARM"</a>
<li><strong>Previous message:</strong> <a href="0961.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>In reply to:</strong> <a href="0961.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0964.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Reply:</strong> <a href="0964.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
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
