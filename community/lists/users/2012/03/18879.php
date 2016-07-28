<?
$subject_val = "[OMPI users] Help with multicore AMD machine performance";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 30 07:02:35 2012" -->
<!-- isoreceived="20120330110235" -->
<!-- sent="Fri, 30 Mar 2012 12:02:30 +0100" -->
<!-- isosent="20120330110230" -->
<!-- name="Ricardo Fonseca" -->
<!-- email="ricardo.fonseca_at_[hidden]" -->
<!-- subject="[OMPI users] Help with multicore AMD machine performance" -->
<!-- id="DBCE1A19-6AE1-4E64-B034-6C8B64D134DE_at_ist.utl.pt" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Help with multicore AMD machine performance<br>
<strong>From:</strong> Ricardo Fonseca (<em>ricardo.fonseca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-30 07:02:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18880.php">Ralph Castain: "Re: [OMPI users] Help with multicore AMD machine performance"</a>
<li><strong>Previous message:</strong> <a href="18878.php">Steffen Christgau: "[OMPI users] Communication/Computation Overlap with Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18880.php">Ralph Castain: "Re: [OMPI users] Help with multicore AMD machine performance"</a>
<li><strong>Reply:</strong> <a href="18880.php">Ralph Castain: "Re: [OMPI users] Help with multicore AMD machine performance"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/18905.php">Nico Mittenzwey: "Re: [OMPI users] Help with multicore AMD machine performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi guys
<br>
<p>I'm benchmarking our (well tested) parallel code on and AMD based system, featuring 2x AMD Opteron(TM) Processor 6276, with 16 cores each for a total of 32 cores. The system is running Scientific Linux 6.1 and OpenMPI 1.4.5.
<br>
<p>When I run a single core job the performance is as expected. However, when I run with 32 processes the performance drops to about 60% (when compared with other systems running the exact same problem, so this is not a code scaling issue). I think this may have to do with core binding / NUMA, but I haven't been able to get any improvement out of the bind-* mpirun options.
<br>
<p>Any suggestions?
<br>
<p>Thanks in advance,
<br>
Ricardo
<br>
<p>P.S: Here's the output of lscpu
<br>
<p>Architecture:          x86_64
<br>
CPU op-mode(s):        32-bit, 64-bit
<br>
Byte Order:            Little Endian
<br>
CPU(s):                32
<br>
On-line CPU(s) list:   0-31
<br>
Thread(s) per core:    2
<br>
Core(s) per socket:    8
<br>
CPU socket(s):         2
<br>
NUMA node(s):          4
<br>
Vendor ID:             AuthenticAMD
<br>
CPU family:            21
<br>
Model:                 1
<br>
Stepping:              2
<br>
CPU MHz:               2300.045
<br>
BogoMIPS:              4599.38
<br>
Virtualization:        AMD-V
<br>
L1d cache:             16K
<br>
L1i cache:             64K
<br>
L2 cache:              2048K
<br>
L3 cache:              6144K
<br>
NUMA node0 CPU(s):     0,2,4,6,8,10,12,14
<br>
NUMA node1 CPU(s):     16,18,20,22,24,26,28,30
<br>
NUMA node2 CPU(s):     1,3,5,7,9,11,13,15
<br>
NUMA node3 CPU(s):     17,19,21,23,25,27,29,31
<br>
<p><pre>
---
Ricardo Fonseca
 
Associate Professor
GoLP - Grupo de Lasers e Plasmas
Instituto de Plasmas e Fus&#227;o Nuclear
Instituto Superior T&#233;cnico
Av. Rovisco Pais
1049-001 Lisboa
Portugal
 
tel: +351 21 8419202
fax: +351 21 8464455
web: <a href="http://golp.ist.utl.pt/">http://golp.ist.utl.pt/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18880.php">Ralph Castain: "Re: [OMPI users] Help with multicore AMD machine performance"</a>
<li><strong>Previous message:</strong> <a href="18878.php">Steffen Christgau: "[OMPI users] Communication/Computation Overlap with Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18880.php">Ralph Castain: "Re: [OMPI users] Help with multicore AMD machine performance"</a>
<li><strong>Reply:</strong> <a href="18880.php">Ralph Castain: "Re: [OMPI users] Help with multicore AMD machine performance"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/18905.php">Nico Mittenzwey: "Re: [OMPI users] Help with multicore AMD machine performance"</a>
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
