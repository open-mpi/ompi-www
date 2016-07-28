<?
$subject_val = "Re: [OMPI users] Program hangs when using OpenMPI and CUDA";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  6 12:01:20 2011" -->
<!-- isoreceived="20110606160120" -->
<!-- sent="Mon, 6 Jun 2011 12:01:15 -0400" -->
<!-- isosent="20110606160115" -->
<!-- name="Fengguang Song" -->
<!-- email="song_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program hangs when using OpenMPI and CUDA" -->
<!-- id="7DE5C7DC-50B5-4702-A88D-F2429EEFA9C4_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F30189F409B5_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Program hangs when using OpenMPI and CUDA<br>
<strong>From:</strong> Fengguang Song (<em>song_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-06 12:01:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16682.php">Jeff Squyres: "Re: [OMPI users] ifort 12.0.4 install problem"</a>
<li><strong>Previous message:</strong> <a href="16680.php">Rolf vandeVaart: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<li><strong>In reply to:</strong> <a href="16680.php">Rolf vandeVaart: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Rolf,
<br>
<p>I  double checked the flag just now. It was set correctly, but the hanging problem is still there.
<br>
But I found another way to solve the hanging problem. Just setting environment CUDA_NIC_INTEROP 1
<br>
could solve the issue.
<br>
<p>Thanks,
<br>
Fengguang
<br>
<p><p>On Jun 6, 2011, at 10:44 AM, Rolf vandeVaart wrote:
<br>
<p><span class="quotelev1">&gt; Hi Fengguang:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is odd that you see the problem even when running with the openib flags set as Brice indicated.  Just to be extra sure there are no typo errors in your flag settings, maybe you can verify with the ompi_info command like this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ompi_info -mca btl_openib_flags 304 -param btl openib | grep btl_openib_flags
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When running with the 304 setting, then all communications travel through a regular send/receive protocol on IB.  The message is broken up into a 12K fragment, followed by however many 64K fragments it takes to move the message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will try and find to time to reproduce the other 1 Mbyte issue that Brice reported.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS: Not sure if you are interested, but in the trunk, you can configure in support so that you can send and receive GPU buffers directly.  There are still many performance issues to be worked out, but just thought I would mention it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Fengguang Song
</span><br>
<span class="quotelev1">&gt; Sent: Sunday, June 05, 2011 9:54 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Program hangs when using OpenMPI and CUDA
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you! I saw your previous discussion and actually have tried &quot;--mca btl_openib_flags 304&quot;.
</span><br>
<span class="quotelev1">&gt; It didn't solve the problem unfortunately. In our case, the MPI buffer is different from the cudaMemcpy buffer and we do manually copy between them. I'm still trying to figure out how to configure OpenMPI's mca parameters to solve the problem...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Fengguang
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 5, 2011, at 2:20 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Le 05/06/2011 00:15, Fengguang Song a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm confronting a problem when using OpenMPI 1.5.1 on a GPU cluster. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My program uses MPI to exchange data between nodes, and uses cudaMemcpyAsync to exchange data between Host and GPU devices within a node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When the MPI message size is less than 1MB, everything works fine. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, when the message size is &gt; 1MB, the program hangs (i.e., an MPI send never reaches its destination based on my trace).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The issue may be related to locked-memory contention between OpenMPI and CUDA.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anyone have the experience to solve the problem? Which MCA 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameters should I tune to increase the message size to be &gt; 1MB (to avoid the program hang)? Any help would be appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fengguang
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I may have seen the same problem when testing GPU direct. Do you use 
</span><br>
<span class="quotelev2">&gt;&gt; the same host buffer for copying from/to GPU and for sending/receiving 
</span><br>
<span class="quotelev2">&gt;&gt; on the network ? If so, you need a GPUDirect enabled kernel and 
</span><br>
<span class="quotelev2">&gt;&gt; mellanox drivers, but it only helps before 1MB.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You can work around the problem with one of the following solution:
</span><br>
<span class="quotelev2">&gt;&gt; * add --mca btl_openib_flags 304 to force OMPI to always send/recv 
</span><br>
<span class="quotelev2">&gt;&gt; through an intermediate (internal buffer), but it'll decrease 
</span><br>
<span class="quotelev2">&gt;&gt; performance before 1MB too
</span><br>
<span class="quotelev2">&gt;&gt; * use different host buffers for the GPU and the network and manually 
</span><br>
<span class="quotelev2">&gt;&gt; copy between them
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I never got any reply from NVIDIA/Mellanox/here when I reported this 
</span><br>
<span class="quotelev2">&gt;&gt; problem with GPUDirect and messages larger than 1MB.
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2011/03/15823.php">http://www.open-mpi.org/community/lists/users/2011/03/15823.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16682.php">Jeff Squyres: "Re: [OMPI users] ifort 12.0.4 install problem"</a>
<li><strong>Previous message:</strong> <a href="16680.php">Rolf vandeVaart: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
<li><strong>In reply to:</strong> <a href="16680.php">Rolf vandeVaart: "Re: [OMPI users] Program hangs when using OpenMPI and CUDA"</a>
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
