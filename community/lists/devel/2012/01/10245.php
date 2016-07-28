<?
$subject_val = "Re: [OMPI devel] GPUDirect v1 issues";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 23 07:38:20 2012" -->
<!-- isoreceived="20120123123820" -->
<!-- sent="Mon, 23 Jan 2012 13:38:15 +0100" -->
<!-- isosent="20120123123815" -->
<!-- name="Sebastian Rinke" -->
<!-- email="s.rinke_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] GPUDirect v1 issues" -->
<!-- id="F8D84C26-A115-4C00-9691-A232B008051B_at_grs-sim.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1327158223.9788.6.camel_at_devhost.localdomain" -->
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
<strong>Date:</strong> 2012-01-23 07:38:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10246.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI 1.5.x and MPI 2.2"</a>
<li><strong>Previous message:</strong> <a href="10244.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762"</a>
<li><strong>In reply to:</strong> <a href="10241.php">Kenneth Lloyd: "Re: [OMPI devel] GPUDirect v1 issues"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, thank you Ken and Rolf. I will have a look into the 4.1 version.
<br>
<p>@ Rolf:
<br>
I actually meant MVAPICH2, since Open MPI requires to have CUDA_NIC_INTEROP=1 set.
<br>
However, setting the environment variable does not show any changes in the files previously mentioned.
<br>
<p>Nevertheless, you already answered my question. Thanks.
<br>
<p>Sebastian. 
<br>
<p>On Jan 21, 2012, at 4:03 PM, Kenneth Lloyd wrote:
<br>
<p><span class="quotelev1">&gt; Sebastian,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If possible, I strongly suggest you look into CUDA 4.1 r2 and using Rolf vandeVaart's MPI CUDA RDMA 3).  Your life will be MUCH easier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Having used GPUDirect1 in the last half of 2010, I can say it is a pain for the 9 - 14% gain in efficiency we saw.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ken
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, 2012-01-20 at 18:20 +0100, Sebastian Rinke wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; With 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * MLNX OFED stack tailored for GPUDirect
</span><br>
<span class="quotelev2">&gt;&gt; * RHEL + kernel patch 
</span><br>
<span class="quotelev2">&gt;&gt; * MVAPICH2 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; it is possible to monitor GPUDirect v1 activities by means of observing changes to values in
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * /sys/module/ib_core/parameters/gpu_direct_pages
</span><br>
<span class="quotelev2">&gt;&gt; * /sys/module/ib_core/parameters/gpu_direct_shares
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; By setting CUDA_NIC_INTEROP=1 there are no changes anymore.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a different way now to monitor if GPUDirect actually works?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sebastian.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 18, 2012, at 5:06 PM, Kenneth Lloyd wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is documented in <a href="http://developer.download.nvidia.com/compute/cuda/4_0/docs/GPUDirect_Technology_Overview.pdf">http://developer.download.nvidia.com/compute/cuda/4_0/docs/GPUDirect_Technology_Overview.pdf</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set CUDA_NIC_INTEROP=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Sebastian Rinke
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Wednesday, January 18, 2012 8:15 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI devel] GPUDirect v1 issues
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Setting the environment variable fixed the problem for Open MPI with CUDA 4.0. Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, I'm wondering why this is not documented in the NVIDIA GPUDirect package.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sebastian.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 18, 2012, at 1:28 AM, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, the step outlined in your second bullet is no longer necessary. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Sebastian Rinke
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Tuesday, January 17, 2012 5:22 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI devel] GPUDirect v1 issues
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you very much. I will try setting the environment variable and if required also use the 4.1 RC2 version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To clarify things a little bit for me, to set up my machine with GPUDirect v1 I did the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Install RHEL 5.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Use the kernel with GPUDirect support
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Use the MLNX OFED stack with GPUDirect support
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Install the CUDA developer driver
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does using CUDA  &gt;= 4.0  make one of the above steps  redundant?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I.e., RHEL or different kernel or MLNX OFED stack with GPUDirect support is  not needed any more?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sebastian.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf vandeVaart wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I ran your test case against Open MPI 1.4.2 and CUDA 4.1 RC2 and it worked fine.  I do not have a machine right now where I can load CUDA 4.0 drivers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any chance you can try CUDA 4.1 RC2?  There were some improvements in the support (you do not need to set an environment variable for one)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://developer.nvidia.com/cuda-toolkit-41">http://developer.nvidia.com/cuda-toolkit-41</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is also a chance that setting the environment variable as outlined in this link may help you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://forums.nvidia.com/index.php?showtopic=200629">http://forums.nvidia.com/index.php?showtopic=200629</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, I cannot explain why MVAPICH would work and Open MPI would not.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Behalf Of Sebastian Rinke
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Tuesday, January 17, 2012 12:08 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI devel] GPUDirect v1 issues
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I use CUDA 4.0 with MVAPICH2 1.5.1p1 and Open MPI 1.4.2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Attached you find a little test case which is based on the GPUDirect v1 test
</span><br>
<span class="quotelev3">&gt;&gt;&gt; case (mpi_pinned.c).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In that program the sender splits a message into chunks and sends them
</span><br>
<span class="quotelev3">&gt;&gt;&gt; separately to the receiver which posts the corresponding recvs. It is a kind of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pipelining.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In mpi_pinned.c:141 the offsets into the recv buffer are set.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For the correct offsets, i.e. increasing them, it blocks with Open MPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Using line 142 instead (offset = 0) works.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The tarball attached contains a Makefile where you will have to adjust
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * CUDA_INC_DIR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * CUDA_LIB_DIR
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sebastian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 17, 2012, at 4:16 PM, Kenneth A. Lloyd wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also, which version of MVAPICH2 did you use?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've been pouring over Rolf's OpenMPI CUDA RDMA 3 (using CUDA 4.1 r2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; vis MVAPICH-GPU on a small 3 node cluster. These are wickedly interesting.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ken
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_open-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi.org]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Behalf Of Rolf vandeVaart
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Tuesday, January 17, 2012 7:54 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI devel] GPUDirect v1 issues
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am not aware of any issues.  Can you send me a test program and I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can try it out?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Which version of CUDA are you using?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rolf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_open-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi.org]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
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
<span class="quotelev3">&gt;&gt;&gt;         
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev3">&gt;&gt;&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==============
</span><br>
<span class="quotelev1">&gt; Kenneth A. Lloyd, Jr.
</span><br>
<span class="quotelev1">&gt; CEO - Director of Systems Science
</span><br>
<span class="quotelev1">&gt; Watt Systems Technologies Inc.
</span><br>
<span class="quotelev1">&gt; Albuquerque, NM US
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This e-mail is covered by the Electronic Communications Privacy Act, 18 U.S.C. 2510-2521 and is intended only for the addressee named above. It may contain privileged or confidential information. If you are not the addressee you must not copy, distribute, disclose or use any of the information in it. If you have received it in error please delete it and immediately notify the sender.
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10245/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10246.php">Jeff Squyres: "Re: [OMPI devel] OpenMPI 1.5.x and MPI 2.2"</a>
<li><strong>Previous message:</strong> <a href="10244.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r25762"</a>
<li><strong>In reply to:</strong> <a href="10241.php">Kenneth Lloyd: "Re: [OMPI devel] GPUDirect v1 issues"</a>
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
