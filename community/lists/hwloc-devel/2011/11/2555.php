<?
$subject_val = "Re: [hwloc-devel] understanding PCI device to NUMA node connection";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 28 17:07:59 2011" -->
<!-- isoreceived="20111128220759" -->
<!-- sent="Mon, 28 Nov 2011 16:07:53 -0600" -->
<!-- isosent="20111128220753" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] understanding PCI device to NUMA node connection" -->
<!-- id="4ED40639.6010304_at_redhat.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4ED4010A.1060201_at_inria.fr" -->
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
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-28 17:07:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2556.php">Brice Goglin: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>Previous message:</strong> <a href="2554.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>In reply to:</strong> <a href="2553.php">Brice Goglin: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2557.php">Brice Goglin: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
<li><strong>Reply:</strong> <a href="2557.php">Brice Goglin: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/28/2011 03:45 PM, Brice Goglin wrote:
<br>
...
<br>
<span class="quotelev1">&gt; Current Intel platforms have 2 QPI links going to I/O hubs. Most servers
</span><br>
<span class="quotelev1">&gt; with many sockets (4 or more) thus have each I/O hub connected to only 2
</span><br>
<span class="quotelev1">&gt; processors directly, so their distance is &quot;equal&quot; as you say.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, some BIOS report invalid I/O locality information. I've never
</span><br>
<span class="quotelev1">&gt; seen anything correct on any server like the above actually.
</span><br>
<p>If the BIOS correctly reported the locality, how would the devices show up in
<br>
hwloc-info and lstopo? Would there be a Group containing the 2 NUMA Nodes and
<br>
the PCI devices?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, unfortunately PCI detection isn't based on reading files, so
</span><br>
<span class="quotelev1">&gt; there's no easy way to &quot;dump&quot; it during gather-topology.sh.
</span><br>
<p>I knew this once, and remembered it when you explained it.
<br>
<p>thanks,
<br>
--Guy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2556.php">Brice Goglin: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>Previous message:</strong> <a href="2554.php">Jeff Squyres: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>In reply to:</strong> <a href="2553.php">Brice Goglin: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2557.php">Brice Goglin: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
<li><strong>Reply:</strong> <a href="2557.php">Brice Goglin: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
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
