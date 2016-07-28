<?
$subject_val = "Re: [OMPI users] LAMA of openmpi-1.7.3 is unstable";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  7 18:57:36 2013" -->
<!-- isoreceived="20131107235736" -->
<!-- sent="Thu, 7 Nov 2013 15:57:25 -0800" -->
<!-- isosent="20131107235725" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LAMA of openmpi-1.7.3 is unstable" -->
<!-- id="E1D1FB97-D916-4856-8E44-7CF48B1BFE11_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF276ADA34.89EA30B3-ON49257C1C.007E9103-49257C1C.00824E1E_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] LAMA of openmpi-1.7.3 is unstable<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-07 18:57:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22927.php">tmishima_at_[hidden]: "Re: [OMPI users] LAMA of openmpi-1.7.3 is unstable"</a>
<li><strong>Previous message:</strong> <a href="22925.php">tmishima_at_[hidden]: "[OMPI users] LAMA of openmpi-1.7.3 is unstable"</a>
<li><strong>In reply to:</strong> <a href="22925.php">tmishima_at_[hidden]: "[OMPI users] LAMA of openmpi-1.7.3 is unstable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22927.php">tmishima_at_[hidden]: "Re: [OMPI users] LAMA of openmpi-1.7.3 is unstable"</a>
<li><strong>Reply:</strong> <a href="22927.php">tmishima_at_[hidden]: "Re: [OMPI users] LAMA of openmpi-1.7.3 is unstable"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What happens if you drop the LAMA request and instead run
<br>
<p>mpirun -report-bindings -bind-to core Myprog
<br>
<p>This would do the same thing - does it work? If so, then we know it is a problem in the LAMA mapper. If not, then it is likely a problem in a different section of the code.
<br>
<p><p><p>On Nov 7, 2013, at 3:43 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear openmpi developers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried the new function LAMA of openmpi-1.7.3 and
</span><br>
<span class="quotelev1">&gt; unfortunately it is not stable under my environment, which
</span><br>
<span class="quotelev1">&gt; is built with torque.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1) I used 4 scripts as shown below to clarify the problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (COMMON PART)
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=node03:ppn=8 / nodes=node08:ppn=8
</span><br>
<span class="quotelev1">&gt; export OMP_NUM_THREADS=1
</span><br>
<span class="quotelev1">&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">&gt; cp $PBS_NODEFILE pbs_hosts
</span><br>
<span class="quotelev1">&gt; NPROCS=`wc -l &lt; pbs_hosts`
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (SCRIPT1)
</span><br>
<span class="quotelev1">&gt; mpirun -report-bindings -mca rmaps lama -mca rmaps_lama_bind 1c Myprog
</span><br>
<span class="quotelev1">&gt; (SCRIPT2)
</span><br>
<span class="quotelev1">&gt; mpirun -oversubscribe -report-bindings -mca rmaps lama \
</span><br>
<span class="quotelev1">&gt;       -mca rmaps_lama_bind 1c Myprog
</span><br>
<span class="quotelev1">&gt; (SCRITP3)
</span><br>
<span class="quotelev1">&gt; mpirun -machinefile pbs_hosts -np ${NPROCS} -oversubscribe \
</span><br>
<span class="quotelev1">&gt;       -report-bindings -mca rmaps lama -mca rmaps_lama_bind 1c Myprog
</span><br>
<span class="quotelev1">&gt; (SCRIPT4)
</span><br>
<span class="quotelev1">&gt; mpirun -machinefile pbs_hosts -np ${NPROCS} -oversubscribe \
</span><br>
<span class="quotelev1">&gt;       -report-bindings -mca rmaps lama -mca rmaps_lama_bind 1c \
</span><br>
<span class="quotelev1">&gt;       -mca rmaps_lama_map Nsbnch \
</span><br>
<span class="quotelev1">&gt;       -mca ess ^tm -mca plm ^tm -mca ras ^tm Myprog
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (2) The results are as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;             NODE03(32cores) NODE08(8cores)
</span><br>
<span class="quotelev1">&gt; SCRIPT1      *ERROR1         *ERROR1
</span><br>
<span class="quotelev1">&gt; SCRIPT2      OK              OK
</span><br>
<span class="quotelev1">&gt; SCRIPT3      **ABORT         OK
</span><br>
<span class="quotelev1">&gt; SCRIPT4      **ABORT         **ABORT
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (*)ERROR1 means:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; RMaps LAMA detected oversubscription after mapping 1 of 8 processes.
</span><br>
<span class="quotelev1">&gt; Since you have asked not to oversubscribe the resources the job will not
</span><br>
<span class="quotelev1">&gt; be launched. If you would instead like to oversubscribe the resources
</span><br>
<span class="quotelev1">&gt; try using the --oversubscribe option to mpirun.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [node08.cluster:28849] [[50428,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; rmaps_lama_module.c at line 310
</span><br>
<span class="quotelev1">&gt; [node08.cluster:28849] [[50428,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt; base/rmaps_base_map_job.c at line 166
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (**)ABORT means &quot;stuck and no answer&quot; until forced termination.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (3) openmpi-1.7.3 configuration (with PGI compiler)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure \
</span><br>
<span class="quotelev1">&gt; --with-tm \
</span><br>
<span class="quotelev1">&gt; --with-verbs \
</span><br>
<span class="quotelev1">&gt; --disable-ipv6 \
</span><br>
<span class="quotelev1">&gt; CC=pgcc CFLAGS=&quot;-fast -tp k8-64e&quot; \
</span><br>
<span class="quotelev1">&gt; CXX=pgCC CXXFLAGS=&quot;-fast -tp k8-64e&quot; \
</span><br>
<span class="quotelev1">&gt; F77=pgfortran FFLAGS=&quot;-fast -tp k8-64e&quot; \
</span><br>
<span class="quotelev1">&gt; FC=pgfortran FCFLAGS=&quot;-fast -tp k8-64e&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (4) Cluster information:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 32 cores AMD based node(node03):
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
<span class="quotelev1">&gt; 8 cores AMD based node(node08):
</span><br>
<span class="quotelev1">&gt; Machine (32GB)
</span><br>
<span class="quotelev1">&gt;  NUMANode L#0 (P#0 16GB) + Socket L#0 + L3 L#0 (6144KB)
</span><br>
<span class="quotelev1">&gt;    L2 L#0 (512KB) + L1d L#0 (64KB) + L1i L#0 (64KB) + Core L#0 + PU L#0
</span><br>
<span class="quotelev1">&gt; (P#0)
</span><br>
<span class="quotelev1">&gt;    L2 L#1 (512KB) + L1d L#1 (64KB) + L1i L#1 (64KB) + Core L#1 + PU L#1
</span><br>
<span class="quotelev1">&gt; (P#1)
</span><br>
<span class="quotelev1">&gt;    L2 L#2 (512KB) + L1d L#2 (64KB) + L1i L#2 (64KB) + Core L#2 + PU L#2
</span><br>
<span class="quotelev1">&gt; (P#2)
</span><br>
<span class="quotelev1">&gt;    L2 L#3 (512KB) + L1d L#3 (64KB) + L1i L#3 (64KB) + Core L#3 + PU L#3
</span><br>
<span class="quotelev1">&gt; (P#3)
</span><br>
<span class="quotelev1">&gt;  NUMANode L#1 (P#1 16GB) + Socket L#1 + L3 L#1 (6144KB)
</span><br>
<span class="quotelev1">&gt;    L2 L#4 (512KB) + L1d L#4 (64KB) + L1i L#4 (64KB) + Core L#4 + PU L#4
</span><br>
<span class="quotelev1">&gt; (P#4)
</span><br>
<span class="quotelev1">&gt;    L2 L#5 (512KB) + L1d L#5 (64KB) + L1i L#5 (64KB) + Core L#5 + PU L#5
</span><br>
<span class="quotelev1">&gt; (P#5)
</span><br>
<span class="quotelev1">&gt;    L2 L#6 (512KB) + L1d L#6 (64KB) + L1i L#6 (64KB) + Core L#6 + PU L#6
</span><br>
<span class="quotelev1">&gt; (P#6)
</span><br>
<span class="quotelev1">&gt;    L2 L#7 (512KB) + L1d L#7 (64KB) + L1i L#7 (64KB) + Core L#7 + PU L#7
</span><br>
<span class="quotelev1">&gt; (P#7)
</span><br>
<span class="quotelev1">&gt;  HostBridge L#0
</span><br>
<span class="quotelev1">&gt;    PCI 10de:036e
</span><br>
<span class="quotelev1">&gt;    PCI 10de:037f
</span><br>
<span class="quotelev1">&gt;      Block L#0 &quot;sda&quot;
</span><br>
<span class="quotelev1">&gt;    PCI 10de:037f
</span><br>
<span class="quotelev1">&gt;    PCI 10de:037f
</span><br>
<span class="quotelev1">&gt;    PCIBridge
</span><br>
<span class="quotelev1">&gt;      PCI 18ca:0020
</span><br>
<span class="quotelev1">&gt;    PCIBridge
</span><br>
<span class="quotelev1">&gt;      PCI 15b3:6274
</span><br>
<span class="quotelev1">&gt;        Net L#1 &quot;ib0&quot;
</span><br>
<span class="quotelev1">&gt;        OpenFabrics L#2 &quot;mthca0&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
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
<li><strong>Next message:</strong> <a href="22927.php">tmishima_at_[hidden]: "Re: [OMPI users] LAMA of openmpi-1.7.3 is unstable"</a>
<li><strong>Previous message:</strong> <a href="22925.php">tmishima_at_[hidden]: "[OMPI users] LAMA of openmpi-1.7.3 is unstable"</a>
<li><strong>In reply to:</strong> <a href="22925.php">tmishima_at_[hidden]: "[OMPI users] LAMA of openmpi-1.7.3 is unstable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22927.php">tmishima_at_[hidden]: "Re: [OMPI users] LAMA of openmpi-1.7.3 is unstable"</a>
<li><strong>Reply:</strong> <a href="22927.php">tmishima_at_[hidden]: "Re: [OMPI users] LAMA of openmpi-1.7.3 is unstable"</a>
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
