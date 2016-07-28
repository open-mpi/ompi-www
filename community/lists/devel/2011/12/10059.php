<?
$subject_val = "Re: [OMPI devel] New smcuda BTL that optimizes intra-node GPU to GPU memory transfers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  9 21:23:00 2011" -->
<!-- isoreceived="20111210022300" -->
<!-- sent="Fri, 09 Dec 2011 19:22:53 -0700" -->
<!-- isosent="20111210022253" -->
<!-- name="Kenneth Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New smcuda BTL that optimizes intra-node GPU to GPU memory transfers" -->
<!-- id="1323483773.14234.3.camel_at_devhost.localdomain" -->
<!-- charset="utf-8" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F34C06401EBC_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New smcuda BTL that optimizes intra-node GPU to GPU memory transfers<br>
<strong>From:</strong> Kenneth Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-09 21:22:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10060.php">Ralph Castain: "[OMPI devel] Process mapping and affinity on the devel trunk"</a>
<li><strong>Previous message:</strong> <a href="10058.php">Rolf vandeVaart: "[OMPI devel] New smcuda BTL that optimizes intra-node GPU to GPU memory transfers"</a>
<li><strong>In reply to:</strong> <a href="10058.php">Rolf vandeVaart: "[OMPI devel] New smcuda BTL that optimizes intra-node GPU to GPU memory transfers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rolf,
<br>
<p>I'm still experimenting with cuda-rdma-2 on CUDA 4.1 ...
<br>
<p>I'll build up cuda-rdma-3 and see what performance changes result.
<br>
<p>Ken Lloyd
<br>
<p>On Fri, 2011-12-09 at 11:45 -0800, Rolf vandeVaart wrote:
<br>
<span class="quotelev1">&gt; WHAT: Add new sm BTL, and supporting mpools, that can also support
</span><br>
<span class="quotelev1">&gt; CUDA RDMA.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: With CUDA 4.1, there is some GPU IPC support available that we
</span><br>
<span class="quotelev1">&gt; can take advantage of to move data efficiently between GPUs within a
</span><br>
<span class="quotelev1">&gt; node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: new--&gt; ompi/mca/btl/smcuda, ompi/mca/mpool/cuda,
</span><br>
<span class="quotelev1">&gt; ompi/mca/mpool/rcuda Along with a few minor changes in ob1.  These new
</span><br>
<span class="quotelev1">&gt; components are only built if explicitly asked for by configure.
</span><br>
<span class="quotelev1">&gt; Otherwise, new components are not built, and there are no changes
</span><br>
<span class="quotelev1">&gt; within normal code paths.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (Jeff's rule: Do no harm)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN: Two weeks from now, December 23, 2011
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; DETAILS: There is the ability to improve that transfer of GPU memory
</span><br>
<span class="quotelev1">&gt; between GPUs within a node by making use of some IPC support that is
</span><br>
<span class="quotelev1">&gt; soon to be available with CUDA 4.1.  These changes take advantage of
</span><br>
<span class="quotelev1">&gt; that to implement a RDMA GET protocol for GPU memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To prevent any pollution within existing sm BTL, a new one has been
</span><br>
<span class="quotelev1">&gt; created that has the added RDMA GET support.  In addition, two new
</span><br>
<span class="quotelev1">&gt; memory pools are needed as well which are being added.  One of the
</span><br>
<span class="quotelev1">&gt; memory pools is very simple whereas the second one is patterned after
</span><br>
<span class="quotelev1">&gt; the rdma memory pool.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Changes can be viewed at: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://bitbucket.org/rolfv/ompi-trunk-cuda-rdma-3/changeset/29f3255cd2b8">https://bitbucket.org/rolfv/ompi-trunk-cuda-rdma-3/changeset/29f3255cd2b8</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/btl/btl.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/btl/smcuda
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/btl/smcuda/btl_smcuda_component.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/btl/smcuda/configure.m4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/btl/smcuda/btl_smcuda_frag.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/btl/smcuda/help-mpi-btl-smcuda.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/btl/smcuda/btl_smcuda_endpoint.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/btl/smcuda/btl_smcuda.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/btl/smcuda/btl_smcuda_fifo.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/btl/smcuda/Makefile.am
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/btl/smcuda/btl_smcuda_frag.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/btl/smcuda/btl_smcuda.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/mpool/cuda
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/mpool/cuda/configure.m4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/mpool/cuda/mpool_cuda_component.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/mpool/cuda/mpool_cuda_module.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/mpool/cuda/mpool_cuda.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/mpool/cuda/Makefile.am
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/mpool/rcuda
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/mpool/rcuda/configure.m4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/mpool/rcuda/mpool_rcuda_component.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/mpool/rcuda/Makefile.am
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/mpool/rcuda/mpool_rcuda_module.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/mpool/rcuda/mpool_rcuda.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/common/cuda/configure.m4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/common/cuda/common_cuda.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/common/cuda/help-mpi-common-cuda.txt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/common/cuda/common_cuda.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/pml/ob1/pml_ob1_sendreq.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/pml/ob1/pml_ob1_sendreq.h
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/pml/ob1/pml_ob1_recvreq.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/pml/ob1/pml_ob1_cuda.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/pml/ob1/Makefile.am
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rolf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rvandevaart_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 781-275-5358
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ______________________________________________________________________
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s)
</span><br>
<span class="quotelev1">&gt; and may contain confidential information.  Any unauthorized review,
</span><br>
<span class="quotelev1">&gt; use, disclosure or distribution is prohibited.  If you are not the
</span><br>
<span class="quotelev1">&gt; intended recipient, please contact the sender by reply email and
</span><br>
<span class="quotelev1">&gt; destroy all copies of the original message. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ______________________________________________________________________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p>==============
<br>
Kenneth A. Lloyd, Jr.
<br>
CEO - Director of Systems Science
<br>
Watt Systems Technologies Inc.
<br>
Albuquerque, NM US
<br>
<p>This e-mail is covered by the Electronic Communications Privacy Act, 18
<br>
U.S.C. 2510-2521 and is intended only for the addressee named above. It
<br>
may contain privileged or confidential information. If you are not the
<br>
addressee you must not copy, distribute, disclose or use any of the
<br>
information in it. If you have received it in error please delete it and
<br>
immediately notify the sender.
<br>
<p><p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10059/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10060.php">Ralph Castain: "[OMPI devel] Process mapping and affinity on the devel trunk"</a>
<li><strong>Previous message:</strong> <a href="10058.php">Rolf vandeVaart: "[OMPI devel] New smcuda BTL that optimizes intra-node GPU to GPU memory transfers"</a>
<li><strong>In reply to:</strong> <a href="10058.php">Rolf vandeVaart: "[OMPI devel] New smcuda BTL that optimizes intra-node GPU to GPU memory transfers"</a>
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
