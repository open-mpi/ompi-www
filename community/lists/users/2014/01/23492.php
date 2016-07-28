<?
$subject_val = "Re: [OMPI users] Running on two nodes slower than running on one node";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 29 06:40:21 2014" -->
<!-- isoreceived="20140129114021" -->
<!-- sent="Wed, 29 Jan 2014 12:40:12 +0100" -->
<!-- isosent="20140129114012" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running on two nodes slower than running on one node" -->
<!-- id="A5099D79-63DE-4E75-BA83-E08F089EFF04_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAJTHAucCtL5YZKfMzfpj+AYm1TZ003_h+BMpAYioCA+zW4rcfg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running on two nodes slower than running on one node<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-29 06:40:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23493.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Previous message:</strong> <a href="23491.php">Victor: "[OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>In reply to:</strong> <a href="23491.php">Victor: "[OMPI users] Running on two nodes slower than running on one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23493.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Reply:</strong> <a href="23493.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 29.01.2014 um 03:00 schrieb Victor:
<br>
<p><span class="quotelev1">&gt; I am running a CFD simulation benchmark cavity3d available within <a href="http://www.palabos.org/images/palabos_releases/palabos-v1.4r1.tgz">http://www.palabos.org/images/palabos_releases/palabos-v1.4r1.tgz</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is a parallel friendly Lattice Botlzmann solver library.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Palabos provides benchmark results for the cavity3d on several different platforms and variables here: <a href="http://wiki.palabos.org/plb_wiki:benchmark:cavity_n400">http://wiki.palabos.org/plb_wiki:benchmark:cavity_n400</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem that I have is that the benchmark performance on my cluster does not scale even close to a linear scale.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My cluster configuration:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Node1: Dual Xeon 5560 48 Gb RAM
</span><br>
<span class="quotelev1">&gt; Node2: i5-2400 24 Gb RAM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gigabit ethernet connection on eth0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.6.5 on Ubuntu 12.04.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hostfile:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Node1 -slots=4 -max-slots=4
</span><br>
<span class="quotelev1">&gt; Node2 -slots=4 -max-slots=4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI command: mpirun --mca btl_tcp_if_include eth0 --hostfile /home/mpiuser/.mpi_hostfile -np 8 ./cavity3d 400
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cavity3d 400
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I run mpirun -np 4 on Node1 I get 35.7615 Mega site updates per second
</span><br>
<span class="quotelev1">&gt; When I run mpirun -np 4 on Node2 I get 30.7972 Mega site updates per second
</span><br>
<span class="quotelev1">&gt; When I run mpirun --mca btl_tcp_if_include eth0 --hostfile /home/mpiuser/.mpi_hostfile -np 8 ./cavity3d 400 I get  47.3538 Mega site updates per second
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand that there are latencies with GbE and that there is MPI overhead, but this performance scaling still seems very poor. Are my expectations of scaling naive, or is there actually something wrong and fixable that will improve the scaling? Optimistically I would like each node to add to the cluster performance, not slow it down. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Things get even worse if I run asymmetric number of mpi jobs in each node. For instance running -np 12 on Node1
</span><br>
<p>Isn't this overloading the machine with only 8 real cores in total?
<br>
<p><p><span class="quotelev1">&gt; is significantly faster than running -np 16 across Node1 and Node2, thus adding Node2 actually slows down the performance.
</span><br>
<p>The i5-2400 has only 4 cores and no threads.
<br>
<p>It depends on the algorithm how much data has to be exchanged between the processes, and this can indeed be worse when used across a network.
<br>
<p>Also: is the algorithm scaling linear when used on node1 only with 8 cores? When it's &quot;35.7615 &quot; with 4 cores, what result do you get with 8 cores on this machine.
<br>
<p>-- Reuti<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23493.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Previous message:</strong> <a href="23491.php">Victor: "[OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>In reply to:</strong> <a href="23491.php">Victor: "[OMPI users] Running on two nodes slower than running on one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23493.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
<li><strong>Reply:</strong> <a href="23493.php">Victor: "Re: [OMPI users] Running on two nodes slower than running on one node"</a>
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
