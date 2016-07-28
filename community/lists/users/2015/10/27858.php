<?
$subject_val = "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  9 09:27:25 2015" -->
<!-- isoreceived="20151009132725" -->
<!-- sent="Fri, 9 Oct 2015 06:27:18 -0700" -->
<!-- isosent="20151009132718" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM" -->
<!-- id="4AAF6983-9048-480C-9302-884847900465_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="5617BDB3.4060505_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-09 09:27:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27859.php">Marcin Krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Previous message:</strong> <a href="27857.php">Marcin Krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>In reply to:</strong> <a href="27857.php">Marcin Krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27859.php">Marcin Krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Reply:</strong> <a href="27859.php">Marcin Krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, you just confirmed the problem for me. You are correct in that it says 4 slots. However, if you then tell us pe=4, we will consume all 4 of those slots with the very first process.
<br>
<p>What we need to see was that slurm was assigning us 16 slots to correspond to 16 cpus. Instead, it is trying to tell us to launch only 4 procs, but to use 16 cpus as if they belong to us. This is where the confusion is coming from - could be something in the slurm envar syntax changed, or something else did as I seem to recall we handled this okay before (but I could be wrong).
<br>
<p>Fixing that will take some time that I honestly won&#226;&#128;&#153;t have for awhile.
<br>
<p><p><span class="quotelev1">&gt; On Oct 9, 2015, at 6:14 AM, Marcin Krotkiewski &lt;marcin.krotkiewski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the result running
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun --map-by slot:pe=4 -display-allocation ./affinity
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt;    c12-29: slots=4 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; rank 0 @ compute-12-29.local  1, 2, 3, 4, 17, 18, 19, 20,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also attach output with --mca rmaps_base_verbose 10. It says 4 slots all over the place, so it is really weird it should not work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Marcin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_register: registering rmaps components
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_register: found loaded component round_robin
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_register: component round_robin register function successful
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_register: found loaded component rank_file
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_register: component rank_file register function successful
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_register: found loaded component seq
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_register: component seq register function successful
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_register: found loaded component resilient
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_register: component resilient register function successful
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_register: found loaded component staged
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_register: component staged has no register or open function
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_register: found loaded component mindist
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_register: component mindist register function successful
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_register: found loaded component ppr
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_register: component ppr register function successful
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] [[61064,0],0] rmaps:base set policy with slot:pe=4
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] [[61064,0],0] rmaps:base policy slot modifiers pe=4 provided
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] [[61064,0],0] rmaps:base check modifiers with pe=4
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] [[61064,0],0] rmaps:base setting pe/rank to 4
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_open: opening rmaps components
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_open: found loaded component round_robin
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_open: component round_robin open function successful
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_open: found loaded component rank_file
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_open: component rank_file open function successful
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_open: found loaded component seq
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_open: component seq open function successful
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_open: found loaded component resilient
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_open: component resilient open function successful
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_open: found loaded component staged
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_open: component staged open function successful
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_open: found loaded component mindist
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_open: component mindist open function successful
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_open: found loaded component ppr
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: components_open: component ppr open function successful
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps:select: checking available component round_robin
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps:select: Querying component [round_robin]
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps:select: checking available component rank_file
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps:select: Querying component [rank_file]
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps:select: checking available component seq
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps:select: Querying component [seq]
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps:select: checking available component resilient
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps:select: Querying component [resilient]
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps:select: checking available component staged
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps:select: Querying component [staged]
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps:select: checking available component mindist
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps:select: Querying component [mindist]
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps:select: checking available component ppr
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps:select: Querying component [ppr]
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] [[61064,0],0]: Final mapper priorities
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710]     Mapper: ppr Priority: 90
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710]     Mapper: seq Priority: 60
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710]     Mapper: resilient Priority: 40
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710]     Mapper: mindist Priority: 20
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710]     Mapper: round_robin Priority: 10
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710]     Mapper: staged Priority: 5
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710]     Mapper: rank_file Priority: 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt;    c12-29: slots=4 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev1">&gt; =================================================================
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps: mapping job [61064,1]
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps: creating new map for job [61064,1]
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] AVAILABLE NODES FOR MAPPING:
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710]     node: c12-29 daemon: 1
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps: nprocs 4
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps mapping given - using default
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps:ppr: job [61064,1] not using ppr mapper
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps:seq: job [61064,1] not using seq mapper
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps:resilient: cannot perform initial map of job [61064,1] - no fault groups
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps:mindist: job [61064,1] not using mindist mapper
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps:rr: mapping job [61064,1]
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] AVAILABLE NODES FOR MAPPING:
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710]     node: c12-29 daemon: 1
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps:rr: mapping by slot for job [61064,1] slots 4 num_procs 1
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps:rr:slot working node c12-29
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps:rr:slot assigning 1 procs to node c12-29
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps:base: computing vpids by slot for job [61064,1]
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps:base: assigning rank 0 to node c12-29
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps: compute bindings for job [61064,1] with policy CORE:IF-SUPPORTED[5008]
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] [[61064,0],0] reset_usage: node c12-29 has 1 procs on it
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] [[61064,0],0] reset_usage: ignoring proc [[61064,1],0]
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] [[61064,0],0] bind_depth: 6 map_depth 0
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca:rmaps: bind downward for job [61064,1] with bindings CORE:IF-SUPPORTED
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] [[61064,0],0] GOT 1 CPUS
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] [[61064,0],0] GOT 1 CPUS
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] [[61064,0],0] GOT 1 CPUS
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] [[61064,0],0] GOT 1 CPUS
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] [[61064,0],0] PROC [[61064,1],0] BITMAP 0-3,16-19
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] [[61064,0],0] BOUND PROC [[61064,1],0][c12-29] TO socket 0[core 0[hwt 0-1]], socket 0[core 1[hwt 0-1]], socket 0[core 2[hwt 0-1]], socket 0[core 3[hwt 0-1]]: [BB/BB/BB/BB/../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; rank 0 @ compute-12-29.local  1, 2, 3, 4, 17, 18, 19, 20,
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: close: component round_robin closed
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: close: unloading component round_robin
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: close: component rank_file closed
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: close: unloading component rank_file
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: close: component seq closed
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: close: unloading component seq
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: close: component resilient closed
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: close: unloading component resilient
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: close: component staged closed
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: close: unloading component staged
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: close: component mindist closed
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: close: unloading component mindist
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: close: component ppr closed
</span><br>
<span class="quotelev1">&gt; [login-0-1.local:30710] mca: base: close: unloading component ppr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/09/2015 02:07 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Marcin
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Looking again at this: could you get a similar reservation again and rerun mpirun with &#226;&#128;&#156;-display-allocation&#226;&#128;&#157; added to the command line? I&#226;&#128;&#153;d like to see if we are correctly parsing the number of slots assigned in the allocation
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Oct 6, 2015, at 11:52 AM, marcin.krotkiewski &lt;marcin.krotkiewski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you both for your suggestion. I still cannot make this work though, and I think - as Ralph predicted - most problems are likely related to non-homogeneous mapping of cpus to jobs. But there is problems even before that part..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I reserve one entire compute node with SLURM:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; salloc --ntasks=16 --tasks-per-node=16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can run my code as you suggested with _any_ N (including odd numbers!). OpenMPI will figure out the maximun number of tasks that fits and launch them. This also works for many complete nodes, but this is the only case when I managed to get it to work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I specify cpus per task, also allocating one full node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; salloc --ntasks=4 --cpus-per-task=4 --tasks-per-node=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; things go astray:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --map-by slot:pe=4 ./affinity
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0 @ compute-1-6.local  0, 1, 2, 3, 16, 17, 18, 19,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, only one MPI process was started. Running what Gilles previously suggested:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ srun grep Cpus_allowed_list /proc/self/status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cpus_allowed_list:    0-31
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cpus_allowed_list:    0-31
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cpus_allowed_list:    0-31
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cpus_allowed_list:    0-31
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So the allocation seems fine. The SLURM environment is also correct, as far as I can tell:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM_CPUS_PER_TASK=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM_JOB_CPUS_PER_NODE=16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM_JOB_NODELIST=c1-6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM_JOB_NUM_NODES=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM_NNODES=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM_NODELIST=c1-6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM_NPROCS=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM_NTASKS=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM_NTASKS_PER_NODE=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SLURM_TASKS_PER_NODE=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do not understand why openmpi does not want to start more than 1 process. If I try to force it (-n 4) I of course get an error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun --map-by slot:pe=4 -n 4 ./affinity
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are not enough slots available in the system to satisfy the 4 slots
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that were requested by the application:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ./affinity
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Either request fewer slots for your application, or make more slots available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for use.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For clarity, I will not describe other cases / non-contiguous cpu sets / heterogeneous nodes. Clearly something is wrong already with the simple ones..
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anyone have any ideas? Should I record some logs to see what's going on?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks a lot!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Marcin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 10/06/2015 01:04 AM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Ralph, it's been a long time.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The option &quot;map-by core&quot; does not work when pe=N &gt; 1 is specified.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, you should use &quot;map-by slot:pe=N&quot; as far as I remember.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tetsuya Mishima
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2015/10/06 5:40:33&#227;&#128;&#129;&quot;users&quot;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#175;&#227;&#128;&#140;Re: [OMPI users] Hybrid OpenMPI+OpenMP
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tasks using SLURM&#227;&#128;&#141;&#227;&#129;&#167;&#230;&#155;&#184;&#227;&#129;&#141;&#227;&#129;&#190;&#227;&#129;&#151;&#227;&#129;&#159;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hmmm&#226;&#128;&#166;okay, try -map-by socket:pe=4
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We&#226;&#128;&#153;ll still hit the asymmetric topology issue, but otherwise this should
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; work
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Oct 5, 2015, at 1:25 PM, marcin.krotkiewski
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;marcin.krotkiewski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thank you for a fast response! Sounds very good, unfortunately I get an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; $ mpirun --map-by core:pe=4 ./affinity
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; A request for multiple cpus-per-proc was given, but a directive
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; was also give to map to an object level that cannot support that
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; directive.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Please specify a mapping level that has more than one cpu, or
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; else let us define a default mapping that will allow multiple
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; cpus-per-proc.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have allocated my slurm job as
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; salloc --ntasks=2 --cpus-per-task=4
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I have checked in 1.10.0 and 1.10.1rc1.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On 10/05/2015 09:58 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; You would presently do:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun &#226;&#128;&#148;map-by core:pe=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; to get what you are seeking. If we don&#226;&#128;&#153;t already set that qualifier
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; when we see &#226;&#128;&#156;cpus_per_task&#226;&#128;&#157;, then we probably should do so as there isn&#226;&#128;&#153;t
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; any reason to make you set it twice (well, other than
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trying to track which envar slurm is using now).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Oct 5, 2015, at 12:38 PM, marcin.krotkiewski
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;marcin.krotkiewski_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Yet another question about cpu binding under SLURM environment..
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Short version: will OpenMPI support SLURM_CPUS_PER_TASK for the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; purpose of cpu binding?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Full version: When you allocate a job like, e.g., this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; salloc --ntasks=2 --cpus-per-task=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM will allocate 8 cores in total, 4 for each 'assumed' MPI tasks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is useful for hybrid jobs, where each MPI process spawns some internal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; worker threads (e.g., OpenMP). The intention is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that there are 2 MPI procs started, each of them 'bound' to 4 cores.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM will also set an environment variable
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; SLURM_CPUS_PER_TASK=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; which should (probably?) be taken into account by the method that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; launches the MPI processes to figure out the cpuset. In case of OpenMPI +
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun I think something should happen in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; orte/mca/ras/slurm/ras_slurm_module.c, where the variable _is_ actually
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parsed. Unfortunately, it is never really used...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; As a result, cpuset of all tasks started on a given compute node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; includes all CPU cores of all MPI tasks on that node, just as provided by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SLURM (in the above example - 8). In general, there is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; no simple way for the user code in the MPI procs to 'split' the cores
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; between themselves. I imagine the original intention to support this in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenMPI was something like
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; mpirun --bind-to subtask_cpuset
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; with an artificial bind target that would cause OpenMPI to divide the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; allocated cores between the mpi tasks. Is this right? If so, it seems that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at this point this is not implemented. Is there
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; plans to do this? If no, does anyone know another way to achieve that?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks a lot!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Marcin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27803.php">http://www.open-mpi.org/community/lists/users/2015/10/27803.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27804.php">http://www.open-mpi.org/community/lists/users/2015/10/27804.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27805.php">http://www.open-mpi.org/community/lists/users/2015/10/27805.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/usersLink">http://www.open-mpi.org/mailman/listinfo.cgi/usersLink</a> to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27806.php">http://www.open-mpi.org/community/lists/users/2015/10/27806.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27809.php">http://www.open-mpi.org/community/lists/users/2015/10/27809.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27817.php">http://www.open-mpi.org/community/lists/users/2015/10/27817.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27851.php">http://www.open-mpi.org/community/lists/users/2015/10/27851.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27857.php">http://www.open-mpi.org/community/lists/users/2015/10/27857.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27859.php">Marcin Krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Previous message:</strong> <a href="27857.php">Marcin Krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>In reply to:</strong> <a href="27857.php">Marcin Krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27859.php">Marcin Krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
<li><strong>Reply:</strong> <a href="27859.php">Marcin Krotkiewski: "Re: [OMPI users] Hybrid OpenMPI+OpenMP tasks using SLURM"</a>
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
