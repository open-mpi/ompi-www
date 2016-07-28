<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-3792-g92290b9";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  7 13:45:49 2016" -->
<!-- isoreceived="20160407174549" -->
<!-- sent="Thu, 7 Apr 2016 11:45:38 -0600" -->
<!-- isosent="20160407174538" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-3792-g92290b9" -->
<!-- id="20160407174538.GD19143_at_mordor.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51150F44-3043-4A7B-823C-103D248F1F25_at_cisco.com" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-07 13:45:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18741.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-3792-g92290b9"</a>
<li><strong>Previous message:</strong> <a href="18739.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-3792-g92290b9"</a>
<li><strong>In reply to:</strong> <a href="18739.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-3792-g92290b9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18741.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-3792-g92290b9"</a>
<li><strong>Reply:</strong> <a href="18741.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-3792-g92290b9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hah, just caught that as well. Commented on the commit on
<br>
github. Definitely looks wrong.
<br>
<p>-Nathan
<br>
<p>On Thu, Apr 07, 2016 at 05:43:17PM +0000, Dave Goodell (dgoodell) wrote:
<br>
<span class="quotelev1">&gt; [inline]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 7, 2016, at 12:53 PM, gitdub_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This is an automated email from the git hooks/post-receive script. It was
</span><br>
<span class="quotelev2">&gt; &gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev2">&gt; &gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The branch, master has been updated
</span><br>
<span class="quotelev2">&gt; &gt;       via  92290b94e0584271d6459a6ab5923a04125e23be (commit)
</span><br>
<span class="quotelev2">&gt; &gt;      from  7cdf50533cf940258072f70231a4a456fa73d2f8 (commit)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev2">&gt; &gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev2">&gt; &gt; revisions in full, below.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; - Log -----------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; <a href="https://github.com/open-mpi/ompi/commit/92290b94e0584271d6459a6ab5923a04125e23be">https://github.com/open-mpi/ompi/commit/92290b94e0584271d6459a6ab5923a04125e23be</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; commit 92290b94e0584271d6459a6ab5923a04125e23be
</span><br>
<span class="quotelev2">&gt; &gt; Author: Thananon Patinyasakdikul &lt;tpatinya_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date:   Wed Apr 6 14:26:04 2016 -0400
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    Fixed Coverity reports 1358014-1358018 (DEADCODE and CHECK_RETURN)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/ompi/mca/pml/ob1/pml_ob1_recvreq.c b/ompi/mca/pml/ob1/pml_ob1_recvreq.c
</span><br>
<span class="quotelev2">&gt; &gt; index 9d1d402..a912bc3 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/ompi/mca/pml/ob1/pml_ob1_recvreq.c
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/ompi/mca/pml/ob1/pml_ob1_recvreq.c
</span><br>
<span class="quotelev2">&gt; &gt; @@ -106,7 +106,7 @@ static int mca_pml_ob1_recv_request_cancel(struct ompi_request_t* ompi_request,
</span><br>
<span class="quotelev2">&gt; &gt;     /* The rest should be protected behind the match logic lock */
</span><br>
<span class="quotelev2">&gt; &gt;     OB1_MATCHING_LOCK(&amp;ob1_comm-&gt;matching_lock);
</span><br>
<span class="quotelev2">&gt; &gt;     if( true == request-&gt;req_match_received ) { /* way to late to cancel this one */
</span><br>
<span class="quotelev2">&gt; &gt; -        OPAL_THREAD_UNLOCK(&amp;ob1_comm-&gt;matching_lock);
</span><br>
<span class="quotelev2">&gt; &gt; +        OB1_MATCHING_LOCK(&amp;ob1_comm-&gt;matching_lock);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've only taken a cursory look, but this looks very wrong to me.  Shouldn't you be using the &quot;OB1_MATCHING_UNLOCK&quot; macro instead?  Doubly locking the lock will almost certainly lead to sadness.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;         assert( OMPI_ANY_TAG != ompi_request-&gt;req_status.MPI_TAG ); /* not matched isn't it */
</span><br>
<span class="quotelev2">&gt; &gt;         return OMPI_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt; diff --git a/opal/mca/btl/tcp/btl_tcp.h b/opal/mca/btl/tcp/btl_tcp.h
</span><br>
<span class="quotelev2">&gt; &gt; index f2c8917..7e9d726 100644
</span><br>
<span class="quotelev2">&gt; &gt; --- a/opal/mca/btl/tcp/btl_tcp.h
</span><br>
<span class="quotelev2">&gt; &gt; +++ b/opal/mca/btl/tcp/btl_tcp.h
</span><br>
<span class="quotelev2">&gt; &gt; @@ -96,7 +96,7 @@ extern int mca_btl_tcp_progress_thread_trigger;
</span><br>
<span class="quotelev2">&gt; &gt;     do {                                                                \
</span><br>
<span class="quotelev2">&gt; &gt;         if(0 &lt; mca_btl_tcp_progress_thread_trigger) {                   \
</span><br>
<span class="quotelev2">&gt; &gt;             opal_event_t* _event = (opal_event_t*)(event);                  \
</span><br>
<span class="quotelev2">&gt; &gt; -            opal_fd_write( mca_btl_tcp_pipe_to_progress[1], sizeof(opal_event_t*), \
</span><br>
<span class="quotelev2">&gt; &gt; +            (void) opal_fd_write( mca_btl_tcp_pipe_to_progress[1], sizeof(opal_event_t*), \
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Seems better to capture the return value and at least put an assert() on it if it fails, though admittedly things are very screwed up if you overrun the pipe.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Dave
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18739.php">http://www.open-mpi.org/community/lists/devel/2016/04/18739.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18740/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18741.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-3792-g92290b9"</a>
<li><strong>Previous message:</strong> <a href="18739.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-3792-g92290b9"</a>
<li><strong>In reply to:</strong> <a href="18739.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-3792-g92290b9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18741.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-3792-g92290b9"</a>
<li><strong>Reply:</strong> <a href="18741.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-3792-g92290b9"</a>
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
