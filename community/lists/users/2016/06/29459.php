<?
$subject_val = "[OMPI users]  &quot;failed to create queue pair&quot; problem, but settings appear OK";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 14:35:31 2016" -->
<!-- isoreceived="20160615183531" -->
<!-- sent="Wed, 15 Jun 2016 18:35:15 +0000" -->
<!-- isosent="20160615183515" -->
<!-- name="Sasso, John (GE Power, Non-GE)" -->
<!-- email="John1.Sasso_at_[hidden]" -->
<!-- subject="[OMPI users]  &amp;quot;failed to create queue pair&amp;quot; problem, but settings appear OK" -->
<!-- id="4F505D9A84D1D74E9397FB427DDF95BC52AAACB7_at_CINURCNA10.e2k.ad.ge.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="576192BB.1050101_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> [OMPI users]  &quot;failed to create queue pair&quot; problem, but settings appear OK<br>
<strong>From:</strong> Sasso, John (GE Power, Non-GE) (<em>John1.Sasso_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-15 14:35:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29460.php">Sasso, John (GE Power, Non-GE): "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>Previous message:</strong> <a href="29458.php">Gus Correa: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>In reply to:</strong> <a href="29458.php">Gus Correa: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29460.php">Sasso, John (GE Power, Non-GE): "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>Reply:</strong> <a href="29460.php">Sasso, John (GE Power, Non-GE): "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>Reply:</strong> <a href="29461.php">Nathan Hjelm: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem,	but settings appear OK"</a>
<li><strong>Reply:</strong> <a href="29463.php">Gus Correa: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Chuck, 
<br>
<p>The per-process limits appear fine, including those for the resource mgr daemons:
<br>
<p>Limit                     Soft Limit           Hard Limit           Units     
<br>
Max address space         unlimited            unlimited            bytes     
<br>
Max core file size        0                    0                    bytes     
<br>
Max cpu time              unlimited            unlimited            seconds   
<br>
Max data size             unlimited            unlimited            bytes     
<br>
Max file locks            unlimited            unlimited            locks     
<br>
Max file size             unlimited            unlimited            bytes     
<br>
Max locked memory         unlimited            unlimited            bytes     
<br>
Max msgqueue size         819200               819200               bytes     
<br>
Max nice priority         0                    0                    
<br>
Max open files            16384                16384                files     
<br>
Max pending signals       515625               515625               signals   
<br>
Max processes             515625               515625               processes 
<br>
Max realtime priority     0                    0                    
<br>
Max realtime timeout      unlimited            unlimited            us        
<br>
Max resident set          unlimited            unlimited            bytes     
<br>
Max stack size            307200000            unlimited            bytes   
<br>
<p><p><p>As for the FAQ re registered memory, checking our OpenMPI settings with ompi_info, we have:
<br>
<p>mpool_rdma_rcache_size_limit = 0  ==&gt; Open MPI will register as much user memory as necessary 
<br>
btl_openib_free_list_max =  -1    ==&gt; Open MPI will try to allocate as many registered buffers as it needs
<br>
btl_openib_eager_rdma_num = 16 
<br>
btl_openib_max_eager_rdma = 16 
<br>
btl_openib_eager_limit = 12288   
<br>
<p><p>Other suggestions welcome.   Hitting a brick wall here.  Thanks!
<br>
<p>--john
<br>
<p><p><p>-----Original Message-----
<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gus Correa
<br>
Sent: Wednesday, June 15, 2016 1:39 PM
<br>
To: Open MPI Users
<br>
Subject: EXT: Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK
<br>
<p>Hi John
<br>
<p>1) For diagnostic, you could check the actual &quot;per process&quot; limits on the nodes while that big job is running:
<br>
<p>cat /proc/$PID/limits
<br>
<p>2) If you're using a resource manager to launch the job, the resource manager daemon/deamons (local to the nodes) may have to to set the memlock and other limits, so that the Open MPI processes inherit them.
<br>
I use Torque, so I put these lines in the pbs_mom (Torque local daemon) initialization script:
<br>
<p># pbs_mom system limits
<br>
# max file descriptors
<br>
ulimit -n 32768
<br>
# locked memory
<br>
ulimit -l unlimited
<br>
# stacksize
<br>
ulimit -s unlimited
<br>
<p>3) See also this FAQ related to registered memory.
<br>
I set these parameters in /etc/modprobe.d/mlx4_core.conf, but where they're set may depend on the Linux distro/release and the OFED you're using.
<br>
<p><a href="https://urldefense.proofpoint.com/v2/url?u=https-3A__www.open-2Dmpi.org_faq_-3Fcategory-3Dopenfabrics-23ib-2Dlow-2Dreg-2Dmem&amp;d=CwIF-g&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=fkBwjwn1Rvenp2NGwrQM3JtenpfbO_fxYUS">https://urldefense.proofpoint.com/v2/url?u=https-3A__www.open-2Dmpi.org_faq_-3Fcategory-3Dopenfabrics-23ib-2Dlow-2Dreg-2Dmem&amp;d=CwIF-g&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=fkBwjwn1Rvenp2NGwrQM3JtenpfbO_fxYUS</a>K4lrHnzE&amp;s=UFQ0uSWQoNPCfwg9q02YzMJczt7g4jEcaCvYOd46RRA&amp;e= 
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 06/15/2016 11:05 AM, Sasso, John (GE Power, Non-GE) wrote:
<br>
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
<span class="quotelev1">&gt; <a href="https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org">https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org</a>
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
<span class="quotelev1">&gt; Local host:             node7106
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Local device:           mlx4_0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Queue pair type:        Reliable connected (RC)
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
<span class="quotelev1">&gt; about not being able to register enough memory.   I verified that 
</span><br>
<span class="quotelev1">&gt; log_num_mtt = 24  and log_mtts_per_seg = 0 (via catting of their files 
</span><br>
<span class="quotelev1">&gt; in /sys/module/mlx4_core/parameters and what is set in 
</span><br>
<span class="quotelev1">&gt; /etc/modprobe.d/mlx4_core.conf).  While such a large-scale job runs, I 
</span><br>
<span class="quotelev1">&gt; run 'vmstat 10' to examine memory usage, but there appears to be a
</span><br>
<span class="quotelev1">&gt; good amount of memory still available and swap is never used.   In 
</span><br>
<span class="quotelev1">&gt; terms of settings in /etc/security/limits.conf:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * soft memlock  unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * hard memlock  unlimited
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
<span class="quotelev1">&gt; <a href="https://urldefense.proofpoint.com/v2/url?u=https-3A__www.open-2Dmpi.or">https://urldefense.proofpoint.com/v2/url?u=https-3A__www.open-2Dmpi.or</a>
</span><br>
<span class="quotelev1">&gt; g_mailman_listinfo.cgi_users&amp;d=CwIF-g&amp;c=IV_clAzoPDE253xZdHuilRgztyh_Ri
</span><br>
<span class="quotelev1">&gt; V3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=fkBwjwn1
</span><br>
<span class="quotelev1">&gt; Rvenp2NGwrQM3JtenpfbO_fxYUSK4lrHnzE&amp;s=jTwvPXqRGWpfeRFC_6XkYAx5DH99crNb
</span><br>
<span class="quotelev1">&gt; mWhBN9r1hdg&amp;e= Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org">https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org</a>
</span><br>
<span class="quotelev1">&gt; _community_lists_users_2016_06_29455.php&amp;d=CwIF-g&amp;c=IV_clAzoPDE253xZdH
</span><br>
<span class="quotelev1">&gt; uilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fm
</span><br>
<span class="quotelev1">&gt; k&amp;m=fkBwjwn1Rvenp2NGwrQM3JtenpfbO_fxYUSK4lrHnzE&amp;s=8xTBNYgBKnKVf6SD7vEn
</span><br>
<span class="quotelev1">&gt; 3-wizYAxVVSS63L5bCdfidE&amp;e=
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
Subscription: <a href="https://urldefense.proofpoint.com/v2/url?u=https-3A__www.open-2Dmpi.org_mailman_listinfo.cgi_users&amp;d=CwIF-g&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=fkBwjwn1Rvenp2NGwrQM3JtenpfbO_fxYUSK4lrHnzE&amp;s=jTwvPXqRGWpfeRF">https://urldefense.proofpoint.com/v2/url?u=https-3A__www.open-2Dmpi.org_mailman_listinfo.cgi_users&amp;d=CwIF-g&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=fkBwjwn1Rvenp2NGwrQM3JtenpfbO_fxYUSK4lrHnzE&amp;s=jTwvPXqRGWpfeRF</a>C_6XkYAx5DH99crNbmWhBN9r1hdg&amp;e=
<br>
Link to this post: <a href="https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org_community_lists_users_2016_06_29458.php&amp;d=CwIF-g&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=fkBwjwn1Rvenp2NGwrQM3JtenpfbO_fxYUSK4lrHnzE&amp;s=uK1">https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org_community_lists_users_2016_06_29458.php&amp;d=CwIF-g&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=fkBwjwn1Rvenp2NGwrQM3JtenpfbO_fxYUSK4lrHnzE&amp;s=uK1</a>Ww0uehyaqSfXOtAt3Lqhers5lzDnBPhdDVCQx_hk&amp;e= 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29460.php">Sasso, John (GE Power, Non-GE): "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>Previous message:</strong> <a href="29458.php">Gus Correa: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>In reply to:</strong> <a href="29458.php">Gus Correa: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29460.php">Sasso, John (GE Power, Non-GE): "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>Reply:</strong> <a href="29460.php">Sasso, John (GE Power, Non-GE): "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>Reply:</strong> <a href="29461.php">Nathan Hjelm: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem,	but settings appear OK"</a>
<li><strong>Reply:</strong> <a href="29463.php">Gus Correa: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
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
