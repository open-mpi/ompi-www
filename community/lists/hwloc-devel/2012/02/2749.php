<?
$subject_val = "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 01:18:36 2012" -->
<!-- isoreceived="20120201061836" -->
<!-- sent="Wed, 01 Feb 2012 07:18:28 +0100" -->
<!-- isosent="20120201061828" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu" -->
<!-- id="4F28D934.1000709_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F28D26B.2090000_at_lbl.gov" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 01:18:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2750.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 install failure w/ older GNU sed"</a>
<li><strong>Previous message:</strong> <a href="2748.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>In reply to:</strong> <a href="2748.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2760.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 01/02/2012 06:49, Paul H. Hargrove a &#233;crit :
<br>
<span class="quotelev1">&gt; The failure is only w/ {C,CXX}FLAGS=-mabi=64.
</span><br>
<span class="quotelev1">&gt; With the &quot;32&quot; or &quot;n32&quot; ABI's there is no problem.
</span><br>
<span class="quotelev1">&gt; That is why it was not seen on the 32-bit system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have no other gcc for that system at the moment.
</span><br>
<span class="quotelev1">&gt; So, I can't determine if it is a compiler bug.
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; FAIL: test-hwloc-distances.sh
</span><br>
<span class="quotelev2">&gt;&gt; with just one difference:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Latency matrix between 16 PUs (depth 4) by logical indexes (below
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Machine L#0):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +Latency matrix between 16 PUs (depth 3) by logical indexes (below
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Machine L#0):
</span><br>
<p>This one is completely crazy. It's early morning here, but such a
<br>
difference tells me to forget about this report :)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2750.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 install failure w/ older GNU sed"</a>
<li><strong>Previous message:</strong> <a href="2748.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<li><strong>In reply to:</strong> <a href="2748.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2760.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
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
