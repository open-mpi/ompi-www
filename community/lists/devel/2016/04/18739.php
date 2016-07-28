<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-3792-g92290b9";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  7 13:43:48 2016" -->
<!-- isoreceived="20160407174348" -->
<!-- sent="Thu, 7 Apr 2016 17:43:17 +0000" -->
<!-- isosent="20160407174317" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-3792-g92290b9" -->
<!-- id="51150F44-3043-4A7B-823C-103D248F1F25_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20160407165329.91044261781_at_lion.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-3792-g92290b9<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-07 13:43:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18740.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-3792-g92290b9"</a>
<li><strong>Previous message:</strong> <a href="18738.php">Nathan Hjelm: "Re: [OMPI devel] query on atomic operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18740.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-3792-g92290b9"</a>
<li><strong>Reply:</strong> <a href="18740.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-3792-g92290b9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[inline]
<br>
<p>On Apr 7, 2016, at 12:53 PM, gitdub_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev1">&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev1">&gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The branch, master has been updated
</span><br>
<span class="quotelev1">&gt;       via  92290b94e0584271d6459a6ab5923a04125e23be (commit)
</span><br>
<span class="quotelev1">&gt;      from  7cdf50533cf940258072f70231a4a456fa73d2f8 (commit)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev1">&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev1">&gt; revisions in full, below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/ompi/commit/92290b94e0584271d6459a6ab5923a04125e23be">https://github.com/open-mpi/ompi/commit/92290b94e0584271d6459a6ab5923a04125e23be</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; commit 92290b94e0584271d6459a6ab5923a04125e23be
</span><br>
<span class="quotelev1">&gt; Author: Thananon Patinyasakdikul &lt;tpatinya_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Wed Apr 6 14:26:04 2016 -0400
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Fixed Coverity reports 1358014-1358018 (DEADCODE and CHECK_RETURN)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; diff --git a/ompi/mca/pml/ob1/pml_ob1_recvreq.c b/ompi/mca/pml/ob1/pml_ob1_recvreq.c
</span><br>
<span class="quotelev1">&gt; index 9d1d402..a912bc3 100644
</span><br>
<span class="quotelev1">&gt; --- a/ompi/mca/pml/ob1/pml_ob1_recvreq.c
</span><br>
<span class="quotelev1">&gt; +++ b/ompi/mca/pml/ob1/pml_ob1_recvreq.c
</span><br>
<span class="quotelev1">&gt; @@ -106,7 +106,7 @@ static int mca_pml_ob1_recv_request_cancel(struct ompi_request_t* ompi_request,
</span><br>
<span class="quotelev1">&gt;     /* The rest should be protected behind the match logic lock */
</span><br>
<span class="quotelev1">&gt;     OB1_MATCHING_LOCK(&amp;ob1_comm-&gt;matching_lock);
</span><br>
<span class="quotelev1">&gt;     if( true == request-&gt;req_match_received ) { /* way to late to cancel this one */
</span><br>
<span class="quotelev1">&gt; -        OPAL_THREAD_UNLOCK(&amp;ob1_comm-&gt;matching_lock);
</span><br>
<span class="quotelev1">&gt; +        OB1_MATCHING_LOCK(&amp;ob1_comm-&gt;matching_lock);
</span><br>
<p>I've only taken a cursory look, but this looks very wrong to me.  Shouldn't you be using the &quot;OB1_MATCHING_UNLOCK&quot; macro instead?  Doubly locking the lock will almost certainly lead to sadness.
<br>
<p><span class="quotelev1">&gt;         assert( OMPI_ANY_TAG != ompi_request-&gt;req_status.MPI_TAG ); /* not matched isn't it */
</span><br>
<span class="quotelev1">&gt;         return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; diff --git a/opal/mca/btl/tcp/btl_tcp.h b/opal/mca/btl/tcp/btl_tcp.h
</span><br>
<span class="quotelev1">&gt; index f2c8917..7e9d726 100644
</span><br>
<span class="quotelev1">&gt; --- a/opal/mca/btl/tcp/btl_tcp.h
</span><br>
<span class="quotelev1">&gt; +++ b/opal/mca/btl/tcp/btl_tcp.h
</span><br>
<span class="quotelev1">&gt; @@ -96,7 +96,7 @@ extern int mca_btl_tcp_progress_thread_trigger;
</span><br>
<span class="quotelev1">&gt;     do {                                                                \
</span><br>
<span class="quotelev1">&gt;         if(0 &lt; mca_btl_tcp_progress_thread_trigger) {                   \
</span><br>
<span class="quotelev1">&gt;             opal_event_t* _event = (opal_event_t*)(event);                  \
</span><br>
<span class="quotelev1">&gt; -            opal_fd_write( mca_btl_tcp_pipe_to_progress[1], sizeof(opal_event_t*), \
</span><br>
<span class="quotelev1">&gt; +            (void) opal_fd_write( mca_btl_tcp_pipe_to_progress[1], sizeof(opal_event_t*), \
</span><br>
<p>Seems better to capture the return value and at least put an assert() on it if it fails, though admittedly things are very screwed up if you overrun the pipe.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18740.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-3792-g92290b9"</a>
<li><strong>Previous message:</strong> <a href="18738.php">Nathan Hjelm: "Re: [OMPI devel] query on atomic operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18740.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-3792-g92290b9"</a>
<li><strong>Reply:</strong> <a href="18740.php">Nathan Hjelm: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-3792-g92290b9"</a>
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
