<?
$subject_val = "Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 14:44:42 2015" -->
<!-- isoreceived="20150811184442" -->
<!-- sent="Tue, 11 Aug 2015 18:44:37 +0000" -->
<!-- isosent="20150811184437" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's" -->
<!-- id="685d6de4c678419198129e9c0ccc96ac_at_HQMAIL102.nvidia.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="55C9F5AF.7000106_at_student.ethz.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-11 14:44:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27432.php">David Shrader: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Previous message:</strong> <a href="27430.php">Amos Leffler: "[OMPI users] Problem in using openmpi-1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27424.php">Jeremia B&#195;&#164;r: "[OMPI users] CUDA Buffers: Enforce asynchronous memcpy's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27442.php">Geoffrey Paulsen: "Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's"</a>
<li><strong>Reply:</strong> <a href="27442.php">Geoffrey Paulsen: "Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I talked with Jeremia off list and we figured out what was going on.  There is the ability to use the cuMemcpyAsync/cuStreamSynchronize rather than the cuMemcpy but it was never made the default for Open MPI 1.8 series.  So, to get that behavior you need the following:
<br>
<p>--mca mpi_common_cuda_cumemcpy_async 1
<br>
<p>It is too late to change this in 1.8 but it will be made the default behavior in 1.10 and all future versions.  In addition, he is right about not being able to see these variables in the Open MPI 1.8 series.  This was a bug and it has been fixed in Open MPI v2.0.0.  Currently, there are no plans to bring that back into 1.10.
<br>
<p>Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Jeremia B&#228;r
</span><br>
<span class="quotelev1">&gt;Sent: Tuesday, August 11, 2015 9:17 AM
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;In my current application, MPI_Send/MPI_Recv hangs when using buffers in
</span><br>
<span class="quotelev1">&gt;GPU device memory of a Nvidia GPU. I realized this is due to the fact that
</span><br>
<span class="quotelev1">&gt;OpenMPI uses the synchronous cuMempcy rather than the asynchornous
</span><br>
<span class="quotelev1">&gt;cuMemcpyAsync (see stacktrace at the bottom). However, in my application,
</span><br>
<span class="quotelev1">&gt;synchronous copies cannot be used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I scanned through the source and saw support for async memcpy's are
</span><br>
<span class="quotelev1">&gt;available. It's controlled by 'mca_common_cuda_cumemcpy_async' in
</span><br>
<span class="quotelev1">&gt;./ompi/mca/common/cuda/common_cuda.c
</span><br>
<span class="quotelev1">&gt;However, I can't find a way to enable it. It's not exposed in 'ompi_info' (but
</span><br>
<span class="quotelev1">&gt;registered?). How can I enforce the use of cuMemcpyAsync in OpenMPI?
</span><br>
<span class="quotelev1">&gt;Version used is OpenMPI 1.8.5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thank you,
</span><br>
<span class="quotelev1">&gt;Jeremia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;(gdb) bt
</span><br>
<span class="quotelev1">&gt;#0  0x00002aaaaaaaba11 in clock_gettime ()
</span><br>
<span class="quotelev1">&gt;#1  0x00000039e5803e46 in clock_gettime () from /lib64/librt.so.1
</span><br>
<span class="quotelev1">&gt;#2  0x00002aaaab58a7ae in ?? () from /usr/lib64/libcuda.so.1
</span><br>
<span class="quotelev1">&gt;#3  0x00002aaaaaf41dfb in ?? () from /usr/lib64/libcuda.so.1
</span><br>
<span class="quotelev1">&gt;#4  0x00002aaaaaf1f623 in ?? () from /usr/lib64/libcuda.so.1
</span><br>
<span class="quotelev1">&gt;#5  0x00002aaaaaf17361 in ?? () from /usr/lib64/libcuda.so.1
</span><br>
<span class="quotelev1">&gt;#6  0x00002aaaaaf180b6 in ?? () from /usr/lib64/libcuda.so.1
</span><br>
<span class="quotelev1">&gt;#7  0x00002aaaaae860c2 in ?? () from /usr/lib64/libcuda.so.1
</span><br>
<span class="quotelev1">&gt;#8  0x00002aaaaae8621a in ?? () from /usr/lib64/libcuda.so.1
</span><br>
<span class="quotelev1">&gt;#9  0x00002aaaaae69d85 in cuMemcpy () from /usr/lib64/libcuda.so.1
</span><br>
<span class="quotelev1">&gt;#10 0x00002aaaaf0a7dea in mca_common_cuda_cu_memcpy () from
</span><br>
<span class="quotelev1">&gt;/home/jbaer/local_root/opt/openmpi_from_src_1.8.5/lib/libmca_common_c
</span><br>
<span class="quotelev1">&gt;uda.so.1
</span><br>
<span class="quotelev1">&gt;#11 0x00002aaaac992544 in opal_cuda_memcpy () from
</span><br>
<span class="quotelev1">&gt;/home/jbaer/local_root/opt/openmpi_from_src_1.8.5/lib/libopen-pal.so.6
</span><br>
<span class="quotelev1">&gt;#12 0x00002aaaac98adf7 in opal_convertor_pack () from
</span><br>
<span class="quotelev1">&gt;/home/jbaer/local_root/opt/openmpi_from_src_1.8.5/lib/libopen-pal.so.6
</span><br>
<span class="quotelev1">&gt;#13 0x00002aaab167c611 in mca_pml_ob1_send_request_start_copy () from
</span><br>
<span class="quotelev1">&gt;/home/jbaer/local_root/opt/openmpi_from_src_1.8.5/lib/openmpi/mca_pm
</span><br>
<span class="quotelev1">&gt;l_ob1.so
</span><br>
<span class="quotelev1">&gt;#14 0x00002aaab167353f in mca_pml_ob1_send () from
</span><br>
<span class="quotelev1">&gt;/home/jbaer/local_root/opt/openmpi_from_src_1.8.5/lib/openmpi/mca_pm
</span><br>
<span class="quotelev1">&gt;l_ob1.so
</span><br>
<span class="quotelev1">&gt;#15 0x00002aaaabf4f322 in PMPI_Send () from
</span><br>
<span class="quotelev1">&gt;/users/jbaer/local_root/opt/openmpi_from_src_1.8.5/lib/libmpi.so.1
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
<span class="quotelev1">&gt;mpi.org/community/lists/users/2015/08/27424.php
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
<li><strong>Next message:</strong> <a href="27432.php">David Shrader: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>Previous message:</strong> <a href="27430.php">Amos Leffler: "[OMPI users] Problem in using openmpi-1.8.7"</a>
<li><strong>In reply to:</strong> <a href="27424.php">Jeremia B&#195;&#164;r: "[OMPI users] CUDA Buffers: Enforce asynchronous memcpy's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27442.php">Geoffrey Paulsen: "Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's"</a>
<li><strong>Reply:</strong> <a href="27442.php">Geoffrey Paulsen: "Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's"</a>
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
