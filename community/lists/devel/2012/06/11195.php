<?
$subject_val = "Re: [OMPI devel] RFC: add asynchronous copies for large GPU buffers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 27 18:20:23 2012" -->
<!-- isoreceived="20120627222023" -->
<!-- sent="Wed, 27 Jun 2012 16:20:19 -0600" -->
<!-- isosent="20120627222019" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add asynchronous copies for large GPU buffers" -->
<!-- id="20120627222018.GC96871_at_panthera.lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: add asynchronous copies for large GPU buffers<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-27 18:20:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11196.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: add asynchronous copies for large GPU buffers"</a>
<li><strong>Previous message:</strong> <a href="11194.php">Rolf vandeVaart: "[OMPI devel] RFC: add asynchronous copies for large GPU buffers"</a>
<li><strong>In reply to:</strong> <a href="11194.php">Rolf vandeVaart: "[OMPI devel] RFC: add asynchronous copies for large GPU buffers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11196.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: add asynchronous copies for large GPU buffers"</a>
<li><strong>Reply:</strong> <a href="11196.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: add asynchronous copies for large GPU buffers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you make your repository public or add me to the access list?
<br>
<p>-Nathan
<br>
<p>On Wed, Jun 27, 2012 at 03:12:34PM -0700, Rolf vandeVaart wrote:
<br>
<span class="quotelev1">&gt; WHAT: Add support for doing asynchronous copies of GPU memory with larger messages.
</span><br>
<span class="quotelev1">&gt; WHY: Improve performance for sending/receiving of larger GPU messages over IB
</span><br>
<span class="quotelev1">&gt; WHERE: ob1, openib, and convertor code.  All is protected by compiler directives
</span><br>
<span class="quotelev1">&gt;                so no effect on non-CUDA builds.
</span><br>
<span class="quotelev1">&gt; REFERENCE BRANCH: <a href="https://bitbucket.org/rolfv/ompi-trunk-cuda-async">https://bitbucket.org/rolfv/ompi-trunk-cuda-async</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; DETAILS:
</span><br>
<span class="quotelev1">&gt; When sending/receiving GPU memory through IB, all data first passes into host memory.
</span><br>
<span class="quotelev1">&gt; The copy of GPU memory into and out of the host memory can be done asynchronously
</span><br>
<span class="quotelev1">&gt; to improve performance.  This RFC adds that feature for the fragments of larger messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the sending side, the completion function is essentially broken in two.  The first function
</span><br>
<span class="quotelev1">&gt; is called when the copy completes which then initiates the send.  When the send completes,
</span><br>
<span class="quotelev1">&gt; the second function is called.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Likewise, on the receiving side, a callback is called when the fragment arrives which 
</span><br>
<span class="quotelev1">&gt; initiates the copy of the data out of the buffer.  When the copy completes, a second
</span><br>
<span class="quotelev1">&gt; function is called which also calls back into the BTL so it can free resources that
</span><br>
<span class="quotelev1">&gt; were being used.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/opal_datatype_copy.c
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/opal_convertor.c
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/opal_convertor.h
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/opal_datatype_cuda.c
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/opal_datatype_cuda.h
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/opal_datatype_unpack.c
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/opal_datatype_pack.h
</span><br>
<span class="quotelev1">&gt; M       opal/datatype/opal_datatype_unpack.h
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/btl/btl.h
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/btl/openib/btl_openib.c
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/btl/openib/btl_openib.h
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/btl/openib/btl_openib_mca.c
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/pml/ob1/pml_ob1_recvfrag.c
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/pml/ob1/pml_ob1_sendreq.c
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/pml/ob1/pml_ob1_progress.c
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/pml/ob1/pml_ob1_recvreq.c
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/pml/ob1/pml_ob1_cuda.c
</span><br>
<span class="quotelev1">&gt; M       ompi/mca/pml/ob1/pml_ob1_recvreq.h
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11196.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: add asynchronous copies for large GPU buffers"</a>
<li><strong>Previous message:</strong> <a href="11194.php">Rolf vandeVaart: "[OMPI devel] RFC: add asynchronous copies for large GPU buffers"</a>
<li><strong>In reply to:</strong> <a href="11194.php">Rolf vandeVaart: "[OMPI devel] RFC: add asynchronous copies for large GPU buffers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11196.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: add asynchronous copies for large GPU buffers"</a>
<li><strong>Reply:</strong> <a href="11196.php">Rolf vandeVaart: "Re: [OMPI devel] RFC: add asynchronous copies for large GPU buffers"</a>
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
