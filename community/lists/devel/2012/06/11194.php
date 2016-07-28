<?
$subject_val = "[OMPI devel] RFC: add asynchronous copies for large GPU buffers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 27 18:12:40 2012" -->
<!-- isoreceived="20120627221240" -->
<!-- sent="Wed, 27 Jun 2012 15:12:34 -0700" -->
<!-- isosent="20120627221234" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: add asynchronous copies for large GPU buffers" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E86916AEF_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: add asynchronous copies for large GPU buffers<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-27 18:12:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11195.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add asynchronous copies for large GPU buffers"</a>
<li><strong>Previous message:</strong> <a href="11193.php">Josh Hursey: "Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11195.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add asynchronous copies for large GPU buffers"</a>
<li><strong>Reply:</strong> <a href="11195.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add asynchronous copies for large GPU buffers"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/07/11269.php">Rolf vandeVaart: "[OMPI devel] FW: add asynchronous copies for large GPU buffers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Add support for doing asynchronous copies of GPU memory with larger messages.
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
The copy of GPU memory into and out of the host memory can be done asynchronously
<br>
to improve performance.  This RFC adds that feature for the fragments of larger messages.
<br>
<p>On the sending side, the completion function is essentially broken in two.  The first function
<br>
is called when the copy completes which then initiates the send.  When the send completes,
<br>
the second function is called.
<br>
<p>Likewise, on the receiving side, a callback is called when the fragment arrives which 
<br>
initiates the copy of the data out of the buffer.  When the copy completes, a second
<br>
function is called which also calls back into the BTL so it can free resources that
<br>
were being used.
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
<li><strong>Next message:</strong> <a href="11195.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add asynchronous copies for large GPU buffers"</a>
<li><strong>Previous message:</strong> <a href="11193.php">Josh Hursey: "Re: [OMPI devel] Quiet Time on Trunk - ORCA Integration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11195.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add asynchronous copies for large GPU buffers"</a>
<li><strong>Reply:</strong> <a href="11195.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add asynchronous copies for large GPU buffers"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/07/11269.php">Rolf vandeVaart: "[OMPI devel] FW: add asynchronous copies for large GPU buffers"</a>
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
