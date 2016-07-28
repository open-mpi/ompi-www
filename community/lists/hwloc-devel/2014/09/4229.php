<?
$subject_val = "Re: [hwloc-devel] Using hwloc to detect Hard Disks";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 19:59:00 2014" -->
<!-- isoreceived="20140922235900" -->
<!-- sent="Mon, 22 Sep 2014 23:58:58 +0000" -->
<!-- isosent="20140922235858" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Using hwloc to detect Hard Disks" -->
<!-- id="6187E4EA-1669-4C0A-AEBE-D8D1655D3198_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-22 19:58:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4230.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-231-g75565fc)"</a>
<li><strong>Previous message:</strong> <a href="4228.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>In reply to:</strong> <a href="4228.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4231.php">Ralph Castain: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Reply:</strong> <a href="4231.php">Ralph Castain: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 22, 2014, at 6:55 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; HWLOC already provides similar info for processors and mother boards, so it seemed a natural extension of current capabilities to provide it for other system elements.
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
<span class="quotelev1">&gt; For memory, we currently have a single memory object for all DIMMs of a
</span><br>
<span class="quotelev1">&gt; single NUMA node. Adding multiple objects may not be useful, but adding
</span><br>
<span class="quotelev1">&gt; many serials to a single NUMA object may be ugly.
</span><br>
<span class="quotelev1">&gt; There are some information about physical memory in
</span><br>
<span class="quotelev1">&gt; /sys/devices/system/node/node0/memory* but it doesn't correspond to
</span><br>
<span class="quotelev1">&gt; DIMMs (I have 135 of them on my laptop for only 2 SODIMMs). dmidecode
</span><br>
<span class="quotelev1">&gt; gets DIMM info somehow.
</span><br>
<p>Back in Nehalem days, it wasn't possible to map Linux kernel &quot;physical&quot; memory back to individual DIMMs (because the BIOS could/would introduce another layer of kernel&lt;--&gt;DIMM mapping that the kernel might not be aware of).
<br>
<p>Has that changed?
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
<li><strong>Next message:</strong> <a href="4230.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-231-g75565fc)"</a>
<li><strong>Previous message:</strong> <a href="4228.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>In reply to:</strong> <a href="4228.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4231.php">Ralph Castain: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Reply:</strong> <a href="4231.php">Ralph Castain: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
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
