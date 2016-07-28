<?
$subject_val = "[OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 28 00:53:37 2011" -->
<!-- isoreceived="20110728045337" -->
<!-- sent="Thu, 28 Jul 2011 12:53:33 +0800" -->
<!-- isosent="20110728045333" -->
<!-- name="&#229;&#144;&#149;&#230;&#133;&#167;&#228;&#188;&#159;" -->
<!-- email="lvhuiwei_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory" -->
<!-- id="CAOGuw7ug4DKD_5XKizNrfPp_pEUj1rah9s0rhtUPuSz0KAyOOw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory<br>
<strong>From:</strong> &#229;&#144;&#149;&#230;&#133;&#167;&#228;&#188;&#159; (<em>lvhuiwei_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-28 00:53:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/08/17004.php">Faisal Shahzad: "[OMPI users] help regarding SELF checkpointing, c or c++"</a>
<li><strong>Previous message:</strong> <a href="17002.php">David Warren: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/08/17006.php">Yevgeny Kliteynik: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/08/17006.php">Yevgeny Kliteynik: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I have encounted a problem concerns running large jobs on SMP cluster with
<br>
Open MPI 1.4.
<br>
The application need all-to-all communication, each process send messages to
<br>
all other processes via MPI_Isend. It goes fine when running 256 processes,
<br>
the problems occurs when process number &gt;=512.
<br>
<p>The error message is:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 512 -machinefile machinefile.512 ./my_app
<br>
<p>&nbsp;[gh30][[23246,1],311][connect/btl_openib_connect_oob.c:463:qp_create_one]
<br>
error creating qp errno says Cannot allocate memory
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
<p>&nbsp;[gh26][[23246,1],106][connect/btl_openib_connect_oob.c:809:rml_recv_cb]
<br>
error in endpoint reply start connect
<br>
<p>&nbsp;[gh26][[23246,1],117][connect/btl_openib_connect_oob.c:463:qp_create_one]
<br>
error creating qp errno says Cannot allocate memory
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun has exited due to process rank 424 with PID 26841 on
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node gh31 exiting without calling &quot;finalize&quot;.
<br>
<p>Related post (<a href="http://www.open-mpi.org/community/lists/users/2009/07/9786.php">http://www.open-mpi.org/community/lists/users/2009/07/9786.php</a>)
<br>
suggests it may run out of HCA QP resources. So I checked my system
<br>
configuration with 'ibv_devinfo -v' and get: 'max_qp: 261056'. In my case,
<br>
running with 256 processes would be under the limit: 256^2 = 65536 &lt; 261056,
<br>
but 512^2 = 262144 &gt; 261056.
<br>
My question is: how to increase the max_qp number of InfiniBand or how to
<br>
get around this problem in MPI?
<br>
<p>Thanks in advance for any help you may give!
<br>
<p>Huiwei Lv
<br>
PhD Student at Institute of Computing Technology
<br>
<p>-------------------------
<br>
p.s. The system informantion is provided below:
<br>
$ ompi_info -v ompi full --parsable
<br>
ompi:version:full:1.4
<br>
ompi:version:svn:r22285
<br>
ompi:version:release_date:Dec 08, 2009
<br>
$ uname -a
<br>
Linux gh26 2.6.18-128.el5 #1 SMP Wed Jan 21 10:41:14 EST 2009 x86_64 x86_64
<br>
x86_64 GNU/Linux
<br>
$ ulimit -l
<br>
unlimited
<br>
$ ibv_devinfo -v
<br>
hca_id: mlx4_0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transport:                      InfiniBand (0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:                         2.7.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node_guid:                      00d2:c910:0001:b6c0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:                 00d2:c910:0001:b6c3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:                      0x02c9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:                 26428
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:                         0xB0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;board_id:                       MT_0D20110009
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:                  1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mr_size:                    0xffffffffffffffff
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;page_size_cap:                  0xfffffe00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_qp:                         261056
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_qp_wr:                      16351
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;device_cap_flags:               0x00fc9c76
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_sge:                        32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_sge_rd:                     0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_cq:                         65408
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_cqe:                        4194303
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mr:                         524272
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_pd:                         32764
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_qp_rd_atom:                 16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_ee_rd_atom:                 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_res_rd_atom:                4176896
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_qp_init_rd_atom:            128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_ee_init_rd_atom:            0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atomic_cap:                     ATOMIC_HCA (1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_ee:                         0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_rdd:                        0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mw:                         0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_raw_ipv6_qp:                0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_raw_ethy_qp:                1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mcast_grp:                  8192
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mcast_qp_attach:            56
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_total_mcast_qp_attach:      458752
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_ah:                         0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_fmr:                        0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_srq:                        65472
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_srq_wr:                     16383
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_srq_sge:                    31
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_pkeys:                      128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;local_ca_ack_delay:             15
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:   1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:                  PORT_ACTIVE (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:                2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:             2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:                 86
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:               73
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:               0x00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;link_layer:             IB
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_msg_sz:             0x40000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_cap_flags:         0x02510868
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_vl_num:             8 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bad_pkey_cntr:          0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;qkey_viol_cntr:         0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_sl:                  0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pkey_tbl_len:           128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gid_tbl_len:            128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subnet_timeout:         18
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;init_type_reply:        0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_width:           4X (2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_speed:           10.0 Gbps (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_state:             LINK_UP (5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GID[  0]:
<br>
fe80:0000:0000:0000:00d2:c910:0001:b6c1
<br>
<p>Related threads in the list:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/07/9786.php">http://www.open-mpi.org/community/lists/users/2009/07/9786.php</a>
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/08/10456.php">http://www.open-mpi.org/community/lists/users/2009/08/10456.php</a>
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17003/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/08/17004.php">Faisal Shahzad: "[OMPI users] help regarding SELF checkpointing, c or c++"</a>
<li><strong>Previous message:</strong> <a href="17002.php">David Warren: "Re: [OMPI users] Mixed Mellanox and Qlogic problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/08/17006.php">Yevgeny Kliteynik: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/08/17006.php">Yevgeny Kliteynik: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
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
