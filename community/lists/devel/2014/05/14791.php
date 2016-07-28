<?
$subject_val = "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 13 23:45:49 2014" -->
<!-- isoreceived="20140514034549" -->
<!-- sent="Tue, 13 May 2014 20:44:13 -0700" -->
<!-- isosent="20140514034413" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)" -->
<!-- id="86176847-5DFE-4C94-A12A-06FAA9C7FD60_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5372D603.1020503_at_iferc.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-13 23:44:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14792.php">Ralph Castain: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Previous message:</strong> <a href="14790.php">Paul Hargrove: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>In reply to:</strong> <a href="14789.php">Gilles Gouaillardet: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14797.php">Nathan Hjelm: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As I said, this isn't the only thread that faces this issue, and we have resolved it elsewhere - surely we can resolve it here as well in an acceptable manner.
<br>
<p>Nathan?
<br>
<p><p>On May 13, 2014, at 7:33 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; scif_poll(...) is called with an infinite timeout.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a quick fix would be to use a finite timeout (1s ? 10s ? more ?)
</span><br>
<span class="quotelev1">&gt; the obvious drawback is the thread has to wake up every xxx seconds and
</span><br>
<span class="quotelev1">&gt; that would be for
</span><br>
<span class="quotelev1">&gt; nothing 99.9% of the time.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my analysis (see #4615) is the crash occurs when the btl/scif is
</span><br>
<span class="quotelev1">&gt; unloaded from memory (e.g. dlcose()) and
</span><br>
<span class="quotelev1">&gt; the scif_thread is still running.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/05/14 11:25, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It could be a bug in the software stack, though I wouldn't count on it. Unfortunately, pthread_cancel is known to have bad side effects, and so we avoid its use.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The key here is that the thread must detect that the file descriptor has closed and exit, or use some other method for detecting that it should terminate. We do this in multiple other places in the code, without using pthread_cancel and without hanging. So it is certainly doable.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't know the specifics of why Nathan's code is having trouble exiting, but I suspect that a simple solution - not involving pthread_cancel - can be readily developed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 13, 2014, at 7:18 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Folks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i would like to comment on r31738 :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There is no reason to cancel the listening thread. It should die
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; automatically when the file descriptor is closed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i could not agree more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It is sufficient to just wait for the thread to exit with pthread join.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unfortunatly, at least in my test environment (an outdated MPSS 2.1) it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is *not* :-(
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is what i described in #4615
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4615">https://svn.open-mpi.org/trac/ompi/ticket/4615</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in which i attached scif_hang.c that evidences that (at least in my
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scif_poll(...) does *not* return after scif_close(...) is closed, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hence the scif pthread never ends.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this is likely a bug in MPSS and it might have been fixed in earlier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; release.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nathan, could you try scif_hang in your environment and report the MPSS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version you are running ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bottom line, and once again, in my test environment, pthread_join (...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; without pthread_cancel(...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; might cause a hang when the btl/scif module is released.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assuming the bug is in old MPSS and has been fixed in recent releases,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what is the OpenMPI policy ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a) test the MPSS version and call pthread_cancel() or do *not* call
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pthread_join if buggy MPSS is detected ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; b) display an error/warning if a buggy MPSS is detected ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c) do not call pthread_join at all ? /* SIGSEGV might occur with older
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPSS, it is in MPI_Finalize() so impact is limited */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; d) do nothing, let the btl/scif module hang, this is *not* an OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem after all ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; e) something else ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14786.php">http://www.open-mpi.org/community/lists/devel/2014/05/14786.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14787.php">http://www.open-mpi.org/community/lists/devel/2014/05/14787.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14789.php">http://www.open-mpi.org/community/lists/devel/2014/05/14789.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14792.php">Ralph Castain: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Previous message:</strong> <a href="14790.php">Paul Hargrove: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>In reply to:</strong> <a href="14789.php">Gilles Gouaillardet: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14797.php">Nathan Hjelm: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
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
