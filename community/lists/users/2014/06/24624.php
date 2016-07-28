<?
$subject_val = "Re: [OMPI users] openib segfaults with Torque";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 10 14:54:07 2014" -->
<!-- isoreceived="20140610185407" -->
<!-- sent="Tue, 10 Jun 2014 14:53:58 -0400" -->
<!-- isosent="20140610185358" -->
<!-- name="Fischer, Greg A." -->
<!-- email="fischega_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib segfaults with Torque" -->
<!-- id="C86C7F6037A63C44BCCD0D77E9D59BFE159F01006B_at_SWEC9985.w-intra.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140610184839.GA93892_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] openib segfaults with Torque<br>
<strong>From:</strong> Fischer, Greg A. (<em>fischega_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-10 14:53:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24625.php">Nathan Hjelm: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Previous message:</strong> <a href="24623.php">Nathan Hjelm: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>In reply to:</strong> <a href="24623.php">Nathan Hjelm: "Re: [OMPI users] openib segfaults with Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24625.php">Nathan Hjelm: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Reply:</strong> <a href="24625.php">Nathan Hjelm: "Re: [OMPI users] openib segfaults with Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, this fails on all nodes on the system, except for the head node.
<br>
<p>The uptime of the system isn't significant. Maybe 1 week, and it's received basically no use.
<br>
<p>-----Original Message-----
<br>
From: Nathan Hjelm [mailto:hjelmn_at_[hidden]]
<br>
Sent: Tuesday, June 10, 2014 2:49 PM
<br>
To: Fischer, Greg A.
<br>
Cc: Open MPI Users
<br>
Subject: Re: [OMPI users] openib segfaults with Torque
<br>
<p><p>Well, thats interesting. The output shows that ibv_create_cq is failing. Strange since an identical call had just succeeded (udcm creates two completion queues). Some questions that might indicate where the failure might be:
<br>
<p>Does this fail on any other node in your system?
<br>
<p>How long has the node been up?
<br>
<p>-Nathan Hjelm
<br>
Application Readiness, HPC-5, LANL
<br>
<p>On Tue, Jun 10, 2014 at 02:06:54PM -0400, Fischer, Greg A. wrote:
<br>
<span class="quotelev1">&gt; Jeff/Nathan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I ran the following with my debug build of OpenMPI 1.8.1 - after opening a terminal on a compute node with &quot;qsub -l nodes 2 -I&quot;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       mpirun -mca btl openib,self -mca btl_base_verbose 100 -np 2 ring_c &amp;&gt;
</span><br>
<span class="quotelev1">&gt; output.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Output and backtrace are attached. Let me know if I can provide anything else.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for looking into this,
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff
</span><br>
<span class="quotelev1">&gt; Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, June 10, 2014 10:31 AM
</span><br>
<span class="quotelev1">&gt; To: Nathan Hjelm
</span><br>
<span class="quotelev1">&gt; Cc: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] openib segfaults with Torque
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you run with &quot;--mca btl_base_verbose 100&quot; on your debug build so that we can get some additional output to see why UDCM is failing to setup properly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 10, 2014, at 10:25 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Jun 10, 2014 at 12:10:28AM +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I seem to recall that you have an IB-based cluster, right?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From a *very quick* glance at the code, it looks like this might be a simple incorrect-finalization issue.  That is:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - you run the job on a single server
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - openib disqualifies itself because you're running on a single
</span><br>
<span class="quotelev3">&gt; &gt;&gt; server
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - openib then goes to finalize/close itself
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - but openib didn't fully initialize itself (because it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; disqualified itself early in the initialization process), and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; something in the finalization process didn't take that into account
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Nathan -- is that anywhere close to correct?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Nope. udcm_module_finalize is being called because there was an
</span><br>
<span class="quotelev2">&gt; &gt; error setting up the udcm state. See btl_openib_connect_udcm.c:476.
</span><br>
<span class="quotelev2">&gt; &gt; The opal_list_t destructor is getting an assert failure. Probably
</span><br>
<span class="quotelev2">&gt; &gt; because the constructor wasn't called. I can rearrange the
</span><br>
<span class="quotelev2">&gt; &gt; constructors to be called first but there appears to be a deeper
</span><br>
<span class="quotelev2">&gt; &gt; issue with the user's
</span><br>
<span class="quotelev2">&gt; &gt; system: udcm_module_init should not be failing! It creates a couple
</span><br>
<span class="quotelev2">&gt; &gt; of CQs, allocates a small number of registered bufferes and starts
</span><br>
<span class="quotelev2">&gt; &gt; monitoring the fd for the completion channel. All these things are
</span><br>
<span class="quotelev2">&gt; &gt; also done in the setup of the openib btl itself. Keep in mind that
</span><br>
<span class="quotelev2">&gt; &gt; the openib btl will not disqualify itself when running single server.
</span><br>
<span class="quotelev2">&gt; &gt; Openib may be used to communicate on node and is needed for the dynamics case.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The user might try adding -mca btl_base_verbose 100 to shed some
</span><br>
<span class="quotelev2">&gt; &gt; light on what the real issue is.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; BTW, I no longer monitor the user mailing list. If something needs
</span><br>
<span class="quotelev2">&gt; &gt; my attention forward it to me directly.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; Core was generated by `ring_c'.
</span><br>
<span class="quotelev1">&gt; Program terminated with signal 6, Aborted.
</span><br>
<span class="quotelev1">&gt; #0  0x00007f8b6ae1cb55 in raise () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #0  0x00007f8b6ae1cb55 in raise () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007f8b6ae1e0c5 in abort () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #2  0x00007f8b6ae15a10 in __assert_fail () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #3  0x00007f8b664b684b in udcm_module_finalize (btl=0x717060,
</span><br>
<span class="quotelev1">&gt; cpc=0x7190c0) at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_co
</span><br>
<span class="quotelev1">&gt; nnect_udcm.c:734
</span><br>
<span class="quotelev1">&gt; #4  0x00007f8b664b5474 in udcm_component_query (btl=0x717060,
</span><br>
<span class="quotelev1">&gt; cpc=0x718a48) at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_co
</span><br>
<span class="quotelev1">&gt; nnect_udcm.c:476
</span><br>
<span class="quotelev1">&gt; #5  0x00007f8b664ae316 in
</span><br>
<span class="quotelev1">&gt; ompi_btl_openib_connect_base_select_for_local_port (btl=0x717060) at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_co
</span><br>
<span class="quotelev1">&gt; nnect_base.c:273
</span><br>
<span class="quotelev1">&gt; #6  0x00007f8b66497817 in btl_openib_component_init (num_btl_modules=0x7fffe34cebe0, enable_progress_threads=false, enable_mpi_threads=false)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/btl_openib_component.
</span><br>
<span class="quotelev1">&gt; c:2703
</span><br>
<span class="quotelev1">&gt; #7  0x00007f8b6b43fa5e in mca_btl_base_select
</span><br>
<span class="quotelev1">&gt; (enable_progress_threads=false, enable_mpi_threads=false) at
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-1.8.1/ompi/mca/btl/base/btl_base_select.c:108
</span><br>
<span class="quotelev1">&gt; #8  0x00007f8b666d9d42 in mca_bml_r2_component_init (priority=0x7fffe34cecb4, enable_progress_threads=false, enable_mpi_threads=false)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.8.1/ompi/mca/bml/r2/bml_r2_component.c:88
</span><br>
<span class="quotelev1">&gt; #9  0x00007f8b6b43ed1b in mca_bml_base_init
</span><br>
<span class="quotelev1">&gt; (enable_progress_threads=false, enable_mpi_threads=false) at
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-1.8.1/ompi/mca/bml/base/bml_base_init.c:69
</span><br>
<span class="quotelev1">&gt; #10 0x00007f8b655ff739 in mca_pml_ob1_component_init (priority=0x7fffe34cedf0, enable_progress_threads=false, enable_mpi_threads=false)
</span><br>
<span class="quotelev1">&gt;     at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.8.1/ompi/mca/pml/ob1/pml_ob1_component.c:271
</span><br>
<span class="quotelev1">&gt; #11 0x00007f8b6b4659b2 in mca_pml_base_select
</span><br>
<span class="quotelev1">&gt; (enable_progress_threads=false, enable_mpi_threads=false) at
</span><br>
<span class="quotelev1">&gt; ../../../../openmpi-1.8.1/ompi/mca/pml/base/pml_base_select.c:128
</span><br>
<span class="quotelev1">&gt; #12 0x00007f8b6b3d233c in ompi_mpi_init (argc=1, argv=0x7fffe34cf0e8,
</span><br>
<span class="quotelev1">&gt; requested=0, provided=0x7fffe34cef98) at
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.8.1/ompi/runtime/ompi_mpi_init.c:604
</span><br>
<span class="quotelev1">&gt; #13 0x00007f8b6b407386 in PMPI_Init (argc=0x7fffe34cefec,
</span><br>
<span class="quotelev1">&gt; argv=0x7fffe34cefe0) at pinit.c:84
</span><br>
<span class="quotelev1">&gt; #14 0x000000000040096f in main (argc=1, argv=0x7fffe34cf0e8) at
</span><br>
<span class="quotelev1">&gt; ring_c.c:19
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><span class="quotelev1">&gt; [binf316:24591] mca: base: components_register: registering btl
</span><br>
<span class="quotelev1">&gt; components [binf316:24591] mca: base: components_register: found
</span><br>
<span class="quotelev1">&gt; loaded component openib [binf316:24592] mca: base:
</span><br>
<span class="quotelev1">&gt; components_register: registering btl components [binf316:24592] mca:
</span><br>
<span class="quotelev1">&gt; base: components_register: found loaded component openib
</span><br>
<span class="quotelev1">&gt; [binf316:24591] mca: base: components_register: component openib
</span><br>
<span class="quotelev1">&gt; register function successful [binf316:24591] mca: base:
</span><br>
<span class="quotelev1">&gt; components_register: found loaded component self [binf316:24591] mca:
</span><br>
<span class="quotelev1">&gt; base: components_register: component self register function successful
</span><br>
<span class="quotelev1">&gt; [binf316:24591] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [binf316:24591] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; openib [binf316:24591] mca: base: components_open: component openib
</span><br>
<span class="quotelev1">&gt; open function successful [binf316:24591] mca: base: components_open:
</span><br>
<span class="quotelev1">&gt; found loaded component self [binf316:24591] mca: base:
</span><br>
<span class="quotelev1">&gt; components_open: component self open function successful
</span><br>
<span class="quotelev1">&gt; [binf316:24592] mca: base: components_register: component openib
</span><br>
<span class="quotelev1">&gt; register function successful [binf316:24592] mca: base:
</span><br>
<span class="quotelev1">&gt; components_register: found loaded component self [binf316:24592] mca:
</span><br>
<span class="quotelev1">&gt; base: components_register: component self register function successful
</span><br>
<span class="quotelev1">&gt; [binf316:24592] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [binf316:24592] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; openib [binf316:24592] mca: base: components_open: component openib
</span><br>
<span class="quotelev1">&gt; open function successful [binf316:24592] mca: base: components_open:
</span><br>
<span class="quotelev1">&gt; found loaded component self [binf316:24592] mca: base:
</span><br>
<span class="quotelev1">&gt; components_open: component self open function successful
</span><br>
<span class="quotelev1">&gt; [binf316:24591] select: initializing btl component openib
</span><br>
<span class="quotelev1">&gt; [binf316:24592] select: initializing btl component openib
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/btl_openib_ip.c:364:add_rdma_addr] Adding addr 9.9.10.75
</span><br>
<span class="quotelev1">&gt; (0x4b0a0909) subnet 0x9090000 as mlx4_0:1
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/btl_openib_ip.c:364:add_rdma_addr] Adding addr 9.9.10.75
</span><br>
<span class="quotelev1">&gt; (0x4b0a0909) subnet 0x9090000 as mlx4_0:1
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/btl_openib_component.c:686:init_one_port] looking for mlx4_0:1 GID
</span><br>
<span class="quotelev1">&gt; index 0
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/btl_openib_component.c:717:init_one_port] my IB subnet_id for HCA
</span><br>
<span class="quotelev1">&gt; mlx4_0 port 1 is fe80000000000000
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/btl_openib_component.c:1294:setup_qps] pp: rd_num is 256 rd_low is
</span><br>
<span class="quotelev1">&gt; 192 rd_win 128 rd_rsv 4
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/btl_openib_component.c:1339:setup_qps] srq: rd_num is 1024 rd_low is
</span><br>
<span class="quotelev1">&gt; 1008 sd_max is 64 rd_max is 256 srq_limit is 48
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/btl_openib_component.c:1339:setup_qps] srq: rd_num is 1024 rd_low is
</span><br>
<span class="quotelev1">&gt; 1008 sd_max is 64 rd_max is 256 srq_limit is 48
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/btl_openib_component.c:1339:setup_qps] srq: rd_num is 1024 rd_low is
</span><br>
<span class="quotelev1">&gt; 1008 sd_max is 64 rd_max is 256 srq_limit is 48
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/connect/btl_openib_connect_rdmacm.c:1840:rdmacm_component_query]
</span><br>
<span class="quotelev1">&gt; rdmacm_component_query
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/btl_openib_ip.c:132:mca_btl_openib_rdma_get_ipv4addr] Looking for
</span><br>
<span class="quotelev1">&gt; mlx4_0:1 in IP address list
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/btl_openib_ip.c:141:mca_btl_openib_rdma_get_ipv4addr] FOUND:
</span><br>
<span class="quotelev1">&gt; mlx4_0:1 is 9.9.10.75 (0x4b0a0909)
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/connect/btl_openib_connect_rdmacm.c:1750:ipaddrcheck] Found device
</span><br>
<span class="quotelev1">&gt; mlx4_0:1 = IP address 9.9.10.75 (0x4b0a0909):51845
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/connect/btl_openib_connect_rdmacm.c:1776:ipaddrcheck] creating new
</span><br>
<span class="quotelev1">&gt; server to listen on 9.9.10.75 (0x4b0a0909):51845 [binf316:24591]
</span><br>
<span class="quotelev1">&gt; openib BTL: rdmacm CPC available for use on mlx4_0:1
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/connect/btl_openib_connect_udcm.c:542:udcm_module_init] created cpc
</span><br>
<span class="quotelev1">&gt; module 0x719220 for btl 0x716ee0
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/btl_openib_component.c:686:init_one_port] looking for mlx4_0:1 GID
</span><br>
<span class="quotelev1">&gt; index 0
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/btl_openib_component.c:717:init_one_port] my IB subnet_id for HCA
</span><br>
<span class="quotelev1">&gt; mlx4_0 port 1 is fe80000000000000
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/connect/btl_openib_connect_udcm.c:565:udcm_module_init] error
</span><br>
<span class="quotelev1">&gt; creating ud send completion queue
</span><br>
<span class="quotelev1">&gt; ring_c: ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:734: udcm_module_finalize: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) == ((opal_object_t *) (&amp;m-&gt;cm_recv_msg_queue))-&gt;obj_magic_id' failed.
</span><br>
<span class="quotelev1">&gt; [binf316:24591] *** Process received signal *** [binf316:24591]
</span><br>
<span class="quotelev1">&gt; Signal: Aborted (6) [binf316:24591] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/btl_openib_component.c:1294:setup_qps] pp: rd_num is 256 rd_low is
</span><br>
<span class="quotelev1">&gt; 192 rd_win 128 rd_rsv 4
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/btl_openib_component.c:1339:setup_qps] srq: rd_num is 1024 rd_low is
</span><br>
<span class="quotelev1">&gt; 1008 sd_max is 64 rd_max is 256 srq_limit is 48
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/btl_openib_component.c:1339:setup_qps] srq: rd_num is 1024 rd_low is
</span><br>
<span class="quotelev1">&gt; 1008 sd_max is 64 rd_max is 256 srq_limit is 48
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/btl_openib_component.c:1339:setup_qps] srq: rd_num is 1024 rd_low is
</span><br>
<span class="quotelev1">&gt; 1008 sd_max is 64 rd_max is 256 srq_limit is 48
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/connect/btl_openib_connect_rdmacm.c:1840:rdmacm_component_query]
</span><br>
<span class="quotelev1">&gt; rdmacm_component_query
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/btl_openib_ip.c:132:mca_btl_openib_rdma_get_ipv4addr] Looking for
</span><br>
<span class="quotelev1">&gt; mlx4_0:1 in IP address list
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/btl_openib_ip.c:141:mca_btl_openib_rdma_get_ipv4addr] FOUND:
</span><br>
<span class="quotelev1">&gt; mlx4_0:1 is 9.9.10.75 (0x4b0a0909)
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/connect/btl_openib_connect_rdmacm.c:1750:ipaddrcheck] Found device
</span><br>
<span class="quotelev1">&gt; mlx4_0:1 = IP address 9.9.10.75 (0x4b0a0909):57734
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/connect/btl_openib_connect_rdmacm.c:1776:ipaddrcheck] creating new
</span><br>
<span class="quotelev1">&gt; server to listen on 9.9.10.75 (0x4b0a0909):57734 [binf316:24592]
</span><br>
<span class="quotelev1">&gt; openib BTL: rdmacm CPC available for use on mlx4_0:1
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/connect/btl_openib_connect_udcm.c:542:udcm_module_init] created cpc
</span><br>
<span class="quotelev1">&gt; module 0x7190c0 for btl 0x717060
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openi
</span><br>
<span class="quotelev1">&gt; b/connect/btl_openib_connect_udcm.c:565:udcm_module_init] error
</span><br>
<span class="quotelev1">&gt; creating ud send completion queue
</span><br>
<span class="quotelev1">&gt; ring_c: ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:734: udcm_module_finalize: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) == ((opal_object_t *) (&amp;m-&gt;cm_recv_msg_queue))-&gt;obj_magic_id' failed.
</span><br>
<span class="quotelev1">&gt; [binf316:24592] *** Process received signal *** [binf316:24592]
</span><br>
<span class="quotelev1">&gt; Signal: Aborted (6) [binf316:24592] Signal code:  (-6) [binf316:24591]
</span><br>
<span class="quotelev1">&gt; [ 0] /lib64/libpthread.so.0(+0xf7c0)[0x7fb35959c7c0]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x7fb359248b55]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [ 2] /lib64/libc.so.6(abort+0x181)[0x7fb35924a131]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [ 3]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__assert_fail+0xf0)[0x7fb359241a10]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [ 4]
</span><br>
<span class="quotelev1">&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_bt
</span><br>
<span class="quotelev1">&gt; l_openib.so(+0x3784b)[0x7fb3548e284b]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [ 5]
</span><br>
<span class="quotelev1">&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_bt
</span><br>
<span class="quotelev1">&gt; l_openib.so(+0x36474)[0x7fb3548e1474]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [ 6]
</span><br>
<span class="quotelev1">&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_bt
</span><br>
<span class="quotelev1">&gt; l_openib.so(ompi_btl_openib_connect_base_select_for_local_port+0x15b)[
</span><br>
<span class="quotelev1">&gt; 0x7fb3548da316] [binf316:24591] [ 7]
</span><br>
<span class="quotelev1">&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_bt
</span><br>
<span class="quotelev1">&gt; l_openib.so(+0x18817)[0x7fb3548c3817]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [ 8] [binf316:24592] [ 0]
</span><br>
<span class="quotelev1">&gt; /lib64/libpthread.so.0(+0xf7c0)[0x7f8b6b1707c0]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [ 1]
</span><br>
<span class="quotelev1">&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(mc
</span><br>
<span class="quotelev1">&gt; a_btl_base_select+0x1b2)[0x7fb35986ba5e]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [ 9] /lib64/libc.so.6(gsignal+0x35)[0x7f8b6ae1cb55]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [ 2]
</span><br>
<span class="quotelev1">&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_bm
</span><br>
<span class="quotelev1">&gt; l_r2.so(mca_bml_r2_component_init+0x20)[0x7fb354b05d42]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [10] /lib64/libc.so.6(abort+0x181)[0x7f8b6ae1e131]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [ 3]
</span><br>
<span class="quotelev1">&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(mc
</span><br>
<span class="quotelev1">&gt; a_bml_base_init+0xd6)[0x7fb35986ad1b]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [11]
</span><br>
<span class="quotelev1">&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_pm
</span><br>
<span class="quotelev1">&gt; l_ob1.so(+0x7739)[0x7fb353a2b739] [binf316:24591] [12]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__assert_fail+0xf0)[0x7f8b6ae15a10]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [ 4]
</span><br>
<span class="quotelev1">&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_bt
</span><br>
<span class="quotelev1">&gt; l_openib.so(+0x3784b)[0x7f8b664b684b]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [ 5]
</span><br>
<span class="quotelev1">&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_bt
</span><br>
<span class="quotelev1">&gt; l_openib.so(+0x36474)[0x7f8b664b5474]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [ 6]
</span><br>
<span class="quotelev1">&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(mc
</span><br>
<span class="quotelev1">&gt; a_pml_base_select+0x26e)[0x7fb3598919b2]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [13]
</span><br>
<span class="quotelev1">&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_bt
</span><br>
<span class="quotelev1">&gt; l_openib.so(ompi_btl_openib_connect_base_select_for_local_port+0x15b)[
</span><br>
<span class="quotelev1">&gt; 0x7f8b664ae316] [binf316:24592] [ 7]
</span><br>
<span class="quotelev1">&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_bt
</span><br>
<span class="quotelev1">&gt; l_openib.so(+0x18817)[0x7f8b66497817]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [ 8]
</span><br>
<span class="quotelev1">&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(om
</span><br>
<span class="quotelev1">&gt; pi_mpi_init+0x5f6)[0x7fb3597fe33c]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [14]
</span><br>
<span class="quotelev1">&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(mc
</span><br>
<span class="quotelev1">&gt; a_btl_base_select+0x1b2)[0x7f8b6b43fa5e]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [ 9]
</span><br>
<span class="quotelev1">&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_bm
</span><br>
<span class="quotelev1">&gt; l_r2.so(mca_bml_r2_component_init+0x20)[0x7f8b666d9d42]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [10]
</span><br>
<span class="quotelev1">&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(MP
</span><br>
<span class="quotelev1">&gt; I_Init+0x17e)[0x7fb359833386]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [15] ring_c[0x40096f]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [16]
</span><br>
<span class="quotelev1">&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(mc
</span><br>
<span class="quotelev1">&gt; a_bml_base_init+0xd6)[0x7f8b6b43ed1b]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [11]
</span><br>
<span class="quotelev1">&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_pm
</span><br>
<span class="quotelev1">&gt; l_ob1.so(+0x7739)[0x7f8b655ff739] [binf316:24592] [12]
</span><br>
<span class="quotelev1">&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(mc
</span><br>
<span class="quotelev1">&gt; a_pml_base_select+0x26e)[0x7f8b6b4659b2]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [13]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xe6)[0x7fb359234c36]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [17] ring_c[0x400889]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(om
</span><br>
<span class="quotelev1">&gt; pi_mpi_init+0x5f6)[0x7f8b6b3d233c]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [14]
</span><br>
<span class="quotelev1">&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(MP
</span><br>
<span class="quotelev1">&gt; I_Init+0x17e)[0x7f8b6b407386]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [15] ring_c[0x40096f]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [16]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xe6)[0x7f8b6ae08c36]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [17] ring_c[0x400889]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---- mpirun noticed that process rank 0 with PID 24591 on node xxxx316
</span><br>
<span class="quotelev1">&gt; exited on signal 6 (Aborted).
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24625.php">Nathan Hjelm: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Previous message:</strong> <a href="24623.php">Nathan Hjelm: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>In reply to:</strong> <a href="24623.php">Nathan Hjelm: "Re: [OMPI users] openib segfaults with Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24625.php">Nathan Hjelm: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Reply:</strong> <a href="24625.php">Nathan Hjelm: "Re: [OMPI users] openib segfaults with Torque"</a>
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
