<?
$subject_val = "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 28 08:31:51 2014" -->
<!-- isoreceived="20140128133151" -->
<!-- sent="Tue, 28 Jan 2014 14:31:37 +0100" -->
<!-- isosent="20140128133137" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64" -->
<!-- id="52E7B139.5050405_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20140128120032.GS5838_at_type.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2014-01-28 08:31:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0965.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Previous message:</strong> <a href="0963.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] CPU info on ARM"</a>
<li><strong>In reply to:</strong> <a href="0962.php">Samuel Thibault: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0965.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Reply:</strong> <a href="0965.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/01/2014 13:00, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice Goglin, le Tue 28 Jan 2014 12:46:24 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;   42: xchg %ebx,%rbx
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I guess having both ebx and rbx on these lines isn't OK. On Linux, I get
</span><br>
<span class="quotelev2">&gt;&gt; rsi instead of ebx, no problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Samuel, any idea?
</span><br>
<span class="quotelev1">&gt; Mmm, IIRC, &quot;unsigned long&quot; on windows may not be 64bit but 32bit?
</span><br>
<span class="quotelev1">&gt; Perhaps we could rather include stdint.h and use uintptr_t or uint64_t
</span><br>
<span class="quotelev1">&gt; there (so any other unix with 32bit unsigned long is fixed), and in the
</span><br>
<span class="quotelev1">&gt; case of windows, include windows.h and use DWORDLONG.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Indeed, hacking this manually makes configure happy and Win64 now
<br>
reports CPUModel properly. I'll try to come with a clean patch.
<br>
thanks
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0965.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Previous message:</strong> <a href="0963.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] CPU info on ARM"</a>
<li><strong>In reply to:</strong> <a href="0962.php">Samuel Thibault: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0965.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Reply:</strong> <a href="0965.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
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
