<?
$subject_val = "[OMPI users] Segfault with MPI + Cuda on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 18 16:22:57 2014" -->
<!-- isoreceived="20140818202257" -->
<!-- sent="Mon, 18 Aug 2014 16:23:10 -0400" -->
<!-- isosent="20140818202310" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="[OMPI users] Segfault with MPI + Cuda on multiple nodes" -->
<!-- id="53F260AE.3020504_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Segfault with MPI + Cuda on multiple nodes<br>
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-18 16:23:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25065.php">Rolf vandeVaart: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="25063.php">Mike Dubman: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25065.php">Rolf vandeVaart: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="25065.php">Rolf vandeVaart: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="25066.php">Alex A. Granovsky: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Since my previous thread (Segmentation fault in OpenMPI 1.8.1) kindda 
<br>
derailed into two problems, one of which has been addressed, I figured I 
<br>
would start a new, more precise and simple one.
<br>
<p>I reduced the code to the minimal that would reproduce the bug. I have 
<br>
pasted it here :
<br>
<a href="http://pastebin.com/1uAK4Z8R">http://pastebin.com/1uAK4Z8R</a>
<br>
Basically, it is a program that initializes MPI and cudaMalloc memory, 
<br>
and then free memory and finalize MPI. Nothing else.
<br>
<p>When I compile and run this on a single node, everything works fine.
<br>
<p>When I compile and run this on more than one node, I get the following 
<br>
stack trace :
<br>
[gpu-k20-07:40041] *** Process received signal ***
<br>
[gpu-k20-07:40041] Signal: Segmentation fault (11)
<br>
[gpu-k20-07:40041] Signal code: Address not mapped (1)
<br>
[gpu-k20-07:40041] Failing at address: 0x8
<br>
[gpu-k20-07:40041] [ 0] /lib64/libpthread.so.0(+0xf710)[0x2ac85a5bb710]
<br>
[gpu-k20-07:40041] [ 1] 
<br>
/usr/lib64/nvidia/libcuda.so.1(+0x263acf)[0x2ac85fc0aacf]
<br>
[gpu-k20-07:40041] [ 2] 
<br>
/usr/lib64/nvidia/libcuda.so.1(+0x229a83)[0x2ac85fbd0a83]
<br>
[gpu-k20-07:40041] [ 3] 
<br>
/usr/lib64/nvidia/libcuda.so.1(+0x15b2da)[0x2ac85fb022da]
<br>
[gpu-k20-07:40041] [ 4] 
<br>
/usr/lib64/nvidia/libcuda.so.1(cuInit+0x43)[0x2ac85faee933]
<br>
[gpu-k20-07:40041] [ 5] 
<br>
/software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15965)[0x2ac859e3a965]
<br>
[gpu-k20-07:40041] [ 6] 
<br>
/software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a0a)[0x2ac859e3aa0a]
<br>
[gpu-k20-07:40041] [ 7] 
<br>
/software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(+0x15a3b)[0x2ac859e3aa3b]
<br>
[gpu-k20-07:40041] [ 8] 
<br>
/software-gpu/cuda/6.0.37/lib64/libcudart.so.6.0(cudaMalloc+0x52)[0x2ac859e5b532]
<br>
[gpu-k20-07:40041] [ 9] cudampi_simple[0x4007b5]
<br>
[gpu-k20-07:40041] [10] 
<br>
/lib64/libc.so.6(__libc_start_main+0xfd)[0x2ac85a7e7d1d]
<br>
[gpu-k20-07:40041] [11] cudampi_simple[0x400699]
<br>
[gpu-k20-07:40041] *** End of error message ***
<br>
<p><p>The stack trace is the same weither I use OpenMPI 1.6.5 (not cuda aware) 
<br>
or OpenMPI 1.8.1 (cuda aware).
<br>
<p>I know this is more than likely a problem with Cuda than with OpenMPI 
<br>
(since it does the same for two different versions), but I figured I 
<br>
would ask here if somebody has a clue of what might be going on. I have 
<br>
yet to be able to fill a bug report on NVidia's website for Cuda.
<br>
<p><p>Thanks,
<br>
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
<li><strong>Next message:</strong> <a href="25065.php">Rolf vandeVaart: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="25063.php">Mike Dubman: "Re: [OMPI users] No log_num_mtt in Ubuntu 14.04"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25065.php">Rolf vandeVaart: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="25065.php">Rolf vandeVaart: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="25066.php">Alex A. Granovsky: "Re: [OMPI users] Segfault with MPI + Cuda on multiple nodes"</a>
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
