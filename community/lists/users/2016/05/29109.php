<?
$subject_val = "Re: [OMPI users] Multiple Non-blocking Send/Recv calls with MPI_Waitall fails when CUDA IPC is in use";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 04:05:49 2016" -->
<!-- isoreceived="20160506080549" -->
<!-- sent="Fri, 6 May 2016 08:05:45 +0000" -->
<!-- isosent="20160506080545" -->
<!-- name="Jiri Kraus" -->
<!-- email="jkraus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Multiple Non-blocking Send/Recv calls with MPI_Waitall fails when CUDA IPC is in use" -->
<!-- id="e2f9ffa4cdde42b9ae7b133b3498c238_at_UKMAIL102.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Multiple Non-blocking Send/Recv calls with MPI_Waitall fails when CUDA IPC is in use" -->
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
<strong>Subject:</strong> Re: [OMPI users] Multiple Non-blocking Send/Recv calls with MPI_Waitall fails when CUDA IPC is in use<br>
<strong>From:</strong> Jiri Kraus (<em>jkraus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-06 04:05:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29110.php">Gilles Gouaillardet: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<li><strong>Previous message:</strong> <a href="29108.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Maybe in reply to:</strong> <a href="29084.php">Iman Faraji: "[OMPI users] Multiple Non-blocking Send/Recv calls with MPI_Waitall fails when CUDA IPC is in use"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Iman,
<br>
<p>How are you handling GPU affinity? Are you using CUDA_VISIBLE_DEVICES for that? If yes can you try using cudaSetDevice in your application instead? 
<br>
Also when multiple processes are assigned to a single GPU are you using MPS and what GPUs are your running this on?
<br>
<p>Hope this Helps
<br>
<p>Jiri
<br>
<p><span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Wed, 4 May 2016 15:55:20 -0400
</span><br>
<span class="quotelev1">&gt; From: Iman Faraji &lt;i.faraji_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] Multiple Non-blocking Send/Recv calls with
</span><br>
<span class="quotelev1">&gt; 	MPI_Waitall fails when CUDA IPC is in use
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; 	&lt;CADOv2j3_5Exaavj0LUoLeavbZcCYXLTsbnZdLwqGYty2TJd_bQ_at_mai
</span><br>
<span class="quotelev1">&gt; l.gmail.com&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;utf-8&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi there,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using multiple MPI non-blocking send receives on the GPU buffer
</span><br>
<span class="quotelev1">&gt; followed by a waitall at the end; I also repeat this process multiple times.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The MPI version that I am using 1.10.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When multiple processes are assigned to a single GPU (or when CUDA IPC is
</span><br>
<span class="quotelev1">&gt; used), I get the following error at the beginning
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The call to cuIpcGetEventHandle failed. This is a unrecoverable error and will
</span><br>
<span class="quotelev1">&gt; cause the program to abort.
</span><br>
<span class="quotelev1">&gt;   cuIpcGetEventHandle return value:   1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and this at the end of my benchmark
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The call to cuEventDestory failed. This is a unrecoverable error and will cause
</span><br>
<span class="quotelev1">&gt; the program to abort.
</span><br>
<span class="quotelev1">&gt;   cuEventDestory return value:   400
</span><br>
<span class="quotelev1">&gt; Check the cuda.h file for what the return value means.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *Note1: *
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This error doesn't appear if only one iteration of the non-blocking
</span><br>
<span class="quotelev1">&gt; send/receive call is used (i.e., using MPI_Waitall only once )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This error doesn't appear if multiple iterations are used by MPI_Waitall is not
</span><br>
<span class="quotelev1">&gt; included.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *Note 2:*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This error doesn't exist if the buffer is is allocated on the host.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *Note 3:*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This error doesn't exist if cuda_ipc is disabled or OMPI version 1.8.8 is used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd appreciate if you let me know what causes this issue and how it can be
</span><br>
<span class="quotelev1">&gt; resolved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Iman
</span><br>
<p>NVIDIA GmbH, Wuerselen, Germany, Amtsgericht Aachen, HRB 8361
<br>
Managing Director: Karen Theresa Burns
<br>
<p>-----------------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="29110.php">Gilles Gouaillardet: "Re: [OMPI users] [open-mpi/ompi] COMM_SPAWN broken on Solaris/v1.10 (#1569)"</a>
<li><strong>Previous message:</strong> <a href="29108.php">Giacomo Rossi: "Re: [OMPI users] Segmentation Fault (Core Dumped) on mpif90 -v"</a>
<li><strong>Maybe in reply to:</strong> <a href="29084.php">Iman Faraji: "[OMPI users] Multiple Non-blocking Send/Recv calls with MPI_Waitall fails when CUDA IPC is in use"</a>
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
