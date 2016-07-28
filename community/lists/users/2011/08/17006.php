<?
$subject_val = "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  1 11:41:51 2011" -->
<!-- isoreceived="20110801154151" -->
<!-- sent="Mon, 01 Aug 2011 18:41:40 +0300" -->
<!-- isosent="20110801154140" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory" -->
<!-- id="4E36C934.3090608_at_dev.mellanox.co.il" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAOGuw7ug4DKD_5XKizNrfPp_pEUj1rah9s0rhtUPuSz0KAyOOw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory<br>
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-01 11:41:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17007.php">Faisal Shahzad: "Re: [OMPI users] help regarding SELF checkpointing, c or c++"</a>
<li><strong>Previous message:</strong> <a href="17005.php">Josh Hursey: "Re: [OMPI users] help regarding SELF checkpointing, c or c++"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/17003.php">&#229;&#144;&#149;&#230;&#133;&#167;&#228;&#188;&#159;: "[OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17008.php">Shamis, Pavel: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<li><strong>Reply:</strong> <a href="17008.php">Shamis, Pavel: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Please try running OMPI with XRC:
<br>
<p>&nbsp;&nbsp;mpirun --mca btl openib... --mca btl_openib_receive_queues X,128,256,192,128:X,2048,256,128,32:X,12288,256,128,32:X,65536,256,128,32 ...
<br>
<p>XRC (eXtended Reliable Connection) decreases memory consumption
<br>
of Open MPI by decreasing number of QP per machine.
<br>
<p>I'm not entirely sure that XRC is supported on OMPI 1.4, but I'm
<br>
sure it is on later version of the 1.4 series (1.4.3).
<br>
<p>BTW, I do know that the command line is extremely user friendly
<br>
and completely intuitive... :-)
<br>
I'll have an XRC entry on the OMPI FAQ web page in a day or two,
<br>
and you can find more details about this issue.
<br>
<p>OMPI FAQ: <a href="http://www.open-mpi.org/faq/?category=openfabrics">http://www.open-mpi.org/faq/?category=openfabrics</a>
<br>
<p>-- YK
<br>
<p>On 28-Jul-11 7:53 AM, &#229;&#144;&#149;&#230;&#133;&#167;&#228;&#188;&#159; wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have encounted a problem concerns running large jobs on SMP cluster with Open MPI 1.4.
</span><br>
<span class="quotelev1">&gt; The application need all-to-all communication, each process send messages to all other processes via MPI_Isend. It goes fine when running 256 processes, the problems occurs when process number &gt;=512.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error message is:
</span><br>
<span class="quotelev1">&gt;          mpirun -np 512 -machinefile machinefile.512 ./my_app
</span><br>
<span class="quotelev1">&gt;          [gh30][[23246,1],311][connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt;          ...
</span><br>
<span class="quotelev1">&gt;          [gh26][[23246,1],106][connect/btl_openib_connect_oob.c:809:rml_recv_cb] error in endpoint reply start connect
</span><br>
<span class="quotelev1">&gt;          [gh26][[23246,1],117][connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt;          ...
</span><br>
<span class="quotelev1">&gt;          mpirun has exited due to process rank 424 with PID 26841 on
</span><br>
<span class="quotelev1">&gt;          node gh31 exiting without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Related post (<a href="http://www.open-mpi.org/community/lists/users/2009/07/9786.php">http://www.open-mpi.org/community/lists/users/2009/07/9786.php</a>) suggests it may run out of HCA QP resources. So I checked my system configuration with 'ibv_devinfo -v' and get: 'max_qp: 261056'. In my case, running with 256 processes would be under the limit: 256^2 = 65536 &lt; 261056, but 512^2 = 262144 &gt; 261056.
</span><br>
<span class="quotelev1">&gt; My question is: how to increase the max_qp number of InfiniBand or how to get around this problem in MPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any help you may give!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Huiwei Lv
</span><br>
<span class="quotelev1">&gt; PhD Student at Institute of Computing Technology
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -------------------------
</span><br>
<span class="quotelev1">&gt; p.s. The system informantion is provided below:
</span><br>
<span class="quotelev1">&gt; $ ompi_info -v ompi full --parsable
</span><br>
<span class="quotelev1">&gt; ompi:version:full:1.4
</span><br>
<span class="quotelev1">&gt; ompi:version:svn:r22285
</span><br>
<span class="quotelev1">&gt; ompi:version:release_date:Dec 08, 2009
</span><br>
<span class="quotelev1">&gt; $ uname -a
</span><br>
<span class="quotelev1">&gt; Linux gh26 2.6.18-128.el5 #1 SMP Wed Jan 21 10:41:14 EST 2009 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt; $ ulimit -l
</span><br>
<span class="quotelev1">&gt; unlimited
</span><br>
<span class="quotelev1">&gt; $ ibv_devinfo -v
</span><br>
<span class="quotelev1">&gt; hca_id: mlx4_0
</span><br>
<span class="quotelev1">&gt;          transport:                      InfiniBand (0)
</span><br>
<span class="quotelev1">&gt;          fw_ver:                         2.7.000
</span><br>
<span class="quotelev1">&gt;          node_guid:                      00d2:c910:0001:b6c0
</span><br>
<span class="quotelev1">&gt;          sys_image_guid:                 00d2:c910:0001:b6c3
</span><br>
<span class="quotelev1">&gt;          vendor_id:                      0x02c9
</span><br>
<span class="quotelev1">&gt;          vendor_part_id:                 26428
</span><br>
<span class="quotelev1">&gt;          hw_ver:                         0xB0
</span><br>
<span class="quotelev1">&gt;          board_id:                       MT_0D20110009
</span><br>
<span class="quotelev1">&gt;          phys_port_cnt:                  1
</span><br>
<span class="quotelev1">&gt;          max_mr_size:                    0xffffffffffffffff
</span><br>
<span class="quotelev1">&gt;          page_size_cap:                  0xfffffe00
</span><br>
<span class="quotelev1">&gt;          max_qp:                         261056
</span><br>
<span class="quotelev1">&gt;          max_qp_wr:                      16351
</span><br>
<span class="quotelev1">&gt;          device_cap_flags:               0x00fc9c76
</span><br>
<span class="quotelev1">&gt;          max_sge:                        32
</span><br>
<span class="quotelev1">&gt;          max_sge_rd:                     0
</span><br>
<span class="quotelev1">&gt;          max_cq:                         65408
</span><br>
<span class="quotelev1">&gt;          max_cqe:                        4194303
</span><br>
<span class="quotelev1">&gt;          max_mr:                         524272
</span><br>
<span class="quotelev1">&gt;          max_pd:                         32764
</span><br>
<span class="quotelev1">&gt;          max_qp_rd_atom:                 16
</span><br>
<span class="quotelev1">&gt;          max_ee_rd_atom:                 0
</span><br>
<span class="quotelev1">&gt;          max_res_rd_atom:                4176896
</span><br>
<span class="quotelev1">&gt;          max_qp_init_rd_atom:            128
</span><br>
<span class="quotelev1">&gt;          max_ee_init_rd_atom:            0
</span><br>
<span class="quotelev1">&gt;          atomic_cap:                     ATOMIC_HCA (1)
</span><br>
<span class="quotelev1">&gt;          max_ee:                         0
</span><br>
<span class="quotelev1">&gt;          max_rdd:                        0
</span><br>
<span class="quotelev1">&gt;          max_mw:                         0
</span><br>
<span class="quotelev1">&gt;          max_raw_ipv6_qp:                0
</span><br>
<span class="quotelev1">&gt;          max_raw_ethy_qp:                1
</span><br>
<span class="quotelev1">&gt;          max_mcast_grp:                  8192
</span><br>
<span class="quotelev1">&gt;          max_mcast_qp_attach:            56
</span><br>
<span class="quotelev1">&gt;          max_total_mcast_qp_attach:      458752
</span><br>
<span class="quotelev1">&gt;          max_ah:                         0
</span><br>
<span class="quotelev1">&gt;          max_fmr:                        0
</span><br>
<span class="quotelev1">&gt;          max_srq:                        65472
</span><br>
<span class="quotelev1">&gt;          max_srq_wr:                     16383
</span><br>
<span class="quotelev1">&gt;          max_srq_sge:                    31
</span><br>
<span class="quotelev1">&gt;          max_pkeys:                      128
</span><br>
<span class="quotelev1">&gt;          local_ca_ack_delay:             15
</span><br>
<span class="quotelev1">&gt;                  port:   1
</span><br>
<span class="quotelev1">&gt;                          state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;                          max_mtu:                2048 (4)
</span><br>
<span class="quotelev1">&gt;                          active_mtu:             2048 (4)
</span><br>
<span class="quotelev1">&gt;                          sm_lid:                 86
</span><br>
<span class="quotelev1">&gt;                          port_lid:               73
</span><br>
<span class="quotelev1">&gt;                          port_lmc:               0x00
</span><br>
<span class="quotelev1">&gt;                          link_layer:             IB
</span><br>
<span class="quotelev1">&gt;                          max_msg_sz:             0x40000000
</span><br>
<span class="quotelev1">&gt;                          port_cap_flags:         0x02510868
</span><br>
<span class="quotelev1">&gt;                          max_vl_num:             8 (4)
</span><br>
<span class="quotelev1">&gt;                          bad_pkey_cntr:          0x0
</span><br>
<span class="quotelev1">&gt;                          qkey_viol_cntr:         0x0
</span><br>
<span class="quotelev1">&gt;                          sm_sl:                  0
</span><br>
<span class="quotelev1">&gt;                          pkey_tbl_len:           128
</span><br>
<span class="quotelev1">&gt;                          gid_tbl_len:            128
</span><br>
<span class="quotelev1">&gt;                          subnet_timeout:         18
</span><br>
<span class="quotelev1">&gt;                          init_type_reply:        0
</span><br>
<span class="quotelev1">&gt;                          active_width:           4X (2)
</span><br>
<span class="quotelev1">&gt;                          active_speed:           10.0 Gbps (4)
</span><br>
<span class="quotelev1">&gt;                          phys_state:             LINK_UP (5)
</span><br>
<span class="quotelev1">&gt;                          GID[  0]:               fe80:0000:0000:0000:00d2:c910:0001:b6c1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Related threads in the list:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/07/9786.php">http://www.open-mpi.org/community/lists/users/2009/07/9786.php</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/08/10456.php">http://www.open-mpi.org/community/lists/users/2009/08/10456.php</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17007.php">Faisal Shahzad: "Re: [OMPI users] help regarding SELF checkpointing, c or c++"</a>
<li><strong>Previous message:</strong> <a href="17005.php">Josh Hursey: "Re: [OMPI users] help regarding SELF checkpointing, c or c++"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/17003.php">&#229;&#144;&#149;&#230;&#133;&#167;&#228;&#188;&#159;: "[OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17008.php">Shamis, Pavel: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<li><strong>Reply:</strong> <a href="17008.php">Shamis, Pavel: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
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
