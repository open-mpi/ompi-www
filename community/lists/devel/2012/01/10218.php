<?
$subject_val = "Re: [OMPI devel] GPUDirect v1 issues";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 17 10:16:28 2012" -->
<!-- isoreceived="20120117151628" -->
<!-- sent="Tue, 17 Jan 2012 08:16:32 -0700" -->
<!-- isosent="20120117151632" -->
<!-- name="Kenneth A. Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] GPUDirect v1 issues" -->
<!-- id="002001ccd52a$ff6f51d0$fe4df570$_at_lloyd@wattsys.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F34C09AC776B_at_HQMAIL02.nvidia.com" -->
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
<strong>From:</strong> Kenneth A. Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-17 10:16:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10219.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Previous message:</strong> <a href="10217.php">Rolf vandeVaart: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>In reply to:</strong> <a href="10217.php">Rolf vandeVaart: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10219.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also, which version of MVAPICH2 did you use?
<br>
<p>I've been pouring over Rolf's OpenMPI CUDA RDMA 3 (using CUDA 4.1 r2) vis
<br>
MVAPICH-GPU on a small 3 node cluster. These are wickedly interesting.
<br>
<p>Ken
<br>
-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
<br>
Behalf Of Rolf vandeVaart
<br>
Sent: Tuesday, January 17, 2012 7:54 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] GPUDirect v1 issues
<br>
<p>I am not aware of any issues.  Can you send me a test program and I can try
<br>
it out?
<br>
Which version of CUDA are you using?
<br>
<p>Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;On Behalf Of Sebastian Rinke
</span><br>
<span class="quotelev1">&gt;Sent: Tuesday, January 17, 2012 8:50 AM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI devel] GPUDirect v1 issues
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm using GPUDirect v1 with Open MPI 1.4.3 and experience blocking 
</span><br>
<span class="quotelev1">&gt;MPI_SEND/RECV to block forever.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;For two subsequent MPI_RECV, it hangs if the recv buffer pointer of the 
</span><br>
<span class="quotelev1">&gt;second recv points to somewhere, i.e. not at the beginning, in the recv 
</span><br>
<span class="quotelev1">&gt;buffer (previously allocated with cudaMallocHost()).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I tried the same with MVAPICH2 and did not see the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Does anybody know about issues with GPUDirect v1 using Open MPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks for your help,
</span><br>
<span class="quotelev1">&gt;Sebastian
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
----------------------------------------------------------------------------
<br>
-------
<br>
This email message is for the sole use of the intended recipient(s) and may
<br>
contain confidential information.  Any unauthorized review, use, disclosure
<br>
or distribution is prohibited.  If you are not the intended recipient,
<br>
please contact the sender by reply email and destroy all copies of the
<br>
original message.
<br>
----------------------------------------------------------------------------
<br>
-------
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p>-----
<br>
No virus found in this message.
<br>
Checked by AVG - www.avg.com
<br>
Version: 2012.0.1901 / Virus Database: 2109/4747 - Release Date: 01/16/12
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10219.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Previous message:</strong> <a href="10217.php">Rolf vandeVaart: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>In reply to:</strong> <a href="10217.php">Rolf vandeVaart: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10219.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
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
