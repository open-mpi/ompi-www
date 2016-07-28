<?
$subject_val = "Re: [OMPI devel] GPUDirect v1 issues";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 17 16:10:35 2012" -->
<!-- isoreceived="20120117211035" -->
<!-- sent="Tue, 17 Jan 2012 13:10:29 -0800" -->
<!-- isosent="20120117211029" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] GPUDirect v1 issues" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F34C09AC7863_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="59BC8740-D087-4E54-A9B6-9B175C777AAC_at_grs-sim.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] GPUDirect v1 issues<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-17 16:10:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10221.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Previous message:</strong> <a href="10219.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>In reply to:</strong> <a href="10219.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10221.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Reply:</strong> <a href="10221.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I ran your test case against Open MPI 1.4.2 and CUDA 4.1 RC2 and it worked fine.  I do not have a machine right now where I can load CUDA 4.0 drivers.
<br>
Any chance you can try CUDA 4.1 RC2?  There were some improvements in the support (you do not need to set an environment variable for one)
<br>
&nbsp;<a href="http://developer.nvidia.com/cuda-toolkit-41">http://developer.nvidia.com/cuda-toolkit-41</a>
<br>
<p>There is also a chance that setting the environment variable as outlined in this link may help you.
<br>
<a href="http://forums.nvidia.com/index.php?showtopic=200629">http://forums.nvidia.com/index.php?showtopic=200629</a>
<br>
<p>However, I cannot explain why MVAPICH would work and Open MPI would not.  
<br>
<p>Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;On Behalf Of Sebastian Rinke
</span><br>
<span class="quotelev1">&gt;Sent: Tuesday, January 17, 2012 12:08 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI devel] GPUDirect v1 issues
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I use CUDA 4.0 with MVAPICH2 1.5.1p1 and Open MPI 1.4.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Attached you find a little test case which is based on the GPUDirect v1 test
</span><br>
<span class="quotelev1">&gt;case (mpi_pinned.c).
</span><br>
<span class="quotelev1">&gt;In that program the sender splits a message into chunks and sends them
</span><br>
<span class="quotelev1">&gt;separately to the receiver which posts the corresponding recvs. It is a kind of
</span><br>
<span class="quotelev1">&gt;pipelining.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;In mpi_pinned.c:141 the offsets into the recv buffer are set.
</span><br>
<span class="quotelev1">&gt;For the correct offsets, i.e. increasing them, it blocks with Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Using line 142 instead (offset = 0) works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The tarball attached contains a Makefile where you will have to adjust
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;* CUDA_INC_DIR
</span><br>
<span class="quotelev1">&gt;* CUDA_LIB_DIR
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Sebastian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Jan 17, 2012, at 4:16 PM, Kenneth A. Lloyd wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, which version of MVAPICH2 did you use?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've been pouring over Rolf's OpenMPI CUDA RDMA 3 (using CUDA 4.1 r2)
</span><br>
<span class="quotelev2">&gt;&gt; vis MVAPICH-GPU on a small 3 node cluster. These are wickedly interesting.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ken
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_open-
</span><br>
<span class="quotelev1">&gt;mpi.org]
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of Rolf vandeVaart
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, January 17, 2012 7:54 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] GPUDirect v1 issues
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not aware of any issues.  Can you send me a test program and I
</span><br>
<span class="quotelev2">&gt;&gt; can try it out?
</span><br>
<span class="quotelev2">&gt;&gt; Which version of CUDA are you using?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_open-
</span><br>
<span class="quotelev1">&gt;mpi.org]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Behalf Of Sebastian Rinke
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Tuesday, January 17, 2012 8:50 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI devel] GPUDirect v1 issues
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using GPUDirect v1 with Open MPI 1.4.3 and experience blocking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_SEND/RECV to block forever.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For two subsequent MPI_RECV, it hangs if the recv buffer pointer of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the second recv points to somewhere, i.e. not at the beginning, in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the recv buffer (previously allocated with cudaMallocHost()).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried the same with MVAPICH2 and did not see the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anybody know about issues with GPUDirect v1 using Open MPI?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sebastian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
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
<li><strong>Next message:</strong> <a href="10221.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Previous message:</strong> <a href="10219.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>In reply to:</strong> <a href="10219.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10221.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Reply:</strong> <a href="10221.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
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
