<?
$subject_val = "[OMPI devel] PRE-RFC: Adding RDMA support for GPU buffers within a node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 16 16:08:24 2011" -->
<!-- isoreceived="20110916200824" -->
<!-- sent="Fri, 16 Sep 2011 13:08:18 -0700" -->
<!-- isosent="20110916200818" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] PRE-RFC: Adding RDMA support for GPU buffers within a node" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F31414F41306_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> [OMPI devel] PRE-RFC: Adding RDMA support for GPU buffers within a node<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-16 16:08:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9761.php">Xin He: "[OMPI devel] MPI_Bcast using TIPC"</a>
<li><strong>Previous message:</strong> <a href="9759.php">Jeff Squyres: "[OMPI devel] Availability of hwloc topology info"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a pre-RFC of some changes I am hoping to bring into the trunk.
<br>
(I call this a pre-RFC as I have no timeout and I am not done with the code
<br>
yet.)
<br>
<p>With some prior commits, I have added the ability to send GPU buffers directly.
<br>
This support consists of forcing the use of only the send/receive protocol when
<br>
a GPU buffer is detected and using special memcpy functions to move data into
<br>
and out of these buffers.
<br>
<p>My next set of changes intends to improve the performance within a node when
<br>
sending GPU buffers.  Essentially, we can do a RDMA remote get operations between
<br>
two GPU cards. 
<br>
<p>This code adds support for that.  On the sending side, we use a very simple
<br>
mpool to get a memory handle.  On the receiveing side, we use a mpool to register
<br>
and cache the memory handles.  It is patterned after the rdma mpool.
<br>
<p>I am interested in anyone's reaction to this code.  Most of the changes
<br>
are contained in within code that is only used for CUDA, but there are
<br>
several changes that happen within the sm BTL and the ob1 PML.  What was
<br>
kind of strange is that with these changes, we have the sm BTL that supports
<br>
RDMA operations for GPU buffers, but not for host buffers, and that made
<br>
for interesting code.
<br>
<p>The current changes can be viewed at:
<br>
&nbsp;&nbsp;<a href="https://bitbucket.org/rolfv/ompi-trunk-cuda-rdma-1">https://bitbucket.org/rolfv/ompi-trunk-cuda-rdma-1</a>
<br>
<p>[rvandevaart_at_rvandevaart-dt ompi-trunk-interp-rdma]$ svn status
<br>
M       opal/datatype/opal_convertor.h
<br>
M       ompi/mca/btl/sm/btl_sm_frag.c
<br>
M       ompi/mca/btl/sm/btl_sm.c
<br>
M       ompi/mca/btl/sm/btl_sm_component.c
<br>
M       ompi/mca/btl/sm/btl_sm_frag.h
<br>
M       ompi/mca/btl/sm/btl_sm.h
<br>
M       ompi/mca/btl/sm/Makefile.am
<br>
M       ompi/mca/btl/btl.h
<br>
A       ompi/mca/mpool/cuda
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
A       ompi/mca/mpool/rcuda/mpool_rcuda_component.c
<br>
A       ompi/mca/mpool/rcuda/Makefile.am
<br>
A       ompi/mca/mpool/rcuda/mpool_rcuda_module.c
<br>
A       ompi/mca/mpool/rcuda/mpool_rcuda.h
<br>
M       ompi/mca/pml/ob1/pml_ob1_rdma.h
<br>
M       ompi/mca/pml/ob1/pml_ob1_sendreq.c
<br>
M       ompi/mca/pml/ob1/pml_ob1_sendreq.h
<br>
M       ompi/mca/pml/ob1/pml_ob1_recvreq.c
<br>
M       ompi/mca/pml/ob1/pml_ob1_rdma.c
<br>
M       ompi/mca/common/cuda/common_cuda.c
<br>
M       ompi/mca/common/cuda/common_cuda.h
<br>
<p>-----------------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="9761.php">Xin He: "[OMPI devel] MPI_Bcast using TIPC"</a>
<li><strong>Previous message:</strong> <a href="9759.php">Jeff Squyres: "[OMPI devel] Availability of hwloc topology info"</a>
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
