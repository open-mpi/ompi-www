<?
$subject_val = "Re: [hwloc-devel] nvidia and nouveau driver differences";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  3 17:13:28 2013" -->
<!-- isoreceived="20130503211328" -->
<!-- sent="Fri, 03 May 2013 23:13:22 +0200" -->
<!-- isosent="20130503211322" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] nvidia and nouveau driver differences" -->
<!-- id="51842872.3050707_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="51842030.1080000_at_redhat.com" -->
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
<strong>Date:</strong> 2013-05-03 17:13:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3674.php">Guy Streeter: "Re: [hwloc-devel] nvidia and nouveau driver differences"</a>
<li><strong>Previous message:</strong> <a href="3672.php">Guy Streeter: "[hwloc-devel] nvidia and nouveau driver differences"</a>
<li><strong>In reply to:</strong> <a href="3672.php">Guy Streeter: "[hwloc-devel] nvidia and nouveau driver differences"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3674.php">Guy Streeter: "Re: [hwloc-devel] nvidia and nouveau driver differences"</a>
<li><strong>Reply:</strong> <a href="3674.php">Guy Streeter: "Re: [hwloc-devel] nvidia and nouveau driver differences"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If I remember correctly, NVIDIA or AMD proprietary drivers cannot use
<br>
the kernel sysfs API because it's GPL-only. They can't create devices in
<br>
sysfs, that's why hwloc doesn't get any GPU OS device with NVIDIA.
<br>
<p>card* and controlD64 is what we get with opensource DRM drivers that use
<br>
the sysfs/drm kernel API. But I don't expect people to do much with them
<br>
as long as there's no way for an application to know if it's using card0
<br>
or card1. That's why there's a NVIDIA specific plugin using NVCtrl: you
<br>
give a display such as :0.0, it returns the locality of the PCI device
<br>
running it.
<br>
<p>Brice
<br>
<p><p><p><p>Le 03/05/2013 22:38, Guy Streeter a &#233;crit :
<br>
<span class="quotelev1">&gt; The short answer to this may be that my Nvidia driver is too old. My Nvidia
</span><br>
<span class="quotelev1">&gt; card is old so I have to use the version 173 proprietary driver on it, but the
</span><br>
<span class="quotelev1">&gt; latest nouveau driver works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm on Fedora 18, testing hwloc-1.7. I fetched and built the latest
</span><br>
<span class="quotelev1">&gt; libXNVCtrl, 319.17, from <a href="ftp://download.nvidia.com/XFree86/nvidia-settings">ftp://download.nvidia.com/XFree86/nvidia-settings</a>.
</span><br>
<span class="quotelev1">&gt; The one shipped with Fedora is too old and hwloc will not build with it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I have the nvidia proprietary driver installed, it does not show as an OS
</span><br>
<span class="quotelev1">&gt; device. Here's the end of the tests/hwloc_iodevs output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Found 3 OS devices
</span><br>
<span class="quotelev1">&gt;  Found OS device em1 subtype 2
</span><br>
<span class="quotelev1">&gt;  Found OS device sda subtype 0
</span><br>
<span class="quotelev1">&gt;  Found OS device sr0 subtype 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with the open-source nouveau driver loaded, it looks like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Found 5 OS devices
</span><br>
<span class="quotelev1">&gt;  Found OS device card0 subtype 1
</span><br>
<span class="quotelev1">&gt;  Found OS device controlD64 subtype 1
</span><br>
<span class="quotelev1">&gt;  Found OS device em1 subtype 2
</span><br>
<span class="quotelev1">&gt;  Found OS device sda subtype 0
</span><br>
<span class="quotelev1">&gt;  Found OS device sr0 subtype 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The card0 and controlD64 objects have no infos associated with them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are no other differences in the output. Both drivers seem operational.
</span><br>
<span class="quotelev1">&gt; I've attached the gather-topology output (created with the nvidia driver
</span><br>
<span class="quotelev1">&gt; loaded) in case anyone wants to see it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; --Guy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3673/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3674.php">Guy Streeter: "Re: [hwloc-devel] nvidia and nouveau driver differences"</a>
<li><strong>Previous message:</strong> <a href="3672.php">Guy Streeter: "[hwloc-devel] nvidia and nouveau driver differences"</a>
<li><strong>In reply to:</strong> <a href="3672.php">Guy Streeter: "[hwloc-devel] nvidia and nouveau driver differences"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3674.php">Guy Streeter: "Re: [hwloc-devel] nvidia and nouveau driver differences"</a>
<li><strong>Reply:</strong> <a href="3674.php">Guy Streeter: "Re: [hwloc-devel] nvidia and nouveau driver differences"</a>
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
