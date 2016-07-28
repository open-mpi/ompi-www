<?
$subject_val = "Re: [OMPI users] How to make a job abort when one host dies?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 14:43:49 2009" -->
<!-- isoreceived="20090817184349" -->
<!-- sent="Mon, 17 Aug 2009 14:43:42 -0400" -->
<!-- isosent="20090817184342" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to make a job abort when one host dies?" -->
<!-- id="02B35136-95C3-4C49-A317-0B24DED24E5A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A81510A.5090200_at_lysator.liu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to make a job abort when one host dies?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 14:43:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10393.php">Scott Atchley: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<li><strong>Previous message:</strong> <a href="10391.php">Jeff Squyres: "Re: [OMPI users] problem starting openmpi on core duo macosx5"</a>
<li><strong>In reply to:</strong> <a href="10289.php">Oskar Enoksson: "[OMPI users] How to make a job abort when one host dies?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10393.php">Scott Atchley: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<li><strong>Reply:</strong> <a href="10393.php">Scott Atchley: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George / Myricom --
<br>
<p>Does the MX MTL abort if it gets a &quot;disconnected&quot; error back from  
<br>
libmyriexpress?
<br>
<p><p>On Aug 11, 2009, at 7:07 AM, Oskar Enoksson wrote:
<br>
<p><span class="quotelev1">&gt; I searched the FAQ and google but couldn't come up with a solution to
</span><br>
<span class="quotelev1">&gt; this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My problem is that when one MPI execution host dies or the network
</span><br>
<span class="quotelev1">&gt; connection goes down the job is not aborted. Instead the remaining
</span><br>
<span class="quotelev1">&gt; processes continue to eat 100% CPU indefinitely. How can I make jobs
</span><br>
<span class="quotelev1">&gt; abort in these cases?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use OpenMPI 1.3.2. We have a myrinet network and I use mtl/mx for  
</span><br>
<span class="quotelev1">&gt; mpi
</span><br>
<span class="quotelev1">&gt; communication. We also use gridengine 6.2u3. The output from the  
</span><br>
<span class="quotelev1">&gt; running
</span><br>
<span class="quotelev1">&gt; job indicates that the remaining processes detect a timeout trying to
</span><br>
<span class="quotelev1">&gt; communicate with the (dead) host cl120.foi.se. But why do they not
</span><br>
<span class="quotelev1">&gt; terminate after this failure?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev1">&gt;         type (1): send_small
</span><br>
<span class="quotelev1">&gt;         state (0x14): buffered dead
</span><br>
<span class="quotelev1">&gt;         requeued: 1000 (timeout=501000ms)
</span><br>
<span class="quotelev1">&gt;         dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
</span><br>
<span class="quotelev1">&gt;         partner: peer_index=1, endpoint=1, seqnum=0x2b8f
</span><br>
<span class="quotelev1">&gt;         matched_val: 0x0004000d_fffffff4
</span><br>
<span class="quotelev1">&gt;         slength=48, xfer_length=48
</span><br>
<span class="quotelev1">&gt;         seg: 0x7fffe11ff830,48
</span><br>
<span class="quotelev1">&gt;         caller: 0xdb
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was trying to contact
</span><br>
<span class="quotelev1">&gt;         00:60:dd:49:78:59 (cl120.foi.se:0)/1
</span><br>
<span class="quotelev1">&gt; Aborted 2 send requests due to remote peer 00:60:dd:49:78:59
</span><br>
<span class="quotelev1">&gt; (cl120.foi.se:0) disconnected
</span><br>
<span class="quotelev1">&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev1">&gt;         type (1): send_small
</span><br>
<span class="quotelev1">&gt;         state (0x14): buffered dead
</span><br>
<span class="quotelev1">&gt;         requeued: 1000 (timeout=501000ms)
</span><br>
<span class="quotelev1">&gt;         dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
</span><br>
<span class="quotelev1">&gt;         partner: peer_index=116, endpoint=1, seqnum=0x3726
</span><br>
<span class="quotelev1">&gt;         matched_val: 0x00040001_fffffff4
</span><br>
<span class="quotelev1">&gt;         slength=48, xfer_length=48
</span><br>
<span class="quotelev1">&gt;         seg: 0x7ffff124b7b0,48
</span><br>
<span class="quotelev1">&gt;         caller: 0x9b
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was trying to contact
</span><br>
<span class="quotelev1">&gt;         00:60:dd:49:78:59 (cl120.foi.se:0)/1
</span><br>
<span class="quotelev1">&gt; Aborted 2 send requests due to remote peer 00:60:dd:49:78:59
</span><br>
<span class="quotelev1">&gt; (cl120.foi.se:0) disconnected
</span><br>
<span class="quotelev1">&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev1">&gt;         type (1): send_small
</span><br>
<span class="quotelev1">&gt;         state (0x14): buffered dead
</span><br>
<span class="quotelev1">&gt;         requeued: 1000 (timeout=501000ms)
</span><br>
<span class="quotelev1">&gt;         dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
</span><br>
<span class="quotelev1">&gt;         partner: peer_index=1, endpoint=0, seqnum=0x1048
</span><br>
<span class="quotelev1">&gt;         matched_val: 0x00040006_fffffff4
</span><br>
<span class="quotelev1">&gt;         slength=48, xfer_length=48
</span><br>
<span class="quotelev1">&gt;         seg: 0x7fffc6470eb0,48
</span><br>
<span class="quotelev1">&gt;         caller: 0x70
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was trying to contact
</span><br>
<span class="quotelev1">&gt;         00:60:dd:49:78:59 (cl120.foi.se:0)/0
</span><br>
<span class="quotelev1">&gt; Aborted 2 send requests due to remote peer 00:60:dd:49:78:59
</span><br>
<span class="quotelev1">&gt; (cl120.foi.se:0) disconnected
</span><br>
<span class="quotelev1">&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev1">&gt;         type (1): send_small
</span><br>
<span class="quotelev1">&gt;         state (0x14): buffered dead
</span><br>
<span class="quotelev1">&gt;         requeued: 1000 (timeout=501000ms)
</span><br>
<span class="quotelev1">&gt;         dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
</span><br>
<span class="quotelev1">&gt;         partner: peer_index=1, endpoint=1, seqnum=0xd53
</span><br>
<span class="quotelev1">&gt;         matched_val: 0x00040007_fffffff4
</span><br>
<span class="quotelev1">&gt;         slength=48, xfer_length=48
</span><br>
<span class="quotelev1">&gt;         seg: 0x1f54360,48
</span><br>
<span class="quotelev1">&gt;         caller: 0xda
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was trying to contact
</span><br>
<span class="quotelev1">&gt;         00:60:dd:49:78:59 (cl120.foi.se:0)/1
</span><br>
<span class="quotelev1">&gt; Aborted 2 send requests due to remote peer 00:60:dd:49:78:59
</span><br>
<span class="quotelev1">&gt; (cl120.foi.se:0) disconnected
</span><br>
<span class="quotelev1">&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev1">&gt;         type (1): send_small
</span><br>
<span class="quotelev1">&gt;         state (0x14): buffered dead
</span><br>
<span class="quotelev1">&gt;         requeued: 1000 (timeout=501000ms)
</span><br>
<span class="quotelev1">&gt;         dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
</span><br>
<span class="quotelev1">&gt;         partner: peer_index=116, endpoint=0, seqnum=0x376c
</span><br>
<span class="quotelev1">&gt;         matched_val: 0x00040000_fffffff4
</span><br>
<span class="quotelev1">&gt;         slength=48, xfer_length=48
</span><br>
<span class="quotelev1">&gt;         seg: 0x82ec040,48
</span><br>
<span class="quotelev1">&gt;         caller: 0x12
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was trying to contact
</span><br>
<span class="quotelev1">&gt;         00:60:dd:49:78:59 (cl120.foi.se:0)/0
</span><br>
<span class="quotelev1">&gt; Aborted 1 send requests due to remote peer 00:60:dd:49:78:59
</span><br>
<span class="quotelev1">&gt; (cl120.foi.se:0) disconnected
</span><br>
<span class="quotelev1">&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev1">&gt;         type (1): send_small
</span><br>
<span class="quotelev1">&gt;         state (0x14): buffered dead
</span><br>
<span class="quotelev1">&gt;         requeued: 1000 (timeout=501000ms)
</span><br>
<span class="quotelev1">&gt;         dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
</span><br>
<span class="quotelev1">&gt;         partner: peer_index=1, endpoint=0, seqnum=0x2746
</span><br>
<span class="quotelev1">&gt;         matched_val: 0x0004000c_fffffff4
</span><br>
<span class="quotelev1">&gt;         slength=48, xfer_length=48
</span><br>
<span class="quotelev1">&gt;         seg: 0x1116f410,48
</span><br>
<span class="quotelev1">&gt;         caller: 0x30
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was trying to contact
</span><br>
<span class="quotelev1">&gt;         00:60:dd:49:78:59 (cl120.foi.se:0)/0
</span><br>
<span class="quotelev1">&gt; Aborted 2 send requests due to remote peer 00:60:dd:49:78:59
</span><br>
<span class="quotelev1">&gt; (cl120.foi.se:0) disconnected
</span><br>
<span class="quotelev1">&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev1">&gt;         type (1): send_small
</span><br>
<span class="quotelev1">&gt;         state (0x14): buffered dead
</span><br>
<span class="quotelev1">&gt;         requeued: 1000 (timeout=501000ms)
</span><br>
<span class="quotelev1">&gt;         dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
</span><br>
<span class="quotelev1">&gt;         partner: peer_index=1, endpoint=1, seqnum=0x18de
</span><br>
<span class="quotelev1">&gt;         matched_val: 0x00250001_fffffff4
</span><br>
<span class="quotelev1">&gt;         slength=104, xfer_length=104
</span><br>
<span class="quotelev1">&gt;         seg: 0x181c3100,104
</span><br>
<span class="quotelev1">&gt;         caller: 0x18
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was trying to contact
</span><br>
<span class="quotelev1">&gt;         00:60:dd:49:78:59 (cl120.foi.se:0)/1
</span><br>
<span class="quotelev1">&gt; Aborted 2 send requests due to remote peer 00:60:dd:49:78:59
</span><br>
<span class="quotelev1">&gt; (cl120.foi.se:0) disconnected
</span><br>
<span class="quotelev1">&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev1">&gt;         type (2): send_medium
</span><br>
<span class="quotelev1">&gt;         state (0x14): buffered dead
</span><br>
<span class="quotelev1">&gt;         requeued: 1000 (timeout=501000ms)
</span><br>
<span class="quotelev1">&gt;         dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
</span><br>
<span class="quotelev1">&gt;         partner: peer_index=116, endpoint=0, seqnum=0x3361
</span><br>
<span class="quotelev1">&gt;         matched_val: 0x0004000f_00000010
</span><br>
<span class="quotelev1">&gt;         slength=7168, xfer_length=7168
</span><br>
<span class="quotelev1">&gt;         seg: 0x23e8a838,7168
</span><br>
<span class="quotelev1">&gt;         caller: 0x7e
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was trying to contact
</span><br>
<span class="quotelev1">&gt;         00:60:dd:49:78:59 (cl120.foi.se:0)/0
</span><br>
<span class="quotelev1">&gt; Aborted 1 send requests due to remote peer 00:60:dd:49:78:59
</span><br>
<span class="quotelev1">&gt; (cl120.foi.se:0) disconnected
</span><br>
<span class="quotelev1">&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev1">&gt;         type (2): send_medium
</span><br>
<span class="quotelev1">&gt;         state (0x14): buffered dead
</span><br>
<span class="quotelev1">&gt;         requeued: 1000 (timeout=501000ms)
</span><br>
<span class="quotelev1">&gt;         dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
</span><br>
<span class="quotelev1">&gt;         partner: peer_index=116, endpoint=1, seqnum=0x3361
</span><br>
<span class="quotelev1">&gt;         matched_val: 0x0004000f_00000010
</span><br>
<span class="quotelev1">&gt;         slength=560, xfer_length=560
</span><br>
<span class="quotelev1">&gt;         seg: 0x23ec9fe0,560
</span><br>
<span class="quotelev1">&gt;         caller: 0x2d
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was trying to contact
</span><br>
<span class="quotelev1">&gt;         00:60:dd:49:78:59 (cl120.foi.se:0)/1
</span><br>
<span class="quotelev1">&gt; Aborted 1 send requests due to remote peer 00:60:dd:49:78:59
</span><br>
<span class="quotelev1">&gt; (cl120.foi.se:0) disconnected
</span><br>
<span class="quotelev1">&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev1">&gt;         type (2): send_medium
</span><br>
<span class="quotelev1">&gt;         state (0x14): buffered dead
</span><br>
<span class="quotelev1">&gt;         requeued: 1000 (timeout=501000ms)
</span><br>
<span class="quotelev1">&gt;         dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
</span><br>
<span class="quotelev1">&gt;         partner: peer_index=1, endpoint=1, seqnum=0x3361
</span><br>
<span class="quotelev1">&gt;         matched_val: 0x0004000c_0000000d
</span><br>
<span class="quotelev1">&gt;         slength=840, xfer_length=840
</span><br>
<span class="quotelev1">&gt;         seg: 0x1a471a90,840
</span><br>
<span class="quotelev1">&gt;         caller: 0xf9
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was trying to contact
</span><br>
<span class="quotelev1">&gt;         00:60:dd:49:78:59 (cl120.foi.se:0)/1
</span><br>
<span class="quotelev1">&gt; Aborted 1 send requests due to remote peer 00:60:dd:49:78:59
</span><br>
<span class="quotelev1">&gt; (cl120.foi.se:0) disconnected
</span><br>
<span class="quotelev1">&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev1">&gt;         type (3): send_large
</span><br>
<span class="quotelev1">&gt;         state (0x0):
</span><br>
<span class="quotelev1">&gt;         requeued: 1000 (timeout=501000ms)
</span><br>
<span class="quotelev1">&gt;         dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
</span><br>
<span class="quotelev1">&gt;         partner: peer_index=1, endpoint=1, seqnum=0xad1
</span><br>
<span class="quotelev1">&gt;         matched_val: 0x00040006_00000007
</span><br>
<span class="quotelev1">&gt;         slength=133504, xfer_length=79352
</span><br>
<span class="quotelev1">&gt;         seg: 0x1b0daae0,133504
</span><br>
<span class="quotelev1">&gt;         local_rdma_id: 6e
</span><br>
<span class="quotelev1">&gt;         caller: 0xe6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was trying to contact
</span><br>
<span class="quotelev1">&gt;         00:60:dd:49:78:59 (cl120.foi.se:0)/1
</span><br>
<span class="quotelev1">&gt; Aborted 1 send requests due to remote peer 00:60:dd:49:78:59
</span><br>
<span class="quotelev1">&gt; (cl120.foi.se:0) disconnected
</span><br>
<span class="quotelev1">&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev1">&gt;         type (2): send_medium
</span><br>
<span class="quotelev1">&gt;         state (0x14): buffered dead
</span><br>
<span class="quotelev1">&gt;         requeued: 1000 (timeout=501000ms)
</span><br>
<span class="quotelev1">&gt;         dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
</span><br>
<span class="quotelev1">&gt;         partner: peer_index=116, endpoint=0, seqnum=0x3361
</span><br>
<span class="quotelev1">&gt;         matched_val: 0x00040001_00000002
</span><br>
<span class="quotelev1">&gt;         slength=5992, xfer_length=5992
</span><br>
<span class="quotelev1">&gt;         seg: 0x1b136890,5992
</span><br>
<span class="quotelev1">&gt;         caller: 0x9f
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was trying to contact
</span><br>
<span class="quotelev1">&gt;         00:60:dd:49:78:59 (cl120.foi.se:0)/0
</span><br>
<span class="quotelev1">&gt; Aborted 1 send requests due to remote peer 00:60:dd:49:78:59
</span><br>
<span class="quotelev1">&gt; (cl120.foi.se:0) disconnected
</span><br>
<span class="quotelev1">&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev1">&gt;         type (3): send_large
</span><br>
<span class="quotelev1">&gt;         state (0x0):
</span><br>
<span class="quotelev1">&gt;         requeued: 1000 (timeout=501000ms)
</span><br>
<span class="quotelev1">&gt;         dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
</span><br>
<span class="quotelev1">&gt;         partner: peer_index=1, endpoint=0, seqnum=0xad1
</span><br>
<span class="quotelev1">&gt;         matched_val: 0x00040007_00000008
</span><br>
<span class="quotelev1">&gt;         slength=134400, xfer_length=134400
</span><br>
<span class="quotelev1">&gt;         seg: 0xb1d5600,134400
</span><br>
<span class="quotelev1">&gt;         local_rdma_id: 82
</span><br>
<span class="quotelev1">&gt;         caller: 0xc4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Was trying to contact
</span><br>
<span class="quotelev1">&gt;         00:60:dd:49:78:59 (cl120.foi.se:0)/0
</span><br>
<span class="quotelev1">&gt; Aborted 1 send requests due to remote peer 00:60:dd:49:78:59
</span><br>
<span class="quotelev1">&gt; (cl120.foi.se:0) disconnected
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10393.php">Scott Atchley: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<li><strong>Previous message:</strong> <a href="10391.php">Jeff Squyres: "Re: [OMPI users] problem starting openmpi on core duo macosx5"</a>
<li><strong>In reply to:</strong> <a href="10289.php">Oskar Enoksson: "[OMPI users] How to make a job abort when one host dies?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10393.php">Scott Atchley: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<li><strong>Reply:</strong> <a href="10393.php">Scott Atchley: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
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
