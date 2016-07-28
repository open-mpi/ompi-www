<?
$subject_val = "Re: [OMPI users] Any changes to rmaps in 1.10.2?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 19:06:56 2016" -->
<!-- isoreceived="20160129000656" -->
<!-- sent="Fri, 29 Jan 2016 09:06:52 +0900" -->
<!-- isosent="20160129000652" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Any changes to rmaps in 1.10.2?" -->
<!-- id="56AAAD1C.4000301_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="005101d15956$1ece9690$5c6bc3b0$_at_nci.org.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] Any changes to rmaps in 1.10.2?<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-28 19:06:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28401.php">Ben Menadue: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>Previous message:</strong> <a href="28399.php">Ralph Castain: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>In reply to:</strong> <a href="28393.php">Ben Menadue: "[OMPI users] Any changes to rmaps in 1.10.2?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28401.php">Ben Menadue: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>Reply:</strong> <a href="28401.php">Ben Menadue: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ben,
<br>
<p>with respect to PBS, are both OpenMPI built the same way ?
<br>
e.g. configure --with-tm=/opt/pbs/default or something similar
<br>
<p>you ran run
<br>
mpirun --mca plm_base_verbose 100 --mca ess_base_verbose 100 --mca 
<br>
ras_base_verbose 100 hostname
<br>
<p>and you should see the &quot;tm&quot; module in the logs.
<br>
<p>i noticed you run
<br>
mpirun -np 2 ...
<br>
is there any reason why you explicitly request 2 tasks ?
<br>
that is not needed if you submit with qsub -l nodes=1:ppn=2
<br>
do you observe the same behavior without -np 2 ?
<br>
<p>by any chance, is hyperthreading enabled on your compute node ?
<br>
/* if yes, that means all cores are in the cpuset, but with only one 
<br>
thread per core */
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 1/28/2016 7:57 AM, Ben Menadue wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Were there any changes to rmaps in going to 1.10.2? An otherwise-identical
</span><br>
<span class="quotelev1">&gt; setup that worked in 1.10.0 fails to launch in 1.10.2, complaining that
</span><br>
<span class="quotelev1">&gt; there's no CPUs available in a socket...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With 1.10.0:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ /apps/openmpi/1.10.0/bin/mpirun -np 2 -mca rmaps_base_verbose 1000
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: registering rmaps components
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: found loaded component resilient
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: component resilient register
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: found loaded component rank_file
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: component rank_file register
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: found loaded component staged
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: component staged has no register
</span><br>
<span class="quotelev1">&gt; or open function
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: found loaded component ppr
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: component ppr register function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: found loaded component seq
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: component seq register function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: found loaded component
</span><br>
<span class="quotelev1">&gt; round_robin
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: component round_robin register
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: found loaded component mindist
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_register: component mindist register
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [r47:18709] [[63529,0],0] rmaps:base set policy with core
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: opening rmaps components
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: found loaded component resilient
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: component resilient open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: found loaded component rank_file
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: component rank_file open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: found loaded component staged
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: component staged open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: found loaded component ppr
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: component ppr open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: found loaded component seq
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: component seq open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: found loaded component round_robin
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: component round_robin open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: found loaded component mindist
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: components_open: component mindist open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: checking available component resilient
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: Querying component [resilient]
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: checking available component rank_file
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: Querying component [rank_file]
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: checking available component staged
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: Querying component [staged]
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: checking available component ppr
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: Querying component [ppr]
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: checking available component seq
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: Querying component [seq]
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: checking available component round_robin
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: Querying component [round_robin]
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: checking available component mindist
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:select: Querying component [mindist]
</span><br>
<span class="quotelev1">&gt; [r47:18709] [[63529,0],0]: Final mapper priorities
</span><br>
<span class="quotelev1">&gt; [r47:18709] 	Mapper: ppr Priority: 90
</span><br>
<span class="quotelev1">&gt; [r47:18709] 	Mapper: seq Priority: 60
</span><br>
<span class="quotelev1">&gt; [r47:18709] 	Mapper: resilient Priority: 40
</span><br>
<span class="quotelev1">&gt; [r47:18709] 	Mapper: mindist Priority: 20
</span><br>
<span class="quotelev1">&gt; [r47:18709] 	Mapper: round_robin Priority: 10
</span><br>
<span class="quotelev1">&gt; [r47:18709] 	Mapper: staged Priority: 5
</span><br>
<span class="quotelev1">&gt; [r47:18709] 	Mapper: rank_file Priority: 0
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps: mapping job [63529,1]
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps: creating new map for job [63529,1]
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps: nprocs 2
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps mapping given - using default
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:ppr: job [63529,1] not using ppr mapper
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:seq: job [63529,1] not using seq mapper
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:resilient: cannot perform initial map of job [63529,1]
</span><br>
<span class="quotelev1">&gt; - no fault groups
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:mindist: job [63529,1] not using mindist mapper
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:rr: mapping job [63529,1]
</span><br>
<span class="quotelev1">&gt; [r47:18709] AVAILABLE NODES FOR MAPPING:
</span><br>
<span class="quotelev1">&gt; [r47:18709]     node: r47 daemon: 0
</span><br>
<span class="quotelev1">&gt; [r47:18709]     node: r57 daemon: 1
</span><br>
<span class="quotelev1">&gt; [r47:18709]     node: r58 daemon: 2
</span><br>
<span class="quotelev1">&gt; [r47:18709]     node: r59 daemon: 3
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:rr: mapping no-span by Core for job [63529,1] slots 64
</span><br>
<span class="quotelev1">&gt; num_procs 2
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:rr: found 16 Core objects on node r47
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:rr: assigning proc to object 0
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:rr: assigning proc to object 1
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps: computing ranks by core for job [63529,1]
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:rank_by: found 16 objects on node r47 with 2 procs
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:rank_by: assigned rank 0
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:rank_by: assigned rank 1
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:rank_by: found 16 objects on node r57 with 0 procs
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:rank_by: found 16 objects on node r58 with 0 procs
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps:rank_by: found 16 objects on node r59 with 0 procs
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps: compute bindings for job [63529,1] with policy
</span><br>
<span class="quotelev1">&gt; CORE[4008]
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps: bindings for job [63529,1] - bind in place
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca:rmaps: bind in place for job [63529,1] with bindings CORE
</span><br>
<span class="quotelev1">&gt; [r47:18709] [[63529,0],0] reset_usage: node r47 has 2 procs on it
</span><br>
<span class="quotelev1">&gt; [r47:18709] [[63529,0],0] reset_usage: ignoring proc [[63529,1],0]
</span><br>
<span class="quotelev1">&gt; [r47:18709] [[63529,0],0] reset_usage: ignoring proc [[63529,1],1]
</span><br>
<span class="quotelev1">&gt; [r47:18709] BINDING PROC [[63529,1],0] TO Core NUMBER 0
</span><br>
<span class="quotelev1">&gt; [r47:18709] [[63529,0],0] BOUND PROC [[63529,1],0] TO 0[Core:0] on node r47
</span><br>
<span class="quotelev1">&gt; [r47:18709] BINDING PROC [[63529,1],1] TO Core NUMBER 1
</span><br>
<span class="quotelev1">&gt; [r47:18709] [[63529,0],0] BOUND PROC [[63529,1],1] TO 1[Core:1] on node r47
</span><br>
<span class="quotelev1">&gt; r47
</span><br>
<span class="quotelev1">&gt; r47
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: component resilient closed
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: unloading component resilient
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: component rank_file closed
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: unloading component rank_file
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: component staged closed
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: unloading component staged
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: component ppr closed
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: unloading component ppr
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: component seq closed
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: unloading component seq
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: component round_robin closed
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: unloading component round_robin
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: component mindist closed
</span><br>
<span class="quotelev1">&gt; [r47:18709] mca: base: close: unloading component mindist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With 1.10.2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ /apps/openmpi/1.10.2/bin/mpirun -np 2 -mca rmaps_base_verbose 1000
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: registering rmaps components
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: found loaded component resilient
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: component resilient register
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: found loaded component rank_file
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: component rank_file register
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: found loaded component staged
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: component staged has no register
</span><br>
<span class="quotelev1">&gt; or open function
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: found loaded component ppr
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: component ppr register function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: found loaded component seq
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: component seq register function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: found loaded component
</span><br>
<span class="quotelev1">&gt; round_robin
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: component round_robin register
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: found loaded component mindist
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_register: component mindist register
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [r47:18733] [[63505,0],0] rmaps:base set policy with core
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: opening rmaps components
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: found loaded component resilient
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: component resilient open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: found loaded component rank_file
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: component rank_file open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: found loaded component staged
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: component staged open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: found loaded component ppr
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: component ppr open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: found loaded component seq
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: component seq open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: found loaded component round_robin
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: component round_robin open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: found loaded component mindist
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: components_open: component mindist open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: checking available component resilient
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: Querying component [resilient]
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: checking available component rank_file
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: Querying component [rank_file]
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: checking available component staged
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: Querying component [staged]
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: checking available component ppr
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: Querying component [ppr]
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: checking available component seq
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: Querying component [seq]
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: checking available component round_robin
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: Querying component [round_robin]
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: checking available component mindist
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:select: Querying component [mindist]
</span><br>
<span class="quotelev1">&gt; [r47:18733] [[63505,0],0]: Final mapper priorities
</span><br>
<span class="quotelev1">&gt; [r47:18733] 	Mapper: ppr Priority: 90
</span><br>
<span class="quotelev1">&gt; [r47:18733] 	Mapper: seq Priority: 60
</span><br>
<span class="quotelev1">&gt; [r47:18733] 	Mapper: resilient Priority: 40
</span><br>
<span class="quotelev1">&gt; [r47:18733] 	Mapper: mindist Priority: 20
</span><br>
<span class="quotelev1">&gt; [r47:18733] 	Mapper: round_robin Priority: 10
</span><br>
<span class="quotelev1">&gt; [r47:18733] 	Mapper: staged Priority: 5
</span><br>
<span class="quotelev1">&gt; [r47:18733] 	Mapper: rank_file Priority: 0
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps: mapping job [63505,1]
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps: creating new map for job [63505,1]
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps: nprocs 2
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps mapping given - using default
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:ppr: job [63505,1] not using ppr mapper
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:seq: job [63505,1] not using seq mapper
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:resilient: cannot perform initial map of job [63505,1]
</span><br>
<span class="quotelev1">&gt; - no fault groups
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:mindist: job [63505,1] not using mindist mapper
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:rr: mapping job [63505,1]
</span><br>
<span class="quotelev1">&gt; [r47:18733] AVAILABLE NODES FOR MAPPING:
</span><br>
<span class="quotelev1">&gt; [r47:18733]     node: r47 daemon: 0
</span><br>
<span class="quotelev1">&gt; [r47:18733]     node: r57 daemon: 1
</span><br>
<span class="quotelev1">&gt; [r47:18733]     node: r58 daemon: 2
</span><br>
<span class="quotelev1">&gt; [r47:18733]     node: r59 daemon: 3
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:rr: mapping no-span by Core for job [63505,1] slots 64
</span><br>
<span class="quotelev1">&gt; num_procs 2
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:rr: found 16 Core objects on node r47
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca:rmaps:rr: assigning proc to object 0
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; A request for multiple cpus-per-proc was given, but a directive
</span><br>
<span class="quotelev1">&gt; was also give to map to an object level that has less cpus than
</span><br>
<span class="quotelev1">&gt; requested ones:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    #cpus-per-proc:  1
</span><br>
<span class="quotelev1">&gt;    number of cpus:  0
</span><br>
<span class="quotelev1">&gt;    map-by:          BYCORE:NOOVERSUBSCRIBE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please specify a mapping level that has more cpus, or else let us
</span><br>
<span class="quotelev1">&gt; define a default mapping that will allow multiple cpus-per-proc.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: component resilient closed
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: unloading component resilient
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: component rank_file closed
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: unloading component rank_file
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: component staged closed
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: unloading component staged
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: component ppr closed
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: unloading component ppr
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: component seq closed
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: unloading component seq
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: component round_robin closed
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: unloading component round_robin
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: component mindist closed
</span><br>
<span class="quotelev1">&gt; [r47:18733] mca: base: close: unloading component mindist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are both in the same PBS Pro job. And the cpuset definitely has all
</span><br>
<span class="quotelev1">&gt; cores available:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat /cgroup/cpuset/pbspro/4347646.r-man2/cpuset.cpus
</span><br>
<span class="quotelev1">&gt; 0-15
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there something here I'm missing?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ben
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/01/28393.php">http://www.open-mpi.org/community/lists/users/2016/01/28393.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28401.php">Ben Menadue: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>Previous message:</strong> <a href="28399.php">Ralph Castain: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>In reply to:</strong> <a href="28393.php">Ben Menadue: "[OMPI users] Any changes to rmaps in 1.10.2?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28401.php">Ben Menadue: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>Reply:</strong> <a href="28401.php">Ben Menadue: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
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
