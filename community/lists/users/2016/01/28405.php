<?
$subject_val = "Re: [OMPI users] Any changes to rmaps in 1.10.2?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 28 21:43:12 2016" -->
<!-- isoreceived="20160129024312" -->
<!-- sent="Fri, 29 Jan 2016 13:43:10 +1100" -->
<!-- isosent="20160129024310" -->
<!-- name="Ben Menadue" -->
<!-- email="ben.menadue_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Any changes to rmaps in 1.10.2?" -->
<!-- id="007301d15a3e$cad0d190$607274b0$_at_nci.org.au" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="56AACF63.60606_at_rist.or.jp" -->
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
<strong>From:</strong> Ben Menadue (<em>ben.menadue_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-28 21:43:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28406.php">Gilles Gouaillardet: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>Previous message:</strong> <a href="28404.php">Gilles Gouaillardet: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>In reply to:</strong> <a href="28404.php">Gilles Gouaillardet: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28406.php">Gilles Gouaillardet: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>Reply:</strong> <a href="28406.php">Gilles Gouaillardet: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I'm able to reproduce it on a single node as well.
<br>
<p>Actually, even on just a single CPU (and -np 1) - won't let me launch unless
<br>
both threads of that core are in the cgroup.
<br>
<p><p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gilles
<br>
Gouaillardet
<br>
Sent: Friday, 29 January 2016 1:33 PM
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Any changes to rmaps in 1.10.2?
<br>
<p>I was able to reproduce the issue on one node with a cpuset manually set.
<br>
<p>fwiw, i cannot reproduce the issue using taskset instead of cpuset (!)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 1/29/2016 11:08 AM, Ben Menadue wrote:
<br>
<span class="quotelev1">&gt; Hi Gilles, Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay, it definitely seems to be due to the cpuset having only one of 
</span><br>
<span class="quotelev1">&gt; the hyperthreads of each physical core:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [13:02:13 root_at_r60:4363542.r-man2] # echo 0-15 &gt; cpuset.cpus
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 13:03 bjm900_at_r60 ~ &gt; cat 
</span><br>
<span class="quotelev1">&gt; /cgroup/cpuset/pbspro/4363542.r-man2/cpuset.cpus
</span><br>
<span class="quotelev1">&gt; 0-15
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 13:03 bjm900_at_r60 ~ &gt; /apps/openmpi/1.10.2/bin/mpirun  hostname
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---- A request for multiple cpus-per-proc was given, but a directive 
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
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [13:03:43 root_at_r60:4363542.r-man2] # echo 0-31 &gt; cpuset.cpus
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 13:03 bjm900_at_r60 ~ &gt; cat 
</span><br>
<span class="quotelev1">&gt; /cgroup/cpuset/pbspro/4363542.r-man2/cpuset.cpus
</span><br>
<span class="quotelev1">&gt; 0-31
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 13:04 bjm900_at_r60 ~ &gt; /apps/openmpi/1.10.2/bin/mpirun  hostname 
</span><br>
<span class="quotelev1">&gt; &lt;...hostnames...&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ben 
</span><br>
<span class="quotelev1">&gt; Menadue
</span><br>
<span class="quotelev1">&gt; Sent: Friday, 29 January 2016 1:01 PM
</span><br>
<span class="quotelev1">&gt; To: 'Open MPI Users' &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Any changes to rmaps in 1.10.2?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; with respect to PBS, are both OpenMPI built the same way ?
</span><br>
<span class="quotelev2">&gt;&gt; e.g. configure --with-tm=/opt/pbs/default or something similar
</span><br>
<span class="quotelev1">&gt; Both are built against TM explicitly using the --with-tm option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; you ran run
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca plm_base_verbose 100 --mca ess_base_verbose 100 --mca
</span><br>
<span class="quotelev1">&gt; ras_base_verbose 100 hostname
</span><br>
<span class="quotelev2">&gt;&gt; and you should see the &quot;tm&quot; module in the logs.
</span><br>
<span class="quotelev1">&gt; Yes, it appears to use TM from what I can see. Outputs from 1.10.0 and
</span><br>
<span class="quotelev1">&gt; 1.10.2 are attached from inside the same job - they look identical 
</span><br>
<span class="quotelev1">&gt; (apart from the pids), except at the very end where 1.10.2 errors out 
</span><br>
<span class="quotelev1">&gt; while 1.10.1 continues.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i noticed you run
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 ...
</span><br>
<span class="quotelev2">&gt;&gt; is there any reason why you explicitly request 2 tasks ?
</span><br>
<span class="quotelev1">&gt; The &quot;-np 2&quot; is because that's what I was using to benchmark the 
</span><br>
<span class="quotelev1">&gt; install
</span><br>
<span class="quotelev1">&gt; (osu_bibw) and I just copied it over from when I realised it wasn't 
</span><br>
<span class="quotelev1">&gt; even starting. But it does the same regardless of whether I specify 
</span><br>
<span class="quotelev1">&gt; the number of processes or not (without it gets the number of tasks from
</span><br>
PBS).
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; by any chance, is hyperthreading enabled on your compute node ?
</span><br>
<span class="quotelev2">&gt;&gt; /* if yes, that means all cores are in the cpuset, but with only one
</span><br>
<span class="quotelev1">&gt; thread per core */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The nodes are 2 x 8-core sockets with hyper-threading on, and you can 
</span><br>
<span class="quotelev1">&gt; chose whether to use the extra hardware threads when submitting the 
</span><br>
<span class="quotelev1">&gt; job. If you want them, your cgroup includes both threads on each core 
</span><br>
<span class="quotelev1">&gt; (e.g. 0-31), otherwise only one thread (e.g. 0-15) (cores 16-32 are 
</span><br>
<span class="quotelev1">&gt; the thread siblings of cores 0-15).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For reference, the PBS job I was using above had ncpus=32,mem=16G, 
</span><br>
<span class="quotelev1">&gt; which becomes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    select=2:ncpus=16:mpiprocs=16:mem=8589934592b
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; under the hood with a cpuset containing cores 0-15 on each of the two
</span><br>
nodes.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interestingly, if I use a cpuset containing both threads of each 
</span><br>
<span class="quotelev1">&gt; physical core (i.e. ask for hyperthreading on job submission), then it 
</span><br>
<span class="quotelev1">&gt; runs fine under 1.10.2.
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
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gilles 
</span><br>
<span class="quotelev1">&gt; Gouaillardet
</span><br>
<span class="quotelev1">&gt; Sent: Friday, 29 January 2016 11:07 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Any changes to rmaps in 1.10.2?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ben,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that is not needed if you submit with qsub -l nodes=1:ppn=2 do you 
</span><br>
<span class="quotelev1">&gt; observe the same behavior without -np 2 ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 1/28/2016 7:57 AM, Ben Menadue wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Were there any changes to rmaps in going to 1.10.2? An 
</span><br>
<span class="quotelev2">&gt;&gt; otherwise-identical setup that worked in 1.10.0 fails to launch in 
</span><br>
<span class="quotelev2">&gt;&gt; 1.10.2, complaining that there's no CPUs available in a socket...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With 1.10.0:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ /apps/openmpi/1.10.0/bin/mpirun -np 2 -mca rmaps_base_verbose 1000 
</span><br>
<span class="quotelev2">&gt;&gt; hostname [r47:18709] mca: base: components_register: registering 
</span><br>
<span class="quotelev2">&gt;&gt; rmaps components [r47:18709] mca: base: components_register: found 
</span><br>
<span class="quotelev2">&gt;&gt; loaded component resilient [r47:18709] mca: base: components_register:
</span><br>
<span class="quotelev2">&gt;&gt; component resilient register function successful [r47:18709] mca:
</span><br>
<span class="quotelev2">&gt;&gt; base: components_register: found loaded component rank_file 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] mca: base: components_register: component rank_file 
</span><br>
<span class="quotelev2">&gt;&gt; register function successful [r47:18709] mca: base:
</span><br>
<span class="quotelev2">&gt;&gt; components_register: found loaded component staged [r47:18709] mca:
</span><br>
<span class="quotelev2">&gt;&gt; base: components_register: component staged has no register or open 
</span><br>
<span class="quotelev2">&gt;&gt; function [r47:18709] mca: base: components_register: found loaded 
</span><br>
<span class="quotelev2">&gt;&gt; component ppr [r47:18709] mca: base: components_register: component 
</span><br>
<span class="quotelev2">&gt;&gt; ppr register function successful [r47:18709] mca: base:
</span><br>
<span class="quotelev2">&gt;&gt; components_register: found loaded component seq [r47:18709] mca: base:
</span><br>
<span class="quotelev2">&gt;&gt; components_register: component seq register function successful 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] mca: base: components_register: found loaded component 
</span><br>
<span class="quotelev2">&gt;&gt; round_robin [r47:18709] mca: base: components_register: component 
</span><br>
<span class="quotelev2">&gt;&gt; round_robin register function successful [r47:18709] mca: base:
</span><br>
<span class="quotelev2">&gt;&gt; components_register: found loaded component mindist [r47:18709] mca:
</span><br>
<span class="quotelev2">&gt;&gt; base: components_register: component mindist register function 
</span><br>
<span class="quotelev2">&gt;&gt; successful [r47:18709] [[63529,0],0] rmaps:base set policy with core 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] mca: base: components_open: opening rmaps components 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] mca: base: components_open: found loaded component 
</span><br>
<span class="quotelev2">&gt;&gt; resilient [r47:18709] mca: base: components_open: component resilient 
</span><br>
<span class="quotelev2">&gt;&gt; open function successful [r47:18709] mca: base: components_open: 
</span><br>
<span class="quotelev2">&gt;&gt; found loaded component rank_file [r47:18709] mca: base: components_open:
</span><br>
<span class="quotelev2">&gt;&gt; component rank_file open function successful [r47:18709] mca: base:
</span><br>
<span class="quotelev2">&gt;&gt; components_open: found loaded component staged [r47:18709] mca: base:
</span><br>
<span class="quotelev2">&gt;&gt; components_open: component staged open function successful 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709]
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: components_open: found loaded component ppr [r47:18709]
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: components_open: component ppr open function successful 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] mca: base: components_open: found loaded component seq 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] mca: base: components_open: component seq open function 
</span><br>
<span class="quotelev2">&gt;&gt; successful [r47:18709] mca: base: components_open: found loaded 
</span><br>
<span class="quotelev2">&gt;&gt; component round_robin [r47:18709] mca: base: components_open:
</span><br>
<span class="quotelev2">&gt;&gt; component round_robin open function successful [r47:18709] mca: base:
</span><br>
<span class="quotelev2">&gt;&gt; components_open: found loaded component mindist [r47:18709] mca: base:
</span><br>
<span class="quotelev2">&gt;&gt; components_open: component mindist open function successful 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] mca:rmaps:select: checking available component resilient 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] mca:rmaps:select: Querying component [resilient] 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] mca:rmaps:select: checking available component rank_file 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] mca:rmaps:select: Querying component [rank_file] 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] mca:rmaps:select: checking available component staged 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] mca:rmaps:select: Querying component [staged] [r47:18709]
</span><br>
<span class="quotelev2">&gt;&gt; mca:rmaps:select: checking available component ppr [r47:18709]
</span><br>
<span class="quotelev2">&gt;&gt; mca:rmaps:select: Querying component [ppr] [r47:18709]
</span><br>
<span class="quotelev2">&gt;&gt; mca:rmaps:select: checking available component seq [r47:18709]
</span><br>
<span class="quotelev2">&gt;&gt; mca:rmaps:select: Querying component [seq] [r47:18709]
</span><br>
<span class="quotelev2">&gt;&gt; mca:rmaps:select: checking available component round_robin 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709]
</span><br>
<span class="quotelev2">&gt;&gt; mca:rmaps:select: Querying component [round_robin] [r47:18709]
</span><br>
<span class="quotelev2">&gt;&gt; mca:rmaps:select: checking available component mindist [r47:18709]
</span><br>
<span class="quotelev2">&gt;&gt; mca:rmaps:select: Querying component [mindist] [r47:18709]
</span><br>
<span class="quotelev2">&gt;&gt; [[63529,0],0]: Final mapper priorities
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] 	Mapper: ppr Priority: 90
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] 	Mapper: seq Priority: 60
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] 	Mapper: resilient Priority: 40
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] 	Mapper: mindist Priority: 20
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] 	Mapper: round_robin Priority: 10
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] 	Mapper: staged Priority: 5
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] 	Mapper: rank_file Priority: 0
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] mca:rmaps: mapping job [63529,1] [r47:18709] mca:rmaps:
</span><br>
<span class="quotelev2">&gt;&gt; creating new map for job [63529,1] [r47:18709] mca:rmaps: nprocs 2 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] mca:rmaps mapping given - using default [r47:18709]
</span><br>
<span class="quotelev2">&gt;&gt; mca:rmaps:ppr: job [63529,1] not using ppr mapper [r47:18709]
</span><br>
<span class="quotelev2">&gt;&gt; mca:rmaps:seq: job [63529,1] not using seq mapper [r47:18709]
</span><br>
<span class="quotelev2">&gt;&gt; mca:rmaps:resilient: cannot perform initial map of job [63529,1]
</span><br>
<span class="quotelev2">&gt;&gt; - no fault groups
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] mca:rmaps:mindist: job [63529,1] not using mindist mapper 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] mca:rmaps:rr: mapping job [63529,1] [r47:18709] AVAILABLE 
</span><br>
<span class="quotelev2">&gt;&gt; NODES FOR MAPPING:
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709]     node: r47 daemon: 0
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709]     node: r57 daemon: 1
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709]     node: r58 daemon: 2
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709]     node: r59 daemon: 3
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] mca:rmaps:rr: mapping no-span by Core for job [63529,1] 
</span><br>
<span class="quotelev2">&gt;&gt; slots 64 num_procs 2 [r47:18709] mca:rmaps:rr: found 16 Core objects 
</span><br>
<span class="quotelev2">&gt;&gt; on node r47 [r47:18709] mca:rmaps:rr: assigning proc to object 0 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] mca:rmaps:rr: assigning proc to object 1 [r47:18709]
</span><br>
<span class="quotelev2">&gt;&gt; mca:rmaps: computing ranks by core for job [63529,1] [r47:18709]
</span><br>
<span class="quotelev2">&gt;&gt; mca:rmaps:rank_by: found 16 objects on node r47 with 2 procs 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] mca:rmaps:rank_by: assigned rank 0 [r47:18709]
</span><br>
<span class="quotelev2">&gt;&gt; mca:rmaps:rank_by: assigned rank 1 [r47:18709] mca:rmaps:rank_by:
</span><br>
<span class="quotelev2">&gt;&gt; found 16 objects on node r57 with 0 procs [r47:18709]
</span><br>
<span class="quotelev2">&gt;&gt; mca:rmaps:rank_by: found 16 objects on node r58 with 0 procs 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] mca:rmaps:rank_by: found 16 objects on node r59 with 0 
</span><br>
<span class="quotelev2">&gt;&gt; procs [r47:18709] mca:rmaps: compute bindings for job [63529,1] with 
</span><br>
<span class="quotelev2">&gt;&gt; policy CORE[4008] [r47:18709] mca:rmaps: bindings for job [63529,1] - 
</span><br>
<span class="quotelev2">&gt;&gt; bind in place [r47:18709] mca:rmaps: bind in place for job [63529,1] 
</span><br>
<span class="quotelev2">&gt;&gt; with bindings CORE [r47:18709] [[63529,0],0] reset_usage: node r47 
</span><br>
<span class="quotelev2">&gt;&gt; has
</span><br>
<span class="quotelev2">&gt;&gt; 2 procs on it [r47:18709] [[63529,0],0] reset_usage: ignoring proc 
</span><br>
<span class="quotelev2">&gt;&gt; [[63529,1],0] [r47:18709] [[63529,0],0] reset_usage: ignoring proc 
</span><br>
<span class="quotelev2">&gt;&gt; [[63529,1],1] [r47:18709] BINDING PROC [[63529,1],0] TO Core NUMBER 0 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] [[63529,0],0] BOUND PROC [[63529,1],0] TO 0[Core:0] on 
</span><br>
<span class="quotelev2">&gt;&gt; node r47 [r47:18709] BINDING PROC [[63529,1],1] TO Core NUMBER 1 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] [[63529,0],0] BOUND PROC [[63529,1],1] TO 1[Core:1] on 
</span><br>
<span class="quotelev2">&gt;&gt; node r47
</span><br>
<span class="quotelev2">&gt;&gt; r47
</span><br>
<span class="quotelev2">&gt;&gt; r47
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] mca: base: close: component resilient closed [r47:18709]
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: close: unloading component resilient [r47:18709] mca: base:
</span><br>
<span class="quotelev2">&gt;&gt; close: component rank_file closed [r47:18709] mca: base: close:
</span><br>
<span class="quotelev2">&gt;&gt; unloading component rank_file [r47:18709] mca: base: close: component 
</span><br>
<span class="quotelev2">&gt;&gt; staged closed [r47:18709] mca: base: close: unloading component 
</span><br>
<span class="quotelev2">&gt;&gt; staged [r47:18709] mca: base: close: component ppr closed [r47:18709]
</span><br>
mca:
<br>
<span class="quotelev2">&gt;&gt; base: close: unloading component ppr [r47:18709] mca: base: close:
</span><br>
<span class="quotelev2">&gt;&gt; component seq closed [r47:18709] mca: base: close: unloading 
</span><br>
<span class="quotelev2">&gt;&gt; component seq [r47:18709] mca: base: close: component round_robin 
</span><br>
<span class="quotelev2">&gt;&gt; closed [r47:18709] mca: base: close: unloading component round_robin 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18709] mca: base: close: component mindist closed [r47:18709]
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: close: unloading component mindist
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; With 1.10.2:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ /apps/openmpi/1.10.2/bin/mpirun -np 2 -mca rmaps_base_verbose 1000 
</span><br>
<span class="quotelev2">&gt;&gt; hostname [r47:18733] mca: base: components_register: registering 
</span><br>
<span class="quotelev2">&gt;&gt; rmaps components [r47:18733] mca: base: components_register: found 
</span><br>
<span class="quotelev2">&gt;&gt; loaded component resilient [r47:18733] mca: base: components_register:
</span><br>
<span class="quotelev2">&gt;&gt; component resilient register function successful [r47:18733] mca:
</span><br>
<span class="quotelev2">&gt;&gt; base: components_register: found loaded component rank_file 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] mca: base: components_register: component rank_file 
</span><br>
<span class="quotelev2">&gt;&gt; register function successful [r47:18733] mca: base:
</span><br>
<span class="quotelev2">&gt;&gt; components_register: found loaded component staged [r47:18733] mca:
</span><br>
<span class="quotelev2">&gt;&gt; base: components_register: component staged has no register or open 
</span><br>
<span class="quotelev2">&gt;&gt; function [r47:18733] mca: base: components_register: found loaded 
</span><br>
<span class="quotelev2">&gt;&gt; component ppr [r47:18733] mca: base: components_register: component 
</span><br>
<span class="quotelev2">&gt;&gt; ppr register function successful [r47:18733] mca: base:
</span><br>
<span class="quotelev2">&gt;&gt; components_register: found loaded component seq [r47:18733] mca: base:
</span><br>
<span class="quotelev2">&gt;&gt; components_register: component seq register function successful 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] mca: base: components_register: found loaded component 
</span><br>
<span class="quotelev2">&gt;&gt; round_robin [r47:18733] mca: base: components_register: component 
</span><br>
<span class="quotelev2">&gt;&gt; round_robin register function successful [r47:18733] mca: base:
</span><br>
<span class="quotelev2">&gt;&gt; components_register: found loaded component mindist [r47:18733] mca:
</span><br>
<span class="quotelev2">&gt;&gt; base: components_register: component mindist register function 
</span><br>
<span class="quotelev2">&gt;&gt; successful [r47:18733] [[63505,0],0] rmaps:base set policy with core 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] mca: base: components_open: opening rmaps components 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] mca: base: components_open: found loaded component 
</span><br>
<span class="quotelev2">&gt;&gt; resilient [r47:18733] mca: base: components_open: component resilient 
</span><br>
<span class="quotelev2">&gt;&gt; open function successful [r47:18733] mca: base: components_open: 
</span><br>
<span class="quotelev2">&gt;&gt; found loaded component rank_file [r47:18733] mca: base: components_open:
</span><br>
<span class="quotelev2">&gt;&gt; component rank_file open function successful [r47:18733] mca: base:
</span><br>
<span class="quotelev2">&gt;&gt; components_open: found loaded component staged [r47:18733] mca: base:
</span><br>
<span class="quotelev2">&gt;&gt; components_open: component staged open function successful 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733]
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: components_open: found loaded component ppr [r47:18733]
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: components_open: component ppr open function successful 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] mca: base: components_open: found loaded component seq 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] mca: base: components_open: component seq open function 
</span><br>
<span class="quotelev2">&gt;&gt; successful [r47:18733] mca: base: components_open: found loaded 
</span><br>
<span class="quotelev2">&gt;&gt; component round_robin [r47:18733] mca: base: components_open:
</span><br>
<span class="quotelev2">&gt;&gt; component round_robin open function successful [r47:18733] mca: base:
</span><br>
<span class="quotelev2">&gt;&gt; components_open: found loaded component mindist [r47:18733] mca: base:
</span><br>
<span class="quotelev2">&gt;&gt; components_open: component mindist open function successful 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] mca:rmaps:select: checking available component resilient 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] mca:rmaps:select: Querying component [resilient] 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] mca:rmaps:select: checking available component rank_file 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] mca:rmaps:select: Querying component [rank_file] 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] mca:rmaps:select: checking available component staged 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] mca:rmaps:select: Querying component [staged] [r47:18733]
</span><br>
<span class="quotelev2">&gt;&gt; mca:rmaps:select: checking available component ppr [r47:18733]
</span><br>
<span class="quotelev2">&gt;&gt; mca:rmaps:select: Querying component [ppr] [r47:18733]
</span><br>
<span class="quotelev2">&gt;&gt; mca:rmaps:select: checking available component seq [r47:18733]
</span><br>
<span class="quotelev2">&gt;&gt; mca:rmaps:select: Querying component [seq] [r47:18733]
</span><br>
<span class="quotelev2">&gt;&gt; mca:rmaps:select: checking available component round_robin 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733]
</span><br>
<span class="quotelev2">&gt;&gt; mca:rmaps:select: Querying component [round_robin] [r47:18733]
</span><br>
<span class="quotelev2">&gt;&gt; mca:rmaps:select: checking available component mindist [r47:18733]
</span><br>
<span class="quotelev2">&gt;&gt; mca:rmaps:select: Querying component [mindist] [r47:18733]
</span><br>
<span class="quotelev2">&gt;&gt; [[63505,0],0]: Final mapper priorities
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] 	Mapper: ppr Priority: 90
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] 	Mapper: seq Priority: 60
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] 	Mapper: resilient Priority: 40
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] 	Mapper: mindist Priority: 20
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] 	Mapper: round_robin Priority: 10
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] 	Mapper: staged Priority: 5
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] 	Mapper: rank_file Priority: 0
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] mca:rmaps: mapping job [63505,1] [r47:18733] mca:rmaps:
</span><br>
<span class="quotelev2">&gt;&gt; creating new map for job [63505,1] [r47:18733] mca:rmaps: nprocs 2 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] mca:rmaps mapping given - using default [r47:18733]
</span><br>
<span class="quotelev2">&gt;&gt; mca:rmaps:ppr: job [63505,1] not using ppr mapper [r47:18733]
</span><br>
<span class="quotelev2">&gt;&gt; mca:rmaps:seq: job [63505,1] not using seq mapper [r47:18733]
</span><br>
<span class="quotelev2">&gt;&gt; mca:rmaps:resilient: cannot perform initial map of job [63505,1]
</span><br>
<span class="quotelev2">&gt;&gt; - no fault groups
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] mca:rmaps:mindist: job [63505,1] not using mindist mapper 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] mca:rmaps:rr: mapping job [63505,1] [r47:18733] AVAILABLE 
</span><br>
<span class="quotelev2">&gt;&gt; NODES FOR MAPPING:
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733]     node: r47 daemon: 0
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733]     node: r57 daemon: 1
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733]     node: r58 daemon: 2
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733]     node: r59 daemon: 3
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] mca:rmaps:rr: mapping no-span by Core for job [63505,1] 
</span><br>
<span class="quotelev2">&gt;&gt; slots 64 num_procs 2 [r47:18733] mca:rmaps:rr: found 16 Core objects 
</span><br>
<span class="quotelev2">&gt;&gt; on node r47 [r47:18733] mca:rmaps:rr: assigning proc to object 0
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; ---- A request for multiple cpus-per-proc was given, but a directive 
</span><br>
<span class="quotelev2">&gt;&gt; was also give to map to an object level that has less cpus than 
</span><br>
<span class="quotelev2">&gt;&gt; requested ones:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     #cpus-per-proc:  1
</span><br>
<span class="quotelev2">&gt;&gt;     number of cpus:  0
</span><br>
<span class="quotelev2">&gt;&gt;     map-by:          BYCORE:NOOVERSUBSCRIBE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please specify a mapping level that has more cpus, or else let us 
</span><br>
<span class="quotelev2">&gt;&gt; define a default mapping that will allow multiple cpus-per-proc.
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; ---- [r47:18733] mca: base: close: component resilient closed 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] mca: base: close: unloading component resilient 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] mca: base: close: component rank_file closed [r47:18733]
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: close: unloading component rank_file [r47:18733] mca: base:
</span><br>
<span class="quotelev2">&gt;&gt; close: component staged closed [r47:18733] mca: base: close: 
</span><br>
<span class="quotelev2">&gt;&gt; unloading component staged [r47:18733] mca: base: close: component 
</span><br>
<span class="quotelev2">&gt;&gt; ppr closed [r47:18733] mca: base: close: unloading component ppr
</span><br>
[r47:18733] mca:
<br>
<span class="quotelev2">&gt;&gt; base: close: component seq closed [r47:18733] mca: base: close:
</span><br>
<span class="quotelev2">&gt;&gt; unloading component seq [r47:18733] mca: base: close: component 
</span><br>
<span class="quotelev2">&gt;&gt; round_robin closed [r47:18733] mca: base: close: unloading component 
</span><br>
<span class="quotelev2">&gt;&gt; round_robin [r47:18733] mca: base: close: component mindist closed 
</span><br>
<span class="quotelev2">&gt;&gt; [r47:18733] mca: base: close: unloading component mindist
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are both in the same PBS Pro job. And the cpuset definitely has 
</span><br>
<span class="quotelev2">&gt;&gt; all cores available:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ cat /cgroup/cpuset/pbspro/4347646.r-man2/cpuset.cpus
</span><br>
<span class="quotelev2">&gt;&gt; 0-15
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there something here I'm missing?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Ben
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28393.php">http://www.open-mpi.org/community/lists/users/2016/01/28393.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28400.php">http://www.open-mpi.org/community/lists/users/2016/01/28400.php</a>
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
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28402.php">http://www.open-mpi.org/community/lists/users/2016/01/28402.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2016/01/28404.php">http://www.open-mpi.org/community/lists/users/2016/01/28404.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28406.php">Gilles Gouaillardet: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>Previous message:</strong> <a href="28404.php">Gilles Gouaillardet: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>In reply to:</strong> <a href="28404.php">Gilles Gouaillardet: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28406.php">Gilles Gouaillardet: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
<li><strong>Reply:</strong> <a href="28406.php">Gilles Gouaillardet: "Re: [OMPI users] Any changes to rmaps in 1.10.2?"</a>
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
