<?
$subject_val = "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  2 04:52:29 2011" -->
<!-- isoreceived="20110802085229" -->
<!-- sent="Tue, 02 Aug 2011 11:52:21 +0300" -->
<!-- isosent="20110802085221" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory" -->
<!-- id="4E37BAC5.6010902_at_dev.mellanox.co.il" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="69E19A2F-654C-4E18-A737-42177C1A8668_at_ornl.gov" -->
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
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-02 04:52:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17003.php">George Bosilca: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<li><strong>Previous message:</strong> <a href="17001.php">Jeff Squyres: "Re: [OMPI users] Seg fault with PBS Pro 10.4"</a>
<li><strong>In reply to:</strong> <a href="17000.php">Shamis, Pavel: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17067.php">&#229;&#144;&#149;&#230;&#133;&#167;&#228;&#188;&#159;: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<li><strong>Reply:</strong> <a href="17067.php">&#229;&#144;&#149;&#230;&#133;&#167;&#228;&#188;&#159;: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See this FAQ entry:
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-xrc">http://www.open-mpi.org/faq/?category=openfabrics#ib-xrc</a>
<br>
<p>-- YK
<br>
<p>On 02-Aug-11 12:27 AM, Shamis, Pavel wrote:
<br>
<span class="quotelev1">&gt; You may find some initial XRC tuning documentation here :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1260">https://svn.open-mpi.org/trac/ompi/ticket/1260</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Application Performance Tools Group
</span><br>
<span class="quotelev1">&gt; Computer Science and Math Division
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 1, 2011, at 11:41 AM, Yevgeny Kliteynik wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please try running OMPI with XRC:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   mpirun --mca btl openib... --mca btl_openib_receive_queues X,128,256,192,128:X,2048,256,128,32:X,12288,256,128,32:X,65536,256,128,32 ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; XRC (eXtended Reliable Connection) decreases memory consumption
</span><br>
<span class="quotelev2">&gt;&gt; of Open MPI by decreasing number of QP per machine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm not entirely sure that XRC is supported on OMPI 1.4, but I'm
</span><br>
<span class="quotelev2">&gt;&gt; sure it is on later version of the 1.4 series (1.4.3).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTW, I do know that the command line is extremely user friendly
</span><br>
<span class="quotelev2">&gt;&gt; and completely intuitive... :-)
</span><br>
<span class="quotelev2">&gt;&gt; I'll have an XRC entry on the OMPI FAQ web page in a day or two,
</span><br>
<span class="quotelev2">&gt;&gt; and you can find more details about this issue.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI FAQ: hxxp://www.open-mpi.org/faq/?category=openfabrics
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- YK
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 28-Jul-11 7:53 AM, &#229;&#144;&#149;&#230;&#133;&#167;&#228;&#188;&#159; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have encounted a problem concerns running large jobs on SMP cluster with Open MPI 1.4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The application need all-to-all communication, each process send messages to all other processes via MPI_Isend. It goes fine when running 256 processes, the problems occurs when process number&gt;=512.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The error message is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpirun -np 512 -machinefile machinefile.512 ./my_app
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [gh30][[23246,1],311][connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [gh26][[23246,1],106][connect/btl_openib_connect_oob.c:809:rml_recv_cb] error in endpoint reply start connect
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          [gh26][[23246,1],117][connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          mpirun has exited due to process rank 424 with PID 26841 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          node gh31 exiting without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Related post (hxxp://www.open-mpi.org/community/lists/users/2009/07/9786.php) suggests it may run out of HCA QP resources. So I checked my system configuration with 'ibv_devinfo -v' and get: 'max_qp: 261056'. In my case, running with 256 processes would be under the limit: 256^2 = 65536&lt;  261056, but 512^2 = 262144&gt;  261056.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My question is: how to increase the max_qp number of InfiniBand or how to get around this problem in MPI?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance for any help you may give!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Huiwei Lv
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PhD Student at Institute of Computing Technology
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; p.s. The system informantion is provided below:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ompi_info -v ompi full --parsable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi:version:full:1.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi:version:svn:r22285
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi:version:release_date:Dec 08, 2009
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ uname -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linux gh26 2 . 6 . 18-128 . el5 #1 SMP Wed Jan 21 10:41:14 EST 2009 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ulimit -l
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ ibv_devinfo -v
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hca_id: mlx4_0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          transport:                      InfiniBand (0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          fw_ver:                         2.7.000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          node_guid:                      00d2:c910:0001:b6c0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          sys_image_guid:                 00d2:c910:0001:b6c3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          vendor_id:                      0x02c9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          vendor_part_id:                 26428
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          hw_ver:                         0xB0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          board_id:                       MT_0D20110009
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          phys_port_cnt:                  1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_mr_size:                    0xffffffffffffffff
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          page_size_cap:                  0xfffffe00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_qp:                         261056
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_qp_wr:                      16351
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          device_cap_flags:               0x00fc9c76
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_sge:                        32
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_sge_rd:                     0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_cq:                         65408
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_cqe:                        4194303
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_mr:                         524272
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_pd:                         32764
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_qp_rd_atom:                 16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_ee_rd_atom:                 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_res_rd_atom:                4176896
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_qp_init_rd_atom:            128
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_ee_init_rd_atom:            0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          atomic_cap:                     ATOMIC_HCA (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_ee:                         0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_rdd:                        0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_mw:                         0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_raw_ipv6_qp:                0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_raw_ethy_qp:                1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_mcast_grp:                  8192
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_mcast_qp_attach:            56
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_total_mcast_qp_attach:      458752
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_ah:                         0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_fmr:                        0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_srq:                        65472
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_srq_wr:                     16383
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_srq_sge:                    31
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          max_pkeys:                      128
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          local_ca_ack_delay:             15
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                  port:   1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          state:                  PORT_ACTIVE (4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          max_mtu:                2048 (4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          active_mtu:             2048 (4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          sm_lid:                 86
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          port_lid:               73
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          port_lmc:               0x00
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          link_layer:             IB
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          max_msg_sz:             0x40000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          port_cap_flags:         0x02510868
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          max_vl_num:             8 (4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          bad_pkey_cntr:          0x0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          qkey_viol_cntr:         0x0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          sm_sl:                  0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          pkey_tbl_len:           128
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          gid_tbl_len:            128
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          subnet_timeout:         18
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          init_type_reply:        0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          active_width:           4X (2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          active_speed:           10.0 Gbps (4)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          phys_state:             LINK_UP (5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                          GID[  0]:               fe80:0000:0000:0000:00d2:c910:0001:b6c1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Related threads in the list:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hxxp://www.open-mpi.org/community/lists/users/2009/07/9786.php
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hxxp://www.open-mpi.org/community/lists/users/2009/08/10456.php
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hxxp://www.open-mpi.org/mailman/listinfo.cgi/users
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; hxxp://www.open-mpi.org/mailman/listinfo.cgi/users
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17003.php">George Bosilca: "Re: [OMPI users] OpenMPI on Tile architectures (no atomic primitives)"</a>
<li><strong>Previous message:</strong> <a href="17001.php">Jeff Squyres: "Re: [OMPI users] Seg fault with PBS Pro 10.4"</a>
<li><strong>In reply to:</strong> <a href="17000.php">Shamis, Pavel: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17067.php">&#229;&#144;&#149;&#230;&#133;&#167;&#228;&#188;&#159;: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<li><strong>Reply:</strong> <a href="17067.php">&#229;&#144;&#149;&#230;&#133;&#167;&#228;&#188;&#159;: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
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
