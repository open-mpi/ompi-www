<?
$subject_val = "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 19 08:55:08 2014" -->
<!-- isoreceived="20140819125508" -->
<!-- sent="Tue, 19 Aug 2014 08:55:07 -0400" -->
<!-- isosent="20140819125507" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes" -->
<!-- id="53F3492B.1090600_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F36047A7DE59_at_HQMAIL02.nvidia.com" -->
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
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-19 08:55:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25075.php">Rolf vandeVaart: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="25073.php">Maxime Boissonneault: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="25065.php">Rolf vandeVaart: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25075.php">Rolf vandeVaart: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="25075.php">Rolf vandeVaart: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I recompiled OMPI 1.8.1 without Cuda and with debug, but it did not give 
<br>
me much more information.
<br>
[mboisson_at_gpu-k20-07 simple_cuda_mpi]$ ompi_info | grep debug
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: 
<br>
/software-gpu/mpi/openmpi/1.8.1-debug_gcc4.8_nocuda
<br>
&nbsp;&nbsp;&nbsp;Internal debug support: yes
<br>
Memory debugging support: no
<br>
<p><p>Is there something I need to do at run time to get more information out 
<br>
of it ?
<br>
<p><p>[mboisson_at_gpu-k20-07 simple_cuda_mpi]$ mpiexec -np 2 --map-by ppr:1:node 
<br>
cudampi_simple
<br>
[gpu-k20-08:46045] *** Process received signal ***
<br>
[gpu-k20-08:46045] Signal: Segmentation fault (11)
<br>
[gpu-k20-08:46045] Signal code: Address not mapped (1)
<br>
[gpu-k20-08:46045] Failing at address: 0x8
<br>
[gpu-k20-08:46045] [ 0] /lib64/libpthread.so.0(+0xf710)[0x2b9ca76d9710]
<br>
[gpu-k20-08:46045] [ 1] 
<br>
/usr/lib64/nvidia/libcuda.so(+0x263acf)[0x2b9cade98acf]
<br>
[gpu-k20-08:46045] [ 2] 
<br>
/usr/lib64/nvidia/libcuda.so(+0x229a83)[0x2b9cade5ea83]
<br>
[gpu-k20-08:46045] [ 3] 
<br>
/usr/lib64/nvidia/libcuda.so(+0x15b2da)[0x2b9cadd902da]
<br>
[gpu-k20-08:46045] [ 4] 
<br>
/usr/lib64/nvidia/libcuda.so(cuInit+0x43)[0x2b9cadd7c933]
<br>
[gpu-k20-08:46045] [ 5] 
<br>
/software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15965)[0x2b9ca6df4965]
<br>
[gpu-k20-08:46045] [ 6] 
<br>
/software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a0a)[0x2b9ca6df4a0a]
<br>
[gpu-k20-08:46045] [ 7] 
<br>
/software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a3b)[0x2b9ca6df4a3b]
<br>
[gpu-k20-08:46045] [ 8] 
<br>
/software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(cudaSetDevice+0x47)[0x2b9ca6e0f647]
<br>
[gpu-k20-08:46045] [ 9] cudampi_simple[0x4007ae]
<br>
[gpu-k20-08:46045] [10] [gpu-k20-07:61816] *** Process received signal ***
<br>
[gpu-k20-07:61816] Signal: Segmentation fault (11)
<br>
[gpu-k20-07:61816] Signal code: Address not mapped (1)
<br>
[gpu-k20-07:61816] Failing at address: 0x8
<br>
[gpu-k20-07:61816] [ 0] /lib64/libpthread.so.0(+0xf710)[0x2aef36e9b710]
<br>
[gpu-k20-07:61816] [ 1] 
<br>
/usr/lib64/nvidia/libcuda.so(+0x263acf)[0x2aef3d65aacf]
<br>
[gpu-k20-07:61816] [ 2] 
<br>
/usr/lib64/nvidia/libcuda.so(+0x229a83)[0x2aef3d620a83]
<br>
[gpu-k20-07:61816] [ 3] 
<br>
/usr/lib64/nvidia/libcuda.so(+0x15b2da)[0x2aef3d5522da]
<br>
[gpu-k20-07:61816] [ 4] 
<br>
/usr/lib64/nvidia/libcuda.so(cuInit+0x43)[0x2aef3d53e933]
<br>
[gpu-k20-07:61816] [ 5] 
<br>
/software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15965)[0x2aef365b6965]
<br>
[gpu-k20-07:61816] [ 6] 
<br>
/software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a0a)[0x2aef365b6a0a]
<br>
[gpu-k20-07:61816] [ 7] 
<br>
/software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a3b)[0x2aef365b6a3b]
<br>
[gpu-k20-07:61816] [ 8] 
<br>
/software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(cudaSetDevice+0x47)[0x2aef365d1647]
<br>
[gpu-k20-07:61816] [ 9] cudampi_simple[0x4007ae]
<br>
[gpu-k20-07:61816] [10] 
<br>
/lib64/libc.so.6(__libc_start_main+0xfd)[0x2aef370c7d1d]
<br>
[gpu-k20-07:61816] [11] cudampi_simple[0x400699]
<br>
[gpu-k20-07:61816] *** End of error message ***
<br>
/lib64/libc.so.6(__libc_start_main+0xfd)[0x2b9ca7905d1d]
<br>
[gpu-k20-08:46045] [11] cudampi_simple[0x400699]
<br>
[gpu-k20-08:46045] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 1 with PID 46045 on node gpu-k20-08 
<br>
exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p><p>Thanks,
<br>
<p>Maxime
<br>
<p><p>Le 2014-08-18 16:45, Rolf vandeVaart a &#233;crit :
<br>
<span class="quotelev1">&gt; Just to help reduce the scope of the problem, can you retest with a non CUDA-aware Open MPI 1.8.1?   And if possible, use --enable-debug in the configure line to help with the stack trace?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Maxime
</span><br>
<span class="quotelev2">&gt;&gt; Boissonneault
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, August 18, 2014 4:23 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] Segfault with MPI + Cuda on multiple nodes
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; Since my previous thread (Segmentation fault in OpenMPI 1.8.1) kindda
</span><br>
<span class="quotelev2">&gt;&gt; derailed into two problems, one of which has been addressed, I figured I
</span><br>
<span class="quotelev2">&gt;&gt; would start a new, more precise and simple one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I reduced the code to the minimal that would reproduce the bug. I have
</span><br>
<span class="quotelev2">&gt;&gt; pasted it here :
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://pastebin.com/1uAK4Z8R">http://pastebin.com/1uAK4Z8R</a>
</span><br>
<span class="quotelev2">&gt;&gt; Basically, it is a program that initializes MPI and cudaMalloc memory, and then
</span><br>
<span class="quotelev2">&gt;&gt; free memory and finalize MPI. Nothing else.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I compile and run this on a single node, everything works fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I compile and run this on more than one node, I get the following stack
</span><br>
<span class="quotelev2">&gt;&gt; trace :
</span><br>
<span class="quotelev2">&gt;&gt; [gpu-k20-07:40041] *** Process received signal *** [gpu-k20-07:40041] Signal:
</span><br>
<span class="quotelev2">&gt;&gt; Segmentation fault (11) [gpu-k20-07:40041] Signal code: Address not mapped
</span><br>
<span class="quotelev2">&gt;&gt; (1) [gpu-k20-07:40041] Failing at address: 0x8 [gpu-k20-07:40041] [ 0]
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libpthread.so.0(+0xf710)[0x2ac85a5bb710]
</span><br>
<span class="quotelev2">&gt;&gt; [gpu-k20-07:40041] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/nvidia/libcuda.so.1(+0x263acf)[0x2ac85fc0aacf]
</span><br>
<span class="quotelev2">&gt;&gt; [gpu-k20-07:40041] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/nvidia/libcuda.so.1(+0x229a83)[0x2ac85fbd0a83]
</span><br>
<span class="quotelev2">&gt;&gt; [gpu-k20-07:40041] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/nvidia/libcuda.so.1(+0x15b2da)[0x2ac85fb022da]
</span><br>
<span class="quotelev2">&gt;&gt; [gpu-k20-07:40041] [ 4]
</span><br>
<span class="quotelev2">&gt;&gt; /usr/lib64/nvidia/libcuda.so.1(cuInit+0x43)[0x2ac85faee933]
</span><br>
<span class="quotelev2">&gt;&gt; [gpu-k20-07:40041] [ 5]
</span><br>
<span class="quotelev2">&gt;&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15965)[0x2ac859e3a965]
</span><br>
<span class="quotelev2">&gt;&gt; [gpu-k20-07:40041] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a0a)[0x2ac859e3aa0a]
</span><br>
<span class="quotelev2">&gt;&gt; [gpu-k20-07:40041] [ 7]
</span><br>
<span class="quotelev2">&gt;&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a3b)[0x2ac859e3aa3b]
</span><br>
<span class="quotelev2">&gt;&gt; [gpu-k20-07:40041] [ 8]
</span><br>
<span class="quotelev2">&gt;&gt; /software-
</span><br>
<span class="quotelev2">&gt;&gt; gpu/cuda/6.0.37/lib64/libcudart.so.6.0(cudaMalloc+0x52)[0x2ac859e5b532]
</span><br>
<span class="quotelev2">&gt;&gt; [gpu-k20-07:40041] [ 9] cudampi_simple[0x4007b5] [gpu-k20-07:40041] [10]
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2ac85a7e7d1d]
</span><br>
<span class="quotelev2">&gt;&gt; [gpu-k20-07:40041] [11] cudampi_simple[0x400699] [gpu-k20-07:40041] ***
</span><br>
<span class="quotelev2">&gt;&gt; End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The stack trace is the same weither I use OpenMPI 1.6.5 (not cuda aware) or
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI 1.8.1 (cuda aware).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I know this is more than likely a problem with Cuda than with OpenMPI (since
</span><br>
<span class="quotelev2">&gt;&gt; it does the same for two different versions), but I figured I would ask here if
</span><br>
<span class="quotelev2">&gt;&gt; somebody has a clue of what might be going on. I have yet to be able to fill a
</span><br>
<span class="quotelev2">&gt;&gt; bug report on NVidia's website for Cuda.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev2">&gt;&gt; Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval Ph. D. en physique
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev2">&gt;&gt; mpi.org/community/lists/users/2014/08/25064.php
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/25065.php">http://www.open-mpi.org/community/lists/users/2014/08/25065.php</a>
</span><br>
<p><p><pre>
-- 
---------------------------------
Maxime Boissonneault
Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
Ph. D. en physique
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25075.php">Rolf vandeVaart: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="25073.php">Maxime Boissonneault: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="25065.php">Rolf vandeVaart: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25075.php">Rolf vandeVaart: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="25075.php">Rolf vandeVaart: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
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
