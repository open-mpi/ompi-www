<?
$subject_val = "Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 10 05:43:38 2014" -->
<!-- isoreceived="20140910094338" -->
<!-- sent="Wed, 10 Sep 2014 10:43:38 +0100" -->
<!-- isosent="20140910094338" -->
<!-- name="Red Red" -->
<!-- email="redosx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)" -->
<!-- id="CA+8kLizqwqTqjz=LmtzmSzi0N8J9Lr8OMKP5j6awmJSNTEGJyw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="7C44891C-CBA8-45CA-A8B1-87F802CFBE01_at_open-mpi.org" -->
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
<strong>From:</strong> Red Red (<em>redosx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-10 05:43:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25306.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)"</a>
<li><strong>Previous message:</strong> <a href="25304.php">Ralph Castain: "Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)"</a>
<li><strong>In reply to:</strong> <a href="25304.php">Ralph Castain: "Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25306.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)"</a>
<li><strong>Reply:</strong> <a href="25306.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is the version: mpirun (Open MPI) 1.7.5a1r30774.
<br>
<p>Thank you for your interest.
<br>
<p><p>2014-09-10 10:41 GMT+01:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; What OMPI version?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 10, 2014, at 1:53 AM, Red Red &lt;redosx_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; after the installation of a Torque PBS when I start a simple program with
</span><br>
<span class="quotelev1">&gt; mpirun I get this result (i have already installed again):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [*oxygen1:04280] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; ../../../../../../orte/mca/ess/env/ess_env_module.c at line 358*
</span><br>
<span class="quotelev1">&gt; *[oxygen1:04281] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; ../../../../../../orte/mca/ess/env/ess_env_module.c at line 358*
</span><br>
<span class="quotelev1">&gt; *[oxygen1:04278] tcp_peer_recv_connect_ack: invalid header type:
</span><br>
<span class="quotelev1">&gt; -236847104*
</span><br>
<span class="quotelev1">&gt; *[oxygen1:04280] [[INVALID],INVALID] routed:binomial: Connection to
</span><br>
<span class="quotelev1">&gt; lifeline [[61922,0],0] lost*
</span><br>
<span class="quotelev1">&gt; *[oxygen1:04282] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
</span><br>
<span class="quotelev1">&gt; ../../../../../../orte/mca/ess/env/ess_env_module.c at line 358*
</span><br>
<span class="quotelev1">&gt; *-------------------------------------------------------*
</span><br>
<span class="quotelev1">&gt; *Primary job  terminated normally, but 1 process returned*
</span><br>
<span class="quotelev1">&gt; *a non-zero exit code.. Per user-direction, the job has been aborted.*
</span><br>
<span class="quotelev1">&gt; *-------------------------------------------------------*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *--------------------------------------------------------------------------*
</span><br>
<span class="quotelev1">&gt; *mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev1">&gt; thus causing*
</span><br>
<span class="quotelev1">&gt; *the job to be terminated. The first process to do so was:*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  Process name: [[61922,1],0]*
</span><br>
<span class="quotelev1">&gt; *  Exit code:    1*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please help me, thank you in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Carmine
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25303.php">http://www.open-mpi.org/community/lists/users/2014/09/25303.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/09/25304.php">http://www.open-mpi.org/community/lists/users/2014/09/25304.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25305/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25306.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)"</a>
<li><strong>Previous message:</strong> <a href="25304.php">Ralph Castain: "Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)"</a>
<li><strong>In reply to:</strong> <a href="25304.php">Ralph Castain: "Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25306.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)"</a>
<li><strong>Reply:</strong> <a href="25306.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Error running] OpenMPI after the installation of Torque (PBS)"</a>
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
