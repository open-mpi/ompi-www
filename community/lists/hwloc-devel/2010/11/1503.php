<?
$subject_val = "Re: [hwloc-devel] PCI device location in hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 18 18:04:50 2010" -->
<!-- isoreceived="20101118230450" -->
<!-- sent="Thu, 18 Nov 2010 17:04:43 -0600" -->
<!-- isosent="20101118230443" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PCI device location in hwloc" -->
<!-- id="4CE5B10B.2050205_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20101118225842.GR6024_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] PCI device location in hwloc<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-18 18:04:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1504.php">Christopher Samuel: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>Previous message:</strong> <a href="1502.php">Samuel Thibault: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>In reply to:</strong> <a href="1502.php">Samuel Thibault: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1504.php">Christopher Samuel: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>Reply:</strong> <a href="1504.php">Christopher Samuel: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 18/11/2010 16:58, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Christopher Samuel, le Thu 18 Nov 2010 23:47:20 +0100, a &#233;crit :
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Does the information occur to the right of the socket with
</span><br>
<span class="quotelev2">&gt;&gt; the closest distance to the devices ?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; If your case, hwloc was apparently unable to decide whether the devices
</span><br>
<span class="quotelev1">&gt; where &quot;inside&quot; one or the other NUMA node. Could you also post the
</span><br>
<span class="quotelev1">&gt; output of gather-topology?
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Many dual-nehalem-EP boxes have a single I/O hub which is connected to
<br>
both sockets, so no I/O affinity there. If your machine wasn't designed
<br>
to have many big PCIe slots (e.g. to plug multiple GPUs), that's
<br>
probably what's happening here.
<br>
<p>Otherwise, it could be a machine with two I/O hubs (any multiple big
<br>
PCIe slots) and the BIOS not saying which one is close to which socket.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1504.php">Christopher Samuel: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>Previous message:</strong> <a href="1502.php">Samuel Thibault: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>In reply to:</strong> <a href="1502.php">Samuel Thibault: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1504.php">Christopher Samuel: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<li><strong>Reply:</strong> <a href="1504.php">Christopher Samuel: "Re: [hwloc-devel] PCI device location in hwloc"</a>
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
