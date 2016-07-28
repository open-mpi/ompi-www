<?
$subject_val = "[OMPI users]  &quot;failed to create queue pair&quot; problem,	but settings appear OK";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 16 09:15:55 2016" -->
<!-- isoreceived="20160616131555" -->
<!-- sent="Thu, 16 Jun 2016 13:15:38 +0000" -->
<!-- isosent="20160616131538" -->
<!-- name="Sasso, John (GE Power, Non-GE)" -->
<!-- email="John1.Sasso_at_[hidden]" -->
<!-- subject="[OMPI users]  &amp;quot;failed to create queue pair&amp;quot; problem,	but settings appear OK" -->
<!-- id="4F505D9A84D1D74E9397FB427DDF95BC52AAAE53_at_CINURCNA10.e2k.ad.ge.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0754db44-0699-4f21-aa3c-77e4ed05abfd_at_me.com" -->
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
<strong>Date:</strong> 2016-06-16 09:15:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29468.php">Nathan Hjelm: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>Previous message:</strong> <a href="29466.php">Gilles Gouaillardet: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<li><strong>In reply to:</strong> <a href="29461.php">Nathan Hjelm: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem,	but settings appear OK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29468.php">Nathan Hjelm: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>Reply:</strong> <a href="29468.php">Nathan Hjelm: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nathan,
<br>
<p>Thank you for the suggestion.   I tried your btl_openib_receive_queues setting with a 4200+ core IMB job, and the job ran (great!).   The shutdown of the job took such a long time that after 6 minutes, I had to force-terminate the job.
<br>
<p>When I tried using this scheme before, with the following recommended by the OpenMPI FAQ, I got some odd errors:
<br>
<p>--mca btl openib,sm,self --mca btl_openib_receive_queues X,128,256,192,128:X,2048,256,128,32:X,12288,256,128,32:X,65536,256,128,32
<br>
<p>However, when I tried:
<br>
<p>--mca btl openib,sm,self --mca btl_openib_receive_queues X,4096,1024:X,12288,512:X,65536,512
<br>
<p>I got success with my aforementioned job.
<br>
<p>I am going to do more testing, with the goal of getting a 5000 core job to run successfully.  If I can, then down the road my concern is the impact the btl_openib_receive_queues mca parameter (above) will have on lower-scale (&lt; 1024 cores) jobs, since the parameter change to the global openmpi config file would impact ALL users and jobs of all scales.
<br>
<p>Chuck - as I noted in my first email, log_num_mtt was set fine, so that is not the issue here.
<br>
<p>Finally, regarding running out of QPs, I examined the output of 'ibv_devinfo -v' on our compute nodes.  I see the following pertinent settings:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_qp:                         392632
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_qp_wr:                      16351
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_qp_rd_atom:                 16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_qp_init_rd_atom:            128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_cq:                         65408
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_cqe:                        4194303
<br>
<p>Figuring that max_qp is the prime limitation here I am running into when using the PP and SRQ QPs, considering 12 cores per node, this would seem to imply that an upper bound on the number of nodes would be 392632 / 24^2 ~ 681 nodes.  This does not make sense, because I saw the QP creation failure error (again, NO error about failure to register enough memory) for as small as 177 24-core nodes!  I don't know how to make sense of this, tho I don't question that we were running out of QPs.
<br>
<p>--john
<br>
<p><p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Nathan Hjelm
<br>
Sent: Wednesday, June 15, 2016 2:43 PM
<br>
To: Open MPI Users
<br>
Subject: EXT: Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK
<br>
<p>You ran out of queue pairs. There is no way around this for larger all-to-all transfers when using the openib btl and SRQ. Need O(cores^2) QPs to fully connect with SRQ or PP QPs. I recommend using XRC instead by adding:
<br>
<p><p>btl_openib_receive_queues = X,4096,1024:X,12288,512:X,65536,512
<br>
<p>to your openmpi-mca-params.conf
<br>
<p>or
<br>
<p>-mca btl_openib_receive_queues X,4096,1024:X,12288,512:X,65536,512
<br>
<p><p>to the mpirun command line.
<br>
<p><p>-Nathan
<br>
<p>On Jun 15, 2016, at 12:35 PM, &quot;Sasso, John (GE Power, Non-GE)&quot; &lt;John1.Sasso_at_[hidden]&lt;mailto:John1.Sasso_at_[hidden]&gt;&gt; wrote:
<br>
Chuck,
<br>
<p>The per-process limits appear fine, including those for the resource mgr daemons:
<br>
<p>Limit Soft Limit Hard Limit Units
<br>
Max address space unlimited unlimited bytes
<br>
Max core file size 0 0 bytes
<br>
Max cpu time unlimited unlimited seconds
<br>
Max data size unlimited unlimited bytes
<br>
Max file locks unlimited unlimited locks
<br>
Max file size unlimited unlimited bytes
<br>
Max locked memory unlimited unlimited bytes
<br>
Max msgqueue size 819200 819200 bytes
<br>
Max nice priority 0 0
<br>
Max open files 16384 16384 files
<br>
Max pending signals 515625 515625 signals
<br>
Max processes 515625 515625 processes
<br>
Max realtime priority 0 0
<br>
Max realtime timeout unlimited unlimited us
<br>
Max resident set unlimited unlimited bytes
<br>
Max stack size 307200000 unlimited bytes
<br>
<p><p><p>As for the FAQ re registered memory, checking our OpenMPI settings with ompi_info, we have:
<br>
<p>mpool_rdma_rcache_size_limit = 0 ==&gt; Open MPI will register as much user memory as necessary
<br>
btl_openib_free_list_max = -1 ==&gt; Open MPI will try to allocate as many registered buffers as it needs
<br>
btl_openib_eager_rdma_num = 16
<br>
btl_openib_max_eager_rdma = 16
<br>
btl_openib_eager_limit = 12288
<br>
<p><p>Other suggestions welcome. Hitting a brick wall here. Thanks!
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
<p><p>In doing testing with IMB, I find that running a 4200+ core case with
<br>
the IMB test Alltoall, and message lengths of 16..1024 bytes (as per
<br>
-msglog 4:10 IMB option), it fails with:
<br>
<p>----------------------------------------------------------------------
<br>
<pre>
----
A process failed to create a queue pair. This usually means either
the device has run out of queue pairs (too many connections) or
there are insufficient resources available to allocate a queue pair
(out of memory). The latter can happen if either 1) insufficient
memory is available, or 2) no more physical memory can be registered
with the device.
For more information on memory registration see the Open MPI FAQs at:
<a href="https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org">https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org</a>
_faq_-3Fcategory-3Dopenfabrics-23ib-2Dlocked-2Dpages&amp;d=CwIF-g&amp;c=IV_clA
zoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimB
Pnb-JT-Js0Fmk&amp;m=fkBwjwn1Rvenp2NGwrQM3JtenpfbO_fxYUSK4lrHnzE&amp;s=dKT5yJta
2xW_ZUh06x95KTWjE1LgO8NU3OsjbwQsYLc&amp;e=
Local host: node7106
Local device: mlx4_0
Queue pair type: Reliable connected (RC)
----------------------------------------------------------------------
----
[node7106][[51922,1],0][connect/btl_openib_connect_oob.c:867:rml_recv_
cb]
error in endpoint reply start connect
[node7106:06503] [[51922,0],0]-[[51922,1],0] mca_oob_tcp_msg_recv:
readv failed: Connection reset by peer (104)
----------------------------------------------------------------------
----
mpirun has exited due to process rank 0 with PID 6504 on
node node7106 exiting improperly. There are two reasons this could occur:
1. this process did not call &quot;init&quot; before exiting, but others in
the job did. This can cause a job to hang indefinitely while it waits
for all processes to call &quot;init&quot;. By rule, if one process calls
&quot;init&quot;,
then ALL processes must call &quot;init&quot; prior to termination.
2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
exiting or it will be considered an &quot;abnormal termination&quot;
This may have caused other processes in the application to be
terminated by signals sent by mpirun (as reported here).
----------------------------------------------------------------------
----
Yes, these are ALL of the error messages. I did not get a message
about not being able to register enough memory. I verified that
log_num_mtt = 24 and log_mtts_per_seg = 0 (via catting of their files
in /sys/module/mlx4_core/parameters and what is set in
/etc/modprobe.d/mlx4_core.conf). While such a large-scale job runs, I
run 'vmstat 10' to examine memory usage, but there appears to be a
good amount of memory still available and swap is never used. In
terms of settings in /etc/security/limits.conf:
* soft memlock unlimited
* hard memlock unlimited
* soft stack 300000
* hard stack unlimited
I don't know if btl_openib_connect_oob.c or mca_oob_tcp_msg_recv are
clues, but I am now at a loss as to where the problem lies.
This is for an application using OpenMPI 1.6.5, and the systems have
Mellanox OFED 3.1.1 installed.
*--john*
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription:
<a href="https://urldefense.proofpoint.com/v2/url?u=https-3A__www.open-2Dmpi.or">https://urldefense.proofpoint.com/v2/url?u=https-3A__www.open-2Dmpi.or</a>
g_mailman_listinfo.cgi_users&amp;d=CwIF-g&amp;c=IV_clAzoPDE253xZdHuilRgztyh_Ri
V3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=fkBwjwn1
Rvenp2NGwrQM3JtenpfbO_fxYUSK4lrHnzE&amp;s=jTwvPXqRGWpfeRFC_6XkYAx5DH99crNb
mWhBN9r1hdg&amp;e= Link to this post:
<a href="https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org">https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org</a>
_community_lists_users_2016_06_29455.php&amp;d=CwIF-g&amp;c=IV_clAzoPDE253xZdH
uilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fm
k&amp;m=fkBwjwn1Rvenp2NGwrQM3JtenpfbO_fxYUSK4lrHnzE&amp;s=8xTBNYgBKnKVf6SD7vEn
3-wizYAxVVSS63L5bCdfidE&amp;e=
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: <a href="https://urldefense.proofpoint.com/v2/url?u=https-3A__www.open-2Dmpi.org_mailman_listinfo.cgi_users&amp;d=CwIF-g&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=fkBwjwn1Rvenp2NGwrQM3JtenpfbO_fxYUSK4lrHnzE&amp;s=jTwvPXqRGWpfeRF">https://urldefense.proofpoint.com/v2/url?u=https-3A__www.open-2Dmpi.org_mailman_listinfo.cgi_users&amp;d=CwIF-g&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=fkBwjwn1Rvenp2NGwrQM3JtenpfbO_fxYUSK4lrHnzE&amp;s=jTwvPXqRGWpfeRF</a>C_6XkYAx5DH99crNbmWhBN9r1hdg&amp;e=
Link to this post: <a href="https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org_community_lists_users_2016_06_29458.php&amp;d=CwIF-g&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=fkBwjwn1Rvenp2NGwrQM3JtenpfbO_fxYUSK4lrHnzE&amp;s=uK1">https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org_community_lists_users_2016_06_29458.php&amp;d=CwIF-g&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=fkBwjwn1Rvenp2NGwrQM3JtenpfbO_fxYUSK4lrHnzE&amp;s=uK1</a>Ww0uehyaqSfXOtAt3Lqhers5lzDnBPhdDVCQx_hk&amp;e=
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users<https://urldefense.proofpoint.com/v2/url?u=https-3A__www.open-2Dmpi.org_mailman_listinfo.cgi_users&amp;d=CwMFAg&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=Z_0bwIgyQ">https://www.open-mpi.org/mailman/listinfo.cgi/users<https://urldefense.proofpoint.com/v2/url?u=https-3A__www.open-2Dmpi.org_mailman_listinfo.cgi_users&amp;d=CwMFAg&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimBPnb-JT-Js0Fmk&amp;m=Z_0bwIgyQ</a>D9Y74kCxa7yTqQkTExj12eh3ViZf_Q--DA&amp;s=mZkD9jXZrRB3UwF5_PxCM5cxva5yeFAM5DvPm5j42FQ&amp;e=&gt;
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29459.php<https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org_community_lists_users_2016_06_29459.php&amp;d=CwMFAg&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimB">http://www.open-mpi.org/community/lists/users/2016/06/29459.php<https://urldefense.proofpoint.com/v2/url?u=http-3A__www.open-2Dmpi.org_community_lists_users_2016_06_29459.php&amp;d=CwMFAg&amp;c=IV_clAzoPDE253xZdHuilRgztyh_RiV3wUrLrDQYWSI&amp;r=tqKZ2vRCLufSSXPvzNxBrKr01YPimB</a>Pnb-JT-Js0Fmk&amp;m=Z_0bwIgyQD9Y74kCxa7yTqQkTExj12eh3ViZf_Q--DA&amp;s=y8UPzVx39Y9fkHkOaPnFcugx1jcfp6FePD6vHJTOXaA&amp;e=&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29467/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29468.php">Nathan Hjelm: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>Previous message:</strong> <a href="29466.php">Gilles Gouaillardet: "Re: [OMPI users] scatter/gather, tcp, 3 nodes, homogeneous, # RAM"</a>
<li><strong>In reply to:</strong> <a href="29461.php">Nathan Hjelm: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem,	but settings appear OK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29468.php">Nathan Hjelm: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>Reply:</strong> <a href="29468.php">Nathan Hjelm: "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
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
