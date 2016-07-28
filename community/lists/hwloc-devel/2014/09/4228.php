<?
$subject_val = "Re: [hwloc-devel] Using hwloc to detect Hard Disks";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 18:55:55 2014" -->
<!-- isoreceived="20140922225555" -->
<!-- sent="Tue, 23 Sep 2014 00:55:54 +0200" -->
<!-- isosent="20140922225554" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Using hwloc to detect Hard Disks" -->
<!-- id="5420A8FA.4030308_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F13E2DDE-93E3-4840-98AB-F015DA383E2E_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-09-22 18:55:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4229.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Previous message:</strong> <a href="4227.php">Ralph Castain: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>In reply to:</strong> <a href="4227.php">Ralph Castain: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4229.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Reply:</strong> <a href="4229.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Reply:</strong> <a href="4232.php">Guy Streeter: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 22/09/2014 23:28, Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe that is what we are requesting - and to be clear, Intel is proposing to develop and contribute this feature. We'd like to add attributes to the objects to record:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * memory - the serial number and model number of the DIMMs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * disks - serial, model, manufacturer and any other available info (sometimes they have spindle speed, for example)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HWLOC already provides similar info for processors and mother boards, so it seemed a natural extension of current capabilities to provide it for other system elements.
</span><br>
<p>Disk vendor/model is easy to add from sysfs on Linux. I don't know where
<br>
to find the serial number. Spindle speed may require more than just
<br>
sysfs. Do you have more info on how to get these attributes?
<br>
<p>For memory, we currently have a single memory object for all DIMMs of a
<br>
single NUMA node. Adding multiple objects may not be useful, but adding
<br>
many serials to a single NUMA object may be ugly.
<br>
There are some information about physical memory in
<br>
/sys/devices/system/node/node0/memory* but it doesn't correspond to
<br>
DIMMs (I have 135 of them on my laptop for only 2 SODIMMs). dmidecode
<br>
gets DIMM info somehow.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4229.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Previous message:</strong> <a href="4227.php">Ralph Castain: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>In reply to:</strong> <a href="4227.php">Ralph Castain: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4229.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Reply:</strong> <a href="4229.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Reply:</strong> <a href="4232.php">Guy Streeter: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
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
