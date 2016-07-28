<?
$subject_val = "Re: [OMPI users] How to restart a job twice";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 18 09:36:20 2008" -->
<!-- isoreceived="20080418133620" -->
<!-- sent="Fri, 18 Apr 2008 06:36:05 -0700" -->
<!-- isosent="20080418133605" -->
<!-- name="Tamer" -->
<!-- email="tamer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to restart a job twice" -->
<!-- id="89133045-82E5-4E5F-B593-471E69F0EA9C_at_caltech.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F04FB6FC-94A7-4141-A67A-E79B5442B9B6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to restart a job twice<br>
<strong>From:</strong> Tamer (<em>tamer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-18 09:36:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5417.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>Previous message:</strong> <a href="5415.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>In reply to:</strong> <a href="5415.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5417.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>Reply:</strong> <a href="5417.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Josh, I tried what you suggested with my existing r14519, and I  
<br>
was able to checkpoint the restarted job but was never able to restart  
<br>
it. I looked up the PID for 'orterun' and checkpointed the restarted  
<br>
job but when I try to restart from that point I get the following error:
<br>
<p>ompi-restart ompi_global_snapshot_7704.ckpt
<br>
[dhcp-119-202.caltech.edu:07292] [[61851,1],1]-[[61851,0],0]  
<br>
mca_oob_tcp_msg_send_handler: writev failed: Broken pipe (32)
<br>
[dhcp-119-202.caltech.edu:07292] [[61851,1],1] routed:unity:  
<br>
Connection to lifeline [[61851,0],0] lost
<br>
[dhcp-119-202.caltech.edu:07292] [[61851,1],1]-[[61851,0],0]  
<br>
mca_oob_tcp_msg_send_handler: writev failed: Broken pipe (32)
<br>
[dhcp-119-202.caltech.edu:07292] [[61851,1],1] routed:unity:  
<br>
Connection to lifeline [[61851,0],0] lost
<br>
[dhcp-119-202.caltech.edu:07291] [[61851,1],0]-[[61851,0],0]  
<br>
mca_oob_tcp_msg_send_handler: writev failed: Broken pipe (32)
<br>
[dhcp-119-202.caltech.edu:07291] [[61851,1],0] routed:unity:  
<br>
Connection to lifeline [[61851,0],0] lost
<br>
[dhcp-119-202.caltech.edu:07291] [[61851,1],0]-[[61851,0],0]  
<br>
mca_oob_tcp_msg_send_handler: writev failed: Broken pipe (32)
<br>
[dhcp-119-202.caltech.edu:07291] [[61851,1],0] routed:unity:  
<br>
Connection to lifeline [[61851,0],0] lost
<br>
--------------------------------------------------------------------------
<br>
orterun has exited due to process rank 1 with PID 7737 on
<br>
node dhcp-119-202.caltech.edu exiting without calling &quot;finalize&quot;. This  
<br>
may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by orterun (as reported here).
<br>
<p>Do I have to run the copenmpi clean command after the first checkpoint  
<br>
and before restarting the checkpointed job so I can checkpoint it  
<br>
again or is there something I am missing in this version completely  
<br>
and I would have to go to r18208? Thank you in advance for your help.
<br>
<p>Tamer
<br>
<p>On Apr 18, 2008, at 6:03 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; When you use 'ompi-restart' to restart a job it fork/execs the
</span><br>
<span class="quotelev1">&gt; completely new job using the restarted processes for the ranks.
</span><br>
<span class="quotelev1">&gt; However instead of calling the 'mpirun' process ompi-restart currently
</span><br>
<span class="quotelev1">&gt; calls 'orterun'. These two programs are exactly the same (mpirun is a
</span><br>
<span class="quotelev1">&gt; symbolic link to orterun). So if you look for the PID of 'orterun'
</span><br>
<span class="quotelev1">&gt; that can be used to checkpoint the process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However it is confusing that Open MPI makes this switch. So I
</span><br>
<span class="quotelev1">&gt; committed in r18208 a fix for this that uses the 'mpirun' binary name
</span><br>
<span class="quotelev1">&gt; instead of the 'orterun' binary name. This fits with the typical use
</span><br>
<span class="quotelev1">&gt; case of checkpoint/restart in Open MPI in which users expect to find
</span><br>
<span class="quotelev1">&gt; the 'mpirun' process on restart instead of the lesser known 'orterun'
</span><br>
<span class="quotelev1">&gt; process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the confusion.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 18, 2008, at 1:14 AM, Tamer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all, I installed the developer's version r14519 and was able to
</span><br>
<span class="quotelev2">&gt;&gt; get it running. I successfully checkpointed a parallel job and
</span><br>
<span class="quotelev2">&gt;&gt; restarted it. My question is how can I checkpoint the restarted job?
</span><br>
<span class="quotelev2">&gt;&gt; The problem is once the original job is terminated and restarted  
</span><br>
<span class="quotelev2">&gt;&gt; later
</span><br>
<span class="quotelev2">&gt;&gt; on, the mpirun does not exist anymore (ps -efa|grep mpirun) and hence
</span><br>
<span class="quotelev2">&gt;&gt; I do not know which PID I should use when I run the ompi-checkpoint  
</span><br>
<span class="quotelev2">&gt;&gt; on
</span><br>
<span class="quotelev2">&gt;&gt; the restarted job. Any help would be greatly appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="5417.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>Previous message:</strong> <a href="5415.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>In reply to:</strong> <a href="5415.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5417.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>Reply:</strong> <a href="5417.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
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
