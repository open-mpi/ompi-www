<?
$subject_val = "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 18:41:44 2015" -->
<!-- isoreceived="20150728224144" -->
<!-- sent="Tue, 28 Jul 2015 15:41:40 -0700" -->
<!-- isosent="20150728224140" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler" -->
<!-- id="CAAvDA169jc5NzHDTiXTJYzU14278TsfbAP4uZLnPFmCnroFvng_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA14G7+1fu+eTcBhhT5wvp-D2ncLbEGS4TGY+JrKU46ruFQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-28 18:41:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4527.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="4525.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>In reply to:</strong> <a href="4524.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4516.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jul 28, 2015 at 3:00 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I noticed an early-clobber applied to &quot;1&quot; and &quot;3&quot; in master.
</span><br>
<span class="quotelev1">&gt; I am retesting that now (still as applied to 1.11.0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ok, with the 1.11.0 tarball patched to use the same inline asm as master we
<br>
have:
<br>
<p>#elif defined(HWLOC_X86_32_ARCH)
<br>
&nbsp;&nbsp;__asm__(
<br>
&nbsp;&nbsp;&quot;mov %%ebx,%1\n\t&quot;
<br>
&nbsp;&nbsp;&quot;cpuid\n\t&quot;
<br>
&nbsp;&nbsp;&quot;xchg %%ebx,%1\n\t&quot;
<br>
&nbsp;&nbsp;: &quot;+a&quot; (*eax), &quot;=&amp;SD&quot; (*ebx), &quot;+c&quot; (*ecx), &quot;=&amp;d&quot; (*edx));
<br>
#else
<br>
<p><p>This too works on all 28 platform/compiler combinations for which I have
<br>
test scripts setup.
<br>
<p>Interestingly, this error:
<br>
<p><span class="quotelev1">&gt; All looked fine *except* the following with icc-15 with -m32 on a x86-64
</span><br>
<span class="quotelev1">&gt; Ubuntu 12.04.5 system:
</span><br>
<span class="quotelev1">&gt;    FAIL: 256ia64-64n2s2c.output
</span><br>
<span class="quotelev1">&gt; I don't see how that could possibly be related to the inline asm for
</span><br>
<span class="quotelev1">&gt; cpuid, and have confirmed that the same failure occurs without the patch
</span><br>
<span class="quotelev1">&gt; (but it is absent w/o -m32).
</span><br>
<p>Occurred with both icc-14 and icc-15 on different hosts this time.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4526/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4527.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="4525.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>In reply to:</strong> <a href="4524.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4516.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
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
