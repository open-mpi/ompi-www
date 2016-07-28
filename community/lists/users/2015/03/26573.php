<?
$subject_val = "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 29 22:11:08 2015" -->
<!-- isoreceived="20150330021108" -->
<!-- sent="Sun, 29 Mar 2015 22:11:03 -0400" -->
<!-- isosent="20150330021103" -->
<!-- name="Lev Givon" -->
<!-- email="lev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs" -->
<!-- id="20150330021103.GG8485_at_avicenna.ee.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="d486ab32d6e24163867d81506fbea6b6_at_HQMAIL102.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs<br>
<strong>From:</strong> Lev Givon (<em>lev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-29 22:11:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26574.php">Subhra Mazumdar: "[OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Previous message:</strong> <a href="26572.php">Ralph Castain: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<li><strong>In reply to:</strong> <a href="26554.php">Rolf vandeVaart: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26578.php">Rolf vandeVaart: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<li><strong>Reply:</strong> <a href="26578.php">Rolf vandeVaart: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Received from Rolf vandeVaart on Fri, Mar 27, 2015 at 04:09:58PM EDT:
<br>
<span class="quotelev2">&gt; &gt;-----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Lev Givon
</span><br>
<span class="quotelev2">&gt; &gt;Sent: Friday, March 27, 2015 3:47 PM
</span><br>
<span class="quotelev2">&gt; &gt;To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;Subject: [OMPI users] segfault during MPI_Isend when transmitting GPU
</span><br>
<span class="quotelev2">&gt; &gt;arrays between multiple GPUs
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I'm using PyCUDA 2014.1 and mpi4py (git commit 3746586, uploaded today)
</span><br>
<span class="quotelev2">&gt; &gt;built against OpenMPI 1.8.4 with CUDA support activated to asynchronously
</span><br>
<span class="quotelev2">&gt; &gt;send GPU arrays between multiple Tesla GPUs (Fermi generation). Each MPI
</span><br>
<span class="quotelev2">&gt; &gt;process is associated with a single GPU; the process has a run loop that starts
</span><br>
<span class="quotelev2">&gt; &gt;several Isends to transmit the contents of GPU arrays to destination
</span><br>
<span class="quotelev2">&gt; &gt;processes and several Irecvs to receive data from source processes into GPU
</span><br>
<span class="quotelev2">&gt; &gt;arrays on the process' GPU. Some of the sends/recvs use one tag, while the
</span><br>
<span class="quotelev2">&gt; &gt;remainder use a second tag. A single Waitall invocation is used to wait for all of
</span><br>
<span class="quotelev2">&gt; &gt;these sends and receives to complete before the next iteration of the loop
</span><br>
<span class="quotelev2">&gt; &gt;can commence. All GPU arrays are preallocated before the run loop starts.
</span><br>
<span class="quotelev2">&gt; &gt;While this pattern works most of the time, it sometimes fails with a segfault
</span><br>
<span class="quotelev2">&gt; &gt;that appears to occur during an Isend:
</span><br>
<p>(snip)
<br>
<p><span class="quotelev2">&gt; &gt;Any ideas as to what could be causing this problem?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I'm using CUDA 6.5-14 with NVIDIA drivers 340.29 on Ubuntu 14.04.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Lev:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not sure what is happening here but there are a few things we can do to
</span><br>
<span class="quotelev1">&gt; try and narrow things done.
</span><br>
<span class="quotelev1">&gt; 1. If you run with --mca btl_smcuda_use_cuda_ipc 0 then I assume this error
</span><br>
<span class="quotelev1">&gt;    will go away?
</span><br>
<p>Yes - that appears to be the case.
<br>
<p><span class="quotelev1">&gt; 2. Do you know if when you see this error it happens on the first pass through
</span><br>
<span class="quotelev1">&gt;    your communications?  That is, you mention how there are multiple
</span><br>
<span class="quotelev1">&gt;    iterations through the loop and I am wondering when you see failures if it
</span><br>
<span class="quotelev1">&gt;    is the first pass through the loop.
</span><br>
<p>When the segfault occurs, it appears to always happen during the second
<br>
iteration of the loop, i.e., at least one slew of Isends (and presumably Irecvs)
<br>
is successfully performed.
<br>
<p>Some more details regarding the Isends: each process starts two Isends for each
<br>
destination process to which it transmits data. The Isends use two different
<br>
tags, respectively; one is passed None (by design), while the other is passed
<br>
the pointer to a GPU array with nonzero length. The segfault appears to occur
<br>
during the latter Isend.
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
<li><strong>Next message:</strong> <a href="26574.php">Subhra Mazumdar: "[OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Previous message:</strong> <a href="26572.php">Ralph Castain: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<li><strong>In reply to:</strong> <a href="26554.php">Rolf vandeVaart: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26578.php">Rolf vandeVaart: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<li><strong>Reply:</strong> <a href="26578.php">Rolf vandeVaart: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
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
