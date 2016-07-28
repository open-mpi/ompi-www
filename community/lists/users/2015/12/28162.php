<?
$subject_val = "Re: [OMPI users] performance issue with OpenMPI 1.10.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 15 01:11:15 2015" -->
<!-- isoreceived="20151215061115" -->
<!-- sent="Tue, 15 Dec 2015 15:11:07 +0900" -->
<!-- isosent="20151215061107" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] performance issue with OpenMPI 1.10.1" -->
<!-- id="566FAEFB.70904_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="SN2PR0801MB5921F5CA17B300169DED853AD090_at_SN2PR0801MB592.namprd08.prod.outlook.com" -->
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
<strong>Date:</strong> 2015-12-15 01:11:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28163.php">Kamal Hossain: "[OMPI users] Does openMPI allows a 32-bit binary on 32-bit machine to communicate with a 64-bit binary on a 64-bit machine??"</a>
<li><strong>Previous message:</strong> <a href="28161.php">Jeff Hammond: "Re: [OMPI users] FW: Win_flush_all"</a>
<li><strong>In reply to:</strong> <a href="28160.php">Jingchao Zhang: "[OMPI users] performance issue with OpenMPI 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28166.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Reply:</strong> <a href="28166.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>First, can you check how many MPI tasks and OpenMP threads are used with 
<br>
both ompi versions ?
<br>
/* it should be 16 MPI tasks x no OpenMP threads */
<br>
<p>can you also post both MPI task timing breakdown (from the output)
<br>
<p>i tried a simple test with the VISCOSITY/in.wall.2d and i did not 
<br>
observe any performance difference.
<br>
<p>can you reproduce the performance drop with an input file from the 
<br>
examples directory ?
<br>
if not, can you post your in.snr input file ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 12/15/2015 7:18 AM, Jingchao Zhang wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We installed the latest release of OpenMPI 1.10.1 on our Linux 
</span><br>
<span class="quotelev1">&gt; cluster and find it having some performance issues. We tested the 
</span><br>
<span class="quotelev1">&gt; OpenMPI performance against the MD simulation package LAMMPS 
</span><br>
<span class="quotelev1">&gt; (<a href="http://lammps.sandia.gov/">http://lammps.sandia.gov/</a>). Compared to our previous installation of 
</span><br>
<span class="quotelev1">&gt; version 1.8.4, the 1.10.1 is nearly three times slower when running on 
</span><br>
<span class="quotelev1">&gt; multiple nodes. Run time across four computing nodes have the 
</span><br>
<span class="quotelev1">&gt; following results:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	1.10.1 	1.8.4
</span><br>
<span class="quotelev1">&gt; 1 	0:09:39 	0:09:21
</span><br>
<span class="quotelev1">&gt; 2 	0:50:29 	0:09:23
</span><br>
<span class="quotelev1">&gt; 3 	0:50:29 	0:09:28
</span><br>
<span class="quotelev1">&gt; 4 	0:13:38 	0:09:27
</span><br>
<span class="quotelev1">&gt; 5 	0:10:43 	0:09:34
</span><br>
<span class="quotelev1">&gt; Ave 	0:27:00 	0:09:27
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unit is hour:minute:second. Five tests are done for each case and 
</span><br>
<span class="quotelev1">&gt; the averaged run time is listed in the last row. Tests on single node 
</span><br>
<span class="quotelev1">&gt; have the same run time results for both 1.10.1 and 1.8.4.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We use SLURM as our job scheduler and the submit script for the LAMMPS 
</span><br>
<span class="quotelev1">&gt; job is as below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;#!/bin/sh
</span><br>
<span class="quotelev1">&gt; #SBATCH -N 4
</span><br>
<span class="quotelev1">&gt; #SBATCH -n 64
</span><br>
<span class="quotelev1">&gt; #SBATCH --mem=2g
</span><br>
<span class="quotelev1">&gt; #SBATCH --time=00:50:00
</span><br>
<span class="quotelev1">&gt; #SBATCH --error=job.%J.err
</span><br>
<span class="quotelev1">&gt; #SBATCH --output=job.%J.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module load compiler/gcc/4.7
</span><br>
<span class="quotelev1">&gt; export PATH=$PATH:/util/opt/openmpi/1.10.1/gcc/4.7/bin
</span><br>
<span class="quotelev1">&gt; export 
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/util/opt/openmpi/1.10.1/gcc/4.7/lib
</span><br>
<span class="quotelev1">&gt; export INCLUDE=$INCLUDE:/util/opt/openmpi/1.10.1/gcc/4.7/include
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun lmp_ompi_g++ &lt; in.snr&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;lmp_ompi_g++&quot; binary is compiled against gcc/4.7 and 
</span><br>
<span class="quotelev1">&gt; openmpi/1.10.1. The compiler flags and MPI information can be found in 
</span><br>
<span class="quotelev1">&gt; the attachments. The problem here as you can see is the 
</span><br>
<span class="quotelev1">&gt; unstable performance for v-1.10.1. I wonder if this is a configuration 
</span><br>
<span class="quotelev1">&gt; issue at the compilation stage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Below are some information I gathered according to the &quot;Getting Help&quot; 
</span><br>
<span class="quotelev1">&gt; page.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Version of Open MPI that we are using:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI version: 1.10.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI repo revision: v1.10.0-178-gb80f802
</span><br>
<span class="quotelev1">&gt; Open MPI release date: Nov 03, 2015
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;config.log&quot; and &quot;ompi_info --all&quot; information are enclosed in the 
</span><br>
<span class="quotelev1">&gt; attachment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Network information:
</span><br>
<span class="quotelev1">&gt; 1. OpenFabrics version
</span><br>
<span class="quotelev1">&gt; Mellanox/vendor 2.4-1.0.4 
</span><br>
<span class="quotelev1">&gt; Download:&lt;<a href="http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz">http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Linux version
</span><br>
<span class="quotelev1">&gt; Scientific Linux release 6.6
</span><br>
<span class="quotelev1">&gt; 2.6.32-504.23.4.el6.x86_64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. subnet manager
</span><br>
<span class="quotelev1">&gt; OpenSM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4. ibv_devinfo
</span><br>
<span class="quotelev1">&gt; hca_id: mlx4_0
</span><br>
<span class="quotelev1">&gt;         transport:                      InfiniBand (0)
</span><br>
<span class="quotelev1">&gt;         fw_ver:                         2.9.1000
</span><br>
<span class="quotelev1">&gt;         node_guid:  0002:c903:0050:6190
</span><br>
<span class="quotelev1">&gt;         sys_image_guid: 0002:c903:0050:6193
</span><br>
<span class="quotelev1">&gt;         vendor_id:                      0x02c9
</span><br>
<span class="quotelev1">&gt;         vendor_part_id:                 26428
</span><br>
<span class="quotelev1">&gt;         hw_ver:                         0xB0
</span><br>
<span class="quotelev1">&gt;         board_id:                       MT_0D90110009
</span><br>
<span class="quotelev1">&gt;         phys_port_cnt:                  1
</span><br>
<span class="quotelev1">&gt;                 port:   1
</span><br>
<span class="quotelev1">&gt;                         state:  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;                         max_mtu:                4096 (5)
</span><br>
<span class="quotelev1">&gt;                         active_mtu:             4096 (5)
</span><br>
<span class="quotelev1">&gt;                         sm_lid:                 1
</span><br>
<span class="quotelev1">&gt;                         port_lid:               34
</span><br>
<span class="quotelev1">&gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;                         link_layer: InfiniBand
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5. ifconfig
</span><br>
<span class="quotelev1">&gt; em1       Link encap:Ethernet  HWaddr D0:67:E5:F9:20:76
</span><br>
<span class="quotelev1">&gt;           inet addr:10.138.25.3  Bcast:10.138.255.255  Mask:255.255.0.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::d267:e5ff:fef9:2076/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:28977969 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:67069501 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1000
</span><br>
<span class="quotelev1">&gt;           RX bytes:3588666680 (3.3 GiB)  TX bytes:8145183622 (7.5 GiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ifconfig uses the ioctl access method to get the full address 
</span><br>
<span class="quotelev1">&gt; information, which limits hardware addresses to 8 bytes.
</span><br>
<span class="quotelev1">&gt; Because Infiniband address has 20 bytes, only the first 8 bytes are 
</span><br>
<span class="quotelev1">&gt; displayed correctly.
</span><br>
<span class="quotelev1">&gt; Ifconfig is obsolete! For replacement check ip.
</span><br>
<span class="quotelev1">&gt; ib0       Link encap:InfiniBand  HWaddr 
</span><br>
<span class="quotelev1">&gt; A0:00:02:20:FE:80:00:00:00:00:00:00:00:00:00:00:00:00:00:00
</span><br>
<span class="quotelev1">&gt;           inet addr:10.137.25.3  Bcast:10.137.255.255  Mask:255.255.0.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: fe80::202:c903:50:6191/64 Scope:Link
</span><br>
<span class="quotelev1">&gt;           UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:1776 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:418 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:1024
</span><br>
<span class="quotelev1">&gt;           RX bytes:131571 (128.4 KiB)  TX bytes:81418 (79.5 KiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lo        Link encap:Local Loopback
</span><br>
<span class="quotelev1">&gt;           inet addr:127.0.0.1  Mask:255.0.0.0
</span><br>
<span class="quotelev1">&gt;           inet6 addr: ::1/128 Scope:Host
</span><br>
<span class="quotelev1">&gt;           UP LOOPBACK RUNNING  MTU:65536  Metric:1
</span><br>
<span class="quotelev1">&gt;           RX packets:40310687 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;           TX packets:40310687 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;           collisions:0 txqueuelen:0
</span><br>
<span class="quotelev1">&gt;           RX bytes:45601859442 (42.4 GiB)  TX bytes:45601859442 (42.4 GiB)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 6. ulimit -l
</span><br>
<span class="quotelev1">&gt; unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please kindly let me know if more information are needed.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28160.php">http://www.open-mpi.org/community/lists/users/2015/12/28160.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28162/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28163.php">Kamal Hossain: "[OMPI users] Does openMPI allows a 32-bit binary on 32-bit machine to communicate with a 64-bit binary on a 64-bit machine??"</a>
<li><strong>Previous message:</strong> <a href="28161.php">Jeff Hammond: "Re: [OMPI users] FW: Win_flush_all"</a>
<li><strong>In reply to:</strong> <a href="28160.php">Jingchao Zhang: "[OMPI users] performance issue with OpenMPI 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28166.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Reply:</strong> <a href="28166.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
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
