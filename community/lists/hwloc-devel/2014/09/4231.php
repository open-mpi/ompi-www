<?
$subject_val = "Re: [hwloc-devel] Using hwloc to detect Hard Disks";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 23:54:23 2014" -->
<!-- isoreceived="20140923035423" -->
<!-- sent="Mon, 22 Sep 2014 20:54:08 -0700" -->
<!-- isosent="20140923035408" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Using hwloc to detect Hard Disks" -->
<!-- id="E870DA61-31BA-4FA1-B8CE-DA709653DB22_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6187E4EA-1669-4C0A-AEBE-D8D1655D3198_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-22 23:54:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4232.php">Guy Streeter: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Previous message:</strong> <a href="4230.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-231-g75565fc)"</a>
<li><strong>In reply to:</strong> <a href="4229.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4234.php">Ralph Castain: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Reply:</strong> <a href="4234.php">Ralph Castain: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 22, 2014, at 4:58 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 22, 2014, at 6:55 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HWLOC already provides similar info for processors and mother boards, so it seemed a natural extension of current capabilities to provide it for other system elements.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Disk vendor/model is easy to add from sysfs on Linux. I don't know where
</span><br>
<span class="quotelev2">&gt;&gt; to find the serial number. Spindle speed may require more than just
</span><br>
<span class="quotelev2">&gt;&gt; sysfs. Do you have more info on how to get these attributes?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For memory, we currently have a single memory object for all DIMMs of a
</span><br>
<span class="quotelev2">&gt;&gt; single NUMA node. Adding multiple objects may not be useful, but adding
</span><br>
<span class="quotelev2">&gt;&gt; many serials to a single NUMA object may be ugly.
</span><br>
<span class="quotelev2">&gt;&gt; There are some information about physical memory in
</span><br>
<span class="quotelev2">&gt;&gt; /sys/devices/system/node/node0/memory* but it doesn't correspond to
</span><br>
<span class="quotelev2">&gt;&gt; DIMMs (I have 135 of them on my laptop for only 2 SODIMMs). dmidecode
</span><br>
<span class="quotelev2">&gt;&gt; gets DIMM info somehow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Back in Nehalem days, it wasn't possible to map Linux kernel &quot;physical&quot; memory back to individual DIMMs (because the BIOS could/would introduce another layer of kernel&lt;--&gt;DIMM mapping that the kernel might not be aware of).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has that changed?
</span><br>
<p>I don't think so, no - at least, I'm not sure you can map a specific DIMM to a specific address within a NUMA region. However, we can at least add the DIMMs to the root-object attributes. In addition, you can certainly map a DIMM to a specific DIMM socket, and I believe that means you can map it to a given NUMA region even if you can't say *where* it is within that region. Have to verify that.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/09/4229.php">http://www.open-mpi.org/community/lists/hwloc-devel/2014/09/4229.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4232.php">Guy Streeter: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Previous message:</strong> <a href="4230.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-231-g75565fc)"</a>
<li><strong>In reply to:</strong> <a href="4229.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4234.php">Ralph Castain: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Reply:</strong> <a href="4234.php">Ralph Castain: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
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
