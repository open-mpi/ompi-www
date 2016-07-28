<?
$subject_val = "[OMPI users] RE :  MPI hangs on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 19 09:28:16 2011" -->
<!-- isoreceived="20110919132816" -->
<!-- sent="Mon, 19 Sep 2011 09:26:21 -0400" -->
<!-- isosent="20110919132621" -->
<!-- name="S&#233;bastien Boisvert" -->
<!-- email="sebastien.boisvert.3_at_[hidden]" -->
<!-- subject="[OMPI users] RE :  MPI hangs on multiple nodes" -->
<!-- id="C4217F2ABFA5D44BA8F3DCD899E5B0C8F2677006E4_at_EXCH-MBX-F.ulaval.ca" -->
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
<strong>Subject:</strong> [OMPI users] RE :  MPI hangs on multiple nodes<br>
<strong>From:</strong> S&#233;bastien Boisvert (<em>sebastien.boisvert.3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-19 09:26:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17338.php">Eugene Loh: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="17336.php">Jeff Squyres: "Re: [OMPI users] RE :  Problems with MPI_Init_Thread(...)"</a>
<li><strong>In reply to:</strong> <a href="17330.php">Ole Nielsen: "[OMPI users] MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17338.php">Eugene Loh: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="17338.php">Eugene Loh: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="17339.php">Gus Correa: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
<li><strong>Maybe reply:</strong> <a href="17342.php">Gus Correa: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Is it safe to re-use the same buffer (variable A) for MPI_Send and MPI_Recv given that MPI_Send may be eager depending on
<br>
the MCA parameters ?
<br>
<p><p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; S&#233;bastien
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; De : users-bounces_at_[hidden] [users-bounces_at_[hidden]] de la part de Ole Nielsen [ole.moller.nielsen_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Date d'envoi : 19 septembre 2011 04:59
</span><br>
<span class="quotelev1">&gt; &#192; : users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Objet : [OMPI users] MPI hangs on multiple nodes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The test program is available here:
</span><br>
<span class="quotelev1">&gt; <a href="http://code.google.com/p/pypar/source/browse/source/mpi_test.c">http://code.google.com/p/pypar/source/browse/source/mpi_test.c</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hopefully, someone can help us troubleshoot why communications stop when multiple nodes are involved and CPU usage goes to 100% for as long as we leave the program running.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks
</span><br>
<span class="quotelev1">&gt; Ole Nielsen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ---------- Forwarded message ----------
</span><br>
<span class="quotelev1">&gt; From: Ole Nielsen &lt;ole.moller.nielsen_at_[hidden]&lt;mailto:ole.moller.nielsen_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Date: Mon, Sep 19, 2011 at 3:39 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: MPI hangs on multiple nodes
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Further to the posting below, I can report that the test program (attached - this time correctly) is chewing up CPU time on both compute nodes for as long as I care to let it continue.
</span><br>
<span class="quotelev1">&gt; It would appear that MPI_Receive which is the next command after the print statements in the test program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anyone else seen this behavior or can anyone give me a hint on how to troubleshoot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers and thanks
</span><br>
<span class="quotelev1">&gt; Ole Nielsen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; nielso_at_alamba:~/sandpit/pypar/source$ mpirun --hostfile /etc/mpihosts --host node17,node18 --npernode 2 a.out
</span><br>
<span class="quotelev1">&gt; Number of processes = 4
</span><br>
<span class="quotelev1">&gt; Test repeated 3 times for reliability
</span><br>
<span class="quotelev1">&gt; I am process 2 on node node18
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
<span class="quotelev1">&gt; I am process 3 on node node18
</span><br>
<span class="quotelev1">&gt; P3: Waiting to receive from to P2
</span><br>
<span class="quotelev1">&gt; P0: Waiting to receive from P3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P1: Sending to to P2
</span><br>
<span class="quotelev1">&gt; P1: Waiting to receive from to P0
</span><br>
<span class="quotelev1">&gt; P2: Sending to to P3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P0: Received from to P3
</span><br>
<span class="quotelev1">&gt; Run 2 of 3
</span><br>
<span class="quotelev1">&gt; P0: Sending to P1
</span><br>
<span class="quotelev1">&gt; P3: Sending to to P0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P3: Waiting to receive from to P2
</span><br>
<span class="quotelev1">&gt; P2: Waiting to receive from to P1
</span><br>
<span class="quotelev1">&gt; P1: Sending to to P2
</span><br>
<span class="quotelev1">&gt; P0: Waiting to receive from P3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Sep 19, 2011 at 11:04 AM, Ole Nielsen &lt;ole.moller.nielsen_at_[hidden]&lt;mailto:ole.moller.nielsen_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We have been using OpenMPI for many years with Ubuntu on our 20-node cluster. Each node has 2 quad cores, so we usually run up to 8 processes on each node up to a maximum of 160 processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, we just upgraded the cluster to Ubuntu 11.04 with Open MPI 1.4.3 and and have come across a strange behavior where mpi programs run perfectly well when confined to one node but hangs during communication across multiple nodes. We have no idea why and would like some help in debugging this. A small MPI test program is attached and typical output shown below.
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
<span class="quotelev1">&gt; -------------------- Test output across two nodes (This one hangs) --------------------------
</span><br>
<span class="quotelev1">&gt; nielso_at_alamba:~/sandpit/pypar/source$ mpirun --hostfile /etc/mpihosts --host node17,node18 --npernode 2 a.out
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
<span class="quotelev1">&gt; -------------------- Test output within one node (This one is OK) --------------------------
</span><br>
<span class="quotelev1">&gt; nielso_at_alamba:~/sandpit/pypar/source$ mpirun --hostfile /etc/mpihosts --host node17 --npernode 4 a.out
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17338.php">Eugene Loh: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="17336.php">Jeff Squyres: "Re: [OMPI users] RE :  Problems with MPI_Init_Thread(...)"</a>
<li><strong>In reply to:</strong> <a href="17330.php">Ole Nielsen: "[OMPI users] MPI hangs on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17338.php">Eugene Loh: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="17338.php">Eugene Loh: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="17339.php">Gus Correa: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
<li><strong>Maybe reply:</strong> <a href="17342.php">Gus Correa: "Re: [OMPI users] RE :  MPI hangs on multiple nodes"</a>
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
