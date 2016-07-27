<?
$subject_val = "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 18:00:51 2015" -->
<!-- isoreceived="20150728220051" -->
<!-- sent="Tue, 28 Jul 2015 15:00:36 -0700" -->
<!-- isosent="20150728220036" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler" -->
<!-- id="CAAvDA14G7+1fu+eTcBhhT5wvp-D2ncLbEGS4TGY+JrKU46ruFQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20150728211540.GA3467_at_type.home" -->
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
<strong>Date:</strong> 2015-07-28 18:00:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4525.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="4523.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>In reply to:</strong> <a href="4523.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4525.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Reply:</strong> <a href="4525.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Reply:</strong> <a href="4526.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jul 28, 2015 at 2:15 PM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Paul Hargrove, le Tue 28 Jul 2015 13:28:00 -0700, a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt; &gt; I am more concerned about dropping the input constraints in favor of
</span><br>
<span class="quotelev1">&gt; &quot;+a&quot; and
</span><br>
<span class="quotelev2">&gt; &gt; &quot;+c&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; For a *correct* compiler that should be equivalent, but the reason we
</span><br>
<span class="quotelev1">&gt; are doing
</span><br>
<span class="quotelev2">&gt; &gt; this is because some compilers are buggy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wouldn't say &quot;buggy&quot;. Usually the issue is that the register allocator
</span><br>
<span class="quotelev1">&gt; is not smart enough to get its way through (which was the original issue
</span><br>
<span class="quotelev1">&gt; of this thread).  I'd be really surprised that there'd be real bugs
</span><br>
<span class="quotelev1">&gt; here, and to me &quot;+a&quot; seems actually safer than &quot;=a&quot; : &quot;0&quot;, if any.
</span><br>
<p><p>Well, for the compiler that accepted the &quot;=r&quot; form and then generated code
<br>
that SEGV'd I would say &quot;buggy&quot;.
<br>
Other than that one, I agree that a &quot;weak&quot; register allocator is not
<br>
precisely a &quot;bug&quot;.
<br>
<p>Here is the good news:
<br>
<p>I have retested all 28 system/compiler combinations I had tested my
<br>
original patches against.
<br>
This time I started with the 1.11.0 release tarball and applied Samuel's
<br>
commit 46deaebf.
<br>
<p>All looked fine *except* the following with icc-15 with -m32 on a x86-64
<br>
Ubuntu 12.04.5 system:
<br>
&nbsp;&nbsp;&nbsp;FAIL: 256ia64-64n2s2c.output
<br>
I don't see how that could possibly be related to the inline asm for cpuid,
<br>
and have confirmed that the same failure occurs without the patch (but it
<br>
is absent w/o -m32).
<br>
<p>I noticed an early-clobber applied to &quot;1&quot; and &quot;3&quot; in master.
<br>
I am retesting that now (still as applied to 1.11.0)
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4524/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4525.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Previous message:</strong> <a href="4523.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>In reply to:</strong> <a href="4523.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4525.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Reply:</strong> <a href="4525.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
<li><strong>Reply:</strong> <a href="4526.php">Paul Hargrove: "Re: [hwloc-devel] hwloc-1.11 failure with pgi compiler"</a>
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
