<?
$subject_val = "[hwloc-users] Object Depth";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 13 06:32:31 2012" -->
<!-- isoreceived="20120313103231" -->
<!-- sent="Tue, 13 Mar 2012 11:32:27 +0100" -->
<!-- isosent="20120313103227" -->
<!-- name="Marwan Abd Ellah" -->
<!-- email="abdellah.marwan_at_[hidden]" -->
<!-- subject="[hwloc-users] Object Depth" -->
<!-- id="CAKb11pMzHbP51xUa+tS2HiDxGP03w=U=a5QBknLPxgMPAYXY6A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-users] Object Depth<br>
<strong>From:</strong> Marwan Abd Ellah (<em>abdellah.marwan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-13 06:32:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0572.php">Samuel Thibault: "Re: [hwloc-users] Object Depth"</a>
<li><strong>Previous message:</strong> <a href="0570.php">Samuel Thibault: "Re: [hwloc-users] V1.4.1: Windows x64 import library broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0572.php">Samuel Thibault: "Re: [hwloc-users] Object Depth"</a>
<li><strong>Maybe reply:</strong> <a href="0572.php">Samuel Thibault: "Re: [hwloc-users] Object Depth"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I was using the HWLoc library v 1.4.1 for getting a cpuset of the socket
<br>
connected to a certain PCI device (mainly GPU). When I was trying to print
<br>
the topology tree I got the following
<br>
Machine#0(12GB)
<br>
&nbsp;&nbsp;Socket#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3(12MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1(32KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU#6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1(32KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU#7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1(32KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU#8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1(32KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core#8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU#3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU#9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1(32KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core#9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU#10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2(256KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L1(32KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Core#10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU#5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU#11
<br>
&nbsp;&nbsp;HostBridge#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge#16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 1b4b:9123#4096
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge#48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 10de:1086#12288
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:10ce#400
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge#452
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 197b:2363#20480
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 197b:2363#20481
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3a20#498
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCI 8086:3a26#501
<br>
<p>This means that the Socket30 and the HostBridge#0 are at the same level
<br>
(hwloc_obj_t-&gt;depth), but fetching this parameter for each object, I have a
<br>
correct value for the Socket which is 1 and &quot;-3&quot; for the host bridge. Do
<br>
you have a clue about this?
<br>
<p>Regards.
<br>
-Marwan
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0571/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0572.php">Samuel Thibault: "Re: [hwloc-users] Object Depth"</a>
<li><strong>Previous message:</strong> <a href="0570.php">Samuel Thibault: "Re: [hwloc-users] V1.4.1: Windows x64 import library broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0572.php">Samuel Thibault: "Re: [hwloc-users] Object Depth"</a>
<li><strong>Maybe reply:</strong> <a href="0572.php">Samuel Thibault: "Re: [hwloc-users] Object Depth"</a>
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
