<?
$subject_val = "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 21 15:04:33 2015" -->
<!-- isoreceived="20150521190433" -->
<!-- sent="Thu, 21 May 2015 19:04:28 +0000" -->
<!-- isosent="20150521190428" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service" -->
<!-- id="f0aeb867c8014213a63b617352728869_at_HQMAIL102.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150521181833.GG10947_at_avicenna.ee.columbia.edu" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-21 15:04:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26903.php">Joshua Ladd: "[OMPI users] Fwd: job post"</a>
<li><strong>Previous message:</strong> <a href="26901.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>In reply to:</strong> <a href="26901.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Answers below...
<br>
<span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Lev Givon
</span><br>
<span class="quotelev1">&gt;Sent: Thursday, May 21, 2015 2:19 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] cuIpcOpenMemHandle failure when using
</span><br>
<span class="quotelev1">&gt;OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Received from Lev Givon on Thu, May 21, 2015 at 11:32:33AM EDT:
</span><br>
<span class="quotelev2">&gt;&gt; Received from Rolf vandeVaart on Wed, May 20, 2015 at 07:48:15AM EDT:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (snip)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I see that you mentioned you are starting 4 MPS daemons.  Are you
</span><br>
<span class="quotelev3">&gt;&gt; &gt; following the instructions here?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://cudamusing.blogspot.de/2013/07/enabling-cuda-multi-process-se">http://cudamusing.blogspot.de/2013/07/enabling-cuda-multi-process-se</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; rvice-mps.html
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes - also
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;<a href="https://docs.nvidia.com/deploy/pdf/CUDA_Multi_Process_Service_Overvie">https://docs.nvidia.com/deploy/pdf/CUDA_Multi_Process_Service_Overvie</a>
</span><br>
<span class="quotelev1">&gt;w
</span><br>
<span class="quotelev2">&gt;&gt; .pdf
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This relies on setting CUDA_VISIBLE_DEVICES which can cause problems
</span><br>
<span class="quotelev3">&gt;&gt; &gt; for CUDA IPC. Since you are using CUDA 7 there is no more need to
</span><br>
<span class="quotelev3">&gt;&gt; &gt; start multiple daemons. You simply leave CUDA_VISIBLE_DEVICES
</span><br>
<span class="quotelev3">&gt;&gt; &gt; untouched and start a single MPS control daemon which will handle all
</span><br>
<span class="quotelev1">&gt;GPUs.  Can you try that?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I assume that this means that only one CUDA_MPS_PIPE_DIRECTORY value
</span><br>
<span class="quotelev2">&gt;&gt; should be passed to all MPI processes.
</span><br>
There is no need to do anything with CUDA_MPS_PIPE_DIRECTORY with CUDA 7.  
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Several questions related to your comment above:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Should the MPI processes select and initialize the GPUs they respectively need
</span><br>
<span class="quotelev2">&gt;&gt;   to access as they normally would when MPS is not in use?
</span><br>
Yes.  
<br>
<p><span class="quotelev2">&gt;&gt; - Can CUDA_VISIBLE_DEVICES be used to control what GPUs are visible to MPS (and
</span><br>
<span class="quotelev2">&gt;&gt;   hence the client processes)? I ask because SLURM uses CUDA_VISIBLE_DEVICES to
</span><br>
<span class="quotelev2">&gt;&gt;   control GPU resource allocation, and I would like to run my program (and the
</span><br>
<span class="quotelev2">&gt;&gt;   MPS control daemon) on a cluster via SLURM.
</span><br>
Yes, I believe that is true.  
<br>
<p><span class="quotelev2">&gt;&gt; - Does the clash between setting CUDA_VISIBLE_DEVICES and CUDA IPC imply that
</span><br>
<span class="quotelev2">&gt;&gt;   MPS and CUDA IPC cannot reliably be used simultaneously in a multi-GPU setting
</span><br>
<span class="quotelev2">&gt;&gt;   with CUDA 6.5 even when one starts multiple MPS control daemons as  described
</span><br>
<span class="quotelev2">&gt;&gt;   in the aforementioned blog post?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Using a single control daemon with CUDA_VISIBLE_DEVICES unset appears to
</span><br>
<span class="quotelev1">&gt;solve the problem when IPC is enabled.
</span><br>
<span class="quotelev1">&gt;--
</span><br>
Glad to see this worked.  And you are correct that CUDA IPC will not work between devices if they are segregated by the use of CUDA_VISIBLE_DEVICES as we do with MPS in 6.5.
<br>
<p>Rolf
<br>
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
<li><strong>Next message:</strong> <a href="26903.php">Joshua Ladd: "[OMPI users] Fwd: job post"</a>
<li><strong>Previous message:</strong> <a href="26901.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>In reply to:</strong> <a href="26901.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
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
