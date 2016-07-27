<?
$subject_val = "[hwloc-devel] hwloc to be included in RHEL 6.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 18 09:50:17 2010" -->
<!-- isoreceived="20101118145017" -->
<!-- sent="Thu, 18 Nov 2010 15:50:06 +0100" -->
<!-- isosent="20101118145006" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc to be included in RHEL 6.1" -->
<!-- id="201011181550.07285.jhladky_at_redhat.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc to be included in RHEL 6.1<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-18 09:50:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1495.php">Brice Goglin: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Previous message:</strong> <a href="1493.php">Brice Goglin: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1495.php">Brice Goglin: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Reply:</strong> <a href="1495.php">Brice Goglin: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Maybe reply:</strong> <a href="1497.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Maybe reply:</strong> <a href="1551.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Maybe reply:</strong> <a href="1555.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Maybe reply:</strong> <a href="1559.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Maybe reply:</strong> <a href="1563.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Maybe reply:</strong> <a href="1576.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Maybe reply:</strong> <a href="1598.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Maybe reply:</strong> <a href="1605.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Red Hat would like to included hwloc in the upcoming version of the Red Hat 
<br>
Enterprise Linux 6.1. There is Bugzilla 648593
<br>
[RFE] Include Portable Hardware Locality (hwloc) in RHEL
<br>
<p><a href="https://bugzilla.redhat.com/show_bug.cgi?id=648593">https://bugzilla.redhat.com/show_bug.cgi?id=648593</a>
<br>
<p>to address this.
<br>
<p>I got following input from the devel:
<br>
=================================================
<br>
There appears to be a significant drawback to using hwloc.  The core # shown in
<br>
hwloc-ls does NOT map 1:1 with the processor id in /proc/cpuinfo.
<br>
<p>For example, on intel-s3e36-02.lab hwloc shows the core ids in socket 0 as
<br>
{0,1,2,3,4,5,6,7}.
<br>
<p>/proc/cpuinfo shows these as physically being {0,4,8,12,16,20,24,28}.
<br>
<p>On the cmd-line, hwloc-ls does indicate a difference between the hwloc core id
<br>
and the physical id:
<br>
<p>[root_at_intel-s3e36-02 ~]# hwloc-ls
<br>
Machine (64GB)
<br>
&nbsp;&nbsp;NUMANode #0 (phys=0 16GB) + Socket #0 + L3 #0 (24MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #0 (256KB) + L1 #0 (32KB) + Core #0 + PU #0 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #1 (256KB) + L1 #1 (32KB) + Core #1 + PU #1 (phys=4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #2 (256KB) + L1 #2 (32KB) + Core #2 + PU #2 (phys=8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #3 (256KB) + L1 #3 (32KB) + Core #3 + PU #3 (phys=12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #4 (256KB) + L1 #4 (32KB) + Core #4 + PU #4 (phys=16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #5 (256KB) + L1 #5 (32KB) + Core #5 + PU #5 (phys=20)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #6 (256KB) + L1 #6 (32KB) + Core #6 + PU #6 (phys=24)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 #7 (256KB) + L1 #7 (32KB) + Core #7 + PU #7 (phys=28)
<br>
<p>If you use the graphical interface, it is possible that customers/GSS/everyone
<br>
screws up the reporting of CPU #s.
<br>
<p>Possible solution: Have hwloc-ls use '-p' by default.
<br>
=================================================
<br>
<p>I'm not sure if you are open to change the default from --logical to --
<br>
physical. Please let me know your opinion on it. If you don't think that it's 
<br>
a good idea perhaps you can give us arguments why you prefer logical indexing 
<br>
over physical indexing.
<br>
<p>Another point is that at the moment you cannot distinguish if the graphical 
<br>
output (.png, X, ...) was created with lstopo --physical or lstopo --logical.
<br>
<p>Could you please add the legend to the picture explaining which index was 
<br>
used?
<br>
<p>Example:
<br>
===================================================
<br>
This picture is using logical indexing. Logical indexes are artificial (hwloc 
<br>
internal) indexes. They start from 0 and incremented by 1 for each object.
<br>
<p>This picture is using physical indexing. Indexes map 1:1 to indexes used by 
<br>
kernel as in /proc/cpuinfo or shown by top utility.
<br>
====================================================
<br>
<p>Please let me know your opinion on this matter.
<br>
<p>Thanks a lot!
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1495.php">Brice Goglin: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Previous message:</strong> <a href="1493.php">Brice Goglin: "Re: [hwloc-devel] PCI device location in hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1495.php">Brice Goglin: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Reply:</strong> <a href="1495.php">Brice Goglin: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Maybe reply:</strong> <a href="1497.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Maybe reply:</strong> <a href="1551.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Maybe reply:</strong> <a href="1555.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Maybe reply:</strong> <a href="1559.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Maybe reply:</strong> <a href="1563.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Maybe reply:</strong> <a href="1576.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Maybe reply:</strong> <a href="1598.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
<li><strong>Maybe reply:</strong> <a href="1605.php">Samuel Thibault: "Re: [hwloc-devel] hwloc to be included in RHEL 6.1"</a>
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
