<?
$subject_val = "Re: [OMPI users] How does MPI_Allreduce work?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 25 11:37:19 2015" -->
<!-- isoreceived="20150925153719" -->
<!-- sent="Fri, 25 Sep 2015 11:37:14 -0400" -->
<!-- isosent="20150925153714" -->
<!-- name="Yang Zhang" -->
<!-- email="yz1214_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does MPI_Allreduce work?" -->
<!-- id="22742FAF-E7A2-453A-A3C7-522E9AE4AC84_at_nyu.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="a9b81799ca1747a4a895f15bf1497bac_at_HQMAIL101.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How does MPI_Allreduce work?<br>
<strong>From:</strong> Yang Zhang (<em>yz1214_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-25 11:37:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27680.php">Rolf vandeVaart: "Re: [OMPI users] How does MPI_Allreduce work?"</a>
<li><strong>Previous message:</strong> <a href="27678.php">Rolf vandeVaart: "Re: [OMPI users] How does MPI_Allreduce work?"</a>
<li><strong>In reply to:</strong> <a href="27678.php">Rolf vandeVaart: "Re: [OMPI users] How does MPI_Allreduce work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27680.php">Rolf vandeVaart: "Re: [OMPI users] How does MPI_Allreduce work?"</a>
<li><strong>Reply:</strong> <a href="27680.php">Rolf vandeVaart: "Re: [OMPI users] How does MPI_Allreduce work?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rolf,
<br>
<p>Thanks very much for the info! So with CUDA-aware build, OpenMPI still
<br>
have to copy all the data first into host memory, and then do send/recv
<br>
on the host memory? I thought OpenMPI would use GPUdirect and RDMA to
<br>
send/recv GPU memory directly.
<br>
<p>I will try a debug build and see what does it say. Thanks!
<br>
<p>Best,
<br>
Yang
<br>
<p>------------------------------------------------------------------------
<br>
<p>Sent by Apple Mail
<br>
<p>Yang ZHANG
<br>
<p>PhD candidate
<br>
<p>Networking and Wide-Area Systems Group
<br>
Computer Science Department
<br>
New York University
<br>
<p>715 Broadway Room 705
<br>
New York, NY 10003
<br>
<p><span class="quotelev1">&gt; On Sep 25, 2015, at 11:07 AM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello Yang:
</span><br>
<span class="quotelev1">&gt; It is not clear to me if you are asking about a CUDA-aware build of Open MPI where you do the MPI_Allreduce() or the GPU buffer or if you are handling staging the GPU into host memory and then calling the MPI_Allreduce().  Either way, they are somewhat similar.  With CUDA-aware, the MPI_Allreduce() of GPU data simply first copies the data into a host buffer and then calls the underlying implementation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Depending on how you have configured your Open MPI, the underlying implementation may vary.  I would suggest you compile a debug version (--enable-debug) and then run some tests with --mca coll_base_verbose 100 which will give you some insight into what is actually happening under the covers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Yang Zhang
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thursday, September 24, 2015 11:41 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] How does MPI_Allreduce work?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello OpenMPI users,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there any document on MPI_Allreduce() implementation? I&#226;&#128;&#153;m using it to do
</span><br>
<span class="quotelev2">&gt;&gt; summation on GPU data. I wonder if OpenMPI will first do summation on
</span><br>
<span class="quotelev2">&gt;&gt; processes in the same node, and then do summation on the intermediate
</span><br>
<span class="quotelev2">&gt;&gt; results across nodes. This would be preferable since it reduces cross node
</span><br>
<span class="quotelev2">&gt;&gt; communication and should be faster?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I&#226;&#128;&#153;m using OpenMPI 1.10.0 and CUDA 7.0. I need to sum 40 million float
</span><br>
<span class="quotelev2">&gt;&gt; numbers on 6 nodes, each node running 4 processes. The nodes are
</span><br>
<span class="quotelev2">&gt;&gt; connected via InfiniBand.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks very much!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best,
</span><br>
<span class="quotelev2">&gt;&gt; Yang
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sent by Apple Mail
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yang ZHANG
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; PhD candidate
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Networking and Wide-Area Systems Group
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science Department
</span><br>
<span class="quotelev2">&gt;&gt; New York University
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 715 Broadway Room 705
</span><br>
<span class="quotelev2">&gt;&gt; New York, NY 10003
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev2">&gt;&gt; mpi.org/community/lists/users/2015/09/27675.php
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27678.php">http://www.open-mpi.org/community/lists/users/2015/09/27678.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27680.php">Rolf vandeVaart: "Re: [OMPI users] How does MPI_Allreduce work?"</a>
<li><strong>Previous message:</strong> <a href="27678.php">Rolf vandeVaart: "Re: [OMPI users] How does MPI_Allreduce work?"</a>
<li><strong>In reply to:</strong> <a href="27678.php">Rolf vandeVaart: "Re: [OMPI users] How does MPI_Allreduce work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27680.php">Rolf vandeVaart: "Re: [OMPI users] How does MPI_Allreduce work?"</a>
<li><strong>Reply:</strong> <a href="27680.php">Rolf vandeVaart: "Re: [OMPI users] How does MPI_Allreduce work?"</a>
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
