<?
$subject_val = "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 09:37:08 2015" -->
<!-- isoreceived="20150330133708" -->
<!-- sent="Mon, 30 Mar 2015 13:36:48 +0000" -->
<!-- isosent="20150330133648" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs" -->
<!-- id="30c8638ff6764033a9c3c57fc5b817ef_at_HQMAIL102.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150330021103.GG8485_at_avicenna.ee.columbia.edu" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-30 09:36:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26579.php">Nysal Jan K A: "Re: [OMPI users] [EXTERNAL] Re: Errors on POWER8 Ubuntu 14.04u2"</a>
<li><strong>Previous message:</strong> <a href="26577.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Connection problem on Linux cluster"</a>
<li><strong>In reply to:</strong> <a href="26573.php">Lev Givon: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26581.php">Rolf vandeVaart: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<li><strong>Reply:</strong> <a href="26581.php">Rolf vandeVaart: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Lev Givon
</span><br>
<span class="quotelev1">&gt;Sent: Sunday, March 29, 2015 10:11 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] segfault during MPI_Isend when transmitting GPU
</span><br>
<span class="quotelev1">&gt;arrays between multiple GPUs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Received from Rolf vandeVaart on Fri, Mar 27, 2015 at 04:09:58PM EDT:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;-----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt; &gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Lev
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Givon
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Sent: Friday, March 27, 2015 3:47 PM
</span><br>
<span class="quotelev3">&gt;&gt; &gt;To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Subject: [OMPI users] segfault during MPI_Isend when transmitting GPU
</span><br>
<span class="quotelev3">&gt;&gt; &gt;arrays between multiple GPUs
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;I'm using PyCUDA 2014.1 and mpi4py (git commit 3746586, uploaded
</span><br>
<span class="quotelev3">&gt;&gt; &gt;today) built against OpenMPI 1.8.4 with CUDA support activated to
</span><br>
<span class="quotelev3">&gt;&gt; &gt;asynchronously send GPU arrays between multiple Tesla GPUs (Fermi
</span><br>
<span class="quotelev3">&gt;&gt; &gt;generation). Each MPI process is associated with a single GPU; the
</span><br>
<span class="quotelev3">&gt;&gt; &gt;process has a run loop that starts several Isends to transmit the
</span><br>
<span class="quotelev3">&gt;&gt; &gt;contents of GPU arrays to destination processes and several Irecvs to
</span><br>
<span class="quotelev3">&gt;&gt; &gt;receive data from source processes into GPU arrays on the process'
</span><br>
<span class="quotelev3">&gt;&gt; &gt;GPU. Some of the sends/recvs use one tag, while the remainder use a
</span><br>
<span class="quotelev3">&gt;&gt; &gt;second tag. A single Waitall invocation is used to wait for all of
</span><br>
<span class="quotelev3">&gt;&gt; &gt;these sends and receives to complete before the next iteration of the loop
</span><br>
<span class="quotelev1">&gt;can commence. All GPU arrays are preallocated before the run loop starts.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;While this pattern works most of the time, it sometimes fails with a
</span><br>
<span class="quotelev3">&gt;&gt; &gt;segfault that appears to occur during an Isend:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(snip)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;Any ideas as to what could be causing this problem?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;I'm using CUDA 6.5-14 with NVIDIA drivers 340.29 on Ubuntu 14.04.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Lev:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not sure what is happening here but there are a few things we can
</span><br>
<span class="quotelev2">&gt;&gt; do to try and narrow things done.
</span><br>
<span class="quotelev2">&gt;&gt; 1. If you run with --mca btl_smcuda_use_cuda_ipc 0 then I assume this error
</span><br>
<span class="quotelev2">&gt;&gt;    will go away?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Yes - that appears to be the case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Do you know if when you see this error it happens on the first pass
</span><br>
<span class="quotelev1">&gt;through
</span><br>
<span class="quotelev2">&gt;&gt;    your communications?  That is, you mention how there are multiple
</span><br>
<span class="quotelev2">&gt;&gt;    iterations through the loop and I am wondering when you see failures if it
</span><br>
<span class="quotelev2">&gt;&gt;    is the first pass through the loop.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;When the segfault occurs, it appears to always happen during the second
</span><br>
<span class="quotelev1">&gt;iteration of the loop, i.e., at least one slew of Isends (and presumably Irecvs)
</span><br>
<span class="quotelev1">&gt;is successfully performed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Some more details regarding the Isends: each process starts two Isends for
</span><br>
<span class="quotelev1">&gt;each destination process to which it transmits data. The Isends use two
</span><br>
<span class="quotelev1">&gt;different tags, respectively; one is passed None (by design), while the other is
</span><br>
<span class="quotelev1">&gt;passed the pointer to a GPU array with nonzero length. The segfault appears
</span><br>
<span class="quotelev1">&gt;to occur during the latter Isend.
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<p>Lev, can you send me the test program off list.  I may try to create a C version of the test and see if I can reproduce the problem.
<br>
Not sure at this point what is happening.
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
<li><strong>Next message:</strong> <a href="26579.php">Nysal Jan K A: "Re: [OMPI users] [EXTERNAL] Re: Errors on POWER8 Ubuntu 14.04u2"</a>
<li><strong>Previous message:</strong> <a href="26577.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Connection problem on Linux cluster"</a>
<li><strong>In reply to:</strong> <a href="26573.php">Lev Givon: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26581.php">Rolf vandeVaart: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<li><strong>Reply:</strong> <a href="26581.php">Rolf vandeVaart: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
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
