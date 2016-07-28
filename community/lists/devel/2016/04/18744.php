<?
$subject_val = "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3792-g92290b9";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  7 14:53:47 2016" -->
<!-- isoreceived="20160407185347" -->
<!-- sent="Thu, 7 Apr 2016 11:53:29 -0700" -->
<!-- isosent="20160407185329" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3792-g92290b9" -->
<!-- id="CAAvDA15Oy_8bM8MpiA3=M5HyZv0wXPSXRS0jB1V=gXfTJ2xJww_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="2CE049EA-B7A0-4AC8-885C-9668E881023B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3792-g92290b9<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-07 14:53:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18745.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3792-g92290b9"</a>
<li><strong>Previous message:</strong> <a href="18743.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3792-g92290b9"</a>
<li><strong>In reply to:</strong> <a href="18743.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3792-g92290b9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18745.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3792-g92290b9"</a>
<li><strong>Reply:</strong> <a href="18745.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3792-g92290b9"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the same spirit as Ralph intended, I want to suggest that code changes
<br>
be *run* before pushing to master.
<br>
If necessary, add temporary debugging output to help determine that your
<br>
changes are reached in testing.
<br>
This can save one the public embarrassment of having a thread like one this
<br>
dedicated to your typos! ;-)
<br>
<p>In this particular instance I suspect that any MPI test program that could
<br>
reach the changed code would have deadlocked.
<br>
<p>-Paul
<br>
<p>On Thu, Apr 7, 2016 at 11:42 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Apologies - didn&#226;&#128;&#153;t mean to make it sound that way. Just wanted to inform a
</span><br>
<span class="quotelev1">&gt; new person on the recommended procedures in case they were unaware of them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 7, 2016, at 11:07 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's not blown this out of proportion, it was nothing more than a typo
</span><br>
<span class="quotelev1">&gt; pinpointed and fixed in a matter of seconds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Apr 7, 2016 at 1:58 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just as a suggestion: please express such changes in the form of a Pull
</span><br>
<span class="quotelev2">&gt;&gt; Request instead of a direct commit to avoid getting such mistakes into the
</span><br>
<span class="quotelev2">&gt;&gt; code base.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I&#226;&#128;&#153;m not advocating it for truly trivial stuff - but changing the
</span><br>
<span class="quotelev2">&gt;&gt; thread_unlock to an OB1 call probably should be given a chance for comment
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Apr 7, 2016, at 10:45 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hah, just caught that as well. Commented on the commit on
</span><br>
<span class="quotelev3">&gt;&gt; &gt; github. Definitely looks wrong.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -Nathan
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Thu, Apr 07, 2016 at 05:43:17PM +0000, Dave Goodell (dgoodell) wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; [inline]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; On Apr 7, 2016, at 12:53 PM, gitdub_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; This is an automated email from the git hooks/post-receive script. It
</span><br>
<span class="quotelev2">&gt;&gt; was
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; generated because a ref change was pushed to the repository containing
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; the project &quot;open-mpi/ompi&quot;.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; The branch, master has been updated
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;      via  92290b94e0584271d6459a6ab5923a04125e23be (commit)
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;     from  7cdf50533cf940258072f70231a4a456fa73d2f8 (commit)
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Those revisions listed above that are new to this repository have
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; not appeared on any other notification email; so we list those
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; revisions in full, below.
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; - Log
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://github.com/open-mpi/ompi/commit/92290b94e0584271d6459a6ab5923a04125e23be">https://github.com/open-mpi/ompi/commit/92290b94e0584271d6459a6ab5923a04125e23be</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; commit 92290b94e0584271d6459a6ab5923a04125e23be
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Author: Thananon Patinyasakdikul &lt;tpatinya_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; Date:   Wed Apr 6 14:26:04 2016 -0400
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;   Fixed Coverity reports 1358014-1358018 (DEADCODE and CHECK_RETURN)
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; diff --git a/ompi/mca/pml/ob1/pml_ob1_recvreq.c
</span><br>
<span class="quotelev2">&gt;&gt; b/ompi/mca/pml/ob1/pml_ob1_recvreq.c
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; index 9d1d402..a912bc3 100644
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; --- a/ompi/mca/pml/ob1/pml_ob1_recvreq.c
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; +++ b/ompi/mca/pml/ob1/pml_ob1_recvreq.c
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; @@ -106,7 +106,7 @@ static int mca_pml_ob1_recv_request_cancel(struct
</span><br>
<span class="quotelev2">&gt;&gt; ompi_request_t* ompi_request,
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;    /* The rest should be protected behind the match logic lock */
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;    OB1_MATCHING_LOCK(&amp;ob1_comm-&gt;matching_lock);
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;    if( true == request-&gt;req_match_received ) { /* way to late to
</span><br>
<span class="quotelev2">&gt;&gt; cancel this one */
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; -        OPAL_THREAD_UNLOCK(&amp;ob1_comm-&gt;matching_lock);
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; +        OB1_MATCHING_LOCK(&amp;ob1_comm-&gt;matching_lock);
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I've only taken a cursory look, but this looks very wrong to me.
</span><br>
<span class="quotelev2">&gt;&gt; Shouldn't you be using the &quot;OB1_MATCHING_UNLOCK&quot; macro instead?  Doubly
</span><br>
<span class="quotelev2">&gt;&gt; locking the lock will almost certainly lead to sadness.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;        assert( OMPI_ANY_TAG != ompi_request-&gt;req_status.MPI_TAG ); /*
</span><br>
<span class="quotelev2">&gt;&gt; not matched isn't it */
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;        return OMPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;    }
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; diff --git a/opal/mca/btl/tcp/btl_tcp.h b/opal/mca/btl/tcp/btl_tcp.h
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; index f2c8917..7e9d726 100644
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; --- a/opal/mca/btl/tcp/btl_tcp.h
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; +++ b/opal/mca/btl/tcp/btl_tcp.h
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; @@ -96,7 +96,7 @@ extern int mca_btl_tcp_progress_thread_trigger;
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;    do {
</span><br>
<span class="quotelev2">&gt;&gt;   \
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;        if(0 &lt; mca_btl_tcp_progress_thread_trigger) {
</span><br>
<span class="quotelev2">&gt;&gt;  \
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt;            opal_event_t* _event = (opal_event_t*)(event);
</span><br>
<span class="quotelev2">&gt;&gt;       \
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; -            opal_fd_write( mca_btl_tcp_pipe_to_progress[1],
</span><br>
<span class="quotelev2">&gt;&gt; sizeof(opal_event_t*), \
</span><br>
<span class="quotelev1">&gt;&gt; &gt;&gt;&gt; +            (void) opal_fd_write( mca_btl_tcp_pipe_to_progress[1],
</span><br>
<span class="quotelev2">&gt;&gt; sizeof(opal_event_t*), \
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Seems better to capture the return value and at least put an assert()
</span><br>
<span class="quotelev2">&gt;&gt; on it if it fails, though admittedly things are very screwed up if you
</span><br>
<span class="quotelev2">&gt;&gt; overrun the pipe.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; -Dave
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18739.php">http://www.open-mpi.org/community/lists/devel/2016/04/18739.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18740.php">http://www.open-mpi.org/community/lists/devel/2016/04/18740.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18741.php">http://www.open-mpi.org/community/lists/devel/2016/04/18741.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18742.php">http://www.open-mpi.org/community/lists/devel/2016/04/18742.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18743.php">http://www.open-mpi.org/community/lists/devel/2016/04/18743.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18744/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18745.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3792-g92290b9"</a>
<li><strong>Previous message:</strong> <a href="18743.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3792-g92290b9"</a>
<li><strong>In reply to:</strong> <a href="18743.php">Ralph Castain: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3792-g92290b9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18745.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3792-g92290b9"</a>
<li><strong>Reply:</strong> <a href="18745.php">George Bosilca: "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-3792-g92290b9"</a>
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
