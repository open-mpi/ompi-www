<?
$subject_val = "Re: [OMPI devel] GPUDirect v1 issues";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 20 12:20:46 2012" -->
<!-- isoreceived="20120120172046" -->
<!-- sent="Fri, 20 Jan 2012 18:20:39 +0100" -->
<!-- isosent="20120120172039" -->
<!-- name="Sebastian Rinke" -->
<!-- email="s.rinke_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] GPUDirect v1 issues" -->
<!-- id="B442F4AD-8223-446E-BD67-104B02BB8438_at_grs-sim.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="004701ccd5fb$31c82690$955873b0$%lloyd_at_wattsys.com" -->
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
<strong>Date:</strong> 2012-01-20 12:20:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10240.php">Rolf vandeVaart: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Previous message:</strong> <a href="10238.php">Ralph Castain: "Re: [OMPI devel] Launch windows nodes from linux"</a>
<li><strong>Maybe in reply to:</strong> <a href="10216.php">Sebastian Rinke: "[OMPI devel] GPUDirect v1 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10240.php">Rolf vandeVaart: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Reply:</strong> <a href="10240.php">Rolf vandeVaart: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Reply:</strong> <a href="10241.php">Kenneth Lloyd: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With 
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
<p><span class="quotelev1">&gt; It is documented in <a href="http://developer.download.nvidia.com/compute/cuda/4_0/docs/GPUDirect_Technology_Overview.pdf">http://developer.download.nvidia.com/compute/cuda/4_0/docs/GPUDirect_Technology_Overview.pdf</a>
</span><br>
<span class="quotelev1">&gt; set CUDA_NIC_INTEROP=1
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Sebastian Rinke
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, January 18, 2012 8:15 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] GPUDirect v1 issues
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Setting the environment variable fixed the problem for Open MPI with CUDA 4.0. Thanks!
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; However, I'm wondering why this is not documented in the NVIDIA GPUDirect package.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Sebastian.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Jan 18, 2012, at 1:28 AM, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, the step outlined in your second bullet is no longer necessary. 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Sebastian Rinke
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, January 17, 2012 5:22 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] GPUDirect v1 issues
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thank you very much. I will try setting the environment variable and if required also use the 4.1 RC2 version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To clarify things a little bit for me, to set up my machine with GPUDirect v1 I did the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Install RHEL 5.4
</span><br>
<span class="quotelev1">&gt; * Use the kernel with GPUDirect support
</span><br>
<span class="quotelev1">&gt; * Use the MLNX OFED stack with GPUDirect support
</span><br>
<span class="quotelev1">&gt; * Install the CUDA developer driver
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does using CUDA  &gt;= 4.0  make one of the above steps  redundant?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I.e., RHEL or different kernel or MLNX OFED stack with GPUDirect support is  not needed any more?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sebastian.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf vandeVaart wrote:
</span><br>
<span class="quotelev1">&gt; I ran your test case against Open MPI 1.4.2 and CUDA 4.1 RC2 and it worked fine.  I do not have a machine right now where I can load CUDA 4.0 drivers.
</span><br>
<span class="quotelev1">&gt; Any chance you can try CUDA 4.1 RC2?  There were some improvements in the support (you do not need to set an environment variable for one)
</span><br>
<span class="quotelev1">&gt;  <a href="http://developer.nvidia.com/cuda-toolkit-41">http://developer.nvidia.com/cuda-toolkit-41</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; There is also a chance that setting the environment variable as outlined in this link may help you.
</span><br>
<span class="quotelev1">&gt; <a href="http://forums.nvidia.com/index.php?showtopic=200629">http://forums.nvidia.com/index.php?showtopic=200629</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; However, I cannot explain why MVAPICH would work and Open MPI would not.  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; On Behalf Of Sebastian Rinke
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, January 17, 2012 12:08 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] GPUDirect v1 issues
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I use CUDA 4.0 with MVAPICH2 1.5.1p1 and Open MPI 1.4.2.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Attached you find a little test case which is based on the GPUDirect v1 test
</span><br>
<span class="quotelev1">&gt; case (mpi_pinned.c).
</span><br>
<span class="quotelev1">&gt; In that program the sender splits a message into chunks and sends them
</span><br>
<span class="quotelev1">&gt; separately to the receiver which posts the corresponding recvs. It is a kind of
</span><br>
<span class="quotelev1">&gt; pipelining.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; In mpi_pinned.c:141 the offsets into the recv buffer are set.
</span><br>
<span class="quotelev1">&gt; For the correct offsets, i.e. increasing them, it blocks with Open MPI.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Using line 142 instead (offset = 0) works.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The tarball attached contains a Makefile where you will have to adjust
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; * CUDA_INC_DIR
</span><br>
<span class="quotelev1">&gt; * CUDA_LIB_DIR
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Sebastian
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Jan 17, 2012, at 4:16 PM, Kenneth A. Lloyd wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; Also, which version of MVAPICH2 did you use?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I've been pouring over Rolf's OpenMPI CUDA RDMA 3 (using CUDA 4.1 r2)
</span><br>
<span class="quotelev1">&gt; vis MVAPICH-GPU on a small 3 node cluster. These are wickedly interesting.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ken
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_open-
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt; mpi.org]
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; On Behalf Of Rolf vandeVaart
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, January 17, 2012 7:54 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] GPUDirect v1 issues
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am not aware of any issues.  Can you send me a test program and I
</span><br>
<span class="quotelev1">&gt; can try it out?
</span><br>
<span class="quotelev1">&gt; Which version of CUDA are you using?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;       
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_open-
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt; mpi.org]
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; On Behalf Of Sebastian Rinke
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, January 17, 2012 8:50 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] GPUDirect v1 issues
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I'm using GPUDirect v1 with Open MPI 1.4.3 and experience blocking
</span><br>
<span class="quotelev1">&gt; MPI_SEND/RECV to block forever.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; For two subsequent MPI_RECV, it hangs if the recv buffer pointer of
</span><br>
<span class="quotelev1">&gt; the second recv points to somewhere, i.e. not at the beginning, in
</span><br>
<span class="quotelev1">&gt; the recv buffer (previously allocated with cudaMallocHost()).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I tried the same with MVAPICH2 and did not see the problem.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Does anybody know about issues with GPUDirect v1 using Open MPI?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks for your help,
</span><br>
<span class="quotelev1">&gt; Sebastian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10239/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10240.php">Rolf vandeVaart: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Previous message:</strong> <a href="10238.php">Ralph Castain: "Re: [OMPI devel] Launch windows nodes from linux"</a>
<li><strong>Maybe in reply to:</strong> <a href="10216.php">Sebastian Rinke: "[OMPI devel] GPUDirect v1 issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10240.php">Rolf vandeVaart: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Reply:</strong> <a href="10240.php">Rolf vandeVaart: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<li><strong>Reply:</strong> <a href="10241.php">Kenneth Lloyd: "Re: [OMPI devel] GPUDirect v1 issues"</a>
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
