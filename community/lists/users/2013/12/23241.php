<?
$subject_val = "[OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work for our magny cours based 32 core node";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 18 21:55:38 2013" -->
<!-- isoreceived="20131219025538" -->
<!-- sent="Thu, 19 Dec 2013 11:55:23 +0900" -->
<!-- isosent="20131219025523" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI users] &amp;quot;-bind-to numa&amp;quot; of openmpi-1.7.4rc1 dosen't work for our magny cours based 32 core node" -->
<!-- id="OF07073718.0D8E733A-ON49257C46.000FB389-49257C46.001013F5_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OFAD0DB395.AD05A9D0-ON49257C45.0081705F-49257C45.0082BD52_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work for our magny cours based 32 core node<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20&amp;amp;quot;-bind-to%20numa&amp;amp;quot;%20of%20openmpi-1.7.4rc1%20dosen't%20work%20for%20our%20magny%20cours%20based%2032%20core%20node"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-12-18 21:55:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23242.php">Ralph Castain: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work for our magny cours based 32 core node"</a>
<li><strong>Previous message:</strong> <a href="23240.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<li><strong>In reply to:</strong> <a href="23232.php">tmishima_at_[hidden]: "Re: [OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23242.php">Ralph Castain: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work for our magny cours based 32 core node"</a>
<li><strong>Reply:</strong> <a href="23242.php">Ralph Castain: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work for our magny cours based 32 core node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I report one more problem with openmpi-1.7.4rc1,
<br>
which is more serious.
<br>
<p>For our 32 core nodes(AMD magny cours based) which has
<br>
8 numa-nodes, &quot;-bind-to numa&quot; does not work. Without
<br>
this option, it works. For your infomation, at the
<br>
bottom of this mail, I added the lstopo information
<br>
of the node.
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<p>[mishima_at_manage ~]$ qsub -I -l nodes=1:ppn=32
<br>
qsub: waiting for job 8352.manage.cluster to start
<br>
qsub: job 8352.manage.cluster ready
<br>
<p>[mishima_at_node03 demos]$ mpirun -np 8 -report-bindings -bind-to numa myprog
<br>
[node03.cluster:15316] [[37582,0],0] bind:upward target NUMANode type
<br>
Machine
<br>
--------------------------------------------------------------------------
<br>
A request was made to bind to NUMA, but an appropriate target could not
<br>
be found on node node03.
<br>
--------------------------------------------------------------------------
<br>
[mishima_at_node03 ~]$ cd ~/Desktop/openmpi-1.7/demos/
<br>
[mishima_at_node03 demos]$ mpirun -np 8 -report-bindings myprog
<br>
[node03.cluster:15282] MCW rank 2 bound to socket 1[core 8[hwt 0]]:
<br>
[./././././././.][B/././././././.][./././././././.][
<br>
./././././././.]
<br>
[node03.cluster:15282] MCW rank 3 bound to socket 1[core 9[hwt 0]]:
<br>
[./././././././.][./B/./././././.][./././././././.][
<br>
./././././././.]
<br>
[node03.cluster:15282] MCW rank 4 bound to socket 2[core 16[hwt 0]]:
<br>
[./././././././.][./././././././.][B/././././././.]
<br>
[./././././././.]
<br>
[node03.cluster:15282] MCW rank 5 bound to socket 2[core 17[hwt 0]]:
<br>
[./././././././.][./././././././.][./B/./././././.]
<br>
[./././././././.]
<br>
[node03.cluster:15282] MCW rank 6 bound to socket 3[core 24[hwt 0]]:
<br>
[./././././././.][./././././././.][./././././././.]
<br>
[B/././././././.]
<br>
[node03.cluster:15282] MCW rank 7 bound to socket 3[core 25[hwt 0]]:
<br>
[./././././././.][./././././././.][./././././././.]
<br>
[./B/./././././.]
<br>
[node03.cluster:15282] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
<br>
[B/././././././.][./././././././.][./././././././.][
<br>
./././././././.]
<br>
[node03.cluster:15282] MCW rank 1 bound to socket 0[core 1[hwt 0]]:
<br>
[./B/./././././.][./././././././.][./././././././.][
<br>
./././././././.]
<br>
Hello world from process 2 of 8
<br>
Hello world from process 5 of 8
<br>
Hello world from process 4 of 8
<br>
Hello world from process 3 of 8
<br>
Hello world from process 1 of 8
<br>
Hello world from process 7 of 8
<br>
Hello world from process 6 of 8
<br>
Hello world from process 0 of 8
<br>
[mishima_at_node03 demos]$ ~/opt/hwloc/bin/lstopo-no-graphics
<br>
Machine (126GB)
<br>
&nbsp;&nbsp;Socket L#0 (32GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#0 (P#0 16GB) + L3 L#0 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#0 (512KB) + L1d L#0 (64KB) + L1i L#0 (64KB) + Core L#0 + PU L#0
<br>
(P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#1 (512KB) + L1d L#1 (64KB) + L1i L#1 (64KB) + Core L#1 + PU L#1
<br>
(P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#2 (512KB) + L1d L#2 (64KB) + L1i L#2 (64KB) + Core L#2 + PU L#2
<br>
(P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#3 (512KB) + L1d L#3 (64KB) + L1i L#3 (64KB) + Core L#3 + PU L#3
<br>
(P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#1 (P#1 16GB) + L3 L#1 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#4 (512KB) + L1d L#4 (64KB) + L1i L#4 (64KB) + Core L#4 + PU L#4
<br>
(P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#5 (512KB) + L1d L#5 (64KB) + L1i L#5 (64KB) + Core L#5 + PU L#5
<br>
(P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#6 (512KB) + L1d L#6 (64KB) + L1i L#6 (64KB) + Core L#6 + PU L#6
<br>
(P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#7 (512KB) + L1d L#7 (64KB) + L1i L#7 (64KB) + Core L#7 + PU L#7
<br>
(P#7)
<br>
&nbsp;&nbsp;Socket L#1 (32GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#2 (P#6 16GB) + L3 L#2 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#8 (512KB) + L1d L#8 (64KB) + L1i L#8 (64KB) + Core L#8 + PU L#8
<br>
(P#8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#9 (512KB) + L1d L#9 (64KB) + L1i L#9 (64KB) + Core L#9 + PU L#9
<br>
(P#9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#10 (512KB) + L1d L#10 (64KB) + L1i L#10 (64KB) + Core L#10 + PU
<br>
L#10 (P#10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#11 (512KB) + L1d L#11 (64KB) + L1i L#11 (64KB) + Core L#11 + PU
<br>
L#11 (P#11)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#3 (P#7 16GB) + L3 L#3 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#12 (512KB) + L1d L#12 (64KB) + L1i L#12 (64KB) + Core L#12 + PU
<br>
L#12 (P#12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#13 (512KB) + L1d L#13 (64KB) + L1i L#13 (64KB) + Core L#13 + PU
<br>
L#13 (P#13)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#14 (512KB) + L1d L#14 (64KB) + L1i L#14 (64KB) + Core L#14 + PU
<br>
L#14 (P#14)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#15 (512KB) + L1d L#15 (64KB) + L1i L#15 (64KB) + Core L#15 + PU
<br>
L#15 (P#15)
<br>
&nbsp;&nbsp;Socket L#2 (32GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#4 (P#4 16GB) + L3 L#4 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#16 (512KB) + L1d L#16 (64KB) + L1i L#16 (64KB) + Core L#16 + PU
<br>
L#16 (P#16)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#17 (512KB) + L1d L#17 (64KB) + L1i L#17 (64KB) + Core L#17 + PU
<br>
L#17 (P#17)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#18 (512KB) + L1d L#18 (64KB) + L1i L#18 (64KB) + Core L#18 + PU
<br>
L#18 (P#18)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#19 (512KB) + L1d L#19 (64KB) + L1i L#19 (64KB) + Core L#19 + PU
<br>
L#19 (P#19)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#5 (P#5 16GB) + L3 L#5 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#20 (512KB) + L1d L#20 (64KB) + L1i L#20 (64KB) + Core L#20 + PU
<br>
L#20 (P#20)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#21 (512KB) + L1d L#21 (64KB) + L1i L#21 (64KB) + Core L#21 + PU
<br>
L#21 (P#21)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#22 (512KB) + L1d L#22 (64KB) + L1i L#22 (64KB) + Core L#22 + PU
<br>
L#22 (P#22)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#23 (512KB) + L1d L#23 (64KB) + L1i L#23 (64KB) + Core L#23 + PU
<br>
L#23 (P#23)
<br>
&nbsp;&nbsp;Socket L#3 (32GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#6 (P#2 16GB) + L3 L#6 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#24 (512KB) + L1d L#24 (64KB) + L1i L#24 (64KB) + Core L#24 + PU
<br>
L#24 (P#24)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#25 (512KB) + L1d L#25 (64KB) + L1i L#25 (64KB) + Core L#25 + PU
<br>
L#25 (P#25)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#26 (512KB) + L1d L#26 (64KB) + L1i L#26 (64KB) + Core L#26 + PU
<br>
L#26 (P#26)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#27 (512KB) + L1d L#27 (64KB) + L1i L#27 (64KB) + Core L#27 + PU
<br>
L#27 (P#27)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode L#7 (P#3 16GB) + L3 L#7 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#28 (512KB) + L1d L#28 (64KB) + L1i L#28 (64KB) + Core L#28 + PU
<br>
L#28 (P#28)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#29 (512KB) + L1d L#29 (64KB) + L1i L#29 (64KB) + Core L#29 + PU
<br>
L#29 (P#29)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#30 (512KB) + L1d L#30 (64KB) + L1i L#30 (64KB) + Core L#30 + PU
<br>
L#30 (P#30)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 L#31 (512KB) + L1d L#31 (64KB) + L1i L#31 (64KB) + Core L#31 + PU
<br>
L#31 (P#31)
<br>
&nbsp;&nbsp;HostBridge L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 14e4:1639
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#0 &quot;eth0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 14e4:1639
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#1 &quot;eth1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 14e4:1639
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#2 &quot;eth2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 14e4:1639
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#3 &quot;eth3&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 1000:0072
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#4 &quot;sdb&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#5 &quot;sda&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCI 1002:4390
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#6 &quot;sr0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 102b:0532
<br>
&nbsp;&nbsp;HostBridge L#7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 15b3:6274
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#7 &quot;ib0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OpenFabrics L#8 &quot;mthca0&quot;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23242.php">Ralph Castain: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work for our magny cours based 32 core node"</a>
<li><strong>Previous message:</strong> <a href="23240.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<li><strong>In reply to:</strong> <a href="23232.php">tmishima_at_[hidden]: "Re: [OMPI users] tcp of openmpi-1.7.3 under our environment is very slow"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23242.php">Ralph Castain: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work for our magny cours based 32 core node"</a>
<li><strong>Reply:</strong> <a href="23242.php">Ralph Castain: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work for our magny cours based 32 core node"</a>
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
