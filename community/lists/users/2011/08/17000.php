<?
$subject_val = "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  1 17:27:10 2011" -->
<!-- isoreceived="20110801212710" -->
<!-- sent="Mon, 01 Aug 2011 17:27:04 -0400" -->
<!-- isosent="20110801212704" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory" -->
<!-- id="69E19A2F-654C-4E18-A737-42177C1A8668_at_ornl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="4E36C934.3090608_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-01 17:27:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17001.php">Jeff Squyres: "Re: [OMPI users] Seg fault with PBS Pro 10.4"</a>
<li><strong>Previous message:</strong> <a href="16999.php">Faisal Shahzad: "Re: [OMPI users] help regarding SELF checkpointing, c or c++"</a>
<li><strong>In reply to:</strong> <a href="16998.php">Yevgeny Kliteynik: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17002.php">Yevgeny Kliteynik: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<li><strong>Reply:</strong> <a href="17002.php">Yevgeny Kliteynik: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You may find some initial XRC tuning documentation here :
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/1260">https://svn.open-mpi.org/trac/ompi/ticket/1260</a>
<br>
<p>Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Aug 1, 2011, at 11:41 AM, Yevgeny Kliteynik wrote:
&gt; Hi,
&gt; 
&gt; Please try running OMPI with XRC:
&gt; 
&gt;  mpirun --mca btl openib... --mca btl_openib_receive_queues X,128,256,192,128:X,2048,256,128,32:X,12288,256,128,32:X,65536,256,128,32 ...
&gt; 
&gt; XRC (eXtended Reliable Connection) decreases memory consumption
&gt; of Open MPI by decreasing number of QP per machine.
&gt; 
&gt; I'm not entirely sure that XRC is supported on OMPI 1.4, but I'm
&gt; sure it is on later version of the 1.4 series (1.4.3).
&gt; 
&gt; BTW, I do know that the command line is extremely user friendly
&gt; and completely intuitive... :-)
&gt; I'll have an XRC entry on the OMPI FAQ web page in a day or two,
&gt; and you can find more details about this issue.
&gt; 
&gt; OMPI FAQ: hxxp://www.open-mpi.org/faq/?category=openfabrics
&gt; 
&gt; -- YK
&gt; 
&gt; On 28-Jul-11 7:53 AM, &#229;&#144;&#149;&#230;&#133;&#167;&#228;&#188;&#159; wrote:
&gt;&gt; Dear all,
&gt;&gt; 
&gt;&gt; I have encounted a problem concerns running large jobs on SMP cluster with Open MPI 1.4.
&gt;&gt; The application need all-to-all communication, each process send messages to all other processes via MPI_Isend. It goes fine when running 256 processes, the problems occurs when process number &gt;=512.
&gt;&gt; 
&gt;&gt; The error message is:
&gt;&gt;         mpirun -np 512 -machinefile machinefile.512 ./my_app
&gt;&gt;         [gh30][[23246,1],311][connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory
&gt;&gt;         ...
&gt;&gt;         [gh26][[23246,1],106][connect/btl_openib_connect_oob.c:809:rml_recv_cb] error in endpoint reply start connect
&gt;&gt;         [gh26][[23246,1],117][connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory
&gt;&gt;         ...
&gt;&gt;         mpirun has exited due to process rank 424 with PID 26841 on
&gt;&gt;         node gh31 exiting without calling &quot;finalize&quot;.
&gt;&gt; 
&gt;&gt; Related post (hxxp://www.open-mpi.org/community/lists/users/2009/07/9786.php) suggests it may run out of HCA QP resources. So I checked my system configuration with 'ibv_devinfo -v' and get: 'max_qp: 261056'. In my case, running with 256 processes would be under the limit: 256^2 = 65536 &lt; 261056, but 512^2 = 262144 &gt; 261056.
&gt;&gt; My question is: how to increase the max_qp number of InfiniBand or how to get around this problem in MPI?
&gt;&gt; 
&gt;&gt; Thanks in advance for any help you may give!
&gt;&gt; 
&gt;&gt; Huiwei Lv
&gt;&gt; PhD Student at Institute of Computing Technology
&gt;&gt; 
&gt;&gt; -------------------------
&gt;&gt; p.s. The system informantion is provided below:
&gt;&gt; $ ompi_info -v ompi full --parsable
&gt;&gt; ompi:version:full:1.4
&gt;&gt; ompi:version:svn:r22285
&gt;&gt; ompi:version:release_date:Dec 08, 2009
&gt;&gt; $ uname -a
&gt;&gt; Linux gh26 2 . 6 . 18-128 . el5 #1 SMP Wed Jan 21 10:41:14 EST 2009 x86_64 x86_64 x86_64 GNU/Linux
&gt;&gt; $ ulimit -l
&gt;&gt; unlimited
&gt;&gt; $ ibv_devinfo -v
&gt;&gt; hca_id: mlx4_0
&gt;&gt;         transport:                      InfiniBand (0)
&gt;&gt;         fw_ver:                         2.7.000
&gt;&gt;         node_guid:                      00d2:c910:0001:b6c0
&gt;&gt;         sys_image_guid:                 00d2:c910:0001:b6c3
&gt;&gt;         vendor_id:                      0x02c9
&gt;&gt;         vendor_part_id:                 26428
&gt;&gt;         hw_ver:                         0xB0
&gt;&gt;         board_id:                       MT_0D20110009
&gt;&gt;         phys_port_cnt:                  1
&gt;&gt;         max_mr_size:                    0xffffffffffffffff
&gt;&gt;         page_size_cap:                  0xfffffe00
&gt;&gt;         max_qp:                         261056
&gt;&gt;         max_qp_wr:                      16351
&gt;&gt;         device_cap_flags:               0x00fc9c76
&gt;&gt;         max_sge:                        32
&gt;&gt;         max_sge_rd:                     0
&gt;&gt;         max_cq:                         65408
&gt;&gt;         max_cqe:                        4194303
&gt;&gt;         max_mr:                         524272
&gt;&gt;         max_pd:                         32764
&gt;&gt;         max_qp_rd_atom:                 16
&gt;&gt;         max_ee_rd_atom:                 0
&gt;&gt;         max_res_rd_atom:                4176896
&gt;&gt;         max_qp_init_rd_atom:            128
&gt;&gt;         max_ee_init_rd_atom:            0
&gt;&gt;         atomic_cap:                     ATOMIC_HCA (1)
&gt;&gt;         max_ee:                         0
&gt;&gt;         max_rdd:                        0
&gt;&gt;         max_mw:                         0
&gt;&gt;         max_raw_ipv6_qp:                0
&gt;&gt;         max_raw_ethy_qp:                1
&gt;&gt;         max_mcast_grp:                  8192
&gt;&gt;         max_mcast_qp_attach:            56
&gt;&gt;         max_total_mcast_qp_attach:      458752
&gt;&gt;         max_ah:                         0
&gt;&gt;         max_fmr:                        0
&gt;&gt;         max_srq:                        65472
&gt;&gt;         max_srq_wr:                     16383
&gt;&gt;         max_srq_sge:                    31
&gt;&gt;         max_pkeys:                      128
&gt;&gt;         local_ca_ack_delay:             15
&gt;&gt;                 port:   1
&gt;&gt;                         state:                  PORT_ACTIVE (4)
&gt;&gt;                         max_mtu:                2048 (4)
&gt;&gt;                         active_mtu:             2048 (4)
&gt;&gt;                         sm_lid:                 86
&gt;&gt;                         port_lid:               73
&gt;&gt;                         port_lmc:               0x00
&gt;&gt;                         link_layer:             IB
&gt;&gt;                         max_msg_sz:             0x40000000
&gt;&gt;                         port_cap_flags:         0x02510868
&gt;&gt;                         max_vl_num:             8 (4)
&gt;&gt;                         bad_pkey_cntr:          0x0
&gt;&gt;                         qkey_viol_cntr:         0x0
&gt;&gt;                         sm_sl:                  0
&gt;&gt;                         pkey_tbl_len:           128
&gt;&gt;                         gid_tbl_len:            128
&gt;&gt;                         subnet_timeout:         18
&gt;&gt;                         init_type_reply:        0
&gt;&gt;                         active_width:           4X (2)
&gt;&gt;                         active_speed:           10.0 Gbps (4)
&gt;&gt;                         phys_state:             LINK_UP (5)
&gt;&gt;                         GID[  0]:               fe80:0000:0000:0000:00d2:c910:0001:b6c1
&gt;&gt; 
&gt;&gt; Related threads in the list:
&gt;&gt; hxxp://www.open-mpi.org/community/lists/users/2009/07/9786.php
&gt;&gt; hxxp://www.open-mpi.org/community/lists/users/2009/08/10456.php
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; hxxp://www.open-mpi.org/mailman/listinfo.cgi/users
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; hxxp://www.open-mpi.org/mailman/listinfo.cgi/users
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17001.php">Jeff Squyres: "Re: [OMPI users] Seg fault with PBS Pro 10.4"</a>
<li><strong>Previous message:</strong> <a href="16999.php">Faisal Shahzad: "Re: [OMPI users] help regarding SELF checkpointing, c or c++"</a>
<li><strong>In reply to:</strong> <a href="16998.php">Yevgeny Kliteynik: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17002.php">Yevgeny Kliteynik: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
<li><strong>Reply:</strong> <a href="17002.php">Yevgeny Kliteynik: "Re: [OMPI users] Open MPI 1.4: [connect/btl_openib_connect_oob.c:463:qp_create_one] error creating qp errno says Cannot allocate memory"</a>
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
