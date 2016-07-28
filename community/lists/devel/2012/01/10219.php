<?
$subject_val = "Re: [OMPI devel] GPUDirect v1 issues";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 17 12:08:17 2012" -->
<!-- isoreceived="20120117170817" -->
<!-- sent="Tue, 17 Jan 2012 18:08:07 +0100" -->
<!-- isosent="20120117170807" -->
<!-- name="Sebastian Rinke" -->
<!-- email="s.rinke_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] GPUDirect v1 issues" -->
<!-- id="59BC8740-D087-4E54-A9B6-9B175C777AAC_at_grs-sim.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="002001ccd52a$ff6f51d0$fe4df570$%lloyd_at_wattsys.com" -->
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
<strong>From:</strong> Sebastian Rinke (<em>s.rinke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-17 12:08:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10220.php">Rolf vandeVaart: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Previous message:</strong> <a href="10218.php">Kenneth A. Lloyd: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Maybe in reply to:</strong> <a href="10216.php">Sebastian Rinke: "[OMPI devel] GPUDirect v1 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10220.php">Rolf vandeVaart: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Reply:</strong> <a href="10220.php">Rolf vandeVaart: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I use CUDA 4.0 with MVAPICH2 1.5.1p1 and Open MPI 1.4.2.
<br>
<p>Attached you find a little test case which is based on the GPUDirect v1 test case (mpi_pinned.c).
<br>
In that program the sender splits a message into chunks and sends them separately to the receiver
<br>
which posts the corresponding recvs. It is a kind of pipelining.
<br>
<p>In mpi_pinned.c:141 the offsets into the recv buffer are set.
<br>
For the correct offsets, i.e. increasing them, it blocks with Open MPI.
<br>
<p>Using line 142 instead (offset = 0) works.
<br>
<p>The tarball attached contains a Makefile where you will have to adjust
<br>
<p>* CUDA_INC_DIR
<br>
* CUDA_LIB_DIR
<br>
<p>Sebastian
<br>
<p>On Jan 17, 2012, at 4:16 PM, Kenneth A. Lloyd wrote:
<br>
<p><span class="quotelev1">&gt; Also, which version of MVAPICH2 did you use?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been pouring over Rolf's OpenMPI CUDA RDMA 3 (using CUDA 4.1 r2) vis
</span><br>
<span class="quotelev1">&gt; MVAPICH-GPU on a small 3 node cluster. These are wickedly interesting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ken
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Rolf vandeVaart
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, January 17, 2012 7:54 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] GPUDirect v1 issues
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not aware of any issues.  Can you send me a test program and I can try
</span><br>
<span class="quotelev1">&gt; it out?
</span><br>
<span class="quotelev1">&gt; Which version of CUDA are you using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of Sebastian Rinke
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, January 17, 2012 8:50 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI devel] GPUDirect v1 issues
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm using GPUDirect v1 with Open MPI 1.4.3 and experience blocking 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_SEND/RECV to block forever.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For two subsequent MPI_RECV, it hangs if the recv buffer pointer of the 
</span><br>
<span class="quotelev2">&gt;&gt; second recv points to somewhere, i.e. not at the beginning, in the recv 
</span><br>
<span class="quotelev2">&gt;&gt; buffer (previously allocated with cudaMallocHost()).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I tried the same with MVAPICH2 and did not see the problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does anybody know about issues with GPUDirect v1 using Open MPI?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev2">&gt;&gt; Sebastian
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10219/testcase_start_address.tar.gz">testcase_start_address.tar.gz</a>
</ul>
<!-- attachment="testcase_start_address.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10220.php">Rolf vandeVaart: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Previous message:</strong> <a href="10218.php">Kenneth A. Lloyd: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Maybe in reply to:</strong> <a href="10216.php">Sebastian Rinke: "[OMPI devel] GPUDirect v1 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10220.php">Rolf vandeVaart: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Reply:</strong> <a href="10220.php">Rolf vandeVaart: "Re: [OMPI devel] GPUDirect v1 issues"</a>
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
