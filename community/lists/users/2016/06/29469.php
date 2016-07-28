<?
$subject_val = "[OMPI users]  &quot;failed to create queue pair&quot; problem,	but settings appear OK";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 16 10:28:12 2016" -->
<!-- isoreceived="20160616142812" -->
<!-- sent="Thu, 16 Jun 2016 14:27:49 +0000" -->
<!-- isosent="20160616142749" -->
<!-- name="Sasso, John (GE Power, Non-GE)" -->
<!-- email="John1.Sasso_at_[hidden]" -->
<!-- subject="[OMPI users]  &amp;quot;failed to create queue pair&amp;quot; problem,	but settings appear OK" -->
<!-- id="4F505D9A84D1D74E9397FB427DDF95BC52AAAEC9_at_CINURCNA10.e2k.ad.ge.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="B71814B0-6AEA-48CB-A078-E63485D9834F_at_me.com" -->
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
<strong>Subject:</strong> [OMPI users]  &quot;failed to create queue pair&quot; problem,	but settings appear OK<br>
<strong>From:</strong> Sasso, John (GE Power, Non-GE) (<em>John1.Sasso_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-16 10:27:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29470.php">Audet, Martin: "[OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>Previous message:</strong> <a href="29468.php">Nathan Hjelm: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>In reply to:</strong> <a href="29468.php">Nathan Hjelm: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29463.php">Gus Correa: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank-you Nathan.  Since the default btl_openib_receive_queues setting is:
<br>

<br>
P,128,256,192,128:S,2048,1024,1008,64:S,12288,1024,1008,64:S,65536,1024,1008,64
<br>

<br>
this would mean that, with max_qp = 392632 and 4 QPs above, the &quot;actual&quot; max would be 392632 / 4 = 98158.   Using this value in my prior math, the upper bound on the number of 24-core nodes would be  98158 / 24^2 ~ 170.    This comes closer to the limit I encountered while testing.   I'm sure there are other particulars I am not accounting for in this math, but the approximation is reasonable.  
<br>

<br>
Thanks for the clarification, Nathan!
<br>

<br>
--john
<br>

<br>
-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Nathan Hjelm
<br>
Sent: Thursday, June 16, 2016 9:56 AM
<br>
To: Open MPI Users
<br>
Subject: EXT: Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK
<br>

<br>
XRC support is greatly improved in 1.10.x and 2.0.0. Would be interesting to see if a newer version fixed the shutdown hang.
<br>

<br>
When calculating the required number of queue pairs you also have to divide by the number of queue pairs in the btl_openib_receive_queues parameter. Additionally Open MPI uses 1 qp/rank for connections (1.7+) and there are some in use by IPoIB and other services.
<br>

<br>
-Nathan
<br>

<br>
<span class="quotelev1">&gt; On Jun 16, 2016, at 7:15 AM, Sasso, John (GE Power, Non-GE) &lt;John1.Sasso_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nathan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for the suggestion.   I tried your btl_openib_receive_queues setting with a 4200+ core IMB job, and the job ran (great!).   The shutdown of the job took such a long time that after 6 minutes, I had to force-terminate the job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I tried using this scheme before, with the following recommended by the OpenMPI FAQ, I got some odd errors:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --mca btl openib,sm,self --mca btl_openib_receive_queues 
</span><br>
<span class="quotelev1">&gt; X,128,256,192,128:X,2048,256,128,32:X,12288,256,128,32:X,65536,256,128
</span><br>
<span class="quotelev1">&gt; ,32
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, when I tried:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --mca btl openib,sm,self --mca btl_openib_receive_queues 
</span><br>
<span class="quotelev1">&gt; X,4096,1024:X,12288,512:X,65536,512
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I got success with my aforementioned job.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am going to do more testing, with the goal of getting a 5000 core job to run successfully.  If I can, then down the road my concern is the impact the btl_openib_receive_queues mca parameter (above) will have on lower-scale (&lt; 1024 cores) jobs, since the parameter change to the global openmpi config file would impact ALL users and jobs of all scales.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Chuck &#226;&#128;&#147; as I noted in my first email, log_num_mtt was set fine, so that is not the issue here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Finally, regarding running out of QPs, I examined the output of &#226;&#128;&#152;ibv_devinfo &#226;&#128;&#147;v&#226;&#128;&#153; on our compute nodes.  I see the following pertinent settings:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         max_qp:                         392632
</span><br>
<span class="quotelev1">&gt;         max_qp_wr:                      16351
</span><br>
<span class="quotelev1">&gt;         max_qp_rd_atom:                 16
</span><br>
<span class="quotelev1">&gt;         max_qp_init_rd_atom:            128
</span><br>
<span class="quotelev1">&gt;         max_cq:                         65408
</span><br>
<span class="quotelev1">&gt;        max_cqe:                        4194303
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Figuring that max_qp is the prime limitation here I am running into when using the PP and SRQ QPs, considering 12 cores per node, this would seem to imply that an upper bound on the number of nodes would be 392632 / 24^2 ~ 681 nodes.  This does not make sense, because I saw the QP creation failure error (again, NO error about failure to register enough memory) for as small as 177 24-core nodes!  I don&#226;&#128;&#153;t know how to make sense of this, tho I don&#226;&#128;&#153;t question that we were running out of QPs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --john
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Nathan 
</span><br>
<span class="quotelev1">&gt; Hjelm
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 15, 2016 2:43 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: EXT: Re: [OMPI users] &quot;failed to create queue pair&quot; problem, 
</span><br>
<span class="quotelev1">&gt; but settings appear OK
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You ran out of queue pairs. There is no way around this for larger all-to-all transfers when using the openib btl and SRQ. Need O(cores^2) QPs to fully connect with SRQ or PP QPs. I recommend using XRC instead by adding:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; btl_openib_receive_queues = X,4096,1024:X,12288,512:X,65536,512
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to your openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -mca btl_openib_receive_queues X,4096,1024:X,12288,512:X,65536,512
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to the mpirun command line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 15, 2016, at 12:35 PM, &quot;Sasso, John (GE Power, Non-GE)&quot; &lt;John1.Sasso_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Chuck,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The per-process limits appear fine, including those for the resource mgr daemons:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Limit Soft Limit Hard Limit Units
</span><br>
<span class="quotelev1">&gt; Max address space unlimited unlimited bytes Max core file size 0 0 
</span><br>
<span class="quotelev1">&gt; bytes Max cpu time unlimited unlimited seconds Max data size unlimited 
</span><br>
<span class="quotelev1">&gt; unlimited bytes Max file locks unlimited unlimited locks Max file size 
</span><br>
<span class="quotelev1">&gt; unlimited unlimited bytes Max locked memory unlimited unlimited bytes 
</span><br>
<span class="quotelev1">&gt; Max msgqueue size 819200 819200 bytes Max nice priority 0 0 Max open 
</span><br>
<span class="quotelev1">&gt; files 16384 16384 files Max pending signals 515625 515625 signals Max 
</span><br>
<span class="quotelev1">&gt; processes 515625 515625 processes Max realtime priority 0 0 Max 
</span><br>
<span class="quotelev1">&gt; realtime timeout unlimited unlimited us Max resident set unlimited 
</span><br>
<span class="quotelev1">&gt; unlimited bytes Max stack size 307200000 unlimited bytes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As for the FAQ re registered memory, checking our OpenMPI settings with ompi_info, we have:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpool_rdma_rcache_size_limit = 0 ==&gt; Open MPI will register as much 
</span><br>
<span class="quotelev1">&gt; user memory as necessary btl_openib_free_list_max = -1 ==&gt; Open MPI 
</span><br>
<span class="quotelev1">&gt; will try to allocate as many registered buffers as it needs 
</span><br>
<span class="quotelev1">&gt; btl_openib_eager_rdma_num = 16 btl_openib_max_eager_rdma = 16 
</span><br>
<span class="quotelev1">&gt; btl_openib_eager_limit = 12288
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Other suggestions welcome. Hitting a brick wall here. Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --john
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gus 
</span><br>
<span class="quotelev1">&gt; Correa
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 15, 2016 1:39 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: EXT: Re: [OMPI users] &quot;failed to create queue pair&quot; problem, 
</span><br>
<span class="quotelev1">&gt; but settings appear OK
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi John
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) For diagnostic, you could check the actual &quot;per process&quot; limits on the nodes while that big job is running:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cat /proc/$PID/limits
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) If you're using a resource manager to launch the job, the resource manager daemon/deamons (local to the nodes) may have to to set the memlock and other limits, so that the Open MPI processes inherit them.
</span><br>
<span class="quotelev1">&gt; I use Torque, so I put these lines in the pbs_mom (Torque local daemon) initialization script:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # pbs_mom system limits
</span><br>
<span class="quotelev1">&gt; # max file descriptors
</span><br>
<span class="quotelev1">&gt; ulimit -n 32768
</span><br>
<span class="quotelev1">&gt; # locked memory
</span><br>
<span class="quotelev1">&gt; ulimit -l unlimited
</span><br>
<span class="quotelev1">&gt; # stacksize
</span><br>
<span class="quotelev1">&gt; ulimit -s unlimited
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3) See also this FAQ related to registered memory.
</span><br>
<span class="quotelev1">&gt; I set these parameters in /etc/modprobe.d/mlx4_core.conf, but where they're set may depend on the Linux distro/release and the OFED you're using.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://urldefense.proofpoint.com/v2/url?u=https-3A__www.open-2Dmpi.or">https://urldefense.proofpoint.com/v2/url?u=https-3A__www.open-2Dmpi.or</a>
</span><br>
<span class="quotelev1">&gt; g_faq_-3Fcategory-3Dopenfabrics-23ib-2Dlow-2Dreg-2Dmem&amp;d=CwIF-g&amp;c=IV_c
</span><br>
<span class="quotelev1">&gt; lAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPi
</span><br>
<span class="quotelev1">&gt; mBPnb-JT-Js0Fmk&amp;m=fkBwjwn1Rvenp2NGwrQM3JtenpfbO_fxYUSK4lrHnzE&amp;s=UFQ0uS
</span><br>
<span class="quotelev1">&gt; WQoNPCfwg9q02YzMJczt7g4jEcaCvYOd46RRA&amp;e=
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 06/15/2016 11:05 AM, Sasso, John (GE Power, Non-GE) wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In doing testing with IMB, I find that running a 4200+ core case with 
</span><br>
<span class="quotelev1">&gt; the IMB test Alltoall, and message lengths of 16..1024 bytes (as per 
</span><br>
<span class="quotelev1">&gt; -msglog 4:10 IMB option), it fails with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A process failed to create a queue pair. This usually means either
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the device has run out of queue pairs (too many connections) or
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; there are insufficient resources available to allocate a queue pair
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (out of memory). The latter can happen if either 1) insufficient
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; memory is available, or 2) no more physical memory can be registered
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with the device.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For more information on memory registration see the Open MPI FAQs at:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org">https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org</a>
</span><br>
<span class="quotelev1">&gt; _faq_-3Fcategory-3Dopenfabrics-23ib-2Dlocked-2Dpages&amp;d=CwIF-g&amp;c=IV_clA
</span><br>
<span class="quotelev1">&gt; zoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimB
</span><br>
<span class="quotelev1">&gt; Pnb-JT-Js0Fmk&amp;m=fkBwjwn1Rvenp2NGwrQM3JtenpfbO_fxYUSK4lrHnzE&amp;s=dKT5yJta
</span><br>
<span class="quotelev1">&gt; 2xW_ZUh06x95KTWjE1LgO8NU3OsjbwQsYLc&amp;e=
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Local host: node7106
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Local device: mlx4_0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Queue pair type: Reliable connected (RC)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [node7106][[51922,1],0][connect/btl_openib_connect_oob.c:867:rml_recv_
</span><br>
<span class="quotelev1">&gt; cb]
</span><br>
<span class="quotelev1">&gt; error in endpoint reply start connect
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [node7106:06503] [[51922,0],0]-[[51922,1],0] mca_oob_tcp_msg_recv:
</span><br>
<span class="quotelev1">&gt; readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 0 with PID 6504 on
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node node7106 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls 
</span><br>
<span class="quotelev1">&gt; &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, these are ALL of the error messages. I did not get a message 
</span><br>
<span class="quotelev1">&gt; about not being able to register enough memory. I verified that 
</span><br>
<span class="quotelev1">&gt; log_num_mtt = 24 and log_mtts_per_seg = 0 (via catting of their files 
</span><br>
<span class="quotelev1">&gt; in /sys/module/mlx4_core/parameters and what is set in 
</span><br>
<span class="quotelev1">&gt; /etc/modprobe.d/mlx4_core.conf). While such a large-scale job runs, I 
</span><br>
<span class="quotelev1">&gt; run 'vmstat 10' to examine memory usage, but there appears to be a 
</span><br>
<span class="quotelev1">&gt; good amount of memory still available and swap is never used. In terms 
</span><br>
<span class="quotelev1">&gt; of settings in /etc/security/limits.conf:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * soft memlock unlimited
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * hard memlock unlimited
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * soft stack 300000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * hard stack unlimited
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know if btl_openib_connect_oob.c or mca_oob_tcp_msg_recv are 
</span><br>
<span class="quotelev1">&gt; clues, but I am now at a loss as to where the problem lies.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is for an application using OpenMPI 1.6.5, and the systems have 
</span><br>
<span class="quotelev1">&gt; Mellanox OFED 3.1.1 installed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *--john*
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
<span class="quotelev1">&gt; Subscription:
</span><br>
<span class="quotelev1">&gt; <a href="https://urldefense.proofpoint.com/v2/url?u=https-3A__www.open-2Dmpi.or">https://urldefense.proofpoint.com/v2/url?u=https-3A__www.open-2Dmpi.or</a>
</span><br>
<span class="quotelev1">&gt; g_mailman_listinfo.cgi_users&amp;d=CwIF-g&amp;c=IV_clAzoPDE253xZdHuilRgztyh_Ri
</span><br>
<span class="quotelev1">&gt; V3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=fkBwjwn1
</span><br>
<span class="quotelev1">&gt; Rvenp2NGwrQM3JtenpfbO_fxYUSK4lrHnzE&amp;s=jTwvPXqRGWpfeRFC_6XkYAx5DH99crNb
</span><br>
<span class="quotelev1">&gt; mWhBN9r1hdg&amp;e= Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org">https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org</a>
</span><br>
<span class="quotelev1">&gt; _community_lists_users_2016_06_29455.php&amp;d=CwIF-g&amp;c=IV_clAzoPDE253xZdH
</span><br>
<span class="quotelev1">&gt; uilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fm
</span><br>
<span class="quotelev1">&gt; k&amp;m=fkBwjwn1Rvenp2NGwrQM3JtenpfbO_fxYUSK4lrHnzE&amp;s=8xTBNYgBKnKVf6SD7vEn
</span><br>
<span class="quotelev1">&gt; 3-wizYAxVVSS63L5bCdfidE&amp;e=
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: 
</span><br>
<span class="quotelev1">&gt; <a href="https://urldefense.proofpoint.com/v2/url?u=https-3A__www.open-2Dmpi.or">https://urldefense.proofpoint.com/v2/url?u=https-3A__www.open-2Dmpi.or</a>
</span><br>
<span class="quotelev1">&gt; g_mailman_listinfo.cgi_users&amp;d=CwIF-g&amp;c=IV_clAzoPDE253xZdHuilRgztyh_Ri
</span><br>
<span class="quotelev1">&gt; V3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=fkBwjwn1
</span><br>
<span class="quotelev1">&gt; Rvenp2NGwrQM3JtenpfbO_fxYUSK4lrHnzE&amp;s=jTwvPXqRGWpfeRFC_6XkYAx5DH99crNb
</span><br>
<span class="quotelev1">&gt; mWhBN9r1hdg&amp;e= Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org">https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org</a>
</span><br>
<span class="quotelev1">&gt; _community_lists_users_2016_06_29458.php&amp;d=CwIF-g&amp;c=IV_clAzoPDE253xZdH
</span><br>
<span class="quotelev1">&gt; uilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fm
</span><br>
<span class="quotelev1">&gt; k&amp;m=fkBwjwn1Rvenp2NGwrQM3JtenpfbO_fxYUSK4lrHnzE&amp;s=uK1Ww0uehyaqSfXOtAt3
</span><br>
<span class="quotelev1">&gt; Lqhers5lzDnBPhdDVCQx_hk&amp;e= 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29459.php">http://www.open-mpi.org/community/lists/users/2016/06/29459.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/06/29467.php">http://www.open-mpi.org/community/lists/users/2016/06/29467.php</a>
</span><br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29470.php">Audet, Martin: "[OMPI users] Avoiding the memory registration costs by having memory always registered, is it possible with Linux ?"</a>
<li><strong>Previous message:</strong> <a href="29468.php">Nathan Hjelm: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>In reply to:</strong> <a href="29468.php">Nathan Hjelm: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29463.php">Gus Correa: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
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
