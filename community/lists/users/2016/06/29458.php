<?
$subject_val = "Re: [OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 13:39:14 2016" -->
<!-- isoreceived="20160615173914" -->
<!-- sent="Wed, 15 Jun 2016 13:39:07 -0400" -->
<!-- isosent="20160615173907" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;failed to create queue pair&amp;quot; problem, but settings appear OK" -->
<!-- id="576192BB.1050101_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="4F505D9A84D1D74E9397FB427DDF95BC52AAAB9F_at_CINURCNA10.e2k.ad.ge.com" -->
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
<strong>Date:</strong> 2016-06-15 13:39:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29459.php">Sasso, John (GE Power, Non-GE): "[OMPI users]  &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>Previous message:</strong> <a href="29457.php">Ralph Castain: "Re: [OMPI users] Client-Server Shared Memory Transport"</a>
<li><strong>In reply to:</strong> <a href="29455.php">Sasso, John (GE Power, Non-GE): "[OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29459.php">Sasso, John (GE Power, Non-GE): "[OMPI users]  &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>Reply:</strong> <a href="29459.php">Sasso, John (GE Power, Non-GE): "[OMPI users]  &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi John
<br>
<p>1) For diagnostic, you could check the actual &quot;per process&quot; limits on 
<br>
the nodes while that big job is running:
<br>
<p>cat /proc/$PID/limits
<br>
<p>2) If you're using a resource manager to launch the job,
<br>
the resource manager daemon/deamons (local to the nodes) may have to
<br>
to set the memlock and other limits, so that the Open MPI processes
<br>
inherit them.
<br>
I use Torque, so I put these lines in the pbs_mom (Torque local daemon) 
<br>
initialization script:
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
I set these parameters in /etc/modprobe.d/mlx4_core.conf,
<br>
but where they're set may depend on the Linux distro/release and the 
<br>
OFED you're using.
<br>
<p><a href="https://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">https://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>
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
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
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
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [node7106][[51922,1],0][connect/btl_openib_connect_oob.c:867:rml_recv_cb] 
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
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
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
<span class="quotelev1">&gt; --------------------------------------------------------------------------
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
<span class="quotelev1">&gt; run &#145;vmstat 10&#146; to examine memory usage, but there appears to be a 
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
<span class="quotelev1">&gt; I don&#146;t know if btl_openib_connect_oob.c or mca_oob_tcp_msg_recv are 
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29455.php">http://www.open-mpi.org/community/lists/users/2016/06/29455.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29459.php">Sasso, John (GE Power, Non-GE): "[OMPI users]  &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>Previous message:</strong> <a href="29457.php">Ralph Castain: "Re: [OMPI users] Client-Server Shared Memory Transport"</a>
<li><strong>In reply to:</strong> <a href="29455.php">Sasso, John (GE Power, Non-GE): "[OMPI users] &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29459.php">Sasso, John (GE Power, Non-GE): "[OMPI users]  &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
<li><strong>Reply:</strong> <a href="29459.php">Sasso, John (GE Power, Non-GE): "[OMPI users]  &quot;failed to create queue pair&quot; problem, but settings appear OK"</a>
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
