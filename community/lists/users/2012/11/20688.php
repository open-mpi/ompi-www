<?
$subject_val = "Re: [OMPI users] gathering problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  9 12:39:10 2012" -->
<!-- isoreceived="20121109173910" -->
<!-- sent="Fri, 9 Nov 2012 17:36:43 +0000" -->
<!-- isosent="20121109173643" -->
<!-- name="Hodge, Gary C" -->
<!-- email="gary.c.hodge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] gathering problem" -->
<!-- id="3258BBCAE92D924BB7419ABF3554AC0412FF97_at_HVXDSP24.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] gathering problem" -->
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
<strong>From:</strong> Hodge, Gary C (<em>gary.c.hodge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-09 12:36:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20689.php">Craig Tierney: "[OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<li><strong>Previous message:</strong> <a href="20687.php">Jeff Squyres: "[OMPI users] Open MPI @SC next week"</a>
<li><strong>Maybe in reply to:</strong> <a href="20641.php">Hodge, Gary C: "[OMPI users] gathering problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20694.php">Ralph Castain: "Re: [OMPI users] gathering problem"</a>
<li><strong>Reply:</strong> <a href="20694.php">Ralph Castain: "Re: [OMPI users] gathering problem"</a>
<li><strong>Reply:</strong> <a href="20696.php">George Bosilca: "Re: [OMPI users] gathering problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Answering my own question, I have downloaded openMPI 1.6.2 and still get the delay in the MPI_Send.  Previously, I was using openMPI 1.4.1
<br>
<p>I configured 1.6.2 with -enable-peruse and have implemented PERUSE callbacks.
<br>
Here is a trace of gb2 (PROC39) sending messages to ob (PROC28)
<br>
<p>PROC39: 59.2268409810; SEND_REQ_ACTIVATE, count=81536, peer=28
<br>
PROC39: 59.2268649811; SEND_REQ_XFER_BEGIN, count=81536, peer=28
<br>
PROC39: 59.2270019811; SEND_REQ_XFER_CONTINUE, count=27178, peer=28
<br>
PROC39: 59.2270509811; SEND_REQ_XFER_CONTINUE, count=54358, peer=28
<br>
PROC39: 59.2270809811; SEND_REQ_XFER_END, count=81536, peer=28
<br>
PROC39: 59.2270869811; SEND_REQ_COMPLETE, count=81536, peer=28
<br>
PROC39: 59.2270939811; SEND_REQ_NOTIFY, count=81536, peer=28
<br>
PROC28: 59.2271299611; RECV_MSG_ARRIVED, count=0, peer=39
<br>
PROC28: 59.2271389612; RECV_SEARCH_POSTED_Q_BEGIN, count=0, peer=39
<br>
PROC28: 59.2271439611; RECV_REQ_REMOVE_FROM_POSTED_Q, count=172084, peer=39
<br>
PROC28: 59.2271479612; RECV_MSG_MATCH_POSTED_REQ, count=172084, peer=39
<br>
PROC28: 59.2271519612; RECV_SEARCH_POSTED_Q_END, count=0, peer=39
<br>
PROC28: 59.2271559612; RECV_REQ_XFER_BEGIN, count=172084, peer=39
<br>
PROC28: 59.2271609611; RECV_REQ_XFER_CONTINUE, count=27178, peer=39
<br>
PROC28: 59.2271759611; RECV_REQ_XFER_CONTINUE, count=54358, peer=39
<br>
PROC39: 59.2283769811; SEND_REQ_ACTIVATE, count=81536, peer=28
<br>
PROC39: 59.2283959811; SEND_REQ_XFER_BEGIN, count=81536, peer=28
<br>
PROC39: 59.4331379811; SEND_REQ_XFER_CONTINUE, count=27178, peer=28
<br>
PROC28: 59.4331819612; RECV_REQ_XFER_END, count=172084, peer=39
<br>
PROC28: 59.4332009612; RECV_REQ_COMPLETE, count=172084, peer=39
<br>
PROC39: 59.4332049811; SEND_REQ_XFER_CONTINUE, count=54358, peer=28
<br>
PROC28: 59.4332059611; RECV_MSG_ARRIVED, count=0, peer=39
<br>
PROC28: 59.4332109612; RECV_SEARCH_POSTED_Q_BEGIN, count=0, peer=39
<br>
PROC28: 59.4332149612; RECV_MSG_INSERT_IN_UNEX_Q, count=0, peer=39
<br>
PROC28: 59.4332199611; RECV_SEARCH_POSTED_Q_END, count=0, peer=39
<br>
PROC28: 59.4332269612; RECV_REQ_NOTIFY, count=172084, peer=39
<br>
PROC28: 59.4332539611; RECV_REQ_ACTIVATE, count=172084, peer=39
<br>
PROC39: 59.4332569811; SEND_REQ_XFER_END, count=81536, peer=28
<br>
PROC28: 59.4332589612; RECV_SEARCH_UNEX_Q_BEGIN, count=172084, peer=39
<br>
PROC28: 59.4332629612; RECV_REQ_MATCH_UNEX, count=172084, peer=39
<br>
PROC39: 59.4332659811; SEND_REQ_COMPLETE, count=81536, peer=28
<br>
PROC28: 59.4332669611; RECV_MSG_REMOVE_FROM_UNEX_Q, count=0, peer=39
<br>
PROC28: 59.4332719612; RECV_SEARCH_UNEX_Q_END, count=172084, peer=39
<br>
PROC28: 59.4332759612; RECV_REQ_XFER_BEGIN, count=172084, peer=39
<br>
PROC39: 59.4332769811; SEND_REQ_NOTIFY, count=81536, peer=28
<br>
PROC28: 59.4332809611; RECV_REQ_XFER_CONTINUE, count=27178, peer=39
<br>
PROC39: 59.4332849811; ERROR: component gb2 exceeded send time limit by 0.104915 seconds.
<br>
PROC39: 59.4332849811; WARNING: component gb2 increased page faults R=130898,0; P=130898,0; S=132207,0
<br>
<p>Notice the 205 ms delay between the hi-lighted SEND_REQ_XFER_BEGIN and the subsequent SEND_REQ_XFER_CONTINUE
<br>
Also notice that there was no such delay in the previous send request.
<br>
<p>The last two lines are my own debug that monitor excessive time spent in an MPI_Send and monitor increasing number of page faults.
<br>
After the delaying MPI_Send, the page faults have increased by 1309 (132207 - 130898) !!!
<br>
<p>I looked at the PML code (pml_ob1_sendreq.c) and I suspect that something is going awry in the mca_bml_base_prepare_src function.
<br>
I believe that this is the function in which the openib BTL makes calls to register the user memory.
<br>
<p>This delay in the MPI_Send kills any hope of meeting our real-time requirements, so any help is greatly appreciated.
<br>
<p><p>From: Hodge, Gary C
<br>
Sent: Monday, November 05, 2012 12:27 PM
<br>
To: users_at_[hidden]
<br>
Subject: gathering problem
<br>
<p>I continue to have a problem where 2 processes are sending to the same process and one of the sending processes hangs for 150 to 550 ms in the call to MPI_Send.
<br>
<p>Each process runs on a different node and the receiving process has posted an MPI_Irecv 17 ms before the hanging send.
<br>
The posted receives are for 172K buffers and the sending processes are sending 81K size messages.
<br>
I have set mpi_leave_pinned to 1 and have increased the btl_openib_receive_queues to ...:S,65536,512,256,64
<br>
<p>How do I trace the various phases of message passing to diagnose where the send is hanging up?
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20688/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20689.php">Craig Tierney: "[OMPI users] mpif90 wrapper is using -pthread as option to ifort, but option is depreciated"</a>
<li><strong>Previous message:</strong> <a href="20687.php">Jeff Squyres: "[OMPI users] Open MPI @SC next week"</a>
<li><strong>Maybe in reply to:</strong> <a href="20641.php">Hodge, Gary C: "[OMPI users] gathering problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20694.php">Ralph Castain: "Re: [OMPI users] gathering problem"</a>
<li><strong>Reply:</strong> <a href="20694.php">Ralph Castain: "Re: [OMPI users] gathering problem"</a>
<li><strong>Reply:</strong> <a href="20696.php">George Bosilca: "Re: [OMPI users] gathering problem"</a>
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
