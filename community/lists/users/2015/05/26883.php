<?
$subject_val = "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 20:28:48 2015" -->
<!-- isoreceived="20150520002848" -->
<!-- sent="Wed, 20 May 2015 00:28:46 +0000" -->
<!-- isosent="20150520002846" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service" -->
<!-- id="112319de0ec54f4cb73a716c06e91806_at_HQMAIL102.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150519222938.GH5298_at_avicenna.ee.columbia.edu" -->
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
<strong>Date:</strong> 2015-05-19 20:28:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26884.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>Previous message:</strong> <a href="26882.php">Khalid Hasanov: "[OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="26881.php">Lev Givon: "[OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26884.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>Reply:</strong> <a href="26884.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>Reply:</strong> <a href="26889.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am not sure why you are seeing this.  One thing that is clear is that you have found a bug in the error reporting.  The error message is a little garbled and I see a bug in what we are reporting. I will fix that.
<br>
<p>If possible, could you try running with --mca btl_smcuda_use_cuda_ipc 0.  My expectation is that you will not see any errors, but may lose some performance.
<br>
<p>What does your hardware configuration look like?  Can you send me output from &quot;nvidia-smi topo -m&quot;
<br>
<p>Thanks,
<br>
Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Lev Givon
</span><br>
<span class="quotelev1">&gt;Sent: Tuesday, May 19, 2015 6:30 PM
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI
</span><br>
<span class="quotelev1">&gt;1.8.5 with CUDA 7.0 and Multi-Process Service
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm encountering intermittent errors while trying to use the Multi-Process
</span><br>
<span class="quotelev1">&gt;Service with CUDA 7.0 for improving concurrent access to a Kepler K20Xm GPU
</span><br>
<span class="quotelev1">&gt;by multiple MPI processes that perform GPU-to-GPU communication with
</span><br>
<span class="quotelev1">&gt;each other (i.e., GPU pointers are passed to the MPI transmission primitives).
</span><br>
<span class="quotelev1">&gt;I'm using GitHub revision 41676a1 of mpi4py built against OpenMPI 1.8.5,
</span><br>
<span class="quotelev1">&gt;which is in turn built against CUDA 7.0. In my current configuration, I have 4
</span><br>
<span class="quotelev1">&gt;MPS server daemons running, each of which controls access to one of 4 GPUs;
</span><br>
<span class="quotelev1">&gt;the MPI processes spawned by my program are partitioned into 4 groups
</span><br>
<span class="quotelev1">&gt;(which might contain different numbers of processes) that each talk to a
</span><br>
<span class="quotelev1">&gt;separate daemon. For certain transmission patterns between these
</span><br>
<span class="quotelev1">&gt;processes, the program runs without any problems. For others (e.g., 16
</span><br>
<span class="quotelev1">&gt;processes partitioned into 4 groups), however, it dies with the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[node05:20562] Failed to register remote memory, rc=-1
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;The call to cuIpcOpenMemHandle failed. This is an unrecoverable error and
</span><br>
<span class="quotelev1">&gt;will cause the program to abort.
</span><br>
<span class="quotelev1">&gt;  cuIpcOpenMemHandle return value:   21199360
</span><br>
<span class="quotelev1">&gt;  address: 0x1
</span><br>
<span class="quotelev1">&gt;Check the cuda.h file for what the return value means. Perhaps a reboot of
</span><br>
<span class="quotelev1">&gt;the node will clear the problem.
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;[node05:20562] [[58522,2],4] ORTE_ERROR_LOG: Error in file
</span><br>
<span class="quotelev1">&gt;pml_ob1_recvreq.c at line 477
</span><br>
<span class="quotelev1">&gt;-------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;Child job 2 terminated normally, but 1 process returned a non-zero exit code..
</span><br>
<span class="quotelev1">&gt;Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt;-------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;[node05][[58522,2],5][btl_tcp_frag.c:142:mca_btl_tcp_frag_send]
</span><br>
<span class="quotelev1">&gt;mca_btl_tcp_frag_send: writev failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt;[node05:20564] Failed to register remote memory, rc=-1 [node05:20564]
</span><br>
<span class="quotelev1">&gt;[[58522,2],6] ORTE_ERROR_LOG: Error in file pml_ob1_recvreq.c at line 477
</span><br>
<span class="quotelev1">&gt;[node05:20566] Failed to register remote memory, rc=-1 [node05:20566]
</span><br>
<span class="quotelev1">&gt;[[58522,2],8] ORTE_ERROR_LOG: Error in file pml_ob1_recvreq.c at line 477
</span><br>
<span class="quotelev1">&gt;[node05:20567] Failed to register remote memory, rc=-1 [node05:20567]
</span><br>
<span class="quotelev1">&gt;[[58522,2],9] ORTE_ERROR_LOG: Error in file pml_ob1_recvreq.c at line 477
</span><br>
<span class="quotelev1">&gt;[node05][[58522,2],11][btl_tcp_frag.c:237:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev1">&gt;mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt;[node05:20569] Failed to register remote memory, rc=-1 [node05:20569]
</span><br>
<span class="quotelev1">&gt;[[58522,2],11] ORTE_ERROR_LOG: Error in file pml_ob1_recvreq.c at line 477
</span><br>
<span class="quotelev1">&gt;[node05:20571] Failed to register remote memory, rc=-1 [node05:20571]
</span><br>
<span class="quotelev1">&gt;[[58522,2],13] ORTE_ERROR_LOG: Error in file pml_ob1_recvreq.c at line 477
</span><br>
<span class="quotelev1">&gt;[node05:20572] Failed to register remote memory, rc=-1 [node05:20572]
</span><br>
<span class="quotelev1">&gt;[[58522,2],14] ORTE_ERROR_LOG: Error in file pml_ob1_recvreq.c at line 477
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;After the above error occurs, I notice that /dev/shm/ is littered with
</span><br>
<span class="quotelev1">&gt;cuda.shm.* files. I tried cleaning up /dev/shm before running my program,
</span><br>
<span class="quotelev1">&gt;but that doesn't seem to have any effect upon the problem. Rebooting the
</span><br>
<span class="quotelev1">&gt;machine also doesn't have any effect. I should also add that my program runs
</span><br>
<span class="quotelev1">&gt;without any error if the groups of MPI processes talk directly to the GPUs
</span><br>
<span class="quotelev1">&gt;instead of via MPS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Does anyone have any ideas as to what could be going on?
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;Lev Givon
</span><br>
<span class="quotelev1">&gt;Bionet Group | Neurokernel Project
</span><br>
<span class="quotelev1">&gt;<a href="http://www.columbia.edu/~lev/">http://www.columbia.edu/~lev/</a>
</span><br>
<span class="quotelev1">&gt;<a href="http://lebedov.github.io/">http://lebedov.github.io/</a>
</span><br>
<span class="quotelev1">&gt;<a href="http://neurokernel.github.io/">http://neurokernel.github.io/</a>
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
<span class="quotelev1">&gt;mpi.org/community/lists/users/2015/05/26881.php
</span><br>
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
<li><strong>Next message:</strong> <a href="26884.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>Previous message:</strong> <a href="26882.php">Khalid Hasanov: "[OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>In reply to:</strong> <a href="26881.php">Lev Givon: "[OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26884.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>Reply:</strong> <a href="26884.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
<li><strong>Reply:</strong> <a href="26889.php">Lev Givon: "Re: [OMPI users] cuIpcOpenMemHandle failure when using OpenMPI 1.8.5 with CUDA 7.0 and Multi-Process Service"</a>
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
