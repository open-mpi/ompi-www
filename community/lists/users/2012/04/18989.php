<?
$subject_val = "Re: [OMPI users] wrong core binding by openmpi-1.5.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 11 03:07:26 2012" -->
<!-- isoreceived="20120411070726" -->
<!-- sent="Wed, 11 Apr 2012 16:06:01 +0900" -->
<!-- isosent="20120411070601" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wrong core binding by openmpi-1.5.5" -->
<!-- id="OF3872A861.29DD419D-ON492579DD.00269A0D-492579DD.00272077_at_jcity.maeda.co.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="faab1405-07ca-402e-a51c-035b00b782db_at_email.android.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] wrong core binding by openmpi-1.5.5<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20wrong%20core%20binding%20by%20openmpi-1.5.5"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2012-04-11 03:06:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18990.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Previous message:</strong> <a href="18988.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>In reply to:</strong> <a href="18988.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18990.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Reply:</strong> <a href="18990.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Brice.
<br>
<p>I installed the latest hwloc-1.4.1.
<br>
Here is the output of lstopo -p.
<br>
<p>[root_at_node03 bin]# ./lstopo -p
<br>
Machine (126GB)
<br>
&nbsp;&nbsp;Socket P#0 (32GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode P#0 (16GB) + L3 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#0 + PU P#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#1 + PU P#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#2 + PU P#8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#3 + PU P#12
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode P#1 (16GB) + L3 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#0 + PU P#16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#1 + PU P#20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#2 + PU P#24
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#3 + PU P#28
<br>
&nbsp;&nbsp;Socket P#3 (32GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode P#6 (16GB) + L3 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#0 + PU P#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#1 + PU P#5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#2 + PU P#9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#3 + PU P#13
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode P#7 (16GB) + L3 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#0 + PU P#17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#1 + PU P#21
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#2 + PU P#25
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#3 + PU P#29
<br>
&nbsp;&nbsp;Socket P#2 (32GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode P#4 (16GB) + L3 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#0 + PU P#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#1 + PU P#6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#2 + PU P#10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#3 + PU P#14
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode P#5 (16GB) + L3 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#0 + PU P#18
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#1 + PU P#22
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#2 + PU P#26
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#3 + PU P#30
<br>
&nbsp;&nbsp;Socket P#1 (32GB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode P#2 (16GB) + L3 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#0 + PU P#3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#1 + PU P#7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#2 + PU P#11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#3 + PU P#15
<br>
&nbsp;&nbsp;&nbsp;&nbsp;NUMANode P#3 (16GB) + L3 (5118KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#0 + PU P#19
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#1 + PU P#23
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#2 + PU P#27
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;L2 (512KB) + L1 (64KB) + Core P#3 + PU P#31
<br>
&nbsp;&nbsp;HostBridge P#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 14e4:1639
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net &quot;eth0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 14e4:1639
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net &quot;eth1&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 14e4:1639
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net &quot;eth2&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 14e4:1639
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net &quot;eth3&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 1000:0072
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block &quot;sdb&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block &quot;sda&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCI 1002:4390
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block &quot;sr0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 102b:0532
<br>
&nbsp;&nbsp;HostBridge P#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 15b3:6274
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net &quot;ib0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OpenFabrics &quot;mthca0&quot;
<br>
<p>Tetsuya Mishima
<br>
<p><span class="quotelev1">&gt; Can you send the output of lstopo -p ? (you'll have to install hwloc)
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tmishima_at_[hidden] a &#233;crit&#160;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I updated openmpi from version 1.5.4 to 1.5.5.
</span><br>
<span class="quotelev1">&gt; Then, an execution speed of my application becomes quite slower than
</span><br>
<span class="quotelev1">&gt; before,
</span><br>
<span class="quotelev1">&gt; due to wrong core bindings. As far as I checked, it seems that
</span><br>
<span class="quotelev1">&gt; openmpi-1.5.4
</span><br>
<span class="quotelev1">&gt; gives correct core bindings for my magnycore based machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) my script is as follows:
</span><br>
<span class="quotelev1">&gt; export OMP_NUM_THREADS=4
</span><br>
<span class="quotelev1">&gt; mpirun -machinefile pbs_hosts \
</span><br>
<span class="quotelev1">&gt; -np 8 \
</span><br>
<span class="quotelev1">&gt; -x OMP_NUM_THREADS \
</span><br>
<span class="quotelev1">&gt; -bind-to-core \
</span><br>
<span class="quotelev1">&gt; -cpus-per-proc ${OMP_NUM_THREADS} \
</span><br>
<span class="quotelev1">&gt; -report-bindings \
</span><br>
<span class="quotelev1">&gt; ./Solver
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2)binding reports are as follows:
</span><br>
<span class="quotelev1">&gt; openmpi-1.5.4:
</span><br>
<span class="quotelev1">&gt; [node03.cluster:21706] [[55518,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt; [[55518,1],3] to cpus 22220000
</span><br>
<span class="quotelev1">&gt; [node03.cluster:21706] [[55518,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt; [[55518,1],4] to cpus 4444
</span><br>
<span class="quotelev1">&gt; [node03.cluster:21706] [[55518,0],0]
</span><br>
<span class="quotelev1">&gt; odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt; [[55518,1],5] to cpus 44440000
</span><br>
<span class="quotelev1">&gt; [node03.cluster:21706] [[55518,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt; [[55518,1],6] to cpus 8888
</span><br>
<span class="quotelev1">&gt; [node03.cluster:21706] [[55518,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt; [[55518,1],7] to cpus 88880000
</span><br>
<span class="quotelev1">&gt; [node03.cluster:21706] [[55518,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt; [[55518,1],0] to cpus 1111
</span><br>
<span class="quotelev1">&gt; [node03.cluster:21706] [[55518,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt; [[55518,1],1] to cpus 11110000
</span><br>
<span class="quotelev1">&gt; [node03.cluster:21706] [[55518,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt; [[55518,1],2] to cpus 2222
</span><br>
<span class="quotelev1">&gt; openmpi-1.5.5:
</span><br>
<span class="quotelev1">&gt; [node03.cluster:04706] [[40566,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt; [[40566,1],3] to cpus f000
</span><br>
<span class="quotelev1">&gt; [node03.cluster:04706] [[40566,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt; [[40566,1],4] to cpus 000f0000
</span><br>
<span class="quotelev1">&gt; [node03.cluster:04706] [[40566,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt; [[40566,1],5] to cpus 00f00000
</span><br>
<span class="quotelev1">&gt; [node03.cluster:04706] [[40566,0],0]
</span><br>
<span class="quotelev1">&gt; odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt; [[40566,1],6] to cpus 0f000000
</span><br>
<span class="quotelev1">&gt; [node03.cluster:04706] [[40566,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt; [[40566,1],7] to cpus f0000000
</span><br>
<span class="quotelev1">&gt; [node03.cluster:04706] [[40566,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt; [[40566,1],0] to cpus 000f
</span><br>
<span class="quotelev1">&gt; [node03.cluster:04706] [[40566,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt; [[40566,1],1] to cpus 00f0
</span><br>
<span class="quotelev1">&gt; [node03.cluster:04706] [[40566,0],0] odls:default:fork binding child
</span><br>
<span class="quotelev1">&gt; [[40566,1],2] to cpus 0f00
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3)node03 has 32 cores with 4 magnycores(8cores/cpu-type).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="18990.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Previous message:</strong> <a href="18988.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>In reply to:</strong> <a href="18988.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18990.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
<li><strong>Reply:</strong> <a href="18990.php">Brice Goglin: "Re: [OMPI users] wrong core binding by openmpi-1.5.5"</a>
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
