<?
$subject_val = "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work	for our magny cours based 32 core node";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 18 22:55:59 2013" -->
<!-- isoreceived="20131219035559" -->
<!-- sent="Thu, 19 Dec 2013 12:55:42 +0900" -->
<!-- isosent="20131219035542" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;-bind-to numa&amp;quot; of openmpi-1.7.4rc1 dosen't work	for our magny cours based 32 core node" -->
<!-- id="OF26303555.536D2B15-ON49257C46.0014F66D-49257C46.0015996E_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="90D0C197-D751-469F-9D69-6339999D6683_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work	for our magny cours based 32 core node<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20&amp;amp;quot;-bind-to%20numa&amp;amp;quot;%20of%20openmpi-1.7.4rc1%20dosen't%20work	for%20our%20magny%20cours%20based%2032%20core%20node"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-12-18 22:55:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23244.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work	for our magny cours based 32 core node"</a>
<li><strong>Previous message:</strong> <a href="23242.php">Ralph Castain: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work for our magny cours based 32 core node"</a>
<li><strong>In reply to:</strong> <a href="23242.php">Ralph Castain: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work for our magny cours based 32 core node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23244.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work	for our magny cours based 32 core node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, here is the output with &quot;-mca rmaps_base_verbose 10
<br>
-mca ess_base_verbose 5&quot;. Please see the attached file.
<br>
<p>(See attached file: output.txt)
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<p><span class="quotelev1">&gt; Hmm...try adding &quot;-mca rmaps_base_verbose 10 -mca ess_base_verbose 5&quot; to
</span><br>
your cmd line and let's see what it thinks it found.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 18, 2013, at 6:55 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi, I report one more problem with openmpi-1.7.4rc1,
</span><br>
<span class="quotelev2">&gt; &gt; which is more serious.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For our 32 core nodes(AMD magny cours based) which has
</span><br>
<span class="quotelev2">&gt; &gt; 8 numa-nodes, &quot;-bind-to numa&quot; does not work. Without
</span><br>
<span class="quotelev2">&gt; &gt; this option, it works. For your infomation, at the
</span><br>
<span class="quotelev2">&gt; &gt; bottom of this mail, I added the lstopo information
</span><br>
<span class="quotelev2">&gt; &gt; of the node.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage ~]$ qsub -I -l nodes=1:ppn=32
</span><br>
<span class="quotelev2">&gt; &gt; qsub: waiting for job 8352.manage.cluster to start
</span><br>
<span class="quotelev2">&gt; &gt; qsub: job 8352.manage.cluster ready
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_node03 demos]$ mpirun -np 8 -report-bindings -bind-to numa
</span><br>
myprog
<br>
<span class="quotelev2">&gt; &gt; [node03.cluster:15316] [[37582,0],0] bind:upward target NUMANode type
</span><br>
<span class="quotelev2">&gt; &gt; Machine
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt; A request was made to bind to NUMA, but an appropriate target could not
</span><br>
<span class="quotelev2">&gt; &gt; be found on node node03.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt; [mishima_at_node03 ~]$ cd ~/Desktop/openmpi-1.7/demos/
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_node03 demos]$ mpirun -np 8 -report-bindings myprog
</span><br>
<span class="quotelev2">&gt; &gt; [node03.cluster:15282] MCW rank 2 bound to socket 1[core 8[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt; [./././././././.][B/././././././.][./././././././.][
</span><br>
<span class="quotelev2">&gt; &gt; ./././././././.]
</span><br>
<span class="quotelev2">&gt; &gt; [node03.cluster:15282] MCW rank 3 bound to socket 1[core 9[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt; [./././././././.][./B/./././././.][./././././././.][
</span><br>
<span class="quotelev2">&gt; &gt; ./././././././.]
</span><br>
<span class="quotelev2">&gt; &gt; [node03.cluster:15282] MCW rank 4 bound to socket 2[core 16[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt; [./././././././.][./././././././.][B/././././././.]
</span><br>
<span class="quotelev2">&gt; &gt; [./././././././.]
</span><br>
<span class="quotelev2">&gt; &gt; [node03.cluster:15282] MCW rank 5 bound to socket 2[core 17[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt; [./././././././.][./././././././.][./B/./././././.]
</span><br>
<span class="quotelev2">&gt; &gt; [./././././././.]
</span><br>
<span class="quotelev2">&gt; &gt; [node03.cluster:15282] MCW rank 6 bound to socket 3[core 24[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt; [./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev2">&gt; &gt; [B/././././././.]
</span><br>
<span class="quotelev2">&gt; &gt; [node03.cluster:15282] MCW rank 7 bound to socket 3[core 25[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt; [./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev2">&gt; &gt; [./B/./././././.]
</span><br>
<span class="quotelev2">&gt; &gt; [node03.cluster:15282] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt; [B/././././././.][./././././././.][./././././././.][
</span><br>
<span class="quotelev2">&gt; &gt; ./././././././.]
</span><br>
<span class="quotelev2">&gt; &gt; [node03.cluster:15282] MCW rank 1 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev2">&gt; &gt; [./B/./././././.][./././././././.][./././././././.][
</span><br>
<span class="quotelev2">&gt; &gt; ./././././././.]
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 2 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 5 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 4 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 3 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 1 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 7 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 6 of 8
</span><br>
<span class="quotelev2">&gt; &gt; Hello world from process 0 of 8
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_node03 demos]$ ~/opt/hwloc/bin/lstopo-no-graphics
</span><br>
<span class="quotelev2">&gt; &gt; Machine (126GB)
</span><br>
<span class="quotelev2">&gt; &gt;  Socket L#0 (32GB)
</span><br>
<span class="quotelev2">&gt; &gt;    NUMANode L#0 (P#0 16GB) + L3 L#0 (5118KB)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#0 (512KB) + L1d L#0 (64KB) + L1i L#0 (64KB) + Core L#0 + PU
</span><br>
L#0
<br>
<span class="quotelev2">&gt; &gt; (P#0)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#1 (512KB) + L1d L#1 (64KB) + L1i L#1 (64KB) + Core L#1 + PU
</span><br>
L#1
<br>
<span class="quotelev2">&gt; &gt; (P#1)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#2 (512KB) + L1d L#2 (64KB) + L1i L#2 (64KB) + Core L#2 + PU
</span><br>
L#2
<br>
<span class="quotelev2">&gt; &gt; (P#2)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#3 (512KB) + L1d L#3 (64KB) + L1i L#3 (64KB) + Core L#3 + PU
</span><br>
L#3
<br>
<span class="quotelev2">&gt; &gt; (P#3)
</span><br>
<span class="quotelev2">&gt; &gt;    NUMANode L#1 (P#1 16GB) + L3 L#1 (5118KB)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#4 (512KB) + L1d L#4 (64KB) + L1i L#4 (64KB) + Core L#4 + PU
</span><br>
L#4
<br>
<span class="quotelev2">&gt; &gt; (P#4)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#5 (512KB) + L1d L#5 (64KB) + L1i L#5 (64KB) + Core L#5 + PU
</span><br>
L#5
<br>
<span class="quotelev2">&gt; &gt; (P#5)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#6 (512KB) + L1d L#6 (64KB) + L1i L#6 (64KB) + Core L#6 + PU
</span><br>
L#6
<br>
<span class="quotelev2">&gt; &gt; (P#6)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#7 (512KB) + L1d L#7 (64KB) + L1i L#7 (64KB) + Core L#7 + PU
</span><br>
L#7
<br>
<span class="quotelev2">&gt; &gt; (P#7)
</span><br>
<span class="quotelev2">&gt; &gt;  Socket L#1 (32GB)
</span><br>
<span class="quotelev2">&gt; &gt;    NUMANode L#2 (P#6 16GB) + L3 L#2 (5118KB)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#8 (512KB) + L1d L#8 (64KB) + L1i L#8 (64KB) + Core L#8 + PU
</span><br>
L#8
<br>
<span class="quotelev2">&gt; &gt; (P#8)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#9 (512KB) + L1d L#9 (64KB) + L1i L#9 (64KB) + Core L#9 + PU
</span><br>
L#9
<br>
<span class="quotelev2">&gt; &gt; (P#9)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#10 (512KB) + L1d L#10 (64KB) + L1i L#10 (64KB) + Core L#10 +
</span><br>
PU
<br>
<span class="quotelev2">&gt; &gt; L#10 (P#10)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#11 (512KB) + L1d L#11 (64KB) + L1i L#11 (64KB) + Core L#11 +
</span><br>
PU
<br>
<span class="quotelev2">&gt; &gt; L#11 (P#11)
</span><br>
<span class="quotelev2">&gt; &gt;    NUMANode L#3 (P#7 16GB) + L3 L#3 (5118KB)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#12 (512KB) + L1d L#12 (64KB) + L1i L#12 (64KB) + Core L#12 +
</span><br>
PU
<br>
<span class="quotelev2">&gt; &gt; L#12 (P#12)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#13 (512KB) + L1d L#13 (64KB) + L1i L#13 (64KB) + Core L#13 +
</span><br>
PU
<br>
<span class="quotelev2">&gt; &gt; L#13 (P#13)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#14 (512KB) + L1d L#14 (64KB) + L1i L#14 (64KB) + Core L#14 +
</span><br>
PU
<br>
<span class="quotelev2">&gt; &gt; L#14 (P#14)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#15 (512KB) + L1d L#15 (64KB) + L1i L#15 (64KB) + Core L#15 +
</span><br>
PU
<br>
<span class="quotelev2">&gt; &gt; L#15 (P#15)
</span><br>
<span class="quotelev2">&gt; &gt;  Socket L#2 (32GB)
</span><br>
<span class="quotelev2">&gt; &gt;    NUMANode L#4 (P#4 16GB) + L3 L#4 (5118KB)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#16 (512KB) + L1d L#16 (64KB) + L1i L#16 (64KB) + Core L#16 +
</span><br>
PU
<br>
<span class="quotelev2">&gt; &gt; L#16 (P#16)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#17 (512KB) + L1d L#17 (64KB) + L1i L#17 (64KB) + Core L#17 +
</span><br>
PU
<br>
<span class="quotelev2">&gt; &gt; L#17 (P#17)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#18 (512KB) + L1d L#18 (64KB) + L1i L#18 (64KB) + Core L#18 +
</span><br>
PU
<br>
<span class="quotelev2">&gt; &gt; L#18 (P#18)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#19 (512KB) + L1d L#19 (64KB) + L1i L#19 (64KB) + Core L#19 +
</span><br>
PU
<br>
<span class="quotelev2">&gt; &gt; L#19 (P#19)
</span><br>
<span class="quotelev2">&gt; &gt;    NUMANode L#5 (P#5 16GB) + L3 L#5 (5118KB)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#20 (512KB) + L1d L#20 (64KB) + L1i L#20 (64KB) + Core L#20 +
</span><br>
PU
<br>
<span class="quotelev2">&gt; &gt; L#20 (P#20)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#21 (512KB) + L1d L#21 (64KB) + L1i L#21 (64KB) + Core L#21 +
</span><br>
PU
<br>
<span class="quotelev2">&gt; &gt; L#21 (P#21)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#22 (512KB) + L1d L#22 (64KB) + L1i L#22 (64KB) + Core L#22 +
</span><br>
PU
<br>
<span class="quotelev2">&gt; &gt; L#22 (P#22)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#23 (512KB) + L1d L#23 (64KB) + L1i L#23 (64KB) + Core L#23 +
</span><br>
PU
<br>
<span class="quotelev2">&gt; &gt; L#23 (P#23)
</span><br>
<span class="quotelev2">&gt; &gt;  Socket L#3 (32GB)
</span><br>
<span class="quotelev2">&gt; &gt;    NUMANode L#6 (P#2 16GB) + L3 L#6 (5118KB)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#24 (512KB) + L1d L#24 (64KB) + L1i L#24 (64KB) + Core L#24 +
</span><br>
PU
<br>
<span class="quotelev2">&gt; &gt; L#24 (P#24)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#25 (512KB) + L1d L#25 (64KB) + L1i L#25 (64KB) + Core L#25 +
</span><br>
PU
<br>
<span class="quotelev2">&gt; &gt; L#25 (P#25)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#26 (512KB) + L1d L#26 (64KB) + L1i L#26 (64KB) + Core L#26 +
</span><br>
PU
<br>
<span class="quotelev2">&gt; &gt; L#26 (P#26)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#27 (512KB) + L1d L#27 (64KB) + L1i L#27 (64KB) + Core L#27 +
</span><br>
PU
<br>
<span class="quotelev2">&gt; &gt; L#27 (P#27)
</span><br>
<span class="quotelev2">&gt; &gt;    NUMANode L#7 (P#3 16GB) + L3 L#7 (5118KB)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#28 (512KB) + L1d L#28 (64KB) + L1i L#28 (64KB) + Core L#28 +
</span><br>
PU
<br>
<span class="quotelev2">&gt; &gt; L#28 (P#28)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#29 (512KB) + L1d L#29 (64KB) + L1i L#29 (64KB) + Core L#29 +
</span><br>
PU
<br>
<span class="quotelev2">&gt; &gt; L#29 (P#29)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#30 (512KB) + L1d L#30 (64KB) + L1i L#30 (64KB) + Core L#30 +
</span><br>
PU
<br>
<span class="quotelev2">&gt; &gt; L#30 (P#30)
</span><br>
<span class="quotelev2">&gt; &gt;      L2 L#31 (512KB) + L1d L#31 (64KB) + L1i L#31 (64KB) + Core L#31 +
</span><br>
PU
<br>
<span class="quotelev2">&gt; &gt; L#31 (P#31)
</span><br>
<span class="quotelev2">&gt; &gt;  HostBridge L#0
</span><br>
<span class="quotelev2">&gt; &gt;    PCIBridge
</span><br>
<span class="quotelev2">&gt; &gt;      PCI 14e4:1639
</span><br>
<span class="quotelev2">&gt; &gt;        Net L#0 &quot;eth0&quot;
</span><br>
<span class="quotelev2">&gt; &gt;      PCI 14e4:1639
</span><br>
<span class="quotelev2">&gt; &gt;        Net L#1 &quot;eth1&quot;
</span><br>
<span class="quotelev2">&gt; &gt;    PCIBridge
</span><br>
<span class="quotelev2">&gt; &gt;      PCI 14e4:1639
</span><br>
<span class="quotelev2">&gt; &gt;        Net L#2 &quot;eth2&quot;
</span><br>
<span class="quotelev2">&gt; &gt;      PCI 14e4:1639
</span><br>
<span class="quotelev2">&gt; &gt;        Net L#3 &quot;eth3&quot;
</span><br>
<span class="quotelev2">&gt; &gt;    PCIBridge
</span><br>
<span class="quotelev2">&gt; &gt;      PCIBridge
</span><br>
<span class="quotelev2">&gt; &gt;        PCIBridge
</span><br>
<span class="quotelev2">&gt; &gt;          PCI 1000:0072
</span><br>
<span class="quotelev2">&gt; &gt;            Block L#4 &quot;sdb&quot;
</span><br>
<span class="quotelev2">&gt; &gt;            Block L#5 &quot;sda&quot;
</span><br>
<span class="quotelev2">&gt; &gt;    PCI 1002:4390
</span><br>
<span class="quotelev2">&gt; &gt;      Block L#6 &quot;sr0&quot;
</span><br>
<span class="quotelev2">&gt; &gt;    PCIBridge
</span><br>
<span class="quotelev2">&gt; &gt;      PCI 102b:0532
</span><br>
<span class="quotelev2">&gt; &gt;  HostBridge L#7
</span><br>
<span class="quotelev2">&gt; &gt;    PCIBridge
</span><br>
<span class="quotelev2">&gt; &gt;      PCI 15b3:6274
</span><br>
<span class="quotelev2">&gt; &gt;        Net L#7 &quot;ib0&quot;
</span><br>
<span class="quotelev2">&gt; &gt;        OpenFabrics L#8 &quot;mthca0&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>

<br><p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23243/output.txt">output.txt</a>
</ul>
<!-- attachment="output.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23244.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work	for our magny cours based 32 core node"</a>
<li><strong>Previous message:</strong> <a href="23242.php">Ralph Castain: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work for our magny cours based 32 core node"</a>
<li><strong>In reply to:</strong> <a href="23242.php">Ralph Castain: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work for our magny cours based 32 core node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23244.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work	for our magny cours based 32 core node"</a>
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
