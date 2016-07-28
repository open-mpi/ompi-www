<?
$subject_val = "Re: [OMPI users] How does MPI_Allreduce work?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 25 11:07:14 2015" -->
<!-- isoreceived="20150925150714" -->
<!-- sent="Fri, 25 Sep 2015 15:07:12 +0000" -->
<!-- isosent="20150925150712" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How does MPI_Allreduce work?" -->
<!-- id="a9b81799ca1747a4a895f15bf1497bac_at_HQMAIL101.nvidia.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="F4574A61-E3F3-4B65-932D-356261D45BB2_at_nyu.edu" -->
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
<strong>Date:</strong> 2015-09-25 11:07:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27679.php">Yang Zhang: "Re: [OMPI users] How does MPI_Allreduce work?"</a>
<li><strong>Previous message:</strong> <a href="27677.php">Harald Servat: "[OMPI users] Missing pointer in MPI_Request / MPI_Ibarrier in documentation for 1.10.0"</a>
<li><strong>In reply to:</strong> <a href="27675.php">Yang Zhang: "[OMPI users] How does MPI_Allreduce work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27679.php">Yang Zhang: "Re: [OMPI users] How does MPI_Allreduce work?"</a>
<li><strong>Reply:</strong> <a href="27679.php">Yang Zhang: "Re: [OMPI users] How does MPI_Allreduce work?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Yang:
<br>
It is not clear to me if you are asking about a CUDA-aware build of Open MPI where you do the MPI_Allreduce() or the GPU buffer or if you are handling staging the GPU into host memory and then calling the MPI_Allreduce().  Either way, they are somewhat similar.  With CUDA-aware, the MPI_Allreduce() of GPU data simply first copies the data into a host buffer and then calls the underlying implementation.
<br>

<br>
Depending on how you have configured your Open MPI, the underlying implementation may vary.  I would suggest you compile a debug version (--enable-debug) and then run some tests with --mca coll_base_verbose 100 which will give you some insight into what is actually happening under the covers.
<br>

<br>
Rolf
<br>

<br>
<span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Yang Zhang
</span><br>
<span class="quotelev1">&gt;Sent: Thursday, September 24, 2015 11:41 PM
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] How does MPI_Allreduce work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hello OpenMPI users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Is there any document on MPI_Allreduce() implementation? I&#226;&#128;&#153;m using it to do
</span><br>
<span class="quotelev1">&gt;summation on GPU data. I wonder if OpenMPI will first do summation on
</span><br>
<span class="quotelev1">&gt;processes in the same node, and then do summation on the intermediate
</span><br>
<span class="quotelev1">&gt;results across nodes. This would be preferable since it reduces cross node
</span><br>
<span class="quotelev1">&gt;communication and should be faster?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I&#226;&#128;&#153;m using OpenMPI 1.10.0 and CUDA 7.0. I need to sum 40 million float
</span><br>
<span class="quotelev1">&gt;numbers on 6 nodes, each node running 4 processes. The nodes are
</span><br>
<span class="quotelev1">&gt;connected via InfiniBand.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks very much!
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
<span class="quotelev1">&gt;mpi.org/community/lists/users/2015/09/27675.php
</span><br>

<br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27679.php">Yang Zhang: "Re: [OMPI users] How does MPI_Allreduce work?"</a>
<li><strong>Previous message:</strong> <a href="27677.php">Harald Servat: "[OMPI users] Missing pointer in MPI_Request / MPI_Ibarrier in documentation for 1.10.0"</a>
<li><strong>In reply to:</strong> <a href="27675.php">Yang Zhang: "[OMPI users] How does MPI_Allreduce work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27679.php">Yang Zhang: "Re: [OMPI users] How does MPI_Allreduce work?"</a>
<li><strong>Reply:</strong> <a href="27679.php">Yang Zhang: "Re: [OMPI users] How does MPI_Allreduce work?"</a>
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
