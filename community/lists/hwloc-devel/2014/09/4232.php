<?
$subject_val = "Re: [hwloc-devel] Using hwloc to detect Hard Disks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 23 10:38:53 2014" -->
<!-- isoreceived="20140923143853" -->
<!-- sent="Tue, 23 Sep 2014 09:38:51 -0500" -->
<!-- isosent="20140923143851" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Using hwloc to detect Hard Disks" -->
<!-- id="542185FB.6090808_at_redhat.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5420A8FA.4030308_at_inria.fr" -->
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
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-23 10:38:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4233.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Previous message:</strong> <a href="4231.php">Ralph Castain: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>In reply to:</strong> <a href="4228.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4233.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Reply:</strong> <a href="4233.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----BEGIN PGP SIGNED MESSAGE-----
<br>
Hash: SHA1
<br>
<p>On 09/22/2014 05:55 PM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 22/09/2014 23:28, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I believe that is what we are requesting - and to be clear, Intel is
</span><br>
<span class="quotelev2">&gt;&gt; proposing to develop and contribute this feature. We'd like to add
</span><br>
<span class="quotelev2">&gt;&gt; attributes to the objects to record:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * memory - the serial number and model number of the DIMMs
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * disks - serial, model, manufacturer and any other available info
</span><br>
<span class="quotelev2">&gt;&gt; (sometimes they have spindle speed, for example)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; HWLOC already provides similar info for processors and mother boards,
</span><br>
<span class="quotelev2">&gt;&gt; so it seemed a natural extension of current capabilities to provide it
</span><br>
<span class="quotelev2">&gt;&gt; for other system elements.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Disk vendor/model is easy to add from sysfs on Linux. I don't know where 
</span><br>
<span class="quotelev1">&gt; to find the serial number. Spindle speed may require more than just 
</span><br>
<span class="quotelev1">&gt; sysfs. Do you have more info on how to get these attributes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I know that udev gathers this information:
<br>
<p># ll /sys/block/sda/bdi
<br>
lrwxrwxrwx. 1 root root 0 Sep 23 09:33 /sys/block/sda/bdi -&gt;
<br>
../../../../../../../../virtual/bdi/8:0
<br>
# grep SERIAL '/run/udev/data/b8:0'
<br>
E:ID_SERIAL=SAMSUNG_MZ7TD256HAFV-000L9_S17LNSADC13325
<br>
E:ID_SERIAL_SHORT=S17LNSADC13325
<br>
<p>So you could get it from udev or gather it the same way udev does. If you
<br>
want to know how udev does it, I can research that.
<br>
<p>- --Guy
<br>
<p>-----BEGIN PGP SIGNATURE-----
<br>
Version: GnuPG v1
<br>
<p>iEYEARECAAYFAlQhhfsACgkQ0Bme0QyNhPSlNwCgt7Io0T60goabPNF5zEiOxgxM
<br>
nckAnjsm2JMJOEP5p5/Sk9wyx/f4G9zX
<br>
=2iEW
<br>
-----END PGP SIGNATURE-----
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4233.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Previous message:</strong> <a href="4231.php">Ralph Castain: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>In reply to:</strong> <a href="4228.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4233.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Reply:</strong> <a href="4233.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
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
