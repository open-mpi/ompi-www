<?
$subject_val = "[hwloc-devel] understanding PCI device to NUMA node connection";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 28 16:34:20 2011" -->
<!-- isoreceived="20111128213420" -->
<!-- sent="Mon, 28 Nov 2011 15:34:14 -0600" -->
<!-- isosent="20111128213414" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="[hwloc-devel] understanding PCI device to NUMA node connection" -->
<!-- id="4ED3FE56.9040104_at_redhat.com" -->
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
<strong>Subject:</strong> [hwloc-devel] understanding PCI device to NUMA node connection<br>
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-28 16:34:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2553.php">Brice Goglin: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
<li><strong>Previous message:</strong> <a href="2551.php">Pavan Balaji: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2553.php">Brice Goglin: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
<li><strong>Reply:</strong> <a href="2553.php">Brice Goglin: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This question may be more about understanding NUMA (which I barely do) than
<br>
about hwloc, but perhaps you can help anyway.
<br>
<p>I have a customer with some HP Proliant DL580 G7 servers. HP supplied them
<br>
with a block diagram of their system, and it shows two of the NUMA nodes
<br>
connected to the PCI devices through an I/O Hub. The customer thinks hwloc
<br>
ought to show the PCI devices associated with both of the NUMA nodes. I'm not
<br>
sure how that's possible. hwloc shows them all under the first node.
<br>
<p>Is the association of the devices with the nodes correct? Can the devices
<br>
actually be equally &quot;close&quot; to both of them?
<br>
<p>On a side note, hwloc-gather-topology apparently doesn't gather device
<br>
information? I got the output from their system but can't see any devices when
<br>
I use it as input to hwloc-info etc.
<br>
<p>thanks,
<br>
--Guy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2553.php">Brice Goglin: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
<li><strong>Previous message:</strong> <a href="2551.php">Pavan Balaji: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2553.php">Brice Goglin: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
<li><strong>Reply:</strong> <a href="2553.php">Brice Goglin: "Re: [hwloc-devel] understanding PCI device to NUMA node connection"</a>
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
