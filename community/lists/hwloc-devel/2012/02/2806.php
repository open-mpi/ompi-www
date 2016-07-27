<?
$subject_val = "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  3 16:24:05 2012" -->
<!-- isoreceived="20120203212405" -->
<!-- sent="Fri, 03 Feb 2012 13:23:48 -0800" -->
<!-- isosent="20120203212348" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu" -->
<!-- id="4F2C5064.8040904_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F2C3B10.3040903_at_lbl.gov" -->
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
<strong>Date:</strong> 2012-02-03 16:23:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2807.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Previous message:</strong> <a href="2805.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>In reply to:</strong> <a href="2805.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2808.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Reply:</strong> <a href="2808.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/3/2012 11:52 AM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; Building from the trunk w/ CFLAGS=&quot;-march=5kc -mabi=64&quot; I no longer 
</span><br>
<span class="quotelev1">&gt; see any test failures. 
</span><br>
<p>I can report success with -mabi=32 and -mabi=n32 as well.
<br>
<p>I've finally been able to get Debian squeeze booted under 
<br>
qemu-system-mips64.
<br>
I am dropping my hybrid lenny/etch-and-a-half system in favor of this 
<br>
new one.
<br>
I'll retest, but only plan to report to hwloc-devel if results differ 
<br>
from before.
<br>
<p>-Paul
<br>
<p>For the curious:
<br>
squeeze + qemu-system-mips64/5kc/malta:
<br>
&nbsp;&nbsp;&nbsp;qemu 0.12.5: recursive fault during system startup (udev?)
<br>
&nbsp;&nbsp;&nbsp;qemu 1.0: no networking
<br>
&nbsp;&nbsp;&nbsp;qemu 0.15.1: WORKS (so far)
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
<li><strong>Next message:</strong> <a href="2807.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Previous message:</strong> <a href="2805.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>In reply to:</strong> <a href="2805.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2808.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Reply:</strong> <a href="2808.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
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
