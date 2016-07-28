<?
$subject_val = "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 07:48:18 2015" -->
<!-- isoreceived="20150520114818" -->
<!-- sent="Wed, 20 May 2015 11:48:15 +0000" -->
<!-- isosent="20150520114815" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service" -->
<!-- id="389caf970df74da88fc8bd49c2183311_at_HQMAIL102.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150520022520.GG5298_at_avicenna.ee.columbia.edu" -->
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
<strong>Date:</strong> 2015-05-20 07:48:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26893.php">Gilles Gouaillardet: "Re: [OMPI users] 'The MPI_Comm_rank() function was called before MPI_INIT was invoked'"</a>
<li><strong>Previous message:</strong> <a href="26891.php">#MOHAMMAD ASIF KHAN#: "[OMPI users] 'The MPI_Comm_rank() function was called before MPI_INIT was invoked'"</a>
<li><strong>In reply to:</strong> <a href="26889.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26900.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>Reply:</strong> <a href="26900.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----Original Message-----
<br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Lev Givon
</span><br>
<span class="quotelev1">&gt;Sent: Tuesday, May 19, 2015 10:25 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] cuIpcOpenMemHandle failure when using
</span><br>
<span class="quotelev1">&gt;OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Received from Rolf vandeVaart on Tue, May 19, 2015 at 08:28:46PM EDT:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;-----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt; &gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Lev
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Givon
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Sent: Tuesday, May 19, 2015 6:30 PM
</span><br>
<span class="quotelev3">&gt;&gt; &gt;To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Subject: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt; &gt;1.8.5 with CUDA 7.0 and Multi-Process Service
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;I'm encountering intermittent errors while trying to use the
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Multi-Process Service with CUDA 7.0 for improving concurrent access
</span><br>
<span class="quotelev3">&gt;&gt; &gt;to a Kepler K20Xm GPU by multiple MPI processes that perform
</span><br>
<span class="quotelev3">&gt;&gt; &gt;GPU-to-GPU communication with each other (i.e., GPU pointers are
</span><br>
<span class="quotelev1">&gt;passed to the MPI transmission primitives).
</span><br>
<span class="quotelev3">&gt;&gt; &gt;I'm using GitHub revision 41676a1 of mpi4py built against OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt; &gt;1.8.5, which is in turn built against CUDA 7.0. In my current
</span><br>
<span class="quotelev3">&gt;&gt; &gt;configuration, I have 4 MPS server daemons running, each of which
</span><br>
<span class="quotelev3">&gt;&gt; &gt;controls access to one of 4 GPUs; the MPI processes spawned by my
</span><br>
<span class="quotelev3">&gt;&gt; &gt;program are partitioned into 4 groups (which might contain different
</span><br>
<span class="quotelev3">&gt;&gt; &gt;numbers of processes) that each talk to a separate daemon. For
</span><br>
<span class="quotelev3">&gt;&gt; &gt;certain transmission patterns between these processes, the program
</span><br>
<span class="quotelev3">&gt;&gt; &gt;runs without any problems. For others (e.g., 16 processes partitioned into
</span><br>
<span class="quotelev1">&gt;4 groups), however, it dies with the following error:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;[node05:20562] Failed to register remote memory, rc=-1
</span><br>
<span class="quotelev3">&gt;&gt; &gt;---------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt; &gt;----- The call to cuIpcOpenMemHandle failed. This is an unrecoverable
</span><br>
<span class="quotelev3">&gt;&gt; &gt;error and will cause the program to abort.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  cuIpcOpenMemHandle return value:   21199360
</span><br>
<span class="quotelev3">&gt;&gt; &gt;  address: 0x1
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Check the cuda.h file for what the return value means. Perhaps a
</span><br>
<span class="quotelev3">&gt;&gt; &gt;reboot of the node will clear the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(snip)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;After the above error occurs, I notice that /dev/shm/ is littered
</span><br>
<span class="quotelev3">&gt;&gt; &gt;with
</span><br>
<span class="quotelev3">&gt;&gt; &gt;cuda.shm.* files. I tried cleaning up /dev/shm before running my
</span><br>
<span class="quotelev3">&gt;&gt; &gt;program, but that doesn't seem to have any effect upon the problem.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Rebooting the machine also doesn't have any effect. I should also add
</span><br>
<span class="quotelev3">&gt;&gt; &gt;that my program runs without any error if the groups of MPI processes
</span><br>
<span class="quotelev3">&gt;&gt; &gt;talk directly to the GPUs instead of via MPS.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Does anyone have any ideas as to what could be going on?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not sure why you are seeing this.  One thing that is clear is
</span><br>
<span class="quotelev2">&gt;&gt; that you have found a bug in the error reporting.  The error message
</span><br>
<span class="quotelev2">&gt;&gt; is a little garbled and I see a bug in what we are reporting. I will fix that.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If possible, could you try running with --mca btl_smcuda_use_cuda_ipc
</span><br>
<span class="quotelev2">&gt;&gt; 0.  My expectation is that you will not see any errors, but may lose
</span><br>
<span class="quotelev2">&gt;&gt; some performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The error does indeed go away when IPC is disabled, although I do want to
</span><br>
<span class="quotelev1">&gt;avoid degrading the performance of data transfers between GPU memory
</span><br>
<span class="quotelev1">&gt;locations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What does your hardware configuration look like?  Can you send me
</span><br>
<span class="quotelev2">&gt;&gt; output from &quot;nvidia-smi topo -m&quot;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<p>I see that you mentioned you are starting 4 MPS daemons.  Are you following the instructions here?
<br>
<p><a href="http://cudamusing.blogspot.de/2013/07/enabling-cuda-multi-process-service-mps.html">http://cudamusing.blogspot.de/2013/07/enabling-cuda-multi-process-service-mps.html</a> 
<br>
<p>This relies on setting CUDA_VISIBLE_DEVICES which can cause problems for CUDA IPC. Since you are using CUDA 7 there is no more need to start multiple daemons. You simply leave CUDA_VISIBLE_DEVICES untouched and start a single MPS control daemon which will handle all GPUs.  Can you try that?  Because of this question, we realized we need to update our documentation as well.
<br>
<p>Thanks,
<br>
Rolf
<br>
<p><p>-----------------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="26893.php">Gilles Gouaillardet: "Re: [OMPI users] 'The MPI_Comm_rank() function was called before MPI_INIT was invoked'"</a>
<li><strong>Previous message:</strong> <a href="26891.php">#MOHAMMAD ASIF KHAN#: "[OMPI users] 'The MPI_Comm_rank() function was called before MPI_INIT was invoked'"</a>
<li><strong>In reply to:</strong> <a href="26889.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26900.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>Reply:</strong> <a href="26900.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
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
