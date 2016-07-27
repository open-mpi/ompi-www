<?
$subject_val = "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 00:49:52 2012" -->
<!-- isoreceived="20120201054952" -->
<!-- sent="Tue, 31 Jan 2012 21:49:31 -0800" -->
<!-- isosent="20120201054931" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu" -->
<!-- id="4F28D26B.2090000_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F28C635.8060809_at_lbl.gov" -->
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
<strong>Date:</strong> 2012-02-01 00:49:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2749.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2747.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2747.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2749.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Reply:</strong> <a href="2749.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The failure is only w/ {C,CXX}FLAGS=-mabi=64.
<br>
With the &quot;32&quot; or &quot;n32&quot; ABI's there is no problem.
<br>
That is why it was not seen on the 32-bit system.
<br>
<p>I have no other gcc for that system at the moment.
<br>
So, I can't determine if it is a compiler bug.
<br>
It may also be a matter of which libs exist in 32-vs-64 bit versions on 
<br>
this system.
<br>
<p>-Paul
<br>
<p>On 1/31/2012 8:57 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; I have 2 QEMU-emulated Linux/MIPS systems.
</span><br>
<span class="quotelev1">&gt; On one hwloc-1.3.1 and 1.4 are working fine.
</span><br>
<span class="quotelev1">&gt; On the other I see strange &quot;make check&quot; failures.
</span><br>
<span class="quotelev1">&gt; Unfortunately they differ in both distro version and 32- vs 64-bit, 
</span><br>
<span class="quotelev1">&gt; making it hard to pin down the cause.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The newer distro w/ the 32-bt kernel is OK:
</span><br>
<span class="quotelev2">&gt;&gt; $ cat /etc/debian_version ; uname -a
</span><br>
<span class="quotelev2">&gt;&gt; 6.0.3
</span><br>
<span class="quotelev2">&gt;&gt; Linux debian-mips 2.6.32-5-4kc-malta #1 Thu Nov 3 05:21:00 UTC 2011 
</span><br>
<span class="quotelev2">&gt;&gt; mips GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The older distro w/ the 64-bit kernel is failing:
</span><br>
<span class="quotelev2">&gt;&gt; $ cat /etc/debian_version ; uname -a
</span><br>
<span class="quotelev2">&gt;&gt; 5.0.9
</span><br>
<span class="quotelev2">&gt;&gt; Linux qemu-hargrove-mips 2.6.24-etchnhalf.1-5kc-malta #1 Thu Oct 16 
</span><br>
<span class="quotelev2">&gt;&gt; 01:21:56 BST 2008 mips64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; W/ hwloc-1.3.1 the failure is
</span><br>
<span class="quotelev2">&gt;&gt; FAIL: 256ia64-64n2s2c.output
</span><br>
<span class="quotelev1">&gt; with numerous differences in the diff output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; W/ hwloc-1.4 the failure is
</span><br>
<span class="quotelev2">&gt;&gt; FAIL: test-hwloc-distances.sh
</span><br>
<span class="quotelev1">&gt; with just one difference:
</span><br>
<span class="quotelev2">&gt;&gt; -Latency matrix between 16 PUs (depth 4) by logical indexes (below 
</span><br>
<span class="quotelev2">&gt;&gt; Machine L#0):
</span><br>
<span class="quotelev2">&gt;&gt; +Latency matrix between 16 PUs (depth 3) by logical indexes (below 
</span><br>
<span class="quotelev2">&gt;&gt; Machine L#0):
</span><br>
<span class="quotelev1">&gt; BUT, there is also a bus error that is being reported as a PASS:
</span><br>
<span class="quotelev2">&gt;&gt; Machine (247MB) + PU L#0 (P#0)
</span><br>
<span class="quotelev2">&gt;&gt; ./test-hwloc-ls.sh: line 50:  7061 Bus error               $ls 
</span><br>
<span class="quotelev2">&gt;&gt; $tmp/test.txt
</span><br>
<span class="quotelev2">&gt;&gt; PASS: test-hwloc-ls.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At the moment my suspicion falls on the compiler, as I can't see how a 
</span><br>
<span class="quotelev1">&gt; failure of 256ia64-64n2s2c.output could be h/w dependent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
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
<li><strong>Next message:</strong> <a href="2749.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2747.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2747.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2749.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Reply:</strong> <a href="2749.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
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
