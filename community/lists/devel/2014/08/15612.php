<?
$subject_val = "Re: [OMPI devel] ibm abort test hangs on one node";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 09:57:19 2014" -->
<!-- isoreceived="20140811135719" -->
<!-- sent="Mon, 11 Aug 2014 06:56:37 -0700" -->
<!-- isosent="20140811135637" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ibm abort test hangs on one node" -->
<!-- id="10C027E9-BA1F-44A5-8F65-8A41E02BFF60_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53E85B20.6000908_at_iferc.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-11 09:56:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15613.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] errors and warnings with show_help() usage"</a>
<li><strong>Previous message:</strong> <a href="15611.php">Ralph Castain: "Re: [OMPI devel] errors and warnings with show_help() usage"</a>
<li><strong>In reply to:</strong> <a href="15601.php">Gilles Gouaillardet: "Re: [OMPI devel] ibm abort test hangs on one node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good catch! Glad it is now fixed - we can move r32498 across to 1.8.2 as well
<br>
<p><p>On Aug 10, 2014, at 10:56 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Ralph !
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this was necessary but not sufficient :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; orte_errmgr_base_abort calls orte_session_dir_finalize at
</span><br>
<span class="quotelev1">&gt; errmgr_base_fns.c:219
</span><br>
<span class="quotelev1">&gt; that will remove the proc session dir
</span><br>
<span class="quotelev1">&gt; then, orte_errmgr_base_abort (indirectly) calls orte_ess_base_app_abort
</span><br>
<span class="quotelev1">&gt; at line 227
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; first, the proc session dir is removed
</span><br>
<span class="quotelev1">&gt; then the &quot;aborted&quot; empty file is created in the previously removed directory
</span><br>
<span class="quotelev1">&gt; (and there is no error check, so the failure gets un-noticed)
</span><br>
<span class="quotelev1">&gt; as a consequence, the code you added in r32460 do not get executed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i commited r32498 to fix this.
</span><br>
<span class="quotelev1">&gt; it simply does not call orte_session_dir_finalize in the first place
</span><br>
<span class="quotelev1">&gt; (which is sufficient but might not be necessary ...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2014/08/09 1:27, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Committed a fix for this in r32460 - see if I got it!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 8, 2014, at 4:02 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Folks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here is the description of a hang i briefly mentionned a few days ago.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the trunk (i did not check 1.8 ...) simply run on one node :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 2 --mca btl sm,self ./abort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (the abort test is taken from the ibm test suite : process 0 call
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Abort while process 1 enters an infinite loop)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there is a race condition : sometimes it hangs, sometimes it aborts
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nicely as expected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when the hang occurs, both abort processes have exited and mpirun waits
</span><br>
<span class="quotelev3">&gt;&gt;&gt; forever
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i made some investigations and i have now a better idea of what happens
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (but i am still clueless on how to fix this)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when process 0 abort, it :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - closes the tcp socket connected to mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - closes the pipe connected to mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - send SIGCHLD to mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then on mpirun :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when SIGCHLD is received, the handler basically writes 17 (the signal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; number) to a socketpair.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then libevent will return from a poll and here is the race condition,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; basically :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if revents is non zero for the three fds (socket, pipe and socketpair)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then the program will abort nicely
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if revents is non zero for both socket and pipe but is zero for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socketpair, then the mpirun will hang
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i digged a bit deeper and found that when the event on the socketpair is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processed, it will end up calling
</span><br>
<span class="quotelev3">&gt;&gt;&gt; odls_base_default_wait_local_proc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if proc-&gt;state is 5 (aka ORTE_PROC_STATE_REGISTERED), then the program
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will abort nicely
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *but* if proc-&gt;state is 6 (aka ORTE_PROC_STATE_IOF_COMPLETE), then the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program will hang
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an other way to put this is that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when the program aborts nicely, the call sequence is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; odls_base_default_wait_local_proc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proc_errors(vpid=0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proc_errors(vpid=0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proc_errors(vpid=1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proc_errors(vpid=1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when the program hangs, the call sequence is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proc_errors(vpid=0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; odls_base_default_wait_local_proc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proc_errors(vpid=0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proc_errors(vpid=1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; proc_errors(vpid=1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i will resume this on Monday unless someone can fix this in the mean
</span><br>
<span class="quotelev3">&gt;&gt;&gt; time :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
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
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15552.php">http://www.open-mpi.org/community/lists/devel/2014/08/15552.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15560.php">http://www.open-mpi.org/community/lists/devel/2014/08/15560.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15601.php">http://www.open-mpi.org/community/lists/devel/2014/08/15601.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15613.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] errors and warnings with show_help() usage"</a>
<li><strong>Previous message:</strong> <a href="15611.php">Ralph Castain: "Re: [OMPI devel] errors and warnings with show_help() usage"</a>
<li><strong>In reply to:</strong> <a href="15601.php">Gilles Gouaillardet: "Re: [OMPI devel] ibm abort test hangs on one node"</a>
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
