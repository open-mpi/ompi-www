<?
$subject_val = "Re: [OMPI users] performance issue with OpenMPI 1.10.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 20:01:34 2015" -->
<!-- isoreceived="20151218010134" -->
<!-- sent="Fri, 18 Dec 2015 01:01:28 +0000" -->
<!-- isosent="20151218010128" -->
<!-- name="Jingchao Zhang" -->
<!-- email="zhang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] performance issue with OpenMPI 1.10.1" -->
<!-- id="SN2PR0801MB59225D35D95A5203850EEA4ADE00_at_SN2PR0801MB592.namprd08.prod.outlook.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5671FDA6.1060904_at_rist.or.jp" -->
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
<strong>From:</strong> Jingchao Zhang (<em>zhang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-17 20:01:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28184.php">Ralph Castain: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28182.php">Gilles Gouaillardet: "Re: [OMPI users] Need help resolving &quot;error obtaining device context for mlx4_0&quot;"</a>
<li><strong>In reply to:</strong> <a href="28171.php">Gilles Gouaillardet: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28184.php">Ralph Castain: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Reply:</strong> <a href="28184.php">Ralph Castain: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Reply:</strong> <a href="28185.php">Novosielski, Ryan: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The &quot;mpirun --hetero-nodes -bind-to core -map-by core&quot; resolves the performance issue!
<br>
<p><p>I reran my test in the *same* job.
<br>
<p>SLURM resource request:
<br>
<p>#!/bin/sh
<br>
#SBATCH -N 4
<br>
#SBATCH -n 64
<br>
#SBATCH --mem=2g
<br>
#SBATCH --time=02:00:00
<br>
#SBATCH --error=job.%J.err
<br>
#SBATCH --output=job.%J.out
<br>
<p><p>env | grep SLURM:
<br>
<p>SLURM_CHECKPOINT_IMAGE_DIR=/lustre/work/swanson/jingchao/mpitest/examples/1.10.1/3
<br>
SLURM_NODELIST=c[3005,3011,3019,3105]
<br>
SLURM_JOB_NAME=submit
<br>
SLURMD_NODENAME=c3005
<br>
SLURM_TOPOLOGY_ADDR=s0.s5.c3005
<br>
SLURM_PRIO_PROCESS=0
<br>
SLURM_NODE_ALIASES=(null)
<br>
SLURM_TOPOLOGY_ADDR_PATTERN=switch.switch.node
<br>
SLURM_NNODES=4
<br>
SLURM_JOBID=5462202
<br>
SLURM_NTASKS=64
<br>
SLURM_TASKS_PER_NODE=34,26,2(x2)
<br>
SLURM_JOB_ID=5462202
<br>
SLURM_JOB_USER=jingchao
<br>
SLURM_JOB_UID=3663
<br>
SLURM_NODEID=0
<br>
SLURM_SUBMIT_DIR=/lustre/work/swanson/jingchao/mpitest/examples/1.10.1/3
<br>
SLURM_TASK_PID=53822
<br>
SLURM_NPROCS=64
<br>
SLURM_CPUS_ON_NODE=36
<br>
SLURM_PROCID=0
<br>
SLURM_JOB_NODELIST=c[3005,3011,3019,3105]
<br>
SLURM_LOCALID=0
<br>
SLURM_JOB_CPUS_PER_NODE=36,26,2(x2)
<br>
SLURM_CLUSTER_NAME=tusker
<br>
SLURM_GTIDS=0
<br>
SLURM_SUBMIT_HOST=login.tusker.hcc.unl.edu
<br>
SLURM_JOB_PARTITION=batch
<br>
SLURM_JOB_NUM_NODES=4
<br>
SLURM_MEM_PER_NODE=2048
<br>
<p>v-1.8.4 &quot;mpirun&quot; and v-1.10.1 &quot;mpirun --hetero-nodes -bind-to core -map-by core&quot; now give comparable results.
<br>
<p>v-1.10.1 &quot;mpirun&quot; still have unstable performance.
<br>
<p><p><p>I tried adding the following three lines to the &quot;openmpi-mca-params.conf&quot; file
<br>
<p>&quot;
<br>
<p>orte_hetero_nodes=1
<br>
hwloc_base_binding_policy=core
<br>
rmaps_base_bycore=1
<br>
&quot;
<br>
<p>and ran &quot;mpirun lmp_ompi_g++ &lt; in.wall.2d&quot; with v-1.10.1.
<br>
<p><p>This works for most tests but some jobs are hanging with this message:
<br>
<p>--------------------------------------------------------------------------
<br>
The following command line options and corresponding MCA parameter have
<br>
been deprecated and replaced as follows:
<br>
<p>&nbsp;&nbsp;Command line options:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Deprecated:  --bycore, -bycore
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Replacement: --map-by core
<br>
<p>&nbsp;&nbsp;Equivalent MCA parameter:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Deprecated:  rmaps_base_bycore
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Replacement: rmaps_base_mapping_policy=core
<br>
<p>The deprecated forms *will* disappear in a future version of Open MPI.
<br>
Please update to the new syntax.
<br>
--------------------------------------------------------------------------
<br>
<p>Did I miss something in the &quot;openmpi-mca-params.conf&quot; file?
<br>
<p><p>Thanks,
<br>
<p><p>Dr. Jingchao Zhang
<br>
Holland Computing Center
<br>
University of Nebraska-Lincoln
<br>
402-472-6400
<br>
<p><p>________________________________
<br>
From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
Sent: Wednesday, December 16, 2015 6:11 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] performance issue with OpenMPI 1.10.1
<br>
<p>binding is somehow involved in this, and i do not believe vader nor openib are involved here.
<br>
<p>Could you please run again with the two ompi versions but in the *same* job ?
<br>
and before invoking mpirun, could you do
<br>
env | grep SLURM
<br>
<p>per your slurm request, you are running 64 tasks on 4 nodes.
<br>
with 1.8.4, you end up running 14+14+14+22 tasks (not ideal, but quite balanced)
<br>
with 1.10.1, you end up running 2+2+12+48 tasks (very unbalanced)
<br>
so it is quite unfair to compare these two runs.
<br>
<p>also, still in the same job, can you add a third run with 1.10.1 and the following options
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
<p>Those jobs were launched with mpirun. Please see the attached files for the binding report with OMPI_MCA_hwloc_base_report_bindings=1.
<br>
<p><p>Here is a snapshot for v-1.10.1:
<br>
<p>[c2613.tusker.hcc.unl.edu:12049] MCW rank 0 is not bound (or bound to all available processors)
<br>
[c2613.tusker.hcc.unl.edu:12049] MCW rank 1 is not bound (or bound to all available processors)
<br>
[c2615.tusker.hcc.unl.edu:11136] MCW rank 2 is not bound (or bound to all available processors)
<br>
[c2615.tusker.hcc.unl.edu:11136] MCW rank 3 is not bound (or bound to all available processors)
<br>
[c2907.tusker.hcc.unl.edu:64131] MCW rank 9 is not bound (or bound to all available processors)
<br>
[c2907.tusker.hcc.unl.edu:64131] MCW rank 10 is not bound (or bound to all available processors)
<br>
[c2907.tusker.hcc.unl.edu:64131] MCW rank 11 is not bound (or bound to all available processors)
<br>
[c2907.tusker.hcc.unl.edu:64131] MCW rank 12 is not bound (or bound to all available processors)
<br>
[c2907.tusker.hcc.unl.edu:64131] MCW rank 13 is not bound (or bound to all available processors)
<br>
[c2907.tusker.hcc.unl.edu:64131] MCW rank 14 is not bound (or bound to all available processors)
<br>
[c2907.tusker.hcc.unl.edu:64131] MCW rank 15 is not bound (or bound to all available processors)
<br>
[c2907.tusker.hcc.unl.edu:64131] MCW rank 4 is not bound (or bound to all available processors)
<br>
[c2907.tusker.hcc.unl.edu:64131] MCW rank 5 is not bound (or bound to all available processors)
<br>
[c2907.tusker.hcc.unl.edu:64131] MCW rank 6 is not bound (or bound to all available processors)
<br>
[c2907.tusker.hcc.unl.edu:64131] MCW rank 7 is not bound (or bound to all available processors)
<br>
[c2907.tusker.hcc.unl.edu:64131] MCW rank 8 is not bound (or bound to all available processors)
<br>
<p>The report for 1.8.4 doesn't have this issue. Any suggestions to resolve it?
<br>
<p><p>Thanks,
<br>
<p>Jingchao
<br>
<p><p>Dr. Jingchao Zhang
<br>
Holland Computing Center
<br>
University of Nebraska-Lincoln
<br>
402-472-6400
<br>
<p><p>________________________________
<br>
From: users &lt;users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&gt;
<br>
Sent: Wednesday, December 16, 2015 1:52 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] performance issue with OpenMPI 1.10.1
<br>
<p>When I see such issues, I immediately start to think about binding patterns. How are these jobs being launched - with mpirun or srun? What do you see if you set OMPI_MCA_hwloc_base_report_bindings=1 in your environment?
<br>
<p>On Dec 16, 2015, at 11:15 AM, Jingchao Zhang &lt;zhang_at_[hidden]&lt;mailto:zhang_at_[hidden]&gt;&gt; wrote:
<br>
<p>Hi Gilles,
<br>
<p>The LAMMPS jobs for both versions are pure MPI. In the SLURM script, 64 cores are requested from 4 nodes. So it's 64 MPI tasks and not necessarily evenly distributed across all the nodes. (each node is equipped with 64 cores.)
<br>
<p>I can reproduce the performance issue using the LAMMPS example &quot;VISCOSITY/in.wall.2d&quot;. The run time difference is a jaw-dropping 20 seconds (v-1.8.4) vs. 45 mins (v-1.10.1). Among the multiple tests, I do have one job using v-1.10.1 finished in 20 seconds. Again, unstable performance. We also tested other software packages such as cp2k, VASP and Quantum Espresso, and they all have similar issues.
<br>
<p>Here is the decomposed MPI time in the LAMMPS job outputs.
<br>
v-1.8.4 (Job execution time: 00:00:20)
<br>
Loop time of 8.94962 on 64 procs for 50000 steps with 1020 atoms
<br>
Pair  time (%) = 0.270092 (3.01791)
<br>
Neigh time (%) = 0.0842548 (0.941435)
<br>
Comm  time (%) = 3.3474 (37.4027)
<br>
Outpt time (%) = 0.00901061 (0.100682)
<br>
Other time (%) = 5.23886 (58.5373)
<br>
<p>v-1.10.1 (Job execution time: 00:45:50)
<br>
Loop time of 2003.07 on 64 procs for 50000 steps with 1020 atoms
<br>
Pair  time (%) = 0.346776 (0.0173122)
<br>
Neigh time (%) = 0.18047 (0.00900966)
<br>
Comm  time (%) = 535.836 (26.7508)
<br>
Outpt time (%) = 1.68608 (0.0841748)
<br>
Other time (%) = 1465.02 (73.1387)
<br>
<p>I wonder if you can share your config.log and ompi_info with your v-1.10.1 compilation. Hopefully we can find a solution by comparing the configuration differences. We had been playing with the cma and vader parameters but with no luck.
<br>
<p>Thanks,
<br>
Jingchao
<br>
<p>Dr. Jingchao Zhang
<br>
Holland Computing Center
<br>
University of Nebraska-Lincoln
<br>
402-472-6400
<br>
<p><p>________________________________
<br>
From: users &lt;users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt; on behalf of Gilles Gouaillardet &lt;&lt;mailto:gilles_at_[hidden]&gt;gilles_at_[hidden]&lt;mailto:gilles_at_[hidden]&gt;&gt;
<br>
Sent: Tuesday, December 15, 2015 12:11 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] performance issue with OpenMPI 1.10.1
<br>
<p>Hi,
<br>
<p>First, can you check how many MPI tasks and OpenMP threads are used with both ompi versions ?
<br>
/* it should be 16 MPI tasks x no OpenMP threads */
<br>
<p>can you also post both MPI task timing breakdown (from the output)
<br>
<p>i tried a simple test with the VISCOSITY/in.wall.2d and i did not observe any performance difference.
<br>
<p>can you reproduce the performance drop with an input file from the examples directory ?
<br>
if not, can you post your in.snr input file ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 12/15/2015 7:18 AM, Jingchao Zhang wrote:
<br>
Hi all,
<br>
<p>We installed the latest release of OpenMPI 1.10.1 on our Linux cluster and find it having some performance issues. We tested the OpenMPI performance against the MD simulation package LAMMPS (&lt;<a href="http://lammps.sandia.gov/">http://lammps.sandia.gov/</a>&gt;<a href="http://lammps.sandia.gov/">http://lammps.sandia.gov/</a>). Compared to our previous installation of version 1.8.4, the 1.10.1 is nearly three times slower when running on multiple nodes. Run time across four computing nodes have the following results:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.10.1  1.8.4
<br>
1       0:09:39 0:09:21
<br>
2       0:50:29 0:09:23
<br>
3       0:50:29 0:09:28
<br>
4       0:13:38 0:09:27
<br>
5       0:10:43 0:09:34
<br>
Ave     0:27:00 0:09:27
<br>
<p>Unit is hour:minute:second. Five tests are done for each case and the averaged run time is listed in the last row. Tests on single node have the same run time results for both 1.10.1 and 1.8.4.
<br>
<p>We use SLURM as our job scheduler and the submit script for the LAMMPS job is as below:
<br>
&quot;#!/bin/sh
<br>
#SBATCH -N 4
<br>
#SBATCH -n 64
<br>
#SBATCH --mem=2g
<br>
#SBATCH --time=00:50:00
<br>
#SBATCH --error=job.%J.err
<br>
#SBATCH --output=job.%J.out
<br>
<p>module load compiler/gcc/4.7
<br>
export PATH=$PATH:/util/opt/openmpi/1.10.1/gcc/4.7/bin
<br>
export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/util/opt/openmpi/1.10.1/gcc/4.7/lib
<br>
export INCLUDE=$INCLUDE:/util/opt/openmpi/1.10.1/gcc/4.7/include
<br>
<p>mpirun lmp_ompi_g++ &lt; in.snr&quot;
<br>
<p>The &quot;lmp_ompi_g++&quot; binary is compiled against gcc/4.7 and openmpi/1.10.1. The compiler flags and MPI information can be found in the attachments. The problem here as you can see is the unstable performance for v-1.10.1. I wonder if this is a configuration issue at the compilation stage.
<br>
<p>Below are some information I gathered according to the &quot;Getting Help&quot; page.
<br>
Version of Open MPI that we are using:
<br>
Open MPI version: 1.10.1
<br>
Open MPI repo revision: v1.10.0-178-gb80f802
<br>
Open MPI release date: Nov 03, 2015
<br>
<p>&quot;config.log&quot; and &quot;ompi_info --all&quot; information are enclosed in the attachment.
<br>
<p>Network information:
<br>
1. OpenFabrics version
<br>
Mellanox/vendor 2.4-1.0.4 Download:&lt;<a href="http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz">http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz</a>&gt;&lt;<a href="http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz">http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz</a>&gt;&lt;<a href="http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz">http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz</a>&gt;
<br>
<p>2. Linux version
<br>
Scientific Linux release 6.6
<br>
2.6.32-504.23.4.el6.x86_64
<br>
<p>3. subnet manager
<br>
OpenSM
<br>
<p>4. ibv_devinfo
<br>
hca_id: mlx4_0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transport:                      InfiniBand (0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:                         2.9.1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node_guid:                      0002:c903:0050:6190
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:                 0002:c903:0050:6193
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:                      0x02c9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:                 26428
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:                         0xB0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;board_id:                       MT_0D90110009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:                  1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:   1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:                  PORT_ACTIVE (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:                4096 (5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:             4096 (5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:                 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:               34
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:               0x00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;link_layer:             InfiniBand
<br>
<p>5. ifconfig
<br>
em1       Link encap:Ethernet  HWaddr D0:67:E5:F9:20:76
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:10.138.25.3  Bcast:10.138.255.255  Mask:255.255.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::d267:e5ff:fef9:2076/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:28977969 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:67069501 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:3588666680 (3.3 GiB)  TX bytes:8145183622 (7.5 GiB)
<br>
<p>Ifconfig uses the ioctl access method to get the full address information, which limits hardware addresses to 8 bytes.
<br>
Because Infiniband address has 20 bytes, only the first 8 bytes are displayed correctly.
<br>
Ifconfig is obsolete! For replacement check ip.
<br>
ib0       Link encap:InfiniBand  HWaddr A0:00:02:20:FE:80:00:00:00:00:00:00:00:00:00:00:00:00:00:00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:10.137.25.3  Bcast:10.137.255.255  Mask:255.255.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::202:c903:50:6191/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:1776 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:418 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:1024
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:131571 (128.4 KiB)  TX bytes:81418 (79.5 KiB)
<br>
<p>lo        Link encap:Local Loopback
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:127.0.0.1  Mask:255.0.0.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: ::1/128 Scope:Host
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP LOOPBACK RUNNING  MTU:65536  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:40310687 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:40310687 errors:0 dropped:0 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:45601859442 (42.4 GiB)  TX bytes:45601859442 (42.4 GiB)
<br>
<p>6. ulimit -l
<br>
unlimited
<br>
<p>Please kindly let me know if more information are needed.
<br>
<p>Thanks,
<br>
Jingchao
<br>
<p>Dr. Jingchao Zhang
<br>
Holland Computing Center
<br>
University of Nebraska-Lincoln
<br>
402-472-6400
<br>
<p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28160.php">http://www.open-mpi.org/community/lists/users/2015/12/28160.php</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/12/28166.php">http://www.open-mpi.org/community/lists/users/2015/12/28166.php</a>&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/12/28166.php">http://www.open-mpi.org/community/lists/users/2015/12/28166.php</a>
<br>
<p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28169.php">http://www.open-mpi.org/community/lists/users/2015/12/28169.php</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28183/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28184.php">Ralph Castain: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28182.php">Gilles Gouaillardet: "Re: [OMPI users] Need help resolving &quot;error obtaining device context for mlx4_0&quot;"</a>
<li><strong>In reply to:</strong> <a href="28171.php">Gilles Gouaillardet: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28184.php">Ralph Castain: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Reply:</strong> <a href="28184.php">Ralph Castain: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Reply:</strong> <a href="28185.php">Novosielski, Ryan: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
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
