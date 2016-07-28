<?
$subject_val = "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 13 14:48:28 2011" -->
<!-- isoreceived="20110413184828" -->
<!-- sent="Wed, 13 Apr 2011 11:48:20 -0700" -->
<!-- isosent="20110413184820" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F30188D4E466_at_HQMAIL02.nvidia.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4DA5D697.2090606_at_inria.fr" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-13 14:48:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9171.php">George Bosilca: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9169.php">Ken Lloyd: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>In reply to:</strong> <a href="9168.php">Brice Goglin: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9171.php">George Bosilca: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Reply:</strong> <a href="9171.php">George Bosilca: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[Answering both questions with this email]
<br>
<p>These changes depend on new features in CUDA 4.0.  With CUDA 4.0, there is the concept of Unified Virtual Addresses, so the addresses do not overlap.  They are all unique within the process.  There is an API in the CUDA 4.0 that one can use to query what type of memory an address points to.
<br>
<p>This work does not depend on GPU Direct.  It is making use of the fact that one can malloc memory, register it with IB, and register it with CUDA via the new 4.0 API cuMemHostRegister API.  Then one can copy device memory into this memory.
<br>
<p>Rolf
<br>
<p>From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On Behalf Of Brice Goglin
<br>
Sent: Wednesday, April 13, 2011 1:00 PM
<br>
To: devel_at_[hidden]
<br>
Subject: Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly
<br>
<p>Hello Rolf,
<br>
<p>This &quot;CUDA device memory&quot; isn't memory mapped in the host, right? Then what does its address look like ? When you say &quot;when it is detected that a buffer is CUDA device memory&quot;, if the actual device and host address spaces are different, how do you know that device addresses and usual host addresses will never have the same values ?
<br>
<p>Do you need GPUDirect for &quot;to improve performance, the internal host buffers have to also be registered with the CUDA environment&quot; ?
<br>
<p>Regards,
<br>
Brice
<br>
<p><p><p>Le 13/04/2011 18:47, Rolf vandeVaart a &#233;crit :
<br>
WHAT: Add support to send data directly from CUDA device memory via MPI calls.
<br>
<p>TIMEOUT: April 25, 2011
<br>
<p>DETAILS: When programming in a mixed MPI and CUDA environment, one cannot currently send data directly from CUDA device memory.  The programmer first has to move the data into host memory, and then send it.  On the receiving side, it has to first be received into host memory, and then copied into CUDA device memory.
<br>
<p>This RFC adds the ability to send and receive CUDA device memory directly.
<br>
<p>There are three basic changes being made to add the support.  First, when it is detected that a buffer is CUDA device memory, the protocols that can be used are restricted to the ones that first copy data into internal buffers.  This means that we will not be using the PUT and RGET protocols, just the send and receive ones.  Secondly, rather than using memcpy to move the data into and out of the host buffers, the library has to use a special CUDA copy routine called cuMemcpy.  Lastly, to improve performance, the internal host buffers have to also be registered with the CUDA environment (although currently it is unclear how helpful that is)
<br>
<p>By default, the code is disable and has to be configured into the library.
<br>
&nbsp;&nbsp;--with-cuda(=DIR)       Build cuda support, optionally adding DIR/include,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DIR/lib, and DIR/lib64
<br>
&nbsp;&nbsp;--with-cuda-libdir=DIR  Search for cuda libraries in DIR
<br>
<p>An initial implementation can be viewed at:
<br>
<a href="https://bitbucket.org/rolfv/ompi-trunk-cuda-3">https://bitbucket.org/rolfv/ompi-trunk-cuda-3</a>
<br>
<p>Here is a list of the files being modified so one can see the scope of the impact.
<br>
<p>$ svn status
<br>
M       VERSION
<br>
M       opal/datatype/opal_convertor.h
<br>
M       opal/datatype/opal_datatype_unpack.c
<br>
M       opal/datatype/opal_datatype_pack.h
<br>
M       opal/datatype/opal_convertor.c
<br>
M       opal/datatype/opal_datatype_unpack.h
<br>
M       configure.ac
<br>
M       ompi/mca/btl/sm/btl_sm.c
<br>
M       ompi/mca/btl/sm/Makefile.am
<br>
M       ompi/mca/btl/tcp/btl_tcp_component.c
<br>
M       ompi/mca/btl/tcp/btl_tcp.c
<br>
M       ompi/mca/btl/tcp/Makefile.am
<br>
M       ompi/mca/btl/openib/btl_openib_component.c
<br>
M       ompi/mca/btl/openib/btl_openib_endpoint.c
<br>
M       ompi/mca/btl/openib/btl_openib_mca.c
<br>
M       ompi/mca/mpool/sm/Makefile.am
<br>
M       ompi/mca/mpool/sm/mpool_sm_module.c
<br>
M       ompi/mca/mpool/rdma/mpool_rdma_module.c
<br>
M       ompi/mca/mpool/rdma/Makefile.am
<br>
M       ompi/mca/mpool/mpool.h
<br>
A       ompi/mca/common/cuda
<br>
A       ompi/mca/common/cuda/configure.m4
<br>
A       ompi/mca/common/cuda/common_cuda.c
<br>
A       ompi/mca/common/cuda/help-mpi-common-cuda.txt
<br>
A       ompi/mca/common/cuda/Makefile.am
<br>
A       ompi/mca/common/cuda/common_cuda.h
<br>
M       ompi/mca/pml/ob1/pml_ob1_component.c
<br>
M       ompi/mca/pml/ob1/pml_ob1_sendreq.h
<br>
M       ompi/mca/pml/ob1/pml_ob1_recvreq.h
<br>
M       ompi/mca/pml/ob1/Makefile.am
<br>
M       ompi/mca/pml/base/pml_base_sendreq.h
<br>
M       ompi/class/ompi_free_list.c
<br>
M       ompi/class/ompi_free_list.h
<br>
<p><p>rvandevaart_at_[hidden]&lt;mailto:rvandevaart_at_[hidden]&gt;
<br>
781-275-5358
<br>
<p>________________________________
<br>
This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message.
<br>
________________________________
<br>
<p><p><p><p><p>_______________________________________________
<br>
<p>devel mailing list
<br>
<p>devel_at_[hidden]&lt;mailto:devel_at_[hidden]&gt;
<br>
<p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9170/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9171.php">George Bosilca: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Previous message:</strong> <a href="9169.php">Ken Lloyd: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>In reply to:</strong> <a href="9168.php">Brice Goglin: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9171.php">George Bosilca: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
<li><strong>Reply:</strong> <a href="9171.php">George Bosilca: "Re: [OMPI devel] RFC: Add support to send/receive CUDA device memory directly"</a>
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
