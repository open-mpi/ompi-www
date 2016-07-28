<?
$subject_val = "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 19 10:47:15 2014" -->
<!-- isoreceived="20140819144715" -->
<!-- sent="Tue, 19 Aug 2014 07:47:12 -0700" -->
<!-- isosent="20140819144712" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F36047A7DFD1_at_HQMAIL02.nvidia.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53F36180.6010500_at_calculquebec.ca" -->
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
<strong>Date:</strong> 2014-08-19 10:47:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25078.php">Maxime Boissonneault: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="25076.php">Maxime Boissonneault: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="25076.php">Maxime Boissonneault: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25078.php">Maxime Boissonneault: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="25078.php">Maxime Boissonneault: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Glad it was solved.  I will submit a bug at NVIDIA as that does not seem like a very friendly way to handle that error.
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Maxime
</span><br>
<span class="quotelev1">&gt;Boissonneault
</span><br>
<span class="quotelev1">&gt;Sent: Tuesday, August 19, 2014 10:39 AM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;I believe I found what the problem was. My script set the
</span><br>
<span class="quotelev1">&gt;CUDA_VISIBLE_DEVICES based on the content of $PBS_GPUFILE. Since the
</span><br>
<span class="quotelev1">&gt;GPUs were listed twice in the $PBS_GPUFILE because of the two nodes, I had
</span><br>
<span class="quotelev1">&gt;CUDA_VISIBLE_DEVICES=0,1,2,3,4,5,6,7,0,1,2,3,4,5,6,7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;instead of
</span><br>
<span class="quotelev1">&gt;CUDA_VISIBLE_DEVICES=0,1,2,3,4,5,6,7
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Sorry for the false bug and thanks for directing me toward the solution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Maxime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Le 2014-08-19 09:15, Rolf vandeVaart a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi:
</span><br>
<span class="quotelev2">&gt;&gt; This problem does not appear to have anything to do with MPI. We are
</span><br>
<span class="quotelev1">&gt;getting a SEGV during the initial call into the CUDA driver.  Can you log on to
</span><br>
<span class="quotelev1">&gt;gpu-k20-08, compile your simple program without MPI, and run it there?  Also,
</span><br>
<span class="quotelev1">&gt;maybe run dmesg on gpu-k20-08 and see if there is anything in the log?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, does your program run if you just run it on gpu-k20-07?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you include the output from nvidia-smi on each node?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Rolf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Maxime
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Boissonneault
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Tuesday, August 19, 2014 8:55 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I recompiled OMPI 1.8.1 without Cuda and with debug, but it did not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; give me much more information.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mboisson_at_gpu-k20-07 simple_cuda_mpi]$ ompi_info | grep debug
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                    Prefix:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /software-gpu/mpi/openmpi/1.8.1-debug_gcc4.8_nocuda
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Internal debug support: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Memory debugging support: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there something I need to do at run time to get more information
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out of it ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [mboisson_at_gpu-k20-07 simple_cuda_mpi]$ mpiexec -np 2 --map-by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ppr:1:node cudampi_simple [gpu-k20-08:46045] *** Process received
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signal *** [gpu-k20-08:46045] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gpu-k20-08:46045] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gpu-k20-08:46045] Failing at address: 0x8 [gpu-k20-08:46045] [ 0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libpthread.so.0(+0xf710)[0x2b9ca76d9710]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gpu-k20-08:46045] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib64/nvidia/libcuda.so(+0x263acf)[0x2b9cade98acf]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gpu-k20-08:46045] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib64/nvidia/libcuda.so(+0x229a83)[0x2b9cade5ea83]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gpu-k20-08:46045] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib64/nvidia/libcuda.so(+0x15b2da)[0x2b9cadd902da]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gpu-k20-08:46045] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib64/nvidia/libcuda.so(cuInit+0x43)[0x2b9cadd7c933]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gpu-k20-08:46045] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15965)[0x2b9ca6df
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4965]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gpu-k20-08:46045] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a0a)[0x2b9ca6df
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4a0a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gpu-k20-08:46045] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a3b)[0x2b9ca6df
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4a3b]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gpu-k20-08:46045] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /software-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gpu/cuda/6.0.37/lib64/libcudart.so.6.0(cudaSetDevice+0x47)[0x2b9ca6e0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f647] [gpu-k20-08:46045] [ 9] cudampi_simple[0x4007ae]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gpu-k20-08:46045] [10] [gpu-k20-07:61816] *** Process received
</span><br>
<span class="quotelev3">&gt;&gt;&gt; signal *** [gpu-k20-07:61816] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gpu-k20-07:61816] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gpu-k20-07:61816] Failing at address: 0x8 [gpu-k20-07:61816] [ 0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libpthread.so.0(+0xf710)[0x2aef36e9b710]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gpu-k20-07:61816] [ 1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib64/nvidia/libcuda.so(+0x263acf)[0x2aef3d65aacf]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gpu-k20-07:61816] [ 2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib64/nvidia/libcuda.so(+0x229a83)[0x2aef3d620a83]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gpu-k20-07:61816] [ 3]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib64/nvidia/libcuda.so(+0x15b2da)[0x2aef3d5522da]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gpu-k20-07:61816] [ 4]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib64/nvidia/libcuda.so(cuInit+0x43)[0x2aef3d53e933]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gpu-k20-07:61816] [ 5]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15965)[0x2aef365b
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6965]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gpu-k20-07:61816] [ 6]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a0a)[0x2aef365b
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6a0a]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gpu-k20-07:61816] [ 7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a3b)[0x2aef365b
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6a3b]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gpu-k20-07:61816] [ 8]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /software-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gpu/cuda/6.0.37/lib64/libcudart.so.6.0(cudaSetDevice+0x47)[0x2aef365d
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1647
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gpu-k20-07:61816] [ 9] cudampi_simple[0x4007ae] [gpu-k20-07:61816]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [10] /lib64/libc.so.6(__libc_start_main+0xfd)[0x2aef370c7d1d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gpu-k20-07:61816] [11] cudampi_simple[0x400699] [gpu-k20-07:61816]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b9ca7905d1d]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [gpu-k20-08:46045] [11] cudampi_simple[0x400699] [gpu-k20-08:46045]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----- mpiexec noticed that process rank 1 with PID 46045 on node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gpu-k20-08 exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maxime
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 2014-08-18 16:45, Rolf vandeVaart a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Just to help reduce the scope of the problem, can you retest with a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; non
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CUDA-aware Open MPI 1.8.1?   And if possible, use --enable-debug in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure line to help with the stack trace?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; From: users [mailto:users-bounces_at_[hidden]] On Behalf Of
</span><br>
<span class="quotelev1">&gt;Maxime
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Boissonneault
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sent: Monday, August 18, 2014 4:23 PM
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subject: [OMPI users] Segfault with MPI + Cuda on multiple nodes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Since my previous thread (Segmentation fault in OpenMPI 1.8.1)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; kindda derailed into two problems, one of which has been addressed,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I figured I would start a new, more precise and simple one.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I reduced the code to the minimal that would reproduce the bug. I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have pasted it here :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://pastebin.com/1uAK4Z8R">http://pastebin.com/1uAK4Z8R</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Basically, it is a program that initializes MPI and cudaMalloc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; memory, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; free memory and finalize MPI. Nothing else.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When I compile and run this on a single node, everything works fine.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; When I compile and run this on more than one node, I get the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stack
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; trace :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [gpu-k20-07:40041] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [gpu-k20-07:40041]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Signal:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Segmentation fault (11) [gpu-k20-07:40041] Signal code: Address not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mapped
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (1) [gpu-k20-07:40041] Failing at address: 0x8 [gpu-k20-07:40041] [
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 0] /lib64/libpthread.so.0(+0xf710)[0x2ac85a5bb710]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [gpu-k20-07:40041] [ 1]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/lib64/nvidia/libcuda.so.1(+0x263acf)[0x2ac85fc0aacf]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [gpu-k20-07:40041] [ 2]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/lib64/nvidia/libcuda.so.1(+0x229a83)[0x2ac85fbd0a83]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [gpu-k20-07:40041] [ 3]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/lib64/nvidia/libcuda.so.1(+0x15b2da)[0x2ac85fb022da]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [gpu-k20-07:40041] [ 4]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /usr/lib64/nvidia/libcuda.so.1(cuInit+0x43)[0x2ac85faee933]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [gpu-k20-07:40041] [ 5]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /software-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15965)[0x2ac859e3a965]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [gpu-k20-07:40041] [ 6]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /software-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a0a)[0x2ac859e3aa0a]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [gpu-k20-07:40041] [ 7]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /software-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a3b)[0x2ac859e3aa3b]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [gpu-k20-07:40041] [ 8]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /software-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; gpu/cuda/6.0.37/lib64/libcudart.so.6.0(cudaMalloc+0x52)[0x2ac859e5b
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 532] [gpu-k20-07:40041] [ 9] cudampi_simple[0x4007b5]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [gpu-k20-07:40041] [10]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2ac85a7e7d1d]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [gpu-k20-07:40041] [11] cudampi_simple[0x400699] [gpu-k20-07:40041]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; End of error message ***
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The stack trace is the same weither I use OpenMPI 1.6.5 (not cuda
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; aware)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OpenMPI 1.8.1 (cuda aware).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I know this is more than likely a problem with Cuda than with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (since
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it does the same for two different versions), but I figured I would
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ask here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; somebody has a clue of what might be going on. I have yet to be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; able to fill
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; bug report on NVidia's website for Cuda.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval Ph. D. en
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; physique
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpi.org/community/lists/users/2014/08/25064.php
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------- This email message is for the sole use of the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; intended recipient(s) and may
</span><br>
<span class="quotelev3">&gt;&gt;&gt; contain
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; confidential information.  Any unauthorized review, use, disclosure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; distribution
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is prohibited.  If you are not the intended recipient, please
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; contact the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sender by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi.org/community/lists/users/2014/08/25065.php
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval Ph. D. en
</span><br>
<span class="quotelev3">&gt;&gt;&gt; physique
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open">http://www.open</a>-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi.org/community/lists/users/2014/08/25074.php
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25075.php">http://www.open-mpi.org/community/lists/users/2014/08/25075.php</a>
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
<span class="quotelev1">&gt;mpi.org/community/lists/users/2014/08/25076.php
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25078.php">Maxime Boissonneault: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="25076.php">Maxime Boissonneault: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="25076.php">Maxime Boissonneault: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25078.php">Maxime Boissonneault: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="25078.php">Maxime Boissonneault: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
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
