<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 14 13:16:31 2006" -->
<!-- isoreceived="20060414171631" -->
<!-- sent="Fri, 14 Apr 2006 13:15:49 -0400" -->
<!-- isosent="20060414171549" -->
<!-- name="Prakash Velayutham" -->
<!-- email="prakash.velayutham_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI error" -->
<!-- id="443FD8C5.6040502_at_cchmc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF67213D_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Prakash Velayutham (<em>prakash.velayutham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-14 13:15:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1070.php">Aniruddha Shet: "[OMPI users] Error while building OpenMPI on Itanium cluster with Myrinet"</a>
<li><strong>Previous message:</strong> <a href="1068.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI error"</a>
<li><strong>In reply to:</strong> <a href="1068.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7945.php">Jeff Squyres: "Re: [OMPI users] Open MPI error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK. Figured that it was wrong number of arguments to the code.
<br>
<p>Thanks,
<br>
Prakash
<br>
<p>Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; I'm assuming that this is during the startup shortly after mpirun,
</span><br>
<span class="quotelev1">&gt; right?  (i.e., during MPI_INIT)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like MPI processes were unable to connect back to the
</span><br>
<span class="quotelev1">&gt; rendezvous point (mpirun) during startup.  Do you have any firewalls or
</span><br>
<span class="quotelev1">&gt; port blocking running in your cluster?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Prakash Velayutham
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, April 14, 2006 11:00 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Prakash Velayutham
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] Open MPI error
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What does this error mean?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; **************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; ****************
</span><br>
<span class="quotelev2">&gt;&gt; socket 10: [wins02:19102] [0,0,3]-[0,0,0] mca_oob_tcp_msg_recv: readv
</span><br>
<span class="quotelev2">&gt;&gt; failed with errno=104
</span><br>
<span class="quotelev2">&gt;&gt; socket 12: [wins01:19281] [0,0,4]-[0,0,0] mca_oob_tcp_msg_recv: readv
</span><br>
<span class="quotelev2">&gt;&gt; failed with errno=104
</span><br>
<span class="quotelev2">&gt;&gt; socket 6: [wins05:00939] [0,0,1]-[0,0,0] mca_oob_tcp_msg_send_handler:
</span><br>
<span class="quotelev2">&gt;&gt; writev failed with errno=104
</span><br>
<span class="quotelev2">&gt;&gt; socket 6: [wins05:00939] [0,0,1] ORTE_ERROR_LOG: Communication failure
</span><br>
<span class="quotelev2">&gt;&gt; in file gpr_proxy_put_get.c at line 143
</span><br>
<span class="quotelev2">&gt;&gt; socket 6: [wins05:00939] [0,0,1]-[0,0,0]
</span><br>
<span class="quotelev2">&gt;&gt; mca_oob_tcp_peer_complete_connect: connection failed (errno=111) -
</span><br>
<span class="quotelev2">&gt;&gt; retrying (pid=939)
</span><br>
<span class="quotelev2">&gt;&gt; socket 6: [wins05:00939] mca_oob_tcp_peer_timer_handler
</span><br>
<span class="quotelev2">&gt;&gt; socket 6: [wins05:00939] [0,0,1]-[0,0,0]
</span><br>
<span class="quotelev2">&gt;&gt; mca_oob_tcp_peer_complete_connect: connection failed (errno=111) -
</span><br>
<span class="quotelev2">&gt;&gt; retrying (pid=939)
</span><br>
<span class="quotelev2">&gt;&gt; socket 6: [wins05:00939] mca_oob_tcp_peer_timer_handler
</span><br>
<span class="quotelev2">&gt;&gt; socket 6: [wins05:00939] [0,0,1]-[0,0,0]
</span><br>
<span class="quotelev2">&gt;&gt; mca_oob_tcp_peer_complete_connect: connection failed (errno=111) -
</span><br>
<span class="quotelev2">&gt;&gt; retrying (pid=939)
</span><br>
<span class="quotelev2">&gt;&gt; **************************************************************
</span><br>
<span class="quotelev2">&gt;&gt; *****************
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am still debugging the code I am working on, but just wanted to get
</span><br>
<span class="quotelev2">&gt;&gt; some insight into where I should be looking at.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am running openmpi-1.0.1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Prakash
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1070.php">Aniruddha Shet: "[OMPI users] Error while building OpenMPI on Itanium cluster with Myrinet"</a>
<li><strong>Previous message:</strong> <a href="1068.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI error"</a>
<li><strong>In reply to:</strong> <a href="1068.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Open MPI error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/02/7945.php">Jeff Squyres: "Re: [OMPI users] Open MPI error"</a>
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
