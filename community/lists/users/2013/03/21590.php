<?
$subject_val = "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 21 19:22:09 2013" -->
<!-- isoreceived="20130321232209" -->
<!-- sent="Thu, 21 Mar 2013 16:22:00 -0700" -->
<!-- isosent="20130321232200" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8" -->
<!-- id="BB5F2D70-A939-4983-A208-9583D95BD981_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OF15CDB8AC.04FA0437-ON49257B35.007E59A8-49257B35.007E95CE_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-21 19:22:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21591.php">David A. Boger: "[OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<li><strong>Previous message:</strong> <a href="21589.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21589.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21592.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21592.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, I found it - fix coming in a bit.
<br>
<p>Thanks!
<br>
Ralph
<br>
<p>On Mar 21, 2013, at 4:02 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for late reply. Here is my result.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -v -np 8 -hostfile pbs_hosts -x OMP_NUM_THREADS --display-allocation
</span><br>
<span class="quotelev1">&gt; -mca ras_base_verbose 5 -mca rmaps_base_verb
</span><br>
<span class="quotelev1">&gt; ose 5 /home/mishima/Ducom/testbed/mPre m02-ld
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] mca:base:select:(  ras) Querying component
</span><br>
<span class="quotelev1">&gt; [loadleveler]
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] [[29518,0],0] ras:loadleveler: NOT available for
</span><br>
<span class="quotelev1">&gt; selection
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] mca:base:select:(  ras) Skipping component
</span><br>
<span class="quotelev1">&gt; [loadleveler]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] mca:base:select:(  ras) Querying component
</span><br>
<span class="quotelev1">&gt; [simulator]
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] mca:base:select:(  ras) Skipping component
</span><br>
<span class="quotelev1">&gt; [simulator]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] mca:base:select:(  ras) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] [[29518,0],0] ras:slurm: NOT available for selection
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] mca:base:select:(  ras) Skipping component [slurm].
</span><br>
<span class="quotelev1">&gt; Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] mca:base:select:(  ras) Querying component [tm]
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] mca:base:select:(  ras) Query of component [tm] set
</span><br>
<span class="quotelev1">&gt; priority to 100
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] mca:base:select:(  ras) Selected component [tm]
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] mca:rmaps:select: checking available component ppr
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] mca:rmaps:select: Querying component [ppr]
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] mca:rmaps:select: checking available component
</span><br>
<span class="quotelev1">&gt; rank_file
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] mca:rmaps:select: Querying component [rank_file]
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] mca:rmaps:select: checking available component
</span><br>
<span class="quotelev1">&gt; resilient
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] mca:rmaps:select: Querying component [resilient]
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] mca:rmaps:select: checking available component
</span><br>
<span class="quotelev1">&gt; round_robin
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] mca:rmaps:select: Querying component [round_robin]
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] mca:rmaps:select: checking available component seq
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] mca:rmaps:select: Querying component [seq]
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] [[29518,0],0]: Final mapper priorities
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175]  Mapper: ppr Priority: 90
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175]  Mapper: seq Priority: 60
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175]  Mapper: resilient Priority: 40
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175]  Mapper: round_robin Priority: 10
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175]  Mapper: rank_file Priority: 0
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] [[29518,0],0] ras:base:allocate
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got hostname
</span><br>
<span class="quotelev1">&gt; node04
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: not found --
</span><br>
<span class="quotelev1">&gt; added to list
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got hostname
</span><br>
<span class="quotelev1">&gt; node04
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: found --
</span><br>
<span class="quotelev1">&gt; bumped slots to 2
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got hostname
</span><br>
<span class="quotelev1">&gt; node04
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: found --
</span><br>
<span class="quotelev1">&gt; bumped slots to 3
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got hostname
</span><br>
<span class="quotelev1">&gt; node04
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: found --
</span><br>
<span class="quotelev1">&gt; bumped slots to 4
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got hostname
</span><br>
<span class="quotelev1">&gt; node03
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: not found --
</span><br>
<span class="quotelev1">&gt; added to list
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got hostname
</span><br>
<span class="quotelev1">&gt; node03
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: found --
</span><br>
<span class="quotelev1">&gt; bumped slots to 2
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got hostname
</span><br>
<span class="quotelev1">&gt; node03
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: found --
</span><br>
<span class="quotelev1">&gt; bumped slots to 3
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got hostname
</span><br>
<span class="quotelev1">&gt; node03
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: found --
</span><br>
<span class="quotelev1">&gt; bumped slots to 4
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] [[29518,0],0] ras:base:node_insert inserting 2 nodes
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] [[29518,0],0] ras:base:node_insert updating HNP info
</span><br>
<span class="quotelev1">&gt; to 4 slots
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] [[29518,0],0] ras:base:node_insert node node03
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: node04  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev1">&gt; Data for node: node03  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; [node04.cluster:28175] HOSTFILE: CHECKING FILE NODE node04 VS LIST NODE
</span><br>
<span class="quotelev1">&gt; node03
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A hostfile was provided that contains at least one node not
</span><br>
<span class="quotelev1">&gt; present in the allocation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  hostfile:  pbs_hosts
</span><br>
<span class="quotelev1">&gt;  node:      node04
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you are operating in a resource-managed environment, then only
</span><br>
<span class="quotelev1">&gt; nodes that are in the allocation can be used in the hostfile. You
</span><br>
<span class="quotelev1">&gt; may find relative node syntax to be a useful alternative to
</span><br>
<span class="quotelev1">&gt; specifying absolute node names see the orte_hosts man page for
</span><br>
<span class="quotelev1">&gt; further information.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm...okay, let's try one more thing. Can you please add the following
</span><br>
<span class="quotelev1">&gt; to your command line:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -mca ras_base_verbose 5 -mca rmaps_base_verbose 5
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Appreciate your patience. For some reason, we are losing your head node
</span><br>
<span class="quotelev1">&gt; from the allocation when we start trying to map processes. I'm trying to
</span><br>
<span class="quotelev1">&gt; track down where this is happening so we can figure
</span><br>
<span class="quotelev2">&gt;&gt; out why.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 20, 2013, at 10:32 PM, tmishima_at_[hidden] wrote:
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
<span class="quotelev3">&gt;&gt;&gt; Here is the result on patched openmpi-1.7rc8.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -v -np 8 -hostfile pbs_hosts -x OMP_NUM_THREADS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --display-allocation /home/mishima/Ducom/testbed/mPre m02-ld
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for node: node06  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for node: node05  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node06.cluster:21149] HOSTFILE: CHECKING FILE NODE node06 VS LIST NODE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node05
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A hostfile was provided that contains at least one node not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; present in the allocation:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostfile:  pbs_hosts
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node:      node06
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If you are operating in a resource-managed environment, then only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes that are in the allocation can be used in the hostfile. You
</span><br>
<span class="quotelev3">&gt;&gt;&gt; may find relative node syntax to be a useful alternative to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specifying absolute node names see the orte_hosts man page for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; further information.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tetsuya
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
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="21591.php">David A. Boger: "[OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<li><strong>Previous message:</strong> <a href="21589.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21589.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21592.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21592.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
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
