<?
$subject_val = "Re: [hwloc-users] PCI devices in the topology";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 10 15:37:52 2012" -->
<!-- isoreceived="20120210203752" -->
<!-- sent="Fri, 10 Feb 2012 21:37:45 +0100" -->
<!-- isosent="20120210203745" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] PCI devices in the topology" -->
<!-- id="4F358019.4020605_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="67198DA1-D72F-4A56-841A-D82A1604DF13_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] PCI devices in the topology<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-10 15:37:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0546.php">Jeff Squyres: "Re: [hwloc-users] PCI devices in the topology"</a>
<li><strong>Previous message:</strong> <a href="0544.php">Jeff Squyres: "[hwloc-users] PCI devices in the topology"</a>
<li><strong>In reply to:</strong> <a href="0544.php">Jeff Squyres: "[hwloc-users] PCI devices in the topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0546.php">Jeff Squyres: "Re: [hwloc-users] PCI devices in the topology"</a>
<li><strong>Reply:</strong> <a href="0546.php">Jeff Squyres: "Re: [hwloc-users] PCI devices in the topology"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 10/02/2012 21:16, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; When PCI devices are put into the tree, do they potentially make other objects be a different depths?  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For example, <a href="http://www.open-mpi.org/projects/hwloc/devel09-pci.png">http://www.open-mpi.org/projects/hwloc/devel09-pci.png</a> has a PCI bridge hanging off a socket.  Are the cores on sockets P0 and P1 at the same depth?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>All objects of the same type are *always* at the same depth (for caches
<br>
and groups, replace &quot;same type&quot; with &quot;same type and same level&quot; so that
<br>
L1 is not at the same depth as L3). That works even if your topology is
<br>
not symmetric at all, because a children can have a depth that is
<br>
different from its parent depth plus one.
<br>
<p>PCI objects are not placed in levels are other regular objects do. There
<br>
are in specific list. However, to make the API more uniform, we have
<br>
some fake depth values that let us identify and walk in the list of
<br>
bridges, PCI devices or OS devices.
<br>
<p>In the above case, the NUMA node P#0 should be at depth 1, it has two
<br>
children. The first one is Socket P#1 at depth 2. The second one is a
<br>
hostbridge at depth -3 (fake depth for bridges iirc).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0546.php">Jeff Squyres: "Re: [hwloc-users] PCI devices in the topology"</a>
<li><strong>Previous message:</strong> <a href="0544.php">Jeff Squyres: "[hwloc-users] PCI devices in the topology"</a>
<li><strong>In reply to:</strong> <a href="0544.php">Jeff Squyres: "[hwloc-users] PCI devices in the topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0546.php">Jeff Squyres: "Re: [hwloc-users] PCI devices in the topology"</a>
<li><strong>Reply:</strong> <a href="0546.php">Jeff Squyres: "Re: [hwloc-users] PCI devices in the topology"</a>
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
