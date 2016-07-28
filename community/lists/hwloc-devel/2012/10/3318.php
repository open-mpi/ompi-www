<?
$subject_val = "Re: [hwloc-devel] Why doesn't my disk controller show up?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  9 15:22:34 2012" -->
<!-- isoreceived="20121009192234" -->
<!-- sent="Tue, 09 Oct 2012 14:22:28 -0500" -->
<!-- isosent="20121009192228" -->
<!-- name="Guy Streeter" -->
<!-- email="streeter_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Why doesn't my disk controller show up?" -->
<!-- id="50747974.3070900_at_redhat.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="50747876.4060207_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Why doesn't my disk controller show up?<br>
<strong>From:</strong> Guy Streeter (<em>streeter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-09 15:22:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3319.php">Brice Goglin: "Re: [hwloc-devel] Why doesn't my disk controller show up?"</a>
<li><strong>Previous message:</strong> <a href="3317.php">Guy Streeter: "Re: [hwloc-devel] Why doesn't my disk controller show up?"</a>
<li><strong>In reply to:</strong> <a href="3317.php">Guy Streeter: "Re: [hwloc-devel] Why doesn't my disk controller show up?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3320.php">Brice Goglin: "Re: [hwloc-devel] Why doesn't my disk controller show up?"</a>
<li><strong>Reply:</strong> <a href="3320.php">Brice Goglin: "Re: [hwloc-devel] Why doesn't my disk controller show up?"</a>
<li><strong>Reply:</strong> <a href="3321.php">Brice Goglin: "Re: [hwloc-devel] Why doesn't my disk controller show up?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/09/2012 02:18 PM, Guy Streeter wrote:
<br>
<span class="quotelev1">&gt; On 10/09/2012 02:03 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Le 09/10/2012 20:47, Guy Streeter a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to understand why for one of my systems the disk controller is not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shown as an OS device. The PCI device is seen, but there is no OS device under
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it. It's a SATA controller emulated as SCSI, It think.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gather-topology output is attached. Using hwloc 1.5 on Fedora 17.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-gather-topology does not gather I/O devices unfortunately (we
</span><br>
<span class="quotelev2">&gt;&gt; could gather OS devices, but we can't for PCI devices).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What do you have under /sys/bus/pci/devices/&lt;yourpcibusid&gt; ?
</span><br>
<span class="quotelev2">&gt;&gt; Do you see anything like hostX in there? What does in contain? Can you
</span><br>
<span class="quotelev2">&gt;&gt; walk in there until you find a &quot;block&quot; child?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I haven't tested on recent kernels lately, maybe something changed in
</span><br>
<span class="quotelev2">&gt;&gt; the sysfs hierarchy, I am booting a 3.5 to check things.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are entries like that. I've attached the output of
</span><br>
<span class="quotelev1">&gt; find -P /sys/bus/pci/devices/0000\:00\:1f.2/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; -Guy
</span><br>
<p>Oops. I needed a / on the end.
<br>
New output attached
<br>
--Guy
<br>
<p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3318/sysfs.txt">sysfs.txt</a>
</ul>
<!-- attachment="sysfs.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3319.php">Brice Goglin: "Re: [hwloc-devel] Why doesn't my disk controller show up?"</a>
<li><strong>Previous message:</strong> <a href="3317.php">Guy Streeter: "Re: [hwloc-devel] Why doesn't my disk controller show up?"</a>
<li><strong>In reply to:</strong> <a href="3317.php">Guy Streeter: "Re: [hwloc-devel] Why doesn't my disk controller show up?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3320.php">Brice Goglin: "Re: [hwloc-devel] Why doesn't my disk controller show up?"</a>
<li><strong>Reply:</strong> <a href="3320.php">Brice Goglin: "Re: [hwloc-devel] Why doesn't my disk controller show up?"</a>
<li><strong>Reply:</strong> <a href="3321.php">Brice Goglin: "Re: [hwloc-devel] Why doesn't my disk controller show up?"</a>
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
