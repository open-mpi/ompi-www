<?
$subject_val = "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 13:00:25 2011" -->
<!-- isoreceived="20110413170025" -->
<!-- sent="Wed, 13 Apr 2011 19:00:07 +0200" -->
<!-- isosent="20110413170007" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly" -->
<!-- id="4DA5D697.2090606_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F30188D4E40B_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-13 13:00:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9169.php">Ken Lloyd: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9167.php">Rolf vandeVaart: "[OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>In reply to:</strong> <a href="9167.php">Rolf vandeVaart: "[OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9170.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Reply:</strong> <a href="9170.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Rolf,
<br>
<p>This &quot;CUDA device memory&quot; isn't memory mapped in the host, right? Then
<br>
what does its address look like ? When you say &quot;when it is detected that
<br>
a buffer is CUDA device memory&quot;, if the actual device and host address
<br>
spaces are different, how do you know that device addresses and usual
<br>
host addresses will never have the same values ?
<br>
<p>Do you need GPUDirect for &quot;to improve performance, the internal host
<br>
buffers have to also be registered with the CUDA environment&quot; ?
<br>
<p>Regards,
<br>
Brice
<br>
<p><p><p>Le 13/04/2011 18:47, Rolf vandeVaart a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WHAT: Add support to send data directly from CUDA device memory via
</span><br>
<span class="quotelev1">&gt; MPI calls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIMEOUT: April 25, 2011
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; DETAILS: When programming in a mixed MPI and CUDA environment, one
</span><br>
<span class="quotelev1">&gt; cannot currently send data directly from CUDA device memory.  The
</span><br>
<span class="quotelev1">&gt; programmer first has to move the data into host memory, and then send
</span><br>
<span class="quotelev1">&gt; it.  On the receiving side, it has to first be received into host
</span><br>
<span class="quotelev1">&gt; memory, and then copied into CUDA device memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This RFC adds the ability to send and receive CUDA device memory directly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are three basic changes being made to add the support.  First,
</span><br>
<span class="quotelev1">&gt; when it is detected that a buffer is CUDA device memory, the protocols
</span><br>
<span class="quotelev1">&gt; that can be used are restricted to the ones that first copy data into
</span><br>
<span class="quotelev1">&gt; internal buffers.  This means that we will not be using the PUT and
</span><br>
<span class="quotelev1">&gt; RGET protocols, just the send and receive ones.  Secondly, rather than
</span><br>
<span class="quotelev1">&gt; using memcpy to move the data into and out of the host buffers, the
</span><br>
<span class="quotelev1">&gt; library has to use a special CUDA copy routine called cuMemcpy. 
</span><br>
<span class="quotelev1">&gt; Lastly, to improve performance, the internal host buffers have to also
</span><br>
<span class="quotelev1">&gt; be registered with the CUDA environment (although currently it is
</span><br>
<span class="quotelev1">&gt; unclear how helpful that is)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By default, the code is disable and has to be configured into the library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   --with-cuda(=DIR)       Build cuda support, optionally adding
</span><br>
<span class="quotelev1">&gt; DIR/include,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                              DIR/lib, and DIR/lib64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   --with-cuda-libdir=DIR  Search for cuda libraries in DIR
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An initial implementation can be viewed at:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://bitbucket.org/rolfv/ompi-trunk-cuda-3">https://bitbucket.org/rolfv/ompi-trunk-cuda-3</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is a list of the files being modified so one can see the scope of
</span><br>
<span class="quotelev1">&gt; the impact.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ svn status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       VERSION
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/opal_convertor.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/opal_datatype_unpack.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/opal_datatype_pack.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/opal_convertor.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/opal_datatype_unpack.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       configure.ac
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/btl/sm/btl_sm.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/btl/sm/Makefile.am
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/btl/tcp/btl_tcp_component.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/btl/tcp/btl_tcp.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/btl/tcp/Makefile.am
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/btl/openib/btl_openib_endpoint.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/btl/openib/btl_openib_mca.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/mpool/sm/Makefile.am
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/mpool/sm/mpool_sm_module.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/mpool/rdma/mpool_rdma_module.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/mpool/rdma/Makefile.am
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/mpool/mpool.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/common/cuda
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/common/cuda/configure.m4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/common/cuda/common_cuda.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/common/cuda/help-mpi-common-cuda.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/common/cuda/Makefile.am
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A       ompi/mca/common/cuda/common_cuda.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/pml/ob1/pml_ob1_component.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/pml/ob1/pml_ob1_sendreq.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/pml/ob1/pml_ob1_recvreq.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/pml/ob1/Makefile.am
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/pml/base/pml_base_sendreq.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       ompi/class/ompi_free_list.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M       ompi/class/ompi_free_list.h
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
<span class="quotelev1">&gt; rvandevaart_at_[hidden] &lt;mailto:rvandevaart_at_[hidden]&gt;
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9168/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9169.php">Ken Lloyd: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9167.php">Rolf vandeVaart: "[OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>In reply to:</strong> <a href="9167.php">Rolf vandeVaart: "[OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9170.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Reply:</strong> <a href="9170.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
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
