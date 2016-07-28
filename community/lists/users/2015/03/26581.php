<?
$subject_val = "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 30 19:28:40 2015" -->
<!-- isoreceived="20150330232840" -->
<!-- sent="Mon, 30 Mar 2015 23:28:39 +0000" -->
<!-- isosent="20150330232839" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs" -->
<!-- id="3464c451220d4d79960da8fbc1f40924_at_HQMAIL102.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="30c8638ff6764033a9c3c57fc5b817ef_at_HQMAIL102.nvidia.com" -->
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
<strong>Date:</strong> 2015-03-30 19:28:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26582.php">Ralph Castain: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<li><strong>Previous message:</strong> <a href="26580.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>In reply to:</strong> <a href="26578.php">Rolf vandeVaart: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Rolf
</span><br>
<span class="quotelev1">&gt;vandeVaart
</span><br>
<span class="quotelev1">&gt;Sent: Monday, March 30, 2015 9:37 AM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Users
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI users] segfault during MPI_Isend when transmitting GPU
</span><br>
<span class="quotelev1">&gt;arrays between multiple GPUs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;-----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Lev Givon
</span><br>
<span class="quotelev2">&gt;&gt;Sent: Sunday, March 29, 2015 10:11 PM
</span><br>
<span class="quotelev2">&gt;&gt;To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt;Subject: Re: [OMPI users] segfault during MPI_Isend when transmitting
</span><br>
<span class="quotelev2">&gt;&gt;GPU arrays between multiple GPUs
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Received from Rolf vandeVaart on Fri, Mar 27, 2015 at 04:09:58PM EDT:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;-----Original Message-----
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Lev
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;Givon
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;Sent: Friday, March 27, 2015 3:47 PM
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;To: users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;Subject: [OMPI users] segfault during MPI_Isend when transmitting
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;GPU arrays between multiple GPUs
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;I'm using PyCUDA 2014.1 and mpi4py (git commit 3746586, uploaded
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;today) built against OpenMPI 1.8.4 with CUDA support activated to
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;asynchronously send GPU arrays between multiple Tesla GPUs (Fermi
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;generation). Each MPI process is associated with a single GPU; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;process has a run loop that starts several Isends to transmit the
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;contents of GPU arrays to destination processes and several Irecvs
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;to receive data from source processes into GPU arrays on the process'
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;GPU. Some of the sends/recvs use one tag, while the remainder use a
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;second tag. A single Waitall invocation is used to wait for all of
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;these sends and receives to complete before the next iteration of
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;the loop
</span><br>
<span class="quotelev2">&gt;&gt;can commence. All GPU arrays are preallocated before the run loop starts.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;While this pattern works most of the time, it sometimes fails with a
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;segfault that appears to occur during an Isend:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;(snip)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;Any ideas as to what could be causing this problem?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;I'm using CUDA 6.5-14 with NVIDIA drivers 340.29 on Ubuntu 14.04.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Lev:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am not sure what is happening here but there are a few things we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can do to try and narrow things done.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. If you run with --mca btl_smcuda_use_cuda_ipc 0 then I assume this
</span><br>
<span class="quotelev1">&gt;error
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    will go away?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Yes - that appears to be the case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2. Do you know if when you see this error it happens on the first
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pass
</span><br>
<span class="quotelev2">&gt;&gt;through
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    your communications?  That is, you mention how there are multiple
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    iterations through the loop and I am wondering when you see failures if it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    is the first pass through the loop.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;When the segfault occurs, it appears to always happen during the second
</span><br>
<span class="quotelev2">&gt;&gt;iteration of the loop, i.e., at least one slew of Isends (and
</span><br>
<span class="quotelev2">&gt;&gt;presumably Irecvs) is successfully performed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Some more details regarding the Isends: each process starts two Isends
</span><br>
<span class="quotelev2">&gt;&gt;for each destination process to which it transmits data. The Isends use
</span><br>
<span class="quotelev2">&gt;&gt;two different tags, respectively; one is passed None (by design), while
</span><br>
<span class="quotelev2">&gt;&gt;the other is passed the pointer to a GPU array with nonzero length. The
</span><br>
<span class="quotelev2">&gt;&gt;segfault appears to occur during the latter Isend.
</span><br>
<span class="quotelev2">&gt;&gt;--
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Lev, can you send me the test program off list.  I may try to create a C version
</span><br>
<span class="quotelev1">&gt;of the test and see if I can reproduce the problem.
</span><br>
<span class="quotelev1">&gt;Not sure at this point what is happening.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks,
</span><br>
<span class="quotelev1">&gt;Rolf
</span><br>
<span class="quotelev1">&gt;
</span><br>
We figured out what was going on and I figured I would post here in case others see it.
<br>
<p>After running for a while, some CUDA files related to CUDA IPC may get left in the /dev/shm directory.  These files can sometimes cause problems with later runs causing errors (or SEGVs) when calling some CUDA APIs.  The solution is clear out that directory periodically.
<br>
<p>This issue is fixed in CUDA 7.0
<br>
Rolf
<br>
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
<li><strong>Next message:</strong> <a href="26582.php">Ralph Castain: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<li><strong>Previous message:</strong> <a href="26580.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>In reply to:</strong> <a href="26578.php">Rolf vandeVaart: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
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
