<?
$subject_val = "Re: [OMPI devel] GPUDirect v1 issues";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 20 15:20:59 2012" -->
<!-- isoreceived="20120120202059" -->
<!-- sent="Fri, 20 Jan 2012 12:20:51 -0800" -->
<!-- isosent="20120120202051" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] GPUDirect v1 issues" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F34C09AC7F50_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B442F4AD-8223-446E-BD67-104B02BB8438_at_grs-sim.de" -->
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
<strong>Date:</strong> 2012-01-20 15:20:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10241.php">Kenneth Lloyd: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Previous message:</strong> <a href="10239.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>In reply to:</strong> <a href="10239.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10241.php">Kenneth Lloyd: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can tell it is working because your program does not hang anymore :)  Otherwise, there is a not a way that I am aware of.
<br>
<p>Rolf
<br>
<p>PS: And I assume you mean Open MPI under your third bullet below.
<br>
<p>From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Sebastian Rinke
<br>
Sent: Friday, January 20, 2012 12:21 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] GPUDirect v1 issues
<br>
<p>With
<br>
<p>* MLNX OFED stack tailored for GPUDirect
<br>
* RHEL + kernel patch
<br>
* MVAPICH2
<br>
<p>it is possible to monitor GPUDirect v1 activities by means of observing changes to values in
<br>
<p>* /sys/module/ib_core/parameters/gpu_direct_pages
<br>
* /sys/module/ib_core/parameters/gpu_direct_shares
<br>
<p>By setting CUDA_NIC_INTEROP=1 there are no changes anymore.
<br>
<p>Is there a different way now to monitor if GPUDirect actually works?
<br>
<p>Sebastian.
<br>
<p>On Jan 18, 2012, at 5:06 PM, Kenneth Lloyd wrote:
<br>
<p><p>It is documented in <a href="http://developer.download.nvidia.com/compute/cuda/4_0/docs/GPUDirect_Technology_Overview.pdf">http://developer.download.nvidia.com/compute/cuda/4_0/docs/GPUDirect_Technology_Overview.pdf</a>
<br>
set CUDA_NIC_INTEROP=1
<br>
<p><p>From: devel-bounces_at_[hidden]&lt;mailto:devel-bounces_at_[hidden]&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Sebastian Rinke
<br>
Sent: Wednesday, January 18, 2012 8:15 AM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] GPUDirect v1 issues
<br>
<p>Setting the environment variable fixed the problem for Open MPI with CUDA 4.0. Thanks!
<br>
<p>However, I'm wondering why this is not documented in the NVIDIA GPUDirect package.
<br>
<p>Sebastian.
<br>
<p>On Jan 18, 2012, at 1:28 AM, Rolf vandeVaart wrote:
<br>
<p><p><p>Yes, the step outlined in your second bullet is no longer necessary.
<br>
<p>Rolf
<br>
<p><p>From: devel-bounces_at_[hidden]&lt;mailto:devel-bounces_at_[hidden]&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Sebastian Rinke
<br>
Sent: Tuesday, January 17, 2012 5:22 PM
<br>
To: Open MPI Developers
<br>
Subject: Re: [OMPI devel] GPUDirect v1 issues
<br>
<p>Thank you very much. I will try setting the environment variable and if required also use the 4.1 RC2 version.
<br>
<p>To clarify things a little bit for me, to set up my machine with GPUDirect v1 I did the following:
<br>
<p>* Install RHEL 5.4
<br>
* Use the kernel with GPUDirect support
<br>
* Use the MLNX OFED stack with GPUDirect support
<br>
* Install the CUDA developer driver
<br>
<p>Does using CUDA  &gt;= 4.0  make one of the above steps  redundant?
<br>
<p>I.e., RHEL or different kernel or MLNX OFED stack with GPUDirect support is  not needed any more?
<br>
<p>Sebastian.
<br>
<p>Rolf vandeVaart wrote:
<br>
<p>I ran your test case against Open MPI 1.4.2 and CUDA 4.1 RC2 and it worked fine.  I do not have a machine right now where I can load CUDA 4.0 drivers.
<br>
<p>Any chance you can try CUDA 4.1 RC2?  There were some improvements in the support (you do not need to set an environment variable for one)
<br>
<p>&nbsp;<a href="http://developer.nvidia.com/cuda-toolkit-41">http://developer.nvidia.com/cuda-toolkit-41</a>
<br>
<p><p><p>There is also a chance that setting the environment variable as outlined in this link may help you.
<br>
<p><a href="http://forums.nvidia.com/index.php?showtopic=200629">http://forums.nvidia.com/index.php?showtopic=200629</a>
<br>
<p><p><p>However, I cannot explain why MVAPICH would work and Open MPI would not.
<br>
<p><p><p>Rolf
<br>
<p><p><p><p><p>-----Original Message-----
<br>
<p>From: devel-bounces_at_[hidden]&lt;mailto:devel-bounces_at_[hidden]&gt; [mailto:devel-bounces_at_[hidden]]
<br>
<p>On Behalf Of Sebastian Rinke
<br>
<p>Sent: Tuesday, January 17, 2012 12:08 PM
<br>
<p>To: Open MPI Developers
<br>
<p>Subject: Re: [OMPI devel] GPUDirect v1 issues
<br>
<p><p><p>I use CUDA 4.0 with MVAPICH2 1.5.1p1 and Open MPI 1.4.2.
<br>
<p><p><p>Attached you find a little test case which is based on the GPUDirect v1 test
<br>
<p>case (mpi_pinned.c).
<br>
<p>In that program the sender splits a message into chunks and sends them
<br>
<p>separately to the receiver which posts the corresponding recvs. It is a kind of
<br>
<p>pipelining.
<br>
<p><p><p>In mpi_pinned.c:141 the offsets into the recv buffer are set.
<br>
<p>For the correct offsets, i.e. increasing them, it blocks with Open MPI.
<br>
<p><p><p>Using line 142 instead (offset = 0) works.
<br>
<p><p><p>The tarball attached contains a Makefile where you will have to adjust
<br>
<p><p><p>* CUDA_INC_DIR
<br>
<p>* CUDA_LIB_DIR
<br>
<p><p><p>Sebastian
<br>
<p><p><p>On Jan 17, 2012, at 4:16 PM, Kenneth A. Lloyd wrote:
<br>
<p><p><p><p><p>Also, which version of MVAPICH2 did you use?
<br>
<p><p><p>I've been pouring over Rolf's OpenMPI CUDA RDMA 3 (using CUDA 4.1 r2)
<br>
<p>vis MVAPICH-GPU on a small 3 node cluster. These are wickedly interesting.
<br>
<p><p><p>Ken
<br>
<p>-----Original Message-----
<br>
<p>From: devel-bounces_at_[hidden]&lt;mailto:devel-bounces_at_[hidden]&gt; [mailto:devel-bounces_at_open-
<br>
<p><p><p>mpi.org]
<br>
<p><p><p>On Behalf Of Rolf vandeVaart
<br>
<p>Sent: Tuesday, January 17, 2012 7:54 AM
<br>
<p>To: Open MPI Developers
<br>
<p>Subject: Re: [OMPI devel] GPUDirect v1 issues
<br>
<p><p><p>I am not aware of any issues.  Can you send me a test program and I
<br>
<p>can try it out?
<br>
<p>Which version of CUDA are you using?
<br>
<p><p><p>Rolf
<br>
<p><p><p><p><p>-----Original Message-----
<br>
<p>From: devel-bounces_at_[hidden]&lt;mailto:devel-bounces_at_[hidden]&gt; [mailto:devel-bounces_at_open-
<br>
<p><p><p>mpi.org]
<br>
<p><p><p>On Behalf Of Sebastian Rinke
<br>
<p>Sent: Tuesday, January 17, 2012 8:50 AM
<br>
<p>To: Open MPI Developers
<br>
<p>Subject: [OMPI devel] GPUDirect v1 issues
<br>
<p><p><p>Dear all,
<br>
<p><p><p>I'm using GPUDirect v1 with Open MPI 1.4.3 and experience blocking
<br>
<p>MPI_SEND/RECV to block forever.
<br>
<p><p><p>For two subsequent MPI_RECV, it hangs if the recv buffer pointer of
<br>
<p>the second recv points to somewhere, i.e. not at the beginning, in
<br>
<p>the recv buffer (previously allocated with cudaMallocHost()).
<br>
<p><p><p>I tried the same with MVAPICH2 and did not see the problem.
<br>
<p><p><p>Does anybody know about issues with GPUDirect v1 using Open MPI?
<br>
<p><p><p>Thanks for your help,
<br>
<p>Sebastian
<br>
<p>_______________________________________________
<br>
<p>devel mailing list
<br>
<p>devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p><p>-----------------------------------------------------------------------------------
<br>
<p>This email message is for the sole use of the intended recipient(s) and may contain
<br>
<p>confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
<p>is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
<p>reply email and destroy all copies of the original message.
<br>
<p>-----------------------------------------------------------------------------------
<br>
<p><p><p>_______________________________________________
<br>
<p>devel mailing list
<br>
<p>devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10240/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10241.php">Kenneth Lloyd: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Previous message:</strong> <a href="10239.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>In reply to:</strong> <a href="10239.php">Sebastian Rinke: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10241.php">Kenneth Lloyd: "Re: [OMPI devel] GPUDirect v1 issues"</a>
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
