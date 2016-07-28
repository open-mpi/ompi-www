<?
$subject_val = "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 13 22:32:46 2014" -->
<!-- isoreceived="20140514023246" -->
<!-- sent="Tue, 13 May 2014 22:32:44 -0400" -->
<!-- isosent="20140514023244" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)" -->
<!-- id="CAMJJpkVHz_q-2xwM870rR9=tExPEBox6tR_267h8ijcCM5Kihg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="47C7F3B2-1652-4C96-A74C-F0E38ACECAE3_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-13 22:32:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14789.php">Gilles Gouaillardet: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Previous message:</strong> <a href="14787.php">Ralph Castain: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>In reply to:</strong> <a href="14787.php">Ralph Castain: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14790.php">Paul Hargrove: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Reply:</strong> <a href="14790.php">Paul Hargrove: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I heard multiple references to pthread_cancel being known to have bad
<br>
side effects. Can somebody educate my on this topic please?
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;George.
<br>
<p><p><p>On Tue, May 13, 2014 at 10:25 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; It could be a bug in the software stack, though I wouldn't count on it. Unfortunately, pthread_cancel is known to have bad side effects, and so we avoid its use.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The key here is that the thread must detect that the file descriptor has closed and exit, or use some other method for detecting that it should terminate. We do this in multiple other places in the code, without using pthread_cancel and without hanging. So it is certainly doable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know the specifics of why Nathan's code is having trouble exiting, but I suspect that a simple solution - not involving pthread_cancel - can be readily developed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 13, 2014, at 7:18 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i would like to comment on r31738 :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is no reason to cancel the listening thread. It should die
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automatically when the file descriptor is closed.
</span><br>
<span class="quotelev2">&gt;&gt; i could not agree more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is sufficient to just wait for the thread to exit with pthread join.
</span><br>
<span class="quotelev2">&gt;&gt; unfortunatly, at least in my test environment (an outdated MPSS 2.1) it
</span><br>
<span class="quotelev2">&gt;&gt; is *not* :-(
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this is what i described in #4615
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4615">https://svn.open-mpi.org/trac/ompi/ticket/4615</a>
</span><br>
<span class="quotelev2">&gt;&gt; in which i attached scif_hang.c that evidences that (at least in my
</span><br>
<span class="quotelev2">&gt;&gt; environment)
</span><br>
<span class="quotelev2">&gt;&gt; scif_poll(...) does *not* return after scif_close(...) is closed, and
</span><br>
<span class="quotelev2">&gt;&gt; hence the scif pthread never ends.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this is likely a bug in MPSS and it might have been fixed in earlier
</span><br>
<span class="quotelev2">&gt;&gt; release.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nathan, could you try scif_hang in your environment and report the MPSS
</span><br>
<span class="quotelev2">&gt;&gt; version you are running ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bottom line, and once again, in my test environment, pthread_join (...)
</span><br>
<span class="quotelev2">&gt;&gt; without pthread_cancel(...)
</span><br>
<span class="quotelev2">&gt;&gt; might cause a hang when the btl/scif module is released.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; assuming the bug is in old MPSS and has been fixed in recent releases,
</span><br>
<span class="quotelev2">&gt;&gt; what is the OpenMPI policy ?
</span><br>
<span class="quotelev2">&gt;&gt; a) test the MPSS version and call pthread_cancel() or do *not* call
</span><br>
<span class="quotelev2">&gt;&gt; pthread_join if buggy MPSS is detected ?
</span><br>
<span class="quotelev2">&gt;&gt; b) display an error/warning if a buggy MPSS is detected ?
</span><br>
<span class="quotelev2">&gt;&gt; c) do not call pthread_join at all ? /* SIGSEGV might occur with older
</span><br>
<span class="quotelev2">&gt;&gt; MPSS, it is in MPI_Finalize() so impact is limited */
</span><br>
<span class="quotelev2">&gt;&gt; d) do nothing, let the btl/scif module hang, this is *not* an OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; problem after all ?
</span><br>
<span class="quotelev2">&gt;&gt; e) something else ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14786.php">http://www.open-mpi.org/community/lists/devel/2014/05/14786.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14787.php">http://www.open-mpi.org/community/lists/devel/2014/05/14787.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14789.php">Gilles Gouaillardet: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Previous message:</strong> <a href="14787.php">Ralph Castain: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>In reply to:</strong> <a href="14787.php">Ralph Castain: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14790.php">Paul Hargrove: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Reply:</strong> <a href="14790.php">Paul Hargrove: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
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
