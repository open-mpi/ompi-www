<?
$subject_val = "Re: [OMPI devel] ibm abort test hangs on one node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  8 12:28:01 2014" -->
<!-- isoreceived="20140808162801" -->
<!-- sent="Fri, 8 Aug 2014 09:27:29 -0700" -->
<!-- isosent="20140808162729" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ibm abort test hangs on one node" -->
<!-- id="7F60E2B7-B164-4589-B971-84DE5B631741_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53E4AE53.2090903_at_iferc.org" -->
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
<strong>Date:</strong> 2014-08-08 12:27:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15561.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI SVN -&gt; Git (github) conversion"</a>
<li><strong>Previous message:</strong> <a href="15559.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>In reply to:</strong> <a href="15552.php">Gilles Gouaillardet: "[OMPI devel] ibm abort test hangs on one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15601.php">Gilles Gouaillardet: "Re: [OMPI devel] ibm abort test hangs on one node"</a>
<li><strong>Reply:</strong> <a href="15601.php">Gilles Gouaillardet: "Re: [OMPI devel] ibm abort test hangs on one node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Committed a fix for this in r32460 - see if I got it!
<br>
<p>On Aug 8, 2014, at 4:02 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; here is the description of a hang i briefly mentionned a few days ago.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with the trunk (i did not check 1.8 ...) simply run on one node :
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 --mca btl sm,self ./abort
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (the abort test is taken from the ibm test suite : process 0 call
</span><br>
<span class="quotelev1">&gt; MPI_Abort while process 1 enters an infinite loop)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; there is a race condition : sometimes it hangs, sometimes it aborts
</span><br>
<span class="quotelev1">&gt; nicely as expected.
</span><br>
<span class="quotelev1">&gt; when the hang occurs, both abort processes have exited and mpirun waits
</span><br>
<span class="quotelev1">&gt; forever
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i made some investigations and i have now a better idea of what happens
</span><br>
<span class="quotelev1">&gt; (but i am still clueless on how to fix this)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when process 0 abort, it :
</span><br>
<span class="quotelev1">&gt; - closes the tcp socket connected to mpirun
</span><br>
<span class="quotelev1">&gt; - closes the pipe connected to mpirun
</span><br>
<span class="quotelev1">&gt; - send SIGCHLD to mpirun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; then on mpirun :
</span><br>
<span class="quotelev1">&gt; when SIGCHLD is received, the handler basically writes 17 (the signal
</span><br>
<span class="quotelev1">&gt; number) to a socketpair.
</span><br>
<span class="quotelev1">&gt; then libevent will return from a poll and here is the race condition,
</span><br>
<span class="quotelev1">&gt; basically :
</span><br>
<span class="quotelev1">&gt; if revents is non zero for the three fds (socket, pipe and socketpair)
</span><br>
<span class="quotelev1">&gt; then the program will abort nicely
</span><br>
<span class="quotelev1">&gt; if revents is non zero for both socket and pipe but is zero for the
</span><br>
<span class="quotelev1">&gt; socketpair, then the mpirun will hang
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i digged a bit deeper and found that when the event on the socketpair is
</span><br>
<span class="quotelev1">&gt; processed, it will end up calling
</span><br>
<span class="quotelev1">&gt; odls_base_default_wait_local_proc.
</span><br>
<span class="quotelev1">&gt; if proc-&gt;state is 5 (aka ORTE_PROC_STATE_REGISTERED), then the program
</span><br>
<span class="quotelev1">&gt; will abort nicely
</span><br>
<span class="quotelev1">&gt; *but* if proc-&gt;state is 6 (aka ORTE_PROC_STATE_IOF_COMPLETE), then the
</span><br>
<span class="quotelev1">&gt; program will hang
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; an other way to put this is that
</span><br>
<span class="quotelev1">&gt; when the program aborts nicely, the call sequence is
</span><br>
<span class="quotelev1">&gt; odls_base_default_wait_local_proc
</span><br>
<span class="quotelev1">&gt; proc_errors(vpid=0)
</span><br>
<span class="quotelev1">&gt; proc_errors(vpid=0)
</span><br>
<span class="quotelev1">&gt; proc_errors(vpid=1)
</span><br>
<span class="quotelev1">&gt; proc_errors(vpid=1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; when the program hangs, the call sequence is
</span><br>
<span class="quotelev1">&gt; proc_errors(vpid=0)
</span><br>
<span class="quotelev1">&gt; odls_base_default_wait_local_proc
</span><br>
<span class="quotelev1">&gt; proc_errors(vpid=0)
</span><br>
<span class="quotelev1">&gt; proc_errors(vpid=1)
</span><br>
<span class="quotelev1">&gt; proc_errors(vpid=1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i will resume this on Monday unless someone can fix this in the mean
</span><br>
<span class="quotelev1">&gt; time :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15552.php">http://www.open-mpi.org/community/lists/devel/2014/08/15552.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15561.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Open MPI SVN -&gt; Git (github) conversion"</a>
<li><strong>Previous message:</strong> <a href="15559.php">Ralph Castain: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>In reply to:</strong> <a href="15552.php">Gilles Gouaillardet: "[OMPI devel] ibm abort test hangs on one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15601.php">Gilles Gouaillardet: "Re: [OMPI devel] ibm abort test hangs on one node"</a>
<li><strong>Reply:</strong> <a href="15601.php">Gilles Gouaillardet: "Re: [OMPI devel] ibm abort test hangs on one node"</a>
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
