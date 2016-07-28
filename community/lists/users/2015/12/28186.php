<?
$subject_val = "Re: [OMPI users] performance issue with OpenMPI 1.10.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 20:17:39 2015" -->
<!-- isoreceived="20151218011739" -->
<!-- sent="Fri, 18 Dec 2015 01:17:33 +0000" -->
<!-- isosent="20151218011733" -->
<!-- name="Jingchao Zhang" -->
<!-- email="zhang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] performance issue with OpenMPI 1.10.1" -->
<!-- id="SN2PR0801MB59216A3698C8DA2736532D0ADE10_at_SN2PR0801MB592.namprd08.prod.outlook.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="ADFBD4B618944F499D05722136ECD9939B297A4807_at_umdexmbx02" -->
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
<strong>Date:</strong> 2015-12-17 20:17:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28187.php">Ralph Castain: "Re: [OMPI users] openmpi -hostfile/-machinefile option not working"</a>
<li><strong>Previous message:</strong> <a href="28185.php">Novosielski, Ryan: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>In reply to:</strong> <a href="28185.php">Novosielski, Ryan: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you all. That's my oversight. I got a similar error with &quot;hwloc_base_binding_policy=core&quot; so I thought it was the same. 
<br>
<p>Cheers,
<br>
<p>Dr. Jingchao Zhang
<br>
Holland Computing Center
<br>
University of Nebraska-Lincoln
<br>
402-472-6400
<br>
<p>________________________________________
<br>
From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Novosielski, Ryan &lt;novosirj_at_[hidden]&gt;
<br>
Sent: Thursday, December 17, 2015 7:04 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] performance issue with OpenMPI 1.10.1
<br>
<p>I'm no expert, but this one is pretty obvious. The error message says exactly what you should change:
<br>
<p>&nbsp;Equivalent MCA parameter:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Deprecated:  rmaps_base_bycore
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Replacement: rmaps_base_mapping_policy=core
<br>
<p><pre>
--
____ *Note: UMDNJ is now Rutgers-Biomedical and Health Sciences*
 || \\UTGERS      |---------------------*O*---------------------
 ||_// Biomedical | Ryan Novosielski - Senior Technologist
 || \\ and Health | novosirj_at_[hidden] - 973/972.0922 (2x0922)
 ||  \\  Sciences | OIRT/High Perf &amp; Res Comp - MSB C630, Newark
      `'
________________________________________
From: users [users-bounces_at_[hidden]] On Behalf Of Jingchao Zhang [zhang_at_[hidden]]
Sent: Thursday, December 17, 2015 8:01 PM
To: Open MPI Users
Subject: Re: [OMPI users] performance issue with OpenMPI 1.10.1
The &quot;mpirun --hetero-nodes -bind-to core -map-by core&quot; resolves the performance issue!
I reran my test in the *same* job.
SLURM resource request:
#!/bin/sh
#SBATCH -N 4
#SBATCH -n 64
#SBATCH --mem=2g
#SBATCH --time=02:00:00
#SBATCH --error=job.%J.err
#SBATCH --output=job.%J.out
env | grep SLURM:
SLURM_CHECKPOINT_IMAGE_DIR=/lustre/work/swanson/jingchao/mpitest/examples/1.10.1/3
SLURM_NODELIST=c[3005,3011,3019,3105]
SLURM_JOB_NAME=submit
SLURMD_NODENAME=c3005
SLURM_TOPOLOGY_ADDR=s0.s5.c3005
SLURM_PRIO_PROCESS=0
SLURM_NODE_ALIASES=(null)
SLURM_TOPOLOGY_ADDR_PATTERN=switch.switch.node
SLURM_NNODES=4
SLURM_JOBID=5462202
SLURM_NTASKS=64
SLURM_TASKS_PER_NODE=34,26,2(x2)
SLURM_JOB_ID=5462202
SLURM_JOB_USER=jingchao
SLURM_JOB_UID=3663
SLURM_NODEID=0
SLURM_SUBMIT_DIR=/lustre/work/swanson/jingchao/mpitest/examples/1.10.1/3
SLURM_TASK_PID=53822
SLURM_NPROCS=64
SLURM_CPUS_ON_NODE=36
SLURM_PROCID=0
SLURM_JOB_NODELIST=c[3005,3011,3019,3105]
SLURM_LOCALID=0
SLURM_JOB_CPUS_PER_NODE=36,26,2(x2)
SLURM_CLUSTER_NAME=tusker
SLURM_GTIDS=0
SLURM_SUBMIT_HOST=login.tusker.hcc.unl.edu
SLURM_JOB_PARTITION=batch
SLURM_JOB_NUM_NODES=4
SLURM_MEM_PER_NODE=2048
v-1.8.4 &quot;mpirun&quot; and v-1.10.1 &quot;mpirun --hetero-nodes -bind-to core -map-by core&quot; now give comparable results.
v-1.10.1 &quot;mpirun&quot; still have unstable performance.
I tried adding the following three lines to the &quot;openmpi-mca-params.conf&quot; file
&quot;
orte_hetero_nodes=1
hwloc_base_binding_policy=core
rmaps_base_bycore=1
&quot;
and ran &quot;mpirun lmp_ompi_g++ &lt; in.wall.2d&quot; with v-1.10.1.
This works for most tests but some jobs are hanging with this message:
--------------------------------------------------------------------------
The following command line options and corresponding MCA parameter have
been deprecated and replaced as follows:
  Command line options:
    Deprecated:  --bycore, -bycore
    Replacement: --map-by core
  Equivalent MCA parameter:
    Deprecated:  rmaps_base_bycore
    Replacement: rmaps_base_mapping_policy=core
The deprecated forms *will* disappear in a future version of Open MPI.
Please update to the new syntax.
--------------------------------------------------------------------------
Did I miss something in the &quot;openmpi-mca-params.conf&quot; file?
Thanks,
Dr. Jingchao Zhang
Holland Computing Center
University of Nebraska-Lincoln
402-472-6400
________________________________
From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
Sent: Wednesday, December 16, 2015 6:11 PM
To: Open MPI Users
Subject: Re: [OMPI users] performance issue with OpenMPI 1.10.1
binding is somehow involved in this, and i do not believe vader nor openib are involved here.
Could you please run again with the two ompi versions but in the *same* job ?
and before invoking mpirun, could you do
env | grep SLURM
per your slurm request, you are running 64 tasks on 4 nodes.
with 1.8.4, you end up running 14+14+14+22 tasks (not ideal, but quite balanced)
with 1.10.1, you end up running 2+2+12+48 tasks (very unbalanced)
so it is quite unfair to compare these two runs.
also, still in the same job, can you add a third run with 1.10.1 and the following options
mpirun --hetero-nodes -bind-to core -map-by core ...
and see if it helps
Cheers,
Gilles
On 12/17/2015 6:47 AM, Jingchao Zhang wrote:
Those jobs were launched with mpirun. Please see the attached files for the binding report with OMPI_MCA_hwloc_base_report_bindings=1.
Here is a snapshot for v-1.10.1:
[c2613.tusker.hcc.unl.edu:12049] MCW rank 0 is not bound (or bound to all available processors)
[c2613.tusker.hcc.unl.edu:12049] MCW rank 1 is not bound (or bound to all available processors)
[c2615.tusker.hcc.unl.edu:11136] MCW rank 2 is not bound (or bound to all available processors)
[c2615.tusker.hcc.unl.edu:11136] MCW rank 3 is not bound (or bound to all available processors)
[c2907.tusker.hcc.unl.edu:64131] MCW rank 9 is not bound (or bound to all available processors)
[c2907.tusker.hcc.unl.edu:64131] MCW rank 10 is not bound (or bound to all available processors)
[c2907.tusker.hcc.unl.edu:64131] MCW rank 11 is not bound (or bound to all available processors)
[c2907.tusker.hcc.unl.edu:64131] MCW rank 12 is not bound (or bound to all available processors)
[c2907.tusker.hcc.unl.edu:64131] MCW rank 13 is not bound (or bound to all available processors)
[c2907.tusker.hcc.unl.edu:64131] MCW rank 14 is not bound (or bound to all available processors)
[c2907.tusker.hcc.unl.edu:64131] MCW rank 15 is not bound (or bound to all available processors)
[c2907.tusker.hcc.unl.edu:64131] MCW rank 4 is not bound (or bound to all available processors)
[c2907.tusker.hcc.unl.edu:64131] MCW rank 5 is not bound (or bound to all available processors)
[c2907.tusker.hcc.unl.edu:64131] MCW rank 6 is not bound (or bound to all available processors)
[c2907.tusker.hcc.unl.edu:64131] MCW rank 7 is not bound (or bound to all available processors)
[c2907.tusker.hcc.unl.edu:64131] MCW rank 8 is not bound (or bound to all available processors)
The report for 1.8.4 doesn't have this issue. Any suggestions to resolve it?
Thanks,
Jingchao
Dr. Jingchao Zhang
Holland Computing Center
University of Nebraska-Lincoln
402-472-6400
________________________________
From: users &lt;users-bounces_at_[hidden]&gt;&lt;mailto:users-bounces_at_[hidden]&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden]&gt;&lt;mailto:rhc_at_[hidden]&gt;
Sent: Wednesday, December 16, 2015 1:52 PM
To: Open MPI Users
Subject: Re: [OMPI users] performance issue with OpenMPI 1.10.1
When I see such issues, I immediately start to think about binding patterns. How are these jobs being launched - with mpirun or srun? What do you see if you set OMPI_MCA_hwloc_base_report_bindings=1 in your environment?
On Dec 16, 2015, at 11:15 AM, Jingchao Zhang &lt;zhang_at_[hidden]&lt;mailto:zhang_at_[hidden]&gt;&gt; wrote:
Hi Gilles,
The LAMMPS jobs for both versions are pure MPI. In the SLURM script, 64 cores are requested from 4 nodes. So it's 64 MPI tasks and not necessarily evenly distributed across all the nodes. (each node is equipped with 64 cores.)
I can reproduce the performance issue using the LAMMPS example &quot;VISCOSITY/in.wall.2d&quot;. The run time difference is a jaw-dropping 20 seconds (v-1.8.4) vs. 45 mins (v-1.10.1). Among the multiple tests, I do have one job using v-1.10.1 finished in 20 seconds. Again, unstable performance. We also tested other software packages such as cp2k, VASP and Quantum Espresso, and they all have similar issues.
Here is the decomposed MPI time in the LAMMPS job outputs.
v-1.8.4 (Job execution time: 00:00:20)
Loop time of 8.94962 on 64 procs for 50000 steps with 1020 atoms
Pair  time (%) = 0.270092 (3.01791)
Neigh time (%) = 0.0842548 (0.941435)
Comm  time (%) = 3.3474 (37.4027)
Outpt time (%) = 0.00901061 (0.100682)
Other time (%) = 5.23886 (58.5373)
v-1.10.1 (Job execution time: 00:45:50)
Loop time of 2003.07 on 64 procs for 50000 steps with 1020 atoms
Pair  time (%) = 0.346776 (0.0173122)
Neigh time (%) = 0.18047 (0.00900966)
Comm  time (%) = 535.836 (26.7508)
Outpt time (%) = 1.68608 (0.0841748)
Other time (%) = 1465.02 (73.1387)
I wonder if you can share your config.log and ompi_info with your v-1.10.1 compilation. Hopefully we can find a solution by comparing the configuration differences. We had been playing with the cma and vader parameters but with no luck.
Thanks,
Jingchao
Dr. Jingchao Zhang
Holland Computing Center
University of Nebraska-Lincoln
402-472-6400
________________________________
From: users &lt;users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt; on behalf of Gilles Gouaillardet &lt;&lt;mailto:gilles_at_[hidden]&gt;gilles_at_[hidden]&lt;mailto:gilles_at_[hidden]&gt;&gt;
Sent: Tuesday, December 15, 2015 12:11 AM
To: Open MPI Users
Subject: Re: [OMPI users] performance issue with OpenMPI 1.10.1
Hi,
First, can you check how many MPI tasks and OpenMP threads are used with both ompi versions ?
/* it should be 16 MPI tasks x no OpenMP threads */
can you also post both MPI task timing breakdown (from the output)
i tried a simple test with the VISCOSITY/in.wall.2d and i did not observe any performance difference.
can you reproduce the performance drop with an input file from the examples directory ?
if not, can you post your in.snr input file ?
Cheers,
Gilles
On 12/15/2015 7:18 AM, Jingchao Zhang wrote:
Hi all,
We installed the latest release of OpenMPI 1.10.1 on our Linux cluster and find it having some performance issues. We tested the OpenMPI performance against the MD simulation package LAMMPS (&lt;<a href="http://lammps.sandia.gov/">http://lammps.sandia.gov/</a>&gt;<a href="http://lammps.sandia.gov/">http://lammps.sandia.gov/</a>). Compared to our previous installation of version 1.8.4, the 1.10.1 is nearly three times slower when running on multiple nodes. Run time across four computing nodes have the following results:
        1.10.1  1.8.4
1       0:09:39 0:09:21
2       0:50:29 0:09:23
3       0:50:29 0:09:28
4       0:13:38 0:09:27
5       0:10:43 0:09:34
Ave     0:27:00 0:09:27
Unit is hour:minute:second. Five tests are done for each case and the averaged run time is listed in the last row. Tests on single node have the same run time results for both 1.10.1 and 1.8.4.
We use SLURM as our job scheduler and the submit script for the LAMMPS job is as below:
&quot;#!/bin/sh
#SBATCH -N 4
#SBATCH -n 64
#SBATCH --mem=2g
#SBATCH --time=00:50:00
#SBATCH --error=job.%J.err
#SBATCH --output=job.%J.out
module load compiler/gcc/4.7
export PATH=$PATH:/util/opt/openmpi/1.10.1/gcc/4.7/bin
export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/util/opt/openmpi/1.10.1/gcc/4.7/lib
export INCLUDE=$INCLUDE:/util/opt/openmpi/1.10.1/gcc/4.7/include
mpirun lmp_ompi_g++ &lt; in.snr&quot;
The &quot;lmp_ompi_g++&quot; binary is compiled against gcc/4.7 and openmpi/1.10.1. The compiler flags and MPI information can be found in the attachments. The problem here as you can see is the unstable performance for v-1.10.1. I wonder if this is a configuration issue at the compilation stage.
Below are some information I gathered according to the &quot;Getting Help&quot; page.
Version of Open MPI that we are using:
Open MPI version: 1.10.1
Open MPI repo revision: v1.10.0-178-gb80f802
Open MPI release date: Nov 03, 2015
&quot;config.log&quot; and &quot;ompi_info --all&quot; information are enclosed in the attachment.
Network information:
1. OpenFabrics version
Mellanox/vendor 2.4-1.0.4 Download:&lt;<a href="http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz">http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz</a>&gt;&lt;<a href="http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz">http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz</a>&gt;&lt;<a href="http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz">http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz</a>&gt;
2. Linux version
Scientific Linux release 6.6
2.6.32-504.23.4.el6.x86_64
3. subnet manager
OpenSM
4. ibv_devinfo
hca_id: mlx4_0
        transport:                      InfiniBand (0)
        fw_ver:                         2.9.1000
        node_guid:                      0002:c903:0050:6190
        sys_image_guid:                 0002:c903:0050:6193
        vendor_id:                      0x02c9
        vendor_part_id:                 26428
        hw_ver:                         0xB0
        board_id:                       MT_0D90110009
        phys_port_cnt:                  1
                port:   1
                        state:                  PORT_ACTIVE (4)
                        max_mtu:                4096 (5)
                        active_mtu:             4096 (5)
                        sm_lid:                 1
                        port_lid:               34
                        port_lmc:               0x00
                        link_layer:             InfiniBand
5. ifconfig
em1       Link encap:Ethernet  HWaddr D0:67:E5:F9:20:76
          inet addr:10.138.25.3  Bcast:10.138.255.255  Mask:255.255.0.0
          inet6 addr: fe80::d267:e5ff:fef9:2076/64 Scope:Link
          UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
          RX packets:28977969 errors:0 dropped:0 overruns:0 frame:0
          TX packets:67069501 errors:0 dropped:0 overruns:0 carrier:0
          collisions:0 txqueuelen:1000
          RX bytes:3588666680 (3.3 GiB)  TX bytes:8145183622 (7.5 GiB)
Ifconfig uses the ioctl access method to get the full address information, which limits hardware addresses to 8 bytes.
Because Infiniband address has 20 bytes, only the first 8 bytes are displayed correctly.
Ifconfig is obsolete! For replacement check ip.
ib0       Link encap:InfiniBand  HWaddr A0:00:02:20:FE:80:00:00:00:00:00:00:00:00:00:00:00:00:00:00
          inet addr:10.137.25.3  Bcast:10.137.255.255  Mask:255.255.0.0
          inet6 addr: fe80::202:c903:50:6191/64 Scope:Link
          UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
          RX packets:1776 errors:0 dropped:0 overruns:0 frame:0
          TX packets:418 errors:0 dropped:0 overruns:0 carrier:0
          collisions:0 txqueuelen:1024
          RX bytes:131571 (128.4 KiB)  TX bytes:81418 (79.5 KiB)
lo        Link encap:Local Loopback
          inet addr:127.0.0.1  Mask:255.0.0.0
          inet6 addr: ::1/128 Scope:Host
          UP LOOPBACK RUNNING  MTU:65536  Metric:1
          RX packets:40310687 errors:0 dropped:0 overruns:0 frame:0
          TX packets:40310687 errors:0 dropped:0 overruns:0 carrier:0
          collisions:0 txqueuelen:0
          RX bytes:45601859442 (42.4 GiB)  TX bytes:45601859442 (42.4 GiB)
6. ulimit -l
unlimited
Please kindly let me know if more information are needed.
Thanks,
Jingchao
Dr. Jingchao Zhang
Holland Computing Center
University of Nebraska-Lincoln
402-472-6400
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28160.php">http://www.open-mpi.org/community/lists/users/2015/12/28160.php</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/12/28166.php">http://www.open-mpi.org/community/lists/users/2015/12/28166.php</a>&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/12/28166.php">http://www.open-mpi.org/community/lists/users/2015/12/28166.php</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28169.php">http://www.open-mpi.org/community/lists/users/2015/12/28169.php</a>
_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28185.php">http://www.open-mpi.org/community/lists/users/2015/12/28185.php</a></pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28187.php">Ralph Castain: "Re: [OMPI users] openmpi -hostfile/-machinefile option not working"</a>
<li><strong>Previous message:</strong> <a href="28185.php">Novosielski, Ryan: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>In reply to:</strong> <a href="28185.php">Novosielski, Ryan: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<!-- nextthread="start" -->
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
