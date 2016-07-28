<?
$subject_val = "[OMPI users] LAMA of openmpi-1.7.3 is unstable";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  7 18:43:17 2013" -->
<!-- isoreceived="20131107234317" -->
<!-- sent="Fri, 8 Nov 2013 08:43:53 +0900" -->
<!-- isosent="20131107234353" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI users] LAMA of openmpi-1.7.3 is unstable" -->
<!-- id="OF276ADA34.89EA30B3-ON49257C1C.007E9103-49257C1C.00824E1E_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF1C2C11A2.B6C81493-ON49257C15.007EA3ED-49257C15.007EE088_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> [OMPI users] LAMA of openmpi-1.7.3 is unstable<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20LAMA%20of%20openmpi-1.7.3%20is%20unstable"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-11-07 18:43:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22926.php">Ralph Castain: "Re: [OMPI users] LAMA of openmpi-1.7.3 is unstable"</a>
<li><strong>Previous message:</strong> <a href="22924.php">Andrus, Brian Contractor: "Re: [OMPI users] proper use of MPI_Abort"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/10/22892.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.3 still not accept cpus-per-proc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22926.php">Ralph Castain: "Re: [OMPI users] LAMA of openmpi-1.7.3 is unstable"</a>
<li><strong>Reply:</strong> <a href="22926.php">Ralph Castain: "Re: [OMPI users] LAMA of openmpi-1.7.3 is unstable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear openmpi developers,
<br>
<p>I tried the new function LAMA of openmpi-1.7.3 and
<br>
unfortunately it is not stable under my environment, which
<br>
is built with torque.
<br>
<p>(1) I used 4 scripts as shown below to clarify the problem:
<br>
<p>(COMMON PART)
<br>
#!/bin/sh
<br>
#PBS -l nodes=node03:ppn=8 / nodes=node08:ppn=8
<br>
export OMP_NUM_THREADS=1
<br>
cd $PBS_O_WORKDIR
<br>
cp $PBS_NODEFILE pbs_hosts
<br>
NPROCS=`wc -l &lt; pbs_hosts`
<br>
<p>(SCRIPT1)
<br>
mpirun -report-bindings -mca rmaps lama -mca rmaps_lama_bind 1c Myprog
<br>
(SCRIPT2)
<br>
mpirun -oversubscribe -report-bindings -mca rmaps lama \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca rmaps_lama_bind 1c Myprog
<br>
(SCRITP3)
<br>
mpirun -machinefile pbs_hosts -np ${NPROCS} -oversubscribe \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-report-bindings -mca rmaps lama -mca rmaps_lama_bind 1c Myprog
<br>
(SCRIPT4)
<br>
mpirun -machinefile pbs_hosts -np ${NPROCS} -oversubscribe \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-report-bindings -mca rmaps lama -mca rmaps_lama_bind 1c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca rmaps_lama_map Nsbnch \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca ess ^tm -mca plm ^tm -mca ras ^tm Myprog
<br>
<p>(2) The results are as follows:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NODE03(32cores) NODE08(8cores)
<br>
SCRIPT1      *ERROR1         *ERROR1
<br>
SCRIPT2      OK              OK
<br>
SCRIPT3      **ABORT         OK
<br>
SCRIPT4      **ABORT         **ABORT
<br>
<p>(*)ERROR1 means:
<br>
--------------------------------------------------------------------------
<br>
RMaps LAMA detected oversubscription after mapping 1 of 8 processes.
<br>
Since you have asked not to oversubscribe the resources the job will not
<br>
be launched. If you would instead like to oversubscribe the resources
<br>
try using the --oversubscribe option to mpirun.
<br>
--------------------------------------------------------------------------
<br>
[node08.cluster:28849] [[50428,0],0] ORTE_ERROR_LOG: Error in file
<br>
rmaps_lama_module.c at line 310
<br>
[node08.cluster:28849] [[50428,0],0] ORTE_ERROR_LOG: Error in file
<br>
base/rmaps_base_map_job.c at line 166
<br>
<p>(**)ABORT means &quot;stuck and no answer&quot; until forced termination.
<br>
<p><p>(3) openmpi-1.7.3 configuration (with PGI compiler)
<br>
<p>./configure \
<br>
--with-tm \
<br>
--with-verbs \
<br>
--disable-ipv6 \
<br>
CC=pgcc CFLAGS=&quot;-fast -tp k8-64e&quot; \
<br>
CXX=pgCC CXXFLAGS=&quot;-fast -tp k8-64e&quot; \
<br>
F77=pgfortran FFLAGS=&quot;-fast -tp k8-64e&quot; \
<br>
FC=pgfortran FCFLAGS=&quot;-fast -tp k8-64e&quot;
<br>
<p><p>(4) Cluster information:
<br>
<p>32 cores AMD based node(node03):
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
<p>8 cores AMD based node(node08):
<br>
Machine (32GB)
<br>
&nbsp;&nbsp;NUMANode L#0 (P#0 16GB) + Socket L#0 + L3 L#0 (6144KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#0 (512KB) + L1d L#0 (64KB) + L1i L#0 (64KB) + Core L#0 + PU L#0
<br>
(P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#1 (512KB) + L1d L#1 (64KB) + L1i L#1 (64KB) + Core L#1 + PU L#1
<br>
(P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#2 (512KB) + L1d L#2 (64KB) + L1i L#2 (64KB) + Core L#2 + PU L#2
<br>
(P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#3 (512KB) + L1d L#3 (64KB) + L1i L#3 (64KB) + Core L#3 + PU L#3
<br>
(P#3)
<br>
&nbsp;&nbsp;NUMANode L#1 (P#1 16GB) + Socket L#1 + L3 L#1 (6144KB)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#4 (512KB) + L1d L#4 (64KB) + L1i L#4 (64KB) + Core L#4 + PU L#4
<br>
(P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#5 (512KB) + L1d L#5 (64KB) + L1i L#5 (64KB) + Core L#5 + PU L#5
<br>
(P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#6 (512KB) + L1d L#6 (64KB) + L1i L#6 (64KB) + Core L#6 + PU L#6
<br>
(P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L2 L#7 (512KB) + L1d L#7 (64KB) + L1i L#7 (64KB) + Core L#7 + PU L#7
<br>
(P#7)
<br>
&nbsp;&nbsp;HostBridge L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCI 10de:036e
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCI 10de:037f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Block L#0 &quot;sda&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCI 10de:037f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCI 10de:037f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 18ca:0020
<br>
&nbsp;&nbsp;&nbsp;&nbsp;PCIBridge
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PCI 15b3:6274
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Net L#1 &quot;ib0&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OpenFabrics L#2 &quot;mthca0&quot;
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22926.php">Ralph Castain: "Re: [OMPI users] LAMA of openmpi-1.7.3 is unstable"</a>
<li><strong>Previous message:</strong> <a href="22924.php">Andrus, Brian Contractor: "Re: [OMPI users] proper use of MPI_Abort"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/10/22892.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.3 still not accept cpus-per-proc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22926.php">Ralph Castain: "Re: [OMPI users] LAMA of openmpi-1.7.3 is unstable"</a>
<li><strong>Reply:</strong> <a href="22926.php">Ralph Castain: "Re: [OMPI users] LAMA of openmpi-1.7.3 is unstable"</a>
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
