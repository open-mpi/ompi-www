<?
$subject_val = "Re: [hwloc-devel] Using hwloc to detect Hard Disks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 24 01:10:47 2014" -->
<!-- isoreceived="20140924051047" -->
<!-- sent="Wed, 24 Sep 2014 07:10:44 +0200" -->
<!-- isosent="20140924051044" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Using hwloc to detect Hard Disks" -->
<!-- id="54225254.5040606_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="124FB8FA73DD4649B69C705CCE88B302683FA3D1_at_ORSMSX111.amr.corp.intel.com" -->
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
<strong>Date:</strong> 2014-09-24 01:10:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4247.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-236-g71bf413)"</a>
<li><strong>Previous message:</strong> <a href="4245.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.9.1-11-g6ec83e5)"</a>
<li><strong>In reply to:</strong> <a href="4243.php">Pedaballe, Vineet: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 24/09/2014 00:19, Pedaballe, Vineet a &#233;crit :
<br>
<span class="quotelev1">&gt; Please find my response inline.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some of the items related to hard drives &amp; DIMM is available only with root privileges. We should be able to populate objects related to these items only when root privileges are available. Is this an acceptable change to the HWLOC's design? 
</span><br>
<p>We already have this difference for minor PCI attributes
<br>
&nbsp;&nbsp;&nbsp;
<br>
<a href="http://www.open-mpi.org/projects/hwloc/doc/v1.9.1/a00028.php#faq_privileged">http://www.open-mpi.org/projects/hwloc/doc/v1.9.1/a00028.php#faq_privileged</a>
<br>
As long as it doesn't impact major features, that's fine for me.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 7. Other PCI Devices
</span><br>
<span class="quotelev2">&gt;&gt; 	a. Device ID
</span><br>
<span class="quotelev2">&gt;&gt; 	b. Device Serial number (if applicable)
</span><br>
<span class="quotelev1">&gt; IIRC the serial number isn't standardized anywhere in the PCI config space, this item is likely impossible.
</span><br>
<span class="quotelev1">&gt; [VIN] : Agreed. But if we show it is possible for some devices (like the coprocessors), I was hoping the vendors would eventually contribute to their respective devices. I was hoping all this information is provided as attributes, and these can be optional for each device.(am I correct?)
</span><br>
<p>It's optional, and may be different for each device. So it's possible
<br>
for vendors to contribute, but that means a lot of different cases. I
<br>
don't expect the list ot be huge and to cover a non-negligible part of
<br>
the PCI devices. We'll see.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4247.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-236-g71bf413)"</a>
<li><strong>Previous message:</strong> <a href="4245.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.9.1-11-g6ec83e5)"</a>
<li><strong>In reply to:</strong> <a href="4243.php">Pedaballe, Vineet: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
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
