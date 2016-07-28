<?
$subject_val = "Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 10 06:10:45 2014" -->
<!-- isoreceived="20140910101045" -->
<!-- sent="Wed, 10 Sep 2014 10:10:43 +0000" -->
<!-- isosent="20140910101043" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)" -->
<!-- id="42C5ED3A-6F71-4390-BD94-4BEA6251134A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CA+8kLizqwqTqjz=LmtzmSzi0N8J9Lr8OMKP5j6awmJSNTEGJyw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-10 06:10:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25307.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead	of InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="25305.php">Red Red: "Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)"</a>
<li><strong>In reply to:</strong> <a href="25305.php">Red Red: "Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send all the information here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Sep 10, 2014, at 5:43 AM, Red Red &lt;redosx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This is the version: mpirun (Open MPI) 1.7.5a1r30774.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your interest.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2014-09-10 10:41 GMT+01:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; What OMPI version?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 10, 2014, at 1:53 AM, Red Red &lt;redosx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; after the installation of a Torque PBS when I start a simple program with mpirun I get this result (i have already installed again):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [oxygen1:04280] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file ../../../../../../orte/mca/ess/env/ess_env_module.c at line 358
</span><br>
<span class="quotelev2">&gt;&gt; [oxygen1:04281] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file ../../../../../../orte/mca/ess/env/ess_env_module.c at line 358
</span><br>
<span class="quotelev2">&gt;&gt; [oxygen1:04278] tcp_peer_recv_connect_ack: invalid header type: -236847104
</span><br>
<span class="quotelev2">&gt;&gt; [oxygen1:04280] [[INVALID],INVALID] routed:binomial: Connection to lifeline [[61922,0],0] lost
</span><br>
<span class="quotelev2">&gt;&gt; [oxygen1:04282] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file ../../../../../../orte/mca/ess/env/ess_env_module.c at line 358
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev2">&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Process name: [[61922,1],0]
</span><br>
<span class="quotelev2">&gt;&gt;   Exit code:    1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please help me, thank you in advance.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Carmine
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25303.php">http://www.open-mpi.org/community/lists/users/2014/09/25303.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25304.php">http://www.open-mpi.org/community/lists/users/2014/09/25304.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25305.php">http://www.open-mpi.org/community/lists/users/2014/09/25305.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25307.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Forcing OpenMPI to use Ethernet interconnect instead	of InfiniBand"</a>
<li><strong>Previous message:</strong> <a href="25305.php">Red Red: "Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)"</a>
<li><strong>In reply to:</strong> <a href="25305.php">Red Red: "Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)"</a>
<!-- nextthread="start" -->
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
