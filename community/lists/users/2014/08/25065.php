<?
$subject_val = "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 18 16:45:33 2014" -->
<!-- isoreceived="20140818204533" -->
<!-- sent="Mon, 18 Aug 2014 13:45:31 -0700" -->
<!-- isosent="20140818204531" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F36047A7DE59_at_HQMAIL02.nvidia.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53F260AE.3020504_at_calculquebec.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-18 16:45:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25066.php">Alex A. Granovsky: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="25064.php">Maxime Boissonneault: "[OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="25064.php">Maxime Boissonneault: "[OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25068.php">Maxime Boissonneault: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="25068.php">Maxime Boissonneault: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="25074.php">Maxime Boissonneault: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just to help reduce the scope of the problem, can you retest with a non CUDA-aware Open MPI 1.8.1?   And if possible, use --enable-debug in the configure line to help with the stack trace?
<br>
<p><p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Maxime
</span><br>
<span class="quotelev1">&gt;Boissonneault
</span><br>
<span class="quotelev1">&gt;Sent: Monday, August 18, 2014 4:23 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] Segfault with MPI + Cuda on multiple nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;Since my previous thread (Segmentation fault in OpenMPI 1.8.1) kindda
</span><br>
<span class="quotelev1">&gt;derailed into two problems, one of which has been addressed, I figured I
</span><br>
<span class="quotelev1">&gt;would start a new, more precise and simple one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I reduced the code to the minimal that would reproduce the bug. I have
</span><br>
<span class="quotelev1">&gt;pasted it here :
</span><br>
<span class="quotelev1">&gt;<a href="http://pastebin.com/1uAK4Z8R">http://pastebin.com/1uAK4Z8R</a>
</span><br>
<span class="quotelev1">&gt;Basically, it is a program that initializes MPI and cudaMalloc memory, and then
</span><br>
<span class="quotelev1">&gt;free memory and finalize MPI. Nothing else.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;When I compile and run this on a single node, everything works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;When I compile and run this on more than one node, I get the following stack
</span><br>
<span class="quotelev1">&gt;trace :
</span><br>
<span class="quotelev1">&gt;[gpu-k20-07:40041] *** Process received signal *** [gpu-k20-07:40041] Signal:
</span><br>
<span class="quotelev1">&gt;Segmentation fault (11) [gpu-k20-07:40041] Signal code: Address not mapped
</span><br>
<span class="quotelev1">&gt;(1) [gpu-k20-07:40041] Failing at address: 0x8 [gpu-k20-07:40041] [ 0]
</span><br>
<span class="quotelev1">&gt;/lib64/libpthread.so.0(+0xf710)[0x2ac85a5bb710]
</span><br>
<span class="quotelev1">&gt;[gpu-k20-07:40041] [ 1]
</span><br>
<span class="quotelev1">&gt;/usr/lib64/nvidia/libcuda.so.1(+0x263acf)[0x2ac85fc0aacf]
</span><br>
<span class="quotelev1">&gt;[gpu-k20-07:40041] [ 2]
</span><br>
<span class="quotelev1">&gt;/usr/lib64/nvidia/libcuda.so.1(+0x229a83)[0x2ac85fbd0a83]
</span><br>
<span class="quotelev1">&gt;[gpu-k20-07:40041] [ 3]
</span><br>
<span class="quotelev1">&gt;/usr/lib64/nvidia/libcuda.so.1(+0x15b2da)[0x2ac85fb022da]
</span><br>
<span class="quotelev1">&gt;[gpu-k20-07:40041] [ 4]
</span><br>
<span class="quotelev1">&gt;/usr/lib64/nvidia/libcuda.so.1(cuInit+0x43)[0x2ac85faee933]
</span><br>
<span class="quotelev1">&gt;[gpu-k20-07:40041] [ 5]
</span><br>
<span class="quotelev1">&gt;/software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15965)[0x2ac859e3a965]
</span><br>
<span class="quotelev1">&gt;[gpu-k20-07:40041] [ 6]
</span><br>
<span class="quotelev1">&gt;/software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a0a)[0x2ac859e3aa0a]
</span><br>
<span class="quotelev1">&gt;[gpu-k20-07:40041] [ 7]
</span><br>
<span class="quotelev1">&gt;/software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a3b)[0x2ac859e3aa3b]
</span><br>
<span class="quotelev1">&gt;[gpu-k20-07:40041] [ 8]
</span><br>
<span class="quotelev1">&gt;/software-
</span><br>
<span class="quotelev1">&gt;gpu/cuda/6.0.37/lib64/libcudart.so.6.0(cudaMalloc+0x52)[0x2ac859e5b532]
</span><br>
<span class="quotelev1">&gt;[gpu-k20-07:40041] [ 9] cudampi_simple[0x4007b5] [gpu-k20-07:40041] [10]
</span><br>
<span class="quotelev1">&gt;/lib64/libc.so.6(__libc_start_main+0xfd)[0x2ac85a7e7d1d]
</span><br>
<span class="quotelev1">&gt;[gpu-k20-07:40041] [11] cudampi_simple[0x400699] [gpu-k20-07:40041] ***
</span><br>
<span class="quotelev1">&gt;End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The stack trace is the same weither I use OpenMPI 1.6.5 (not cuda aware) or
</span><br>
<span class="quotelev1">&gt;OpenMPI 1.8.1 (cuda aware).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I know this is more than likely a problem with Cuda than with OpenMPI (since
</span><br>
<span class="quotelev1">&gt;it does the same for two different versions), but I figured I would ask here if
</span><br>
<span class="quotelev1">&gt;somebody has a clue of what might be going on. I have yet to be able to fill a
</span><br>
<span class="quotelev1">&gt;bug report on NVidia's website for Cuda.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;---------------------------------
</span><br>
<span class="quotelev1">&gt;Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt;Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval Ph. D. en physique
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev1">&gt;mpi.org/community/lists/users/2014/08/25064.php
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
<li><strong>Next message:</strong> <a href="25066.php">Alex A. Granovsky: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="25064.php">Maxime Boissonneault: "[OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="25064.php">Maxime Boissonneault: "[OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25068.php">Maxime Boissonneault: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="25068.php">Maxime Boissonneault: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="25074.php">Maxime Boissonneault: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
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
