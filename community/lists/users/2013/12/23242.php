<?
$subject_val = "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work for our magny cours based 32 core node";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 18 22:21:19 2013" -->
<!-- isoreceived="20131219032119" -->
<!-- sent="Wed, 18 Dec 2013 19:21:06 -0800" -->
<!-- isosent="20131219032106" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;-bind-to numa&amp;quot; of openmpi-1.7.4rc1 dosen't work for our magny cours based 32 core node" -->
<!-- id="90D0C197-D751-469F-9D69-6339999D6683_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF07073718.0D8E733A-ON49257C46.000FB389-49257C46.001013F5_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work for our magny cours based 32 core node<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-18 22:21:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23243.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work	for our magny cours based 32 core node"</a>
<li><strong>Previous message:</strong> <a href="23241.php">tmishima_at_[hidden]: "[OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work for our magny cours based 32 core node"</a>
<li><strong>In reply to:</strong> <a href="23241.php">tmishima_at_[hidden]: "[OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work for our magny cours based 32 core node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23243.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work	for our magny cours based 32 core node"</a>
<li><strong>Reply:</strong> <a href="23243.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work	for our magny cours based 32 core node"</a>
<li><strong>Reply:</strong> <a href="23244.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work	for our magny cours based 32 core node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm...try adding &quot;-mca rmaps_base_verbose 10 -mca ess_base_verbose 5&quot; to your cmd line and let's see what it thinks it found.
<br>
<p><p>On Dec 18, 2013, at 6:55 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi, I report one more problem with openmpi-1.7.4rc1,
</span><br>
<span class="quotelev1">&gt; which is more serious.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For our 32 core nodes(AMD magny cours based) which has
</span><br>
<span class="quotelev1">&gt; 8 numa-nodes, &quot;-bind-to numa&quot; does not work. Without
</span><br>
<span class="quotelev1">&gt; this option, it works. For your infomation, at the
</span><br>
<span class="quotelev1">&gt; bottom of this mail, I added the lstopo information
</span><br>
<span class="quotelev1">&gt; of the node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mishima_at_manage ~]$ qsub -I -l nodes=1:ppn=32
</span><br>
<span class="quotelev1">&gt; qsub: waiting for job 8352.manage.cluster to start
</span><br>
<span class="quotelev1">&gt; qsub: job 8352.manage.cluster ready
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mishima_at_node03 demos]$ mpirun -np 8 -report-bindings -bind-to numa myprog
</span><br>
<span class="quotelev1">&gt; [node03.cluster:15316] [[37582,0],0] bind:upward target NUMANode type
</span><br>
<span class="quotelev1">&gt; Machine
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A request was made to bind to NUMA, but an appropriate target could not
</span><br>
<span class="quotelev1">&gt; be found on node node03.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [mishima_at_node03 ~]$ cd ~/Desktop/openmpi-1.7/demos/
</span><br>
<span class="quotelev1">&gt; [mishima_at_node03 demos]$ mpirun -np 8 -report-bindings myprog
</span><br>
<span class="quotelev1">&gt; [node03.cluster:15282] MCW rank 2 bound to socket 1[core 8[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././././.][B/././././././.][./././././././.][
</span><br>
<span class="quotelev1">&gt; ./././././././.]
</span><br>
<span class="quotelev1">&gt; [node03.cluster:15282] MCW rank 3 bound to socket 1[core 9[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././././.][./B/./././././.][./././././././.][
</span><br>
<span class="quotelev1">&gt; ./././././././.]
</span><br>
<span class="quotelev1">&gt; [node03.cluster:15282] MCW rank 4 bound to socket 2[core 16[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././././.][./././././././.][B/././././././.]
</span><br>
<span class="quotelev1">&gt; [./././././././.]
</span><br>
<span class="quotelev1">&gt; [node03.cluster:15282] MCW rank 5 bound to socket 2[core 17[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././././.][./././././././.][./B/./././././.]
</span><br>
<span class="quotelev1">&gt; [./././././././.]
</span><br>
<span class="quotelev1">&gt; [node03.cluster:15282] MCW rank 6 bound to socket 3[core 24[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; [B/././././././.]
</span><br>
<span class="quotelev1">&gt; [node03.cluster:15282] MCW rank 7 bound to socket 3[core 25[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./././././././.][./././././././.][./././././././.]
</span><br>
<span class="quotelev1">&gt; [./B/./././././.]
</span><br>
<span class="quotelev1">&gt; [node03.cluster:15282] MCW rank 0 bound to socket 0[core 0[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [B/././././././.][./././././././.][./././././././.][
</span><br>
<span class="quotelev1">&gt; ./././././././.]
</span><br>
<span class="quotelev1">&gt; [node03.cluster:15282] MCW rank 1 bound to socket 0[core 1[hwt 0]]:
</span><br>
<span class="quotelev1">&gt; [./B/./././././.][./././././././.][./././././././.][
</span><br>
<span class="quotelev1">&gt; ./././././././.]
</span><br>
<span class="quotelev1">&gt; Hello world from process 2 of 8
</span><br>
<span class="quotelev1">&gt; Hello world from process 5 of 8
</span><br>
<span class="quotelev1">&gt; Hello world from process 4 of 8
</span><br>
<span class="quotelev1">&gt; Hello world from process 3 of 8
</span><br>
<span class="quotelev1">&gt; Hello world from process 1 of 8
</span><br>
<span class="quotelev1">&gt; Hello world from process 7 of 8
</span><br>
<span class="quotelev1">&gt; Hello world from process 6 of 8
</span><br>
<span class="quotelev1">&gt; Hello world from process 0 of 8
</span><br>
<span class="quotelev1">&gt; [mishima_at_node03 demos]$ ~/opt/hwloc/bin/lstopo-no-graphics
</span><br>
<span class="quotelev1">&gt; Machine (126GB)
</span><br>
<span class="quotelev1">&gt;  Socket L#0 (32GB)
</span><br>
<span class="quotelev1">&gt;    NUMANode L#0 (P#0 16GB) + L3 L#0 (5118KB)
</span><br>
<span class="quotelev1">&gt;      L2 L#0 (512KB) + L1d L#0 (64KB) + L1i L#0 (64KB) + Core L#0 + PU L#0
</span><br>
<span class="quotelev1">&gt; (P#0)
</span><br>
<span class="quotelev1">&gt;      L2 L#1 (512KB) + L1d L#1 (64KB) + L1i L#1 (64KB) + Core L#1 + PU L#1
</span><br>
<span class="quotelev1">&gt; (P#1)
</span><br>
<span class="quotelev1">&gt;      L2 L#2 (512KB) + L1d L#2 (64KB) + L1i L#2 (64KB) + Core L#2 + PU L#2
</span><br>
<span class="quotelev1">&gt; (P#2)
</span><br>
<span class="quotelev1">&gt;      L2 L#3 (512KB) + L1d L#3 (64KB) + L1i L#3 (64KB) + Core L#3 + PU L#3
</span><br>
<span class="quotelev1">&gt; (P#3)
</span><br>
<span class="quotelev1">&gt;    NUMANode L#1 (P#1 16GB) + L3 L#1 (5118KB)
</span><br>
<span class="quotelev1">&gt;      L2 L#4 (512KB) + L1d L#4 (64KB) + L1i L#4 (64KB) + Core L#4 + PU L#4
</span><br>
<span class="quotelev1">&gt; (P#4)
</span><br>
<span class="quotelev1">&gt;      L2 L#5 (512KB) + L1d L#5 (64KB) + L1i L#5 (64KB) + Core L#5 + PU L#5
</span><br>
<span class="quotelev1">&gt; (P#5)
</span><br>
<span class="quotelev1">&gt;      L2 L#6 (512KB) + L1d L#6 (64KB) + L1i L#6 (64KB) + Core L#6 + PU L#6
</span><br>
<span class="quotelev1">&gt; (P#6)
</span><br>
<span class="quotelev1">&gt;      L2 L#7 (512KB) + L1d L#7 (64KB) + L1i L#7 (64KB) + Core L#7 + PU L#7
</span><br>
<span class="quotelev1">&gt; (P#7)
</span><br>
<span class="quotelev1">&gt;  Socket L#1 (32GB)
</span><br>
<span class="quotelev1">&gt;    NUMANode L#2 (P#6 16GB) + L3 L#2 (5118KB)
</span><br>
<span class="quotelev1">&gt;      L2 L#8 (512KB) + L1d L#8 (64KB) + L1i L#8 (64KB) + Core L#8 + PU L#8
</span><br>
<span class="quotelev1">&gt; (P#8)
</span><br>
<span class="quotelev1">&gt;      L2 L#9 (512KB) + L1d L#9 (64KB) + L1i L#9 (64KB) + Core L#9 + PU L#9
</span><br>
<span class="quotelev1">&gt; (P#9)
</span><br>
<span class="quotelev1">&gt;      L2 L#10 (512KB) + L1d L#10 (64KB) + L1i L#10 (64KB) + Core L#10 + PU
</span><br>
<span class="quotelev1">&gt; L#10 (P#10)
</span><br>
<span class="quotelev1">&gt;      L2 L#11 (512KB) + L1d L#11 (64KB) + L1i L#11 (64KB) + Core L#11 + PU
</span><br>
<span class="quotelev1">&gt; L#11 (P#11)
</span><br>
<span class="quotelev1">&gt;    NUMANode L#3 (P#7 16GB) + L3 L#3 (5118KB)
</span><br>
<span class="quotelev1">&gt;      L2 L#12 (512KB) + L1d L#12 (64KB) + L1i L#12 (64KB) + Core L#12 + PU
</span><br>
<span class="quotelev1">&gt; L#12 (P#12)
</span><br>
<span class="quotelev1">&gt;      L2 L#13 (512KB) + L1d L#13 (64KB) + L1i L#13 (64KB) + Core L#13 + PU
</span><br>
<span class="quotelev1">&gt; L#13 (P#13)
</span><br>
<span class="quotelev1">&gt;      L2 L#14 (512KB) + L1d L#14 (64KB) + L1i L#14 (64KB) + Core L#14 + PU
</span><br>
<span class="quotelev1">&gt; L#14 (P#14)
</span><br>
<span class="quotelev1">&gt;      L2 L#15 (512KB) + L1d L#15 (64KB) + L1i L#15 (64KB) + Core L#15 + PU
</span><br>
<span class="quotelev1">&gt; L#15 (P#15)
</span><br>
<span class="quotelev1">&gt;  Socket L#2 (32GB)
</span><br>
<span class="quotelev1">&gt;    NUMANode L#4 (P#4 16GB) + L3 L#4 (5118KB)
</span><br>
<span class="quotelev1">&gt;      L2 L#16 (512KB) + L1d L#16 (64KB) + L1i L#16 (64KB) + Core L#16 + PU
</span><br>
<span class="quotelev1">&gt; L#16 (P#16)
</span><br>
<span class="quotelev1">&gt;      L2 L#17 (512KB) + L1d L#17 (64KB) + L1i L#17 (64KB) + Core L#17 + PU
</span><br>
<span class="quotelev1">&gt; L#17 (P#17)
</span><br>
<span class="quotelev1">&gt;      L2 L#18 (512KB) + L1d L#18 (64KB) + L1i L#18 (64KB) + Core L#18 + PU
</span><br>
<span class="quotelev1">&gt; L#18 (P#18)
</span><br>
<span class="quotelev1">&gt;      L2 L#19 (512KB) + L1d L#19 (64KB) + L1i L#19 (64KB) + Core L#19 + PU
</span><br>
<span class="quotelev1">&gt; L#19 (P#19)
</span><br>
<span class="quotelev1">&gt;    NUMANode L#5 (P#5 16GB) + L3 L#5 (5118KB)
</span><br>
<span class="quotelev1">&gt;      L2 L#20 (512KB) + L1d L#20 (64KB) + L1i L#20 (64KB) + Core L#20 + PU
</span><br>
<span class="quotelev1">&gt; L#20 (P#20)
</span><br>
<span class="quotelev1">&gt;      L2 L#21 (512KB) + L1d L#21 (64KB) + L1i L#21 (64KB) + Core L#21 + PU
</span><br>
<span class="quotelev1">&gt; L#21 (P#21)
</span><br>
<span class="quotelev1">&gt;      L2 L#22 (512KB) + L1d L#22 (64KB) + L1i L#22 (64KB) + Core L#22 + PU
</span><br>
<span class="quotelev1">&gt; L#22 (P#22)
</span><br>
<span class="quotelev1">&gt;      L2 L#23 (512KB) + L1d L#23 (64KB) + L1i L#23 (64KB) + Core L#23 + PU
</span><br>
<span class="quotelev1">&gt; L#23 (P#23)
</span><br>
<span class="quotelev1">&gt;  Socket L#3 (32GB)
</span><br>
<span class="quotelev1">&gt;    NUMANode L#6 (P#2 16GB) + L3 L#6 (5118KB)
</span><br>
<span class="quotelev1">&gt;      L2 L#24 (512KB) + L1d L#24 (64KB) + L1i L#24 (64KB) + Core L#24 + PU
</span><br>
<span class="quotelev1">&gt; L#24 (P#24)
</span><br>
<span class="quotelev1">&gt;      L2 L#25 (512KB) + L1d L#25 (64KB) + L1i L#25 (64KB) + Core L#25 + PU
</span><br>
<span class="quotelev1">&gt; L#25 (P#25)
</span><br>
<span class="quotelev1">&gt;      L2 L#26 (512KB) + L1d L#26 (64KB) + L1i L#26 (64KB) + Core L#26 + PU
</span><br>
<span class="quotelev1">&gt; L#26 (P#26)
</span><br>
<span class="quotelev1">&gt;      L2 L#27 (512KB) + L1d L#27 (64KB) + L1i L#27 (64KB) + Core L#27 + PU
</span><br>
<span class="quotelev1">&gt; L#27 (P#27)
</span><br>
<span class="quotelev1">&gt;    NUMANode L#7 (P#3 16GB) + L3 L#7 (5118KB)
</span><br>
<span class="quotelev1">&gt;      L2 L#28 (512KB) + L1d L#28 (64KB) + L1i L#28 (64KB) + Core L#28 + PU
</span><br>
<span class="quotelev1">&gt; L#28 (P#28)
</span><br>
<span class="quotelev1">&gt;      L2 L#29 (512KB) + L1d L#29 (64KB) + L1i L#29 (64KB) + Core L#29 + PU
</span><br>
<span class="quotelev1">&gt; L#29 (P#29)
</span><br>
<span class="quotelev1">&gt;      L2 L#30 (512KB) + L1d L#30 (64KB) + L1i L#30 (64KB) + Core L#30 + PU
</span><br>
<span class="quotelev1">&gt; L#30 (P#30)
</span><br>
<span class="quotelev1">&gt;      L2 L#31 (512KB) + L1d L#31 (64KB) + L1i L#31 (64KB) + Core L#31 + PU
</span><br>
<span class="quotelev1">&gt; L#31 (P#31)
</span><br>
<span class="quotelev1">&gt;  HostBridge L#0
</span><br>
<span class="quotelev1">&gt;    PCIBridge
</span><br>
<span class="quotelev1">&gt;      PCI 14e4:1639
</span><br>
<span class="quotelev1">&gt;        Net L#0 &quot;eth0&quot;
</span><br>
<span class="quotelev1">&gt;      PCI 14e4:1639
</span><br>
<span class="quotelev1">&gt;        Net L#1 &quot;eth1&quot;
</span><br>
<span class="quotelev1">&gt;    PCIBridge
</span><br>
<span class="quotelev1">&gt;      PCI 14e4:1639
</span><br>
<span class="quotelev1">&gt;        Net L#2 &quot;eth2&quot;
</span><br>
<span class="quotelev1">&gt;      PCI 14e4:1639
</span><br>
<span class="quotelev1">&gt;        Net L#3 &quot;eth3&quot;
</span><br>
<span class="quotelev1">&gt;    PCIBridge
</span><br>
<span class="quotelev1">&gt;      PCIBridge
</span><br>
<span class="quotelev1">&gt;        PCIBridge
</span><br>
<span class="quotelev1">&gt;          PCI 1000:0072
</span><br>
<span class="quotelev1">&gt;            Block L#4 &quot;sdb&quot;
</span><br>
<span class="quotelev1">&gt;            Block L#5 &quot;sda&quot;
</span><br>
<span class="quotelev1">&gt;    PCI 1002:4390
</span><br>
<span class="quotelev1">&gt;      Block L#6 &quot;sr0&quot;
</span><br>
<span class="quotelev1">&gt;    PCIBridge
</span><br>
<span class="quotelev1">&gt;      PCI 102b:0532
</span><br>
<span class="quotelev1">&gt;  HostBridge L#7
</span><br>
<span class="quotelev1">&gt;    PCIBridge
</span><br>
<span class="quotelev1">&gt;      PCI 15b3:6274
</span><br>
<span class="quotelev1">&gt;        Net L#7 &quot;ib0&quot;
</span><br>
<span class="quotelev1">&gt;        OpenFabrics L#8 &quot;mthca0&quot;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23243.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work	for our magny cours based 32 core node"</a>
<li><strong>Previous message:</strong> <a href="23241.php">tmishima_at_[hidden]: "[OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work for our magny cours based 32 core node"</a>
<li><strong>In reply to:</strong> <a href="23241.php">tmishima_at_[hidden]: "[OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work for our magny cours based 32 core node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23243.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work	for our magny cours based 32 core node"</a>
<li><strong>Reply:</strong> <a href="23243.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work	for our magny cours based 32 core node"</a>
<li><strong>Reply:</strong> <a href="23244.php">tmishima_at_[hidden]: "Re: [OMPI users] &quot;-bind-to numa&quot; of openmpi-1.7.4rc1 dosen't work	for our magny cours based 32 core node"</a>
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
