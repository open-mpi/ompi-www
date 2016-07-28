<?
$subject_val = "Re: [OMPI users] Openib with &gt; 32 cores per node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 10:27:52 2011" -->
<!-- isoreceived="20110519142752" -->
<!-- sent="Thu, 19 May 2011 08:27:46 -0600" -->
<!-- isosent="20110519142746" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openib with &amp;gt; 32 cores per node" -->
<!-- id="96704372-0769-4D63-BAA6-56FF331446BE_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1305804483.9663.121.camel_at_moelwyn" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openib with &gt; 32 cores per node<br>
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-19 10:27:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16574.php">Zhangping Wei: "[OMPI users] Error: Entry Point Not Found"</a>
<li><strong>Previous message:</strong> <a href="16572.php">Youri LACAN-BARTLEY: "Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup"</a>
<li><strong>In reply to:</strong> <a href="16571.php">Robert Horton: "[OMPI users] Openib with &gt; 32 cores per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16576.php">Robert Horton: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>Reply:</strong> <a href="16576.php">Robert Horton: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Try the following QP parameters that only use shared receive queues.
<br>
<p>-mca btl_openib_receive_queues S,12288,128,64,32:S,65536,128,64,32
<br>
<p>Samuel K. Gutierrez
<br>
Los Alamos National Laboratory
<br>
<p>On May 19, 2011, at 5:28 AM, Robert Horton wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm having problems getting the MPIRandomAccess part of the HPCC
</span><br>
<span class="quotelev1">&gt; benchmark to run with more than 32 processes on each node (each node has
</span><br>
<span class="quotelev1">&gt; 4 x AMD 6172 so 48 cores total). Once I go past 32 processes I get an
</span><br>
<span class="quotelev1">&gt; error like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [compute-1-13.local][[5637,1],18][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:464:qp_create_one] error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [compute-1-13.local][[5637,1],18][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:815:rml_recv_cb] error in endpoint reply start connect
</span><br>
<span class="quotelev1">&gt; [compute-1-13.local:06117] [[5637,0],0]-[[5637,1],18] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; [compute-1-13.local:6137] *** An error occurred in MPI_Isend
</span><br>
<span class="quotelev1">&gt; [compute-1-13.local:6137] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [compute-1-13.local:6137] *** MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev1">&gt; [compute-1-13.local:6137] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [compute-1-13.local][[5637,1],26][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:464:qp_create_one] error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [[5637,1],66][../../../../../ompi/mca/btl/openib/btl_openib_component.c:3227:handle_wc] from compute-1-13.local to: compute-1-13 error polling LP CQ with status RETRY EXCEEDED ERROR status number 12 for wr_id 278870912 opcode 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've tried changing btl_openib_receive_queues from
</span><br>
<span class="quotelev1">&gt; P,128,256,192,128:S,2048,256,128,32:S,12288,256,128,32:S,65536,256,128,32
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; P,128,512,256,512:S,2048,512,256,32:S,12288,512,256,32:S,65536,512,256,32
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; doing this lets the code run without the error, but it does so extremely
</span><br>
<span class="quotelev1">&gt; slowly - I'm also seeing errors in dmesg such as:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CPU 12:
</span><br>
<span class="quotelev1">&gt; Modules linked in: nfs fscache nfs_acl blcr(U) blcr_imports(U) autofs4 ipmi_devintf ipmi_si ipmi_msghandler lockd sunrpc ip_conntrack_netbios_ns ipt_REJECT xt_state
</span><br>
<span class="quotelev1">&gt; ip_conntrack nfnetlink iptable_filter ip_tables ip6t_REJECT xt_tcpudp ip6table_filter ip6_tables x_tables cpufreq_ondemand powernow_k8 freq_table rdma_ucm(U) ib_sd
</span><br>
<span class="quotelev1">&gt; p(U) rdma_cm(U) iw_cm(U) ib_addr(U) ib_ipoib(U) ipoib_helper(U) ib_cm(U) ib_sa(U) ipv6 xfrm_nalgo crypto_api ib_uverbs(U) ib_umad(U) iw_nes(U) iw_cxgb3(U) cxgb3(U) 
</span><br>
<span class="quotelev1">&gt; mlx4_ib(U) mlx4_en(U) mlx4_core(U) ib_mthca(U) dm_mirror dm_multipath scsi_dh video hwmon backlight sbs i2c_ec button battery asus_acpi acpi_memhotplug ac parport_p
</span><br>
<span class="quotelev1">&gt; c lp parport joydev shpchp sg i2c_piix4 i2c_core ib_qib(U) dca ib_mad(U) ib_core(U) igb 8021q serio_raw pcspkr dm_raid45 dm_message dm_region_hash dm_log dm_mod dm_
</span><br>
<span class="quotelev1">&gt; mem_cache ahci libata sd_mod scsi_mod ext3 jbd uhci_hcd ohci_hcd ehci_hcd
</span><br>
<span class="quotelev1">&gt; Pid: 3980, comm: qib/12 Tainted: G      2.6.18-164.6.1.el5 #1
</span><br>
<span class="quotelev1">&gt; RIP: 0010:[&lt;ffffffff80094409&gt;]  [&lt;ffffffff80094409&gt;] tasklet_action+0x90/0xfd
</span><br>
<span class="quotelev1">&gt; RSP: 0018:ffff810c2f1bff40  EFLAGS: 00000246
</span><br>
<span class="quotelev1">&gt; RAX: 0000000000000000 RBX: 0000000000000001 RCX: ffff810c2f1bff30
</span><br>
<span class="quotelev1">&gt; RDX: 0000000000000000 RSI: ffff81042f063400 RDI: ffffffff8030d180
</span><br>
<span class="quotelev1">&gt; RBP: ffff810c2f1bfec0 R08: 0000000000000001 R09: ffff8104aec2d000
</span><br>
<span class="quotelev1">&gt; R10: ffff810c2f1bff00 R11: ffff810c2f1bff00 R12: ffffffff8005dc8e
</span><br>
<span class="quotelev1">&gt; R13: ffff81042f063480 R14: ffffffff80077874 R15: ffff810c2f1bfec0
</span><br>
<span class="quotelev1">&gt; FS:  00002b20829592e0(0000) GS:ffff81042f186bc0(0000) knlGS:0000000000000000
</span><br>
<span class="quotelev1">&gt; CS:  0010 DS: 0018 ES: 0018 CR0: 000000008005003b
</span><br>
<span class="quotelev1">&gt; CR2: 00002b2080b70720 CR3: 0000000000201000 CR4: 00000000000006e0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Call Trace:
</span><br>
<span class="quotelev1">&gt; &lt;IRQ&gt;  [&lt;ffffffff8001235a&gt;] __do_softirq+0x89/0x133
</span><br>
<span class="quotelev1">&gt; [&lt;ffffffff8005e2fc&gt;] call_softirq+0x1c/0x28
</span><br>
<span class="quotelev1">&gt; [&lt;ffffffff8006cb20&gt;] do_softirq+0x2c/0x85
</span><br>
<span class="quotelev1">&gt; [&lt;ffffffff8005dc8e&gt;] apic_timer_interrupt+0x66/0x6c
</span><br>
<span class="quotelev1">&gt; &lt;EOI&gt;  [&lt;ffffffff800da30c&gt;] __kmalloc+0x97/0x9f
</span><br>
<span class="quotelev1">&gt; [&lt;ffffffff88220d8b&gt;] :ib_qib:qib_verbs_send+0xdb3/0x104a
</span><br>
<span class="quotelev1">&gt; [&lt;ffffffff80064b20&gt;] _spin_unlock_irqrestore+0x8/0x9
</span><br>
<span class="quotelev1">&gt; [&lt;ffffffff881f66ca&gt;] :ib_qib:qib_make_rc_req+0xbb1/0xbbf
</span><br>
<span class="quotelev1">&gt; [&lt;ffffffff881f5b19&gt;] :ib_qib:qib_make_rc_req+0x0/0xbbf
</span><br>
<span class="quotelev1">&gt; [&lt;ffffffff881f8187&gt;] :ib_qib:qib_do_send+0x0/0x950
</span><br>
<span class="quotelev1">&gt; [&lt;ffffffff881f8aa1&gt;] :ib_qib:qib_do_send+0x91a/0x950
</span><br>
<span class="quotelev1">&gt; [&lt;ffffffff8002e2e3&gt;] __wake_up+0x38/0x4f
</span><br>
<span class="quotelev1">&gt; [&lt;ffffffff881f8187&gt;] :ib_qib:qib_do_send+0x0/0x950
</span><br>
<span class="quotelev1">&gt; [&lt;ffffffff8004d7fb&gt;] run_workqueue+0x94/0xe4
</span><br>
<span class="quotelev1">&gt; [&lt;ffffffff8004a043&gt;] worker_thread+0x0/0x122
</span><br>
<span class="quotelev1">&gt; [&lt;ffffffff8009f9f0&gt;] keventd_create_kthread+0x0/0xc4
</span><br>
<span class="quotelev1">&gt; [&lt;ffffffff8004a133&gt;] worker_thread+0xf0/0x122
</span><br>
<span class="quotelev1">&gt; [&lt;ffffffff8008c3bd&gt;] default_wake_function+0x0/0xe
</span><br>
<span class="quotelev1">&gt; [&lt;ffffffff8009f9f0&gt;] keventd_create_kthread+0x0/0xc4
</span><br>
<span class="quotelev1">&gt; [&lt;ffffffff8003297c&gt;] kthread+0xfe/0x132
</span><br>
<span class="quotelev1">&gt; [&lt;ffffffff8005dfb1&gt;] child_rip+0xa/0x11
</span><br>
<span class="quotelev1">&gt; [&lt;ffffffff8009f9f0&gt;] keventd_create_kthread+0x0/0xc4
</span><br>
<span class="quotelev1">&gt; [&lt;ffffffff8003287e&gt;] kthread+0x0/0x132
</span><br>
<span class="quotelev1">&gt; [&lt;ffffffff8005dfa7&gt;] child_rip+0x0/0x11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any thoughts on how to proceed?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm running OpenMPI 1.4.3 compiled with gcc 4.1.2 and OFED 1.5.3.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rob
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Robert Horton
</span><br>
<span class="quotelev1">&gt; System Administrator (Research Support) - School of Mathematical Sciences
</span><br>
<span class="quotelev1">&gt; Queen Mary, University of London
</span><br>
<span class="quotelev1">&gt; r.horton_at_[hidden]  -  +44 (0) 20 7882 7345
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
<li><strong>Next message:</strong> <a href="16574.php">Zhangping Wei: "[OMPI users] Error: Entry Point Not Found"</a>
<li><strong>Previous message:</strong> <a href="16572.php">Youri LACAN-BARTLEY: "Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup"</a>
<li><strong>In reply to:</strong> <a href="16571.php">Robert Horton: "[OMPI users] Openib with &gt; 32 cores per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16576.php">Robert Horton: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
<li><strong>Reply:</strong> <a href="16576.php">Robert Horton: "Re: [OMPI users] Openib with &gt; 32 cores per node"</a>
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
