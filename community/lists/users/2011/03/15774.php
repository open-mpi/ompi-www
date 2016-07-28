<?
$subject_val = "Re: [OMPI users] RDMACM Differences";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 13:02:46 2011" -->
<!-- isoreceived="20110301180246" -->
<!-- sent="Tue, 1 Mar 2011 13:02:40 -0500" -->
<!-- isosent="20110301180240" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RDMACM Differences" -->
<!-- id="A76C72BE-DD94-40C2-B099-256C154B874C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimb31v0-V_KbULOfsQ9dg81tMWMC1J_122KMmX0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] RDMACM Differences<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-01 13:02:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15775.php">David Robertson: "[OMPI users] Mac OS X Static PGI"</a>
<li><strong>Previous message:</strong> <a href="15773.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/02/15760.php">Jagga Soorma: "[OMPI users] RDMACM Differences"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15787.php">Michael Shuey: "Re: [OMPI users] RDMACM Differences"</a>
<li><strong>Reply:</strong> <a href="15787.php">Michael Shuey: "Re: [OMPI users] RDMACM Differences"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 28, 2011, at 12:49 PM, Jagga Soorma wrote:
<br>
<p><span class="quotelev1">&gt; -bash-3.2$ mpiexec --mca btl openib,self -mca btl_openib_warn_default_gid_
</span><br>
<span class="quotelev1">&gt; prefix 0 -np 2 --hostfile mpihosts /home/jagga/osu-micro-benchmarks-3.3/openmpi/ofed-1.5.2/bin/osu_latency
</span><br>
<p>Your use of btl_openib_warn_default_gid_prefix may have brought up a subtle issue in Open MPI's verbs support.  More below.
<br>
<p><span class="quotelev1">&gt; # OSU MPI Latency Test v3.3
</span><br>
<span class="quotelev1">&gt; # Size            Latency (us)
</span><br>
<span class="quotelev1">&gt; [amber04][[10252,1],1][connect/btl_openib_connect_oob.c:325:qp_connect_all] error modifing QP to RTR errno says Invalid argument
</span><br>
<span class="quotelev1">&gt; [amber04][[10252,1],1][connect/btl_openib_connect_oob.c:815:rml_recv_cb] error in endpoint reply start connect
</span><br>
<p>Looking at this error message and your ibv_devinfo output:
<br>
<p><span class="quotelev1">&gt; [root_at_amber03 ~]# ibv_devinfo 
</span><br>
<span class="quotelev1">&gt; hca_id:    mlx4_0
</span><br>
<span class="quotelev1">&gt;     transport:            InfiniBand (0)
</span><br>
<span class="quotelev1">&gt;     fw_ver:                2.7.9294
</span><br>
<span class="quotelev1">&gt;     node_guid:            78e7:d103:0021:8884
</span><br>
<span class="quotelev1">&gt;     sys_image_guid:            78e7:d103:0021:8887
</span><br>
<span class="quotelev1">&gt;     vendor_id:            0x02c9
</span><br>
<span class="quotelev1">&gt;     vendor_part_id:            26438
</span><br>
<span class="quotelev1">&gt;     hw_ver:                0xB0
</span><br>
<span class="quotelev1">&gt;     board_id:            HP_0200000003
</span><br>
<span class="quotelev1">&gt;     phys_port_cnt:            2
</span><br>
<span class="quotelev1">&gt;         port:    1
</span><br>
<span class="quotelev1">&gt;             state:            PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;             max_mtu:        2048 (4)
</span><br>
<span class="quotelev1">&gt;             active_mtu:        2048 (4)
</span><br>
<span class="quotelev1">&gt;             sm_lid:            1
</span><br>
<span class="quotelev1">&gt;             port_lid:        20
</span><br>
<span class="quotelev1">&gt;             port_lmc:        0x00
</span><br>
<span class="quotelev1">&gt;             link_layer:        IB
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         port:    2
</span><br>
<span class="quotelev1">&gt;             state:            PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;             max_mtu:        2048 (4)
</span><br>
<span class="quotelev1">&gt;             active_mtu:        1024 (3)
</span><br>
<span class="quotelev1">&gt;             sm_lid:            0
</span><br>
<span class="quotelev1">&gt;             port_lid:        0
</span><br>
<span class="quotelev1">&gt;             port_lmc:        0x00
</span><br>
<span class="quotelev1">&gt;             link_layer:        Ethernet
</span><br>
<p>It looks like you have 1 HCA port as IB and the other at Ethernet.
<br>
<p>I'm wondering if OMPI is not taking the device transport into account and is *only* using the subnet ID to determine reachability (i.e., I'm wondering if we didn't anticipate multiple devices/ports with the same subnet ID but with different transports).  I pointed this out to Mellanox yesterday; I think they're following up on it.
<br>
<p>In the meantime, a workaround might be to set a non-default subnet ID on your IB network.  That should allow Open MPI to tell these networks apart without additional help.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15775.php">David Robertson: "[OMPI users] Mac OS X Static PGI"</a>
<li><strong>Previous message:</strong> <a href="15773.php">Joshua Hursey: "Re: [OMPI users] Unknown overhead in &quot;mpirun -am ft-enable-cr&quot;"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/02/15760.php">Jagga Soorma: "[OMPI users] RDMACM Differences"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15787.php">Michael Shuey: "Re: [OMPI users] RDMACM Differences"</a>
<li><strong>Reply:</strong> <a href="15787.php">Michael Shuey: "Re: [OMPI users] RDMACM Differences"</a>
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
