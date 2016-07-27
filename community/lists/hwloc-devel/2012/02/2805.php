<?
$subject_val = "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  3 14:53:10 2012" -->
<!-- isoreceived="20120203195310" -->
<!-- sent="Fri, 03 Feb 2012 11:52:48 -0800" -->
<!-- isosent="20120203195248" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu" -->
<!-- id="4F2C3B10.3040903_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F2C2B67.1060300_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-03 14:52:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2806.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Previous message:</strong> <a href="2804.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>In reply to:</strong> <a href="2803.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2806.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Reply:</strong> <a href="2806.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/3/2012 10:45 AM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/3/2012 10:01 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove, le Wed 01 Feb 2012 20:18:59 +0100, a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So if qemu's emulation were at fault, then one would expect more 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wide-spread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problems and a generally unstable system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While -mabi=64 is not the default in user-space, it IS the way the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; kernel is built and thus should be well tested.
</span><br>
<span class="quotelev2">&gt;&gt; Except that it does not use floating point operations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I probably spoke too quickly in defense of qemu.
</span><br>
<span class="quotelev1">&gt; I forgot that the reason I have a weird lenny/etch-and-a-half system 
</span><br>
<span class="quotelev1">&gt; for mips64 is that I can't boot later kernels.
</span><br>
<span class="quotelev1">&gt; My mips32 on the other hand is &quot;pure&quot; squeeze.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've commited a
</span><br>
<span class="quotelev2">&gt;&gt; &quot;fix&quot;. It makes the failures change.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll retest my mips64 from svn trunk and report back my findings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Building from the trunk w/ CFLAGS=&quot;-march=5kc -mabi=64&quot; I no longer see 
<br>
any test failures.
<br>
Thanks, Samuel!
<br>
<p>I do see, from hwloc-hello:
<br>
*** The number of sockets is unknown
<br>
*** Logical processor 0 has 0 caches totaling 0KB
<br>
IFF there is reason to expect better from this system, I'd be happy to 
<br>
work w/ somebody on fixing that.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2806.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Previous message:</strong> <a href="2804.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>In reply to:</strong> <a href="2803.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2806.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Reply:</strong> <a href="2806.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
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
