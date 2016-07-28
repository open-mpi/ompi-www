<?
$subject_val = "Re: [hwloc-devel] nvidia and nouveau driver differences";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  3 17:42:57 2013" -->
<!-- isoreceived="20130503214257" -->
<!-- sent="Fri, 03 May 2013 16:42:52 -0500" -->
<!-- isosent="20130503214252" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] nvidia and nouveau driver differences" -->
<!-- id="51842F5C.4040706_at_redhat.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51842872.3050707_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] nvidia and nouveau driver differences<br>
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-03 17:42:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3675.php">Brice Goglin: "Re: [hwloc-devel] nvidia and nouveau driver differences"</a>
<li><strong>Previous message:</strong> <a href="3673.php">Brice Goglin: "Re: [hwloc-devel] nvidia and nouveau driver differences"</a>
<li><strong>In reply to:</strong> <a href="3673.php">Brice Goglin: "Re: [hwloc-devel] nvidia and nouveau driver differences"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3675.php">Brice Goglin: "Re: [hwloc-devel] nvidia and nouveau driver differences"</a>
<li><strong>Reply:</strong> <a href="3675.php">Brice Goglin: "Re: [hwloc-devel] nvidia and nouveau driver differences"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/03/2013 04:13 PM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; If I remember correctly, NVIDIA or AMD proprietary drivers cannot use
</span><br>
<span class="quotelev1">&gt; the kernel sysfs API because it's GPL-only. They can't create devices in
</span><br>
<span class="quotelev1">&gt; sysfs, that's why hwloc doesn't get any GPU OS device with NVIDIA.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>That sounds right and makes sense.
<br>
<p><span class="quotelev1">&gt; card* and controlD64 is what we get with opensource DRM drivers that use
</span><br>
<span class="quotelev1">&gt; the sysfs/drm kernel API. But I don't expect people to do much with them
</span><br>
<span class="quotelev1">&gt; as long as there's no way for an application to know if it's using card0
</span><br>
<span class="quotelev1">&gt; or card1. That's why there's a NVIDIA specific plugin using NVCtrl: you
</span><br>
<span class="quotelev1">&gt; give a display such as :0.0, it returns the locality of the PCI device
</span><br>
<span class="quotelev1">&gt; running it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<p><p>Can you give me an example of something that should show the display device
<br>
when the Nvidia driver is loaded? I think I properly configured hwloc:
<br>
<p>-----------------------------------------------------------------------------
<br>
Hwloc optional build support status (more details can be found above):
<br>
<p>Probe / display I/O devices: PCI GL
<br>
Graphical output (Cairo):    yes
<br>
XML input / output:          full
<br>
libnuma memory support:      yes
<br>
Plugin support:              no
<br>
-----------------------------------------------------------------------------
<br>
<p>thanks,
<br>
--Guy
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3675.php">Brice Goglin: "Re: [hwloc-devel] nvidia and nouveau driver differences"</a>
<li><strong>Previous message:</strong> <a href="3673.php">Brice Goglin: "Re: [hwloc-devel] nvidia and nouveau driver differences"</a>
<li><strong>In reply to:</strong> <a href="3673.php">Brice Goglin: "Re: [hwloc-devel] nvidia and nouveau driver differences"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3675.php">Brice Goglin: "Re: [hwloc-devel] nvidia and nouveau driver differences"</a>
<li><strong>Reply:</strong> <a href="3675.php">Brice Goglin: "Re: [hwloc-devel] nvidia and nouveau driver differences"</a>
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
