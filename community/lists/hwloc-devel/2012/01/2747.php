<?
$subject_val = "[hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 23:57:47 2012" -->
<!-- isoreceived="20120201045747" -->
<!-- sent="Tue, 31 Jan 2012 20:57:25 -0800" -->
<!-- isosent="20120201045725" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu" -->
<!-- id="4F28C635.8060809_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 23:57:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2748.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Previous message:</strong> <a href="2746.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2748.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2748.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2760.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2790.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2792.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2800.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2807.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have 2 QEMU-emulated Linux/MIPS systems.
<br>
On one hwloc-1.3.1 and 1.4 are working fine.
<br>
On the other I see strange &quot;make check&quot; failures.
<br>
Unfortunately they differ in both distro version and 32- vs 64-bit, 
<br>
making it hard to pin down the cause.
<br>
<p>The newer distro w/ the 32-bt kernel is OK:
<br>
<span class="quotelev1">&gt; $ cat /etc/debian_version ; uname -a
</span><br>
<span class="quotelev1">&gt; 6.0.3
</span><br>
<span class="quotelev1">&gt; Linux debian-mips 2.6.32-5-4kc-malta #1 Thu Nov 3 05:21:00 UTC 2011 
</span><br>
<span class="quotelev1">&gt; mips GNU/Linux
</span><br>
<p>The older distro w/ the 64-bit kernel is failing:
<br>
<span class="quotelev1">&gt; $ cat /etc/debian_version ; uname -a
</span><br>
<span class="quotelev1">&gt; 5.0.9
</span><br>
<span class="quotelev1">&gt; Linux qemu-hargrove-mips 2.6.24-etchnhalf.1-5kc-malta #1 Thu Oct 16 
</span><br>
<span class="quotelev1">&gt; 01:21:56 BST 2008 mips64 GNU/Linux
</span><br>
<p>W/ hwloc-1.3.1 the failure is
<br>
<span class="quotelev1">&gt; FAIL: 256ia64-64n2s2c.output
</span><br>
with numerous differences in the diff output.
<br>
<p>W/ hwloc-1.4 the failure is
<br>
<span class="quotelev1">&gt; FAIL: test-hwloc-distances.sh
</span><br>
with just one difference:
<br>
<span class="quotelev1">&gt; -Latency matrix between 16 PUs (depth 4) by logical indexes (below 
</span><br>
<span class="quotelev1">&gt; Machine L#0):
</span><br>
<span class="quotelev1">&gt; +Latency matrix between 16 PUs (depth 3) by logical indexes (below 
</span><br>
<span class="quotelev1">&gt; Machine L#0):
</span><br>
BUT, there is also a bus error that is being reported as a PASS:
<br>
<span class="quotelev1">&gt; Machine (247MB) + PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt; ./test-hwloc-ls.sh: line 50:  7061 Bus error               $ls 
</span><br>
<span class="quotelev1">&gt; $tmp/test.txt
</span><br>
<span class="quotelev1">&gt; PASS: test-hwloc-ls.sh
</span><br>
<p>At the moment my suspicion falls on the compiler, as I can't see how a 
<br>
failure of 256ia64-64n2s2c.output could be h/w dependent.
<br>
<p>-Paul
<br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2748.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Previous message:</strong> <a href="2746.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2748.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2748.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2760.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2790.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2792.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2800.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/02/2807.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
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
