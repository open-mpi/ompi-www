<?
$subject_val = "[OMPI devel] FW: add asynchronous copies for large GPU buffers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 10 09:38:00 2012" -->
<!-- isoreceived="20120710133800" -->
<!-- sent="Tue, 10 Jul 2012 06:37:54 -0700" -->
<!-- isosent="20120710133754" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] FW: add asynchronous copies for large GPU buffers" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E8A543DC9_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F35E86916AEF_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> [OMPI devel] FW: add asynchronous copies for large GPU buffers<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-10 09:37:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11270.php">Jeff Squyres: "[OMPI devel] openib compiler warnings"</a>
<li><strong>Previous message:</strong> <a href="11268.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/06/11194.php">Rolf vandeVaart: "[OMPI devel] RFC: add asynchronous copies for large GPU buffers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Adding a timeout to this RFC.
<br>
<p>TIMEOUT: July 17, 2012
<br>
<p>rvandevaart_at_[hidden]
<br>
781-275-5358
<br>
<p>-----Original Message-----
<br>
From: Rolf vandeVaart 
<br>
Sent: Wednesday, June 27, 2012 6:13 PM
<br>
To: devel_at_[hidden]
<br>
Subject: RFC: add asynchronous copies for large GPU buffers
<br>
<p>WHAT: Add support for doing asynchronous copies of GPU memory with larger messages.
<br>
WHY: Improve performance for sending/receiving of larger GPU messages over IB
<br>
WHERE: ob1, openib, and convertor code.  All is protected by compiler directives
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;so no effect on non-CUDA builds.
<br>
REFERENCE BRANCH: <a href="https://bitbucket.org/rolfv/ompi-trunk-cuda-async">https://bitbucket.org/rolfv/ompi-trunk-cuda-async</a>
<br>
<p>DETAILS:
<br>
When sending/receiving GPU memory through IB, all data first passes into host memory.
<br>
The copy of GPU memory into and out of the host memory can be done asynchronously to improve performance.  This RFC adds that feature for the fragments of larger messages.
<br>
<p>On the sending side, the completion function is essentially broken in two.  The first function is called when the copy completes which then initiates the send.  When the send completes, the second function is called.
<br>
<p>Likewise, on the receiving side, a callback is called when the fragment arrives which initiates the copy of the data out of the buffer.  When the copy completes, a second function is called which also calls back into the BTL so it can free resources that were being used.
<br>
<p>M       opal/datatype/opal_datatype_copy.c
<br>
M       opal/datatype/opal_convertor.c
<br>
M       opal/datatype/opal_convertor.h
<br>
M       opal/datatype/opal_datatype_cuda.c
<br>
M       opal/datatype/opal_datatype_cuda.h
<br>
M       opal/datatype/opal_datatype_unpack.c
<br>
M       opal/datatype/opal_datatype_pack.h
<br>
M       opal/datatype/opal_datatype_unpack.h
<br>
M       ompi/mca/btl/btl.h
<br>
M       ompi/mca/btl/openib/btl_openib_component.c
<br>
M       ompi/mca/btl/openib/btl_openib.c
<br>
M       ompi/mca/btl/openib/btl_openib.h
<br>
M       ompi/mca/btl/openib/btl_openib_mca.c
<br>
M       ompi/mca/pml/ob1/pml_ob1_recvfrag.c
<br>
M       ompi/mca/pml/ob1/pml_ob1_sendreq.c
<br>
M       ompi/mca/pml/ob1/pml_ob1_progress.c
<br>
M       ompi/mca/pml/ob1/pml_ob1_recvreq.c
<br>
M       ompi/mca/pml/ob1/pml_ob1_cuda.c
<br>
M       ompi/mca/pml/ob1/pml_ob1_recvreq.h
<br>
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
<li><strong>Next message:</strong> <a href="11270.php">Jeff Squyres: "[OMPI devel] openib compiler warnings"</a>
<li><strong>Previous message:</strong> <a href="11268.php">Ralph Castain: "Re: [OMPI devel] RFC: enable the use of source in platform files"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/06/11194.php">Rolf vandeVaart: "[OMPI devel] RFC: add asynchronous copies for large GPU buffers"</a>
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
