<?
$subject_val = "[hwloc-users] GPU devices appear as PCI devices";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 20 10:23:06 2012" -->
<!-- isoreceived="20121120152306" -->
<!-- sent="Tue, 20 Nov 2012 16:23:00 +0100" -->
<!-- isosent="20121120152300" -->
<!-- name="Guillermo Miranda" -->
<!-- email="guillermo.miranda_at_[hidden]" -->
<!-- subject="[hwloc-users] GPU devices appear as PCI devices" -->
<!-- id="50ABA054.7000303_at_bsc.es" -->
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
<strong>Subject:</strong> [hwloc-users] GPU devices appear as PCI devices<br>
<strong>From:</strong> Guillermo Miranda (<em>guillermo.miranda_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-20 10:23:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0778.php">Brice Goglin: "Re: [hwloc-users] GPU devices appear as PCI devices"</a>
<li><strong>Previous message:</strong> <a href="0776.php">Andrew Somorjai: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0778.php">Brice Goglin: "Re: [hwloc-users] GPU devices appear as PCI devices"</a>
<li><strong>Reply:</strong> <a href="0778.php">Brice Goglin: "Re: [hwloc-users] GPU devices appear as PCI devices"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am trying to detect GPus when traversing through the topology tree,
<br>
but they appear as PCI devices instead of OS devices, so I can't compare
<br>
the OS type against HWLOC_OBJ_OSDEV_GPU.
<br>
<p>I have enabled IO device discovery (HWLOC_TOPOLOGY_FLAG_IO_DEVICES) and
<br>
made sure that hwloc's configure properly recognised Cuda (4.1).
<br>
<p>Here's what lstopo prints:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;object type=&quot;PCIDev&quot; os_index=&quot;536576&quot;
<br>
pci_busid=&quot;0000:83:00.0&quot; pci_type=&quot;0302 [10de:1091] [00de:0042] a1&quot;
<br>
pci_link_speed=&quot;0.000000&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;info name=&quot;PCIVendor&quot; value=&quot;nVidia Corporation&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/object&gt;
<br>
<p>Is this the expected behaviour? What can I do to make that GPU be marked
<br>
as an OSDEV GPU object?
<br>
<p>Thanks in advance.
<br>
<p>WARNING / LEGAL TEXT: This message is intended only for the use of the
<br>
individual or entity to which it is addressed and may contain
<br>
information which is privileged, confidential, proprietary, or exempt
<br>
from disclosure under applicable law. If you are not the intended
<br>
recipient or the person responsible for delivering the message to the
<br>
intended recipient, you are strictly prohibited from disclosing,
<br>
distributing, copying, or in any way using this message. If you have
<br>
received this communication in error, please notify the sender and
<br>
destroy and delete any copies you may have received.
<br>
<p><a href="http://www.bsc.es/disclaimer">http://www.bsc.es/disclaimer</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0778.php">Brice Goglin: "Re: [hwloc-users] GPU devices appear as PCI devices"</a>
<li><strong>Previous message:</strong> <a href="0776.php">Andrew Somorjai: "Re: [hwloc-users] Windows api threading functions equivalent to hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0778.php">Brice Goglin: "Re: [hwloc-users] GPU devices appear as PCI devices"</a>
<li><strong>Reply:</strong> <a href="0778.php">Brice Goglin: "Re: [hwloc-users] GPU devices appear as PCI devices"</a>
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
