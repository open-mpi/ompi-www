<?
$subject_val = "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 20:33:00 2015" -->
<!-- isoreceived="20150520003300" -->
<!-- sent="Tue, 19 May 2015 20:32:53 -0400" -->
<!-- isosent="20150520003253" -->
<!-- name="Lev Givon" -->
<!-- email="lev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service" -->
<!-- id="20150520003253.GR5298_at_avicenna.ee.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="112319de0ec54f4cb73a716c06e91806_at_HQMAIL102.nvidia.com" -->
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
<strong>Date:</strong> 2015-05-19 20:32:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26885.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="26883.php">Rolf vandeVaart: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>In reply to:</strong> <a href="26883.php">Rolf vandeVaart: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26889.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Received from Rolf vandeVaart on Tue, May 19, 2015 at 08:28:46PM EDT:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;-----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Lev Givon
</span><br>
<span class="quotelev2">&gt; &gt;Sent: Tuesday, May 19, 2015 6:30 PM
</span><br>
<span class="quotelev2">&gt; &gt;To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;Subject: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI
</span><br>
<span class="quotelev2">&gt; &gt;1.8.5 with CUDA 7.0 and Multi-Process Service
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I'm encountering intermittent errors while trying to use the Multi-Process
</span><br>
<span class="quotelev2">&gt; &gt;Service with CUDA 7.0 for improving concurrent access to a Kepler K20Xm GPU
</span><br>
<span class="quotelev2">&gt; &gt;by multiple MPI processes that perform GPU-to-GPU communication with
</span><br>
<span class="quotelev2">&gt; &gt;each other (i.e., GPU pointers are passed to the MPI transmission primitives).
</span><br>
<span class="quotelev2">&gt; &gt;I'm using GitHub revision 41676a1 of mpi4py built against OpenMPI 1.8.5,
</span><br>
<span class="quotelev2">&gt; &gt;which is in turn built against CUDA 7.0. In my current configuration, I have 4
</span><br>
<span class="quotelev2">&gt; &gt;MPS server daemons running, each of which controls access to one of 4 GPUs;
</span><br>
<span class="quotelev2">&gt; &gt;the MPI processes spawned by my program are partitioned into 4 groups
</span><br>
<span class="quotelev2">&gt; &gt;(which might contain different numbers of processes) that each talk to a
</span><br>
<span class="quotelev2">&gt; &gt;separate daemon. For certain transmission patterns between these
</span><br>
<span class="quotelev2">&gt; &gt;processes, the program runs without any problems. For others (e.g., 16
</span><br>
<span class="quotelev2">&gt; &gt;processes partitioned into 4 groups), however, it dies with the following error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;[node05:20562] Failed to register remote memory, rc=-1
</span><br>
<span class="quotelev2">&gt; &gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;The call to cuIpcOpenMemHandle failed. This is an unrecoverable error and
</span><br>
<span class="quotelev2">&gt; &gt;will cause the program to abort.
</span><br>
<span class="quotelev2">&gt; &gt;  cuIpcOpenMemHandle return value:   21199360
</span><br>
<span class="quotelev2">&gt; &gt;  address: 0x1
</span><br>
<span class="quotelev2">&gt; &gt;Check the cuda.h file for what the return value means. Perhaps a reboot of
</span><br>
<span class="quotelev2">&gt; &gt;the node will clear the problem.
</span><br>
<p>(snip)
<br>
<p><span class="quotelev2">&gt; &gt;After the above error occurs, I notice that /dev/shm/ is littered with
</span><br>
<span class="quotelev2">&gt; &gt;cuda.shm.* files. I tried cleaning up /dev/shm before running my program,
</span><br>
<span class="quotelev2">&gt; &gt;but that doesn't seem to have any effect upon the problem. Rebooting the
</span><br>
<span class="quotelev2">&gt; &gt;machine also doesn't have any effect. I should also add that my program runs
</span><br>
<span class="quotelev2">&gt; &gt;without any error if the groups of MPI processes talk directly to the GPUs
</span><br>
<span class="quotelev2">&gt; &gt;instead of via MPS.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Does anyone have any ideas as to what could be going on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not sure why you are seeing this.  One thing that is clear is that you
</span><br>
<span class="quotelev1">&gt; have found a bug in the error reporting.  The error message is a little
</span><br>
<span class="quotelev1">&gt; garbled and I see a bug in what we are reporting. I will fix that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If possible, could you try running with --mca btl_smcuda_use_cuda_ipc 0.  My
</span><br>
<span class="quotelev1">&gt; expectation is that you will not see any errors, but may lose some
</span><br>
<span class="quotelev1">&gt; performance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What does your hardware configuration look like?  Can you send me output from
</span><br>
<span class="quotelev1">&gt; &quot;nvidia-smi topo -m&quot;
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;GPU0    GPU1    GPU2    GPU3    CPU Affinity
<br>
GPU0     X      PHB     SOC     SOC     0-23
<br>
GPU1    PHB      X      SOC     SOC     0-23
<br>
GPU2    SOC     SOC      X      PHB     0-23
<br>
GPU3    SOC     SOC     PHB      X      0-23
<br>
<p>Legend:
<br>
<p>&nbsp;&nbsp;X   = Self
<br>
&nbsp;&nbsp;SOC = Path traverses a socket-level link (e.g. QPI)
<br>
&nbsp;&nbsp;PHB = Path traverses a PCIe host bridge
<br>
&nbsp;&nbsp;PXB = Path traverses multiple PCIe internal switches
<br>
&nbsp;&nbsp;PIX = Path traverses a PCIe internal switch
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
<li><strong>Next message:</strong> <a href="26885.php">Gilles Gouaillardet: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="26883.php">Rolf vandeVaart: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>In reply to:</strong> <a href="26883.php">Rolf vandeVaart: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26889.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
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
