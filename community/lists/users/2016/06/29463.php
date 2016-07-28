<?
$subject_val = "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 14:53:14 2016" -->
<!-- isoreceived="20160615185314" -->
<!-- sent="Wed, 15 Jun 2016 14:53:03 -0400" -->
<!-- isosent="20160615185303" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;failed to create queue pair&amp;quot; problem, but settings appear OK" -->
<!-- id="5761A40F.9010601_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4F505D9A84D1D74E9397FB427DDF95BC52AAACB7_at_CINURCNA10.e2k.ad.ge.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-15 14:53:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29464.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>Previous message:</strong> <a href="29462.php">Nathan Hjelm: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>In reply to:</strong> <a href="29459.php">Sasso, John (GE Power, Non-GE): "[OMPI users]  &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29462.php">Nathan Hjelm: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 06/15/2016 02:35 PM, Sasso, John (GE Power, Non-GE) wrote:
<br>
<span class="quotelev1">&gt; Chuck,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The per-process limits appear fine, including those for the resource mgr daemons:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Limit                     Soft Limit           Hard Limit           Units
</span><br>
<span class="quotelev1">&gt; Max address space         unlimited            unlimited            bytes
</span><br>
<span class="quotelev1">&gt; Max core file size        0                    0                    bytes
</span><br>
<span class="quotelev1">&gt; Max cpu time              unlimited            unlimited            seconds
</span><br>
<span class="quotelev1">&gt; Max data size             unlimited            unlimited            bytes
</span><br>
<span class="quotelev1">&gt; Max file locks            unlimited            unlimited            locks
</span><br>
<span class="quotelev1">&gt; Max file size             unlimited            unlimited            bytes
</span><br>
<span class="quotelev1">&gt; Max locked memory         unlimited            unlimited            bytes
</span><br>
<span class="quotelev1">&gt; Max msgqueue size         819200               819200               bytes
</span><br>
<span class="quotelev1">&gt; Max nice priority         0                    0
</span><br>
<span class="quotelev1">&gt; Max open files            16384                16384                files
</span><br>
<span class="quotelev1">&gt; Max pending signals       515625               515625               signals
</span><br>
<span class="quotelev1">&gt; Max processes             515625               515625               processes
</span><br>
<span class="quotelev1">&gt; Max realtime priority     0                    0
</span><br>
<span class="quotelev1">&gt; Max realtime timeout      unlimited            unlimited            us
</span><br>
<span class="quotelev1">&gt; Max resident set          unlimited            unlimited            bytes
</span><br>
<span class="quotelev1">&gt; Max stack size            307200000            unlimited            bytes
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
<p>Hi John
<br>
<p>The FAQ I referred to (#18 in tuning runtime MPI to OpenFabrics)
<br>
regards the OFED kernel module parameters
<br>
log_num_mtt and log_mtts_per_seg, not to the openib btl mca parameters.
<br>
They may default to a less-than-optimal value.
<br>
<p><a href="https://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">https://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>
<br>
<p>Gus Correa (not Chuck!)
<br>
<p><span class="quotelev1">&gt; mpool_rdma_rcache_size_limit = 0  ==&gt; Open MPI will register as much user memory as necessary
</span><br>
<span class="quotelev1">&gt; btl_openib_free_list_max =  -1    ==&gt; Open MPI will try to allocate as many registered buffers as it needs
</span><br>
<span class="quotelev1">&gt; btl_openib_eager_rdma_num = 16
</span><br>
<span class="quotelev1">&gt; btl_openib_max_eager_rdma = 16
</span><br>
<span class="quotelev1">&gt; btl_openib_eager_limit = 12288
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other suggestions welcome.   Hitting a brick wall here.  Thanks!
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
<span class="quotelev1">&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Gus Correa
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, June 15, 2016 1:39 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: EXT: Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK
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
<span class="quotelev1">&gt; <a href="https://urldefense.proofpoint.com/v2/url?u=https-3A__www.open-2Dmpi.org_faq_-3Fcategory-3Dopenfabrics-23ib-2Dlow-2Dreg-2Dmem&amp;d=CwIF-g&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=fkBwjwn1Rvenp2NGwrQM3JtenpfbO_fxYUS">https://urldefense.proofpoint.com/v2/url?u=https-3A__www.open-2Dmpi.org_faq_-3Fcategory-3Dopenfabrics-23ib-2Dlow-2Dreg-2Dmem&amp;d=CwIF-g&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=fkBwjwn1Rvenp2NGwrQM3JtenpfbO_fxYUS</a>K4lrHnzE&amp;s=UFQ0uSWQoNPCfwg9q02YzMJczt7g4jEcaCvYOd46RRA&amp;e=
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In doing testing with IMB, I find that running a 4200+ core case with
</span><br>
<span class="quotelev2">&gt;&gt; the IMB test Alltoall, and message lengths of 16..1024 bytes (as per
</span><br>
<span class="quotelev2">&gt;&gt; -msglog 4:10 IMB option), it fails with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A process failed to create a queue pair. This usually means either
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the device has run out of queue pairs (too many connections) or
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; there are insufficient resources available to allocate a queue pair
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (out of memory). The latter can happen if either 1) insufficient
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; memory is available, or 2) no more physical memory can be registered
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; with the device.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For more information on memory registration see the Open MPI FAQs at:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org">https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org</a>
</span><br>
<span class="quotelev2">&gt;&gt; _faq_-3Fcategory-3Dopenfabrics-23ib-2Dlocked-2Dpages&amp;d=CwIF-g&amp;c=IV_clA
</span><br>
<span class="quotelev2">&gt;&gt; zoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimB
</span><br>
<span class="quotelev2">&gt;&gt; Pnb-JT-Js0Fmk&amp;m=fkBwjwn1Rvenp2NGwrQM3JtenpfbO_fxYUSK4lrHnzE&amp;s=dKT5yJta
</span><br>
<span class="quotelev2">&gt;&gt; 2xW_ZUh06x95KTWjE1LgO8NU3OsjbwQsYLc&amp;e=
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Local host:             node7106
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Local device:           mlx4_0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Queue pair type:        Reliable connected (RC)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [node7106][[51922,1],0][connect/btl_openib_connect_oob.c:867:rml_recv_
</span><br>
<span class="quotelev2">&gt;&gt; cb]
</span><br>
<span class="quotelev2">&gt;&gt; error in endpoint reply start connect
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [node7106:06503] [[51922,0],0]-[[51922,1],0] mca_oob_tcp_msg_recv:
</span><br>
<span class="quotelev2">&gt;&gt; readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun has exited due to process rank 0 with PID 6504 on
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; node node7106 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; for all processes to call &quot;init&quot;. By rule, if one process calls
</span><br>
<span class="quotelev2">&gt;&gt; &quot;init&quot;,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes, these are ALL of the error messages. I did not get a message
</span><br>
<span class="quotelev2">&gt;&gt; about not being able to register enough memory.   I verified that
</span><br>
<span class="quotelev2">&gt;&gt; log_num_mtt = 24  and log_mtts_per_seg = 0 (via catting of their files
</span><br>
<span class="quotelev2">&gt;&gt; in /sys/module/mlx4_core/parameters and what is set in
</span><br>
<span class="quotelev2">&gt;&gt; /etc/modprobe.d/mlx4_core.conf).  While such a large-scale job runs, I
</span><br>
<span class="quotelev2">&gt;&gt; run 'vmstat 10' to examine memory usage, but there appears to be a
</span><br>
<span class="quotelev2">&gt;&gt; good amount of memory still available and swap is never used.   In
</span><br>
<span class="quotelev2">&gt;&gt; terms of settings in /etc/security/limits.conf:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * soft memlock  unlimited
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * hard memlock  unlimited
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * soft stack 300000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; * hard stack unlimited
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know if btl_openib_connect_oob.c or mca_oob_tcp_msg_recv are
</span><br>
<span class="quotelev2">&gt;&gt; clues, but I am now at a loss as to where the problem lies.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is for an application using OpenMPI 1.6.5, and the systems have
</span><br>
<span class="quotelev2">&gt;&gt; Mellanox OFED 3.1.1 installed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *--john*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://urldefense.proofpoint.com/v2/url?u=https-3A__www.open-2Dmpi.or">https://urldefense.proofpoint.com/v2/url?u=https-3A__www.open-2Dmpi.or</a>
</span><br>
<span class="quotelev2">&gt;&gt; g_mailman_listinfo.cgi_users&amp;d=CwIF-g&amp;c=IV_clAzoPDE253xZdHuilRgztyh_Ri
</span><br>
<span class="quotelev2">&gt;&gt; V3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=fkBwjwn1
</span><br>
<span class="quotelev2">&gt;&gt; Rvenp2NGwrQM3JtenpfbO_fxYUSK4lrHnzE&amp;s=jTwvPXqRGWpfeRFC_6XkYAx5DH99crNb
</span><br>
<span class="quotelev2">&gt;&gt; mWhBN9r1hdg&amp;e= Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org">https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org</a>
</span><br>
<span class="quotelev2">&gt;&gt; _community_lists_users_2016_06_29455.php&amp;d=CwIF-g&amp;c=IV_clAzoPDE253xZdH
</span><br>
<span class="quotelev2">&gt;&gt; uilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fm
</span><br>
<span class="quotelev2">&gt;&gt; k&amp;m=fkBwjwn1Rvenp2NGwrQM3JtenpfbO_fxYUSK4lrHnzE&amp;s=8xTBNYgBKnKVf6SD7vEn
</span><br>
<span class="quotelev2">&gt;&gt; 3-wizYAxVVSS63L5bCdfidE&amp;e=
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://urldefense.proofpoint.com/v2/url?u=https-3A__www.open-2Dmpi.org_mailman_listinfo.cgi_users&amp;d=CwIF-g&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=fkBwjwn1Rvenp2NGwrQM3JtenpfbO_fxYUSK4lrHnzE&amp;s=jTwvPXqRGWpfeRF">https://urldefense.proofpoint.com/v2/url?u=https-3A__www.open-2Dmpi.org_mailman_listinfo.cgi_users&amp;d=CwIF-g&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=fkBwjwn1Rvenp2NGwrQM3JtenpfbO_fxYUSK4lrHnzE&amp;s=jTwvPXqRGWpfeRF</a>C_6XkYAx5DH99crNbmWhBN9r1hdg&amp;e=
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org_community_lists_users_2016_06_29458.php&amp;d=CwIF-g&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=fkBwjwn1Rvenp2NGwrQM3JtenpfbO_fxYUSK4lrHnzE&amp;s=uK1">https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org_community_lists_users_2016_06_29458.php&amp;d=CwIF-g&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=fkBwjwn1Rvenp2NGwrQM3JtenpfbO_fxYUSK4lrHnzE&amp;s=uK1</a>Ww0uehyaqSfXOtAt3Lqhers5lzDnBPhdDVCQx_hk&amp;e=
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29459.php">http://www.open-mpi.org/community/lists/users/2016/06/29459.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29464.php">Jason Maldonis: "Re: [OMPI users] runtime error in orte/loop_spawn test using OMPI 1.10.2"</a>
<li><strong>Previous message:</strong> <a href="29462.php">Nathan Hjelm: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>In reply to:</strong> <a href="29459.php">Sasso, John (GE Power, Non-GE): "[OMPI users]  &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29462.php">Nathan Hjelm: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
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
