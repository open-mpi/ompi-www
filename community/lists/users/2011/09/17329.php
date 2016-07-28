<?
$subject_val = "[OMPI users] unsubscribe";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 19 04:50:45 2011" -->
<!-- isoreceived="20110919085045" -->
<!-- sent="Mon, 19 Sep 2011 08:50:34 +0000" -->
<!-- isosent="20110919085034" -->
<!-- name="Lane, William" -->
<!-- email="William.Lane_at_[hidden]" -->
<!-- subject="[OMPI users] unsubscribe" -->
<!-- id="434F2BB0AF80484CA04DE0D8C0738BF205A2EA_at_cshsmsgmbx02.CSMC.EDU" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] unsubscribe<br>
<strong>From:</strong> Lane, William (<em>William.Lane_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-19 04:50:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17330.php">Ole Nielsen: "[OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="17328.php">Ole Nielsen: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
please unsubscribe me from this maillist.
<br>
<p>Thank you,
<br>
<p>-Bill Lane
<br>
________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Ole Nielsen [ole.moller.nielsen_at_[hidden]]
<br>
Sent: Monday, September 19, 2011 1:39 AM
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] MPI hangs on multiple nodes
<br>
<p>Further to the posting below, I can report that the test program (attached - this time correctly) is chewing up CPU time on both compute nodes for as long as I care to let it continue.
<br>
It would appear that MPI_Receive which is the next command after the print statements in the test program.
<br>
<p>Has anyone else seen this behavior or can anyone give me a hint on how to troubleshoot.
<br>
Cheers and thanks
<br>
Ole Nielsen
<br>
<p>Output:
<br>
nielso_at_alamba:~/sandpit/pypar/source$ mpirun --hostfile /etc/mpihosts --host node17,node18 --npernode 2 a.out
<br>
Number of processes = 4
<br>
Test repeated 3 times for reliability
<br>
I am process 2 on node node18
<br>
P2: Waiting to receive from to P1
<br>
I am process 0 on node node17
<br>
Run 1 of 3
<br>
P0: Sending to P1
<br>
I am process 1 on node node17
<br>
P1: Waiting to receive from to P0
<br>
I am process 3 on node node18
<br>
P3: Waiting to receive from to P2
<br>
P0: Waiting to receive from P3
<br>
P1: Sending to to P2
<br>
P1: Waiting to receive from to P0
<br>
P2: Sending to to P3
<br>
P0: Received from to P3
<br>
Run 2 of 3
<br>
P0: Sending to P1
<br>
P3: Sending to to P0
<br>
P3: Waiting to receive from to P2
<br>
P2: Waiting to receive from to P1
<br>
P1: Sending to to P2
<br>
P0: Waiting to receive from P3
<br>
<p><p><p><p><p><p><p><p>On Mon, Sep 19, 2011 at 11:04 AM, Ole Nielsen &lt;ole.moller.nielsen_at_[hidden]&lt;mailto:ole.moller.nielsen_at_[hidden]&gt;&gt; wrote:
<br>
<p>Hi all
<br>
<p>We have been using OpenMPI for many years with Ubuntu on our 20-node cluster. Each node has 2 quad cores, so we usually run up to 8 processes on each node up to a maximum of 160 processes.
<br>
<p>However, we just upgraded the cluster to Ubuntu 11.04 with Open MPI 1.4.3 and and have come across a strange behavior where mpi programs run perfectly well when confined to one node but hangs during communication across multiple nodes. We have no idea why and would like some help in debugging this. A small MPI test program is attached and typical output shown below.
<br>
<p>Hope someone can help us
<br>
Cheers and thanks
<br>
Ole Nielsen
<br>
<p>-------------------- Test output across two nodes (This one hangs) --------------------------
<br>
nielso_at_alamba:~/sandpit/pypar/source$ mpirun --hostfile /etc/mpihosts --host node17,node18 --npernode 2 a.out
<br>
Number of processes = 4
<br>
Test repeated 3 times for reliability
<br>
I am process 1 on node node17
<br>
P1: Waiting to receive from to P0
<br>
I am process 0 on node node17
<br>
Run 1 of 3
<br>
P0: Sending to P1
<br>
I am process 2 on node node18
<br>
P2: Waiting to receive from to P1
<br>
I am process 3 on node node18
<br>
P3: Waiting to receive from to P2
<br>
P1: Sending to to P2
<br>
<p><p>-------------------- Test output within one node (This one is OK) --------------------------
<br>
nielso_at_alamba:~/sandpit/pypar/source$ mpirun --hostfile /etc/mpihosts --host node17 --npernode 4 a.out
<br>
Number of processes = 4
<br>
Test repeated 3 times for reliability
<br>
I am process 2 on node node17
<br>
P2: Waiting to receive from to P1
<br>
I am process 0 on node node17
<br>
Run 1 of 3
<br>
P0: Sending to P1
<br>
I am process 1 on node node17
<br>
P1: Waiting to receive from to P0
<br>
I am process 3 on node node17
<br>
P3: Waiting to receive from to P2
<br>
P1: Sending to to P2
<br>
P2: Sending to to P3
<br>
P1: Waiting to receive from to P0
<br>
P2: Waiting to receive from to P1
<br>
P3: Sending to to P0
<br>
P0: Received from to P3
<br>
Run 2 of 3
<br>
P0: Sending to P1
<br>
P3: Waiting to receive from to P2
<br>
P1: Sending to to P2
<br>
P2: Sending to to P3
<br>
P1: Waiting to receive from to P0
<br>
P3: Sending to to P0
<br>
P2: Waiting to receive from to P1
<br>
P0: Received from to P3
<br>
Run 3 of 3
<br>
P0: Sending to P1
<br>
P3: Waiting to receive from to P2
<br>
P1: Sending to to P2
<br>
P2: Sending to to P3
<br>
P1: Done
<br>
P2: Done
<br>
P3: Sending to to P0
<br>
P0: Received from to P3
<br>
P0: Done
<br>
P3: Done
<br>
<p><p><p><p>IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is STRICTLY PROHIBITED. If you have received this message in error, please notify us immediately by calling (310) 423-6428 and destroy the related message. Thank You for your cooperation.
<br>
IMPORTANT WARNING:  This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by
<br>
applicable law.  If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is STRICTLY PROHIBITED.
<br>
<p>If you have received this message in error, please notify us immediately
<br>
by calling (310) 423-6428 and destroy the related message.  Thank You for your cooperation.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17329/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17330.php">Ole Nielsen: "[OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="17328.php">Ole Nielsen: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
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
