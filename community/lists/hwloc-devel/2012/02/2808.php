<?
$subject_val = "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  3 19:34:09 2012" -->
<!-- isoreceived="20120204003409" -->
<!-- sent="Fri, 03 Feb 2012 16:33:50 -0800" -->
<!-- isosent="20120204003350" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu" -->
<!-- id="4F2C7CEE.3080800_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F2C5064.8040904_at_lbl.gov" -->
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
<strong>Date:</strong> 2012-02-03 19:33:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2809.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4266)"</a>
<li><strong>Previous message:</strong> <a href="2807.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>In reply to:</strong> <a href="2806.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2804.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/3/2012 1:23 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; On 2/3/2012 11:52 AM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Building from the trunk w/ CFLAGS=&quot;-march=5kc -mabi=64&quot; I no longer 
</span><br>
<span class="quotelev2">&gt;&gt; see any test failures. 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can report success with -mabi=32 and -mabi=n32 as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've finally been able to get Debian squeeze booted under 
</span><br>
<span class="quotelev1">&gt; qemu-system-mips64.
</span><br>
<span class="quotelev1">&gt; I am dropping my hybrid lenny/etch-and-a-half system in favor of this 
</span><br>
<span class="quotelev1">&gt; new one.
</span><br>
<span class="quotelev1">&gt; I'll retest, but only plan to report to hwloc-devel if results differ 
</span><br>
<span class="quotelev1">&gt; from before. 
</span><br>
<p>Some more information on this subject.
<br>
<p>I now have 2 qemu-emulated MIPS64 systems (5kc cpus).
<br>
Both are the same qemu version (0.15.1)
<br>
<p>I am using hwloc-1.5a1r4246 (the svn trunk tarball from lastnight).
<br>
So, I am NOT expecting Samuel's recent fix in this build.
<br>
<p>+ One running Debian Squeeze passed &quot;make all install check&quot; for all 3 
<br>
ABIs, as reported above.
<br>
+ One running Debian Lenny passed the default (32) ABI, but fails as 
<br>
before for &quot;64&quot; and &quot;n32&quot; ABIs:
<br>
<span class="quotelev1">&gt; -Latency matrix between 16 PUs (depth 4) by logical indexes (below 
</span><br>
<span class="quotelev1">&gt; Machine L#0):
</span><br>
<span class="quotelev1">&gt; +Latency matrix between 16 PUs (depth 3) by logical indexes (below 
</span><br>
<span class="quotelev1">&gt; Machine L#0):
</span><br>
<p><p>This time I have a completely &quot;pure&quot; Lenny system from scratch (no etch 
<br>
or etch-and-a-half bits).
<br>
So, I think I am in agreement w/ Samuel that Lenny &quot;has issues&quot;.
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
<li><strong>Next message:</strong> <a href="2809.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5a1r4266)"</a>
<li><strong>Previous message:</strong> <a href="2807.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>In reply to:</strong> <a href="2806.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2804.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
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
