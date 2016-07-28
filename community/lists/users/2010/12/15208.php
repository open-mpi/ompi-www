<?
$subject_val = "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 21 12:52:41 2010" -->
<!-- isoreceived="20101221175241" -->
<!-- sent="Tue, 21 Dec 2010 18:52:34 +0100" -->
<!-- isosent="20101221175234" -->
<!-- name="Matthieu Brucher" -->
<!-- email="matthieu.brucher_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance" -->
<!-- id="AANLkTimKOYtv5k4-ghRGw-HTh4w7jTO_mYiz3egejCkT_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A7471759-AA7E-4FD0-A2DD-0DDF84EFAA75_at_cern.ch" -->
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
<strong>From:</strong> Matthieu Brucher (<em>matthieu.brucher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-21 12:52:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15209.php">Tom Rosmond: "[OMPI users] questions about MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="15207.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores:	 very poor performance"</a>
<li><strong>In reply to:</strong> <a href="15207.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores:	 very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15210.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<li><strong>Reply:</strong> <a href="15210.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Don't forget that MPT has some optimizations OpenMPI may not have, as
<br>
&quot;overriding&quot; free(). This way, MPT can have a huge performance boost
<br>
if you're allocating and freeing memory, and the same happens if you
<br>
communicate often.
<br>
<p>Matthieu
<br>
<p>2010/12/21 Gilbert Grosdidier &lt;Gilbert.Grosdidier_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hi George,
</span><br>
<span class="quotelev1">&gt; &#160;Thanks for your help. The bottom line is that the processes are neatly
</span><br>
<span class="quotelev1">&gt; placed on the nodes/cores,
</span><br>
<span class="quotelev1">&gt; as far as I can tell from the map :
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; &#160;&#160; &#160; &#160; &#160;Process OMPI jobid: [33285,1] Process rank: 4
</span><br>
<span class="quotelev1">&gt; &#160;&#160; &#160; &#160; &#160;Process OMPI jobid: [33285,1] Process rank: 5
</span><br>
<span class="quotelev1">&gt; &#160;&#160; &#160; &#160; &#160;Process OMPI jobid: [33285,1] Process rank: 6
</span><br>
<span class="quotelev1">&gt; &#160;&#160; &#160; &#160; &#160;Process OMPI jobid: [33285,1] Process rank: 7
</span><br>
<span class="quotelev1">&gt; &#160;Data for node: Name: r34i0n1 &#160; Num procs: 8
</span><br>
<span class="quotelev1">&gt; &#160;&#160; &#160; &#160; &#160;Process OMPI jobid: [33285,1] Process rank: 8
</span><br>
<span class="quotelev1">&gt; &#160;&#160; &#160; &#160; &#160;Process OMPI jobid: [33285,1] Process rank: 9
</span><br>
<span class="quotelev1">&gt; &#160;&#160; &#160; &#160; &#160;Process OMPI jobid: [33285,1] Process rank: 10
</span><br>
<span class="quotelev1">&gt; &#160;&#160; &#160; &#160; &#160;Process OMPI jobid: [33285,1] Process rank: 11
</span><br>
<span class="quotelev1">&gt; &#160;&#160; &#160; &#160; &#160;Process OMPI jobid: [33285,1] Process rank: 12
</span><br>
<span class="quotelev1">&gt; &#160;&#160; &#160; &#160; &#160;Process OMPI jobid: [33285,1] Process rank: 13
</span><br>
<span class="quotelev1">&gt; &#160;&#160; &#160; &#160; &#160;Process OMPI jobid: [33285,1] Process rank: 14
</span><br>
<span class="quotelev1">&gt; &#160;&#160; &#160; &#160; &#160;Process OMPI jobid: [33285,1] Process rank: 15
</span><br>
<span class="quotelev1">&gt; &#160;Data for node: Name: r34i0n2 &#160; Num procs: 8
</span><br>
<span class="quotelev1">&gt; &#160;&#160; &#160; &#160; &#160;Process OMPI jobid: [33285,1] Process rank: 16
</span><br>
<span class="quotelev1">&gt; &#160;&#160; &#160; &#160; &#160;Process OMPI jobid: [33285,1] Process rank: 17
</span><br>
<span class="quotelev1">&gt; &#160;&#160; &#160; &#160; &#160;Process OMPI jobid: [33285,1] Process rank: 18
</span><br>
<span class="quotelev1">&gt; &#160;&#160; &#160; &#160; &#160;Process OMPI jobid: [33285,1] Process rank: 19
</span><br>
<span class="quotelev1">&gt; &#160;&#160; &#160; &#160; &#160;Process OMPI jobid: [33285,1] Process rank: 20
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; &#160;But the perfs are still very low ;-(
</span><br>
<span class="quotelev1">&gt; &#160;Best, &#160; &#160;G.
</span><br>
<span class="quotelev1">&gt; Le 20 d&#233;c. 10 &#224; 22:27, George Bosilca a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's a first step. My question was more related to the process overlay on
</span><br>
<span class="quotelev1">&gt; the cores. If the MPI implementation place one process per node, then rank k
</span><br>
<span class="quotelev1">&gt; and rank k+1 will always be on separate node, and the communications will
</span><br>
<span class="quotelev1">&gt; have to go over IB. In the opposite if the MPI implementation places the
</span><br>
<span class="quotelev1">&gt; processes per core, then rank k and k+1 will [mostly] be on the same node
</span><br>
<span class="quotelev1">&gt; and the communications will be over shared memory. Depending on how the
</span><br>
<span class="quotelev1">&gt; processes are placed and how you create the neighborhoods the performance
</span><br>
<span class="quotelev1">&gt; can be drastically impacted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a pretty good description of the problem at:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.hpccommunity.org/f55/behind-scenes-mpi-process-placement-640/">http://www.hpccommunity.org/f55/behind-scenes-mpi-process-placement-640/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some hints at
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-scheduling">http://www.open-mpi.org/faq/?category=running#mpirun-scheduling</a>. I suggest
</span><br>
<span class="quotelev1">&gt; you play with the --byslot --bynode options to see how this affect the
</span><br>
<span class="quotelev1">&gt; performance of your application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the hardcore cases we provide a rankfile feature. More info at:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Enjoy,
</span><br>
<span class="quotelev1">&gt; &#160;george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 20, 2010, at 15:45 , Gilbert Grosdidier wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, there is definitely only 1 process per core with both MPI
</span><br>
<span class="quotelev1">&gt; implementations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, &#160;&#160;G.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 20/12/2010 20:39, George Bosilca a &#233;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are your processes places the same way with the two MPI implementations?
</span><br>
<span class="quotelev1">&gt; Per-node vs. per-core ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 20, 2010, at 11:14 , Gilbert Grosdidier wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bonjour,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am now at a loss with my running of OpenMPI (namely 1.4.3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; on a SGI Altix cluster with 2048 or 4096 cores, running over Infiniband.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After fixing several rather obvious failures with Ralph, Jeff and John help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am now facing the bottom of this story since :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - there are no more obvious failures with messages
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - compared to the running of the application with SGI-MPT, the CPU
</span><br>
<span class="quotelev1">&gt; performances I get
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; are very low, decreasing when the number of cores increases (cf below)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - these performances are highly reproducible
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - I tried a very high number of -mca parameters, to no avail
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I take as a reference the MPT CPU speed performance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it is of about 900 (in some arbitrary unit), whatever the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; number of cores I used (up to 8192).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, when running with OMPI, I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - 700 with 1024 cores (which is already rather low)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - 300 with 2048 cores
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - 60 &#160;&#160;with 4096 cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The computing loop, over which the above CPU performance is evaluated,
</span><br>
<span class="quotelev1">&gt; includes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a stack of MPI exchanges [per core : 8 x (MPI_Isend + MPI_Irecv) +
</span><br>
<span class="quotelev1">&gt; MPI_Waitall]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The application is of the 'domain partition' type,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the performances, together with the memory footprint,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; are very identical on all &#160;cores. The memory footprint is twice higher in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the OMPI case (1.5GB/core) than in the MPT case (0.7GB/core).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What could be wrong with all these, please ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I provided (in attachment) the 'ompi_info -all ' output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The config.log is in attachment as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compiled OMPI with icc. I checked numa and affinity are OK.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use the following command to run my OMPI app:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;mpiexec -mca btl_openib_rdma_pipeline_send_length 65536\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca btl_openib_rdma_pipeline_frag_size 65536\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca btl_openib_min_rdma_pipeline_size 65536\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca btl_self_rdma_pipeline_send_length 262144\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca btl_self_rdma_pipeline_frag_size 262144\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca plm_rsh_num_concurrent 4096 -mca mpi_paffinity_alone 1\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca mpi_leave_pinned 1 -mca btl_sm_max_send_size 128\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca coll_tuned_pre_allocate_memory_comm_size_limit 128\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca btl_openib_cq_size 128 -mca btl_ofud_rd_num 128\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca mpool_rdma_rcache_size_limit 131072 -mca mpi_preconnect_mpi 0\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca mpool_sm_min_size 131072 -mca mpi_abort_print_stack 1\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca btl sm,openib,self -mca btl_openib_want_fork_support 0\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca opal_set_max_sys_limits 1 -mca osc_pt2pt_no_locks 1\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -mca osc_rdma_no_locks 1\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $PBS_JOBDIR/phmc_tm_p2.$PBS_JOBID -v -f $Jinput&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenIB info:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) OFED-1.4.1, installed by SGI SGI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) Linux xxxxxx 2.6.16.60-0.42.10-smp #1 SMP Tue Apr 27 05:11:27 UTC 2010
</span><br>
<span class="quotelev1">&gt; x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OS : SGI ProPack 6SP5 for Linux, Build 605r1.sles10-0909302200
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) Running most probably an SGI subnet manager
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4)&gt; &#160;ibv_devinfo (on a worker node)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hca_id: &#160;&#160;&#160;mlx4_0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;fw_ver: &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;2.7.000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;node_guid: &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;0030:48ff:ffcc:4c44
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;sys_image_guid: &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;0030:48ff:ffcc:4c47
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;vendor_id: &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;0x02c9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;vendor_part_id: &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;26418
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;hw_ver: &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;0xA0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;board_id: &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;SM_2071000001000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;phys_port_cnt: &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;port: &#160;&#160;&#160;1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;state: &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;max_mtu: &#160;&#160;&#160;&#160;&#160;&#160;&#160;2048 (4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;active_mtu: &#160;&#160;&#160;&#160;&#160;&#160;&#160;2048 (4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;sm_lid: &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;port_lid: &#160;&#160;&#160;&#160;&#160;&#160;&#160;6009
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;port_lmc: &#160;&#160;&#160;&#160;&#160;&#160;&#160;0x00
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;port: &#160;&#160;&#160;2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;state: &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;PORT_ACTIVE (4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;max_mtu: &#160;&#160;&#160;&#160;&#160;&#160;&#160;2048 (4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;active_mtu: &#160;&#160;&#160;&#160;&#160;&#160;&#160;2048 (4)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;sm_lid: &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;port_lid: &#160;&#160;&#160;&#160;&#160;&#160;&#160;6010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;port_lmc: &#160;&#160;&#160;&#160;&#160;&#160;&#160;0x00
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5)&gt; &#160;ifconfig -a (on a worker node)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eth0 &#160;&#160;&#160;&#160;&#160;Link encap:Ethernet &#160;HWaddr 00:30:48:CE:73:30
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;inet adr:192.168.159.10 &#160;Bcast:192.168.159.255
</span><br>
<span class="quotelev1">&gt; &#160;Masque:255.255.255.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;adr inet6: fe80::230:48ff:fece:7330/64 Scope:Lien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;UP BROADCAST NOTRAILERS RUNNING MULTICAST &#160;MTU:1500 &#160;Metric:1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;RX packets:32337499 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;TX packets:34733462 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;collisions:0 lg file transmission:1000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;RX bytes:11486224753 (10954.1 Mb) &#160;TX bytes:16450996864 (15688.8
</span><br>
<span class="quotelev1">&gt; Mb)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;M&#233;moire:fbc60000-fbc80000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; eth1 &#160;&#160;&#160;&#160;&#160;Link encap:Ethernet &#160;HWaddr 00:30:48:CE:73:31
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;BROADCAST MULTICAST &#160;MTU:1500 &#160;Metric:1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;collisions:0 lg file transmission:1000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;RX bytes:0 (0.0 b) &#160;TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;M&#233;moire:fbce0000-fbd00000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ib0 &#160;&#160;&#160;&#160;&#160;&#160;Link encap:UNSPEC &#160;HWaddr
</span><br>
<span class="quotelev1">&gt; 80-00-00-48-FE-C0-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;inet adr:10.148.9.198 &#160;Bcast:10.148.255.255 &#160;Masque:255.255.0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;adr inet6: fe80::230:48ff:ffcc:4c45/64 Scope:Lien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;UP BROADCAST RUNNING MULTICAST &#160;MTU:65520 &#160;Metric:1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;RX packets:115055101 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;TX packets:5390843 errors:0 dropped:182 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;collisions:0 lg file transmission:256
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;RX bytes:49592870352 (47295.4 Mb) &#160;TX bytes:43566897620 (41548.6
</span><br>
<span class="quotelev1">&gt; Mb)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ib1 &#160;&#160;&#160;&#160;&#160;&#160;Link encap:UNSPEC &#160;HWaddr
</span><br>
<span class="quotelev1">&gt; 80-00-00-49-FE-C0-00-00-00-00-00-00-00-00-00-00
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;inet adr:10.149.9.198 &#160;Bcast:10.149.255.255 &#160;Masque:255.255.0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;adr inet6: fe80::230:48ff:ffcc:4c46/64 Scope:Lien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;UP BROADCAST RUNNING MULTICAST &#160;MTU:65520 &#160;Metric:1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;RX packets:673448 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;TX packets:187 errors:0 dropped:5 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;collisions:0 lg file transmission:256
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;RX bytes:37713088 (35.9 Mb) &#160;TX bytes:11228 (10.9 Kb)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lo &#160;&#160;&#160;&#160;&#160;&#160;&#160;Link encap:Boucle locale
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;inet adr:127.0.0.1 &#160;Masque:255.0.0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;adr inet6: ::1/128 Scope:H&#244;te
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;UP LOOPBACK RUNNING &#160;MTU:16436 &#160;Metric:1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;RX packets:33504149 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;TX packets:33504149 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;collisions:0 lg file transmission:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;RX bytes:5100850397 (4864.5 Mb) &#160;TX bytes:5100850397 (4864.5 Mb)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sit0 &#160;&#160;&#160;&#160;&#160;Link encap:IPv6-dans-IPv4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;NOARP &#160;MTU:1480 &#160;Metric:1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;RX packets:0 errors:0 dropped:0 overruns:0 frame:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;TX packets:0 errors:0 dropped:0 overruns:0 carrier:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;collisions:0 lg file transmission:0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;RX bytes:0 (0.0 b) &#160;TX bytes:0 (0.0 b)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 6)&gt; &#160;limit (on a worker node)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cputime &#160;&#160;&#160;&#160;&#160;unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; filesize &#160;&#160;&#160;&#160;unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; datasize &#160;&#160;&#160;&#160;unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; stacksize &#160;&#160;&#160;300000 kbytes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; coredumpsize 0 kbytes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; memoryuse &#160;&#160;&#160;unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; vmemoryuse &#160;&#160;unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; descriptors &#160;16384
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; memorylocked unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; maxproc &#160;&#160;&#160;&#160;&#160;303104
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If some info is still missing despite all my efforts, please ask.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any hints, &#160;&#160;Best, &#160;&#160;&#160;&#160;&#160;G.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;config.log.gz&gt;&lt;ompi_info-all.001.gz&gt;_______________________________________________
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
<p><p><p><pre>
-- 
Information System Engineer, Ph.D.
Blog: <a href="http://matt.eifelle.com">http://matt.eifelle.com</a>
LinkedIn: <a href="http://www.linkedin.com/in/matthieubrucher">http://www.linkedin.com/in/matthieubrucher</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15209.php">Tom Rosmond: "[OMPI users] questions about MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="15207.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores:	 very poor performance"</a>
<li><strong>In reply to:</strong> <a href="15207.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores:	 very poor performance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15210.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
<li><strong>Reply:</strong> <a href="15210.php">Gilbert Grosdidier: "Re: [OMPI users] Running OpenMPI on SGI Altix with 4096 cores: very poor performance"</a>
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
