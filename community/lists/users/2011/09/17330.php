<?
$subject_val = "[OMPI users] MPI hangs on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 19 04:59:25 2011" -->
<!-- isoreceived="20110919085925" -->
<!-- sent="Mon, 19 Sep 2011 15:59:20 +0700" -->
<!-- isosent="20110919085920" -->
<!-- name="Ole Nielsen" -->
<!-- email="ole.moller.nielsen_at_[hidden]" -->
<!-- subject="[OMPI users] MPI hangs on multiple nodes" -->
<!-- id="CALcLSfqiu3oNcBjKnp1_rNNRMZS-8hqY+OsjPNFNt7JSgaydxg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CALcLSfo5eD=Zrin=N5hHe8GG_zyrLQiU2P8wm8xZO7CFbGkczQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI hangs on multiple nodes<br>
<strong>From:</strong> Ole Nielsen (<em>ole.moller.nielsen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-19 04:59:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17331.php">devendra rai: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="17329.php">Lane, William: "[OMPI users] unsubscribe"</a>
<li><strong>In reply to:</strong> <a href="17328.php">Ole Nielsen: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17331.php">devendra rai: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="17331.php">devendra rai: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="17337.php">Sébastien Boisvert: "[OMPI users] RE :  MPI hangs on multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The test program is available here:
<br>
<a href="http://code.google.com/p/pypar/source/browse/source/mpi_test.c">http://code.google.com/p/pypar/source/browse/source/mpi_test.c</a>
<br>
<p>Hopefully, someone can help us troubleshoot why communications stop when
<br>
multiple nodes are involved and CPU usage goes to 100% for as long as we
<br>
leave the program running.
<br>
<p>Many thanks
<br>
Ole Nielsen
<br>
<p><p>---------- Forwarded message ----------
<br>
From: Ole Nielsen &lt;ole.moller.nielsen_at_[hidden]&gt;
<br>
Date: Mon, Sep 19, 2011 at 3:39 PM
<br>
Subject: Re: MPI hangs on multiple nodes
<br>
To: users_at_[hidden]
<br>
<p><p>Further to the posting below, I can report that the test program (attached -
<br>
this time correctly) is chewing up CPU time on both compute nodes for as
<br>
long as I care to let it continue.
<br>
It would appear that MPI_Receive which is the next command after the print
<br>
statements in the test program.
<br>
<p>Has anyone else seen this behavior or can anyone give me a hint on how to
<br>
troubleshoot.
<br>
<p>Cheers and thanks
<br>
Ole Nielsen
<br>
<p>Output:
<br>
<p>nielso_at_alamba:~/sandpit/pypar/source$ mpirun --hostfile /etc/mpihosts --host
<br>
node17,node18 --npernode 2 a.out
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
<p>P1: Sending to to P2
<br>
P1: Waiting to receive from to P0
<br>
P2: Sending to to P3
<br>
<p>P0: Received from to P3
<br>
Run 2 of 3
<br>
P0: Sending to P1
<br>
P3: Sending to to P0
<br>
<p>P3: Waiting to receive from to P2
<br>
P2: Waiting to receive from to P1
<br>
P1: Sending to to P2
<br>
P0: Waiting to receive from P3
<br>
<p><p><p><p><p><p><p><p><p>On Mon, Sep 19, 2011 at 11:04 AM, Ole Nielsen
<br>
&lt;ole.moller.nielsen_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have been using OpenMPI for many years with Ubuntu on our 20-node
</span><br>
<span class="quotelev1">&gt; cluster. Each node has 2 quad cores, so we usually run up to 8 processes on
</span><br>
<span class="quotelev1">&gt; each node up to a maximum of 160 processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, we just upgraded the cluster to Ubuntu 11.04 with Open MPI 1.4.3
</span><br>
<span class="quotelev1">&gt; and and have come across a strange behavior where mpi programs run perfectly
</span><br>
<span class="quotelev1">&gt; well when confined to one node but hangs during communication across
</span><br>
<span class="quotelev1">&gt; multiple nodes. We have no idea why and would like some help in debugging
</span><br>
<span class="quotelev1">&gt; this. A small MPI test program is attached and typical output shown below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope someone can help us
</span><br>
<span class="quotelev1">&gt; Cheers and thanks
</span><br>
<span class="quotelev1">&gt; Ole Nielsen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------- Test output across two nodes (This one hangs)
</span><br>
<span class="quotelev1">&gt; --------------------------
</span><br>
<span class="quotelev1">&gt; nielso_at_alamba:~/sandpit/pypar/source$ mpirun --hostfile /etc/mpihosts
</span><br>
<span class="quotelev1">&gt; --host node17,node18 --npernode 2 a.out
</span><br>
<span class="quotelev1">&gt; Number of processes = 4
</span><br>
<span class="quotelev1">&gt; Test repeated 3 times for reliability
</span><br>
<span class="quotelev1">&gt; I am process 1 on node node17
</span><br>
<span class="quotelev1">&gt; P1: Waiting to receive from to P0
</span><br>
<span class="quotelev1">&gt; I am process 0 on node node17
</span><br>
<span class="quotelev1">&gt; Run 1 of 3
</span><br>
<span class="quotelev1">&gt; P0: Sending to P1
</span><br>
<span class="quotelev1">&gt; I am process 2 on node node18
</span><br>
<span class="quotelev1">&gt; P2: Waiting to receive from to P1
</span><br>
<span class="quotelev1">&gt; I am process 3 on node node18
</span><br>
<span class="quotelev1">&gt; P3: Waiting to receive from to P2
</span><br>
<span class="quotelev1">&gt; P1: Sending to to P2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------- Test output within one node (This one is OK)
</span><br>
<span class="quotelev1">&gt; --------------------------
</span><br>
<span class="quotelev1">&gt; nielso_at_alamba:~/sandpit/pypar/source$ mpirun --hostfile /etc/mpihosts
</span><br>
<span class="quotelev1">&gt; --host node17 --npernode 4 a.out
</span><br>
<span class="quotelev1">&gt; Number of processes = 4
</span><br>
<span class="quotelev1">&gt; Test repeated 3 times for reliability
</span><br>
<span class="quotelev1">&gt; I am process 2 on node node17
</span><br>
<span class="quotelev1">&gt; P2: Waiting to receive from to P1
</span><br>
<span class="quotelev1">&gt; I am process 0 on node node17
</span><br>
<span class="quotelev1">&gt; Run 1 of 3
</span><br>
<span class="quotelev1">&gt; P0: Sending to P1
</span><br>
<span class="quotelev1">&gt; I am process 1 on node node17
</span><br>
<span class="quotelev1">&gt; P1: Waiting to receive from to P0
</span><br>
<span class="quotelev1">&gt; I am process 3 on node node17
</span><br>
<span class="quotelev1">&gt; P3: Waiting to receive from to P2
</span><br>
<span class="quotelev1">&gt; P1: Sending to to P2
</span><br>
<span class="quotelev1">&gt; P2: Sending to to P3
</span><br>
<span class="quotelev1">&gt; P1: Waiting to receive from to P0
</span><br>
<span class="quotelev1">&gt; P2: Waiting to receive from to P1
</span><br>
<span class="quotelev1">&gt; P3: Sending to to P0
</span><br>
<span class="quotelev1">&gt; P0: Received from to P3
</span><br>
<span class="quotelev1">&gt; Run 2 of 3
</span><br>
<span class="quotelev1">&gt; P0: Sending to P1
</span><br>
<span class="quotelev1">&gt; P3: Waiting to receive from to P2
</span><br>
<span class="quotelev1">&gt; P1: Sending to to P2
</span><br>
<span class="quotelev1">&gt; P2: Sending to to P3
</span><br>
<span class="quotelev1">&gt; P1: Waiting to receive from to P0
</span><br>
<span class="quotelev1">&gt; P3: Sending to to P0
</span><br>
<span class="quotelev1">&gt; P2: Waiting to receive from to P1
</span><br>
<span class="quotelev1">&gt; P0: Received from to P3
</span><br>
<span class="quotelev1">&gt; Run 3 of 3
</span><br>
<span class="quotelev1">&gt; P0: Sending to P1
</span><br>
<span class="quotelev1">&gt; P3: Waiting to receive from to P2
</span><br>
<span class="quotelev1">&gt; P1: Sending to to P2
</span><br>
<span class="quotelev1">&gt; P2: Sending to to P3
</span><br>
<span class="quotelev1">&gt; P1: Done
</span><br>
<span class="quotelev1">&gt; P2: Done
</span><br>
<span class="quotelev1">&gt; P3: Sending to to P0
</span><br>
<span class="quotelev1">&gt; P0: Received from to P3
</span><br>
<span class="quotelev1">&gt; P0: Done
</span><br>
<span class="quotelev1">&gt; P3: Done
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17330/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17331.php">devendra rai: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="17329.php">Lane, William: "[OMPI users] unsubscribe"</a>
<li><strong>In reply to:</strong> <a href="17328.php">Ole Nielsen: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17331.php">devendra rai: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="17331.php">devendra rai: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="17337.php">Sébastien Boisvert: "[OMPI users] RE :  MPI hangs on multiple nodes"</a>
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
