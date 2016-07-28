<?
$subject_val = "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 15 15:28:40 2015" -->
<!-- isoreceived="20150115202840" -->
<!-- sent="Thu, 15 Jan 2015 13:28:39 -0700" -->
<!-- isosent="20150115202839" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Another Open MPI &amp;lt;-&amp;gt; PSM question (MPI_Isend()/MPI_Cancel())" -->
<!-- id="CAF1Cqj5q8qV_hkzpmL6MQbxj3yx0kN3Hidu-LGPY9rR+Q7bMaA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkWQK-_2Wo8BeBpKWJW1vzRxds11VxAKpf+7w2Fis3PixA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-15 15:28:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16786.php">Adrian Reber: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
<li><strong>Previous message:</strong> <a href="16784.php">George Bosilca: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
<li><strong>In reply to:</strong> <a href="16784.php">George Bosilca: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16786.php">Adrian Reber: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks George!
<br>
<p><p>2015-01-15 11:43 GMT-07:00 George Bosilca &lt;bosilca_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; From the MPI standard perspective MPI_Cancel doesn't have to succeed, it
</span><br>
<span class="quotelev1">&gt; can also gracefully fail. However, the PSM MTL diverges from the MPI
</span><br>
<span class="quotelev1">&gt; standard and if a request cannot be canceled an error is returned. Here is
</span><br>
<span class="quotelev1">&gt; a patch to fix this issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mca/mtl/psm/mtl_psm_cancel.c
</span><br>
<span class="quotelev1">&gt; b/ompi/mca/mtl/psm/mtl_psm_cancel
</span><br>
<span class="quotelev1">&gt; index 6da3386..277c761 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/mtl/psm/mtl_psm_cancel.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/mtl/psm/mtl_psm_cancel.c
</span><br>
<span class="quotelev1">&gt; @@ -37,10 +37,8 @@ int ompi_mtl_psm_cancel(struct mca_mtl_base_module_t*
</span><br>
<span class="quotelev1">&gt; mtl,
</span><br>
<span class="quotelev1">&gt;      if(PSM_OK == err) {
</span><br>
<span class="quotelev1">&gt;        mtl_request-&gt;ompi_req-&gt;req_status._cancelled = true;
</span><br>
<span class="quotelev1">&gt;        mtl_psm_request-&gt;super.completion_callback(&amp;mtl_psm_request-&gt;super);
</span><br>
<span class="quotelev1">&gt; -      return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt; -    } else {
</span><br>
<span class="quotelev1">&gt; -      return OMPI_ERROR;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;    } else if(PSM_MQ_INCOMPLETE == err) {
</span><br>
<span class="quotelev1">&gt;      return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 15, 2015 at 1:30 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Doing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Isend()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; followed by a
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Cancel()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; fails on my PSM based system with 1.8.4 like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; n040108:0.1.Cannot cancel send requests (req=0x2b6279787f80)
</span><br>
<span class="quotelev2">&gt;&gt; n040108:0.0.Cannot cancel send requests (req=0x2b3a3dc92f80)
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt;&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev2">&gt;&gt; thus causing
</span><br>
<span class="quotelev2">&gt;&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   Process name: [[58364,1],1]
</span><br>
<span class="quotelev2">&gt;&gt;   Exit code:    255
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this something PSM actually cannot do or an Open MPI error?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 Adrian
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16783.php">http://www.open-mpi.org/community/lists/devel/2015/01/16783.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16784.php">http://www.open-mpi.org/community/lists/devel/2015/01/16784.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16785/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16786.php">Adrian Reber: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
<li><strong>Previous message:</strong> <a href="16784.php">George Bosilca: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
<li><strong>In reply to:</strong> <a href="16784.php">George Bosilca: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16786.php">Adrian Reber: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
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
