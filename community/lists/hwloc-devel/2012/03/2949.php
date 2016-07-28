<?
$subject_val = "Re: [hwloc-devel] PCI device name question";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 11:52:21 2012" -->
<!-- isoreceived="20120320155221" -->
<!-- sent="Tue, 20 Mar 2012 11:52:16 -0400" -->
<!-- isosent="20120320155216" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] PCI device name question" -->
<!-- id="50BB5544-3746-44FD-A4E7-890F1CE526A9_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F689DA0.6050308_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] PCI device name question<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-20 11:52:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2950.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Previous message:</strong> <a href="2948.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>In reply to:</strong> <a href="2948.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2950.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Reply:</strong> <a href="2950.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 20, 2012, at 11:09 AM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I looked at that.  It's not immediately clear to me how to map that to &quot;ib0&quot; and &quot;ib1&quot;, for example.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also I see that /sys/class/infiniband/mlx4_0/node_guid contains
</span><br>
<span class="quotelev1">&gt; 0002:c903:000b:5348, that's ib0's end-of-address minus one, and ib1's
</span><br>
<span class="quotelev1">&gt; end-of-address minus two.
</span><br>
<p>Yep -- that's a carryover from IB.  I don't remember offhand whether that GUID pattern is guaranteed by the device/port abstraction, or whether Mellanox equipment just happens to always do that.
<br>
<p>But I still don't know how to map that to ib0/ib1.
<br>
<p><span class="quotelev1">&gt; But I have no idea what GID, LID and GUID really are so I don't know if
</span><br>
<span class="quotelev1">&gt; there's anything to do with this. We should ask some IB kernel/hardware
</span><br>
<span class="quotelev1">&gt; guys in case there is some guarantee about mac address and/or GID/LID
</span><br>
<span class="quotelev1">&gt; ordering.
</span><br>
<p><p>I'll ask my Mellanox OMPI brethren if there's some kind of deliberate mapping.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2950.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Previous message:</strong> <a href="2948.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>In reply to:</strong> <a href="2948.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2950.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
<li><strong>Reply:</strong> <a href="2950.php">Brice Goglin: "Re: [hwloc-devel] PCI device name question"</a>
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
