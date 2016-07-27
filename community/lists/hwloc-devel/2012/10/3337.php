<?
$subject_val = "Re: [hwloc-devel] non-PCI OS devices?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 15 15:59:24 2012" -->
<!-- isoreceived="20121015195924" -->
<!-- sent="Mon, 15 Oct 2012 21:59:19 +0200" -->
<!-- isosent="20121015195919" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] non-PCI OS devices?" -->
<!-- id="507C6B17.3000504_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="507C698D.8080303_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] non-PCI OS devices?<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-15 15:59:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3338.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4896)"</a>
<li><strong>Previous message:</strong> <a href="3336.php">Guy Streeter: "[hwloc-devel] non-PCI OS devices?"</a>
<li><strong>In reply to:</strong> <a href="3336.php">Guy Streeter: "[hwloc-devel] non-PCI OS devices?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 15/10/2012 21:52, Guy Streeter a &#233;crit :
<br>
<span class="quotelev1">&gt; When I'm trying to visualize how my system is physically configured, in order
</span><br>
<span class="quotelev1">&gt; to decide how best to bind applications, I'd like to know about every source
</span><br>
<span class="quotelev1">&gt; of interrupts. keyboard and mouse, timers, sound, USB-connected devices, etc.
</span><br>
<span class="quotelev1">&gt; Has any though been given to expanding the OS device information to include them?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>There's a ticket about about USB device information, but it's far away
<br>
on my TODO-list because USB is low performance, so affinity shouldn't
<br>
matter much. That said, interrupts could indeed be a good reason to look
<br>
at USB and other non-PCI devices. But my understanding is that
<br>
interrupts are not guaranteed to be delivered to CPUs near the device.
<br>
Drivers (and daemons such as irqbalance) should be allowed to bind
<br>
interrupt as they want (even if it's a bad idea). So maybe we should
<br>
look at interrupts directly instead of going through USB devices?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3338.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4896)"</a>
<li><strong>Previous message:</strong> <a href="3336.php">Guy Streeter: "[hwloc-devel] non-PCI OS devices?"</a>
<li><strong>In reply to:</strong> <a href="3336.php">Guy Streeter: "[hwloc-devel] non-PCI OS devices?"</a>
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
