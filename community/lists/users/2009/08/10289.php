<?
$subject_val = "[OMPI users] How to make a job abort when one host dies?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 07:08:00 2009" -->
<!-- isoreceived="20090811110800" -->
<!-- sent="Tue, 11 Aug 2009 13:07:54 +0200" -->
<!-- isosent="20090811110754" -->
<!-- name="Oskar Enoksson" -->
<!-- email="enok_at_[hidden]" -->
<!-- subject="[OMPI users] How to make a job abort when one host dies?" -->
<!-- id="4A81510A.5090200_at_lysator.liu.se" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] How to make a job abort when one host dies?<br>
<strong>From:</strong> Oskar Enoksson (<em>enok_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 07:07:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10290.php">Ashley Pittman: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10288.php">Ralph Castain: "Re: [OMPI users] problem configuring with torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10392.php">Jeff Squyres: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<li><strong>Reply:</strong> <a href="10392.php">Jeff Squyres: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<li><strong>Maybe reply:</strong> <a href="10408.php">Oskar Enoksson: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I searched the FAQ and google but couldn't come up with a solution to 
<br>
this problem.
<br>
<p>My problem is that when one MPI execution host dies or the network 
<br>
connection goes down the job is not aborted. Instead the remaining 
<br>
processes continue to eat 100% CPU indefinitely. How can I make jobs 
<br>
abort in these cases?
<br>
<p>I use OpenMPI 1.3.2. We have a myrinet network and I use mtl/mx for mpi 
<br>
communication. We also use gridengine 6.2u3. The output from the running 
<br>
job indicates that the remaining processes detect a timeout trying to 
<br>
communicate with the (dead) host cl120.foi.se. But why do they not 
<br>
terminate after this failure?
<br>
<p>Thanks.
<br>
<p>Max retransmit retries reached (1000) for message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type (1): send_small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state (0x14): buffered dead
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;requeued: 1000 (timeout=501000ms)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;partner: peer_index=1, endpoint=1, seqnum=0x2b8f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;matched_val: 0x0004000d_fffffff4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;slength=48, xfer_length=48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;seg: 0x7fffe11ff830,48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caller: 0xdb
<br>
<p>Was trying to contact
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;00:60:dd:49:78:59 (cl120.foi.se:0)/1
<br>
Aborted 2 send requests due to remote peer 00:60:dd:49:78:59 
<br>
(cl120.foi.se:0) disconnected
<br>
Max retransmit retries reached (1000) for message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type (1): send_small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state (0x14): buffered dead
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;requeued: 1000 (timeout=501000ms)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;partner: peer_index=116, endpoint=1, seqnum=0x3726
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;matched_val: 0x00040001_fffffff4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;slength=48, xfer_length=48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;seg: 0x7ffff124b7b0,48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caller: 0x9b
<br>
<p>Was trying to contact
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;00:60:dd:49:78:59 (cl120.foi.se:0)/1
<br>
Aborted 2 send requests due to remote peer 00:60:dd:49:78:59 
<br>
(cl120.foi.se:0) disconnected
<br>
Max retransmit retries reached (1000) for message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type (1): send_small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state (0x14): buffered dead
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;requeued: 1000 (timeout=501000ms)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;partner: peer_index=1, endpoint=0, seqnum=0x1048
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;matched_val: 0x00040006_fffffff4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;slength=48, xfer_length=48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;seg: 0x7fffc6470eb0,48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caller: 0x70
<br>
<p>Was trying to contact
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;00:60:dd:49:78:59 (cl120.foi.se:0)/0
<br>
Aborted 2 send requests due to remote peer 00:60:dd:49:78:59 
<br>
(cl120.foi.se:0) disconnected
<br>
Max retransmit retries reached (1000) for message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type (1): send_small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state (0x14): buffered dead
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;requeued: 1000 (timeout=501000ms)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;partner: peer_index=1, endpoint=1, seqnum=0xd53
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;matched_val: 0x00040007_fffffff4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;slength=48, xfer_length=48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;seg: 0x1f54360,48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caller: 0xda
<br>
<p>Was trying to contact
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;00:60:dd:49:78:59 (cl120.foi.se:0)/1
<br>
Aborted 2 send requests due to remote peer 00:60:dd:49:78:59 
<br>
(cl120.foi.se:0) disconnected
<br>
Max retransmit retries reached (1000) for message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type (1): send_small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state (0x14): buffered dead
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;requeued: 1000 (timeout=501000ms)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;partner: peer_index=116, endpoint=0, seqnum=0x376c
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;matched_val: 0x00040000_fffffff4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;slength=48, xfer_length=48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;seg: 0x82ec040,48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caller: 0x12
<br>
<p>Was trying to contact
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;00:60:dd:49:78:59 (cl120.foi.se:0)/0
<br>
Aborted 1 send requests due to remote peer 00:60:dd:49:78:59 
<br>
(cl120.foi.se:0) disconnected
<br>
Max retransmit retries reached (1000) for message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type (1): send_small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state (0x14): buffered dead
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;requeued: 1000 (timeout=501000ms)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;partner: peer_index=1, endpoint=0, seqnum=0x2746
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;matched_val: 0x0004000c_fffffff4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;slength=48, xfer_length=48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;seg: 0x1116f410,48
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caller: 0x30
<br>
<p>Was trying to contact
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;00:60:dd:49:78:59 (cl120.foi.se:0)/0
<br>
Aborted 2 send requests due to remote peer 00:60:dd:49:78:59 
<br>
(cl120.foi.se:0) disconnected
<br>
Max retransmit retries reached (1000) for message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type (1): send_small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state (0x14): buffered dead
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;requeued: 1000 (timeout=501000ms)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;partner: peer_index=1, endpoint=1, seqnum=0x18de
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;matched_val: 0x00250001_fffffff4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;slength=104, xfer_length=104
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;seg: 0x181c3100,104
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caller: 0x18
<br>
<p>Was trying to contact
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;00:60:dd:49:78:59 (cl120.foi.se:0)/1
<br>
Aborted 2 send requests due to remote peer 00:60:dd:49:78:59 
<br>
(cl120.foi.se:0) disconnected
<br>
Max retransmit retries reached (1000) for message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type (2): send_medium
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state (0x14): buffered dead
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;requeued: 1000 (timeout=501000ms)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;partner: peer_index=116, endpoint=0, seqnum=0x3361
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;matched_val: 0x0004000f_00000010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;slength=7168, xfer_length=7168
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;seg: 0x23e8a838,7168
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caller: 0x7e
<br>
<p>Was trying to contact
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;00:60:dd:49:78:59 (cl120.foi.se:0)/0
<br>
Aborted 1 send requests due to remote peer 00:60:dd:49:78:59 
<br>
(cl120.foi.se:0) disconnected
<br>
Max retransmit retries reached (1000) for message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type (2): send_medium
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state (0x14): buffered dead
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;requeued: 1000 (timeout=501000ms)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;partner: peer_index=116, endpoint=1, seqnum=0x3361
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;matched_val: 0x0004000f_00000010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;slength=560, xfer_length=560
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;seg: 0x23ec9fe0,560
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caller: 0x2d
<br>
<p>Was trying to contact
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;00:60:dd:49:78:59 (cl120.foi.se:0)/1
<br>
Aborted 1 send requests due to remote peer 00:60:dd:49:78:59 
<br>
(cl120.foi.se:0) disconnected
<br>
Max retransmit retries reached (1000) for message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type (2): send_medium
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state (0x14): buffered dead
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;requeued: 1000 (timeout=501000ms)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;partner: peer_index=1, endpoint=1, seqnum=0x3361
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;matched_val: 0x0004000c_0000000d
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;slength=840, xfer_length=840
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;seg: 0x1a471a90,840
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caller: 0xf9
<br>
<p>Was trying to contact
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;00:60:dd:49:78:59 (cl120.foi.se:0)/1
<br>
Aborted 1 send requests due to remote peer 00:60:dd:49:78:59 
<br>
(cl120.foi.se:0) disconnected
<br>
Max retransmit retries reached (1000) for message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type (3): send_large
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state (0x0):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;requeued: 1000 (timeout=501000ms)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;partner: peer_index=1, endpoint=1, seqnum=0xad1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;matched_val: 0x00040006_00000007
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;slength=133504, xfer_length=79352
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;seg: 0x1b0daae0,133504
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;local_rdma_id: 6e
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caller: 0xe6
<br>
<p>Was trying to contact
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;00:60:dd:49:78:59 (cl120.foi.se:0)/1
<br>
Aborted 1 send requests due to remote peer 00:60:dd:49:78:59 
<br>
(cl120.foi.se:0) disconnected
<br>
Max retransmit retries reached (1000) for message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type (2): send_medium
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state (0x14): buffered dead
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;requeued: 1000 (timeout=501000ms)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;partner: peer_index=116, endpoint=0, seqnum=0x3361
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;matched_val: 0x00040001_00000002
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;slength=5992, xfer_length=5992
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;seg: 0x1b136890,5992
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caller: 0x9f
<br>
<p>Was trying to contact
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;00:60:dd:49:78:59 (cl120.foi.se:0)/0
<br>
Aborted 1 send requests due to remote peer 00:60:dd:49:78:59 
<br>
(cl120.foi.se:0) disconnected
<br>
Max retransmit retries reached (1000) for message
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type (3): send_large
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state (0x0):
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;requeued: 1000 (timeout=501000ms)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dest: 00:60:dd:49:78:59 (cl120.foi.se:0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;partner: peer_index=1, endpoint=0, seqnum=0xad1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;matched_val: 0x00040007_00000008
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;slength=134400, xfer_length=134400
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;seg: 0xb1d5600,134400
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;local_rdma_id: 82
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caller: 0xc4
<br>
<p>Was trying to contact
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;00:60:dd:49:78:59 (cl120.foi.se:0)/0
<br>
Aborted 1 send requests due to remote peer 00:60:dd:49:78:59 
<br>
(cl120.foi.se:0) disconnected
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10290.php">Ashley Pittman: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10288.php">Ralph Castain: "Re: [OMPI users] problem configuring with torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10392.php">Jeff Squyres: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<li><strong>Reply:</strong> <a href="10392.php">Jeff Squyres: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
<li><strong>Maybe reply:</strong> <a href="10408.php">Oskar Enoksson: "Re: [OMPI users] How to make a job abort when one host dies?"</a>
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
