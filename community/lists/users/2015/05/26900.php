<?
$subject_val = "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 21 11:32:50 2015" -->
<!-- isoreceived="20150521153250" -->
<!-- sent="Thu, 21 May 2015 11:32:33 -0400" -->
<!-- isosent="20150521153233" -->
<!-- name="Lev Givon" -->
<!-- email="lev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service" -->
<!-- id="20150521153233.GA4096_at_avicenna.ee.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="389caf970df74da88fc8bd49c2183311_at_HQMAIL102.nvidia.com" -->
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
<strong>Date:</strong> 2015-05-21 11:32:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26901.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>Previous message:</strong> <a href="26899.php">Khalid Hasanov: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="26892.php">Rolf vandeVaart: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26901.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>Reply:</strong> <a href="26901.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Received from Rolf vandeVaart on Wed, May 20, 2015 at 07:48:15AM EDT:
<br>
<p>(snip)
<br>
<p><span class="quotelev1">&gt; I see that you mentioned you are starting 4 MPS daemons.  Are you following
</span><br>
<span class="quotelev1">&gt; the instructions here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://cudamusing.blogspot.de/2013/07/enabling-cuda-multi-process-service-mps.html">http://cudamusing.blogspot.de/2013/07/enabling-cuda-multi-process-service-mps.html</a> 
</span><br>
<p>Yes - also
<br>
<a href="https://docs.nvidia.com/deploy/pdf/CUDA_Multi_Process_Service_Overview.pdf">https://docs.nvidia.com/deploy/pdf/CUDA_Multi_Process_Service_Overview.pdf</a>
<br>
<p><span class="quotelev1">&gt; This relies on setting CUDA_VISIBLE_DEVICES which can cause problems for CUDA
</span><br>
<span class="quotelev1">&gt; IPC. Since you are using CUDA 7 there is no more need to start multiple
</span><br>
<span class="quotelev1">&gt; daemons. You simply leave CUDA_VISIBLE_DEVICES untouched and start a single
</span><br>
<span class="quotelev1">&gt; MPS control daemon which will handle all GPUs.  Can you try that?  
</span><br>
<p>I assume that this means that only one CUDA_MPS_PIPE_DIRECTORY value should be
<br>
passed to all MPI processes. 
<br>
<p>Several questions related to your comment above:
<br>
<p>- Should the MPI processes select and initialize the GPUs they respectively need
<br>
&nbsp;&nbsp;to access as they normally would when MPS is not in use?
<br>
- Can CUDA_VISIBLE_DEVICES be used to control what GPUs are visible to MPS (and
<br>
&nbsp;&nbsp;hence the client processes)? I ask because SLURM uses CUDA_VISIBLE_DEVICES to
<br>
&nbsp;&nbsp;control GPU resource allocation, and I would like to run my program (and the
<br>
&nbsp;&nbsp;MPS control daemon) on a cluster via SLURM.
<br>
- Does the clash between setting CUDA_VISIBLE_DEVICES and CUDA IPC imply that
<br>
&nbsp;&nbsp;MPS and CUDA IPC cannot reliably be used simultaneously in a multi-GPU setting
<br>
&nbsp;&nbsp;with CUDA 6.5 even when one starts multiple MPS control daemons as described
<br>
&nbsp;&nbsp;in the aforementioned blog post?
<br>
<p><span class="quotelev1">&gt; Because of this question, we realized we need to update our documentation as
</span><br>
<span class="quotelev1">&gt; well.
</span><br>
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
<li><strong>Next message:</strong> <a href="26901.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>Previous message:</strong> <a href="26899.php">Khalid Hasanov: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="26892.php">Rolf vandeVaart: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26901.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>Reply:</strong> <a href="26901.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
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
