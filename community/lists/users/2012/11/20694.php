<?
$subject_val = "Re: [OMPI users] gathering problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  9 13:49:59 2012" -->
<!-- isoreceived="20121109184959" -->
<!-- sent="Fri, 9 Nov 2012 10:49:51 -0800" -->
<!-- isosent="20121109184951" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] gathering problem" -->
<!-- id="54ECCE58-3701-4FC1-898C-525DA0362A4E_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="3258BBCAE92D924BB7419ABF3554AC0412FF97_at_HVXDSP24.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] gathering problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-09 13:49:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20695.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re:  gathering problem"</a>
<li><strong>Previous message:</strong> <a href="20693.php">Martin Siegert: "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<li><strong>In reply to:</strong> <a href="20688.php">Hodge, Gary C: "Re: [OMPI users] gathering problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20695.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re:  gathering problem"</a>
<li><strong>Reply:</strong> <a href="20695.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re:  gathering problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Talked to one of our developers (afraid everyone is swamped with SC12 right now), and we have a few suggestions:
<br>
<p>1. to reduce OS-jitter, have you tried --bind-to-core or --bind-to-socket? This would avoid context switches throwing you onto different memory segments
<br>
<p>2. we recall you had an issue with page faults and we suggested using a different shared memory method - did that help? Are you still seeing page faults?
<br>
<p>3. are you on a dedicated segment of the IB fabric? Is there competing traffic on the IB network that might cause the delay?
<br>
<p>4. you might run a layer0 diagnostic on the IB fabric to ensure there isn't a problem in that area
<br>
<p>HTH
<br>
Ralph
<br>
<p><p>On Nov 9, 2012, at 9:36 AM, &quot;Hodge, Gary C&quot; &lt;gary.c.hodge_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Answering my own question, I have downloaded openMPI 1.6.2 and still get the delay in the MPI_Send.  Previously, I was using openMPI 1.4.1
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I configured 1.6.2 with &#150;enable-peruse and have implemented PERUSE callbacks.
</span><br>
<span class="quotelev1">&gt; Here is a trace of gb2 (PROC39) sending messages to ob (PROC28)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; PROC39: 59.2268409810; SEND_REQ_ACTIVATE, count=81536, peer=28
</span><br>
<span class="quotelev1">&gt; PROC39: 59.2268649811; SEND_REQ_XFER_BEGIN, count=81536, peer=28
</span><br>
<span class="quotelev1">&gt; PROC39: 59.2270019811; SEND_REQ_XFER_CONTINUE, count=27178, peer=28
</span><br>
<span class="quotelev1">&gt; PROC39: 59.2270509811; SEND_REQ_XFER_CONTINUE, count=54358, peer=28
</span><br>
<span class="quotelev1">&gt; PROC39: 59.2270809811; SEND_REQ_XFER_END, count=81536, peer=28
</span><br>
<span class="quotelev1">&gt; PROC39: 59.2270869811; SEND_REQ_COMPLETE, count=81536, peer=28
</span><br>
<span class="quotelev1">&gt; PROC39: 59.2270939811; SEND_REQ_NOTIFY, count=81536, peer=28
</span><br>
<span class="quotelev1">&gt; PROC28: 59.2271299611; RECV_MSG_ARRIVED, count=0, peer=39
</span><br>
<span class="quotelev1">&gt; PROC28: 59.2271389612; RECV_SEARCH_POSTED_Q_BEGIN, count=0, peer=39
</span><br>
<span class="quotelev1">&gt; PROC28: 59.2271439611; RECV_REQ_REMOVE_FROM_POSTED_Q, count=172084, peer=39
</span><br>
<span class="quotelev1">&gt; PROC28: 59.2271479612; RECV_MSG_MATCH_POSTED_REQ, count=172084, peer=39
</span><br>
<span class="quotelev1">&gt; PROC28: 59.2271519612; RECV_SEARCH_POSTED_Q_END, count=0, peer=39
</span><br>
<span class="quotelev1">&gt; PROC28: 59.2271559612; RECV_REQ_XFER_BEGIN, count=172084, peer=39
</span><br>
<span class="quotelev1">&gt; PROC28: 59.2271609611; RECV_REQ_XFER_CONTINUE, count=27178, peer=39
</span><br>
<span class="quotelev1">&gt; PROC28: 59.2271759611; RECV_REQ_XFER_CONTINUE, count=54358, peer=39
</span><br>
<span class="quotelev1">&gt; PROC39: 59.2283769811; SEND_REQ_ACTIVATE, count=81536, peer=28
</span><br>
<span class="quotelev1">&gt; PROC39: 59.2283959811; SEND_REQ_XFER_BEGIN, count=81536, peer=28
</span><br>
<span class="quotelev1">&gt; PROC39: 59.4331379811; SEND_REQ_XFER_CONTINUE, count=27178, peer=28
</span><br>
<span class="quotelev1">&gt; PROC28: 59.4331819612; RECV_REQ_XFER_END, count=172084, peer=39
</span><br>
<span class="quotelev1">&gt; PROC28: 59.4332009612; RECV_REQ_COMPLETE, count=172084, peer=39
</span><br>
<span class="quotelev1">&gt; PROC39: 59.4332049811; SEND_REQ_XFER_CONTINUE, count=54358, peer=28
</span><br>
<span class="quotelev1">&gt; PROC28: 59.4332059611; RECV_MSG_ARRIVED, count=0, peer=39
</span><br>
<span class="quotelev1">&gt; PROC28: 59.4332109612; RECV_SEARCH_POSTED_Q_BEGIN, count=0, peer=39
</span><br>
<span class="quotelev1">&gt; PROC28: 59.4332149612; RECV_MSG_INSERT_IN_UNEX_Q, count=0, peer=39
</span><br>
<span class="quotelev1">&gt; PROC28: 59.4332199611; RECV_SEARCH_POSTED_Q_END, count=0, peer=39
</span><br>
<span class="quotelev1">&gt; PROC28: 59.4332269612; RECV_REQ_NOTIFY, count=172084, peer=39
</span><br>
<span class="quotelev1">&gt; PROC28: 59.4332539611; RECV_REQ_ACTIVATE, count=172084, peer=39
</span><br>
<span class="quotelev1">&gt; PROC39: 59.4332569811; SEND_REQ_XFER_END, count=81536, peer=28
</span><br>
<span class="quotelev1">&gt; PROC28: 59.4332589612; RECV_SEARCH_UNEX_Q_BEGIN, count=172084, peer=39
</span><br>
<span class="quotelev1">&gt; PROC28: 59.4332629612; RECV_REQ_MATCH_UNEX, count=172084, peer=39
</span><br>
<span class="quotelev1">&gt; PROC39: 59.4332659811; SEND_REQ_COMPLETE, count=81536, peer=28
</span><br>
<span class="quotelev1">&gt; PROC28: 59.4332669611; RECV_MSG_REMOVE_FROM_UNEX_Q, count=0, peer=39
</span><br>
<span class="quotelev1">&gt; PROC28: 59.4332719612; RECV_SEARCH_UNEX_Q_END, count=172084, peer=39
</span><br>
<span class="quotelev1">&gt; PROC28: 59.4332759612; RECV_REQ_XFER_BEGIN, count=172084, peer=39
</span><br>
<span class="quotelev1">&gt; PROC39: 59.4332769811; SEND_REQ_NOTIFY, count=81536, peer=28
</span><br>
<span class="quotelev1">&gt; PROC28: 59.4332809611; RECV_REQ_XFER_CONTINUE, count=27178, peer=39
</span><br>
<span class="quotelev1">&gt; PROC39: 59.4332849811; ERROR: component gb2 exceeded send time limit by 0.104915 seconds.
</span><br>
<span class="quotelev1">&gt; PROC39: 59.4332849811; WARNING: component gb2 increased page faults R=130898,0; P=130898,0; S=132207,0
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Notice the 205 ms delay between the hi-lighted SEND_REQ_XFER_BEGIN and the subsequent SEND_REQ_XFER_CONTINUE
</span><br>
<span class="quotelev1">&gt; Also notice that there was no such delay in the previous send request.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The last two lines are my own debug that monitor excessive time spent in an MPI_Send and monitor increasing number of page faults.
</span><br>
<span class="quotelev1">&gt; After the delaying MPI_Send, the page faults have increased by 1309 (132207 &#150; 130898) !!!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I looked at the PML code (pml_ob1_sendreq.c) and I suspect that something is going awry in the mca_bml_base_prepare_src function.
</span><br>
<span class="quotelev1">&gt; I believe that this is the function in which the openib BTL makes calls to register the user memory.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This delay in the MPI_Send kills any hope of meeting our real-time requirements, so any help is greatly appreciated.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: Hodge, Gary C 
</span><br>
<span class="quotelev1">&gt; Sent: Monday, November 05, 2012 12:27 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: gathering problem
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I continue to have a problem where 2 processes are sending to the same process and one of the sending processes hangs for 150 to 550 ms in the call to MPI_Send.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Each process runs on a different node and the receiving process has posted an MPI_Irecv 17 ms before the hanging send.
</span><br>
<span class="quotelev1">&gt; The posted receives are for 172K buffers and the sending processes are sending 81K size messages.
</span><br>
<span class="quotelev1">&gt; I have set mpi_leave_pinned to 1 and have increased the btl_openib_receive_queues to &#133;:S,65536,512,256,64
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; How do I trace the various phases of message passing to diagnose where the send is hanging up?
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20694/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20695.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re:  gathering problem"</a>
<li><strong>Previous message:</strong> <a href="20693.php">Martin Siegert: "Re: [OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<li><strong>In reply to:</strong> <a href="20688.php">Hodge, Gary C: "Re: [OMPI users] gathering problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20695.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re:  gathering problem"</a>
<li><strong>Reply:</strong> <a href="20695.php">Hodge, Gary C: "Re: [OMPI users] EXTERNAL: Re:  gathering problem"</a>
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
