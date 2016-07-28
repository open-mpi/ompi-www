<?
$subject_val = "Re: [OMPI users] How to make a job abort when one host dies?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 16:22:16 2009" -->
<!-- isoreceived="20090817202216" -->
<!-- sent="Mon, 17 Aug 2009 16:22:04 -0400" -->
<!-- isosent="20090817202204" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to make a job abort when one host dies?" -->
<!-- id="609C4F74-E590-4327-B9DB-DA1DA54EF2D8_at_myri.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="02B35136-95C3-4C49-A317-0B24DED24E5A_at_cisco.com" -->
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
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 16:22:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10394.php">Craig Plaisance: "[OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10392.php">Jeff Squyres: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<li><strong>In reply to:</strong> <a href="10392.php">Jeff Squyres: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10408.php">Oskar Enoksson: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 17, 2009, at 2:43 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; George / Myricom --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does the MX MTL abort if it gets a &quot;disconnected&quot; error back from  
</span><br>
<span class="quotelev1">&gt; libmyriexpress?
</span><br>
<p>Short answer: yes.
<br>
<p>Long answer:
<br>
<p>The messages below indicate that these processes were all trying to  
<br>
send to cl120. It did not ack their messages after 1000 resend  
<br>
attempts (each retry is attempted with a 0.5 second interval) which is  
<br>
about 8.3 minutes (500 seconds).
<br>
<p>The messages also indicate that the message was a send_small which  
<br>
means it was 128 bytes or less. MX has MPI like semantics and allow  
<br>
for completion after the message has been either buffered or  
<br>
delivered. In this case, it was buffered and OMPI was most likely able  
<br>
to complete it successfully. The message was not able to be delivered,  
<br>
however, and its timeout caused MX to fail all future sends to that  
<br>
host. On the next mx_isend(), OMPI will detect a failure.
<br>
<p>Since it does not detect failure, my guess is that the process has not  
<br>
tried to send again to that host. They then end up waiting forever.
<br>
<p>They can change MX's behavior so that it does not complete a send  
<br>
until the receiver has acked it by exporting:
<br>
<p>MX_ZOMBIE_SEND=0
<br>
<p>This will hurt benchmark performance, but real application performance  
<br>
should not be affected.
<br>
<p>The question is, however, why is cl120 not acking messages? What is  
<br>
the application? What MPI calls does this application use?
<br>
<p>Scott
<br>
<p><span class="quotelev1">&gt; On Aug 11, 2009, at 7:07 AM, Oskar Enoksson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I searched the FAQ and google but couldn't come up with a solution to
</span><br>
<span class="quotelev2">&gt;&gt; this problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My problem is that when one MPI execution host dies or the network
</span><br>
<span class="quotelev2">&gt;&gt; connection goes down the job is not aborted. Instead the remaining
</span><br>
<span class="quotelev2">&gt;&gt; processes continue to eat 100% CPU indefinitely. How can I make jobs
</span><br>
<span class="quotelev2">&gt;&gt; abort in these cases?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I use OpenMPI 1.3.2. We have a myrinet network and I use mtl/mx for  
</span><br>
<span class="quotelev2">&gt;&gt; mpi
</span><br>
<span class="quotelev2">&gt;&gt; communication. We also use gridengine 6.2u3. The output from the  
</span><br>
<span class="quotelev2">&gt;&gt; running
</span><br>
<span class="quotelev2">&gt;&gt; job indicates that the remaining processes detect a timeout trying to
</span><br>
<span class="quotelev2">&gt;&gt; communicate with the (dead) host cl120.foi.se. But why do they not
</span><br>
<span class="quotelev2">&gt;&gt; terminate after this failure?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev2">&gt;&gt;        type (1): send_small
</span><br>
<span class="quotelev2">&gt;&gt;        state (0x14): buffered dead
</span><br>
<span class="quotelev2">&gt;&gt;        requeued: 1000 (timeout=501000ms)
</span><br>
<span class="quotelev2">&gt;&gt;        dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
</span><br>
<span class="quotelev2">&gt;&gt;        partner: peer_index=1, endpoint=1, seqnum=0x2b8f
</span><br>
<span class="quotelev2">&gt;&gt;        matched_val: 0x0004000d_fffffff4
</span><br>
<span class="quotelev2">&gt;&gt;        slength=48, xfer_length=48
</span><br>
<span class="quotelev2">&gt;&gt;        seg: 0x7fffe11ff830,48
</span><br>
<span class="quotelev2">&gt;&gt;        caller: 0xdb
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Was trying to contact
</span><br>
<span class="quotelev2">&gt;&gt;        00:60:dd:49:78:59 (cl120.foi.se:0)/1
</span><br>
<span class="quotelev2">&gt;&gt; Aborted 2 send requests due to remote peer 00:60:dd:49:78:59
</span><br>
<span class="quotelev2">&gt;&gt; (cl120.foi.se:0) disconnected
</span><br>
<span class="quotelev2">&gt;&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev2">&gt;&gt;        type (1): send_small
</span><br>
<span class="quotelev2">&gt;&gt;        state (0x14): buffered dead
</span><br>
<span class="quotelev2">&gt;&gt;        requeued: 1000 (timeout=501000ms)
</span><br>
<span class="quotelev2">&gt;&gt;        dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
</span><br>
<span class="quotelev2">&gt;&gt;        partner: peer_index=116, endpoint=1, seqnum=0x3726
</span><br>
<span class="quotelev2">&gt;&gt;        matched_val: 0x00040001_fffffff4
</span><br>
<span class="quotelev2">&gt;&gt;        slength=48, xfer_length=48
</span><br>
<span class="quotelev2">&gt;&gt;        seg: 0x7ffff124b7b0,48
</span><br>
<span class="quotelev2">&gt;&gt;        caller: 0x9b
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Was trying to contact
</span><br>
<span class="quotelev2">&gt;&gt;        00:60:dd:49:78:59 (cl120.foi.se:0)/1
</span><br>
<span class="quotelev2">&gt;&gt; Aborted 2 send requests due to remote peer 00:60:dd:49:78:59
</span><br>
<span class="quotelev2">&gt;&gt; (cl120.foi.se:0) disconnected
</span><br>
<span class="quotelev2">&gt;&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev2">&gt;&gt;        type (1): send_small
</span><br>
<span class="quotelev2">&gt;&gt;        state (0x14): buffered dead
</span><br>
<span class="quotelev2">&gt;&gt;        requeued: 1000 (timeout=501000ms)
</span><br>
<span class="quotelev2">&gt;&gt;        dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
</span><br>
<span class="quotelev2">&gt;&gt;        partner: peer_index=1, endpoint=0, seqnum=0x1048
</span><br>
<span class="quotelev2">&gt;&gt;        matched_val: 0x00040006_fffffff4
</span><br>
<span class="quotelev2">&gt;&gt;        slength=48, xfer_length=48
</span><br>
<span class="quotelev2">&gt;&gt;        seg: 0x7fffc6470eb0,48
</span><br>
<span class="quotelev2">&gt;&gt;        caller: 0x70
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Was trying to contact
</span><br>
<span class="quotelev2">&gt;&gt;        00:60:dd:49:78:59 (cl120.foi.se:0)/0
</span><br>
<span class="quotelev2">&gt;&gt; Aborted 2 send requests due to remote peer 00:60:dd:49:78:59
</span><br>
<span class="quotelev2">&gt;&gt; (cl120.foi.se:0) disconnected
</span><br>
<span class="quotelev2">&gt;&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev2">&gt;&gt;        type (1): send_small
</span><br>
<span class="quotelev2">&gt;&gt;        state (0x14): buffered dead
</span><br>
<span class="quotelev2">&gt;&gt;        requeued: 1000 (timeout=501000ms)
</span><br>
<span class="quotelev2">&gt;&gt;        dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
</span><br>
<span class="quotelev2">&gt;&gt;        partner: peer_index=1, endpoint=1, seqnum=0xd53
</span><br>
<span class="quotelev2">&gt;&gt;        matched_val: 0x00040007_fffffff4
</span><br>
<span class="quotelev2">&gt;&gt;        slength=48, xfer_length=48
</span><br>
<span class="quotelev2">&gt;&gt;        seg: 0x1f54360,48
</span><br>
<span class="quotelev2">&gt;&gt;        caller: 0xda
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Was trying to contact
</span><br>
<span class="quotelev2">&gt;&gt;        00:60:dd:49:78:59 (cl120.foi.se:0)/1
</span><br>
<span class="quotelev2">&gt;&gt; Aborted 2 send requests due to remote peer 00:60:dd:49:78:59
</span><br>
<span class="quotelev2">&gt;&gt; (cl120.foi.se:0) disconnected
</span><br>
<span class="quotelev2">&gt;&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev2">&gt;&gt;        type (1): send_small
</span><br>
<span class="quotelev2">&gt;&gt;        state (0x14): buffered dead
</span><br>
<span class="quotelev2">&gt;&gt;        requeued: 1000 (timeout=501000ms)
</span><br>
<span class="quotelev2">&gt;&gt;        dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
</span><br>
<span class="quotelev2">&gt;&gt;        partner: peer_index=116, endpoint=0, seqnum=0x376c
</span><br>
<span class="quotelev2">&gt;&gt;        matched_val: 0x00040000_fffffff4
</span><br>
<span class="quotelev2">&gt;&gt;        slength=48, xfer_length=48
</span><br>
<span class="quotelev2">&gt;&gt;        seg: 0x82ec040,48
</span><br>
<span class="quotelev2">&gt;&gt;        caller: 0x12
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Was trying to contact
</span><br>
<span class="quotelev2">&gt;&gt;        00:60:dd:49:78:59 (cl120.foi.se:0)/0
</span><br>
<span class="quotelev2">&gt;&gt; Aborted 1 send requests due to remote peer 00:60:dd:49:78:59
</span><br>
<span class="quotelev2">&gt;&gt; (cl120.foi.se:0) disconnected
</span><br>
<span class="quotelev2">&gt;&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev2">&gt;&gt;        type (1): send_small
</span><br>
<span class="quotelev2">&gt;&gt;        state (0x14): buffered dead
</span><br>
<span class="quotelev2">&gt;&gt;        requeued: 1000 (timeout=501000ms)
</span><br>
<span class="quotelev2">&gt;&gt;        dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
</span><br>
<span class="quotelev2">&gt;&gt;        partner: peer_index=1, endpoint=0, seqnum=0x2746
</span><br>
<span class="quotelev2">&gt;&gt;        matched_val: 0x0004000c_fffffff4
</span><br>
<span class="quotelev2">&gt;&gt;        slength=48, xfer_length=48
</span><br>
<span class="quotelev2">&gt;&gt;        seg: 0x1116f410,48
</span><br>
<span class="quotelev2">&gt;&gt;        caller: 0x30
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Was trying to contact
</span><br>
<span class="quotelev2">&gt;&gt;        00:60:dd:49:78:59 (cl120.foi.se:0)/0
</span><br>
<span class="quotelev2">&gt;&gt; Aborted 2 send requests due to remote peer 00:60:dd:49:78:59
</span><br>
<span class="quotelev2">&gt;&gt; (cl120.foi.se:0) disconnected
</span><br>
<span class="quotelev2">&gt;&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev2">&gt;&gt;        type (1): send_small
</span><br>
<span class="quotelev2">&gt;&gt;        state (0x14): buffered dead
</span><br>
<span class="quotelev2">&gt;&gt;        requeued: 1000 (timeout=501000ms)
</span><br>
<span class="quotelev2">&gt;&gt;        dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
</span><br>
<span class="quotelev2">&gt;&gt;        partner: peer_index=1, endpoint=1, seqnum=0x18de
</span><br>
<span class="quotelev2">&gt;&gt;        matched_val: 0x00250001_fffffff4
</span><br>
<span class="quotelev2">&gt;&gt;        slength=104, xfer_length=104
</span><br>
<span class="quotelev2">&gt;&gt;        seg: 0x181c3100,104
</span><br>
<span class="quotelev2">&gt;&gt;        caller: 0x18
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Was trying to contact
</span><br>
<span class="quotelev2">&gt;&gt;        00:60:dd:49:78:59 (cl120.foi.se:0)/1
</span><br>
<span class="quotelev2">&gt;&gt; Aborted 2 send requests due to remote peer 00:60:dd:49:78:59
</span><br>
<span class="quotelev2">&gt;&gt; (cl120.foi.se:0) disconnected
</span><br>
<span class="quotelev2">&gt;&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev2">&gt;&gt;        type (2): send_medium
</span><br>
<span class="quotelev2">&gt;&gt;        state (0x14): buffered dead
</span><br>
<span class="quotelev2">&gt;&gt;        requeued: 1000 (timeout=501000ms)
</span><br>
<span class="quotelev2">&gt;&gt;        dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
</span><br>
<span class="quotelev2">&gt;&gt;        partner: peer_index=116, endpoint=0, seqnum=0x3361
</span><br>
<span class="quotelev2">&gt;&gt;        matched_val: 0x0004000f_00000010
</span><br>
<span class="quotelev2">&gt;&gt;        slength=7168, xfer_length=7168
</span><br>
<span class="quotelev2">&gt;&gt;        seg: 0x23e8a838,7168
</span><br>
<span class="quotelev2">&gt;&gt;        caller: 0x7e
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Was trying to contact
</span><br>
<span class="quotelev2">&gt;&gt;        00:60:dd:49:78:59 (cl120.foi.se:0)/0
</span><br>
<span class="quotelev2">&gt;&gt; Aborted 1 send requests due to remote peer 00:60:dd:49:78:59
</span><br>
<span class="quotelev2">&gt;&gt; (cl120.foi.se:0) disconnected
</span><br>
<span class="quotelev2">&gt;&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev2">&gt;&gt;        type (2): send_medium
</span><br>
<span class="quotelev2">&gt;&gt;        state (0x14): buffered dead
</span><br>
<span class="quotelev2">&gt;&gt;        requeued: 1000 (timeout=501000ms)
</span><br>
<span class="quotelev2">&gt;&gt;        dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
</span><br>
<span class="quotelev2">&gt;&gt;        partner: peer_index=116, endpoint=1, seqnum=0x3361
</span><br>
<span class="quotelev2">&gt;&gt;        matched_val: 0x0004000f_00000010
</span><br>
<span class="quotelev2">&gt;&gt;        slength=560, xfer_length=560
</span><br>
<span class="quotelev2">&gt;&gt;        seg: 0x23ec9fe0,560
</span><br>
<span class="quotelev2">&gt;&gt;        caller: 0x2d
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Was trying to contact
</span><br>
<span class="quotelev2">&gt;&gt;        00:60:dd:49:78:59 (cl120.foi.se:0)/1
</span><br>
<span class="quotelev2">&gt;&gt; Aborted 1 send requests due to remote peer 00:60:dd:49:78:59
</span><br>
<span class="quotelev2">&gt;&gt; (cl120.foi.se:0) disconnected
</span><br>
<span class="quotelev2">&gt;&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev2">&gt;&gt;        type (2): send_medium
</span><br>
<span class="quotelev2">&gt;&gt;        state (0x14): buffered dead
</span><br>
<span class="quotelev2">&gt;&gt;        requeued: 1000 (timeout=501000ms)
</span><br>
<span class="quotelev2">&gt;&gt;        dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
</span><br>
<span class="quotelev2">&gt;&gt;        partner: peer_index=1, endpoint=1, seqnum=0x3361
</span><br>
<span class="quotelev2">&gt;&gt;        matched_val: 0x0004000c_0000000d
</span><br>
<span class="quotelev2">&gt;&gt;        slength=840, xfer_length=840
</span><br>
<span class="quotelev2">&gt;&gt;        seg: 0x1a471a90,840
</span><br>
<span class="quotelev2">&gt;&gt;        caller: 0xf9
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Was trying to contact
</span><br>
<span class="quotelev2">&gt;&gt;        00:60:dd:49:78:59 (cl120.foi.se:0)/1
</span><br>
<span class="quotelev2">&gt;&gt; Aborted 1 send requests due to remote peer 00:60:dd:49:78:59
</span><br>
<span class="quotelev2">&gt;&gt; (cl120.foi.se:0) disconnected
</span><br>
<span class="quotelev2">&gt;&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev2">&gt;&gt;        type (3): send_large
</span><br>
<span class="quotelev2">&gt;&gt;        state (0x0):
</span><br>
<span class="quotelev2">&gt;&gt;        requeued: 1000 (timeout=501000ms)
</span><br>
<span class="quotelev2">&gt;&gt;        dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
</span><br>
<span class="quotelev2">&gt;&gt;        partner: peer_index=1, endpoint=1, seqnum=0xad1
</span><br>
<span class="quotelev2">&gt;&gt;        matched_val: 0x00040006_00000007
</span><br>
<span class="quotelev2">&gt;&gt;        slength=133504, xfer_length=79352
</span><br>
<span class="quotelev2">&gt;&gt;        seg: 0x1b0daae0,133504
</span><br>
<span class="quotelev2">&gt;&gt;        local_rdma_id: 6e
</span><br>
<span class="quotelev2">&gt;&gt;        caller: 0xe6
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Was trying to contact
</span><br>
<span class="quotelev2">&gt;&gt;        00:60:dd:49:78:59 (cl120.foi.se:0)/1
</span><br>
<span class="quotelev2">&gt;&gt; Aborted 1 send requests due to remote peer 00:60:dd:49:78:59
</span><br>
<span class="quotelev2">&gt;&gt; (cl120.foi.se:0) disconnected
</span><br>
<span class="quotelev2">&gt;&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev2">&gt;&gt;        type (2): send_medium
</span><br>
<span class="quotelev2">&gt;&gt;        state (0x14): buffered dead
</span><br>
<span class="quotelev2">&gt;&gt;        requeued: 1000 (timeout=501000ms)
</span><br>
<span class="quotelev2">&gt;&gt;        dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
</span><br>
<span class="quotelev2">&gt;&gt;        partner: peer_index=116, endpoint=0, seqnum=0x3361
</span><br>
<span class="quotelev2">&gt;&gt;        matched_val: 0x00040001_00000002
</span><br>
<span class="quotelev2">&gt;&gt;        slength=5992, xfer_length=5992
</span><br>
<span class="quotelev2">&gt;&gt;        seg: 0x1b136890,5992
</span><br>
<span class="quotelev2">&gt;&gt;        caller: 0x9f
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Was trying to contact
</span><br>
<span class="quotelev2">&gt;&gt;        00:60:dd:49:78:59 (cl120.foi.se:0)/0
</span><br>
<span class="quotelev2">&gt;&gt; Aborted 1 send requests due to remote peer 00:60:dd:49:78:59
</span><br>
<span class="quotelev2">&gt;&gt; (cl120.foi.se:0) disconnected
</span><br>
<span class="quotelev2">&gt;&gt; Max retransmit retries reached (1000) for message
</span><br>
<span class="quotelev2">&gt;&gt;        type (3): send_large
</span><br>
<span class="quotelev2">&gt;&gt;        state (0x0):
</span><br>
<span class="quotelev2">&gt;&gt;        requeued: 1000 (timeout=501000ms)
</span><br>
<span class="quotelev2">&gt;&gt;        dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
</span><br>
<span class="quotelev2">&gt;&gt;        partner: peer_index=1, endpoint=0, seqnum=0xad1
</span><br>
<span class="quotelev2">&gt;&gt;        matched_val: 0x00040007_00000008
</span><br>
<span class="quotelev2">&gt;&gt;        slength=134400, xfer_length=134400
</span><br>
<span class="quotelev2">&gt;&gt;        seg: 0xb1d5600,134400
</span><br>
<span class="quotelev2">&gt;&gt;        local_rdma_id: 82
</span><br>
<span class="quotelev2">&gt;&gt;        caller: 0xc4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Was trying to contact
</span><br>
<span class="quotelev2">&gt;&gt;        00:60:dd:49:78:59 (cl120.foi.se:0)/0
</span><br>
<span class="quotelev2">&gt;&gt; Aborted 1 send requests due to remote peer 00:60:dd:49:78:59
</span><br>
<span class="quotelev2">&gt;&gt; (cl120.foi.se:0) disconnected
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<li><strong>Next message:</strong> <a href="10394.php">Craig Plaisance: "[OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10392.php">Jeff Squyres: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<li><strong>In reply to:</strong> <a href="10392.php">Jeff Squyres: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10408.php">Oskar Enoksson: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
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
