<?
$subject_val = "Re: [hwloc-devel] understanding PCI device to NUMA node connection";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 28 16:45:53 2011" -->
<!-- isoreceived="20111128214553" -->
<!-- sent="Mon, 28 Nov 2011 22:45:46 +0100" -->
<!-- isosent="20111128214546" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] understanding PCI device to NUMA node connection" -->
<!-- id="4ED4010A.1060201_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4ED3FE56.9040104_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] understanding PCI device to NUMA node connection<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-28 16:45:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2554.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>Previous message:</strong> <a href="2552.php">Guy Streeter: "[hwloc-devel] understanding PCI device to NUMA node connection"</a>
<li><strong>In reply to:</strong> <a href="2552.php">Guy Streeter: "[hwloc-devel] understanding PCI device to NUMA node connection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2555.php">Guy Streeter: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
<li><strong>Reply:</strong> <a href="2555.php">Guy Streeter: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 28/11/2011 22:34, Guy Streeter a &#233;crit :
<br>
<span class="quotelev1">&gt; This question may be more about understanding NUMA (which I barely do) than
</span><br>
<span class="quotelev1">&gt; about hwloc, but perhaps you can help anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a customer with some HP Proliant DL580 G7 servers. HP supplied them
</span><br>
<span class="quotelev1">&gt; with a block diagram of their system, and it shows two of the NUMA nodes
</span><br>
<span class="quotelev1">&gt; connected to the PCI devices through an I/O Hub. The customer thinks hwloc
</span><br>
<span class="quotelev1">&gt; ought to show the PCI devices associated with both of the NUMA nodes. I'm not
</span><br>
<span class="quotelev1">&gt; sure how that's possible. hwloc shows them all under the first node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the association of the devices with the nodes correct? Can the devices
</span><br>
<span class="quotelev1">&gt; actually be equally &quot;close&quot; to both of them?
</span><br>
<p>Current Intel platforms have 2 QPI links going to I/O hubs. Most servers
<br>
with many sockets (4 or more) thus have each I/O hub connected to only 2
<br>
processors directly, so their distance is &quot;equal&quot; as you say.
<br>
<p>However, some BIOS report invalid I/O locality information. I've never
<br>
seen anything correct on any server like the above actually. If that's
<br>
important to you, we can actually tweak hwloc to fix these BIOS bugs
<br>
with environment variables. If you want to force the PCI hostbridge
<br>
0000:00 near the socket containing PU #0-#7, set
<br>
HWLOC_PCI_0000_00_LOCALCPUS to &quot;0xff&quot; in your env.
<br>
<p><span class="quotelev1">&gt; On a side note, hwloc-gather-topology apparently doesn't gather device
</span><br>
<span class="quotelev1">&gt; information? I got the output from their system but can't see any devices when
</span><br>
<span class="quotelev1">&gt; I use it as input to hwloc-info etc.
</span><br>
<p>Yes, unfortunately PCI detection isn't based on reading files, so
<br>
there's no easy way to &quot;dump&quot; it during gather-topology.sh.
<br>
<p>If we ever reimplement PCI detection by reading sysfs files only on
<br>
Linux (which means we drop the dependency on libpci), it might be
<br>
possible to dump it. But that's a lot of work.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2554.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>Previous message:</strong> <a href="2552.php">Guy Streeter: "[hwloc-devel] understanding PCI device to NUMA node connection"</a>
<li><strong>In reply to:</strong> <a href="2552.php">Guy Streeter: "[hwloc-devel] understanding PCI device to NUMA node connection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2555.php">Guy Streeter: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
<li><strong>Reply:</strong> <a href="2555.php">Guy Streeter: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
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
