<?
$subject_val = "Re: [OMPI users] LAMA of openmpi-1.7.3 is unstable";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  7 20:01:11 2013" -->
<!-- isoreceived="20131108010111" -->
<!-- sent="Thu, 7 Nov 2013 17:00:59 -0800" -->
<!-- isosent="20131108010059" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] LAMA of openmpi-1.7.3 is unstable" -->
<!-- id="EE99C511-AA6C-4B59-96D4-5EB742BC2318_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFBBAA83BF.D933B4AB-ON49257C1D.0002AD17-49257C1D.0003599D_at_jcity.maeda.co.jp" -->
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
<strong>Date:</strong> 2013-11-07 20:00:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22931.php">CUDENNEC Loic: "[OMPI users] [CfP] ICCS/Alchemy 2014 - Architecture, Languages, Compilation and Hardware support for Emerging ManYcore systems"</a>
<li><strong>Previous message:</strong> <a href="22929.php">tmishima_at_[hidden]: "Re: [OMPI users] LAMA of openmpi-1.7.3 is unstable"</a>
<li><strong>In reply to:</strong> <a href="22929.php">tmishima_at_[hidden]: "Re: [OMPI users] LAMA of openmpi-1.7.3 is unstable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22961.php">tmishima_at_[hidden]: "[OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I suspect something else is going on there - I can't imagine how the LAMA mapper could be interacting with the Torque launcher. The check for adequate resources (per the error message) is done long before we get to the launcher.
<br>
<p>I'll have to let the LAMA supporters chase it down.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>On Nov 7, 2013, at 4:37 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, Ralph.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is an additional information.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just execute directly on the node without Torque:
</span><br>
<span class="quotelev1">&gt; mpirun -np 8 -report-bindings -mca rmaps lama -mca rmaps_lama_bind 1c
</span><br>
<span class="quotelev1">&gt; Myprog
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then it also works, which means the combination of LAMA and Torque would
</span><br>
<span class="quotelev1">&gt; case
</span><br>
<span class="quotelev1">&gt; the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Okay, so the problem is a bug in LAMA itself. I'll file a ticket and let
</span><br>
<span class="quotelev1">&gt; the LAMA folks look into it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 7, 2013, at 4:18 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I quickly tried 2 runs:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -report-bindings -bind-to core Myprog
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -machinefile pbs_hosts -np ${NPROCS} -report-bindings -bind-to
</span><br>
<span class="quotelev1">&gt; core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Myprog
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It works fine in both cases on node03 and node08.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What happens if you drop the LAMA request and instead run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -report-bindings -bind-to core Myprog
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This would do the same thing - does it work? If so, then we know it is
</span><br>
<span class="quotelev1">&gt; a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem in the LAMA mapper. If not, then it is likely a problem in a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different section of the code.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 7, 2013, at 3:43 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dear openmpi developers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I tried the new function LAMA of openmpi-1.7.3 and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; unfortunately it is not stable under my environment, which
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; is built with torque.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (1) I used 4 scripts as shown below to clarify the problem:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (COMMON PART)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #PBS -l nodes=node03:ppn=8 / nodes=node08:ppn=8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; export OMP_NUM_THREADS=1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cp $PBS_NODEFILE pbs_hosts
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; NPROCS=`wc -l &lt; pbs_hosts`
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (SCRIPT1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -report-bindings -mca rmaps lama -mca rmaps_lama_bind 1c
</span><br>
<span class="quotelev1">&gt; Myprog
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (SCRIPT2)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -oversubscribe -report-bindings -mca rmaps lama \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     -mca rmaps_lama_bind 1c Myprog
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (SCRITP3)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -machinefile pbs_hosts -np ${NPROCS} -oversubscribe \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     -report-bindings -mca rmaps lama -mca rmaps_lama_bind 1c Myprog
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (SCRIPT4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -machinefile pbs_hosts -np ${NPROCS} -oversubscribe \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     -report-bindings -mca rmaps lama -mca rmaps_lama_bind 1c \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     -mca rmaps_lama_map Nsbnch \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     -mca ess ^tm -mca plm ^tm -mca ras ^tm Myprog
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (2) The results are as follows:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           NODE03(32cores) NODE08(8cores)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; SCRIPT1      *ERROR1         *ERROR1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; SCRIPT2      OK              OK
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; SCRIPT3      **ABORT         OK
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; SCRIPT4      **ABORT         **ABORT
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (*)ERROR1 means:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; RMaps LAMA detected oversubscription after mapping 1 of 8 processes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Since you have asked not to oversubscribe the resources the job will
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; be launched. If you would instead like to oversubscribe the resources
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; try using the --oversubscribe option to mpirun.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [node08.cluster:28849] [[50428,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rmaps_lama_module.c at line 310
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [node08.cluster:28849] [[50428,0],0] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; base/rmaps_base_map_job.c at line 166
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (**)ABORT means &quot;stuck and no answer&quot; until forced termination.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (3) openmpi-1.7.3 configuration (with PGI compiler)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./configure \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --with-tm \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --with-verbs \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --disable-ipv6 \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CC=pgcc CFLAGS=&quot;-fast -tp k8-64e&quot; \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CXX=pgCC CXXFLAGS=&quot;-fast -tp k8-64e&quot; \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; F77=pgfortran FFLAGS=&quot;-fast -tp k8-64e&quot; \
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; FC=pgfortran FCFLAGS=&quot;-fast -tp k8-64e&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (4) Cluster information:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 32 cores AMD based node(node03):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Machine (126GB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Socket L#0 (32GB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  NUMANode L#0 (P#0 16GB) + L3 L#0 (5118KB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#0 (512KB) + L1d L#0 (64KB) + L1i L#0 (64KB) + Core L#0 + PU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (P#0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#1 (512KB) + L1d L#1 (64KB) + L1i L#1 (64KB) + Core L#1 + PU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (P#1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#2 (512KB) + L1d L#2 (64KB) + L1i L#2 (64KB) + Core L#2 + PU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (P#2)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#3 (512KB) + L1d L#3 (64KB) + L1i L#3 (64KB) + Core L#3 + PU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (P#3)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  NUMANode L#1 (P#1 16GB) + L3 L#1 (5118KB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#4 (512KB) + L1d L#4 (64KB) + L1i L#4 (64KB) + Core L#4 + PU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (P#4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#5 (512KB) + L1d L#5 (64KB) + L1i L#5 (64KB) + Core L#5 + PU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (P#5)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#6 (512KB) + L1d L#6 (64KB) + L1i L#6 (64KB) + Core L#6 + PU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (P#6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#7 (512KB) + L1d L#7 (64KB) + L1i L#7 (64KB) + Core L#7 + PU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (P#7)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Socket L#1 (32GB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  NUMANode L#2 (P#6 16GB) + L3 L#2 (5118KB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#8 (512KB) + L1d L#8 (64KB) + L1i L#8 (64KB) + Core L#8 + PU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (P#8)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#9 (512KB) + L1d L#9 (64KB) + L1i L#9 (64KB) + Core L#9 + PU
</span><br>
<span class="quotelev3">&gt;&gt;&gt; L#9
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (P#9)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#10 (512KB) + L1d L#10 (64KB) + L1i L#10 (64KB) + Core L#10 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; L#10 (P#10)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#11 (512KB) + L1d L#11 (64KB) + L1i L#11 (64KB) + Core L#11 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; L#11 (P#11)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  NUMANode L#3 (P#7 16GB) + L3 L#3 (5118KB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#12 (512KB) + L1d L#12 (64KB) + L1i L#12 (64KB) + Core L#12 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; L#12 (P#12)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#13 (512KB) + L1d L#13 (64KB) + L1i L#13 (64KB) + Core L#13 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; L#13 (P#13)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#14 (512KB) + L1d L#14 (64KB) + L1i L#14 (64KB) + Core L#14 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; L#14 (P#14)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#15 (512KB) + L1d L#15 (64KB) + L1i L#15 (64KB) + Core L#15 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; L#15 (P#15)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Socket L#2 (32GB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  NUMANode L#4 (P#4 16GB) + L3 L#4 (5118KB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#16 (512KB) + L1d L#16 (64KB) + L1i L#16 (64KB) + Core L#16 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; L#16 (P#16)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#17 (512KB) + L1d L#17 (64KB) + L1i L#17 (64KB) + Core L#17 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; L#17 (P#17)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#18 (512KB) + L1d L#18 (64KB) + L1i L#18 (64KB) + Core L#18 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; L#18 (P#18)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#19 (512KB) + L1d L#19 (64KB) + L1i L#19 (64KB) + Core L#19 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; L#19 (P#19)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  NUMANode L#5 (P#5 16GB) + L3 L#5 (5118KB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#20 (512KB) + L1d L#20 (64KB) + L1i L#20 (64KB) + Core L#20 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; L#20 (P#20)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#21 (512KB) + L1d L#21 (64KB) + L1i L#21 (64KB) + Core L#21 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; L#21 (P#21)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#22 (512KB) + L1d L#22 (64KB) + L1i L#22 (64KB) + Core L#22 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; L#22 (P#22)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#23 (512KB) + L1d L#23 (64KB) + L1i L#23 (64KB) + Core L#23 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; L#23 (P#23)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Socket L#3 (32GB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  NUMANode L#6 (P#2 16GB) + L3 L#6 (5118KB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#24 (512KB) + L1d L#24 (64KB) + L1i L#24 (64KB) + Core L#24 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; L#24 (P#24)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#25 (512KB) + L1d L#25 (64KB) + L1i L#25 (64KB) + Core L#25 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; L#25 (P#25)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#26 (512KB) + L1d L#26 (64KB) + L1i L#26 (64KB) + Core L#26 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; L#26 (P#26)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#27 (512KB) + L1d L#27 (64KB) + L1i L#27 (64KB) + Core L#27 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; L#27 (P#27)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  NUMANode L#7 (P#3 16GB) + L3 L#7 (5118KB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#28 (512KB) + L1d L#28 (64KB) + L1i L#28 (64KB) + Core L#28 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; L#28 (P#28)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#29 (512KB) + L1d L#29 (64KB) + L1i L#29 (64KB) + Core L#29 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; L#29 (P#29)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#30 (512KB) + L1d L#30 (64KB) + L1i L#30 (64KB) + Core L#30 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; L#30 (P#30)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    L2 L#31 (512KB) + L1d L#31 (64KB) + L1i L#31 (64KB) + Core L#31 +
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PU
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; L#31 (P#31)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; HostBridge L#0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  PCIBridge
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    PCI 14e4:1639
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Net L#0 &quot;eth0&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    PCI 14e4:1639
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Net L#1 &quot;eth1&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  PCIBridge
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    PCI 14e4:1639
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Net L#2 &quot;eth2&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    PCI 14e4:1639
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Net L#3 &quot;eth3&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  PCIBridge
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    PCIBridge
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      PCIBridge
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        PCI 1000:0072
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          Block L#4 &quot;sdb&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;          Block L#5 &quot;sda&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  PCI 1002:4390
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Block L#6 &quot;sr0&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  PCIBridge
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    PCI 102b:0532
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; HostBridge L#7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  PCIBridge
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    PCI 15b3:6274
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Net L#7 &quot;ib0&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      OpenFabrics L#8 &quot;mthca0&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 8 cores AMD based node(node08):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Machine (32GB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; NUMANode L#0 (P#0 16GB) + Socket L#0 + L3 L#0 (6144KB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  L2 L#0 (512KB) + L1d L#0 (64KB) + L1i L#0 (64KB) + Core L#0 + PU
</span><br>
<span class="quotelev1">&gt; L#0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (P#0)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  L2 L#1 (512KB) + L1d L#1 (64KB) + L1i L#1 (64KB) + Core L#1 + PU
</span><br>
<span class="quotelev1">&gt; L#1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (P#1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  L2 L#2 (512KB) + L1d L#2 (64KB) + L1i L#2 (64KB) + Core L#2 + PU
</span><br>
<span class="quotelev1">&gt; L#2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (P#2)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  L2 L#3 (512KB) + L1d L#3 (64KB) + L1i L#3 (64KB) + Core L#3 + PU
</span><br>
<span class="quotelev1">&gt; L#3
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (P#3)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; NUMANode L#1 (P#1 16GB) + Socket L#1 + L3 L#1 (6144KB)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  L2 L#4 (512KB) + L1d L#4 (64KB) + L1i L#4 (64KB) + Core L#4 + PU
</span><br>
<span class="quotelev1">&gt; L#4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (P#4)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  L2 L#5 (512KB) + L1d L#5 (64KB) + L1i L#5 (64KB) + Core L#5 + PU
</span><br>
<span class="quotelev1">&gt; L#5
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (P#5)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  L2 L#6 (512KB) + L1d L#6 (64KB) + L1i L#6 (64KB) + Core L#6 + PU
</span><br>
<span class="quotelev1">&gt; L#6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (P#6)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  L2 L#7 (512KB) + L1d L#7 (64KB) + L1i L#7 (64KB) + Core L#7 + PU
</span><br>
<span class="quotelev1">&gt; L#7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (P#7)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; HostBridge L#0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  PCI 10de:036e
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  PCI 10de:037f
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    Block L#0 &quot;sda&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  PCI 10de:037f
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  PCI 10de:037f
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  PCIBridge
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    PCI 18ca:0020
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  PCIBridge
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;    PCI 15b3:6274
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      Net L#1 &quot;ib0&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      OpenFabrics L#2 &quot;mthca0&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="22931.php">CUDENNEC Loic: "[OMPI users] [CfP] ICCS/Alchemy 2014 - Architecture, Languages, Compilation and Hardware support for Emerging ManYcore systems"</a>
<li><strong>Previous message:</strong> <a href="22929.php">tmishima_at_[hidden]: "Re: [OMPI users] LAMA of openmpi-1.7.3 is unstable"</a>
<li><strong>In reply to:</strong> <a href="22929.php">tmishima_at_[hidden]: "Re: [OMPI users] LAMA of openmpi-1.7.3 is unstable"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22961.php">tmishima_at_[hidden]: "[OMPI users] Segmentation fault in oob_tcp.c of openmpi-1.7.4a1r29646"</a>
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
