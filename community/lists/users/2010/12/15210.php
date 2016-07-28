<?
$subject_val = "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 22 00:09:19 2010" -->
<!-- isoreceived="20101222050919" -->
<!-- sent="Wed, 22 Dec 2010 06:09:10 +0100" -->
<!-- isosent="20101222050910" -->
<!-- name="Gilbert Grosdidier" -->
<!-- email="Gilbert.Grosdidier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance" -->
<!-- id="4D1187F6.10305_at_cern.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimKOYtv5k4-ghRGw-HTh4w7jTO_mYiz3egejCkT_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance<br>
<strong>From:</strong> Gilbert Grosdidier (<em>Gilbert.Grosdidier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-22 00:09:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15211.php">Eugene Loh: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15209.php">Tom Rosmond: "[OMPI users] questions about MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="15208.php">Matthieu Brucher: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15211.php">Eugene Loh: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<li><strong>Reply:</strong> <a href="15211.php">Eugene Loh: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are indeed a high rate of communications. But the buffer
<br>
size is always the same for a given pair of processes, and I thought
<br>
that mpi_leave_pinned should avoid freeing the memory in this case.
<br>
Am I wrong ?
<br>
<p>&nbsp;&nbsp;Thanks,  Best,     G.
<br>
<p><p>Le 21/12/2010 18:52, Matthieu Brucher a &#233;crit :
<br>
<span class="quotelev1">&gt; Don't forget that MPT has some optimizations OpenMPI may not have, as
</span><br>
<span class="quotelev1">&gt; &quot;overriding&quot; free(). This way, MPT can have a huge performance boost
</span><br>
<span class="quotelev1">&gt; if you're allocating and freeing memory, and the same happens if you
</span><br>
<span class="quotelev1">&gt; communicate often.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matthieu
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2010/12/21 Gilbert Grosdidier&lt;Gilbert.Grosdidier_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Hi George,
</span><br>
<span class="quotelev2">&gt;&gt;   Thanks for your help. The bottom line is that the processes are neatly
</span><br>
<span class="quotelev2">&gt;&gt; placed on the nodes/cores,
</span><br>
<span class="quotelev2">&gt;&gt; as far as I can tell from the map :
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt;          Process OMPI jobid: [33285,1] Process rank: 4
</span><br>
<span class="quotelev2">&gt;&gt;          Process OMPI jobid: [33285,1] Process rank: 5
</span><br>
<span class="quotelev2">&gt;&gt;          Process OMPI jobid: [33285,1] Process rank: 6
</span><br>
<span class="quotelev2">&gt;&gt;          Process OMPI jobid: [33285,1] Process rank: 7
</span><br>
<span class="quotelev2">&gt;&gt;   Data for node: Name: r34i0n1   Num procs: 8
</span><br>
<span class="quotelev2">&gt;&gt;          Process OMPI jobid: [33285,1] Process rank: 8
</span><br>
<span class="quotelev2">&gt;&gt;          Process OMPI jobid: [33285,1] Process rank: 9
</span><br>
<span class="quotelev2">&gt;&gt;          Process OMPI jobid: [33285,1] Process rank: 10
</span><br>
<span class="quotelev2">&gt;&gt;          Process OMPI jobid: [33285,1] Process rank: 11
</span><br>
<span class="quotelev2">&gt;&gt;          Process OMPI jobid: [33285,1] Process rank: 12
</span><br>
<span class="quotelev2">&gt;&gt;          Process OMPI jobid: [33285,1] Process rank: 13
</span><br>
<span class="quotelev2">&gt;&gt;          Process OMPI jobid: [33285,1] Process rank: 14
</span><br>
<span class="quotelev2">&gt;&gt;          Process OMPI jobid: [33285,1] Process rank: 15
</span><br>
<span class="quotelev2">&gt;&gt;   Data for node: Name: r34i0n2   Num procs: 8
</span><br>
<span class="quotelev2">&gt;&gt;          Process OMPI jobid: [33285,1] Process rank: 16
</span><br>
<span class="quotelev2">&gt;&gt;          Process OMPI jobid: [33285,1] Process rank: 17
</span><br>
<span class="quotelev2">&gt;&gt;          Process OMPI jobid: [33285,1] Process rank: 18
</span><br>
<span class="quotelev2">&gt;&gt;          Process OMPI jobid: [33285,1] Process rank: 19
</span><br>
<span class="quotelev2">&gt;&gt;          Process OMPI jobid: [33285,1] Process rank: 20
</span><br>
<span class="quotelev2">&gt;&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt;   But the perfs are still very low ;-(
</span><br>
<span class="quotelev2">&gt;&gt;   Best,    G.
</span><br>
<span class="quotelev2">&gt;&gt; Le 20 d&#233;c. 10 &#224; 22:27, George Bosilca a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's a first step. My question was more related to the process overlay on
</span><br>
<span class="quotelev2">&gt;&gt; the cores. If the MPI implementation place one process per node, then rank k
</span><br>
<span class="quotelev2">&gt;&gt; and rank k+1 will always be on separate node, and the communications will
</span><br>
<span class="quotelev2">&gt;&gt; have to go over IB. In the opposite if the MPI implementation places the
</span><br>
<span class="quotelev2">&gt;&gt; processes per core, then rank k and k+1 will [mostly] be on the same node
</span><br>
<span class="quotelev2">&gt;&gt; and the communications will be over shared memory. Depending on how the
</span><br>
<span class="quotelev2">&gt;&gt; processes are placed and how you create the neighborhoods the performance
</span><br>
<span class="quotelev2">&gt;&gt; can be drastically impacted.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There is a pretty good description of the problem at:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.hpccommunity.org/f55/behind-scenes-mpi-process-placement-640/">http://www.hpccommunity.org/f55/behind-scenes-mpi-process-placement-640/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Some hints at
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-scheduling">http://www.open-mpi.org/faq/?category=running#mpirun-scheduling</a>. I suggest
</span><br>
<span class="quotelev2">&gt;&gt; you play with the --byslot --bynode options to see how this affect the
</span><br>
<span class="quotelev2">&gt;&gt; performance of your application.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For the hardcore cases we provide a rankfile feature. More info at:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Enjoy,
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 20, 2010, at 15:45 , Gilbert Grosdidier wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, there is definitely only 1 process per core with both MPI
</span><br>
<span class="quotelev2">&gt;&gt; implementations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,   G.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Le 20/12/2010 20:39, George Bosilca a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are your processes places the same way with the two MPI implementations?
</span><br>
<span class="quotelev2">&gt;&gt; Per-node vs. per-core ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 20, 2010, at 11:14 , Gilbert Grosdidier wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bonjour,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am now at a loss with my running of OpenMPI (namely 1.4.3)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; on a SGI Altix cluster with 2048 or 4096 cores, running over Infiniband.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After fixing several rather obvious failures with Ralph, Jeff and John help,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am now facing the bottom of this story since :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - there are no more obvious failures with messages
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - compared to the running of the application with SGI-MPT, the CPU
</span><br>
<span class="quotelev2">&gt;&gt; performances I get
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; are very low, decreasing when the number of cores increases (cf below)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - these performances are highly reproducible
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - I tried a very high number of -mca parameters, to no avail
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I take as a reference the MPT CPU speed performance,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it is of about 900 (in some arbitrary unit), whatever the
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; number of cores I used (up to 8192).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But, when running with OMPI, I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - 700 with 1024 cores (which is already rather low)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - 300 with 2048 cores
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - 60   with 4096 cores.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The computing loop, over which the above CPU performance is evaluated,
</span><br>
<span class="quotelev2">&gt;&gt; includes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; a stack of MPI exchanges [per core : 8 x (MPI_Isend + MPI_Irecv) +
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Waitall]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The application is of the 'domain partition' type,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and the performances, together with the memory footprint,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; are very identical on all  cores. The memory footprint is twice higher in
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the OMPI case (1.5GB/core) than in the MPT case (0.7GB/core).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What could be wrong with all these, please ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I provided (in attachment) the 'ompi_info -all ' output.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The config.log is in attachment as well.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I compiled OMPI with icc. I checked numa and affinity are OK.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I use the following command to run my OMPI app:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mpiexec -mca btl_openib_rdma_pipeline_send_length 65536\
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca btl_openib_rdma_pipeline_frag_size 65536\
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca btl_openib_min_rdma_pipeline_size 65536\
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca btl_self_rdma_pipeline_send_length 262144\
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca btl_self_rdma_pipeline_frag_size 262144\
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca plm_rsh_num_concurrent 4096 -mca mpi_paffinity_alone 1\
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca mpi_leave_pinned 1 -mca btl_sm_max_send_size 128\
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca coll_tuned_pre_allocate_memory_comm_size_limit 128\
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca btl_openib_cq_size 128 -mca btl_ofud_rd_num 128\
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca mpool_rdma_rcache_size_limit 131072 -mca mpi_preconnect_mpi 0\
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca mpool_sm_min_size 131072 -mca mpi_abort_print_stack 1\
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca btl sm,openib,self -mca btl_openib_want_fork_support 0\
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca opal_set_max_sys_limits 1 -mca osc_pt2pt_no_locks 1\
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -mca osc_rdma_no_locks 1\
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $PBS_JOBDIR/phmc_tm_p2.$PBS_JOBID -v -f $Jinput&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenIB info:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) OFED-1.4.1, installed by SGI SGI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) Linux xxxxxx 2.6.16.60-0.42.10-smp #1 SMP Tue Apr 27 05:11:27 UTC 2010
</span><br>
<span class="quotelev2">&gt;&gt; x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OS : SGI ProPack 6SP5 for Linux, Build 605r1.sles10-0909302200
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3) Running most probably an SGI subnet manager
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4)&gt;    ibv_devinfo (on a worker node)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; hca_id:    mlx4_0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     fw_ver:                2.7.000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     node_guid:            0030:48ff:ffcc:4c44
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     sys_image_guid:            0030:48ff:ffcc:4c47
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     vendor_id:            0x02c9
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     vendor_part_id:            26418
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     hw_ver:                0xA0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     board_id:            SM_2071000001000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     phys_port_cnt:            2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         port:    1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             state:            PORT_ACTIVE (4)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             max_mtu:        2048 (4)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             active_mtu:        2048 (4)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             sm_lid:            1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             port_lid:        6009
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             port_lmc:        0x00
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         port:    2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             state:            PORT_ACTIVE (4)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             max_mtu:        2048 (4)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             active_mtu:        2048 (4)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             sm_lid:            1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             port_lid:        6010
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;             port_lmc:        0x00
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 5)&gt;    ifconfig -a (on a worker node)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; eth0      Link encap:Ethernet  HWaddr 00:30:48:CE:73:30
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           inet adr:192.168.159.10  Bcast:192.168.159.255
</span><br>
<span class="quotelev2">&gt;&gt;   Masque:255.255.255.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           adr inet6: fe80::230:48ff:fece:7330/64 Scope:Lien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           UP BROADCAST NOTRAILERS RUNNING MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           RX packets:32337499 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           TX packets:34733462 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           collisions:0 lg file transmission:1000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           RX bytes:11486224753 (10954.1 Mb)  TX bytes:16450996864 (15688.8
</span><br>
<span class="quotelev2">&gt;&gt; Mb)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           M&#233;moire:fbc60000-fbc80000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; eth1      Link encap:Ethernet  HWaddr 00:30:48:CE:73:31
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           BROADCAST MULTICAST  MTU:1500  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           collisions:0 lg file transmission:1000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           M&#233;moire:fbce0000-fbd00000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ib0       Link encap:UNSPEC  HWaddr
</span><br>
<span class="quotelev2">&gt;&gt; 80-00-00-48-FE-C0-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           inet adr:10.148.9.198  Bcast:10.148.255.255  Masque:255.255.0.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           adr inet6: fe80::230:48ff:ffcc:4c45/64 Scope:Lien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           UP BROADCAST RUNNING MULTICAST  MTU:65520  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           RX packets:115055101 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           TX packets:5390843 errors:0 dropped:182 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           collisions:0 lg file transmission:256
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           RX bytes:49592870352 (47295.4 Mb)  TX bytes:43566897620 (41548.6
</span><br>
<span class="quotelev2">&gt;&gt; Mb)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ib1       Link encap:UNSPEC  HWaddr
</span><br>
<span class="quotelev2">&gt;&gt; 80-00-00-49-FE-C0-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           inet adr:10.149.9.198  Bcast:10.149.255.255  Masque:255.255.0.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           adr inet6: fe80::230:48ff:ffcc:4c46/64 Scope:Lien
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           UP BROADCAST RUNNING MULTICAST  MTU:65520  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           RX packets:673448 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           TX packets:187 errors:0 dropped:5 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           collisions:0 lg file transmission:256
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           RX bytes:37713088 (35.9 Mb)  TX bytes:11228 (10.9 Kb)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; lo        Link encap:Boucle locale
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           inet adr:127.0.0.1  Masque:255.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           adr inet6: ::1/128 Scope:H&#244;te
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           UP LOOPBACK RUNNING  MTU:16436  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           RX packets:33504149 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           TX packets:33504149 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           collisions:0 lg file transmission:0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           RX bytes:5100850397 (4864.5 Mb)  TX bytes:5100850397 (4864.5 Mb)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sit0      Link encap:IPv6-dans-IPv4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           NOARP  MTU:1480  Metric:1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           collisions:0 lg file transmission:0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           RX bytes:0 (0.0 b)  TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 6)&gt;    limit (on a worker node)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cputime      unlimited
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; filesize     unlimited
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; datasize     unlimited
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; stacksize    300000 kbytes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; coredumpsize 0 kbytes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; memoryuse    unlimited
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; vmemoryuse   unlimited
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; descriptors  16384
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; memorylocked unlimited
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; maxproc      303104
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If some info is still missing despite all my efforts, please ask.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance for any hints,   Best,      G.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15211.php">Eugene Loh: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<li><strong>Previous message:</strong> <a href="15209.php">Tom Rosmond: "[OMPI users] questions about MPI-IO"</a>
<li><strong>In reply to:</strong> <a href="15208.php">Matthieu Brucher: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15211.php">Eugene Loh: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<li><strong>Reply:</strong> <a href="15211.php">Eugene Loh: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
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
