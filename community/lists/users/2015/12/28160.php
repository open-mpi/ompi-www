<?
$subject_val = "[OMPI users] performance issue with OpenMPI 1.10.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 14 17:18:35 2015" -->
<!-- isoreceived="20151214221835" -->
<!-- sent="Mon, 14 Dec 2015 22:18:25 +0000" -->
<!-- isosent="20151214221825" -->
<!-- name="Jingchao Zhang" -->
<!-- email="zhang_at_[hidden]" -->
<!-- subject="[OMPI users] performance issue with OpenMPI 1.10.1" -->
<!-- id="SN2PR0801MB5921F5CA17B300169DED853AD090_at_SN2PR0801MB592.namprd08.prod.outlook.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] performance issue with OpenMPI 1.10.1<br>
<strong>From:</strong> Jingchao Zhang (<em>zhang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-14 17:18:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28161.php">Jeff Hammond: "Re: [OMPI users] FW: Win_flush_all"</a>
<li><strong>Previous message:</strong> <a href="28159.php">Nathan Hjelm: "Re: [OMPI users] FW: Win_flush_all"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28162.php">Gilles Gouaillardet: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Reply:</strong> <a href="28162.php">Gilles Gouaillardet: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p><p>We installed the latest release of OpenMPI 1.10.1 on our Linux cluster and find it having some performance issues. We tested the OpenMPI performance against the MD simulation package LAMMPS (<a href="http://lammps.sandia.gov/">http://lammps.sandia.gov/</a>). Compared to our previous installation of version 1.8.4, the 1.10.1 is nearly three times slower when running on multiple nodes. Run time across four computing nodes have the following results:
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
<p><p>We use SLURM as our job scheduler and the submit script for the LAMMPS job is as below:
<br>
<p>&quot;#!/bin/sh
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
<p><p>Below are some information I gathered according to the &quot;Getting Help&quot; page.
<br>
<p>Version of Open MPI that we are using:
<br>
<p>Open MPI version: 1.10.1
<br>
<p>Open MPI repo revision: v1.10.0-178-gb80f802
<br>
Open MPI release date: Nov 03, 2015
<br>
<p>&quot;config.log&quot; and &quot;ompi_info --all&quot; information are enclosed in the attachment.
<br>
<p>Network information:
<br>
1. OpenFabrics version
<br>
Mellanox/vendor 2.4-1.0.4 Download:&lt;<a href="http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz">http://www.mellanox.com/page/mlnx_ofed_eula?mtag=linux_sw_drivers&amp;mrequest=downloads&amp;mtype=ofed&amp;mver=MLNX_OFED-2.4-1.0.4&amp;mname=MLNX_OFED_LINUX-2.4-1.0.4-rhel6.6-x86_64.tgz</a>&gt;
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
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28160/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28160/MPIConfig.tar.bz2">MPIConfig.tar.bz2</a>
</ul>
<!-- attachment="MPIConfig.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28161.php">Jeff Hammond: "Re: [OMPI users] FW: Win_flush_all"</a>
<li><strong>Previous message:</strong> <a href="28159.php">Nathan Hjelm: "Re: [OMPI users] FW: Win_flush_all"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28162.php">Gilles Gouaillardet: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Reply:</strong> <a href="28162.php">Gilles Gouaillardet: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
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
