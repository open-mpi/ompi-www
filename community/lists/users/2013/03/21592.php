<?
$subject_val = "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 22 00:07:10 2013" -->
<!-- isoreceived="20130322040710" -->
<!-- sent="Fri, 22 Mar 2013 13:06:47 +0900" -->
<!-- isosent="20130322040647" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8" -->
<!-- id="OFCF6B5902.B491333B-ON49257B36.0015CDB8-49257B36.00169EB2_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BB5F2D70-A939-4983-A208-9583D95BD981_at_open-mpi.org" -->
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
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20users]%20modified%20hostfile%20does%20not%20work%20with%20openmpi1.7rc8"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2013-03-22 00:06:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21593.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21591.php">David A. Boger: "[OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<li><strong>In reply to:</strong> <a href="21590.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21593.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21593.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>I tried to patch trunk/orte/mca/plm/base/plm_base_launch_support.c.
<br>
<p>I didn't touch debugging part of plm_base_launch_support.c and whole of
<br>
trunk/orte/mca/rmaps/base/rmaps_base_support_fns.c, because
<br>
rmaps_base_support_fns.c seems to include only updates for debugging.
<br>
<p>Then, it works! Here is the result.
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<p>mpirun -v -np 8 -hostfile pbs_hosts -x OMP_NUM_THREADS --display-allocation
<br>
-mca ras_base_verbose 5 -mca rmaps_base_verb
<br>
ose 5 /home/mishima/Ducom/testbed/mPre m02-ld
<br>
[node05.cluster:22522] mca:base:select:(  ras) Querying component
<br>
[loadleveler]
<br>
[node05.cluster:22522] [[58229,0],0] ras:loadleveler: NOT available for
<br>
selection
<br>
[node05.cluster:22522] mca:base:select:(  ras) Skipping component
<br>
[loadleveler]. Query failed to return a module
<br>
[node05.cluster:22522] mca:base:select:(  ras) Querying component
<br>
[simulator]
<br>
[node05.cluster:22522] mca:base:select:(  ras) Skipping component
<br>
[simulator]. Query failed to return a module
<br>
[node05.cluster:22522] mca:base:select:(  ras) Querying component [slurm]
<br>
[node05.cluster:22522] [[58229,0],0] ras:slurm: NOT available for selection
<br>
[node05.cluster:22522] mca:base:select:(  ras) Skipping component [slurm].
<br>
Query failed to return a module
<br>
[node05.cluster:22522] mca:base:select:(  ras) Querying component [tm]
<br>
[node05.cluster:22522] mca:base:select:(  ras) Query of component [tm] set
<br>
priority to 100
<br>
[node05.cluster:22522] mca:base:select:(  ras) Selected component [tm]
<br>
[node05.cluster:22522] mca:rmaps:select: checking available component ppr
<br>
[node05.cluster:22522] mca:rmaps:select: Querying component [ppr]
<br>
[node05.cluster:22522] mca:rmaps:select: checking available component
<br>
rank_file
<br>
[node05.cluster:22522] mca:rmaps:select: Querying component [rank_file]
<br>
[node05.cluster:22522] mca:rmaps:select: checking available component
<br>
resilient
<br>
[node05.cluster:22522] mca:rmaps:select: Querying component [resilient]
<br>
[node05.cluster:22522] mca:rmaps:select: checking available component
<br>
round_robin
<br>
[node05.cluster:22522] mca:rmaps:select: Querying component [round_robin]
<br>
[node05.cluster:22522] mca:rmaps:select: checking available component seq
<br>
[node05.cluster:22522] mca:rmaps:select: Querying component [seq]
<br>
[node05.cluster:22522] [[58229,0],0]: Final mapper priorities
<br>
[node05.cluster:22522]  Mapper: ppr Priority: 90
<br>
[node05.cluster:22522]  Mapper: seq Priority: 60
<br>
[node05.cluster:22522]  Mapper: resilient Priority: 40
<br>
[node05.cluster:22522]  Mapper: round_robin Priority: 10
<br>
[node05.cluster:22522]  Mapper: rank_file Priority: 0
<br>
[node05.cluster:22522] [[58229,0],0] ras:base:allocate
<br>
[node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: got hostname
<br>
node05
<br>
[node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: not found --
<br>
added to list
<br>
[node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: got hostname
<br>
node05
<br>
[node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: found --
<br>
bumped slots to 2
<br>
[node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: got hostname
<br>
node05
<br>
[node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: found --
<br>
bumped slots to 3
<br>
[node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: got hostname
<br>
node05
<br>
[node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: found --
<br>
bumped slots to 4
<br>
[node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: got hostname
<br>
node04
<br>
[node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: not found --
<br>
added to list
<br>
[node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: got hostname
<br>
node04
<br>
[node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: found --
<br>
bumped slots to 2
<br>
[node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: got hostname
<br>
node04
<br>
[node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: found --
<br>
bumped slots to 3
<br>
[node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: got hostname
<br>
node04
<br>
[node05.cluster:22522] [[58229,0],0] ras:tm:allocate:discover: found --
<br>
bumped slots to 4
<br>
[node05.cluster:22522] [[58229,0],0] ras:base:node_insert inserting 2 nodes
<br>
[node05.cluster:22522] [[58229,0],0] ras:base:node_insert updating HNP info
<br>
to 4 slots
<br>
[node05.cluster:22522] [[58229,0],0] ras:base:node_insert node node04
<br>
<p>======================   ALLOCATED NODES   ======================
<br>
<p>&nbsp;Data for node: node05  Num slots: 4    Max slots: 0
<br>
&nbsp;Data for node: node04  Num slots: 4    Max slots: 0
<br>
<p>=================================================================
<br>
[node05.cluster:22522] HOSTFILE: CHECKING FILE NODE node05 VS LIST NODE
<br>
node04
<br>
[node05.cluster:22522] HOSTFILE: CHECKING FILE NODE node05 VS LIST NODE
<br>
node05
<br>
[node05.cluster:22522] HOSTFILE: CHECKING FILE NODE node04 VS LIST NODE
<br>
node04
<br>
[node05.cluster:22522] mca:rmaps: mapping job [58229,1]
<br>
[node05.cluster:22522] mca:rmaps: creating new map for job [58229,1]
<br>
[node05.cluster:22522] mca:rmaps:ppr: job [58229,1] not using ppr mapper
<br>
[node05.cluster:22522] [[58229,0],0] rmaps:seq mapping job [58229,1]
<br>
[node05.cluster:22522] mca:rmaps:seq: job [58229,1] not using seq mapper
<br>
[node05.cluster:22522] mca:rmaps:resilient: cannot perform initial map of
<br>
job [58229,1] - no fault groups
<br>
[node05.cluster:22522] mca:rmaps:rr: mapping job [58229,1]
<br>
[node05.cluster:22522] [[58229,0],0] Starting with 2 nodes in list
<br>
[node05.cluster:22522] [[58229,0],0] Filtering thru apps
<br>
[node05.cluster:22522] HOSTFILE: CHECKING FILE NODE node05 VS LIST NODE
<br>
node05
<br>
[node05.cluster:22522] HOSTFILE: CHECKING FILE NODE node04 VS LIST NODE
<br>
node04
<br>
[node05.cluster:22522] [[58229,0],0] Retained 2 nodes in list
<br>
[node05.cluster:22522] AVAILABLE NODES FOR MAPPING:
<br>
[node05.cluster:22522]     node: node05 daemon: 0
<br>
[node05.cluster:22522]     node: node04 daemon: 1
<br>
[node05.cluster:22522] [[58229,0],0] Starting bookmark at node node05
<br>
[node05.cluster:22522] [[58229,0],0] Starting at node node05
<br>
[node05.cluster:22522] mca:rmaps:rr: mapping by slot for job [58229,1]
<br>
slots 8 num_procs 8
<br>
[node05.cluster:22522] mca:rmaps:rr:slot working node node05
<br>
[node05.cluster:22522] mca:rmaps:rr:slot working node node04
<br>
[node05.cluster:22522] mca:rmaps:base: computing vpids by slot for job
<br>
[58229,1]
<br>
[node05.cluster:22522] mca:rmaps:base: assigning rank 0 to node node05
<br>
[node05.cluster:22522] mca:rmaps:base: assigning rank 1 to node node05
<br>
[node05.cluster:22522] mca:rmaps:base: assigning rank 2 to node node05
<br>
[node05.cluster:22522] mca:rmaps:base: assigning rank 3 to node node05
<br>
[node05.cluster:22522] mca:rmaps:base: assigning rank 4 to node node04
<br>
[node05.cluster:22522] mca:rmaps:base: assigning rank 5 to node node04
<br>
[node05.cluster:22522] mca:rmaps:base: assigning rank 6 to node node04
<br>
[node05.cluster:22522] mca:rmaps:base: assigning rank 7 to node node04
<br>
[node05.cluster:22522] [[58229,0],0] rmaps:base:compute_usage
<br>
<p><p><span class="quotelev1">&gt; Okay, I found it - fix coming in a bit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 21, 2013, at 4:02 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sorry for late reply. Here is my result.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -v -np 8 -hostfile pbs_hosts -x OMP_NUM_THREADS
</span><br>
--display-allocation
<br>
<span class="quotelev2">&gt; &gt; -mca ras_base_verbose 5 -mca rmaps_base_verb
</span><br>
<span class="quotelev2">&gt; &gt; ose 5 /home/mishima/Ducom/testbed/mPre m02-ld
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] mca:base:select:(  ras) Querying component
</span><br>
<span class="quotelev2">&gt; &gt; [loadleveler]
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] [[29518,0],0] ras:loadleveler: NOT available for
</span><br>
<span class="quotelev2">&gt; &gt; selection
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] mca:base:select:(  ras) Skipping component
</span><br>
<span class="quotelev2">&gt; &gt; [loadleveler]. Query failed to return a module
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] mca:base:select:(  ras) Querying component
</span><br>
<span class="quotelev2">&gt; &gt; [simulator]
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] mca:base:select:(  ras) Skipping component
</span><br>
<span class="quotelev2">&gt; &gt; [simulator]. Query failed to return a module
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] mca:base:select:(  ras) Querying component
</span><br>
[slurm]
<br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] [[29518,0],0] ras:slurm: NOT available for
</span><br>
selection
<br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] mca:base:select:(  ras) Skipping component
</span><br>
[slurm].
<br>
<span class="quotelev2">&gt; &gt; Query failed to return a module
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] mca:base:select:(  ras) Querying component [tm]
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] mca:base:select:(  ras) Query of component [tm]
</span><br>
set
<br>
<span class="quotelev2">&gt; &gt; priority to 100
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] mca:base:select:(  ras) Selected component [tm]
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] mca:rmaps:select: checking available component
</span><br>
ppr
<br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] mca:rmaps:select: Querying component [ppr]
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] mca:rmaps:select: checking available component
</span><br>
<span class="quotelev2">&gt; &gt; rank_file
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] mca:rmaps:select: Querying component [rank_file]
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] mca:rmaps:select: checking available component
</span><br>
<span class="quotelev2">&gt; &gt; resilient
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] mca:rmaps:select: Querying component [resilient]
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] mca:rmaps:select: checking available component
</span><br>
<span class="quotelev2">&gt; &gt; round_robin
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] mca:rmaps:select: Querying component
</span><br>
[round_robin]
<br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] mca:rmaps:select: checking available component
</span><br>
seq
<br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] mca:rmaps:select: Querying component [seq]
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] [[29518,0],0]: Final mapper priorities
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175]  Mapper: ppr Priority: 90
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175]  Mapper: seq Priority: 60
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175]  Mapper: resilient Priority: 40
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175]  Mapper: round_robin Priority: 10
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175]  Mapper: rank_file Priority: 0
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] [[29518,0],0] ras:base:allocate
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got
</span><br>
hostname
<br>
<span class="quotelev2">&gt; &gt; node04
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: not
</span><br>
found --
<br>
<span class="quotelev2">&gt; &gt; added to list
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got
</span><br>
hostname
<br>
<span class="quotelev2">&gt; &gt; node04
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: found --
</span><br>
<span class="quotelev2">&gt; &gt; bumped slots to 2
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got
</span><br>
hostname
<br>
<span class="quotelev2">&gt; &gt; node04
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: found --
</span><br>
<span class="quotelev2">&gt; &gt; bumped slots to 3
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got
</span><br>
hostname
<br>
<span class="quotelev2">&gt; &gt; node04
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: found --
</span><br>
<span class="quotelev2">&gt; &gt; bumped slots to 4
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got
</span><br>
hostname
<br>
<span class="quotelev2">&gt; &gt; node03
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: not
</span><br>
found --
<br>
<span class="quotelev2">&gt; &gt; added to list
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got
</span><br>
hostname
<br>
<span class="quotelev2">&gt; &gt; node03
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: found --
</span><br>
<span class="quotelev2">&gt; &gt; bumped slots to 2
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got
</span><br>
hostname
<br>
<span class="quotelev2">&gt; &gt; node03
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: found --
</span><br>
<span class="quotelev2">&gt; &gt; bumped slots to 3
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got
</span><br>
hostname
<br>
<span class="quotelev2">&gt; &gt; node03
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: found --
</span><br>
<span class="quotelev2">&gt; &gt; bumped slots to 4
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] [[29518,0],0] ras:base:node_insert inserting 2
</span><br>
nodes
<br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] [[29518,0],0] ras:base:node_insert updating HNP
</span><br>
info
<br>
<span class="quotelev2">&gt; &gt; to 4 slots
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] [[29518,0],0] ras:base:node_insert node node03
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Data for node: node04  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev2">&gt; &gt; Data for node: node03  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; =================================================================
</span><br>
<span class="quotelev2">&gt; &gt; [node04.cluster:28175] HOSTFILE: CHECKING FILE NODE node04 VS LIST NODE
</span><br>
<span class="quotelev2">&gt; &gt; node03
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt; A hostfile was provided that contains at least one node not
</span><br>
<span class="quotelev2">&gt; &gt; present in the allocation:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  hostfile:  pbs_hosts
</span><br>
<span class="quotelev2">&gt; &gt;  node:      node04
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If you are operating in a resource-managed environment, then only
</span><br>
<span class="quotelev2">&gt; &gt; nodes that are in the allocation can be used in the hostfile. You
</span><br>
<span class="quotelev2">&gt; &gt; may find relative node syntax to be a useful alternative to
</span><br>
<span class="quotelev2">&gt; &gt; specifying absolute node names see the orte_hosts man page for
</span><br>
<span class="quotelev2">&gt; &gt; further information.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hmmm...okay, let's try one more thing. Can you please add the
</span><br>
following
<br>
<span class="quotelev2">&gt; &gt; to your command line:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -mca ras_base_verbose 5 -mca rmaps_base_verbose 5
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Appreciate your patience. For some reason, we are losing your head
</span><br>
node
<br>
<span class="quotelev2">&gt; &gt; from the allocation when we start trying to map processes. I'm trying
</span><br>
to
<br>
<span class="quotelev2">&gt; &gt; track down where this is happening so we can figure
</span><br>
<span class="quotelev3">&gt; &gt;&gt; out why.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Mar 20, 2013, at 10:32 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Here is the result on patched openmpi-1.7rc8.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mpirun -v -np 8 -hostfile pbs_hosts -x OMP_NUM_THREADS
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --display-allocation /home/mishima/Ducom/testbed/mPre m02-ld
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Data for node: node06  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Data for node: node05  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; =================================================================
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; [node06.cluster:21149] HOSTFILE: CHECKING FILE NODE node06 VS LIST
</span><br>
NODE
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node05
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; A hostfile was provided that contains at least one node not
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; present in the allocation:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; hostfile:  pbs_hosts
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; node:      node06
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If you are operating in a resource-managed environment, then only
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; nodes that are in the allocation can be used in the hostfile. You
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; may find relative node syntax to be a useful alternative to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; specifying absolute node names see the orte_hosts man page for
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; further information.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Tetsuya
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21593.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21591.php">David A. Boger: "[OMPI users] mpi_init waits 64 seconds if vpn is connected"</a>
<li><strong>In reply to:</strong> <a href="21590.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21593.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21593.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
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
