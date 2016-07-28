<?
$subject_val = "Re: [OMPI users] RE :  MPI hangs on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 19 10:37:25 2011" -->
<!-- isoreceived="20110919143725" -->
<!-- sent="Mon, 19 Sep 2011 10:37:02 -0400" -->
<!-- isosent="20110919143702" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RE :  MPI hangs on multiple nodes" -->
<!-- id="4E77538E.3070007_at_ldeo.columbia.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C4217F2ABFA5D44BA8F3DCD899E5B0C8F2677006E4_at_EXCH-MBX-F.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] RE :  MPI hangs on multiple nodes<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-19 10:37:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17340.php">Eugene Loh: "Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv 	question"</a>
<li><strong>Previous message:</strong> <a href="17338.php">Eugene Loh: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="17337.php">S&#233;bastien Boisvert: "[OMPI users] RE :  MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17342.php">Gus Correa: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ole
<br>
<p>You could try the examples/connectivity.c program in the
<br>
OpenMPI source tree, to test if everything is alright.
<br>
It also hints how to solve the buffer re-use issue
<br>
that Sebastien [rightfully] pointed out [i.e., declare separate
<br>
buffers for MPI_Send and MPI_Recv].
<br>
<p>Gus Correa
<br>
<p>S&#233;bastien Boisvert wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it safe to re-use the same buffer (variable A) 
</span><br>
<span class="quotelev1">&gt; for MPI_Send and MPI_Recv given that MPI_Send may be eager depending on
</span><br>
<span class="quotelev1">&gt; the MCA parameters ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; S&#233;bastien
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; De : users-bounces_at_[hidden] [users-bounces_at_[hidden]] de la part de Ole Nielsen [ole.moller.nielsen_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; Date d'envoi : 19 septembre 2011 04:59
</span><br>
<span class="quotelev2">&gt;&gt; &#192; : users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Objet : [OMPI users] MPI hangs on multiple nodes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The test program is available here:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://code.google.com/p/pypar/source/browse/source/mpi_test.c">http://code.google.com/p/pypar/source/browse/source/mpi_test.c</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hopefully, someone can help us troubleshoot why communications stop when multiple nodes are involved and CPU usage goes to 100% for as long as we leave the program running.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ole Nielsen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev2">&gt;&gt; From: Ole Nielsen &lt;ole.moller.nielsen_at_[hidden]&lt;mailto:ole.moller.nielsen_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Mon, Sep 19, 2011 at 3:39 PM
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: MPI hangs on multiple nodes
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Further to the posting below, I can report that the test program (attached - this time correctly) is chewing up CPU time on both compute nodes for as long as I care to let it continue.
</span><br>
<span class="quotelev2">&gt;&gt; It would appear that MPI_Receive which is the next command after the print statements in the test program.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Has anyone else seen this behavior or can anyone give me a hint on how to troubleshoot.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers and thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ole Nielsen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Output:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; nielso_at_alamba:~/sandpit/pypar/source$ mpirun --hostfile /etc/mpihosts --host node17,node18 --npernode 2 a.out
</span><br>
<span class="quotelev2">&gt;&gt; Number of processes = 4
</span><br>
<span class="quotelev2">&gt;&gt; Test repeated 3 times for reliability
</span><br>
<span class="quotelev2">&gt;&gt; I am process 2 on node node18
</span><br>
<span class="quotelev2">&gt;&gt; P2: Waiting to receive from to P1
</span><br>
<span class="quotelev2">&gt;&gt; I am process 0 on node node17
</span><br>
<span class="quotelev2">&gt;&gt; Run 1 of 3
</span><br>
<span class="quotelev2">&gt;&gt; P0: Sending to P1
</span><br>
<span class="quotelev2">&gt;&gt; I am process 1 on node node17
</span><br>
<span class="quotelev2">&gt;&gt; P1: Waiting to receive from to P0
</span><br>
<span class="quotelev2">&gt;&gt; I am process 3 on node node18
</span><br>
<span class="quotelev2">&gt;&gt; P3: Waiting to receive from to P2
</span><br>
<span class="quotelev2">&gt;&gt; P0: Waiting to receive from P3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; P1: Sending to to P2
</span><br>
<span class="quotelev2">&gt;&gt; P1: Waiting to receive from to P0
</span><br>
<span class="quotelev2">&gt;&gt; P2: Sending to to P3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; P0: Received from to P3
</span><br>
<span class="quotelev2">&gt;&gt; Run 2 of 3
</span><br>
<span class="quotelev2">&gt;&gt; P0: Sending to P1
</span><br>
<span class="quotelev2">&gt;&gt; P3: Sending to to P0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; P3: Waiting to receive from to P2
</span><br>
<span class="quotelev2">&gt;&gt; P2: Waiting to receive from to P1
</span><br>
<span class="quotelev2">&gt;&gt; P1: Sending to to P2
</span><br>
<span class="quotelev2">&gt;&gt; P0: Waiting to receive from P3
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Sep 19, 2011 at 11:04 AM, Ole Nielsen &lt;ole.moller.nielsen_at_[hidden]&lt;mailto:ole.moller.nielsen_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have been using OpenMPI for many years with Ubuntu on our 20-node cluster. Each node has 2 quad cores, so we usually run up to 8 processes on each node up to a maximum of 160 processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, we just upgraded the cluster to Ubuntu 11.04 with Open MPI 1.4.3 and and have come across a strange behavior where mpi programs run perfectly well when confined to one node but hangs during communication across multiple nodes. We have no idea why and would like some help in debugging this. A small MPI test program is attached and typical output shown below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hope someone can help us
</span><br>
<span class="quotelev2">&gt;&gt; Cheers and thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ole Nielsen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------- Test output across two nodes (This one hangs) --------------------------
</span><br>
<span class="quotelev2">&gt;&gt; nielso_at_alamba:~/sandpit/pypar/source$ mpirun --hostfile /etc/mpihosts --host node17,node18 --npernode 2 a.out
</span><br>
<span class="quotelev2">&gt;&gt; Number of processes = 4
</span><br>
<span class="quotelev2">&gt;&gt; Test repeated 3 times for reliability
</span><br>
<span class="quotelev2">&gt;&gt; I am process 1 on node node17
</span><br>
<span class="quotelev2">&gt;&gt; P1: Waiting to receive from to P0
</span><br>
<span class="quotelev2">&gt;&gt; I am process 0 on node node17
</span><br>
<span class="quotelev2">&gt;&gt; Run 1 of 3
</span><br>
<span class="quotelev2">&gt;&gt; P0: Sending to P1
</span><br>
<span class="quotelev2">&gt;&gt; I am process 2 on node node18
</span><br>
<span class="quotelev2">&gt;&gt; P2: Waiting to receive from to P1
</span><br>
<span class="quotelev2">&gt;&gt; I am process 3 on node node18
</span><br>
<span class="quotelev2">&gt;&gt; P3: Waiting to receive from to P2
</span><br>
<span class="quotelev2">&gt;&gt; P1: Sending to to P2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -------------------- Test output within one node (This one is OK) --------------------------
</span><br>
<span class="quotelev2">&gt;&gt; nielso_at_alamba:~/sandpit/pypar/source$ mpirun --hostfile /etc/mpihosts --host node17 --npernode 4 a.out
</span><br>
<span class="quotelev2">&gt;&gt; Number of processes = 4
</span><br>
<span class="quotelev2">&gt;&gt; Test repeated 3 times for reliability
</span><br>
<span class="quotelev2">&gt;&gt; I am process 2 on node node17
</span><br>
<span class="quotelev2">&gt;&gt; P2: Waiting to receive from to P1
</span><br>
<span class="quotelev2">&gt;&gt; I am process 0 on node node17
</span><br>
<span class="quotelev2">&gt;&gt; Run 1 of 3
</span><br>
<span class="quotelev2">&gt;&gt; P0: Sending to P1
</span><br>
<span class="quotelev2">&gt;&gt; I am process 1 on node node17
</span><br>
<span class="quotelev2">&gt;&gt; P1: Waiting to receive from to P0
</span><br>
<span class="quotelev2">&gt;&gt; I am process 3 on node node17
</span><br>
<span class="quotelev2">&gt;&gt; P3: Waiting to receive from to P2
</span><br>
<span class="quotelev2">&gt;&gt; P1: Sending to to P2
</span><br>
<span class="quotelev2">&gt;&gt; P2: Sending to to P3
</span><br>
<span class="quotelev2">&gt;&gt; P1: Waiting to receive from to P0
</span><br>
<span class="quotelev2">&gt;&gt; P2: Waiting to receive from to P1
</span><br>
<span class="quotelev2">&gt;&gt; P3: Sending to to P0
</span><br>
<span class="quotelev2">&gt;&gt; P0: Received from to P3
</span><br>
<span class="quotelev2">&gt;&gt; Run 2 of 3
</span><br>
<span class="quotelev2">&gt;&gt; P0: Sending to P1
</span><br>
<span class="quotelev2">&gt;&gt; P3: Waiting to receive from to P2
</span><br>
<span class="quotelev2">&gt;&gt; P1: Sending to to P2
</span><br>
<span class="quotelev2">&gt;&gt; P2: Sending to to P3
</span><br>
<span class="quotelev2">&gt;&gt; P1: Waiting to receive from to P0
</span><br>
<span class="quotelev2">&gt;&gt; P3: Sending to to P0
</span><br>
<span class="quotelev2">&gt;&gt; P2: Waiting to receive from to P1
</span><br>
<span class="quotelev2">&gt;&gt; P0: Received from to P3
</span><br>
<span class="quotelev2">&gt;&gt; Run 3 of 3
</span><br>
<span class="quotelev2">&gt;&gt; P0: Sending to P1
</span><br>
<span class="quotelev2">&gt;&gt; P3: Waiting to receive from to P2
</span><br>
<span class="quotelev2">&gt;&gt; P1: Sending to to P2
</span><br>
<span class="quotelev2">&gt;&gt; P2: Sending to to P3
</span><br>
<span class="quotelev2">&gt;&gt; P1: Done
</span><br>
<span class="quotelev2">&gt;&gt; P2: Done
</span><br>
<span class="quotelev2">&gt;&gt; P3: Sending to to P0
</span><br>
<span class="quotelev2">&gt;&gt; P0: Received from to P3
</span><br>
<span class="quotelev2">&gt;&gt; P0: Done
</span><br>
<span class="quotelev2">&gt;&gt; P3: Done
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="17340.php">Eugene Loh: "Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv 	question"</a>
<li><strong>Previous message:</strong> <a href="17338.php">Eugene Loh: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="17337.php">S&#233;bastien Boisvert: "[OMPI users] RE :  MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17342.php">Gus Correa: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
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
