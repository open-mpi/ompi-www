<?
$subject_val = "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 19 08:47:53 2014" -->
<!-- isoreceived="20140819124753" -->
<!-- sent="Tue, 19 Aug 2014 08:47:52 -0400" -->
<!-- isosent="20140819124752" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes" -->
<!-- id="53F34778.8030801_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="63D661AECBBE4FF99F3164E3CEB95C32_at_chem.msu.ru" -->
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
<strong>Date:</strong> 2014-08-19 08:47:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25074.php">Maxime Boissonneault: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="25072.php">Alex A. Granovsky: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="25072.php">Alex A. Granovsky: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Indeed, there were those to problems. I took the code from here and 
<br>
simplified it.
<br>
<a href="http://cudamusing.blogspot.ca/2011/08/cuda-mpi-and-infiniband.html">http://cudamusing.blogspot.ca/2011/08/cuda-mpi-and-infiniband.html</a>
<br>
<p>However, even with the modified code here <a href="http://pastebin.com/ax6g10GZ">http://pastebin.com/ax6g10GZ</a>
<br>
<p>The symptoms are still the same.
<br>
<p>Maxime
<br>
<p><p>Le 2014-08-19 07:59, Alex A. Granovsky a &#233;crit :
<br>
<span class="quotelev1">&gt; Also you need to check return code from cudaMalloc before calling 
</span><br>
<span class="quotelev1">&gt; cudaFree -
</span><br>
<span class="quotelev1">&gt; the pointer may be invalid as you did not initialized cuda properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message----- From: Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, August 19, 2014 2:19 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Same thing :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [mboisson_at_gpu-k20-07 simple_cuda_mpi]$ export MALLOC_CHECK_=1
</span><br>
<span class="quotelev1">&gt; [mboisson_at_gpu-k20-07 simple_cuda_mpi]$ mpiexec -np 2 --map-by ppr:1:node
</span><br>
<span class="quotelev1">&gt; cudampi_simple
</span><br>
<span class="quotelev1">&gt; malloc: using debugging hooks
</span><br>
<span class="quotelev1">&gt; malloc: using debugging hooks
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:47628] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:47628] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:47628] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:47628] Failing at address: 0x8
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:47628] [ 0] /lib64/libpthread.so.0(+0xf710)[0x2b14cf850710]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:47628] [ 1]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/nvidia/libcuda.so.1(+0x263acf)[0x2b14d4e9facf]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:47628] [ 2]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/nvidia/libcuda.so.1(+0x229a83)[0x2b14d4e65a83]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:47628] [ 3]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/nvidia/libcuda.so.1(+0x15b2da)[0x2b14d4d972da]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:47628] [ 4]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/nvidia/libcuda.so.1(cuInit+0x43)[0x2b14d4d83933]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:47628] [ 5]
</span><br>
<span class="quotelev1">&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15965)[0x2b14cf0cf965] 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:47628] [ 6]
</span><br>
<span class="quotelev1">&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a0a)[0x2b14cf0cfa0a] 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:47628] [ 7]
</span><br>
<span class="quotelev1">&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a3b)[0x2b14cf0cfa3b] 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:47628] [ 8]
</span><br>
<span class="quotelev1">&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(cudaMalloc+0x52)[0x2b14cf0f0532] 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:47628] [ 9] cudampi_simple[0x4007b5]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:47628] [10]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2b14cfa7cd1d]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:47628] [11] cudampi_simple[0x400699]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:47628] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; ... (same segfault from the other node)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maxime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 2014-08-18 16:52, Alex A. Granovsky a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Try the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; export MALLOC_CHECK_=1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and then run it again
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards,
</span><br>
<span class="quotelev2">&gt;&gt; Alex Granovsky
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message----- From: Maxime Boissonneault
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Tuesday, August 19, 2014 12:23 AM
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
<span class="quotelev2">&gt;&gt; Basically, it is a program that initializes MPI and cudaMalloc memory,
</span><br>
<span class="quotelev2">&gt;&gt; and then free memory and finalize MPI. Nothing else.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I compile and run this on a single node, everything works fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I compile and run this on more than one node, I get the following
</span><br>
<span class="quotelev2">&gt;&gt; stack trace :
</span><br>
<span class="quotelev2">&gt;&gt; [gpu-k20-07:40041] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [gpu-k20-07:40041] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [gpu-k20-07:40041] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [gpu-k20-07:40041] Failing at address: 0x8
</span><br>
<span class="quotelev2">&gt;&gt; [gpu-k20-07:40041] [ 0] /lib64/libpthread.so.0(+0xf710)[0x2ac85a5bb710]
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [gpu-k20-07:40041] [ 6]
</span><br>
<span class="quotelev2">&gt;&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a0a)[0x2ac859e3aa0a] 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [gpu-k20-07:40041] [ 7]
</span><br>
<span class="quotelev2">&gt;&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a3b)[0x2ac859e3aa3b] 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [gpu-k20-07:40041] [ 8]
</span><br>
<span class="quotelev2">&gt;&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(cudaMalloc+0x52)[0x2ac859e5b532] 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [gpu-k20-07:40041] [ 9] cudampi_simple[0x4007b5]
</span><br>
<span class="quotelev2">&gt;&gt; [gpu-k20-07:40041] [10]
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2ac85a7e7d1d]
</span><br>
<span class="quotelev2">&gt;&gt; [gpu-k20-07:40041] [11] cudampi_simple[0x400699]
</span><br>
<span class="quotelev2">&gt;&gt; [gpu-k20-07:40041] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The stack trace is the same weither I use OpenMPI 1.6.5 (not cuda aware)
</span><br>
<span class="quotelev2">&gt;&gt; or OpenMPI 1.8.1 (cuda aware).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I know this is more than likely a problem with Cuda than with OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; (since it does the same for two different versions), but I figured I
</span><br>
<span class="quotelev2">&gt;&gt; would ask here if somebody has a clue of what might be going on. I have
</span><br>
<span class="quotelev2">&gt;&gt; yet to be able to fill a bug report on NVidia's website for Cuda.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="25074.php">Maxime Boissonneault: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="25072.php">Alex A. Granovsky: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="25072.php">Alex A. Granovsky: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
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
