<?
$subject_val = "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 14 10:45:49 2014" -->
<!-- isoreceived="20140514144549" -->
<!-- sent="Wed, 14 May 2014 08:45:47 -0600" -->
<!-- isosent="20140514144547" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)" -->
<!-- id="20140514144547.GE93343_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5372D25D.4010603_at_iferc.org" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-14 10:45:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14798.php">George Bosilca: "Re: [OMPI devel] opal_free_list_t annoyance"</a>
<li><strong>Previous message:</strong> <a href="14796.php">Rolf vandeVaart: "[OMPI devel] RFC: Add some basic CUDA-aware support to reductions"</a>
<li><strong>In reply to:</strong> <a href="14786.php">Gilles Gouaillardet: "[OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14799.php">Ralph Castain: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Reply:</strong> <a href="14799.php">Ralph Castain: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks like this is a scif bug. From the documentation:
<br>
<p>scif_poll() waits for one of a set of endpoints to become ready to perform an I/O operation; 
<br>
it is syntactically and semantically very similar to poll() . The SCIF functions on which 
<br>
scif_poll() waits are scif_accept(), scif_send(), and scif_recv(). Consult the SCIF 
<br>
API reference manuals for details on scif_poll() usage.
<br>
<p>So, if it is indeed similar to poll() it should wake up when the file
<br>
descriptor is closed.
<br>
<p>Since that is not the case I will look through the documentation and see
<br>
if there is a way other than pthread_cancel.
<br>
<p>-Nathan
<br>
<p>On Wed, May 14, 2014 at 11:18:05AM +0900, Gilles Gouaillardet wrote:
<br>
<span class="quotelev1">&gt; Folks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i would like to comment on r31738 :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; There is no reason to cancel the listening thread. It should die
</span><br>
<span class="quotelev2">&gt; &gt; automatically when the file descriptor is closed.
</span><br>
<span class="quotelev1">&gt; i could not agree more
</span><br>
<span class="quotelev2">&gt; &gt; It is sufficient to just wait for the thread to exit with pthread join.
</span><br>
<span class="quotelev1">&gt; unfortunatly, at least in my test environment (an outdated MPSS 2.1) it
</span><br>
<span class="quotelev1">&gt; is *not* :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this is what i described in #4615
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/4615">https://svn.open-mpi.org/trac/ompi/ticket/4615</a>
</span><br>
<span class="quotelev1">&gt; in which i attached scif_hang.c that evidences that (at least in my
</span><br>
<span class="quotelev1">&gt; environment)
</span><br>
<span class="quotelev1">&gt; scif_poll(...) does *not* return after scif_close(...) is closed, and
</span><br>
<span class="quotelev1">&gt; hence the scif pthread never ends.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this is likely a bug in MPSS and it might have been fixed in earlier
</span><br>
<span class="quotelev1">&gt; release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nathan, could you try scif_hang in your environment and report the MPSS
</span><br>
<span class="quotelev1">&gt; version you are running ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bottom line, and once again, in my test environment, pthread_join (...)
</span><br>
<span class="quotelev1">&gt; without pthread_cancel(...)
</span><br>
<span class="quotelev1">&gt; might cause a hang when the btl/scif module is released.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; assuming the bug is in old MPSS and has been fixed in recent releases,
</span><br>
<span class="quotelev1">&gt; what is the OpenMPI policy ?
</span><br>
<span class="quotelev1">&gt; a) test the MPSS version and call pthread_cancel() or do *not* call
</span><br>
<span class="quotelev1">&gt; pthread_join if buggy MPSS is detected ?
</span><br>
<span class="quotelev1">&gt; b) display an error/warning if a buggy MPSS is detected ?
</span><br>
<span class="quotelev1">&gt; c) do not call pthread_join at all ? /* SIGSEGV might occur with older
</span><br>
<span class="quotelev1">&gt; MPSS, it is in MPI_Finalize() so impact is limited */
</span><br>
<span class="quotelev1">&gt; d) do nothing, let the btl/scif module hang, this is *not* an OpenMPI
</span><br>
<span class="quotelev1">&gt; problem after all ?
</span><br>
<span class="quotelev1">&gt; e) something else ?
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14786.php">http://www.open-mpi.org/community/lists/devel/2014/05/14786.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14797/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14798.php">George Bosilca: "Re: [OMPI devel] opal_free_list_t annoyance"</a>
<li><strong>Previous message:</strong> <a href="14796.php">Rolf vandeVaart: "[OMPI devel] RFC: Add some basic CUDA-aware support to reductions"</a>
<li><strong>In reply to:</strong> <a href="14786.php">Gilles Gouaillardet: "[OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14799.php">Ralph Castain: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<li><strong>Reply:</strong> <a href="14799.php">Ralph Castain: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
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
