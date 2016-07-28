<?
$subject_val = "Re: [hwloc-devel] hwloc and HTX device ?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 31 07:22:18 2012" -->
<!-- isoreceived="20120131122218" -->
<!-- sent="Tue, 31 Jan 2012 13:22:13 +0100" -->
<!-- isosent="20120131122213" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc and HTX device ?" -->
<!-- id="4F27DCF5.3000701_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[hwloc-devel] hwloc and HTX device ?" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc and HTX device ?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-31 07:22:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2728.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 build failure w/ Solaris Studio compilers"</a>
<li><strong>Previous message:</strong> <a href="2726.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0.4a1r4221)"</a>
<li><strong>Maybe in reply to:</strong> <a href="2719.php">Brice Goglin: "[hwloc-devel] hwloc and HTX device ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(forwarding a private email to the list, with the author's approval)
<br>
<p>Thanks to Dave Love, we now know that hwloc reports HTX devices and
<br>
their location properly.
<br>
Brice
<br>
<p><p>Le 30/01/2012 15:26, Dave Love a &#233;crit :
<br>
<span class="quotelev1">&gt; I just looked at the hwloc mail archive and saw your post about this.  I
</span><br>
<span class="quotelev1">&gt; don't know if the results below are right, but I can provide more info
</span><br>
<span class="quotelev1">&gt; if it helps, e.g. with a different hwloc, or even check the MB
</span><br>
<span class="quotelev1">&gt; physically on a dead one of these.  I might have some questions in
</span><br>
<span class="quotelev1">&gt; return, though :-).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is with hwloc 1.3 under Red Hat 5 on Supermicro H8DCE-HTE with
</span><br>
<span class="quotelev1">&gt; InfiniPath_QHT7040 (ipath0):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Machine (7562MB)
</span><br>
<span class="quotelev1">&gt;   NUMANode L#0 (P#0 3522MB)
</span><br>
<span class="quotelev1">&gt;     Socket L#0
</span><br>
<span class="quotelev1">&gt;       L2 L#0 (1024KB) + L1 L#0 (64KB) + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;       L2 L#1 (1024KB) + L1 L#1 (64KB) + Core L#1 + PU L#1 (P#1)
</span><br>
<span class="quotelev1">&gt;     HostBridge L#0
</span><br>
<span class="quotelev1">&gt;       PCI 10de:0053
</span><br>
<span class="quotelev1">&gt;         Block L#0 &quot;hdc&quot;
</span><br>
<span class="quotelev1">&gt;       PCI 10de:0054
</span><br>
<span class="quotelev1">&gt;       PCI 10de:0055
</span><br>
<span class="quotelev1">&gt;       PCIBridge
</span><br>
<span class="quotelev1">&gt;         PCI 1002:4752
</span><br>
<span class="quotelev1">&gt;       PCIBridge
</span><br>
<span class="quotelev1">&gt;         PCI 14e4:1659
</span><br>
<span class="quotelev1">&gt;           Net L#1 &quot;eth0&quot;
</span><br>
<span class="quotelev1">&gt;       PCIBridge
</span><br>
<span class="quotelev1">&gt;         PCI 14e4:1659
</span><br>
<span class="quotelev1">&gt;           Net L#2 &quot;eth1&quot;
</span><br>
<span class="quotelev1">&gt;     HostBridge L#4
</span><br>
<span class="quotelev1">&gt;       PCI 1fc1:000d
</span><br>
<span class="quotelev1">&gt;         OpenFabrics L#3 &quot;ipath0&quot;
</span><br>
<span class="quotelev1">&gt;   NUMANode L#1 (P#1 4040MB)
</span><br>
<span class="quotelev1">&gt;     Socket L#1
</span><br>
<span class="quotelev1">&gt;       L2 L#2 (1024KB) + L1 L#2 (64KB) + Core L#2 + PU L#2 (P#2)
</span><br>
<span class="quotelev1">&gt;       L2 L#3 (1024KB) + L1 L#3 (64KB) + Core L#3 + PU L#3 (P#3)
</span><br>
<span class="quotelev1">&gt;     HostBridge L#5
</span><br>
<span class="quotelev1">&gt;       PCI 10de:0054
</span><br>
<span class="quotelev1">&gt;       PCI 10de:0055
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and likewise, but Supermicro H8DSL/InfiniPath_QHT7140:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Machine (7946MB)
</span><br>
<span class="quotelev1">&gt;   NUMANode L#0 (P#0 3906MB)
</span><br>
<span class="quotelev1">&gt;     Socket L#0
</span><br>
<span class="quotelev1">&gt;       L2 L#0 (1024KB) + L1 L#0 (64KB) + Core L#0 + PU L#0 (P#0)
</span><br>
<span class="quotelev1">&gt;       L2 L#1 (1024KB) + L1 L#1 (64KB) + Core L#1 + PU L#1 (P#1)
</span><br>
<span class="quotelev1">&gt;     HostBridge L#0
</span><br>
<span class="quotelev1">&gt;       PCIBridge
</span><br>
<span class="quotelev1">&gt;         PCIBridge
</span><br>
<span class="quotelev1">&gt;           PCI 14e4:1648
</span><br>
<span class="quotelev1">&gt;             Net L#0 &quot;eth0&quot;
</span><br>
<span class="quotelev1">&gt;           PCI 14e4:1648
</span><br>
<span class="quotelev1">&gt;             Net L#1 &quot;eth1&quot;
</span><br>
<span class="quotelev1">&gt;         PCI 1166:024b
</span><br>
<span class="quotelev1">&gt;         PCI 1166:024b
</span><br>
<span class="quotelev1">&gt;       PCI 1166:0214
</span><br>
<span class="quotelev1">&gt;         Block L#2 &quot;hda&quot;
</span><br>
<span class="quotelev1">&gt;       PCI 1002:4752
</span><br>
<span class="quotelev1">&gt;     HostBridge L#3
</span><br>
<span class="quotelev1">&gt;       PCI 1fc1:000d
</span><br>
<span class="quotelev1">&gt;         OpenFabrics L#3 &quot;ipath0&quot;
</span><br>
<span class="quotelev1">&gt;   NUMANode L#1 (P#1 4040MB) + Socket L#1
</span><br>
<span class="quotelev1">&gt;     L2 L#2 (1024KB) + L1 L#2 (64KB) + Core L#2 + PU L#2 (P#2)
</span><br>
<span class="quotelev1">&gt;     L2 L#3 (1024KB) + L1 L#3 (64KB) + Core L#3 + PU L#3 (P#3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also have Sun x4100, which I think has HTX, but with nothing in it.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2728.php">Paul H. Hargrove: "[hwloc-devel] hwloc-1.3.1 build failure w/ Solaris Studio compilers"</a>
<li><strong>Previous message:</strong> <a href="2726.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0.4a1r4221)"</a>
<li><strong>Maybe in reply to:</strong> <a href="2719.php">Brice Goglin: "[hwloc-devel] hwloc and HTX device ?"</a>
<!-- nextthread="start" -->
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
