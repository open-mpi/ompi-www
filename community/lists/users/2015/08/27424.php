<?
$subject_val = "[OMPI users] CUDA Buffers: Enforce asynchronous memcpy's";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 09:16:33 2015" -->
<!-- isoreceived="20150811131633" -->
<!-- sent="Tue, 11 Aug 2015 15:16:31 +0200" -->
<!-- isosent="20150811131631" -->
<!-- name="Jeremia B&#195;&#164;r" -->
<!-- email="baerj_at_[hidden]" -->
<!-- subject="[OMPI users] CUDA Buffers: Enforce asynchronous memcpy's" -->
<!-- id="55C9F5AF.7000106_at_student.ethz.ch" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's<br>
<strong>From:</strong> Jeremia B&#195;&#164;r (<em>baerj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-11 09:16:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27425.php">Dave Love: "Re: [OMPI users] SGE problems w/OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27423.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27431.php">Rolf vandeVaart: "Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's"</a>
<li><strong>Reply:</strong> <a href="27431.php">Rolf vandeVaart: "Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>In my current application, MPI_Send/MPI_Recv hangs when using buffers in 
<br>
GPU device memory of a Nvidia GPU. I realized this is due to the fact 
<br>
that OpenMPI uses the synchronous cuMempcy rather than the asynchornous 
<br>
cuMemcpyAsync (see stacktrace at the bottom). However, in my 
<br>
application, synchronous copies cannot be used.
<br>
<p>I scanned through the source and saw support for async memcpy's are 
<br>
available. It's controlled by 'mca_common_cuda_cumemcpy_async' in
<br>
./ompi/mca/common/cuda/common_cuda.c
<br>
However, I can't find a way to enable it. It's not exposed in 
<br>
'ompi_info' (but registered?). How can I enforce the use of 
<br>
cuMemcpyAsync in OpenMPI? Version used is OpenMPI 1.8.5.
<br>
<p>Thank you,
<br>
Jeremia
<br>
<p>(gdb) bt
<br>
#0  0x00002aaaaaaaba11 in clock_gettime ()
<br>
#1  0x00000039e5803e46 in clock_gettime () from /lib64/librt.so.1
<br>
#2  0x00002aaaab58a7ae in ?? () from /usr/lib64/libcuda.so.1
<br>
#3  0x00002aaaaaf41dfb in ?? () from /usr/lib64/libcuda.so.1
<br>
#4  0x00002aaaaaf1f623 in ?? () from /usr/lib64/libcuda.so.1
<br>
#5  0x00002aaaaaf17361 in ?? () from /usr/lib64/libcuda.so.1
<br>
#6  0x00002aaaaaf180b6 in ?? () from /usr/lib64/libcuda.so.1
<br>
#7  0x00002aaaaae860c2 in ?? () from /usr/lib64/libcuda.so.1
<br>
#8  0x00002aaaaae8621a in ?? () from /usr/lib64/libcuda.so.1
<br>
#9  0x00002aaaaae69d85 in cuMemcpy () from /usr/lib64/libcuda.so.1
<br>
#10 0x00002aaaaf0a7dea in mca_common_cuda_cu_memcpy () from 
<br>
/home/jbaer/local_root/opt/openmpi_from_src_1.8.5/lib/libmca_common_cuda.so.1
<br>
#11 0x00002aaaac992544 in opal_cuda_memcpy () from 
<br>
/home/jbaer/local_root/opt/openmpi_from_src_1.8.5/lib/libopen-pal.so.6
<br>
#12 0x00002aaaac98adf7 in opal_convertor_pack () from 
<br>
/home/jbaer/local_root/opt/openmpi_from_src_1.8.5/lib/libopen-pal.so.6
<br>
#13 0x00002aaab167c611 in mca_pml_ob1_send_request_start_copy () from 
<br>
/home/jbaer/local_root/opt/openmpi_from_src_1.8.5/lib/openmpi/mca_pml_ob1.so
<br>
#14 0x00002aaab167353f in mca_pml_ob1_send () from 
<br>
/home/jbaer/local_root/opt/openmpi_from_src_1.8.5/lib/openmpi/mca_pml_ob1.so
<br>
#15 0x00002aaaabf4f322 in PMPI_Send () from 
<br>
/users/jbaer/local_root/opt/openmpi_from_src_1.8.5/lib/libmpi.so.1
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27425.php">Dave Love: "Re: [OMPI users] SGE problems w/OpenMPI 1.8.7"</a>
<li><strong>Previous message:</strong> <a href="27423.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open MPI 1.8.8 and hcoll in system space"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27431.php">Rolf vandeVaart: "Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's"</a>
<li><strong>Reply:</strong> <a href="27431.php">Rolf vandeVaart: "Re: [OMPI users] CUDA Buffers: Enforce asynchronous memcpy's"</a>
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
