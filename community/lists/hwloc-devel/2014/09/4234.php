<?
$subject_val = "Re: [hwloc-devel] Using hwloc to detect Hard Disks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 23 10:57:52 2014" -->
<!-- isoreceived="20140923145752" -->
<!-- sent="Tue, 23 Sep 2014 07:57:35 -0700" -->
<!-- isosent="20140923145735" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Using hwloc to detect Hard Disks" -->
<!-- id="7840C35C-543B-44BF-9BA4-3F4F08F5B124_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E870DA61-31BA-4FA1-B8CE-DA709653DB22_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-09-23 10:57:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4235.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Previous message:</strong> <a href="4233.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>In reply to:</strong> <a href="4231.php">Ralph Castain: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4238.php">Christopher Samuel: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Reply:</strong> <a href="4238.php">Christopher Samuel: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Memory info is available from lshw, though they are a GPL code:
<br>
<p>&nbsp;*-bank:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;description: DIMM Synchronous 1333 MHz (0.8 ns)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;product: M393B1K70DH0-YH9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor: 0x80CE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;physical id: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;serial: 0x85B5FED3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;slot: DIMM_A1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size: 8GiB
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;width: 64 bits
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;clock: 1333MHz (0.8ns)
<br>
<p>Not sure how they are getting it, but I can have someone look at the code to see where the info is being obtained.
<br>
<p><p>On Sep 22, 2014, at 8:54 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 22, 2014, at 4:58 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 22, 2014, at 6:55 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HWLOC already provides similar info for processors and mother boards, so it seemed a natural extension of current capabilities to provide it for other system elements.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Disk vendor/model is easy to add from sysfs on Linux. I don't know where
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to find the serial number. Spindle speed may require more than just
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sysfs. Do you have more info on how to get these attributes?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For memory, we currently have a single memory object for all DIMMs of a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; single NUMA node. Adding multiple objects may not be useful, but adding
</span><br>
<span class="quotelev3">&gt;&gt;&gt; many serials to a single NUMA object may be ugly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are some information about physical memory in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /sys/devices/system/node/node0/memory* but it doesn't correspond to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DIMMs (I have 135 of them on my laptop for only 2 SODIMMs). dmidecode
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gets DIMM info somehow.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Back in Nehalem days, it wasn't possible to map Linux kernel &quot;physical&quot; memory back to individual DIMMs (because the BIOS could/would introduce another layer of kernel&lt;--&gt;DIMM mapping that the kernel might not be aware of).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Has that changed?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think so, no - at least, I'm not sure you can map a specific DIMM to a specific address within a NUMA region. However, we can at least add the DIMMs to the root-object attributes. In addition, you can certainly map a DIMM to a specific DIMM socket, and I believe that means you can map it to a given NUMA region even if you can't say *where* it is within that region. Have to verify that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/09/4229.php">http://www.open-mpi.org/community/lists/hwloc-devel/2014/09/4229.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4234/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4235.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Previous message:</strong> <a href="4233.php">Brice Goglin: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>In reply to:</strong> <a href="4231.php">Ralph Castain: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4238.php">Christopher Samuel: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Reply:</strong> <a href="4238.php">Christopher Samuel: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
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
