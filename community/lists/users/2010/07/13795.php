<?
$subject_val = "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 27 10:32:10 2010" -->
<!-- isoreceived="20100727143210" -->
<!-- sent="Tue, 27 Jul 2010 10:32:01 -0400" -->
<!-- isosent="20100727143201" -->
<!-- name="Brian Smith" -->
<!-- email="brs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1" -->
<!-- id="1280241121.12833.82.camel_at_plato.home" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4C4EB19C.5020401_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1<br>
<strong>From:</strong> Brian Smith (<em>brs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-27 10:32:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13796.php">Brian Smith: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="13794.php">Anton Shterenlikht: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13791.php">Terry Dontje: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13796.php">Brian Smith: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Both 1.4.1 and 1.4.2 exhibit the same behaviors w/ OFED 1.5.  It wasn't
<br>
OFED 1.4 after all (after some more digging around through our update
<br>
logs).
<br>
<p>All of the ibv_*_pingpong tests appear to work correctly.  I'll try
<br>
running a few more tests (np=2 over two nodes, some of the OSU
<br>
benchmarks, etc.)
<br>
<p>ibv_devinfo shows the following on all of my systems (obviously, the
<br>
guid values change).  Also, its normal for port 2 to be down as its not
<br>
connected yet:
<br>
<p># ibv_devinfo -v
<br>
hca_id:	mlx4_0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transport:			InfiniBand (0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:				2.6.000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node_guid:			0023:7dff:ff94:9078
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:			0023:7dff:ff94:907b
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:			0x02c9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:			25418
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:				0xA0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;board_id:			HP_09D0000001
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:			2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mr_size:			0xffffffffffffffff
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;page_size_cap:			0xfffffe00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_qp:				261568
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_qp_wr:			16351
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;device_cap_flags:		0x006c9c76
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_sge:			32
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_sge_rd:			0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_cq:				65408
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_cqe:			4194303
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mr:				524272
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_pd:				32764
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_qp_rd_atom:			16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_ee_rd_atom:			0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_res_rd_atom:		4185088
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_qp_init_rd_atom:		128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_ee_init_rd_atom:		0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;atomic_cap:			ATOMIC_HCA (1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_ee:				0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_rdd:			0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mw:				0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_raw_ipv6_qp:		0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_raw_ethy_qp:		2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mcast_grp:			8192
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mcast_qp_attach:		56
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_total_mcast_qp_attach:	458752
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_ah:				0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_fmr:			0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_srq:			65472
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_srq_wr:			16383
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_srq_sge:			31
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_pkeys:			128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;local_ca_ack_delay:		15
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:	1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:			PORT_ACTIVE (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:		2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:		2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:			1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:		192
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:		0x00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_msg_sz:		0x40000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_cap_flags:		0x02510868
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_vl_num:		8 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bad_pkey_cntr:		0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;qkey_viol_cntr:		0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_sl:			0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pkey_tbl_len:		128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gid_tbl_len:		128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subnet_timeout:		17
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;init_type_reply:	0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_width:		4X (2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_speed:		5.0 Gbps (2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_state:		LINK_UP (5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GID[  0]:		fe80:0000:0000:0000:0023:7dff:ff94:9079
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:	2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:			PORT_DOWN (1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:		2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:		2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:			0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:		0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:		0x00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_msg_sz:		0x40000000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_cap_flags:		0x02510868
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_vl_num:		8 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bad_pkey_cntr:		0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;qkey_viol_cntr:		0x0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_sl:			0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pkey_tbl_len:		128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gid_tbl_len:		128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subnet_timeout:		0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;init_type_reply:	0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_width:		4X (2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_speed:		2.5 Gbps (1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_state:		POLLING (2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GID[  0]:		fe80:0000:0000:0000:0023:7dff:ff94:907a
<br>
<p><p><p>On Tue, 2010-07-27 at 06:14 -0400, Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; A clarification from your previous email, you had your code working
</span><br>
<span class="quotelev1">&gt; with OMPI 1.4.1 but an older version of OFED?  Then you upgraded to
</span><br>
<span class="quotelev1">&gt; OFED 1.4 and things stopped working?  Sounds like your current system
</span><br>
<span class="quotelev1">&gt; is set up with OMPI 1.4.2 and OFED 1.5.  Anyways, I am a little
</span><br>
<span class="quotelev1">&gt; confused as to when things might have actually broke.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My first guess would be something may be wrong with the OFED setup.
</span><br>
<span class="quotelev1">&gt; Have checked the status of your ib devices with ibv_devinfo?  Have you
</span><br>
<span class="quotelev1">&gt; ran any of the OFED rc tests like ibv_rc_pingpong?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the above seems ok have you tried to run a simpler OMPI test like
</span><br>
<span class="quotelev1">&gt; connectivity?  I would see if a simple np=2 run spanning across two
</span><br>
<span class="quotelev1">&gt; nodes fails?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What OS distribution and version you are running on?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt; Brian Smith wrote: 
</span><br>
<span class="quotelev2">&gt; &gt; In case my previous e-mail is too vague for anyone to address, here's a
</span><br>
<span class="quotelev2">&gt; &gt; backtrace from my application.  This version, compiled with Intel
</span><br>
<span class="quotelev2">&gt; &gt; 11.1.064 (OpenMPI 1.4.2 w/ gcc 4.4.2), hangs during MPI_Alltoall
</span><br>
<span class="quotelev2">&gt; &gt; instead.  Running on 16 CPUs, Opteron 2427, Mellanox Technologies
</span><br>
<span class="quotelev2">&gt; &gt; MT25418 w/ OFED 1.5
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; strace on all ranks repeatedly shows:
</span><br>
<span class="quotelev2">&gt; &gt; poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6,
</span><br>
<span class="quotelev2">&gt; &gt; events=POLLIN}, {fd=7, events=POLLIN}, {fd=10, events=POLLIN}, {fd=22,
</span><br>
<span class="quotelev2">&gt; &gt; events=POLLIN}, {fd=23, events=POLLIN}], 7, 0) = 0 (Timeout)
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; gdb --pid=&lt;pid&gt;
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; #0  sm_fifo_read () at btl_sm.h:267
</span><br>
<span class="quotelev2">&gt; &gt; #1  mca_btl_sm_component_progress () at btl_sm_component.c:391
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x00002b00085116ea in opal_progress () at
</span><br>
<span class="quotelev2">&gt; &gt; runtime/opal_progress.c:207
</span><br>
<span class="quotelev2">&gt; &gt; #3  0x00002b0007def215 in opal_condition_wait (count=2,
</span><br>
<span class="quotelev2">&gt; &gt; requests=0x7fffd27802a0, statuses=0x7fffd2780270)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../opal/threads/condition.h:99
</span><br>
<span class="quotelev2">&gt; &gt; #4  ompi_request_default_wait_all (count=2, requests=0x7fffd27802a0,
</span><br>
<span class="quotelev2">&gt; &gt; statuses=0x7fffd2780270) at request/req_wait.c:262
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x00002b0007e805b7 in ompi_coll_tuned_sendrecv_actual
</span><br>
<span class="quotelev2">&gt; &gt; (sendbuf=0x2aaac2c4c210, scount=28000, 
</span><br>
<span class="quotelev2">&gt; &gt;     sdatatype=0x2b0008198ea0, dest=6, stag=-13, recvbuf=&lt;value optimized
</span><br>
<span class="quotelev2">&gt; &gt; out&gt;, rcount=28000, rdatatype=0x2b0008198ea0, 
</span><br>
<span class="quotelev2">&gt; &gt;     source=10, rtag=-13, comm=0x16ad7420, status=0x0) at
</span><br>
<span class="quotelev2">&gt; &gt; coll_tuned_util.c:55
</span><br>
<span class="quotelev2">&gt; &gt; #6  0x00002b0007e8705f in ompi_coll_tuned_sendrecv (sbuf=0x2aaac2b04010,
</span><br>
<span class="quotelev2">&gt; &gt; scount=28000, sdtype=0x2b0008198ea0, 
</span><br>
<span class="quotelev2">&gt; &gt;     rbuf=0x2aaac99a2010, rcount=28000, rdtype=0x2b0008198ea0,
</span><br>
<span class="quotelev2">&gt; &gt; comm=0x16ad7420, module=0x16ad8450)
</span><br>
<span class="quotelev2">&gt; &gt;     at coll_tuned_util.h:60
</span><br>
<span class="quotelev2">&gt; &gt; #7  ompi_coll_tuned_alltoall_intra_pairwise (sbuf=0x2aaac2b04010,
</span><br>
<span class="quotelev2">&gt; &gt; scount=28000, sdtype=0x2b0008198ea0, 
</span><br>
<span class="quotelev2">&gt; &gt;     rbuf=0x2aaac99a2010, rcount=28000, rdtype=0x2b0008198ea0,
</span><br>
<span class="quotelev2">&gt; &gt; comm=0x16ad7420, module=0x16ad8450)
</span><br>
<span class="quotelev2">&gt; &gt;     at coll_tuned_alltoall.c:70
</span><br>
<span class="quotelev2">&gt; &gt; #8  0x00002b0007e0a71f in PMPI_Alltoall (sendbuf=0x2aaac2b04010,
</span><br>
<span class="quotelev2">&gt; &gt; sendcount=28000, sendtype=0x2b0008198ea0, 
</span><br>
<span class="quotelev2">&gt; &gt;     recvbuf=0x2aaac99a2010, recvcount=28000, recvtype=0x2b0008198ea0,
</span><br>
<span class="quotelev2">&gt; &gt; comm=0x16ad7420) at palltoall.c:84
</span><br>
<span class="quotelev2">&gt; &gt; #9  0x00002b0007b8bc86 in mpi_alltoall_f (sendbuf=0x2aaac2b04010 &quot;&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; sendcount=0x7fffd27806a0, 
</span><br>
<span class="quotelev2">&gt; &gt;     sendtype=&lt;value optimized out&gt;, 
</span><br>
<span class="quotelev2">&gt; &gt;     recvbuf=0x2aaac99a2010 &quot;6%\177e\373\354\306&gt;\346\226z\262\347\350
</span><br>
<span class="quotelev2">&gt; &gt; \260&gt;\032ya(\303\003\272\276\231\343\322\363zj&#195;&#190;\230\247i\232\307P&#212;&#190;(\304
</span><br>
<span class="quotelev2">&gt; &gt; \373\321D\261&#196;&#190;\204&#214;&#156;&#206;&#149;h&#214;&#190;H\266H\342l2\245\276\231C7]\003\250&#199;&#190;`\277\231\272
</span><br>
<span class="quotelev2">&gt; &gt; \265E\261&gt;j\213&#209;&#147;\370\002\263&gt;&#208;&#157;&#195;&#152;x.\254&gt;}\332-\313\371\326\320&gt;\346\245f
</span><br>
<span class="quotelev2">&gt; &gt; \304\f\214\262\276\070\222zf#'\321&gt;\024\066&#204;&#134;\026\227&#201;&#190;.T\277\266}\366
</span><br>
<span class="quotelev2">&gt; &gt; \270&gt;h|\323L\330\f&#198;&#190;^z\214!q*\277\276pQ?O\346\067\270&gt;~\006\300&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; recvcount=0x7fffd27806a4, recvtype=0xb67490, 
</span><br>
<span class="quotelev2">&gt; &gt;     comm=0x12d9ba0, ierr=0x7fffd27806a8) at palltoall_f.c:76
</span><br>
<span class="quotelev2">&gt; &gt; #10 0x00000000004634cc in m_sumf_d_ ()
</span><br>
<span class="quotelev2">&gt; &gt; #11 0x0000000000463072 in m_sum_z_ ()
</span><br>
<span class="quotelev2">&gt; &gt; #12 0x00000000004c8a8b in mrg_grid_rc_ ()
</span><br>
<span class="quotelev2">&gt; &gt; #13 0x00000000004ffc5e in rhosym_ ()
</span><br>
<span class="quotelev2">&gt; &gt; #14 0x0000000000610dc6 in us_mp_set_charge_ ()
</span><br>
<span class="quotelev2">&gt; &gt; #15 0x0000000000771c43 in elmin_ ()
</span><br>
<span class="quotelev2">&gt; &gt; #16 0x0000000000453853 in MAIN__ ()
</span><br>
<span class="quotelev2">&gt; &gt; #17 0x000000000042f15c in main ()
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On other processes:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt; &gt; #0  0x0000003692a0b725 in pthread_spin_lock ()
</span><br>
<span class="quotelev2">&gt; &gt; from /lib64/libpthread.so.0
</span><br>
<span class="quotelev2">&gt; &gt; #1  0x00002aaaaacdfa7b in ibv_cmd_create_qp ()
</span><br>
<span class="quotelev2">&gt; &gt; from /usr/lib64/libmlx4-rdmav2.so
</span><br>
<span class="quotelev2">&gt; &gt; #2  0x00002b9dc1db3ff8 in progress_one_device ()
</span><br>
<span class="quotelev2">&gt; &gt; at /usr/include/infiniband/verbs.h:884
</span><br>
<span class="quotelev2">&gt; &gt; #3  btl_openib_component_progress () at btl_openib_component.c:3451
</span><br>
<span class="quotelev2">&gt; &gt; #4  0x00002b9dc24736ea in opal_progress () at
</span><br>
<span class="quotelev2">&gt; &gt; runtime/opal_progress.c:207
</span><br>
<span class="quotelev2">&gt; &gt; #5  0x00002b9dc1d51215 in opal_condition_wait (count=2,
</span><br>
<span class="quotelev2">&gt; &gt; requests=0x7fffece3cc20, statuses=0x7fffece3cbf0)
</span><br>
<span class="quotelev2">&gt; &gt;     at ../opal/threads/condition.h:99
</span><br>
<span class="quotelev2">&gt; &gt; #6  ompi_request_default_wait_all (count=2, requests=0x7fffece3cc20,
</span><br>
<span class="quotelev2">&gt; &gt; statuses=0x7fffece3cbf0) at request/req_wait.c:262
</span><br>
<span class="quotelev2">&gt; &gt; #7  0x00002b9dc1de25b7 in ompi_coll_tuned_sendrecv_actual
</span><br>
<span class="quotelev2">&gt; &gt; (sendbuf=0x2aaac2c4c210, scount=28000, 
</span><br>
<span class="quotelev2">&gt; &gt;     sdatatype=0x2b9dc20faea0, dest=6, stag=-13, recvbuf=&lt;value optimized
</span><br>
<span class="quotelev2">&gt; &gt; out&gt;, rcount=28000, rdatatype=0x2b9dc20faea0, 
</span><br>
<span class="quotelev2">&gt; &gt;     source=10, rtag=-13, comm=0x1745b420, status=0x0) at
</span><br>
<span class="quotelev2">&gt; &gt; coll_tuned_util.c:55
</span><br>
<span class="quotelev2">&gt; &gt; #8  0x00002b9dc1de905f in ompi_coll_tuned_sendrecv (sbuf=0x2aaac2b04010,
</span><br>
<span class="quotelev2">&gt; &gt; scount=28000, sdtype=0x2b9dc20faea0, 
</span><br>
<span class="quotelev2">&gt; &gt;     rbuf=0x2aaac99a2010, rcount=28000, rdtype=0x2b9dc20faea0,
</span><br>
<span class="quotelev2">&gt; &gt; comm=0x1745b420, module=0x1745c450)
</span><br>
<span class="quotelev2">&gt; &gt;     at coll_tuned_util.h:60
</span><br>
<span class="quotelev2">&gt; &gt; #9  ompi_coll_tuned_alltoall_intra_pairwise (sbuf=0x2aaac2b04010,
</span><br>
<span class="quotelev2">&gt; &gt; scount=28000, sdtype=0x2b9dc20faea0, 
</span><br>
<span class="quotelev2">&gt; &gt;     rbuf=0x2aaac99a2010, rcount=28000, rdtype=0x2b9dc20faea0,
</span><br>
<span class="quotelev2">&gt; &gt; comm=0x1745b420, module=0x1745c450)
</span><br>
<span class="quotelev2">&gt; &gt;     at coll_tuned_alltoall.c:70
</span><br>
<span class="quotelev2">&gt; &gt; #10 0x00002b9dc1d6c71f in PMPI_Alltoall (sendbuf=0x2aaac2b04010,
</span><br>
<span class="quotelev2">&gt; &gt; sendcount=28000, sendtype=0x2b9dc20faea0, 
</span><br>
<span class="quotelev2">&gt; &gt;     recvbuf=0x2aaac99a2010, recvcount=28000, recvtype=0x2b9dc20faea0,
</span><br>
<span class="quotelev2">&gt; &gt; comm=0x1745b420) at palltoall.c:84
</span><br>
<span class="quotelev2">&gt; &gt; #11 0x00002b9dc1aedc86 in mpi_alltoall_f (sendbuf=0x2aaac2b04010 &quot;&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; sendcount=0x7fffece3d020, 
</span><br>
<span class="quotelev2">&gt; &gt;     sendtype=&lt;value optimized out&gt;, 
</span><br>
<span class="quotelev2">&gt; &gt;     recvbuf=0x2aaac99a2010 &quot;6%\177e\373\354\306&gt;\346\226z\262\347\350
</span><br>
<span class="quotelev2">&gt; &gt; \260&gt;\032ya(\303\003\272\276\231\343\322\363zj&#195;&#190;\230\247i\232\307P&#212;&#190;(\304
</span><br>
<span class="quotelev2">&gt; &gt; \373\321D\261&#196;&#190;\204&#214;&#156;&#206;&#149;h&#214;&#190;H\266H\342l2\245\276\231C7]\003\250&#199;&#190;`\277\231\272
</span><br>
<span class="quotelev2">&gt; &gt; \265E\261&gt;j\213&#209;&#147;\370\002\263&gt;&#208;&#157;&#195;&#152;x.\254&gt;}\332-\313\371\326\320&gt;\346\245f
</span><br>
<span class="quotelev2">&gt; &gt; \304\f\214\262\276\070\222zf#'\321&gt;\024\066&#204;&#134;\026\227&#201;&#190;.T\277\266}\366
</span><br>
<span class="quotelev2">&gt; &gt; \270&gt;h|\323L\330\f&#198;&#190;^z\214!q*\277\276pQ?O\346\067\270&gt;~\006\300&quot;,
</span><br>
<span class="quotelev2">&gt; &gt; recvcount=0x7fffece3d024, recvtype=0xb67490, 
</span><br>
<span class="quotelev2">&gt; &gt;     comm=0x12d9ba0, ierr=0x7fffece3d028) at palltoall_f.c:76
</span><br>
<span class="quotelev2">&gt; &gt; #12 0x00000000004634cc in m_sumf_d_ ()
</span><br>
<span class="quotelev2">&gt; &gt; #13 0x0000000000463072 in m_sum_z_ ()
</span><br>
<span class="quotelev2">&gt; &gt; #14 0x00000000004c8a8b in mrg_grid_rc_ ()
</span><br>
<span class="quotelev2">&gt; &gt; #15 0x00000000004ffc5e in rhosym_ ()
</span><br>
<span class="quotelev2">&gt; &gt; #16 0x0000000000610dc6 in us_mp_set_charge_ ()
</span><br>
<span class="quotelev2">&gt; &gt; #17 0x0000000000771c43 in elmin_ ()
</span><br>
<span class="quotelev2">&gt; &gt; #18 0x0000000000453853 in MAIN__ ()
</span><br>
<span class="quotelev2">&gt; &gt; #19 0x000000000042f15c in main ()
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I set up padb to collect a full report on the process and I've attached
</span><br>
<span class="quotelev2">&gt; &gt; it to this message.  Let me know if I can provide anything further.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; -Brian
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, 2010-07-21 at 10:07 -0400, Brian Smith wrote:
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi, All,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; A couple of applications that I'm using -- VASP and Charmm -- end up
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;stuck&quot; (for lack of a better word) during a waitall call after some
</span><br>
<span class="quotelev3">&gt; &gt; &gt; non-blocking send/recv action.  This only happens when utilizing the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; openib btl.  I've followed a couple of bugs where this seemed to happen
</span><br>
<span class="quotelev3">&gt; &gt; &gt; in some previous revisions and tried the work-arounds provided, but to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; no avail.  I'm going to try running against a previous version to see if
</span><br>
<span class="quotelev3">&gt; &gt; &gt; its a regression of some sort, but this problem didn't seem to exist in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1.4.1 until our systems were updated to OFED &gt;= 1.4.  Any suggestions
</span><br>
<span class="quotelev3">&gt; &gt; &gt; besides the obvious, &quot;well, down-grade from &gt;= 1.4&quot;?  What additional
</span><br>
<span class="quotelev3">&gt; &gt; &gt; info can I provide to help?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -Brian
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ____________________________________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Oracle
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.650.633.7054
</span><br>
<span class="quotelev1">&gt; Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13796.php">Brian Smith: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<li><strong>Previous message:</strong> <a href="13794.php">Anton Shterenlikht: "Re: [OMPI users] MPI_Allreduce on local machine"</a>
<li><strong>In reply to:</strong> <a href="13791.php">Terry Dontje: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13796.php">Brian Smith: "Re: [OMPI users] Processes stuck after MPI_Waitall() in 1.4.1"</a>
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
