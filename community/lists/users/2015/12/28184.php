<?
$subject_val = "Re: [OMPI users] performance issue with OpenMPI 1.10.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 20:07:38 2015" -->
<!-- isoreceived="20151218010738" -->
<!-- sent="Thu, 17 Dec 2015 17:07:31 -0800" -->
<!-- isosent="20151218010731" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] performance issue with OpenMPI 1.10.1" -->
<!-- id="15D618D7-5EE9-483E-B99C-4E7B179CDCF4_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="SN2PR0801MB59225D35D95A5203850EEA4ADE00_at_SN2PR0801MB592.namprd08.prod.outlook.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] performance issue with OpenMPI 1.10.1<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-17 20:07:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28185.php">Novosielski, Ryan: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28183.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>In reply to:</strong> <a href="28183.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28185.php">Novosielski, Ryan: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Glad you resolved it! The following MCA param has changed its name:
<br>
<p><span class="quotelev1">&gt; rmaps_base_bycore=1
</span><br>
<p>should now be
<br>
<p>rmaps_base_mapping_policy=core
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Dec 17, 2015, at 5:01 PM, Jingchao Zhang &lt;zhang_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The &quot;mpirun --hetero-nodes -bind-to core -map-by core&quot; resolves the performance issue! 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I reran my test in the *same* job. 
</span><br>
<span class="quotelev1">&gt; SLURM resource request:
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; #SBATCH -N 4
</span><br>
<span class="quotelev1">&gt; #SBATCH -n 64
</span><br>
<span class="quotelev1">&gt; #SBATCH --mem=2g
</span><br>
<span class="quotelev1">&gt; #SBATCH --time=02:00:00
</span><br>
<span class="quotelev1">&gt; #SBATCH --error=job.%J.err
</span><br>
<span class="quotelev1">&gt; #SBATCH --output=job.%J.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; env | grep SLURM:
</span><br>
<span class="quotelev1">&gt; SLURM_CHECKPOINT_IMAGE_DIR=/lustre/work/swanson/jingchao/mpitest/examples/1.10.1/3
</span><br>
<span class="quotelev1">&gt; SLURM_NODELIST=c[3005,3011,3019,3105]
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NAME=submit
</span><br>
<span class="quotelev1">&gt; SLURMD_NODENAME=c3005
</span><br>
<span class="quotelev1">&gt; SLURM_TOPOLOGY_ADDR=s0.s5.c3005
</span><br>
<span class="quotelev1">&gt; SLURM_PRIO_PROCESS=0
</span><br>
<span class="quotelev1">&gt; SLURM_NODE_ALIASES=(null)
</span><br>
<span class="quotelev1">&gt; SLURM_TOPOLOGY_ADDR_PATTERN=switch.switch.node
</span><br>
<span class="quotelev1">&gt; SLURM_NNODES=4
</span><br>
<span class="quotelev1">&gt; SLURM_JOBID=5462202
</span><br>
<span class="quotelev1">&gt; SLURM_NTASKS=64
</span><br>
<span class="quotelev1">&gt; SLURM_TASKS_PER_NODE=34,26,2(x2)
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_ID=5462202
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_USER=jingchao
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_UID=3663
</span><br>
<span class="quotelev1">&gt; SLURM_NODEID=0
</span><br>
<span class="quotelev1">&gt; SLURM_SUBMIT_DIR=/lustre/work/swanson/jingchao/mpitest/examples/1.10.1/3
</span><br>
<span class="quotelev1">&gt; SLURM_TASK_PID=53822
</span><br>
<span class="quotelev1">&gt; SLURM_NPROCS=64
</span><br>
<span class="quotelev1">&gt; SLURM_CPUS_ON_NODE=36
</span><br>
<span class="quotelev1">&gt; SLURM_PROCID=0
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NODELIST=c[3005,3011,3019,3105]
</span><br>
<span class="quotelev1">&gt; SLURM_LOCALID=0
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_CPUS_PER_NODE=36,26,2(x2)
</span><br>
<span class="quotelev1">&gt; SLURM_CLUSTER_NAME=tusker
</span><br>
<span class="quotelev1">&gt; SLURM_GTIDS=0
</span><br>
<span class="quotelev1">&gt; SLURM_SUBMIT_HOST=login.tusker.hcc.unl.edu &lt;<a href="http://login.tusker.hcc.unl.edu/">http://login.tusker.hcc.unl.edu/</a>&gt;
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_PARTITION=batch
</span><br>
<span class="quotelev1">&gt; SLURM_JOB_NUM_NODES=4
</span><br>
<span class="quotelev1">&gt; SLURM_MEM_PER_NODE=2048
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; v-1.8.4 &quot;mpirun&quot; and v-1.10.1 &quot;mpirun --hetero-nodes -bind-to core -map-by core&quot; now give comparable results.  
</span><br>
<span class="quotelev1">&gt; v-1.10.1 &quot;mpirun&quot; still have unstable performance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried adding the following three lines to the &quot;openmpi-mca-params.conf&quot; file
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt; orte_hetero_nodes=1
</span><br>
<span class="quotelev1">&gt; hwloc_base_binding_policy=core
</span><br>
<span class="quotelev1">&gt; rmaps_base_bycore=1
</span><br>
<span class="quotelev1">&gt; &quot;
</span><br>
<span class="quotelev1">&gt; and ran &quot;mpirun lmp_ompi_g++ &lt; in.wall.2d&quot; with v-1.10.1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This works for most tests but some jobs are hanging with this message:
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The following command line options and corresponding MCA parameter have
</span><br>
<span class="quotelev1">&gt; been deprecated and replaced as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Command line options:
</span><br>
<span class="quotelev1">&gt;     Deprecated:  --bycore, -bycore
</span><br>
<span class="quotelev1">&gt;     Replacement: --map-by core
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Equivalent MCA parameter:
</span><br>
<span class="quotelev1">&gt;     Deprecated:  rmaps_base_bycore
</span><br>
<span class="quotelev1">&gt;     Replacement: rmaps_base_mapping_policy=core
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The deprecated forms *will* disappear in a future version of Open MPI.
</span><br>
<span class="quotelev1">&gt; Please update to the new syntax.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did I miss something in the &quot;openmpi-mca-params.conf&quot; file?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dr. Jingchao Zhang
</span><br>
<span class="quotelev1">&gt; Holland Computing Center
</span><br>
<span class="quotelev1">&gt; University of Nebraska-Lincoln
</span><br>
<span class="quotelev1">&gt; 402-472-6400
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: users &lt;users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;&gt; on behalf of Gilles Gouaillardet &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, December 16, 2015 6:11 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] performance issue with OpenMPI 1.10.1
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; binding is somehow involved in this, and i do not believe vader nor openib are involved here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you please run again with the two ompi versions but in the *same* job ?
</span><br>
<span class="quotelev1">&gt; and before invoking mpirun, could you do
</span><br>
<span class="quotelev1">&gt; env | grep SLURM
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; per your slurm request, you are running 64 tasks on 4 nodes.
</span><br>
<span class="quotelev1">&gt; with 1.8.4, you end up running 14+14+14+22 tasks (not ideal, but quite balanced)
</span><br>
<span class="quotelev1">&gt; with 1.10.1, you end up running 2+2+12+48 tasks (very unbalanced)
</span><br>
<span class="quotelev1">&gt; so it is quite unfair to compare these two runs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; also, still in the same job, can you add a third run with 1.10.1 and the following options
</span><br>
<span class="quotelev1">&gt; mpirun --hetero-nodes -bind-to core -map-by core ...
</span><br>
<span class="quotelev1">&gt; and see if it helps
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/17/2015 6:47 AM, Jingchao Zhang wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Those jobs were launched with mpirun. Please see the attached files for the binding report with OMPI_MCA_hwloc_base_report_bindings=1.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here is a snapshot for v-1.10.1:  
</span><br>
<span class="quotelev2">&gt;&gt; [c2613.tusker.hcc.unl.edu &lt;<a href="http://c2613.tusker.hcc.unl.edu/">http://c2613.tusker.hcc.unl.edu/</a>&gt;:12049] MCW rank 0 is not bound (or bound to all available processors)
</span><br>
<span class="quotelev2">&gt;&gt; [c2613.tusker.hcc.unl.edu &lt;<a href="http://c2613.tusker.hcc.unl.edu/">http://c2613.tusker.hcc.unl.edu/</a>&gt;:12049] MCW rank 1 is not bound (or bound to all available processors)
</span><br>
<span class="quotelev2">&gt;&gt; [c2615.tusker.hcc.unl.edu &lt;<a href="http://c2615.tusker.hcc.unl.edu/">http://c2615.tusker.hcc.unl.edu/</a>&gt;:11136] MCW rank 2 is not bound (or bound to all available processors)
</span><br>
<span class="quotelev2">&gt;&gt; [c2615.tusker.hcc.unl.edu &lt;<a href="http://c2615.tusker.hcc.unl.edu/">http://c2615.tusker.hcc.unl.edu/</a>&gt;:11136] MCW rank 3 is not bound (or bound to all available processors)
</span><br>
<span class="quotelev2">&gt;&gt; [c2907.tusker.hcc.unl.edu &lt;<a href="http://c2907.tusker.hcc.unl.edu/">http://c2907.tusker.hcc.unl.edu/</a>&gt;:64131] MCW rank 9 is not bound (or bound to all available processors)
</span><br>
<span class="quotelev2">&gt;&gt; [c2907.tusker.hcc.unl.edu &lt;<a href="http://c2907.tusker.hcc.unl.edu/">http://c2907.tusker.hcc.unl.edu/</a>&gt;:64131] MCW rank 10 is not bound (or bound to all available processors)
</span><br>
<span class="quotelev2">&gt;&gt; [c2907.tusker.hcc.unl.edu &lt;<a href="http://c2907.tusker.hcc.unl.edu/">http://c2907.tusker.hcc.unl.edu/</a>&gt;:64131] MCW rank 11 is not bound (or bound to all available processors)
</span><br>
<span class="quotelev2">&gt;&gt; [c2907.tusker.hcc.unl.edu &lt;<a href="http://c2907.tusker.hcc.unl.edu/">http://c2907.tusker.hcc.unl.edu/</a>&gt;:64131] MCW rank 12 is not bound (or bound to all available processors)
</span><br>
<span class="quotelev2">&gt;&gt; [c2907.tusker.hcc.unl.edu &lt;<a href="http://c2907.tusker.hcc.unl.edu/">http://c2907.tusker.hcc.unl.edu/</a>&gt;:64131] MCW rank 13 is not bound (or bound to all available processors)
</span><br>
<span class="quotelev2">&gt;&gt; [c2907.tusker.hcc.unl.edu &lt;<a href="http://c2907.tusker.hcc.unl.edu/">http://c2907.tusker.hcc.unl.edu/</a>&gt;:64131] MCW rank 14 is not bound (or bound to all available processors)
</span><br>
<span class="quotelev2">&gt;&gt; [c2907.tusker.hcc.unl.edu &lt;<a href="http://c2907.tusker.hcc.unl.edu/">http://c2907.tusker.hcc.unl.edu/</a>&gt;:64131] MCW rank 15 is not bound (or bound to all available processors)
</span><br>
<span class="quotelev2">&gt;&gt; [c2907.tusker.hcc.unl.edu &lt;<a href="http://c2907.tusker.hcc.unl.edu/">http://c2907.tusker.hcc.unl.edu/</a>&gt;:64131] MCW rank 4 is not bound (or bound to all available processors)
</span><br>
<span class="quotelev2">&gt;&gt; [c2907.tusker.hcc.unl.edu &lt;<a href="http://c2907.tusker.hcc.unl.edu/">http://c2907.tusker.hcc.unl.edu/</a>&gt;:64131] MCW rank 5 is not bound (or bound to all available processors)
</span><br>
<span class="quotelev2">&gt;&gt; [c2907.tusker.hcc.unl.edu &lt;<a href="http://c2907.tusker.hcc.unl.edu/">http://c2907.tusker.hcc.unl.edu/</a>&gt;:64131] MCW rank 6 is not bound (or bound to all available processors)
</span><br>
<span class="quotelev2">&gt;&gt; [c2907.tusker.hcc.unl.edu &lt;<a href="http://c2907.tusker.hcc.unl.edu/">http://c2907.tusker.hcc.unl.edu/</a>&gt;:64131] MCW rank 7 is not bound (or bound to all available processors)
</span><br>
<span class="quotelev2">&gt;&gt; [c2907.tusker.hcc.unl.edu &lt;<a href="http://c2907.tusker.hcc.unl.edu/">http://c2907.tusker.hcc.unl.edu/</a>&gt;:64131] MCW rank 8 is not bound (or bound to all available processors)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The report for 1.8.4 doesn't have this issue. Any suggestions to resolve it? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Jingchao
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dr. Jingchao Zhang
</span><br>
<span class="quotelev2">&gt;&gt; Holland Computing Center
</span><br>
<span class="quotelev2">&gt;&gt; University of Nebraska-Lincoln
</span><br>
<span class="quotelev2">&gt;&gt; 402-472-6400
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: users &lt;users-bounces_at_[hidden]&gt; &lt;mailto:users-bounces_at_[hidden]&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden]&gt; &lt;mailto:rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Wednesday, December 16, 2015 1:52 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] performance issue with OpenMPI 1.10.1
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; When I see such issues, I immediately start to think about binding patterns. How are these jobs being launched - with mpirun or srun? What do you see if you set OMPI_MCA_hwloc_base_report_bindings=1 in your environment?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 16, 2015, at 11:15 AM, Jingchao Zhang &lt;zhang_at_[hidden] &lt;mailto:zhang_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Gilles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The LAMMPS jobs for both versions are pure MPI. In the SLURM script, 64 cores are requested from 4 nodes. So it's 64 MPI tasks and not necessarily evenly distributed across all the nodes. (each node is equipped with 64 cores.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can reproduce the performance issue using the LAMMPS example &quot;VISCOSITY/in.wall.2d&quot;. The run time difference is a jaw-dropping 20 seconds (v-1.8.4) vs. 45 mins (v-1.10.1). Among the multiple tests, I do have one job using v-1.10.1 finished in 20 seconds. Again, unstable performance. We also tested other software packages such as cp2k, VASP and Quantum Espresso, and they all have similar issues. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is the decomposed MPI time in the LAMMPS job outputs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v-1.8.4 (Job execution time: 00:00:20)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Loop time of 8.94962 on 64 procs for 50000 steps with 1020 atoms
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pair  time (%) = 0.270092 (3.01791)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Neigh time (%) = 0.0842548 (0.941435)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Comm  time (%) = 3.3474 (37.4027)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Outpt time (%) = 0.00901061 (0.100682)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Other time (%) = 5.23886 (58.5373)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v-1.10.1 (Job execution time: 00:45:50)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Loop time of 2003.07 on 64 procs for 50000 steps with 1020 atoms
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pair  time (%) = 0.346776 (0.0173122)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Neigh time (%) = 0.18047 (0.00900966)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Comm  time (%) = 535.836 (26.7508)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Outpt time (%) = 1.68608 (0.0841748)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Other time (%) = 1465.02 (73.1387)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I wonder if you can share your config.log and ompi_info with your v-1.10.1 compilation. Hopefully we can find a solution by comparing the configuration differences. We had been playing with the cma and vader parameters but with no luck. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jingchao
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dr. Jingchao Zhang
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Holland Computing Center
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of Nebraska-Lincoln
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 402-472-6400
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users &lt;users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;&gt; on behalf of Gilles Gouaillardet &lt; &lt;mailto:gilles_at_[hidden]&gt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Tuesday, December 15, 2015 12:11 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] performance issue with OpenMPI 1.10.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; First, can you check how many MPI tasks and OpenMP threads are used with both ompi versions ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /* it should be 16 MPI tasks x no OpenMP threads */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can you also post both MPI task timing breakdown (from the output)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i tried a simple test with the VISCOSITY/in.wall.2d and i did not observe any performance difference.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can you reproduce the performance drop with an input file from the examples directory ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if not, can you post your in.snr input file ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 12/15/2015 7:18 AM, Jingchao Zhang wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We installed the latest release of OpenMPI 1.10.1 on our Linux cluster and find it having some performance issues. We tested the OpenMPI performance against the MD simulation package LAMMPS ( &lt;<a href="http://lammps.sandia.gov/">http://lammps.sandia.gov/</a>&gt;<a href="http://lammps.sandia.gov/">http://lammps.sandia.gov/</a> &lt;<a href="http://lammps.sandia.gov/">http://lammps.sandia.gov/</a>&gt;). Compared to our previous installation of version 1.8.4, the 1.10.1 is nearly three times slower when running on multiple nodes. Run time across four computing nodes have the following results:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  	1.10.1	1.8.4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1	0:09:39	0:09:21
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2	0:50:29	0:09:23
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3	0:50:29	0:09:28
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4	0:13:38	0:09:27
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 5	0:10:43	0:09:34
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ave	0:27:00	0:09:27
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Unit is hour:minute:second. Five tests are done for each case and the averaged run time is listed in the last row. Tests on single node have the same run time results for both 1.10.1 and 1.8.4. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We use SLURM as our job scheduler and the submit script for the LAMMPS job is as below:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;#!/bin/sh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #SBATCH -N 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #SBATCH -n 64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #SBATCH --mem=2g
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #SBATCH --time=00:50:00
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #SBATCH --error=job.%J.err
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #SBATCH --output=job.%J.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; module load compiler/gcc/4.7
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export PATH=$PATH:/util/opt/openmpi/1.10.1/gcc/4.7/bin
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/util/opt/openmpi/1.10.1/gcc/4.7/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export INCLUDE=$INCLUDE:/util/opt/openmpi/1.10.1/gcc/4.7/include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun lmp_ompi_g++ &lt; in.snr&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The &quot;lmp_ompi_g++&quot; binary is compiled against gcc/4.7 and openmpi/1.10.1. The compiler flags and MPI information can be found in the attachments. The problem here as you can see is the unstable performance for v-1.10.1. I wonder if this is a configuration issue at the compilation stage. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Below are some information I gathered according to the &quot;Getting Help&quot; page. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Version of Open MPI that we are using:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI version: 1.10.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI repo revision: v1.10.0-178-gb80f802
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI release date: Nov 03, 2015
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;config.log&quot; and &quot;ompi_info --all&quot; information are enclosed in the attachment.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Network information:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1. OpenFabrics version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mellanox/vendor 2.4-1.0.4 Download: &lt;<a href="http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz">http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz</a>&gt;&lt;<a href="http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz">http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz</a>&gt; &lt;<a href="http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz">http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2. Linux version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Scientific Linux release 6.6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2.6.32-504.23.4.el6.x86_64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3. subnet manager
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OpenSM
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4. ibv_devinfo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hca_id: mlx4_0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         transport:                      InfiniBand (0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         fw_ver:                         2.9.1000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         node_guid:                      0002:c903:0050:6190
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         sys_image_guid:                 0002:c903:0050:6193
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         vendor_id:                      0x02c9
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         vendor_part_id:                 26428
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         hw_ver:                         0xB0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         board_id:                       MT_0D90110009
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         phys_port_cnt:                  1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                 port:   1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         max_mtu:                4096 (5)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         active_mtu:             4096 (5)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         sm_lid:                 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         port_lid:               34
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                         link_layer:             InfiniBand
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 5. ifconfig
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; em1       Link encap:Ethernet  HWaddr D0:67:E5:F9:20:76
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           inet addr:10.138.25.3  Bcast:10.138.255.255  Mask:255.255.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           inet6 addr: fe80::d267:e5ff:fef9:2076/64 Scope:Link
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           RX packets:28977969 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           TX packets:67069501 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           RX bytes:3588666680 (3.3 GiB)  TX bytes:8145183622 (7.5 GiB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ifconfig uses the ioctl access method to get the full address information, which limits hardware addresses to 8 bytes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Because Infiniband address has 20 bytes, only the first 8 bytes are displayed correctly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ifconfig is obsolete! For replacement check ip.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ib0       Link encap:InfiniBand  HWaddr A0:00:02:20:FE:80:00:00:00:00:00:00:00:00:00:00:00:00:00:00
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           inet addr:10.137.25.3  Bcast:10.137.255.255  Mask:255.255.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           inet6 addr: fe80::202:c903:50:6191/64 Scope:Link
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           RX packets:1776 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           TX packets:418 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           collisions:0 txqueuelen:1024
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           RX bytes:131571 (128.4 KiB)  TX bytes:81418 (79.5 KiB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           UP LOOPBACK RUNNING  MTU:65536  Metric:1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           RX packets:40310687 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           TX packets:40310687 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           RX bytes:45601859442 (42.4 GiB)  TX bytes:45601859442 (42.4 GiB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 6. ulimit -l
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; unlimited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please kindly let me know if more information are needed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jingchao
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dr. Jingchao Zhang
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Holland Computing Center
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; University of Nebraska-Lincoln
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 402-472-6400
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28160.php">http://www.open-mpi.org/community/lists/users/2015/12/28160.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/12/28160.php">http://www.open-mpi.org/community/lists/users/2015/12/28160.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription:  &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:  &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/12/28166.php">http://www.open-mpi.org/community/lists/users/2015/12/28166.php</a>&gt;<a href="http://www.open-mpi.org/community/lists/users/2015/12/28166.php">http://www.open-mpi.org/community/lists/users/2015/12/28166.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/12/28166.php">http://www.open-mpi.org/community/lists/users/2015/12/28166.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28169.php">http://www.open-mpi.org/community/lists/users/2015/12/28169.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/12/28169.php">http://www.open-mpi.org/community/lists/users/2015/12/28169.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28183.php">http://www.open-mpi.org/community/lists/users/2015/12/28183.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/12/28183.php">http://www.open-mpi.org/community/lists/users/2015/12/28183.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28184/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28185.php">Novosielski, Ryan: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28183.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>In reply to:</strong> <a href="28183.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28185.php">Novosielski, Ryan: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
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
