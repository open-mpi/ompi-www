<?
$subject_val = "[hwloc-devel] hwloc-distrib --among";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 16 15:33:09 2010" -->
<!-- isoreceived="20101116203309" -->
<!-- sent="Tue, 16 Nov 2010 21:30:37 +0100" -->
<!-- isosent="20101116203037" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-distrib --among" -->
<!-- id="201011162130.37614.jhladky_at_redhat.com" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-distrib --among<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-16 15:30:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1482.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<li><strong>Previous message:</strong> <a href="1480.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1rc2r2791)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1482.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<li><strong>Maybe reply:</strong> <a href="1482.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<li><strong>Maybe reply:</strong> <a href="1483.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<li><strong>Maybe reply:</strong> <a href="1485.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
<p>I had hold an internal presentation on hwloc. It was success, people has liked 
<br>
it. One colleague has tried it on 8 socket box and we have found that memory 
<br>
was installed in the wrong slots resulting in very strange NUMA configuration.
<br>
<p>There was some discussion about hwloc-distrib --among
<br>
<p>If I understand it correctly, --among accepts one of 
<br>
{pu,core,socket,node,machine}
<br>
<p>Should it support also option in form of socket:0 ?? I have tried it but it 
<br>
does not work for me.
<br>
<p>I do not understand results:
<br>
<p>=======================================================
<br>
$ hwloc-calc --po --proclist $(hwloc-distrib --single --among machine 4)
<br>
0,2,1,3
<br>
<p>$ hwloc-calc --po --proclist $(hwloc-distrib --single --among numa 4)
<br>
0,2,1,3
<br>
<p>$ hwloc-calc --po --proclist $(hwloc-distrib --single --among socket 4)
<br>
0,2,1,3
<br>
<p>This seems to be OK.
<br>
<p>$ hwloc-calc --po --proclist $(hwloc-distrib --single --among core 4)
<br>
0,2,4,6
<br>
<p>Among Socket:1 ??
<br>
<p>$ hwloc-calc --po --proclist $(hwloc-distrib --single --among pu 4)
<br>
0,8,2,10
<br>
<p>Among Core:0 and Core:1 ??
<br>
<p>$ lstopo --physical
<br>
Machine (12GB)
<br>
&nbsp;&nbsp;NUMANode p#0 (6144MB) + Socket p#1 + L3 (12MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1 (32KB) + Core p#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU p#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU p#8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1 (32KB) + Core p#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU p#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU p#10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1 (32KB) + Core p#9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU p#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU p#12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1 (32KB) + Core p#10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU p#6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU p#14
<br>
&nbsp;&nbsp;NUMANode p#1 (6134MB) + Socket p#0 + L3 (12MB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1 (32KB) + Core p#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU p#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU p#9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1 (32KB) + Core p#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU p#3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU p#11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1 (32KB) + Core p#9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU p#5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU p#13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 (256KB) + L1 (32KB) + Core p#10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU p#7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU p#15
<br>
========================================================
<br>
<p>Could you explain the usage model for --among? Which arguemts are supported 
<br>
and what effect they have?
<br>
<p><p><p>I have also attached output of hwloc-gather-topology.sh for 8 Socket system 
<br>
with two NUMA nodes. One NUMA node has 7 Sockets associated with it whereas 
<br>
another socket has just Socket connected to it.
<br>
<p>I have tried to use various --among and --ignore options to distribute 8 
<br>
parallel jobs on a box so that each job is running on one socket. I was not 
<br>
able to achieve this.
<br>
<p>Could you please try it? What command should I use? Or is it perhaps some bug? 
<br>
<p>I have used 1.1rc2
<br>
<p>=============8 socket system=======================
<br>
[root_at_hp-dl980g7-01 utils]# ./hwloc-calc --po --proclist $(./hwloc-distrib --
<br>
single --ignore machine 8)
<br>
0,1,16,24,32,40,48,56
<br>
[root_at_hp-dl980g7-01 utils]# ./hwloc-calc --po --proclist $(./hwloc-distrib --
<br>
single --ignore numa 8)
<br>
0,16,24,32,8,9,10,11
<br>
[root_at_hp-dl980g7-01 utils]# ./hwloc-calc --po --proclist $(./hwloc-distrib --
<br>
single --ignore socket 8)
<br>
0,16,24,32,8,9,10,11
<br>
[root_at_hp-dl980g7-01 utils]# ./hwloc-calc --po --proclist $(./hwloc-distrib --
<br>
single --ignore core 8)
<br>
0,16,24,32,8,9,10,11
<br>
[root_at_hp-dl980g7-01 utils]# ./hwloc-calc --po --proclist $(./hwloc-distrib --
<br>
single --ignore pu 8)
<br>
0,16,24,32,8,9,10,11
<br>
================================================
<br>
<p>Please notice that Socket#1 is never chosen. Could you please help me with it?
<br>
<p><p>Thanks a lot!
<br>
Jirka
<br>
<p>
<br><hr>
<ul>
<li>application/x-bzip-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1481/hp-dl980g7-01.tar.bz2">hp-dl980g7-01.tar.bz2</a>
</ul>
<!-- attachment="hp-dl980g7-01.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1482.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<li><strong>Previous message:</strong> <a href="1480.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1rc2r2791)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1482.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<li><strong>Maybe reply:</strong> <a href="1482.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<li><strong>Maybe reply:</strong> <a href="1483.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<li><strong>Maybe reply:</strong> <a href="1485.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib --among"</a>
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
