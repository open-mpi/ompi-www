<?
$subject_val = "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 16:10:18 2015" -->
<!-- isoreceived="20150327201018" -->
<!-- sent="Fri, 27 Mar 2015 20:09:58 +0000" -->
<!-- isosent="20150327200958" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs" -->
<!-- id="d486ab32d6e24163867d81506fbea6b6_at_HQMAIL102.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150327194658.GN4618_at_avicenna.ee.columbia.edu" -->
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
<strong>Date:</strong> 2015-03-27 16:09:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26555.php">LOTFIFAR F.: "[OMPI users] Connection problem on Linux cluster"</a>
<li><strong>Previous message:</strong> <a href="26553.php">Lev Givon: "[OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<li><strong>In reply to:</strong> <a href="26553.php">Lev Givon: "[OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26573.php">Lev Givon: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<li><strong>Reply:</strong> <a href="26573.php">Lev Givon: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Lev:
<br>
I am not sure what is happening here but there are a few things we can do to try and narrow things done.
<br>
1. If you run with --mca btl_smcuda_use_cuda_ipc 0 then I assume this error will go away?
<br>
2. Do you know if when you see this error it happens on the first pass through your communications?  That is, you mention how there are multiple iterations through the loop and I am wondering when you see failures if it is the first pass through the loop.
<br>
<p>Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Lev Givon
</span><br>
<span class="quotelev1">&gt;Sent: Friday, March 27, 2015 3:47 PM
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] segfault during MPI_Isend when transmitting GPU
</span><br>
<span class="quotelev1">&gt;arrays between multiple GPUs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm using PyCUDA 2014.1 and mpi4py (git commit 3746586, uploaded today)
</span><br>
<span class="quotelev1">&gt;built against OpenMPI 1.8.4 with CUDA support activated to asynchronously
</span><br>
<span class="quotelev1">&gt;send GPU arrays between multiple Tesla GPUs (Fermi generation). Each MPI
</span><br>
<span class="quotelev1">&gt;process is associated with a single GPU; the process has a run loop that starts
</span><br>
<span class="quotelev1">&gt;several Isends to transmit the contents of GPU arrays to destination
</span><br>
<span class="quotelev1">&gt;processes and several Irecvs to receive data from source processes into GPU
</span><br>
<span class="quotelev1">&gt;arrays on the process' GPU. Some of the sends/recvs use one tag, while the
</span><br>
<span class="quotelev1">&gt;remainder use a second tag. A single Waitall invocation is used to wait for all of
</span><br>
<span class="quotelev1">&gt;these sends and receives to complete before the next iteration of the loop
</span><br>
<span class="quotelev1">&gt;can commence. All GPU arrays are preallocated before the run loop starts.
</span><br>
<span class="quotelev1">&gt;While this pattern works most of the time, it sometimes fails with a segfault
</span><br>
<span class="quotelev1">&gt;that appears to occur during an Isend:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;[myhost:05471] *** Process received signal *** [myhost:05471] Signal:
</span><br>
<span class="quotelev1">&gt;Segmentation fault (11) [myhost:05471] Signal code:  (128) [myhost:05471]
</span><br>
<span class="quotelev1">&gt;Failing at address: (nil) [myhost:05471] [ 0] /lib/x86_64-linux-
</span><br>
<span class="quotelev1">&gt;gnu/libpthread.so.0(+0x10340)[0x2ac2bb176340]
</span><br>
<span class="quotelev1">&gt;[myhost:05471] [ 1]
</span><br>
<span class="quotelev1">&gt;/usr/lib/x86_64-linux-gnu/libcuda.so.1(+0x1f6b18)[0x2ac2c48bfb18]
</span><br>
<span class="quotelev1">&gt;[myhost:05471] [ 2]
</span><br>
<span class="quotelev1">&gt;/usr/lib/x86_64-linux-gnu/libcuda.so.1(+0x16dcc3)[0x2ac2c4836cc3]
</span><br>
<span class="quotelev1">&gt;[myhost:05471] [ 3]
</span><br>
<span class="quotelev1">&gt;/usr/lib/x86_64-linux-
</span><br>
<span class="quotelev1">&gt;gnu/libcuda.so.1(cuIpcGetEventHandle+0x5d)[0x2ac2c480bccd]
</span><br>
<span class="quotelev1">&gt;[myhost:05471] [ 4]
</span><br>
<span class="quotelev1">&gt;/opt/openmpi-
</span><br>
<span class="quotelev1">&gt;1.8.4/lib/libmpi.so.1(mca_common_cuda_construct_event_and_handle+0x27
</span><br>
<span class="quotelev1">&gt;)[0x2ac2c27d3087]
</span><br>
<span class="quotelev1">&gt;[myhost:05471] [ 5]
</span><br>
<span class="quotelev1">&gt;/opt/openmpi-
</span><br>
<span class="quotelev1">&gt;1.8.4/lib/libmpi.so.1(ompi_free_list_grow+0x199)[0x2ac2c277b8e9]
</span><br>
<span class="quotelev1">&gt;[myhost:05471] [ 6]
</span><br>
<span class="quotelev1">&gt;/opt/openmpi-
</span><br>
<span class="quotelev1">&gt;1.8.4/lib/libmpi.so.1(mca_mpool_gpusm_register+0xf4)[0x2ac2c28c9fd4]
</span><br>
<span class="quotelev1">&gt;[myhost:05471] [ 7]
</span><br>
<span class="quotelev1">&gt;/opt/openmpi-
</span><br>
<span class="quotelev1">&gt;1.8.4/lib/libmpi.so.1(mca_pml_ob1_rdma_cuda_btls+0xcd)[0x2ac2c28f8afd]
</span><br>
<span class="quotelev1">&gt;[myhost:05471] [ 8]
</span><br>
<span class="quotelev1">&gt;/opt/openmpi-
</span><br>
<span class="quotelev1">&gt;1.8.4/lib/libmpi.so.1(mca_pml_ob1_send_request_start_cuda+0xbf)[0x2ac2c
</span><br>
<span class="quotelev1">&gt;28f8d5f]
</span><br>
<span class="quotelev1">&gt;[myhost:05471] [ 9]
</span><br>
<span class="quotelev1">&gt;/opt/openmpi-
</span><br>
<span class="quotelev1">&gt;1.8.4/lib/libmpi.so.1(mca_pml_ob1_isend+0x60e)[0x2ac2c28eb6fe]
</span><br>
<span class="quotelev1">&gt;[myhost:05471] [10]
</span><br>
<span class="quotelev1">&gt;/opt/openmpi-1.8.4/lib/libmpi.so.1(MPI_Isend+0x137)[0x2ac2c27b7cc7]
</span><br>
<span class="quotelev1">&gt;[myhost:05471] [11]
</span><br>
<span class="quotelev1">&gt;/home/lev/Work/miniconda/envs/MYENV/lib/python2.7/site-
</span><br>
<span class="quotelev1">&gt;packages/mpi4py/MPI.so(+0xd3bb2)[0x2ac2c24b3bb2]
</span><br>
<span class="quotelev1">&gt;(Python-related debug lines omitted.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Any ideas as to what could be causing this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I'm using CUDA 6.5-14 with NVIDIA drivers 340.29 on Ubuntu 14.04.
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
<span class="quotelev1">&gt;mpi.org/community/lists/users/2015/03/26553.php
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
<li><strong>Next message:</strong> <a href="26555.php">LOTFIFAR F.: "[OMPI users] Connection problem on Linux cluster"</a>
<li><strong>Previous message:</strong> <a href="26553.php">Lev Givon: "[OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<li><strong>In reply to:</strong> <a href="26553.php">Lev Givon: "[OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26573.php">Lev Givon: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
<li><strong>Reply:</strong> <a href="26573.php">Lev Givon: "Re: [OMPI users] segfault during MPI_Isend when transmitting GPU arrays between multiple GPUs"</a>
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
