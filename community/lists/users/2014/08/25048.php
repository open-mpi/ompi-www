<?
$subject_val = "[OMPI users] No log_num_mtt in Ubuntu 14.04";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 17 12:16:38 2014" -->
<!-- isoreceived="20140817161638" -->
<!-- sent="Sun, 17 Aug 2014 19:16:29 +0300" -->
<!-- isosent="20140817161629" -->
<!-- name="Rio Yokota" -->
<!-- email="rioyokota_at_[hidden]" -->
<!-- subject="[OMPI users] No log_num_mtt in Ubuntu 14.04" -->
<!-- id="B52C20A3-2D90-4A6B-A995-D53BCAEDBD2E_at_mac.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] No log_num_mtt in Ubuntu 14.04<br>
<strong>From:</strong> Rio Yokota (<em>rioyokota_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-17 12:16:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25049.php">Mike Dubman: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<li><strong>Previous message:</strong> <a href="25047.php">Matt Thompson: "Re: [OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25049.php">Mike Dubman: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<li><strong>Reply:</strong> <a href="25049.php">Mike Dubman: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have recently upgraded from Ubuntu 12.04 to 14.04 and OpenMPI gives the following warning upon execution, which did not appear before the upgrade.
<br>
<p>WARNING: It appears that your OpenFabrics subsystem is configured to only
<br>
allow registering part of your physical memory. This can cause MPI jobs to
<br>
run with erratic performance, hang, and/or crash.
<br>
<p>Everything that I could find on google suggests to change log_num_mtt, but I cannot do this for the following reasons:
<br>
1. There is no log_num_mtt in /sys/module/mlx4_core/parameters/
<br>
2. Adding &quot;options mlx4_core log_num_mtt=24&quot; to /etc/modprobe.d/mlx4.conf doesn't seem to change anything
<br>
3. I am not sure how I can restart the driver because there is no &quot;/etc/init.d/openibd&quot; file (I've rebooted the system but it didn't do anything to create log_num_mtt)
<br>
<p>[Template information]
<br>
1. OpenFabrics is from the Ubuntu distribution using &quot;apt-get install infiniband-diags ibutils ibverbs-utils libmlx4-dev&quot;
<br>
2. OS is Ubuntu 14.04 LTS
<br>
3. Subnet manager is from the Ubuntu distribution using &quot;apt-get install opensm&quot;
<br>
4. Output of ibv_devinfo is:
<br>
hca_id:	mlx4_0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transport:			InfiniBand (0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:				2.10.600
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node_guid:			0002:c903:003d:52b0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:			0002:c903:003d:52b3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:			0x02c9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:			4099
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:				0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;board_id:			MT_1100120019
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:			1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:	1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:			PORT_ACTIVE (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:		4096 (5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:		4096 (5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:			1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:		1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:		0x00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;link_layer:		InfiniBand
<br>
5. Output of ifconfig for IB is
<br>
ib0       Link encap:UNSPEC  HWaddr 80-00-00-48-FE-80-00-00-00-00-00-00-00-00-00-00  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet addr:192.168.1.1  Bcast:192.168.1.255  Mask:255.255.255.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 addr: fe80::202:c903:3d:52b1/64 Scope:Link
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;UP BROADCAST RUNNING MULTICAST  MTU:2044  Metric:1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX packets:26 errors:0 dropped:0 overruns:0 frame:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;TX packets:34 errors:0 dropped:16 overruns:0 carrier:0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;collisions:0 txqueuelen:256 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;RX bytes:5843 (5.8 KB)  TX bytes:4324 (4.3 KB)
<br>
6. ulimit -l is &quot;unlimited&quot;
<br>
<p>Thanks,
<br>
Rio<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25049.php">Mike Dubman: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<li><strong>Previous message:</strong> <a href="25047.php">Matt Thompson: "Re: [OMPI users] Intermittent, somewhat architecture-dependent hang with Open MPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25049.php">Mike Dubman: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<li><strong>Reply:</strong> <a href="25049.php">Mike Dubman: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
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
