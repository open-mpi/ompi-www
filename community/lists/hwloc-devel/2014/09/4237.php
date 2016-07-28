<?
$subject_val = "Re: [hwloc-devel] Using hwloc to detect Hard Disks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 23 15:42:16 2014" -->
<!-- isoreceived="20140923194216" -->
<!-- sent="Tue, 23 Sep 2014 21:42:14 +0200" -->
<!-- isosent="20140923194214" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Using hwloc to detect Hard Disks" -->
<!-- id="5421CD16.7000103_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="124FB8FA73DD4649B69C705CCE88B302683FA06E_at_ORSMSX111.amr.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Using hwloc to detect Hard Disks<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-23 15:42:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4238.php">Christopher Samuel: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Previous message:</strong> <a href="4236.php">Pedaballe, Vineet: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>In reply to:</strong> <a href="4236.php">Pedaballe, Vineet: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4240.php">Christopher Samuel: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Reply:</strong> <a href="4240.php">Christopher Samuel: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Reply:</strong> <a href="4243.php">Pedaballe, Vineet: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 23/09/2014 21:06, Pedaballe, Vineet a &#233;crit :
<br>
<span class="quotelev1">&gt; 4a. Network Adapters (Ethernet)
</span><br>
<span class="quotelev1">&gt; 	a. Model
</span><br>
<span class="quotelev1">&gt; 	b. Speed
</span><br>
<p>Both supported and currently negociated link speed?
<br>
<p>On Linux, we'll have to use the ethtool interface.
<br>
<p><span class="quotelev1">&gt; 	c. Serial Number (if applicable)
</span><br>
<span class="quotelev1">&gt; 	d. MAC address
</span><br>
<span class="quotelev1">&gt; 4b. Network Adapters (Infiniband)
</span><br>
<span class="quotelev1">&gt; 	a. Model
</span><br>
<span class="quotelev1">&gt; 	b. Speed
</span><br>
<span class="quotelev1">&gt; 	c. Serial Number (if applicable)
</span><br>
<span class="quotelev1">&gt; 	d. MAC address
</span><br>
<p>We'll to use the verbs or libfabric or whatever interface.
<br>
<p><span class="quotelev1">&gt; 4. Host Bus Adapters
</span><br>
<span class="quotelev1">&gt; 	a. Manufacturer
</span><br>
<span class="quotelev1">&gt; 	b. Serial Number
</span><br>
<span class="quotelev1">&gt; 	c. MAC address
</span><br>
<p>What kind of adapter are you talking about here? Hostbridge?
<br>
<p><span class="quotelev1">&gt; 6. Coprocessors
</span><br>
<span class="quotelev1">&gt; 	a. Manufacturer
</span><br>
<span class="quotelev1">&gt; 	b. Serial Number
</span><br>
<p>We'll need an explicit list of supported coprocessors/accelerators and
<br>
specific ways to retrieve the S/N for each of them.
<br>
<p><span class="quotelev1">&gt; 7. Other PCI Devices
</span><br>
<span class="quotelev1">&gt; 	a. Device ID
</span><br>
<span class="quotelev1">&gt; 	b. Device Serial number (if applicable)
</span><br>
<p>IIRC the serial number isn't standardized anywhere in the PCI config
<br>
space, this item is likely impossible.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4238.php">Christopher Samuel: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Previous message:</strong> <a href="4236.php">Pedaballe, Vineet: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>In reply to:</strong> <a href="4236.php">Pedaballe, Vineet: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4240.php">Christopher Samuel: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Reply:</strong> <a href="4240.php">Christopher Samuel: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Reply:</strong> <a href="4243.php">Pedaballe, Vineet: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
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
