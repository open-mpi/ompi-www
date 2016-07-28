<?
$subject_val = "[OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 29 11:23:43 2013" -->
<!-- isoreceived="20131129162343" -->
<!-- sent="Fri, 29 Nov 2013 17:23:41 +0100" -->
<!-- isosent="20131129162341" -->
<!-- name="Peter Zaspel" -->
<!-- email="zaspel_at_[hidden]" -->
<!-- subject="[OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI" -->
<!-- id="5298BF8D.1060702_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI<br>
<strong>From:</strong> Peter Zaspel (<em>zaspel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-29 11:23:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23109.php">Jean-Francois St-Pierre: "Re: [OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)"</a>
<li><strong>Previous message:</strong> <a href="23107.php">Maxime Boissonneault: "Re: [OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23111.php">Rolf vandeVaart: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23111.php">Rolf vandeVaart: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi users list,
<br>
<p>I would like to report a bug in the CUDA-aware OpenMPI 1.7.3
<br>
implementation. I'm using CUDA 5.0 and Ubuntu 12.04.
<br>
<p>Attached, you will find an example code file, to reproduce the bug.
<br>
The point is that MPI_Reduce with normal CPU memory fully works but the
<br>
use of GPU memory leads to a segfault. (GPU memory is used when defining
<br>
USE_GPU).
<br>
<p>The segfault looks like this:
<br>
<p>[peak64g-36:25527] *** Process received signal ***
<br>
[peak64g-36:25527] Signal: Segmentation fault (11)
<br>
[peak64g-36:25527] Signal code: Invalid permissions (2)
<br>
[peak64g-36:25527] Failing at address: 0x600100200
<br>
[peak64g-36:25527] [ 0] /lib/x86_64-linux-gnu/libc.so.6(+0x364a0)
<br>
[0x7ff2abdb24a0]
<br>
[peak64g-36:25527] [ 1]
<br>
/data/zaspel/openmpi-1.7.3_build/lib/libmpi.so.1(+0x7d410) [0x7ff2ac4b9410]
<br>
[peak64g-36:25527] [ 2]
<br>
/data/zaspel/openmpi-1.7.3_build/lib/openmpi/mca_coll_tuned.so(ompi_coll_tuned_reduce_intra_basic_linear+0x371)
<br>
[0x7ff2a5987531]
<br>
[peak64g-36:25527] [ 3]
<br>
/data/zaspel/openmpi-1.7.3_build/lib/libmpi.so.1(MPI_Reduce+0x135)
<br>
[0x7ff2ac499d55]
<br>
[peak64g-36:25527] [ 4] /home/zaspel/testMPI/test_reduction() [0x400ca0]
<br>
[peak64g-36:25527] [ 5]
<br>
/lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xed) [0x7ff2abd9d76d]
<br>
[peak64g-36:25527] [ 6] /home/zaspel/testMPI/test_reduction() [0x400af9]
<br>
[peak64g-36:25527] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 25527 on node peak64g-36
<br>
exited on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>Best regards,
<br>
<p>Peter
<br>
<p>
<br><hr>
<ul>
<li>application/cu-seeme attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23108/test_reduction.cu">test_reduction.cu</a>
</ul>
<!-- attachment="test_reduction.cu" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23109.php">Jean-Francois St-Pierre: "Re: [OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)"</a>
<li><strong>Previous message:</strong> <a href="23107.php">Maxime Boissonneault: "Re: [OMPI users] MPI_THREAD_MULTIPLE causes deadlock in simple MPI_Barrier case (ompi 1.6.5 and 1.7.3)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23111.php">Rolf vandeVaart: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/12/23111.php">Rolf vandeVaart: "Re: [OMPI users] Bug in MPI_REDUCE in CUDA-aware MPI"</a>
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
