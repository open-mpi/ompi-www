<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 14 13:07:42 2006" -->
<!-- isoreceived="20060414170742" -->
<!-- sent="Fri, 14 Apr 2006 13:07:34 -0400" -->
<!-- isosent="20060414170734" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI error" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF67213D_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Open MPI error" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-14 13:07:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1069.php">Prakash Velayutham: "Re: [OMPI users] Open MPI error"</a>
<li><strong>Previous message:</strong> <a href="1067.php">Prakash Velayutham: "[OMPI users] Open MPI error"</a>
<li><strong>Maybe in reply to:</strong> <a href="1067.php">Prakash Velayutham: "[OMPI users] Open MPI error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1069.php">Prakash Velayutham: "Re: [OMPI users] Open MPI error"</a>
<li><strong>Reply:</strong> <a href="1069.php">Prakash Velayutham: "Re: [OMPI users] Open MPI error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm assuming that this is during the startup shortly after mpirun,
<br>
right?  (i.e., during MPI_INIT)
<br>
<p>It looks like MPI processes were unable to connect back to the
<br>
rendezvous point (mpirun) during startup.  Do you have any firewalls or
<br>
port blocking running in your cluster?
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Prakash Velayutham
</span><br>
<span class="quotelev1">&gt; Sent: Friday, April 14, 2006 11:00 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Cc: Prakash Velayutham
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Open MPI error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What does this error mean?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **************************************************************
</span><br>
<span class="quotelev1">&gt; ****************
</span><br>
<span class="quotelev1">&gt; socket 10: [wins02:19102] [0,0,3]-[0,0,0] mca_oob_tcp_msg_recv: readv
</span><br>
<span class="quotelev1">&gt; failed with errno=104
</span><br>
<span class="quotelev1">&gt; socket 12: [wins01:19281] [0,0,4]-[0,0,0] mca_oob_tcp_msg_recv: readv
</span><br>
<span class="quotelev1">&gt; failed with errno=104
</span><br>
<span class="quotelev1">&gt; socket 6: [wins05:00939] [0,0,1]-[0,0,0] mca_oob_tcp_msg_send_handler:
</span><br>
<span class="quotelev1">&gt; writev failed with errno=104
</span><br>
<span class="quotelev1">&gt; socket 6: [wins05:00939] [0,0,1] ORTE_ERROR_LOG: Communication failure
</span><br>
<span class="quotelev1">&gt; in file gpr_proxy_put_get.c at line 143
</span><br>
<span class="quotelev1">&gt; socket 6: [wins05:00939] [0,0,1]-[0,0,0]
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_peer_complete_connect: connection failed (errno=111) -
</span><br>
<span class="quotelev1">&gt; retrying (pid=939)
</span><br>
<span class="quotelev1">&gt; socket 6: [wins05:00939] mca_oob_tcp_peer_timer_handler
</span><br>
<span class="quotelev1">&gt; socket 6: [wins05:00939] [0,0,1]-[0,0,0]
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_peer_complete_connect: connection failed (errno=111) -
</span><br>
<span class="quotelev1">&gt; retrying (pid=939)
</span><br>
<span class="quotelev1">&gt; socket 6: [wins05:00939] mca_oob_tcp_peer_timer_handler
</span><br>
<span class="quotelev1">&gt; socket 6: [wins05:00939] [0,0,1]-[0,0,0]
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_peer_complete_connect: connection failed (errno=111) -
</span><br>
<span class="quotelev1">&gt; retrying (pid=939)
</span><br>
<span class="quotelev1">&gt; **************************************************************
</span><br>
<span class="quotelev1">&gt; *****************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am still debugging the code I am working on, but just wanted to get
</span><br>
<span class="quotelev1">&gt; some insight into where I should be looking at.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running openmpi-1.0.1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Prakash
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1069.php">Prakash Velayutham: "Re: [OMPI users] Open MPI error"</a>
<li><strong>Previous message:</strong> <a href="1067.php">Prakash Velayutham: "[OMPI users] Open MPI error"</a>
<li><strong>Maybe in reply to:</strong> <a href="1067.php">Prakash Velayutham: "[OMPI users] Open MPI error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1069.php">Prakash Velayutham: "Re: [OMPI users] Open MPI error"</a>
<li><strong>Reply:</strong> <a href="1069.php">Prakash Velayutham: "Re: [OMPI users] Open MPI error"</a>
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
