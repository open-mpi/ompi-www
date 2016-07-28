<?
$subject_val = "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 16 05:18:12 2015" -->
<!-- isoreceived="20150116101812" -->
<!-- sent="Fri, 16 Jan 2015 11:18:11 +0100" -->
<!-- isosent="20150116101811" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Another Open MPI &amp;lt;-&amp;gt; PSM question (MPI_Isend()/MPI_Cancel())" -->
<!-- id="20150116101811.GI16124_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkU72x04=SxLmhwR9y6NntTuyGJZOJ5WAWQV0bPLm7NH9Q_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-01-16 05:18:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16793.php">Gilles Gouaillardet: "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<li><strong>Previous message:</strong> <a href="16791.php">Gilles Gouaillardet: "Re: [OMPI devel] Failures"</a>
<li><strong>In reply to:</strong> <a href="16788.php">George Bosilca: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See my comment on <a href="https://github.com/open-mpi/ompi/issues/347">https://github.com/open-mpi/ompi/issues/347</a>
<br>
<p>On Thu, Jan 15, 2015 at 05:01:00PM -0500, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Skimming through the PSM code shows that the return values of the PSM
</span><br>
<span class="quotelev1">&gt; functions are handled in most cases. Thus, removing the default error
</span><br>
<span class="quotelev1">&gt; handler might not be such a bad idea.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you experience any trouble running with the version without the default
</span><br>
<span class="quotelev1">&gt; error handler registered?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Jan 15, 2015 at 4:40 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It even says so in the code:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ompi/mca/mtl/psm/mtl_psm.c:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;        /* Default error handling is enabled, errors will not be returned to
</span><br>
<span class="quotelev2">&gt; &gt;          * user.  PSM prints the error and the offending endpoint's
</span><br>
<span class="quotelev2">&gt; &gt; hostname
</span><br>
<span class="quotelev2">&gt; &gt;          * and exits with -1 */
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Disabling the default PSM error handler makes MPI_Cancel() fail
</span><br>
<span class="quotelev2">&gt; &gt; gracefully. But then no error is handled anymore.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                 Adrian
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Jan 15, 2015 at 10:21:05PM +0100, Adrian Reber wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; As PSM on master is still broken I applied it on 1.8.4. Unfortunately it
</span><br>
<span class="quotelev3">&gt; &gt; &gt; does not work. The error is the same as before.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Looking at your patch I would also expect that this is the correct fix
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and I even tried to change ompi_mtl_psm_cancel() to always return
</span><br>
<span class="quotelev3">&gt; &gt; &gt; OMPI_SUCCESS. MPI_Cancel() still fails.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Looking at the PSM code it seems it can directly call exit(-1) and thus
</span><br>
<span class="quotelev3">&gt; &gt; &gt; terminating and never returning to Open MPI. I do not see any debug
</span><br>
<span class="quotelev3">&gt; &gt; &gt; output from Open MPI after &quot;Cannot cancel send requests&quot; from PSM.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;               Adrian
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Thu, Jan 15, 2015 at 01:43:11PM -0500, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;From the MPI standard perspective MPI_Cancel doesn't have to succeed,
</span><br>
<span class="quotelev2">&gt; &gt; it
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; can also gracefully fail. However, the PSM MTL diverges from the MPI
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; standard and if a request cannot be canceled an error is returned.
</span><br>
<span class="quotelev2">&gt; &gt; Here is
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; a patch to fix this issue.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; diff --git a/ompi/mca/mtl/psm/mtl_psm_cancel.c
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; b/ompi/mca/mtl/psm/mtl_psm_cancel
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; index 6da3386..277c761 100644
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --- a/ompi/mca/mtl/psm/mtl_psm_cancel.c
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; +++ b/ompi/mca/mtl/psm/mtl_psm_cancel.c
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; @@ -37,10 +37,8 @@ int ompi_mtl_psm_cancel(struct
</span><br>
<span class="quotelev2">&gt; &gt; mca_mtl_base_module_t*
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; mtl,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      if(PSM_OK == err) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;        mtl_request-&gt;ompi_req-&gt;req_status._cancelled = true;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mtl_psm_request-&gt;super.completion_callback(&amp;mtl_psm_request-&gt;super);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; -      return OMPI_SUCCESS;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; -    } else {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; -      return OMPI_ERROR;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; +    return OMPI_SUCCESS;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    } else if(PSM_MQ_INCOMPLETE == err) {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;      return OMPI_SUCCESS;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;    }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   George.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Thu, Jan 15, 2015 at 1:30 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Doing
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI_Isend()
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; followed by a
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; MPI_Cancel()
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; fails on my PSM based system with 1.8.4 like this:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; n040108:0.1.Cannot cancel send requests (req=0x2b6279787f80)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; n040108:0.0.Cannot cancel send requests (req=0x2b3a3dc92f80)
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; mpirun detected that one or more processes exited with non-zero
</span><br>
<span class="quotelev2">&gt; &gt; status,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; thus causing
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   Process name: [[58364,1],1]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;   Exit code:    255
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Is this something PSM actually cannot do or an Open MPI error?
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;                 Adrian
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16783.php">http://www.open-mpi.org/community/lists/devel/2015/01/16783.php</a>
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16784.php">http://www.open-mpi.org/community/lists/devel/2015/01/16784.php</a>
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
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16786.php">http://www.open-mpi.org/community/lists/devel/2015/01/16786.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16793.php">Gilles Gouaillardet: "Re: [OMPI devel] pthreads (was: Re: RFC: remove --disable-smp-locks)"</a>
<li><strong>Previous message:</strong> <a href="16791.php">Gilles Gouaillardet: "Re: [OMPI devel] Failures"</a>
<li><strong>In reply to:</strong> <a href="16788.php">George Bosilca: "Re: [OMPI devel] Another Open MPI &lt;-&gt; PSM question (MPI_Isend()/MPI_Cancel())"</a>
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
