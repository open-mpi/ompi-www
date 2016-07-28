<?
$subject_val = "Re: [hwloc-devel] Why doesn't my disk controller show up?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  9 15:03:31 2012" -->
<!-- isoreceived="20121009190331" -->
<!-- sent="Tue, 09 Oct 2012 21:03:25 +0200" -->
<!-- isosent="20121009190325" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Why doesn't my disk controller show up?" -->
<!-- id="507474FD.5080002_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50747146.8000704_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Why doesn't my disk controller show up?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-09 15:03:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3317.php">Guy Streeter: "Re: [hwloc-devel] Why doesn't my disk controller show up?"</a>
<li><strong>Previous message:</strong> <a href="3315.php">Guy Streeter: "[hwloc-devel] Why doesn't my disk controller show up?"</a>
<li><strong>In reply to:</strong> <a href="3315.php">Guy Streeter: "[hwloc-devel] Why doesn't my disk controller show up?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3317.php">Guy Streeter: "Re: [hwloc-devel] Why doesn't my disk controller show up?"</a>
<li><strong>Reply:</strong> <a href="3317.php">Guy Streeter: "Re: [hwloc-devel] Why doesn't my disk controller show up?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 09/10/2012 20:47, Guy Streeter a &#233;crit :
<br>
<span class="quotelev1">&gt; I'm trying to understand why for one of my systems the disk controller is not
</span><br>
<span class="quotelev1">&gt; shown as an OS device. The PCI device is seen, but there is no OS device under
</span><br>
<span class="quotelev1">&gt; it. It's a SATA controller emulated as SCSI, It think.
</span><br>
<span class="quotelev1">&gt; gather-topology output is attached. Using hwloc 1.5 on Fedora 17.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>hwloc-gather-topology does not gather I/O devices unfortunately (we
<br>
could gather OS devices, but we can't for PCI devices).
<br>
<p>What do you have under /sys/bus/pci/devices/&lt;yourpcibusid&gt; ?
<br>
Do you see anything like hostX in there? What does in contain? Can you
<br>
walk in there until you find a &quot;block&quot; child?
<br>
<p>I haven't tested on recent kernels lately, maybe something changed in
<br>
the sysfs hierarchy, I am booting a 3.5 to check things.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3317.php">Guy Streeter: "Re: [hwloc-devel] Why doesn't my disk controller show up?"</a>
<li><strong>Previous message:</strong> <a href="3315.php">Guy Streeter: "[hwloc-devel] Why doesn't my disk controller show up?"</a>
<li><strong>In reply to:</strong> <a href="3315.php">Guy Streeter: "[hwloc-devel] Why doesn't my disk controller show up?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3317.php">Guy Streeter: "Re: [hwloc-devel] Why doesn't my disk controller show up?"</a>
<li><strong>Reply:</strong> <a href="3317.php">Guy Streeter: "Re: [hwloc-devel] Why doesn't my disk controller show up?"</a>
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
