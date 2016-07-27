<?
$subject_val = "Re: [hwloc-devel] CPU affinity of OS Devices?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  6 19:06:56 2012" -->
<!-- isoreceived="20121107000656" -->
<!-- sent="Wed, 7 Nov 2012 01:06:49 +0100" -->
<!-- isosent="20121107000649" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] CPU affinity of OS Devices?" -->
<!-- id="20121107000649.GF6161_at_type.wlan.youpi.perso.aquilenet.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5099957E.4060708_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] CPU affinity of OS Devices?<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-06 19:06:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3379.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r5006)"</a>
<li><strong>Previous message:</strong> <a href="3377.php">Brice Goglin: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>In reply to:</strong> <a href="3376.php">Guy Streeter: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guy Streeter, le Tue 06 Nov 2012 23:56:29 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; My question is how do I specify a binding like &quot;not on the same CPU
</span><br>
<span class="quotelev1">&gt; that is handling the Ethernet interrupts&quot;?
</span><br>
<p>About interrupts, that's unfortunately actually not related with actual
<br>
topology of the machine, Linux is free to direct them to any processor,
<br>
which could be on another NUMA node at the other end of the machine.
<br>
There are even daemons to distribute them over time, meaning all CPUs
<br>
might handle the interrupt. I'm thus not sure we can even provide such
<br>
kind of information in a reliable way. You can for instance check in
<br>
/proc/irq/0/smp_affinity
<br>
that you probably have your timer interrupt potentially run by any
<br>
processor. You can modify the file in order to bind the interrupt to
<br>
some given CPU (which, again, can be very far from the actual PCI
<br>
device).
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3379.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r5006)"</a>
<li><strong>Previous message:</strong> <a href="3377.php">Brice Goglin: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
<li><strong>In reply to:</strong> <a href="3376.php">Guy Streeter: "Re: [hwloc-devel] CPU affinity of OS Devices?"</a>
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
