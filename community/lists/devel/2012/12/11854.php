<?
$subject_val = "[OMPI devel] RFC: Support for asynchronous copies of GPU buffers over IB";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 17 11:36:44 2012" -->
<!-- isoreceived="20121217163644" -->
<!-- sent="Mon, 17 Dec 2012 08:36:37 -0800" -->
<!-- isosent="20121217163637" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Support for asynchronous copies of GPU buffers over IB" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E9169D7A9_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Support for asynchronous copies of GPU buffers over IB<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-17 11:36:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11855.php">marco atzeri: "[OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<li><strong>Previous message:</strong> <a href="11853.php">Sylwester Arabas: "Re: [OMPI devel] FOSS for scientists devroom at FOSDEM 2013"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[I sent this out in June, but did not commit it.  So resending.  Timeout of Jan 5, 2012.  Note that this does not use the GPU Direct RDMA]
<br>
WHAT: Add support for doing asynchronous copies of GPU memory with larger messages.
<br>
WHY: Improve performance for sending/receiving of larger GPU messages over IB
<br>
WHERE: ob1, openib, and convertor code. All is protected by compiler directives
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;so no effect on non-CUDA builds.
<br>
REFERENCE BRANCH: <a href="https://bitbucket.org/rolfv/ompi-trunk-cuda-async-2">https://bitbucket.org/rolfv/ompi-trunk-cuda-async-2</a>
<br>
DETAILS:
<br>
When sending/receiving GPU memory through IB, all data first passes into host memory.
<br>
The copy of GPU memory into and out of the host memory can be done asynchronously
<br>
to improve performance. This RFC adds that feature for the fragments of larger messages.
<br>
On the sending side, the completion function is essentially broken in two. The first function
<br>
is called when the copy completes which then initiates the send. When the send completes,
<br>
the second function is called.
<br>
Likewise, on the receiving side, a callback is called when the fragment arrives which
<br>
initiates the copy of the data out of the buffer. When the copy completes, a second
<br>
function is called which also calls back into the BTL so it can free resources that
<br>
were being used.
<br>
M opal/datatype/opal_datatype_copy.c
<br>
M opal/datatype/opal_convertor.c
<br>
M opal/datatype/opal_convertor.h
<br>
M opal/datatype/opal_datatype_cuda.c
<br>
M opal/datatype/opal_datatype_cuda.h
<br>
M opal/datatype/opal_datatype_unpack.c
<br>
M opal/datatype/opal_datatype_pack.h
<br>
M opal/datatype/opal_datatype_unpack.h
<br>
M ompi/mca/btl/btl.h
<br>
M ompi/mca/btl/openib/btl_openib_component.c
<br>
M ompi/mca/btl/openib/btl_openib.c
<br>
M ompi/mca/btl/openib/btl_openib.h
<br>
M ompi/mca/btl/openib/btl_openib_mca.c
<br>
M ompi/mca/pml/ob1/pml_ob1_recvfrag.c
<br>
M ompi/mca/pml/ob1/pml_ob1_sendreq.c
<br>
M ompi/mca/pml/ob1/pml_ob1_progress.c
<br>
M ompi/mca/pml/ob1/pml_ob1_recvreq.c
<br>
M ompi/mca/pml/ob1/pml_ob1_cuda.c
<br>
M ompi/mca/pml/ob1/pml_ob1_recvreq.h
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11854/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11855.php">marco atzeri: "[OMPI devel] openmpi-1.7rc5 on cygwin ; results and patches"</a>
<li><strong>Previous message:</strong> <a href="11853.php">Sylwester Arabas: "Re: [OMPI devel] FOSS for scientists devroom at FOSDEM 2013"</a>
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
