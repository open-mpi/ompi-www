<?
$subject_val = "[OMPI devel] New smcuda BTL that optimizes intra-node GPU to GPU memory transfers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  9 14:45:14 2011" -->
<!-- isoreceived="20111209194514" -->
<!-- sent="Fri, 9 Dec 2011 11:45:08 -0800" -->
<!-- isosent="20111209194508" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] New smcuda BTL that optimizes intra-node GPU to GPU memory transfers" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F34C06401EBC_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> [OMPI devel] New smcuda BTL that optimizes intra-node GPU to GPU memory transfers<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-09 14:45:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10059.php">Kenneth Lloyd: "Re: [OMPI devel] New smcuda BTL that optimizes intra-node GPU to GPU memory transfers"</a>
<li><strong>Previous message:</strong> <a href="10057.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10059.php">Kenneth Lloyd: "Re: [OMPI devel] New smcuda BTL that optimizes intra-node GPU to GPU memory transfers"</a>
<li><strong>Reply:</strong> <a href="10059.php">Kenneth Lloyd: "Re: [OMPI devel] New smcuda BTL that optimizes intra-node GPU to GPU memory transfers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Add new sm BTL, and supporting mpools, that can also support CUDA RDMA.
<br>
<p>WHY: With CUDA 4.1, there is some GPU IPC support available that we can take advantage of to move data efficiently between GPUs within a node.
<br>
<p>WHERE: new--&gt; ompi/mca/btl/smcuda, ompi/mca/mpool/cuda, ompi/mca/mpool/rcuda Along with a few minor changes in ob1.  These new components are only built if explicitly asked for by configure.  Otherwise, new components are not built, and there are no changes within normal code paths.
<br>
(Jeff's rule: Do no harm)
<br>
<p>WHEN: Two weeks from now, December 23, 2011
<br>
<p>DETAILS: There is the ability to improve that transfer of GPU memory between GPUs within a node by making use of some IPC support that is soon to be available with CUDA 4.1.  These changes take advantage of that to implement a RDMA GET protocol for GPU memory.
<br>
<p>To prevent any pollution within existing sm BTL, a new one has been created that has the added RDMA GET support.  In addition, two new memory pools are needed as well which are being added.  One of the memory pools is very simple whereas the second one is patterned after the rdma memory pool.
<br>
<p>Changes can be viewed at:
<br>
<a href="https://bitbucket.org/rolfv/ompi-trunk-cuda-rdma-3/changeset/29f3255cd2b8">https://bitbucket.org/rolfv/ompi-trunk-cuda-rdma-3/changeset/29f3255cd2b8</a>
<br>
<p>M       ompi/mca/btl/btl.h
<br>
A       ompi/mca/btl/smcuda
<br>
A       ompi/mca/btl/smcuda/btl_smcuda_component.c
<br>
A       ompi/mca/btl/smcuda/configure.m4
<br>
A       ompi/mca/btl/smcuda/btl_smcuda_frag.h
<br>
A       ompi/mca/btl/smcuda/help-mpi-btl-smcuda.txt
<br>
A       ompi/mca/btl/smcuda/btl_smcuda_endpoint.h
<br>
A       ompi/mca/btl/smcuda/btl_smcuda.h
<br>
A       ompi/mca/btl/smcuda/btl_smcuda_fifo.h
<br>
A       ompi/mca/btl/smcuda/Makefile.am
<br>
A       ompi/mca/btl/smcuda/btl_smcuda_frag.c
<br>
A       ompi/mca/btl/smcuda/btl_smcuda.c
<br>
A       ompi/mca/mpool/cuda
<br>
A       ompi/mca/mpool/cuda/configure.m4
<br>
A       ompi/mca/mpool/cuda/mpool_cuda_component.c
<br>
A       ompi/mca/mpool/cuda/mpool_cuda_module.c
<br>
A       ompi/mca/mpool/cuda/mpool_cuda.h
<br>
A       ompi/mca/mpool/cuda/Makefile.am
<br>
A       ompi/mca/mpool/rcuda
<br>
A       ompi/mca/mpool/rcuda/configure.m4
<br>
A       ompi/mca/mpool/rcuda/mpool_rcuda_component.c
<br>
A       ompi/mca/mpool/rcuda/Makefile.am
<br>
A       ompi/mca/mpool/rcuda/mpool_rcuda_module.c
<br>
A       ompi/mca/mpool/rcuda/mpool_rcuda.h
<br>
M       ompi/mca/common/cuda/configure.m4
<br>
M       ompi/mca/common/cuda/common_cuda.c
<br>
M       ompi/mca/common/cuda/help-mpi-common-cuda.txt
<br>
M       ompi/mca/common/cuda/common_cuda.h
<br>
M       ompi/mca/pml/ob1/pml_ob1_sendreq.c
<br>
M       ompi/mca/pml/ob1/pml_ob1_sendreq.h
<br>
M       ompi/mca/pml/ob1/pml_ob1_recvreq.c
<br>
A       ompi/mca/pml/ob1/pml_ob1_cuda.c
<br>
M       ompi/mca/pml/ob1/Makefile.am
<br>
<p>Rolf
<br>
<p>rvandevaart_at_[hidden]&lt;mailto:rvandevaart_at_[hidden]&gt;
<br>
781-275-5358
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10058/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10059.php">Kenneth Lloyd: "Re: [OMPI devel] New smcuda BTL that optimizes intra-node GPU to GPU memory transfers"</a>
<li><strong>Previous message:</strong> <a href="10057.php">George Bosilca: "Re: [OMPI devel] Retrying a MPI_SEND"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10059.php">Kenneth Lloyd: "Re: [OMPI devel] New smcuda BTL that optimizes intra-node GPU to GPU memory transfers"</a>
<li><strong>Reply:</strong> <a href="10059.php">Kenneth Lloyd: "Re: [OMPI devel] New smcuda BTL that optimizes intra-node GPU to GPU memory transfers"</a>
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
