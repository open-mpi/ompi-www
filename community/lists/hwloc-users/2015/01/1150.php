<?
$subject_val = "[hwloc-users] hwloc error when starting slurmd on 48 core FreeBSD 10.1 system";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 17 14:41:41 2015" -->
<!-- isoreceived="20150117194141" -->
<!-- sent="Sat, 17 Jan 2015 15:41:37 -0400" -->
<!-- isosent="20150117194137" -->
<!-- name="Joseph Mingrone" -->
<!-- email="jrm_at_[hidden]" -->
<!-- subject="[hwloc-users] hwloc error when starting slurmd on 48 core FreeBSD 10.1 system" -->
<!-- id="868uh1yz2m.fsf_at_gly.ftfl.ca" -->
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
<strong>Subject:</strong> [hwloc-users] hwloc error when starting slurmd on 48 core FreeBSD 10.1 system<br>
<strong>From:</strong> Joseph Mingrone (<em>jrm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-17 14:41:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1151.php">Brice Goglin: "Re: [hwloc-users] hwloc error when starting slurmd on 48 core FreeBSD 10.1 system"</a>
<li><strong>Previous message:</strong> <a href="1149.php">Pradeep Kiruvale: "Re: [hwloc-users] PCI devices topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1151.php">Brice Goglin: "Re: [hwloc-users] hwloc error when starting slurmd on 48 core FreeBSD 10.1 system"</a>
<li><strong>Reply:</strong> <a href="1151.php">Brice Goglin: "Re: [hwloc-users] hwloc error when starting slurmd on 48 core FreeBSD 10.1 system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Here is the error message we see when staring slurmd or running
<br>
hwloc-info.
<br>
<p>****************************************************************************
<br>
* hwloc has encountered what looks like an error from the operating system.
<br>
*
<br>
* L3 (P#6 cpuset 0x000003f0) intersects with NUMANode (P#0 cpuset 0x0000003f) without inclusion!
<br>
* Error occurred in topology.c line 940
<br>
*
<br>
* Please report this error message to the hwloc user's mailing list,
<br>
* along with any relevant topology information from your platform.
<br>
****************************************************************************
<br>
depth 0:        1 Machine (type #1)
<br>
&nbsp;depth 1:       4 Socket (type #3)
<br>
&nbsp;&nbsp;depth 2:      8 NUMANode (type #2)
<br>
&nbsp;&nbsp;&nbsp;depth 3:     8 L3Cache (type #4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;depth 4:    24 L2Cache (type #4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 5:   24 L1iCache (type #4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 6:  48 L1dCache (type #4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 7: 48 Core (type #5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;depth 8:        48 PU (type #6)
<br>
<p>This is a system with four 12-core 6348 AMD CPUs.
<br>
<p>Other nodes with older AMD CPUs also running FreeBSD 10.1 don't report
<br>
the error.
<br>
<p>If there is any other information I can provide, please let me know.
<br>
<p>Joseph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1151.php">Brice Goglin: "Re: [hwloc-users] hwloc error when starting slurmd on 48 core FreeBSD 10.1 system"</a>
<li><strong>Previous message:</strong> <a href="1149.php">Pradeep Kiruvale: "Re: [hwloc-users] PCI devices topology"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1151.php">Brice Goglin: "Re: [hwloc-users] hwloc error when starting slurmd on 48 core FreeBSD 10.1 system"</a>
<li><strong>Reply:</strong> <a href="1151.php">Brice Goglin: "Re: [hwloc-users] hwloc error when starting slurmd on 48 core FreeBSD 10.1 system"</a>
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
