<?
$subject_val = "[OMPI users] tracking down what's causing a cuIpcOpenMemHandle error emitted by OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  2 19:15:27 2015" -->
<!-- isoreceived="20150902231527" -->
<!-- sent="Wed, 2 Sep 2015 19:15:23 -0400" -->
<!-- isosent="20150902231523" -->
<!-- name="Lev Givon" -->
<!-- email="lev_at_[hidden]" -->
<!-- subject="[OMPI users] tracking down what's causing a cuIpcOpenMemHandle error emitted by OpenMPI" -->
<!-- id="20150902231523.GF5093_at_avicenna.ee.columbia.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] tracking down what's causing a cuIpcOpenMemHandle error emitted by OpenMPI<br>
<strong>From:</strong> Lev Givon (<em>lev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-02 19:15:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27527.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Previous message:</strong> <a href="27525.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27529.php">Rolf vandeVaart: "Re: [OMPI users] tracking down what's causing a cuIpcOpenMemHandle error emitted by OpenMPI"</a>
<li><strong>Reply:</strong> <a href="27529.php">Rolf vandeVaart: "Re: [OMPI users] tracking down what's causing a cuIpcOpenMemHandle error emitted by OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I recently noticed the following error when running a Python program I'm
<br>
developing that repeatedly performs GPU-to-GPU data transfers via OpenMPI:
<br>
<p>The call to cuIpcGetMemHandle failed. This means the GPU RDMA protocol
<br>
cannot be used.
<br>
&nbsp;&nbsp;cuIpcGetMemHandle return value:   1
<br>
&nbsp;&nbsp;address: 0x602e75000
<br>
Check the cuda.h file for what the return value means. Perhaps a reboot
<br>
of the node will clear the problem.
<br>
<p>The system is running Ubuntu 14.04.3 and contains several Tesla S2050 GPUs. I'm
<br>
using the following software:
<br>
<p>- Linux kernel 3.19.0 (backported to Ubuntu 14.04.3 from 15.04)
<br>
- CUDA 7.0 (installed via NVIDIA's deb packages)
<br>
- NVIDIA kernel driver 346.82
<br>
- OpenMPI 1.10.0 (manually compiled with CUDA support) 
<br>
- Python 2.7.10
<br>
- pycuda 2015.1.3 (manually compiled against CUDA 7.0)
<br>
- mpi4py (manually compiled git revision 1d8ab22)
<br>
<p>OpenMPI, Python, pycuda, and mpi4py are all locally installed in a conda
<br>
environment.
<br>
<p>Judging from my program's logs, the error pops up during one of the program's
<br>
first few iterations. The error isn't fatal, however - the program continues
<br>
running to completion after the message appears.  Running mpiexec with --mca
<br>
plm_base_verbose 10 doesn't seem to produce any additional debug info of use in
<br>
tracking this down.  I did notice, though, that there are undeleted cuda.shm.*
<br>
files in /run/shm after the error message appears and my program
<br>
exits. Deleting the files does not prevent the error from recurring if I
<br>
subsequently rerun the program.
<br>
<p>Oddly, the above problem doesn't crop up when I run the same code on an Ubuntu
<br>
14.04.3 system with the exact same software containing 2 non-Tesla GPUs
<br>
(specifically, a GTX 470 and 750). The error seems to have started occurring
<br>
over the past two weeks, but none of the changes I made to my code over that
<br>
time seem to be related to the problem (i.e., running an older revision resulted
<br>
in the same errors). I also tried running my code using older releases of
<br>
OpenMPI (e.g., 1.8.5) and mpi4py (e.g., from about 4 weeks ago), but the error
<br>
message still occurs. Both Ubuntu systems are 64-bit and have been kept up to
<br>
date with the latest package updates.
<br>
<p>Any thoughts as to what could be causing the problem? 
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
<li><strong>Next message:</strong> <a href="27527.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Previous message:</strong> <a href="27525.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27529.php">Rolf vandeVaart: "Re: [OMPI users] tracking down what's causing a cuIpcOpenMemHandle error emitted by OpenMPI"</a>
<li><strong>Reply:</strong> <a href="27529.php">Rolf vandeVaart: "Re: [OMPI users] tracking down what's causing a cuIpcOpenMemHandle error emitted by OpenMPI"</a>
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
