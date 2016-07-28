<?
$subject_val = "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 15 16:40:33 2015" -->
<!-- isoreceived="20150115214033" -->
<!-- sent="Thu, 15 Jan 2015 22:40:32 +0100" -->
<!-- isosent="20150115214032" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Another Open MPI &amp;lt;-&amp;gt; PSM question (MPI_Isend()/MPI_Cancel())" -->
<!-- id="20150115214032.GH16124_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20150115212105.GG16124_at_lisas.de" -->
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
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-15 16:40:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16788.php">George Bosilca: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
<li><strong>Previous message:</strong> <a href="16786.php">Adrian Reber: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
<li><strong>In reply to:</strong> <a href="16786.php">Adrian Reber: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16788.php">George Bosilca: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
<li><strong>Reply:</strong> <a href="16788.php">George Bosilca: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It even says so in the code:
<br>
<p>ompi/mca/mtl/psm/mtl_psm.c:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Default error handling is enabled, errors will not be returned to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* user.  PSM prints the error and the offending endpoint's hostname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* and exits with -1 */
<br>
<p>Disabling the default PSM error handler makes MPI_Cancel() fail
<br>
gracefully. But then no error is handled anymore.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<p>On Thu, Jan 15, 2015 at 10:21:05PM +0100, Adrian Reber wrote:
<br>
<span class="quotelev1">&gt; As PSM on master is still broken I applied it on 1.8.4. Unfortunately it
</span><br>
<span class="quotelev1">&gt; does not work. The error is the same as before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking at your patch I would also expect that this is the correct fix
</span><br>
<span class="quotelev1">&gt; and I even tried to change ompi_mtl_psm_cancel() to always return
</span><br>
<span class="quotelev1">&gt; OMPI_SUCCESS. MPI_Cancel() still fails.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking at the PSM code it seems it can directly call exit(-1) and thus
</span><br>
<span class="quotelev1">&gt; terminating and never returning to Open MPI. I do not see any debug
</span><br>
<span class="quotelev1">&gt; output from Open MPI after &quot;Cannot cancel send requests&quot; from PSM.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		Adrian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 15, 2015 at 01:43:11PM -0500, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;From the MPI standard perspective MPI_Cancel doesn't have to succeed, it
</span><br>
<span class="quotelev2">&gt; &gt; can also gracefully fail. However, the PSM MTL diverges from the MPI
</span><br>
<span class="quotelev2">&gt; &gt; standard and if a request cannot be canceled an error is returned. Here is
</span><br>
<span class="quotelev2">&gt; &gt; a patch to fix this issue.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/mca/mtl/psm/mtl_psm_cancel.c
</span><br>
<span class="quotelev2">&gt; &gt; b/ompi/mca/mtl/psm/mtl_psm_cancel
</span><br>
<span class="quotelev2">&gt; &gt; index 6da3386..277c761 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/mca/mtl/psm/mtl_psm_cancel.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/mca/mtl/psm/mtl_psm_cancel.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -37,10 +37,8 @@ int ompi_mtl_psm_cancel(struct mca_mtl_base_module_t*
</span><br>
<span class="quotelev2">&gt; &gt; mtl,
</span><br>
<span class="quotelev2">&gt; &gt;      if(PSM_OK == err) {
</span><br>
<span class="quotelev2">&gt; &gt;        mtl_request-&gt;ompi_req-&gt;req_status._cancelled = true;
</span><br>
<span class="quotelev2">&gt; &gt;        mtl_psm_request-&gt;super.completion_callback(&amp;mtl_psm_request-&gt;super);
</span><br>
<span class="quotelev2">&gt; &gt; -      return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; -    } else {
</span><br>
<span class="quotelev2">&gt; &gt; -      return OMPI_ERROR;
</span><br>
<span class="quotelev2">&gt; &gt;      }
</span><br>
<span class="quotelev2">&gt; &gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt;    } else if(PSM_MQ_INCOMPLETE == err) {
</span><br>
<span class="quotelev2">&gt; &gt;      return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt;    }
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   George.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Jan 15, 2015 at 1:30 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Doing
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_Isend()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; followed by a
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_Cancel()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; fails on my PSM based system with 1.8.4 like this:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; n040108:0.1.Cannot cancel send requests (req=0x2b6279787f80)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; n040108:0.0.Cannot cancel send requests (req=0x2b3a3dc92f80)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun detected that one or more processes exited with non-zero status,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; thus causing
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Process name: [[58364,1],1]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Exit code:    255
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Is this something PSM actually cannot do or an Open MPI error?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;                 Adrian
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16783.php">http://www.open-mpi.org/community/lists/devel/2015/01/16783.php</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16784.php">http://www.open-mpi.org/community/lists/devel/2015/01/16784.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16786.php">http://www.open-mpi.org/community/lists/devel/2015/01/16786.php</a>
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<p><pre>
-- 
Adrian Reber &lt;adrian_at_[hidden]&gt;            <a href="http://lisas.de/~adrian/">http://lisas.de/~adrian/</a>
C-3PO: 
	Don't call me a mindless philosopher, you overweight
	glob of grease!
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16788.php">George Bosilca: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
<li><strong>Previous message:</strong> <a href="16786.php">Adrian Reber: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
<li><strong>In reply to:</strong> <a href="16786.php">Adrian Reber: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16788.php">George Bosilca: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
<li><strong>Reply:</strong> <a href="16788.php">George Bosilca: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
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
