<?
$subject_val = "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test	suite";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 20:46:42 2014" -->
<!-- isoreceived="20140528004642" -->
<!-- sent="Tue, 27 May 2014 17:46:38 -0700" -->
<!-- isosent="20140528004638" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test	suite" -->
<!-- id="BE4BEA58-677B-4AE2-BBF9-7DB349E2072B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9E3214BF-B2D3-4E5B-AF08-3C8D72E127AD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test	suite<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-27 20:46:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14877.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14875.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test	suite"</a>
<li><strong>In reply to:</strong> <a href="14875.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test	suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14877.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14877.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since you ignored my response, I'll reiterate and clarify it here. The problem in the case of loop_spawn is that the parent process remains &quot;connected&quot; to children after the child has finalized and died. Hence, when the parent attempts to finalize, it tries to &quot;disconnect&quot; itself from processes that no longer exist - and that is what generates the error message.
<br>
<p>So the issue in that case appears to be that &quot;finalize&quot; is not marking the child process as &quot;disconnected&quot;, thus leaving the parent thinking that it needs to disconnect when it finally ends.
<br>
<p><p>On May 27, 2014, at 5:33 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Note that MPI says that COMM_DISCONNECT simply disconnects that individual communicator.  It does *not* guarantee that the processes involved will be fully disconnected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I think that the freeing of communicators is good app behavior, but it is not required by the MPI spec.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If OMPI is requiring this for correct termination, then something is wrong.  MPI_FINALIZE is supposed to be collective across all connected MPI procs -- and if the parent and spawned procs in this test are still connected (because they have not disconnected all communicators between them), the FINALIZE is supposed to be collective across all of them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This means that FINALIZE is allowed to block if it needs to, such that OMPI sending control messages to procs that are still &quot;connected&quot; (in the MPI sense) should never cause a race condition.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As such, this sounds like an OMPI bug.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 27, 2014, at 2:27 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Folks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; currently, the dynamic/intercomm_create test from the ibm test suite output the following messages :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; dpm_base_disconnect_init: error -12 in isend to process 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; the root cause it task 0 tries to send messages to already exited tasks.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; one way of seeing things is that this is an application issue :
</span><br>
<span class="quotelev2">&gt;&gt; task 0 should have MPI_Comm_free'd all its communicator before calling MPI_Comm_disconnect.
</span><br>
<span class="quotelev2">&gt;&gt; This can be achieved via the attached patch
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; an other way of seeing things is that this is a bug in OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt; In this case, what would be the the right approach ?
</span><br>
<span class="quotelev2">&gt;&gt; - automatically free communicators (if needed) when MPI_Comm_disconnect is invoked ?
</span><br>
<span class="quotelev2">&gt;&gt; - simply remove communicators (if needed) from ompi_mpi_communicators when MPI_Comm_disconnect is invoked ?
</span><br>
<span class="quotelev2">&gt;&gt;  /* this causes a memory leak, but the application can be seen as responsible of it */
</span><br>
<span class="quotelev2">&gt;&gt; - other ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance for your feedback,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; &lt;intercomm_create.patch&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14847.php">http://www.open-mpi.org/community/lists/devel/2014/05/14847.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14875.php">http://www.open-mpi.org/community/lists/devel/2014/05/14875.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14877.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14875.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test	suite"</a>
<li><strong>In reply to:</strong> <a href="14875.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test	suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14877.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14877.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
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
