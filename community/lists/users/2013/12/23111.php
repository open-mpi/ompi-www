<?
$subject_val = "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  2 08:18:54 2013" -->
<!-- isoreceived="20131202131854" -->
<!-- sent="Mon, 2 Dec 2013 05:18:51 -0800" -->
<!-- isosent="20131202131851" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F36008562003_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5298BF8D.1060702_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-02 08:18:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23112.php">Peter Zaspel: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<li><strong>Previous message:</strong> <a href="23110.php">Raiden Hasegawa: "[OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/23108.php">Peter Zaspel: "[OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23112.php">Peter Zaspel: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<li><strong>Reply:</strong> <a href="23112.php">Peter Zaspel: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the report.  CUDA-aware Open MPI does not currently support doing reduction operations on GPU memory.
<br>
Is this a feature you would be interested in?
<br>
<p>Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Peter Zaspel
</span><br>
<span class="quotelev1">&gt;Sent: Friday, November 29, 2013 11:24 AM
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi users list,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I would like to report a bug in the CUDA-aware OpenMPI 1.7.3
</span><br>
<span class="quotelev1">&gt;implementation. I'm using CUDA 5.0 and Ubuntu 12.04.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Attached, you will find an example code file, to reproduce the bug.
</span><br>
<span class="quotelev1">&gt;The point is that MPI_Reduce with normal CPU memory fully works but the
</span><br>
<span class="quotelev1">&gt;use of GPU memory leads to a segfault. (GPU memory is used when defining
</span><br>
<span class="quotelev1">&gt;USE_GPU).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The segfault looks like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[peak64g-36:25527] *** Process received signal *** [peak64g-36:25527]
</span><br>
<span class="quotelev1">&gt;Signal: Segmentation fault (11) [peak64g-36:25527] Signal code: Invalid
</span><br>
<span class="quotelev1">&gt;permissions (2) [peak64g-36:25527] Failing at address: 0x600100200 [peak64g-
</span><br>
<span class="quotelev1">&gt;36:25527] [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x364a0)
</span><br>
<span class="quotelev1">&gt;[0x7ff2abdb24a0]
</span><br>
<span class="quotelev1">&gt;[peak64g-36:25527] [ 1]
</span><br>
<span class="quotelev1">&gt;/data/zaspel/openmpi-1.7.3_build/lib/libmpi.so.1(+0x7d410)
</span><br>
<span class="quotelev1">&gt;[0x7ff2ac4b9410] [peak64g-36:25527] [ 2]
</span><br>
<span class="quotelev1">&gt;/data/zaspel/openmpi-
</span><br>
<span class="quotelev1">&gt;1.7.3_build/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_reduce_intra_
</span><br>
<span class="quotelev1">&gt;basic_linear+0x371)
</span><br>
<span class="quotelev1">&gt;[0x7ff2a5987531]
</span><br>
<span class="quotelev1">&gt;[peak64g-36:25527] [ 3]
</span><br>
<span class="quotelev1">&gt;/data/zaspel/openmpi-1.7.3_build/lib/libmpi.so.1(MPI_Reduce+0x135)
</span><br>
<span class="quotelev1">&gt;[0x7ff2ac499d55]
</span><br>
<span class="quotelev1">&gt;[peak64g-36:25527] [ 4] /home/zaspel/testMPI/test_reduction() [0x400ca0]
</span><br>
<span class="quotelev1">&gt;[peak64g-36:25527] [ 5]
</span><br>
<span class="quotelev1">&gt;/lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed) [0x7ff2abd9d76d]
</span><br>
<span class="quotelev1">&gt;[peak64g-36:25527] [ 6] /home/zaspel/testMPI/test_reduction() [0x400af9]
</span><br>
<span class="quotelev1">&gt;[peak64g-36:25527] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;mpirun noticed that process rank 0 with PID 25527 on node peak64g-36 exited
</span><br>
<span class="quotelev1">&gt;on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Peter
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
<li><strong>Next message:</strong> <a href="23112.php">Peter Zaspel: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<li><strong>Previous message:</strong> <a href="23110.php">Raiden Hasegawa: "[OMPI users] configure: error: Could not run a simple Fortran program. Aborting."</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/23108.php">Peter Zaspel: "[OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23112.php">Peter Zaspel: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<li><strong>Reply:</strong> <a href="23112.php">Peter Zaspel: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
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
