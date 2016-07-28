<?
$subject_val = "Re: [OMPI users] MPI hangs on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 19 05:12:34 2011" -->
<!-- isoreceived="20110919091234" -->
<!-- sent="Mon, 19 Sep 2011 10:12:28 +0100 (BST)" -->
<!-- isosent="20110919091228" -->
<!-- name="devendra rai" -->
<!-- email="rai.devendra_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI hangs on multiple nodes" -->
<!-- id="1316423548.1971.YahooMailNeo_at_web29617.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CALcLSfqiu3oNcBjKnp1_rNNRMZS-8hqY+OsjPNFNt7JSgaydxg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI hangs on multiple nodes<br>
<strong>From:</strong> devendra rai (<em>rai.devendra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-19 05:12:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17332.php">Yevgeny Kliteynik: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Previous message:</strong> <a href="17330.php">Ole Nielsen: "[OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="17330.php">Ole Nielsen: "[OMPI users] MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17337.php">Sébastien Boisvert: "[OMPI users] RE :  MPI hangs on multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ole

I ran your program on open-mpi-1.4.2&#160; five times, and all five times, it finished successfully.

So, I think the problem was with the version of mpi.

Output from your program is attached. I ran on 3 nodes:

$home/OpenMPI-1.4.2/bin/mpirun -np 3 -v --output-filename mpi_testfile ./mpi_test

So, maybe this helps you.

Best,

Devendra Rai



________________________________
From: Ole Nielsen &lt;ole.moller.nielsen_at_[hidden]&gt;
To: users_at_[hidden]
Sent: Monday, 19 September 2011, 10:59
Subject: [OMPI users] MPI hangs on multiple nodes


The test program is available here:
<a href="http://code.google.com/p/pypar/source/browse/source/mpi_test.c">http://code.google.com/p/pypar/source/browse/source/mpi_test.c</a>

Hopefully, someone can help us troubleshoot why communications stop when multiple nodes are involved and CPU usage goes to 100% for as long as we leave the program running.

Many thanks
Ole Nielsen



---------- Forwarded message ----------
From: Ole Nielsen &lt;ole.moller.nielsen_at_[hidden]&gt;
Date: Mon, Sep 19, 2011 at 3:39 PM
Subject: Re: MPI hangs on multiple nodes
To: users_at_[hidden]


Further to the posting below, I can report that the test program (attached - this time correctly) is chewing up CPU time on both compute nodes for as long as I care to let it continue.
It would appear that MPI_Receive which is the next command after the print statements in the test program.

Has anyone else seen this behavior or can anyone give me a hint on how to troubleshoot.

Cheers and thanks
Ole Nielsen

Output:

nielso_at_alamba:~/sandpit/pypar/source$ mpirun --hostfile /etc/mpihosts --host node17,node18 --npernode 2 a.out 
Number of processes = 4
Test repeated 3 times for reliability

I am process 2 on node node18
P2: Waiting to receive from to P1

I am process 0 on node node17
Run 1 of 3
P0: Sending to P1
I am process 1 on node node17
P1: Waiting to receive from to P0

I am process 3 on node node18
P3: Waiting to receive from to P2
P0: Waiting to receive from P3

P1: Sending to to P2

P1: Waiting to receive from to P0
P2: Sending to to P3

P0: Received from to P3
Run 2 of 3
P0: Sending to P1
P3: Sending to to P0

P3: Waiting to receive from to P2

P2: Waiting to receive from to P1

P1: Sending to to P2
P0: Waiting to receive from P3







&#160;


On Mon, Sep 19, 2011 at 11:04 AM, Ole Nielsen &lt;ole.moller.nielsen_at_[hidden]&gt; wrote:


&gt;
&gt;Hi all
&gt;
&gt;We have been using OpenMPI for many years with Ubuntu on our 20-node cluster. Each node has 2 quad cores, so we usually run up to 8 processes on each node up to a maximum of 160 processes.
&gt;
&gt;However, we just upgraded the cluster to Ubuntu 11.04 with Open MPI 1.4.3 and and have come across a strange behavior where mpi programs run perfectly well when confined to one node but hangs during communication across multiple nodes. We have no idea why and would like some help in debugging this. A small MPI test program is attached and typical output shown below.
&gt;
&gt;Hope someone can help us
&gt;Cheers and thanks
&gt;Ole Nielsen
&gt;
&gt;-------------------- Test output across two nodes (This one hangs) --------------------------
&gt;nielso_at_alamba:~/sandpit/pypar/source$ mpirun --hostfile /etc/mpihosts --host node17,node18 --npernode 2 a.out 
&gt;Number of processes = 4
&gt;Test repeated 3 times for reliability
&gt;I am process 1 on node node17
&gt;P1: Waiting to receive from to P0
&gt;I am process 0 on node node17
&gt;Run 1 of 3
&gt;P0: Sending to P1
&gt;I am process 2 on node node18
&gt;P2: Waiting to receive from to P1
&gt;I am process 3 on node node18
&gt;P3: Waiting to receive from to P2
&gt;P1: Sending to to P2
&gt;
&gt;
&gt;-------------------- Test output within one node (This one is OK) --------------------------
&gt;nielso_at_alamba:~/sandpit/pypar/source$ mpirun --hostfile /etc/mpihosts --host node17 --npernode 4 a.out 
&gt;Number of processes = 4
&gt;Test repeated 3 times for reliability
&gt;I am process 2 on node node17
&gt;P2: Waiting to receive from to P1
&gt;I am process 0 on node node17
&gt;Run 1 of 3
&gt;P0: Sending to P1
&gt;I am process 1 on node node17
&gt;P1: Waiting to receive from to P0
&gt;I am process 3 on node node17
&gt;P3: Waiting to receive from to P2
&gt;P1: Sending to to P2
&gt;P2: Sending to to P3
&gt;P1: Waiting to receive from to P0
&gt;P2: Waiting to receive from to P1
&gt;P3: Sending to to P0
&gt;P0: Received from to P3
&gt;Run 2 of 3
&gt;P0: Sending to P1
&gt;P3: Waiting to receive from to P2
&gt;P1: Sending to to P2
&gt;P2: Sending to to P3
&gt;P1: Waiting to receive from to P0
&gt;P3: Sending to to P0
&gt;P2: Waiting to receive from to P1
&gt;P0: Received from to P3
&gt;Run 3 of 3
&gt;P0: Sending to P1
&gt;P3: Waiting to receive from to P2
&gt;P1: Sending to to P2
&gt;P2: Sending to to P3
&gt;P1: Done
&gt;P2: Done
&gt;P3: Sending to to P0
&gt;P0: Received from to P3
&gt;P0: Done
&gt;P3: Done
&gt;
&gt;
&gt;
&gt;


_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>



<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17331/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17331/mpi_testfile.1">mpi_testfile.1</a>
</ul>
<!-- attachment="mpi_testfile.1" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17331/mpi_testfile.2">mpi_testfile.2</a>
</ul>
<!-- attachment="mpi_testfile.2" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17331/mpi_testfile.0">mpi_testfile.0</a>
</ul>
<!-- attachment="mpi_testfile.0" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17332.php">Yevgeny Kliteynik: "Re: [OMPI users] OpenIB error messages: reporting the default or telling you what's happening?"</a>
<li><strong>Previous message:</strong> <a href="17330.php">Ole Nielsen: "[OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="17330.php">Ole Nielsen: "[OMPI users] MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17337.php">Sébastien Boisvert: "[OMPI users] RE :  MPI hangs on multiple nodes"</a>
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
