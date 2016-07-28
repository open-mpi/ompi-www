<?
$subject_val = "[OMPI users] [sge::tight-integration] slot scheduling and resources handling";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 21 08:11:49 2010" -->
<!-- isoreceived="20100521121149" -->
<!-- sent="Fri, 21 May 2010 14:11:41 +0200" -->
<!-- isosent="20100521121141" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="[OMPI users] [sge::tight-integration] slot scheduling and resources handling" -->
<!-- id="201005211411.41374.eg_at_fft.be" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] [sge::tight-integration] slot scheduling and resources handling<br>
<strong>From:</strong> Eloi Gaudry (<em>eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-21 08:11:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13120.php">Fernando Lemos: "Re: [OMPI users] Using a rankfile for ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="13118.php">Jos&#233; Ignacio Aliaga Estell&#233;s: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13121.php">Reuti: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<li><strong>Reply:</strong> <a href="13121.php">Reuti: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>I'm observing something strange on our cluster managed by SGE6.2u4 when 
<br>
launching a parallel computation on several nodes, using OpenMPI/SGE tight-
<br>
integration mode (OpenMPI-1.3.3). It seems that the SGE allocated slots are 
<br>
not used by OpenMPI, as if OpenMPI was doing is own round-robin allocation 
<br>
based on the allocated node hostnames.
<br>
<p>Here is what I'm doing:
<br>
- launch a parallel computation involving 8 processors, using for each of them 
<br>
14GB of memory. I'm using a qsub command where i request memory_free resource 
<br>
and use tight integration with openmpi
<br>
- 3 servers are available:
<br>
. barney with 4 cores (4 slots) and 32GB
<br>
. carl with 4 cores (4 slots) and 32GB
<br>
. charlie with 8 cores (8 slots) and 64GB
<br>
<p>Here is the output of the allocated nodes (OpenMPI output):
<br>
======================   ALLOCATED NODES   ======================
<br>
<p>&nbsp;Data for node: Name: charlie   Launch id: -1 Arch: ffc91200  State: 2
<br>
&nbsp;&nbsp;Daemon: [[44332,0],0] Daemon launched: True
<br>
&nbsp;&nbsp;Num slots: 4  Slots in use: 0
<br>
&nbsp;&nbsp;Num slots allocated: 4  Max slots: 0
<br>
&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;Num procs: 0  Next node_rank: 0
<br>
&nbsp;Data for node: Name: carl.fft    Launch id: -1 Arch: 0 State: 2
<br>
&nbsp;&nbsp;Daemon: Not defined Daemon launched: False
<br>
&nbsp;&nbsp;Num slots: 2  Slots in use: 0
<br>
&nbsp;&nbsp;Num slots allocated: 2  Max slots: 0
<br>
&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;Num procs: 0  Next node_rank: 0
<br>
&nbsp;Data for node: Name: barney.fft    Launch id: -1 Arch: 0 State: 2
<br>
&nbsp;&nbsp;Daemon: Not defined Daemon launched: False
<br>
&nbsp;&nbsp;Num slots: 2  Slots in use: 0
<br>
&nbsp;&nbsp;Num slots allocated: 2  Max slots: 0
<br>
&nbsp;&nbsp;Username on node: NULL
<br>
&nbsp;&nbsp;Num procs: 0  Next node_rank: 0
<br>
<p>=================================================================
<br>
<p>Here is what I see when my computation is running on the cluster:
<br>
#     rank       pid          hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0     28112          charlie
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1     11417          carl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2     11808          barney
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3     28113          charlie
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4     11418          carl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5     11809          barney
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6     28114          charlie
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7     11419          carl
<br>
<p>Note that -the parallel environment used under SGE is defined as:
<br>
[eg_at_moe:~]$ qconf -sp round_robin
<br>
pe_name            round_robin
<br>
slots              32
<br>
user_lists         NONE
<br>
xuser_lists        NONE
<br>
start_proc_args    /bin/true
<br>
stop_proc_args     /bin/true
<br>
allocation_rule    $round_robin
<br>
control_slaves     TRUE
<br>
job_is_first_task  FALSE
<br>
urgency_slots      min
<br>
accounting_summary FALSE
<br>
<p>I'm wondering why OpenMPI didn't use the allocated nodes chosen by SGE (cf. 
<br>
&quot;ALLOCATED NODES&quot; report) but instead allocate each job of the parallel 
<br>
computation at a time, using a round-robin method.
<br>
<p>Note that I'm using the '--bynode' option in the orterun command line. If the 
<br>
behavior I'm observing is simply the consequence of using this option, please 
<br>
let me know. This would eventually mean that one need to state that SGE tight-
<br>
integration has a lower priority on orterun behavior than the different command 
<br>
line options.
<br>
<p>Any help would be appreciated,
<br>
Thanks,
<br>
Eloi
<br>
<p><p><pre>
-- 
Eloi Gaudry
Free Field Technologies
Axis Park Louvain-la-Neuve
Rue Emile Francqui, 1
B-1435 Mont-Saint Guibert
BELGIUM
Company Phone: +32 10 487 959
Company Fax:   +32 10 454 626
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13120.php">Fernando Lemos: "Re: [OMPI users] Using a rankfile for ompi-restart"</a>
<li><strong>Previous message:</strong> <a href="13118.php">Jos&#233; Ignacio Aliaga Estell&#233;s: "Re: [OMPI users] GM + OpenMPI bug ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13121.php">Reuti: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<li><strong>Reply:</strong> <a href="13121.php">Reuti: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
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
