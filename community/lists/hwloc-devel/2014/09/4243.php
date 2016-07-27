<?
$subject_val = "Re: [hwloc-devel] Using hwloc to detect Hard Disks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 23 18:19:29 2014" -->
<!-- isoreceived="20140923221929" -->
<!-- sent="Tue, 23 Sep 2014 22:19:27 +0000" -->
<!-- isosent="20140923221927" -->
<!-- name="Pedaballe, Vineet" -->
<!-- email="vineet.pedaballe_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Using hwloc to detect Hard Disks" -->
<!-- id="124FB8FA73DD4649B69C705CCE88B302683FA3D1_at_ORSMSX111.amr.corp.intel.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5421CD16.7000103_at_inria.fr" -->
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
<strong>From:</strong> Pedaballe, Vineet (<em>vineet.pedaballe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-23 18:19:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4244.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-235-g415b593)"</a>
<li><strong>Previous message:</strong> <a href="4242.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>In reply to:</strong> <a href="4237.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4246.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Reply:</strong> <a href="4246.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please find my response inline.
<br>
<p>Some of the items related to hard drives &amp; DIMM is available only with root privileges. We should be able to populate objects related to these items only when root privileges are available. Is this an acceptable change to the HWLOC's design? 
<br>
<p>-----Original Message-----
<br>
From: hwloc-devel [mailto:hwloc-devel-bounces_at_[hidden]] On Behalf Of Brice Goglin
<br>
Sent: Tuesday, September 23, 2014 12:42 PM
<br>
To: hwloc-devel_at_[hidden]
<br>
Subject: Re: [hwloc-devel] Using hwloc to detect Hard Disks
<br>
<p>Le 23/09/2014 21:06, Pedaballe, Vineet a &#233;crit :
<br>
<span class="quotelev1">&gt; 4a. Network Adapters (Ethernet)
</span><br>
<span class="quotelev1">&gt; 	a. Model
</span><br>
<span class="quotelev1">&gt; 	b. Speed
</span><br>
<p>Both supported and currently negociated link speed?
<br>
[VIN] : Yup.
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
[VIN] : Sounds good. I am not sure what/how much libfabric actually exposes.
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
<p>[VIN] : No, HBAs are also more like non-infiniband network interfaces (which are called HCAs usually), which include fiber optic, eSATA, etc. But work done should be similar to the previous section for network interfaces.
<br>
<p><span class="quotelev1">&gt; 6. Coprocessors
</span><br>
<span class="quotelev1">&gt; 	a. Manufacturer
</span><br>
<span class="quotelev1">&gt; 	b. Serial Number
</span><br>
<p>We'll need an explicit list of supported coprocessors/accelerators and specific ways to retrieve the S/N for each of them.
<br>
[VIN] : I did some work with coprocessors and should be able to help out.
<br>
<p><span class="quotelev1">&gt; 7. Other PCI Devices
</span><br>
<span class="quotelev1">&gt; 	a. Device ID
</span><br>
<span class="quotelev1">&gt; 	b. Device Serial number (if applicable)
</span><br>
<p>IIRC the serial number isn't standardized anywhere in the PCI config space, this item is likely impossible.
<br>
[VIN] : Agreed. But if we show it is possible for some devices (like the coprocessors), I was hoping the vendors would eventually contribute to their respective devices. I was hoping all this information is provided as attributes, and these can be optional for each device.(am I correct?)
<br>
<p>Brice
<br>
<p>_______________________________________________
<br>
hwloc-devel mailing list
<br>
hwloc-devel_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/09/4238.php">http://www.open-mpi.org/community/lists/hwloc-devel/2014/09/4238.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4244.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-235-g415b593)"</a>
<li><strong>Previous message:</strong> <a href="4242.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>In reply to:</strong> <a href="4237.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4246.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Reply:</strong> <a href="4246.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
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
