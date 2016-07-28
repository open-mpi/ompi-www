<?
$subject_val = "Re: [OMPI devel] ibm abort test hangs on one node";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 02:05:00 2014" -->
<!-- isoreceived="20140811060500" -->
<!-- sent="Mon, 11 Aug 2014 14:56:48 +0900" -->
<!-- isosent="20140811055648" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ibm abort test hangs on one node" -->
<!-- id="53E85B20.6000908_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7F60E2B7-B164-4589-B971-84DE5B631741_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ibm abort test hangs on one node<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-11 01:56:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15602.php">Gilles Gouaillardet: "Re: [OMPI devel] errors and warnings with show_help() usage"</a>
<li><strong>Previous message:</strong> <a href="15600.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] build failure with xlc-11.1"</a>
<li><strong>In reply to:</strong> <a href="15560.php">Ralph Castain: "Re: [OMPI devel] ibm abort test hangs on one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15612.php">Ralph Castain: "Re: [OMPI devel] ibm abort test hangs on one node"</a>
<li><strong>Reply:</strong> <a href="15612.php">Ralph Castain: "Re: [OMPI devel] ibm abort test hangs on one node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Ralph !
<br>
<p>this was necessary but not sufficient :
<br>
<p>orte_errmgr_base_abort calls orte_session_dir_finalize at
<br>
errmgr_base_fns.c:219
<br>
that will remove the proc session dir
<br>
then, orte_errmgr_base_abort (indirectly) calls orte_ess_base_app_abort
<br>
at line 227
<br>
<p>first, the proc session dir is removed
<br>
then the &quot;aborted&quot; empty file is created in the previously removed directory
<br>
(and there is no error check, so the failure gets un-noticed)
<br>
as a consequence, the code you added in r32460 do not get executed.
<br>
<p>i commited r32498 to fix this.
<br>
it simply does not call orte_session_dir_finalize in the first place
<br>
(which is sufficient but might not be necessary ...)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/08/09 1:27, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Committed a fix for this in r32460 - see if I got it!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 8, 2014, at 4:02 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Folks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; here is the description of a hang i briefly mentionned a few days ago.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; with the trunk (i did not check 1.8 ...) simply run on one node :
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 --mca btl sm,self ./abort
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (the abort test is taken from the ibm test suite : process 0 call
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Abort while process 1 enters an infinite loop)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; there is a race condition : sometimes it hangs, sometimes it aborts
</span><br>
<span class="quotelev2">&gt;&gt; nicely as expected.
</span><br>
<span class="quotelev2">&gt;&gt; when the hang occurs, both abort processes have exited and mpirun waits
</span><br>
<span class="quotelev2">&gt;&gt; forever
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i made some investigations and i have now a better idea of what happens
</span><br>
<span class="quotelev2">&gt;&gt; (but i am still clueless on how to fix this)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; when process 0 abort, it :
</span><br>
<span class="quotelev2">&gt;&gt; - closes the tcp socket connected to mpirun
</span><br>
<span class="quotelev2">&gt;&gt; - closes the pipe connected to mpirun
</span><br>
<span class="quotelev2">&gt;&gt; - send SIGCHLD to mpirun
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; then on mpirun :
</span><br>
<span class="quotelev2">&gt;&gt; when SIGCHLD is received, the handler basically writes 17 (the signal
</span><br>
<span class="quotelev2">&gt;&gt; number) to a socketpair.
</span><br>
<span class="quotelev2">&gt;&gt; then libevent will return from a poll and here is the race condition,
</span><br>
<span class="quotelev2">&gt;&gt; basically :
</span><br>
<span class="quotelev2">&gt;&gt; if revents is non zero for the three fds (socket, pipe and socketpair)
</span><br>
<span class="quotelev2">&gt;&gt; then the program will abort nicely
</span><br>
<span class="quotelev2">&gt;&gt; if revents is non zero for both socket and pipe but is zero for the
</span><br>
<span class="quotelev2">&gt;&gt; socketpair, then the mpirun will hang
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i digged a bit deeper and found that when the event on the socketpair is
</span><br>
<span class="quotelev2">&gt;&gt; processed, it will end up calling
</span><br>
<span class="quotelev2">&gt;&gt; odls_base_default_wait_local_proc.
</span><br>
<span class="quotelev2">&gt;&gt; if proc-&gt;state is 5 (aka ORTE_PROC_STATE_REGISTERED), then the program
</span><br>
<span class="quotelev2">&gt;&gt; will abort nicely
</span><br>
<span class="quotelev2">&gt;&gt; *but* if proc-&gt;state is 6 (aka ORTE_PROC_STATE_IOF_COMPLETE), then the
</span><br>
<span class="quotelev2">&gt;&gt; program will hang
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; an other way to put this is that
</span><br>
<span class="quotelev2">&gt;&gt; when the program aborts nicely, the call sequence is
</span><br>
<span class="quotelev2">&gt;&gt; odls_base_default_wait_local_proc
</span><br>
<span class="quotelev2">&gt;&gt; proc_errors(vpid=0)
</span><br>
<span class="quotelev2">&gt;&gt; proc_errors(vpid=0)
</span><br>
<span class="quotelev2">&gt;&gt; proc_errors(vpid=1)
</span><br>
<span class="quotelev2">&gt;&gt; proc_errors(vpid=1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; when the program hangs, the call sequence is
</span><br>
<span class="quotelev2">&gt;&gt; proc_errors(vpid=0)
</span><br>
<span class="quotelev2">&gt;&gt; odls_base_default_wait_local_proc
</span><br>
<span class="quotelev2">&gt;&gt; proc_errors(vpid=0)
</span><br>
<span class="quotelev2">&gt;&gt; proc_errors(vpid=1)
</span><br>
<span class="quotelev2">&gt;&gt; proc_errors(vpid=1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i will resume this on Monday unless someone can fix this in the mean
</span><br>
<span class="quotelev2">&gt;&gt; time :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15552.php">http://www.open-mpi.org/community/lists/devel/2014/08/15552.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15560.php">http://www.open-mpi.org/community/lists/devel/2014/08/15560.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15602.php">Gilles Gouaillardet: "Re: [OMPI devel] errors and warnings with show_help() usage"</a>
<li><strong>Previous message:</strong> <a href="15600.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] build failure with xlc-11.1"</a>
<li><strong>In reply to:</strong> <a href="15560.php">Ralph Castain: "Re: [OMPI devel] ibm abort test hangs on one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15612.php">Ralph Castain: "Re: [OMPI devel] ibm abort test hangs on one node"</a>
<li><strong>Reply:</strong> <a href="15612.php">Ralph Castain: "Re: [OMPI devel] ibm abort test hangs on one node"</a>
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
