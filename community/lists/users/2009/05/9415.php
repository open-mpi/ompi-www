<?
$subject_val = "[OMPI users] users Digest, Vol 1217, Issue 2, Message3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 21 22:34:33 2009" -->
<!-- isoreceived="20090522023433" -->
<!-- sent="Fri, 22 May 2009 10:33:11 +0800" -->
<!-- isosent="20090522023311" -->
<!-- name="jan" -->
<!-- email="jan_at_[hidden]" -->
<!-- subject="[OMPI users] users Digest, Vol 1217, Issue 2, Message3" -->
<!-- id="00b801c9da85$a9ae7ca0$1e63a8c0_at_xx30" -->
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
<strong>Subject:</strong> [OMPI users] users Digest, Vol 1217, Issue 2, Message3<br>
<strong>From:</strong> jan (<em>jan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-21 22:33:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9416.php">Φοίβος Κουκουβίνης: "[OMPI users] OpenMPI installation"</a>
<li><strong>Previous message:</strong> <a href="9414.php">Josh Hursey: "Re: [OMPI users] Bug in ompi-restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/9149.php">jan: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/9149.php">jan: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Maybe reply:</strong> <a href="9181.php">jan: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Maybe reply:</strong> <a href="9182.php">jan: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff. We solve this problem finally. Download the newest 
<br>
OFED-1.4.1-rc6.tgz, and reinstall all node's infiniband drivers and 
<br>
utilities. Everythings looks good, and I have my own coffee time now. Thanks 
<br>
again.
<br>
<p>Best Regards,
<br>
<p>Gloria Jan
<br>
Wavelink Technology Inc
<br>
<p><span class="quotelev1">&gt;I don't think the speed of the down port matters; port_down means that 
</span><br>
<span class="quotelev1">&gt;there's no cable connected, so the values are probably fairly random.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 7, 2009, at 10:38 PM, jan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyone can help me to find out problem or bug in my cluster? The  output 
</span><br>
<span class="quotelev2">&gt;&gt; of &quot;ibv_devinfo -v&quot; from Dell blade with infiniband module  look very 
</span><br>
<span class="quotelev2">&gt;&gt; strange. The phys_port_cnt is 2, one active, and another  down. The 
</span><br>
<span class="quotelev2">&gt;&gt; active port is 20x speed, the down port is 10x speed. We  are using Dell 
</span><br>
<span class="quotelev2">&gt;&gt; PowerEdge M600 Blade Serverwith Mellanox ConnectX DDR  infiniband 
</span><br>
<span class="quotelev2">&gt;&gt; Mezzanine card and Cisco M2401G infiniband switch. OS is  centOS 5.3, 
</span><br>
<span class="quotelev2">&gt;&gt; kernel 2.6.18-128.1.6el5 with PGI V7.2-5 compiler, and  OFED-1.4.1-rc4 
</span><br>
<span class="quotelev2">&gt;&gt; with openmpi-1.3.2:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # ibv_devinfo -v
</span><br>
<span class="quotelev2">&gt;&gt; hca_id: mlx4_0
</span><br>
<span class="quotelev2">&gt;&gt;         fw_ver:                         2.5.000
</span><br>
<span class="quotelev2">&gt;&gt;         node_guid:                      0018:8b90:97fe:73cd
</span><br>
<span class="quotelev2">&gt;&gt;         sys_image_guid:                 0018:8b90:97fe:73d0
</span><br>
<span class="quotelev2">&gt;&gt;         vendor_id:                      0x02c9
</span><br>
<span class="quotelev2">&gt;&gt;         vendor_part_id:                 25418
</span><br>
<span class="quotelev2">&gt;&gt;         hw_ver:                         0xA0
</span><br>
<span class="quotelev2">&gt;&gt;         board_id:                       DEL08C0000002
</span><br>
<span class="quotelev2">&gt;&gt;         phys_port_cnt:                  2
</span><br>
<span class="quotelev2">&gt;&gt;         max_mr_size:                    0xffffffffffffffff
</span><br>
<span class="quotelev2">&gt;&gt;         page_size_cap:                  0xfffff000
</span><br>
<span class="quotelev2">&gt;&gt;         max_qp:                         131008
</span><br>
<span class="quotelev2">&gt;&gt;         max_qp_wr:                      16351
</span><br>
<span class="quotelev2">&gt;&gt;         device_cap_flags:               0x000c1c66
</span><br>
<span class="quotelev2">&gt;&gt;         max_sge:                        32
</span><br>
<span class="quotelev2">&gt;&gt;         max_sge_rd:                     0
</span><br>
<span class="quotelev2">&gt;&gt;         max_cq:                         65408
</span><br>
<span class="quotelev2">&gt;&gt;         max_cqe:                        4194303
</span><br>
<span class="quotelev2">&gt;&gt;         max_mr:                         131056
</span><br>
<span class="quotelev2">&gt;&gt;         max_pd:                         32764
</span><br>
<span class="quotelev2">&gt;&gt;         max_qp_rd_atom:                 16
</span><br>
<span class="quotelev2">&gt;&gt;         max_ee_rd_atom:                 0
</span><br>
<span class="quotelev2">&gt;&gt;         max_res_rd_atom:                2096128
</span><br>
<span class="quotelev2">&gt;&gt;         max_qp_init_rd_atom:            128
</span><br>
<span class="quotelev2">&gt;&gt;         max_ee_init_rd_atom:            0
</span><br>
<span class="quotelev2">&gt;&gt;         atomic_cap:                     ATOMIC_HCA (1)
</span><br>
<span class="quotelev2">&gt;&gt;         max_ee:                         0
</span><br>
<span class="quotelev2">&gt;&gt;         max_rdd:                        0
</span><br>
<span class="quotelev2">&gt;&gt;         max_mw:                         0
</span><br>
<span class="quotelev2">&gt;&gt;         max_raw_ipv6_qp:                0
</span><br>
<span class="quotelev2">&gt;&gt;         max_raw_ethy_qp:                0
</span><br>
<span class="quotelev2">&gt;&gt;         max_mcast_grp:                  8192
</span><br>
<span class="quotelev2">&gt;&gt;         max_mcast_qp_attach:            56
</span><br>
<span class="quotelev2">&gt;&gt;         max_total_mcast_qp_attach:      458752
</span><br>
<span class="quotelev2">&gt;&gt;         max_ah:                         0
</span><br>
<span class="quotelev2">&gt;&gt;         max_fmr:                        0
</span><br>
<span class="quotelev2">&gt;&gt;         max_srq:                        65472
</span><br>
<span class="quotelev2">&gt;&gt;         max_srq_wr:                     16383
</span><br>
<span class="quotelev2">&gt;&gt;         max_srq_sge:                    31
</span><br>
<span class="quotelev2">&gt;&gt;         max_pkeys:                      128
</span><br>
<span class="quotelev2">&gt;&gt;         local_ca_ack_delay:             15
</span><br>
<span class="quotelev2">&gt;&gt;                 port:   1
</span><br>
<span class="quotelev2">&gt;&gt;                         state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev2">&gt;&gt;                         max_mtu:                2048 (4)
</span><br>
<span class="quotelev2">&gt;&gt;                         active_mtu:             2048 (4)
</span><br>
<span class="quotelev2">&gt;&gt;                         sm_lid:                 4
</span><br>
<span class="quotelev2">&gt;&gt;                         port_lid:               16
</span><br>
<span class="quotelev2">&gt;&gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev2">&gt;&gt;                         max_msg_sz:             0x40000000
</span><br>
<span class="quotelev2">&gt;&gt;                         port_cap_flags:         0x02510868
</span><br>
<span class="quotelev2">&gt;&gt;                         max_vl_num:             8 (4)
</span><br>
<span class="quotelev2">&gt;&gt;                         bad_pkey_cntr:          0x0
</span><br>
<span class="quotelev2">&gt;&gt;                         qkey_viol_cntr:         0x0
</span><br>
<span class="quotelev2">&gt;&gt;                         sm_sl:                  0
</span><br>
<span class="quotelev2">&gt;&gt;                         pkey_tbl_len:           128
</span><br>
<span class="quotelev2">&gt;&gt;                         gid_tbl_len:            128
</span><br>
<span class="quotelev2">&gt;&gt;                         subnet_timeout:         18
</span><br>
<span class="quotelev2">&gt;&gt;                         init_type_reply:        0
</span><br>
<span class="quotelev2">&gt;&gt;                         active_width:           4X (2)
</span><br>
<span class="quotelev2">&gt;&gt;                         active_speed:           5.0 Gbps (2)
</span><br>
<span class="quotelev2">&gt;&gt;                         phys_state:             LINK_UP (5)
</span><br>
<span class="quotelev2">&gt;&gt;                         GID[  0]: 
</span><br>
<span class="quotelev2">&gt;&gt; fe80:0000:0000:0000:0018:8b90:97fe:73ce
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gloria Jan
</span><br>
<span class="quotelev2">&gt;&gt; Wavelink Technology Inc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9416.php">Φοίβος Κουκουβίνης: "[OMPI users] OpenMPI installation"</a>
<li><strong>Previous message:</strong> <a href="9414.php">Josh Hursey: "Re: [OMPI users] Bug in ompi-restart"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/9149.php">jan: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/9149.php">jan: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Maybe reply:</strong> <a href="9181.php">jan: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Maybe reply:</strong> <a href="9182.php">jan: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
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
