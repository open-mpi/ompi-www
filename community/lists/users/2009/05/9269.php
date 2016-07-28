<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  8 10:38:55 2009" -->
<!-- isoreceived="20090508143855" -->
<!-- sent="Fri, 8 May 2009 10:38:49 -0400" -->
<!-- isosent="20090508143849" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3" -->
<!-- id="F1DB47A6-E791-449B-B0AE-099726FBD7AD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="011501c9cf86$079eba60$1e63a8c0_at_xx30" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-08 10:38:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9270.php">Kritiraj Sajadah: "[OMPI users] *** An error occurred in MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="9268.php">Jeff Squyres: "Re: [OMPI users] local config files / recursive includes"</a>
<li><strong>In reply to:</strong> <a href="9264.php">jan: "[OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think the speed of the down port matters; port_down means that  
<br>
there's no cable connected, so the values are probably fairly random.
<br>
<p><p>On May 7, 2009, at 10:38 PM, jan wrote:
<br>
<p><span class="quotelev1">&gt; Anyone can help me to find out problem or bug in my cluster? The  
</span><br>
<span class="quotelev1">&gt; output of &quot;ibv_devinfo -v&quot; from Dell blade with infiniband module  
</span><br>
<span class="quotelev1">&gt; look very strange. The phys_port_cnt is 2, one active, and another  
</span><br>
<span class="quotelev1">&gt; down. The active port is 20x speed, the down port is 10x speed. We  
</span><br>
<span class="quotelev1">&gt; are using Dell PowerEdge M600 Blade Serverwith Mellanox ConnectX DDR  
</span><br>
<span class="quotelev1">&gt; infiniband Mezzanine card and Cisco M2401G infiniband switch. OS is  
</span><br>
<span class="quotelev1">&gt; centOS 5.3, kernel 2.6.18-128.1.6el5 with PGI V7.2-5 compiler, and  
</span><br>
<span class="quotelev1">&gt; OFED-1.4.1-rc4 with openmpi-1.3.2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # ibv_devinfo -v
</span><br>
<span class="quotelev1">&gt; hca_id: mlx4_0
</span><br>
<span class="quotelev1">&gt;         fw_ver:                         2.5.000
</span><br>
<span class="quotelev1">&gt;         node_guid:                      0018:8b90:97fe:73cd
</span><br>
<span class="quotelev1">&gt;         sys_image_guid:                 0018:8b90:97fe:73d0
</span><br>
<span class="quotelev1">&gt;         vendor_id:                      0x02c9
</span><br>
<span class="quotelev1">&gt;         vendor_part_id:                 25418
</span><br>
<span class="quotelev1">&gt;         hw_ver:                         0xA0
</span><br>
<span class="quotelev1">&gt;         board_id:                       DEL08C0000002
</span><br>
<span class="quotelev1">&gt;         phys_port_cnt:                  2
</span><br>
<span class="quotelev1">&gt;         max_mr_size:                    0xffffffffffffffff
</span><br>
<span class="quotelev1">&gt;         page_size_cap:                  0xfffff000
</span><br>
<span class="quotelev1">&gt;         max_qp:                         131008
</span><br>
<span class="quotelev1">&gt;         max_qp_wr:                      16351
</span><br>
<span class="quotelev1">&gt;         device_cap_flags:               0x000c1c66
</span><br>
<span class="quotelev1">&gt;         max_sge:                        32
</span><br>
<span class="quotelev1">&gt;         max_sge_rd:                     0
</span><br>
<span class="quotelev1">&gt;         max_cq:                         65408
</span><br>
<span class="quotelev1">&gt;         max_cqe:                        4194303
</span><br>
<span class="quotelev1">&gt;         max_mr:                         131056
</span><br>
<span class="quotelev1">&gt;         max_pd:                         32764
</span><br>
<span class="quotelev1">&gt;         max_qp_rd_atom:                 16
</span><br>
<span class="quotelev1">&gt;         max_ee_rd_atom:                 0
</span><br>
<span class="quotelev1">&gt;         max_res_rd_atom:                2096128
</span><br>
<span class="quotelev1">&gt;         max_qp_init_rd_atom:            128
</span><br>
<span class="quotelev1">&gt;         max_ee_init_rd_atom:            0
</span><br>
<span class="quotelev1">&gt;         atomic_cap:                     ATOMIC_HCA (1)
</span><br>
<span class="quotelev1">&gt;         max_ee:                         0
</span><br>
<span class="quotelev1">&gt;         max_rdd:                        0
</span><br>
<span class="quotelev1">&gt;         max_mw:                         0
</span><br>
<span class="quotelev1">&gt;         max_raw_ipv6_qp:                0
</span><br>
<span class="quotelev1">&gt;         max_raw_ethy_qp:                0
</span><br>
<span class="quotelev1">&gt;         max_mcast_grp:                  8192
</span><br>
<span class="quotelev1">&gt;         max_mcast_qp_attach:            56
</span><br>
<span class="quotelev1">&gt;         max_total_mcast_qp_attach:      458752
</span><br>
<span class="quotelev1">&gt;         max_ah:                         0
</span><br>
<span class="quotelev1">&gt;         max_fmr:                        0
</span><br>
<span class="quotelev1">&gt;         max_srq:                        65472
</span><br>
<span class="quotelev1">&gt;         max_srq_wr:                     16383
</span><br>
<span class="quotelev1">&gt;         max_srq_sge:                    31
</span><br>
<span class="quotelev1">&gt;         max_pkeys:                      128
</span><br>
<span class="quotelev1">&gt;         local_ca_ack_delay:             15
</span><br>
<span class="quotelev1">&gt;                 port:   1
</span><br>
<span class="quotelev1">&gt;                         state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;                         max_mtu:                2048 (4)
</span><br>
<span class="quotelev1">&gt;                         active_mtu:             2048 (4)
</span><br>
<span class="quotelev1">&gt;                         sm_lid:                 4
</span><br>
<span class="quotelev1">&gt;                         port_lid:               16
</span><br>
<span class="quotelev1">&gt;                         port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;                         max_msg_sz:             0x40000000
</span><br>
<span class="quotelev1">&gt;                         port_cap_flags:         0x02510868
</span><br>
<span class="quotelev1">&gt;                         max_vl_num:             8 (4)
</span><br>
<span class="quotelev1">&gt;                         bad_pkey_cntr:          0x0
</span><br>
<span class="quotelev1">&gt;                         qkey_viol_cntr:         0x0
</span><br>
<span class="quotelev1">&gt;                         sm_sl:                  0
</span><br>
<span class="quotelev1">&gt;                         pkey_tbl_len:           128
</span><br>
<span class="quotelev1">&gt;                         gid_tbl_len:            128
</span><br>
<span class="quotelev1">&gt;                         subnet_timeout:         18
</span><br>
<span class="quotelev1">&gt;                         init_type_reply:        0
</span><br>
<span class="quotelev1">&gt;                         active_width:           4X (2)
</span><br>
<span class="quotelev1">&gt;                         active_speed:           5.0 Gbps (2)
</span><br>
<span class="quotelev1">&gt;                         phys_state:             LINK_UP (5)
</span><br>
<span class="quotelev1">&gt;                         GID[  0]:                
</span><br>
<span class="quotelev1">&gt; fe80:0000:0000:0000:0018:8b90:97fe:73ce
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gloria Jan
</span><br>
<span class="quotelev1">&gt; Wavelink Technology Inc.
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9270.php">Kritiraj Sajadah: "[OMPI users] *** An error occurred in MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="9268.php">Jeff Squyres: "Re: [OMPI users] local config files / recursive includes"</a>
<li><strong>In reply to:</strong> <a href="9264.php">jan: "[OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
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
