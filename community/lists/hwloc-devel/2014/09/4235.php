<?
$subject_val = "Re: [hwloc-devel] Using hwloc to detect Hard Disks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 23 11:48:20 2014" -->
<!-- isoreceived="20140923154820" -->
<!-- sent="Tue, 23 Sep 2014 17:48:19 +0200" -->
<!-- isosent="20140923154819" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Using hwloc to detect Hard Disks" -->
<!-- id="54219643.2090308_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="542187AC.2060208_at_inria.fr" -->
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
<strong>Date:</strong> 2014-09-23 11:48:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4236.php">Pedaballe, Vineet: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Previous message:</strong> <a href="4234.php">Ralph Castain: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>In reply to:</strong> <a href="4233.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4236.php">Pedaballe, Vineet: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Reply:</strong> <a href="4236.php">Pedaballe, Vineet: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 23/09/2014 16:46, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Le 23/09/2014 16:38, Guy Streeter a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I know that udev gathers this information:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # ll /sys/block/sda/bdi
</span><br>
<span class="quotelev2">&gt;&gt; lrwxrwxrwx. 1 root root 0 Sep 23 09:33 /sys/block/sda/bdi -&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../../../../virtual/bdi/8:0
</span><br>
<span class="quotelev2">&gt;&gt; # grep SERIAL '/run/udev/data/b8:0'
</span><br>
<span class="quotelev2">&gt;&gt; E:ID_SERIAL=SAMSUNG_MZ7TD256HAFV-000L9_S17LNSADC13325
</span><br>
<span class="quotelev2">&gt;&gt; E:ID_SERIAL_SHORT=S17LNSADC13325
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So you could get it from udev or gather it the same way udev does. If you
</span><br>
<span class="quotelev2">&gt;&gt; want to know how udev does it, I can research that.
</span><br>
<span class="quotelev1">&gt; If you can get more information, that'd be great. I wonder if they are
</span><br>
<span class="quotelev1">&gt; using ioctls to retrieve these, I can't find anything in sysfs even
</span><br>
<span class="quotelev1">&gt; though udev has similar info on my machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Indeed there's a struct hd_driveid in linux/hdreg.h that you get with
<br>
ioctl HDIO_GET_IDENTITY on the device.
<br>
<p>There's also a libblkid that may help.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4236.php">Pedaballe, Vineet: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Previous message:</strong> <a href="4234.php">Ralph Castain: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>In reply to:</strong> <a href="4233.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4236.php">Pedaballe, Vineet: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Reply:</strong> <a href="4236.php">Pedaballe, Vineet: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
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
