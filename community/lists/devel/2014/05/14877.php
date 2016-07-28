<?
$subject_val = "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 21:11:52 2014" -->
<!-- isoreceived="20140528011152" -->
<!-- sent="Wed, 28 May 2014 10:11:50 +0900" -->
<!-- isosent="20140528011150" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite" -->
<!-- id="CAAkFZ5sErgm1B1UbDrSyAdOyXt0-zGhKkRs8Lof0gZMmJVRdEQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="BE4BEA58-677B-4AE2-BBF9-7DB349E2072B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-27 21:11:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14878.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14876.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test	suite"</a>
<li><strong>In reply to:</strong> <a href="14876.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test	suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14878.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14878.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14883.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>in the case of intercomm_create, the children free all the communicators
<br>
and then MPI_Disconnect() and then MPI_Finalize() and exits.
<br>
the parent only MPI_Disconnect() without freeing all the communicators.
<br>
MPI_Finalize() tries to disconnect and communicate with already exited
<br>
processes.
<br>
<p>my understanding is that there are two ways of seeing things :
<br>
a) the &quot;R-way&quot; : the problem is the parent should not try to communicate to
<br>
already exited processes
<br>
b) the &quot;J-way&quot; : the problem is the children should have waited either in
<br>
MPI_Comm_free() or MPI_Finalize()
<br>
<p>i did not investigate the loop_spawn test yet, and will do today.
<br>
<p>as far as i am concerned, i have no opinion on which of a) or b) is the
<br>
correct/most appropriate approach.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On Wed, May 28, 2014 at 9:46 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Since you ignored my response, I'll reiterate and clarify it here. The
</span><br>
<span class="quotelev1">&gt; problem in the case of loop_spawn is that the parent process remains
</span><br>
<span class="quotelev1">&gt; &quot;connected&quot; to children after the child has finalized and died. Hence, when
</span><br>
<span class="quotelev1">&gt; the parent attempts to finalize, it tries to &quot;disconnect&quot; itself from
</span><br>
<span class="quotelev1">&gt; processes that no longer exist - and that is what generates the error
</span><br>
<span class="quotelev1">&gt; message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the issue in that case appears to be that &quot;finalize&quot; is not marking the
</span><br>
<span class="quotelev1">&gt; child process as &quot;disconnected&quot;, thus leaving the parent thinking that it
</span><br>
<span class="quotelev1">&gt; needs to disconnect when it finally ends.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 27, 2014, at 5:33 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Note that MPI says that COMM_DISCONNECT simply disconnects that
</span><br>
<span class="quotelev1">&gt; individual communicator.  It does *not* guarantee that the processes
</span><br>
<span class="quotelev1">&gt; involved will be fully disconnected.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So I think that the freeing of communicators is good app behavior, but
</span><br>
<span class="quotelev1">&gt; it is not required by the MPI spec.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If OMPI is requiring this for correct termination, then something is
</span><br>
<span class="quotelev1">&gt; wrong.  MPI_FINALIZE is supposed to be collective across all connected MPI
</span><br>
<span class="quotelev1">&gt; procs -- and if the parent and spawned procs in this test are still
</span><br>
<span class="quotelev1">&gt; connected (because they have not disconnected all communicators between
</span><br>
<span class="quotelev1">&gt; them), the FINALIZE is supposed to be collective across all of them.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This means that FINALIZE is allowed to block if it needs to, such that
</span><br>
<span class="quotelev1">&gt; OMPI sending control messages to procs that are still &quot;connected&quot; (in the
</span><br>
<span class="quotelev1">&gt; MPI sense) should never cause a race condition.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As such, this sounds like an OMPI bug.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 27, 2014, at 2:27 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Folks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; currently, the dynamic/intercomm_create test from the ibm test suite
</span><br>
<span class="quotelev1">&gt; output the following messages :
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; dpm_base_disconnect_init: error -12 in isend to process 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the root cause it task 0 tries to send messages to already exited tasks.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; one way of seeing things is that this is an application issue :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; task 0 should have MPI_Comm_free'd all its communicator before calling
</span><br>
<span class="quotelev1">&gt; MPI_Comm_disconnect.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; This can be achieved via the attached patch
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; an other way of seeing things is that this is a bug in OpenMPI.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In this case, what would be the the right approach ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - automatically free communicators (if needed) when MPI_Comm_disconnect
</span><br>
<span class="quotelev1">&gt; is invoked ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - simply remove communicators (if needed) from ompi_mpi_communicators
</span><br>
<span class="quotelev1">&gt; when MPI_Comm_disconnect is invoked ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  /* this causes a memory leak, but the application can be seen as
</span><br>
<span class="quotelev1">&gt; responsible of it */
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - other ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks in advance for your feedback,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;intercomm_create.patch&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14847.php">http://www.open-mpi.org/community/lists/devel/2014/05/14847.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14875.php">http://www.open-mpi.org/community/lists/devel/2014/05/14875.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/05/14876.php">http://www.open-mpi.org/community/lists/devel/2014/05/14876.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14877/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14878.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Previous message:</strong> <a href="14876.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test	suite"</a>
<li><strong>In reply to:</strong> <a href="14876.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test	suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14878.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14878.php">Ralph Castain: "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<li><strong>Reply:</strong> <a href="14883.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
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
