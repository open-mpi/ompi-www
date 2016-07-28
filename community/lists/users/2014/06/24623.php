<?
$subject_val = "Re: [OMPI users] openib segfaults with Torque";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 10 14:48:41 2014" -->
<!-- isoreceived="20140610184841" -->
<!-- sent="Tue, 10 Jun 2014 12:48:39 -0600" -->
<!-- isosent="20140610184839" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openib segfaults with Torque" -->
<!-- id="20140610184839.GA93892_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C86C7F6037A63C44BCCD0D77E9D59BFE159F00FF95_at_SWEC9985.w-intra.net" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-10 14:48:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24624.php">Fischer, Greg A.: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Previous message:</strong> <a href="24622.php">Fischer, Greg A.: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>In reply to:</strong> <a href="24622.php">Fischer, Greg A.: "Re: [OMPI users] openib segfaults with Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24624.php">Fischer, Greg A.: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Reply:</strong> <a href="24624.php">Fischer, Greg A.: "Re: [OMPI users] openib segfaults with Torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, thats interesting. The output shows that ibv_create_cq is
<br>
failing. Strange since an identical call had just succeeded (udcm
<br>
creates two completion queues). Some questions that might indicate where
<br>
the failure might be:
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
<span class="quotelev1">&gt; 	mpirun -mca btl openib,self -mca btl_base_verbose 100 -np 2 ring_c &amp;&gt; output.txt
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
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeff Squyres (jsquyres)
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
<span class="quotelev3">&gt; &gt;&gt; - but openib didn't fully initialize itself (because it disqualified 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; itself early in the initialization process), and something in the 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; finalization process didn't take that into account
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Nathan -- is that anywhere close to correct?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Nope. udcm_module_finalize is being called because there was an error 
</span><br>
<span class="quotelev2">&gt; &gt; setting up the udcm state. See btl_openib_connect_udcm.c:476. The 
</span><br>
<span class="quotelev2">&gt; &gt; opal_list_t destructor is getting an assert failure. Probably because 
</span><br>
<span class="quotelev2">&gt; &gt; the constructor wasn't called. I can rearrange the constructors to be 
</span><br>
<span class="quotelev2">&gt; &gt; called first but there appears to be a deeper issue with the user's
</span><br>
<span class="quotelev2">&gt; &gt; system: udcm_module_init should not be failing! It creates a couple of 
</span><br>
<span class="quotelev2">&gt; &gt; CQs, allocates a small number of registered bufferes and starts 
</span><br>
<span class="quotelev2">&gt; &gt; monitoring the fd for the completion channel. All these things are 
</span><br>
<span class="quotelev2">&gt; &gt; also done in the setup of the openib btl itself. Keep in mind that the 
</span><br>
<span class="quotelev2">&gt; &gt; openib btl will not disqualify itself when running single server. 
</span><br>
<span class="quotelev2">&gt; &gt; Openib may be used to communicate on node and is needed for the dynamics case.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The user might try adding -mca btl_base_verbose 100 to shed some light 
</span><br>
<span class="quotelev2">&gt; &gt; on what the real issue is.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; BTW, I no longer monitor the user mailing list. If something needs my 
</span><br>
<span class="quotelev2">&gt; &gt; attention forward it to me directly.
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; #3  0x00007f8b664b684b in udcm_module_finalize (btl=0x717060, cpc=0x7190c0) at ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:734
</span><br>
<span class="quotelev1">&gt; #4  0x00007f8b664b5474 in udcm_component_query (btl=0x717060, cpc=0x718a48) at ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:476
</span><br>
<span class="quotelev1">&gt; #5  0x00007f8b664ae316 in ompi_btl_openib_connect_base_select_for_local_port (btl=0x717060) at ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_base.c:273
</span><br>
<span class="quotelev1">&gt; #6  0x00007f8b66497817 in btl_openib_component_init (num_btl_modules=0x7fffe34cebe0, enable_progress_threads=false, enable_mpi_threads=false)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/btl_openib_component.c:2703
</span><br>
<span class="quotelev1">&gt; #7  0x00007f8b6b43fa5e in mca_btl_base_select (enable_progress_threads=false, enable_mpi_threads=false) at ../../../../openmpi-1.8.1/ompi/mca/btl/base/btl_base_select.c:108
</span><br>
<span class="quotelev1">&gt; #8  0x00007f8b666d9d42 in mca_bml_r2_component_init (priority=0x7fffe34cecb4, enable_progress_threads=false, enable_mpi_threads=false)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../openmpi-1.8.1/ompi/mca/bml/r2/bml_r2_component.c:88
</span><br>
<span class="quotelev1">&gt; #9  0x00007f8b6b43ed1b in mca_bml_base_init (enable_progress_threads=false, enable_mpi_threads=false) at ../../../../openmpi-1.8.1/ompi/mca/bml/base/bml_base_init.c:69
</span><br>
<span class="quotelev1">&gt; #10 0x00007f8b655ff739 in mca_pml_ob1_component_init (priority=0x7fffe34cedf0, enable_progress_threads=false, enable_mpi_threads=false)
</span><br>
<span class="quotelev1">&gt;     at ../../../../../openmpi-1.8.1/ompi/mca/pml/ob1/pml_ob1_component.c:271
</span><br>
<span class="quotelev1">&gt; #11 0x00007f8b6b4659b2 in mca_pml_base_select (enable_progress_threads=false, enable_mpi_threads=false) at ../../../../openmpi-1.8.1/ompi/mca/pml/base/pml_base_select.c:128
</span><br>
<span class="quotelev1">&gt; #12 0x00007f8b6b3d233c in ompi_mpi_init (argc=1, argv=0x7fffe34cf0e8, requested=0, provided=0x7fffe34cef98) at ../../openmpi-1.8.1/ompi/runtime/ompi_mpi_init.c:604
</span><br>
<span class="quotelev1">&gt; #13 0x00007f8b6b407386 in PMPI_Init (argc=0x7fffe34cefec, argv=0x7fffe34cefe0) at pinit.c:84
</span><br>
<span class="quotelev1">&gt; #14 0x000000000040096f in main (argc=1, argv=0x7fffe34cf0e8) at ring_c.c:19
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><span class="quotelev1">&gt; [binf316:24591] mca: base: components_register: registering btl components
</span><br>
<span class="quotelev1">&gt; [binf316:24591] mca: base: components_register: found loaded component openib
</span><br>
<span class="quotelev1">&gt; [binf316:24592] mca: base: components_register: registering btl components
</span><br>
<span class="quotelev1">&gt; [binf316:24592] mca: base: components_register: found loaded component openib
</span><br>
<span class="quotelev1">&gt; [binf316:24591] mca: base: components_register: component openib register function successful
</span><br>
<span class="quotelev1">&gt; [binf316:24591] mca: base: components_register: found loaded component self
</span><br>
<span class="quotelev1">&gt; [binf316:24591] mca: base: components_register: component self register function successful
</span><br>
<span class="quotelev1">&gt; [binf316:24591] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [binf316:24591] mca: base: components_open: found loaded component openib
</span><br>
<span class="quotelev1">&gt; [binf316:24591] mca: base: components_open: component openib open function successful
</span><br>
<span class="quotelev1">&gt; [binf316:24591] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [binf316:24591] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev1">&gt; [binf316:24592] mca: base: components_register: component openib register function successful
</span><br>
<span class="quotelev1">&gt; [binf316:24592] mca: base: components_register: found loaded component self
</span><br>
<span class="quotelev1">&gt; [binf316:24592] mca: base: components_register: component self register function successful
</span><br>
<span class="quotelev1">&gt; [binf316:24592] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [binf316:24592] mca: base: components_open: found loaded component openib
</span><br>
<span class="quotelev1">&gt; [binf316:24592] mca: base: components_open: component openib open function successful
</span><br>
<span class="quotelev1">&gt; [binf316:24592] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [binf316:24592] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev1">&gt; [binf316:24591] select: initializing btl component openib
</span><br>
<span class="quotelev1">&gt; [binf316:24592] select: initializing btl component openib
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/btl_openib_ip.c:364:add_rdma_addr] Adding addr 9.9.10.75 (0x4b0a0909) subnet 0x9090000 as mlx4_0:1
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/btl_openib_ip.c:364:add_rdma_addr] Adding addr 9.9.10.75 (0x4b0a0909) subnet 0x9090000 as mlx4_0:1
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/btl_openib_component.c:686:init_one_port] looking for mlx4_0:1 GID index 0
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/btl_openib_component.c:717:init_one_port] my IB subnet_id for HCA mlx4_0 port 1 is fe80000000000000
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/btl_openib_component.c:1294:setup_qps] pp: rd_num is 256 rd_low is 192 rd_win 128 rd_rsv 4
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/btl_openib_component.c:1339:setup_qps] srq: rd_num is 1024 rd_low is 1008 sd_max is 64 rd_max is 256 srq_limit is 48
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/btl_openib_component.c:1339:setup_qps] srq: rd_num is 1024 rd_low is 1008 sd_max is 64 rd_max is 256 srq_limit is 48
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/btl_openib_component.c:1339:setup_qps] srq: rd_num is 1024 rd_low is 1008 sd_max is 64 rd_max is 256 srq_limit is 48
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:1840:rdmacm_component_query] rdmacm_component_query
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/btl_openib_ip.c:132:mca_btl_openib_rdma_get_ipv4addr] Looking for mlx4_0:1 in IP address list
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/btl_openib_ip.c:141:mca_btl_openib_rdma_get_ipv4addr] FOUND: mlx4_0:1 is 9.9.10.75 (0x4b0a0909)
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:1750:ipaddrcheck] Found device mlx4_0:1 = IP address 9.9.10.75 (0x4b0a0909):51845
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:1776:ipaddrcheck] creating new server to listen on 9.9.10.75 (0x4b0a0909):51845
</span><br>
<span class="quotelev1">&gt; [binf316:24591] openib BTL: rdmacm CPC available for use on mlx4_0:1
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:542:udcm_module_init] created cpc module 0x719220 for btl 0x716ee0
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/btl_openib_component.c:686:init_one_port] looking for mlx4_0:1 GID index 0
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/btl_openib_component.c:717:init_one_port] my IB subnet_id for HCA mlx4_0 port 1 is fe80000000000000
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],0][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:565:udcm_module_init] error creating ud send completion queue
</span><br>
<span class="quotelev1">&gt; ring_c: ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:734: udcm_module_finalize: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) == ((opal_object_t *) (&amp;m-&gt;cm_recv_msg_queue))-&gt;obj_magic_id' failed.
</span><br>
<span class="quotelev1">&gt; [binf316:24591] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [binf316:24591] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [binf316:24591] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/btl_openib_component.c:1294:setup_qps] pp: rd_num is 256 rd_low is 192 rd_win 128 rd_rsv 4
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/btl_openib_component.c:1339:setup_qps] srq: rd_num is 1024 rd_low is 1008 sd_max is 64 rd_max is 256 srq_limit is 48
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/btl_openib_component.c:1339:setup_qps] srq: rd_num is 1024 rd_low is 1008 sd_max is 64 rd_max is 256 srq_limit is 48
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/btl_openib_component.c:1339:setup_qps] srq: rd_num is 1024 rd_low is 1008 sd_max is 64 rd_max is 256 srq_limit is 48
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:1840:rdmacm_component_query] rdmacm_component_query
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/btl_openib_ip.c:132:mca_btl_openib_rdma_get_ipv4addr] Looking for mlx4_0:1 in IP address list
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/btl_openib_ip.c:141:mca_btl_openib_rdma_get_ipv4addr] FOUND: mlx4_0:1 is 9.9.10.75 (0x4b0a0909)
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:1750:ipaddrcheck] Found device mlx4_0:1 = IP address 9.9.10.75 (0x4b0a0909):57734
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:1776:ipaddrcheck] creating new server to listen on 9.9.10.75 (0x4b0a0909):57734
</span><br>
<span class="quotelev1">&gt; [binf316:24592] openib BTL: rdmacm CPC available for use on mlx4_0:1
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:542:udcm_module_init] created cpc module 0x7190c0 for btl 0x717060
</span><br>
<span class="quotelev1">&gt; [binf316][[17980,1],1][../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:565:udcm_module_init] error creating ud send completion queue
</span><br>
<span class="quotelev1">&gt; ring_c: ../../../../../openmpi-1.8.1/ompi/mca/btl/openib/connect/btl_openib_connect_udcm.c:734: udcm_module_finalize: Assertion `((0xdeafbeedULL &lt;&lt; 32) + 0xdeafbeedULL) == ((opal_object_t *) (&amp;m-&gt;cm_recv_msg_queue))-&gt;obj_magic_id' failed.
</span><br>
<span class="quotelev1">&gt; [binf316:24592] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [binf316:24592] Signal: Aborted (6)
</span><br>
<span class="quotelev1">&gt; [binf316:24592] Signal code:  (-6)
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [ 0] /lib64/libpthread.so.0(+0xf7c0)[0x7fb35959c7c0]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x7fb359248b55]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [ 2] /lib64/libc.so.6(abort+0x181)[0x7fb35924a131]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [ 3] /lib64/libc.so.6(__assert_fail+0xf0)[0x7fb359241a10]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [ 4] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_btl_openib.so(+0x3784b)[0x7fb3548e284b]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [ 5] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_btl_openib.so(+0x36474)[0x7fb3548e1474]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [ 6] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_btl_openib.so(ompi_btl_openib_connect_base_select_for_local_port+0x15b)[0x7fb3548da316]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [ 7] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_btl_openib.so(+0x18817)[0x7fb3548c3817]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [ 8] [binf316:24592] [ 0] /lib64/libpthread.so.0(+0xf7c0)[0x7f8b6b1707c0]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [ 1] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(mca_btl_base_select+0x1b2)[0x7fb35986ba5e]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [ 9] /lib64/libc.so.6(gsignal+0x35)[0x7f8b6ae1cb55]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [ 2] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0x20)[0x7fb354b05d42]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [10] /lib64/libc.so.6(abort+0x181)[0x7f8b6ae1e131]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [ 3] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(mca_bml_base_init+0xd6)[0x7fb35986ad1b]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [11] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_pml_ob1.so(+0x7739)[0x7fb353a2b739]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [12] /lib64/libc.so.6(__assert_fail+0xf0)[0x7f8b6ae15a10]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [ 4] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_btl_openib.so(+0x3784b)[0x7f8b664b684b]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [ 5] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_btl_openib.so(+0x36474)[0x7f8b664b5474]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [ 6] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(mca_pml_base_select+0x26e)[0x7fb3598919b2]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [13] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_btl_openib.so(ompi_btl_openib_connect_base_select_for_local_port+0x15b)[0x7f8b664ae316]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [ 7] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_btl_openib.so(+0x18817)[0x7f8b66497817]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [ 8] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(ompi_mpi_init+0x5f6)[0x7fb3597fe33c]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [14] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(mca_btl_base_select+0x1b2)[0x7f8b6b43fa5e]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [ 9] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0x20)[0x7f8b666d9d42]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [10] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(MPI_Init+0x17e)[0x7fb359833386]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [15] ring_c[0x40096f]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [16] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(mca_bml_base_init+0xd6)[0x7f8b6b43ed1b]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [11] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/openmpi/mca_pml_ob1.so(+0x7739)[0x7f8b655ff739]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [12] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(mca_pml_base_select+0x26e)[0x7f8b6b4659b2]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [13] /lib64/libc.so.6(__libc_start_main+0xe6)[0x7fb359234c36]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] [17] ring_c[0x400889]
</span><br>
<span class="quotelev1">&gt; [binf316:24591] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(ompi_mpi_init+0x5f6)[0x7f8b6b3d233c]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [14] /xxxx/yyyy_ib/gcc-4.8.3/toolset/openmpi-1.8.1_debug/lib/libmpi.so.1(MPI_Init+0x17e)[0x7f8b6b407386]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [15] ring_c[0x40096f]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [16] /lib64/libc.so.6(__libc_start_main+0xe6)[0x7f8b6ae08c36]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] [17] ring_c[0x400889]
</span><br>
<span class="quotelev1">&gt; [binf316:24592] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 24591 on node xxxx316 exited on signal 6 (Aborted).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24623/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24624.php">Fischer, Greg A.: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Previous message:</strong> <a href="24622.php">Fischer, Greg A.: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>In reply to:</strong> <a href="24622.php">Fischer, Greg A.: "Re: [OMPI users] openib segfaults with Torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24624.php">Fischer, Greg A.: "Re: [OMPI users] openib segfaults with Torque"</a>
<li><strong>Reply:</strong> <a href="24624.php">Fischer, Greg A.: "Re: [OMPI users] openib segfaults with Torque"</a>
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
