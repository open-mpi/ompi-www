<?
$subject_val = "Re: [OMPI users] Segmentation fault on master task";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  2 05:58:14 2012" -->
<!-- isoreceived="20120502095814" -->
<!-- sent="Wed, 02 May 2012 12:00:07 +0200" -->
<!-- isosent="20120502100007" -->
<!-- name="Eduardo Morras" -->
<!-- email="nec556_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault on master task" -->
<!-- id="4F9EA04A00073570_at_" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAFAE9jjALiK4625SS+42zX-XPE1GrABGWEXj1sBX9xrRN4WMRA_at_mail.g mail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault on master task<br>
<strong>From:</strong> Eduardo Morras (<em>nec556_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-02 06:00:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19166.php">Shanthini Kannan: "[OMPI users] MPI with RDMA CM"</a>
<li><strong>Previous message:</strong> <a href="19164.php">Rohan Deshpande: "[OMPI users] Segmentation fault on master task"</a>
<li><strong>Maybe in reply to:</strong> <a href="19164.php">Rohan Deshpande: "[OMPI users] Segmentation fault on master task"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19170.php">Rohan Deshpande: "Re: [OMPI users] Segmentation fault on master task"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At 08:51 02/05/2012, you wrote:
<br>
<span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am trying to execute following code on cluster.
</span><br>
<p><span class="quotelev1">&gt;run_kernel is a cuda call with signature int run_kernel(int 
</span><br>
<span class="quotelev1">&gt;array[],int nelements, int taskid, char hostname[]);
</span><br>
<p>... deleted code
<br>
<p><span class="quotelev1">&gt;mysum = run_kernel(&amp;onearray[20000000], chunksize, taskid, myname);
</span><br>
<p>... more deleted code
<br>
<p><span class="quotelev1">&gt;I am simply trying to calculate sum of array elements using kernel 
</span><br>
<span class="quotelev1">&gt;function. Each task has its own data and it calculates its own sum.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am getting segmentation fault on master task but all other task 
</span><br>
<span class="quotelev1">&gt;calculate the sum successfully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Here is the output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;MPI task 0 has started on host node4
</span><br>
<span class="quotelev1">&gt;MPI task 1 has started on host node4
</span><br>
<span class="quotelev1">&gt;MPI task 2 has started on host node5
</span><br>
<span class="quotelev1">&gt;MPI task 6 has started on host node6
</span><br>
<span class="quotelev1">&gt;MPI task 5 has started on node5
</span><br>
<span class="quotelev1">&gt;MPI task 9 has started on host node6
</span><br>
<span class="quotelev1">&gt;MPI task 8 has started on host node6
</span><br>
<span class="quotelev1">&gt;MPI task 3 has started on node5
</span><br>
<span class="quotelev1">&gt;MPI task 4 has started on hnode5
</span><br>
<span class="quotelev1">&gt;MPI task 7 has started on node6
</span><br>
<span class="quotelev1">&gt;[node4] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;[node4] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;[node4] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;[node4] Failing at address: 0xb7866000
</span><br>
<span class="quotelev1">&gt;[node4] [ 0] [0xbc040c]
</span><br>
<span class="quotelev1">&gt;[node4] [ 1] /usr/lib/libcuda.so(+0x13a0f6) [0x10640f6]
</span><br>
<span class="quotelev1">&gt;[node4] [ 2] /usr/lib/libcuda.so(+0x146912) [0x1070912]
</span><br>
<span class="quotelev1">&gt;[node4] [ 3] /usr/lib/libcuda.so(+0x147231) [0x1071231]
</span><br>
<span class="quotelev1">&gt;[node4] [ 4] /usr/lib/libcuda.so(+0x13cb64) [0x1066b64]
</span><br>
<span class="quotelev1">&gt;[node4] [ 5] /usr/lib/libcuda.so(+0x11863c) [0x104263c]
</span><br>
<span class="quotelev1">&gt;[node4] [ 6] /usr/lib/libcuda.so(+0x11d93b) [0x104793b]
</span><br>
<span class="quotelev1">&gt;[node4] [ 7] /usr/lib/libcuda.so(cuMemcpyHtoD_v2+0x64) [0x1037264]
</span><br>
<span class="quotelev1">&gt;[node4] [ 8] /usr/local/cuda/lib/libcudart.so.4(+0x20336) [0x224336]
</span><br>
<span class="quotelev1">&gt;[node4] [ 9] /usr/local/cuda/lib/libcudart.so.4(cudaMemcpy+0x230) [0x257360]
</span><br>
<span class="quotelev1">&gt;[node4] [10] mpi_array_distributed(run_kernel+0x9a) [0x804a482]
</span><br>
<span class="quotelev1">&gt;[node4] [11] mpi_array_distributed(main+0x325) [0x804a139]
</span><br>
<span class="quotelev1">&gt;[node4] [12] /lib/libc.so.6(__libc_start_main+0xe6) [0x4dece6]
</span><br>
<span class="quotelev1">&gt;[node4] [13] mpi_array_distributed() [0x8049d81]
</span><br>
<span class="quotelev1">&gt;[node4] *** End of error message ***
</span><br>
<p>It fails doing the cuMemcpyHtoD inside cuda code. Perhaps doing any 
<br>
of this changes can fix your problem:
<br>
<p>a) mysum = run_kernel(onearray, chunksize, taskid, myname);
<br>
<p>b) mysum = run_kernel(&amp;onearray[20000000-1], chunksize, taskid, myname);
<br>
<p><span class="quotelev1">&gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;mpirun noticed that process rank 0 with PID 3054 on node 
</span><br>
<span class="quotelev1">&gt;&lt;<a href="http://ecm-c-l-207-004.uniwa.uwa.edu.au">http://ecm-c-l-207-004.uniwa.uwa.edu.au</a>&gt;ecm-c-l-207-004.uniwa.uwa.edu.au 
</span><br>
<span class="quotelev1">&gt;exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Sadly i cant install memory checker such as valgrind on my machine 
</span><br>
<span class="quotelev1">&gt;due to some restrictions. I could not spot any error by looking in code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Can anyone help me ?what is wrong in above code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19166.php">Shanthini Kannan: "[OMPI users] MPI with RDMA CM"</a>
<li><strong>Previous message:</strong> <a href="19164.php">Rohan Deshpande: "[OMPI users] Segmentation fault on master task"</a>
<li><strong>Maybe in reply to:</strong> <a href="19164.php">Rohan Deshpande: "[OMPI users] Segmentation fault on master task"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19170.php">Rohan Deshpande: "Re: [OMPI users] Segmentation fault on master task"</a>
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
