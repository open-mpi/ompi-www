<?
$subject_val = "[OMPI users] MPI hangs on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 19 00:04:43 2011" -->
<!-- isoreceived="20110919040443" -->
<!-- sent="Mon, 19 Sep 2011 11:04:38 +0700" -->
<!-- isosent="20110919040438" -->
<!-- name="Ole Nielsen" -->
<!-- email="ole.moller.nielsen_at_[hidden]" -->
<!-- subject="[OMPI users] MPI hangs on multiple nodes" -->
<!-- id="CALcLSfr04E=uhS7nm5aqzwNFvV-NjCKupUeLOM2-7CB0JjNKmQ_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CALcLSfr5u5M8d+8L85y3tOwUA_tH5GwTEzcUdvQyEQDxjyhWRg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-09-19 00:04:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17327.php">devendra rai: "[OMPI users] Problems with MPI_Init_Thread(...)"</a>
<li><strong>Previous message:</strong> <a href="17325.php">Scott Wilcox: "[OMPI users] Open MPI and Objective C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17328.php">Ole Nielsen: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="17328.php">Ole Nielsen: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all
<br>
<p>We have been using OpenMPI for many years with Ubuntu on our 20-node
<br>
cluster. Each node has 2 quad cores, so we usually run up to 8 processes on
<br>
each node up to a maximum of 160 processes.
<br>
<p>However, we just upgraded the cluster to Ubuntu 11.04 with Open MPI 1.4.3
<br>
and and have come across a strange behavior where mpi programs run perfectly
<br>
well when confined to one node but hangs during communication across
<br>
multiple nodes. We have no idea why and would like some help in debugging
<br>
this. A small MPI test program is attached and typical output shown below.
<br>
<p>Hope someone can help us
<br>
Cheers and thanks
<br>
Ole Nielsen
<br>
<p>-------------------- Test output across two nodes (This one hangs)
<br>
--------------------------
<br>
nielso_at_alamba:~/sandpit/pypar/source$ mpirun --hostfile /etc/mpihosts --host
<br>
node17,node18 --npernode 2 a.out
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
<p><p>-------------------- Test output within one node (This one is OK)
<br>
--------------------------
<br>
nielso_at_alamba:~/sandpit/pypar/source$ mpirun --hostfile /etc/mpihosts --host
<br>
node17 --npernode 4 a.out
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
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17326/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17326/mpi_test.c">mpi_test.c</a>
</ul>
<!-- attachment="mpi_test.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17327.php">devendra rai: "[OMPI users] Problems with MPI_Init_Thread(...)"</a>
<li><strong>Previous message:</strong> <a href="17325.php">Scott Wilcox: "[OMPI users] Open MPI and Objective C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17328.php">Ole Nielsen: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="17328.php">Ole Nielsen: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
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
