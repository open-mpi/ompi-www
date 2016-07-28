<?
$subject_val = "Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 12 12:54:52 2015" -->
<!-- isoreceived="20150812165452" -->
<!-- sent="Wed, 12 Aug 2015 16:54:32 +0000" -->
<!-- isosent="20150812165432" -->
<!-- name="Geoffrey Paulsen" -->
<!-- email="gpaulsen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's" -->
<!-- id="201508121654.t7CGsjQg002586_at_d01av04.pok.ibm.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="685d6de4c678419198129e9c0ccc96ac_at_HQMAIL102.nvidia.com" -->
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
<strong>From:</strong> Geoffrey Paulsen (<em>gpaulsen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-12 12:54:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27443.php">Rolf vandeVaart: "Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's"</a>
<li><strong>Previous message:</strong> <a href="27441.php">Deva: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>In reply to:</strong> <a href="27431.php">Rolf vandeVaart: "Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27443.php">Rolf vandeVaart: "Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's"</a>
<li><strong>Reply:</strong> <a href="27443.php">Rolf vandeVaart: "Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<div class="socmaildefaultfont" dir="ltr" style="font-family:Arial;font-size:10.5pt" ><div dir="ltr" >I'm confused why this application needs an asynchronous cuMemcpyAsync()in a blocking MPI call.&nbsp;&nbsp; Rolf could you please explain?<br><br>And how does is a call to cuMemcpyAsync() followed by a syncronization any different than a cuMemcpy() in this use case?
<div>&nbsp;</div>
<div>I would still expect that if the MPI_Send / Recv call issued the cuMemcpyAsync() that it would be MPI's responsibility to issue the synchronization call as well.</div>&nbsp;

<div>&nbsp;</div>
<div><br>---<br>Geoffrey Paulsen<br>Software Engineer, IBM Platform MPI<br>IBM Platform-MPI<br>Phone: 720-349-2832<br>Email: gpaulsen@us.ibm.com<br>www.ibm.com
<div>&nbsp;</div>
<div>&nbsp;</div>
<blockquote data-history-content-modified="1" style="border-left:solid #aaaaaa 2px; margin-left:5px; padding-left:5px; direction:ltr" >----- Original message -----<br>From: Rolf vandeVaart &lt;rvandevaart@nvidia.com&gt;<br>Sent by: "users" &lt;users-bounces@open-mpi.org&gt;<br>To: Open MPI Users &lt;users@open-mpi.org&gt;<br>Cc:<br>Subject: Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's<br>Date: Tue, Aug 11, 2015 1:45 PM<br>&nbsp;
<div><font face="Default Monospace,Courier New,Courier,monospace" size="2" >I talked with Jeremia off list and we figured out what was going on. &nbsp;There is the ability to use the cuMemcpyAsync/cuStreamSynchronize rather than the cuMemcpy but it was never made the default for Open MPI 1.8 series. &nbsp;So, to get that behavior you need the following:<br><br>--mca mpi_common_cuda_cumemcpy_async 1<br><br>It is too late to change this in 1.8 but it will be made the default behavior in 1.10 and all future versions. &nbsp;In addition, he is right about not being able to see these variables in the Open MPI 1.8 series. &nbsp;This was a bug and it has been fixed in Open MPI v2.0.0. &nbsp;Currently, there are no plans to bring that back into 1.10.<br><br>Rolf<br><br>&gt;-----Original Message-----<br>&gt;From: users [<a href="mailto:users-bounces@open-mpi.org" target="_blank" >mailto:users-bounces@open-mpi.org</a>] On Behalf Of Jeremia Bär<br>&gt;Sent: Tuesday, August 11, 2015 9:17 AM<br>&gt;To: users@open-mpi.org<br>&gt;Subject: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's<br>&gt;<br>&gt;Hi!<br>&gt;<br>&gt;In my current application, MPI_Send/MPI_Recv hangs when using buffers in<br>&gt;GPU device memory of a Nvidia GPU. I realized this is due to the fact that<br>&gt;OpenMPI uses the synchronous cuMempcy rather than the asynchornous<br>&gt;cuMemcpyAsync (see stacktrace at the bottom). However, in my application,<br>&gt;synchronous copies cannot be used.<br>&gt;<br>&gt;I scanned through the source and saw support for async memcpy's are<br>&gt;available. It's controlled by 'mca_common_cuda_cumemcpy_async' in<br>&gt;./ompi/mca/common/cuda/common_cuda.c<br>&gt;However, I can't find a way to enable it. It's not exposed in 'ompi_info' (but<br>&gt;registered?). How can I enforce the use of cuMemcpyAsync in OpenMPI?<br>&gt;Version used is OpenMPI 1.8.5.<br>&gt;<br>&gt;Thank you,<br>&gt;Jeremia<br>&gt;<br>&gt;(gdb) bt<br>&gt;#0 &nbsp;0x00002aaaaaaaba11 in clock_gettime ()<br>&gt;#1 &nbsp;0x00000039e5803e46 in clock_gettime () from /lib64/librt.so.1<br>&gt;#2 &nbsp;0x00002aaaab58a7ae in ?? () from /usr/lib64/libcuda.so.1<br>&gt;#3 &nbsp;0x00002aaaaaf41dfb in ?? () from /usr/lib64/libcuda.so.1<br>&gt;#4 &nbsp;0x00002aaaaaf1f623 in ?? () from /usr/lib64/libcuda.so.1<br>&gt;#5 &nbsp;0x00002aaaaaf17361 in ?? () from /usr/lib64/libcuda.so.1<br>&gt;#6 &nbsp;0x00002aaaaaf180b6 in ?? () from /usr/lib64/libcuda.so.1<br>&gt;#7 &nbsp;0x00002aaaaae860c2 in ?? () from /usr/lib64/libcuda.so.1<br>&gt;#8 &nbsp;0x00002aaaaae8621a in ?? () from /usr/lib64/libcuda.so.1<br>&gt;#9 &nbsp;0x00002aaaaae69d85 in cuMemcpy () from /usr/lib64/libcuda.so.1<br>&gt;#10 0x00002aaaaf0a7dea in mca_common_cuda_cu_memcpy () from<br>&gt;/home/jbaer/local_root/opt/openmpi_from_src_1.8.5/lib/libmca_common_c<br>&gt;uda.so.1<br>&gt;#11 0x00002aaaac992544 in opal_cuda_memcpy () from<br>&gt;/home/jbaer/local_root/opt/openmpi_from_src_1.8.5/lib/libopen-pal.so.6<br>&gt;#12 0x00002aaaac98adf7 in opal_convertor_pack () from<br>&gt;/home/jbaer/local_root/opt/openmpi_from_src_1.8.5/lib/libopen-pal.so.6<br>&gt;#13 0x00002aaab167c611 in mca_pml_ob1_send_request_start_copy () from<br>&gt;/home/jbaer/local_root/opt/openmpi_from_src_1.8.5/lib/openmpi/mca_pm<br>&gt;l_ob1.so<br>&gt;#14 0x00002aaab167353f in mca_pml_ob1_send () from<br>&gt;/home/jbaer/local_root/opt/openmpi_from_src_1.8.5/lib/openmpi/mca_pm<br>&gt;l_ob1.so<br>&gt;#15 0x00002aaaabf4f322 in PMPI_Send () from<br>&gt;/users/jbaer/local_root/opt/openmpi_from_src_1.8.5/lib/libmpi.so.1<br>&gt;<br>&gt;_______________________________________________<br>&gt;users mailing list<br>&gt;users@open-mpi.org<br>&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users" target="_blank" >http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br>&gt;Link to this post: <a href="http://www.open-" target="_blank" >http://www.open-</a><br>&gt;mpi.org/community/lists/users/2015/08/27424.php<br>-----------------------------------------------------------------------------------<br>This email message is for the sole use of the intended recipient(s) and may contain<br>confidential information. &nbsp;Any unauthorized review, use, disclosure or distribution<br>is prohibited. &nbsp;If you are not the intended recipient, please contact the sender by<br>reply email and destroy all copies of the original message.<br>-----------------------------------------------------------------------------------<br>_______________________________________________<br>users mailing list<br>users@open-mpi.org<br>Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users" target="_blank" >http://www.open-mpi.org/mailman/listinfo.cgi/users</a><br>Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27431.php" target="_blank" >http://www.open-mpi.org/community/lists/users/2015/08/27431.php</a></font><br>&nbsp;</div></blockquote></div></div></div><BR>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27443.php">Rolf vandeVaart: "Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's"</a>
<li><strong>Previous message:</strong> <a href="27441.php">Deva: "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<li><strong>In reply to:</strong> <a href="27431.php">Rolf vandeVaart: "Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27443.php">Rolf vandeVaart: "Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's"</a>
<li><strong>Reply:</strong> <a href="27443.php">Rolf vandeVaart: "Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's"</a>
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
