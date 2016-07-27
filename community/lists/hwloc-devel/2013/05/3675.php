<?
$subject_val = "Re: [hwloc-devel] nvidia and nouveau driver differences";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  3 18:04:54 2013" -->
<!-- isoreceived="20130503220454" -->
<!-- sent="Sat, 04 May 2013 00:04:49 +0200" -->
<!-- isosent="20130503220449" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] nvidia and nouveau driver differences" -->
<!-- id="51843481.8010004_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51842F5C.4040706_at_redhat.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-03 18:04:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3676.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5580)"</a>
<li><strong>Previous message:</strong> <a href="3674.php">Guy Streeter: "Re: [hwloc-devel] nvidia and nouveau driver differences"</a>
<li><strong>In reply to:</strong> <a href="3674.php">Guy Streeter: "Re: [hwloc-devel] nvidia and nouveau driver differences"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 03/05/2013 23:42, Guy Streeter a &#233;crit :
<br>
<span class="quotelev1">&gt; On 05/03/2013 04:13 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; If I remember correctly, NVIDIA or AMD proprietary drivers cannot use
</span><br>
<span class="quotelev2">&gt;&gt; the kernel sysfs API because it's GPL-only. They can't create devices in
</span><br>
<span class="quotelev2">&gt;&gt; sysfs, that's why hwloc doesn't get any GPU OS device with NVIDIA.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; That sounds right and makes sense.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; card* and controlD64 is what we get with opensource DRM drivers that use
</span><br>
<span class="quotelev2">&gt;&gt; the sysfs/drm kernel API. But I don't expect people to do much with them
</span><br>
<span class="quotelev2">&gt;&gt; as long as there's no way for an application to know if it's using card0
</span><br>
<span class="quotelev2">&gt;&gt; or card1. That's why there's a NVIDIA specific plugin using NVCtrl: you
</span><br>
<span class="quotelev2">&gt;&gt; give a display such as :0.0, it returns the locality of the PCI device
</span><br>
<span class="quotelev2">&gt;&gt; running it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you give me an example of something that should show the display device
</span><br>
<span class="quotelev1">&gt; when the Nvidia driver is loaded? I think I properly configured hwloc:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Hwloc optional build support status (more details can be found above):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Probe / display I/O devices: PCI GL
</span><br>
<span class="quotelev1">&gt; Graphical output (Cairo):    yes
</span><br>
<span class="quotelev1">&gt; XML input / output:          full
</span><br>
<span class="quotelev1">&gt; libnuma memory support:      yes
</span><br>
<span class="quotelev1">&gt; Plugin support:              no
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<p>&quot;GL&quot; is indeed what you need above.
<br>
<p>You should get something like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;HostBridge L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 10de:06d1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GPU L#0 &quot;:0.0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 10de:06d1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GPU L#1 &quot;:0.3&quot;
<br>
<p>Once the NVIDIA driver is loaded and the X server is running, make sure
<br>
your application has access to the X server. If you're not running
<br>
lstopo from within the X server (I have never actually tested this
<br>
case), you may need things like &quot;xhost +&quot; and/or &quot;chmod 666 /dev/nvidia*&quot;.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3676.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.8a1r5580)"</a>
<li><strong>Previous message:</strong> <a href="3674.php">Guy Streeter: "Re: [hwloc-devel] nvidia and nouveau driver differences"</a>
<li><strong>In reply to:</strong> <a href="3674.php">Guy Streeter: "Re: [hwloc-devel] nvidia and nouveau driver differences"</a>
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
