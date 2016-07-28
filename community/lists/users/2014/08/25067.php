<?
$subject_val = "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 18 18:19:20 2014" -->
<!-- isoreceived="20140818221920" -->
<!-- sent="Mon, 18 Aug 2014 18:19:19 -0400" -->
<!-- isosent="20140818221919" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes" -->
<!-- id="53F27BE7.9030503_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="56FC2CA5CB394BA9AD2638F2B999651A_at_chem.msu.ru" -->
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
<strong>Date:</strong> 2014-08-18 18:19:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25068.php">Maxime Boissonneault: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="25066.php">Alex A. Granovsky: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="25066.php">Alex A. Granovsky: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25071.php">Alex A. Granovsky: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="25071.php">Alex A. Granovsky: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="25072.php">Alex A. Granovsky: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Same thing :
<br>
<p>[mboisson_at_gpu-k20-07 simple_cuda_mpi]$ export MALLOC_CHECK_=1
<br>
[mboisson_at_gpu-k20-07 simple_cuda_mpi]$ mpiexec -np 2 --map-by ppr:1:node 
<br>
cudampi_simple
<br>
malloc: using debugging hooks
<br>
malloc: using debugging hooks
<br>
[gpu-k20-07:47628] *** Process received signal ***
<br>
[gpu-k20-07:47628] Signal: Segmentation fault (11)
<br>
[gpu-k20-07:47628] Signal code: Address not mapped (1)
<br>
[gpu-k20-07:47628] Failing at address: 0x8
<br>
[gpu-k20-07:47628] [ 0] /lib64/libpthread.so.0(+0xf710)[0x2b14cf850710]
<br>
[gpu-k20-07:47628] [ 1] 
<br>
/usr/lib64/nvidia/libcuda.so.1(+0x263acf)[0x2b14d4e9facf]
<br>
[gpu-k20-07:47628] [ 2] 
<br>
/usr/lib64/nvidia/libcuda.so.1(+0x229a83)[0x2b14d4e65a83]
<br>
[gpu-k20-07:47628] [ 3] 
<br>
/usr/lib64/nvidia/libcuda.so.1(+0x15b2da)[0x2b14d4d972da]
<br>
[gpu-k20-07:47628] [ 4] 
<br>
/usr/lib64/nvidia/libcuda.so.1(cuInit+0x43)[0x2b14d4d83933]
<br>
[gpu-k20-07:47628] [ 5] 
<br>
/software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15965)[0x2b14cf0cf965]
<br>
[gpu-k20-07:47628] [ 6] 
<br>
/software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a0a)[0x2b14cf0cfa0a]
<br>
[gpu-k20-07:47628] [ 7] 
<br>
/software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a3b)[0x2b14cf0cfa3b]
<br>
[gpu-k20-07:47628] [ 8] 
<br>
/software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(cudaMalloc+0x52)[0x2b14cf0f0532]
<br>
[gpu-k20-07:47628] [ 9] cudampi_simple[0x4007b5]
<br>
[gpu-k20-07:47628] [10] 
<br>
/lib64/libc.so.6(__libc_start_main+0xfd)[0x2b14cfa7cd1d]
<br>
[gpu-k20-07:47628] [11] cudampi_simple[0x400699]
<br>
[gpu-k20-07:47628] *** End of error message ***
<br>
... (same segfault from the other node)
<br>
<p>Maxime
<br>
<p><p>Le 2014-08-18 16:52, Alex A. Granovsky a &#233;crit :
<br>
<span class="quotelev1">&gt; Try the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; export MALLOC_CHECK_=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and then run it again
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Alex Granovsky
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message----- From: Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, August 19, 2014 12:23 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Segfault with MPI + Cuda on multiple nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; Since my previous thread (Segmentation fault in OpenMPI 1.8.1) kindda
</span><br>
<span class="quotelev1">&gt; derailed into two problems, one of which has been addressed, I figured I
</span><br>
<span class="quotelev1">&gt; would start a new, more precise and simple one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I reduced the code to the minimal that would reproduce the bug. I have
</span><br>
<span class="quotelev1">&gt; pasted it here :
</span><br>
<span class="quotelev1">&gt; <a href="http://pastebin.com/1uAK4Z8R">http://pastebin.com/1uAK4Z8R</a>
</span><br>
<span class="quotelev1">&gt; Basically, it is a program that initializes MPI and cudaMalloc memory,
</span><br>
<span class="quotelev1">&gt; and then free memory and finalize MPI. Nothing else.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I compile and run this on a single node, everything works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I compile and run this on more than one node, I get the following
</span><br>
<span class="quotelev1">&gt; stack trace :
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:40041] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:40041] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:40041] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:40041] Failing at address: 0x8
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:40041] [ 0] /lib64/libpthread.so.0(+0xf710)[0x2ac85a5bb710]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:40041] [ 1]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/nvidia/libcuda.so.1(+0x263acf)[0x2ac85fc0aacf]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:40041] [ 2]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/nvidia/libcuda.so.1(+0x229a83)[0x2ac85fbd0a83]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:40041] [ 3]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/nvidia/libcuda.so.1(+0x15b2da)[0x2ac85fb022da]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:40041] [ 4]
</span><br>
<span class="quotelev1">&gt; /usr/lib64/nvidia/libcuda.so.1(cuInit+0x43)[0x2ac85faee933]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:40041] [ 5]
</span><br>
<span class="quotelev1">&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15965)[0x2ac859e3a965] 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:40041] [ 6]
</span><br>
<span class="quotelev1">&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a0a)[0x2ac859e3aa0a] 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:40041] [ 7]
</span><br>
<span class="quotelev1">&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a3b)[0x2ac859e3aa3b] 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:40041] [ 8]
</span><br>
<span class="quotelev1">&gt; /software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(cudaMalloc+0x52)[0x2ac859e5b532] 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:40041] [ 9] cudampi_simple[0x4007b5]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:40041] [10]
</span><br>
<span class="quotelev1">&gt; /lib64/libc.so.6(__libc_start_main+0xfd)[0x2ac85a7e7d1d]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:40041] [11] cudampi_simple[0x400699]
</span><br>
<span class="quotelev1">&gt; [gpu-k20-07:40041] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The stack trace is the same weither I use OpenMPI 1.6.5 (not cuda aware)
</span><br>
<span class="quotelev1">&gt; or OpenMPI 1.8.1 (cuda aware).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I know this is more than likely a problem with Cuda than with OpenMPI
</span><br>
<span class="quotelev1">&gt; (since it does the same for two different versions), but I figured I
</span><br>
<span class="quotelev1">&gt; would ask here if somebody has a clue of what might be going on. I have
</span><br>
<span class="quotelev1">&gt; yet to be able to fill a bug report on NVidia's website for Cuda.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
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
<li><strong>Next message:</strong> <a href="25068.php">Maxime Boissonneault: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="25066.php">Alex A. Granovsky: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="25066.php">Alex A. Granovsky: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25071.php">Alex A. Granovsky: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="25071.php">Alex A. Granovsky: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="25072.php">Alex A. Granovsky: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
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
