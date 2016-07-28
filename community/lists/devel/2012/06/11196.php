<?
$subject_val = "Re: [OMPI devel] RFC: add asynchronous copies for large GPU buffers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 27 18:26:48 2012" -->
<!-- isoreceived="20120627222648" -->
<!-- sent="Wed, 27 Jun 2012 15:26:41 -0700" -->
<!-- isosent="20120627222641" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: add asynchronous copies for large GPU buffers" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F35E86A2F09C_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20120627222018.GC96871_at_panthera.lanl.gov" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-27 18:26:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11197.php">Eugene Loh: "[OMPI devel] u_int32_t typo in nbc_internal.h?"</a>
<li><strong>Previous message:</strong> <a href="11195.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add asynchronous copies for large GPU buffers"</a>
<li><strong>In reply to:</strong> <a href="11195.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add asynchronous copies for large GPU buffers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/07/11269.php">Rolf vandeVaart: "[OMPI devel] FW: add asynchronous copies for large GPU buffers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Whoops.  Fixed.
<br>
<p>Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt;On Behalf Of Nathan Hjelm
</span><br>
<span class="quotelev1">&gt;Sent: Wednesday, June 27, 2012 6:20 PM
</span><br>
<span class="quotelev1">&gt;To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;Subject: Re: [OMPI devel] RFC: add asynchronous copies for large GPU
</span><br>
<span class="quotelev1">&gt;buffers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Can you make your repository public or add me to the access list?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Wed, Jun 27, 2012 at 03:12:34PM -0700, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt; WHAT: Add support for doing asynchronous copies of GPU memory with
</span><br>
<span class="quotelev1">&gt;larger messages.
</span><br>
<span class="quotelev2">&gt;&gt; WHY: Improve performance for sending/receiving of larger GPU messages
</span><br>
<span class="quotelev2">&gt;&gt; over IB
</span><br>
<span class="quotelev2">&gt;&gt; WHERE: ob1, openib, and convertor code.  All is protected by compiler
</span><br>
<span class="quotelev1">&gt;directives
</span><br>
<span class="quotelev2">&gt;&gt;                so no effect on non-CUDA builds.
</span><br>
<span class="quotelev2">&gt;&gt; REFERENCE BRANCH: <a href="https://bitbucket.org/rolfv/ompi-trunk-cuda-async">https://bitbucket.org/rolfv/ompi-trunk-cuda-async</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; DETAILS:
</span><br>
<span class="quotelev2">&gt;&gt; When sending/receiving GPU memory through IB, all data first passes into
</span><br>
<span class="quotelev1">&gt;host memory.
</span><br>
<span class="quotelev2">&gt;&gt; The copy of GPU memory into and out of the host memory can be done
</span><br>
<span class="quotelev2">&gt;&gt; asynchronously to improve performance.  This RFC adds that feature for the
</span><br>
<span class="quotelev1">&gt;fragments of larger messages.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On the sending side, the completion function is essentially broken in
</span><br>
<span class="quotelev2">&gt;&gt; two.  The first function is called when the copy completes which then
</span><br>
<span class="quotelev2">&gt;&gt; initiates the send.  When the send completes, the second function is called.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Likewise, on the receiving side, a callback is called when the
</span><br>
<span class="quotelev2">&gt;&gt; fragment arrives which initiates the copy of the data out of the
</span><br>
<span class="quotelev2">&gt;&gt; buffer.  When the copy completes, a second function is called which
</span><br>
<span class="quotelev2">&gt;&gt; also calls back into the BTL so it can free resources that were being used.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; M       opal/datatype/opal_datatype_copy.c
</span><br>
<span class="quotelev2">&gt;&gt; M       opal/datatype/opal_convertor.c
</span><br>
<span class="quotelev2">&gt;&gt; M       opal/datatype/opal_convertor.h
</span><br>
<span class="quotelev2">&gt;&gt; M       opal/datatype/opal_datatype_cuda.c
</span><br>
<span class="quotelev2">&gt;&gt; M       opal/datatype/opal_datatype_cuda.h
</span><br>
<span class="quotelev2">&gt;&gt; M       opal/datatype/opal_datatype_unpack.c
</span><br>
<span class="quotelev2">&gt;&gt; M       opal/datatype/opal_datatype_pack.h
</span><br>
<span class="quotelev2">&gt;&gt; M       opal/datatype/opal_datatype_unpack.h
</span><br>
<span class="quotelev2">&gt;&gt; M       ompi/mca/btl/btl.h
</span><br>
<span class="quotelev2">&gt;&gt; M       ompi/mca/btl/openib/btl_openib_component.c
</span><br>
<span class="quotelev2">&gt;&gt; M       ompi/mca/btl/openib/btl_openib.c
</span><br>
<span class="quotelev2">&gt;&gt; M       ompi/mca/btl/openib/btl_openib.h
</span><br>
<span class="quotelev2">&gt;&gt; M       ompi/mca/btl/openib/btl_openib_mca.c
</span><br>
<span class="quotelev2">&gt;&gt; M       ompi/mca/pml/ob1/pml_ob1_recvfrag.c
</span><br>
<span class="quotelev2">&gt;&gt; M       ompi/mca/pml/ob1/pml_ob1_sendreq.c
</span><br>
<span class="quotelev2">&gt;&gt; M       ompi/mca/pml/ob1/pml_ob1_progress.c
</span><br>
<span class="quotelev2">&gt;&gt; M       ompi/mca/pml/ob1/pml_ob1_recvreq.c
</span><br>
<span class="quotelev2">&gt;&gt; M       ompi/mca/pml/ob1/pml_ob1_cuda.c
</span><br>
<span class="quotelev2">&gt;&gt; M       ompi/mca/pml/ob1/pml_ob1_recvreq.h
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; ------------- This email message is for the sole use of the intended
</span><br>
<span class="quotelev2">&gt;&gt; recipient(s) and may contain confidential information.  Any
</span><br>
<span class="quotelev2">&gt;&gt; unauthorized review, use, disclosure or distribution is prohibited.
</span><br>
<span class="quotelev2">&gt;&gt; If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev2">&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev2">&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; -------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11197.php">Eugene Loh: "[OMPI devel] u_int32_t typo in nbc_internal.h?"</a>
<li><strong>Previous message:</strong> <a href="11195.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add asynchronous copies for large GPU buffers"</a>
<li><strong>In reply to:</strong> <a href="11195.php">Nathan Hjelm: "Re: [OMPI devel] RFC: add asynchronous copies for large GPU buffers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/07/11269.php">Rolf vandeVaart: "[OMPI devel] FW: add asynchronous copies for large GPU buffers"</a>
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
