<?
$subject_val = "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 21 19:02:47 2013" -->
<!-- isoreceived="20130321230247" -->
<!-- sent="Fri, 22 Mar 2013 08:02:22 +0900" -->
<!-- isosent="20130321230222" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8" -->
<!-- id="OF15CDB8AC.04FA0437-ON49257B35.007E59A8-49257B35.007E95CE_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="51FF3D08-0A46-4F12-B760-5D89301D6690_at_open-mpi.org" -->
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
<strong>Date:</strong> 2013-03-21 19:02:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21590.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21588.php">Gus Correa: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<li><strong>In reply to:</strong> <a href="21583.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21590.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21590.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Sorry for late reply. Here is my result.
<br>
<p>mpirun -v -np 8 -hostfile pbs_hosts -x OMP_NUM_THREADS --display-allocation
<br>
-mca ras_base_verbose 5 -mca rmaps_base_verb
<br>
ose 5 /home/mishima/Ducom/testbed/mPre m02-ld
<br>
[node04.cluster:28175] mca:base:select:(  ras) Querying component
<br>
[loadleveler]
<br>
[node04.cluster:28175] [[29518,0],0] ras:loadleveler: NOT available for
<br>
selection
<br>
[node04.cluster:28175] mca:base:select:(  ras) Skipping component
<br>
[loadleveler]. Query failed to return a module
<br>
[node04.cluster:28175] mca:base:select:(  ras) Querying component
<br>
[simulator]
<br>
[node04.cluster:28175] mca:base:select:(  ras) Skipping component
<br>
[simulator]. Query failed to return a module
<br>
[node04.cluster:28175] mca:base:select:(  ras) Querying component [slurm]
<br>
[node04.cluster:28175] [[29518,0],0] ras:slurm: NOT available for selection
<br>
[node04.cluster:28175] mca:base:select:(  ras) Skipping component [slurm].
<br>
Query failed to return a module
<br>
[node04.cluster:28175] mca:base:select:(  ras) Querying component [tm]
<br>
[node04.cluster:28175] mca:base:select:(  ras) Query of component [tm] set
<br>
priority to 100
<br>
[node04.cluster:28175] mca:base:select:(  ras) Selected component [tm]
<br>
[node04.cluster:28175] mca:rmaps:select: checking available component ppr
<br>
[node04.cluster:28175] mca:rmaps:select: Querying component [ppr]
<br>
[node04.cluster:28175] mca:rmaps:select: checking available component
<br>
rank_file
<br>
[node04.cluster:28175] mca:rmaps:select: Querying component [rank_file]
<br>
[node04.cluster:28175] mca:rmaps:select: checking available component
<br>
resilient
<br>
[node04.cluster:28175] mca:rmaps:select: Querying component [resilient]
<br>
[node04.cluster:28175] mca:rmaps:select: checking available component
<br>
round_robin
<br>
[node04.cluster:28175] mca:rmaps:select: Querying component [round_robin]
<br>
[node04.cluster:28175] mca:rmaps:select: checking available component seq
<br>
[node04.cluster:28175] mca:rmaps:select: Querying component [seq]
<br>
[node04.cluster:28175] [[29518,0],0]: Final mapper priorities
<br>
[node04.cluster:28175]  Mapper: ppr Priority: 90
<br>
[node04.cluster:28175]  Mapper: seq Priority: 60
<br>
[node04.cluster:28175]  Mapper: resilient Priority: 40
<br>
[node04.cluster:28175]  Mapper: round_robin Priority: 10
<br>
[node04.cluster:28175]  Mapper: rank_file Priority: 0
<br>
[node04.cluster:28175] [[29518,0],0] ras:base:allocate
<br>
[node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got hostname
<br>
node04
<br>
[node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: not found --
<br>
added to list
<br>
[node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got hostname
<br>
node04
<br>
[node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: found --
<br>
bumped slots to 2
<br>
[node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got hostname
<br>
node04
<br>
[node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: found --
<br>
bumped slots to 3
<br>
[node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got hostname
<br>
node04
<br>
[node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: found --
<br>
bumped slots to 4
<br>
[node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got hostname
<br>
node03
<br>
[node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: not found --
<br>
added to list
<br>
[node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got hostname
<br>
node03
<br>
[node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: found --
<br>
bumped slots to 2
<br>
[node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got hostname
<br>
node03
<br>
[node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: found --
<br>
bumped slots to 3
<br>
[node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: got hostname
<br>
node03
<br>
[node04.cluster:28175] [[29518,0],0] ras:tm:allocate:discover: found --
<br>
bumped slots to 4
<br>
[node04.cluster:28175] [[29518,0],0] ras:base:node_insert inserting 2 nodes
<br>
[node04.cluster:28175] [[29518,0],0] ras:base:node_insert updating HNP info
<br>
to 4 slots
<br>
[node04.cluster:28175] [[29518,0],0] ras:base:node_insert node node03
<br>
<p>======================   ALLOCATED NODES   ======================
<br>
<p>&nbsp;Data for node: node04  Num slots: 4    Max slots: 0
<br>
&nbsp;Data for node: node03  Num slots: 4    Max slots: 0
<br>
<p>=================================================================
<br>
[node04.cluster:28175] HOSTFILE: CHECKING FILE NODE node04 VS LIST NODE
<br>
node03
<br>
--------------------------------------------------------------------------
<br>
A hostfile was provided that contains at least one node not
<br>
present in the allocation:
<br>
<p>&nbsp;&nbsp;hostfile:  pbs_hosts
<br>
&nbsp;&nbsp;node:      node04
<br>
<p>If you are operating in a resource-managed environment, then only
<br>
nodes that are in the allocation can be used in the hostfile. You
<br>
may find relative node syntax to be a useful alternative to
<br>
specifying absolute node names see the orte_hosts man page for
<br>
further information.
<br>
--------------------------------------------------------------------------
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<p><span class="quotelev1">&gt; Hmmm...okay, let's try one more thing. Can you please add the following
</span><br>
to your command line:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca ras_base_verbose 5 -mca rmaps_base_verbose 5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Appreciate your patience. For some reason, we are losing your head node
</span><br>
from the allocation when we start trying to map processes. I'm trying to
<br>
track down where this is happening so we can figure
<br>
<span class="quotelev1">&gt; out why.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 20, 2013, at 10:32 PM, tmishima_at_[hidden] wrote:
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
<span class="quotelev2">&gt; &gt; Here is the result on patched openmpi-1.7rc8.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -v -np 8 -hostfile pbs_hosts -x OMP_NUM_THREADS
</span><br>
<span class="quotelev2">&gt; &gt; --display-allocation /home/mishima/Ducom/testbed/mPre m02-ld
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Data for node: node06  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev2">&gt; &gt; Data for node: node05  Num slots: 4    Max slots: 0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; =================================================================
</span><br>
<span class="quotelev2">&gt; &gt; [node06.cluster:21149] HOSTFILE: CHECKING FILE NODE node06 VS LIST NODE
</span><br>
<span class="quotelev2">&gt; &gt; node05
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
<span class="quotelev2">&gt; &gt;  node:      node06
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
<span class="quotelev2">&gt; &gt; Tetsuya
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
<li><strong>Next message:</strong> <a href="21590.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Previous message:</strong> <a href="21588.php">Gus Correa: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<li><strong>In reply to:</strong> <a href="21583.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21590.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
<li><strong>Reply:</strong> <a href="21590.php">Ralph Castain: "Re: [OMPI users] modified hostfile does not work with openmpi1.7rc8"</a>
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
