<?
$subject_val = "Re: [OMPI users] performance issue with OpenMPI 1.10.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 14:53:05 2015" -->
<!-- isoreceived="20151216195305" -->
<!-- sent="Wed, 16 Dec 2015 11:52:59 -0800" -->
<!-- isosent="20151216195259" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] performance issue with OpenMPI 1.10.1" -->
<!-- id="F55E6106-E2AF-4AE0-9CB6-4BC7CC494B9E_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="SN2PR0801MB592FCD67782D3550E8DFD58ADEF0_at_SN2PR0801MB592.namprd08.prod.outlook.com" -->
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
<strong>Date:</strong> 2015-12-16 14:52:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28169.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28167.php">Udayanga Wickramasinghe: "[OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<li><strong>In reply to:</strong> <a href="28166.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28169.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Reply:</strong> <a href="28169.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When I see such issues, I immediately start to think about binding patterns. How are these jobs being launched - with mpirun or srun? What do you see if you set OMPI_MCA_hwloc_base_report_bindings=1 in your environment?
<br>
<p><span class="quotelev1">&gt; On Dec 16, 2015, at 11:15 AM, Jingchao Zhang &lt;zhang_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The LAMMPS jobs for both versions are pure MPI. In the SLURM script, 64 cores are requested from 4 nodes. So it's 64 MPI tasks and not necessarily evenly distributed across all the nodes. (each node is equipped with 64 cores.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can reproduce the performance issue using the LAMMPS example &quot;VISCOSITY/in.wall.2d&quot;. The run time difference is a jaw-dropping 20 seconds (v-1.8.4) vs. 45 mins (v-1.10.1). Among the multiple tests, I do have one job using v-1.10.1 finished in 20 seconds. Again, unstable performance. We also tested other software packages such as cp2k, VASP and Quantum Espresso, and they all have similar issues. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the decomposed MPI time in the LAMMPS job outputs.
</span><br>
<span class="quotelev1">&gt; v-1.8.4 (Job execution time: 00:00:20)
</span><br>
<span class="quotelev1">&gt; Loop time of 8.94962 on 64 procs for 50000 steps with 1020 atoms
</span><br>
<span class="quotelev1">&gt; Pair  time (%) = 0.270092 (3.01791)
</span><br>
<span class="quotelev1">&gt; Neigh time (%) = 0.0842548 (0.941435)
</span><br>
<span class="quotelev1">&gt; Comm  time (%) = 3.3474 (37.4027)
</span><br>
<span class="quotelev1">&gt; Outpt time (%) = 0.00901061 (0.100682)
</span><br>
<span class="quotelev1">&gt; Other time (%) = 5.23886 (58.5373)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; v-1.10.1 (Job execution time: 00:45:50)
</span><br>
<span class="quotelev1">&gt; Loop time of 2003.07 on 64 procs for 50000 steps with 1020 atoms
</span><br>
<span class="quotelev1">&gt; Pair  time (%) = 0.346776 (0.0173122)
</span><br>
<span class="quotelev1">&gt; Neigh time (%) = 0.18047 (0.00900966)
</span><br>
<span class="quotelev1">&gt; Comm  time (%) = 535.836 (26.7508)
</span><br>
<span class="quotelev1">&gt; Outpt time (%) = 1.68608 (0.0841748)
</span><br>
<span class="quotelev1">&gt; Other time (%) = 1465.02 (73.1387)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wonder if you can share your config.log and ompi_info with your v-1.10.1 compilation. Hopefully we can find a solution by comparing the configuration differences. We had been playing with the cma and vader parameters but with no luck. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Jingchao
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
<span class="quotelev1">&gt; Sent: Tuesday, December 15, 2015 12:11 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] performance issue with OpenMPI 1.10.1
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First, can you check how many MPI tasks and OpenMP threads are used with both ompi versions ?
</span><br>
<span class="quotelev1">&gt; /* it should be 16 MPI tasks x no OpenMP threads */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; can you also post both MPI task timing breakdown (from the output)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i tried a simple test with the VISCOSITY/in.wall.2d and i did not observe any performance difference.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; can you reproduce the performance drop with an input file from the examples directory ?
</span><br>
<span class="quotelev1">&gt; if not, can you post your in.snr input file ?
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
<span class="quotelev1">&gt; On 12/15/2015 7:18 AM, Jingchao Zhang wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all, 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We installed the latest release of OpenMPI 1.10.1 on our Linux cluster and find it having some performance issues. We tested the OpenMPI performance against the MD simulation package LAMMPS (<a href="http://lammps.sandia.gov/">http://lammps.sandia.gov/</a> &lt;<a href="http://lammps.sandia.gov/">http://lammps.sandia.gov/</a>&gt;). Compared to our previous installation of version 1.8.4, the 1.10.1 is nearly three times slower when running on multiple nodes. Run time across four computing nodes have the following results:
</span><br>
<span class="quotelev2">&gt;&gt;  	1.10.1	1.8.4
</span><br>
<span class="quotelev2">&gt;&gt; 1	0:09:39	0:09:21
</span><br>
<span class="quotelev2">&gt;&gt; 2	0:50:29	0:09:23
</span><br>
<span class="quotelev2">&gt;&gt; 3	0:50:29	0:09:28
</span><br>
<span class="quotelev2">&gt;&gt; 4	0:13:38	0:09:27
</span><br>
<span class="quotelev2">&gt;&gt; 5	0:10:43	0:09:34
</span><br>
<span class="quotelev2">&gt;&gt; Ave	0:27:00	0:09:27
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Unit is hour:minute:second. Five tests are done for each case and the averaged run time is listed in the last row. Tests on single node have the same run time results for both 1.10.1 and 1.8.4. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We use SLURM as our job scheduler and the submit script for the LAMMPS job is as below:
</span><br>
<span class="quotelev2">&gt;&gt; &quot;#!/bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; #SBATCH -N 4
</span><br>
<span class="quotelev2">&gt;&gt; #SBATCH -n 64
</span><br>
<span class="quotelev2">&gt;&gt; #SBATCH --mem=2g
</span><br>
<span class="quotelev2">&gt;&gt; #SBATCH --time=00:50:00
</span><br>
<span class="quotelev2">&gt;&gt; #SBATCH --error=job.%J.err
</span><br>
<span class="quotelev2">&gt;&gt; #SBATCH --output=job.%J.out
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; module load compiler/gcc/4.7
</span><br>
<span class="quotelev2">&gt;&gt; export PATH=$PATH:/util/opt/openmpi/1.10.1/gcc/4.7/bin
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/util/opt/openmpi/1.10.1/gcc/4.7/lib
</span><br>
<span class="quotelev2">&gt;&gt; export INCLUDE=$INCLUDE:/util/opt/openmpi/1.10.1/gcc/4.7/include
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun lmp_ompi_g++ &lt; in.snr&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The &quot;lmp_ompi_g++&quot; binary is compiled against gcc/4.7 and openmpi/1.10.1. The compiler flags and MPI information can be found in the attachments. The problem here as you can see is the unstable performance for v-1.10.1. I wonder if this is a configuration issue at the compilation stage. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Below are some information I gathered according to the &quot;Getting Help&quot; page. 
</span><br>
<span class="quotelev2">&gt;&gt; Version of Open MPI that we are using:
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI version: 1.10.1
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI repo revision: v1.10.0-178-gb80f802
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI release date: Nov 03, 2015
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &quot;config.log&quot; and &quot;ompi_info --all&quot; information are enclosed in the attachment.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Network information:
</span><br>
<span class="quotelev2">&gt;&gt; 1. OpenFabrics version
</span><br>
<span class="quotelev2">&gt;&gt; Mellanox/vendor 2.4-1.0.4 Download:&lt;<a href="http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz">http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz</a>&gt; &lt;<a href="http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz">http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. Linux version
</span><br>
<span class="quotelev2">&gt;&gt; Scientific Linux release 6.6
</span><br>
<span class="quotelev2">&gt;&gt; 2.6.32-504.23.4.el6.x86_64
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3. subnet manager
</span><br>
<span class="quotelev2">&gt;&gt; OpenSM
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 4. ibv_devinfo
</span><br>
<span class="quotelev2">&gt;&gt; hca_id: mlx4_0
</span><br>
<span class="quotelev2">&gt;&gt;         transport:                      InfiniBand (0)
</span><br>
<span class="quotelev2">&gt;&gt;         fw_ver:                         2.9.1000
</span><br>
<span class="quotelev2">&gt;&gt;         node_guid:                      0002:c903:0050:6190
</span><br>
<span class="quotelev2">&gt;&gt;         sys_image_guid:                 0002:c903:0050:6193
</span><br>
<span class="quotelev2">&gt;&gt;         vendor_id:                      0x02c9
</span><br>
<span class="quotelev2">&gt;&gt;         vendor_part_id:                 26428
</span><br>
<span class="quotelev2">&gt;&gt;         hw_ver:                         0xB0
</span><br>
<span class="quotelev2">&gt;&gt;         board_id:                       MT_0D90110009
</span><br>
<span class="quotelev2">&gt;&gt;         phys_port_cnt:                  1
</span><br>
<span class="quotelev2">&gt;&gt;                 port:   1
</span><br>
<span class="quotelev2">&gt;&gt;                         state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev2">&gt;&gt;                         max_mtu:                4096 (5)
</span><br>
<span class="quotelev2">&gt;&gt;                         active_mtu:             4096 (5)
</span><br>
<span class="quotelev2">&gt;&gt;                         sm_lid:                 1
</span><br>
<span class="quotelev2">&gt;&gt;                         port_lid:               34
</span><br>
<span class="quotelev2">&gt;&gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev2">&gt;&gt;                         link_layer:             InfiniBand
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 5. ifconfig
</span><br>
<span class="quotelev2">&gt;&gt; em1       Link encap:Ethernet  HWaddr D0:67:E5:F9:20:76
</span><br>
<span class="quotelev2">&gt;&gt;           inet addr:10.138.25.3  Bcast:10.138.255.255  Mask:255.255.0.0
</span><br>
<span class="quotelev2">&gt;&gt;           inet6 addr: fe80::d267:e5ff:fef9:2076/64 Scope:Link
</span><br>
<span class="quotelev2">&gt;&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;           RX packets:28977969 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;           TX packets:67069501 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev2">&gt;&gt;           RX bytes:3588666680 (3.3 GiB)  TX bytes:8145183622 (7.5 GiB)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ifconfig uses the ioctl access method to get the full address information, which limits hardware addresses to 8 bytes.
</span><br>
<span class="quotelev2">&gt;&gt; Because Infiniband address has 20 bytes, only the first 8 bytes are displayed correctly.
</span><br>
<span class="quotelev2">&gt;&gt; Ifconfig is obsolete! For replacement check ip.
</span><br>
<span class="quotelev2">&gt;&gt; ib0       Link encap:InfiniBand  HWaddr A0:00:02:20:FE:80:00:00:00:00:00:00:00:00:00:00:00:00:00:00
</span><br>
<span class="quotelev2">&gt;&gt;           inet addr:10.137.25.3  Bcast:10.137.255.255  Mask:255.255.0.0
</span><br>
<span class="quotelev2">&gt;&gt;           inet6 addr: fe80::202:c903:50:6191/64 Scope:Link
</span><br>
<span class="quotelev2">&gt;&gt;           UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;           RX packets:1776 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;           TX packets:418 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;           collisions:0 txqueuelen:1024
</span><br>
<span class="quotelev2">&gt;&gt;           RX bytes:131571 (128.4 KiB)  TX bytes:81418 (79.5 KiB)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev2">&gt;&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev2">&gt;&gt;           UP LOOPBACK RUNNING  MTU:65536  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;           RX packets:40310687 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;           TX packets:40310687 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev2">&gt;&gt;           RX bytes:45601859442 (42.4 GiB)  TX bytes:45601859442 (42.4 GiB)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 6. ulimit -l
</span><br>
<span class="quotelev2">&gt;&gt; unlimited
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please kindly let me know if more information are needed.
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28160.php">http://www.open-mpi.org/community/lists/users/2015/12/28160.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/12/28160.php">http://www.open-mpi.org/community/lists/users/2015/12/28160.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28166.php">http://www.open-mpi.org/community/lists/users/2015/12/28166.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/12/28166.php">http://www.open-mpi.org/community/lists/users/2015/12/28166.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28168/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28169.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28167.php">Udayanga Wickramasinghe: "[OMPI users] OpenMPI non blocking I_Allreduce segfaults when using custom function.."</a>
<li><strong>In reply to:</strong> <a href="28166.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28169.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Reply:</strong> <a href="28169.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
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
