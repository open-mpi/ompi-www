<?
$subject_val = "Re: [OMPI users] performance issue with OpenMPI 1.10.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 19:11:26 2015" -->
<!-- isoreceived="20151217001126" -->
<!-- sent="Thu, 17 Dec 2015 09:11:18 +0900" -->
<!-- isosent="20151217001118" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] performance issue with OpenMPI 1.10.1" -->
<!-- id="5671FDA6.1060904_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="SN2PR0801MB5920AC61E4987D030E1C324ADEF0_at_SN2PR0801MB592.namprd08.prod.outlook.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-16 19:11:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28172.php">Udayanga Wickramasinghe: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<li><strong>Previous message:</strong> <a href="28170.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<li><strong>In reply to:</strong> <a href="28169.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28183.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Reply:</strong> <a href="28183.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
binding is somehow involved in this, and i do not believe vader nor 
<br>
openib are involved here.
<br>
<p>Could you please run again with the two ompi versions but in the *same* 
<br>
job ?
<br>
and before invoking mpirun, could you do
<br>
env | grep SLURM
<br>
<p>per your slurm request, you are running 64 tasks on 4 nodes.
<br>
with 1.8.4, you end up running 14+14+14+22 tasks (not ideal, but quite 
<br>
balanced)
<br>
with 1.10.1, you end up running 2+2+12+48 tasks (very unbalanced)
<br>
so it is quite unfair to compare these two runs.
<br>
<p>also, still in the same job, can you add a third run with 1.10.1 and the 
<br>
following options
<br>
mpirun --hetero-nodes -bind-to core -map-by core ...
<br>
and see if it helps
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p><p><p>On 12/17/2015 6:47 AM, Jingchao Zhang wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Those jobs were launched with mpirun. Please see the attached files 
</span><br>
<span class="quotelev1">&gt; for the binding report with OMPI_MCA_hwloc_base_report_bindings=1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is a snapshot for v-1.10.1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [c2613.tusker.hcc.unl.edu:12049] MCW rank 0 is not bound (or bound to 
</span><br>
<span class="quotelev1">&gt; all available processors)
</span><br>
<span class="quotelev1">&gt; [c2613.tusker.hcc.unl.edu:12049] MCW rank 1 is not bound (or bound to 
</span><br>
<span class="quotelev1">&gt; all available processors)
</span><br>
<span class="quotelev1">&gt; [c2615.tusker.hcc.unl.edu:11136] MCW rank 2 is not bound (or bound to 
</span><br>
<span class="quotelev1">&gt; all available processors)
</span><br>
<span class="quotelev1">&gt; [c2615.tusker.hcc.unl.edu:11136] MCW rank 3 is not bound (or bound to 
</span><br>
<span class="quotelev1">&gt; all available processors)
</span><br>
<span class="quotelev1">&gt; [c2907.tusker.hcc.unl.edu:64131] MCW rank 9 is not bound (or bound to 
</span><br>
<span class="quotelev1">&gt; all available processors)
</span><br>
<span class="quotelev1">&gt; [c2907.tusker.hcc.unl.edu:64131] MCW rank 10 is not bound (or bound to 
</span><br>
<span class="quotelev1">&gt; all available processors)
</span><br>
<span class="quotelev1">&gt; [c2907.tusker.hcc.unl.edu:64131] MCW rank 11 is not bound (or bound to 
</span><br>
<span class="quotelev1">&gt; all available processors)
</span><br>
<span class="quotelev1">&gt; [c2907.tusker.hcc.unl.edu:64131] MCW rank 12 is not bound (or bound to 
</span><br>
<span class="quotelev1">&gt; all available processors)
</span><br>
<span class="quotelev1">&gt; [c2907.tusker.hcc.unl.edu:64131] MCW rank 13 is not bound (or bound to 
</span><br>
<span class="quotelev1">&gt; all available processors)
</span><br>
<span class="quotelev1">&gt; [c2907.tusker.hcc.unl.edu:64131] MCW rank 14 is not bound (or bound to 
</span><br>
<span class="quotelev1">&gt; all available processors)
</span><br>
<span class="quotelev1">&gt; [c2907.tusker.hcc.unl.edu:64131] MCW rank 15 is not bound (or bound to 
</span><br>
<span class="quotelev1">&gt; all available processors)
</span><br>
<span class="quotelev1">&gt; [c2907.tusker.hcc.unl.edu:64131] MCW rank 4 is not bound (or bound to 
</span><br>
<span class="quotelev1">&gt; all available processors)
</span><br>
<span class="quotelev1">&gt; [c2907.tusker.hcc.unl.edu:64131] MCW rank 5 is not bound (or bound to 
</span><br>
<span class="quotelev1">&gt; all available processors)
</span><br>
<span class="quotelev1">&gt; [c2907.tusker.hcc.unl.edu:64131] MCW rank 6 is not bound (or bound to 
</span><br>
<span class="quotelev1">&gt; all available processors)
</span><br>
<span class="quotelev1">&gt; [c2907.tusker.hcc.unl.edu:64131] MCW rank 7 is not bound (or bound to 
</span><br>
<span class="quotelev1">&gt; all available processors)
</span><br>
<span class="quotelev1">&gt; [c2907.tusker.hcc.unl.edu:64131] MCW rank 8 is not bound (or bound to 
</span><br>
<span class="quotelev1">&gt; all available processors)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The report for 1.8.4 doesn't have this issue. Any 
</span><br>
<span class="quotelev1">&gt; suggestions to resolve it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jingchao
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users &lt;users-bounces_at_[hidden]&gt; on behalf of Ralph Castain 
</span><br>
<span class="quotelev1">&gt; &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, December 16, 2015 1:52 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] performance issue with OpenMPI 1.10.1
</span><br>
<span class="quotelev1">&gt; When I see such issues, I immediately start to think about binding 
</span><br>
<span class="quotelev1">&gt; patterns. How are these jobs being launched - with mpirun or srun? 
</span><br>
<span class="quotelev1">&gt; What do you see if you set OMPI_MCA_hwloc_base_report_bindings=1 in 
</span><br>
<span class="quotelev1">&gt; your environment?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 16, 2015, at 11:15 AM, Jingchao Zhang &lt;zhang_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:zhang_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Gilles,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The LAMMPS jobs for both versions are pure MPI. In the SLURM script, 
</span><br>
<span class="quotelev2">&gt;&gt; 64 cores are requested from 4 nodes. So it's 64 MPI tasks and not 
</span><br>
<span class="quotelev2">&gt;&gt; necessarily evenly distributed across all the nodes. (each node is 
</span><br>
<span class="quotelev2">&gt;&gt; equipped with 64 cores.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can reproduce the performance issue using the LAMMPS example 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;VISCOSITY/in.wall.2d&quot;. The run time difference is a jaw-dropping 20 
</span><br>
<span class="quotelev2">&gt;&gt; seconds (v-1.8.4) vs. 45 mins (v-1.10.1). Among the multiple tests, I 
</span><br>
<span class="quotelev2">&gt;&gt; do have one job using v-1.10.1 finished in 20 seconds. Again, 
</span><br>
<span class="quotelev2">&gt;&gt; unstable performance. We also tested other software packages such as 
</span><br>
<span class="quotelev2">&gt;&gt; cp2k, VASP and Quantum Espresso, and they all have similar issues.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the decomposed MPI time in the LAMMPS job outputs.
</span><br>
<span class="quotelev2">&gt;&gt; v-1.8.4 (Job execution time: 00:00:20)
</span><br>
<span class="quotelev2">&gt;&gt; Loop time of 8.94962 on 64 procs for 50000 steps with 1020 atoms
</span><br>
<span class="quotelev2">&gt;&gt; Pair  time (%) = 0.270092 (3.01791)
</span><br>
<span class="quotelev2">&gt;&gt; Neigh time (%) = 0.0842548 (0.941435)
</span><br>
<span class="quotelev2">&gt;&gt; Comm  time (%) = 3.3474 (37.4027)
</span><br>
<span class="quotelev2">&gt;&gt; Outpt time (%) = 0.00901061 (0.100682)
</span><br>
<span class="quotelev2">&gt;&gt; Other time (%) = 5.23886 (58.5373)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; v-1.10.1 (Job execution time: 00:45:50)
</span><br>
<span class="quotelev2">&gt;&gt; Loop time of 2003.07 on 64 procs for 50000 steps with 1020 atoms
</span><br>
<span class="quotelev2">&gt;&gt; Pair  time (%) = 0.346776 (0.0173122)
</span><br>
<span class="quotelev2">&gt;&gt; Neigh time (%) = 0.18047 (0.00900966)
</span><br>
<span class="quotelev2">&gt;&gt; Comm  time (%) = 535.836 (26.7508)
</span><br>
<span class="quotelev2">&gt;&gt; Outpt time (%) = 1.68608 (0.0841748)
</span><br>
<span class="quotelev2">&gt;&gt; Other time (%) = 1465.02 (73.1387)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if you can share your config.log and ompi_info with your 
</span><br>
<span class="quotelev2">&gt;&gt; v-1.10.1 compilation. Hopefully we can find a solution by 
</span><br>
<span class="quotelev2">&gt;&gt; comparing the configuration differences. We had been playing with the 
</span><br>
<span class="quotelev2">&gt;&gt; cma and vader parameters but with no luck.
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
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; *From:*users &lt;users-bounces_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:users-bounces_at_[hidden]&gt;&gt; on behalf of Gilles Gouaillardet 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Sent:*Tuesday, December 15, 2015 12:11 AM
</span><br>
<span class="quotelev2">&gt;&gt; *To:*Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; *Subject:*Re: [OMPI users] performance issue with OpenMPI 1.10.1
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First, can you check how many MPI tasks and OpenMP threads are used 
</span><br>
<span class="quotelev2">&gt;&gt; with both ompi versions ?
</span><br>
<span class="quotelev2">&gt;&gt; /* it should be 16 MPI tasks x no OpenMP threads */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; can you also post both MPI task timing breakdown (from the output)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i tried a simple test with the VISCOSITY/in.wall.2d and i did not 
</span><br>
<span class="quotelev2">&gt;&gt; observe any performance difference.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; can you reproduce the performance drop with an input file from the 
</span><br>
<span class="quotelev2">&gt;&gt; examples directory ?
</span><br>
<span class="quotelev2">&gt;&gt; if not, can you post your in.snr input file ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 12/15/2015 7:18 AM, Jingchao Zhang wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We installed the latest release of OpenMPI 1.10.1 on our Linux 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cluster and find it having some performance issues. We tested the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI performance against the MD simulation package LAMMPS 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (<a href="http://lammps.sandia.gov/">http://lammps.sandia.gov/</a>). Compared to our previous installation 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of version 1.8.4, the 1.10.1 is nearly three times slower when 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; running on multiple nodes. Run time across four computing nodes have 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the following results:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	1.10.1 	1.8.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 	0:09:39 	0:09:21
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 	0:50:29 	0:09:23
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3 	0:50:29 	0:09:28
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4 	0:13:38 	0:09:27
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5 	0:10:43 	0:09:34
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ave 	0:27:00 	0:09:27
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unit is hour:minute:second. Five tests are done for each case and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the averaged run time is listed in the last row. Tests on single 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node have the same run time results for both 1.10.1 and 1.8.4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We use SLURM as our job scheduler and the submit script for the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LAMMPS job is as below:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;#!/bin/sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #SBATCH -N 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #SBATCH -n 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #SBATCH --mem=2g
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #SBATCH --time=00:50:00
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #SBATCH --error=job.%J.err
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #SBATCH --output=job.%J.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; module load compiler/gcc/4.7
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export PATH=$PATH:/util/opt/openmpi/1.10.1/gcc/4.7/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/util/opt/openmpi/1.10.1/gcc/4.7/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export INCLUDE=$INCLUDE:/util/opt/openmpi/1.10.1/gcc/4.7/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun lmp_ompi_g++ &lt; in.snr&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The &quot;lmp_ompi_g++&quot; binary is compiled against gcc/4.7 and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi/1.10.1. The compiler flags and MPI information can be found 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the attachments. The problem here as you can see is the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unstable performance for v-1.10.1. I wonder if this is a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configuration issue at the compilation stage.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Below are some information I gathered according to the &quot;Getting 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Help&quot; page.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Version of Open MPI that we are using:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI version: 1.10.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI repo revision: v1.10.0-178-gb80f802
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI release date: Nov 03, 2015
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;config.log&quot; and &quot;ompi_info --all&quot; information are enclosed in the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; attachment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Network information:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. OpenFabrics version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mellanox/vendor 2.4-1.0.4 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Download:&lt;<a href="http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz">http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Linux version
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Scientific Linux release 6.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2.6.32-504.23.4.el6.x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3. subnet manager
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenSM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4. ibv_devinfo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hca_id: mlx4_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         transport:                InfiniBand (0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         fw_ver:                 2.9.1000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         node_guid:                0002:c903:0050:6190
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         sys_image_guid:                 0002:c903:0050:6193
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         vendor_id:                0x02c9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         vendor_part_id:                 26428
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         hw_ver:                 0xB0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         board_id:                 MT_0D90110009
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         phys_port_cnt:                1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 port: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; max_mtu:                4096 (5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; active_mtu:             4096 (5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sm_lid:                 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; port_lid:               34
</span><br>
<span class="quotelev3">&gt;&gt;&gt; port_lmc:               0x00
</span><br>
<span class="quotelev3">&gt;&gt;&gt; link_layer:             InfiniBand
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5. ifconfig
</span><br>
<span class="quotelev3">&gt;&gt;&gt; em1       Link encap:Ethernet  HWaddr D0:67:E5:F9:20:76
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           inet addr:10.138.25.3  Bcast:10.138.255.255  Mask:255.255.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           inet6 addr: fe80::d267:e5ff:fef9:2076/64 Scope:Link
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           RX packets:28977969 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           TX packets:67069501 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           RX bytes:3588666680 (3.3 GiB)  TX bytes:8145183622 (7.5 GiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ifconfig uses the ioctl access method to get the full address 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information, which limits hardware addresses to 8 bytes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Because Infiniband address has 20 bytes, only the first 8 bytes are 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; displayed correctly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ifconfig is obsolete! For replacement check ip.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ib0       Link encap:InfiniBand  HWaddr 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A0:00:02:20:FE:80:00:00:00:00:00:00:00:00:00:00:00:00:00:00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           inet addr:10.137.25.3  Bcast:10.137.255.255  Mask:255.255.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           inet6 addr: fe80::202:c903:50:6191/64 Scope:Link
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           RX packets:1776 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           TX packets:418 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           collisions:0 txqueuelen:1024
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           RX bytes:131571 (128.4 KiB)  TX bytes:81418 (79.5 KiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           UP LOOPBACK RUNNING  MTU:65536  Metric:1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           RX packets:40310687 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           TX packets:40310687 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           RX bytes:45601859442 (42.4 GiB)  TX bytes:45601859442 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (42.4 GiB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6. ulimit -l
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please kindly let me know if more information are needed.
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
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:<a href="http://www.open-mpi.org/community/lists/users/2015/12/28160.php">http://www.open-mpi.org/community/lists/users/2015/12/28160.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this 
</span><br>
<span class="quotelev2">&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2015/12/28166.php">http://www.open-mpi.org/community/lists/users/2015/12/28166.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28169.php">http://www.open-mpi.org/community/lists/users/2015/12/28169.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28171/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28172.php">Udayanga Wickramasinghe: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<li><strong>Previous message:</strong> <a href="28170.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<li><strong>In reply to:</strong> <a href="28169.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28183.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Reply:</strong> <a href="28183.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
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
