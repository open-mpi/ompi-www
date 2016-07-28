<?
$subject_val = "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 28 06:46:00 2014" -->
<!-- isoreceived="20140128114600" -->
<!-- sent="Tue, 28 Jan 2014 12:45:58 +0100" -->
<!-- isosent="20140128114558" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64" -->
<!-- id="52E79876.9090601_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52E770FA.7000309_at_inria.fr" -->
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
<strong>Date:</strong> 2014-01-28 06:45:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0962.php">Samuel Thibault: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Previous message:</strong> <a href="0960.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>In reply to:</strong> <a href="0960.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0962.php">Samuel Thibault: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Reply:</strong> <a href="0962.php">Samuel Thibault: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/01/2014 09:57, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; I will debug a bit more to see if it's actually a 64bit cpuid problem
</span><br>
<span class="quotelev1">&gt; on windows.
</span><br>
<p>The x86 backend is entirely disabled in the 64bit windows build because
<br>
configure fails to compile the cpuid assembly (in my mingw64 with gcc 4.7).
<br>
<p>It says:
<br>
&nbsp;&nbsp;40: Error: unsupported for 'mov'
<br>
&nbsp;&nbsp;42: Error: register type mismatch for 'xchg'
<br>
and these correspond to:
<br>
&nbsp;&nbsp;40: mov %rbx,%ebx
<br>
&nbsp;&nbsp;41: cpuid
<br>
&nbsp;&nbsp;42: xchg %ebx,%rbx
<br>
which come from:
<br>
&nbsp;&nbsp;asm(
<br>
&nbsp;&nbsp;&quot;mov %%rbx,%2\n\t&quot;
<br>
&nbsp;&nbsp;&quot;cpuid\n\t&quot;
<br>
&nbsp;&nbsp;&quot;xchg %2,%%rbx\n\t&quot;
<br>
&nbsp;&nbsp;&quot;movl %k2,%1\n\t&quot;
<br>
&nbsp;&nbsp;: &quot;+a&quot; (*eax), &quot;=m&quot; (*ebx), &quot;=&amp;r&quot;(sav_rbx),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&quot;+c&quot; (*ecx), &quot;=&amp;d&quot; (*edx));
<br>
<p>I guess having both ebx and rbx on these lines isn't OK. On Linux, I get
<br>
rsi instead of ebx, no problem.
<br>
<p>Samuel, any idea?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0962.php">Samuel Thibault: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Previous message:</strong> <a href="0960.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>In reply to:</strong> <a href="0960.php">Brice Goglin: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0962.php">Samuel Thibault: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
<li><strong>Reply:</strong> <a href="0962.php">Samuel Thibault: "Re: [hwloc-users] Having trouble getting CPU Model string on Windows 7 x64"</a>
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
