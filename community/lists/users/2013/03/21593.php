<?
$subject_val = "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 22 00:13:08 2013" -->
<!-- isoreceived="20130322041308" -->
<!-- sent="Thu, 21 Mar 2013 21:13:01 -0700" -->
<!-- isosent="20130322041301" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8" -->
<!-- id="56AF39DD-91D2-4D56-AB38-EA4E08930E03_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFCF6B5902.B491333B-ON49257B36.0015CDB8-49257B36.00169EB2_at_jcity.maeda.co.jp" -->
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
<strong>Date:</strong> 2013-03-22 00:13:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21594.php">Ralph Castain: "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<li><strong>Previous message:</strong> <a href="21592.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21592.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21576.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks - yes, the problem was in the launch_support.c code. I'll mark this as checked and apply it to the v1.7.0 release.
<br>
<p>Thanks for the help!
<br>
Ralph
<br>
<p>On Mar 21, 2013, at 9:06 PM, tmishima_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to patch trunk/orte/mca/plm/base/plm_base_launch_support.c.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I didn't touch debugging part of plm_base_launch_support.c and whole of
</span><br>
<span class="quotelev1">&gt; trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c, because
</span><br>
<span class="quotelev1">&gt; rmaps_base_support_fns.c seems to include only updates for debugging.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then, it works! Here is the result.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -v -np 8 -hostfile pbs_hosts -x OMP_NUM_THREADS --display-allocation
</span><br>
<span class="quotelev1">&gt; -mca ras_base_verbose 5 -mca rmaps_base_verb
</span><br>
<span class="quotelev1">&gt; ose 5 /home/mishima/Ducom/testbed/mPre m02-ld
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:base:select:(  ras) Querying component
</span><br>
<span class="quotelev1">&gt; [loadleveler]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] ras:loadleveler: NOT available for
</span><br>
<span class="quotelev1">&gt; selection
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:base:select:(  ras) Skipping component
</span><br>
<span class="quotelev1">&gt; [loadleveler]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:base:select:(  ras) Querying component
</span><br>
<span class="quotelev1">&gt; [simulator]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:base:select:(  ras) Skipping component
</span><br>
<span class="quotelev1">&gt; [simulator]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:base:select:(  ras) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] ras:slurm: NOT available for selection
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:base:select:(  ras) Skipping component [slurm].
</span><br>
<span class="quotelev1">&gt; Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:base:select:(  ras) Querying component [tm]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:base:select:(  ras) Query of component [tm] set
</span><br>
<span class="quotelev1">&gt; priority to 100
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:base:select:(  ras) Selected component [tm]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps:select: checking available component ppr
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps:select: Querying component [ppr]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps:select: checking available component
</span><br>
<span class="quotelev1">&gt; rank_file
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps:select: Querying component [rank_file]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps:select: checking available component
</span><br>
<span class="quotelev1">&gt; resilient
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps:select: Querying component [resilient]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps:select: checking available component
</span><br>
<span class="quotelev1">&gt; round_robin
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps:select: Querying component [round_robin]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps:select: checking available component seq
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps:select: Querying component [seq]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0]: Final mapper priorities
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522]  Mapper: ppr Priority: 90
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522]  Mapper: seq Priority: 60
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522]  Mapper: resilient Priority: 40
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522]  Mapper: round_robin Priority: 10
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522]  Mapper: rank_file Priority: 0
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] ras:base:allocate
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: got hostname
</span><br>
<span class="quotelev1">&gt; node05
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: not found --
</span><br>
<span class="quotelev1">&gt; added to list
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: got hostname
</span><br>
<span class="quotelev1">&gt; node05
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: found --
</span><br>
<span class="quotelev1">&gt; bumped slots to 2
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: got hostname
</span><br>
<span class="quotelev1">&gt; node05
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: found --
</span><br>
<span class="quotelev1">&gt; bumped slots to 3
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: got hostname
</span><br>
<span class="quotelev1">&gt; node05
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: found --
</span><br>
<span class="quotelev1">&gt; bumped slots to 4
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: got hostname
</span><br>
<span class="quotelev1">&gt; node04
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: not found --
</span><br>
<span class="quotelev1">&gt; added to list
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: got hostname
</span><br>
<span class="quotelev1">&gt; node04
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: found --
</span><br>
<span class="quotelev1">&gt; bumped slots to 2
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: got hostname
</span><br>
<span class="quotelev1">&gt; node04
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: found --
</span><br>
<span class="quotelev1">&gt; bumped slots to 3
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: got hostname
</span><br>
<span class="quotelev1">&gt; node04
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: found --
</span><br>
<span class="quotelev1">&gt; bumped slots to 4
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] ras:base:node_insert inserting 2 nodes
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] ras:base:node_insert updating HNP info
</span><br>
<span class="quotelev1">&gt; to 4 slots
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] ras:base:node_insert node node04
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Data for node: node05  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev1">&gt; Data for node: node04  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] HOSTFILE: CHECKING FILE NODE node05 VS LIST NODE
</span><br>
<span class="quotelev1">&gt; node04
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] HOSTFILE: CHECKING FILE NODE node05 VS LIST NODE
</span><br>
<span class="quotelev1">&gt; node05
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] HOSTFILE: CHECKING FILE NODE node04 VS LIST NODE
</span><br>
<span class="quotelev1">&gt; node04
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps: mapping job [58229,1]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps: creating new map for job [58229,1]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps:ppr: job [58229,1] not using ppr mapper
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] rmaps:seq mapping job [58229,1]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps:seq: job [58229,1] not using seq mapper
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps:resilient: cannot perform initial map of
</span><br>
<span class="quotelev1">&gt; job [58229,1] - no fault groups
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps:rr: mapping job [58229,1]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] Starting with 2 nodes in list
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] Filtering thru apps
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] HOSTFILE: CHECKING FILE NODE node05 VS LIST NODE
</span><br>
<span class="quotelev1">&gt; node05
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] HOSTFILE: CHECKING FILE NODE node04 VS LIST NODE
</span><br>
<span class="quotelev1">&gt; node04
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] Retained 2 nodes in list
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] AVAILABLE NODES FOR MAPPING:
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522]     node: node05 daemon: 0
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522]     node: node04 daemon: 1
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] Starting bookmark at node node05
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] Starting at node node05
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps:rr: mapping by slot for job [58229,1]
</span><br>
<span class="quotelev1">&gt; slots 8 num_procs 8
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps:rr:slot working node node05
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps:rr:slot working node node04
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps:base: computing vpids by slot for job
</span><br>
<span class="quotelev1">&gt; [58229,1]
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps:base: assigning rank 0 to node node05
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps:base: assigning rank 1 to node node05
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps:base: assigning rank 2 to node node05
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps:base: assigning rank 3 to node node05
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps:base: assigning rank 4 to node node04
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps:base: assigning rank 5 to node node04
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps:base: assigning rank 6 to node node04
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] mca:rmaps:base: assigning rank 7 to node node04
</span><br>
<span class="quotelev1">&gt; [node05.cluster:22522] [[58229,0],0] rmaps:base:compute_usage
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Okay, I found it - fix coming in a bit.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 21, 2013, at 4:02 PM, tmishima_at_[hidden] wrote:
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
<span class="quotelev3">&gt;&gt;&gt; Sorry for late reply. Here is my result.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -v -np 8 -hostfile pbs_hosts -x OMP_NUM_THREADS
</span><br>
<span class="quotelev1">&gt; --display-allocation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca ras_base_verbose 5 -mca rmaps_base_verb
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ose 5 /home/mishima/Ducom/testbed/mPre m02-ld
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] mca:base:select:(  ras) Querying component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loadleveler]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] [[29518,0],0] ras:loadleveler: NOT available for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; selection
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] mca:base:select:(  ras) Skipping component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [loadleveler]. Query failed to return a module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] mca:base:select:(  ras) Querying component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [simulator]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] mca:base:select:(  ras) Skipping component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [simulator]. Query failed to return a module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] mca:base:select:(  ras) Querying component
</span><br>
<span class="quotelev1">&gt; [slurm]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] [[29518,0],0] ras:slurm: NOT available for
</span><br>
<span class="quotelev1">&gt; selection
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] mca:base:select:(  ras) Skipping component
</span><br>
<span class="quotelev1">&gt; [slurm].
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Query failed to return a module
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] mca:base:select:(  ras) Querying component [tm]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] mca:base:select:(  ras) Query of component [tm]
</span><br>
<span class="quotelev1">&gt; set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; priority to 100
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] mca:base:select:(  ras) Selected component [tm]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] mca:rmaps:select: checking available component
</span><br>
<span class="quotelev1">&gt; ppr
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] mca:rmaps:select: Querying component [ppr]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] mca:rmaps:select: checking available component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank_file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] mca:rmaps:select: Querying component [rank_file]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] mca:rmaps:select: checking available component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; resilient
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] mca:rmaps:select: Querying component [resilient]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] mca:rmaps:select: checking available component
</span><br>
<span class="quotelev3">&gt;&gt;&gt; round_robin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] mca:rmaps:select: Querying component
</span><br>
<span class="quotelev1">&gt; [round_robin]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] mca:rmaps:select: checking available component
</span><br>
<span class="quotelev1">&gt; seq
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] mca:rmaps:select: Querying component [seq]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] [[29518,0],0]: Final mapper priorities
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175]  Mapper: ppr Priority: 90
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175]  Mapper: seq Priority: 60
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175]  Mapper: resilient Priority: 40
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175]  Mapper: round_robin Priority: 10
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175]  Mapper: rank_file Priority: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] [[29518,0],0] ras:base:allocate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node04
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: not
</span><br>
<span class="quotelev1">&gt; found --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; added to list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node04
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: found --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bumped slots to 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node04
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: found --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bumped slots to 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node04
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: found --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bumped slots to 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node03
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: not
</span><br>
<span class="quotelev1">&gt; found --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; added to list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node03
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: found --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bumped slots to 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node03
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: found --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bumped slots to 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node03
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: found --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bumped slots to 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] [[29518,0],0] ras:base:node_insert inserting 2
</span><br>
<span class="quotelev1">&gt; nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] [[29518,0],0] ras:base:node_insert updating HNP
</span><br>
<span class="quotelev1">&gt; info
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to 4 slots
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] [[29518,0],0] ras:base:node_insert node node03
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for node: node04  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Data for node: node03  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; =================================================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [node04.cluster:28175] HOSTFILE: CHECKING FILE NODE node04 VS LIST NODE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node03
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
<span class="quotelev3">&gt;&gt;&gt; node:      node04
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
<span class="quotelev3">&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hmmm...okay, let's try one more thing. Can you please add the
</span><br>
<span class="quotelev1">&gt; following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to your command line:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mca ras_base_verbose 5 -mca rmaps_base_verbose 5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Appreciate your patience. For some reason, we are losing your head
</span><br>
<span class="quotelev1">&gt; node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from the allocation when we start trying to map processes. I'm trying
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; track down where this is happening so we can figure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; out why.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 20, 2013, at 10:32 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here is the result on patched openmpi-1.7rc8.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -v -np 8 -hostfile pbs_hosts -x OMP_NUM_THREADS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --display-allocation /home/mishima/Ducom/testbed/mPre m02-ld
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Data for node: node06  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Data for node: node05  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; =================================================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [node06.cluster:21149] HOSTFILE: CHECKING FILE NODE node06 VS LIST
</span><br>
<span class="quotelev1">&gt; NODE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node05
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; A hostfile was provided that contains at least one node not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; present in the allocation:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hostfile:  pbs_hosts
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node:      node06
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If you are operating in a resource-managed environment, then only
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; nodes that are in the allocation can be used in the hostfile. You
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; may find relative node syntax to be a useful alternative to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; specifying absolute node names see the orte_hosts man page for
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; further information.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tetsuya
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
<span class="quotelev4">&gt;&gt;&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="21594.php">Ralph Castain: "Re: [OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<li><strong>Previous message:</strong> <a href="21592.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>In reply to:</strong> <a href="21592.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21576.php">tmishima_at_[hidden]: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
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
