<?
$subject_val = "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 21 14:18:39 2015" -->
<!-- isoreceived="20150521181839" -->
<!-- sent="Thu, 21 May 2015 14:18:33 -0400" -->
<!-- isosent="20150521181833" -->
<!-- name="Lev Givon" -->
<!-- email="lev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service" -->
<!-- id="20150521181833.GG10947_at_avicenna.ee.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150521153233.GA4096_at_avicenna.ee.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service<br>
<strong>From:</strong> Lev Givon (<em>lev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-21 14:18:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26902.php">Rolf vandeVaart: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>Previous message:</strong> <a href="26900.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>In reply to:</strong> <a href="26900.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26902.php">Rolf vandeVaart: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>Reply:</strong> <a href="26902.php">Rolf vandeVaart: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Received from Lev Givon on Thu, May 21, 2015 at 11:32:33AM EDT:
<br>
<span class="quotelev1">&gt; Received from Rolf vandeVaart on Wed, May 20, 2015 at 07:48:15AM EDT:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (snip)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I see that you mentioned you are starting 4 MPS daemons.  Are you following
</span><br>
<span class="quotelev2">&gt; &gt; the instructions here?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://cudamusing.blogspot.de/2013/07/enabling-cuda-multi-process-service-mps.html">http://cudamusing.blogspot.de/2013/07/enabling-cuda-multi-process-service-mps.html</a> 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes - also
</span><br>
<span class="quotelev1">&gt; <a href="https://docs.nvidia.com/deploy/pdf/CUDA_Multi_Process_Service_Overview.pdf">https://docs.nvidia.com/deploy/pdf/CUDA_Multi_Process_Service_Overview.pdf</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This relies on setting CUDA_VISIBLE_DEVICES which can cause problems for CUDA
</span><br>
<span class="quotelev2">&gt; &gt; IPC. Since you are using CUDA 7 there is no more need to start multiple
</span><br>
<span class="quotelev2">&gt; &gt; daemons. You simply leave CUDA_VISIBLE_DEVICES untouched and start a single
</span><br>
<span class="quotelev2">&gt; &gt; MPS control daemon which will handle all GPUs.  Can you try that?  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I assume that this means that only one CUDA_MPS_PIPE_DIRECTORY value should be
</span><br>
<span class="quotelev1">&gt; passed to all MPI processes. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Several questions related to your comment above:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Should the MPI processes select and initialize the GPUs they respectively need
</span><br>
<span class="quotelev1">&gt;   to access as they normally would when MPS is not in use?
</span><br>
<span class="quotelev1">&gt; - Can CUDA_VISIBLE_DEVICES be used to control what GPUs are visible to MPS (and
</span><br>
<span class="quotelev1">&gt;   hence the client processes)? I ask because SLURM uses CUDA_VISIBLE_DEVICES to
</span><br>
<span class="quotelev1">&gt;   control GPU resource allocation, and I would like to run my program (and the
</span><br>
<span class="quotelev1">&gt;   MPS control daemon) on a cluster via SLURM.
</span><br>
<span class="quotelev1">&gt; - Does the clash between setting CUDA_VISIBLE_DEVICES and CUDA IPC imply that
</span><br>
<span class="quotelev1">&gt;   MPS and CUDA IPC cannot reliably be used simultaneously in a multi-GPU setting
</span><br>
<span class="quotelev1">&gt;   with CUDA 6.5 even when one starts multiple MPS control daemons as described
</span><br>
<span class="quotelev1">&gt;   in the aforementioned blog post?
</span><br>
<p>Using a single control daemon with CUDA_VISIBLE_DEVICES unset appears to solve
<br>
the problem when IPC is enabled.
<br>
<pre>
-- 
Lev Givon
Bionet Group | Neurokernel Project
<a href="http://www.columbia.edu/~lev/">http://www.columbia.edu/~lev/</a>
<a href="http://lebedov.github.io/">http://lebedov.github.io/</a>
<a href="http://neurokernel.github.io/">http://neurokernel.github.io/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26902.php">Rolf vandeVaart: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>Previous message:</strong> <a href="26900.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>In reply to:</strong> <a href="26900.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26902.php">Rolf vandeVaart: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>Reply:</strong> <a href="26902.php">Rolf vandeVaart: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
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
