<?
$subject_val = "Re: [OMPI users] performance issue with OpenMPI 1.10.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 16:47:37 2015" -->
<!-- isoreceived="20151216214737" -->
<!-- sent="Wed, 16 Dec 2015 21:47:31 +0000" -->
<!-- isosent="20151216214731" -->
<!-- name="Jingchao Zhang" -->
<!-- email="zhang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] performance issue with OpenMPI 1.10.1" -->
<!-- id="SN2PR0801MB5920AC61E4987D030E1C324ADEF0_at_SN2PR0801MB592.namprd08.prod.outlook.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="F55E6106-E2AF-4AE0-9CB6-4BC7CC494B9E_at_open-mpi.org" -->
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
<strong>Date:</strong> 2015-12-16 16:47:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28170.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<li><strong>Previous message:</strong> <a href="28168.php">Ralph Castain: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>In reply to:</strong> <a href="28168.php">Ralph Castain: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28171.php">Gilles Gouaillardet: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Reply:</strong> <a href="28171.php">Gilles Gouaillardet: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Those jobs were launched with mpirun. Please see the attached files for the binding report with OMPI_MCA_hwloc_base_report_bindings=1.
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
From: users &lt;users-bounces_at_[hidden]&gt; on behalf of Ralph Castain &lt;rhc_at_[hidden]&gt;
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
<p>Loop time of 8.94962 on 64 procs for 50000 steps with 1020 atoms
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
<p>Loop time of 2003.07 on 64 procs for 50000 steps with 1020 atoms
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
From: users &lt;users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;&gt; on behalf of Gilles Gouaillardet &lt;gilles_at_[hidden]&lt;mailto:gilles_at_[hidden]&gt;&gt;
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
<p>We installed the latest release of OpenMPI 1.10.1 on our Linux cluster and find it having some performance issues. We tested the OpenMPI performance against the MD simulation package LAMMPS (<a href="http://lammps.sandia.gov/">http://lammps.sandia.gov/</a>). Compared to our previous installation of version 1.8.4, the 1.10.1 is nearly three times slower when running on multiple nodes. Run time across four computing nodes have the following results:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1.10.1  1.8.4
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
<p><p>Unit is hour:minute:second. Five tests are done for each case and the averaged run time is listed in the last row. Tests on single node have the same run time results for both 1.10.1 and 1.8.4.
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
Mellanox/vendor 2.4-1.0.4 Download:&lt;<a href="http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz">http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz</a>&gt;&lt;<a href="http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz">http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz</a>&gt;
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
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28166.php">http://www.open-mpi.org/community/lists/users/2015/12/28166.php</a>
<br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28169/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28169/binding_report.tar.bz2">binding_report.tar.bz2</a>
</ul>
<!-- attachment="binding_report.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28170.php">Nathan Hjelm: "Re: [OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<li><strong>Previous message:</strong> <a href="28168.php">Ralph Castain: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>In reply to:</strong> <a href="28168.php">Ralph Castain: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28171.php">Gilles Gouaillardet: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Reply:</strong> <a href="28171.php">Gilles Gouaillardet: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
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
