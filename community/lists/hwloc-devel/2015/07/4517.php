<?
$subject_val = "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 10:13:51 2015" -->
<!-- isoreceived="20150728141351" -->
<!-- sent="Tue, 28 Jul 2015 16:13:49 +0200" -->
<!-- isosent="20150728141349" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler" -->
<!-- id="55B78E1D.7050104_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20150728135516.GJ3090_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-28 10:13:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4518.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="4516.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>In reply to:</strong> <a href="4516.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4518.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Reply:</strong> <a href="4518.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/07/2015 15:55, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul Hargrove, le Mon 20 Jul 2015 23:12:10 -0700, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I believe the following inline x86 asm is correct and more robust than the
</span><br>
<span class="quotelev2">&gt;&gt; existing code that pgi appears to reject:
</span><br>
<span class="quotelev1">&gt; Indeed, in the 32bit case, we don't need to shuffle between 32 and 64bit
</span><br>
<span class="quotelev1">&gt; values, so it's simpler to just use a register. It's surprising that
</span><br>
<span class="quotelev1">&gt; letting the compiler decide the register fails more than just specifying
</span><br>
<span class="quotelev1">&gt; SD, but since wide testing shows that, then let's go with it.
</span><br>
<p>My main concern about all this is that we talked about changing &quot;m&quot; into
<br>
&quot;SD&quot; but Paul's patch did much more than that:
<br>
<p>--- a/include/private/cpuid-x86.h
<br>
+++ b/include/private/cpuid-x86.h
<br>
@@ -72,14 +72,12 @@ static __hwloc_inline void hwloc_x86_cpuid(unsigned *eax, unsigned *ebx, unsigne
<br>
&nbsp;&nbsp;&nbsp;: &quot;+a&quot; (*eax), &quot;=m&quot; (*ebx), &quot;=&amp;r&quot;(sav_rbx),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;+c&quot; (*ecx), &quot;=&amp;d&quot; (*edx));
<br>
&nbsp;#elif defined(HWLOC_X86_32_ARCH)
<br>
-  unsigned long sav_ebx;
<br>
&nbsp;&nbsp;&nbsp;__asm__(
<br>
-  &quot;mov %%ebx,%2\n\t&quot;
<br>
+  &quot;xchg %%ebx,%1\n\t&quot;
<br>
&nbsp;&nbsp;&nbsp;&quot;cpuid\n\t&quot;
<br>
-  &quot;xchg %2,%%ebx\n\t&quot;
<br>
-  &quot;movl %k2,%1\n\t&quot;
<br>
-  : &quot;+a&quot; (*eax), &quot;=m&quot; (*ebx), &quot;=&amp;r&quot;(sav_ebx),
<br>
-    &quot;+c&quot; (*ecx), &quot;=&amp;d&quot; (*edx));
<br>
+  &quot;xchg %%ebx,%1\n\t&quot;
<br>
+  : &quot;=a&quot; (*eax), &quot;=SD&quot; (*ebx), &quot;=c&quot; (*ecx), &quot;=d&quot; (*edx)
<br>
+  : &quot;0&quot; (*eax), &quot;2&quot; (*ecx));
<br>
&nbsp;#else
<br>
&nbsp;#error unknown architecture
<br>
&nbsp;#endif
<br>
<p><p>and your commit is slightly different: (s/xchg/mov/ and removed last line).
<br>
<p>--- a/include/private/cpuid-x86.h
<br>
+++ b/include/private/cpuid-x86.h
<br>
@@ -72,14 +72,11 @@ static __hwloc_inline void hwloc_x86_cpuid(unsigned *eax, unsigned *ebx, unsigne
<br>
&nbsp;&nbsp;&nbsp;: &quot;+a&quot; (*eax), &quot;=m&quot; (*ebx), &quot;=&amp;r&quot;(sav_rbx),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;+c&quot; (*ecx), &quot;=&amp;d&quot; (*edx));
<br>
&nbsp;#elif defined(HWLOC_X86_32_ARCH)
<br>
-  unsigned long sav_ebx;
<br>
&nbsp;&nbsp;&nbsp;__asm__(
<br>
-  &quot;mov %%ebx,%2\n\t&quot;
<br>
+  &quot;mov %%ebx,%1\n\t&quot;
<br>
&nbsp;&nbsp;&nbsp;&quot;cpuid\n\t&quot;
<br>
-  &quot;xchg %2,%%ebx\n\t&quot;
<br>
-  &quot;movl %k2,%1\n\t&quot;
<br>
-  : &quot;+a&quot; (*eax), &quot;=m&quot; (*ebx), &quot;=&amp;r&quot;(sav_ebx),
<br>
-    &quot;+c&quot; (*ecx), &quot;=&amp;d&quot; (*edx));
<br>
+  &quot;xchg %%ebx,%1\n\t&quot;
<br>
+  : &quot;+a&quot; (*eax), &quot;=SD&quot; (*ebx), &quot;+c&quot; (*ecx), &quot;=d&quot; (*edx));
<br>
&nbsp;#else
<br>
&nbsp;#error unknown architecture
<br>
&nbsp;#endif
<br>
<p>Without much explanation in git log, the history of all these fragile
<br>
asm changes becomes quite hard to read for normal people :/
<br>
<p>My regression testing is happy so far, but it would be nice if Paul
<br>
could check again.
<br>
<p><span class="quotelev1">&gt; I'm however afraid that this code has again posed problem, even if we
</span><br>
<span class="quotelev1">&gt; do test its compilation in configure.ac.  I'm wondering: instead of
</span><br>
<span class="quotelev1">&gt; insisting on inlining this function, we should perhaps just put it in a
</span><br>
<span class="quotelev1">&gt; separate .c file, which we try to compile from configure.ac exactly the
</span><br>
<span class="quotelev1">&gt; same way as it will be for libhwloc.so?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>FWIW, in master we don't have multiple inlining anymore (there's a
<br>
wrapper function calling this inline asm).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4518.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="4516.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>In reply to:</strong> <a href="4516.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4518.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Reply:</strong> <a href="4518.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
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
