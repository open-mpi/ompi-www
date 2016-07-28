<?
$subject_val = "[OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 15:47:02 2015" -->
<!-- isoreceived="20150327194702" -->
<!-- sent="Fri, 27 Mar 2015 15:46:58 -0400" -->
<!-- isosent="20150327194658" -->
<!-- name="Lev Givon" -->
<!-- email="lev_at_[hidden]" -->
<!-- subject="[OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs" -->
<!-- id="20150327194658.GN4618_at_avicenna.ee.columbia.edu" -->
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
<strong>Subject:</strong> [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs<br>
<strong>From:</strong> Lev Givon (<em>lev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-27 15:46:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26554.php">Rolf vandeVaart: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<li><strong>Previous message:</strong> <a href="26552.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL] Re:  Errors on POWER8 Ubuntu 14.04u2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26554.php">Rolf vandeVaart: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<li><strong>Reply:</strong> <a href="26554.php">Rolf vandeVaart: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm using PyCUDA 2014.1 and mpi4py (git commit 3746586, uploaded today) built
<br>
against OpenMPI 1.8.4 with CUDA support activated to asynchronously send GPU
<br>
arrays between multiple Tesla GPUs (Fermi generation). Each MPI process is
<br>
associated with a single GPU; the process has a run loop that starts several
<br>
Isends to transmit the contents of GPU arrays to destination processes and
<br>
several Irecvs to receive data from source processes into GPU arrays on the
<br>
process' GPU. Some of the sends/recvs use one tag, while the remainder use a
<br>
second tag. A single Waitall invocation is used to wait for all of these sends
<br>
and receives to complete before the next iteration of the loop can commence. All
<br>
GPU arrays are preallocated before the run loop starts. While this pattern works
<br>
most of the time, it sometimes fails with a segfault that appears to occur
<br>
during an Isend:
<br>
<p>[myhost:05471] *** Process received signal ***
<br>
[myhost:05471] Signal: Segmentation fault (11)
<br>
[myhost:05471] Signal code:  (128)
<br>
[myhost:05471] Failing at address: (nil)
<br>
[myhost:05471] [ 0]
<br>
/lib/x86_64-linux-gnu/libpthread.so.0(+0x10340)[0x2ac2bb176340]
<br>
[myhost:05471] [ 1]
<br>
/usr/lib/x86_64-linux-gnu/libcuda.so.1(+0x1f6b18)[0x2ac2c48bfb18]
<br>
[myhost:05471] [ 2]
<br>
/usr/lib/x86_64-linux-gnu/libcuda.so.1(+0x16dcc3)[0x2ac2c4836cc3]
<br>
[myhost:05471] [ 3]
<br>
/usr/lib/x86_64-linux-gnu/libcuda.so.1(cuIpcGetEventHandle+0x5d)[0x2ac2c480bccd]
<br>
[myhost:05471] [ 4]
<br>
/opt/openmpi-1.8.4/lib/libmpi.so.1(mca_common_cuda_construct_event_and_handle+0x27)[0x2ac2c27d3087]
<br>
[myhost:05471] [ 5]
<br>
/opt/openmpi-1.8.4/lib/libmpi.so.1(ompi_free_list_grow+0x199)[0x2ac2c277b8e9]
<br>
[myhost:05471] [ 6]
<br>
/opt/openmpi-1.8.4/lib/libmpi.so.1(mca_mpool_gpusm_register+0xf4)[0x2ac2c28c9fd4]
<br>
[myhost:05471] [ 7]
<br>
/opt/openmpi-1.8.4/lib/libmpi.so.1(mca_pml_ob1_rdma_cuda_btls+0xcd)[0x2ac2c28f8afd]
<br>
[myhost:05471] [ 8]
<br>
/opt/openmpi-1.8.4/lib/libmpi.so.1(mca_pml_ob1_send_request_start_cuda+0xbf)[0x2ac2c28f8d5f]
<br>
[myhost:05471] [ 9]
<br>
/opt/openmpi-1.8.4/lib/libmpi.so.1(mca_pml_ob1_isend+0x60e)[0x2ac2c28eb6fe]
<br>
[myhost:05471] [10]
<br>
/opt/openmpi-1.8.4/lib/libmpi.so.1(MPI_Isend+0x137)[0x2ac2c27b7cc7]
<br>
[myhost:05471] [11]
<br>
/home/lev/Work/miniconda/envs/MYENV/lib/python2.7/site-packages/mpi4py/MPI.so(+0xd3bb2)[0x2ac2c24b3bb2]
<br>
(Python-related debug lines omitted.)
<br>
<p>Any ideas as to what could be causing this problem?
<br>
<p>I'm using CUDA 6.5-14 with NVIDIA drivers 340.29 on Ubuntu 14.04.
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
<li><strong>Next message:</strong> <a href="26554.php">Rolf vandeVaart: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<li><strong>Previous message:</strong> <a href="26552.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL] Re:  Errors on POWER8 Ubuntu 14.04u2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26554.php">Rolf vandeVaart: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<li><strong>Reply:</strong> <a href="26554.php">Rolf vandeVaart: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
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
