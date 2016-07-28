<?
$subject_val = "Re: [OMPI users] tracking down what's causing a cuIpcOpenMemHandle error emitted by OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 10:56:33 2015" -->
<!-- isoreceived="20150903145633" -->
<!-- sent="Thu, 3 Sep 2015 14:56:30 +0000" -->
<!-- isosent="20150903145630" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tracking down what's causing a cuIpcOpenMemHandle error emitted by OpenMPI" -->
<!-- id="4dad48db39a84275898b6b79d7506cc2_at_HQMAIL102.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150902231523.GF5093_at_avicenna.ee.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] tracking down what's causing a cuIpcOpenMemHandle error emitted by OpenMPI<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-03 10:56:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27530.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Previous message:</strong> <a href="27528.php">Nick Papior: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>In reply to:</strong> <a href="27526.php">Lev Givon: "[OMPI users] tracking down what's causing a cuIpcOpenMemHandle error emitted by OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lev:
<br>
Can you run with --mca mpi_common_cuda_verbose 100 --mca mpool_rgpusm_verbose 100 and send me (rvandevaart_at_[hidden]) the output of that.
<br>
Thanks,
<br>
Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Lev Givon
</span><br>
<span class="quotelev1">&gt;Sent: Wednesday, September 02, 2015 7:15 PM
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] tracking down what's causing a cuIpcOpenMemHandle
</span><br>
<span class="quotelev1">&gt;error emitted by OpenMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I recently noticed the following error when running a Python program I'm
</span><br>
<span class="quotelev1">&gt;developing that repeatedly performs GPU-to-GPU data transfers via
</span><br>
<span class="quotelev1">&gt;OpenMPI:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The call to cuIpcGetMemHandle failed. This means the GPU RDMA protocol
</span><br>
<span class="quotelev1">&gt;cannot be used.
</span><br>
<span class="quotelev1">&gt;  cuIpcGetMemHandle return value:   1
</span><br>
<span class="quotelev1">&gt;  address: 0x602e75000
</span><br>
<span class="quotelev1">&gt;Check the cuda.h file for what the return value means. Perhaps a reboot of
</span><br>
<span class="quotelev1">&gt;the node will clear the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The system is running Ubuntu 14.04.3 and contains several Tesla S2050 GPUs.
</span><br>
<span class="quotelev1">&gt;I'm using the following software:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;- Linux kernel 3.19.0 (backported to Ubuntu 14.04.3 from 15.04)
</span><br>
<span class="quotelev1">&gt;- CUDA 7.0 (installed via NVIDIA's deb packages)
</span><br>
<span class="quotelev1">&gt;- NVIDIA kernel driver 346.82
</span><br>
<span class="quotelev1">&gt;- OpenMPI 1.10.0 (manually compiled with CUDA support)
</span><br>
<span class="quotelev1">&gt;- Python 2.7.10
</span><br>
<span class="quotelev1">&gt;- pycuda 2015.1.3 (manually compiled against CUDA 7.0)
</span><br>
<span class="quotelev1">&gt;- mpi4py (manually compiled git revision 1d8ab22)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;OpenMPI, Python, pycuda, and mpi4py are all locally installed in a conda
</span><br>
<span class="quotelev1">&gt;environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Judging from my program's logs, the error pops up during one of the
</span><br>
<span class="quotelev1">&gt;program's first few iterations. The error isn't fatal, however - the program
</span><br>
<span class="quotelev1">&gt;continues running to completion after the message appears.  Running
</span><br>
<span class="quotelev1">&gt;mpiexec with --mca plm_base_verbose 10 doesn't seem to produce any
</span><br>
<span class="quotelev1">&gt;additional debug info of use in tracking this down.  I did notice, though, that
</span><br>
<span class="quotelev1">&gt;there are undeleted cuda.shm.* files in /run/shm after the error message
</span><br>
<span class="quotelev1">&gt;appears and my program exits. Deleting the files does not prevent the error
</span><br>
<span class="quotelev1">&gt;from recurring if I subsequently rerun the program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Oddly, the above problem doesn't crop up when I run the same code on an
</span><br>
<span class="quotelev1">&gt;Ubuntu
</span><br>
<span class="quotelev1">&gt;14.04.3 system with the exact same software containing 2 non-Tesla GPUs
</span><br>
<span class="quotelev1">&gt;(specifically, a GTX 470 and 750). The error seems to have started occurring
</span><br>
<span class="quotelev1">&gt;over the past two weeks, but none of the changes I made to my code over
</span><br>
<span class="quotelev1">&gt;that time seem to be related to the problem (i.e., running an older revision
</span><br>
<span class="quotelev1">&gt;resulted in the same errors). I also tried running my code using older releases
</span><br>
<span class="quotelev1">&gt;of OpenMPI (e.g., 1.8.5) and mpi4py (e.g., from about 4 weeks ago), but the
</span><br>
<span class="quotelev1">&gt;error message still occurs. Both Ubuntu systems are 64-bit and have been
</span><br>
<span class="quotelev1">&gt;kept up to date with the latest package updates.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Any thoughts as to what could be causing the problem?
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
<span class="quotelev1">&gt;mpi.org/community/lists/users/2015/09/27526.php
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
<li><strong>Next message:</strong> <a href="27530.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Previous message:</strong> <a href="27528.php">Nick Papior: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>In reply to:</strong> <a href="27526.php">Lev Givon: "[OMPI users] tracking down what's causing a cuIpcOpenMemHandle error emitted by OpenMPI"</a>
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
