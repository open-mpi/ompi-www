<?
$subject_val = "[OMPI users] Question on tunning OFED kernel parameter for Mellanox 56G IB";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 12 10:40:41 2014" -->
<!-- isoreceived="20141112154041" -->
<!-- sent="Wed, 12 Nov 2014 23:39:57 +0800" -->
<!-- isosent="20141112153957" -->
<!-- name="Liu Jianyu" -->
<!-- email="jerry_leo_at_[hidden]" -->
<!-- subject="[OMPI users] Question on tunning OFED kernel parameter for Mellanox 56G IB" -->
<!-- id="BAY174-DS3E6BC51A8A4C422A64A3D8A8E0_at_phx.gbl" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Question on tunning OFED kernel parameter for Mellanox 56G IB<br>
<strong>From:</strong> Liu Jianyu (<em>jerry_leo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-12 10:39:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25773.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25771.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm trying to find the correct settings for OFED  kernel parameter for the
<br>
cluster.  Each node has 32G RAM,  installed Red Hat Enterprise Linux 
<br>
Server release 6.4 (Santiago) , OFED 2.1.192,  OpenMPI 1.6.5  and 
<br>
Mellanox Technologies MT27500 Family [ConnectX-3] with 56G actived.
<br>
<p>lsmod showed these modules were loaded
<br>
<p>&nbsp;&nbsp;mlx5_ib               103294  0
<br>
&nbsp;&nbsp;mlx5_core              85297  1 mlx5_ib
<br>
&nbsp;&nbsp;mlx4_en               117925  0
<br>
&nbsp;&nbsp;mlx4_ib               164865  1
<br>
&nbsp;&nbsp;mlx4_core             258183  2 mlx4_en,mlx4_ib
<br>
<p>And I made these settings for /etc/depmod.d/mlx4_en.conf
<br>
<p>&nbsp;&nbsp;&nbsp;options mlx4_core log_num_mtt=23 log_mtts_per_seg=1
<br>
<p>Checked log_mtts_per_seg and log_num_mtt used by kernel with
<br>
these commands
<br>
<p>cat /sys/module/mlx4_core/parameters/log_mtts_per_seg
<br>
&nbsp;&nbsp;&nbsp;0
<br>
cat /sys/module/mlx4_core/parameters/log_num_mtt
<br>
&nbsp;&nbsp;24
<br>
<p>It looked like the log_mtts_per_seg and log_num_mtt were set by
<br>
certain conf file instead by mlx4_en.conf
<br>
<p>My questions are
<br>
<p>1.  Why does it need to load both of mlx4 and mlx5 for 56G IB?
<br>
<p>2.  Which conf file controls the OFED 2.1.192 kernel paramters for 
<br>
Mellanox 56G ConnectX-3?
<br>
<p>3. Any special settings for Mellanox 56G IB with OFED 2.1.192?
<br>
<p>Thank you for your time 
<br>
<p>and appreciate your kindly help
<br>
<p>Regards
<br>
<p>Jerry
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25773.php">Ralph Castain: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
<li><strong>Previous message:</strong> <a href="25771.php">Dave Love: "Re: [OMPI users] oversubscription of slots with GridEngine"</a>
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
