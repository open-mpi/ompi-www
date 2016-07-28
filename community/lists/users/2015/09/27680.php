<?
$subject_val = "Re: [OMPI users] How does MPI_Allreduce work?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 25 13:14:06 2015" -->
<!-- isoreceived="20150925171406" -->
<!-- sent="Fri, 25 Sep 2015 17:14:04 +0000" -->
<!-- isosent="20150925171404" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does MPI_Allreduce work?" -->
<!-- id="b242da781f244cd9961bd8f8d2a1276a_at_HQMAIL101.nvidia.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="22742FAF-E7A2-453A-A3C7-522E9AE4AC84_at_nyu.edu" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-25 13:14:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27681.php">Julien Bodart: "[OMPI users] Problem using mpifort(Intel)"</a>
<li><strong>Previous message:</strong> <a href="27679.php">Yang Zhang: "Re: [OMPI users] How does MPI_Allreduce work?"</a>
<li><strong>In reply to:</strong> <a href="27679.php">Yang Zhang: "Re: [OMPI users] How does MPI_Allreduce work?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the case of reductions, yes, we copy into host memory so we can do the reduction.  For other collectives or point to point communication, then GPU Direct RDMA will be used (for smaller messages).
<br>

<br>
Rolf
<br>

<br>
<span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Yang Zhang
</span><br>
<span class="quotelev1">&gt;Sent: Friday, September 25, 2015 11:37 AM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] How does MPI_Allreduce work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi Rolf,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks very much for the info! So with CUDA-aware build, OpenMPI still have
</span><br>
<span class="quotelev1">&gt;to copy all the data first into host memory, and then do send/recv on the host
</span><br>
<span class="quotelev1">&gt;memory? I thought OpenMPI would use GPUdirect and RDMA to send/recv
</span><br>
<span class="quotelev1">&gt;GPU memory directly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I will try a debug build and see what does it say. Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Best,
</span><br>
<span class="quotelev1">&gt;Yang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Sent by Apple Mail
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Yang ZHANG
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;PhD candidate
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Networking and Wide-Area Systems Group
</span><br>
<span class="quotelev1">&gt;Computer Science Department
</span><br>
<span class="quotelev1">&gt;New York University
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;715 Broadway Room 705
</span><br>
<span class="quotelev1">&gt;New York, NY 10003
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 25, 2015, at 11:07 AM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello Yang:
</span><br>
<span class="quotelev2">&gt;&gt; It is not clear to me if you are asking about a CUDA-aware build of Open MPI
</span><br>
<span class="quotelev1">&gt;where you do the MPI_Allreduce() or the GPU buffer or if you are handling
</span><br>
<span class="quotelev1">&gt;staging the GPU into host memory and then calling the MPI_Allreduce().
</span><br>
<span class="quotelev1">&gt;Either way, they are somewhat similar.  With CUDA-aware, the
</span><br>
<span class="quotelev1">&gt;MPI_Allreduce() of GPU data simply first copies the data into a host buffer
</span><br>
<span class="quotelev1">&gt;and then calls the underlying implementation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Depending on how you have configured your Open MPI, the underlying
</span><br>
<span class="quotelev1">&gt;implementation may vary.  I would suggest you compile a debug version (--
</span><br>
<span class="quotelev1">&gt;enable-debug) and then run some tests with --mca coll_base_verbose 100
</span><br>
<span class="quotelev1">&gt;which will give you some insight into what is actually happening under the
</span><br>
<span class="quotelev1">&gt;covers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Yang
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Zhang
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Thursday, September 24, 2015 11:41 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI users] How does MPI_Allreduce work?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello OpenMPI users,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there any document on MPI_Allreduce() implementation? I&#226;&#128;&#153;m using it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to do summation on GPU data. I wonder if OpenMPI will first do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; summation on processes in the same node, and then do summation on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intermediate results across nodes. This would be preferable since it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reduces cross node communication and should be faster?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#226;&#128;&#153;m using OpenMPI 1.10.0 and CUDA 7.0. I need to sum 40 million float
</span><br>
<span class="quotelev3">&gt;&gt;&gt; numbers on 6 nodes, each node running 4 processes. The nodes are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connected via InfiniBand.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks very much!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yang
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent by Apple Mail
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yang ZHANG
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PhD candidate
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Networking and Wide-Area Systems Group Computer Science Department
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New York University
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 715 Broadway Room 705
</span><br>
<span class="quotelev3">&gt;&gt;&gt; New York, NY 10003
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-">http://www.open-</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi.org/community/lists/users/2015/09/27675.php
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ------------- This email message is for the sole use of the intended
</span><br>
<span class="quotelev2">&gt;&gt; recipient(s) and may contain confidential information.  Any
</span><br>
<span class="quotelev2">&gt;&gt; unauthorized review, use, disclosure or distribution is prohibited.
</span><br>
<span class="quotelev2">&gt;&gt; If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev2">&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ------------- _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27678.php">http://www.open-mpi.org/community/lists/users/2015/09/27678.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open-">http://www.open-</a>
</span><br>
<span class="quotelev1">&gt;mpi.org/community/lists/users/2015/09/27679.php
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27681.php">Julien Bodart: "[OMPI users] Problem using mpifort(Intel)"</a>
<li><strong>Previous message:</strong> <a href="27679.php">Yang Zhang: "Re: [OMPI users] How does MPI_Allreduce work?"</a>
<li><strong>In reply to:</strong> <a href="27679.php">Yang Zhang: "Re: [OMPI users] How does MPI_Allreduce work?"</a>
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
